<?php session_start();
if (isset($_GET['logoff']))
{
	session_destroy();
	session_start();
}
?>

<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-users.php'); ?>

<?php 

$val = set_codes();
if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
{
	if(isset($_POST['login']))
	{
	authenticateperson(mysql_prep($_POST['login']), mysql_prep($_POST['password']), KEY);
	}
}
?>

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

<?php create_account(); ?>
<?php edit_profile(); ?>
<?php admin_edit_profile(); ?>



<div id="page" class="users">
	<div class="navigation frame">
		<?php include('includes/navigation.php'); ?>
    </div>
    
    <?php display_all_user_list(); ?>
    
    <?php display_new_user_form(); ?>
    <?php show_profile(); ?>
    <?php display_profile_edit_form(); ?>
    <?php display_user_edit_table(); ?>
    
    
</div>

</body>
</html>

<?php } ?>

<?php require_once('includes/footer.php'); ?>