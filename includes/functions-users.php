<?php

function display_new_user_form()
{
	if(isset($_GET['newuser']) && $_SESSION['type'] > 0)
	{
		include('includes/users/user-new.php');
	}
}

function create_account()
{
	$key = KEY;
	$server= THE_SERVER;
	
	if(isset($_POST['addaccount']))
	{
		if(!empty($_POST['fname']) && 
		!empty($_POST['lname']) && 
		!empty($_POST['login']) && 
		!empty($_POST['email']) && 
		!empty($_POST['phone']))
		{
			$fname = mysql_prep($_POST['fname']);
			$lname = mysql_prep($_POST['lname']);
			$login = mysql_prep($_POST['login']);
			$email = mysql_prep($_POST['email']);
			$phone = mysql_prep($_POST['phone']);
			
			if(preg_match(RE_NAME, $fname) && 
			preg_match(RE_NAME, $lname) && 
			preg_match(RE_PASSWORD, $login) && 
			preg_match(RE_EMAIL, $email) &&
			preg_match(RE_PHONE, $phone))
			{
				if(isset($_POST['type']))
				{
					$type = $_POST['type'];
				}
				else
				{
					$type = 0;
				}
				
				$password = 'cheese'; //generatePassword(8,4); //for testing it is set to cheese.
				
				$query = "select fname from users where login = '$login'";
				$result = mysql_query($query);
				$numrows = mysql_num_rows($result);
				if($numrows == 0)
				{
					$query = "insert into users values('', '$fname', '$lname', '$login', encode('$password', '$key'), '$type', '$phone', '$email', '1', '', '' )";
					mysql_query($query);
					
					if(isset($_SESSION['id']))
					{
						$id = $_SESSION['id'];
						$query2 = "select fname, lname, email from users where id = '$id'";
						$result = mysql_query($query2);
						$row = mysql_fetch_row($result);
						
						$from = $row[2];
						$to = $email;
						$subject = "Syllabus Generator New Account";
						$message = "Hi, your account for the Syllabus Generator has been created. Your login for the system is $login and your password is $password.\r\n\r\n Go to $server to login and edit your profile to change the password to something you can remember.";
						
						email_user($to, $subject, $message, $from);
					}
					
					else { }//put code in here for user self sign up 
					
					print "<div class='feedback success'>User Added</div>";
				}
				else { print "<div class='feedback error'>Already a user with that login</div>"; }
			}
			else { print "<div class='feedback error'>Please format your field properly</div>"; }
		}
		else { print "<div class='feedback error'>Please fill all the fields</div>"; }
	}
}

function edit_profile()
{
	if(isset($_POST['editprofile']))
	{
		if(!empty($_POST['fname']) && 
		!empty($_POST['lname']) && 
		!empty($_POST['login']) && 
		!empty($_POST['password']) && 
		!empty($_POST['email']) && 
		!empty($_POST['phone']))
		{
			
			$key = KEY;
			$id = mysql_prep($_POST['id']);
			$fname = mysql_prep($_POST['fname']);
			$lname = mysql_prep($_POST['lname']);
			$login = mysql_prep($_POST['login']);
			$password = mysql_prep($_POST['password']);
			$email = mysql_prep($_POST['email']);
			$phone = mysql_prep($_POST['phone']);
			$info = mysql_prep($_POST['info']);
			
			if(preg_match(RE_NAME, $fname) && 
			preg_match(RE_NAME, $lname) && 
			preg_match(RE_PASSWORD, $login) && 
			preg_match(RE_PASSWORD, $password) &&
			preg_match(RE_EMAIL, $email) &&
			preg_match(RE_PHONE, $phone))
			{
				$query = "select fname from users where login = '$login' and id != '$id'";
				$result = mysql_query($query);
				$numrows = mysql_num_rows($result);
				if($numrows == 0)
				{
					$query ="update users set fname = '$fname', lname = '$lname', email = '$email', 
					phone = '$phone', login = '$login', password = encode('$password', '$key'), 
					info = '$info' where id = '$id'";
					
					mysql_query($query);
					
					if($_FILES['photo']['name'] != '' && $_FILES['photo']['error'] == 0)
					{
						delete_old_photos($id);
						add_photo_record($id);
					}
					
					print "<div class='feedback success'>Profile Edited</div>";
				}
				else { print "<div class='feedback error'>Already a user with that login</div>"; }
			}
			else { print "<div class='feedback error'>Please format your field properly</div>"; }
		}
		else { print "<div class='feedback error'>Please fill all the required fields</div>"; }
	}
}


