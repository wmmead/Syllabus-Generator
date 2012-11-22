<?php require_once('includes/session.php'); ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-syllabi.php'); ?>
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

<title>AI Syllabus Generator Main Page</title>

<link rel="stylesheet" href="stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="stylesheets/skeleton.css" type="text/css">
<link rel="stylesheet" href="stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="js/jquery.calculation.min.js"></script>
<script type="text/javascript" src="js/script-index.js"></script>

</head>

<body>

<div id="logo"><a href="index.php"><img src="images/logo.png" alt="AI Syllabus Generator" /></a></div>

<?php
		if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
		{
			include('includes/users/loginform.php');
			output_login_error();
			process_lost_password_request();
			login_error_password_retrieval_form();
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
    
    <div class="nine columns">
    
    <!-- page functions here -->
        <?php add_syllabus(); ?>
        <?php process_syllabus_review(); ?>
        <?php submit_draft_request(); ?>
        <?php delete_instructor_message(); ?>
        <?php copy_syllabus(); ?>
        <?php delete_syllabus_draft(); ?>
    
    <?php
        if(isset($_GET['addsyll']))
		{
			include('includes/syllabi/add-syllabus.php');
		}
		elseif(isset($_GET['sylledit']))
		{
			submit_syllabus_for_review($_GET['sylledit']);
			include_message_form($_GET['sylledit']);
			display_edit_or_review($_GET['sylledit']);
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
			include_message_form($_GET['syllreview']);
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
			print "<h2 class='mainheader'>Your Syllabi</h2>";
			display_user_terms();
			
			if($_SESSION['type'] > 0)
			{
				display_approved_syllabi();
			}
		}
		?>
    
    </div>
    
    <div class="three columns userlist">
    <h2 class="mainheader">Welcome Back</h2>
    <?php $id = $_SESSION['id']; ?>
    
	    <div class="clearfix">
	    <img src="thumbs/<?php echo profile_item('photo', $id); ?>" class="thumb" />
	        <div class="miniprofile">
	        <p><strong><?php echo profile_item('fname', $id); ?> <?php echo profile_item('lname', $id); ?></strong><br>
	        <?php echo profile_item('phone', $id); ?><br>
	        <?php echo profile_item('email', $id); ?><br>
	        <a href="users.php?profileedit=<?php print $id; ?>">Edit your profile</a></p>
	        </div>
	    </div>
        
        <h2 class="mainheader">Messages</h2>
        <div id="messages">
        	<?php display_syllabus_process_message(); ?>
        </div>
    </div><!-- end three columns right side -->
    
</div>

</body>
</html>

<?php } ?>

<?php require_once('includes/footer.php'); ?>