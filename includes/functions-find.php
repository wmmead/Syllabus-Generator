<?php

function process_find_form($link)
{
	if( isset( $_POST['findsyll']) )
	{
		$course = $_POST['course'];
		$instructor = $_POST['instructor'];
		
		if( !empty($course) && !empty($instructor) )
		{
			$query = "
SELECT classes.id, class_details.sectnum, users.id, users.lname, terms.term, terms.year, courses.id, courses.coursenum, courses.name, courses.active
FROM classes, class_details, users, terms, courses
WHERE classes.course_id = courses.id
AND classes.user_id = users.id
AND classes.term_id = terms.id
AND classes.id = class_details.class_id 
AND courses.id = '$course'
AND users.id = '$instructor'
AND classes.status =  '2'
ORDER BY terms.year DESC, terms.term DESC";

			$flag = "both";
			display_found_syllabi($link, $query, $flag);

		}
		elseif( !empty($course) )
		{
			$query = "
SELECT classes.id, class_details.sectnum, users.id, users.lname, terms.term, terms.year, courses.id, courses.coursenum, courses.name, courses.active
FROM classes, class_details, users, terms, courses
WHERE classes.course_id = courses.id
AND classes.user_id = users.id
AND classes.term_id = terms.id
AND classes.id = class_details.class_id 
AND courses.id = '$course'
AND classes.status =  '2'
ORDER BY terms.year DESC, terms.term DESC, users.lname";

			$flag = "course";
			display_found_syllabi($link, $query, $flag);
		}
		
		elseif( !empty($instructor) )
		{
			$query ="
SELECT classes.id, class_details.sectnum, users.id, users.lname, terms.term, terms.year, courses.id, courses.coursenum, courses.name, courses.active
FROM classes, class_details, users, terms, courses
WHERE classes.course_id = courses.id
AND classes.user_id = users.id
AND classes.term_id = terms.id
AND classes.id = class_details.class_id 
AND users.id = '$instructor'
AND classes.status =  '2'
ORDER BY terms.year DESC, terms.term DESC, courses.coursenum";

			$flag = "instructor";
			display_found_syllabi($link, $query, $flag);

		}
		else
		{
			print "nothing submitted";
		}
	}
}

function output_find_list_copy_icon($classid, $active)
{
	if($active == 1)
	{
		print "<a href='index.php?syllcopy=$classid' class='ligsymbol' title='copy this syllabus'>&#xe038;</a>";
	}
	else
	{
		print "<span class='ligsymbol inactive' title='course no longer active'>&#xe038;</span>";
	}
}

function display_found_syllabi($link, $query, $flag)
{
	$termcodes = array('', 'WI', 'SP', 'SU', 'FA');
	$termnames = array('', 'Winter', 'Spring', 'Summer', 'Fall');
	$temp_term_year = "temp";
	$counter = 1;
		
		$result = mysqli_query($link, $query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0)
		{
			print "<div>\n <h3>Here are the results of your search...</h3>\n</div>\n";
			print "<div class='frame'>\n";
			
			while($row = mysqli_fetch_row($result))
			{
				list($classid, $sectnum, $userid, $lname, $term, $year, $courseid, $coursenum, $coursename, $active) = $row;
				
				$short_year = substr($year, -2);
				$term_year = $term . "_" . $year;
				
				$file = FULL_ADDRESS . "repository/" . $coursenum . '_' . $lname . '_' . $termcodes[$term] . $short_year . '_' . $sectnum  .  '_id' . $classid . '.php';
				
				if( $term_year != $temp_term_year)
				{
					if($counter != 1) { print "</table>\n"; }
					$counter = 1;
					print "<h4>$termnames[$term] $year</h4>\n";
					print "<table class='find-results'>\n";
					print "<tr>";
					print "<td class='syll-icon'>";
					print "<a href='$file' title='download word file'><img src='images/page_word.png' alt='word file download icon' /></a>\n";
					print "<a href='index.php?sylledit=$classid' title='view syllabus online'><img src='images/page_world.png' alt='view syllabus online icon' /></a>\n";
					output_find_list_copy_icon($classid, $active);
					print "</td>";
					print "<td class='syll-details'>";
					print "<p>$coursenum $coursename - $lname</p>";
					print "</td>";
					print "</tr>\n";
				}
				else
				{
					print "<tr>";
					print "<td class='syll-icon'>\n";
					print "<a href='$file' title='download word file'><img src='images/page_word.png' alt='word file download icon' /></a>\n";
					print "<a href='index.php?sylledit=$classid' title='view syllabus online'><img src='images/page_world.png' alt='view syllabus online icon' /></a>\n";
					output_find_list_copy_icon($classid, $active);
					print "</td>";
					print "<td class='syll-details'>";
					print "<p>$coursenum $coursename - $lname</p>";
					print "</td>";
					print "</tr>\n";
				}
				
				$counter++;
				$temp_term_year = $term . "_" . $year;
			}
			
			print "</table>\n";
		}
		
		else
		{
			print "<h3>Sorry, I couldn't find anything that matches that criteria. Try again!</h3>\n";
		}
	
}


?>