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
			$classtype = $_POST['classtype'];
			
			$query = "insert into classes values('', '$courseid', '$userid', '$termid', '$classtype', '0')";
			//print $query;
			mysql_query($query);
			
			$lastid = mysql_insert_id();
			
			switch ($classtype)
			{
				case "0": $meetings = 11;  break;
				case "1": $meetings = 11;  break;
				default: $meetings = 11;
			}
			
			for($i=0; $i<$meetings; $i++)
			{
				$counter = $i+1;
				$query = "insert into activities values('', '$lastid', '$counter', '' )";
				mysql_query($query);
			}
			
			print "<div class='feedback success'>Syllabus record successfully created.</div>";
		}
		else { print "<div class='feedback error'>ERROR: Term, Course, and Class type fields are required.</div>"; }
	}
}

function display_user_terms()
{
	$userid = $_SESSION['id'];
	$counter = 1;
	$section_init = 10000000;
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	$status = array("Draft", "Review", "Approved");
	
	$query = "select classes.id, terms.year, terms.term, courses.name, courses.coursenum, classes.status 
				from classes left join terms on classes.term_id = terms.id 
				left join courses on classes.course_id = courses.id where user_id = '$userid'
				order by terms.year desc, terms.term desc, courses.coursenum asc";

	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows > 0)
	{	
		while($row = mysql_fetch_row($result))
		{
			list($id, $year, $term, $coursename, $coursenum, $statusnum) = $row;
			
			$section = $year.$term;
			
			if($section < $section_init && $section_init != 10000000)
			{
				print "</div>\n";
				print "</div>\n";
				
			}
			
			if($section < $section_init)
			{
				print "<div class='frame'>\n";
				print "<h3 class='remove-bottom'>$termnames[$term] $year</h3>\n";
				print "<div ";
				if($counter < 3) { print "class='opened'>\n"; }
				else { print "class='closed'>\n"; }
				$counter++;
			}
			
			print "<p><a href='index.php?sylledit=$id'>$coursenum $coursename</a> <span class='status-$statusnum'>[$status[$statusnum]]</span></p>\n";
			
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
	$statusnames = array('Draft', 'Review', 'Approved', 'Published');
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
		print "<label for='comp1'>Competency</label>\n";
		print "<input id='comp1' name='comp1' type='text' />\n";
		print "</p>";
	}
	else
	{
		while($row = mysql_fetch_row($result))
		{
			list($competency, $order)=$row;
			print "<p id='input$order' class='clonedInput'>\n";
			print "<label for='comp$order'>Competency</label>\n";
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
			print "<label for='policy$order'>Policy</label>\n";
			print "<input id='policy$order' name='policy$order' type='text' class='policyfield' value='$policy' />\n";
			print "</p>\n";
		}
		print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
	}
	
	else
	{
		print "<p id='policyinput1' class='clonedPolicy'>\n";
		print "<label for='policy1'>Policy</label>\n";
		print "<input id='policy1' name='policy1' type='text' class='policyfield' />\n";
		print "</p>\n";
		print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
	}
}

function edit_meeting_times($classid)
{
	$query = "select type from classes where id = '$classid'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$classtype = $row[0];
	
	switch($classtype)
	{
		case "0": include('syllabi/once-per-week.php');  break;
		case "1": include('syllabi/twice-per-week.php');  break;
		default: include('syllabi/once-per-week.php');
	}
	
}

function display_activity_form($classid)
{
	$query = "select type from classes where id = '$classid'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$classtype = $row[0];
	
	switch($classtype)
	{
		case "0": include('syllabi/activities-once-per-week.php');  break;
		case "1": include('syllabi/activities-twice-per-week.php');  break;
		default: include('syllabi/activities-once-per-week.php');
	}
}

function edit_eval_process($id)
{
	$query = "select descrip, percent, ordr from evalscales where class_id='$id' order by ordr";
	
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
	if($numrows > 0)
	{
		while($row = mysql_fetch_row($result))
		{
			list($description, $percent, $order) = $row;
			print "<p id='eval$order' class='clonedeval'>";
			print "<input type='text' value='$description' name='desc$order' id='desc$order' class='description' />";
			print "<input type='text' value='$percent' name='perc$order' id='perc$order' class='percent' /><span style='float:left;display:block;padding:5px;'>%</span>";
			print "</p>\n";
		}
		print "<p><input type='button' id='addEval' value='add an evaluation item' /></p>\n";
	}
	else
	{
		print "<p id='eval1' class='clonedeval'>";
		print "<input type='text' name='desc1' id='desc1' class='description' />";
		print "<input type='text' name='perc1' id='perc1' class='percent' /><span style='float:left;display:block;padding:10px 0;'>%</span>";
		print "</p>\n";
		print "<p><input type='button' id='addEval' value='add an evaluation item' /></p>\n";
	}
}

