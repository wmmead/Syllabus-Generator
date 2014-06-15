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

function add_term($link)
{
	if(isset($_POST['addterm']) && $_SESSION['type'] == 2)
	{
		$term = mysql_prep($link, $_POST['term']);
		$year = mysql_prep($link, $_POST['year']);
		$day_start = mysql_prep($link, $_POST['day-start']);
		$month_start = mysql_prep($link, $_POST['month-start']);
		$year_start = mysql_prep($link, $_POST['year-start']);
		$day_end = mysql_prep($link, $_POST['day-end']);
		$month_end = mysql_prep($link, $_POST['month-end']);
		$year_end = mysql_prep($link, $_POST['year-end']);
		
		if($term != '0')
		{
			$query = "select * from terms where term = '$term' and year = '$year'";
			$result = mysqli_query($link, $query);
			$rows = mysqli_num_rows($result);
			
			if($rows ==0)
			{
				$start_date = $year_start . "-" . $month_start . "-" . $day_start;
				$end_date = $year_end . "-" . $month_end . "-" . $day_end;
				
				$query = "insert into terms values('', '$term', '$year', '$start_date', '$end_date', '0')";
				mysqli_query($link, $query);
				
				$lastid = mysqli_insert_id($link);
				
				add_holidays($link, $_POST, $lastid, $year);
				
				print "<div class='feedback success'>Term has been created.</div>";
			}
			else { print "<div class='feedback error'>That term has already been created.</div>"; }
		}
		else { print "<div class='feedback error'>Please enter a term.</div>"; }
	}
}

function edit_term($link)
{
	if(isset($_POST['editterm']) && $_SESSION['type'] == 2)
	{
		$id = $_POST['id'];
		$term = mysql_prep($link, $_POST['term']);
		$year = mysql_prep($link, $_POST['year']);
		$day_start = mysql_prep($link, $_POST['day-start']);
		$month_start = mysql_prep($link, $_POST['month-start']);
		$year_start = mysql_prep($link, $_POST['year-start']);
		$day_end = mysql_prep($link, $_POST['day-end']);
		$month_end = mysql_prep($link, $_POST['month-end']);
		$year_end = mysql_prep($link, $_POST['year-end']);
		
		$query_lock_test = "select locked from terms where id = '$id'";
		$result_lock = mysqli_query($link, $query_lock_test);
		$row = mysqli_fetch_row($result_lock);
		
		if($row[0] == 0)
		{
			if($term != '0')
			{
				$query = "select * from terms where term = '$term' and year = '$year' and id != '$id'";
				$result = mysqli_query($link, $query);
				$rows = mysqli_num_rows($result);
				
				if($rows ==0)
				{
					$start_date = $year_start . "-" . $month_start . "-" . $day_start;
					$end_date = $year_end . "-" . $month_end . "-" . $day_end;
					
					$query = "update terms set term='$term', year='$year', startdate='$start_date', enddate='$end_date' where id='$id'";
					mysqli_query($link, $query);
					
					$del_query = "DELETE FROM dates WHERE term_id='$id'";
					mysqli_query($link, $del_query);
					add_holidays($link, $_POST, $id, $year);
					
					print "<div class='feedback success'>Term has been edited.</div>";
				}
				else { print "<div class='feedback error'>That term has already exists.</div>"; }
			}
			else { print "<div class='feedback error'>Please enter a term.</div>"; }
		}
		else { print "<div class='feedback error'>The term is locked and can not be edited.</div>"; }
	}
}
	
