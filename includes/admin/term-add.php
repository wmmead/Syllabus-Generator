<div class="frame">
    <h2 class="mainheader">Add Term Dates</h2>
    <form method="post" action="admin.php?terms=yes">
    	<div class="container">
        <div>
        <label for="term"><strong>Term:</strong></label>
        <select name="term">
            <option value="0">---</option>
            <option value="1">Winter</option>
            <option value="2">Spring</option>
            <option value="3">Summer</option>
            <option value="4">Fall</option>
        </select>
        
        <select name="year">
            <?php year_list(); ?>
        </select>
        </div>
        
        <div>
        <strong>Start Date:</strong>
        <select name="day-start">
            <?php day_select_list(); ?>
        </select>
        
        <select name="month-start">
            <?php month_select_list(); ?>
        </select>
        
        <select name="year-start">
            <?php year_list(); ?>
        </select>
        </div>
        
        <div>
        <strong>End Date:</strong>
        <select name="day-end">
            <?php day_select_list(); ?>
        </select>
        
        <select name="month-end">
            <?php month_select_list(); ?>
        </select>
        
        <select name="year-end">
            <?php year_list(); ?>
        </select>
        </div>
        </div>
        <div class="container">
        <h2 class="mainheader">Add Holidays</h2>
            <div id="holiday1" class="clonedHoliday">
            Holiday<br />
            
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
            
            <input type="button" id="addHoliday" value="Add Another Holiday" />
            
        </div>
        
        <input type="submit" name="addterm" value="Add Term" />
        
    </form>
</div>