function edit_books($id)
{
	$query = "select * from books where class_id = '$id' order by ordr";
	
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	$booktypes = array('', 'Required', 'Recommended', 'Suggested');
	
	if($numrows > 0 )
	{
		while($row = mysql_fetch_row($result))
		{
			list($bookid, $classid, $title, $author, $publisher, $date, $isbn, $link, $type, $order) = $row;
			print "<p id=book$order class='clonedbook frame'>\n";
			print "<label>Type of book</label>\n";
			print "<select name='booktype$order' class='booktype'>\n";
			print "<option value='0'>---</option>\n";
			for ($i=1; $i<4; $i++)
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
			print "</select>\n";
			print "<label for='bookname$order' class='lableblock titlelabel'>Title</label>";
			print "<input id='bookname$order' name='bookname$order' type='text' class='long title' value='$title' />\n";
			print "<label for='author$order' class='lableblock authorlabel'>Author</label>";
			print "<input id='author$order' name='author$order' type='text'  class='long author' value='$author' />\n";
			print "<label for='pub$order' class='lableblock publabel'>Publisher</label>";
			print "<input id='pub$order' name='pub$order' type='text'  class='long publisher' value='$publisher' />\n";
			print "<label for='date$order' class='lableblock datetitle'>Date</label>";
			print "<input id='date$order' name='date$order' type='text' class='short date' value='$date' />\n";
			print "<label for='isbn$order' class='lableblock noclear isbntitle'>ISBN</label>";
			print "<input id='isbn$order' name='isbn$order' type='text' class='short isbn' value='$isbn' />\n";
			print "<label for='link$order' class='lableblock linktitle'>Link</label>";
			print "<input id='link$order' name='link$order' type='text' class='long link' value='$link' />\n";
			print "</p>";
		}
	}
	
	else
	{
		print "<p id=book1 class='clonedbook frame'>\n";
		print "<label>Type of book</label>\n";
		print "<select name='booktype1' class='booktype'>\n";
			print "<option value='0' selected='selected'>---</option>\n";
			for ($i=1; $i<4; $i++)
			{
				print "<option value='$i'>$booktypes[$i]</option>\n";
			}
			print "</select>\n";
		print "<label for='bookname1' class='lableblock titlelabel'>Title</label>";
		print "<input id='bookname1' name='bookname1' type='text' class='long title' />\n";
		print "<label for='author1' class='lableblock authorlabel'>Author</label>";
		print "<input id='author1' name='author1' type='text' class='long author' />\n";
		print "<label for='pub1' class='lableblock publabel'>Publisher</label>";
		print "<input id='pub1' name='pub1' type='text' class='long publisher' />\n";
		print "<label for='date1' class='lableblock datetitle'>Date</label>";
		print "<input id='date1' name='date1' type='text' class='short date' />";
		print "<label for='isbn1' class='lableblock noclear isbntitle'>ISBN</label>";
		print "<input id='isbn1' name='isbn1' type='text' class='short isbn' />\n";
		print "<label for='link1' class='lableblock linktitle'>Link</label>";
		print "<input id='link1' name='link1' type='text' class='long link' />\n";
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

function mid_term_start_date($classid)
{
	$query ="select terms.startdate from terms left join classes on terms.id = classes.term_id where classes.id = '$classid' ";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		$startdate = $row[0];
		$startdate = strtotime ( '5 week' , strtotime( $startdate ) );
		$startdate = date( 'Y-m-j' , $startdate );
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

function return_class_date($classid, $termstart, $week, $day="")
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
			return $weekdate;
		}
		
		else
		{
			$startdate = date( 'M jS, Y' , strtotime ($startdate) );
			return $startdate;
		}
	}
}



function return_day($classid)
{
	$query="select classday from class_days_times where class_id = '$classid'";
	//print $query;
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		$day = $row[0];
		return $day;
	}
	elseif($numrows == 2)
	{
		$twodays = array();
		while($row = mysql_fetch_row($result))
		{
			$day = $row[0];
			array_push($twodays, $day);
		}
		return $twodays;
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
	if(!empty($day))
	{
		$date = return_full_date($classid, $termstart, $week, $day);
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

/***************** Process Syllabus Form functions *******************/

function process_class_times($num)
{
	$classid = $_POST['classid'];
	
	switch ($num)
	{
		case "1": $day = $_POST["day1"]; $start = $_POST["timestart1"]; $end = $_POST["timeend1"]; break;
		case "2": $day = $_POST["day2"]; $start = $_POST["timestart2"]; $end = $_POST["timeend2"]; break;
		default: $day = $_POST["day1"]; $start = $_POST["timestart1"]; $end = $_POST["timeend1"];
	}
	
	$query = "select classday, starttime, endtime from class_days_times where class_id = '$classid' and ordr = '$num'";
	//print $query . "<br /><br />";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 0)
	{
		$query = "insert into class_days_times values('', '$classid', '$day', '$start', '$end', '$num')";
		mysql_query($query);
	}
	else
	{
		if($numrows == 1)
		{
			$row = mysql_fetch_row($results);
			list($storedday, $storedstart, $storedend) = $row;
			
			if($day != $storedday || $start != $storedstart || $end != $storedend)
			{
				$query = "update class_days_times set classday='$day', starttime='$start', 
				endtime='$end' where class_id='$classid' and ordr='$num'";
				mysql_query($query);
			}
		}
	}
}

function process_class_details()
{
	$classid = $_POST['classid'];
	$hwhrs = mysql_prep($_POST['hwhrs']);
	$officehrs = mysql_prep($_POST['officehrs']);
	$materials = mysql_prep($_POST['materials']);
	$methods = mysql_prep($_POST['methods']);
	$tech = mysql_prep($_POST['tech']);
	$focus = mysql_prep($_POST['focus']);
	$additional = mysql_prep($_POST['additional']);
	
	$hwhrslength = strlen($hwhrs);
	$officehrslength = strlen($officehrs);
	
	if($hwhrslength > 254){ $hwhrs = cut_long_strings($hwhrs, 254);}
	if($officehrs > 254){ $officehrs = cut_long_strings($officehrs, 254);}
	
	
	$query = "select id from class_details where class_id = '$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 0)
	{
		$query = "insert into class_details values('', '$classid', 
		'$materials', '$methods', '$tech', '$hwhrs', '$officehrs', '$additional', '$focus')";
	}
	elseif($numrows == 1)
	{
		$query = "update class_details set materials='$materials', methods='$methods', 
		tech='$tech', hwhrs='$hwhrs', officehrs='$officehrs', add_req='$additional', 
		focus='$focus' where class_id='$classid'";
	}
	else
	{
		$del_query = "DELETE FROM class_details WHERE class_id='$classid'";
		mysql_query($del_query);
		
		$query = "insert into class_details values('', '$classid', 
		'$materials', '$methods', '$tech', '$hwhrs', '$officehrs', '$additional', '$focus')";
	}
	
	mysql_query($query);
}

