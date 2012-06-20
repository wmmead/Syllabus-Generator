<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'MM3323');
$docx->addTemplateVariable('COURSETITLE', 'Advanced Web Based Programming');
$docx->addTemplateVariable('SESSION', 'Spring 2011');
$docx->addTemplateVariable('INSTRUCTOR', 'William Mead');
$docx->addTemplateVariable('EMAIL', 'wmead@aii.edu');
$docx->addTemplateVariable('PHONE', '530-219-8998');
$docx->addTemplateVariable('AVAILABILITY', 'I am available pretty much all the time');
$docx->addTemplateVariable('WEEKS', '5.5 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '4/4/2011');
$docx->addTemplateVariable('CLASSTIME', 'Tuesdays from 8:00 am to 12:00 pm and Wednesdays from 8:00 am to 12:00 pm');
$docx->addTemplateVariable('PREREQS', 'MM2233 Intermediate Web-based Programming');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course is an exploration of scripting and programming languages used to develop advanced "server-side" Web applications. Students learn how to create programs capable of storing and retrieving data from servers supporting advanced interactivity.</p>
<p><strong>Course Focus:</strong><br />Lets focus on making some cool stuff.</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<ul>
<li>Understand the differences between client-side, server-side, and server-parsed languages </li>
<li>Understand the basics of server, as opposed to workstation design and software</li>
<li>Understand common web server software (e.g., Apache, IIS) configuration the differences between client-side, server-side, and server-parsed languages </li>
<li>Understand how CGI (Common Gateway Interface) links web forms to back-end programs</li>
<li>Apply basic Perl to create a functional CGI script </li>
<li>Understand how server-parsed languages allow access to server variables and resources</li>
<li>Apply basic PHP to create a functional server-parsed program</li>
<li>Understand the basics of web-database links</li>
<li>Understand the use of CGI and PHP in e-commerce systems</li>
</ul>

';

$docx->replaceTemplateVariableByHTML('COMPETENCIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Required Texts:</strong> None</p>';

$docx->replaceTemplateVariableByHTML('BOOKS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Method of Instruction:</strong> We teach u <span style="text-decoration: underline;"><em><strong>real</strong></em></span> good.</p>
<p><strong>Materials and Supplies:</strong> We have lots of important materials</p>
<p><strong>Estimated Homework Hours:</strong> 4 hours per week</p>
<p><strong>Technology Required:</strong> We are gonna use computers and stuff.</p>
';

$docx->replaceTemplateVariableByHTML('DETAILS', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Additional Course Requirements:</strong><br />You must be a good student.</p>
';

$docx->replaceTemplateVariableByHTML('ADDREQ', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Process for Evaluation:</strong></p>
<table>
<tr><td>Stuff</td><td>100%</td></tr>
<tr><td><strong>Total</strong></td><td><strong>100%</strong></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('EVALUATION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>School Wide Grading Policies</strong></p>
<ul>
<li>cheese!</li>
</ul> ';

$docx->replaceTemplateVariableByHTML('GRADINGPOLICIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>sdfsdfsdfs</strong></p>
<p>sdfsdfs</p>

';

$docx->replaceTemplateVariableByHTML('SECTION1', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>section 2</strong></p>
<p>some stuff for section 2</p>

';

$docx->replaceTemplateVariableByHTML('SECTION2', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$html = '<style> p, ul, table { font-family:"Arial Narrow"; font-size:10pt; } </style>
<table width="100%">
<tr><td width="25%"><p><strong>Meeting #</strong>1<br />Apr 4th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>2<br />Apr 11th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>3<br />Apr 18th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>4<br />Apr 25th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>5<br />May 2nd, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>6<br />May 9th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>7<br />May 16th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>8<br />May 23rd, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>9<br />May 30th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>10<br />Jun 6th, 2011</p></td><td width="75%"><p>No class cause of the holiday</p></td></tr>
<tr><td width="25%"><p><strong>Meeting #</strong>11<br />Jun 13th, 2011</p></td><td width="75%"><p><strong>Lecture:</strong> We will have a really exciting lecture.</p>
<p><strong>Lab:</strong> We will do some really cool stuff in class</p>
<p><strong>Homework:</strong> You will do a bunch of stuff at home</p></td></tr>
</table> ';

$docx->replaceTemplateVariableByHTML('ACTIVITIES', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('MM3323_Mead_SP11_id10', $paramsPage);

?>