<?php $id = $_GET['courseid']; ?>
<section class="whole">
<h2 class="mainheader">View Course</h2>

<?php $active = course_item($link, "active", $id); ?>

<?php 

if($active == 0)
{
	echo "<p class='example'>This course is currently inactive. To make it active, please edit the course</p>";
}

?>

<h3><?php echo course_item($link, "number", $id);?> <?php echo course_item($link, "name", $id); ?></h3>
<p><strong>Total Hours:</strong> <?php echo course_item($link, "totalhrs", $id); ?> Hours</p>
<p><strong>Lecture Hours:</strong> <?php echo course_item($link, "lecthrs", $id); ?> Hours</p>
<p><strong>Lab Hours:</strong> <?php echo course_item($link, "labhrs", $id); ?> Hours</p>
<p><strong>Credits:</strong> <?php echo course_item($link, "credit", $id); ?> Credits</p>
<p><strong>Course Description:</strong><br /> 
<?php echo course_item($link, "desc", $id); ?></p>

<h3>Learning Objectives</h3>
<?php output_core_competencies($link, $id); ?>

<h3>Course Prerequistes</h3>
<?php output_prerequisites($link, $id); ?>

<p><a href="courses.php?editcourse=<?php echo $id; ?>">Edit</a></p>
</section>