function display_terms($link)
{
	$counter = 1;
	$termnames = array('', 'Winter', 'Spring', 'Summer', 'Fall');
	$query = "select id, term, year, date_format(startdate, '%M %e, %Y'), date_format(enddate, '%M %e, %Y'), locked from terms order by year DESC, term DESC";
	$result = mysqli_query($link, $query);
	while($row = mysqli_fetch_row($result))
	{
		list($id, $term, $year, $startdate, $enddate, $locked) = $row;
		if($counter < 3) { $class = "open"; }
		else { $class = "closed"; }
		
		print "<div class = 'frame'>";
		print "<h3>$termnames[$term] $year</h3>";
		print "<div class='$class'>";
		print "<p><strong>Start Date:</strong> $startdate<br />";
		print "<strong>End Date:</strong> $enddate</p>";
		
		$datequery = "select date_format(date, '%M %e, %Y'), day, name from dates where term_id = '$id' order by ordr";
		$dateresult = mysqli_query($link, $datequery);
		$numrows = mysqli_num_rows($dateresult);
		if($numrows > 0)
		{
			print "<p><strong>Holidays:</strong><br />";
			while($row = mysqli_fetch_row($dateresult))
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

function lock_term($link)
{
	if(isset($_POST['lockterm']))
	{
		$id = $_POST['id'];
		$query = "update terms set locked = '1' where id = '$id'";
		mysqli_query($link, $query);
		print "<p class='feedback success'>Term successfully locked.</p>";
	}
}

function list_terms($link)
{
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	$query = "select id, term, year from terms order by year, term";
	$result = mysqli_query($link, $query);
	while($row = mysqli_fetch_row($result))
	{
		list($id, $term, $year) = $row;
		{
			print "<li><a href='admin.php?terms=yes&termview=$id'>$termnames[$term] $year</a></li>";
		}
	}
}

function display_term_info($link, $id, $item)
{
	$termnames = array("", "Winter", "Spring", "Summer", "Fall");
	$query = "select term, year, startdate, enddate from terms where id='$id'";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_row($result);
	
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

/************** Holiday Functions **************/

function output_holidays($link, $id)
{
	$query = "select day, date_format(date, '%M %e, %Y') from dates where term_id = '$id' order by ordr";
	$results = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($results);
	if($numrows > 0)
	{
		print "<ul>";
		while($row=mysqli_fetch_row($results))
		{
			list($day, $date) = $row;
			print "<li>$day, $date</li>";
		}
		print "</ul>";
	}
}

function add_holidays($link, $data, $id, $year)
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
				$name = mysql_prep($link, $_POST['descp'.$counter]);
				//print "$weekday $day $month";
				if($weekday != "0" && $day != "0" && $month != "0")
				{
					$date = $year . "-" . $month . "-" . $day;
					$query = "insert into dates values('', '$id', '$date', '$weekday', '$name', '$counter')";
					mysqli_query($link, $query);
					$counter++;
				}
				
			}
		}
	}
}


