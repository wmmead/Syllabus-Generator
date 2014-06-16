<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-courses.php'); ?>
<?php session_handler(); ?>
<?php $link = db_connect(); ?>
<?php auth_check($link); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="description" content="Art Institute Syllabus Generator">
<meta name="author" content="William Mead">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>AI Syllabus Generator Course Page</title>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,200italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/script-course.js"></script>
</head>

<body>

<?php
		$val = set_codes();
		if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
		{
			include('includes/users/loginform.php');
			print "</div></body></html>";
		}
		
		else
		{
?>


<div id="page">

<?php add_course($link); ?>
<?php edit_course($link); ?>

	<header id="mainheader">
    	<div>
        	<h1>Syllabus<br>Generator</h1>
        </div>
	<img src="images/aiLogo.png" alt="logo">
    </header>
	<?php include('includes/navigation.php'); ?>
    

	<section class="two-thirds">
    
	<?php
	
		if(isset($_GET['editcourse']))
		{
			include('includes/courses/course-edit.php');
		}
		elseif(isset($_GET['courseid']))
		{
			include('includes/courses/course-desc.php');
		}
		else
		{
			include('includes/courses/course-add.php');
		}
	
	?>
    </section>
    
    <section class="one-third">
    	<h2 class="mainheader">List of Courses</h2>
    	<div class="courselist">
        <p><?php collapsed_course_list($link); ?></p>
    	</div>
    </section>

</div>

</body>
</html>

<?php } ?>

<?php db_disconnect($link); ?>