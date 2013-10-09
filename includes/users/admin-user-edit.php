<div class="twelve columns frame" style="margin: 0;">

<h2 class="mainheader">Manage All People</h2>

<?php

if(isset($_GET['useredit']))
{ 

$id = $_GET['useredit'];

?>
    <div class="adminuseredit">
    <form method="post" action="users.php?adminedit=yes">
    	<input type="hidden" name="id" value="<?php echo $id ?>" />
        <div class="formsection">
    	<label for="fname">First Name:</label> <input type="text" id="fname" name="fname" value="<?php echo p_item('fname'); ?>" />
        </div>
        
        <div class="formsection">
        <label for="lname">Last Name:</label> <input type="text" id="lname" name="lname" value="<?php echo p_item('lname'); ?>" />
        </div>
        
        <div class="formsection">
        <label for="fname">Login:</label>
        <input type="text" id="login" name="login" value="<?php echo p_item('login'); ?>" />
        </div>
        
        <div class="formsection">
        <label for="fname">Phone:</label> <input type="text" id="phone" name="phone" value="<?php echo p_item('phone'); ?>" />
        </div>
        
        <div class="formsection">
        <label for="fname">Email:</label> <input type="text" id="email" name="email" value="<?php echo p_item('email'); ?>" />
        </div>
        <div class="formsection">
        <?php if($_SESSION['type'] == 2) { ?>
        <label for="type">Access Level:</label> 
        <select name="type" id="type">
        		<option value="0" <?php if(p_item('type') == 0) { echo "selected = 'selected'"; } ?>>Instructor</option>
            <option value="1" <?php if(p_item('type') == 1) { echo "selected = 'selected'"; } ?>>Director</option>
            <option value="2" <?php if(p_item('type') == 2) { echo "selected = 'selected'"; } ?>>Administrator</option>
        </select>
        <?php } 
		
		else { ?> <input type="hidden" name="type" value="<?php echo p_item('type'); ?>" /> <?php } ?>
        
        </div>
        
        <div class="formsection">
        <label for="status">Status:</label> 
        <select name="status" id="status">
        	<option value="0" <?php if(p_item('status') == 0) { echo "selected = 'selected'"; } ?>>Inactive</option>
            <option value="1" <?php if(p_item('status') == 1) { echo "selected = 'selected'"; } ?>>Active</option>
        </select>
        </div>
        <div class="formsection">
        <input type="submit" name="updateuser" value="Update User Record" />
        </div>
        <div class="formsection">
        <input type="submit" name="updateuserpass" value="Update Record &amp; Reset Password" />
        </div>
    </form>
    </div>
	
<?php } ?>

<?php generate_admin_user_list(); ?>

</div>