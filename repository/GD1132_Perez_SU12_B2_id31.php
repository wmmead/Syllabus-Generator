<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD1132');
$docx->addTemplateVariable('COURSETITLE', 'Grid Systems');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Adriana Perez');
$docx->addTemplateVariable('EMAIL', 'aperez@aii.edu');
$docx->addTemplateVariable('PHONE', '530-574-3187');
$docx->addTemplateVariable('AVAILABILITY', 'Wednesdays 3-4 pm (room 160) or by appointment. NOTE: When emailing me, PLEASE put the following in the subject line â€œGD1132â€ to ensure you receive a reply within 24 hrs. Any email sent Friday past 6 pm, Sat. or Sun. may not receive a reply till Monda');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Tuesdays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD1123 Electronic Layout');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course will enable the student to better design with type and visuals, and utilize technology in problem solving. Emphasis will be on the process of design development from roughs to comprehensives, layout, and the use of a grid system for multi-component layouts.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Apply principles of composition and layout.</li>
<li>Demonstrate the use of compositional devices such as line, dot, rhythm, values, and contrast.</li>
<li>Distinguish and apply the principles of grid systems.</li>
<li>Develop skills and understanding of integration of typography and visuals as well as appropriateness of design intended audience.</li>
<li>Develop ability to use reference and find research material.</li>
<li>Develop a working knowledge of layout elements including hierarchy, grid systems, typography, and conceptualization.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Layout Workbook: A Real-World Guide to Building Pages in Graphic Design  by Kristen Cullen. , Rockport, ©2007 (on reserve at the library for 2 hrs), ISBN: ISBN-10: 1592533523 </p>
<p><strong>Recommended Text:</strong> Grid Systems: Principles of Organizing Type  by Kimberly Elam , Princeton Architectural Press, ©2004 (on reserve at the library for 2 hrs), ISBN: ISBN-10: 1568984650</p>
<p><strong>Recommended Text:</strong> Typographic Systems of Design  by Kimberly Elam, Princeton Architectural Press, ©2007 (on reserve at the library for 2 hrs), ISBN: ISBN-10: 1568986874</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul<strong>Method of Instruction:</strong> >
<li>Instructor-led method with demonstrations</li>
<li>Collaborative discussion and application of reading</li>
<li>In-class individual and group exercises; projects and homework assignments</li>
<li>Formal and informal assessment (self-critiques, peer critiques, group-to group critiques, surprise quizzes &amp; exams)</li>
</ul>
<p><strong>Materials and Supplies:</strong> 8"x50yds white tracing paper roll</p>
<p>Artist tape (one white, one black)</p>
<p>Triangle or T-square&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>Kneaded Eraser and White eraser</p>
<p>#11 X-acto + blades&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>Metal Ruler</p>
<p>Portable drive to archive work</p>
<p>Felt tip pens&mdash;ultra fine point, micro point, chisel tip (Sharpies ok)</p>
<p>&sect; Ruler-Inches and Pica Scale 18" <br /> (C-Thru or Schaedler Precision Rule)</p>
<p>&sect; Several magazines (to be assigned)</p>
<p>Letramax Black Mounting Board:</p>
<p><em>(3) 15"x20" boards </em></p>
<p><em>(1) 18"x24" board&nbsp; </em></p>
<p>Portfolio tote to accommodate an 18"X24" board minimum</p>
<p><strong>Estimated Homework Hours:</strong> 4-8 Hours (this will depend on your skills in reading comprehension, InDesign, time management, scanning and general computer use).</p>
<p><strong>Technology Required:</strong> Computer with standard graphic design software (Adobe Creative Suite) and peripherals (i.e., color printer, scanner, digital camera), high quality-color output, and Internet access (note: you have access to most of these via the campus computer labs and the CAGE). Additionally, you will need a portable hard drive or flash drive to store your work.</p>
<p><strong>Class Website:</strong> All handouts, resources, and grading for this class will be available 24/7 on the <em>myaicampus </em>website.</p>
<ol>
<li>To access myaicampus and other online resources for this class go to the Art Institute Student Portal at: <strong><em><a href="http://myaicampus.com/">http://myaicampus.com</a></em></strong>.</li>
<li>Login. If first-time user, you must set up your portal account. Follow the steps under the link "<strong><em>Quick Guide: Setting up your account</em></strong>" on the myaicampus.com page.</li>
<li>Once in the portal, locate your current classes, click the link "<strong>My Classes</strong>". This button will take you to your eCourses home page where you will see all courses your are enrolled in. To access a specific course, click on the course title.</li>
</ol>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Homework Assignments </td><td>30%</td></tr>
<tr><td>Participation (Reading Responses, In-class Assignments, Quizzes/Exams)</td><td>15%</td></tr>
<tr><td>Midterm Exam</td><td>3%</td></tr>
<tr><td>Project 1â€”Poster (Midterm Project)</td><td>15%</td></tr>
<tr><td>Project 2â€”Magazine</td><td>15%</td></tr>
<tr><td>Project 3â€”Brochure or Catalogue (Final Project)</td><td>10%</td></tr>
<tr><td>Process Book (Final Project)</td><td>8%</td></tr>
<tr><td>Final Exam / Self-Reflection</td><td>4%</td></tr>
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
<p>&nbsp;</p>
<p><strong>Email Etiquette:</strong> The industry standard for sending files over email is to send very small files (2 MB or less) or to use an online service for sharing large files (e.g., yousendit.com; box.com; or sharefile.com)&mdash;you upload the file and email the download link to your email recipients. If you need to "send" a file to the instructor your file must be in PDF format and the total size must not exceed 2 MB. If your file is larger use a file sharing service and send the link OR upload file to myaicampus docsharing (set visibility to instructor only if you wish) let the instructor know where the file is along with the file name.<strong></strong></p>
<p><strong>Use of Images:</strong> In an effort to encourage students\' image-making skills, images of your own creation are encouraged over stock images. If you absolutely must use a stock image, you must credit the source (e.g., SOURCE: Corbis Images 2011). Under no circumstances are students allowed to use internet images from non-reputable sources.<strong></strong></p>
<p><strong>Late Work:</strong> <strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with instructor <em>prior</em> to the due date. Regardless of circumstances, penalties will be assessed unless student shows valid paperwork justifying absence.<strong></strong></p>
<p><strong>Weekly Homework Assignments: </strong>As indicated above, late homework is NOT accepted and will be given zero points. If during class the student is working on any portion of the homework that is due that day, homework will not be accepted thus losing all possible points. Additionally, student will also lose all participation points. (1) Unless otherwise indicated DIGITAL HOMEWORK must be turned in to the corresponding week\'s dropbox through myaicampus and is due at the beginning of class on the due date. No digital homework will be accepted over email. Any digital work submitted to an incorrect dropbox, not properly uploaded, or having file corruption will NOT earn any points. After uploading homework, I suggest you test it by downloading and opening all files to make sure they work correctly. Improperly labeled files will lose most points; (2) unless otherwise indicated, HARDCOPY HOMEWORK must be turned in an envelope (9x12 or 10x13) with student\'s name and class number on the upper right-hand corner, and is due at the end of class.<strong></strong></p>
<p><strong>Final Project Critiques:</strong> If you arrive late to a final project critique within the first 30 minutes of class, your project will lose <strong>half a letter grade</strong>. If you arrive any time after the first 30 minutes, your project will lose <strong>one letter grade</strong>. No final projects will be accepted after the end of the class in which they are due. Out of respect to your fellow design classmates, if you arrive past the first 10 minutes of class you forfeit the right to have your project critiqued by your peers. Unless otherwise indicated, final printed work must be turned in a portfolio tote with your name on the flap (if you can\'t afford one talk to instructor).<strong></strong></p>
<p><strong>Resubmitting final projects for re-grading&mdash;</strong>On-time projects may be redone to improve grade. Obtain instructor approval.</p>
<p>Absolutely no work will be accepted after the final class meets week 11.<strong></strong></p>
<p><strong>In-class Assignments </strong>Unless you have made prior arrangements with the instructor you cannot make-up missed in-class work. Even though you can\'t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.<strong></strong></p>
<p><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by "Class time will be spent in a productive manner." Points given for participation or in-class work will NOT be available to students who are not present. NOTE: you will lose all participation points for that day if you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment). <strong></strong></p>
<p><strong>Storing class work: </strong>Students are to take proper measures to protect their work (digital or analog) when storing and transporting it.&nbsp; ANALOG WORK: Put class supplies, work in progress, and finished projects in secure places. DIGITAL WORK: When dealing with digital files, save early and save often. Use reliable storage media to transport and backup your files. Backup all files daily (at home or in the lab). The on-campus Student Server is not a secure storage place. Nor are the lab computers, which self-erase on re-start.<strong> </strong>Stolen, damaged, or lost work (including that due to corrupt files or defective hard drives) will NOT be excused. For work requested electronically, please test all files on a Mac before handing them in. Platform incompatibility issues will not be excused either.</p>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 10th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Course Intro | Grid Basics: Anatomy and Modular Grid | Compositional Principles: Grouping, Negative Space, Law of Thirds, and Alignment Relationships | Assign P1: Poster Design | Assign P4: Process Book<br /> <strong>Lab: </strong>P1 Poster&mdash;PRELIMINARY STUDIES PHASE | Exercise: Grid<br /> <strong>Homework: </strong>A1 Due Week 2&mdash;See handout </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"> + Read pgs.8-15, 24-41, 94-97 </span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 17th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">P1 Critique | The Design Process | Concept Development | Hierarchy and Focal Point | Type Variables: spacing, alignment, weight, size, style, orientation, gray value |<br /> <strong>Lab: </strong>P1 Poster&mdash;PRELIMINARY STUDIES PHASE (continued) | Exercise: Hierarchy<br /> <strong>Homework: </strong>A2 Due Week 3&mdash;See handout </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"><span>&nbsp; </span>+ <span>&nbsp;</span><span style="letter-spacing: -0.1pt;">Read pgs.52-61, 72-87, 188-189, 200-205,224-225</span></span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 24th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">P1 Critique | Integrating Type &amp; Image with the Grid | Margins and Proportions | Directional Devices: line, dot, &amp; shape<br /> <strong>Lab: </strong>P1 Poster&mdash;ROUGH PHASE | Exercise: Directional Devices (Graphic Organizers)<br /> <strong><span style="letter-spacing: -0.1pt;">Homework: </span></strong><span style="letter-spacing: -0.1pt;">A3 Due Week 4&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;"> <br /> P4: Preliminary Process Book Layout </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;"> <span>&nbsp;</span>Read pgs. 88-93, 98-105, 113-115 + handout</span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 31st, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">P1 Critique | Rhythm and Balance | <span style="color: black;">Typographic Color (value &amp; texture)</span> | Assign P2: Magazine&mdash;(Research)<br /> <strong>Lab: </strong>P1 Poster&mdash;COMP PHASE | Exercise: Rhythm and Balance<br /> <strong>Homework: </strong><span style="letter-spacing: -0.1pt;">A4 Due Week 5&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 6% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Read pgs. 60-71, 106-112,116-125</span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 7th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">P1 Critique | Project Presentation: How to | Anatomy of Magazine Layout: Structural, Typographic and Graphic System<span>&nbsp; </span>| <span>&nbsp;</span><strong><span style="color: maroon;">Midterm Exam</span></strong> </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 3% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"><br /> <strong><span style="letter-spacing: -0.1pt;">Lab:</span></strong><span style="letter-spacing: -0.1pt;"> P2 MAGAZINE&mdash;RESEARCH &amp; PRELIMINARY STUDIES PHASE | Exercise: Magazine Dissection (frame + format)</span><br /> <strong>Homework: </strong>A5 <span style="letter-spacing: -0.1pt;">Project 1 Due Week 6&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 15% of final grade) </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Read pgs.128-133, 138-141,154-157,<br /> 166-167,172-177 </span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 14th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: <span style="color: maroon;">P1 Poster FINAL Critique</span></span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"> | Multi-Page Layout and the Grid | Rhythm and Movement on the Page | Assign P2: Magazine Design&mdash;TOC + Department + 2 Spreads feature <br /> <strong>Lab: </strong>P2 Critique of Magazine Anatomy | Exercise: Multi-Page Rhythm<br /> <strong>Homework: </strong><span style="letter-spacing: -0.1pt;">A6 Due Week 7&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 6% of final grade) </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Read pgs. 16-23, 42-51 (inspiration &amp; intuition)</span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 21st, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">P2 Magazine Critique | Spatial Mechanics of Paragraphs |<br /> <strong>Lab: </strong>P2 Magazine&mdash;ROUGH PHASE/CONCEPT DEVELOPMENT | Exercise: Paragraph Mechanics <br /> <strong>Homework:</strong><span style="letter-spacing: -0.1pt;"> A7 Due Week 8&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 6% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"><span>&nbsp;</span><br /> P4: Preliminary v2 Process Book Layout </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">(50 points = 2% of final grade) </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Read "You Are Looking at a Box" handout</span></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 28th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">P2 Critique Magazine |<strong> </strong>Multi-Page Publication: Narrative, Sequence and Folds | Assign P3: Multi-Page Publication <br /> <strong>Lab: </strong>P2 Magazine&mdash;COMP PHASE | Exercise: Multi-Page Publication Mechanics &amp; Dissection <br /> <strong>Homework: </strong><span style="letter-spacing: -0.1pt;">A8 Due Week 9&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 6% of final grade) </span></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 4th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Course Evaluation | Multi-Page Publication Form Design <br /> <strong>Lab: </strong>P3: Multi-Page Publication (Brochure/Catalogue) &amp; P2 Magazine Critiques </span><span style="font-size: 4pt; font-family: \'Arial Narrow\';"><br /> </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Homework: </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">A9 <span style="letter-spacing: -0.1pt;">Project 2 Due Week 10&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 15% of final grade)</span></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 11th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture:</span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"> <strong><span style="color: maroon;">P2 Magazine FINAL Presentation</span></strong> | Review Project 3 &amp; 4<br /> <strong>Lab: </strong>Crit and work on Multi-Page Publication<br /> <strong>Homework: </strong>A10 <span style="letter-spacing: -0.1pt;">Project 3 Due Week 11&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 10% of final grade)<br /> </span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"><span>&nbsp;</span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>&nbsp; </span>Final Process Book Due </span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">(100 points = 4% of final grade)</span></strong></p>
<p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"><br /></span></strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 18th, 2012</p></td><td width="75%"><p><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';">Lecture: <span style="color: maroon;">P3 Multi-Page Publication FINAL Presentation</span></span></strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\';"> |<span>&nbsp; </span><strong><span style="color: maroon;">P4 Process Book Final</span></strong><span style="color: maroon;"> <strong>Presentation</strong></span> | <br /> <strong>Lab: </strong>Self-reflection &amp;</span><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; color: maroon;">Final Exam</span></strong><strong><span style="font-size: 8.5pt; font-family: \'Arial Narrow\'; letter-spacing: -0.1pt;">(100 points = 4% of final grade)</span></strong></p>
<p><strong><em>NOTE:</em></strong><em> Course outline is subject to change at the discretion of the instructor to accommodate instructional flow and/or student needs. It is the responsibility of the student to keep abreast of these changes. For exact details of homework assignments see assignments specified in the myaicampus site for this class. </em></p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD1132_Perez_SU12_id31', $paramsPage);

?>