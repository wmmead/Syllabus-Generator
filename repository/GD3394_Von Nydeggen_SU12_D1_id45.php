<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD3394');
$docx->addTemplateVariable('COURSETITLE', 'Package Design');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Daniel Von Nydeggen');
$docx->addTemplateVariable('EMAIL', 'dvonnydeggen@edmc.edu');
$docx->addTemplateVariable('PHONE', '917-715-5584');
$docx->addTemplateVariable('AVAILABILITY', 'Thursdays from 12:00 PM - 1:00 PM and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Thursdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD3381 Introduction to Packaging');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />The focus is on package-branded products. Students will focus on revitalizing existing brands as well as developing new brands based on development of identity and packaging applications</p>
<p><strong>Course Focus:</strong><br />This class will build upon the foundation tools that students have learned in <em>Introduction to Packaging.</em> Students will have the opportunity to collaborate on team projects as well as choose a personally meaningful brand/package design to define and redesign for incorporation into their portfolio.&nbsp;</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Develop a basic understanding on constructing not just a box but 3D structures.</li>
<li>Create a graphics standards book for your mark with examples.</li>
<li>Design an original professional mark for a company or product.</li>
<li>Develop a basic understanding of Semiotics.</li>
<li>Produce multifaceted design presentations inclusive of defining target audience, naming product/company.</li>
<li>Effectively use clay and molding techniques.</li>
<li>Recommend and apply creative solutions to design problems based on historical models, contemporary trends, and current technology.</li>
<li>Sketch multiple solutions for package redesign and design projects.</li>
<li>Produce refined black and white layouts of design solutions.</li>
<li>Produce sketches and solutions that show conceptual design creativity.</li>
<li>Discuss co-branding issues and examples.</li>
</ul>


