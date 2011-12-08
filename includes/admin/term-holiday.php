<div id="holiday1" class="clonedHoliday">

    <p>Holiday</p>
    
    <select name="wkday1" class="weekday" id="wkday1">
        <option value="0" selected = "selected"> --- </option>
        <?php weekday_select_list(); ?>
    </select>
    
    <select name="daymo1" class="day" id="daymo1">
        <option value="0" selected = "selected"> --- </option>
        <?php day_select_list(); ?>
    </select>
    
    <select name="month1" class="month" id="month1">
        <option value="0" selected = "selected"> --- </option>
        <?php month_select_list(); ?>
    </select>
    
    <input type="text" name="descp1" class="descp" id="descp1" value="holiday name" />

</div>