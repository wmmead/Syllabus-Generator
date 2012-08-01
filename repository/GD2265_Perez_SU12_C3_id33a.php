<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD2265');
$docx->addTemplateVariable('COURSETITLE', 'Project Concept');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Adriana Perez');
$docx->addTemplateVariable('EMAIL', 'aperez@aii.edu');
$docx->addTemplateVariable('PHONE', '530-574-3187');
$docx->addTemplateVariable('AVAILABILITY', 'Wednesday 3-4 pm (room 160), by appointment, by email at aperez@aii.edu NOTE: When emailing me, PLEASE put the following in the subject line to ensure you receive a reply within 24 hrs. Any email sent Friday past 6 pm or weekend may not recei');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Wednesdays from 5:30 pm to 9:30 pm');
$docx->addTemplateVariable('PREREQS', 'GD2264 Digital Message Making');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />Students explore various solutions based on common industry problems allowing them the opportunity to integrate their personal vision. Students meet with faculty to outline their time management and concept.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Demonstrate an understanding of personal vision as indicated through project work.</li>
<li>Fully explore the projects at the conceptual level.</li>
<li>Further refine skills in time and project management.</li>
<li>Exploration of communicating problems on individual proposals.</li>
<li>Develop and understanding of integrating their personal vision.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Recommended Text:</strong> Do Good Design: How Designers Can Change the World  by David B. Berman, Peachpit Press , ©(2003), ISBN: ISBN-10: 032157320X</p>
<p><strong>Recommended Text:</strong> Green Graphic Design by Brian Dougherty by Celery Design Collaborative ,  Allworth Press, ©(2008), ISBN: ISBN-10: 1581155115</p>
<p><strong>Recommended Text:</strong> Thinking Creatively  by Robin Landa  , North Light Books , ©(2002), ISBN:  ISBN-10: 1581803389</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <span style="font-size: 10pt; font-family: \'Arial Narrow\';">a variety of learner-centered approaches are used such as case study analyses, collaborative learning through discussion and application of reading in small group or as a class; discovery learning; use of graphic organizers; role play; scaffolding; problem based learning; individual or small group practice exercises; controlled practice exercises; lecture-discussion between instructor and students; informal assessment (self-critiques, peer critiques, group-to-group crits, surprise quizzes); demonstration-guided performance; etc</span></p>
<p><strong>Materials and Supplies:</strong> <span style="font-size: 10pt; font-family: \'Arial Narrow\';">Binder with 20-30 plastic sleeves, felt tip pens, presentation supplies, high quality printing, standard graphic design tools (i.e., glue stick, scissors, X-acto + blades, tracing paper, artist tape). </span></p>
<p><strong>Estimated Homework Hours:</strong> 4-8 Hours (this will depend on your skills in time management and image making)</p>
<p><strong>Technology Required:</strong> <span style="font-size: 10pt; font-family: \'Arial Narrow\';">Computer with standard graphic design software (Adobe Creative Suite) and peripherals (i.e., color printer, scanner, digital camera), high quality-color output, and Internet access (note: you have access to most of these via the campus computer labs and the CAGE). Additionally, you will need a portable hard drive or flash drive to store your work.</span></p>
<p><strong>Class Website:</strong> All handouts, resources, and grading for this class will be available 24/7 on the <em>myaicampus </em>website.</p>

