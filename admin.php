<?php require_once('includes/session.php'); ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/functions-admin.php'); ?>
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

<title>AI Syllabus Generator Admin Page</title>

<link rel="stylesheet" href="stylesheets/base.css" type="text/css">
<link rel="stylesheet" href="stylesheets/skeleton.css" type="text/css">
<link rel="stylesheet" href="stylesheets/layout.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="js/script-admin.js"></script>
</head>

<body>

<div id="logo"><a href="index.php"><img src="images/logo.png" alt="AI Syllabus Generator" /></a></div>

<?php
		if(!isset($_SESSION['id']))
		{
			
			if(!isset($_SESSION['id']))
			{
				include('includes/users/loginform.php');
			}
			else
			{
				print "<p>You must be logged in as an administrator to access this page</p>";
			}
			print "</div></body></html>";
			
		}
		
		
		elseif($_SESSION['type'] == 2)
		{
?>

<?php add_term(); lock_term(); edit_term(); ?>

<div id="page" class="container">
	<div class="three columns frame nav">
	<?php include('includes/navigation.php'); ?>
    </div>
    
    <div class="nine columns">
    	<h2 class="mainheader">Manage Terms</h2>
        
        <!-- page functions here -->
        <?php update_grade_policies(); update_sections(); ?>
        
        <?php
        if(isset($_GET['addterm']) && $_SESSION['type'] == 2)
		{
			include('includes/admin/term-add.php');
		}
		elseif(isset($_GET['termedit']) && $_SESSION['type'] == 2)
		{
			include('includes/admin/term-edit.php');
		}
		elseif(isset($_GET['termsections']) && $_SESSION['type'] == 2)
		{
			include('includes/admin/term-sections.php');
		}
		else
		{
			print "<p><a href=\"admin.php?addterm=yes\">Add a Term</a></p>";
			display_terms();
		}
		?>
    </div><!-- end nine columns middle -->
    
    <div class="three columns userlist">
    <h2 class="mainheader">Welcome Back</h2>
    <?php $id = $_SESSION['id']; ?>
    
    <div class="user">
    <img src="thumbs/<?php echo profile_item('photo', $id); ?>" class="thumb" />
        <div class="miniprofile">
        <p><strong><?php echo profile_item('fname', $id); ?> <?php echo profile_item('lname', $id); ?></strong></p>
        <p><?php echo profile_item('phone', $id); ?></p>
        <p><?php echo profile_item('email', $id); ?></p>
        <p><a href="users.php?profileedit=<?php print $id; ?>">Edit your profile</a></p>
        </div>
    </div>
        
        <h2 class="mainheader">Messages</h2>
    </div><!-- end three columns right -->

</div>

<?php
	} 

	else
	{
		print "<p>You must be an administrator to see this page.</p>";
	}
?>

</body>
</html>



<?php require_once('includes/footer.php'); ?>