<?php $classid = $_GET['sylledit']; ?>

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
    
    <p><strong><label for="additional">Additional Requirements</label></strong><br />
    <span class="example">Optional: Use this section to specify any additional requirements for students</span><br />
    <textarea name="additional" class="tinymice" id="additional" cols=55 rows="5"></textarea></p>
    
    </form>

</div>