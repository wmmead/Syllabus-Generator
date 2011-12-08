<?php require_once('includes/session.php'); ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-courses.php'); ?>
<?php require_once('includes/authcheck.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>

<div id="logo"><a href="index.php"><img src="images/logo.png" alt="AI Syllabus Generator" /></a></div>

<?php
		if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
		{
			include('includes/users/loginform.php');
			print "</div></body></html>";
		}
		
		else
		{
?>

<?php add_course(); ?>
<?php edit_course(); ?>

<div id="page" class="coursepage">

	<div class="navigation frame">
	<?php include('includes/navigation.php'); ?>
    </div>

	<div class="middlecol">
    
	<?php
	
		if(isset($_GET['editcourse']))
		{
			include('includes/courses/course-edit.php');
		}
		elseif(isset($_GET['courseid']))
		{
			display_course_info();
		}
		else
		{
			include('includes/courses/course-add.php');
		}
	
	?>
    </div>
    
    <div class="rightcol">
    	<h2 class="mainheader">List of Courses</h2>
        <p><?php display_course_list(); ?></p>
    </div>

</div>

</body>
</html>

<?php } ?>

<?php require_once('includes/footer.php'); ?>