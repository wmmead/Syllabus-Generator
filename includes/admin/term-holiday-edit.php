<div id="holiday<?php echo $order; ?>" class="clonedHoliday">

    <strong>Holiday:</strong><br />
    
    <select name="wkday<?php echo $order; ?>" class="weekday" id="wkday<?php echo $order; ?>">
        <option value="0"> --- </option>
        <?php weekday_select_list($weekday); ?>
    </select>
    
    <select name="daymo<?php echo $order; ?>" class="day" id="daymo<?php echo $order; ?>">
        <option value="0"> --- </option>
        <?php day_select_list($day); ?>
    </select>
    
    <select name="month<?php echo $order; ?>" class="month" id="month<?php echo $order; ?>">
        <option value="0"> --- </option>
        <?php month_select_list($month); ?>
    </select>
    
    <input type="text" name="descp<?php echo $order; ?>" class="descp" id="descp<?php echo $order; ?>" value="<?php echo $name; ?>" />

</div>