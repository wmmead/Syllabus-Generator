<?php $class_id = get_class_id();?>

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
        
    
   </section> 
    
    
</div>