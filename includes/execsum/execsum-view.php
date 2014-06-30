<?php $class_id = get_class_id();?>

<?php email_exec_summary($link, $_GET['execsum']); ?>
<?php update_priv_pub_status($link, $_GET['execsum'], $class_id); ?>

<div id="page">

	<header id="mainheader">
    	<div>
        	<h1>Syllabus<br>Generator</h1>
        </div>
	<img src="images/aiLogo.png" alt="logo">
    </header>
	<?php include('includes/navigation.php'); ?>

	<section class="whole">
    
    	<h2>Executive Summary For <?php echo class_details($link, 'coursenum', $class_id); ?> <?php echo class_details($link, 'section', $class_id); ?> &mdash; <?php echo class_details($link, 'course', $class_id); ?> &mdash; <?php echo class_details($link, 'term', $class_id); ?> <?php echo class_details($link, 'year', $class_id); ?></h2>
        
        <section class="two-thirds">
        <p><strong>Course Description:</strong> <?php echo class_details($link, 'description', $class_id); ?></p>
        
        <?php 
		
		$summary = exec_summary_details($link, 'summary', $class_id);
		$strengths = exec_summary_details($link, 'strengths', $class_id);
		$challenges = exec_summary_details($link, 'challenges', $class_id);
		$grades = exec_summary_details($link, 'grades', $class_id);
		$status = exec_summary_details($link, 'priv_pub', $class_id);
		$exec_sum_id = exec_summary_details($link, 'exec_sum_id', $class_id);
		switch($status)
		{
			case "1": $status = "Private";  break;
			case "2": $status = "Public";  break;
		}
		
		?>
        
        <?php if( $summary != '' ) { ?>
            <h2>Summary</h2>
            <?php print $summary; ?>
        <?php } ?>
        
        <?php if( $strengths != '' ) { ?>
            <h2>Strengths</h2>
            <?php print $strengths; ?>
        <?php } ?>
        
        <?php if( $challenges != '' ) { ?>
            <h2>Challenges</h2>
            <?php print $challenges; ?>
        <?php } ?>
        
        <?php if( $grades != '' ) { ?>
            <h2>Grades</h2>
            <?php print $grades; ?>
        <?php } ?>
        
        </section>
        
        <section class="one-third">
        	<article class="frame">
            <h4>Current Status: <?php echo $status; ?></h4>
            
            <?php if( exec_sum_owner($link, $class_id) ) { ?>
            	<form method="post" action="execsum.php?view=<?php echo $class_id; ?>&execsum=<?php echo $exec_sum_id; ?>" class="remove-bottom">
                
                	<?php if($status == "Public") {?>
                    	<input type="hidden" name="priv_pub" value="1">
                    	<input type="submit" name="change-status" value="Change the Status to Private">
                    <?php } ?>
                    
                    <?php if($status == "Private") {?>
                    	<input type="hidden" name="priv_pub" value="2">
                    	<input type="submit" name="change-status" value="Change the Status to Public">
                    <?php } ?>
                
                </form>
            
            <?php } ?>
            
            </article>
            
            <?php if( exec_sum_owner($link, $class_id) ) { ?>
            
            <article class="frame">
            	<nav id="execsum-nav">
                	<ul class="remove-bottom">
                    	<li><a href="execsum.php?edit=<?php echo $class_id; ?>&execsum=<?php echo $exec_sum_id; ?>"><span class="ligsymbol">&#xE09f;</span> Edit Executive Summary</a></li>
                        <li class="remove-bottom"><a id="deleteexecsum" href="execsum.php?deletesum=<?php echo $class_id; ?>&execsum=<?php echo $exec_sum_id; ?>"><span class="ligsymbol">&#xE12c;</span> Delete Executive Summary</a></li>
                    </ul>
                </nav>
            </article>
            <?php } ?>
            
            <?php if( exec_sum_owner($link, $class_id) ) { ?>
            	<article class="frame">
            	<h4>Email This Summary</h4>
                
                <p class="example">To email multiple people, separate email addresses with commas.</p>
                
                <form method="post" action="execsum.php?view=<?php echo $class_id; ?>&execsum=<?php echo $exec_sum_id; ?>">
                
                <p><input type="text" name="email-summary" placeholder="email addresses"></p>
                <input type="submit" name="send-emails" value="Email Summary">
                
                
                </form>
                
            	</article>
            <?php } ?>
            
        </section>
        
    
   </section> 
    
    
</div>