function process_eval()
{
	$data = pull_data_from_array($_POST, 'desc', 4);
	$num_rows_with_content = $data[0];
	$num_total_rows = $data[1];
		
	$classid = $_POST['classid'];
	
	$query = "select id from evalscales where class_id = '$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 0)
	{
		$counter = 1;
		$ordr = 1;
		
		for($i=0; $i<$num_total_rows; $i++)
		{
			$description = mysql_prep($_POST["desc".$counter]);
			$percent = mysql_prep($_POST["perc".$counter]);
			if($description != '')
			{
				$query = "insert into evalscales values('', '$classid', '$description', '$percent', '$ordr')";
				mysql_query($query);
				$ordr++;
			}
			$counter++;
		}
	}
	
	elseif($numrows == $num_rows_with_content)
	{
		$counter = 1;
		$ordr = 1;
		
		for($i=0; $i<$num_total_rows; $i++)
		{
			$description = mysql_prep($_POST["desc".$counter]);
			$percent = mysql_prep($_POST["perc".$counter]);
			if($description != '')
			{
				$query = "update evalscales set descrip='$description', percent='$percent' 
				where class_id='$classid' and ordr='$ordr'";
				mysql_query($query);
				$ordr++;
			}
			$counter++;
		}
	}
	
	else
	{
		$del_query = "DELETE FROM evalscales WHERE class_id='$classid'";
		mysql_query($del_query);
		
		$counter = 1;
		$ordr = 1;
		
		for($i=0; $i<$num_total_rows; $i++)
		{
			$description = mysql_prep($_POST["desc".$counter]);
			$percent = mysql_prep($_POST["perc".$counter]);
			if($description != '')
			{
				$query = "insert into evalscales values('', '$classid', '$description', '$percent', '$ordr')";
				mysql_query($query);
				$ordr++;
			}
			$counter++;
		}
	}
	
}

