<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'FS131');
$docx->addTemplateVariable('COURSETITLE', 'Typography 1');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'steve mehallo');
$docx->addTemplateVariable('EMAIL', 'steve@mehallo.com');
$docx->addTemplateVariable('PHONE', '916-331-9172');
$docx->addTemplateVariable('AVAILABILITY', 'via my class@mehallo.com email (fastest way to reach me), or Monday noon–1 PM (directly after class); Tuesdays, Wednesdays, Thursdays 9:30–10:30pm; or by appointment.');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Mondays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'None ');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course is an introduction to lettering skills and the history and foundation of letterforms. The placement of display and text type in a formatted space, and the relationship between the appearance and readability of letterforms are explored.  Students hand-rendering type and are introduced to contemporary typesetting technology.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Demonstrate an understanding of the history and foundation of letter forms. </li>
<li>Distinguish classifications of type families.</li>
<li>Discuss vocabulary of typography (i.e., Serif and San Serif).</li>
<li>Utilize basic design principles to create well balanced typographic compositions.</li>
<li>Differentiate the difference between positive and negative space.</li>
<li>Compare various methods and choose appropriate solutions to solve design problems.</li>
<li>Apply typography elements as they relate to various design problems.</li>
<li>Discuss and define "good type" vs. "bad type."</li>
<li>Demonstrate lettering skills by hand</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Thinking With Type: A Critical Guide for Designers, Writers Editors, & Students. 2nd Edition.  by Ellen Lupton, Princeton Architectural Press, �2010, ISBN: ISBN 978-1568989693</p>
<p><strong>Required Text:</strong> Stop Stealing Sheep & Find Out How Type Works, 2nd Edition. by Erik Spiekermann and E.M. Ginger, Adobe Press, �2002, ISBN: ISBN: 978-0201703399</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <strong></strong>Classroom discussions and critiques, observational research, historical lectures, in-class exercises, reading and critiques.</p>
<p><strong>Materials and Supplies:</strong> Comfortable notebook or sketchbook. Notes will be required for this class, and notebooks may be collected and incorporated into your Type Development Project grade at the end of the quarter (at the instructor\'s discretion).<strong></strong></p>
<p>&nbsp;</p>
<p><strong><em>Drawing tools</em></strong><em> (need as soon as possible, no later than week 2)</em></p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Speedball Calligraphy Pen Set <br /> or comparable calligraphy or broad pen set (no drawing or crow quill sets, they contain nibs that will not work for our assignments)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Calligraphy ink (Pelikan 4001 available in the bookstore), do not buy india ink &ndash; it clogs the pens</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ink cleaning solution (hand sanitizer is a good alternate, since our bookstore does not carry the cleaning solution)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ink eraser</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Technical/drawing pen, .25mm or .50mm (can be Rapidograph or inexpensive fine tip drawing pen &ndash; do not purchase a roller ball-type pen or a Sharpie)</p>
<p>&nbsp;</p>
<p><em>paper (need as soon as possible, no later than week 2)</em></p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8.5x11" transparent vellum 20 &ndash; 50 sheets, do not buy bristol board that says "vellum" on it (must be transparent<br /> vellum, you will be doing a lot of tracing)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9x12" marker pen paper pad (also used for tracing)<br /> Do NOT buy parchment or \'calligraphy\' paper (even though the bookstore carries them). <br /> We will not be using them in this class.</p>
<p>&nbsp;</p>
<p><em>drafting tools (need by week 6)</em></p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .25 or .50 mm mechanical pencil and reﬁll leads (hb)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; erasing shield</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; kneaded rubber eraser</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 18" metal ruler with cork back</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mini dusting brush</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; flexible curvex (French) curve (flexible is better than the standard French curves)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; drafting compass</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suggested/optional: green circle template for tracing</p>
<p>&nbsp;</p>
<p><em>presentation (necessary for final presentation, purchase after week 10)</em></p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 sheets large Canson or Strathmore paper for cover sheets (black or charcoal gray)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15x20" Letramax No. 100st, Super Black mounting boards (foam core will not be accepted)</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; #11 X-acto knife with extra blades</p>
<p>&nbsp;</p>
<p><em>adhesives (necessary for final presentation, purchase after week 10)</em></p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; White artist tape, any width</p>
<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spray adhesive or Letraset StudioTac/Chartpack drybond adhesive (do NOT use glue stick)</p>
<p><strong>Estimated Homework Hours:</strong> 4–8 hours per week.</p>
<p><strong>Technology Required:</strong> Internet access, MyAiCampus access, wordprocessing software and access to a photocopier (A pay-per-use copier can be found in the Art Institute\'s Library).</p>
<p>&nbsp;</p>
<p>When use of MyAiCampus.com is required for an assignment, it is the student\'s responsibility to report any difficulties with or confusion about the system at the time they occur&mdash;and before the deadline for the assignment. Deadlines for all assignments&mdash;whether turned in during class or via MyAiCampus.com&mdash;are not flexible, and problems with MyAiCampus.com are not a valid excuse for late work.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br />Also in use in this class will be Jan Tschichold\'s classic <em>Treasury of Alphabets and Lettering, </em>ISBN 978-0393701975. However, it is currently out of print &ndash; so an abridged digital reader copy of selected material will be provided free (as a PDF) via the eclassroom. You will be required to print selected pages for use in class.</p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation</td><td>8%</td></tr>
<tr><td>Assignments</td><td>32%</td></tr>
<tr><td>Type Development Project</td><td>60%</td></tr>
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
<p><em>You are expected to participate in classroom discussions. Your interest and participation will affect your grade.</em></p>
<ul>
<li><em>You are expected to participate in classroom discussions. Your interest and participation will affect your grade.</em></li>
<li><em>Lecture slides contain copyrighted material and will not be available for any reason outside of class.</em></li>
<li><em>All work is due at the beginning of class, late work will not be accepted.</em></li>
</ul>
<ul>
<li>All work must be received by the set deadlines. <strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero. Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with me (the instructor) prior to the due date. Regardless of circumstances, penalties will be assessed unless you show me paperwork justifying your absence.</li>
<li><strong>Project Critiques</strong>: If you arrive late to a project critique within the first 60 minutes of the critique, your project will lose half a letter grade. If you arrive any time after the first 60 minutes, your project will lose one letter grade. Out of respect to your fellow design classmates, if you arrive past the first 10 minutes of class you forfeit the right to have your project critiqued by your peers.</li>
<li><strong>Homework Assignments </strong>are to be completed before class begins on the due date. Unless you have made prior arrangements with me, late homework will NOT be accepted, and will be given zero points. If during class you are working on any portion of the homework that is due that day, your homework will not be accepted, thus losing all possible points. Additionally, you will also lose all participation points.</li>
<li><strong>In-class Assignments </strong>Unless you have made prior arrangements with me (the instructor) you cannot make-up missed <br /> in-class work. Even though you can\'t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.</li>
<li><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by "Class time will be spent in a productive manner." Points given for participation or in-class work will NOT be available to students who are not present. NOTE: If you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment) you will lose all participation points for that day.</li>
</ul>
<ul>
<li>No food allowed in class or lab at any time. Only drinks in re-closeable bottles allowed in classroom.</li>
<li>Edible items brought to class or lab must be thrown out or left outside the computer lab.</li>
<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>
<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>
<li>Attendance is mandatory. There is no way to make up missed sessions, therefore it is recommended that you attend all class sessions.</li>
<li>However, absences do occur. But there is a catch:<strong> </strong>You are still responsible for all materials covered during any class in which you are absent. <strong>The instructor of this course will not inform you of what you\'ve missed. </strong>It is strongly suggested you team up with other students and follow the Course Outline to keep track of class work.</li>
<li>Lecture/critique/handout materials will not be available from your instructor for any class you have missed.</li>
<li>Break times are scheduled by the instructor at appropriate intervals.</li>
<li>No private software is to be brought to lab or loaded onto school computers.</li>
<li>No software games are allowed in lab for this class.</li>
<li>No use of internet access in class that is not directly related to course curriculum.</li>
<li>Unless directly related to the class, laptops or any electronic device (including headphones) are NOT allowed during lectures, critiques, and group assignments. It is okay to use headphones during any other times<em>.</em></li>
<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.<em></em></li>
<li><em>As a courtesy to all, cell phones must be turned off.</em></li>
<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>
</ul>
<p><em><br /></em></p>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 9th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Introduction to history and terminology of graphic design and typography part 1.</p>
<p><strong>Lab: </strong>Phase 1: Experimental Glyph Project.</p>
<p><strong>Homework: </strong>Observational assignment 1: bag; Begin reading Sheep book chapters 1&ndash;3; get supplies for week 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 16th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Observational assignment discussion. Introduction to history and terminology of graphic design and typography part 2. Notetaking discussion.</p>
<p><strong>Lab: </strong>Phase 1: Glyph Project continued.<strong></strong></p>
<p><strong>Homework: </strong>Observational assignment 2: logos, continue reading Sheep book chapters 4&ndash;6.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 23rd, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Observational assignment 2 due.</p>
<p><strong>Lab: </strong>Phase 1: Glyph Project continued. Creativity and intuition. <em>(m)</em><strong></strong></p>
<p><strong>Homework: </strong>glyph generation continued; complete reading Sheep book.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Jul 30th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Sheep book Quiz. History of world writing systems, creativity discussion.</p>
<p><strong>Lab: </strong>Further development of experimental letterforms.<strong></strong></p>
<p><strong>Homework: </strong>Read Lupton (etextbook) thru page 45; Letterform studies continued.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 6th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>20th Century Modern as inspiration/contrast. <em>(m)</em></p>
<p><strong>Lab: </strong>In class timed "challenge" assignment.</p>
<p><strong>Homework: </strong>Read Lupton pages 46&ndash;83; Observational assignment 3 (WorldType) introduced, due week 7; Observational assignment 4 (Helvetica) introduced, due next week.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 13th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Observational assignment 4 (Helvetica) due; Discussion: Swiss International Style, Chancery letterforms.</p>
<p><strong>Lab: </strong>Phase 2: Italics, development of letterforms, recreating Medieval scribe environment.<strong></strong></p>
<p><strong>Homework: </strong>Read Lupton pages 87&ndash;107; Observational assignment 3 (WorldType) continued, due week 7; letterform studies continued.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 20th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Observational assignment 3 (WorldType) due. Discussion: Logotype, Trademark and Wordplay overview.</p>
<p><strong>Lab: </strong>Phase 3: Traditional Roman letterforms.</p>
<p><strong>Homework: </strong>Read Lupton pages 108&ndash;147; Read the text section of the Tschichold Reader PDF; Letterform studies continued.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 27th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Roman letterform discussion. Introduction to traditional design presentations, process books. Time management discussion.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Lab: </strong>Phase 3: Traditional Roman letterforms. Further development of letterforms using Renaissance-era type tools.</p>
<p><strong>Homework: </strong>Finish reading Lupton; Roman refinements. Xacto Knife Cut Paper assignment, "Dry run" Wordplay/Process Book option.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 3rd, 2012</p></td><td width="75%"><p>Holiday &ndash; no class.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 10th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong> Lupton Quiz. Form and Composition, letterspacing.</p>
<p><strong>Lab: </strong>Roman refinements continued.<strong> </strong>Presentation demonstration.</p>
<p><strong>Homework: </strong>Complete Type Development Project, Process Book w/Wordplay for presentation.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 17th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Final project deadline with critique.</p>
<p><strong>Lab: </strong>Type Development Project, Process Book w/Wordplay presentations.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('FS131_mehallo_SU12_id57', $paramsPage);

?>