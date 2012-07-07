<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD4411');
$docx->addTemplateVariable('COURSETITLE', 'Design Team 2');
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
$docx->addTemplateVariable('CLASSTIME', 'Fridays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD4401 Design Team 1');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course will build upon the concepts and issues explored in Design Team 1.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Participate as a member or leader of a team.</li>
<li>Assess skills of team members and assign tasks accordingly.</li>
<li>Set goals for team.</li>
<li>Describe the dynamics of an effective team.</li>
<li>Construct team based on knowledge of skill sets.</li>
<li>Develop client relations and the fundamentals of design as a business - NON PROFIT.</li>
<li>Develop practical skills in design, scheduling, budgeting, art direction, print production, and project documentation.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Texts:</strong> None</p>';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <span style="font-size: 11pt; font-family: Garamond; color: black;">Lab, Lecture, Applied Projects</span></p>
<p><strong>Materials and Supplies:</strong> Storage Disk, presentation supplies, color prints, sketchbook, pens and markers<em></em></p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> <span style="font-size: 11pt; font-family: Garamond;">Access to you eCompanion class, which can be done on campus. Access to Internet, Adobe Creative Suite</span></p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br />As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance. (When sending email, please put "GD4411" in the subject line to ensure I see and reply promptly to your email.)<em> Additionally, please hold this same level of accountability with your Account Supervisor or team leader.</em> <strong>The main focus of this course is cultivating your skills as a member of a creative team, therefore your participation, accountability and commitment to your team is essential to the integrity of your learning experience.</strong></p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation/Teamwork</td><td>50%</td></tr>
<tr><td>Assignments and Exercises</td><td>25%</td></tr>
<tr><td>Final Presentation</td><td>25%</td></tr>
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
<p><em><strong>If you fail to continuously participate as a functional member of your design team, you will not pass the course.</strong></em><br /><br /></p>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 13th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>The graphic teams discussed. Assignments discussed and considered. Proposal Writing</p>
<p><strong>Lab: </strong>Teams begin working together to determine each other\'s strengths for a given project and their role in the graphic group. <strong></strong></p>
<p><strong>Homework: </strong>Design Team Position Essay<strong></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 20th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>The assignments are given. Discussion of research, target market, initial planning in regards to budget restrictions.<strong></strong></p>
<p><strong>Lab: </strong>Teams develop research and analysis. Formulate ideas for budget distribution.<strong></strong></p>
<p><strong>Homework:</strong> Storyboarding</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 27th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Teams present first analysis/Storyboard<strong></strong></p>
<p><strong>Lab: </strong>Teams return to working on Phase 2.<strong></strong></p>
<p><strong>Homework:</strong> Continue developing assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 3rd, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Timelines for deliverables.<strong></strong></p>
<p><strong>Lab: </strong>Studio time for mid-term projects.<strong></strong></p>
<p><strong>Homework:</strong> Complete assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 10th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Mid term research projects presented to class. 1st set of comps for client. CEO evaluation.<strong></strong></p>
<p><strong>Lab: </strong>Team begins Phase 3, revision and next set of more finalized comps.<strong></strong></p>
<p><strong>Homework: </strong>None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 17th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Phase 3 Discussion<strong></strong></p>
<p><strong>Lab: </strong>Project continues.<strong></strong></p>
<p><strong>Homework: </strong>Continue developing assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 24th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Review student progress. 2<sup>nd</sup> set of comps for client. CEO evaluation.<strong></strong></p>
<p><strong>Lab: </strong>Continue project. <strong></strong></p>
<p><strong>Homework:</strong> Continue developing assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 31st, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>All class review of each person\'s progress complete project. <strong></strong></p>
<p><strong>Lab: </strong>Continue work on final project.<strong></strong></p>
<p><strong>Homework:</strong> Continue developing assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 7th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Final questions and answers review.<strong></strong></p>
<p><strong>Lab: </strong>Work on final projects.<strong></strong></p>
<p><strong>Homework:</strong> Complete assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 14th, 2012</p></td><td width="75%"><p><strong><br /></strong><strong>Lab: </strong>Work on final projects.</p>
<p><strong>Homework:</strong> Complete assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 21st, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Final presentation with critique.<strong></strong></p>
<p><strong>Lab: </strong>Document all work for portfolio.<strong></strong></p>
<p><strong>Homework: </strong>None</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD4411_Agundes_SU12_id43', $paramsPage);

?>