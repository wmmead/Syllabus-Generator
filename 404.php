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

<title>Syllabus Generator Page Not Found</title>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,200italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/stylesheets/base.css" type="text/css">
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
<div id="page">

	<header id="mainheader">
    	<div>
        	<h1>Syllabus<br>Generator</h1>
        </div>
	<img src="images/aiLogo.png" alt="logo">
    </header>
	<?php include('includes/navigation.php'); ?>

	<div style="text-align:center">
    
	<p>I am affraid you have found your way to a page that does not exist, but here is a picture of a bunny with a pancake on it's head.</p>
	<img src="http://farm1.staticflickr.com/97/252849242_373d779ccd.jpg" alt="bunny" style="display:block; margin:20px auto 200px auto;">
	</div>

</div>
</body>
</html>

<?php } ?>

<?php db_disconnect($link); ?>