<?php $deletedraft = $_GET['sylldelete']; ?>

<div class="frame">

<?php if( delete_check($deletedraft) == TRUE) { ?>

<form action="index.php" method="post">
	<h2>Permanently Delete This Draft?</h2>
	<p>You can permanently delete this draft syllabus for <strong><?php echo syll_info("coursenum", $deletedraft). " " . syll_info("course", $deletedraft); ?></strong>.</p> 
	
	<p>Click the "Delete This Draft" button below to delete this draft, or click the "Cancel" button if you've changed your mind.</p>
	<input type="hidden" name="classid" value="<?php echo $deletedraft; ?>" />
	
	<p><input type="submit" name="deletesylldraft" value="Delete This Draft" /> <a href="index.php" class="button">Cancel</a></p>
	
</form>

<?php }

else { ?>

<p>You don't have permission to delete this syllabus.</p>

<?php } ?>


</div>