function admin_edit_profile()
{
	if(isset($_POST['updateuser']) || isset($_POST['updateuserpass']))
	{
		if(!empty($_POST['fname']) && 
		!empty($_POST['lname']) && 
		!empty($_POST['login']) &&  
		!empty($_POST['email']) && 
		!empty($_POST['phone']))
		{
			$server= THE_SERVER;
			$key = KEY;
			$id = mysql_prep($_POST['id']);
			$fname = mysql_prep($_POST['fname']);
			$lname = mysql_prep($_POST['lname']);
			$login = mysql_prep($_POST['login']);
			$email = mysql_prep($_POST['email']);
			$phone = mysql_prep($_POST['phone']);
			$type = mysql_prep($_POST['type']);
			$status = mysql_prep($_POST['status']);
			
			if(preg_match(RE_NAME, $fname) && 
			preg_match(RE_NAME, $lname) && 
			preg_match(RE_PASSWORD, $login) && 
			preg_match(RE_EMAIL, $email) &&
			preg_match(RE_PHONE, $phone))
			{
				$query = "select fname from users where login = '$login' and id != '$id'";
				$result = mysql_query($query);
				$numrows = mysql_num_rows($result);
				if($numrows == 0)
				{
					$query ="update users set fname = '$fname', lname = '$lname', email = '$email', 
					phone = '$phone', login = '$login', type = '$type', 
					status = '$status' where id = '$id'";
					
					if(isset($_POST['updateuserpass']))
					{
						$password = generatePassword(8,4);
						
						$query ="update users set fname = '$fname', lname = '$lname', email = '$email', 
						phone = '$phone', login = '$login', type = '$type', status = '$status', 
						password = encode('$password', '$key') where id = '$id'";
						
						$id = $_SESSION['id'];
						$query2 = "select fname, lname, email from users where id = '$id'";
						$result = mysql_query($query2);
						$row = mysql_fetch_row($result);
						
						$from = $row[2];
						$to = $email;
						$subject = "Syllabus Generator Password Reset";
						$message = "Hi, your login for the syllabus generator system is $login and your password is $password.\r\n\r\n Go to $server to login and edit your profile to change the password to something you can remember.";
						
						email_user($to, $subject, $message, $from);
					}
					
					mysql_query($query);
					
					print "<div class='feedback success'>Profile Edited</div>";
				}
				else { print "<div class='feedback error'>Already a user with that login</div>"; }
			}
			else { print "<div class='feedback error'>Please format the fields properly</div>"; }
		}
		else { print "<div class='feedback error'>Please complete all the required fields</div>"; }
	}
}

function display_users()
{
	
	$query="select id, fname, lname, phone, email, photo, type, status from users where status = 1 order by lname";
	$result= mysql_query($query);

	while($row = mysql_fetch_row($result))
	{
		list ($id, $fname, $lname, $phone, $email, $photo, $type, $status) = $row;
		print "<div class='user'>";
		if($photo == "")
		{
			print "<img src='thumbs/default.jpg' class='thumb' alt='$fname $lname' />";
		}
		else
		{
			print "<img src='thumbs/$photo' class='thumb' alt='$fname $lname' />";
		}
		print "<div>";
		print "<p><a href='users.php?profileid=$id'>$fname $lname</a><br>";
		print "$phone<br>";
    	print "$email</p>";
		print "</div>";
		print "</div>";
	}
}

function show_profile()
{
	if(isset($_GET['profileid'])){ include('users/user-profile.php'); }	
}

function display_profile_edit_form()
{
	if(isset($_GET['profileedit']) && $_GET['profileedit'] == $_SESSION['id'] )
	{
		include('includes/users/user-edit.php');
	}
}

function p_item($item)
{
	if(isset($_GET['profileid']))
	{
		$id = $_GET['profileid'];
		 return profile_item($item, $id); 
	}
	elseif(isset($_GET['profileedit']))
	{
		$id = $_GET['profileedit'];
		return profile_item($item, $id);
	}
	elseif(isset($_GET['useredit']))
	{
		$id = $_GET['useredit'];
		return profile_item($item, $id);
	}
	else
	{
		return "error";
	}
	
}

function display_user_edit_table()
{
	if(isset($_GET['adminedit']))
	{
		if(check_user_level() > 0)
		{
			include('includes/users/admin-user-edit.php');
		}
	}
}

function display_all_user_list()
{
	if(!isset($_GET['adminedit']))
	{
		include('includes/users/all-user-list.php');
	}
}

