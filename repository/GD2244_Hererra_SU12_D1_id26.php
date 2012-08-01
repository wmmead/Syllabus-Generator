<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GD2244');
$docx->addTemplateVariable('COURSETITLE', 'Advanced Image Manipulation');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Dan Hererra');
$docx->addTemplateVariable('EMAIL', 'dherrera@aii.edu');
$docx->addTemplateVariable('PHONE', '916-915-7626');
$docx->addTemplateVariable('AVAILABILITY', '7 am - 8 am Thursday Mornings');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Thursdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'FS122 Image Manipulation');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course builds upon the Image Manipulation class to integrate raster and vector graphics with concerns for varied formats including Web and print graphics. Students will create visual messages and focused visual statements and gain an understanding of the differences in Web and print graphics.</p>
<p><strong>Course Focus:</strong><br />This course focuses on pushing the students photoshop knowlege past basic competencies. Students will explore the creative the application of photoshop while developing a personal style and refining production skills.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Apply the Principles of Color Theory.</li>
<li>Make necessary adjustments to color and contrast.</li>
<li>Create specific color palettes to solve specific illustration problems.</li>
<li>Identify, analyze, and apply the critical-thinking process to the design challenges of specific problems.</li>
<li>Analyze the requirements for a given task and assign the appropriate operating mode, resolution and other variables.</li>
<li>Use image manipulation software.</li>
<li>Ensure that all images are properly configured for final output.</li>
<li>Combine images from several programs into new composite images.</li>
<li>Operate a digital camera and capture images for use in a raster based computer application.</li>
<li>Import and manipulate data from other graphics software as part of the final graphics assembly.</li>
<li>Prepare imagery for proofing and/or final outputting at a service bureau or other supplier.</li>
<li>Select/apply filters and layers using appropriate menus, tools, and commands.</li>
<li> Use an Internet Browser.</li>
<li>Utilize Internet tools and technology.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Text:</strong> Adobe Photoshop CS5 Classroom in a Book (eBook) by Adobe Creative Team, Adobe Press, ©2010, ISBN: 0321701763</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> <strong>Combination: Lecture/Lab</strong></p>
<p>The software applications used in the creation of digital media are tools&hellip; just like a paintbrush. Solid design principles, and artistic aesthetics are just as important as understanding the software to create significant imagery. It is the student\'s responsibility to choose their level of commitment regarding the quality of their work and learning process.</p>
<p>&nbsp;</p>
<p>In general, lecture and demonstrations will begin the class session followed by hands on projects. Students are encouraged to network for supplemental info, answers to questions, and additional ideas. Students are highly encouraged to engage in constructive discussion during critiques, and lab time. However, please keep topics relevant to the subject matter.</p>
<p>&nbsp;</p>
<p>If you have a question and I don\'t see you, please raise your hand or speak up. Your Questions are very important to me, and if I don\'t have an immediate answer, I will do my best to find one by the next class session.</p>
<ul<strong>Materials and Supplies:</strong> >
<li><strong><span style="text-decoration: underline;">Storage Disk:</span></strong> USB Flash Drive (4GB recommended) *<em>Students should not store important files on the computer\'s desktop</em></li>
<li><strong><span style="text-decoration: underline;">Presentation Materials:</span></strong> Mattboard/Foamcore, &amp; mounting material (spray, contact), paper cutter. <em>*I expect a professional level of craftsmanship when presenting your projects. Poorly presented projects will seriously affect your grade.</em></li>
<li><strong><span style="text-decoration: underline;">Notes/Journal:</span><em> </em></strong>Students should have note-taking materials handy <strong><em>every</em></strong> class. Notebooks / journal / log, pens and pencils. <em>*Sketching, jotting down ideas, and taking software notes is essential for successful completion of this course.</em></li>
</ul>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> PC or Apple PC with Adobe Photoshop CS6 software, peripherals, and Internet Access.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br /><strong>Student Evaluation/Grading Policies:</strong></p>
<ul>
<li>All work must be received by the set deadlines in the course outline. <strong><span style="text-decoration: underline;">No Late work will be accepted</span>&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with me (the instructor) prior to the due date. Regardless of circumstances, penalties will be assessed unless you show me paperwork justifying your absence.</li>
<li>Absolutely no work will be accepted after the final class meets week 11.</li>
<li><strong>Resubmitting projects for re-grading&mdash;</strong>On-time projects may be redone in order to improve grade. You must have instructor\'s prior approval.<strong></strong></li>
<li><strong>Mid-Term &amp; Final Projects are </strong>graded on scale of A, B, C, D, &amp;&nbsp; F. These two projects represent 50% of your grade. If you fail to complete either one, you will most likely not pass the class. Treat these projects as if your grade depends on it&hellip; because it does. Each project will be graded based on the following:</li>
</ul>
<p class="Normal11pt">&middot; Technical Ability 20%</p>
<p>&middot; Visual Communication 20%</p>
<p>&middot; Concept 20%</p>
<p>&middot; Design 20%</p>
<p>&middot; Presentation 20%</p>
<p><em>*NOTE poorly presented projects will drop your grade by TWO GRADE LEVELS</em><strong></strong></p>
<ul>
<li><strong>Homework Assignments </strong>are to be completed before class begins on the due date. Unless you have made prior arrangements with me, late homework will NOT be accepted, and will be given zero points. If during class you are working on any portion of the homework that is due that day, your homework will not be accepted, thus losing all possible points. Additionally, you will also lose all participation points. All printed homework must be turned in with your name. If the work is submitted without an envelope or other protective case you risk damage to your piece. All digital homework must be turned in to the class\' online drop box and is due by the beginning of class on the due date.</li>
<li><strong>In-class Assignments </strong>Unless you have made prior arrangements with me (the instructor) you cannot make-up missed in-class work. Most in class assignments are based on homework given the previous class. It is crucial for you to attend every session to be successful in this class.</li>
</ul>
<p>NOTE: Even though you can\'t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.</p>
<ul>
<li><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by "Class time will be spent in a productive manner." Points given for participation or in-class work will NOT be available to students who are not present.<strong></strong></li>
</ul>
<p><em>NOTE: If you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment or research) you will lose all participation points for that day.</em><em> </em></p>
<ul>
<li><strong>Exams-</strong>There is no make-up exams, unless you have contacted the instructor in a responsible and timely manner<em> prior to the exam date class session</em>. If you miss an exam, you will receive a 0 (zero) for that exam.</li>
<li><strong>Critiques</strong> will be held at the beginning of class on the due date of each project. If you arrive late to the Mid-Term or Final project critique within the first 60 minutes of class, your project will lose half a letter grade. If you arrive any time after the first 60 minutes, your project will lose one letter grade. You are required to attend critiques even if your work is not complete. Critiques are crucial in learning to analyze what students have produced, and what could have been done to improve the execution of your concepts. Failing to participate in critiques, or leaving after your work is critiqued will seriously affect your grade for the project.</li>
</ul>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Participation</td><td>15%</td></tr>
<tr><td>In Class Exercises & Homework </td><td>35%</td></tr>
<tr><td>Mid-Term Project & Critique</td><td>25%</td></tr>
<tr><td>Final Project & Critique</td><td>25%</td></tr>
<tr><td><strong>Total</strong></td><td><strong>100%</strong></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('EVALUATION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>School Wide Grading Policies</strong></p>
<ul>
<li>Class time will be spent in a productive manner.</li>
<li>Grading will be done on a point system.</li>
<li>Points for individual activities will be announced.</li>
<li>All work must be received by the set deadlines.</li>
<li>Late work receives a grade of zero.</li>
<li>On-time projects may be redone with instructor approval.</li>
<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>
</ul> ';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 12th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Class introduction:</em> Brief review of the syllabus &amp; student background sheet.</li>
<li><em>Review of raster topics:</em> File Size/Hardware Limitations, and file formatting for various output.</li>
<li><em>Advanced drawing and painting with Photoshop: </em>Defining brushes, advanced brush techniques, painting in layers, &amp; layer organization.</li>
</ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong>In-class project of student portrait.</p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong></p>
<ul>
<li>Complete student background sheet</li>
<li>Print out Syllabus and bring in signature page</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 19th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Retouching &amp; Optimizing:</em> Color correction, tonal correction, spotting/cloning, cropping, &amp; formatting for various output.</li>
<li><em>Advanced Selection Techniques:</em> Using channels, color range, and calculations to generate complex masks and selections.</li>
</ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong></p>
<ul>
<li>Use the techniques covered in the lecture to retouch and optimize a group of images. The images will present different problems that will require different selection techniques and retouching solutions.</li>
<li>Begin sketches and concept development for mid-term project. Create a materials list, &amp; a shot list (shot list can include stock imagery).</li>
</ul>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong></p>
<ul>
<li>Write a thoughtful 1 page, double spaced paper on how you can incorporate the readings to further your own image-making practice, technique, and workflow.&nbsp;</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 26th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li>Understanding the difference between royalty free and restricted use royalty free stock photography.</li>
<li><em>The Pen Tool</em>: Shape layers &amp; paths. Advantages of using the pen tool for certain types of selections.</li>
<li><em>Introduce:</em> The mid-term project. Using a "Proof Of Concept" in your workflow.</li>
</ul>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: </strong></p>
<ul>
<li>Complete the tracing, and shape layer exercises using the pen tool.</li>
</ul>
<p><strong>Homework</strong>:</p>
<ul>
<li>Create <em>at least</em> (2)<strong> </strong>"Proof of Concepts" for your mid-term project; include any sketches, tear sheets, and imagery used in the mock up. I MUST approve your Concept Proof prior to working on what you will submit for your mid-term final.</li>
<li>Creative Photoshop: Chapter 2 (Completed files are due the following class).</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 2nd, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Using Vectors in Photoshop:</em> Mixing vector illustration within a bitmap/raster image file. We will work with bridging the gap between Illustrator and Photoshop, and discuss the advantages to each. <em></em></li>
<li><em>Presenting Proof of Concept:</em> I will review the proofs, and students will receive approval, or a revision suggestion for the mid-term project.<em></em></li>
</ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong></p>
<ul>
<li>Complete Vectors assignment</li>
</ul>
<p><strong>Homework:</strong></p>
<ul>
<li>Finalize Mid-term Concept and Layout (Have this ready to work on for the next class session)<strong></strong></li>
<li>Complete Resolution assignment</li>
<li>Complete Printing/Curves Adjustment Layer assignment&nbsp;</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 9th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li>Complete Midterms</li>
<li>Discuss the art of presentation (print mounting, &amp; over-mat cutting).</li>
</ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework:</strong></p>
<ul>
<li>Complete Midterms</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 16th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<p><em>Critique of midterm projects:</em> Be prepared to talk about your work and discus the conceptual and aesthetics choices behind your work.</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 23rd, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Introduce:</em> Final Project</li>
<li><em>Image Mood and Color:</em> Taking an image and alter the mood of the image using color.</li>
<li><em>Duotones and Color Key:</em> Use of color adjustment tools and various color modes. Discussion on which modes are best for shifting modes of output.</li>
</ul>
<p><strong>Lab: </strong></p>
<ul>
<li>Take 4 images and present them in 4 different color combinations that alter the mood of the image.</li>
</ul>
<p><strong>Homework:</strong></p>
<ul>
<li>Take a sequence of 5 photos to make an animated Gif<strong></strong></li>
<li>Create (2) "proof of concepts" for your Final Project (Due the following class &ndash; Week 8)</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 30th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Review Proof of Concepts for final project</em></li>
<li><em>Creating files for the web:</em> Making a Gif animation.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>
</ul>
<p><strong>Lab: </strong>Create your own PDF Slideshow and Gif animation. Begin proof of concepts for final.</p>
<p><strong>Homework:</strong></p>
<ul>
<li>Create a 1<sup>st</sup> Draft of your final project based on your accepted Proof of Concept.</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 6th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Channels</em></li>
<li><em>Multi-pass selections</em></li>
<li><em>Calculations</em></li>
</ul>
<p><strong>Lab:</strong></p>
<ul>
<li>Complete channels and calculations exercise</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 13th, 2012</p></td><td width="75%"><p><strong>Topics Include:</strong></p>
<ul>
<li><em>Peer Review of current working draft for Final Project.</em></li>
</ul>
<p><strong>Homework:</strong></p>
<ul>
<li>Complete Final Project</li>
</ul></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 20th, 2012</p></td><td width="75%"><p><strong>Topics Include: </strong>Final Critique.</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GD2244_Hererra_SU12_id26', $paramsPage);

?>