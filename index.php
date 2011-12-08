<?php require_once('includes/session.php'); ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-users.php'); ?>
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

<div id="page">
	<div class="navigation frame">
		<?php include('includes/navigation.php'); ?>
    </div>
    
    <div class="middlecol">
    <h2 class="mainheader">Your Syllabi</h2>
    </div>
    
    <div class="rightcol">
    <h2 class="mainheader">Welcome Back</h2>
    <?php $id = $_SESSION['id']; ?>
    
    <div class="container">
    <img src="thumbs/<?php echo profile_item('photo', $id); ?>" class="thumb" />
        <div class="miniprofile">
        <p><strong><?php echo profile_item('fname', $id); ?> <?php echo profile_item('lname', $id); ?></strong></p>
        <p><?php echo profile_item('phone', $id); ?></p>
        <p><?php echo profile_item('email', $id); ?></p>
        <p><a href="users.php?profileedit=<?php print $id; ?>">Edit your profile</a></p>
        </div>
    </div>
        
        <h2 class="mainheader">Messages</h2>
    </div><!-- end rightcol -->
    
</div>

</body>
</html>

<?php } ?>

<?php require_once('includes/footer.php'); ?>