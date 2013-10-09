<div class="nine columns">
	<h2 class="mainheader">Individual Profile</h2>
    <img src="resized/<?php echo p_item('photo'); ?>" class="photo" alt="<?php echo p_item('fname'); ?> <?php echo p_item('lname'); ?>" />
    <div class="profileinfo">
    <h3><?php echo p_item('fname'); ?> <?php echo p_item('lname'); ?>'s Profile</h3>
    <p><strong>Phone:</strong> <?php echo p_item('phone'); ?></p>
    <p><strong>Email:</strong> <a href="mailto:<?php echo p_item('email'); ?>"><?php echo p_item('email'); ?></a></p>
    <p><strong>About <?php echo p_item('fname'); ?>:</strong><br />
    <?php echo p_item('info'); ?></p>
    <?php 
    if($_GET['profileid'] == $_SESSION['id']) 
    { 
        $id = $_SESSION['id'];
        print "<p><a href='users.php?profileedit=$id'>edit your profile</a></p>";
    }
    
    ?>
    </div>

</div>