function process_books()
{
	$data = pull_data_from_array($_POST, 'bookname', 8);
	$num_rows_with_content = $data[0];
	$num_total_rows = $data[1];
	$classid = $_POST['classid'];
	
	if($num_rows_with_content > 0)
	{
		$query = "select id from books where class_id = '$classid'";
		$results = mysql_query($query);
		$numrows = mysql_num_rows($results);
		if($numrows == 0)
		{
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$title = mysql_prep($_POST["bookname".$counter]);
				$author = mysql_prep($_POST["author".$counter]);
				$publisher = mysql_prep($_POST["pub".$counter]);
				$date = mysql_prep($_POST["date".$counter]);
				$isbn = mysql_prep($_POST["isbn".$counter]);
				$link = mysql_prep($_POST["link".$counter]);
				$type = $_POST["booktype".$counter];
				
				if($title != '')
				{
					$query = "insert into books values('', '$classid', '$title', '$author', '$publisher', 
					'$date', '$isbn', '$link', '$type', '$ordr')";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
		
		elseif($numrows == $num_rows_with_content)
		{
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$title = mysql_prep($_POST["bookname".$counter]);
				$author = mysql_prep($_POST["author".$counter]);
				$publisher = mysql_prep($_POST["pub".$counter]);
				$date = mysql_prep($_POST["date".$counter]);
				$isbn = mysql_prep($_POST["isbn".$counter]);
				$link = mysql_prep($_POST["link".$counter]);
				$type = $_POST["booktype".$counter];
				
				if($title != '')
				{
					$query = "update books set title='$title', author='$author', publisher='$publisher', pubdate='$date', 
					isbn='$isbn', link='$link', booktype='$type' where class_id='$classid' and ordr='$ordr'";
					//print $query;
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}

		}
		
		else
		{
			$del_query = "DELETE FROM books WHERE class_id='$classid'";
			mysql_query($del_query);
			
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$title = mysql_prep($_POST["bookname".$counter]);
				$author = mysql_prep($_POST["author".$counter]);
				$publisher = mysql_prep($_POST["pub".$counter]);
				$date = mysql_prep($_POST["date".$counter]);
				$isbn = mysql_prep($_POST["isbn".$counter]);
				$link = mysql_prep($_POST["link".$counter]);
				$type = $_POST["booktype".$counter];
				
				if($title != '')
				{
					$query = "insert into books values('', '$classid', '$title', '$author', '$publisher', 
					'$date', '$isbn', '$link', '$type', '$ordr')";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
	}
	
	else
	{
		$query = "select id from books where class_id = '$classid'";
		$results = mysql_query($query);
		$numrows = mysql_num_rows($results);
		if($numrows > 0)
		{
			$del_query = "DELETE FROM books WHERE class_id='$classid'";
			mysql_query($del_query);
		}
	}
}

function process_addtl_comp()
{
	$data = pull_data_from_array($_POST, 'comp', 4);
	$num_rows_with_content = $data[0];
	$num_total_rows = $data[1];
		
	$classid = $_POST['classid'];
	
	if($num_rows_with_content > 0)
	{
		$query = "select count(id) from competencies where class_id='$classid' and type='1'";
		
		$results = mysql_query($query);
		$count = mysql_fetch_row($results);
		$numrows = $count[0];
		
		if($numrows == 0)
		{
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$competency = mysql_prep($_POST["comp".$counter]);
				
				if($competency != '')
				{
					$query = "insert into competencies values('', '0', '$classid', '$competency', 
					'1', '$ordr')";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
		
		elseif($numrows == $num_rows_with_content)
		{
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$competency = mysql_prep($_POST["comp".$counter]);
				
				if($competency != '')
				{
					$query = "update competencies set competency='$competency' where class_id='$classid' and ordr='$ordr'";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
		else
		{
			$del_query = "DELETE FROM competencies WHERE class_id='$classid'";
			mysql_query($del_query);
			
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$competency = mysql_prep($_POST["comp".$counter]);
				
				if($competency != '')
				{
					$query = "insert into competencies values('', '0', '$classid', '$competency', 
					'1', '$ordr')";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
	}
}

function process_addtl_policies()
{
	$data = pull_data_from_array($_POST, 'policy', 6);
	$num_rows_with_content = $data[0];
	$num_total_rows = $data[1];
		
	$classid = $_POST['classid'];
	
	if($num_rows_with_content > 0)
	{
		$query = "select count(id) from gradingpolicies where class_id='$classid' and type='1'";
		
		$results = mysql_query($query);
		$count = mysql_fetch_row($results);
		$numrows = $count[0];
		
		if($numrows == 0)
		{
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$policy = mysql_prep($_POST["policy".$counter]);
				
				if($policy != '')
				{
					$query = "insert into gradingpolicies values('', '0', '$classid', '1', '$policy', '$ordr')";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
		elseif($numrows == $num_rows_with_content)
		{
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$policy = mysql_prep($_POST["policy".$counter]);
				
				if($policy != '')
				{
					$query = "update gradingpolicies set policy='$policy' where class_id='$classid' and ordr='$ordr'";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
		else
		{
			$del_query = "DELETE FROM gradingpolicies WHERE class_id='$classid'";
			mysql_query($del_query);
			
			$counter = 1;
			$ordr = 1;
			
			for($i=0; $i<$num_total_rows; $i++)
			{
				$policy = mysql_prep($_POST["policy".$counter]);
				
				if($policy != '')
				{
					$query = "insert into gradingpolicies values('', '0', '$classid', '1', '$policy', '$ordr')";
					mysql_query($query);
					$ordr++;
				}
				$counter++;
			}
		}
	}
}

function process_activities()
{
	$classid = $_POST['classid'];
	$data = $_POST;
	$meetingnum = 1;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, 7);
		if($test == "meeting")
		{
			$activity = mysql_prep($value);
			$query = "update activities set activity='$activity' where class_id='$classid' and meeting='$meetingnum'";
			mysql_query($query);
			
			$meetingnum++;
		}	
	}
}

function process_form($classid)
{
	if(isset($_POST['update']))
	{
		process_class_times('1');
		if(isset($_POST['day2'])) { process_class_times('2'); }
		process_class_details();
		process_eval();
		process_books();
		process_addtl_comp();
		process_addtl_policies();
		process_activities();
	}
	
}

/***************** Displaying Form Data Functions *******************/

function get_class_times($classid, $ordr)
{
	$query = "select classday, starttime, endtime from class_days_times where class_id = '$classid' and ordr = '$ordr'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		return $row;
	}
	else { return NULL; }
}

function get_class_details($classid)
{
	$query = "select * from class_details where class_id = '$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		list($id, $classid, $materials, $methods, $tech, $hwhrs, $officehrs, $addreq, $focus) = $row;
		$data = array('materials'=>$materials, 'methods'=>$methods, 'tech'=>$tech, 
		'hwhrs'=>$hwhrs, 'officehrs'=>$officehrs, 'addreq'=>$addreq, 'focus'=>$focus);
		
		return $data;
	}
	else { return NULL; }
}

function display_activities($classid)
{	
	$query = "select activity from activities where class_id='$classid'";
	$data = array();
	$results = mysql_query($query);
	while($rows = mysql_fetch_row($results))
	{
		array_push($data, $rows[0]);
	}
	
	return $data;
}

/****************** Check Form Completion *****************/

function check_syllabus_details($classid)
{
	$query = "select classday, starttime, endtime from class_days_times where class_id='$classid'";
	$results = mysql_query($query);
	$row = mysql_fetch_row($results);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		list($classday, $starttime, $endtime)=$row;
		if($classday != '0' && $starttime != '0' && $endtime != '0')
		{
			$query = "select materials, methods, tech, hwhrs, officehrs from class_details where class_id='$classid'";
			$results = mysql_query($query);
			$row = mysql_fetch_row($results);
			$numrows = mysql_num_rows($results);
			if($numrows > 0)
			{
				list($materials, $methods, $tech, $hwhrs, $officehrs)=$row;
				if($materials != '' && $methods != '' && $tech != '' && $hwhrs != '' && $officehrs != '')
				{
					//print "$materials, $methods, $tech, $hwhrs, $officehrs";
					return TRUE;
				}
				else { return FALSE; }
			}
			else { return FALSE; }
		}
		else { return FALSE; }
	}
	else { return FALSE; }	
}

function check_eval_status($classid)
{
	$query = "select descrip, percent from evalscales where class_id='$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$total = 0;
		while($row = mysql_fetch_row($results))
		{
			list($descrip, $percent)=$row;
			if($descrip != '' && $percent != '')
			{
				$total = $total + $percent;
			}
		}
		if($total == 100)
		{
			return TRUE;
		}
		else { return FALSE; }
		
	}
	else { return FALSE; }
}

function check_books($classid, $output)
{
	$query = "select title, author, publisher, pubdate, isbn, booktype from books where class_id='$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$total = 0;
		$incomplete = 0;
		while($row = mysql_fetch_row($results))
		{
			list($title, $author, $publisher, $pubdate, $isbn, $booktype)=$row;
			if($title == '' || $author == '' || $publisher == '' || $pubdate == '' || $isbn == '' || $booktype == '0')
			{
				$incomplete++;
			}
			else { $total++; }
		}
		
		if($incomplete > 0 )
		{
			book_output("error", $output, $total); return FALSE;	
		}
		else
		{
			if($total == 1) { book_output("success1", $output, $total); return TRUE; }
			else { book_output("success2", $output, $total); return TRUE; }
		}
	}
	else { book_output("success3", $output, $total=''); return TRUE; }
}

function book_output($type, $output, $total)
{
	switch ($type)
	{
		case "error": if($output == "yes"){ print "<p class='error alignright'>incomplete</p>"; } break;
		case "success1": if($output == "yes"){ print "<p class='success alignright'>1 book</p>"; } break;
		case "success2": if($output == "yes"){ print "<p class='success alignright'>$total books</p>"; } break;
		case "success3": if($output == "yes"){ print "<p class='success alignright'>0 books</p>"; } break;
		default: print "<p class='error alignright'>error, something went wrong</p>";
	}
}

function check_meetings($classid, $output)
{
	$query = "select meeting, activity from activities where class_id='$classid' order by meeting";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$total = 0;
		$incomplete = 0;
		while($row = mysql_fetch_row($results))
		{
			list($meeting, $activity)=$row;
			if($activity != '')
			{
				$total++;
			}
		}
		if($total < $numrows)
		{
			if($total == 1) { meeting_output("error1", $output, $total); }
			else { meeting_output("error2", $output, $total); }
			return FALSE;
		}
		else { meeting_output("success", $output, $total); }
		return TRUE;
	}
}

function meeting_output($type, $output, $total)
{
	switch ($type)
	{
		case "error1": if($output == "yes"){ print "<p class='error alignright'>1 meeting complete</p>"; } break;
		case "error2": if($output == "yes"){ print "<p class='error alignright'>$total meetings complete</p>"; } break;
		case "success": if($output == "yes"){ print "<p class='success alignright'>$total meetings complete</p>"; } break;
		default: print "<p class='error alignright'>error, something went wrong</p>";
	}
}

function output_status($check)
{
	if($check)
	{
		print "<p class='success alignright'>complete</p>";
	}
	else
	{
		print "<p class='error alignright'>incomplete</p>";
	}
}

function add_submit_button($classid)
{
	if(check_syllabus_details($classid) && check_eval_status($classid) && check_books($classid, "no") && check_meetings($classid, "no"))
	{
		//echo "<input type='button' id='approval' class='submitbttn fancybox' href='#inline1' value='Send to Director for Approval' />";
		echo "<a class='button link-btn' href='index.php?syllsubmit=$classid'>Submit for Approval</a>";
	}
}

function check_syllabus_completion($classid)
{
	if(check_syllabus_details($classid) && check_eval_status($classid) && check_books($classid, "no") && check_meetings($classid, "no"))
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

/****************** Syllabus Submission ******************/

function output_directors()
{
	$query = "select id, fname, lname from users where type='1' order by lname";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		while($row = mysql_fetch_row($results))
		{
			list($id, $fname, $lname)=$row;
			print "<label><input type='radio' id='$id' name='director' value='$id' /> $fname $lname</label>\n";
		}
	}
	
}

function submit_syllabus_for_review($classid)
{
	if(isset($_POST['submitsyllabus']))
	{
		if(isset($_POST['director']))
		{
			$query = "update classes set status='1' where id='$classid'";
			mysql_query($query);
			
			$director = $_POST['director'];
			$userid = $_SESSION['id'];
			$message = mysql_prep($_POST['message']);
			
			$query = "SELECT COUNT(class_id) FROM syll_process WHERE class_id = '$classid'";
			$results = mysql_query($query);
			$row = mysql_fetch_row($results);
			$count = $row[0];
			
			if($count == 1)
			{
				$query ="update syll_process set director_id='$director', status='1', date_time=NOW(), message='$message' where class_id='$classid'";
				mysql_query($query);
			}

			else
			{
				$query = "insert into syll_process values('', '$classid', '$userid', '$director', '1', NOW(), '$message')";
				mysql_query($query);
			}
			
		}
		else
		{
			print "<div class='feedback error'>ERROR: Please select an Academic Director</div>"; 
		}
	}
}

function display_edit_or_review($classid)
{
	$query = "select status from classes where id = '$classid'";
	$result = mysql_query($query);
	$rows = mysql_fetch_row($result);
	$status = $rows[0];
	
	switch ($status)
	{
		case "0": include('includes/syllabi/edit-syllabus.php'); break;
		case "1": include('includes/syllabi/review-syllabus.php'); break;
		case "2": include('includes/syllabi/review-syllabus.php'); break;
		default: print "<p class='error'>error, something went wrong</p>";
	}
}

function display_syllabus_process_message()
{
	$type = $_SESSION['type'];
	$userid = $_SESSION['id'];
	
	if($type == 1)
	{
		$query = "SELECT
		syll_process.class_id,
		courses.coursenum,
		courses.name,
		users.fname,
		users.lname
	FROM
		syll_process,
		classes,
		courses,
		users
	WHERE
		syll_process.class_id = classes.id AND
		syll_process.user_id = users.id AND
		classes.course_id = courses.id AND
		syll_process.status = 1 AND 
		syll_process.director_id = '$userid' 
	order by date_time";
	
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	
		if($numrows > 0)
		{
			while($rows = mysql_fetch_row($results))
			{
				list($classid, $coursenum, $coursename, $fname, $lname) = $rows;
				
				echo "<div class='frame'>\n";
				echo "<h4>Review Request</h4>\n";
				echo "<p>Instructor <strong>$fname $lname</strong> has submitted a syllabus 
				for <strong>$coursenum $coursename</strong> for review.</p>\n";
				echo "<p class='remove-bottom'>Please <a href='index.php?syllreview=$classid'>review</a> the syllabus.</p>\n";
				echo "</div>";
			}		
		}
	}
	
	if($type == 0)
	{
		$query = "SELECT COUNT(class_id) FROM syll_process WHERE status = 0 OR status = 2 AND user_id = '$userid'";
		$results = mysql_query($query);
		$row = mysql_fetch_row($results);
		$count = $row[0];
		
		if($count > 0)
		{
			output_instructor_messages($userid);
		}
	}
}

function include_message_form($classid)
{
	$query = "select message from syll_process where class_id = '$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		$message = $row[0];
		if($message != '')
		{
			include("includes/syllabi/message.php");
		}
	}
}

function output_message($classid)
{
$query = "select message from syll_process where class_id = '$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		$message = $row[0];
		if($message != '')
		{
			echo "<h3>Important Message</h3>\n";
			echo "<p>$message</p>";
		}
	}
}

