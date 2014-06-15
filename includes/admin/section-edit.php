<form method="post" action="admin.php?termsections=<?php echo $id; ?>">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<?php edit_section_policies($link, $id); ?>
    <p><input type="submit" name="updatesection" value="Save Sections" /> <a href="admin.php?termsections=<?php echo $id; ?>">Close without saving</a></p>
</form>