<?php
	
function display_term_management()
{
	if(isset($_GET['terms']) && $_SESSION['type'] == 2)
	{
		include('includes/admin/terms.php');
	}
}

function display_add_term_form()
{
	if(isset($_GET['addterm']) && $_SESSION['type'] == 2)
	{
		include('includes/admin/term-add.php');
	}	
}

function add_term()
{
	if(isset($_POST['addterm']) && $_SESSION['type'] == 2)
	{
		$term = mysql_prep($_POST['term']);
		$year = mysql_prep($_POST['year']);
		$day_start = mysql_prep($_POST['day-start']);
		$month_start = mysql_prep($_POST['month-start']);
		$year_start = mysql_prep($_POST['year-start']);
		$day_end = mysql_prep($_POST['day-end']);
		$month_end = mysql_prep($_POST['month-end']);
		$year_end = mysql_prep($_POST['year-end']);
		
		if($term != '0')
		{
			$query = "select * from terms where term = '$term' and year = '$year'";
			$result = mysql_query($query);
			$rows = mysql_num_rows($result);
			
			if($rows ==0)
			{
				$start_date = $year_start . "-" . $month_start . "-" . $day_start;
				$end_date = $year_end . "-" . $month_end . "-" . $day_end;
				
				$query = "insert into terms values('', '$term', '$year', '$start_date', '$end_date')";
				mysql_query($query);
				
				$lastid = mysql_insert_id();
				
				add_holidays($_POST, $lastid, $year);
				
				print "<div class='feedback success'>Term has been created.</div>";
			}
			else { print "<div class='feedback error'>That term has already been created.</div>"; }
		}
		else { print "<div class='feedback error'>Please enter a term.</div>"; }
	}
}

function edit_term()
{
	if(isset($_POST['editterm']) && $_SESSION['type'] == 2)
	{
		$id = $_POST['id'];
		$term = mysql_prep($_POST['term']);
		$year = mysql_prep($_POST['year']);
		$day_start = mysql_prep($_POST['day-start']);
		$month_start = mysql_prep($_POST['month-start']);
		$year_start = mysql_prep($_POST['year-start']);
		$day_end = mysql_prep($_POST['day-end']);
		$month_end = mysql_prep($_POST['month-end']);
		$year_end = mysql_prep($_POST['year-end']);
		
		$query_lock_test = "select locked from terms where id = '$id'";
		$result_lock = mysql_query($query_lock_test);
		$row = mysql_fetch_row($result_lock);
		
		if($row[0] == 0)
		{
			if($term != '0')
			{
				$query = "select * from terms where term = '$term' and year = '$year' and id != '$id'";
				$result = mysql_query($query);
				$rows = mysql_num_rows($result);
				
				if($rows ==0)
				{
					$start_date = $year_start . "-" . $month_start . "-" . $day_start;
					$end_date = $year_end . "-" . $month_end . "-" . $day_end;
					
					$query = "update terms set term='$term', year='$year', startdate='$start_date', enddate='$end_date' where id='$id'";
					mysql_query($query);
					
					$del_query = "DELETE FROM dates WHERE term_id='$id'";
					mysql_query($del_query);
					add_holidays($_POST, $id, $year);
					
					print "<div class='feedback success'>Term has been edited.</div>";
				}
				else { print "<div class='feedback error'>That term has already exists.</div>"; }
			}
			else { print "<div class='feedback error'>Please enter a term.</div>"; }
		}
		else { print "<div class='feedback error'>The term is locked and can not be edited.</div>"; }
	}
}
	
function add_holidays($data, $id, $year)
{
	$counter = 1;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, 5);
		if($test == 'wkday')
		{
			if(isset($_POST['wkday'.$counter]))
			{
				$weekday = $_POST['wkday'.$counter];
				$day = $_POST['daymo'.$counter];
				$month = $_POST['month'.$counter];
				$name = mysql_prep($_POST['descp'.$counter]);
				//print "$weekday $day $month";
				if($weekday != "0" && $day != "0" && $month != "0")
				{
					$date = $year . "-" . $month . "-" . $day;
					$query = "insert into dates values('', '$id', '$date', '$weekday', '$name', '$counter')";
					mysql_query($query);
				}
				$counter++;
			}
		}
	}
}