function edit_holidays($link)
{
	if(isset($_GET['termedit']))
	{
		$termid = $_GET['termedit'];
		$query ="select date, day, name, ordr from dates where term_id='$termid' order by ordr";
		$result = mysqli_query($link, $query);
		$numrows = mysqli_num_rows($result);
		if($numrows == 0)
		{
			include('includes/admin/term-holiday.php');
		}
		else
		{
			while($row = mysqli_fetch_row($result))
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


/*********** Grade Policy Functions ************/

function display_gradepolicy_editor($link, $id)
{
	if(isset($_GET['gradepolicies']))
	{
		include('includes/admin/grade-policy-edit.php');
	}
}

function edit_grade_policies($link, $id)
{
	
	$termid = $id;
	
	$query = "select policy, ordr from gradingpolicies where term_id='$termid' and type='0' order by ordr";
	$result = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($result);
	
	if($numrows > 0 )
	{
		while($row = mysqli_fetch_row($result))
		{
			list($policy, $order)=$row;
			print "<p id='policyinput$order' class='clonedPolicy'>\n";
			print "<input id='policy$order' name='policy$order' type='text' class='policyfield' value='$policy' />\n";
			print "</p>\n";
		}
		print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
	}
	
	else
	{
		$prevtermid = $termid - 1;
		$query = "select policy, ordr from gradingpolicies where term_id='$prevtermid' and type='0' order by ordr";
		$result = mysqli_query($link, $query);
		$numrows = mysqli_num_rows($result);
		
		if($numrows > 0)
		{
			while($row = mysqli_fetch_row($result))
			{
				list($policy, $order) = $row;
				$query ="insert into gradingpolicies values('', '$termid', NULL, '0', '$policy', '$order')";
				mysqli_query($link, $query);
			}
			
			$query = "select policy, ordr from gradingpolicies where term_id='$termid' and type='0' order by ordr";
			$result = mysqli_query($link, $query);
			$numrows = mysqli_num_rows($result);
			
			if($numrows > 0 )
			{
				while($row = mysqli_fetch_row($result))
				{
					list($policy, $order)=$row;
					print "<p id='policyinput$order' class='clonedPolicy'>\n";
					print "<input id='policy$order' name='policy$order' type='text' class='policyfield' value='$policy' />\n";
					print "</p>\n";
				}
				print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
			}
		}
		else
		{
			print "<p id='policyinput1' class='clonedPolicy'>\n";
			print "<input id='policy1' name='policy1' type='text' class='policyfield' />\n";
			print "</p>\n";
			print "<p><input type='button' id='addPolicy' value='add another grade policy' /></p>\n";
		}
	}
}

function update_grade_policies($link)
{
	if(isset($_POST['updatepolicies']))
	{
		$id = $_POST['id'];
		$del_query = "DELETE FROM gradingpolicies WHERE term_id='$id' AND type='0'";
		mysqli_query($link, $del_query);
		add_policy($link, $_POST, $id);
	}
}

function add_policy($link, $data, $id)
{
	$counter = 1;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, 6);
		if($test == 'policy')
		{
			if(!empty($value))
			{
				$value = clean_up_ms(mysql_prep($link, $value));
				$query = "insert into gradingpolicies values('', '$id', NULL, '0', '$value', '$counter')";
				//print $query;
				mysqli_query($link, $query);
				$counter++;
			}
		}
		
	}
}


/*********** Section Functions ************/

function display_section_editor($link, $id)
{
	if(isset($_GET['sections']))
	{
		include('includes/admin/section-edit.php');
	}
}

function edit_section_policies($link, $id)
{
	$termid = $id;
	
	$query = "select title, content, ordr from sections where term_id='$termid' order by ordr";
	$result = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($result);
	
	if($numrows > 0 )
	{
		print "<div class='fieldcontainer'>\n";
		while($row = mysqli_fetch_row($result))
		{
			list($title, $content, $order)=$row;
			print "<div id='sectioninput$order' class='clonedSection'>\n";
			print "<label for='title$order'>Title</label><br />\n";
			print "<input id='title$order' name='title$order' type='text' class='sectionfield' value='$title' /><br /><br />\n";
			print "<label for='content$order'>Content</label><br />\n";
			print "<textarea id='content$order' name='content$order' class='sectionfield' cols='58' rows='15'>$content</textarea>\n";
			print "</div>\n";
		}
		print "</div>\n";
		print "<p><input type='button' id='addSection' value='add another section' /></p>\n";
	}
	else
	{
		$prevtermid = $termid - 1;
		$query = "select title, content, ordr from sections where term_id='$prevtermid' order by ordr";
		$result = mysqli_query($link, $query);
		$numrows = mysqli_num_rows($result);
		
		if($numrows > 0)
		{
			while($row = mysqli_fetch_row($result))
			{
				list($title, $content, $order) = $row;
				$query ="insert into sections values('', '$termid', '$title', '$content', '$order')";
				mysqli_query($link, $query);
			}
			$query = "select title, content, ordr from sections where term_id='$termid' order by ordr";
			$result = mysqli_query($link, $query);
			$numrows = mysqli_num_rows($result);
			
			if($numrows > 0 )
			{
				print "<div class='fieldcontainer'>\n";
				while($row = mysqli_fetch_row($result))
				{
					list($title, $content, $order)=$row;
					print "<div id='sectioninput$order' class='clonedSection'>\n";
					print "<label for='title$order'>Title</label><br />\n";
					print "<input id='title$order' name='title$order' type='text' class='sectionfield' value='$title' />
					<br /><br />\n";
					print "<label for='content$order'>Content</label><br />\n";
					print "<textarea id='content$order' name='content$order' class='sectionfield' 
					cols='58' rows='15'>$content</textarea>\n";
					print "</div>\n";
				}
				print "</div>\n";
				print "<p><input type='button' id='addSection' value='add another section' /></p>\n";
				
			}
		}
		else
		{
			print "<div class='fieldcontainer'>\n";
			print "<div id='sectioninput1' class='clonedSection'>\n";
			print "<label for='title1'>Title</label><br />\n";
			print "<input id='title1' name='title1' type='text' class='sectionfield' /><br /><br />\n";
			print "<label for='content1'>Content</label><br />\n";
			print "<textarea id='content1' name='content1' class='sectionfield' 
			cols='58' rows='15'></textarea>\n";
			print "</div>\n";
			print "</div>\n";
			print "<p><input type='button' id='addSection' value='add another section' /></p>\n";
			
		}
	}
}

function update_sections($link)
{
	if(isset($_POST['updatesection']))
	{
		$id = $_POST['id'];
		$del_query = "DELETE FROM sections WHERE term_id='$id'";
		mysqli_query($link, $del_query);
		add_sections($link, $_POST, $id);
	}
}

function add_sections($link, $data, $id)
{
	$counter = 1;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, 5);
		if($test == 'title')
		{
			$title = clean_up_ms(mysql_prep($link, $_POST['title'.$counter]));
			$content = mysql_prep($link, $_POST['content'.$counter]);
			if(!empty($title) && !empty($content))
			{
				$query = "insert into sections values('', '$id', '$title', '$content', '$counter')";
				//print $query;
				mysqli_query($link, $query);
				$counter++;
			}
		}
		
	}
}