<ol>
<li>To access myaicampus and other online resources for this class go to the Art Institute Student Portal at: <strong><em><a href="http://myaicampus.com/">http://myaicampus.com</a></em></strong>.</li>
<li>Login. If first-time user, you must set up your portal account. Follow the steps under the link "<strong><em>Quick Guide: Setting up your account</em></strong>" on the myaicampus.com page.</li>
<li><span style="font-size: 10pt; font-family: \'Arial Narrow\';">Once in the portal, locate your current classes, click the link "<strong>My Classes</strong>". This button will take you to your eCourses home page where you will see all courses your are enrolled in. To access a specific course, click on the course title</span><br /></li>
</ol>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation; In-Class Assignments & Exercises; Final Exam</td><td>17%</td></tr>
<tr><td>Homework Assignments (Process work)</td><td>16%</td></tr>
<tr><td>Project 1â€”Design Philosophy </td><td>6%</td></tr>
<tr><td>Magazine Cover (midterm)</td><td>6%</td></tr>
<tr><td>Project 2â€”Project Concept Phase 1</td><td>45%</td></tr>
<tr><td>Project 3â€”Project Concept Phase 2 </td><td>10%</td></tr>
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
<p><strong>Meaning of Grades</strong></p>
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top" width="23">
<p>A</p>
<p>A-</p>
</td>
<td valign="top" width="45">
<p>100-93%<br /> 92-90%</p>
</td>
<td width="378">
<p>The student has exceeded the expectations of all criteria. Exceptional accomplishment and outstanding performance&mdash;demonstrated by initiative, high competence and innovative results.</p>
</td>
</tr>
<tr>
<td valign="top" width="23">
<p class="HeaderFooter">B+</p>
<p>B&nbsp;&nbsp;</p>
<p>B-</p>
</td>
<td valign="top" width="45">
<p class="HeaderFooter">89-87%</p>
<p>86-83%</p>
<p>82-80%</p>
</td>
<td width="378">
<p>The student has met all objectives competently. Superior and above average performance&mdash;student pursues work with extra effort and success. Work is effective and at times surprising.</p>
</td>
</tr>
<tr>
<td valign="top" width="23">
<p>C+<strong></strong></p>
<p>C</p>
<p>C-</p>
</td>
<td valign="top" width="45">
<p>79-77%<strong></strong></p>
<p>76-73%</p>
<p>72-70%</p>
</td>
<td width="378">
<p>The student has met the requirements within their simplest definition. <br /> Average amount of work and adequate performance&mdash;average competence, all required work completed.</p>
</td>
</tr>
<tr>
<td valign="top" width="23">
<p>D+</p>
<p>D</p>
</td>
<td valign="top" width="45">
<p>69-67%</p>
<p>66-65%</p>
</td>
<td width="378">
<p>The student has not met all requirements but has adequately met some. <br /> Inferior effort and marginal outcome&mdash;less than required involvement to develop work.</p>
</td>
</tr>
<tr>
<td valign="top" width="23">
<p>F</p>
</td>
<td valign="top" width="45">
<p>64% or below</p>
</td>
<td width="378">
<p>The student has not fulfilled most requirements or has done them extremely poorly. <br /> Failure to meaningfully complete or submit required assignments.</p>
</td>
</tr>
</tbody>
</table>
<p>*NOTE: Please note that showing up to class and doing all assignments, without progress, does not constitute a passing grade.<strong> </strong>Grades are available 24/7 through the myaicampus gradebook on the class\' Website. <strong>It is the student\'s responsibility to know his/her grade status at all times.&nbsp; </strong></p>
<p><strong>Email Etiquette:</strong> The industry standard for sending files over email is to send very small files (2 MB or less) or to use an online service for sharing large files (e.g., yousendit.com; box.com; or sharefile.com)&mdash;you upload the file and email the download link to your email recipients. If you need to "send" a file to the instructor your file must be in PDF format and the total size must not exceed 2 MB. If your file is larger use a file sharing service and send the link OR upload file to myaicampus docsharing (set visibility to instructor only if you wish) let the instructor know where the file is along with the file name.<br />Grading will be done on a point system. Points for individual activities will be announced.<br /><strong>Use of Images:</strong> In addition to the plagiarism and cheating policies below, and given that this class is partially meant to help you develop your image-making skills, use of stock images is NOT allowed on final projects. All images must be of your own creation. Any student caught using images not created by student on any final project will automatically fail the course.<br /><strong>Late Work:</strong> <strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with instructor <em>prior</em> to the due date. Regardless of circumstances, penalties will be assessed unless student shows valid paperwork justifying absence.<br /><strong>Weekly Homework Assignments: </strong>As indicated above, late homework is NOT accepted and will be given zero points. If during class the student is working on any portion of the homework that is due that day, homework will not be accepted thus losing all possible points. Additionally, student will also lose all participation points. (1) Unless otherwise indicated DIGITAL HOMEWORK must be turned in to the corresponding week\'s dropbox through myaicampus and is due at the beginning of class on the due date. No digital homework will be accepted over email. Any digital work submitted to an incorrect dropbox, not properly uploaded, or having file corruption will NOT earn any points. After uploading homework, I suggest you test it by downloading and opening all files to make sure they work correctly. Improperly labeled files will lose most points; (2) unless otherwise indicated, HARDCOPY HOMEWORK must be turned in an envelope (9x12 or 10x13) with student\'s name and class number on the upper right-hand corner, and is due at the end of class.<br /><strong>Final Project Critiques:</strong> If you arrive late to a final project critique within the first 30 minutes of class, your project will lose <strong>half a letter grade</strong>. If you arrive any time after the first 30 minutes, your project will lose <strong>one letter grade</strong>. No final projects will be accepted after the end of the class in which they are due. Out of respect to your fellow design classmates, if you arrive past the first 10 minutes of class you forfeit the right to have your project critiqued by your peers. Unless otherwise indicated, final printed work must be turned in a portfolio tote with your name on the flap (if you can\'t afford one talk to instructor).<br /><strong>Resubmitting final projects for re-grading&mdash;</strong>On-time projects may be redone to improve grade. Obtain instructor approval.<br />Absolutely no work will be accepted after the final class meets week 11.<br /><strong>In-class Assignments </strong>Unless you have made prior arrangements with the instructor you cannot make-up missed in-class work. Even though you can\'t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.<br /><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by "Class time will be spent in a productive manner." Points given for participation or in-class work will NOT be available to students who are not present. NOTE: you will lose all participation points for that day if you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment). <strong></strong><br /><strong>Storing class work: </strong>Students are to take proper measures to protect their work (digital or analog) when storing and transporting it.&nbsp; ANALOG WORK: Put class supplies, work in progress, and finished projects in secure places. DIGITAL WORK: When dealing with digital files, save early and save often. Use reliable storage media to transport and backup your files. Backup files daily (at home/in the lab). The on-campus Student Server is not a secure storage place. Nor are the lab computers, which self-erase on re-start.<strong> </strong>Stolen, damaged, or lost work (including that due to corrupt files or defective hard drives) will NOT be excused. For work requested electronically, please test all files on a Mac before handing them in. Platform incompatibility issues will not be excused either.<strong></strong></p>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 11th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong>&nbsp;Course Overview &amp; Projects | Design Philosophy | Problem Definition Lab: P1 Design Philosophy Draft | Image-Making Intro: Design Philosophy + Thumbnail Sketches + Rhetorical Figures <strong>Homework:</strong> Homework A1 Due Week 2 (See homework handout downloadable from the myaicampus portal)</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 18th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Personal Vision, Design Voice, Authorship &amp; Design Philosophy | Concept Statements | <strong>Lab:</strong> P1 Image-Making: Design Philosophy + Rhetorical Figures | P3 Project Brief <strong>Homework:</strong> Homework A2 Due Week 3 (See homework handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 25th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Research | Attribute Mapping | Project Planning &amp; Time Management <strong>Lab:</strong> P1: Design Philosophy DUE&mdash;Final Presentations | P3 Develop attribute map, timeline, and research plan <strong>Homework:</strong> Homework A3 Due Week 4 (See homework handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 1st, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Concept &amp; Format | Project Argumentation &amp; Claim of Project Lab: P3 CRIT and refine Project Brief, Research &amp; Writing (develop body copy) | Develop preliminary concepts | Research potential formats | | Homework: Homework A4 Due Week 5 (See handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 8th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Visual Vocabulary (in relationship to concept statement) <strong>Lab:</strong> MIDTERM Design Magazine Cover MIDTERM | P3 Develop visual vocabulary <strong>Homework:</strong> Homework A6 Due Week 7 (See homework handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 15th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Visual Rhetoric and Argumentation <strong>Lab: </strong>P3 Visual Rhetorical Figures | Define project\'s visual argument and necessary rhetorical figures.<strong> Homework:</strong> Homework A7 Due Week 8 (See homework handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 22nd, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Layout &amp; Image Making Strategies | Publication Design and Relationship to Vision, Voice &amp; Authorship <strong>Lab:</strong> P3 Finalize publication format | Finalize the publication\'s visual argument and necessary rhetorical figures. <strong>Homework:</strong> Homework A8 Due Week 9 (See homework handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 29th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Image Making Strategies <strong>Lab:</strong> P3 CRITS | Continue working on Content Development and Implementation (graphics and layout) <strong>Homework:</strong> Homework A9 Due Week 10 (See homework handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 5th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Image Making Strategies | Self-Editing and Critiquing Strategies <strong>Lab:</strong> P3 CRITS | Continue working on Content Development and Implementation (graphics and layout) <strong>Homework:</strong> P3 Task B Due (See handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 12th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> The Process Book | Project Presentations How-to <strong>Lab:</strong> P3 Publication DUE | Prepare files for print | Work on Presentation <strong>Homework:</strong> P3 Task C Due (See handout downloadable from the myaicampus portal).</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 19th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Class Review | Individual Self-Reflection <strong>Lab:</strong> P3 Final Presentations | Process Documentation Due</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD2265_Perez_SU12_id33', $paramsPage);

?>