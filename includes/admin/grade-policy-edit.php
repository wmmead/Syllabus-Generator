<form method="post" action="admin.php?termsections=<?php echo $id; ?>">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<?php edit_grade_policies($id); ?>
    <p><input type="submit" name="updatepolicies" value="Save Grading Policies" /> <a href="admin.php?termsections=<?php echo $id; ?>">Close without saving</a></p>
</form>