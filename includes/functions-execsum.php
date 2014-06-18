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
				
				$query = "update classes set exec_sum = '$priv_pub' where id = '$class_id'";
				
				mysqli_query($link, $query);
			}
		}
	}
}




?>