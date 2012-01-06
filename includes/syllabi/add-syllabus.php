<div class="container frame">
<form action="index.php" method="post">
	<input type="hidden" name="userid" value="<?php echo $userid; ?>" />
	<p><label for="term">Term</label><br />
	<select name="term" id="term">
    	<option value="">---</option>
    	<?php output_term_list(); ?>
    </select>
    </p>
    
    <p><label for="course">Course</label><br />
	<select name="course" id="course">
    	<option value="">---</option>
    	<?php output_course_select_list(); ?>
    </select>
    </p>
    
	<p><input type="submit" name="addsyll" value="Add" /></p>
</form>
</div>