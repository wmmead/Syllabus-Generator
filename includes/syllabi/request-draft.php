<?php $classid = $_GET['reqdraft']; ?>

<?php if (check_syllabus_owner($classid)) { ?>

<div class="frame">
	<h2><?php echo syll_info("coursenum", $classid); ?> <?php echo syll_info("course", $classid); ?>, <?php echo syll_info("term", $classid); ?> <?php echo syll_info("year", $classid); ?></h2>
	<form id="reqdraft" action="index.php?sylledit=<?php echo $classid; ?>" method="post">
    	<p>If you need to edit a syllabus after it has been approved, please request draft status for the syllabus. Once the request has been approved you will be able to edit the syllabus and then submit it for approval again.</p>
        
        <?php $director_info = get_syllabus_approved_by($classid); ?>
        
        <p>Your request will be sent to <?php echo $director_info['fname'];?> <?php echo $director_info['lname']; ?></p>
        
        <input type="hidden" name="director" value="<?php echo $director_info['id']; ?>" />
        <input type="hidden" name="classid" value="<?php echo $classid; ?>" />
        
        <p><em>Optional, add a message to explain your request.</em></p>
        <textarea id='message' cols='50' rows='10' name='message'></textarea>
        
        <input type="submit" name="submitreq" value="Request draft status" id="submitreq" />
        
        <p>Or you can <a href="index.php?sylledit=<?php echo $classid; ?>">cancel</a> the request.</p>
        
    </form>
</div>

<?php } ?> <!-- end if -->