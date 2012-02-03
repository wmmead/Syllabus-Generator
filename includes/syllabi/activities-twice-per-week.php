<?php $termstart = mid_term_start_date($classid); ?>
<?php $days = return_day($classid); $dayone = $days[0]; $daytwo = $days[1]; print "$termstart"; ?>

<div class="frame">
    	<h4>Weekly Activities</h4>
        
<label for="meeting01">Week 1, First Meeting <?php class_date($classid, $termstart, '1', $dayone) ?></label><br />
<textarea id="meeting01" name="meeting01" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "1", $dayone); ?>
</textarea>

<label for="meeting02">Week 1, Second Meeting <?php class_date($classid, $termstart, '1', $daytwo) ?></label><br />
<textarea id="meeting02" name="meeting02" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "1", $daytwo); ?>
</textarea>

<label for="meeting03">Week 2, First Meeting <?php class_date($classid, $termstart, '2', $dayone) ?></label><br />
<textarea id="meeting03" name="meeting03" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "2", $dayone); ?>
</textarea>

<label for="meeting04">Week 2, Second Meeting <?php class_date($classid, $termstart, '2', $daytwo) ?></label><br />
<textarea id="meeting04" name="meeting04" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "2", $daytwo); ?>
</textarea>

<label for="meeting05">Week 3, First Meeting <?php class_date($classid, $termstart, '3', $dayone) ?></label><br />
<textarea id="meeting05" name="meeting05" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "3", $dayone); ?>
</textarea>

<label for="meeting06">Week 3, Second Meeting <?php class_date($classid, $termstart, '3', $daytwo) ?></label><br />
<textarea id="meeting06" name="meeting06" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "3", $daytwo); ?>
</textarea>

<label for="meeting07">Week 4, First Meeting <?php class_date($classid, $termstart, '4', $dayone) ?></label><br />
<textarea id="meeting07" name="meeting07" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "4", $dayone); ?>
</textarea>

<label for="meeting08">Week 4, Second Meeting <?php class_date($classid, $termstart, '4', $daytwo) ?></label><br />
<textarea id="meeting08" name="meeting08" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "4", $daytwo); ?>
</textarea>

<label for="meeting09">Week 5, First Meeting <?php class_date($classid, $termstart, '5', $dayone) ?></label><br />
<textarea id="meeting09" name="meeting09" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "5", $dayone); ?>
</textarea>

<label for="meeting10">Week 5, Second Meeting <?php class_date($classid, $termstart, '5', $daytwo) ?></label><br />
<textarea id="meeting10" name="meeting10" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "5", $daytwo); ?>
</textarea>

<label for="meeting11">Week 6, First Meeting <?php class_date($classid, $termstart, '6', $dayone) ?></label><br />
<textarea id="meeting11" name="meeting11" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "6", $dayone); ?>
</textarea>
    
    </div>