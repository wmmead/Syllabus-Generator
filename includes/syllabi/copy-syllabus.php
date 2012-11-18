<?php $copyclass = $_GET['syllcopy']; ?>

<div class="frame">
<form action="index.php" method="post">
	<h2>Copy a Class</h2>
	<p>You can copy <strong><?php echo syll_info("course", $copyclass); ?></strong> to the same term, or to a different one. When you submit this form, you will be returned to your list of classes. From there you can click on the course to further edit it. You will need to set the section number and meeting times at the very least.</p>
	<input type="hidden" name="userid" value="<?php echo $userid; ?>" />
	<input type="hidden" name="copyclass" value="<?php echo $copyclass; ?>" />
	<p><strong>Term you are copying to</strong></p>
	<select name="term" id="term">
    	<option value="">---</option>
    	<?php output_term_list(); ?>
    </select>
    
    <p><strong>Is this a full term or mid-quarter class?</strong></p>
   
    <label><input type="radio" name="classtype" value="0" id="once11" checked="checked" /> Class meets once per week for eleven weeks.</label>
    <label><input type="radio" name="classtype" value="1" id="twice5" /> Class meets twice per week for five and half weeks.</label></p>
    
	<p><input type="submit" name="copysyll" value="Make Copy" /></p>
</form>
</div>