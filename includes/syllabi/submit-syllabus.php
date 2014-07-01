<?php $classid = $_GET['syllsubmit']; ?>

<?php process_form($link, $classid); ?>

<?php if (check_syllabus_completion($link, $classid)) { ?>

<div class="frame">
	<h2><?php echo syll_info($link, "coursenum", $classid); ?> <?php echo syll_info($link, "course", $classid); ?>, <?php echo syll_info($link, "term", $classid); ?> <?php echo syll_info($link, "year", $classid); ?></h2>
	<form id="submitsyll" action="index.php?sylledit=<?php echo $classid; ?>" method="post">
    	<p>Once you submit your syllabus for review, you will not be able to edit it further. You will be able to view the syllabus and once it is approved, you will be able to generate the Microsoft Word Document to put on your eCompanion class shell.</p>
        
     	<p>Which Academic Director would you like to send your syllabus to for review?</p>
        
        <p><?php output_directors($link); ?></p>
        
        <p><em>Optional, add a message for the Director.</em></p>
        <textarea id='message' cols='50' rows='10' name='message'></textarea>
        
        <input type="submit" name="submitsyllabus" value="Submit for Review" id="submitsyllabus" />
        
        <p>Or you can <a href="index.php?sylledit=<?php echo $classid; ?>">cancel</a> and go back to editing the syllabus.</p>
        
    </form>
</div>

<?php } ?> <!-- end if -->