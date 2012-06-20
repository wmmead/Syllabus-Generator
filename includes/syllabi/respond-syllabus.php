<?php $classid = $_GET['syllrespond']; ?>

<?php if ($_SESSION['type'] > 0) { ?>

<div class="frame">
	<h2><?php echo syll_info("coursenum", $classid); ?> <?php echo syll_info("course", $classid); ?>, <?php echo syll_info("term", $classid); ?> <?php echo syll_info("year", $classid); ?></h2>
	<form id="respondsyll" action="index.php" method="post">
    	<p>Respond to the instructor by either approving the syllabus as is, or requesting changes. Requesting changes puts the syllabus back into draft status and the instructor can continue to work on it and resubmit it to you for approval again.</p>
        
     	<p>Please select your response below and submit the form.</p>
        
        <p>
        <?php output_approval_radio_button($classid); ?>
        <label><input type="radio" name="response" value="revise"> Revision requested</label>
        </p>
        
        <input type="hidden" name="classid" value="<?php echo $classid; ?>">
        
        
        <p><em>Optional, add a message for the Instructor.</em></p>
        <textarea id='message' cols='50' rows='10' name='message'></textarea>
        
        <input type="submit" name="respondsyllabus" value="Send Your Response" id="respondsyllabus" />
        
        <p>Or you can <a href="index.php?syllreview=<?php echo $classid; ?>">cancel</a> and go back to review the syllabus.</p>
        
    </form>
</div>

<?php } ?> <!-- end if -->