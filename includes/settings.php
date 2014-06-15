<?php

//Database constants

define ("DB_HOST", "localhost");
define ("DB_USER", "root");
define ("DB_PWORD", "root");
define ("DB_NAME", "syllabuslocal");
define ("KEY", "CMJ0TfoU");

//PHPDocX Folder Name
define("PHPDOCX", "phpdocx_pro_conv");

//PHPDocX MSWord Template File
define("THE_TEMPLATE", "template2.docx");

//Server address:
define("THE_SERVER", "http://localhost/syllabuslocal");
define("FULL_ADDRESS", "http://localhost/syllabuslocal/"); //remove subdomain for PHPDocX

//regular expressions
define ("RE_PHONE", "/(([01][\.\- +]\(\d{3}\)[\.\- +]?)|([01][\.\- +]\d{3}[\.\- +])|(\(\d{3}\) ?)|(\d{3}[- \.]))?\d{3}[- \.]\d{4}/");
define ("RE_EMAIL", "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/");
define ("RE_NAME", "/^[a-zA-Z]+(([\'\- ][a-zA-Z])?[a-zA-Z]*)*$/");
define ("RE_PASSWORD", "/^\S{4}\S+$/");

//these need to be changed to windows paths for windows. Use a foreward slash

define ("IMG_PATH", "/Applications/MAMP/htdocs/syllabuslocal/picts/");
define ("RESIZED_PATH", "/Applications/MAMP/htdocs/syllabuslocal/resized/");
define ("THUMB_PATH","/Applications/MAMP/htdocs/syllabuslocal/thumbs/");


// For XAMPP
/***********
define ("IMG_PATH", "C:/xampp/htdocs/syllabusgen/picts/");
define ("RESIZED_PATH", "C:/xampp/htdocs/syllabusgen/resized/");
define ("THUMB_PATH","C:/xampp/htdocs/syllabusgen/thumbs/");
*************/

// For common linux server setups... 
/***********
define ("IMG_PATH", "/home/aiwired/public_html/syllabus/picts/"); //change username to your username
define ("RESIZED_PATH", "/home/aiwired/public_html/syllabus/resized/");
define ("THUMB_PATH","/home/aiwired/public_html/syllabus/thumbs/");
***********/


?>