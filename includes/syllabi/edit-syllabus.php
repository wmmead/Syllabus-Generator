<?php $classid = $_GET['sylledit']; ?>

<div class="frame container">
	
    <h4>Course Information</h4>
	<p><strong>Course:</strong> <?php echo syll_info("coursenum", $classid); ?> <?php echo syll_info("course", $classid); ?><br />
    <strong>Instructor:</strong> <?php echo syll_info("fname", $classid); ?> <?php echo syll_info("lname", $classid); ?><br />
    <strong>Term / Year:</strong> <?php echo syll_info("term", $classid); ?> <?php echo syll_info("year", $classid); ?><br />
    <strong>Status:</strong> <?php echo syll_info("status", $classid); ?></p>
    
    <h4><a href="#">View Course Details</a></h4>
    
    <?php $courseid = syll_info("courseid", $classid); ?>
    <div class="toggle-on">
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