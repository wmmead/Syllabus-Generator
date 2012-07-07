<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD4402');
$docx->addTemplateVariable('COURSETITLE', 'Design Research - Marketing Design');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Daniel Von Nydeggen');
$docx->addTemplateVariable('EMAIL', 'dvonnydeggen@edmc.edu');
$docx->addTemplateVariable('PHONE', '917-715-5584');
$docx->addTemplateVariable('AVAILABILITY', 'Wednesdays from 12:00 PM - 1:00 PM and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Wednesdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'GD3391 Graphic Design History');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course is a review of popular culture as it relates to social, informational, economic, political, and educational current events. A special emphasis is placed on trends and pop topics as they relate to the design world. Current media, including literature, books, television, movies, telecommunications media, online communications, marketing trends and strategies are reviewed.</p>
<p><strong>Course Focus:</strong><br />The student will create a relationship with a local, Sacramento-based business to gain first-hand knowledge of the market and create a substantial, realistic design project.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Identify, select, and produce a marketing mix.</li>
<li>Characterize the strengths and functional value of various communications and advertising media: including print, packaging, P.O.P., billboards, television, broadcast, and the web.</li>
<li>Determine and suggest an appropriate marketing mix.</li>
<li>Explore various techniques as they apply to an individual marketing mix.</li>
<li>Utilize appropriate techniques for a marketing mix.</li>
<li>Identify, select, and use various media and styles to achieve desired results.</li>
<li>Define and describe potential medium, such as photography, video, audio, or print.</li>
<li>Apply the selected media and style to a project solution.</li>
<li>Explore the relationship between language and image.</li>
<li>Explore signs as being anything and everything that conveys meaning; words, numbers, symbols, myths, color, sound, movement, body language, expressions, aroma, texture, dance movies. Anything that conveys both information and emotion.</li>
<li>Develop methods to monitor and recognize local, regional, national and global design styles and trends.</li>
<li>Develop methods of research, semiotic analysis, methods of application.</li>
<li>Learn how to develop a marketing plan</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> The Marketing Plan Handbook 4/e by M.B. Wood, Prentice Hall, ©2011, ISBN: 978-0-13-608936-0</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lectures, labs, individual and group critiques</p>
<p><strong>Materials and Supplies:</strong> Course Textbook<br />3-Ring binder for your research materials<br />Notebook for lecture materials (or sketchbook)<br />Pen(s)/Pencil(s)<br />1/2 ream of white paper (or sketchbook)<br />Plastic sleeves and/or folder inserts for your notebook<br />Notebook divider tabs<br />Flash drive or portable hard drive<br />Business presentation-style folder for final project&nbsp;</p>
<p><strong>Estimated Homework Hours:</strong> 4-6 hours per week</p>
<p><strong>Technology Required:</strong> Computer with internet access, office software (word processing, presentation, design), digital camera, scanner, transportation access to/from local business site&nbsp;</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Attendance & Participation</td><td>10%</td></tr>
<tr><td>In-class Assignments & Exercises</td><td>10%</td></tr>
<tr><td>Team Evaluations</td><td>10%</td></tr>
<tr><td>Quizzes</td><td>10%</td></tr>
<tr><td>Weekly Projects</td><td>30%</td></tr>
<tr><td>Final Project / Examination</td><td>30%</td></tr>
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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 11th, 2012</p></td><td width="75%"><p>Course Introduction: Self-Introductions, review syllabus, class rules, lesson plans, etc.</p>
<p><strong>Lecture</strong>: &nbsp;Marketing Planning Today. Developing the Marketing Plan. Preparing for Marketing Planning.&nbsp;Case Studies: Tropicana, Zappos, Best Buy, Netflix, McDonalds, Unicef</p>
<p><strong>Lab</strong>: &nbsp;What do you think a Marketing Plan is? Elevator Pitches. Discussion.&nbsp;Workshop: Introduce course project; review project development schedule; create research teams;&nbsp;Choose your product; Write/Present preliminary statement of marketing problem.</p>
<p><strong>Homework</strong>: Finish lab work, Read Chapters 1, 2, Appendix for next week. Prepare Chapter questions. Bring in a sample from a marketing campaign.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 18th, 2012</p></td><td width="75%"><p>Quiz&mdash;Week 2</p>
<p><strong>Lecture</strong>: &nbsp;Analyzing the current situation, environmental scanning and analysis today, SWOT analysis, analyzing internal and external environments. Discuss campaigns brought in.</p>
<p><strong>Lab</strong>: &nbsp;Refine Statement of Marketing Problem; Begin Collection of Secondary Research Data.</p>
<p>Case Studies: Nintendo, Google, Palm, JC Penney, Tata Motors, Bank of America, Burger King</p>
<p><strong>Homework</strong>: Read Chapter 3, prepare chapter questions. Create a SWOT on your business.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 25th, 2012</p></td><td width="75%"><p>Quiz &ndash; Week 3</p>
<p><strong>Lecture</strong>: Understanding Markets and Customers, Analyzing Markets, Customer Needs and Behaviors, Planning Marketing Research. &nbsp;Case Studies: Nike, Kiva, PC Industry, Kroger, Coca-Cola, Staples</p>
<p><strong>Lab</strong>: &nbsp;Research and define Situation Analysis, Market Needs and Trends. Guest Speaker</p>
<p><strong>Homework</strong>: Read chapters 4-5; prepare to present and turn in: statement of marketing problem, secondary research.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 1st, 2012</p></td><td width="75%"><p>Quiz &ndash; Week 4.</p>
<p><strong>Lab</strong>: &nbsp;Research and define market growth. Complete SWOT analysis, review for midterm.</p>
<p><strong>Homework</strong>: Prepare to present and turn in: Marketing Plan to date, read chapters 4-5 again, prepare for the midterm exam.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 8th, 2012</p></td><td width="75%"><p>Midterm Exam (1 hour)</p>
<p><strong>Lab</strong>: &nbsp;Video: Modern Marvels, Failed Inventions (Marketing Research Might Have Helped&hellip;) &ndash; Part 1. Discuss</p>
<p>Turn in and Present Marketing Plan Outlines&nbsp;</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 15th, 2012</p></td><td width="75%"><p><strong>Lecture:</strong> Planning segmentation, targeting and positioning. Segmenting markets, positioning for competitive advantage, planning direction objective and marketing support, shaping the marketing mix.&nbsp;Case Studies: Sweetpea, Harley Davidson, Foster Bank, Dell, John Deere, Airgas, Hyundai, and others.</p>
<p><strong>Lab</strong>: &nbsp;Group discussion of marketing plans to date. Include: Statement of marketing problem, secondary&nbsp;research findings / sources, assumptions that have changed, successes and problems.&nbsp;Workshop: analyze competition</p>
<p><strong>Homework</strong>: Read chapter 6. Prepare chapter questions. Continue work on marketing plan.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 22nd, 2012</p></td><td width="75%"><p>Quiz &ndash; Week 7</p>
<p><strong>Lecture</strong>: &nbsp;Developing product and brand strategy, product development and management, planning branding.&nbsp;Case Studies: M&amp;M\'s, Wal-Mart, Wikipedia, Sony, Kia. Guest speaker</p>
<p><strong>Lab</strong>: &nbsp;Develop Brand and Pricing Strategy.&nbsp;Video: Modern Marvels, Failed Inventions &ndash; Part 2, Discuss.</p>
<p><strong>Homework</strong>: Read chapters 7,8,9. (Focus on 9). Prepare chapter questions. Continue work on marketing plan</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 29th, 2012</p></td><td width="75%"><p><strong>Lecture</strong>: Developing marketing communications, pricing, channel and logistics strategy.&nbsp;Case Studies: Dollar Menu, Zipcar, Traffic, IKEA, Verizon Wireless, Luxury Pricing, Li&amp;Fung, Medical Clinics, Recellular and others.</p>
<p><strong>Lab</strong>: &nbsp;Develop marketing mix</p>
<p><strong>Homework</strong>: Continue work on marketing plan</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 5th, 2012</p></td><td width="75%"><p>Quiz- Week 9</p>
<p><strong>Lecture</strong>: Pulling it all together (review of key concepts to date, apply to course project); presenting/summarizing marketing plans, review schedule/expectations for weeks 10, 11</p>
<p><strong>Lab</strong>: Q&amp;A session, continue work on marketing plan</p>
<p><strong>Homework</strong>: Continue work on marketing plan</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 12th, 2012</p></td><td width="75%"><p><strong>Lecture</strong>: "Open Mic" &ndash; Questions and issues.&nbsp;Videos: TBD. Possible guest lecturer.</p>
<p><strong>Lab</strong>: Pull together data, findings and recommendations; create charts, graphs; develop ads; develop and practice presentations.</p>
<p><strong>Homework</strong>: Complete final marketing plan presentation to turn in and present to class.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 19th, 2012</p></td><td width="75%"><p>Prep Time: for final research study presentations</p>
<p>Team Presentations: Final marketing plan and evaluations (peer and instructor).</p>
<p>Turn In: Final Marketing Plan&nbsp;</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD4402_Von Nydeggen_SU12_id46', $paramsPage);

?>