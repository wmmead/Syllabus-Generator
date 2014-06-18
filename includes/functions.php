<?php

/************** REQUIRED FILES *****************/

require("settings.php");


//General email function

function session_handler()
{
	session_start();
	if (isset($_GET['logoff']))
	{
		session_destroy();
		session_start();
	}
}

/*********** DATABASE CONNECTION FUNCTIONS *****************/

//connect to DB
function db_connect()
{
	$link = new mysqli(DB_HOST, DB_USER, DB_PWORD, DB_NAME);
	if ($link->connect_errno)
	{
		echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
	}
	
	return $link;
}

//disconnect from DB
function db_disconnect($link)
{
	if (isset($link))
	{
		mysqli_close($link);
	}
}

//check to see if user will authenticate
function auth_check($link)
{
	$val = set_codes();
	if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
	{
		if(isset($_POST['login']))
		{
			$login = mysql_prep($link, $_POST['login']);
			$password = mysql_prep($link, $_POST['password']);
			authenticateperson($link, $login, $password, KEY);
		}
	}
}

function page_loader($link, $page)
{
	$val = set_codes();
	if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
	{
		include('includes/users/loginform.php');
	}
	else
	{
		include("$page");	
	}
}

function exec_sum_page_loader($link)
{
	if(isset($_POST['create-exec-sum']))
	{
		$user_id = $_SESSION['id'];
		$class_id = $_POST['courseselect'];
		$query = "select count(id) from classes where id='$class_id' and user_id='$user_id'";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_row($result);
		if($row[0] == 1)
		{
			include('execsum/execsum-new.php');
		}
		else { print "<p>Authentication Error - Are you sure this is your class?</p>"; }
	}
	else
	{
		include('execsum/execsum-main.php');
	}
}



function email_user($to, $subject, $message, $from)
{
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}



//Department Select List
function output_dept_list($link, $selected='')
{
	$query = "select id, name from depts order by name asc";
	$result = mysqli_query($link, $query);
	output_select_list_options($link, $query, $result, $selected);
}

//Generate Select List

function output_select_list_options($link, $query, $result, $selected='')
{
	while ($list_items = mysqli_fetch_row($result))
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

function output_instructor_select_list($link)
{
	
	$query = "select id, fname, lname from users order by lname";
	$result = mysqli_query($link, $query);
	
	while ($row = mysqli_fetch_row($result))
	{
		list($id, $fname, $lname) = $row;
		print "<option value='$id'>$lname, $fname</option>\n";
	}
}

function output_course_select_list($link)
{
	// This select list will not include inactive courses
	
	$query = "select courses.id, coursenum, courses.name, abbrv from courses left join depts on courses.dept = depts.id where courses.active = '1' order by abbrv asc, courses.name asc";
	$result = mysqli_query($link, $query);
	
	while ($row = mysqli_fetch_row($result))
	{
		list($id, $coursenum, $name, $abbrv) = $row;
		print "<option value='$id'>$abbrv $name $coursenum</option>\n";
	}
}

//profile-items
function profile_item($link, $item, $id)
{
	$key = KEY;
	$query = "select id, fname, lname, phone, email, photo, info, type, status, login, decode(password, '$key') from users where id = '$id'";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_row($result);
	
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
function course_item($link, $item, $id)
{
	$query = "select * from courses where id = '$id'";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_row($result);
	
	$field_names = array("id", "number", "name", "desc", "totalhrs", "lecthrs", "labhrs", "credit", "dept", "active");
	$course_info = array_combine($field_names, $row);
	$the_item = $course_info[$item];
	return $the_item;	
}

function output_core_competencies($link, $id)
{
	$query = "select competency, level from competencies where course_id='$id' and type='0' order by ordr";
	$result = mysqli_query($link, $query);
	
	$num_rows = mysqli_num_rows($result);
	if($num_rows > 0)
	{
		$subliststart = 1;
		print "<ul class='disc'>";
		
		while($row = mysqli_fetch_row($result))
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
		if($subliststart != 1){ print "</ul></li>\n"; }
		print "</ul>";
	}
	else
	{
		print "<ul class='disc'>\n";
		print "<li>none</li>\n";
		print "</ul>\n";
	}
}

function output_prerequisites($link, $id)
{	
	$query = "select prereq from prereqs where course_id='$id' order by ordr";
	$result = mysqli_query($link, $query);
	
	$num_rows = mysqli_num_rows($result);
	if($num_rows > 0)
	{
		print "<ul class='disc'>";
		
		while($row = mysqli_fetch_row($result))
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

// Authenticates users
function authenticateperson($link, $login, $password, $key)
{
	if(!isset($_SESSION['login_counter']))
	{
		$_SESSION['login_counter'] = 0;
	}
	
	$val = set_codes();
	$query = "select * from users where login='$login' and password = encode('$password', '$key')";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_row($result);
	
	if(mysqli_num_rows($result) > 0)
	{
		$_SESSION['auth09328'] = $val;
		$_SESSION['id'] = $row[0];
		$_SESSION['type'] = $row[5];
	}
	else
	{
		$_SESSION['auth09328'] = "Incorrect Login";
		$_SESSION['login_counter']++;
	}
}

function output_login_error()
{
	if(isset($_SESSION['auth09328']))
	{
		if( $_SESSION['auth09328'] == "Incorrect Login" )
		{
			if(!isset($_POST['retrive-pass']))
			{
				echo "<p class='loginerror'>Incorrect Username / Password</p>";
			}
		}	
	}
}

function login_error_password_retrieval_form()
{
	if(isset($_SESSION['login_counter']))
	{
		$login_counter = $_SESSION['login_counter'];
		
		if($login_counter > 1)
		{
			include('users/password-retrival.php');
		}
	}

}

function process_lost_password_request($link)
{
	if(isset($_POST['retrive-pass']))
	{
		$key = KEY;
		$data = mysql_prep($link, $_POST['thefield']);
		
		$query = "select login, decode(password, '$key') from users where email = '$data'";
		$result = mysqli_query($link, $query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows == 1)
		{
			$row = mysqli_fetch_row($result);
			$login = $row[0];
			$password = $row[1];
			$email = $data;
			email_lost_credentials($email, $login, $password);
			print "<p class='reset-success'>Cluck, cluck, password sent. Check your email.</p>";
		}
		else
		{
			$query = "select email, decode(password, '$key') from users where login = '$data'";
			$result = mysqli_query($link, $query);
			$num_rows = mysqli_num_rows($result);
			if($num_rows == 1)
			{
				$row = mysqli_fetch_row($result);
				$email = $row[0];
				$password = $row[1];
				$login = $data;
				email_lost_credentials($email, $login, $password);
				print "<p class='reset-success'>Cluck, cluck, password sent. Check your email.</p>";
			}
			else
			{
				print "<p class='reset-fail'>Bok bok, I did not recognize your chicken scatches.</p>";
			}
		}
	}
}

function email_lost_credentials($email, $login, $password)
{
	$from = "syllabusgenerator@aiwired.com";
	$to = $email;
	$subject = "Syllabus Generator Info";
	$message = "Hi, your login for the syllabus generator system is $login and your password is $password.\r\n\r\n You should be able to log into the syllabus generator now. If you want to set your password to something you will remember, edit your profile once you have logged in.";
	
	email_user($to, $subject, $message, $from);
}

function check_user_level()
{
	$level = $_SESSION['type'];
	return $level;
}


function mysql_prep($link, $value) 
{
	$magic_quotes_active = get_magic_quotes_gpc();
	if($magic_quotes_active) { $value = stripslashes($value); }
	$value= mysqli_real_escape_string($link, $value);
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