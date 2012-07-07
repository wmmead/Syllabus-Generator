<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD1124');
$docx->addTemplateVariable('COURSETITLE', 'Form And Space');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Steve Holler');
$docx->addTemplateVariable('EMAIL', 'rholler@aii.edu');
$docx->addTemplateVariable('PHONE', '916-202-3200');
$docx->addTemplateVariable('AVAILABILITY', 'Thursday from 10 p.m. to 12 p.m. and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Mondays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'None ');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />Form & Space involves the formal understanding and manipulation of the basic-organizing principles of the 3-dimensional worlds.  Point, line, plane, mass, volume, density and form are discussed.  Students learn to create and discuss 3-D situations using basic hand tools and readily available materials.  Form and Space also involves the relationship of perceptual issues to manipulate the 3-D situation.</p>
<p><strong>Course Focus:</strong><br />This course encourages the student to make conceptual relationships between practical graphic communication applications and abstract three-dimensional assignments.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Recognize the difference between 2-D and 3-D design.</li>
<li>Translate 2-D design into 3-D design.</li>
<li>Demonstrate translation of 3-D form into 2-D drawings.</li>
<li>Explore 3-D media to move through visual space.</li>
<li>Recognize and incorporate function as it relates to design.</li>
<li>Objectively evaluate function as it pertains to form within basic design.</li>
<li>Demonstrate construction skills of 3-D projects (structural integrity).</li>
<li>Develop perceptual and spatial relationships.</li>
<li>Recognize the qualities shared between two + three dimensional design unique to the space around them.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Texts:</strong> None</p>';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab</p>
<p><strong>Materials and Supplies:</strong> Straight Edge/Ruler</p>
<p>Pencils</p>
<p>Sketchbook (8 X 10 ) (drawing paper, not newsprint) *</p>
<p>Xacto knife and extra blades *</p>
<p>Adhesives: Elmer\'s white or wood glue, epoxy &ndash;other glue sources to be announced</p>
<p>Other Materials will be announced prior to each assignment.</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Access to computer labs with Adobe CS software; Flash Drive.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Class Participation</td><td>10%</td></tr>
<tr><td>Creative Concept Development</td><td>35%</td></tr>
<tr><td>Creative Design Development</td><td>35%</td></tr>
<tr><td>Assignment Craftsmanship</td><td>20%</td></tr>
<tr><td><strong>Total</strong></td><td><strong>100%</strong></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('EVALUATION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>School Wide Grading Policies</strong></p>
<ul>
<li>Class time will be spent in a productive manner.</li>
<li>Grading will be done on a point system.</li>
<li>Points for individual activities will be announced.</li>
<li>All work must be received by the set deadlines.</li>
<li>Late work receives a grade of zero.</li>
<li>On-time projects may be redone with instructor approval.</li>
<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>
</ul>
<p><strong>Additional Grading Policies:</strong></p>
<ul>
<li>Class time must be spent in a productive manner.</li>
<li>Grading will be done on a point system.</li>
<li>Points for individual activities will be announced.</li>
<li>All work must be received by the scheduled deadlines.<strong> </strong></li>
<li><strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with me (the instructor) prior to the due date. Regardless of circumstances, penalties will be assessed unless you show me paperwork justifying your absence.</li>
<li>On-time projects may be redone for an improved grade <em>with instructor approval</em>.</li>
<li>No work will be accepted after the final class in week 11.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Homework Assignments:</strong></p>
<p>Please note that all assignments are due on time and are to be completed before class begins. Unless you have made prior arrangements with the instructor, late homework will <strong>NOT</strong> be accepted, and will be given zero points.&nbsp;</p>
<p>&nbsp;<strong>In-class Assignments:</strong></p>
<p><strong></strong>Unless you have made prior arrangements with the instructor you cannot make-up missed in-class work.</p>';

$docx->replaceTemplateVariableByHTML('GRADINGPOLICIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Quarter Credit Hour Definition:</strong></p>
<p>A quarter credit hour is an amount of work represented in intended learning outcomes and verified by evidence of student achievement that is an institutionally established equivalency that reasonably approximates not less than:</p>
<p>(1) One hour of classroom or direct faculty instruction and a minimum of two hours of out-of-class student work each week for 10-12 weeks, or the equivalent amount of work over a different amount of time; or</p>
<p>(2) At least an equivalent amount of work as required in paragraph (1) of this definition for other academic activities as established by the institution including laboratory work, internships, practica, studio work, and other academic work leading to the award of credit hours.</p>

';

$docx->replaceTemplateVariableByHTML('SECTION1', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Classroom Policy:</strong></p>
<ul>
<li>No food allowed in class or lab at any time. Drinks in recloseable bottles allowed in classroom.</li>
<li>Edible items brought to class or lab must be thrown out.</li>
<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>
<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>
<li>Break times are scheduled by the instructor at appropriate intervals.</li>
<li>No private software is to be brought to lab or loaded onto school computers.</li>
<li>No software games are allowed in lab (unless in course curriculum).</li>
<li>Headphones are required if listening to music during lab. No headphones are allowed in lecture.</li>
<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.</li>
<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>
</ul>

<p><strong>School-wide Attendance Policy:</strong></p>
<p>Students who do not attend any classes for fourteen (14) consecutive calendar days and fail to notify the Academic Affairs Department will be withdrawn from school.&nbsp; In addition, the student may be involuntarily withdrawn at the discretion of the Academic Director, and with the approval of the Dean of Academic Affairs, at any time.</p>

<p><strong>Withdraw from a Course:</strong></p>
<p>In order to withdraw from a course (that is, receive a grade of "W"), a student must meet with his or her Academic Director before noon on the Friday of week 9.</p>

<p><strong>Academic Dishonesty:</strong></p>
<p>Students are expected to maintain the highest standards of academic honesty while pursuing their studies at The Art Institutes. Academic dishonesty includes but is not limited to: plagiarism and cheating; misuse of academic resources or facilities; and misuse of computer software, data, equipment or networks.</p>
<p>Plagiarism is the use (copying) of another person\'s ideas, words, visual images or audio samples, presented in a manner that makes the work appear to be the student\'s original creation. All work that is not the student\'s original creation, or any idea or fact that is not "common knowledge," must be documented to avoid even accidental infractions of the conduct code.</p>
<p>Cheating is to gain unfair advantage on a grade by deception, fraud, or breaking the rules set forth by the instructor of the class. Cheating may include but is not limited to: copying the work of others; using notes or other materials when unauthorized; communicating to others during an exam; and any other unfair advantage as determined by the instructor.</p>
<p>Students accused of academic dishonesty will be brought before a Student Conduct Committee. If the committee determines that there has been a violation of the Academic Dishonesty policy, the student will automatically fail the class and, depending on the severity of the infraction, may face further disciplinary action up to and including suspension from classes or expulsion from school.</p>

<p><strong>Disability Policy Statement:</strong></p>
<p>It is our policy not to discriminate against qualified students with documented disabilities in our educational programs, activities, or services. If you have a disability-related need for adjustments or other accommodations in this class see Steven Franklin, Director of Student Affairs located on the 2<sup>nd</sup> &nbsp;floor or e-mail him at sfranklin@aii.edu. You must inform your instructors and the Academic Affairs Office before the end of week one of classes and preferably before the class start.</p>

<p><strong>Student Assistance Program:</strong></p>
<p>The college provides confidential short-term counseling, crisis intervention, and community referral services through the AllOne Health Student Assistance Program (SAP) for a wide range of concerns, including relationship issues, family problems, loneliness, depression, and alcohol or drug abuse. Services are available 24 hours a day, 7 days a week, at 1.888-617-3362. The Student Affairs office also offers programs on mental health-related topics each quarter. If you have any questions regarding counseling services, please contact the Student Affairs office.</p>

<p><strong>Library Operation Hours:</strong></p>
<p>The library is open from 8 AM to 8 PM Monday &ndash; Thursday, 8 AM to 5 PM on Friday and 9 AM to 2 PM on Saturday. The library is closed on Sunday.&nbsp; Computers are available during these hours for students to work on classroom projects.</p>

';

$docx->replaceTemplateVariableByHTML('SECTION2', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<table width="100%">
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 9th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Introduction to Course, faculty, students; Introduce Assignment #1, phase 1.</p>
<p><strong>Lab:</strong> Elements of 3D Design and their relationship to practical communication design applications.</p>
<p><strong>Homework:</strong> Complete Assignment #1, phase 1</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 16th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Critique Assignment #1, phase 1; Introduce Assignment #2, phase 2</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #2, phase 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 23rd, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Critique and discussion of Assignment #2, phase 2;&nbsp; Introduce Assignment #3, phase 1</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #3, phase 1.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 30th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Critique and discussion of Assignment #3, phase 1; Introduce Assignment #3, phase 2.</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #3, phase 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 6th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Mid-term exam; Critique and discussion of Assignment #3, phase 2; Introduce Assignment #4, phase 1.</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #4, phase 1.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 13th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Critique and discussion of Assignment #4, phase 1;&nbsp; Introduce Assignment #4, phase 2.</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #4, phase 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 20th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Critique and discussion of Assignment #4, phase 2;&nbsp; Introduce Assignment #5, phase 1.</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #5, phase 1.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 27th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Critique and discussion of Assignment #5, phase 1;&nbsp; Introduce Assignment #5, phase 2.</p>
<p><strong>Lab:</strong> Work on assignment in class</p>
<p><strong>Homework:</strong> Complete Assignment #5, phase 2;&nbsp; Develop concept for Final Assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 3rd, 2012</p></td><td width="75%"><p>Holiday:&nbsp; Class Will Not Be Held.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 10th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Discuss concepts for final project;&nbsp; Introduce Assignment #6:&nbsp; Final Assignment.</p>
<p><strong>Lab:</strong> Work on assignment in class.</p>
<p><strong>Homework:</strong> Complete Assignment #6:&nbsp; Final Assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 17th, 2012</p></td><td width="75%"><p>Each student will present his / her final project.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD1124_Holler_SU12_id53', $paramsPage);

?>