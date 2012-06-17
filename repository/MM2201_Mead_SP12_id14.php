<?php
require_once('../../phpdocx_pro/classes/CreateDocx.inc');

$docx = new CreateDocx();

$docx->addTemplate('../templates/template1.docx');
$docx->addTemplateVariable('COURSENUM', 'MM2201');
$docx->addTemplateVariable('COURSETITLE', 'Interface Design');
$docx->addTemplateVariable('SESSION', 'Spring 2012');
$docx->addTemplateVariable('INSTRUCTOR', 'William Mead');
$docx->addTemplateVariable('EMAIL', 'wmead@aii.edu');
$docx->addTemplateVariable('PHONE', '530-219-8998');
$docx->addTemplateVariable('AVAILABILITY', 'After class on monday\'s and by appointment');
$docx->addTemplateVariable('WEEKS', '11 Weeks');
$docx->addTemplateVariable('HOURS', '44 Hours');
$docx->addTemplateVariable('LECTURE', '22 Hours');
$docx->addTemplateVariable('LAB', '22 Hours');
$docx->addTemplateVariable('CREDITS', '3 Credits');
$docx->addTemplateVariable('REVISED', '2/4/2012');
$docx->addTemplateVariable('CLASSTIME', 'Mondays from 1:00 pm to 5:00 pm');
$docx->addTemplateVariable('PREREQS', 'Permission of Academic Director/Advisor');
$html = '<style> p { font-family:"Arial Narrow"; font-size:10pt; } </style>
<p><strong>Course Description:</strong><br />This course is an exploration of the synthesis of visual design and principles of human interactivity. This course examines the conceptual and practical design of interfaces.</p>
 <p><strong>Course focus:</strong></p><p>The focus of this course is on interface design elements and design patterns commonly found in web interfaces</p>';

$docx->replaceTemplateVariableByHTML('COURSEDESCRIPTION', 'block', $html , array('isFile' => false, 'parseDivsAsPs' => false, 'downloadImages' => false));

$paramsPage = array( 'titlePage' => 1, 'orient' => 'normal', 'top' => 800, 'bottom' => 800, 'right' => 800, 'left' => 800);

$docx->createDocxAndDownload('MM2201_Mead_SP12_id14', $paramsPage);

?>