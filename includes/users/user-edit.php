<?php $id = $_GET['profileedit']; ?>

<section class="whole">
    <h2 class="mainheader">Update Your Profile</h2>
    <form enctype="multipart/form-data" action="users.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    
    <div class="one-half">
    <img src="resized/<?php echo p_item($link, 'photo'); ?>" class="photo" alt="<?php echo p_item($link, 'fname'); ?> <?php echo p_item($link, 'lname'); ?>" />
    
    <div style="clear:both;">
        <div style="padding:20px 0;">
        <label for="photo">New Photo:</label>
        <input type="file" name="photo" id="photo" />
        </div>
        
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" value="<?php echo p_item($link, 'fname'); ?>" />
        
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" value="<?php echo p_item($link, 'lname'); ?>" />
        
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" value="<?php echo p_item($link, 'login'); ?>" />
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo p_item($link, 'password'); ?>" />
    </div>
    </div>
    <div class="one-half">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="<?php echo p_item($link, 'phone'); ?>" />
        
        <label for="email">Email:</label> <input type="text" name="email" id="email" value="<?php echo p_item($link, 'email'); ?>" />
       
        <label for="info">Tell us something about what you do...</label> 
        <textarea cols="54" rows="10" name="info"><?php echo p_item($link, 'info'); ?></textarea>
        <input type="submit" name="editprofile" value="Save Profile" />
    </div>
    </form>
</section>