<?php 
	$id = $_GET['termedit'];
	$tn = display_term_info($id, 'termnumber');
	$year = display_term_info($id, 'year');
	$start_month = display_term_info($id, 'startmonth');
	$start_day = display_term_info($id, 'startday');
	$end_month = display_term_info($id, 'endmonth');
	$end_day = display_term_info($id, 'endday');
?>

<div class="frame">
    <h2 class="mainheader">Edit Term Dates</h2>
    <form method="post" action="admin.php?termeid=<?php echo $id; ?>">
    	<input type="hidden" name="id" value="<?php echo $id; ?>" />
    	<div>
        <div>
        <label for="term"><strong>Term:</strong></label>
        <select name="term">
            <option value="0">---</option>
            <option value="1" <?php if($tn == 1){echo 'selected="selected"';} ?>>Winter</option>
            <option value="2" <?php if($tn == 2){echo 'selected="selected"';} ?>>Spring</option>
            <option value="3" <?php if($tn == 3){echo 'selected="selected"';} ?>>Summer</option>
            <option value="4" <?php if($tn == 4){echo 'selected="selected"';} ?>>Fall</option>
        </select>
        
        <select name="year">
            <?php selected_year_list($year); ?>
        </select>
        </div>
        
        <div>
        <strong>Start Date:</strong>
        <select name="day-start">
            <?php day_select_list($start_day); ?>
        </select>
        
        <select name="month-start">
            <?php month_select_list($start_month); ?>
        </select>
        
        <select name="year-start">
            <?php selected_year_list($year); ?>
        </select>
        </div>
        
        <div>
        <strong>End Date:</strong>
        <select name="day-end">
            <?php day_select_list($end_day); ?>
        </select>
        
        <select name="month-end">
            <?php month_select_list($end_month); ?>
        </select>
        
        <select name="year-end">
            <?php selected_year_list($year); ?>
        </select>
        </div>
        </div>
        <div>
        <h2 class="mainheader">Edit Holidays</h2>
            
            <?php edit_holidays(); ?>
            
        </div>
        
        <input type="submit" name="editterm" value="Edit Term" />
        
    </form>
</div>