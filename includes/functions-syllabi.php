<?php

function output_term_list()
{
	$query = "select id, term, year from terms order by year desc, term desc limit 0, 4";
	$result = mysql_query($query);
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	
	while ($row = mysql_fetch_row($result))
	{
		list($id, $term, $year) = $row;
		print "<option value='$id'>$termnames[$term] $year</option>\n";
	}
}

function output_course_select_list()
{
	$query = "select courses.id, coursenum, courses.name, abbrv from courses left join depts on courses.dept = depts.id order by abbrv asc, courses.name asc";
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_row($result))
	{
		list($id, $coursenum, $name, $abbrv) = $row;
		print "<option value='$id'>$abbrv $name $coursenum</option>\n";
	}
}

function add_syllabus()
{
	if(isset($_POST['addsyll']))
	{
		if(!empty($_POST['term']) && !empty($_POST['course']))
		{
			$userid = $_POST['userid'];
			$termid = $_POST['term'];
			$courseid = $_POST['course'];
			
			$query = "insert into classes values('', '$courseid', '$userid', '$termid', '0')";
			//print $query;
			mysql_query($query);
			print "<div class='feedback success'>Syllabus record successfully created.</div>";
		}
		else { print "<div class='feedback error'>ERROR: Both the Term and Course fields are required.</div>"; }
	}
}

function display_user_terms()
{
	$userid = $_SESSION['id'];
	$counter = 1;
	$section_init = 10000000;
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	
	$query = "select classes.id, terms.year, terms.term, courses.name, courses.coursenum, classes.status 
				from classes left join terms on classes.term_id = terms.id 
				left join courses on classes.course_id = courses.id where user_id = '$userid'
				order by terms.year desc, terms.term desc, courses.coursenum asc";
	//print $query;
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows > 0)
	{	
		while($row = mysql_fetch_row($result))
		{
			list($id, $year, $term, $coursename, $coursenum, $status) = $row;
			
			$section = $year.$term;
			
			if($section < $section_init && $section_init != 10000000)
			{
				print "</div>\n";
				print "</div>\n";
				
			}
			
			if($section < $section_init)
			{
				print "<div class='container frame'>\n";
				print "<h2>$termnames[$term] $year</h2>\n";
				print "<div ";
				if($counter < 3) { print "class='opened'>\n"; }
				else { print "class='closed'>\n"; }
				$counter++;
			}
			
			print "<p><a href='index.php?sylledit=$id'>$coursenum $coursename</a></p>\n";
			
			$section_init = $section;
		}
		print "</div>\n";
		print "</div>\n";
	}
}

function syll_info($item, $classid)
{
	$query = "select users.fname, users.lname, users.phone, users.email,courses.id, courses.name, 
	courses.coursenum, classes.status, terms.year, terms.term 
	from classes left join terms on classes.term_id = terms.id 
	left join courses on classes.course_id = courses.id left join users 
	on classes.user_id = users.id where classes.id = '$classid'";
	
	$result = mysql_query($query);
	
	$row = mysql_fetch_row($result);
	list($fname, $lname, $phone, $email, $courseid, $coursename, $coursenum, $statusnum, $year, $termnum) = $row;
	$termnames = array('', 'Winter', 'Spring', 'Summer', 'Fall');
	$statusnames = array('Draft', 'Approved', 'Published');
	$term = $termnames[$termnum];
	$status = $statusnames[$statusnum];
	
	$row = array($fname, $lname, $phone, $email, $courseid, $coursename, $coursenum, $status, $year, $term);
	
	$field_names = array("fname", "lname", "phone", "email", "courseid", "course", "coursenum", "status", "year", "term");
	$syllabus_info = array_combine($field_names, $row);
	$the_item = $syllabus_info[$item];
	return $the_item;
}

function edit_addtl_competencies($id, $type)
{
	$query ="select competency, ordr from competencies where class_id='$id' and type='$type' order by ordr";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows == 0)
	{
		print "<p id='input1' class='clonedInput'>\n";
		print "<label for='comp1'>Competency</label><br />\n";
		print "<input id='comp1' name='comp1' type='text' />\n";
		print "</p>";
	}
	else
	{
		while($row = mysql_fetch_row($result))
		{
			list($competency, $order)=$row;
			print "<p id='input$order' class='clonedInput'>\n";
			print "<label for='comp$order'>Competency</label><br />\n";
			print "<input id='comp$order' name='comp$order' type='text' value='$competency' />\n";
			print "</p>\n";
		}
	}
	print "<p><input type='button' id='addComp' value='add another competency' /></p>\n";
}

function edit_addtn_grade_policies($id, $type)
{	
	$query = "select policy, ordr from gradingpolicies where class_id='$id' and type='$type' order by ordr";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
	if($numrows > 0 )
	{
		while($row = mysql_fetch_row($result))
		{
			list($policy, $order)=$row;
			print "<p id='policyinput$order' class='clonedPolicy'>\n";
			print "<label for='policy$order'>Policy</label><br />\n";
			print "<input id='policy$order' name='policy$order' type='text' class='policyfield' value='$policy' />\n";
			print "</p>\n";
		}
		print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
	}
	
	else
	{
		print "<p id='policyinput1' class='clonedPolicy'>\n";
		print "<label for='policy1'>Policy</label><br />\n";
		print "<input id='policy1' name='policy1' type='text' class='policyfield' />\n";
		print "</p>\n";
		print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
	}
}

