<?php $id = $_SESSION['id']; ?>

	<h2 class="mainheader">Navigation</h2>

<?php if(check_user_level() > 0 ) { ?>
	
    <h3 class="remove-bottom">Administration</h3>
	<ul>
    	<?php if(check_user_level() == 2 ) { ?>
        <li><a href="/admin.php">Manage Terms</a></li> <?php } ?>
        <li><a href="/courses.php">Manage Courses</a></li>
        <li><a href="/users.php?adminedit=yes">Manage Users</a></li>
        <li><a href="/users.php?newuser=yes">Create An Account</a></li>
    </ul>
<?php } ?>
	<h3 class="remove-bottom">Syllabi</h3>
    <ul>
    	<li><a href="/index.php">Your Syllabi</a></li>
        <li><a href="/index.php?addsyll=yes">Create a New Syllabus</a></li>
        <li><a href="/find.php">Find a Syllabus</a></li>
    </ul>
    <h3 class="remove-bottom">People</h3>
    <ul>
    	<li><a href="/users.php">Show all People</a></li>
        <li><a href="/users.php?profileid=<?php print $id; ?>">View Your Profile</a></li>
    	<li><a href="/users.php?profileedit=<?php print $id; ?>">Edit Your Profile</a></li>
    </ul>
    <a class="button" style="width:130px;text-align:center;" href="/index.php?logoff=yes">Logout</a>