function output_status_bar($classid)
{
	$type = $_SESSION['type'];
	
	if($type > 0)
	{
		echo "<div id='updatebar'>\n";
		echo "<a href='index.php?syllrespond=$classid' class='button link-btn'>Respond to Request</a>";
		echo "</div>";
	}
	
	if($type == 0)
	{
		$query = "select status from syll_process where class_id='$classid'";
		$results = mysql_query($query);
		$numrows = mysql_num_rows($results);
		if($numrows == 1)
		{
			$row = mysql_fetch_row($results);
			$status = $row[0];
			
			if($status == '2')
			{
				echo "<div id='updatebar'>\n";
				echo "<a href='#' class='button link-btn'>Generate Syllabus File</a>";
				echo "</div>";
			}
			
		}
	}
}

function process_syllabus_review()
{
	if(isset($_POST['respondsyllabus']))
	{
		$response = $_POST['response'];
		$classid = $_POST['classid'];
		$message = mysql_prep($_POST['message']);
		if($response == "approve")
		{
			//$query = "update syll_process set status='2', date_time=NOW(), message='$message' where class_id='$classid'";
			//mysql_query($query);
			//$query = "update classes set status='2' where id='$classid'";
			//mysql_query($query);
			write_file($classid);	
		}
		else
		{
			$query = "update syll_process set status='0', date_time=NOW(), message='$message' where class_id='$classid'";
			mysql_query($query);
			$query = "update classes set status='0' where id='$classid'";
			mysql_query($query);
		}
	}
}

