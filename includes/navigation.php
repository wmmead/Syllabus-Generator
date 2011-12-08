<?php $id = $_SESSION['id']; ?>
<?php if(check_user_level() > 0 ) { ?>
	<h2 class="mainheader">Navigation</h2>
    <h2>Administration</h2>
	<ul>
    	<?php if(check_user_level() == 2 ) { ?>
        <li><a href="admin.php">Manage Terms</a></li> <?php } ?>
        <li><a href="courses.php">Manage Courses</a></li>
        <li><a href="users.php?adminedit=yes">Manage Users</a></li>
        <li><a href="users.php?newuser=yes">Create An Account</a></li>
    </ul>
<?php } ?>
	<h2>Syllabi</h2>
    <ul>
    	<li><a href="index.php">Your Syllabi</a></li>
        <li><a href="#">Create a New Syllabus</a></li>
        <li><a href="#">Find a Syllabus</a></li>
    </ul>
    <h2>People</h2>
    <ul>
    	<li><a href="users.php">Show all People</a></li>
        <li><a href="users.php?profileid=<?php print $id; ?>">View Your Profile</a></li>
    	<li><a href="users.php?profileedit=<?php print $id; ?>">Edit Your Profile</a></li>
    </ul>
    <h2><a href="index.php?logoff=yes">Logout</a></h2>