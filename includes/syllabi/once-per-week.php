<?php $data = get_class_times($link, $classid, 1); $day = $data[0]; $stime = $data[1]; $etime = $data[2]; ?>

<div class="timeblock">
<label for="day">Day the Class Meets</label>
<select name="day1" id="day1">
	<option value="0"> --- </option>
    <?php weekday_select_list($selected = $day) ?>
</select>

</div>

<div class="timeblock">
<label for="timestart1">Start Time</label>
<select name="timestart1" id="timestart1">
	<option value="0"> --- </option>
    <?php time_select_list($selected = $stime) ?>
</select>

</div>

<div class="timeblock">
<label for="timeend1">End Time</label>
<select name="timeend1" id="timeend1">
	<option value="0"> --- </option>
    <?php time_select_list($selected = $etime) ?>
</select>
</div>

