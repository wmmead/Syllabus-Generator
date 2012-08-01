<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD3371');
$docx->addTemplateVariable('COURSETITLE', 'Project Study');
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
$docx->addTemplateVariable('CLASSTIME', 'Mondays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD2264 Digital Message Making');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />Through observation and documenting their own work, students focus on projects of their own within an area of interest with the approval of the Academic Director. In this course, students will work with non-profit organizations.</p>
<p><strong>Course Focus:</strong><br />This course will focus on communication design projects that are related to the process of free-lance assignments.&nbsp; Day to day business realities will be studied and discussed.&nbsp; Selected business topics will be highlighted and documented.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Assess your own current skills and design tasks accordingly.</li>
<li>Work independently from proposal to final execution.</li>
<li>Develop an understanding of integrating their personal vision with the design problem.</li>
<li>Develop an understanding of time management and conceptual thinking.</li>
<li>Demonstrate the ability to self-direct, time manage, analyze and present your project goals and progress.</li>
<li>Confront and remedy design problems.</li>
<li>Identify, analyze, and prioritize problems.</li>
<li>Apply logical design valuation.</li>
<li>Use of the correct computer programs is required for all project applications.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Texts:</strong> None</p>';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab</p>
<p><strong>Materials and Supplies:</strong> Storage disk (Flash Drive), presentation supplies, quality color prints, layout pads, pens and markers.</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Computer lab; Adobe CS software; Quality print production.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Class Participation</td><td>10%</td></tr>
<tr><td>Assignment Concept Development</td><td>35%</td></tr>
<tr><td>Assignment Creative Development</td><td>35%</td></tr>
<tr><td>Exhibit Production Craftsmanship</td><td>20%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 9th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Introduction to the class, introduction of design methodology for process book; required elements.</p>
<p><strong>Lab: </strong>Project selection. Start page layout design of process book.</p>
<p><strong>Homework: </strong>Start research: work on creative brief.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 16th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Creative brief, target audience, competition/branding</p>
<p><strong>Lab: </strong>Work on introduction creative brief, competition/branding, and target audience pages for process book</p>
<p><strong>Homework: </strong>finalize</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 23rd, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Critique of previous pages. Logo design process:Company\'s logo and product\'s logo.</p>
<p><strong>Lab: </strong>Work on thumbnails and comps for both assignments.</p>
<p><strong>Homework: </strong>Finalize thumbnails and comps.</p>
<p><strong>&nbsp;</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 30th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Critique: company and product\'s logo comps.</p>
<p><strong>Lab: </strong>Refine logos</p>
<p><strong>Homework: </strong>Finalize logos</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 6th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Critique: Final logos. Front panel: add logos, violators, commercial icons, backgrounds, textures and materials. Branding design.</p>
<p><strong>Lab: </strong>Refine final logos. Work on violators and commercial icons if needed. Start working on background textures and materials for design. Add ideas into process book.</p>
<p><strong>Homework: </strong>Continue working on Lab assignment</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 13th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Critique Branding and front panel components.</p>
<p><strong>Lab: </strong>Refine front panel design and branding ideas.</p>
<p><strong>Homework: </strong>Work on branding.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 20th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Side panels and back panel. Mandatories. Die. Both products for the same line should be included.</p>
<p><strong>Lab: </strong>Work on side panels and back panel. Add main design and mandatories on&nbsp; die. Both products for the same line should be included. Review before class is over. Make final 3-d package.</p>
<p><strong>Homework: </strong>Make final 3-D package and bring to critique.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 27th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Critique of final 3-D package design. Revisions of process book; required elements.</p>
<p><strong>Lab: </strong>Work on process book, final corrections of 3-D package design and prepare for photo of package design.</p>
<p><strong>Homework: </strong>Work on final process book. Photograph Design.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 3rd, 2012</p></td><td width="75%"><p><strong>Class Will Not Be Held.</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 10th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Review of product/photography, photo retouching, work on final stages of process book, work on 2-D design presentation board.</p>
<p><strong>Lab: </strong>Photo retouching, revisions.</p>
<p><strong>Homework: </strong>work on final process book.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 17th, 2012</p></td><td width="75%"><p>Final Exam and Presentation.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD3371_Holler_SU12_id52', $paramsPage);

?>