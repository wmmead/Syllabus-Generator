<?php $data = get_class_times($link, $classid, 1); $day = $data[0]; $stime = $data[1]; $etime = $data[2]; ?>

<div class="timeblock">
<label for="day1">Class meeting day in the first half of the week</label>
<p class="example">Generally a Monday, Tuesday or Wednesday</p>
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

<?php $data = get_class_times($link, $classid, 2); $day = $data[0]; $stime = $data[1]; $etime = $data[2]; ?>

<div class="timeblock">
<label for="day2">Class meeting day in the second half of the week</label>
<p class="example">Generally a Thursday or Friday</p>
<select name="day2" id="day2">
	<option value="0"> --- </option>
    <?php weekday_select_list($selected = $day) ?>
</select>
</div>

<div class="timeblock">
<label for="timestart2">Start Time</label>
<select name="timestart2" id="timestart2">
	<option value="0"> --- </option>
    <?php time_select_list($selected = $stime) ?>
</select>
</div>

<div class="timeblock">
<label for="timeend2">End Time</label>
<select name="timeend2" id="timeend2">
	<option value="0"> --- </option>
    <?php time_select_list($selected = $etime) ?>
</select>
</div>

