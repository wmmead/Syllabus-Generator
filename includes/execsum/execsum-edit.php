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
    
    	<h2>Edit Executive Summary</h2>
        
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
    
    	<h3><?php echo class_details($link, 'coursenum', $class_id); ?> <?php echo class_details($link, 'section', $class_id); ?> &mdash; <?php echo class_details($link, 'course', $class_id); ?> &mdash; <?php echo class_details($link, 'term', $class_id); ?> <?php echo class_details($link, 'year', $class_id); ?></h3>
        
        <p class="one-half"><strong>Course Description:</strong> <?php echo class_details($link, 'description', $class_id); ?></p>
        <form action="execsum.php?view=<?php echo $class_id; ?>&execsum=<?php echo $exec_sum_id; ?>" method="post">
        
        	<input type="hidden" name="classid" value="<?php print $class_id; ?>">
            <input type="hidden" name="execsumid" value="<?php print $exec_sum_id; ?>">
        
        <div class="two-thirds">
            <h3 class="remove-bottom">Public?</h3>
            <p class="example">Anyone can read public summaries. Only you and the Director who approved the syllabus can read private summaries.</p>
            <p class="remove-bottom"><label><input type="radio" name="priv_pub" value="2" <?php if($status == "Public") {print "checked";} ?>> Yes, make it public.</label></p>
            <p><label><input type="radio" name="priv_pub" value="1" <?php if($status == "Private") {print "checked";} ?>> No, make it private.</label></p>
        
        	<p class="example">All of the fields below are optional. Fill in which ever ones are useful for your executive summary. At least one of them must have content for the summary to be saved.</p>
            <h3 class="remove-bottom">Course Summary</h3>
            <p class="example">Provide general information about how the course was structured.</p>
            <div class="tinymice-container">
            <textarea name="summary" id="summary" cols="50" rows="15" class="tinymice"><?php print $summary; ?></textarea>
            </div>
            
            <h3 class="remove-bottom">Strengths</h3>
            <p class="example">What went well, and why? What do you need to do to duplicate this success?</p>
            <div class="tinymice-container">
            <textarea name="strengths" id="strengths" cols="50" rows="15" class="tinymice"><?php print $strengths; ?></textarea>
            </div>
            
            <h3 class="remove-bottom">Challenges</h3>
            <p class="example">What was challenging, or did not go so well and why? What should you try next time?</p>
            <div class="tinymice-container">
            <textarea name="challenges" id="challenges" cols="50" rows="15" class="tinymice"><?php print $challenges; ?></textarea>
            </div>
            
            <h3 class="remove-bottom">Final Grades</h3>
            <p class="example">Paste in final grades for the course here.</p>
            <div class="tinymice-container">
            <textarea name="grades" id="grades" cols="50" rows="15" class="tinymice"><?php print $grades; ?></textarea>
            </div>
            
            <h3 class="remove-bottom">Email Executive Summary</h3>
            <p class="example">Enter email addresses separated by commas to email this summary.</p>
            <input type="text" name="email-summary">
            
            <input type="submit" name="update-summary" value="Save Summary">
            
        </div>
        
        </form>
    
   </section> 
    
    
</div>