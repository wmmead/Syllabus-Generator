<p><strong><label for="day1">Day the Course Meets</label></strong><br />
<select name="day1" id="day1">
    <?php weekday_select_list($selected = '') ?>
</select>
</p>

<p><strong><label for="starttime1">Start Time</label></strong><br />
<input type="text" name="starttime1" id="starttime1" value="" /> <span class="example">i.e. 8:00 am</span></p>

<p><strong><label for="endtime1">End Time</label></strong><br />
<input type="text" name="endtime1" id="endtime1" value="" /> <span class="example">i.e. 12:00 pm</span></p>