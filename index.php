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

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,200italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/jquery.calculation.min.js"></script>
<script type="text/javascript" src="js/script-index.js"></script>

</head>

<body>

<?php
		$val = set_codes();
		if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
		{
			include('includes/users/loginform.php');
			output_login_error();
			process_lost_password_request($link);
			login_error_password_retrieval_form();
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
    
    <section class="two-thirds">
    
    <!-- page functions here -->
        <?php add_syllabus($link); ?>
        <?php process_syllabus_review($link); ?>
        <?php submit_draft_request($link); ?>
        <?php delete_instructor_message($link); ?>
        <?php copy_syllabus($link); ?>
        <?php delete_syllabus_draft($link); ?>
    
    <?php
        if(isset($_GET['addsyll']))
		{
			include('includes/syllabi/add-syllabus.php');
		}
		elseif(isset($_GET['sylledit']))
		{
			submit_syllabus_for_review($link, $_GET['sylledit']);
			include_message_form($link, $_GET['sylledit']);
			display_edit_or_review($link, $_GET['sylledit']);
		}
		elseif(isset($_GET['syllcopy']))
		{
			include('includes/syllabi/copy-syllabus.php');
		}
		elseif(isset($_GET['sylldelete']))
		{
			include('includes/syllabi/delete-syllabus-draft.php');
		}
		elseif(isset($_GET['syllsubmit']))
		{
			include('includes/syllabi/submit-syllabus.php');
		}
		elseif(isset($_GET['syllreview']))
		{
			include_message_form($link, $_GET['syllreview']);
			include('includes/syllabi/review-syllabus.php');
		}
		elseif(isset($_GET['reqdraft']))
		{
			include("includes/syllabi/request-draft.php");
		}
		elseif(isset($_GET['syllrespond']))
		{
			include('includes/syllabi/respond-syllabus.php');
		}
		
		else
		{
			display_user_terms($link);
			
			if($_SESSION['type'] > 0)
			{
				display_approved_syllabi($link);
			}
		}
		?>
    
    </section>
    
    <section class="one-third userlist">
    <h2 class="mainheader">Welcome Back</h2>
    <?php $id = $_SESSION['id']; ?>
    
	    <div class="clearfix">
	    <img src="thumbs/<?php echo profile_item($link, 'photo', $id); ?>" class="thumb" />
	        <div class="miniprofile">
	        <p><strong><?php echo profile_item($link, 'fname', $id); ?> <?php echo profile_item($link, 'lname', $id); ?></strong><br>
	        <?php echo profile_item($link, 'phone', $id); ?><br>
	        <?php echo profile_item($link, 'email', $id); ?><br>
	        <a href="users.php?profileedit=<?php print $id; ?>">Edit your profile</a></p>
	        </div>
	    </div>
        
        <h2 class="mainheader">Messages</h2>
        <div id="messages">
        	<?php display_syllabus_process_message($link); ?>
        </div>
    </section><!-- end three columns right side -->
    <?php output_status_bar($link); ?>
</div>


</body>
</html>

<?php } ?>

<?php db_disconnect($link); ?>