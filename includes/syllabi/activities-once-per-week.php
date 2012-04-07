<?php $termstart = term_start_date($classid); ?>
<?php $day = return_day($classid); ?>

<div class="frame">
<h4 class="fold">Weekly Activities</h4>
        
    <div class="hide">        
    <label for="meeting01">Week 1 <?php class_date($classid, $termstart, '1', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting01" name="meeting01" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "1", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting02">Week 2 <?php class_date($classid, $termstart, '2', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting02" name="meeting02" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "2", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting03">Week 3 <?php class_date($classid, $termstart, '3', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting03" name="meeting03" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "3", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting04">Week 4 <?php class_date($classid, $termstart, '4', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting04" name="meeting04" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "4", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting05">Week 5 <?php class_date($classid, $termstart, '5', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting05" name="meeting05" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "5", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting06">Week 6 <?php class_date($classid, $termstart, '6', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting06" name="meeting06" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "6", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting07">Week 7 <?php class_date($classid, $termstart, '7', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting07" name="meeting07" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "7", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting08">Week 8 <?php class_date($classid, $termstart, '8', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting08" name="meeting08" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "8", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting09">Week 9 <?php class_date($classid, $termstart, '9', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting09" name="meeting09" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "9", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting10">Week 10 <?php class_date($classid, $termstart, '10', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting10" name="meeting10" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "10", $day); ?>
        </textarea>
        </div>
    
    <label for="meeting11">Week 11 <?php class_date($classid, $termstart, '11', $day) ?></label><br />
        <div class="activitycontent">
        <textarea id="meeting11" name="meeting11" class="tinymice" cols="53" rows="10">
        <?php print_holiday($classid, $termstart, "11", $day); ?>
        </textarea>
        </div>
    
    </div>
    
</div>