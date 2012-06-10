<?php include("includes/functions-syllabus-read.php"); ?>
<?php $classid = $_GET['sylledit']; ?>

<?php $data = get_class_details($classid); ?>

<div class="frame">
	<h2>Your Syllabus</h2>
    <h4>Course Information</h4>
	<p><strong>Course:</strong> <?php echo syll_info("coursenum", $classid); ?> <?php echo syll_info("course", $classid); ?><br />
    <strong>Instructor:</strong> <?php echo syll_info("fname", $classid); ?> <?php echo syll_info("lname", $classid); ?><br />
    <strong>Term / Year:</strong> <?php echo syll_info("term", $classid); ?> <?php echo syll_info("year", $classid); ?><br />
    <strong>Status:</strong> <?php echo syll_info("status", $classid); ?></p>
    
    <h4>Course Details</h4>
    
    <?php $courseid = syll_info("courseid", $classid); ?>
   
	<p><strong>Total Hours:</strong> <?php echo course_item("totalhrs", $courseid); ?> Hours<br />
    <strong>Lecture Hours:</strong> <?php echo course_item("lecthrs", $courseid); ?> Hours<br />
    <strong>Lab Hours:</strong> <?php echo course_item("labhrs", $courseid); ?> Hours<br />
    <strong>Credits:</strong> <?php echo course_item("credit", $courseid); ?> Credits</p>
    <p><strong>Course Description:</strong><br /> 
    <?php echo course_item("desc", $courseid); ?></p>
    <p><strong>Course Competencies</strong></p>
    <?php output_core_competencies($courseid); ?>
    
    <?php output_additional_competencies($classid); ?>
    
    <?php output_additional_policies($classid); ?>
    
    <p><strong>Course Prerequisites</strong></p>
    <?php output_prerequisites($courseid); ?>
    
    <h4>Class Details</h4>
    <?php output_class_times($classid); ?>
    
    <?php output_class_details($classid) ?>
    
    <?php ouput_optional_course_details($classid); ?>
    
    <h4>Evaluation Details</h4>
    <?php output_evaluation_details($classid); ?>
    
    <h4>Books</h4>
    <?php ouput_book_details($classid); ?>
    
    <?php output_activities($classid); ?>
    
    
   

</div>