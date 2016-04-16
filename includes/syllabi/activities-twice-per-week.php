<?php $termstart = term_start_date($link, $classid); ?>
<?php $days = return_day($link, $classid); $dayone = $days[0]; $daytwo = $days[1];?>
<?php $activity = display_activities($link, $classid);?>

<div class="frame">
<?php check_meetings($link, $classid, "yes"); ?>
<h4 class="fold">Weekly Activities</h4>

    <div class="hide">
    <label for="meeting01">Week 1, First Meeting <?php class_date($classid, $termstart, '1', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "1", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting01" name="meeting01" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[0]; ?>
    </textarea>
    </div>
    
    <label for="meeting02">Week 1, Second Meeting <?php class_date($classid, $termstart, '1', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "1", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting02" name="meeting02" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[1]; ?>
    </textarea>
    </div>
    
    <label for="meeting03">Week 2, First Meeting <?php class_date($classid, $termstart, '2', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "2", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting03" name="meeting03" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[2]; ?>
    </textarea>
    </div>
    
    <label for="meeting04">Week 2, Second Meeting <?php class_date($classid, $termstart, '2', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "2", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting04" name="meeting04" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[3]; ?>
    </textarea>
    </div>
    
    <label for="meeting05">Week 3, First Meeting <?php class_date($classid, $termstart, '3', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "3", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting05" name="meeting05" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[4]; ?>
    </textarea>
    </div>
    
    <label for="meeting06">Week 3, Second Meeting <?php class_date($classid, $termstart, '3', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "3", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting06" name="meeting06" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[5]; ?>
    </textarea>
    </div>
    
    <label for="meeting07">Week 4, First Meeting <?php class_date($classid, $termstart, '4', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "4", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting07" name="meeting07" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[6]; ?>
    </textarea>
    </div>
    
    <label for="meeting08">Week 4, Second Meeting <?php class_date($classid, $termstart, '4', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "4", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting08" name="meeting08" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[7]; ?>
    </textarea>
    </div>
    
    <label for="meeting09">Week 5, First Meeting <?php class_date($classid, $termstart, '5', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "5", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting09" name="meeting09" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[8]; ?>
    </textarea>
    </div>
    
    <label for="meeting10">Week 5, Second Meeting <?php class_date($classid, $termstart, '5', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "5", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting10" name="meeting10" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[9]; ?>
    </textarea>
    </div>
    
    <label for="meeting11">Week 6, First Meeting <?php class_date($classid, $termstart, '6', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "6", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting11" name="meeting11" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[10]; ?>
    </textarea>
    </div>
    
    <label for="meeting12">Week 6, Second Meeting <?php class_date($classid, $termstart, '6', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "6", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting12" name="meeting12" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[11]; ?>
    </textarea>
    </div>
    
    <label for="meeting13">Week 7, First Meeting <?php class_date($classid, $termstart, '7', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "7", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting13" name="meeting13" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[12]; ?>
    </textarea>
    </div>
    
    <label for="meeting14">Week 7, Second Meeting <?php class_date($classid, $termstart, '7', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "7", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting14" name="meeting14" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[13]; ?>
    </textarea>
    </div>
    
    <label for="meeting15">Week 8, First Meeting <?php class_date($classid, $termstart, '8', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "8", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting15" name="meeting15" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[14]; ?>
    </textarea>
    </div>
    
    <label for="meeting16">Week 8, Second Meeting <?php class_date($classid, $termstart, '8', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "8", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting16" name="meeting16" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[15]; ?>
    </textarea>
    </div>
    
    <label for="meeting17">Week 9, First Meeting <?php class_date($classid, $termstart, '9', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "9", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting17" name="meeting17" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[16]; ?>
    </textarea>
    </div>
    
    <label for="meeting18">Week 9, Second Meeting <?php class_date($classid, $termstart, '9', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "9", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting18" name="meeting18" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[17]; ?>
    </textarea>
    </div>
    
    <label for="meeting19">Week 10, First Meeting <?php class_date($classid, $termstart, '10', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "10", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting19" name="meeting19" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[18]; ?>
    </textarea>
    </div>
    
    <label for="meeting20">Week 10, Second Meeting <?php class_date($classid, $termstart, '10', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "10", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting20" name="meeting20" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[19]; ?>
    </textarea>
    </div>
    
    <label for="meeting21">Week 11, First Meeting <?php class_date($classid, $termstart, '11', $dayone) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "11", $dayone); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting21" name="meeting21" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[20]; ?>
    </textarea>
    </div>
    
    <label for="meeting22">Week 11, Second Meeting <?php class_date($classid, $termstart, '11', $daytwo) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "11", $daytwo); ?></span><br />
    <div class="activitycontent">
    <textarea id="meeting22" name="meeting22" class="tinymice" cols="53" rows="10">
    	<?php echo $activity[21]; ?>
    </textarea>
    </div>
    
    </div>    
</div>