<p><strong>Additional Competencies:</strong></p>
<ul>
<li>Teamwork will be emphasized throughout the term. Strong effort at clear communication and class involvement (especially in reviews and critiques) will enable every student to push themselves and their designs farther.</li>
</ul> ';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> The Art and Science of Successful Packaging by Silva, John and DuPuis, Steven, Rockport Publishers, ©2008, ISBN: 1-59253-322-1</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture, Lab, Individual and Group Critique</p>
<p><strong>Materials and Supplies:</strong> Metal Ruler<br />T-Square<br />Pens / Pencils / Markers<br />Drawing Templates (not required but helpful)<br />Hot Glue or adhesive<br />Foam Core Sheets (x3) at 30"x30"<br />Matte Board Sheets (x7) at up to 36"x36"<br />Rubber Cement<br />Artist\'s tape (roll)<br />1 X-Acto Knife<br />1 Cutting mat<br />Minimum 20 X-Acto blades<br />1/2 ream of white paper or clean sketchbook<br />Minimum 10 sheets of Bristol Board or similar cardstock paper (at 18"x24")&nbsp;</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> Access to color printer, scanner, digital camera, flash drive or portable hard drive</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Attendance & Participation</td><td>10%</td></tr>
<tr><td>In-class Assignments & Exercises</td><td>20%</td></tr>
<tr><td>Weekly Projects</td><td>30%</td></tr>
<tr><td>Final Project / Examination</td><td>40%</td></tr>
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
<p>The success of your design and your classmates\' designs has a direct effect on everyone\'s grades. Participate in critiques, share ideas and information and you\'ll contribute to your everyone\'s academic success in the class.</p>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 12th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>General introduction, course outline, and grading policies. Discuss the role of the designer, elements and principals of Design. Design from 2D to 3D. Discussion of in-class assignment. Assignment #1: Rethink / Redesign an existing package.</p>
<p><strong>Lab: &nbsp;</strong>Team packaging project based off of a song (creativity exercise). Team packaging project based on current packaging.</p>
<p>Assignment #1: Separate into groups and redesign a package.&nbsp;As a group, analyze an existing package design (breakdown of elements, corporate research) then begin individual preliminary sketches for the redesign. The project should include at least five completely different solutions. Discuss what constitutes a design "sketch."</p>
<p><strong>Homework: &nbsp;</strong>Continue developing assignment. Five different layouts are due, each layout showing all necessary sides. Each group must make a research presentation (in PowerPoint or as a PDF), which will be followed by individual sketch presentations. "Song based" packaging sketches due (3 concepts). Reading Assignment &amp; questions.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 19th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Group Presentations. Present individual sketches (of five different solutions). Highlight the best concept. Group and individual critiques.&nbsp;Lecture on research techniques. Discussion: what makes packaging good?</p>
<p><strong>Lab:&nbsp;</strong>Project firings and redistribution (file swapping). Individual help.&nbsp;</p>
<p><strong>Homework: &nbsp;</strong>Choose the best layout and revise. Complete Assignment #1 (final drawings of all sides) and prepare for in-class presentation. Start term project by picking a corporate product/brand to revitalize or reinvent. Start a creative brief (Phase I). Do in-store research, library and online data gathering. At least <strong>two</strong> successful phone research-related phone calls will be required, so start planning. Reading assignment &amp; questions.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 26th, 2012</p></td><td width="75%"><p><strong>Lecture:&nbsp;</strong>Presentation of digital packaging drawings. Original group reviews. Research/project discussion (student findings)&nbsp;continued. Packaging discussion.&nbsp;Cold-calls discussion: creating a script.</p>
<p><strong>Lab:&nbsp;</strong>Continue Research. Individual Help.</p>
<p><strong>Homework:</strong> &nbsp;Research, make a creative brief, make at least two phone calls, and prepare a digital presentation of your Phase I findings. Be detailed! Bring materials for sketch model construction. Reading assignment &amp; questions.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 2nd, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Research presentations, critique and discussion.</p>
<p><strong>Lab: &nbsp;</strong>Exploration of 3D forms for packaging. Develop construction technique. 3D comps to be developed using chipboard or Bristol board. Rough layout of all elements required for package. Continued: model-making workshop. Perspective tool in Illustrator.</p>
<p><strong>Homework:</strong>&nbsp; Brainstorm solutions (Phase II). Sketches exploring form and structure as well as overall look. Sketch model construction. Present a series of ideas to the class. Find 4 examples of unusual packaging. Bring them (or photos) in and discuss. Reading assignment &amp; questions.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 9th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Present 3D computer sketch models and sketches. Discuss samples.</p>
<p><strong>Lab: &nbsp;</strong>Further development of identity, look and feel of redesign. May use markers and/or colored pencils for graphics, colored paper, and the computer (color printouts).</p>
<p><strong>Homework: &nbsp;</strong>Work on design refinement, using feedback from the critique (Phase III). 5 digitally produced comps due for in-class discussion at next session. Research packaging materials and construction methods. Be prepared to present 3 options for your project. Find 3 current packages that utilize different packaging materials to their full advantage. Start creating sketch models. Reading assignment &amp; questions.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 16th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Group critique of work in progress.</p>
<p><strong>Lab:</strong>&nbsp; Die-line creation exercise.&nbsp;Continue work. Individual help.</p>
<p><strong>Homework: &nbsp;</strong>Continue package die-line practice. Start constructing die-line elements for your project. Continue design refinement. Finish sketch models. Research complex die-lines/packaging and bring in something to share with the class. Reading assignment &amp; questions.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 23rd, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Discussion of student\'s progress. Tips and goals reviewed. Present sketch models.</p>
<p><strong>Lab: &nbsp;</strong>Begin refined flat layout of best design solution, or combination of solutions. Type must be done on a computer. May use markers (tight) for graphics/illustration if desired, or do all on a computer. However, digitally produced comps on 3D forms due for in class discussion at next session.</p>
<p><strong>Homework:</strong> &nbsp;Finalize design (Phase IV), work on supporting materials. White model creation. â€¨Container creation exercise. Follow handout: weekly list of deliverables.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 30th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Presentation of white models. Discussion of student\'s progress. Tips and goals reviewed.</p>
<p><strong>Lab: &nbsp;</strong>Continue refinement of 2D and 3D elements.</p>
<p><strong>Homework:</strong> &nbsp;Continue design refinement. Start working on final model. Gather materials for editorial photographs.&nbsp;Follow handout: weekly list of deliverables.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 6th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Begin full-color comprehensive, to be assembled into 3D package. Must include all elements required for package. All&nbsp;comps to be computer generated.</p>
<p><strong>Lab: &nbsp;</strong>Work on project.</p>
<p><strong>Homework:</strong>&nbsp; Finish final model. Work on presentation elements, digital, print &amp; 3D (Phase IV). Practice presenting. You don\'t have to show your final presentation on week 10, but you should be able to show a strong, reasonably fleshed-out framework of all elements.Bring model and accessories for photography.&nbsp;Follow handout: weekly list of deliverables.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 13th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Review student progress. Dry run of presentations. Turn in final models for photography.</p>
<p><strong>Lab: &nbsp;</strong>Continue work on final comprehensive.</p>
<p><strong>Homework: &nbsp;</strong>Complete project.&nbsp;Follow handout: weekly list of deliverables.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 20th, 2012</p></td><td width="75%"><p><strong>Lecture: &nbsp;</strong>Presentation and critique of final comprehensive.</p>
<p><strong>Lab: </strong>&nbsp;Discussion. Photographing final projects.</p>
<p><strong>Homework: &nbsp;</strong>None</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD3394_Von Nydeggen_SU12_id45', $paramsPage);

?>