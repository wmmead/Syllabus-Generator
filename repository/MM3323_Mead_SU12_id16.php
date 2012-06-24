<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'MM3323');
$docx->addTemplateVariable('COURSETITLE', 'Advanced Web Based Programming');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'William Mead');
$docx->addTemplateVariable('EMAIL', 'wmead@aii.edu');
$docx->addTemplateVariable('PHONE', '530-219-8998');
$docx->addTemplateVariable('AVAILABILITY', 'On Fridays from 4 pm to 5 pm and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Fridays from 5:30 pm to 9:30 pm');
$docx->addTemplateVariable('PREREQS', 'MM2233 Intermediate Web-based Programming');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course is an exploration of scripting and programming languages used to develop advanced "server-side" Web applications. Students learn how to create programs capable of storing and retrieving data from servers supporting advanced interactivity.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Understand the differences between client-side, server-side, and server-parsed languages </li>
<li>Understand the basics of server, as opposed to workstation design and software</li>
<li>Understand common web server software (e.g., Apache, IIS) configuration the differences between client-side, server-side, and server-parsed languages </li>
<li>Understand how CGI (Common Gateway Interface) links web forms to back-end programs</li>
<li>Apply basic Perl to create a functional CGI script </li>
<li>Understand how server-parsed languages allow access to server variables and resources</li>
<li>Apply basic PHP to create a functional server-parsed program</li>
<li>Understand the basics of web-database links</li>
<li>Understand the use of CGI and PHP in e-commerce systems</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Recommended Text:</strong> Murach by Joel Murach, Mike Murach & Associates, ©2010, ISBN: 978-1890774561</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab</p>
<p><strong>Materials and Supplies:</strong> Digital storage device, notepad and pen</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Computer lab, Adobe Creative Suite, XAMPP or similar, Internet Access</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Assignments and Exercises</td><td>50%</td></tr>
<tr><td>Mid-Term Project</td><td>15%</td></tr>
<tr><td>Final Project</td><td>25%</td></tr>
<tr><td>Participation</td><td>10%</td></tr>
<tr><td><strong>Total</strong></td><td><strong>100%</strong></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('EVALUATION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>School Wide Grading Policies</strong></p>
<ul>
<li>Class time will be spent in a productive manner.</li>
<li>Grading will be done on a point system.</li>
<li>Points for individual activities will be announced.</li>
<li>All work must be received by the set deadlines.</li>
<li>Late work receives a grade of zero.</li>
<li>On-time projects may be redone with instructor approval.</li>
<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>
</ul> ';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 13th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Understanding server side scripting</p>
<p class="p1"><strong>Lab:</strong> Basic Language fundamentals, part 1, Include function</p>
<p class="p1"><strong>Homework: </strong>Dice game project</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 20th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Loops, Arrays and Conditionals</p>
<p class="p1"><strong>Lab:</strong> Basic language fundamentals, part 2</p>
<p class="p1"><strong>Homework: </strong>Dice game expanded</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 27th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Forms, User Input and Regular Expressions</p>
<p class="p1"><strong>Lab:</strong> Building forms and passing data to the server</p>
<p class="p1"><strong>Homework: </strong>Output user data assignment</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 3rd, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Introduction to Databases and Storing Information</p>
<p class="p1"><strong>Lab:</strong> Connecting to MySQL and adding records.</p>
<p class="p1"><strong>Homework: </strong>Build your member table.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 10th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> The power of CRUD and the importance of Security</p>
<p class="p1"><strong>Lab: </strong>Adding functionality to our member table</p>
<p class="p1"><strong>Homework:</strong> Implement CRUD in member table</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 17th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Session Variables, Authentication and Encryption</p>
<p class="p1"><strong>Lab:</strong> Further expanding the Member Database Application</p>
<p class="p1"><strong>Homework:</strong> Work on Member Database Project</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 24th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> PHP, images and the GD2 library</p>
<p class="p1"><strong>Lab:</strong> Upload images with PHP, resize and create thumbnails.</p>
<p class="p1"><strong>Homework:</strong> Work on Member Database Project.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 31st, 2012</p></td><td width="75%"><p>NO CLASS - Labor Day!</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 7th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Pagination and creating view options</p>
<p class="p1"><strong>Lab: </strong>Adding pagination to the member database</p>
<p class="p1"><strong>Homework: </strong>Work on Member Database Project.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 14th, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Using PHP to write to files</p>
<p class="p1"><strong>Lab:</strong> Create a log file for Member Database Project</p>
<p class="p1"><strong>Homework:</strong> Work on Member Database Project.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 21st, 2012</p></td><td width="75%"><p class="p1"><strong>Lecture:</strong> Final Project Presentations</p>
<p class="p1"><strong>Lab: </strong>Final project assessments</p>
<p class="p1"><strong>Homework:</strong> none</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('MM3323_Mead_SU12_id16', $paramsPage);

?>