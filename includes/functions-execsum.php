<?php

function generate_exec_sum_select_list($link)
{
	$user_id = $_SESSION['id'];
	$term_codes = array('', 'WI', 'SP', 'SU', 'FA' );
	
	$query = "SELECT
	classes.id,
	terms.term,
	terms.year,
	courses.coursenum,
	courses.name
FROM
	classes classes,
	terms terms,
	class_details class_details,
	courses courses
WHERE
	classes.id = class_details.class_id AND
	classes.course_id = courses.id AND
	classes.term_id = terms.id AND
	classes.user_id = '$user_id' AND
	classes.status = 2 AND
	classes.exec_sum = 0
order by terms.year desc, terms.term desc";

	$result = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($result);
	
	if( $numrows > 0 )
	{
		print "<select name='courseselect'>";
		print "<option value=''>Please Select A Class</option>";
		while( $row = mysqli_fetch_row($result) )
		{
			list($class_id, $term_num, $term_yr, $coursenum, $coursename) = $row;
			$the_term = $term_codes[$term_num];
			print "<option value='$class_id'>$the_term $term_yr $coursenum $coursename</option>";
		}
		print "</select>";
		print "<input type='submit' name='create-exec-sum' value='Create Executive Summary'>";
	}
	else
	{
		print "<p>You don't have any classes available.</p>";
	}
}

function get_class_id()
{
	if( isset($_POST['courseselect']) )
	{
		$class_id = $_POST['courseselect'];
		return $class_id;
	}
}

function class_details($link, $item, $class_id)
{
	$term_names = array('', 'Winter', 'Spring', 'Summer', 'Fall');
	
	$query="SELECT
	classes.id,
	courses.coursenum,
	courses.name,
	courses.description,
	terms.term,
	terms.year
FROM
	classes classes,
	courses courses,
	terms terms
WHERE
	classes.course_id = courses.id AND
	classes.term_id = terms.id AND
	classes.id = '$class_id'";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_row($result);
	list($class_id, $coursenum, $coursename, $coursedescript, $termnum, $year) = $row;
	$term = $term_names[$termnum];
	
	$row = array($class_id, $coursenum, $coursename, $coursedescript, $term, $year);
	
	$field_names = array("class_id", "coursenum", "course", "description", "term", "year");
	$syllabus_info = array_combine($field_names, $row);
	$the_item = $syllabus_info[$item];
	return $the_item;
	
}

function add_exec_summary($link)
{
	if( isset($_POST['add-summary']) )
	{
		if( !empty( $_POST['summary'] ) || 
		!empty( $_POST['strengths'] ) || 
		!empty( $_POST['challenges'] )|| 
		!empty( $_POST['grades']))
		{
			$priv_pub = mysql_prep($link, $_POST['priv_pub']);
			$class_id = mysql_prep($link, $_POST['classid']);
			$summary = mysql_prep($link, $_POST['summary']);
			$strengths = mysql_prep($link, $_POST['strengths']);
			$challenges = mysql_prep($link, $_POST['challenges']);
			$grades = mysql_prep($link, $_POST['grades']);
			
			$query = "select count(id) from classes where id = '$class_id' and exec_sum > 0";
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_row($result);
			
			if( $row[0] == 0 )
			{
				$query = "insert into exec_sum values('', '$class_id', '$priv_pub', '$summary', 
				'$strengths', '$challenges', '$grades')";
				mysqli_query($link, $query);
				
				$lastid = mysqli_insert_id($link);
				
				$query = "update classes set exec_sum = '$priv_pub' where id = '$class_id'";
				mysqli_query($link, $query);
				
				email_exec_summary($link, $lastid);
			}
		}
	}
}

function email_exec_summary($link, $id)
{
	if( isset( $_POST['email-summary'] ) )
	{
		if( $_POST['email-summary'] != '' )
		{
			$raw_emails = mysql_prep($link, $_POST['email-summary']);
			$emails = explode(',', $raw_emails);
			$trimmed_emails = array_map('trim', $emails);
			
			$query = "SELECT
			exec_sum.id,
			exec_sum.summary_txt,
			exec_sum.strengths_txt,
			exec_sum.challenges_txt,
			exec_sum.grades_txt,
				courses.coursenum,
				courses.name,
				terms.term,
				terms.year,
				users.fname,
				users.lname,
				users.email
			FROM
				exec_sum,
				classes,
				courses,
				terms,
				users
			WHERE
			exec_sum.class_id = classes.id AND
				classes.course_id = courses.id AND
				classes.user_id = users.id AND
				classes.term_id = terms.id AND
			exec_sum.id = '$id'";
			
		$result = mysqli_query($link, $query);
		$num_rows = mysqli_num_rows($result);
		
		if( $num_rows == 1 )
		{
			$row = mysqli_fetch_row($result);
			list($exec_sum_id, $summary_txt, $strengths_txt, $challenges_txt, $grades_txt, 
			$coursenum, $course, $term, $year, $fname, $lname, $email) = $row;
			
			$term_names = array('', 'Winter', 'Spring', 'Summer', 'Fall');
			$full_term = $term_names[$term];
			
			$subject = "Excutive Summary from the Syllabus Generator";
			
			$message = "<html><body>";
			
			$message .= "
<h3>Executive Summary for $coursenum &mdash; $course</h3>
<p><strong>Term:</strong> $full_term $year</p>
<p><strong>Taught by:</strong> $fname $lname</p>

";
			if($summary_txt != '')
			{
				$message .= "
<h3>Summary:</h3>
$summary_txt

";
			}
			
			if($strengths_txt != '')
			{
				$message .= "
<h3>Strengths:</h3>
$strengths_txt

";
			}
			
			if($challenges_txt != '')
			{
				$message .= "
<h3>Challenges:</h3>
$challenges_txt

";
			}
			
			if($grades_txt != '')
			{
				$message .= "
<h3>Grades:</h3>
$grades_txt

";
			}
			
				$message .= "</body></html>";
			
			foreach($trimmed_emails as $email_address)
			{
				if( preg_match(RE_EMAIL, $email_address) )
				{
					email_user($email_address, $subject, $message, $email);
				}
			}
			
		}//end if one row
	
		}//end if empty
	}//end if isset
}// end function




?>