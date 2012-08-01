<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD2252');
$docx->addTemplateVariable('COURSETITLE', 'Corporate Communications');
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
$docx->addTemplateVariable('CLASSTIME', 'Thursdays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD2242 Illustrative Concept Design');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This advanced design course will deal primarily with the development of internal corporate imaging. Building on the theories of design, the course will further examine logo design and internal application of the corporate image.</p>
<p><strong>Course Focus:</strong><br />Based on the understanding of the client requirements the student will be challenged to produce a series of corporate specific design solutions.&nbsp; There will be a series of assignments to encourage the student to experience a broad range of corporate communication opportunities.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Identify communication needs of client and audience.</li>
<li>Display consideration of physical requirements in relation to space and audience and cost in designing.</li>
<li>Develop a psychology of proper cognitive responses to images.</li>
<li>Develop an understanding of Semiotics.</li>
<li>Examine standardization of mark/logo application in various settings (2D, 3D, Virtual, Web, etc.).</li>
<li>Render design mark on multiple applications representative of a company/product need.</li>
<li>Relate history and psychology of corporate identity to given projects.</li>
<li>Historical overview of Corporate/Brand Identity from Hieroglyphics through Iconography. Family crests through early 20th century Branding.</li>
<li>Discuss co-branding issues and examples.</li>
<li>Discuss co-branding issues and examples.</li>
<li>Review branding terminology.</li>
<li>Develop a basic understanding of importance of product placement, branded environments, scripted spaces, globalization issues, subversive branding, co-branding, and adaptive branding.</li>
</ul>


<p><strong>Additional Competencies:</strong></p>
<ul>
<li>Develop the ability to research and document critical client information that will aid in the successful execution of graphic design solutions.</li>
</ul> ';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Texts:</strong> None</p>';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab</p>
<p><strong>Materials and Supplies:</strong> Graphic design materials including layout pad, drawing materials and comprehensive fabrication supplies.&nbsp; Materials as requested by instructor.</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Computer lab; Adobe CS software; Ability to aquire excellent quality prints.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Class Participation</td><td>10%</td></tr>
<tr><td>Assignment Concept Development</td><td>30%</td></tr>
<tr><td>Assignment Creative Development</td><td>30%</td></tr>
<tr><td>Assignment Craftsmanship</td><td>30%</td></tr>
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
<p>Each assignment will be evaluated and graded on a weekly basis.&nbsp; The final quarterly grade will be based on the average of the total assignment grades, plus additional evaluation points.</p>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 12th, 2012</p></td><td width="75%"><p><strong>Lecture:&nbsp;</strong> Introduce the concept of Corporate Communications and the career possibilities in related fields; Discuss the organizational structure of a corporate design center and the role of the graphic designer as a member of the communications team.</p>
<p><strong>Lab:</strong>&nbsp; Assignment research and documentation phase.</p>
<p><strong>Homework:&nbsp;</strong> Complete assignment.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 19th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; The role of brand design in an integrated corporate communications program;&nbsp; display of "best in category" exhibits.</p>
<p><strong>Lab:&nbsp;</strong> Assignment #1 development:&nbsp; Corporate Press Folder</p>
<p><strong>Homework:</strong> Completion of assignment #1.</p>
<p>&nbsp;</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 26th, 2012</p></td><td width="75%"><p><strong>Lecture:&nbsp;</strong> Discussion of the history of corporate communications:&nbsp; best practices examples displayed and discussed.</p>
<p><strong>Lab:&nbsp;</strong> Assignment #1 critique;&nbsp; Introduction of assignment #2: Employee Communication</p>
<p><strong>Homework:</strong>&nbsp; Completion of assignment #2</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 2nd, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Discussion of the qualities and abilities required to be successful as a corporate graphic designer.</p>
<p><strong>Lab:</strong>&nbsp; Assignment #2 critique;&nbsp; Introduction of assignment #3:&nbsp; Product Marketing Literature, Phase 1.</p>
<p><strong>Homework:</strong> Completion of assignment #3, phase 1.&nbsp;</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 9th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Discussion of corporate product marketing and the designer\'s role.</p>
<p><strong>Lab:</strong>&nbsp; Assignment #3, phase 1 critique;&nbsp; Introduction of assignment #3, phase 2.</p>
<p><strong>Homework:&nbsp;</strong> Completion of assignment #3, phase 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 16th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Class critique and review of Assignment #3, phases 1 &amp; 2;&nbsp; Introduction of the "Trade Show" environment and fabrication methods.</p>
<p><strong>Lab:&nbsp;</strong> Assignment #4:&nbsp; Corporate Trade Show, phase 1 development.</p>
<p><strong>Homework:</strong> Completion of Assignment #4, phase 1.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 23rd, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Discussion of corporate trade show best practices.</p>
<p><strong>Lab:</strong>&nbsp; Assignment #4, phase 2 development.</p>
<p><strong>Homework:&nbsp;</strong> Completion of Assignment #4, phase 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 30th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Final discussion and critique of Assignment #4, phases 1 &amp; 2.</p>
<p><strong>Lab:</strong>&nbsp; Assignment #5:&nbsp; Corporate Event Marketing.</p>
<p><strong>Homework:&nbsp;</strong> Completion of Assignment #5.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 6th, 2012</p></td><td width="75%"><p><strong>Lecture:&nbsp;</strong> Final discussion and critique of Assignment #5.</p>
<p><strong>Lab:&nbsp;</strong> Assignment #6:&nbsp; Corporate Annual Report Cover</p>
<p><strong>Homework:&nbsp;</strong> Completion of Assignment #6.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 13th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp; Content Review for Final Exam;&nbsp; Outline for final design presentation.</p>
<p><strong>Lab:&nbsp;</strong> Final discussion and critique of assignment #6.</p>
<p><strong>Homework:</strong>&nbsp; Study for final exam and prepare the final design presentation.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 20th, 2012</p></td><td width="75%"><p>Final exam and design presentation.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD2252_Holler_SU12_id50', $paramsPage);

?>