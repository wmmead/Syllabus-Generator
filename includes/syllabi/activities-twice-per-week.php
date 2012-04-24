<?php $termstart = mid_term_start_date($classid); ?>
<?php $days = return_day($classid); $dayone = $days[0]; $daytwo = $days[1];?>
<?php $activity = display_activities($classid);?>

<div class="frame">
<h4 class="fold">Weekly Activities</h4>

    <div class="hide">
    <label for="meeting01">Week 1, First Meeting <?php class_date($classid, $termstart, '1', $dayone) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "1", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting01" name="meeting01" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[0]; ?>
    </textarea>
    </div>
    
    <label for="meeting02">Week 1, Second Meeting <?php class_date($classid, $termstart, '1', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "1", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting02" name="meeting02" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[1]; ?>
    </textarea>
    </div>
    
    <label for="meeting03">Week 2, First Meeting <?php class_date($classid, $termstart, '2', $dayone) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "2", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting03" name="meeting03" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[2]; ?>
    </textarea>
    </div>
    
    <label for="meeting04">Week 2, Second Meeting <?php class_date($classid, $termstart, '2', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "2", $daytwo); ?><br />
    <div class="activitycontent">
    <textarea id="meeting04" name="meeting04" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[3]; ?>
    </textarea>
    </div>
    
    <label for="meeting05">Week 3, First Meeting <?php class_date($classid, $termstart, '3', $dayone) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "3", $dayone); ?><br />
    <div class="activitycontent">
    <textarea id="meeting05" name="meeting05" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[4]; ?>
    </textarea>
    </div>
    
    <label for="meeting06">Week 3, Second Meeting <?php class_date($classid, $termstart, '3', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "3", $daytwo); ?><br />
    <div class="activitycontent">
    <textarea id="meeting06" name="meeting06" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[5]; ?>
    </textarea>
    </div>
    
    <label for="meeting07">Week 4, First Meeting <?php class_date($classid, $termstart, '4', $dayone) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "4", $dayone); ?><br />
    <div class="activitycontent">
    <textarea id="meeting07" name="meeting07" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[6]; ?>
    </textarea>
    </div>
    
    <label for="meeting08">Week 4, Second Meeting <?php class_date($classid, $termstart, '4', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "4", $daytwo); ?><br />
    <div class="activitycontent">
    <textarea id="meeting08" name="meeting08" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[7]; ?>
    </textarea>
    </div>
    
    <label for="meeting09">Week 5, First Meeting <?php class_date($classid, $termstart, '5', $dayone) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "5", $dayone); ?><br />
    <div class="activitycontent">
    <textarea id="meeting09" name="meeting09" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[8]; ?>
    </textarea>
    </div>
    
    <label for="meeting10">Week 5, Second Meeting <?php class_date($classid, $termstart, '5', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "5", $daytwo); ?><br />
    <div class="activitycontent">
    <textarea id="meeting10" name="meeting10" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[9]; ?>
    </textarea>
    </div>
    
    <label for="meeting11">Week 6, First Meeting <?php class_date($classid, $termstart, '6', $dayone) ?></label>
    <span class="alert"><?php print_holiday($classid, $termstart, "6", $dayone); ?><br />
    <div class="activitycontent">
    <textarea id="meeting11" name="meeting11" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[10]; ?>
    </textarea>
    </div>
    
    </div>    
</div>