<?php include("includes/functions-syllabus-read.php"); ?>
<?php 
	if(isset($_GET['sylledit']))
	{
		$classid = $_GET['sylledit'];
	}
	elseif(isset($_GET['syllreview']))
	{
		$classid = $_GET['syllreview'];
	}
?>

<?php $data = get_class_details($link, $classid); ?>

<div class="frame">
	<h2>Course Syllabus</h2>
    <h4>Course Information</h4>
	<p><strong>Course:</strong> <?php echo syll_info($link, "coursenum", $classid); ?> <?php echo syll_info($link, "course", $classid); ?><br />
    <strong>Instructor:</strong> <?php echo syll_info($link, "fname", $classid); ?> <?php echo syll_info($link, "lname", $classid); ?><br />
    <strong>Term / Year:</strong> <?php echo syll_info($link, "term", $classid); ?> <?php echo syll_info($link, "year", $classid); ?><br />
    <strong>Section:</strong> <?php output_section_number($link, $classid);?><br />
    <strong>Status:</strong> <span class="<?php echo syll_info($link, "status", $classid); ?>"><?php echo syll_info($link, "status", $classid); ?></span></p>
    
    <h4>Course Details</h4>
    
    <?php $courseid = syll_info($link, "courseid", $classid); ?>
   
	<p><strong>Total Hours:</strong> <?php echo course_item($link, "totalhrs", $courseid); ?> Hours<br />
    <strong>Lecture Hours:</strong> <?php echo course_item($link, "lecthrs", $courseid); ?> Hours<br />
    <strong>Lab Hours:</strong> <?php echo course_item($link, "labhrs", $courseid); ?> Hours<br />
    <strong>Credits:</strong> <?php echo course_item($link, "credit", $courseid); ?> Credits</p>
    <p><strong>Course Description:</strong><br /> 
    <?php echo course_item($link, "desc", $courseid); ?></p>
    <p><strong>Course Competencies</strong></p>
    <?php output_core_competencies($link, $courseid); ?>
    
    <?php output_additional_competencies($link, $classid); ?>
    
    <?php output_additional_policies($link, $classid); ?>
    
    <p><strong>Course Prerequisites</strong></p>
    <?php output_prerequisites($link, $courseid); ?>
    
    <h4>Class Details</h4>
    <?php output_class_times($link, $classid); ?>
    
    <?php output_class_details($link, $classid) ?>
    
    <?php ouput_optional_course_details($link, $classid); ?>
    
    <h4>Evaluation Details</h4>
    <?php output_evaluation_details($link, $classid); ?>
    
    <h4>Books</h4>
    <?php ouput_book_details($link, $classid); ?>
    
    <?php output_activities($link, $classid); ?>
    
    
    
</div>