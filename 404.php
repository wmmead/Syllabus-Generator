<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-syllabi.php'); ?>
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

<title>AI Syllabus Generator Main Page</title>

<link rel="stylesheet" href="/stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="/stylesheets/skeleton.css" type="text/css">
<link rel="stylesheet" href="/stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!--
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="js/jquery.calculation.min.js"></script>
<script type="text/javascript" src="js/script-index.js"></script>
-->

</head>

<body>

<div id="logo"><a href="index.php"><img src="/images/logo.png" alt="AI Syllabus Generator" /></a></div>

<?php
		if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
		{
			include('includes/users/loginform.php');
			print "</div></body></html>";
		}
		
		else
		{
?>
	<?php $userid = $_SESSION['id']; ?>
<div id="page" class="container">

	<div class="three columns frame nav">
	<?php include('includes/navigation.php'); ?>
    </div>

	<div class="twelve columns" style="text-align:center">
    
	<p>I am affraid you have found your way to a page that does not exist, but here is a picture of a bunny with a pancake on it's head.</p>
	<img src="http://farm1.staticflickr.com/97/252849242_373d779ccd.jpg" alt="bunny" style="display:block; margin:20px auto 200px auto;">
	</div>

</div>
</body>
</html>

<?php } ?>

<?php db_disconnect($link); ?>