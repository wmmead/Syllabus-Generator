<?php $data = get_class_times($classid, 1); $day = $data[0]; $stime = $data[1]; $etime = $data[2]; ?>

<div class="container">
<div class="timeblock">
<p><strong><label for="day">Day the Class Meets</label></strong><br />
<select name="day1" id="day1">
	<option value="0"> --- </option>
    <?php weekday_select_list($selected = $day) ?>
</select>
</p>
</div>

<div class="timeblock">
<p><strong><label for="timestart1">Start Time</label></strong><br />
<select name="timestart1" id="timestart1">
	<option value="0"> --- </option>
    <?php time_select_list($selected = $stime) ?>
</select>
</p>
</div>

<div class="timeblock">
<p><strong><label for="timeend1">End Time</label></strong><br />
<select name="timeend1" id="timeend1">
	<option value="0"> --- </option>
    <?php time_select_list($selected = $etime) ?>
</select>
</p>
</div>
</div><!-- end container -->

