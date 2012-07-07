<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD4403');
$docx->addTemplateVariable('COURSETITLE', 'Environmental Design');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Daniel Von Nydeggen');
$docx->addTemplateVariable('EMAIL', 'dvonnydeggen@edmc.edu');
$docx->addTemplateVariable('PHONE', '917-715-5584');
$docx->addTemplateVariable('AVAILABILITY', 'Mondays from 4:30 PM - 5:30 PM and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Mondays from 5:30 pm to 9:30 pm');
$docx->addTemplateVariable('PREREQS', 'GD3384 Advanced Design');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />Students will study a range of examples of exhibition/environmental design measured against conventions of 2-D display/informational systems.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Apply conventions of given environmental concerns and overall zone demands in design.</li>
<li>Display consideration of physical requirements in relation to space and audience and cost in designing.</li>
<li>Develop an understanding of 2-dimensional display vs. information systems.</li>
<li>Understand the physical characteristics of display typologies as they reveal the values in society that produces them.</li>
<li>Understand the presentation of \'art\' and \'artifacts\' in the contexts of commercial, educational and domestic spaces.</li>
<li>Develop an understanding of \'traffic\' flow in a given space or spaces.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Wayfinding: Designing and Implementing Graphic Navigational Systems by Berger, Craig, Wiley and Sons, ©2005 or 2009, ISBN: 13: 97828889305070</p>
<p><strong>Suggested Text:</strong> Signage and Wayfinding Design by Calori, Chris, Wiley and Sons, ©2007, ISBN: 978-0-471-74891-5</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture, lab (research, reading and discussion, critiques, group and individual in-class exercises)</p>
<p><strong>Materials and Supplies:</strong> An architect scale; 9x12 or 10x13 envelope; dura-tote portfolio; storage disk (flash drive or portable hard drive), presentation supplies, color prints, pens and markers, boards, x-acto knife plus blades, adhesive, foamcore, matte board, and miscellaneous materials for maquette.</p>
<p><strong>Estimated Homework Hours:</strong> 4-8 hours per week (depending upon your skills in time management and image making)</p>
<p><strong>Technology Required:</strong> Computer with graphic software and peripherals (color printer, scanner, camera, etc.). These can be found with access to the computer labs.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul<strong>Additional Course Requirements:</strong><br />>
<li><strong>Email Etiquette:</strong> The industry standard for sending files over email is to send very small files (2 MB or less) or to use an online service for sharing large files (e.g., yousendit.com; box.com; or sharefile.com)&mdash;you upload the file and email the download link to your email recipients. If you need to "send" a file to the instructor your file must be in PDF format and the total size must not exceed 2 MB. If your file is larger use a file sharing service and send the link OR upload file to myaicampus docsharing (set visibility to instructor only if you wish) let the instructor know where the file is along with the file name.</li>
</ul>
<ul>
<li><strong>Use of Images:</strong> In an effort to encourage students\' image-making skills, images of your own creation are encouraged over stock images. If you absolutely must use a stock image, you must credit the source (e.g., SOURCE: Corbis Images 2011). Under no circumstances are students allowed to use internet images from non-reputable sources.</li>
</ul>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation: in-class assignments, exercises and attendance</td><td>20%</td></tr>
<tr><td>Homework Assignments (process/progress)</td><td>30%</td></tr>
<tr><td>Project 1: Environmental Design Presentation</td><td>5%</td></tr>
<tr><td>Project 2: Wayfinding Signage System</td><td>15%</td></tr>
<tr><td>Project 3: Billboard Design/Vehicle Graphics Wraps</td><td>10%</td></tr>
<tr><td>Project 4: Interpretive and Placemaking Design</td><td>20%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 9th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Course overview;&nbsp;Environmental graphic design intro; Wayfinding &amp; sign system design: (a) Site Inventory (what exists); (b) Site Analysis (what works, what doesn\'t &amp; why); (c) Wayfinding Analysis (sign location and justification).<strong><br /> </strong><strong></strong></p>
<p><strong>Lab: </strong>EX: Wayfinding Analysis (Destination Zones, Wayfinding Tasks, Users, &amp; Decision Hierarchy) <br /> <strong></strong></p>
<p><strong>Homework: A1 due week 2 </strong>(See handout, download from myaicampus). <strong>READING&nbsp; pgs 10&ndash;27, 98&ndash;107</strong><strong></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 16th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Corporate Environments); &nbsp;Wayfinding: Navigational Plan | Sign Program Design: Hierarchy of Sign Types &amp; Branding</p>
<p><strong>Lab: </strong>EX: Nav. plan; &nbsp;Wayfinding and signage image database development; Architect\'s scale, elevations, plan view, isometric drawings; CRITS.<br /> <strong></strong></p>
<p><strong>Homework:</strong> <strong>A2 due week 3 </strong>(See handout, download from myaicampus). <strong>&nbsp;Read pgs 28&ndash;45, 56-67, 84&ndash;97</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 23rd, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Health-Care Facilities); Signage Design; Internal and external signage &amp; wayfinding systems; Introduce P3: billboards and vehicle wrap</p>
<p><strong>Lab: </strong>Presentations of compiled wayfinding and signage image database&nbsp; | CRITS + Work on signs</p>
<p><strong>Homework:</strong> <strong>A3 due week 4 </strong>(See handout, download from myaicampus). <strong>Read</strong><strong>&nbsp;pgs 46&ndash;55, 146&ndash;155</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 30th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Universities &amp; Campuses);&nbsp;ADA compliance, fabrication and implementation</p>
<p><strong>Lab:</strong>&nbsp; Test and crit signs to size | Refine signs | Specify materials and finishes<br /> <strong></strong></p>
<p><strong>Homework:</strong> <strong>Project 2 DUE&mdash;Final Wayfinding Signage System</strong> (See homework handout)<strong>. No reading</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 6th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>NO INDIVIDUAL PRESENTATIONS THIS WEEK; &nbsp;Billboard and Vehicle Wrap Design<strong></strong></p>
<p><strong>Lab: </strong><strong>Midterm Project 2 Due;</strong>&nbsp;Project 3: Billboard analysis field trip (in teams); Analysis presentations</p>
<p><strong>Homework: A5 due week 6 </strong>(See handout, download from myaicampus). <strong>Read pgs 108&ndash;117</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 13th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application<em> </em>(Museums &amp; Exhibits);&nbsp;Billboard &amp; Vehicle Wrap Design&mdash;Cost Estimating &amp; Proper File Prep&nbsp;<strong><br /> </strong><strong></strong></p>
<p><strong>Lab: </strong>CRIT P3; Refine Billboard &amp; Bus Wrap</p>
<p><strong>Homework:</strong> <strong>Project 3 DUE&mdash;Final Billboard &amp; Vehicle Wrap Design</strong> (See homework handout). <strong>Read pgs 132&ndash;145</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 20th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Heritage Areas &amp; Parks);&nbsp;P4 Exhibit design basics: schematics, development &amp; implementation; Design principles applied three-dimensionally<strong><br /> </strong><strong></strong></p>
<p><strong>Lab: </strong><strong>Project 3 Due;&nbsp;</strong>P4: Creative brief &amp; preliminary storyboard; (Object &amp; Graphic) Infographics research <strong><br /> </strong></p>
<p><strong>Homework:</strong> <strong>A7 &amp; A8 due week 8 </strong>(See handout, download from myaicampus). <strong>Read pgs 156&ndash;169 // pgs.120&ndash;131</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 27th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Retail &amp; trade show design); Placemaking &amp; Interpretive Design: Designing Experiences; Scale plans &amp; models; &nbsp;Spatial planning: spatial manipulation and traffic flow;&nbsp;P1 Individual<strong>&nbsp;</strong>presentations of identity evolution and 3-D design application (Civic &amp; Urban Systems)&nbsp;</p>
<p><strong>Lab: </strong>P4 CRITS; P4 Refinement&mdash;Revise plan based on principles of object staging; Define an intentional pace;&nbsp;Develop Plan View; 3-D model; Concept Statement;&nbsp;P4 CRITS: exhibit\'s object staging, spatial manipulation, traffic flow and interpretative elements;&nbsp;P4 Refinement&mdash;Materials, Cost &amp; Interpretative Signage</p>
<p><strong>Homework:&nbsp;</strong><strong>A9 due week 10&nbsp;</strong>(See handout, download from myaicampus).&nbsp;<strong>Read pgs 70&ndash;83</strong><strong></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 3rd, 2012</p></td><td width="75%"><p><strong>Holiday - no class.</strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 10th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Transportation) |</p>
<p><strong>Lab:</strong> P4 CRITS; Work on final presentation materials for P4</p>
<p><strong>Homework:</strong> <strong>Project 4 DUE&mdash;Final Exhibit due</strong> (See homework handout)&nbsp;<strong></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 17th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Final class review and discussion</p>
<p><strong>Lab: </strong><strong>Project 4 Due: </strong>Final Presentation of proposed exhibits. Document all work for portfolio.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD4403_Von Nydeggen_SU12_id47', $paramsPage);

?>