/****************** Helper functions *********************/

function pull_data_from_array($data, $item, $itemlength)
{
	$counter = 0;
	$fieldnum = 0;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, $itemlength);
		if($test == $item)
		{
			$fieldnum++;
			$field = $item.$fieldnum;
			
			if($_POST[$field] != '')
			{
				$counter++;
			}
		}	
	}
	
	$data = array($counter, $fieldnum);
	return $data;
}

function output_instructor_messages($userid)
{
	$terms = array('', 'Winter', 'Spring', 'Summer', 'Fall');
	$query = "SELECT
	syll_process.class_id,
	syll_process.status,
	courses.coursenum,
	courses.name,
	users.fname,
	users.lname,
	users.email,
	terms.term,
	terms.year
FROM
	syll_process,
	classes,
	courses,
	users,
	terms
WHERE
	syll_process.class_id = classes.id AND
	syll_process.director_id = users.id AND
	classes.course_id = courses.id AND
	classes.term_id = terms.id AND
	syll_process.user_id = $userid AND
	syll_process.status != 1 order by syll_process.date_time";
	
	$results = mysql_query($query);
	
	while($rows = mysql_fetch_row($results))
	{
		list($classid, $status, $coursenum, $coursename, $fname, $lname, $email, $termnum, $year) = $rows;
		
		if($status == '0')
		{
			echo "<div class='frame'>";
			echo "<p>$fname $lname has requested that you revise the syllabus for $coursenum $coursename for $terms[$termnum] $year.</p>\n";
			echo "<p>please <a href='index.php?sylledit=$classid'>revise the syllabus</a> and resubmit it.";
			echo "</div>";
		}
		if($status == '2')
		{
			echo "<div class='frame'>";
			echo "<p>Congratulations $fname $lname has approved the syllabus for $coursenum $coursename for $terms[$termnum] $year.</p>\n";
			echo "<p>Please <a href='index.php?sylledit=$classid'>view the syllabus</a> and generate the file to upload to the class site</p>";
			echo "<p>You can <a href='#'>delete this message</a>.</p>";
			echo "</div>";
		}
	}
	
}

/************* Writing the Actual Syllabus PHP file *********************/

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
		list($classid, $lname, $term, $year, $coursenum) = $row;
		
		$termcodes = array('', 'WI', 'SP', 'SU', 'FA');
		$year = substr($year, -2);
		
		$term = $termcodes[$term];
		
		$file = "repository/" . $coursenum . '_' . $lname . '_' . $term . $year . '_id' . $classid . '.php';

		if($handle = fopen($file, 'w'))
		{
			$content = '<?php' . "\n" . 'require_once(\'../../phpdocx_pro/classes/CreateDocx.inc\');' . "\n\n" . '$docx = new CreateDocx();' . "\n\n" . '$docx->addTemplate(\'../templates/template1.docx\');' . "\n";
			
			fwrite($handle, $content);
			
			fwrite($handle, output_basic_content($classid));
			fwrite($handle, output_classtimes($classid));
			fwrite($handle, output_prereqs($classid));
			fwrite($handle, output_coursedescript($classid));
			fwrite($handle, output_all_competencies($classid));
			fwrite($handle, output_all_books($classid));
			fwrite($handle, output_course_details($classid));
			fwrite($handle, output_class_evaluation($classid));
			fwrite($handle, output_grading_policies($classid));
			fwrite($handle, output_global_content($classid));
			fwrite($handle, output_all_activities($classid));
			fwrite($handle, output_page_close($classid));
			
			fclose($handle);
			echo "file successfully written";
		}
		else
		{
			echo "there was an error writing the file";
		}
	}
}

function output_basic_content($classid)
{
	$query = "SELECT
	classes.id,
	classes.type,
	class_details.officehrs,
	courses.coursenum,
	courses.name,
	courses.totalhrs,
	courses.lecthrs,
	courses.labhrs,
	courses.credit,
	users.fname,
	users.lname,
	users.phone,
	users.email,
	terms.term,
	terms.year,
	terms.startdate
FROM
	classes,
	courses,
	users,
	terms,
	class_details
WHERE
	classes.id = class_details.class_id AND
	classes.course_id = courses.id AND
	classes.user_id = users.id AND
	classes.term_id = terms.id AND
	classes.id = $classid";
	
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		list($classid, $type, $officehrs, $coursenum, $coursename, $coursehrs, $lecturehrs, $labhrs, 
		$credit, $fname, $lname, $phone, $email, $term, $year, $startdate) = $row;
		
		$course_length = array("11 Weeks", "5.5 Weeks");
		$type = $course_length[$type];
		
		$termnames = array("", "Winter", "Spring", "Summer", "Fall");
		$term = $termnames[$term];
		
		$startdate = date("j/n/Y", strtotime($startdate));
		
		$classid = escape_quotes($classid);
		$type = escape_quotes($type);
		$officehrs = escape_quotes($officehrs);
		$coursenum = escape_quotes($coursenum);
		$coursename = escape_quotes($coursename);
		$coursehrs = escape_quotes($coursehrs);
		$lecturehrs = escape_quotes($lecturehrs);
		$labhrs = escape_quotes($labhrs);
		$credit = escape_quotes($credit);
		$fname = escape_quotes($fname);
		$lname = escape_quotes($lname);
		$phone = escape_quotes($phone);
		$email = escape_quotes($email);
		$term = escape_quotes($term);
		$year = escape_quotes($year);
		$startdate = escape_quotes($startdate);
		$data = '$docx->addTemplateVariable(\'COURSENUM\', \''. $coursenum . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'COURSETITLE\', \''. $coursename . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'SESSION\', \''. $term . ' ' . $year . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'INSTRUCTOR\', \''. $fname. ' ' . $lname . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'EMAIL\', \''. $email . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'PHONE\', \''. $phone . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'AVAILABILITY\', \''. $officehrs . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'WEEKS\', \''. $type . '\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'HOURS\', \''. $coursehrs . ' Hours\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'LECTURE\', \''. $lecturehrs . ' Hours\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'LAB\', \''. $labhrs . ' Hours\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'CREDITS\', \''. $credit . ' Credits\');' . "\n";
		$data .= '$docx->addTemplateVariable(\'REVISED\', \''. $startdate . '\');' . "\n";
		
		return $data;
	}
}

