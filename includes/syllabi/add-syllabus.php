<div class="frame">
<form action="index.php" method="post">
	<h2>Add a Class</h2>
	<input type="hidden" name="userid" value="<?php echo $userid; ?>" />
	<label for="term">Term</label>
	<select name="term" id="term">
    	<option value="">---</option>
    	<?php output_term_list($link); ?>
    </select>
    
    
    <label for="course">Course</label>
	<select name="course" id="course">
    	<option value="">---</option>
    	<?php output_course_select_list($link); ?>
    </select>
    
    <h3>Class Type</h3>
    
    <div class="coursetype">
    <p><label><input type="radio" name="classtype" value="0" id="once11" checked="checked" /> Class meets once per week for eleven weeks.</label></p>
    
    <p><label><input type="radio" name="classtype" value="2" id="twice11" /> Class meets twice per week for eleven weeks.</label>
    </p>
    
    <p><label><input type="radio" name="classtype" value="1" id="twice5" /> Class meets twice per week for five and half weeks.</label></p>
    
    
    </div>
    
	<p><input type="submit" name="addsyll" value="Add" /></p>
</form>
</div>