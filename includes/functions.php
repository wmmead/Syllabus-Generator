<?php
//General email function
function email_user($to, $subject, $message, $from)
{
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}

//Department Select List
function output_dept_list($selected='')
{
	$query = "select id, name from depts order by name asc";
	$result = mysql_query($query);
	output_select_list_options($query, $result, $selected);
}

//Generate Select List

function output_select_list_options($query, $result, $selected='')
{
	while ($list_items = mysql_fetch_row($result))
	{
		list($value, $name) = $list_items;
		if($value == $selected)
		{
			print "<option value='$value' selected='selected'>$name</option>\n";
		}
		else
		{
			print "<option value='$value'>$name</option>\n";
		}
	}
}

//Generate Date Select Lists
function year_list()
{
	$year = date('Y');
	$yearlist = array($year-1, $year, $year+1, $year+2);
	print "<option value='$yearlist[0]'>$yearlist[0]</option>\n";
	print "<option value='$yearlist[1]' selected = 'selected'>$yearlist[1]</option>\n";
	print "<option value='$yearlist[2]'>$yearlist[2]</option>\n";
	print "<option value='$yearlist[3]'>$yearlist[3]</option>\n";
}

function selected_year_list($year)
{
	$this_year = date('Y');
	$selected_year = $year;
	
	if($this_year > $selected_year)
	{
		$year_span = $this_year - $selected_year;
		$total_span = $year_span + 3;
		$yearcounter = $selected_year - 1;
		
		for($i = 0; $i < $total_span; $i++)
		{
			print "<option value='$yearcounter' ";
			if ( $yearcounter == $selected_year ) { print "selected = 'selected'"; }
			print ">$yearcounter</option>\n";
			$yearcounter++;
		}
		
	}
	
	elseif($this_year < $selected_year)
	{
		$year_span = $selected_year - $this_year;
		$total_span = $year_span + 3;
		$yearcounter = $this_year - 1;
		
		for($i = 0; $i < $total_span; $i++)
		{
			print "<option value='$yearcounter' ";
			if ( $yearcounter == $selected_year ) { print "selected = 'selected'"; }
			print ">$yearcounter</option>\n";
			$yearcounter++;
		}
		
	}
	else
	{
		$yearlist = array($year-1, $year, $year+1, $year+2);
		print "<option value='$yearlist[0]'>$yearlist[0]</option>\n";
		print "<option value='$yearlist[1]' selected = 'selected'>$yearlist[1]</option>\n";
		print "<option value='$yearlist[2]'>$yearlist[2]</option>\n";
		print "<option value='$yearlist[3]'>$yearlist[3]</option>\n";
	}
}
	
function month_select_list($selected='')
{
	$counter = 1;
	$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	
	if(!empty($selected))
	{
		$selected_month = $selected;
		foreach($months as $month)
		{
			if($counter != $selected_month)
			{
				print "<option value='$counter'>$month</option>\n";
			}
			else 
			{
				print "<option value='$counter' selected='selected'>$month</option>\n";
			}
			$counter++;
		}
	}
	else
	{
		foreach($months as $month)
		{
			print "<option value='$counter'>$month</option>\n";
			$counter++;
		}
	}
}

function weekday_select_list($selected = '')
{
	$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	
	if(!empty($selected))
	{
		$selected_day = $selected;
		foreach($days as $day)
		{
			if($day != $selected_day)
			{
				print "<option value='$day'>$day</option>\n";
			}
			else 
			{
				print "<option value='$day' selected='selected'>$day</option>\n";
			}
		}
	}
	
	else
	{
		foreach($days as $day)
		{
			print "<option value='$day'>$day</option>\n";
		}
	}
}

function day_select_list($selected = '')
{
	if(!empty($selected))
	{
		$selected_day = $selected;
		for($i=1; $i<32; $i++)
		{
			if($i != $selected_day)
			{
				print "<option value='$i'>$i</option>\n";
			}
			else 
			{
				print "<option value='$i' selected='selected'>$i</option>\n";
			}
		}
	}
	else
	{
		for($i=1; $i<32; $i++)
		{
			print "<option value='$i'>$i</option>\n";
		}
	}
}

function time_select_list($selected = '')
{
	$times = array("6:00 am", "6:30 am", "7:00 am", "7:30 am", "8:00 am", "8:30 am", "9:00 am", "9:30 am", "10:00 am", "10:30 am", "11:00 am", "12:00 pm", "12:30 pm", "1:00 pm", "1:30 pm", "2:00 pm", "2:30 pm", "3:00 pm", "3:30 pm", "4:00 pm", "4:30 pm", "5:00 pm", "5:30 pm", "6:00 pm", "6:30 pm", "7:00 pm", "7:30 pm", "8:00 pm", "8:30 pm", "9:00 pm", "9:30 pm", "10:00 pm", "10:30 pm", "11:00 pm", "11:30 pm", "12:00 am");
	
	if(!empty($selected))
	{
		$selected_time = $selected;
		foreach($times as $time)
		{
			if($time != $selected_time)
			{
				print "<option value='$time'>$time</option>\n";
			}
			else 
			{
				print "<option value='$time' selected='selected'>$time</option>\n";
			}
		}
	}
	
	else
	{
		foreach($times as $time)
		{
			print "<option value='$time'>$time</option>\n";
		}
	}
}