function output_classtimes($classid)
{
	$query = "select classday, starttime, endtime from class_days_times where class_id = '$classid' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		list($classday, $starttime, $endtime) = $row;
		$classday = escape_quotes($classday);
		$starttime = escape_quotes($starttime);
		$endtime = escape_quotes($endtime);
		$data = '$docx->addTemplateVariable(\'CLASSTIME\', \''. $classday . 's from '. $starttime . ' to ' . $endtime . '\');' . "\n";
		return $data;
	}
	
	if($numrows > 1)
	{
		$data = '$docx->addTemplateVariable(\'CLASSTIME\', \'';
		while($rows = mysql_fetch_row($results))
		{
			list($classday, $starttime, $endtime) = $rows;
			$classday = escape_quotes($classday);
			$starttime = escape_quotes($starttime);
			$endtime = escape_quotes($endtime);
			
			$data .= $classday . 's from '. $starttime . ' to ' . $endtime . ' and ';
		}
		
		$data = substr($data, 0, -5);
		$data .= '\');' . "\n";
		return $data;
	}	
}

function output_page_close($classid)
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
		list($classid, $lname, $term, $year, $coursenum) = $row;
		
		$termcodes = array('', 'WI', 'SP', 'SU', 'FA');
		$year = substr($year, -2);
		
		$term = $termcodes[$term];
		
		$data = '$paramsPage = array( \'titlePage\' => 1, \'orient\' => \'normal\', \'top\' => 800, \'bottom\' => 800, \'right\' => 800, \'left\' => 800);' . "\n\n";

		$data .= '$docx->createDocxAndDownload(\'' . $coursenum . '_' . $lname . '_' . $term . $year . '_id' . $classid . '\', $paramsPage);';
		
		$data .= "\n\n" . '?>';
		return $data;
	}

}

function output_prereqs($classid)
{
	$query = "SELECT prereqs.prereq FROM classes, courses, prereqs WHERE 
	classes.course_id = courses.id AND courses.id = prereqs.course_id AND classes.id = '$classid' order by ordr";
	
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		$prereq = escape_quotes($row[0]);
		$data = '$docx->addTemplateVariable(\'PREREQS\', \''. $prereq . '\');' . "\n";
		return $data;
	}
	
	elseif($numrows > 1)
	{
		$data = '$docx->addTemplateVariable(\'PREREQS\', \'';
		while($row = mysql_fetch_row($results))
		{
			list($prereq) = $row;
			$prereq = escape_quotes($prereq);
			$data .= $prereq . ', ';	
		}
		$data = substr($data, 0, -2);
		$data .= '\');' . "\n";
		return $data;
	}
	else
	{
		$data = '$docx->addTemplateVariable(\'PREREQS\', \''. 'None \');' . "\n";
		return $data;
	}
}

function output_coursedescript($classid)
{
	$query = "SELECT class_details.focus, courses.description FROM classes, class_details, courses WHERE
	classes.id = class_details.class_id AND classes.course_id = courses.id AND classes.id = '$classid'";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($results);
		$focus = escape_quotes($row[0]);
		$description = escape_quotes($row[1]);
		
		if($focus == '')
		{
			$data = '$html = \'<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
			$data .= '<p><strong>Course Description:</strong><br />' . $description . '</p>\';' . "\n\n";
			$data .= '$docx->replaceTemplateVariableByHTML(\'COURSEDESCRIPTION\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
			return $data;
		}
		else
		{
			$data = '$html = \'<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
			$data .= '<p><strong>Course Description:</strong><br />' . $description . '</p>' . "\n";
			$data .= '<p><strong>Course focus:</strong></p>' . $focus . '\';' . "\n\n";
			$data .= '$docx->replaceTemplateVariableByHTML(\'COURSEDESCRIPTION\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
			return $data;
		}
	}
}

function output_grading_policies($classid)
{
	$data = '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$data .= '<ul>' . "\n";
	
	$query = "SELECT gradingpolicies.policy FROM classes, terms, gradingpolicies WHERE 
	classes.term_id = terms.id AND terms.id = gradingpolicies.term_id AND classes.id = '$classid' order by ordr";
	
	$results = mysql_query($query);
	
	while($rows = mysql_fetch_row($results))
	{
		list($policy) = $rows;
		$policy = escape_quotes($policy);
		$data .= '<li>' . $policy . '</li>' . "\n";
	}
	
	$query = "select policy from gradingpolicies where class_id = '$classid' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$data .= '</ul>' . "\n". '<p><strong>Additional Grading Policies</strong></p>' . "\n" . '<ul>' . "\n";
		while($rows = mysql_fetch_row($results))
		{
			list($policy) = $rows;
			$policy = escape_quotes($policy);
			$data .= '<li>' . $policy . '</li>' . "\n";
		}
		
		$data .= '</ul> \';' . "\n\n";
	}
	
	else
	{
		$data .= '</ul> \';' . "\n\n";	
	}
	
	$data .= '$docx->replaceTemplateVariableByHTML(\'GRADINGPOLICIES\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";

	
	return $data;
}

function output_global_content($classid)
{
	$counter = 1;
	$data = '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$query = "SELECT sections.title, sections.content FROM classes, terms, sections WHERE
	classes.term_id = terms.id AND terms.id = sections.term_id AND classes.id = '$classid' order by ordr";
	
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		while($row = mysql_fetch_row($results))
		{
			list($title, $content) = $row;
			$title = escape_quotes($title);
			$content = escape_quotes($content);
			
			if($counter == 1)
			{
				$data .= '<p><strong>' . $title . '</strong></p>' . "\n" . $content . "\n\n" . '\';' . "\n\n";
				$data .= '$docx->replaceTemplateVariableByHTML(\'SECTION1\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
				$data .= '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
			}
			else
			{
				$data .= '<p><strong>' . $title . '</strong></p>' . "\n" . $content . "\n\n";
			}
			$counter++;
		}
		
		$data .= '\';' . "\n\n";
		$data .= '$docx->replaceTemplateVariableByHTML(\'SECTION2\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		
		return $data;
	}
}

