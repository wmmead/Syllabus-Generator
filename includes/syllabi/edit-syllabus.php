<?php $classid = $_GET['sylledit']; ?>
<?php $termstart = term_start_date($classid); ?>
<?php $day = return_day($classid); ?>

<div class="frame container">
	
    <h4>Course Information</h4>
	<p><strong>Course:</strong> <?php echo syll_info("coursenum", $classid); ?> <?php echo syll_info("course", $classid); ?><br />
    <strong>Instructor:</strong> <?php echo syll_info("fname", $classid); ?> <?php echo syll_info("lname", $classid); ?><br />
    <strong>Term / Year:</strong> <?php echo syll_info("term", $classid); ?> <?php echo syll_info("year", $classid); ?><br />
    <strong>Status:</strong> <?php echo syll_info("status", $classid); ?></p>
    
    <h4 class="fold">Course Details</h4>
    
    <?php $courseid = syll_info("courseid", $classid); ?>
    <div class="hide">
    	<p><strong>Total Hours:</strong> <?php echo course_item("totalhrs", $courseid); ?> Hours<br />
        <p><strong>Lecture Hours:</strong> <?php echo course_item("lecthrs", $courseid); ?> Hours<br />
        <p><strong>Lab Hours:</strong> <?php echo course_item("labhrs", $courseid); ?> Hours<br />
        <p><strong>Credits:</strong> <?php echo course_item("credit", $courseid); ?> Credits</p>
        <p><strong>Course Description:</strong><br /> 
        <?php echo course_item("desc", $courseid); ?></p>
        <p><strong>Course Competencies</strong></p>
        <?php output_core_competencies($courseid); ?>
        
        <p><strong>Course Prerequisites</strong></p>
        <?php output_prerequisites($courseid); ?>
    </div>

</div>

<div class="frame container">
	<h4>Syllabus Details</h4>
    <form method="post" action="index.php?sylledit=<?php echo $classid; ?>">
    <p><strong><label for="length">Length of the course</label></strong><br />
    <input type="text" name="length" id="length" value="" /> <span class="example">number of weeks i.e. 11</span></p>
    
    <p><strong><label for="day">Day the Course Meets</label></strong><br />
    <select name="day" id="day">
    	<?php weekday_select_list($selected = '') ?>
    </select>
    </p>
    
    <p><strong><label for="starttime">Start Time</label></strong><br />
    <input type="text" name="starttime" id="starttime" value="" /> <span class="example">i.e. 8:00 am</span></p>
    
    <p><strong><label for="endtime">End Time</label></strong><br />
    <input type="text" name="endtime" id="endtime" value="" /> <span class="example">i.e. 12:00 pm</span></p>
    
    <p><strong><label for="hwhrs">Estimated Homework Hours</label></strong><br />
    <input type="text" name="hwhrs" id="hwhrs" value="" /> <span class="example">i.e. 4 hours per week</span></p>
    
    <p><strong><label for="officehrs">Instructor Availability Outside of Class</label></strong><br />
    <input type="text" name="officehrs" id="officehrs" value="" /> <span class="example">i.e. Wednesdays from 12 - 1 pm and by appointment</span></p>
    
    <p><strong><label for="materials">Materials Required for the Course</label></strong><br />
    <textarea name="materials" class="tinymice" id="materials" cols=55 rows="5"></textarea></p>
    
    <p><strong><label for="methods">Methods of Instruction</label></strong><br />
    <textarea name="methods" class="tinymice" id="methods" cols=55 rows="5"></textarea></p>
    
    <p><strong><label for="tech">Technology Required</label></strong><br />
    <textarea name="tech" class="tinymice" id="tech" cols=55 rows="5"></textarea></p>
    
    <div class="frame">
    <h4>Books</h4>
    <?php edit_books($classid); ?>
    </div>
    
    <p><strong><label for="additional">Additional Requirements</label></strong><br />
    <span class="example">Optional: Use this section to specify any additional requirements for students</span><br />
    <textarea name="additional" class="tinymice" id="additional" cols=55 rows="5"></textarea></p>
    
    <div class="frame">
    <h4>Additional Competetencies</h4>
    <p><span class="example">Optional: Use this section to add competencies that go beyond the ones required for the course.</span></p>
    <?php edit_addtl_competencies($classid, "1"); ?>
    </div>
    
    <div class="frame">
    <h4>Additional Grading Policies</h4>
    <p><span class="example">Optional: Use this section to add additional grading policies that go beyond the ones required for all courses.</span></p>
    <?php edit_addtn_grade_policies($classid, "1"); ?>
    </div>
    
    <div class="frame">
    	<h4>Weekly Activities</h4>
        
<label for="week01">Week 1 <?php class_date($classid, $termstart, '1', $day) ?></label><br />
<textarea id="week01" name="week01" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "1", $day); ?>
</textarea>

<label for="week02">Week 2 <?php class_date($classid, $termstart, '2', $day) ?></label><br />
<textarea id="week02" name="week02" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "2", $day); ?>
</textarea>

<label for="week03">Week 3 <?php class_date($classid, $termstart, '3', $day) ?></label><br />
<textarea id="week03" name="week03" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "3", $day); ?>
</textarea>

<label for="week04">Week 4 <?php class_date($classid, $termstart, '4', $day) ?></label><br />
<textarea id="week04" name="week04" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "4", $day); ?>
</textarea>

<label for="week05">Week 5 <?php class_date($classid, $termstart, '5', $day) ?></label><br />
<textarea id="week05" name="week05" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "5", $day); ?>
</textarea>

<label for="week06">Week 6 <?php class_date($classid, $termstart, '6', $day) ?></label><br />
<textarea id="week06" name="week06" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "6", $day); ?>
</textarea>

<label for="week07">Week 7 <?php class_date($classid, $termstart, '7', $day) ?></label><br />
<textarea id="week07" name="week07" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "7", $day); ?>
</textarea>

<label for="week08">Week 8 <?php class_date($classid, $termstart, '8', $day) ?></label><br />
<textarea id="week08" name="week08" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "8", $day); ?>
</textarea>

<label for="week09">Week 9 <?php class_date($classid, $termstart, '9', $day) ?></label><br />
<textarea id="week09" name="week09" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "9", $day); ?>
</textarea>

<label for="week10">Week 10 <?php class_date($classid, $termstart, '10', $day) ?></label><br />
<textarea id="week10" name="week10" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "10", $day); ?>
</textarea>

<label for="week11">Week 11 <?php class_date($classid, $termstart, '11', $day) ?></label><br />
<textarea id="week11" name="week11" cols="53" rows="10">
<?php print_holiday($classid, $termstart, "11", $day); ?>
</textarea>
    
    </div>
    
    </form>

</div>