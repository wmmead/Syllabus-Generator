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
    
    <h4>Class Type</h4>
    <p>
    <input type="radio" name="classtype" value="0" id="once11" checked="checked" /> <label for="once11">Class meets once per week for eleven weeks.</label></p>
    <p><input type="radio" name="classtype" value="1" id="twice5" /> <label for="twice5">Class meets twice per week for five and half weeks.</label></p>
    
	<p><input type="submit" name="addsyll" value="Add" /></p>
</form>
</div>