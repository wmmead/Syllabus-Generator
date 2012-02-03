<?php $termstart = term_start_date($classid); ?>
<?php $day = return_day($classid); ?>

<div class="frame">
    	<h4>Weekly Activities</h4>
        
<label for="meeting01">Week 1 <?php class_date($classid, $termstart, '1', $day) ?></label><br />
<textarea id="meeting01" name="meeting01" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "1", $day); ?>
</textarea>

<label for="meeting02">Week 2 <?php class_date($classid, $termstart, '2', $day) ?></label><br />
<textarea id="meeting02" name="meeting02" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "2", $day); ?>
</textarea>

<label for="meeting03">Week 3 <?php class_date($classid, $termstart, '3', $day) ?></label><br />
<textarea id="meeting03" name="meeting03" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "3", $day); ?>
</textarea>

<label for="meeting04">Week 4 <?php class_date($classid, $termstart, '4', $day) ?></label><br />
<textarea id="meeting04" name="meeting04" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "4", $day); ?>
</textarea>

<label for="meeting05">Week 5 <?php class_date($classid, $termstart, '5', $day) ?></label><br />
<textarea id="meeting05" name="meeting05" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "5", $day); ?>
</textarea>

<label for="meeting06">Week 6 <?php class_date($classid, $termstart, '6', $day) ?></label><br />
<textarea id="meeting06" name="meeting06" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "6", $day); ?>
</textarea>

<label for="meeting07">Week 7 <?php class_date($classid, $termstart, '7', $day) ?></label><br />
<textarea id="meeting07" name="meeting07" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "7", $day); ?>
</textarea>

<label for="meeting08">Week 8 <?php class_date($classid, $termstart, '8', $day) ?></label><br />
<textarea id="meeting08" name="meeting08" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "8", $day); ?>
</textarea>

<label for="meeting09">Week 9 <?php class_date($classid, $termstart, '9', $day) ?></label><br />
<textarea id="meeting09" name="meeting09" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "9", $day); ?>
</textarea>

<label for="meeting10">Week 10 <?php class_date($classid, $termstart, '10', $day) ?></label><br />
<textarea id="meeting10" name="meeting10" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "10", $day); ?>
</textarea>

<label for="meeting11">Week 11 <?php class_date($classid, $termstart, '11', $day) ?></label><br />
<textarea id="meeting11" name="meeting11" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "11", $day); ?>
</textarea>
    
    </div>