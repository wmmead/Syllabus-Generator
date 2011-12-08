<h2 class="mainheader">View Course</h2>
<h3><?php echo course_item("number");?> <?php echo course_item("name"); ?></h3>
<p><strong>Total Hours:</strong> <?php echo course_item("totalhrs"); ?> Hours</p>
<p><strong>Lecture Hours:</strong> <?php echo course_item("lecthrs"); ?> Hours</p>
<p><strong>Lab Hours:</strong> <?php echo course_item("labhrs"); ?> Hours</p>
<p><strong>Credits:</strong> <?php echo course_item("credit"); ?> Credits</p>
<p><strong>Course Description:</strong><br /> 
<?php echo course_item("desc"); ?></p>

<?php output_core_competencies(); ?>

<?php output_prerequisites(); ?>

<p><a href="courses.php?editcourse=<?php echo course_item("id"); ?>">Edit</a></p>
