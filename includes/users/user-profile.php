<section class="user-profile whole">
	<h2 class="mainheader">Individual Profile</h2>
    <img src="resized/<?php echo p_item($link, 'photo'); ?>" class="photo" alt="<?php echo p_item($link, 'fname'); ?> <?php echo p_item($link, 'lname'); ?>" />
    <article class="profileinfo">
    <h3><?php echo p_item($link, 'fname'); ?> <?php echo p_item($link, 'lname'); ?>'s Profile</h3>
    <p><strong>Phone:</strong> <?php echo p_item($link, 'phone'); ?></p>
    <p><strong>Email:</strong> <a href="mailto:<?php echo p_item($link, 'email'); ?>"><?php echo p_item($link, 'email'); ?></a></p>
    <p><strong>About <?php echo p_item($link, 'fname'); ?>:</strong><br />
    <?php echo p_item($link, 'info'); ?></p>
    <?php 
    if($_GET['profileid'] == $_SESSION['id']) 
    { 
        $id = $_SESSION['id'];
        print "<p><a href='users.php?profileedit=$id'>edit your profile</a></p>";
    }
    
    ?>
    </article>

</section>