//profile-items
function profile_item($item, $id)
{
	$key = KEY;
	$query = "select id, fname, lname, phone, email, photo, info, type, status, login, decode(password, '$key') from users where id = '$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	
	if($row[5] == '')
	{
		$row[5] = 'default.jpg';
	}
	
	if($row[6] == '')
	{
		$row[6] = 'none listed';
	}
	
	$field_names = array("id", "fname", "lname", "phone", "email", "photo", "info", "type", "status", "login", "password");
	$profile_info = array_combine($field_names, $row);
	$the_item = $profile_info[$item];
	return $the_item;
}

//Course details
function course_item($item, $id)
{
	$query = "select * from courses where id = '$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	
	$field_names = array("id", "number", "name", "desc", "totalhrs", "lecthrs", "labhrs", "credit", "dept");
	$course_info = array_combine($field_names, $row);
	$the_item = $course_info[$item];
	return $the_item;	
}

function output_core_competencies($id)
{
	$query = "select competency, level from competencies where course_id='$id' and type='0' order by ordr";
	$result = mysql_query($query);
	
	$num_rows = mysql_num_rows($result);
	if($num_rows > 0)
	{
		$subliststart = 1;
		print "<ul class='disc'>";
		
		while($row = mysql_fetch_row($result))
		{
			list($competency, $level) = $row;
			if($level == 0)
			{
				if($subliststart != 1){ print "</ul></li>\n"; }
				print "<li>$competency</li>";
			}
			
			if($level == 1)
			{
				if($subliststart != 1){ print "</ul></li>\n"; }
				print "<li><strong>$competency</strong>\n <ul class='disc'>";
				$subliststart = 1;
			}
			if($level == 2)
			{
				print "<li>$competency</li>";
				$subliststart++;
			}
			
		}
		
		print "</ul>";
	}
	else
	{
		print "<ul class='disc'>\n";
		print "<li>none</li>\n";
		print "</ul>\n";
	}
}

function output_prerequisites($id)
{	
	$query = "select prereq from prereqs where course_id='$id' order by ordr";
	$result = mysql_query($query);
	
	$num_rows = mysql_num_rows($result);
	if($num_rows > 0)
	{
		print "<ul class='disc'>";
		
		while($row = mysql_fetch_row($result))
		{
			list($prereq) = $row;
			print "<li>$prereq</li>";
		}
		
		print "</ul>";
	}
	else
	{
		print "<ul class='disc'>\n";
		print "<li>none</li>\n";
		print "</ul>\n";
	}
}


//Authentication Functions
function set_codes()
{
	if(!isset($_SESSION['validcode']))
	{
		$_SESSION['validcode'] = rand(1000000, 9000000);
		$val = $_SESSION['validcode'];
		return $val;
	}
	else
	{
		$val = $_SESSION['validcode'];
		return $val;
	}
}

function authenticateperson($login, $password, $key)
{
	$val = set_codes();
	$query = "select * from users where login='$login' and password = encode('$password', '$key')";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	
	if(mysql_num_rows($result) > 0)
	{
		$_SESSION['auth09328'] = $val;
		$_SESSION['id'] = $row[0];
		$_SESSION['type'] = $row[5];
	}
	else
	{
		$_SESSION['auth09328'] = "Incorrect Login";
	}
}

function check_user_level()
{
	$level = $_SESSION['type'];
	return $level;
}


function mysql_prep($value) 
{
	$magic_quotes_active = get_magic_quotes_gpc();
	if($magic_quotes_active) { $value = stripslashes($value); }
	$value= mysql_real_escape_string($value);
	return $value;
}

function clean_up_ms($src)
{
	$src = str_replace("‘", "\'", $src);
	$src = str_replace("’", "\'", $src);
	$src = str_replace("”", '\"', $src);
	$src = str_replace("“", '\"', $src);
	$src = str_replace("–", "-", $src);
	$src = str_replace("…", "...", $src);
	$src = str_replace("•	", "", $src);
	return $src;	
}

function cut_long_strings($string, $length)
{
	$string = substr($string, 0, $length);
	return $string;
}

function escape_quotes($src)
{
	$src = str_replace("'", "\'", $src);
	$src = str_replace('&ldquo;', '"', $src);
	$src = str_replace('&rdquo;', '"', $src);
	$src = str_replace('&rsquo;', "\'", $src);
	$src = str_replace('&lsquo;', "\'", $src);
	return $src;
}

?>