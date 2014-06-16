<?php $id = $_SESSION['id']; ?>

<nav id="mainnav">
	<ul>
    	<li><a href="index.php"><span class="ligsymbol">&#xe072;</span><span class="nav-label">Your Syllabi</span></a></li>
        <li><a href="index.php?addsyll=yes"><span class="ligsymbol">&#xe041;</span><span class="nav-label">New Syllabus</span></a></li>
        <li><a href="find.php"><span class="ligsymbol">&#xe116;</span><span class="nav-label">Find a Syllabus</span></a></li>
        <li><a href="users.php"><span class="ligsymbol">&#xe051;</span><span class="nav-label">People</span></a></li>
        <li class="last"><a href="#"><span class="ligsymbol">&#xe137;</span><span class="nav-label">Account</span></a>
        	<ul>
            	<li><a href="index.php?logoff=yes">logout</a></li>
               <li><a href="users.php?profileid=<?php print $id; ?>">View Your Profile</a></li>
    			<li><a href="users.php?profileedit=<?php print $id; ?>">Edit Your Profile</a></li>
                <?php if(check_user_level() > 0 ) { ?>
               <li><a href="courses.php">Manage Courses</a></li>
               <li><a href="users.php?adminedit=yes">Manage Users</a></li>
               <li><a href="users.php?newuser=yes">Create Account</a></li>
               <?php if(check_user_level() == 2 ) { ?>
               <li><a href="admin.php">Manage Terms</a></li>
               <li><a href="admin.php?departments=yes">Manage Depts</a></li> <?php } ?>
               <?php } ?>
        	</ul>
        </li>        
    </ul>
</nav>
    