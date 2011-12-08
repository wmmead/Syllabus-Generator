<?php $id = $_GET['profileedit']; ?>

<div class="middlecol">
    <h2 class="mainheader">Update Your Profile</h2>
    <form enctype="multipart/form-data" action="users.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    
    <img src="resized/<?php echo p_item('photo'); ?>" class="photo" alt="<?php echo p_item('fname'); ?> <?php echo p_item('lname'); ?>" />
    
    <div class="formcontainer">
        <p><label for="photo">New Photo:</label> <input type="file" name="photo" id="photo" /></p>
        <p><label for="fname">First Name:</label> <input type="text" name="fname" id="fname" value="<?php echo p_item('fname'); ?>" /></p>
        
        <p><label for="lname">Last Name:</label> <input type="text" name="lname" id="lname" value="<?php echo p_item('lname'); ?>" /></p>
        
        <p><label for="login">Login:</label> <input type="text" name="login" id="login" value="<?php echo p_item('login'); ?>" /></p>
        
        <p><label for="password">Password:</label> <input type="password" name="password" id="password" value="<?php echo p_item('password'); ?>" /></p>
        
        <p><label for="phone">Phone:</label> <input type="text" name="phone" id="phone" value="<?php echo p_item('phone'); ?>" /></p>
        
        <p><label for="email">Email:</label> <input type="text" name="email" id="email" value="<?php echo p_item('email'); ?>" /></p>
    </div>
    
        <div style="clear:both;">
        <p><label for="info">Tell us something about what you do...</label><br /> 
        <textarea cols="54" rows="10" name="info"><?php echo p_item('info'); ?></textarea></p>
        <p><input type="submit" name="editprofile" value="Edit Profile" /></p>
        </div>
    </form>
</div>