function output_all_competencies($classid)
{
	$data = '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$data .= '<ul>' . "\n";
	$query = "SELECT competencies.competency FROM classes, competencies WHERE
	classes.course_id = competencies.course_id AND classes.id = '$classid' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		while($row = mysql_fetch_row($results))
		{
			list($competency) = $row;
			$competency = escape_quotes($competency);
			$data .= '<li>' . $competency . '</li>' . "\n";
		}
		
		$data .= '</ul>' . "\n\n";
	}
	else
	{
		$data .= '<li>None listed</li>' . "\n";
		$data .= '</ul>';
	}
	
	$query = "select competency from competencies where class_id = '$classid' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$data .=  "\n" . '<p></strong>Additional Competencies</strong><br />' . "\n";
		$data .= '<ul>' . "\n";
		while($row = mysql_fetch_row($results))
		{
			list($competency) = $row;
			$competency = escape_quotes($competency);
			$data .= '<li>' . $competency . '</li>' . "\n";
		}
		
		$data .= '</ul></p> \';' . "\n\n";
	}
	else
	{
		$data .= '\';' . "\n\n";
	}
	
	$data .= '$docx->replaceTemplateVariableByHTML(\'COMPETENCIES\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		
	return $data;
}

function output_course_details($classid)
{
	$data = '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$query = "select materials, methods, tech, hwhrs, add_req from class_details where class_id='$classid'";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	if($numrows == 1)
	{
		$row = mysql_fetch_row($result);
		list($materials, $methods, $tech, $hwhrs, $add_req) = $row;
		$materials = escape_quotes($materials);
		$methods = escape_quotes($methods);
		$tech = escape_quotes($tech);
		$hwhrs = escape_quotes($hwhrs);
		$add_req = escape_quotes($add_req);
		
		$materials=substr_replace($materials, '<strong>Materials and Supplies:</strong> ', 3, 0);
		$methods=substr_replace($methods, '<strong>Method of Instruction:</strong> ', 3, 0);
		$tech=substr_replace($tech, '<strong>Technology Required:</strong> ', 3, 0);
		
		$data .= $methods . "\n";
		$data .= $materials . "\n";
		$data .= '<p><strong>Estimated Homework Hours:</strong> ' . $hwhrs . '</p>' . "\n";
		$data .= $tech . "\n";
		$data .= '\';' . "\n\n";
		$data .= '$docx->replaceTemplateVariableByHTML(\'DETAILS\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		
		if($add_req != '')
		{
			$data .= '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
			$add_req=substr_replace($add_req, '<strong>Additional Course Requirements:</strong><br />', 3, 0);
			$data .= $add_req . "\n";
			$data .= '\';' . "\n\n";
			$data .= '$docx->replaceTemplateVariableByHTML(\'ADDREQ\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		}
		else
		{
			$data .= '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
			$data .= $add_req . "\n";
			$data .= '\';' . "\n\n";
			$data .= '$docx->replaceTemplateVariableByHTML(\'ADDREQ\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		}
		
		return $data;
		
	}	
}

function output_all_books($classid)
{
	$bookt = array('', 'Required Text', 'Recommended Text', 'Suggested Text');
	$data = '$html = \'<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$query = "select title, author, publisher, pubdate, isbn, booktype from books where class_id = '$classid' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows == 0)
	{
		$data .= '<p><strong>Required Texts:</strong> None</p>\';' . "\n\n";
		$data .= '$docx->replaceTemplateVariableByHTML(\'BOOKS\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
	}
	else
	{
		while($row = mysql_fetch_row($results))
		{
			list($title, $author, $publisher, $pubdate, $isbn, $bktype) = $row;
			$booktype = $bookt[$bktype];
			$title = escape_quotes($title);
			$author = escape_quotes($author);
			$publisher = escape_quotes($publisher);
			$pubdate = escape_quotes($pubdate);
			$isbn = escape_quotes($isbn);
			$data .= '<p><strong>' . $booktype . ':</strong> ' . $title . ' by ' . $author . ', ' . $publisher . ', ©' . $pubdate . ', ISBN: ' . $isbn . '</p>' . "\n";
			
		}
		$data .= '\';' . "\n\n";
		$data .= '$docx->replaceTemplateVariableByHTML(\'BOOKS\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
	}
	return $data;
}

function output_class_evaluation($classid)
{
	$data = '$html = \'<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$query = "select descrip, percent from evalscales where class_id = '$classid' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$data .= '<p><strong>Process for Evaluation</strong></p>' . "\n";
		$data .= '<table>' . "\n";
		while($row = mysql_fetch_row($results))
		{
			list($descrip, $percent) = $row;
			$descrip = escape_quotes($descrip);
			$percent = escape_quotes($percent);
			$data .= '<tr><td>' . $descrip . '</td><td>' . $percent . '%</td></tr>' . "\n";		
		}
		$data .= '<tr><td><strong>Total</strong></td><td><strong>100%</strong></td></tr>' . "\n";
		$data .= '</table> \';' . "\n\n";
		$data .= '$docx->replaceTemplateVariableByHTML(\'EVALUATION\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		
		return $data;
	}
}

function output_all_activities($classid)
{
	$termstart = term_start_date($classid);
	$day = return_day($classid);
	$data = '$html = \'<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>' . "\n";
	$query = "select meeting, activity from activities where class_id = '$classid' order by meeting";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		$data .= '<table width="100%">' . "\n";
		while($row = mysql_fetch_row($results))
		{
			list($meeting, $activity) = $row;
			$activity = escape_quotes($activity);
			$classdate = return_class_date($classid, $termstart, $meeting, $day);
			
			$data .= '<tr><td width="25%"><p><strong>Meeting #</strong>' . $meeting . '<br />' . $classdate . '</p></td><td width="75%">' . $activity . '</td></tr>' . "\n";		
		}
		$data .= '</table> \';' . "\n\n";
		$data .= '$docx->replaceTemplateVariableByHTML(\'ACTIVITIES\', \'block\', $html , array(\'isFile\' => false, \'parseDivsAsPs\' => false, \'downloadImages\' => false));' . "\n\n";
		
		return $data;

	}

}


?>