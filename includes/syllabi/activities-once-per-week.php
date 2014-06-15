<?php $termstart = term_start_date($link, $classid); ?>
<?php $day = return_day($link, $classid); ?>
<?php $activity = display_activities($link, $classid);?>


<div class="frame">
<?php check_meetings($link, $classid, "yes"); ?>
<h4 class="fold">Weekly Activities</h4>
        
    <div class="hide">        
    <label for="meeting01">Week 1 <?php class_date($classid, $termstart, '1', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "1", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting01" name="meeting01" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[0]; ?>
        </textarea>
        </div>
    
    <label for="meeting02">Week 2 <?php class_date($classid, $termstart, '2', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "2", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting02" name="meeting02" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[1]; ?>
        </textarea>
        </div>
    
    <label for="meeting03">Week 3 <?php class_date($classid, $termstart, '3', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "3", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting03" name="meeting03" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[2]; ?>
        </textarea>
        </div>
    
    <label for="meeting04">Week 4 <?php class_date($classid, $termstart, '4', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "4", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting04" name="meeting04" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[3]; ?>
        </textarea>
        </div>
    
    <label for="meeting05">Week 5 <?php class_date($classid, $termstart, '5', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "5", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting05" name="meeting05" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[4]; ?>
        </textarea>
        </div>
    
    <label for="meeting06">Week 6 <?php class_date($classid, $termstart, '6', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "6", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting06" name="meeting06" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[5]; ?>
        </textarea>
        </div>
    
    <label for="meeting07">Week 7 <?php class_date($classid, $termstart, '7', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "7", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting07" name="meeting07" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[6]; ?>
        </textarea>
        </div>
    
    <label for="meeting08">Week 8 <?php class_date($classid, $termstart, '8', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "8", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting08" name="meeting08" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[7]; ?>
        </textarea>
        </div>
    
    <label for="meeting09">Week 9 <?php class_date($classid, $termstart, '9', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "9", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting09" name="meeting09" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[8]; ?>
        </textarea>
        </div>
    
    <label for="meeting10">Week 10 <?php class_date($classid, $termstart, '10', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "10", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting10" name="meeting10" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[9]; ?>
        </textarea>
        </div>
    
    <label for="meeting11">Week 11 <?php class_date($classid, $termstart, '11', $day) ?></label>
    <span class="alert"><?php print_holiday($link, $classid, $termstart, "11", $day); ?></span><br />
        <div class="activitycontent">
        <textarea id="meeting11" name="meeting11" class="tinymice" cols="53" rows="10">
        	<?php echo $activity[10]; ?>
        </textarea>
        </div>
    
    </div>
    
</div>