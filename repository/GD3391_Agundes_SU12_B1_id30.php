<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD3391');
$docx->addTemplateVariable('COURSETITLE', 'Graphic Design History');
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
$docx->addTemplateVariable('CLASSTIME', 'Tuesdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'None ');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course will examine the influences of social trends, historical events, technological developments and the fine arts on contemporary graphic design, illustration, typographic design, architectural design, photography and fashionable trends in general. Through lectures, supplied visual examples, independent research and design assessments, the student will gain insight into a variety of major design influences. The student will learn how to research and utilize a wide variety of design styles.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Acquire an in depth knowledge of the major movements in design and architecture, and be able to identify all major styles and trends.</li>
<li>Identify the main visual characteristics of a variety of graphic areas in history, including type faces, logos, logotype, borders, and other embellishment devices, and apply these to assignment solutions.</li>
<li>Gain an understanding of appreciation and be able to recognize outstanding designers.</li>
<li>Recognize and describe the areas of significant historic interest to the graphic design field in western and other cultures (i.e., Arts and Crafts, Nouveau, Deco, Modernism, Russian Constructivism, etc.).</li>
<li>Recognize the influence of social and political trends on design; to comprehend the relationship between design and technology.</li>
<li>Learn to think, research, and present like a designer.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Meggs by Phillip B. Meggs, John Wiley & Sons, ©5th Edition, ISBN: 9781118292662</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <span style="font-size: 11pt; font-family: Garamond;"><span style="font-size: 11pt; font-family: Garamond;">Discussions, Lab, Readings, and Research.<span>&nbsp; </span></span> </span></p>
<p><strong>Materials and Supplies:</strong> <span style="font-size: 11pt; font-family: Garamond;">Storage disk, presentation supplies, color prints, notebook, sketchbook,pens/pencils<ins cite="mailto:Holly%20Hadley" datetime="2010-07-14T10:03"></ins></span></p>
<p><strong>Estimated Homework Hours:</strong> 6 hours per week</p>
<p><strong>Technology Required:</strong> <span style="font-size: 11pt; font-family: Garamond;">Computer, design software, office software, PowerPoint, camera, printers, scanner</span></p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br /><span style="font-size: 10pt; font-family: Garamond;">As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance.</span><em><span style="font-size: 10pt; font-family: Garamond;"> (When sending email, please put "GD3391-B1" in the subject line to ensure I see and reply promptly to your email.)</span></em><em></em><span style="font-size: 10pt; font-family: Garamond;"><strong>I will not accept your weekly assignment unless I hear from you <span style="text-decoration: underline;">and</span> receive your work prior to the end of the class period.</strong> </span></p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation</td><td>10%</td></tr>
<tr><td>In-Class Challenges and Videos</td><td>20%</td></tr>
<tr><td>Weekly Assignment</td><td>50%</td></tr>
<tr><td>Final Project</td><td>20%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 10th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Course Overview.&nbsp; Why study Graphic Design History? | From the invention of writing to the illuminated manuscripts. <strong></strong></p>
<p><strong>Lab: </strong>Design Session + Research Session + Discussion<strong></strong></p>
<p><strong>Homework: </strong>Read Chapters 1-4 (Pages 1-63) | Assignment 1 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 17th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>The Birth of Typography and Printing<strong></strong></p>
<p><strong>Lab: </strong>Design Session | Quiz + Assignment 1 Discussion | Research<strong></strong></p>
<p><strong>Homework: </strong>Read Chapters 5-8 (Pages 64-139) | Assignment 2 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 24th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>The Industrial Revolution<strong></strong></p>
<p><strong>Lab: </strong>Design Session | Quiz + Assignment 2 Discussion | Research<strong></strong></p>
<p><strong>Homework:</strong> Read Chapters 9-12 (Pages 140-251) | Assignment 3 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 31st, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>1<sup>st</sup> World War, Sachplakat &nbsp;+ The "Isms"<strong></strong></p>
<p><strong>Lab: </strong>Design Session | Quiz + Assignment 3 Discussion | Research<strong></strong></p>
<p><strong>Homework:</strong> Read Chapters 13-14 (Pages 252-297) | Assignment 4 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 7th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Constructivism, De Stijl, and the Bauhaus<strong></strong></p>
<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 4 Discussion | Research<strong></strong></p>
<p><strong>Homework:</strong> Read Chapters 15-16 (Pages 298-349) | Assignment 5 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 14th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Commercial Modernism <strong></strong></p>
<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 5 Discussion | Research<strong></strong></p>
<p><strong>Homework:</strong> Read Chapter 17 (Pages 350-371) | Assignment 6 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 21st, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>International Typographic Style<strong></strong></p>
<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 6 Discussion | Research <strong></strong></p>
<p><strong>Homework:</strong> Read Chapter 18 (Pages 372-389) | Assignment 7 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 28th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>New York School + Corporate Identity and Visual Systems<strong></strong></p>
<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 6 Discussion | Research <strong></strong></p>
<p><strong>Homework:</strong> Read Chapters 19-20 (Pages 390-435) | Assignment 8 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 4th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Postmodernism<strong></strong></p>
<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 7 &amp; 8 Discussion | Research <strong></strong></p>
<p><strong>Homework:</strong> Read Chapters 21-22 (Pages 436-481) | Assignment 9 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 11th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Contemporary Graphic Design <strong></strong></p>
<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 9 Discussion | Research<strong></strong></p>
<p><strong>Homework:</strong> Read Chapter 23-24 (Pages 482-571) | Assignment 10 | Quiz Study</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 18th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>FINAL PROJECT PRESENTATIONS | Final Exam<strong></strong></p>
<p><strong>Lab: </strong>Final Class Review and Discussion of self-reflections.<strong></strong></p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD3391_Agundes_SU12_id30', $paramsPage);

?>