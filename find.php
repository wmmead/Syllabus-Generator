<?php require_once('includes/session.php'); ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-find.php'); ?>
<?php require_once('includes/authcheck.php'); ?>

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

<link rel="stylesheet" href="stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="stylesheets/skeleton.css" type="text/css">
<link rel="stylesheet" href="stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/script-course.js"></script>
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




<div id="page" class="container">

	<div class="three columns frame nav">
	<?php include('includes/navigation.php'); ?>
    </div>

	<div class="twelve columns">
    
    <h2 class="mainheader">Find a Syllabus</h2>
    <p>Use this page to find a syllabus for a class that has been taught here at AI Sacramento before. You can download the whole syllabi, view the instructors' portions of syllabi and even copy syllabi to use as a starting point for your own class. (Note: You can only copy a syllabus into a course with the same name.)</p>
    
    <p><strong>Select from either or both lists to find the syllabi you are looking for...</strong></p>
    
    
    
    <form method="post" action="find.php">
    
    <div class="five columns frame">
    <h3>Find by Course</h3>
    
    	<select name="course" id="course">
        	<option value="">-----</option>
        	<?php output_course_select_list(); ?>
        </select>
    
    </div>
    
    <div class="five columns frame">
    <h3>Find by Instructor</h3>
    
    	<select name="instructor" id="instructor">
        	<option value="">-----</option>
        	<?php output_instructor_select_list(); ?>
        </select>
    
    </div>
    
    
    
    	<input type="submit" name="findsyll" id="findsyll" value="Find the Syllabi">
    
    
    </form>
        
        <?php process_find_form(); ?>
        
    </div>
</div>

</body>
</html>

<?php } ?>

<?php require_once('includes/footer.php'); ?>