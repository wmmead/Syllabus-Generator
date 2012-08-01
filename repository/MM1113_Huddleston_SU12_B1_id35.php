<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'MM1113');
$docx->addTemplateVariable('COURSETITLE', 'Intro To Programming Logic');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Rob Huddleston');
$docx->addTemplateVariable('EMAIL', 'rhuddleston@aii.edu');
$docx->addTemplateVariable('PHONE', '916-743-3020');
$docx->addTemplateVariable('AVAILABILITY', 'Mondays 12-1, Tuesdays 12-1 and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Tuesdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'None ');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />Students develop and refine basic programming skills. Emphasis is placed on programming concepts including logic, problem solving, process flow and flowcharting, syntax and structures, and debugging and troubleshooting. Students acquire skills needed to design, develop, and produce practical interactive applications.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Understand the relationship of information architecture to user-centered interface design.</li>
<li>Research topics and organize ideas into comprehensive information structures.</li>
<li>Identify the components of a knowledge base including interfaces, classes, properties, facets, implementations and instances.</li>
<li>Present information structures in industry-standard visual formats (flowcharts, Unified Modeling Language 2).</li>
<li>Work effectively as a team member.</li>
<li><strong>Operate a personal computer using current operating system interfaces</strong>
<ul>
<li>Use correct terms and definitions to describe the operations and applications of computers</li>
<li>Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed</li>
<li>Match appropriate connection devices with external equipment</li>
<li>Compare and contrast operation systems</li>
<li>Describe and apply the major steps in the "imaging chain"</li>
<li>Produce documents using word-processing, spreadsheet, and database tools</li>
<li>Transfer data across platforms</li>
<li>Correlate keyboard functions with menu operations</li>
<li>Define characteristics of peripheral communications standards</li>
<li>Demonstrate cross-platform applications</li>
<li>Apply database and spreadsheet skills</li>
<li>Protect data and equipment through the use of virus utilities</li>
<li>Perform basic disk maintenance and data retrieval operations</li>
</ul>
</li>
<li><strong>Use and manage computer hardware peripherals for input, output, and storage</strong>
<ul>
<li>Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets</li>
<li>Employ appropriate input-output devices</li>
</ul>
</li>
<li><strong>Use an Internet browser</strong>
<ul>
<li>Identify the operational characteristics of the Internet and intranets as these compare to standalone systems</li>
<li>Create and organize directories, folders, and documents using file management techniques</li>
</ul>
</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Recommended Text:</strong> Just Enough Programming Logic and Design by Joyce Farrell, Course Technology, ©2010, ISBN: 978-1-4390-3957-1</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and lab</p>
<p><strong>Materials and Supplies:</strong> None</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> PC or Mac with code editing tool</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Attendance and participation</td><td>10%</td></tr>
<tr><td>Assignments and Exercises</td><td>50%</td></tr>
<tr><td>Mid-term Project</td><td>15%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 10th, 2012</p></td><td width="75%"><p><strong></strong>Lecture: Overview of course. Introduction to Object and Scripting Languages. Introduction to flowcharting and writing pseudocode.</p>
<p>Lab: Create a flowchart of the interaction required for a basic game. Write pseudocode for a portion of the game.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Complete work on flowchart and pseudocode started in class.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 17th, 2012</p></td><td width="75%"><p>Lecture: Program Structures</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Flowchart more complex programs using proper logical structures</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish flowcharts</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 24th, 2012</p></td><td width="75%"><p>Lecture: Making Decisions</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Create the flowchart for a more complex game and a web login interface.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finalize flowcharts.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 31st, 2012</p></td><td width="75%"><p>Lecture: Looping</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Integrate loops into a program\'s structure</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:&nbsp; Complete class work.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 7th, 2012</p></td><td width="75%"><p>Lecture: Arrays</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Demonstrate understanding of arrays and complex data structures.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Complete any outstanding class work.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 14th, 2012</p></td><td width="75%"><p>Lecture: Functions</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Rewrite any earlier example using functions.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish code rewrite.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 21st, 2012</p></td><td width="75%"><p>Lecture: Object Oriented Programming.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Flowchart an application using OOP concepts.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish flowcharts</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 28th, 2012</p></td><td width="75%"><p>Lecture: Putting it together: JavaScript introduction</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Integrate JS with HTML and CSS.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish introductory JavaScript assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 4th, 2012</p></td><td width="75%"><p>Lecture: More JavaScript.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Expand on last week\'s project.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish expanded JavaScript project.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 11th, 2012</p></td><td width="75%"><p>Lecture: More JavaScript</p>
<p>Lab: Begin work on final project</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 18th, 2012</p></td><td width="75%"><p>Lab: Present final projects</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('MM1113_Huddleston_SU12_id35', $paramsPage);

?>