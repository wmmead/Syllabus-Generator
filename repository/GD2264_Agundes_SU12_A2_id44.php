<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD2264');
$docx->addTemplateVariable('COURSETITLE', 'Digital Message Making');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Holly Agundes');
$docx->addTemplateVariable('EMAIL', 'hagundes@aii.edu');
$docx->addTemplateVariable('PHONE', '916-230-1362');
$docx->addTemplateVariable('AVAILABILITY', 'Mondays from 11 am - 12 pm or by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Mondays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD1123 Electronic Layout');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />Students further explore through an in depth study of the exercises learned in Message Making using the computer as the tool to create the messages.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Apply principles of composition and design.</li>
<li>Integrate design concepts, materials, and skills.</li>
<li>Apply the design process to specific goal-focused problem solving.</li>
<li>Explore nontraditional design options.</li>
<li>Develop an understanding of semiotics with the denotation/connotation of images as they exist separately or together.</li>
<li>Develop an understanding of how messages can be constructed through images, using subject matter, context, juxtaposition, editing, scale, and color to determine the degree of communication.</li>
<li>Identify and use appropriate research methods.</li>
<li>Verify that outcomes meet design objectives.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Recommended Text:</strong> Type and Image: The Language of Graphic Design by Phillip B. Meggs, John Wiley & Sons, ©1992, ISBN: 9781118292662</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture, lab, applied projects</p>
<p><strong>Materials and Supplies:</strong> Flash/USB Drive: <strong>REQUIRED</strong></p>
<p>Note taking materials (pen/pencil and paper): <strong>REQUIRED</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><em>Instructor expects every student to keep notes for lecture.</em></p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Access to Adobe Creative Suite, scanner, printers and camera</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br />As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance. (When sending email, please put "GD2264-A2" in the subject line to ensure I see and reply promptly to your email.)<strong>I will not accept your weekly assignment unless I hear from you <span style="text-decoration: underline;">and</span> receive your work prior to the end of the class period.</strong></p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation</td><td>10%</td></tr>
<tr><td>Assignments and Exercises</td><td>60%</td></tr>
<tr><td>Midterm Critique</td><td>10%</td></tr>
<tr><td>Final Project and Presentation</td><td>20%</td></tr>
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
';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 9th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Introduction to class, goals and expectations. The Design Process</p>
<p><strong>Lecture:</strong> Intro to Semiotics </p>
<p><strong>Lab:</strong> Course Assignment Intro + Mindmapping</p>
<p><strong><em>Homework</em></strong>: Week 1 Assignment</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 16th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Images and Meaning + Persuasive Imagery/Image as message/ Connotation-Denontation<em>(find website examples of each MM topic to present)</em></p>
<p><strong>Lab: </strong>Web Intro (Basic Design Concepts) + Exercise 1: Successful Websites</p>
<p><strong><em>Homework:</em></strong><em> </em>Week 2 Assignment <em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 23rd, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Graphic Space-Composition and Structure</p>
<p><strong>Lecture: </strong>Intro to HTML, Designing for the web/Creating a Wireframe</p>
<p><strong><em>Homework:</em></strong><em> </em>Week 3 Assignment, Wireframe generation (preliminary)<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 30th, 2012</p></td><td width="75%"><p><strong>Lecture/Lab:</strong> CSS/Wireframe Crit and Selection</p>
<p><strong><em>Homework: </em></strong>Week 4 Assignment<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 6th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Typography and Meaning.</p>
<p><strong>Lab:</strong> Typography for web + Target Audience</p>
<p><strong><em>Homework:</em></strong><em> </em>Week 5 Assignment<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 13th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Connotation and Resonance in Web Typography, Typography Critique/Selection</p>
<p><strong>Lab: </strong>Interface Design, Part 1</p>
<p><strong><em>Homework</em></strong><em>: </em>Week 6 Assignment</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 20th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Graphic Space, Part 2. (Field of Tension and Visual Continuity)</p>
<p><strong>Lab:</strong> Web Design Production</p>
<p><strong><em>Homework:</em></strong><em> </em>Week 7 Assignment<strong><em></em></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 27th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Graphic Resonance (Style as Message), Critique, Grade one-on-ones<em></em></p>
<p><strong>Lab:</strong> Interface Design, Part 2 (Production)</p>
<p><strong><em>Homework:</em></strong><em> </em>Week 8 Assignment<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 3rd, 2012</p></td><td width="75%"><p>Holiday - NO CLASS</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 10th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> How to Package Your Final/How to Present</p>
<p><strong>Lab:</strong> Presentations</p>
<p><strong><em>Homework:</em></strong><em> </em>Complete design work for final<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 17th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Overview, Final Project Presentations</p>
<p>NOTE:&nbsp; <em>Project schedule may be revised depending on the progress/cri</em><em>ts of the class</em><em></em></p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD2264_Agundes_SU12_id44', $paramsPage);

?>