function display_terms()
{
	$counter = 1;
	$termnames = array('', 'Winter', 'Spring', 'Summer', 'Fall');
	$query = "select id, term, year, date_format(startdate, '%M %e, %Y'), date_format(enddate, '%M %e, %Y'), locked from terms order by year DESC, term DESC";
	$result = mysql_query($query);
	while($row = mysql_fetch_row($result))
	{
		list($id, $term, $year, $startdate, $enddate, $locked) = $row;
		if($counter < 3) { $class = "open"; }
		else { $class = "closed"; }
		
		print "<div class = 'frame container'>";
		print "<h3>$termnames[$term] $year</h3>";
		print "<div class='$class'>";
		print "<p><strong>Start Date:</strong> $startdate<br />";
		print "<strong>End Date:</strong> $enddate</p>";
		
		$datequery = "select date_format(date, '%M %e, %Y'), day, name from dates where term_id = '$id' order by ordr";
		$dateresult = mysql_query($datequery);
		$numrows = mysql_num_rows($dateresult);
		if($numrows > 0)
		{
			print "<p><strong>Holidays:</strong><br />";
			while($row = mysql_fetch_row($dateresult))
			{
				list($date, $day, $name) = $row;
				print "$name, $day, $date<br />\n";
			}
			print "</p>\n";
		}
		
		
		if($locked == 0)
		{
			print "<p><a href='admin.php?termedit=$id'>Edit Term Dates</a></p>";
			print "<p><a href='admin.php?termsections=$id'>Edit Term Sections</a></p>";
			include('includes/admin/term-lock.php');
		}
		
		print "</div><!--end $class-->";
		print "</div><!--end frame-->";
		$counter++;
	}
}

function lock_term()
{
	if(isset($_POST['lockterm']))
	{
		$id = $_POST['id'];
		$query = "update terms set locked = '1' where id = '$id'";
		mysql_query($query);
		print "<p class='feedback success'>Term successfully locked.</p>";
	}
}

function list_terms()
{
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	$query = "select id, term, year from terms order by year, term";
	$result = mysql_query($query);
	while($row = mysql_fetch_row($result))
	{
		list($id, $term, $year) = $row;
		{
			print "<li><a href='admin.php?terms=yes&termview=$id'>$termnames[$term] $year</a></li>";
		}
	}
}

function display_term_info($id, $item)
{
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	$query = "select term, year, startdate, enddate from terms where id='$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	
	$start_month = intval(substr($row[2], 5, 2));
	$start_day = intval(substr($row[2], 8, 2));
	
	$end_month = intval(substr($row[3], 5, 2));
	$end_day = intval(substr($row[3], 8, 2));
	
	$data = array( $termnames[$row[0]], $row[0], $row[1], $start_month, $start_day, $end_month, $end_day);
	$labels = array("termname", "termnumber", "year", "startmonth", "startday", "endmonth", "endday");
	
	$term_info = array_combine($labels, $data);
	$the_item = $term_info[$item];
	return $the_item;
}

function output_holidays($id)
{
	$query = "select day, date_format(date, '%M %e, %Y') from dates where term_id = '$id' order by ordr";
	$results = mysql_query($query);
	$numrows = mysql_num_rows($results);
	if($numrows > 0)
	{
		print "<ul>";
		while($row=mysql_fetch_row($results))
		{
			list($day, $date) = $row;
			print "<li>$day, $date</li>";
		}
		print "</ul>";
	}
}

function edit_holidays()
{
	if(isset($_GET['termedit']))
	{
		$termid = $_GET['termedit'];
		$query ="select date, day, name, ordr from dates where term_id='$termid' order by ordr";
		$result = mysql_query($query);
		$numrows = mysql_num_rows($result);
		if($numrows == 0)
		{
			include('includes/admin/term-holiday.php');
		}
		else
		{
			while($row = mysql_fetch_row($result))
			{
				list($date, $weekday, $name, $order)=$row;
				
				$month = intval(substr($date, 5, 2));
				$day = intval(substr($date, 8, 2));
				
				include('includes/admin/term-holiday-edit.php');
			}
		}
		print "<p><input type='button' id='addHoliday' value='add another holiday' /></p>\n";
	}	
}

function display_gradepolicy_editor($id)
{
	if(isset($_GET['gradepolicies']))
	{
		include('includes/admin/grade-policy-edit.php');
	}
}

?>