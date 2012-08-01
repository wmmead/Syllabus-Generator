<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'RS091');
$docx->addTemplateVariable('COURSETITLE', 'Portfolio Foundations');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Janelle Wheelock');
$docx->addTemplateVariable('EMAIL', 'jwheelock@aii.edu');
$docx->addTemplateVariable('PHONE', '916-830-6330');
$docx->addTemplateVariable('AVAILABILITY', 'By appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '22 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '0 Hours');
$docx->addTemplateVariable('CREDITS', '0 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Thursdays from 10:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'None');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course provides students with an extended orientation to college life in general and to the school in particular. It also coaches students in study strategies, time management skills, interpersonal skill, self-awareness, and career strategies for success. Students become acquainted with college and community and work on establishing a visionary path for developing their professional portfolio. The course culminates with students attending the graduate portfolio show. </p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Read printed material and summarize, analyze and evaluate information.</li>
<li>Have an awareness of professional expectations with regards to planning, behavior, communication, and product presentation.</li>
<li>Know academic and Sacramento culture and apply knowledge to create successful interactions.</li>
<li>Locate school and community resources.</li>
<li>Examine our own motivations and learning styles and take appropriate action based on them.</li>
<li>Articulate the issues that result from living in a diverse world and take action that reflects a respect of differences among human beings.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Current AiCASAC Student Handbook by  Ai, Ai, © 2012, ISBN:  none</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and discussion</p>
<ul<strong>Materials and Supplies:</strong> >
<li>A folder or binder to collect class materials.</li>
<li>Note-taking materials, including paper, pens, pencils.</li>
<li>Class notes, handouts, and homework.</li>
</ul>
<p><strong>Estimated Homework Hours:</strong> 1</p>
<p><strong>Technology Required:</strong> Access to MyAiCampus, Microsoft Word</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br />Not having a computer at home is not an excuse for not completing assignments &ndash; computer labs on campus are readily available.</p>
<p>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER ATTENDANCE HAS BEEN TAKEN&nbsp;</p>
<p>Late work receives a grade of zero.</p>
<p><strong>It is your own responsibility to know what material is covered in class and what all the assignments are.&nbsp; <span style="text-decoration: underline;">Being absent is <em>not</em> an excuse for not knowing information covered in class or for missing an assignment</span>. Use your group members as your first resource!</strong></p>
<p><strong>Professional behavior is expected from all students while in class.</strong> Rude, inappropriate, sexually explicit or harassing language or actions will not be tolerated in this class. <strong>If you behave in an unprofessional manner you will be asked to leave the classroom immediately. </strong>You will then lose participation points for the day, as well as points for any projects that were due that day.</p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation</td><td>70%</td></tr>
<tr><td>Assignments</td><td>30%</td></tr>
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
</ul>
<p><strong>Additional Grading Policies:</strong></p>
<ul>
<li>Pass // No Pass (S=Satisfactory, NS=Not Satisfactory), as based on attendance, participation and engagement in the course and its weekly tasks and activities.</li>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 12th, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>Welcome and Introduction</strong></li>
<li><strong>Course outline and discussion of Syllabus</strong></li>
<li><strong>Discussion about transition and expectations in college</strong></li>
<li><strong>Differences between High School expectations and College expectations</strong></li>
<li><strong>Roadmap to success</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 19th, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>Career Service and Professional Development/NETWORKING</strong></li>
<li><strong>Expectations in your Career industry</strong></li>
<li><strong>Ethics in the business world</strong></li>
<li><strong>Working with superiors and co-workers</strong></li>
<li><strong>Attitude in the workplace</strong></li>
<li><strong>Resumes/cover letter/interview questions/portfolios/ internships</strong></li>
<li><strong>myaicampus</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 26th, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>What kind of learner are you?</strong></li>
<li><strong>Personality Test</strong></li>
<li><strong>Time management?</strong></li>
<li><strong>Stress Management</strong></li>
</ul>
<p><strong>&nbsp;</strong></p>
<ul>
<li><strong>Watching the credits</strong></li>
<li><strong>What\'s my major really?</strong></li>
<li><strong>Industry examples</strong></li>
<li><strong>How my Industry Works</strong></li>
<li><strong>Jobs and roles - Who does what/production process</strong></li>
<li><strong>Research companies you\'d want to work for &ndash; what do they do?</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 2nd, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>Registration</strong></li>
<li><strong>Program matrix and degree audit</strong></li>
<li><strong>Goal setting</strong></li>
<li><strong>myaicampus</strong></li>
<li><strong>How to register</strong></li>
<li><strong>Online classes</strong><strong>&nbsp;</strong></li>
<li><strong>Campus library </strong></li>
<li><strong>Plagiarism</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 9th, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>Student Handbook</strong></li>
<li><strong>Resources on campus</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 16th, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>Academic/Study Skills</strong></li>
<li><strong>Communication skills</strong></li>
<li><strong>Note Taking skills, reading skills study skills organization skills research skills, and writing skills</strong></li>
<li><strong>Instructors as resources</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 23rd, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>STUDENT WORK!</strong></li>
<li><strong>Critiquing</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 30th, 2012</p></td><td width="75%"><p>&nbsp;</p>
<ul>
<li><strong>&nbsp;&nbsp;Reviews </strong></li>
<li><strong>&nbsp;&nbsp;Navigating the Matrix &ndash; value of classes</strong></li>
<li><strong>&nbsp;&nbsp;Being physically healthy and minimizing stress in college</strong></li>
<li><strong>&nbsp;Organizational Skills</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 6th, 2012</p></td><td width="75%"><ul>
<li><strong>Understanding Financial Health</strong></li>
<li><strong>Building credit</strong></li>
<li><strong>Managing daily, monthly, yearly expenses</strong></li>
<li><strong>Understanding student loan finances &amp; repayment plans</strong></li>
<li><strong>How to make wise financial decisions</strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 13th, 2012</p></td><td width="75%"><ul>
<li><strong>MAA GAD Panel Discussion </strong></li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 20th, 2012</p></td><td width="75%"><ul>
<li><strong>Meet at portfolio show to visit the work of the graduating students&nbsp; - 6pm in the Warehouse</strong></li>
</ul></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('RS091_Wheelock_SU12_id20', $paramsPage);

?>