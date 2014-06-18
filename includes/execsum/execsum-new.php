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
    
    	<h2>New Executive Summary</h2>
    
    	<h3><?php echo class_details($link, 'coursenum', $class_id); ?> &mdash; <?php echo class_details($link, 'course', $class_id); ?> &mdash; <?php echo class_details($link, 'term', $class_id); ?> <?php echo class_details($link, 'year', $class_id); ?></h3>
        
        <p class="one-half"><strong>Course Description:</strong> <?php echo class_details($link, 'description', $class_id); ?></p>
        <form action="execsum.php" method="post">
        
        	<input type="hidden" name="classid" value="<?php print $class_id; ?>">
        
        <div class="two-thirds">
            <h3 class="remove-bottom">Public?</h3>
            <p class="example">Anyone can read public summaries. Only you and the Director who approved the syllabus can read private summaries.</p>
            <p class="remove-bottom"><label><input type="radio" name="priv_pub" value="2" checked> Yes</label></p>
            <p><label><input type="radio" name="priv_pub" value="1"> No</label></p>
        
        
            <h3 class="remove-bottom">Course Summary</h3>
            <p class="example">Provide general information about how the course was structured.</p>
            <div class="tinymice-container">
            <textarea name="summary" id="summary" cols="50" rows="15" class="tinymice"></textarea>
            </div>
            
            <h3 class="remove-bottom">Strengths</h3>
            <p class="example">What went well, and why? What do you need to do to duplicate this success?</p>
            <div class="tinymice-container">
            <textarea name="strengths" id="strengths" cols="50" rows="15" class="tinymice"></textarea>
            </div>
            
            <h3 class="remove-bottom">Challenges</h3>
            <p class="example">What was challenging, or did not go so well and why? What should you try next time?</p>
            <div class="tinymice-container">
            <textarea name="challenges" id="challenges" cols="50" rows="15" class="tinymice"></textarea>
            </div>
            
            <h3 class="remove-bottom">Final Grades</h3>
            <p class="example">Paste in final grades for the course here.</p>
            <div class="tinymice-container">
            <textarea name="grades" id="grades" cols="50" rows="15" class="tinymice"></textarea>
            </div>
            
            <h3 class="remove-bottom">Email Executive Summary</h3>
            <p class="example">Enter email addresses separated by commas to email this summary.</p>
            <input type="text" name="email-summary">
            
            <input type="submit" name="add-summary" value="Save Summary">
            
        </div>
        
        
        
        </form>
    
   </section> 
    
    
</div>