<?php

function write_file($classid)
{
	$query = "SELECT
	classes.id,
	users.lname,
	terms.term,
	terms.year,
	courses.coursenum
FROM
	classes,
	users,
	terms,
	courses
WHERE
	classes.course_id = courses.id AND
	classes.user_id = users.id AND
	classes.term_id = terms.id AND
	classes.id = '$classid'";

	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		list($classid, $lname, $term, $year, $coursnum) = $row;
		
		$termcodes = array('', 'WI', 'SP', 'SU', 'FA');
		
		$term = $termcodes[$term];
		
		$file = $coursenum . '_' . $lname . '_' . $term . $year . '_id' . $clasid . '.php';

		if($handle = fopen($file, 'w'))
		{
			$content = "here is some content for my file...\n";
			
			fwrite($handle, $content);
			
			fclose($handle);
			echo "file successfully written";
		}
		else
		{
			echo "there was an error writing the file";
		}
	}
}

?>