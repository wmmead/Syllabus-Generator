<?php $id = $_GET['courseid']; ?>

<h2 class="mainheader">View Course</h2>

<?php $active = course_item("active", $id); ?>

<?php 

if($active == 0)
{
	echo "<p class='example'>This course is currently inactive. To make it active, please edit the course</p>";
}

?>

<h3><?php echo course_item("number", $id);?> <?php echo course_item("name", $id); ?></h3>
<p><strong>Total Hours:</strong> <?php echo course_item("totalhrs", $id); ?> Hours</p>
<p><strong>Lecture Hours:</strong> <?php echo course_item("lecthrs", $id); ?> Hours</p>
<p><strong>Lab Hours:</strong> <?php echo course_item("labhrs", $id); ?> Hours</p>
<p><strong>Credits:</strong> <?php echo course_item("credit", $id); ?> Credits</p>
<p><strong>Course Description:</strong><br /> 
<?php echo course_item("desc", $id); ?></p>

<h3>Learning Objectives</h3>
<?php output_core_competencies($id); ?>

<h3>Course Prerequistes</h3>
<?php output_prerequisites($id); ?>

<p><a href="courses.php?editcourse=<?php echo $id; ?>">Edit</a></p>
