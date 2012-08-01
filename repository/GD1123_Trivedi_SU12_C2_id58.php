<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD1123');
$docx->addTemplateVariable('COURSETITLE', 'Electronic Layout');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Kevin Trivedi');
$docx->addTemplateVariable('EMAIL', 'ktrivedi@edmc.edu');
$docx->addTemplateVariable('PHONE', '916-521-9687');
$docx->addTemplateVariable('AVAILABILITY', 'Wednesdays 12:30 to 1:00pm and 5:00pm to 5:30pm');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Wednesdays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'None ');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course explores various means of indicating, placing, and manipulating visual elements in page design, systematically developing strong and creative layout solutions by means of a cumulative, conceptual design process. The ability to effectively integrate photographs, illustrations, and display and text type is developed using page composition software.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Effectively use a page layout software program to graphically create a single and multi-page document.</li>
<li>Effectively apply typographic principles to documents produced in an electronic environment. </li>
<li>Create professionally acceptable layouts for subsequent electronic application.</li>
<li>Import and manipulate data from other graphics software as part of the final graphics assembly.</li>
<li>Develop and use a grid structure that will organize type, images and graphic elements for a successful layout.</li>
<li>Collect and save documents using appropriate specialized file formats for successful proofing and/or final output at a service bureau or other supplier.</li>
<li><strong>Operate a personal computer using current operating system interfaces</strong>
<ul>
<li>Use correct terms and definitions to describe the operations and applications of computers</li>
<li>Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed</li>
<li>Match appropriate connection devices with external equipment</li>
<li>Compare and contrast operation systems</li>
<li>Describe and apply the major steps in the "imaging chain"</li>
<li>Produce documents using word-processing, spreadsheet, and database tools</li>
<li>Transfer data across platforms</li>
<li>Correlate keyboard functions with menu operations</li>
<li>Define characteristics of peripheral communications standards</li>
<li>Demonstrate cross-platform applications</li>
<li>Apply database and spreadsheet skills</li>
<li>Protect data and equipment through the use of virus utilities</li>
<li>Perform basic disk maintenance and data retrieval operations</li>
</ul>
</li>
<li><strong>Use and manage computer hardware peripherals for input, output, and storage</strong>
<ul>
<li>Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets</li>
<li>Employ appropriate input-output devices</li>
</ul>
</li>
<li><strong>Use an Internet browser</strong>
<ul>
<li>Identify the operational characteristics of the Internet and intranets as these compare to standalone systems</li>
<li>Create and organize directories, folders, and documents using file management techniques</li>
</ul>
</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Exploring InDesign CS5 by Terry Rydberg, Thomson Delmar Learning, ©200, ISBN: 13: 978-1435442009</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab; Emphasis will be placed on Lab activity and student class participation.&nbsp; Students will be encouraged to verbally support their creative solutions through classroom presentations and discussions.</p>
<p><strong>Materials and Supplies:</strong> Pencil, Sketch Book, Pen, Note Pad, X-acto knife and Portable Hard Drive/Flash Drive.</p>
<p>Additional production materials will be specified by the instructor</p>
<p><strong>Estimated Homework Hours:</strong> 10</p>
<p><strong>Technology Required:</strong> The Macintosh PC computer, flatbed scanners, digital camera, CD drives, printers.&nbsp; Software:<strong> </strong>Adobe InDesign, Adobe Photoshop, and Adobe Illustrator.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Class Participation </td><td>20%</td></tr>
<tr><td>Assignments and Exercises </td><td>30%</td></tr>
<tr><td>Mid-Term Project/Examination                       	</td><td>20%</td></tr>
<tr><td>Final Project/Examination                                 	</td><td>30%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 11th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Introduction to the course goals, objectives and methodology; Demonstration in exhibit presentation methods; Discussion on the principles of accurate proofreading and methodology along with brief introduction to application workspace.</p>
<p><strong>Lab: </strong>In class assignment experiencing proofreading methodology.</p>
<p><strong>Homework: </strong>Read chapters 1 and 2 in the text; Case Study: Nealdron\'s Candy Develop Sales sheet Assignment is due at the beginning of week 2.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 18th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 1 reading assignment.</p>
<p><strong>Lab: </strong>Review and critique of assignment submitted;&nbsp; In class assignment related to text chapters 1 and 2.</p>
<p><strong>Homework: </strong>Read chapters 3 and 4 in the text; Case Study: Nealdron\'s Candy Develop Internal Newsletter Assignment is due at the beginning of week 3.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 25th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 2 reading assignment.</p>
<p><strong>Lab: </strong>Review and critique of assignment submitted;&nbsp; In class assignment related to the text chapters 3 and 4.</p>
<p><strong>Homework: </strong>Read chapters 5 and 6 in the text; Complete the in class assignment and prepare exhibits for presentation. Nealdron\'s Candy redesign sales sheet and design crossword puzzle. Assignment is due at the beginning of week 4.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 1st, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 3 reading assignment. Guest Lecturer.</p>
<p><strong>Lab: </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 5 and 6.</p>
<p><strong>Homework: </strong>Read chapters 7 and 8 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Nealdron\'s Candy develop promotional pack for suckers that includes a sales flier, bookmark and invitation to promo party. Develop External trifold brochure. Assignment is due at the beginning of week 5.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 8th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 4 reading assignment;<strong></strong></p>
<p><strong>Mid-term exam.</strong></p>
<p><strong>Lab: </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 7 and 8.</p>
<p><strong>Homework: </strong>Read chapters 9 and 10 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Nealdron\'s Candy develop CD jewel case. In addition, design a letterhead, envelope and stationary pad. Assignment is due at the beginning of week 6.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 15th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 5 reading assignment.</p>
<p><strong>Lab:&nbsp; </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 9 and 10.</p>
<p><strong>Homework:</strong>&nbsp; Read chapters 11 and 12 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Nealdron\'s Candy develop letter on letterhead and envelope using page tool. Students use Indesign to create their individual promo pack with page tool. Assignment is due at the beginning of week 7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 22nd, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 6 reading assignment. Guest Lecturer.</p>
<p>&nbsp;<strong>Lab: </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 11 and 12.</p>
<p><strong>Homework: </strong>Read chapters 13 and 14 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Zonicle Book Project Proposal. Begin layout of 10 pages of book. Assignment is due at the beginning of week 8.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 29th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Discussion and demonstration of content in week 7 reading assignment.</p>
<p><strong>Lab:&nbsp; </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 13 and 14.</p>
<p><strong>Homework:</strong> Case Study: Zonicle Book Project Proposal. Design book cover and spine.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 5th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Presentation of topic related to the principles experienced in the final assignment.&nbsp; Discussion of professional applications of production principles.</p>
<p><strong>&nbsp;Lab:</strong>Continued development of the final assignment.</p>
<p><strong>Homework: </strong>Case Study: Zonicle Book Project Proposal. Work towards completing book.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 12th, 2012</p></td><td width="75%"><p><strong>Lecture: </strong>Review of major topics covered throughout the previous nine weeks.</p>
<p><strong>Lab: </strong>Group formal presentation of the assignments completed throughout the previous ten weeks.</p>
<p><strong>Homework:&nbsp; </strong>Prepare for final exam.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 19th, 2012</p></td><td width="75%"><p>&nbsp;<strong>Lecture / Lab: </strong>Final Presentation of book project due. Final Group presentations due. Critique of the final assignment; discussion of production methods for the final presentation. &nbsp;<strong></strong></p>
<p><strong>Final Exam. </strong></p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD1123_Trivedi_SU12_id58', $paramsPage);

?>