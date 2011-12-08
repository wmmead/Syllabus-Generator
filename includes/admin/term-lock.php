<div>
	<form action="admin.php" method="post" onSubmit="return confirm('Are you sure? Locking will prevent you from editing the term further');">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="submit" name="lockterm" value="Lock This Term" />
	</form>
</div>