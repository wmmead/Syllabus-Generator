-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2012 at 10:54 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `syllabusgen`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `meeting` tinyint(2) NOT NULL,
  `activity` text,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` VALUES(34, 9, 1, '<p><strong>Classwork:</strong> here is some classwork</p>\r\n<p><strong>Homework</strong>: here is some homework</p>\r\n<p><strong>Quizes</strong>: Get ready for the quiz</p>');
INSERT INTO `activities` VALUES(35, 9, 2, '<p>We do some stuff there</p>');
INSERT INTO `activities` VALUES(36, 9, 3, '');
INSERT INTO `activities` VALUES(37, 9, 4, '<p>Some more stuff in week 4</p>');
INSERT INTO `activities` VALUES(38, 9, 5, '');
INSERT INTO `activities` VALUES(39, 9, 6, '');
INSERT INTO `activities` VALUES(40, 9, 7, '');
INSERT INTO `activities` VALUES(41, 9, 8, '');
INSERT INTO `activities` VALUES(42, 9, 9, '');
INSERT INTO `activities` VALUES(43, 9, 10, '');
INSERT INTO `activities` VALUES(44, 9, 11, '');
INSERT INTO `activities` VALUES(45, 10, 1, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(46, 10, 2, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(47, 10, 3, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(48, 10, 4, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(49, 10, 5, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(50, 10, 6, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(51, 10, 7, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(52, 10, 8, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(53, 10, 9, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(54, 10, 10, '<p>No class cause of the holiday</p>');
INSERT INTO `activities` VALUES(55, 10, 11, '<p><strong>Lecture:</strong> We will have a really exciting lecture.</p>\r\n<p><strong>Lab:</strong> We will do some really cool stuff in class</p>\r\n<p><strong>Homework:</strong> You will do a bunch of stuff at home</p>');
INSERT INTO `activities` VALUES(56, 11, 1, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(57, 11, 2, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(58, 11, 3, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(59, 11, 4, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(60, 11, 5, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(61, 11, 6, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(62, 11, 7, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(63, 11, 8, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(64, 11, 9, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(65, 11, 10, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(66, 11, 11, '<p><strong>Lecture:</strong> Here is the lecture for the week</p>\r\n<p><strong>Lab:</strong> In lab today we are going to do a lot of really important work for the current project we are working on.</p>\r\n<p><strong>Homework:</strong> For homework we will be working on all sorts of reading and practice.</p>');
INSERT INTO `activities` VALUES(67, 12, 1, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(68, 12, 2, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(69, 12, 3, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(70, 12, 4, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(71, 12, 5, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(72, 12, 6, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(73, 12, 7, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(74, 12, 8, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(75, 12, 9, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(76, 12, 10, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(77, 12, 11, '<p>sdfasdfa</p>');
INSERT INTO `activities` VALUES(78, 13, 1, '<p><strong>Lab:</strong> We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong> We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong> Do stuff for homework</p>');
INSERT INTO `activities` VALUES(79, 13, 2, '<p>Holiday no class</p>');
INSERT INTO `activities` VALUES(80, 13, 3, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(81, 13, 4, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(82, 13, 5, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(83, 13, 6, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(84, 13, 7, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(85, 13, 8, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(86, 13, 9, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(87, 13, 10, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(88, 13, 11, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(89, 14, 1, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(90, 14, 2, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(91, 14, 3, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(92, 14, 4, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(93, 14, 5, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(94, 14, 6, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(95, 14, 7, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(96, 14, 8, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(97, 14, 9, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(98, 14, 10, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(99, 14, 11, '<p><strong>Lab:</strong>&nbsp;We will do some stuff in .</p>\r\n<p><strong>Lecture:</strong>&nbsp;We will talk about some stuff in class.</p>\r\n<p><strong>Homework:</strong>&nbsp;Do stuff for homework</p>');
INSERT INTO `activities` VALUES(100, 15, 1, '');
INSERT INTO `activities` VALUES(101, 15, 2, '');
INSERT INTO `activities` VALUES(102, 15, 3, '');
INSERT INTO `activities` VALUES(103, 15, 4, '');
INSERT INTO `activities` VALUES(104, 15, 5, '');
INSERT INTO `activities` VALUES(105, 15, 6, '');
INSERT INTO `activities` VALUES(106, 15, 7, '');
INSERT INTO `activities` VALUES(107, 15, 8, '');
INSERT INTO `activities` VALUES(108, 15, 9, '');
INSERT INTO `activities` VALUES(109, 15, 10, '');
INSERT INTO `activities` VALUES(110, 15, 11, '');
INSERT INTO `activities` VALUES(111, 16, 1, '<p class="p1"><strong>Lecture:</strong> Understanding server side scripting</p>\r\n<p class="p1"><strong>Lab:</strong> Basic Language fundamentals, part 1, Include function</p>\r\n<p class="p1"><strong>Homework: </strong>Dice game project</p>');
INSERT INTO `activities` VALUES(112, 16, 2, '<p class="p1"><strong>Lecture:</strong> Loops, Arrays and Conditionals</p>\r\n<p class="p1"><strong>Lab:</strong> Basic language fundamentals, part 2</p>\r\n<p class="p1"><strong>Homework: </strong>Dice game expanded</p>');
INSERT INTO `activities` VALUES(113, 16, 3, '<p class="p1"><strong>Lecture:</strong> Forms, User Input and Regular Expressions</p>\r\n<p class="p1"><strong>Lab:</strong> Building forms and passing data to the server</p>\r\n<p class="p1"><strong>Homework: </strong>Output user data assignment</p>');
INSERT INTO `activities` VALUES(114, 16, 4, '<p class="p1"><strong>Lecture:</strong> Introduction to Databases and Storing Information</p>\r\n<p class="p1"><strong>Lab:</strong> Connecting to MySQL and adding records.</p>\r\n<p class="p1"><strong>Homework: </strong>Build your member table.</p>');
INSERT INTO `activities` VALUES(115, 16, 5, '<p class="p1"><strong>Lecture:</strong> The power of CRUD and the importance of Security</p>\r\n<p class="p1"><strong>Lab: </strong>Adding functionality to our member table</p>\r\n<p class="p1"><strong>Homework:</strong> Implement CRUD in member table</p>');
INSERT INTO `activities` VALUES(116, 16, 6, '<p class="p1"><strong>Lecture:</strong> Session Variables, Authentication and Encryption</p>\r\n<p class="p1"><strong>Lab:</strong> Further expanding the Member Database Application</p>\r\n<p class="p1"><strong>Homework:</strong> Work on Member Database Project</p>');
INSERT INTO `activities` VALUES(117, 16, 7, '<p class="p1"><strong>Lecture:</strong> PHP, images and the GD2 library</p>\r\n<p class="p1"><strong>Lab:</strong> Upload images with PHP, resize and create thumbnails.</p>\r\n<p class="p1"><strong>Homework:</strong> Work on Member Database Project.</p>');
INSERT INTO `activities` VALUES(118, 16, 8, '<p>NO CLASS - Labor Day!</p>');
INSERT INTO `activities` VALUES(119, 16, 9, '<p class="p1"><strong>Lecture:</strong> Pagination and creating view options</p>\r\n<p class="p1"><strong>Lab: </strong>Adding pagination to the member database</p>\r\n<p class="p1"><strong>Homework: </strong>Work on Member Database Project.</p>');
INSERT INTO `activities` VALUES(120, 16, 10, '<p class="p1"><strong>Lecture:</strong> Using PHP to write to files</p>\r\n<p class="p1"><strong>Lab:</strong> Create a log file for Member Database Project</p>\r\n<p class="p1"><strong>Homework:</strong> Work on Member Database Project.</p>');
INSERT INTO `activities` VALUES(121, 16, 11, '<p class="p1"><strong>Lecture:</strong> Final Project Presentations</p>\r\n<p class="p1"><strong>Lab: </strong>Final project assessments</p>\r\n<p class="p1"><strong>Homework:</strong> none</p>');
INSERT INTO `activities` VALUES(122, 17, 1, '');
INSERT INTO `activities` VALUES(123, 17, 2, '');
INSERT INTO `activities` VALUES(124, 17, 3, '');
INSERT INTO `activities` VALUES(125, 17, 4, '');
INSERT INTO `activities` VALUES(126, 17, 5, '');
INSERT INTO `activities` VALUES(127, 17, 6, '');
INSERT INTO `activities` VALUES(128, 17, 7, '');
INSERT INTO `activities` VALUES(129, 17, 8, '');
INSERT INTO `activities` VALUES(130, 17, 9, '');
INSERT INTO `activities` VALUES(131, 17, 10, '');
INSERT INTO `activities` VALUES(132, 17, 11, '');
INSERT INTO `activities` VALUES(133, 18, 1, '');
INSERT INTO `activities` VALUES(134, 18, 2, '');
INSERT INTO `activities` VALUES(135, 18, 3, '');
INSERT INTO `activities` VALUES(136, 18, 4, '');
INSERT INTO `activities` VALUES(137, 18, 5, '');
INSERT INTO `activities` VALUES(138, 18, 6, '');
INSERT INTO `activities` VALUES(139, 18, 7, '');
INSERT INTO `activities` VALUES(140, 18, 8, '');
INSERT INTO `activities` VALUES(141, 18, 9, '');
INSERT INTO `activities` VALUES(142, 18, 10, '');
INSERT INTO `activities` VALUES(143, 18, 11, '');
INSERT INTO `activities` VALUES(144, 19, 1, '');
INSERT INTO `activities` VALUES(145, 19, 2, '');
INSERT INTO `activities` VALUES(146, 19, 3, '');
INSERT INTO `activities` VALUES(147, 19, 4, '');
INSERT INTO `activities` VALUES(148, 19, 5, '');
INSERT INTO `activities` VALUES(149, 19, 6, '');
INSERT INTO `activities` VALUES(150, 19, 7, '');
INSERT INTO `activities` VALUES(151, 19, 8, '');
INSERT INTO `activities` VALUES(152, 19, 9, '');
INSERT INTO `activities` VALUES(153, 19, 10, '');
INSERT INTO `activities` VALUES(154, 19, 11, '');
INSERT INTO `activities` VALUES(155, 20, 1, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Welcome and Introduction</strong></li>\r\n<li><strong>Course outline and discussion of Syllabus</strong></li>\r\n<li><strong>Discussion about transition and expectations in college</strong></li>\r\n<li><strong>Differences between High School expectations and College expectations</strong></li>\r\n<li><strong>Roadmap to success</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(156, 20, 2, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Career Service and Professional Development/NETWORKING</strong></li>\r\n<li><strong>Expectations in your Career industry</strong></li>\r\n<li><strong>Ethics in the business world</strong></li>\r\n<li><strong>Working with superiors and co-workers</strong></li>\r\n<li><strong>Attitude in the workplace</strong></li>\r\n<li><strong>Resumes/cover letter/interview questions/portfolios/ internships</strong></li>\r\n<li><strong>myaicampus</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(157, 20, 3, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>What kind of learner are you?</strong></li>\r\n<li><strong>Personality Test</strong></li>\r\n<li><strong>Time management?</strong></li>\r\n<li><strong>Stress Management</strong></li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<ul>\r\n<li><strong>Watching the credits</strong></li>\r\n<li><strong>What&rsquo;s my major really?</strong></li>\r\n<li><strong>Industry examples</strong></li>\r\n<li><strong>How my Industry Works</strong></li>\r\n<li><strong>Jobs and roles - Who does what/production process</strong></li>\r\n<li><strong>Research companies you&rsquo;d want to work for &ndash; what do they do?</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(158, 20, 4, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Registration</strong></li>\r\n<li><strong>Program matrix and degree audit</strong></li>\r\n<li><strong>Goal setting</strong></li>\r\n<li><strong>myaicampus</strong></li>\r\n<li><strong>How to register</strong></li>\r\n<li><strong>Online classes</strong><strong>&nbsp;</strong></li>\r\n<li><strong>Campus library </strong></li>\r\n<li><strong>Plagiarism</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(159, 20, 5, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Student Handbook</strong></li>\r\n<li><strong>Resources on campus</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(160, 20, 6, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Academic/Study Skills</strong></li>\r\n<li><strong>Communication skills</strong></li>\r\n<li><strong>Note Taking skills, reading skills study skills organization skills research skills, and writing skills</strong></li>\r\n<li><strong>Instructors as resources</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(161, 20, 7, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>STUDENT WORK!</strong></li>\r\n<li><strong>Critiquing</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(162, 20, 8, '<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>&nbsp;&nbsp;Reviews </strong></li>\r\n<li><strong>&nbsp;&nbsp;Navigating the Matrix &ndash; value of classes</strong></li>\r\n<li><strong>&nbsp;&nbsp;Being physically healthy and minimizing stress in college</strong></li>\r\n<li><strong>&nbsp;Organizational Skills</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(163, 20, 9, '<ul>\r\n<li><strong>Understanding Financial Health</strong></li>\r\n<li><strong>Building credit</strong></li>\r\n<li><strong>Managing daily, monthly, yearly expenses</strong></li>\r\n<li><strong>Understanding student loan finances &amp; repayment plans</strong></li>\r\n<li><strong>How to make wise financial decisions</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(164, 20, 10, '<ul>\r\n<li><strong>MAA GAD Panel Discussion </strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(165, 20, 11, '<ul>\r\n<li><strong>Meet at portfolio show to visit the work of the graduating students&nbsp; - 6pm in the Warehouse</strong></li>\r\n</ul>');
INSERT INTO `activities` VALUES(166, 21, 1, '<p>HTML Review</p>');
INSERT INTO `activities` VALUES(167, 21, 2, '<p>Dreamweaver Review</p>');
INSERT INTO `activities` VALUES(168, 21, 3, '<p>User-Centered Design</p>');
INSERT INTO `activities` VALUES(169, 21, 4, '<p>Color, Texture, and Pattern</p>');
INSERT INTO `activities` VALUES(170, 21, 5, '<p>Scripting and CSS Tricks</p>');
INSERT INTO `activities` VALUES(171, 21, 6, '<p>Writing for the Web</p>');
INSERT INTO `activities` VALUES(172, 21, 7, '<p>Web Typography</p>');
INSERT INTO `activities` VALUES(173, 21, 8, '<p>From PSD to HTML</p>');
INSERT INTO `activities` VALUES(174, 21, 9, '<p>HTML5 and CSS3</p>');
INSERT INTO `activities` VALUES(175, 21, 10, '<p>More jQuery Plugins</p>');
INSERT INTO `activities` VALUES(176, 21, 11, '<p>Final Project Lab</p>');
INSERT INTO `activities` VALUES(177, 22, 1, '');
INSERT INTO `activities` VALUES(178, 22, 2, '');
INSERT INTO `activities` VALUES(179, 22, 3, '');
INSERT INTO `activities` VALUES(180, 22, 4, '');
INSERT INTO `activities` VALUES(181, 22, 5, '');
INSERT INTO `activities` VALUES(182, 22, 6, '');
INSERT INTO `activities` VALUES(183, 22, 7, '');
INSERT INTO `activities` VALUES(184, 22, 8, '');
INSERT INTO `activities` VALUES(185, 22, 9, '');
INSERT INTO `activities` VALUES(186, 22, 10, '');
INSERT INTO `activities` VALUES(187, 22, 11, '');
INSERT INTO `activities` VALUES(188, 23, 1, '<p>Introduction; History of the Internet; How the WWW works; Web usability</p>');
INSERT INTO `activities` VALUES(189, 23, 2, '<p>HTML Basics</p>');
INSERT INTO `activities` VALUES(190, 23, 3, '<p>More HTML; Intro to CSS</p>');
INSERT INTO `activities` VALUES(191, 23, 4, '<p>Web Color</p>');
INSERT INTO `activities` VALUES(192, 23, 5, '<p>Web Graphics</p>');
INSERT INTO `activities` VALUES(193, 23, 6, '<p>CSS Layout</p>');
INSERT INTO `activities` VALUES(194, 23, 7, '<p>HTML Challenges</p>');
INSERT INTO `activities` VALUES(195, 23, 8, '<p>Using Dreamweaver</p>');
INSERT INTO `activities` VALUES(196, 23, 9, '<p>HTML Tables</p>');
INSERT INTO `activities` VALUES(197, 23, 10, '<p>HTML Forms</p>');
INSERT INTO `activities` VALUES(198, 23, 11, '<p>Final Project Lab</p>');
INSERT INTO `activities` VALUES(199, 24, 1, '');
INSERT INTO `activities` VALUES(200, 24, 2, '');
INSERT INTO `activities` VALUES(201, 24, 3, '');
INSERT INTO `activities` VALUES(202, 24, 4, '');
INSERT INTO `activities` VALUES(203, 24, 5, '');
INSERT INTO `activities` VALUES(204, 24, 6, '');
INSERT INTO `activities` VALUES(205, 24, 7, '');
INSERT INTO `activities` VALUES(206, 24, 8, '');
INSERT INTO `activities` VALUES(207, 24, 9, '');
INSERT INTO `activities` VALUES(208, 24, 10, '');
INSERT INTO `activities` VALUES(209, 24, 11, '');
INSERT INTO `activities` VALUES(210, 25, 1, '');
INSERT INTO `activities` VALUES(211, 25, 2, '');
INSERT INTO `activities` VALUES(212, 25, 3, '');
INSERT INTO `activities` VALUES(213, 25, 4, '');
INSERT INTO `activities` VALUES(214, 25, 5, '');
INSERT INTO `activities` VALUES(215, 25, 6, '');
INSERT INTO `activities` VALUES(216, 25, 7, '');
INSERT INTO `activities` VALUES(217, 25, 8, '');
INSERT INTO `activities` VALUES(218, 25, 9, '');
INSERT INTO `activities` VALUES(219, 25, 10, '');
INSERT INTO `activities` VALUES(220, 25, 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `pubdate` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `booktype` tinyint(1) NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` VALUES(26, 16, 'Murach', 'Joel Murach', 'Mike Murach & Associates', '2010', '978-1890774561', 'http://www.amazon.com/Murachs-PHP-MySQL-Murach-Reference/dp/1890774561/ref=sr_1_1?ie=UTF8&qid=1340081633&sr=8-1&keywords=php+murach', 2, 1);
INSERT INTO `books` VALUES(27, 17, 'Creating Games with Unity and Maya: How to Develop Fun and Marketable 3D Games', 'Adam Watkins', 'Focal Press', 'July 21, 2011', '978-0240818818', 'http://www.amazon.com/Creating-Games-Unity-Maya-ebook/dp/B005A3K4NK/ref=dp_kinw_strp_1?ie=UTF8&m=AG56TWVU5XWC2', 2, 1);
INSERT INTO `books` VALUES(28, 17, 'Google SketchUp for Game Design: Beginner', 'Robin de Jongh', 'Packt Publishing', 'November 25, 2011', '978-1849691345', 'http://www.amazon.com/Google-SketchUp-Game-Design-ebook/dp/B006EEJSK4/ref=dp_kinw_strp_1?ie=UTF8&m=AG56TWVU5XWC2', 2, 2);
INSERT INTO `books` VALUES(29, 18, 'Database Concepts, 5th ed.', ' David M. Kroenke', 'Pearson Education', '2010', '978-0138018801', 'http://www.amazon.com/Database-Concepts-Edition-David-Kroenke/dp/0138018804/ref=sr_1_1?ie=UTF8&qid=1340167076&sr=8-1&keywords=database+concepts', 2, 1);
INSERT INTO `books` VALUES(30, 20, 'Current AiCASAC Student Handbook', ' Ai', 'Ai', ' 2012', ' none', ' ', 1, 1);
INSERT INTO `books` VALUES(31, 23, 'Head First HTML with CSS & XHTML', 'Elisabeth Freeman and Eric Freeman', 'Oâ€™Reilly Media', '2005', '059610197X', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `term_id` (`term_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` VALUES(15, 12, 13, 16, 0, 0);
INSERT INTO `classes` VALUES(16, 10, 1, 16, 0, 2);
INSERT INTO `classes` VALUES(17, 15, 18, 16, 0, 0);
INSERT INTO `classes` VALUES(18, 13, 15, 16, 0, 0);
INSERT INTO `classes` VALUES(19, 5, 20, 16, 0, 0);
INSERT INTO `classes` VALUES(20, 23, 16, 16, 0, 2);
INSERT INTO `classes` VALUES(21, 20, 21, 16, 0, 2);
INSERT INTO `classes` VALUES(22, 21, 21, 16, 0, 0);
INSERT INTO `classes` VALUES(23, 11, 21, 16, 0, 0);
INSERT INTO `classes` VALUES(24, 24, 21, 16, 0, 0);
INSERT INTO `classes` VALUES(25, 31, 25, 16, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_days_times`
--

CREATE TABLE `class_days_times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `classday` varchar(20) NOT NULL,
  `starttime` varchar(20) NOT NULL,
  `endtime` varchar(20) NOT NULL,
  `ordr` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `class_days_times`
--

INSERT INTO `class_days_times` VALUES(8, 15, 'Monday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(9, 16, 'Friday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(10, 17, 'Monday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(11, 18, 'Tuesday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(12, 19, 'Friday', '5:30 pm', '10:30 pm', 1);
INSERT INTO `class_days_times` VALUES(13, 20, 'Thursday', '10:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(14, 23, 'Wednesday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(15, 21, 'Tuesday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(16, 22, 'Wednesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(17, 24, 'Thursday', '8:00 am', '12:00 pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `materials` text NOT NULL,
  `methods` text NOT NULL,
  `tech` text NOT NULL,
  `hwhrs` varchar(255) NOT NULL,
  `officehrs` varchar(255) NOT NULL,
  `add_req` text NOT NULL,
  `focus` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` VALUES(7, 15, '', '', '', '', '', '', '');
INSERT INTO `class_details` VALUES(8, 16, '<p>Digital storage device, notepad and pen</p>', '<p>Lecture and Lab</p>', '<p>Computer lab, Adobe Creative Suite, XAMPP or similar, Internet Access</p>', '4 hours per week', 'On Fridays from 4 pm to 5 pm and by appointment', '', '');
INSERT INTO `class_details` VALUES(9, 17, '', '', '', '4', 'Mondays from 12-1pm and by appointment', '', '');
INSERT INTO `class_details` VALUES(10, 18, '<p><span style="font-size: small;">Notebook and USB Thumb drive or other storage medium</span></p>', '<p>Lecture and lab</p>', '<p><span style="font-size: small;">Computer lab, Internet connection, Web Browsers, HTML editor or tool as found in most word processing software and others provided in class.</span></p>', '2 - 3 hours per week', 'Tuesdays from 4:30 - 5:30 PM and by appointment', '', '');
INSERT INTO `class_details` VALUES(11, 19, '<p class="Text">Digital storage device, notebook and pen</p>', '<p>Lecture and lab</p>', '<p>Computer lab, Adobe Creative Suite, Internet access, Camtasia Studio, Captivate, video and audio recording devices</p>', '4 hours per week', 'Mondays 12-1, Tuesdays 12-1 and by appointment', '', '');
INSERT INTO `class_details` VALUES(12, 20, '<ul>\r\n<li>A folder or binder to collect class materials.</li>\r\n<li>Note-taking materials, including paper, pens, pencils.</li>\r\n<li>Class notes, handouts, and homework.</li>\r\n</ul>', '<p>Lecture and discussion</p>', '<p>Access to MyAiCampus, Microsoft Word</p>', '1', 'By appointment', '<p>Not having a computer at home is not an excuse for not completing assignments &ndash; computer labs on campus are readily available.</p>\r\n<p>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER ATTENDANCE HAS BEEN TAKEN&nbsp;</p>\r\n<p>Late work receives a grade of zero.</p>\r\n<p><strong>It is your own responsibility to know what material is covered in class and what all the assignments are.&nbsp; <span style="text-decoration: underline;">Being absent is <em>not</em> an excuse for not knowing information covered in class or for missing an assignment</span>. Use your group members as your first resource!</strong></p>\r\n<p><strong>Professional behavior is expected from all students while in class.</strong> Rude, inappropriate, sexually explicit or harassing language or actions will not be tolerated in this class. <strong>If you behave in an unprofessional manner you will be asked to leave the classroom immediately. </strong>You will then lose participation points for the day, as well as points for any projects that were due that day.</p>', '');
INSERT INTO `class_details` VALUES(13, 23, '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these.</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(14, 21, '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(15, 22, '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these.</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(16, 24, '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these.</p>', '4 hours per week', 'By appointment', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `competencies`
--

CREATE TABLE `competencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `competency` text NOT NULL,
  `type` tinyint(1) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=459 ;

--
-- Dumping data for table `competencies`
--

INSERT INTO `competencies` VALUES(78, 10, 0, 'Understand the differences between client-side, server-side, and server-parsed languages ', 0, 0, 1);
INSERT INTO `competencies` VALUES(79, 10, 0, 'Understand the basics of server, as opposed to workstation design and software', 0, 0, 2);
INSERT INTO `competencies` VALUES(80, 10, 0, 'Understand common web server software (e.g., Apache, IIS) configuration the differences between client-side, server-side, and server-parsed languages ', 0, 0, 3);
INSERT INTO `competencies` VALUES(81, 10, 0, 'Understand how CGI (Common Gateway Interface) links web forms to back-end programs', 0, 0, 4);
INSERT INTO `competencies` VALUES(82, 10, 0, 'Apply basic Perl to create a functional CGI script ', 0, 0, 5);
INSERT INTO `competencies` VALUES(83, 10, 0, 'Understand how server-parsed languages allow access to server variables and resources', 0, 0, 6);
INSERT INTO `competencies` VALUES(84, 10, 0, 'Apply basic PHP to create a functional server-parsed program', 0, 0, 7);
INSERT INTO `competencies` VALUES(85, 10, 0, 'Understand the basics of web-database links', 0, 0, 8);
INSERT INTO `competencies` VALUES(86, 10, 0, 'Understand the use of CGI and PHP in e-commerce systems', 0, 0, 9);
INSERT INTO `competencies` VALUES(139, 5, 0, 'Understand and identify a variety of methods of computer-based training (CBT).', 0, 0, 1);
INSERT INTO `competencies` VALUES(140, 5, 0, 'Analyze audience and instructional needs for effective CBT design.', 0, 0, 2);
INSERT INTO `competencies` VALUES(141, 5, 0, 'Apply the basic principles of instructional design to the organization of content.', 0, 0, 3);
INSERT INTO `competencies` VALUES(142, 5, 0, 'Develop a concept for an instructional project.', 0, 0, 4);
INSERT INTO `competencies` VALUES(143, 5, 0, 'Support instructional needs effectively with multimedia elements including sound, video, and animation.', 0, 0, 5);
INSERT INTO `competencies` VALUES(144, 5, 0, 'Design and produce an interactive instructional project.', 0, 0, 6);
INSERT INTO `competencies` VALUES(167, 1, 0, 'Combine principles of design and interactivity to develop user-centered interface concepts.', 0, 0, 1);
INSERT INTO `competencies` VALUES(168, 1, 0, 'Use digital type as an expressive and informational tool of communication. ', 0, 0, 2);
INSERT INTO `competencies` VALUES(169, 1, 0, 'Use color as an expressive and informational tool of communication.', 0, 0, 3);
INSERT INTO `competencies` VALUES(170, 1, 0, 'Understand the role of timing in an interactive experience.', 0, 0, 4);
INSERT INTO `competencies` VALUES(171, 1, 0, 'Understand and apply principles of grid structures to layout navigational systems.', 0, 0, 5);
INSERT INTO `competencies` VALUES(189, 12, 0, 'Articulate and solve basic problems of form in space through line and mass.', 0, 0, 1);
INSERT INTO `competencies` VALUES(190, 12, 0, 'Learn to layout a drawing: use sighting techniques to create object relationships on paper which relate convincingly to what is being observed.', 0, 0, 2);
INSERT INTO `competencies` VALUES(191, 12, 0, 'Begin to control the direction of observed contour line and to control line weight as it relates to contour edge and outline.', 0, 0, 3);
INSERT INTO `competencies` VALUES(192, 12, 0, 'Use the elements and principles of design to compose a drawing based on observation.', 0, 0, 4);
INSERT INTO `competencies` VALUES(193, 12, 0, 'Develop ideas through the thumbnail drawing process.', 0, 0, 5);
INSERT INTO `competencies` VALUES(194, 12, 0, 'Analyze drawings and, using acquired vocabulary, identify opportunities for improvement.', 0, 0, 6);
INSERT INTO `competencies` VALUES(195, 12, 0, 'Be aware of the art historical context of drawing.', 0, 0, 7);
INSERT INTO `competencies` VALUES(196, 12, 0, 'Generate drawings that convey differences in lighting and value.', 0, 0, 8);
INSERT INTO `competencies` VALUES(197, 12, 0, 'Use basic drawing tools: pencils of varying harness, charcoal and papers.', 0, 0, 9);
INSERT INTO `competencies` VALUES(198, 12, 0, '"See" value intervals and translate what is seen to the two-dimensional surface.', 0, 0, 10);
INSERT INTO `competencies` VALUES(199, 12, 0, 'Generate drawings that utilize economy of line.', 0, 0, 11);
INSERT INTO `competencies` VALUES(200, 12, 0, 'Acquire the habit of keeping a sketchbook to record drawn observations, thumbnail ideas and notes.', 0, 0, 12);
INSERT INTO `competencies` VALUES(201, 12, 0, 'Demonstrate drawing techniques and language.', 0, 0, 13);
INSERT INTO `competencies` VALUES(202, 12, 0, 'Demonstrate critical thinking skills.', 0, 0, 14);
INSERT INTO `competencies` VALUES(203, 12, 0, 'Demonstrate freehand and mechanical hand drawing construction processes.', 0, 0, 15);
INSERT INTO `competencies` VALUES(204, 13, 0, 'Understand basic database structure and design.', 0, 0, 1);
INSERT INTO `competencies` VALUES(205, 13, 0, 'Create and manipulate online databases.', 0, 0, 2);
INSERT INTO `competencies` VALUES(206, 13, 0, 'Understand online applications of databases.', 0, 0, 3);
INSERT INTO `competencies` VALUES(207, 13, 0, 'Access and manipulate online databases.', 0, 0, 4);
INSERT INTO `competencies` VALUES(208, 14, 0, 'Research a topic and formulate an effective project proposal.', 0, 0, 1);
INSERT INTO `competencies` VALUES(209, 14, 0, 'Design, write, and present an effective project proposal.', 0, 0, 2);
INSERT INTO `competencies` VALUES(210, 14, 0, 'Analyze, prioritize and sequence project tasks.', 0, 0, 3);
INSERT INTO `competencies` VALUES(211, 14, 0, 'Organize project materials into information structures and interface designs.', 0, 0, 4);
INSERT INTO `competencies` VALUES(212, 14, 0, 'Effectively prepare assets for implementation.', 0, 0, 5);
INSERT INTO `competencies` VALUES(213, 14, 0, 'Produce an original interactive project that incorporates multimedia elements.', 0, 0, 6);
INSERT INTO `competencies` VALUES(214, 7, 0, 'Upon successful completion of this course, the student should be able to:', 0, 0, 1);
INSERT INTO `competencies` VALUES(215, 7, 0, 'Research technical and design needs of project.', 0, 0, 2);
INSERT INTO `competencies` VALUES(216, 7, 0, 'Develop technical specifications for project.', 0, 0, 3);
INSERT INTO `competencies` VALUES(217, 7, 0, 'Understand and apply principles of structural design to produce prototype project.', 0, 0, 4);
INSERT INTO `competencies` VALUES(218, 7, 0, 'Debug and refine project based on prototype testing.', 0, 0, 5);
INSERT INTO `competencies` VALUES(219, 7, 0, 'Effectively meet deadlines of production schedule.', 0, 0, 6);
INSERT INTO `competencies` VALUES(220, 7, 0, 'Produce an original interactive project that incorporates multimedia elements.', 0, 0, 7);
INSERT INTO `competencies` VALUES(221, 15, 0, 'Create a multi-user environment for online delivery', 0, 0, 1);
INSERT INTO `competencies` VALUES(222, 15, 0, 'Apply advanced programming skills to games development.', 0, 0, 2);
INSERT INTO `competencies` VALUES(223, 15, 0, 'Manipulate text, image, and media elements in a multi-user environment.', 0, 0, 3);
INSERT INTO `competencies` VALUES(224, 15, 0, 'Pass variables out of an Adobe Flash movie.', 0, 0, 4);
INSERT INTO `competencies` VALUES(225, 15, 0, 'Create an external data source for Adobe Flash movies.', 0, 0, 5);
INSERT INTO `competencies` VALUES(226, 16, 0, 'Understand and appreciate digital animation in the continuum of traditional animation and time-based media concepts and practices.', 0, 0, 1);
INSERT INTO `competencies` VALUES(227, 16, 0, 'Demonstrate an understanding of basic techniques of character and narrative development as applied to traditional and digital animation.', 0, 0, 2);
INSERT INTO `competencies` VALUES(228, 16, 0, 'Demonstrate skills in preparation of digital animation for a variety of output formats.', 0, 0, 3);
INSERT INTO `competencies` VALUES(229, 16, 0, 'Create storyboards that effectively document narrative and/or concept development.', 0, 0, 4);
INSERT INTO `competencies` VALUES(230, 16, 0, 'Apply visual and time-based design principles to the creation of digital animation.', 0, 0, 5);
INSERT INTO `competencies` VALUES(231, 17, 0, 'Describe the programming process', 0, 0, 1);
INSERT INTO `competencies` VALUES(232, 17, 0, 'Perform programming fundamentals (loops, variables, conditions)', 0, 0, 2);
INSERT INTO `competencies` VALUES(233, 17, 0, 'Use properties and controls', 0, 0, 3);
INSERT INTO `competencies` VALUES(234, 17, 0, 'Apply object-oriented principles to interactive design ', 0, 0, 4);
INSERT INTO `competencies` VALUES(235, 17, 0, 'Make evident debugging and troubleshooting skills as related to web scripting', 0, 0, 5);
INSERT INTO `competencies` VALUES(236, 17, 0, 'Create an application that solves specified problems', 0, 0, 6);
INSERT INTO `competencies` VALUES(237, 17, 0, 'Compare and contrast procedure and object oriented programming', 0, 0, 7);
INSERT INTO `competencies` VALUES(238, 18, 0, 'Review with instructor and advisor the direction in which the student has decided to specialize the portfolio.', 0, 0, 1);
INSERT INTO `competencies` VALUES(239, 18, 0, 'Produce professional-level productions.', 0, 0, 2);
INSERT INTO `competencies` VALUES(240, 18, 0, 'Demonstrate ability to make a presentation of work.', 0, 0, 3);
INSERT INTO `competencies` VALUES(241, 18, 0, 'Complete personal letterhead and business cards.', 0, 0, 4);
INSERT INTO `competencies` VALUES(242, 18, 0, 'Attend and professionally present your completed portfolio at the portfolio showing if you are an Associate level graduate.', 0, 0, 5);
INSERT INTO `competencies` VALUES(243, 19, 0, 'Organize artwork in a print portfolio.', 0, 0, 1);
INSERT INTO `competencies` VALUES(244, 19, 0, 'Develop a plan that conforms to desired outcomes and can be completed within a specified time frame.', 0, 0, 2);
INSERT INTO `competencies` VALUES(245, 19, 0, 'Analyze, prioritize, and sequence project tasks.', 0, 0, 3);
INSERT INTO `competencies` VALUES(246, 19, 0, 'Generate a resume that reflects the individual''s most marketable skills and qualities.', 0, 0, 4);
INSERT INTO `competencies` VALUES(247, 19, 0, 'Recognize and adhere to copyright laws governing the use of emerging technology.', 0, 0, 5);
INSERT INTO `competencies` VALUES(248, 19, 0, 'Adhere to rules and standards of academic and intellectual integrity such as those related to plagiarism.', 0, 0, 6);
INSERT INTO `competencies` VALUES(249, 19, 0, 'Produce an ID package - letterhead & business card.', 0, 0, 7);
INSERT INTO `competencies` VALUES(250, 19, 0, 'Communicate effectively with prospective employers.', 0, 0, 8);
INSERT INTO `competencies` VALUES(251, 19, 0, 'Generate a letter that helps the individual obtain a job interview.', 0, 0, 9);
INSERT INTO `competencies` VALUES(252, 19, 0, 'Discuss the relative effectiveness of various media for different communication purposes.', 0, 0, 10);
INSERT INTO `competencies` VALUES(253, 19, 0, 'Use the Internet to conduct career related research.', 0, 0, 11);
INSERT INTO `competencies` VALUES(254, 19, 0, 'Conduct networking activities with pertinent industry groups, individuals, and/or associations.', 0, 0, 12);
INSERT INTO `competencies` VALUES(255, 19, 0, 'Evaluate personal and professional skills and interests relative to their application in possible career paths and projects.', 0, 0, 13);
INSERT INTO `competencies` VALUES(256, 19, 0, 'Develop communication skills for job interview and presentation.', 0, 0, 14);
INSERT INTO `competencies` VALUES(257, 19, 0, 'Develop an understanding of self-promotion, bidding + estimates, taxes, and billable expenses.', 0, 0, 15);
INSERT INTO `competencies` VALUES(258, 20, 0, 'Design layouts for a web page.', 0, 0, 1);
INSERT INTO `competencies` VALUES(259, 20, 0, 'Successfully convert Pantone colors into web colors.', 0, 0, 2);
INSERT INTO `competencies` VALUES(260, 20, 0, 'Develop logically-structured web pages in Dreamweaver or similar program.', 0, 0, 3);
INSERT INTO `competencies` VALUES(261, 20, 0, 'Identify the essential elements of successful page navigation.', 0, 0, 4);
INSERT INTO `competencies` VALUES(262, 20, 0, 'Create workable links between portions of a page.', 0, 0, 5);
INSERT INTO `competencies` VALUES(263, 20, 0, 'Animate graphical content.', 0, 0, 6);
INSERT INTO `competencies` VALUES(264, 20, 0, 'Construct a form document.', 0, 0, 7);
INSERT INTO `competencies` VALUES(265, 21, 0, 'Identify the role of design in branding/corporate identity.', 0, 0, 1);
INSERT INTO `competencies` VALUES(266, 21, 0, 'Effectively apply conceptual design skills to develop branding strategies.', 0, 0, 2);
INSERT INTO `competencies` VALUES(267, 21, 0, 'Effectively apply the elements of design to create logos and visual identities.', 0, 0, 3);
INSERT INTO `competencies` VALUES(268, 21, 0, 'Develop information structures that meet client needs for targeted audience.', 0, 0, 4);
INSERT INTO `competencies` VALUES(269, 21, 0, 'Create and present formal project proposals to prospective clients.', 0, 0, 5);
INSERT INTO `competencies` VALUES(270, 21, 0, 'Design and produce identity design for multiple formats including print and web.', 0, 0, 6);
INSERT INTO `competencies` VALUES(274, 22, 0, 'Apply traditional paint concepts, tools, and techniques for use in computer animation.', 0, 0, 1);
INSERT INTO `competencies` VALUES(275, 22, 0, 'Develop critical ideas for surface treatment, lighting, and motion of 3D models.', 0, 0, 2);
INSERT INTO `competencies` VALUES(276, 22, 0, 'Analyze and evaluate and apply texture-mapping strategies.', 0, 0, 3);
INSERT INTO `competencies` VALUES(277, 23, 0, 'Read printed material and summarize, analyze and evaluate information.', 0, 0, 1);
INSERT INTO `competencies` VALUES(278, 23, 0, 'Have an awareness of professional expectations with regards to planning, behavior, communication, and product presentation.', 0, 0, 2);
INSERT INTO `competencies` VALUES(279, 23, 0, 'Know academic and Sacramento culture and apply knowledge to create successful interactions.', 0, 0, 3);
INSERT INTO `competencies` VALUES(280, 23, 0, 'Locate school and community resources.', 0, 0, 4);
INSERT INTO `competencies` VALUES(281, 23, 0, 'Examine our own motivations and learning styles and take appropriate action based on them.', 0, 0, 5);
INSERT INTO `competencies` VALUES(282, 23, 0, 'Articulate the issues that result from living in a diverse world and take action that reflects a respect of differences among human beings.', 0, 0, 6);
INSERT INTO `competencies` VALUES(283, 11, 0, 'Identify websites that demonstrate good layout and usability design techniques.', 0, 0, 1);
INSERT INTO `competencies` VALUES(284, 11, 0, 'Compose basic HTML using a simple text editor.', 0, 0, 2);
INSERT INTO `competencies` VALUES(285, 11, 0, 'Design, produce, and successfully upload a basic website. ', 0, 0, 3);
INSERT INTO `competencies` VALUES(286, 11, 0, 'Construct logical file and directory structures for a website.', 0, 0, 4);
INSERT INTO `competencies` VALUES(287, 11, 0, 'Implement frames, tables and forms using HTML.', 0, 0, 5);
INSERT INTO `competencies` VALUES(288, 11, 0, 'Apply principles of visual design to the layout of web pages.', 0, 0, 6);
INSERT INTO `competencies` VALUES(289, 11, 0, 'Create a proposal and flow chart suitable for delivery to a potential client.', 0, 0, 7);
INSERT INTO `competencies` VALUES(290, 11, 0, 'Apply time and resource management principles to the website production.', 0, 0, 8);
INSERT INTO `competencies` VALUES(291, 11, 0, 'Prepare and use images as effective elements of web design and content.', 0, 0, 9);
INSERT INTO `competencies` VALUES(302, 24, 0, 'Understand the theory behind programming languages versus markup', 0, 0, 1);
INSERT INTO `competencies` VALUES(303, 24, 0, 'Understand the difference between client-side, server-side, server-parsed language', 0, 0, 2);
INSERT INTO `competencies` VALUES(304, 24, 0, 'Understand the differences between procedural and object-oriented programming', 0, 0, 3);
INSERT INTO `competencies` VALUES(305, 24, 0, 'Identify basic data structures (arrays, variables, data types, expressions) ', 0, 0, 4);
INSERT INTO `competencies` VALUES(306, 24, 0, 'Understand DOM object structure of JavaScript in web pages', 0, 0, 5);
INSERT INTO `competencies` VALUES(307, 24, 0, 'Identify the standard set of JavaScript commands and operators', 0, 0, 6);
INSERT INTO `competencies` VALUES(308, 24, 0, 'Understand JavaScript functions and parameter-passing', 0, 0, 7);
INSERT INTO `competencies` VALUES(309, 24, 0, 'Understand event handling within JavaScript', 0, 0, 8);
INSERT INTO `competencies` VALUES(310, 24, 0, 'Acquire and incorporate public JavaScript source code it into programs', 0, 0, 9);
INSERT INTO `competencies` VALUES(311, 24, 0, 'Create a working, original JavaScript program', 0, 0, 10);
INSERT INTO `competencies` VALUES(317, 25, 0, 'Demonstrate an understanding of personal vision as indicated through project work.', 0, 0, 1);
INSERT INTO `competencies` VALUES(318, 25, 0, 'Fully explore the projects at the conceptual level.', 0, 0, 2);
INSERT INTO `competencies` VALUES(319, 25, 0, 'Further refine skills in time and project management.', 0, 0, 3);
INSERT INTO `competencies` VALUES(320, 25, 0, 'Exploration of communicating problems on individual proposals.', 0, 0, 4);
INSERT INTO `competencies` VALUES(321, 25, 0, 'Develop and understanding of integrating their personal vision.', 0, 0, 5);
INSERT INTO `competencies` VALUES(322, 26, 0, 'Apply principles of composition and layout.', 0, 0, 1);
INSERT INTO `competencies` VALUES(323, 26, 0, 'Demonstrate the use of compositional devices such as line, dot, rhythm, values, and contrast.', 0, 0, 2);
INSERT INTO `competencies` VALUES(324, 26, 0, 'Distinguish and apply the principles of grid systems.', 0, 0, 3);
INSERT INTO `competencies` VALUES(325, 26, 0, 'Develop skills and understanding of integration of typography and visuals as well as appropriateness of design intended audience.', 0, 0, 4);
INSERT INTO `competencies` VALUES(326, 26, 0, 'Develop ability to use reference and find research material.', 0, 0, 5);
INSERT INTO `competencies` VALUES(327, 26, 0, 'Develop a working knowledge of layout elements including hierarchy, grid systems, typography, and conceptualization.', 0, 0, 6);
INSERT INTO `competencies` VALUES(328, 27, 0, 'Assess your own current skills and design tasks accordingly.', 0, 0, 1);
INSERT INTO `competencies` VALUES(329, 27, 0, 'Work independently from proposal to final execution.', 0, 0, 2);
INSERT INTO `competencies` VALUES(330, 27, 0, 'Develop an understanding of integrating their personal vision with the design problem.', 0, 0, 3);
INSERT INTO `competencies` VALUES(331, 27, 0, 'Develop an understanding of time management and conceptual thinking.', 0, 0, 4);
INSERT INTO `competencies` VALUES(332, 27, 0, 'Demonstrate the ability to self-direct, time manage, analyze and present your project goals and progress.', 0, 0, 5);
INSERT INTO `competencies` VALUES(333, 27, 0, 'Confront and remedy design problems.', 0, 0, 6);
INSERT INTO `competencies` VALUES(334, 27, 0, 'Identify, analyze, and prioritize problems.', 0, 0, 7);
INSERT INTO `competencies` VALUES(335, 27, 0, 'Apply logical design valuation.', 0, 0, 8);
INSERT INTO `competencies` VALUES(336, 27, 0, 'Use of the correct computer programs is required for all project applications.', 0, 0, 9);
INSERT INTO `competencies` VALUES(337, 28, 0, 'Recognize the difference between 2-D and 3-D design.', 0, 0, 1);
INSERT INTO `competencies` VALUES(338, 28, 0, 'Translate 2-D design into 3-D design.', 0, 0, 2);
INSERT INTO `competencies` VALUES(339, 28, 0, 'Demonstrate translation of 3-D form into 2-D drawings.', 0, 0, 3);
INSERT INTO `competencies` VALUES(340, 28, 0, 'Explore 3-D media to move through visual space.', 0, 0, 4);
INSERT INTO `competencies` VALUES(341, 28, 0, 'Recognize and incorporate function as it relates to design.', 0, 0, 5);
INSERT INTO `competencies` VALUES(342, 28, 0, 'Objectively evaluate function as it pertains to form within basic design.', 0, 0, 6);
INSERT INTO `competencies` VALUES(343, 28, 0, 'Demonstrate construction skills of 3-D projects (structural integrity).', 0, 0, 7);
INSERT INTO `competencies` VALUES(344, 28, 0, 'Develop perceptual and spatial relationships.', 0, 0, 8);
INSERT INTO `competencies` VALUES(345, 28, 0, 'Recognize the qualities shared between two + three dimensional design unique to the space around them.', 0, 0, 9);
INSERT INTO `competencies` VALUES(346, 29, 0, 'Apply principles of composition and design.', 0, 0, 1);
INSERT INTO `competencies` VALUES(347, 29, 0, 'Integrate design concepts, materials, and skills.', 0, 0, 2);
INSERT INTO `competencies` VALUES(348, 29, 0, 'Apply the design process to specific goal-focused problem solving.', 0, 0, 3);
INSERT INTO `competencies` VALUES(349, 29, 0, 'Explore nontraditional design options.', 0, 0, 4);
INSERT INTO `competencies` VALUES(350, 29, 0, 'Develop an understanding of semiotics with the denotation/connotation of images as they exist separately or together.', 0, 0, 5);
INSERT INTO `competencies` VALUES(351, 29, 0, 'Develop an understanding of how messages can be constructed through images, using subject matter, context, juxtaposition, editing, scale, and color to determine the degree of communication.', 0, 0, 6);
INSERT INTO `competencies` VALUES(352, 29, 0, 'Identify and use appropriate research methods.', 0, 0, 7);
INSERT INTO `competencies` VALUES(353, 29, 0, 'Verify that outcomes meet design objectives.', 0, 0, 8);
INSERT INTO `competencies` VALUES(354, 30, 0, 'Acquire an in depth knowledge of the major movements in design and architecture, and be able to identify all major styles and trends.', 0, 0, 1);
INSERT INTO `competencies` VALUES(355, 30, 0, 'Identify the main visual characteristics of a variety of graphic areas in history, including type faces, logos, logotype, borders, and other embellishment devices, and apply these to assignment solutions.', 0, 0, 2);
INSERT INTO `competencies` VALUES(356, 30, 0, 'Gain an understanding of appreciation and be able to recognize outstanding designers.', 0, 0, 3);
INSERT INTO `competencies` VALUES(357, 30, 0, 'Recognize and describe the areas of significant historic interest to the graphic design field in western and other cultures (i.e., Arts and Crafts, Nouveau, Deco, Modernism, Russian Constructivism, etc.).', 0, 0, 4);
INSERT INTO `competencies` VALUES(358, 30, 0, 'Recognize the influence of social and political trends on design; to comprehend the relationship between design and technology.', 0, 0, 5);
INSERT INTO `competencies` VALUES(359, 30, 0, 'Learn to think, research, and present like a designer.', 0, 0, 6);
INSERT INTO `competencies` VALUES(360, 31, 0, 'Develop a basic understanding of semiotics with the denotation/connotation of images as they exist separately or together. ', 0, 0, 1);
INSERT INTO `competencies` VALUES(361, 31, 0, 'Apply the design process to specific goal-focused problem solving.', 0, 0, 2);
INSERT INTO `competencies` VALUES(362, 31, 0, 'Explore nontraditional design options.', 0, 0, 3);
INSERT INTO `competencies` VALUES(363, 31, 0, 'Develop a basic understanding of how messages can be constructed through images, using subject matter, context, juxtaposition, editing, scale, and color to determine the degree of communication.', 0, 0, 4);
INSERT INTO `competencies` VALUES(364, 31, 0, 'Analyze and define creative challenges in message making.', 0, 0, 5);
INSERT INTO `competencies` VALUES(365, 32, 0, 'Participate as a member or leader of a team.', 0, 0, 1);
INSERT INTO `competencies` VALUES(366, 32, 0, 'Assess skills of team members and assign tasks accordingly.', 0, 0, 2);
INSERT INTO `competencies` VALUES(367, 32, 0, 'Set goals for team.', 0, 0, 3);
INSERT INTO `competencies` VALUES(368, 32, 0, 'Describe the dynamics of an effective team.', 0, 0, 4);
INSERT INTO `competencies` VALUES(369, 32, 0, 'Construct team based on knowledge of skill sets.', 0, 0, 5);
INSERT INTO `competencies` VALUES(370, 32, 0, 'Develop client relations and the fundamentals of design as a business - NON PROFIT.', 0, 0, 6);
INSERT INTO `competencies` VALUES(371, 32, 0, 'Develop practical skills in design, scheduling, budgeting, art direction, print production, and project documentation.', 0, 0, 7);
INSERT INTO `competencies` VALUES(372, 33, 0, 'Participate as a member or leader of a team.', 0, 0, 1);
INSERT INTO `competencies` VALUES(373, 33, 0, 'Assess skills of team members and assign tasks accordingly.', 0, 0, 2);
INSERT INTO `competencies` VALUES(374, 33, 0, 'Set goals for team.', 0, 0, 3);
INSERT INTO `competencies` VALUES(375, 33, 0, 'Describe the dynamics of an effective team.', 0, 0, 4);
INSERT INTO `competencies` VALUES(376, 33, 0, 'Construct team based on knowledge of skill sets.', 0, 0, 5);
INSERT INTO `competencies` VALUES(377, 33, 0, 'Develop client relations and the fundamentals of design as a business - NON PROFIT.', 0, 0, 6);
INSERT INTO `competencies` VALUES(378, 33, 0, 'Develop practical skills in design, scheduling, budgeting, art direction, print production, and project documentation.', 0, 0, 7);
INSERT INTO `competencies` VALUES(379, 34, 0, 'Effectively use a page layout software program to graphically create a single and multi-page document.', 0, 0, 1);
INSERT INTO `competencies` VALUES(380, 34, 0, 'Effectively apply typographic principles to documents produced in an electronic environment. ', 0, 0, 2);
INSERT INTO `competencies` VALUES(381, 34, 0, 'Create professionally acceptable layouts for subsequent electronic application.', 0, 0, 3);
INSERT INTO `competencies` VALUES(382, 34, 0, 'Import and manipulate data from other graphics software as part of the final graphics assembly.', 0, 0, 4);
INSERT INTO `competencies` VALUES(383, 34, 0, 'Develop and use a grid structure that will organize type, images and graphic elements for a successful layout.', 0, 0, 5);
INSERT INTO `competencies` VALUES(384, 34, 0, 'Collect and save documents using appropriate specialized file formats for successful proofing and/or final output at a service bureau or other supplier.', 0, 0, 6);
INSERT INTO `competencies` VALUES(385, 34, 0, 'A comprehensive understanding of the industry standard page layout program.', 0, 0, 7);
INSERT INTO `competencies` VALUES(386, 34, 0, 'Utilize tools effectively.', 0, 0, 8);
INSERT INTO `competencies` VALUES(387, 34, 0, 'Create and modify picture boxes.', 0, 0, 9);
INSERT INTO `competencies` VALUES(388, 34, 0, 'Create and modify text boxes.', 0, 0, 10);
INSERT INTO `competencies` VALUES(389, 34, 0, 'Modify type attributes.', 0, 0, 11);
INSERT INTO `competencies` VALUES(390, 34, 0, 'Utilize paragraph formats and style sheets.', 0, 0, 12);
INSERT INTO `competencies` VALUES(391, 34, 0, 'Understand "Collect for Output" function, updating placed images and the inclusion of fonts and graphics in the transportation of files.', 0, 0, 13);
INSERT INTO `competencies` VALUES(392, 34, 0, 'Print documents correctly and generate color separations.', 0, 0, 14);
INSERT INTO `competencies` VALUES(393, 35, 0, 'Identify communication needs of client and audience.', 0, 0, 1);
INSERT INTO `competencies` VALUES(394, 35, 0, 'Display consideration of physical requirements in relation to space and audience and cost in designing.', 0, 0, 2);
INSERT INTO `competencies` VALUES(395, 35, 0, 'Develop a psychology of proper cognitive responses to images.', 0, 0, 3);
INSERT INTO `competencies` VALUES(396, 35, 0, 'Develop an understanding of Semiotics.', 0, 0, 4);
INSERT INTO `competencies` VALUES(397, 35, 0, 'Examine standardization of mark/logo application in various settings (2D, 3D, Virtual, Web, etc.).', 0, 0, 5);
INSERT INTO `competencies` VALUES(398, 35, 0, 'Render design mark on multiple applications representative of a company/product need.', 0, 0, 6);
INSERT INTO `competencies` VALUES(399, 35, 0, 'Relate history and psychology of corporate identity to given projects.', 0, 0, 7);
INSERT INTO `competencies` VALUES(400, 35, 0, 'Historical overview of Corporate/Brand Identity from Hieroglyphics through Iconography. Family crests through early 20th century Branding.', 0, 0, 8);
INSERT INTO `competencies` VALUES(401, 35, 0, 'Discuss co-branding issues and examples.', 0, 0, 9);
INSERT INTO `competencies` VALUES(402, 35, 0, 'Discuss co-branding issues and examples.', 0, 0, 10);
INSERT INTO `competencies` VALUES(403, 35, 0, 'Review branding terminology.', 0, 0, 11);
INSERT INTO `competencies` VALUES(404, 35, 0, 'Develop a basic understanding of importance of product placement, branded environments, scripted spaces, globalization issues, subversive branding, co-branding, and adaptive branding.', 0, 0, 12);
INSERT INTO `competencies` VALUES(405, 36, 0, 'Apply conventions of given environmental concerns and overall zone demands in design.', 0, 0, 1);
INSERT INTO `competencies` VALUES(406, 36, 0, 'Display consideration of physical requirements in relation to space and audience and cost in designing.', 0, 0, 2);
INSERT INTO `competencies` VALUES(407, 36, 0, 'Develop an understanding of 2-dimensional display vs. information systems.', 0, 0, 3);
INSERT INTO `competencies` VALUES(408, 36, 0, 'Understand the physical characteristics of display typologies as they reveal the values in society that produces them.', 0, 0, 4);
INSERT INTO `competencies` VALUES(409, 36, 0, 'Understand the presentation of ''art'' and ''artifacts'' in the contexts of commercial, educational and domestic spaces.', 0, 0, 5);
INSERT INTO `competencies` VALUES(410, 36, 0, 'Develop an understanding of ''traffic'' flow in a given space or spaces.', 0, 0, 6);
INSERT INTO `competencies` VALUES(411, 37, 0, 'Identify, select, and produce a marketing mix.', 0, 0, 1);
INSERT INTO `competencies` VALUES(412, 37, 0, 'Characterize the strengths and functional value of various communications and advertising media: including print, packaging, P.O.P., billboards, television, broadcast, and the web.', 0, 0, 2);
INSERT INTO `competencies` VALUES(413, 37, 0, 'Determine and suggest an appropriate marketing mix.', 0, 0, 3);
INSERT INTO `competencies` VALUES(414, 37, 0, 'Explore various techniques as they apply to an individual marketing mix.', 0, 0, 4);
INSERT INTO `competencies` VALUES(415, 37, 0, 'Utilize appropriate techniques for a marketing mix.', 0, 0, 5);
INSERT INTO `competencies` VALUES(416, 37, 0, 'Identify, select, and use various media and styles to achieve desired results.', 0, 0, 6);
INSERT INTO `competencies` VALUES(417, 37, 0, 'Define and describe potential medium, such as photography, video, audio, or print.', 0, 0, 7);
INSERT INTO `competencies` VALUES(418, 37, 0, 'Apply the selected media and style to a project solution.', 0, 0, 8);
INSERT INTO `competencies` VALUES(419, 37, 0, 'Explore the relationship between language and image.', 0, 0, 9);
INSERT INTO `competencies` VALUES(420, 37, 0, 'Explore signs as being anything and everything that conveys meaning; words, numbers, symbols, myths, color, sound, movement, body language, expressions, aroma, texture, dance movies. Anything that conveys both information and emotion.', 0, 0, 10);
INSERT INTO `competencies` VALUES(421, 37, 0, 'Develop methods to monitor and recognize local, regional, national and global design styles and trends.', 0, 0, 11);
INSERT INTO `competencies` VALUES(422, 37, 0, 'Develop methods of research, semiotic analysis, methods of application.', 0, 0, 12);
INSERT INTO `competencies` VALUES(423, 37, 0, 'Learn how to develop a marketing plan', 0, 0, 13);
INSERT INTO `competencies` VALUES(424, 38, 0, 'Develop a basic understanding on constructing not just a box but 3D structures.', 0, 0, 1);
INSERT INTO `competencies` VALUES(425, 38, 0, 'Create a graphics standards book for your mark with examples.', 0, 0, 2);
INSERT INTO `competencies` VALUES(426, 38, 0, 'Design an original professional mark for a company or product.', 0, 0, 3);
INSERT INTO `competencies` VALUES(427, 38, 0, 'Develop a basic understanding of Semiotics.', 0, 0, 4);
INSERT INTO `competencies` VALUES(428, 38, 0, 'Produce multifaceted design presentations inclusive of defining target audience, naming product/company.', 0, 0, 5);
INSERT INTO `competencies` VALUES(429, 38, 0, 'Effectively use clay and molding techniques.', 0, 0, 6);
INSERT INTO `competencies` VALUES(430, 38, 0, 'Recommend and apply creative solutions to design problems based on historical models, contemporary trends, and current technology.', 0, 0, 7);
INSERT INTO `competencies` VALUES(431, 38, 0, 'Sketch multiple solutions for package redesign and design projects.', 0, 0, 8);
INSERT INTO `competencies` VALUES(432, 38, 0, 'Produce refined black and white layouts of design solutions.', 0, 0, 9);
INSERT INTO `competencies` VALUES(433, 38, 0, 'Produce sketches and solutions that show conceptual design creativity.', 0, 0, 10);
INSERT INTO `competencies` VALUES(434, 38, 0, 'Discuss co-branding issues and examples.', 0, 0, 11);
INSERT INTO `competencies` VALUES(435, 39, 0, 'Demonstrate an understanding of the history and foundation of letter forms. ', 0, 0, 1);
INSERT INTO `competencies` VALUES(436, 39, 0, 'Distinguish classifications of type families.', 0, 0, 2);
INSERT INTO `competencies` VALUES(437, 39, 0, 'Discuss vocabulary of typography (i.e., Serif and San Serif).', 0, 0, 3);
INSERT INTO `competencies` VALUES(438, 39, 0, 'Utilize basic design principles to create well balanced typographic compositions.', 0, 0, 4);
INSERT INTO `competencies` VALUES(439, 39, 0, 'Differentiate the difference between positive and negative space.', 0, 0, 5);
INSERT INTO `competencies` VALUES(440, 39, 0, 'Compare various methods and choose appropriate solutions to solve design problems.', 0, 0, 6);
INSERT INTO `competencies` VALUES(441, 39, 0, 'Apply typography elements as they relate to various design problems.', 0, 0, 7);
INSERT INTO `competencies` VALUES(442, 39, 0, 'Discuss and define "good type" vs. "bad type."', 0, 0, 8);
INSERT INTO `competencies` VALUES(443, 39, 0, 'Demonstrate lettering skills by hand', 0, 0, 9);
INSERT INTO `competencies` VALUES(444, 40, 0, 'Demonstrate the knowledge of hierarchy and placement of display type, by lines, body copy, images, page numbering, and other elements pertinent to page layout in typography.', 0, 0, 1);
INSERT INTO `competencies` VALUES(445, 40, 0, 'Develop and use a grid structure that will organize type, images and graphic elements for a successful layout.', 0, 0, 2);
INSERT INTO `competencies` VALUES(446, 40, 0, 'Create professionally acceptable pencil and marker layouts for subsequent electronic application.', 0, 0, 3);
INSERT INTO `competencies` VALUES(447, 40, 0, 'Evaluate and discuss electronic visual solutions using graphic design criteria.', 0, 0, 4);
INSERT INTO `competencies` VALUES(448, 40, 0, 'Use page design, digital imaging and illustration computer programs to prepare layouts, composition and comprehensive executions of single and multiple page documents.', 0, 0, 5);
INSERT INTO `competencies` VALUES(449, 40, 0, 'Develop facility in computer type usage and distinguish between traditional and computer based type.', 0, 0, 6);
INSERT INTO `competencies` VALUES(450, 40, 0, 'Import and manipulate data from other graphics software as part of the final graphics assembly.', 0, 0, 7);
INSERT INTO `competencies` VALUES(451, 40, 0, 'Collect and save documents using appropriate specialized file formats for successful proofing and/or final output at a service bureau or other supplier.', 0, 0, 8);
INSERT INTO `competencies` VALUES(455, 42, 0, 'Main Competency', 0, 1, 1);
INSERT INTO `competencies` VALUES(456, 42, 0, 'a sub competency', 0, 2, 2);
INSERT INTO `competencies` VALUES(457, 42, 0, 'another sub competency', 0, 2, 3);
INSERT INTO `competencies` VALUES(458, 42, 0, 'Another main comp', 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursenum` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `totalhrs` tinyint(2) NOT NULL,
  `lecthrs` tinyint(2) NOT NULL,
  `labhrs` tinyint(2) NOT NULL,
  `credit` tinyint(2) NOT NULL,
  `dept` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` VALUES(1, 'MM2201', 'Interface Design', 'This course is an exploration of the synthesis of visual design and principles of human interactivity. This course examines the conceptual and practical design of interfaces.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(5, 'MM3312', 'Computer-based Traning', 'This course provides an exploration of authoring techniques for interactive training and education. Students gain experience in the process of design, development, and evaluation of effective computer-based training systems.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(7, 'MM4403', 'Senior Project Development', 'Students conduct project-based research of advanced topic in multimedia design.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(10, 'MM3323', 'Advanced Web Based Programming', 'This course is an exploration of scripting and programming languages used to develop advanced "server-side" Web applications. Students learn how to create programs capable of storing and retrieving data from servers supporting advanced interactivity.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(11, 'MM1123', 'Fundamentals Of Web Programming', 'This course is an introduction to writing and editing HTML documents for the production of Web pages. In addition, this course examines the history and future of Web media.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(12, 'FS101', 'Observational Drawing', 'This course is a fundamental drawing course where students explore various art and media and learn to use a variety of drawing tools. This course involves the observation and translation of 3-D form into 2-D drawings. Starting with simple shapes and progressing to more complex organic forms, students build drawing skills in composition, line quality, use of tone, and human anatomy.', 44, 22, 22, 3, 9);
INSERT INTO `courses` VALUES(13, 'MM3304', 'Database Concepts', 'This course provides an examination of the structure and design of databases for electronic communication and commerce. Students learn the components and functions of databases with an emphasis on data organization & output.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(14, 'MM4402', 'Senior Project Studio', 'Students begin the design and production of advanced interactive project.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(15, 'MM3322', 'Multi-user Authoring', 'This course provides an exploration of advanced authoring techniques for multi-user interaction design. This course examines the concepts and techniques for developing multi-user game and communication projects.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(16, 'MM1130', 'Fundamentals Of Animation', 'This course is an introduction to 2-D digital animation concepts and techniques. Students create animation using basic principles of design for time-based media.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(17, 'MM1113', 'Intro To Programming Logic', 'Students develop and refine basic programming skills. Emphasis is placed on programming concepts including logic, problem solving, process flow and flowcharting, syntax and structures, and debugging and troubleshooting. Students acquire skills needed to design, develop, and produce practical interactive applications.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(18, 'FS297', 'Portfolio 1', 'This course prepares students for the transition from the classroom to the professional world. Students prepare for job interviews by compiling a portfolio. Students demonstrate their conceptual, design, craftsmanship, and other skills as they assemble and refine their portfolio pieces. Working individually with an instructor, each student selects representative pieces, showcasing work that reflects a unique style. Particular emphasis is places on identifying short-andlong0term professional employment goals, as well as related strategies and resources.', 44, 22, 22, 3, 9);
INSERT INTO `courses` VALUES(19, 'FS497', 'Portfolio 2', 'This course focuses on the completion of a student''s portfolio and enables the student to begin a career search. Students present work for the portfolio, then review and determine the quality of the work and make any enhancements necessary. The student also completes a professional resume and extensive job search.', 44, 0, 44, 2, 9);
INSERT INTO `courses` VALUES(20, 'MM2203', 'Intro To Web Design', 'This course is an exploration of the process of Web design from proposal to production. Students design and produce Web sites with Web editing software.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(21, 'MM2211', 'Digital Identity Design', 'This course provides an examination of the role of design in brand identity and marketing. Students learn design strategies for developing integrating digital branding.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(22, 'GA3311', 'Material & Lighting', 'In this course students are introduced to materials, textures, and lighting strategies to add detail and realism to objects without adding complexity to the model. Students simulate real-world surfaces containing reflection radiosity and other effects.\r\n', 44, 22, 22, 3, 7);
INSERT INTO `courses` VALUES(23, 'RS091', 'Portfolio Foundations', 'This course provides students with an extended orientation to college life in general and to the school in particular. It also coaches students in study strategies, time management skills, interpersonal skill, self-awareness, and career strategies for success. Students become acquainted with college and community and work on establishing a visionary path for developing their professional portfolio. The course culminates with students attending the graduate portfolio show. ', 22, 22, 0, 0, 9);
INSERT INTO `courses` VALUES(24, 'MM2233', 'Intermediate Web Based Programming', 'This course is an introduction to the JavaScript programming language where students learn the basic principles underlying JavaScript and similar "structured" programming languages.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(25, 'GD2265', 'Project Concept', 'Students explore various solutions based on common industry problems allowing them the opportunity to integrate their personal vision. Students meet with faculty to outline their time management and concept.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(26, 'GD1132', 'Grid Systems', 'This course will enable the student to better design with type and visuals, and utilize technology in problem solving. Emphasis will be on the process of design development from roughs to comprehensives, layout, and the use of a grid system for multi-component layouts.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(27, 'GD3371', 'Project Study', 'Through observation and documenting their own work, students focus on projects of their own within an area of interest with the approval of the Academic Director. In this course, students will work with non-profit organizations.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(28, 'GD1124', 'Form And Space', 'Form & Space involves the formal understanding and manipulation of the basic-organizing principles of the 3-dimensional worlds.  Point, line, plane, mass, volume, density and form are discussed.  Students learn to create and discuss 3-D situations using basic hand tools and readily available materials.  Form and Space also involves the relationship of perceptual issues to manipulate the 3-D situation.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(29, 'GD2264', 'Digital Message Making', 'Students further explore through an in depth study of the exercises learned in Message Making using the computer as the tool to create the messages.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(30, 'GD3391', 'Graphic Design History', 'This course will examine the influences of social trends, historical events, technological developments and the fine arts on contemporary graphic design, illustration, typographic design, architectural design, photography and fashionable trends in general. Through lectures, supplied visual examples, independent research and design assessments, the student will gain insight into a variety of major design influences. The student will learn how to research and utilize a wide variety of design styles.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(31, 'GD2262', 'Message Making', 'This course focuses on how messages can be constructed through images using subject matter, context juxtaposition, editing, scale, color, and composition. Materials and technologies are explored.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(32, 'GD4401', 'Design Team 1', 'This is a special projects course in which students utilize their knowledge of design, typography, and production techniques to execute a team project. Students also apply communications, teamwork, and organizational skills. Students work cooperatively to achieve a common goal, similar to industry experience.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(33, 'GD4411', 'Design Team 2', 'This course will build upon the concepts and issues explored in Design Team 1.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(34, 'GD1123', 'Electronic Layout', 'This course explores various means of indicating, placing, and manipulating visual elements in page design, systematically developing strong and creative layout solutions by means of a cumulative, conceptual design process. The ability to effectively integrate photographs, illustrations, and display and text type is developed using page composition software.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(35, 'GD2252', 'Corporate Communications', 'This advanced design course will deal primarily with the development of internal corporate imaging. Building on the theories of design, the course will further examine logo design and internal application of the corporate image.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(36, 'GD4403', 'Environmental Design', 'Students will study a range of examples of exhibition/environmental design measured against conventions of 2-D display/informational systems.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(37, 'GD4402', 'Design Research - Marketing Design', 'This course is a review of popular culture as it relates to social, informational, economic, political, and educational current events. A special emphasis is placed on trends and pop topics as they relate to the design world. Current media, including literature, books, television, movies, telecommunications media, online communications, marketing trends and strategies are reviewed.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(38, 'GD3394', 'Package Design', 'The focus is on package-branded products. Students will focus on revitalizing existing brands as well as developing new brands based on development of identity and packaging applications', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(39, 'FS131', 'Typography 1', 'This course is an introduction to lettering skills and the history and foundation of letterforms. The placement of display and text type in a formatted space, and the relationship between the appearance and readability of letterforms are explored.  Students hand-rendering type and are introduced to contemporary typesetting technology.', 44, 22, 22, 3, 9);
INSERT INTO `courses` VALUES(40, 'GD2243', 'Typography 2 - Hierarchy', 'This course is a continuation of the study of the fundamentals of typography. Exercises and projects focus on the hierarchical qualities of typography. The development of marketable, original, and creative problem-solving solutions will also be examined with an emphasis on creative techniques. Industry-standard software will be used in the development of digital typography and hierarchal skills.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(42, 'MM1234', 'Random Course', 'Here is a course description', 44, 22, 22, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `ordr` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` VALUES(51, 16, '2012-08-31', 'Friday', 'Labor Day', 1);
INSERT INTO `dates` VALUES(52, 16, '2012-09-03', 'Monday', 'Labor Day', 2);

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abbrv` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` VALUES(1, 'Web Design and Interactive Media', 'WDIM');
INSERT INTO `depts` VALUES(2, 'Digital Film and Video Production', 'DFVP');
INSERT INTO `depts` VALUES(3, 'Graphic Design', 'GD');
INSERT INTO `depts` VALUES(4, 'Interior Design', 'ID');
INSERT INTO `depts` VALUES(5, 'Culinary', 'Cul');
INSERT INTO `depts` VALUES(6, 'Media Arts and Animation', 'MAA');
INSERT INTO `depts` VALUES(7, 'Game Art and Design', 'GAD');
INSERT INTO `depts` VALUES(8, 'Fashion Retailing', 'FR');
INSERT INTO `depts` VALUES(9, 'Foundation Studies', 'FS');
INSERT INTO `depts` VALUES(10, 'General Education', 'GE');

-- --------------------------------------------------------

--
-- Table structure for table `evalscales`
--

CREATE TABLE `evalscales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `descrip` varchar(256) NOT NULL,
  `percent` tinyint(2) NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `evalscales`
--

INSERT INTO `evalscales` VALUES(51, 16, 'Assignments and Exercises', 50, 1);
INSERT INTO `evalscales` VALUES(52, 16, 'Mid-Term Project', 15, 2);
INSERT INTO `evalscales` VALUES(53, 16, 'Final Project', 25, 3);
INSERT INTO `evalscales` VALUES(54, 16, 'Participation', 10, 4);
INSERT INTO `evalscales` VALUES(55, 18, 'Attendance and Participation', 10, 1);
INSERT INTO `evalscales` VALUES(56, 18, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(57, 18, 'Mid-Term Project/Examination', 15, 3);
INSERT INTO `evalscales` VALUES(58, 18, 'Final Project/Examination', 25, 4);
INSERT INTO `evalscales` VALUES(59, 19, 'Attendance and participation', 40, 1);
INSERT INTO `evalscales` VALUES(60, 19, 'Projects', 40, 2);
INSERT INTO `evalscales` VALUES(61, 19, 'Homework', 20, 3);
INSERT INTO `evalscales` VALUES(62, 20, 'Participation', 70, 1);
INSERT INTO `evalscales` VALUES(63, 20, 'Assignments', 30, 2);
INSERT INTO `evalscales` VALUES(64, 23, 'Attendance and Participation', 10, 1);
INSERT INTO `evalscales` VALUES(65, 23, 'Assignments and Exercises', 40, 2);
INSERT INTO `evalscales` VALUES(66, 23, 'Weekly Quizzes', 10, 3);
INSERT INTO `evalscales` VALUES(67, 23, 'Midterm Project', 15, 4);
INSERT INTO `evalscales` VALUES(68, 23, 'Final Project', 25, 5);
INSERT INTO `evalscales` VALUES(69, 21, 'Attendance and Participation', 10, 1);
INSERT INTO `evalscales` VALUES(70, 21, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(71, 21, 'Midterm Project', 15, 3);
INSERT INTO `evalscales` VALUES(72, 21, 'Final Project', 25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gradingpolicies`
--

CREATE TABLE `gradingpolicies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `policy` varchar(255) NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `term_id` (`term_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `gradingpolicies`
--

INSERT INTO `gradingpolicies` VALUES(96, 16, NULL, 0, 'Class time will be spent in a productive manner.', 1);
INSERT INTO `gradingpolicies` VALUES(97, 16, NULL, 0, 'Grading will be done on a point system.', 2);
INSERT INTO `gradingpolicies` VALUES(98, 16, NULL, 0, 'Points for individual activities will be announced.', 3);
INSERT INTO `gradingpolicies` VALUES(99, 16, NULL, 0, 'All work must be received by the set deadlines.', 4);
INSERT INTO `gradingpolicies` VALUES(100, 16, NULL, 0, 'Late work receives a grade of zero.', 5);
INSERT INTO `gradingpolicies` VALUES(101, 16, NULL, 0, 'On-time projects may be redone with instructor approval.', 6);
INSERT INTO `gradingpolicies` VALUES(102, 16, NULL, 0, 'ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.', 7);
INSERT INTO `gradingpolicies` VALUES(103, 0, 20, 1, 'Pass // No Pass (S=Satisfactory, NS=Not Satisfactory), as based on attendance, participation and engagement in the course and its weekly tasks and activities.', 1);
INSERT INTO `gradingpolicies` VALUES(104, 0, 23, 1, 'Deadlines are very serious in the industry. Each assignment must be received by the set deadline, typically one week after it is introduced. If you donâ€™t keep up with the assignments, it will become harder to comprehend later course material. Late work ', 1);
INSERT INTO `gradingpolicies` VALUES(105, 0, 23, 1, 'On-time projects may be redone with instructor approval.', 2);
INSERT INTO `gradingpolicies` VALUES(106, 0, 23, 1, 'MyAiCampus.com is required for submitting assignments. It is the studentâ€™s responsibility to report any difficulties with or confusion about the system at the time they occurâ€”and before the deadline for the assignment. Deadlines for all assignmentsâ€”', 3);
INSERT INTO `gradingpolicies` VALUES(107, 0, 23, 1, 'Work turned into the wrong Dropbox basket for a given assignment will not be graded.', 4);
INSERT INTO `gradingpolicies` VALUES(108, 0, 23, 1, 'â€¢	ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11. Not midnight; the end of the class session.', 5);
INSERT INTO `gradingpolicies` VALUES(109, 0, 21, 1, 'Deadlines are very serious in the industry. Each assignment must be received by the set deadline, typically one week after it is introduced. If you donâ€™t keep up with the assignments, it will become harder to comprehend later course material.', 1);
INSERT INTO `gradingpolicies` VALUES(110, 0, 21, 1, 'On-time projects may be redone with instructor approval.', 2);
INSERT INTO `gradingpolicies` VALUES(111, 0, 21, 1, 'MyAiCampus.com is required for submitting assignments. It is the studentâ€™s responsibility to report any difficulties with or confusion about the system at the time they occurâ€”and before the deadline for the assignment.', 3);
INSERT INTO `gradingpolicies` VALUES(112, 0, 21, 1, 'Late work will not be accepted.', 4);
INSERT INTO `gradingpolicies` VALUES(113, 0, 21, 1, 'Work turned into the wrong Dropbox basket for a given assignment will not be graded.', 5);
INSERT INTO `gradingpolicies` VALUES(114, 0, 21, 1, 'ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11. Not midnight; the end of the class session.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `prereqs`
--

CREATE TABLE `prereqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `prereq` varchar(200) NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` VALUES(6, 10, 'MM2233 Intermediate Web-based Programming', 1);
INSERT INTO `prereqs` VALUES(14, 5, 'MM3311 Interaction Design for Entertainment', 1);
INSERT INTO `prereqs` VALUES(18, 1, 'Permission of Academic Director/Advisor', 1);
INSERT INTO `prereqs` VALUES(20, 12, 'None', 1);
INSERT INTO `prereqs` VALUES(21, 13, 'MM2233 Intermediate Web-based Programming', 1);
INSERT INTO `prereqs` VALUES(22, 14, 'Permission of Academic Director/Advisor', 1);
INSERT INTO `prereqs` VALUES(23, 7, 'Permission of Academic Director/Advisor', 1);
INSERT INTO `prereqs` VALUES(24, 15, 'MM2202 Intermediate Authoring', 1);
INSERT INTO `prereqs` VALUES(25, 16, 'FS122 Image Manipulation', 1);
INSERT INTO `prereqs` VALUES(26, 18, 'Permission of Academic Director/Advisor', 1);
INSERT INTO `prereqs` VALUES(27, 19, 'Permission of Academic Director/Advisor ', 1);
INSERT INTO `prereqs` VALUES(28, 20, 'MM1123 Fundamentals of Web-based Programming', 1);
INSERT INTO `prereqs` VALUES(29, 21, 'MM2201 Interface Design', 1);
INSERT INTO `prereqs` VALUES(32, 22, 'MA1134 Principles of 3-D Modeling', 1);
INSERT INTO `prereqs` VALUES(33, 23, 'None', 1);
INSERT INTO `prereqs` VALUES(34, 24, 'MM1123 Fundamentals of Web-based Programming', 1);
INSERT INTO `prereqs` VALUES(36, 25, 'GD2264 Digital Message Making', 1);
INSERT INTO `prereqs` VALUES(37, 26, 'GD1123 Electronic Layout', 1);
INSERT INTO `prereqs` VALUES(38, 27, 'GD2264 Digital Message Making', 1);
INSERT INTO `prereqs` VALUES(39, 29, 'GD1123 Electronic Layout', 1);
INSERT INTO `prereqs` VALUES(40, 31, 'GD2241 Concept Design', 1);
INSERT INTO `prereqs` VALUES(41, 32, 'GD3384 Advanced Design', 1);
INSERT INTO `prereqs` VALUES(42, 33, 'GD4401 Design Team 1', 1);
INSERT INTO `prereqs` VALUES(43, 35, 'GD2242 Illustrative Concept Design', 1);
INSERT INTO `prereqs` VALUES(44, 36, 'GD3384 Advanced Design', 1);
INSERT INTO `prereqs` VALUES(45, 37, 'GD3391 Graphic Design History', 1);
INSERT INTO `prereqs` VALUES(46, 38, 'GD3381 Introduction to Packaging', 1);
INSERT INTO `prereqs` VALUES(47, 40, 'FS131 Typography I - Traditional', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` VALUES(38, 16, 'Quarter Credit Hour Definition:', '<p>A quarter credit hour is an amount of work represented in intended learning outcomes and verified by evidence of student achievement that is an institutionally established equivalency that reasonably approximates not less than:</p>\r\n<p>(1) One hour of classroom or direct faculty instruction and a minimum of two hours of out-of-class student work each week for 10-12 weeks, or the equivalent amount of work over a different amount of time; or</p>\r\n<p>(2) At least an equivalent amount of work as required in paragraph (1) of this definition for other academic activities as established by the institution including laboratory work, internships, practica, studio work, and other academic work leading to the award of credit hours.</p>', 1);
INSERT INTO `sections` VALUES(39, 16, 'Classroom Policy:', '<ul>\r\n<li>No food allowed in class or lab at any time. Drinks in recloseable bottles allowed in classroom.</li>\r\n<li>Edible items brought to class or lab must be thrown out.</li>\r\n<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>\r\n<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>\r\n<li>Break times are scheduled by the instructor at appropriate intervals.</li>\r\n<li>No private software is to be brought to lab or loaded onto school computers.</li>\r\n<li>No software games are allowed in lab (unless in course curriculum).</li>\r\n<li>Headphones are required if listening to music during lab. No headphones are allowed in lecture.</li>\r\n<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.</li>\r\n<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>\r\n</ul>', 2);
INSERT INTO `sections` VALUES(40, 16, 'School-wide Attendance Policy:', '<p>Students who do not attend any classes for fourteen (14) consecutive calendar days and fail to notify the Academic Affairs Department will be withdrawn from school.&nbsp; In addition, the student may be involuntarily withdrawn at the discretion of the Academic Director, and with the approval of the Dean of Academic Affairs, at any time.</p>', 3);
INSERT INTO `sections` VALUES(41, 16, 'Withdraw from a Course:', '<p>In order to withdraw from a course (that is, receive a grade of &ldquo;W&rdquo;), a student must meet with his or her Academic Director before noon on the Friday of week 9.</p>', 4);
INSERT INTO `sections` VALUES(42, 16, 'Academic Dishonesty:', '<p>Students are expected to maintain the highest standards of academic honesty while pursuing their studies at The Art Institutes. Academic dishonesty includes but is not limited to: plagiarism and cheating; misuse of academic resources or facilities; and misuse of computer software, data, equipment or networks.</p>\r\n<p>Plagiarism is the use (copying) of another person&rsquo;s ideas, words, visual images or audio samples, presented in a manner that makes the work appear to be the student&rsquo;s original creation. All work that is not the student&rsquo;s original creation, or any idea or fact that is not &ldquo;common knowledge,&rdquo; must be documented to avoid even accidental infractions of the conduct code.</p>\r\n<p>Cheating is to gain unfair advantage on a grade by deception, fraud, or breaking the rules set forth by the instructor of the class. Cheating may include but is not limited to: copying the work of others; using notes or other materials when unauthorized; communicating to others during an exam; and any other unfair advantage as determined by the instructor.</p>\r\n<p>Students accused of academic dishonesty will be brought before a Student Conduct Committee. If the committee determines that there has been a violation of the Academic Dishonesty policy, the student will automatically fail the class and, depending on the severity of the infraction, may face further disciplinary action up to and including suspension from classes or expulsion from school.</p>', 5);
INSERT INTO `sections` VALUES(43, 16, 'Disability Policy Statement:', '<p>It is our policy not to discriminate against qualified students with documented disabilities in our educational programs, activities, or services. If you have a disability-related need for adjustments or other accommodations in this class see Steven Franklin, Director of Student Affairs located on the 2<sup>nd</sup> &nbsp;floor or e-mail him at sfranklin@aii.edu. You must inform your instructors and the Academic Affairs Office before the end of week one of classes and preferably before the class start.</p>', 6);
INSERT INTO `sections` VALUES(44, 16, 'Student Assistance Program:', '<p>The college provides confidential short-term counseling, crisis intervention, and community referral services through the AllOne Health Student Assistance Program (SAP) for a wide range of concerns, including relationship issues, family problems, loneliness, depression, and alcohol or drug abuse. Services are available 24 hours a day, 7 days a week, at 1.888-617-3362. The Student Affairs office also offers programs on mental health-related topics each quarter. If you have any questions regarding counseling services, please contact the Student Affairs office.</p>', 7);
INSERT INTO `sections` VALUES(45, 16, 'Library Operation Hours:', '<p>The library is open from 8 AM to 8 PM Monday &ndash; Thursday, 8 AM to 5 PM on Friday and 9 AM to 2 PM on Saturday. The library is closed on Sunday.&nbsp; Computers are available during these hours for students to work on classroom projects.</p>', 8);

-- --------------------------------------------------------

--
-- Table structure for table `syll_process`
--

CREATE TABLE `syll_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_time` datetime NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `user_id` (`user_id`),
  KEY `director_id` (`director_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `syll_process`
--

INSERT INTO `syll_process` VALUES(9, 20, 16, 16, 2, '2012-06-20 16:50:09', '');
INSERT INTO `syll_process` VALUES(10, 23, 21, 1, 0, '2012-06-21 05:33:40', 'You should probably list your specific office hour, as well as put by appointment.\r\n\r\nAlso, since it is back in draft mode, you can fix the additional policy that got cut off. I guess I was thinking these would be shorter. I can make it a bigger field. Don''t enter any bullets on these, they get added when the syllabus is generated. There is an extra one in the last policy.');
INSERT INTO `syll_process` VALUES(11, 21, 21, 1, 2, '2012-06-21 05:27:45', 'Looks good Dawn.');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term` tinyint(1) NOT NULL,
  `year` year(4) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `locked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` VALUES(16, 3, 2012, '2012-07-09', '2012-09-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` blob NOT NULL,
  `type` tinyint(1) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'William', 'Mead', 'wmmead', 0xb99f24961740, 1, '530-219-8998', 'wmead@aii.edu', 1, 'userphoto1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor consequat augue, id ullamcorper est cursus sagittis. Praesent vel nibh sit amet arcu euismod euismod. In porta rhoncus sem, nec elementum lacus suscipit id. Praesent molestie adipiscing magna, a tempus sem semper a. Cras nibh ante, mattis a iaculis a, vehicula et nisi. In tincidunt ullamcorper pulvinar. Vivamus ut tristique ipsum. Morbi diam urna, lacinia et sollicitudin feugiat, condimentum ac urna. Duis aliquet adipiscing sem quis sagittis. Morbi sed dolor elit.');
INSERT INTO `users` VALUES(10, 'Bill', 'Admin', 'bmead', 0x329eaadc3ca2, 2, '530-313-5141', 'wmmead@mac.com', 1, '', 'Hi, I am an administrator of this system. I hope you like my necktie.');
INSERT INTO `users` VALUES(11, 'Chrystal', 'Mota', 'cmota', 0x772f2284c12f504a, 2, '916-830-6336', 'cmota@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(12, 'Lawrence', 'Richman', 'lrichman', 0x77e1c96f8c761ec3, 1, '916-830-6344', 'lrichman@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(13, 'Doug', 'Herndon', 'dherndon', 0x801c7cc670ee1e30, 1, '916-830-6324', 'dpherndon@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(15, 'Dan', 'Randall', 'drandall', 0xec5ec3722cbe97, 0, '530-723-6630', 'chessdan@gmail.com', 1, 'userphoto15.jpg', 'none listed');
INSERT INTO `users` VALUES(16, 'Janelle', 'Wheelock', 'jwheelock', 0xbdfa7b6833ffc38e, 1, '916-830-6330', 'jwheelock@aii.edu', 1, '', 'Solves rubix cubes');
INSERT INTO `users` VALUES(17, 'John', 'Mounier', 'jmounier', 0xdb3b6de010311aa5, 1, '916-830-6964', 'jmounier@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(18, 'Jon', 'Nutting', 'jnutting', 0x3a7b1622a34c988a, 0, '916-214-3997', 'jonnut@sbcglobal.net', 1, '', '');
INSERT INTO `users` VALUES(19, 'Marosi', 'White', 'mwhite', 0x0d21229de94f78df, 1, '916-830-6344', 'mawhite@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(20, 'Rob', 'Huddleston', 'rhuddleston', 0x188dfd1d8ae71746, 0, '916-743-3020', 'rhuddleston@aii.edu', 1, '', 'none listed');
INSERT INTO `users` VALUES(21, 'Dawn', 'Pedersen', 'dpedersen', 0x95cbd39d310797799968, 0, '916-320-1371', 'dawn@blulob.com', 1, 'userphoto21.jpg', 'I teach web.');
INSERT INTO `users` VALUES(22, 'Stephen', 'Studyvin', 'sstudyvin', 0xdb502e23d882cae7, 0, '510-857-7450', 'sstudyvin@aii.edu', 1, '', 'none listed');
INSERT INTO `users` VALUES(23, 'Adriana', 'Perez', 'aperez', 0xef725e5a5ff56c8f, 0, '530-574-3187', 'aperez@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(24, 'Steve', 'Holler', 'sholler', 0x77d064a32db61892, 0, '916-202-3200', 'rholler@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(25, 'Holly', 'Agundes', 'hagundes', 0x772f79f998bb153b, 0, '916-230-1362', 'hagundes@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(26, 'Kevin', 'Trivedi', 'ktrivedi', 0xb2b9eb24fe47d62c, 0, '123-456-7890', 'ktrivedi@edmc.edu', 1, '', '');
INSERT INTO `users` VALUES(27, 'Daniel', 'Von Nydeggen', 'dvonnydeggen', 0xdfab57d06abdb396, 0, '917-715-5584', 'dvonnydeggen@edmc.edu', 1, '', '');
INSERT INTO `users` VALUES(28, 'Steve', 'Mehallo', 'smehallo', 0xada15c2b8cfaf48a, 0, '916-331-9172', 'steve@mehallo.com', 1, '', '');