function generate_admin_user_list()
{
	$query = "select id, fname, lname, login, phone, email, type, status from users order by lname";
	$result = mysql_query($query);
	
	$usertype = array("Instructor", "Director", "Administrator");
	$userstatus = array("Inactive", "Active");
	$counter = 0;
	
	print "<table class='usertable'>\n";
	print "<tr><th>First Name</th><th>Last Name</th><th>Login</th><th>Phone</th><th>Email</th><th>Type</th><th>Status</th><th></th></tr>\n";
	
	while($row = mysql_fetch_row($result))
	{
		list($id, $fname, $lname, $login, $phone, $email, $type, $status) = $row;
		if($counter %2 == 0)
		{
			print "<tr class='even'>\n";
		}
		else
		{
			print "<tr class='odd'>\n";
		}
		
		print "<td>$fname</td><td>$lname</td><td>$login</td><td>$phone</td><td>$email</td><td>$usertype[$type]</td><td>$userstatus[$status]</td><td><a href='users.php?adminedit=yes&useredit=$id'>edit</a></td>\n</tr>\n";
		
		$counter++;
		
	}
	
	print "</table>\n";
	
}

function generatePassword($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

function add_photo_record($id)
{
	if(!empty($_FILES['photo']))
	{
		$userfile = $_FILES['photo']['tmp_name'];
		$userfile_name = $_FILES['photo']['name'];
		$userfile_size = $_FILES['photo']['size'];
		$userfile_type = $_FILES['photo']['type'];
		$userfile_error = $_FILES['photo']['error'];
		
		$ext =  substr(strrchr($userfile_name, "."), 0);//strips off everything but the extenstion: .jpg
		$userfile_name = "userphoto".$id.$ext;
		
		if ($userfile_error > 0)
		{
			switch ($userfile_error)
			{
				case 1:  $message = "<div class='feedback error'>Problem: File exceeded upload_max_filesize</div>";  break;
				case 2:  $message = "<div class='feedback error'>Problem: File exceeded max_file_size</div>";  break;
				case 3:  $message = "<div class='feedback error'>Problem: File only partially uploaded</div>";  break;
				case 4:  $message = "<div class='feedback error'>Problem: No file uploaded</div>";  break;
			}
			print $message;
		}
		
		else
		{
			if ($userfile_type != "image/pjpeg" && $userfile_type != "image/jpg" && 
				$userfile_type != "image/jpeg" && $userfile_type != "image/gif" && 
				$userfile_type != "image/x-png")
				{
					$message = "<div class='feedback error'>Problem: file is not an image $userfile_type</div>";
					print $message;
				}
				
			else
			{
				$query = "update users set photo = '$userfile_name' where id = '$id'";
				mysql_query($query);
				upload_user_picts($userfile, $userfile_name);
				reduce_image_size($userfile_name, $userfile_type);
				create_square_thumbnails($userfile_name, $userfile_type);
			}
		}
	}
}

//upload user pictures
function upload_user_picts($userfile, $userfile_name)
{
		$upfile = IMG_PATH.$userfile_name;
		if (is_uploaded_file($userfile))
		{
			$check = move_uploaded_file($userfile, $upfile);
			if(!$check)
			{
				print "<div class='feedback error'>Problem: Could not move file to destination directory</div>";
				exit;
			}  
		}
		else
		{
			print "<div class='feedback error'>Problem: Possible file upload attack. Filename: $userfile_name</div>";
			exit;
		}

}

function delete_old_photos($id)
{
	$query = "select photo from users where id = '$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$photo = $row[0];
	
	if ($photo != '')
	{
		$original_photo = IMG_PATH.$photo;
		$resized_photo = RESIZED_PATH.$photo;
		$thumb_photo = THUMB_PATH.$photo;
		
		unlink($original_photo);
		unlink($resized_photo);
		unlink($thumb_photo);
	}
}

//Reduce image size
function reduce_image_size($userfile_name, $userfile_type)
{
	//get the file and figure out what type of file it is and some of its attributes
	switch ($userfile_type)
	{
		case "image/pjpeg": $tempbig = imagecreatefromjpeg(IMG_PATH.$userfile_name);  break;
		case "image/jpeg": $tempbig = imagecreatefromjpeg(IMG_PATH.$userfile_name);  break;
		case "image/jpg": $tempbig = imagecreatefromjpeg(IMG_PATH.$userfile_name);  break;
		case "image/gif": $tempbig = imagecreatefromgif(IMG_PATH.$userfile_name);  break;
		case "image/x-png": $tempbig = imagecreatefrompng(IMG_PATH.$userfile_name);  break;
		case "image/png": $tempbig = imagecreatefrompng(IMG_PATH.$userfile_name);  break;
	}
	 
	$bigsize = getimagesize(IMG_PATH.$userfile_name);
	$bigwidth = $bigsize[0];
	$bigheight = $bigsize[1];
	
	//If the image is wider than 200 px
	if ($bigwidth > 125)
	{
		$ratio = ($bigwidth/125);
		$newheight = ($bigheight/$ratio);
		$tempmed = imagecreatetruecolor(125, $newheight);
		
		imagecopyresampled($tempmed, $tempbig, 0, 0, 0, 0, 125, $newheight, $bigwidth, $bigheight);
		
		switch ($userfile_type)
		{
			case "image/pjpeg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/jpeg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/jpg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/gif": imagegif($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/x-png": imagepng($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/png": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
		}
		imagedestroy($tempbig);
		imagedestroy($tempmed);
	}
	
	//If the image is less than 125px wide, and it is taller than 400 px
	elseif ($bigheight > $bigwidth && $bigheight > 400)
	{
		$ratio = ($bigheight/400);
		$newwidth = ($bigwidth/$ratio);
		$tempmed = imagecreatetruecolor($newwidth, 400);
		
		imagecopyresampled($tempmed, $tempbig, 0, 0, 0, 0, $newwidth, 400, $bigwidth, $bigheight);
		
		switch ($userfile_type)
		{
			case "image/pjpeg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/jpeg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/jpg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/gif": imagegif($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/x-png": imagepng($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/png": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
		}
		
		imagedestroy($tempbig);
		imagedestroy($tempmed);
	}
	//If the image is less than 125 px wide and 400 px tall we just copy it to the new folder
	else
	{
		$tempmed = imagecreatetruecolor($bigwidth, $bigheight);
		
		imagecopyresampled($tempmed, $tempbig, 0, 0, 0, 0, $bigwidth, $bigheight, $bigwidth, $bigheight);
		
		switch ($userfile_type)
		{
			case "image/pjpeg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/jpeg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/jpg": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/gif": imagegif($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/x-png": imagepng($tempmed, RESIZED_PATH.$userfile_name, 95); break;
			case "image/png": imagejpeg($tempmed, RESIZED_PATH.$userfile_name, 95); break;
		}
		
		imagedestroy($tempbig);
		imagedestroy($tempmed);
	}
}

//create square thumb file
function create_square_thumbnails($userfile_name, $userfile_type)
{
		
		switch ($userfile_type)
		{
			case "image/pjpeg": $tempbig = imagecreatefromjpeg(IMG_PATH.$userfile_name);  break;
			case "image/jpeg": $tempbig = imagecreatefromjpeg(IMG_PATH.$userfile_name);  break;
			case "image/jpg": $tempbig = imagecreatefromjpeg(IMG_PATH.$userfile_name);  break;
			case "image/gif": $tempbig = imagecreatefromgif(IMG_PATH.$userfile_name);  break;
			case "image/x-png": $tempbig = imagecreatefrompng(IMG_PATH.$userfile_name);  break;
			case "image/png": $tempbig = imagecreatefrompng(IMG_PATH.$userfile_name);  break;
		}
		
		$bigsize = getimagesize(IMG_PATH.$userfile_name);
		$bigwidth = $bigsize[0];
		$bigheight = $bigsize[1];
		
		$tempsmall = imagecreatetruecolor(50, 50);
		if($bigwidth > $bigheight)
		{
			$xstart = ($bigwidth/2)-($bigheight/2);
			
			imagecopyresampled($tempsmall, $tempbig, 0, 0, $xstart, 0, 50, 50, $bigheight, $bigheight);
			
			switch ($userfile_type)
			{
				case "image/pjpeg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/jpeg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/jpg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/gif": imagegif($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/x-png": imagepng($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/png": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
			}
			 
			imagedestroy($tempbig); 
			imagedestroy($tempsmall); 
		}
		elseif($bigheight > $bigwidth)
		{
			$ystart = ($bigheight/2)-($bigwidth/2);
			
			imagecopyresampled($tempsmall, $tempbig, 0, 0, 0, $ystart, 50, 50, $bigwidth, $bigwidth);
			
			switch ($userfile_type)
			{
				case "image/pjpeg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/jpeg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/jpg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/gif": imagegif($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/x-png": imagepng($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/png": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
			}
			 
			imagedestroy($tempbig); 
			imagedestroy($tempsmall); 
		}
		else
		{
			imagecopyresampled($tempsmall, $tempbig, 0, 0, 0, 0, 50, 50, $bigwidth, $bigheight);
			
			switch ($userfile_type)
			{
				case "image/pjpeg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/jpeg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/jpg": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/gif": imagegif($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/x-png": imagepng($tempsmall, THUMB_PATH.$userfile_name, 95); break;
				case "image/png": imagejpeg($tempsmall, THUMB_PATH.$userfile_name, 95); break;
			}
			 
			imagedestroy($tempbig); 
			imagedestroy($tempsmall);
		}
}


?>