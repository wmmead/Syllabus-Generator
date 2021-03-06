<?php delete_exec_sum($link); ?>
<div id="page">

	<header id="mainheader">
    	<div>
        	<h1>Syllabus<br>Generator</h1>
        </div>
	<img src="images/aiLogo.png" alt="logo">
    </header>
	<?php include('includes/navigation.php'); ?>

	<section class="whole">
    
    <section class="two-thirds">
    <h2 class="mainheader">Create &amp; Manage Executive Summaries</h2>
    <p>This page will allow you to create, view and manange executive summaries you have written for classes you have taught, as well as view those of others that have been marked public.</p>
    
    <form action="execsum.php" method="post">
    	<?php generate_exec_sum_select_list($link); ?>
    </form>
    	<?php $user_id = $_SESSION['id']; ?>
    	<?php exec_sum_list($link, $user_id); ?>
        
        <?php display_subordinate_exec_summaries($link); ?>
    
    </section>
    
    <section class="one-third">
    
    <h4>Public Executive Summaries</h4>
    <?php display_public_exec_summaries($link); ?>
    
    </section>
    
   </section> 
    
    
</div>