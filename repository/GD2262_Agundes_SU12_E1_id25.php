<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD2262');
$docx->addTemplateVariable('COURSETITLE', 'Message Making');
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
$docx->addTemplateVariable('CLASSTIME', 'Fridays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD2241 Concept Design');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course focuses on how messages can be constructed through images using subject matter, context juxtaposition, editing, scale, color, and composition. Materials and technologies are explored.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Develop a basic understanding of semiotics with the denotation/connotation of images as they exist separately or together. </li>
<li>Apply the design process to specific goal-focused problem solving.</li>
<li>Explore nontraditional design options.</li>
<li>Develop a basic understanding of how messages can be constructed through images, using subject matter, context, juxtaposition, editing, scale, and color to determine the degree of communication.</li>
<li>Analyze and define creative challenges in message making.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Type and Image: The Language of Graphic Design by Phillip B. Meggs, John Wiley & Sons, ©1992, ISBN: 442-25846-1</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <span style="font-size: 10pt; font-family: Garamond; color: black;">Lab, Lecture, Applied Projects</span></p>
<p><strong>Materials and Supplies:</strong> Sketchpad, pencils/markers, flash drive.</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> <span style="font-size: 10pt; font-family: Garamond;">Access to you eCompanion class, which can be done on campus. Access to Internet, Adobe Creative Suite.</span></p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br /><em></em><span style="font-size: 10pt; font-family: Garamond;">As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance.</span><em><span style="font-size: 10pt; font-family: Garamond;"> (When sending email, please put "GD2262-C1" in the subject line to ensure I see and reply promptly to your email.)</span></em></p>
<p><em></em><span style="font-size: 10pt; font-family: Garamond;"><strong>I will not accept your weekly assignment unless I hear from you <span style="text-decoration: underline;">and</span> receive your work prior to the end of the class period.</strong> <br /></span></p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation</td><td>10%</td></tr>
<tr><td>Assignments and Exercises</td><td>65%</td></tr>
<tr><td>Final Project</td><td>25%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 13th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Introduction to class, goals and expectations. Graphic Signals: Introduction to Semiotics</p>
<p><strong>Lab: </strong>Signs: icon, index and symbol, Contrasting Definitions</p>
<p><strong><em>Homework</em></strong>: Creative Brief + Visual Audit<em></em></p>
<p><strong>Read: </strong>1-18 Type and Image</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 20th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Images and Meaning&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Lab:</strong> Language as a model for visual communication/Simile, metaphor, personification, pun</p>
<p><strong><em>Homework:</em></strong><em> </em>Images and Meaning</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>&nbsp;&nbsp;</strong><strong>Read: </strong>19-40 Type and Image</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 27th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Language, Typography, and Meaning, Midterm Project Assigned&nbsp;&nbsp;</p>
<p><strong>Lab:</strong> Connotation Exercise</p>
<p><strong><em>Homework:</em></strong><em> </em>Connotation Cube, Language, Typography &amp; Meaning</p>
<p><strong></strong><strong><em>Re</em></strong><strong>Read: </strong>19-40 Type and Image</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 3rd, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Typography and Meaning&nbsp;</p>
<p><strong>Lab:</strong>&nbsp; Connotation and resonance in type</p>
<p><strong><em>Homework: </em></strong>Graphic Space and Meaning</p>
<p>&nbsp;<strong>Read: </strong>41-44, 56-61, 120-126 Type and Image</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 10th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Combining Type and Image, Midterm Critique</p>
<p><strong>Lab:</strong> Juxtaposition, synergy</p>
<p><strong><em>Homework:</em></strong><em> </em>Midterm Assignment &ndash; Message Analysis</p>
<p><strong>Read: </strong>45-55, 62-68 Type and Image</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 17th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Graphic Space and Meaning</p>
<p><strong>Lab: </strong>Composition and structures</p>
<p><strong><em>Homework</em></strong><em>: </em>Graphic Space and Meaning (Continued)</p>
<p><strong>Read: </strong>69-90 Type and Image</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 24th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Continued</p>
<p><strong>Lab:</strong> Composition and structures</p>
<p><strong><em>Homework:</em></strong><em>&nbsp; </em>Graphic Resonance</p>
<p><strong>Read Chapter 10 -11:</strong> pages 192-236</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 31st, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Design Elements and Meaning</p>
<p><strong>Lab: </strong>Repetition, scale, motion, tension</p>
<p><strong><em>Homework:</em></strong><em> </em>Enhancing the Message<em></em></p>
<p><em></em><strong>Read: </strong>92-116 Type and Image<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 7th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Resonance in Meaning<em></em></p>
<p><strong>Lab:</strong> Open lab</p>
<p><strong><em>Homework:</em></strong><em> </em>Graphic Resonance, Part 2<em></em></p>
<p><strong>Read:</strong> 92-152 Type and Image<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 14th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Resonance in Image</p>
<p><strong>Lab:</strong> Final Project<strong><em></em></strong></p>
<p><strong><em>Homework:</em></strong><em> </em>Final Project<em></em></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 21st, 2012</p></td><td width="75%"><p><strong><span style="font-size: 11pt; font-family: Garamond; color: black;">Lecture: </span></strong><span style="font-size: 11pt; font-family: Garamond; color: black;">Overview, Final Project Presentations</span></p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD2262_Agundes_SU12_id25', $paramsPage);

?>