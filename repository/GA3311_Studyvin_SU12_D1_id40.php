<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'GA3311');
$docx->addTemplateVariable('COURSETITLE', 'Material & Lighting');
$docx->addTemplateVariable('SESSION', 'Summer 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'Stephen Studyvin');
$docx->addTemplateVariable('EMAIL', 'sstudyvin@aii.edu');
$docx->addTemplateVariable('PHONE', '510-857-7450');
$docx->addTemplateVariable('AVAILABILITY', 'To be discussed in class.');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '7/9/2012');
$docx->addTemplateVariable('CLASSTIME', 'Thursdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'MA1134 Principles of 3-D Modeling');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />In this course students are introduced to materials, textures, and lighting strategies to add detail and realism to objects without adding complexity to the model. Students simulate real-world surfaces containing reflection radiosity and other effects.
</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Apply traditional paint concepts, tools, and techniques for use in computer animation.</li>
<li>Develop critical ideas for surface treatment, lighting, and motion of 3D models.</li>
<li>Analyze and evaluate and apply texture-mapping strategies.</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Recommended Text:</strong> Advanced Maya Texturing and Lighting (2nd Ed) by  Lee Lanier, Sybex, ©2008, ISBN: 978-04702927</p>
<p><strong>Recommended Text:</strong> Digital Lighting and Rendering (2nd Ed) by Jeremy Birn, New Riders Press, ©2006, ISBN: 978-0321316318</p>
<p><strong>Recommended Text:</strong> Mastering Autodesk Maya 2012 by Eric Keller, John Wiley and Sons, ©2011, ISBN: 978-0470919774</p>
';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> Lecture and Lab</p>
<p><strong>Materials and Supplies:</strong> Storage Media (flash drive, hard drive), drawing supplies.</p>
<p><strong>Estimated Homework Hours:</strong> 3 to 4 Hours per week</p>
<p><strong>Technology Required:</strong> Computer Lab, Maya, Photoshop, other design and image manipulation applications, access to still camera.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>

';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Class Participation</td><td>12%</td></tr>
<tr><td>Quizzes</td><td>18%</td></tr>
<tr><td>Exercises</td><td>35%</td></tr>
<tr><td>Midterm Assignment</td><td>15%</td></tr>
<tr><td>Final Assignment</td><td>20%</td></tr>
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
<div class="expectations">
<h2>Instructor\'s Expectations</h2>
<h3>Professionalism</h3>
<ul>
<li>This is a professional environment. It\'s not just a class; this is your introduction to a professional working environment. Be respectful of other students. During lectures, do not disrupt others by talking, unless you are involved with the class discussion.</li>
<li>While I encourage discussions, because they are essential to learning, interruptions are counter-productive. If there are repeated disruptions, this will be noted, and participation for the day will be reduced, and can lead to further action.</li>
<li>Do not hold side conversations with an individual or a small group during discussions. If you have something to contribute to the discussion, do so following the proper etiquette in the class. If this has nothing to do with the topic, then wait to have side conversations for break or during lab.</li>
<li>Be prepared for class at the start of class time. Sometimes there will be a short amount of time at the beginning of class to prepare for critiques, but don\'t expect to come to class and finish an exercise that is due.</li>
<li>If you have problems getting to class, if you\'re sick, have transportation issues, the cat ate your keys, whatever it is, turn assignments into the portal website. At least you will get credit for the assignment.</li>
<li>Take notes in class, even though I place much of the material online, you should be keeping your own notes to have something to refer to. Quite often discussions in class will cover material not online.</li>
<li>Keep track of due dates, and work in progress reviews.</li>
</ul>
<h3>Assignments, Exercises and turning in files</h3>
<ul>
<li>Most of the assignments, exercises and projects will be turned into the dropbox drive in the lab (unless specifically noted in the requirements).</li>
<li>Each lab has a specific dropbox. Since this is a fairly new system, and can be prone to some issues, you need to check with the instructor before you leave the class and confirm that the assignment or exercise is turned in.</li>
<li>Do not use the student drive to turn in or permanently store your project files; files left on the student drive can be easily deleted by another student (even unintentionally). I cannot retrieve anything that has been deleted off the student drive.</li>
<li>Pay close attention to assignment and exercise formats. The format of images, or movie files are requirements. If it is in a format that I cannot view, I will not be able to grade it.</li>
<li>For all work where a project directory is required, make sure that you turn in the entire project directory, and not just a scene file.</li>
<li>Turn in all your assignments on time, even if it is incomplete. Assignments not turned in on time will receive a score of Zero, but if you turn it in on time, later you can revise the assignment. I will re-grade the work, and if you show progress, the grade will improve. In a professional environment, you will be expected to show progress sometimes every day. Employees who cannot do this tend to be former employees.</li>
<li>In previous quarters I have graded assignments on how well the directions of the assignment are followed, this included the naming convention, properly formatted project directories, and the location of files in the project directory. This will no longer be a graded component of exercises and assignments. However, if the specific directions for formatting are not followed, the assignment or exercise will not be accepted, and will be given a score of zero until the formatting of the project folder is corrected. Each assignment and exercise will have specific requirements listed, which will give the details of for the requirements. Play close attention to this requirement.</li>
</ul>
<h3>Extra Credit and Resubmitted Work</h3>
<ul>
<li>Extra credit assignments may be offered, which will be due during the final week of class. Sometimes these will be projects outside of class, like challenges and competitions.</li>
<li>Any exercise or assignment, except for the final assignment, may be turned in for an improved grade. The deadline to turn in resubmitted work is 2 weeks after the date the grade is posted. The work must show improvement to receive a higher grade. In the case that the quality of the work is not as good as the original (it happens), the original grade will not be changed.</li>
</ul>
<h3>Project files and backups</h3>
<ul>
<li>Save all your work through the quarter. Even if you turn in assignments and exercises, do not delete projects after they are turned in. If you\'re running out of space on a portable hard drive, start burning things to DVD. Every time I finish with client work, I back up everything to some other media, sometimes multiple copies. You never know when you may have to go back to it.</li>
<li>Make sure you have multiple backups of all your work. Do not rely on one location for all your files. I\'ve lost things from crashed hard drives before. If possible setup automatic backups for important files and projects. I will not accept "my hard drive crashed" as an excuse for not having an assignment or exercise turned in. I will empathize with you, but I cannot grade what I cannot view.</li>
<li>Similarly, even after the end of the quarter, you should backup your work. You might have a situation where files may be needed for work in another class. You have no proof that you did work once files are deleted from your personal drive.</li>
</ul>
<h3>The Portal - myeclassonline.com</h3>
<ul>
<li>Log in to the Portal Website (myeclassonline) during the week, this is part of your homework every week. All the materials, assignments, demonstrations and quizzes are online. If there is a problem with the website, let me know as soon as possible. Do not wait until the day of class to log in to get information, post assignments, or take a quiz, it may be too late.</li>
<li>I realize that I may use this resource more then any other instructor. I do this to assist you. All the due dates will be posted here, and if you use this resource, you can be better prepared for class.</li>
<li>Grades and specific assignment and exercise feedback are posted in the gradebook on the portal. Check this regularly to get an idea of how you\'re doing in the class.</li>
</ul>
</div>';

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
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Jul 12th, 2012</p></td><td width="75%"><table>
<tbody>
<tr><th colspan="2">Week 1 - Introduction, expectations and managing projects</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Introduction to class, expectations, homework, assignments critiques and conventions. Introduce lighting in Maya, 3-point lighting, light types (ambient, directional, point, spot, area, volume), lighting manipulators, how lighting affects the scene, using lighting references. Discuss midterm assignment, homework, challenges and exercises outside of class.</td>
<th>Lab:</th>
<td>Start week 1 exercise, basic scene setup in Maya; create a new project, reference character in a new scene. Set up basic lighting in the scene.</td>
<th>Homework:</th>
<td>Finish week 1 exercise, lighting setups. Start week 2 exercise by collecting a reference images (photographs). Log into the portal website, review week 1 material, and take the week 1 quiz and answer questions on personal profile.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Jul 19th, 2012</p></td><td width="75%"><table>
<tbody>
<tr><th colspan="2">Week 2 - Lighting</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 1 exercise, lighting setups, and lighting reference images for the week 2 exercise. Introduce lighting concepts, lighting sources, motivation, practical lighting, lights in the real world, common light attributes (color, intensity, emit diffuse, emit specular). Demonstrate matching the lighting from the screenshots to scene.</td>
<th>Lab:</th>
<td>Continue with week 2 exercise; create a new project, create a new scene, and begin setup of the scene in Maya with basic objects and light scene to match screenshot.</td>
<th>Homework:</th>
<td>Finish week 2 exercise, match lighting of the reference images. Log into the portal website, review week 2 material, and take the week 2 quiz.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Jul 26th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 3 - Lighting properties and effects</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 2 exercise, match lighting of the reference image. Introduce lighting properties, linking and unlinking lights, shadows, light distances, light glow and optical effects, and optical caustics. Demonstrate the changes of properties for lights and their affect on objects in a scene.</td>
<th>Lab:</th>
<td>Work on week 3 exercise; adjust lighting attributes. Working from the previous scene (the match lighting scene), adjust properties of the lights to match.</td>
<th>Homework:</th>
<td>Finish week 3 exercise, lighting properties. Log into the portal website, review week 3 material, and take the week 3 quiz.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Aug 2nd, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 4 - Materials and material workflow</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 3 exercise. Introduction to material types (Anisotropic, Lambert, Blinn, Phong), material type properties (color, transparency, ambience, incandescence, diffuse), material workflows and processes in Maya (Hypershade and connections). Demonstrate the application of materials and their properties to objects in a scene.</td>
<th>Lab:</th>
<td>Work on midterm assignment; Assign materials to objects and set material properties. Working from the previous scene (the match lighting scene), add materials to scene objects.</td>
<th>Homework:</th>
<td>Finish the scene for the midterm assignment. Log into the portal website, review week 4 material, and take the week 4 quiz.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />Aug 9th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 5 - Midterm</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of midterm assignment turn in midterm. Introduction to UVs in Maya, the UV texture editor, tools available for UV layout, UV mapping coordinates, and object texture mapping types (Automatic, Planar, Cylindrical, Spherical mapping). Demonstrate UV layout on objects using different methods.</td>
<th>Lab:</th>
<td>Finish midterm assignment. Start on week 5 exercise; layout UVs on objects provided using different methods.</td>
<th>Homework:</th>
<td>Finish week 5 exercise, layout UVs. Log into the portal website, review week 5 material, and take the week 5 quiz.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />Aug 16th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 6 - UV layout</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 5 exercise, UV layout. Introduce UV Layout strategies for various objects. Discuss UV layout strategies, and alternatives to Maya UV layout. Demonstrate methods for UV layout methods. Discuss final assignment.</td>
<th>Lab:</th>
<td>Start on week 6 exercise; layout UVs on objects provided using different methods.</td>
<th>Homework:</th>
<td>Finish week 6 exercise, layout UVs continued. Log into the portal website, review week 6 material, and take the week 6 quiz. Start collecting references and develop ideas for final assignment.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />Aug 23rd, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 7 - Texture types</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 6 exercise. Introduce texture creation using Photoshop, Illustrator, other design tools, 2D texture types (Normal, Projection, Stencil), procedural, 3D, and Layered Textures. Discuss file types, their use in textures and rendering, and texture map resolutions. Demonstrate texture design workflow, UV snapshot, using the snapshot in the creation of textures in design tools and working with other tools to create textures.</td>
<th>Lab:</th>
<td>Start on week 7 exercise; export UV snapshot, and create textures with Photoshop for layout.</td>
<th>Homework:</th>
<td>Finish week 7 exercise, texture creation. Log into the portal website, review week 7 material, and take the week 7 quiz. Refine ideas, and create sketches for the final assignment.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />Aug 30th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 8 - Textures and surfacing</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 7 exercise, textures. Introduce surface detailing using bump mapping and normal mapping, applying textures to surfaces using multiple methods, using procedural textures as bump maps. Demonstrate bump map creation using Photoshop and other illustration and design tools, applying procedural textures as a bump maps.</td>
<th>Lab:</th>
<td>Start on week 8 exercise; add detail to objects with created textures, and bump mapping.</td>
<th>Homework:</th>
<td>Finish week 8 exercise, finish texture creation. Log into the portal website, review week 8 material, and take the week 8 quiz. Refine ideas, and create sketches for the final assignment.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />Sep 6th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 9 - Texture utilities</th></tr>
<tr><th style="width: 100px;">Lecture:</th>
<td>Peer critique of week 8 exercise, textures and details. Introduce utility nodes (blend color, remap color, smear, stencil), and their various functions with textures and other nodes in Maya. Review lighting for the final assignment. Demonstrate connections with various utilities in combination with textures and shading.</td>
<th>Lab:</th>
<td>Work on final assignment, create objects and texturing.</td>
<th>Homework:</th>
<td>Continue working on final assignment.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Sep 13th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 10 - Rendering</th></tr>
<tr><th>Lecture:</th>
<td>
<p>Peer critique for final assignment progress. Discuss final rendering, render types (mental ray, software, hardware), rendering engines (scanline, rasterisation, raytracing). Discuss camera setup, attributes and placement. Demonstrate camera and render settings in Maya.</p>
</td>
<th>Lab:</th>
<td>Work on final assignment, setup camera and final rendering options.</td>
<th>Homework:</th>
<td>Finish final assignment and complete any other additional work for credit.</td>
</tr>
</tbody>
</table></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Sep 20th, 2012</p></td><td width="75%"><table class="outline">
<tbody>
<tr><th class="WeekHeading" colspan="2">Week 11 - WeekDesc11</th></tr>
<tr><th style="width: 100px;">Lecture</th>
<td>Final assignment critiques.</td>
<th>Lab:</th>
<td>Finish up work and turn in final assignment.</td>
</tr>
</tbody>
</table></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('GA3311_Studyvin_SU12_id40', $paramsPage);

?>