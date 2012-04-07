<?php $termstart = mid_term_start_date($classid); ?>
<?php $days = return_day($classid); $dayone = $days[0]; $daytwo = $days[1];?>

<div class="frame">
<h4 class="fold">Weekly Activities</h4>

    <div class="hide">
    <label for="meeting01">Week 1, First Meeting <?php class_date($classid, $termstart, '1', $dayone) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting01" name="meeting01" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "1", $dayone); ?>
    </textarea>
    </div>
    
    <label for="meeting02">Week 1, Second Meeting <?php class_date($classid, $termstart, '1', $daytwo) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting02" name="meeting02" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "1", $daytwo); ?>
    </textarea>
    </div>
    
    <label for="meeting03">Week 2, First Meeting <?php class_date($classid, $termstart, '2', $dayone) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting03" name="meeting03" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "2", $dayone); ?>
    </textarea>
    </div>
    
    <label for="meeting04">Week 2, Second Meeting <?php class_date($classid, $termstart, '2', $daytwo) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting04" name="meeting04" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "2", $daytwo); ?>
    </textarea>
    </div>
    
    <label for="meeting05">Week 3, First Meeting <?php class_date($classid, $termstart, '3', $dayone) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting05" name="meeting05" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "3", $dayone); ?>
    </textarea>
    </div>
    
    <label for="meeting06">Week 3, Second Meeting <?php class_date($classid, $termstart, '3', $daytwo) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting06" name="meeting06" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "3", $daytwo); ?>
    </textarea>
    </div>
    
    <label for="meeting07">Week 4, First Meeting <?php class_date($classid, $termstart, '4', $dayone) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting07" name="meeting07" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "4", $dayone); ?>
    </textarea>
    </div>
    
    <label for="meeting08">Week 4, Second Meeting <?php class_date($classid, $termstart, '4', $daytwo) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting08" name="meeting08" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "4", $daytwo); ?>
    </textarea>
    </div>
    
    <label for="meeting09">Week 5, First Meeting <?php class_date($classid, $termstart, '5', $dayone) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting09" name="meeting09" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "5", $dayone); ?>
    </textarea>
    </div>
    
    <label for="meeting10">Week 5, Second Meeting <?php class_date($classid, $termstart, '5', $daytwo) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting10" name="meeting10" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "5", $daytwo); ?>
    </textarea>
    </div>
    
    <label for="meeting11">Week 6, First Meeting <?php class_date($classid, $termstart, '6', $dayone) ?></label><br />
    <div class="activitycontent">
    <textarea id="meeting11" name="meeting11" class="tinymice" cols="53" rows="10">
    <?php print_holiday($classid, $termstart, "6", $dayone); ?>
    </textarea>
    </div>
    
    </div>    
</div>