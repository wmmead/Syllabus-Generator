<div class="nine columns">

    <h2 class="mainheader">Create an Account</h2>
    <form method="post" action="users.php?new=yes">
    <div>
        <label for="fname">First Name:</label> 
        <input type="text" name="fname" id="fname" />
        
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" />
        
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" />
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" />
    
        <?php 
		if($_SESSION['type'] == 2)
		{ ?>
		<p>Type: <select name="type" id="type">
        	<option value="0">Instructor</option>
            <option value="1">Director</option>
            <option value="2">Administrator</option>
        </select></p>
		<?php } ?>
    
        <input type="submit" name="addaccount" value="Create Account" />
    </div>
    </form>
</div>