<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-users.php'); ?>
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

<title>Syllabus Generator Users Page</title>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,200italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
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

<?php create_account($link); ?>
<?php edit_profile($link); ?>
<?php admin_edit_profile($link); ?>

	<header id="mainheader">
    	<div>
        	<h1>Syllabus<br>Generator</h1>
        </div>
	<img src="images/aiLogo.png" alt="logo">
    </header>
	<?php include('includes/navigation.php'); ?>
    
    <?php display_new_user_form($link); ?>
    <?php show_profile($link); ?>
    <?php display_profile_edit_form($link); ?>
    <?php display_user_edit_table($link); ?>
    <?php display_all_user_list($link); ?>
    
    
</div>

</body>
</html>

<?php } ?>

<?php db_disconnect($link); ?>