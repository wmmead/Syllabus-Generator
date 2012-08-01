<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'RS091');
$docx->addTemplateVariable('COURSETITLE', 'Portfolio Foundations');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Adriana Perez');
$docx->addTemplateVariable('EMAIL', 'aperez@aii.edu');
$docx->addTemplateVariable('PHONE', '530-574-3187');
$docx->addTemplateVariable('AVAILABILITY', 'Wednesday 3-4 pm (room 160) or by appointment or email. Email: aperez@aii.edu   Note, when emailing me, PLEASE put the following in the subject line “RS091” to ensure you receive a reply within 24 hrs. If contacting instructor by email, please note th');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '22 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '0 Hours');
$docx->addTemplateVariable('CREDITS', '0 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Wednesdays from 1:00 pm to 3:00 pm');
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
<p><strong>Required Text:</strong> AiCASAC Student Handbook by Art Institutes, n.a., �n.a., ISBN: n.a.</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <strong></strong><span style="font-size: 10pt; font-family: \'Arial Narrow\';">Lecture/Lab with<strong> </strong>a variety of learner-centered approaches used such as case study analyses, collaborative learning through discussion and application; discovery learning; use of graphic organizers; role play; scaffolding; problem based learning; etc.</span></p>
<ul<strong>Materials and Supplies:</strong> >
<li>A folder or binder to collect class materials;</li>
<li>Note-taking materials, including paper, pens, pencils;</li>
<li>Class notes and handouts</li>
</ul>
<p><strong>Estimated Homework Hours:</strong> 0 hrs</p>
<p><strong>Technology Required:</strong> Internet to access myaicampus.com</p>
<p><strong>Class Website:</strong> All handouts, resources, and grading for this class will be available 24/7 on the <em>myaicampus </em>website.</p>
<ol>
<li>To access myaicampus and other online resources for this class go to the Art Institute Student Portal at: <strong><em><a href="http://myaicampus.com/">http://myaicampus.com</a></em></strong>.</li>
<li>Login. If first-time user, you must set up your portal account. Follow the steps under the link "<strong><em>Quick Guide: Setting up your account</em></strong>" on the myaicampus.com page.</li>
<li>Once in the portal, locate your current classes, click the link "<strong>My Classes</strong>". This button will take you to your eCourses home page where you will see all courses your are enrolled in. To access a specific course, click on the course title.</li>
</ol>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation; In-Class Assignments & Activities</td><td>70%</td></tr>
<tr><td>Portfolio Show Attendance</td><td>15%</td></tr>
<tr><td>Team Project</td><td>15%</td></tr>
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
Pass // No Pass (S=Satisfactory, NS=Not Satisfactory).This class does not assign a grade however, you must complete at least 70% of the total work to satisfactorily pass the class. Students who earn 69% or less will not pass the class and must repeat it. Seventy percent of the final possible points are based on participation, completion of weekly assignments and activities, which can only be earned if you attend class.';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 11th, 2012</p></td><td width="75%"><p>Introduction: Course Expectations | What Is Your Learning Style? | Information Literacy: Learning How to Learn Expectations of Students in the Graphic Design Program (i.e., Using myaicampus &bull; Courses and skills learned &bull; Portfolio requirements and job outcomes)<strong><br />Homework:</strong> None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 18th, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Peer Mentoring | Communicating Effectively &amp; Interpersonal Communication | P1: Graphic Design Team-Based Project Introduced<br /><strong>Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 25th, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Time Management | Identifying Your School Community | Student Services Guest Speaker (i.e., Points of contact on campus &bull; Organization and time management skills &bull; Survival guide &bull; Student Handbook and Course Catalog)<br /> <strong>Homework:</strong> None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 1st, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Registration &amp; Program Advising: Making the Most of It. | Advising Services Guest Speaker (Program matrix and degree audit &bull; How to register &bull; Online classes)<strong><br />Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 8th, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Reflection | The Library and how it can make you a successful student (Print/video/digital resources) | Librarian Guest Speaker <strong><br />Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 15th, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Reflection | Team Project Continued (Graphic Design Standards &amp; Critiques) | Graphic Design Studio Tour (tentative)<strong><br />Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 22nd, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Career Services and Your Professional Development | Career Services Guest Speaker (i.e., Expectations in the graphic design industry &bull; Ethics in the business world &bull; Internships, jobs and r&eacute;sum&eacute; basics)<br /> <strong>Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 29th, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | How to Present Graphic Design Projects | Observe GD Portfolio Review | P1: Graphic Design Team Project Mock Presentations <strong><br />Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 5th, 2012</p></td><td width="75%"><p>Weekly Learning Reflection | Career Critique of Portfolio Review | Understanding Financial Health | Financial Services Guest Speaker | Financial Services Guest Speaker (Building credit &bull; Budgeting: Managing daily, monthly, yearly expenses &bull; Understanding student loan finances and repayment plans &bull; How to make wise financial decisions)<br /> <strong>Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 12th, 2012</p></td><td width="75%"><p>P1: Graphic Design Group Project Final Presentations | Portfolio Requirements Review | <strong>Homework</strong>: None</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 19th, 2012</p></td><td width="75%"><p>NO CLASS but students must attend Portfolio Show on Thursday, Sept. 20 from 6 to 7 pm and post Journal Entry by Friday.</p>
<p>Portfolio Show Schedule (Please confirm schedule with Career Services)<br />&bull; 3:30 PM - 5:00 PM Employers &amp; Industry Leaders <br />&bull; 5:00 PM - 7:00 PM Family &amp; Friends <br /><strong>&bull; 6:00 PM - 7:00 PM Current Students &larr;</strong></p>
<p><strong><em>NOTE:</em></strong><em> The course outline is subject to change at the discretion of the instructor to accommodate instructional flow and/or student needs. It is the responsibility of the student to keep abreast of these changes. For exact details of homework assignments see assignments specified on the myaicampus site for this class. </em>Major assignments requiring homework time are included in this schedule to assist you in planning your overall workload. In-class activities and assignments may or may not be specified in this schedule, but will be part of the course activities and the assessments towards your final grade. <em></em></p>
<p><strong><br /></strong></p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('RS091_Perez_SU12_id29', $paramsPage);

?>