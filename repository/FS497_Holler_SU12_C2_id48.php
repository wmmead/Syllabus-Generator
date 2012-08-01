<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'FS497');
$docx->addTemplateVariable('COURSETITLE', 'Portfolio 2');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Steve Holler');
$docx->addTemplateVariable('EMAIL', 'rholler@aii.edu');
$docx->addTemplateVariable('PHONE', '916-202-3200');
$docx->addTemplateVariable('AVAILABILITY', 'Thursday from 10 p.m. to 12 p.m. and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '0 Hours');
$docx->addTemplateVariable('LAB', '44 Hours');
$docx->addTemplateVariable('CREDITS', '2 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Wednesdays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'Permission of Academic Director/Advisor ');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course focuses on the completion of a student\'s portfolio and enables the student to begin a career search. Students present work for the portfolio, then review and determine the quality of the work and make any enhancements necessary. The student also completes a professional resume and extensive job search.</p>
<p><strong>Course Focus:</strong><br />The focus of this course will be to extablish a personal professional identity and display format for your creative skills and abilities.&nbsp; A high level of refinement, execution and presentation will be required.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Organize artwork in a print portfolio.</li>
<li>Develop a plan that conforms to desired outcomes and can be completed within a specified time frame.</li>
<li>Analyze, prioritize, and sequence project tasks.</li>
<li>Generate a resume that reflects the individual\'s most marketable skills and qualities.</li>
<li>Recognize and adhere to copyright laws governing the use of emerging technology.</li>
<li>Adhere to rules and standards of academic and intellectual integrity such as those related to plagiarism.</li>
<li>Produce an ID package - letterhead & business card.</li>
<li>Communicate effectively with prospective employers.</li>
<li>Generate a letter that helps the individual obtain a job interview.</li>
<li>Discuss the relative effectiveness of various media for different communication purposes.</li>
<li>Use the Internet to conduct career related research.</li>
<li>Conduct networking activities with pertinent industry groups, individuals, and/or associations.</li>
<li>Evaluate personal and professional skills and interests relative to their application in possible career paths and projects.</li>
<li>Develop communication skills for job interview and presentation.</li>
<li>Develop an understanding of self-promotion, bidding + estimates, taxes, and billable expenses.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Texts:</strong> None</p>';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab</p>
<p><strong>Materials and Supplies:</strong> High quality print production; Graphic design tools and fabrication materials; portfolio display format and presentation materials specified by the instructor.</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Computer lab and Adobe CS software; Storage Disk / Flash Drive; emnail account and web server space.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br />Successful completion of this course will require the student to meet specific deadline requirements and participation in all scheduled review processes.</p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Class Participation</td><td>10%</td></tr>
<tr><td>Portfolio Required Promotional Elements</td><td>40%</td></tr>
<tr><td>Portfolio Display</td><td>50%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 11th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Course introduction and process discussion; Discussion of the portfolio format and individual professional promotional methods.</p>
<p><strong>Lab:</strong>&nbsp; Personal graphic identity development; Discussion of planned portfolio contents.</p>
<p><strong>Homework:</strong>&nbsp; Assignment defined by the instructor.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 18th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Introduction of creative development for personal identity design; Discussion of exhibit selection for portfolio presentation.</p>
<p><strong>Lab:</strong>&nbsp; Concept development for personal identification design;&nbsp; Selection and review of portfolio exhibits for refinement.</p>
<p><strong>Homework:</strong>&nbsp; Design development of personal identity design; Select exhibits for portfolio.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 25th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Introduction of personal stationery design assignment; Introduction of "Challenge and Solution" statement assignment.</p>
<p><strong>Lab:&nbsp;</strong> Stationery design development; Writing of "Challenge and Solution" statements.</p>
<p><strong>Homework:</strong>&nbsp; Assignment development; Completion of assigned deadlines.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 1st, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Introduction of the "Leave Behind" and "Mailer" publications</p>
<p><strong>Lab:&nbsp;</strong> Design development of the "Leave Behind and "Mailer" publication concepts;&nbsp; Finalization of the previous assignments.</p>
<p><strong>Homework:</strong>&nbsp; Assignment development; Completion of assigned deadline.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 8th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Introduction of exhibit photography process, Introduction of Electronic Portfolio and Web Site Design; Discuss the layout of table top display for portfolio show.</p>
<p><strong>Lab:&nbsp;</strong> Continue design development for previous assignments and exhibit refinements.</p>
<p><strong>Homework:&nbsp;</strong> Assignment development; Completion of assigned deadline.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 15th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Professional Panel Review.</p>
<p><strong>Lab:</strong> Continue design development for previous assignments and exhibit refinements.</p>
<p><strong>Homework:&nbsp;</strong> Assignment development; Completion of assigned deadline.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 22nd, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Each student will review all portfolio elements with the instructor;&nbsp; Discussion of the Faculty Panel Review.</p>
<p><strong>Lab:</strong>&nbsp; Continue design development for previous assignments and exhibit refinements.</p>
<p><strong>Homework:&nbsp;</strong> Prepare for the Faculty Review.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 29th, 2012</p></td><td width="75%"><p><strong>Faculty Panel Review</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 5th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Discussion of Faculty Panel Review out-come and comments.</p>
<p><strong>Lab:&nbsp;</strong> Continued refinement based on suggestions of the Faculty Panel.</p>
<p><strong>Homework:</strong>&nbsp; Finalization of all portfolio elements.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 12th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Final portfolio presentation of graduation candidates.</p>
<p><strong>Lab:</strong>&nbsp; Non-graduation candidates will continue design refinement of all portfolio elements.</p>
<p><strong>Homework:&nbsp;</strong> Non-graduation candidates will prepare for final portfolio presentations.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 19th, 2012</p></td><td width="75%"><p>Non-graduation candidates will make their final portfolio presentations.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('FS497_Holler_SU12_id48', $paramsPage);

?>