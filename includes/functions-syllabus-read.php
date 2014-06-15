<?php

// --- These functions are used to display all the content of an individual syllabus

function output_class_times($link, $classid)
{
	$query = "select classday, starttime, endtime from class_days_times where class_id = '$classid' order by ordr";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	
	while($rows = mysqli_fetch_row($results))
	{
		list($classday, $starttime, $endtime) = $rows;
		
		echo "<p><strong>Day the Class Meets:</strong> $classday<br>\n";
		echo "<strong>Time:</strong> $starttime - $endtime</p>\n";
	}
}

function output_section_number($link, $classid)
{
	$query = "select sectnum from class_details where class_id = '$classid'";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	if($numrows == 1)
	{
		$row = mysqli_fetch_row($results);
		echo $row[0];
	}
}

function output_class_details($link, $classid)
{
	$query = "select materials, methods, tech, hwhrs, officehrs from class_details where class_id = '$classid'";
	$results = mysqli_query($link, $query);
	while($rows = mysqli_fetch_row($results))
	{
		list($materials, $methods, $tech, $hwhrs, $officehrs) = $rows;
		
		echo "<p><strong>Estimated Homework Hours:</strong> $hwhrs<br>\n";
		echo "<strong>Instructor Availability Outside of Class:</strong> $officehrs</p>\n";
		echo "<p class='remove-bottom'><strong>Materials Required for the Course</strong></p>\n";
		echo "$materials";
		echo "<p class='remove-bottom'><strong>Methods of Instruction</strong></p>\n";
		echo "$methods";
		echo "<p class='remove-bottom'><strong>Technology Required</strong></p>\n";
		echo "$tech";
	}
}

function output_evaluation_details($link, $classid)
{
	$query = "select descrip, percent from evalscales where class_id = '$classid' order by ordr";
	$results = mysqli_query($link, $query);
	
	$total = 0;
	
	echo "<table class='display-table'>\n";
	echo "<tr><th>Description</th><th>Percent</th></tr>\n";
	
	while($rows = mysqli_fetch_row($results))
	{
		list($descrip, $percent) = $rows;
		
		echo "<tr>\n";
		echo "<td>$descrip</td>\n";
		echo "<td>$percent &#37</td>\n";
		echo "</tr>";
		
		$total += $percent;
	}
	echo "<tr><td><strong>Total</strong></td><td><strong>$total &#37</strong></td></tr>\n";
	echo "</table>";
}

function ouput_book_details($link, $classid)
{
	$query = "select title, author, publisher, pubdate, isbn, link, booktype from books where class_id = '$classid' order by ordr";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	$booktypes = array('', 'Required Reading', 'Recommended Reading', 'Suggested Reading');
	
	if($numrows > 0)
	{
		while($rows = mysqli_fetch_row($results))
		{
			list($title, $author, $publisher, $pubdate, $isbn, $link, $booktype) = $rows;
			
			echo "<p><strong>$booktypes[$booktype]</strong><br>\n";
			echo "<strong>$title</strong> by $author<br>\n";
			echo "$publisher, &copy $pubdate, ISBN:$isbn<br>\n";
			if($link != '')
			{
				echo "<a href='$link'>book link</a>";
			}
			echo "</p>";
		}
	}
	else { echo "<p>No books listed</p>"; }
}

function ouput_optional_course_details($link, $classid)
{
	$query = "select add_req, focus from class_details where class_id = '$classid'";
	$results = mysqli_query($link, $query);
	
	while($rows = mysqli_fetch_row($results))
	{
		list($add_req, $focus) = $rows;
		
		if($focus != '')
		{
			echo "<p class='remove-bottom'><strong>Course Focus</strong></p>\n";
			echo "$focus\n";
		}
		if($add_req != '')
		{
			echo "<p class='remove-bottom'><strong>Additional Requirements for the Course</strong></p>\n";
			echo "$add_req\n";
		}		
	}
}

function output_additional_competencies($link, $classid)
{
	$query = "select competency from competencies where class_id = '$classid' and type = '1' order by ordr";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	if($numrows > 0)
	{
		echo "<p><strong>Additional Competencies for the Course</strong></p>\n";
		echo "<ul class='disc'>\n";
		while($rows = mysqli_fetch_row($results))
		{
			list($competency) = $rows;
			echo "<li>$competency</li>\n";
		}
		echo "</ul>\n";
	}
}

function output_additional_policies($link, $classid)
{
	$query = "select policy from gradingpolicies where class_id = '$classid' and type = '1' order by ordr";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	if($numrows > 0)
	{
		echo "<p><strong>Additional Grading Policies for the Course</strong></p>\n";
		
		while($rows = mysqli_fetch_row($results))
		{
			list($policy) = $rows;
			echo "$policy";
		}
	}
}

function output_activities($link, $classid)
{
	$query = "select type from classes where id='$classid'";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_row($result);
	$classtype = $row[0];
	
	switch ($classtype)
	{
		case "0": output_full_quarter_class($link, $classid);  break;
		case "1": output_mid_quarter_class($link, $classid);  break;
		default: output_full_quarter_class($link, $classid);
	}
}

function output_full_quarter_class($link, $classid)
{
	$termstart = term_start_date($link, $classid);
	$day = return_day($link, $classid);
	$query = "select meeting, activity from activities where class_id = '$classid' order by meeting";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	if($numrows > 0)
	{
		echo "<h4>Weekly Activities</h4>\n";
		while($rows = mysqli_fetch_row($results))
		{
			list($meeting, $activity) = $rows;
			echo "<div class='frame'>";
			echo "<p><strong>Meeting &#35;";
			echo $meeting. ' ';
			class_date($classid, $termstart, $meeting, $day);
			echo " <span class='alert'>";
			print_holiday($link, $classid, $termstart, $meeting, $day);
			echo "</span>";
			echo "</strong></p>\n";
			echo "$activity\n";
			echo "</div>";
		}
	}

}

function output_mid_quarter_class($link, $classid)
{
	$termstart = term_start_date($link, $classid);
	$startweek = 6;
	$arrayselect = 1;
	$counter = 1;
	
	$day = return_day($link, $classid);
	$query = "select meeting, activity from activities where class_id = '$classid' order by meeting";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	if($numrows > 0)
	{
		echo "<h4>Weekly Activities</h4>\n";
		while($rows = mysqli_fetch_row($results))
		{
			
			
			list($meeting, $activity) = $rows;
			echo "<div class='frame'>";
			echo "<p><strong>Meeting &#35;";
			echo $meeting. ' ';
			class_date($classid, $termstart, $startweek, $day[$arrayselect]);
			echo " <span class='alert'>";
			print_holiday($link, $classid, $termstart, $startweek, $day[$arrayselect]);
			echo "</span>";
			echo "</strong></p>\n";
			echo "$activity\n";
			echo "</div>";
			
			$counter++;
						
			if($counter %2 == 0)
			{
				$startweek++;
				$arrayselect = 0;
			}
			else
			{
				$arrayselect = 1;
			}
		}
	}
}



?>