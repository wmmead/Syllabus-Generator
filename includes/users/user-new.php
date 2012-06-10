<div class="nine columns">

    <h2 class="mainheader">Create an Account</h2>
    <form method="post" action="users.php?new=yes">
    <div class="formcontainer">
        <p><label for="fname">First Name:</label> <input type="text" name="fname" id="fname" /></p>
        <p><label for="lname">Last Name:</label> <input type="text" name="lname" id="lname" /></p>
        <p><label for="login">Login:</label> <input type="text" name="login" id="login" /></p>
        <p><label for="email">Email:</label> <input type="text" name="email" id="email" /></p>
        <p><label for="phone">Phone:</label> <input type="text" name="phone" id="phone" /></p>
    
        <?php 
		if($_SESSION['type'] == 2)
		{ ?>
		<p>Type: <select name="type" id="type">
        	<option value="0">Instructor</option>
            <option value="1">Director</option>
            <option value="2">Administrator</option>
        </select></p>
		<?php } ?>
    
        <p><input type="submit" name="addaccount" value="Create Account" /></p>
    </div>
    </form>
</div>