function generate_department_list($link)
{
	$query = "select id, name, abbrv from depts order by name";
	$result = mysqli_query($link, $query);
	
	$dept_query = "SELECT dept, COUNT(*) FROM courses GROUP BY dept";
	$dept_result = mysqli_query($link, $dept_query);
	$dept_count = array();
	
	while($dept_row = mysqli_fetch_row($dept_result))
	{
		list($dept_id, $count) = $dept_row;
		$dept_count["$dept_id"] = "$count";
	}
	
	//print_r($dept_count);
	
	$counter = 0;
	
	print "<table class='usertable'>\n";
	print "<tr><th>Department Name</th><th>Abbrv</th><th># of Courses</th><th>Edit</th><th>Delete</th></tr>\n";
	
	while($row = mysqli_fetch_row($result))
	{
		list($id, $dept, $abbrv) = $row;
		if($counter %2 == 0)
		{
			print "<tr class='even'>\n";
		}
		else
		{
			print "<tr class='odd'>\n";
		}
		
		if(array_key_exists("$id", $dept_count))
		{
			$count = $dept_count["$id"];
		}
		else
		{
			$count = '0';
		}
		
		
		print "<td>$dept</td><td>$abbrv</td><td>$count</td><td><a href='admin.php?departments=yes&deptedit=$id' class='ligsymbol'>&#xe041;</a></td><td>";
		print output_delete_link($count, $id);
		print "</td>\n</tr>\n";
		
		$counter++;
		
	}
	
	print "</table>\n";
	
}

function output_delete_link($count, $id)
{
	if($count != '0')
	{
		$output = "<span class='ligsymbol' style='opacity:0.5;' title='can not delete'>&#xe12c;</span>";
	}
	else
	{
		$output = "<a href='admin.php?departments=yes&deletedept=$id' class='ligsymbol' title='delete this department'>&#xe12c;</a>";
	}
	return $output;
}

function dept_item($link, $item, $id)
{
	$key = KEY;
	$query = "select * from depts where id = '$id'";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_row($result);
		
	$field_names = array("id", "dept", "abbrv");
	$dept_info = array_combine($field_names, $row);
	$the_item = $dept_info[$item];
	return $the_item;
}

function update_departments($link)
{
	if(isset($_POST['updatedept']))
	{
		$id = mysql_prep($link, $_POST['id']);
		$dept = mysql_prep($link, $_POST['dept']);
		$abbrv = mysql_prep($link, $_POST['abbrv']);
		if(!empty($dept) && !empty($abbrv))
		{
			$query = "select * from depts where name='$dept' and abbrv='$abbrv' and id!='$id'";
			$result = mysqli_query($link, $query);
			$numrows = mysqli_num_rows($result);
			if($numrows == 0)
			{
				$query = "update depts set name = '$dept', abbrv = '$abbrv' where id = '$id'";
				mysqli_query($link, $query);
				print "<p class='success feedback'>Department successfully updated!</p>";
			}
			else { print "<p class='error feedback'>ERROR - Not saved. Duplicate record.</p>"; }
		}
		else { print "<p class='error feedback'>ERROR - you left a field blank</p>"; }
	}
}

function add_departments($link)
{
	if(isset($_POST['adddept']))
	{
		$dept = mysql_prep($link, $_POST['dept']);
		$abbrv = mysql_prep($link, $_POST['abbrv']);
		if(!empty($dept) && !empty($abbrv))
		{
			$query = "select * from depts where name='$dept' and abbrv='$abbrv'";
			$result = mysqli_query($link, $query);
			$numrows = mysqli_num_rows($result);
			if($numrows == 0)
			{
				$query = "insert into depts values('', '$dept', '$abbrv')";
				mysqli_query($link, $query);
				print "<p class='success feedback'>Department successfully added!</p>";
			}
			else { print "<p class='error feedback'>ERROR - Not saved. Duplicate record.</p>"; }
		}
		else { print "<p class='error feedback'>ERROR - you left a field blank</p>"; }
	}
}

function delete_departments($link)
{
	if(isset($_GET['deletedept']) && $_SESSION['type'] == 2)
	{
		$id = $_GET['deletedept'];
		
		$query = "select * from courses where dept='$id'";
		$result = mysqli_query($link, $query);
		$numrows = mysqli_num_rows($result);
		if($numrows == 0)
		{
			$query = "delete from depts where id='$id'";
			mysqli_query($link, $query);
			print "<p class='success feedback'>Department successfully deleted!</p>";
		}
		else { print "<p class='error feedback'>ERROR - Can't delete departments with classes</p>"; }
	}
}




?>