function edit_books($id)
{
	$query = "select * from books where class_id = '$id' order by ordr";
	
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	$booktypes = array('Required', 'Recommended', 'Suggested');
	
	if($numrows > 0 )
	{
		while($row = mysql_fetch_row($result))
		{
			list($bookid, $classid, $title, $author, $date, $isbn, $link, $type, $order) = $row;
			print "<p id=book$order class='clonedbook'>\n";
			print "<select name='booktype$order'>\n";
			print "<option value='none'>---</option>\n";
			for ($i=0; $i<3; $i++)
			{
				if($i == $type)
				{
					print "<option value='$i' selected='selected'>$booktypes[$i]</option>\n";
				}
				else
				{
					print "<option value='$i'>$booktypes[$i]</option>\n";
				}
			}
			print "</select><br />\n";
			print "<label for 'bookname$order'>Title</label><br />\n";
			print "<input id='bookname$order' name='bookname$order' type='text' /><br /><br />\n";
			print "<label for 'author$order'>Author</label><br />\n";
			print "<input id='author$order' name='author$order' type='text' /><br /><br />\n";
			print "<label for 'date$order'>Date</label><br />\n";
			print "<input id='date$order' name='date$order' type='text' /><br /><br />\n";
			print "<label for 'isbn$order'>ISBN</label><br />\n";
			print "<input id='isbn$order' name='isbn$order' type='text' /><br /><br />\n";
			print "<label for 'link$order'>Link</label><br />\n";
			print "<input id='link$order' name='link$order' type='text' /><br /><br />\n";
			print "</p>";
		}
	}
	
	else
	{
		print "<p id=book1 class='clonedbook'>\n";
		print "<select name='booktype1'>\n";
			print "<option value='none' selected='selected'>---</option>\n";
			for ($i=0; $i<3; $i++)
			{
				print "<option value='$i'>$booktypes[$i]</option>\n";
			}
			print "</select><br />\n";
		print "<label for 'bookname1'>Title</label><br />\n";
		print "<input id='bookname1' name='bookname1' type='text' /><br /><br />\n";
		print "<label for 'author1'>Author</label><br />\n";
		print "<input id='author1' name='author1' type='text' /><br /><br />\n";
		print "<label for 'date1'>Date</label><br />\n";
		print "<input id='date1' name='date1' type='text' /><br /><br />\n";
		print "<label for 'isbn1'>ISBN</label><br />\n";
		print "<input id='isbn1' name='isbn1' type='text' /><br /><br />\n";
		print "<label for 'link1'>Link</label><br />\n";
		print "<input id='link1' name='link1' type='text' /><br /><br />\n";
		print "</p>";
	}
	print "<p><input type='button' id='addBook' value='add another book' /></p>\n";
}

function term_start_date($classid)
{
	$query ="select terms.startdate from terms left join classes on terms.id = classes.term_id where classes.id = '$classid' ";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		$startdate = $row[0];
		return $startdate;
	}
	else { return NULL; }
}

function class_date($classid, $termstart, $week, $day="")
{
	$week_offset = $week -1;
	
	if(!empty($day))
	{	
		switch ($day)
		{
			case "Monday": $num = 0;  break;
			case "Tuesday": $num = 1;  break;
			case "Wednesday": $num = 2;  break;
			case "Thursday": $num = 3;  break;
			case "Friday": $num = 4;  break;
			case "Saturday": $num = 5;  break;
			case "Sunday": $num = 6;  break;
			default: $num = 0;
		}
		
		$startdate = strtotime ( $num . ' day' , strtotime( $termstart ) ) ;
		$startdate = date( 'Y-m-j' , $startdate );
		
		if($week_offset > 0)
		{
			$weekdate = strtotime ( $week_offset . ' week' , strtotime( $startdate ) ) ;
			$weekdate = date( 'M jS, Y' , $weekdate );
			print $weekdate;
		}
		
		else
		{
			$startdate = date( 'M jS, Y' , strtotime ($startdate) );
			print $startdate;
		}
	}
}


function return_day($classid)
{
	$query="select day from class_details where class_id = '$classid'";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		$day = $row[0];
		return $day;
	}
	else { return NULL; }
}

function return_full_date($classid, $termstart, $week, $day)
{
	$week_offset = $week -1;	
	switch ($day)
	{
		case "Monday": $num = 0;  break;
		case "Tuesday": $num = 1;  break;
		case "Wednesday": $num = 2;  break;
		case "Thursday": $num = 3;  break;
		case "Friday": $num = 4;  break;
		case "Saturday": $num = 5;  break;
		case "Sunday": $num = 6;  break;
		default: $num = 0;
	}
	
	$startdate = strtotime ( $num . ' day' , strtotime( $termstart ) ) ;
	$startdate = date( 'Y-m-j' , $startdate );
	
	if($week_offset > 0)
	{
		$weekdate = strtotime ( $week_offset . ' week' , strtotime( $startdate ) ) ;
		$weekdate = date( 'Y-m-j' , $weekdate );
		return $weekdate;
	}
	
	else
	{
		$startdate = date( 'Y-m-j' , strtotime ($startdate) );
		return $startdate;
	}
}

function print_holiday($classid, $termstart, $week, $day="")
{
	/*print $classid;
	print $termstart;
	print $week;
	print $day;*/
	
	if(!empty($day))
	{
		$date = return_full_date($classid, $termstart, $week, $day);
		//print $date;
		$query = "select name from dates where date = '$date'";
		$result = mysql_query($query);
		$numrows = mysql_num_rows($result);
		
		if($numrows > 0)
		{
			$row = mysql_fetch_row($result);
			$name = $row[0];
			print "$name";
		}
	}
}


?>