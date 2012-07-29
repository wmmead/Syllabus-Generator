-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2012 at 12:10 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=617 ;

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
INSERT INTO `activities` VALUES(122, 17, 1, '<p>Intro to Game Level Design / 3D Essentials / Unity 3D Game Engine Introduction / 3D Import into Unity. Brainstorm / Plan / Research / Document a game idea that you will build during the quarter.</p>');
INSERT INTO `activities` VALUES(123, 17, 2, '<p>Unity Programming Concepts (i.e. game objects, variables, operators, time tracking, instantiation, vectors, collision detection, raycasting, event handling, sound integration, etc)</p>');
INSERT INTO `activities` VALUES(124, 17, 3, '<p>Unity Programming Concepts (continued)</p>');
INSERT INTO `activities` VALUES(125, 17, 4, '<p>Unity Programming Concepts (continued)</p>');
INSERT INTO `activities` VALUES(126, 17, 5, '<p>Midterm - Present a game prototype to class for review.</p>');
INSERT INTO `activities` VALUES(127, 17, 6, '<p>Unity GUI (Interface Design, HUDs, Help Systems, Text, Interactivity)</p>');
INSERT INTO `activities` VALUES(128, 17, 7, '<p>Unity GUI (continued)</p>');
INSERT INTO `activities` VALUES(129, 17, 8, '<p>Unity GUI (continued)</p>');
INSERT INTO `activities` VALUES(130, 17, 9, '<p>Holiday</p>');
INSERT INTO `activities` VALUES(131, 17, 10, '<p>Game Deployment Options. Game Markets and Promotion. Profit / Non-Profit Strategies.</p>');
INSERT INTO `activities` VALUES(132, 17, 11, '<p>Final - Present game for class review.</p>');
INSERT INTO `activities` VALUES(133, 18, 1, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">Introduction; Understanding Database Basics</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Intro to MS Access and PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Read chapters 1 &amp; 2.</span></p>\r\n<p>&nbsp;</p>');
INSERT INTO `activities` VALUES(134, 18, 2, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">The Relational Database Model</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">CMS Project Introduction, Develop structure, PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Read chapter 3</span></p>');
INSERT INTO `activities` VALUES(135, 18, 3, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">Managing Data</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Developing Mockups, PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Read chapter 4.</span></p>');
INSERT INTO `activities` VALUES(136, 18, 4, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">Project Development Part 1</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development, PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Read chapter 5.</span></p>');
INSERT INTO `activities` VALUES(137, 18, 5, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">Midterm</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development, PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Read chapters 6 &amp; 7.</span></p>');
INSERT INTO `activities` VALUES(138, 18, 6, '<p><span style="font-size: small;"><strong>Lecture:</strong></span><span style="font-size: small;"> Guest Lecture</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development, PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Project Development</span></p>');
INSERT INTO `activities` VALUES(139, 18, 7, '<p><span style="font-size: small;"><strong>Lecture:</strong></span><span style="font-size: small;"> Project Development Part 2</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development, PHP Challenges</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Project Development</span></p>');
INSERT INTO `activities` VALUES(140, 18, 8, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">Project Development Part 3</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Project Development</span></p>');
INSERT INTO `activities` VALUES(141, 18, 9, '<p><span style="font-size: small;"><strong>Lecture:</strong></span><span style="font-size: small;"> Project Development Part 4</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Project Development</span></p>');
INSERT INTO `activities` VALUES(142, 18, 10, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">Project Development Part 5</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Project Development</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">Complete Final Project</span></p>');
INSERT INTO `activities` VALUES(143, 18, 11, '<p><span style="font-size: small;"><strong>Lecture: </strong></span><span style="font-size: small;">None</span></p>\r\n<p><span style="font-size: small;"><strong>Lab: </strong></span><span style="font-size: small;">Present final projects</span></p>\r\n<p><span style="font-size: small;"><strong> Homework: </strong></span><span style="font-size: small;">None.</span></p>');
INSERT INTO `activities` VALUES(144, 19, 1, '<p><strong>Lecture</strong>: Public Speaking</p>\r\n<p><strong>Lab</strong>: Prepare and deliver a presentation</p>\r\n<p><strong>Homework</strong>: Interview relevant faculty for project #1</p>');
INSERT INTO `activities` VALUES(145, 19, 2, '<p><strong>Lecture</strong>: Presentation Skills: PowerPoint and Keynote, Prezi and Impress.js</p>\r\n<p><strong>Lab</strong>: Study effective presentation techniques; prepare presentation</p>\r\n<p><strong>Homework</strong>: Identify project objectives and create project outline</p>');
INSERT INTO `activities` VALUES(146, 19, 3, '<p><strong>Lecture</strong>: eLearning Techniques</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab</strong>: Introduction to Camtasia</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework</strong>: Prepare first draft of project</p>');
INSERT INTO `activities` VALUES(147, 19, 4, '<p><strong>Lecture</strong>: Editing techniques</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab</strong>: Review After Effects and Premiere</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework</strong>: Shoot introductory video for project</p>');
INSERT INTO `activities` VALUES(148, 19, 5, '<p><strong>Lecture</strong>: Title and credit sequences</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab</strong>: Edit project</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework</strong>: Continue work on project</p>');
INSERT INTO `activities` VALUES(149, 19, 6, '<p><strong>Lecture</strong>: Finishing touches</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lecture</strong>: Finalize project #1</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework</strong>: None</p>\r\n<p>&nbsp;</p>');
INSERT INTO `activities` VALUES(150, 19, 7, '<p><strong>Lecture:</strong> Introduction to Adobe Captivate</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Begin work on project 2</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework:</strong> Interview relevant faculty; create outline</p>');
INSERT INTO `activities` VALUES(151, 19, 8, '<p><strong>Lecture</strong>: Advanced Captive techniques</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab</strong>: Work with Captivate</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework</strong>: Work on project</p>');
INSERT INTO `activities` VALUES(152, 19, 9, '<p><strong>Lecture</strong>: Quizzes</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab</strong>: Develop quizzes</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework</strong>: Work on project</p>\r\n<p><strong><br /></strong></p>');
INSERT INTO `activities` VALUES(153, 19, 10, '<p><strong>Lecture</strong>: None</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab</strong>: Work on final project</p>');
INSERT INTO `activities` VALUES(154, 19, 11, '<p><strong>Lecture</strong>: None</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Final Project</strong>: Finalize project</p>');
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
INSERT INTO `activities` VALUES(177, 22, 1, '<p>Branding and the Role of Design</p>');
INSERT INTO `activities` VALUES(178, 22, 2, '<p>Branding Strategies</p>');
INSERT INTO `activities` VALUES(179, 22, 3, '<p>Logo Design Basics</p>');
INSERT INTO `activities` VALUES(180, 22, 4, '<p>Logo Design Elements</p>');
INSERT INTO `activities` VALUES(181, 22, 5, '<p>System Dynamics</p>');
INSERT INTO `activities` VALUES(182, 22, 6, '<p>Logo Implementation</p>');
INSERT INTO `activities` VALUES(183, 22, 7, '<p>Web Branding</p>');
INSERT INTO `activities` VALUES(184, 22, 8, '<p>Advertising</p>');
INSERT INTO `activities` VALUES(185, 22, 9, '<p>Web-Based Marketings</p>');
INSERT INTO `activities` VALUES(186, 22, 10, '<p>Topic TBD</p>');
INSERT INTO `activities` VALUES(187, 22, 11, '<p>Final Project Lab</p>');
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
INSERT INTO `activities` VALUES(199, 24, 1, '<p>JavaScript Basics and DOM</p>');
INSERT INTO `activities` VALUES(200, 24, 2, '<p>Calling JavaScript Functions</p>');
INSERT INTO `activities` VALUES(201, 24, 3, '<p>JavaScript Rollovers</p>');
INSERT INTO `activities` VALUES(202, 24, 4, '<p>Menus, Slideshows and Strings</p>');
INSERT INTO `activities` VALUES(203, 24, 5, '<p>jQuery Basics</p>');
INSERT INTO `activities` VALUES(204, 24, 6, '<p>jQuery Sliders</p>');
INSERT INTO `activities` VALUES(205, 24, 7, '<p>Rotators and Animators</p>');
INSERT INTO `activities` VALUES(206, 24, 8, '<p>AJAX Basics</p>');
INSERT INTO `activities` VALUES(207, 24, 9, '<p>Message Boards</p>');
INSERT INTO `activities` VALUES(208, 24, 10, '<p>More jQuery Interface Tools</p>');
INSERT INTO `activities` VALUES(209, 24, 11, '<p>Final Project Lab</p>');
INSERT INTO `activities` VALUES(210, 25, 1, '<p><strong>Lecture:</strong> Introduction to class, goals and expectations. Graphic Signals: Introduction to Semiotics</p>\r\n<p><strong>Lab: </strong>Signs: icon, index and symbol, Contrasting Definitions</p>\r\n<p><strong><em>Homework</em></strong>: Creative Brief + Visual Audit<em></em></p>\r\n<p><strong>Read: </strong>1-18 Type and Image</p>');
INSERT INTO `activities` VALUES(211, 25, 2, '<p><strong>Lecture:</strong> Images and Meaning&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>Lab:</strong> Language as a model for visual communication/Simile, metaphor, personification, pun</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Images and Meaning</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>&nbsp;&nbsp;</strong><strong>Read: </strong>19-40 Type and Image</p>');
INSERT INTO `activities` VALUES(212, 25, 3, '<p><strong>Lecture:</strong> Language, Typography, and Meaning, Midterm Project Assigned&nbsp;&nbsp;</p>\r\n<p><strong>Lab:</strong> Connotation Exercise</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Connotation Cube, Language, Typography &amp; Meaning</p>\r\n<p><strong></strong><strong><em>Re</em></strong><strong>Read: </strong>19-40 Type and Image</p>');
INSERT INTO `activities` VALUES(213, 25, 4, '<p><strong>Lecture:</strong> Typography and Meaning&nbsp;</p>\r\n<p><strong>Lab:</strong>&nbsp; Connotation and resonance in type</p>\r\n<p><strong><em>Homework: </em></strong>Graphic Space and Meaning</p>\r\n<p>&nbsp;<strong>Read: </strong>41-44, 56-61, 120-126 Type and Image</p>');
INSERT INTO `activities` VALUES(214, 25, 5, '<p><strong>Lecture:</strong> Combining Type and Image, Midterm Critique</p>\r\n<p><strong>Lab:</strong> Juxtaposition, synergy</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Midterm Assignment &ndash; Message Analysis</p>\r\n<p><strong>Read: </strong>45-55, 62-68 Type and Image</p>');
INSERT INTO `activities` VALUES(215, 25, 6, '<p><strong>Lecture:</strong> Graphic Space and Meaning</p>\r\n<p><strong>Lab: </strong>Composition and structures</p>\r\n<p><strong><em>Homework</em></strong><em>: </em>Graphic Space and Meaning (Continued)</p>\r\n<p><strong>Read: </strong>69-90 Type and Image</p>');
INSERT INTO `activities` VALUES(216, 25, 7, '<p><strong>Lecture:</strong> Continued</p>\r\n<p><strong>Lab:</strong> Composition and structures</p>\r\n<p><strong><em>Homework:</em></strong><em>&nbsp; </em>Graphic Resonance</p>\r\n<p><strong>Read Chapter 10 -11:</strong> pages 192-236</p>');
INSERT INTO `activities` VALUES(217, 25, 8, '<p><strong>Lecture: </strong>Design Elements and Meaning</p>\r\n<p><strong>Lab: </strong>Repetition, scale, motion, tension</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Enhancing the Message<em></em></p>\r\n<p><em></em><strong>Read: </strong>92-116 Type and Image<em></em></p>');
INSERT INTO `activities` VALUES(218, 25, 9, '<p><strong>Lecture: </strong>Resonance in Meaning<em></em></p>\r\n<p><strong>Lab:</strong> Open lab</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Graphic Resonance, Part 2<em></em></p>\r\n<p><strong>Read:</strong> 92-152 Type and Image<em></em></p>');
INSERT INTO `activities` VALUES(219, 25, 10, '<p><strong>Lecture:</strong> Resonance in Image</p>\r\n<p><strong>Lab:</strong> Final Project<strong><em></em></strong></p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Final Project<em></em></p>');
INSERT INTO `activities` VALUES(220, 25, 11, '<p><strong><span style="font-size: 11pt; font-family: Garamond; color: black;">Lecture: </span></strong><span style="font-size: 11pt; font-family: Garamond; color: black;">Overview, Final Project Presentations</span></p>');
INSERT INTO `activities` VALUES(221, 26, 1, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Class introduction:</em> Brief review of the syllabus &amp; student background sheet.</li>\r\n<li><em>Review of raster topics:</em> File Size/Hardware Limitations, and file formatting for various output.</li>\r\n<li><em>Advanced drawing and painting with Photoshop: </em>Defining brushes, advanced brush techniques, painting in layers, &amp; layer organization.</li>\r\n</ul>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong>In-class project of student portrait.</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong></p>\r\n<ul>\r\n<li>Complete student background sheet</li>\r\n<li>Print out Syllabus and bring in signature page</li>\r\n</ul>');
INSERT INTO `activities` VALUES(222, 26, 2, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Retouching &amp; Optimizing:</em> Color correction, tonal correction, spotting/cloning, cropping, &amp; formatting for various output.</li>\r\n<li><em>Advanced Selection Techniques:</em> Using channels, color range, and calculations to generate complex masks and selections.</li>\r\n</ul>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong></p>\r\n<ul>\r\n<li>Use the techniques covered in the lecture to retouch and optimize a group of images. The images will present different problems that will require different selection techniques and retouching solutions.</li>\r\n<li>Begin sketches and concept development for mid-term project. Create a materials list, &amp; a shot list (shot list can include stock imagery).</li>\r\n</ul>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong></p>\r\n<ul>\r\n<li>Write a thoughtful 1 page, double spaced paper on how you can incorporate the readings to further your own image-making practice, technique, and workflow.&nbsp;</li>\r\n</ul>');
INSERT INTO `activities` VALUES(223, 26, 3, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li>Understanding the difference between royalty free and restricted use royalty free stock photography.</li>\r\n<li><em>The Pen Tool</em>: Shape layers &amp; paths. Advantages of using the pen tool for certain types of selections.</li>\r\n<li><em>Introduce:</em> The mid-term project. Using a &ldquo;Proof Of Concept&rdquo; in your workflow.</li>\r\n</ul>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: </strong></p>\r\n<ul>\r\n<li>Complete the tracing, and shape layer exercises using the pen tool.</li>\r\n</ul>\r\n<p><strong>Homework</strong>:</p>\r\n<ul>\r\n<li>Create <em>at least</em> (2)<strong> </strong>&ldquo;Proof of Concepts&rdquo; for your mid-term project; include any sketches, tear sheets, and imagery used in the mock up. I MUST approve your Concept Proof prior to working on what you will submit for your mid-term final.</li>\r\n<li>Creative Photoshop: Chapter 2 (Completed files are due the following class).</li>\r\n</ul>');
INSERT INTO `activities` VALUES(224, 26, 4, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Using Vectors in Photoshop:</em> Mixing vector illustration within a bitmap/raster image file. We will work with bridging the gap between Illustrator and Photoshop, and discuss the advantages to each. <em></em></li>\r\n<li><em>Presenting Proof of Concept:</em> I will review the proofs, and students will receive approval, or a revision suggestion for the mid-term project.<em></em></li>\r\n</ul>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong></p>\r\n<ul>\r\n<li>Complete Vectors assignment</li>\r\n</ul>\r\n<p><strong>Homework:</strong></p>\r\n<ul>\r\n<li>Finalize Mid-term Concept and Layout (Have this ready to work on for the next class session)<strong></strong></li>\r\n<li>Complete Resolution assignment</li>\r\n<li>Complete Printing/Curves Adjustment Layer assignment&nbsp;</li>\r\n</ul>');
INSERT INTO `activities` VALUES(225, 26, 5, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li>Complete Midterms</li>\r\n<li>Discuss the art of presentation (print mounting, &amp; over-mat cutting).</li>\r\n</ul>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework:</strong></p>\r\n<ul>\r\n<li>Complete Midterms</li>\r\n</ul>');
INSERT INTO `activities` VALUES(226, 26, 6, '<p><strong>Topics Include:</strong></p>\r\n<p><em>Critique of midterm projects:</em> Be prepared to talk about your work and discus the conceptual and aesthetics choices behind your work.</p>');
INSERT INTO `activities` VALUES(227, 26, 7, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Introduce:</em> Final Project</li>\r\n<li><em>Image Mood and Color:</em> Taking an image and alter the mood of the image using color.</li>\r\n<li><em>Duotones and Color Key:</em> Use of color adjustment tools and various color modes. Discussion on which modes are best for shifting modes of output.</li>\r\n</ul>\r\n<p><strong>Lab: </strong></p>\r\n<ul>\r\n<li>Take 4 images and present them in 4 different color combinations that alter the mood of the image.</li>\r\n</ul>\r\n<p><strong>Homework:</strong></p>\r\n<ul>\r\n<li>Take a sequence of 5 photos to make an animated Gif<strong></strong></li>\r\n<li>Create (2) &ldquo;proof of concepts&rdquo; for your Final Project (Due the following class &ndash; Week 8)</li>\r\n</ul>');
INSERT INTO `activities` VALUES(228, 26, 8, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Review Proof of Concepts for final project</em></li>\r\n<li><em>Creating files for the web:</em> Making a Gif animation.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n</ul>\r\n<p><strong>Lab: </strong>Create your own PDF Slideshow and Gif animation. Begin proof of concepts for final.</p>\r\n<p><strong>Homework:</strong></p>\r\n<ul>\r\n<li>Create a 1<sup>st</sup> Draft of your final project based on your accepted Proof of Concept.</li>\r\n</ul>');
INSERT INTO `activities` VALUES(229, 26, 9, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Channels</em></li>\r\n<li><em>Multi-pass selections</em></li>\r\n<li><em>Calculations</em></li>\r\n</ul>\r\n<p><strong>Lab:</strong></p>\r\n<ul>\r\n<li>Complete channels and calculations exercise</li>\r\n</ul>');
INSERT INTO `activities` VALUES(230, 26, 10, '<p><strong>Topics Include:</strong></p>\r\n<ul>\r\n<li><em>Peer Review of current working draft for Final Project.</em></li>\r\n</ul>\r\n<p><strong>Homework:</strong></p>\r\n<ul>\r\n<li>Complete Final Project</li>\r\n</ul>');
INSERT INTO `activities` VALUES(231, 26, 11, '<p><strong>Topics Include: </strong>Final Critique.</p>');
INSERT INTO `activities` VALUES(232, 27, 1, '');
INSERT INTO `activities` VALUES(233, 27, 2, '');
INSERT INTO `activities` VALUES(234, 27, 3, '');
INSERT INTO `activities` VALUES(235, 27, 4, '');
INSERT INTO `activities` VALUES(236, 27, 5, '');
INSERT INTO `activities` VALUES(237, 27, 6, '');
INSERT INTO `activities` VALUES(238, 27, 7, '');
INSERT INTO `activities` VALUES(239, 27, 8, '');
INSERT INTO `activities` VALUES(240, 27, 9, '');
INSERT INTO `activities` VALUES(241, 27, 10, '');
INSERT INTO `activities` VALUES(242, 27, 11, '');
INSERT INTO `activities` VALUES(243, 28, 1, '<p>stuff</p>');
INSERT INTO `activities` VALUES(244, 28, 2, '<p>stuff</p>');
INSERT INTO `activities` VALUES(245, 28, 3, '<p>stuff</p>');
INSERT INTO `activities` VALUES(246, 28, 4, '<p>stuff</p>');
INSERT INTO `activities` VALUES(247, 28, 5, '<p>stuff</p>');
INSERT INTO `activities` VALUES(248, 28, 6, '<p>stuff</p>');
INSERT INTO `activities` VALUES(249, 28, 7, '<p>stuff</p>');
INSERT INTO `activities` VALUES(250, 28, 8, '<p>stuff</p>');
INSERT INTO `activities` VALUES(251, 28, 9, '<p>stuff</p>');
INSERT INTO `activities` VALUES(252, 28, 10, '<p>stuff</p>');
INSERT INTO `activities` VALUES(253, 28, 11, '<p>stuff</p>');
INSERT INTO `activities` VALUES(254, 29, 1, '<p>Introduction: Course Expectations | What Is Your Learning Style? | Information Literacy: Learning How to Learn Expectations of Students in the Graphic Design Program (i.e., Using myaicampus &bull; Courses and skills learned &bull; Portfolio requirements and job outcomes)<strong><br />Homework:</strong> None</p>');
INSERT INTO `activities` VALUES(255, 29, 2, '<p>Weekly Learning Reflection | Peer Mentoring | Communicating Effectively &amp; Interpersonal Communication | P1: Graphic Design Team-Based Project Introduced<br /><strong>Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(256, 29, 3, '<p>Weekly Learning Reflection | Time Management | Identifying Your School Community | Student Services Guest Speaker (i.e., Points of contact on campus &bull; Organization and time management skills &bull; Survival guide &bull; Student Handbook and Course Catalog)<br /> <strong>Homework:</strong> None</p>');
INSERT INTO `activities` VALUES(257, 29, 4, '<p>Weekly Learning Reflection | Registration &amp; Program Advising: Making the Most of It. | Advising Services Guest Speaker (Program matrix and degree audit &bull; How to register &bull; Online classes)<strong><br />Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(258, 29, 5, '<p>Weekly Learning Reflection | Reflection | The Library and how it can make you a successful student (Print/video/digital resources) | Librarian Guest Speaker <strong><br />Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(259, 29, 6, '<p>Weekly Learning Reflection | Reflection | Team Project Continued (Graphic Design Standards &amp; Critiques) | Graphic Design Studio Tour (tentative)<strong><br />Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(260, 29, 7, '<p>Weekly Learning Reflection | Career Services and Your Professional Development | Career Services Guest Speaker (i.e., Expectations in the graphic design industry &bull; Ethics in the business world &bull; Internships, jobs and r&eacute;sum&eacute; basics)<br /> <strong>Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(261, 29, 8, '<p>Weekly Learning Reflection | How to Present Graphic Design Projects | Observe GD Portfolio Review | P1: Graphic Design Team Project Mock Presentations <strong><br />Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(262, 29, 9, '<p>Weekly Learning Reflection | Career Critique of Portfolio Review | Understanding Financial Health | Financial Services Guest Speaker | Financial Services Guest Speaker (Building credit &bull; Budgeting: Managing daily, monthly, yearly expenses &bull; Understanding student loan finances and repayment plans &bull; How to make wise financial decisions)<br /> <strong>Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(263, 29, 10, '<p>P1: Graphic Design Group Project Final Presentations | Portfolio Requirements Review | <strong>Homework</strong>: None</p>');
INSERT INTO `activities` VALUES(264, 29, 11, '<p>NO CLASS but students must attend Portfolio Show on Thursday, Sept. 20 from 6 to 7 pm and post Journal Entry by Friday.</p>\r\n<p>Portfolio Show Schedule (Please confirm schedule with Career Services)<br />&bull; 3:30 PM - 5:00 PM Employers &amp; Industry Leaders <br />&bull; 5:00 PM - 7:00 PM Family &amp; Friends <br /><strong>&bull; 6:00 PM - 7:00 PM Current Students &larr;</strong></p>\r\n<p><strong><em>NOTE:</em></strong><em> The course outline is subject to change at the discretion of the instructor to accommodate instructional flow and/or student needs. It is the responsibility of the student to keep abreast of these changes. For exact details of homework assignments see assignments specified on the myaicampus site for this class. </em>Major assignments requiring homework time are included in this schedule to assist you in planning your overall workload. In-class activities and assignments may or may not be specified in this schedule, but will be part of the course activities and the assessments towards your final grade. <em></em></p>\r\n<p><strong><br /></strong></p>');
INSERT INTO `activities` VALUES(265, 30, 1, '<p><strong>Lecture: </strong>Course Overview.&nbsp; Why study Graphic Design History? | From the invention of writing to the illuminated manuscripts. <strong></strong></p>\r\n<p><strong>Lab: </strong>Design Session + Research Session + Discussion<strong></strong></p>\r\n<p><strong>Homework: </strong>Read Chapters 1-4 (Pages 1-63) | Assignment 1 | Quiz Study</p>');
INSERT INTO `activities` VALUES(266, 30, 2, '<p><strong>Lecture: </strong>The Birth of Typography and Printing<strong></strong></p>\r\n<p><strong>Lab: </strong>Design Session | Quiz + Assignment 1 Discussion | Research<strong></strong></p>\r\n<p><strong>Homework: </strong>Read Chapters 5-8 (Pages 64-139) | Assignment 2 | Quiz Study</p>');
INSERT INTO `activities` VALUES(267, 30, 3, '<p><strong>Lecture: </strong>The Industrial Revolution<strong></strong></p>\r\n<p><strong>Lab: </strong>Design Session | Quiz + Assignment 2 Discussion | Research<strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapters 9-12 (Pages 140-251) | Assignment 3 | Quiz Study</p>');
INSERT INTO `activities` VALUES(268, 30, 4, '<p><strong>Lecture: </strong>1<sup>st</sup> World War, Sachplakat &nbsp;+ The &ldquo;Isms&rdquo;<strong></strong></p>\r\n<p><strong>Lab: </strong>Design Session | Quiz + Assignment 3 Discussion | Research<strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapters 13-14 (Pages 252-297) | Assignment 4 | Quiz Study</p>');
INSERT INTO `activities` VALUES(269, 30, 5, '<p><strong>Lecture: </strong>Constructivism, De Stijl, and the Bauhaus<strong></strong></p>\r\n<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 4 Discussion | Research<strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapters 15-16 (Pages 298-349) | Assignment 5 | Quiz Study</p>');
INSERT INTO `activities` VALUES(270, 30, 6, '<p><strong>Lecture: </strong>Commercial Modernism <strong></strong></p>\r\n<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 5 Discussion | Research<strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapter 17 (Pages 350-371) | Assignment 6 | Quiz Study</p>');
INSERT INTO `activities` VALUES(271, 30, 7, '<p><strong>Lecture: </strong>International Typographic Style<strong></strong></p>\r\n<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 6 Discussion | Research <strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapter 18 (Pages 372-389) | Assignment 7 | Quiz Study</p>');
INSERT INTO `activities` VALUES(272, 30, 8, '<p><strong>Lecture: </strong>New York School + Corporate Identity and Visual Systems<strong></strong></p>\r\n<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 6 Discussion | Research <strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapters 19-20 (Pages 390-435) | Assignment 8 | Quiz Study</p>');
INSERT INTO `activities` VALUES(273, 30, 9, '<p><strong>Lecture: </strong>Postmodernism<strong></strong></p>\r\n<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 7 &amp; 8 Discussion | Research <strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapters 21-22 (Pages 436-481) | Assignment 9 | Quiz Study</p>');
INSERT INTO `activities` VALUES(274, 30, 10, '<p><strong>Lecture: </strong>Contemporary Graphic Design <strong></strong></p>\r\n<p><strong>Lab: </strong>Sketching Session | Quiz + Assignment 9 Discussion | Research<strong></strong></p>\r\n<p><strong>Homework:</strong> Read Chapter 23-24 (Pages 482-571) | Assignment 10 | Quiz Study</p>');
INSERT INTO `activities` VALUES(275, 30, 11, '<p><strong>Lecture: </strong>FINAL PROJECT PRESENTATIONS | Final Exam<strong></strong></p>\r\n<p><strong>Lab: </strong>Final Class Review and Discussion of self-reflections.<strong></strong></p>');
INSERT INTO `activities` VALUES(276, 31, 1, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Course Intro | Grid Basics: Anatomy and Modular Grid | Compositional Principles: Grouping, Negative Space, Law of Thirds, and Alignment Relationships | Assign P1: Poster Design | Assign P4: Process Book<br /> <strong>Lab: </strong>P1 Poster&mdash;PRELIMINARY STUDIES PHASE | Exercise: Grid<br /> <strong>Homework: </strong>A1 Due Week 2&mdash;See handout </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"> + Read pgs.8-15, 24-41, 94-97 </span></p>');
INSERT INTO `activities` VALUES(277, 31, 2, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">P1 Critique | The Design Process | Concept Development | Hierarchy and Focal Point | Type Variables: spacing, alignment, weight, size, style, orientation, gray value |<br /> <strong>Lab: </strong>P1 Poster&mdash;PRELIMINARY STUDIES PHASE (continued) | Exercise: Hierarchy<br /> <strong>Homework: </strong>A2 Due Week 3&mdash;See handout </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"><span>&nbsp; </span>+ <span>&nbsp;</span><span style="letter-spacing: -0.1pt;">Read pgs.52-61, 72-87, 188-189, 200-205,224-225</span></span></p>');
INSERT INTO `activities` VALUES(278, 31, 3, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">P1 Critique | Integrating Type &amp; Image with the Grid | Margins and Proportions | Directional Devices: line, dot, &amp; shape<br /> <strong>Lab: </strong>P1 Poster&mdash;ROUGH PHASE | Exercise: Directional Devices (Graphic Organizers)<br /> <strong><span style="letter-spacing: -0.1pt;">Homework: </span></strong><span style="letter-spacing: -0.1pt;">A3 Due Week 4&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;"> <br /> P4: Preliminary Process Book Layout </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(50 points = 2% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;"> <span>&nbsp;</span>Read pgs. 88-93, 98-105, 113-115 + handout</span></p>');
INSERT INTO `activities` VALUES(279, 31, 4, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">P1 Critique | Rhythm and Balance | <span style="color: black;">Typographic Color (value &amp; texture)</span> | Assign P2: Magazine&mdash;(Research)<br /> <strong>Lab: </strong>P1 Poster&mdash;COMP PHASE | Exercise: Rhythm and Balance<br /> <strong>Homework: </strong><span style="letter-spacing: -0.1pt;">A4 Due Week 5&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 6% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Read pgs. 60-71, 106-112,116-125</span></p>');
INSERT INTO `activities` VALUES(280, 31, 5, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">P1 Critique | Project Presentation: How to | Anatomy of Magazine Layout: Structural, Typographic and Graphic System<span>&nbsp; </span>| <span>&nbsp;</span><strong><span style="color: maroon;">Midterm Exam</span></strong> </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 3% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"><br /> <strong><span style="letter-spacing: -0.1pt;">Lab:</span></strong><span style="letter-spacing: -0.1pt;"> P2 MAGAZINE&mdash;RESEARCH &amp; PRELIMINARY STUDIES PHASE | Exercise: Magazine Dissection (frame + format)</span><br /> <strong>Homework: </strong>A5 <span style="letter-spacing: -0.1pt;">Project 1 Due Week 6&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 15% of final grade) </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Read pgs.128-133, 138-141,154-157,<br /> 166-167,172-177 </span></p>');
INSERT INTO `activities` VALUES(281, 31, 6, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: <span style="color: maroon;">P1 Poster FINAL Critique</span></span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"> | Multi-Page Layout and the Grid | Rhythm and Movement on the Page | Assign P2: Magazine Design&mdash;TOC + Department + 2 Spreads feature <br /> <strong>Lab: </strong>P2 Critique of Magazine Anatomy | Exercise: Multi-Page Rhythm<br /> <strong>Homework: </strong><span style="letter-spacing: -0.1pt;">A6 Due Week 7&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 6% of final grade) </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Read pgs. 16-23, 42-51 (inspiration &amp; intuition)</span></p>');
INSERT INTO `activities` VALUES(282, 31, 7, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">P2 Magazine Critique | Spatial Mechanics of Paragraphs |<br /> <strong>Lab: </strong>P2 Magazine&mdash;ROUGH PHASE/CONCEPT DEVELOPMENT | Exercise: Paragraph Mechanics <br /> <strong>Homework:</strong><span style="letter-spacing: -0.1pt;"> A7 Due Week 8&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 6% of final grade)</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"><span>&nbsp;</span><br /> P4: Preliminary v2 Process Book Layout </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">(50 points = 2% of final grade) </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Read &ldquo;You Are Looking at a Box&rdquo; handout</span></p>');
INSERT INTO `activities` VALUES(283, 31, 8, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">P2 Critique Magazine |<strong> </strong>Multi-Page Publication: Narrative, Sequence and Folds | Assign P3: Multi-Page Publication <br /> <strong>Lab: </strong>P2 Magazine&mdash;COMP PHASE | Exercise: Multi-Page Publication Mechanics &amp; Dissection <br /> <strong>Homework: </strong><span style="letter-spacing: -0.1pt;">A8 Due Week 9&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 6% of final grade) </span></strong></p>');
INSERT INTO `activities` VALUES(284, 31, 9, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Course Evaluation | Multi-Page Publication Form Design <br /> <strong>Lab: </strong>P3: Multi-Page Publication (Brochure/Catalogue) &amp; P2 Magazine Critiques </span><span style="font-size: 4pt; font-family: ''Arial Narrow'';"><br /> </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Homework: </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">A9 <span style="letter-spacing: -0.1pt;">Project 2 Due Week 10&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 15% of final grade)</span></strong></p>');
INSERT INTO `activities` VALUES(285, 31, 10, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture:</span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"> <strong><span style="color: maroon;">P2 Magazine FINAL Presentation</span></strong> | Review Project 3 &amp; 4<br /> <strong>Lab: </strong>Crit and work on Multi-Page Publication<br /> <strong>Homework: </strong>A10 <span style="letter-spacing: -0.1pt;">Project 3 Due Week 11&mdash;See handout </span></span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 10% of final grade)<br /> </span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"><span>&nbsp;</span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>&nbsp; </span>Final Process Book Due </span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">(100 points = 4% of final grade)</span></strong></p>\r\n<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"><br /></span></strong></p>');
INSERT INTO `activities` VALUES(286, 31, 11, '<p><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';">Lecture: <span style="color: maroon;">P3 Multi-Page Publication FINAL Presentation</span></span></strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow'';"> |<span>&nbsp; </span><strong><span style="color: maroon;">P4 Process Book Final</span></strong><span style="color: maroon;"> <strong>Presentation</strong></span> | <br /> <strong>Lab: </strong>Self-reflection &amp;</span><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; color: maroon;">Final Exam</span></strong><strong><span style="font-size: 8.5pt; font-family: ''Arial Narrow''; letter-spacing: -0.1pt;">(100 points = 4% of final grade)</span></strong></p>\r\n<p><strong><em>NOTE:</em></strong><em> Course outline is subject to change at the discretion of the instructor to accommodate instructional flow and/or student needs. It is the responsibility of the student to keep abreast of these changes. For exact details of homework assignments see assignments specified in the myaicampus site for this class. </em></p>');
INSERT INTO `activities` VALUES(287, 32, 1, '');
INSERT INTO `activities` VALUES(288, 32, 2, '');
INSERT INTO `activities` VALUES(289, 32, 3, '');
INSERT INTO `activities` VALUES(290, 32, 4, '');
INSERT INTO `activities` VALUES(291, 32, 5, '');
INSERT INTO `activities` VALUES(292, 32, 6, '');
INSERT INTO `activities` VALUES(293, 32, 7, '');
INSERT INTO `activities` VALUES(294, 32, 8, '');
INSERT INTO `activities` VALUES(295, 32, 9, '');
INSERT INTO `activities` VALUES(296, 32, 10, '');
INSERT INTO `activities` VALUES(297, 32, 11, '');
INSERT INTO `activities` VALUES(298, 33, 1, '<p><strong>Lecture:</strong>&nbsp;Course Overview &amp; Projects | Design Philosophy | Problem Definition Lab: P1 Design Philosophy Draft | Image-Making Intro: Design Philosophy + Thumbnail Sketches + Rhetorical Figures <strong>Homework:</strong> Homework A1 Due Week 2 (See homework handout downloadable from the myaicampus portal)</p>');
INSERT INTO `activities` VALUES(299, 33, 2, '<p><strong>Lecture:</strong> Personal Vision, Design Voice, Authorship &amp; Design Philosophy | Concept Statements | <strong>Lab:</strong> P1 Image-Making: Design Philosophy + Rhetorical Figures | P3 Project Brief <strong>Homework:</strong> Homework A2 Due Week 3 (See homework handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(300, 33, 3, '<p><strong>Lecture:</strong> Research | Attribute Mapping | Project Planning &amp; Time Management <strong>Lab:</strong> P1: Design Philosophy DUE&mdash;Final Presentations | P3 Develop attribute map, timeline, and research plan <strong>Homework:</strong> Homework A3 Due Week 4 (See homework handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(301, 33, 4, '<p><strong>Lecture:</strong> Concept &amp; Format | Project Argumentation &amp; Claim of Project Lab: P3 CRIT and refine Project Brief, Research &amp; Writing (develop body copy) | Develop preliminary concepts | Research potential formats | | Homework: Homework A4 Due Week 5 (See handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(302, 33, 5, '<p><strong>Lecture:</strong> Visual Vocabulary (in relationship to concept statement) <strong>Lab:</strong> MIDTERM Design Magazine Cover MIDTERM | P3 Develop visual vocabulary <strong>Homework:</strong> Homework A6 Due Week 7 (See homework handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(303, 33, 6, '<p><strong>Lecture:</strong> Visual Rhetoric and Argumentation <strong>Lab: </strong>P3 Visual Rhetorical Figures | Define project&rsquo;s visual argument and necessary rhetorical figures.<strong> Homework:</strong> Homework A7 Due Week 8 (See homework handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(304, 33, 7, '<p><strong>Lecture:</strong> Layout &amp; Image Making Strategies | Publication Design and Relationship to Vision, Voice &amp; Authorship <strong>Lab:</strong> P3 Finalize publication format | Finalize the publication&rsquo;s visual argument and necessary rhetorical figures. <strong>Homework:</strong> Homework A8 Due Week 9 (See homework handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(305, 33, 8, '<p><strong>Lecture:</strong> Image Making Strategies <strong>Lab:</strong> P3 CRITS | Continue working on Content Development and Implementation (graphics and layout) <strong>Homework:</strong> Homework A9 Due Week 10 (See homework handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(306, 33, 9, '<p><strong>Lecture: </strong>Image Making Strategies | Self-Editing and Critiquing Strategies <strong>Lab:</strong> P3 CRITS | Continue working on Content Development and Implementation (graphics and layout) <strong>Homework:</strong> P3 Task B Due (See handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(307, 33, 10, '<p><strong>Lecture:</strong> The Process Book | Project Presentations How-to <strong>Lab:</strong> P3 Publication DUE | Prepare files for print | Work on Presentation <strong>Homework:</strong> P3 Task C Due (See handout downloadable from the myaicampus portal).</p>');
INSERT INTO `activities` VALUES(308, 33, 11, '<p><strong>Lecture:</strong> Class Review | Individual Self-Reflection <strong>Lab:</strong> P3 Final Presentations | Process Documentation Due</p>');
INSERT INTO `activities` VALUES(309, 34, 1, '<p>Lecture: History of animation and introduction to various animation techniques</p>\r\n<p>Lab: Discuss character and story as it relates to animation</p>\r\n<p>Homework:&nbsp; Analyze animated shorts</p>');
INSERT INTO `activities` VALUES(310, 34, 2, '<p>Lecture: Introduction to Adobe Flash</p>\r\n<p>Lab: Create a basic tweened animation in Flash</p>\r\n<p>Homework: Finish Flash animation</p>');
INSERT INTO `activities` VALUES(311, 34, 3, '<p>Lecture: Frame-by-frame animation; Stop-motion; Rotoscoping</p>\r\n<p>Lab: Create a frame-by-frame animation</p>\r\n<p>Homework: Finish animation</p>');
INSERT INTO `activities` VALUES(312, 34, 4, '<p>Lecture: Inverse kinematics and understanding how humans and animals move</p>\r\n<p>Lab: Animating characters</p>\r\n<p>Homework:&nbsp; Finish animation</p>');
INSERT INTO `activities` VALUES(313, 34, 5, '<p>Mid-term project</p>');
INSERT INTO `activities` VALUES(314, 34, 6, '<p>Week 6: Introduction to After Effects</p>\r\n<p>Lab: Animating titles</p>\r\n<p>Homework: Complete title sequence</p>');
INSERT INTO `activities` VALUES(315, 34, 7, '<p>Week 7:&nbsp; Introduction to 3D Animation</p>\r\n<p>Lab: Work with 3D in After Effects</p>\r\n<p>Homework: Finish 3D sequence</p>');
INSERT INTO `activities` VALUES(316, 34, 8, '<p>Week 8: Final Project Overview</p>\r\n<p>Lab: Understand requirements for final project</p>\r\n<p>Homework: Develop story board for final</p>');
INSERT INTO `activities` VALUES(317, 34, 9, '<p>Holiday - no class</p>');
INSERT INTO `activities` VALUES(318, 34, 10, '<p>Week 9:&nbsp; Introduction to Adobe Edge and animating for the Web without Flash</p>\r\n<p>Lab: Introducing HTML/JavaScript animation</p>\r\n<p>Homework: Complete Edge-based animation</p>');
INSERT INTO `activities` VALUES(319, 34, 11, '<p>Week 11:&nbsp; Final project presentation</p>\r\n<p>Lab: Present final projects to class</p>');
INSERT INTO `activities` VALUES(320, 35, 1, '<p><strong></strong>Lecture: Overview of course. Introduction to Object and Scripting Languages. Introduction to flowcharting and writing pseudocode.</p>\r\n<p>Lab: Create a flowchart of the interaction required for a basic game. Write pseudocode for a portion of the game.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Complete work on flowchart and pseudocode started in class.</p>');
INSERT INTO `activities` VALUES(321, 35, 2, '<p>Lecture: Program Structures</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Flowchart more complex programs using proper logical structures</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish flowcharts</p>');
INSERT INTO `activities` VALUES(322, 35, 3, '<p>Lecture: Making Decisions</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Create the flowchart for a more complex game and a web login interface.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finalize flowcharts.</p>');
INSERT INTO `activities` VALUES(323, 35, 4, '<p>Lecture: Looping</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Integrate loops into a program&rsquo;s structure</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:&nbsp; Complete class work.</p>');
INSERT INTO `activities` VALUES(324, 35, 5, '<p>Lecture: Arrays</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Demonstrate understanding of arrays and complex data structures.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Complete any outstanding class work.</p>');
INSERT INTO `activities` VALUES(325, 35, 6, '<p>Lecture: Functions</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Rewrite any earlier example using functions.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish code rewrite.</p>');
INSERT INTO `activities` VALUES(326, 35, 7, '<p>Lecture: Object Oriented Programming.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Flowchart an application using OOP concepts.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish flowcharts</p>');
INSERT INTO `activities` VALUES(327, 35, 8, '<p>Lecture: Putting it together: JavaScript introduction</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Integrate JS with HTML and CSS.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish introductory JavaScript assignment.</p>');
INSERT INTO `activities` VALUES(328, 35, 9, '<p>Lecture: More JavaScript.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lab: Expand on last week&rsquo;s project.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: Finish expanded JavaScript project.</p>');
INSERT INTO `activities` VALUES(329, 35, 10, '<p>Lecture: More JavaScript</p>\r\n<p>Lab: Begin work on final project</p>');
INSERT INTO `activities` VALUES(330, 35, 11, '<p>Lab: Present final projects</p>');
INSERT INTO `activities` VALUES(331, 36, 1, '<p><strong>Week 1:&nbsp; Lecture: </strong>Developing your story</p>\r\n<p><strong>Lab:</strong> Explain course requirements, buy domain names, develop your story</p>\r\n<p><strong>Homework:</strong> Work on resume and artist&rsquo;s statement.</p>');
INSERT INTO `activities` VALUES(332, 36, 2, '<p><strong>Week 2:</strong>&nbsp; <strong>Lecture:</strong> Resume workshop with Annette</p>\r\n<p><strong>Lab:</strong> Finalize resume and artist&rsquo;s statement, look at work for portfolio.</p>\r\n<p><strong>Homework:</strong> Work on branding, and refine portfolio pieces.</p>');
INSERT INTO `activities` VALUES(333, 36, 3, '<p><strong>Week 3:</strong> &nbsp;<strong>Lecture:</strong> Leave-behinds</p>\r\n<p><strong>Lab:</strong> Continue work on branding and develop ideas for leave behind piece and portfolio pieces.</p>\r\n<p><strong>Homework:</strong> Finalize branding. Continue to refine portfolio pieces and leave behind piece.</p>');
INSERT INTO `activities` VALUES(334, 36, 4, '<p><strong>Week 4:</strong></p>\r\n<p><strong>Lab:</strong> Turn in complete branding, business system, and leave behind piece. Work on portfolio site.</p>\r\n<p><strong>Homework:</strong> Develop portfolio site, and refine portfolio pieces.</p>');
INSERT INTO `activities` VALUES(335, 36, 5, '<p><strong>Week 5:</strong></p>\r\n<p><strong>Lab:</strong> Work on portfolio site, and process piece</p>\r\n<p><strong>Homework:</strong> Develop portfolio site and process piece.</p>');
INSERT INTO `activities` VALUES(336, 36, 6, '<p><strong>Week 6:</strong></p>\r\n<p><strong>Lab:</strong> Participate in mock review.</p>\r\n<p><strong>Homework:</strong> Develop portfolio site and process piece.</p>');
INSERT INTO `activities` VALUES(337, 36, 7, '<p><strong>Week 7:</strong></p>\r\n<p><strong>Lab:</strong> Critique with professionals.</p>\r\n<p><strong>Homework:</strong> Refine work based on feedback from professionals.</p>');
INSERT INTO `activities` VALUES(338, 36, 8, '<p><strong>Week 8:</strong>&nbsp;</p>\r\n<p><strong>Lab:</strong> Refine all work, prepare for final review and show</p>\r\n<p><strong>Homework:</strong> refine all work.</p>');
INSERT INTO `activities` VALUES(339, 36, 9, '<p><strong>Week 9:</strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong><strong> All work is due. Practice your presentation.</strong></strong></p>\r\n<p><strong>Homework:</strong> Practice presentation for final review.</p>');
INSERT INTO `activities` VALUES(340, 36, 10, '<p><strong>Week 10:</strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong><strong> Prepare for final review and portfolio show</strong></strong></p>\r\n<p><strong>Graduate Homework:</strong> Tie up any loose ends.</p>\r\n<p><strong>Non-</strong><strong>graduate Homework</strong>: Work on portfolio piece</p>');
INSERT INTO `activities` VALUES(341, 36, 11, '<p><strong>Week 11: Non graduates: We will have class week 11. Plan to finalize portfolio piece</strong></p>\r\n<p><strong>&nbsp;Graduates: </strong>Participate in final show.</p>');
INSERT INTO `activities` VALUES(342, 37, 1, '<p>Introduction to course requirements, Class introductions, Overview of the software and procedures most relevant to the class projects and real world uses.<strong> </strong>Vector and Bitmap Graphics, Introduction to the Photoshop Interface, Working with Selections.&nbsp;&nbsp;&nbsp;&nbsp;</p>');
INSERT INTO `activities` VALUES(343, 37, 2, '<p>Image Size and Resolution. Improving image quality: Removing noise, Removing color cast, Working with Levels, Color Balance, and Hue and Saturation. Selections and Masks. Image retouching basics. Retouching tools.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>');
INSERT INTO `activities` VALUES(344, 37, 3, '<p>Working with Layers. Blending modes, Layer Styles, Layer Masks</p>');
INSERT INTO `activities` VALUES(345, 37, 4, '<p>Working with digital color. Color Modes. Improving color balance, Using Hue and Saturation pallet, Photo filter color replacement brush, etc. Preparing images for print</p>');
INSERT INTO `activities` VALUES(346, 37, 5, '<p>Creating Animations in Photoshop using layers and the Animation pallet. Preparing images for print and for web. Exporting images for the web.</p>');
INSERT INTO `activities` VALUES(347, 37, 6, '<p>Digital Painting. &nbsp;Using the drawing and painting tools in Photoshop. Using Wacom tablets. Create a digital drawing.</p>');
INSERT INTO `activities` VALUES(348, 37, 7, '<p>Overview of Corel Painter. Exploring different painting techniques. Simulating traditional painting media such as oil, water color, pastel, charcoal, etc. Learning from the masters: The Art of Ryan Church.</p>');
INSERT INTO `activities` VALUES(349, 37, 8, '<p>Working with Type. Type Effects: Creating different textures and applying effects.</p>');
INSERT INTO `activities` VALUES(350, 37, 9, '<p>Working with vectors-based images in Photoshop. Bitmaps vs. Vector images. Vector drawing tools, Vector selection tools. Working with paths.</p>');
INSERT INTO `activities` VALUES(351, 37, 10, '<p>Lecture: Putting it all together. Color and composition. Learning from the Masters: Using the vector tool to create selections, Using filters to create textures, etc.</p>');
INSERT INTO `activities` VALUES(352, 37, 11, '<p>Overview of Photoshop Tools and techniques. Oral examination.</p>');
INSERT INTO `activities` VALUES(353, 38, 1, '<p>Introduction.</p>\r\n<p>Photography Basics</p>\r\n<p>History of Photographic Process</p>\r\n<p>Photographer lecture</p>\r\n<p>Homework: 5 websites 10 images</p>');
INSERT INTO `activities` VALUES(354, 38, 2, '<p>Shutter Speed</p>\r\n<p>Photographer lecture</p>\r\n<p>Shoot shutter speed assignment outside</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(355, 38, 3, '<p>Aperture</p>\r\n<p>Photographer lecture</p>\r\n<p>Shoot Aperture assignment ouside</p>');
INSERT INTO `activities` VALUES(356, 38, 4, '<p>Composition</p>\r\n<p>Photographer lecture</p>\r\n<p>Shoot Composition Assignmnets outside</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(357, 38, 5, '<p>Forced perspective assignmnet (in class)</p>\r\n<p>Hand out and explain mid term assignmnet</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(358, 38, 6, '<p>Crituque of Mid Term Assignment</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(359, 38, 7, '<p>Painting with light demonstraition</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(360, 38, 8, '<p>Outdoor Portraiture</p>\r\n<p>Environmnetal portrait assignmnet</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(361, 38, 9, '<p>Field Trip for magazine assignmnet</p>');
INSERT INTO `activities` VALUES(362, 38, 10, '<p>Final project Due</p>\r\n<p>Portrait lighting (indoor)&nbsp;</p>\r\n<p>Product Lighting</p>\r\n<p>Quiz</p>');
INSERT INTO `activities` VALUES(363, 38, 11, '<p>Presentation of Final Portfolio</p>\r\n<p>Final Exam</p>');
INSERT INTO `activities` VALUES(364, 39, 1, '<p>Lecture: review, elements of composition/golden mean.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Interview collage project, in-class photo shoot.<strong></strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: </strong>Reading one (See myaicampus.com)<strong></strong></p>');
INSERT INTO `activities` VALUES(365, 39, 2, '<p>Due: Collage</p>\r\n<p><strong>Lecture: </strong>Camera basics- intro to Project 1: Paper/Wood &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>Lab:</strong> Camera Basics -Assignment-Shooting using manual settings<strong> </strong></p>\r\n<p><strong>Introduce on-going assignment- Examples</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Homework:</strong> Project 1 Paper/Wood</p>');
INSERT INTO `activities` VALUES(366, 39, 3, '<p><strong>Lecture: Video</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Photo shop tips</p>\r\n<p><strong>Homework:</strong> Continue project 1, print photos for critique.</p>');
INSERT INTO `activities` VALUES(367, 39, 4, '<p><strong>Lecture: </strong>Critique of project 1</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Topic: </strong>Lecture on Sequence photography, Night Photography.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Group work.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Final and Midterm project assigned for homework- Portrait Diptych<strong></strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong> Complete assignment. Reading two.&nbsp;</p>');
INSERT INTO `activities` VALUES(368, 39, 5, '<p>Due: Midterm project</p>\r\n<p>Topic: Midterm projects presented to class.</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Introduction: Arranged constructed and staged photographs <strong></strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: </strong>Assignment given for constructed image Due Week 9.</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Group work</strong> -Bring Egg for next week</p>');
INSERT INTO `activities` VALUES(369, 39, 6, '<p><strong>Lecture:</strong> Lecture on Tabletop photography tips and tricks for lighting and composing/staging.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong>In class product shot-Work on Constructed image.<strong></strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong>&nbsp; Advertising assignment- Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(370, 39, 7, '<p>Due: Advertising Assignment</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Work on constructed image assignment.&nbsp; <strong></strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(371, 39, 8, '<p><strong>Lecture: </strong>Film</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong>Final project discussed, bring in images taken so far.</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: </strong>Work on final project or constructed image with group.</p>');
INSERT INTO `activities` VALUES(372, 39, 9, '<p><strong>Lecture: Constructed image due- Critique</strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All class review of each person&rsquo;s progress.</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Continue work on final project. <strong></strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework:</strong> Continue developing assignment.</p>\r\n<p><strong><br /></strong></p>');
INSERT INTO `activities` VALUES(373, 39, 10, '<p><strong>Lecture: </strong>Guest lecture or field trip to photo show.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab:</strong> Report on guest lecture or field trip.</p>');
INSERT INTO `activities` VALUES(374, 39, 11, '<p><strong>Lecture: </strong>Students submit final completed portfolio for review.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Lab: </strong>Document all work for portfolios.</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Homework: </strong>None</p>');
INSERT INTO `activities` VALUES(375, 40, 1, '<table>\r\n<tbody>\r\n<tr><th colspan="2">Week 1 - Introduction, expectations and managing projects</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Introduction to class, expectations, homework, assignments critiques and conventions. Introduce lighting in Maya, 3-point lighting, light types (ambient, directional, point, spot, area, volume), lighting manipulators, how lighting affects the scene, using lighting references. Discuss midterm assignment, homework, challenges and exercises outside of class.</td>\r\n<th>Lab:</th>\r\n<td>Start week 1 exercise, basic scene setup in Maya; create a new project, reference character in a new scene. Set up basic lighting in the scene.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 1 exercise, lighting setups. Start week 2 exercise by collecting a reference images (photographs). Log into the portal website, review week 1 material, and take the week 1 quiz and answer questions on personal profile.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(376, 40, 2, '<table>\r\n<tbody>\r\n<tr><th colspan="2">Week 2 - Lighting</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 1 exercise, lighting setups, and lighting reference images for the week 2 exercise. Introduce lighting concepts, lighting sources, motivation, practical lighting, lights in the real world, common light attributes (color, intensity, emit diffuse, emit specular). Demonstrate matching the lighting from the screenshots to scene.</td>\r\n<th>Lab:</th>\r\n<td>Continue with week 2 exercise; create a new project, create a new scene, and begin setup of the scene in Maya with basic objects and light scene to match screenshot.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 2 exercise, match lighting of the reference images. Log into the portal website, review week 2 material, and take the week 2 quiz.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(377, 40, 3, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 3 - Lighting properties and effects</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 2 exercise, match lighting of the reference image. Introduce lighting properties, linking and unlinking lights, shadows, light distances, light glow and optical effects, and optical caustics. Demonstrate the changes of properties for lights and their affect on objects in a scene.</td>\r\n<th>Lab:</th>\r\n<td>Work on week 3 exercise; adjust lighting attributes. Working from the previous scene (the match lighting scene), adjust properties of the lights to match.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 3 exercise, lighting properties. Log into the portal website, review week 3 material, and take the week 3 quiz.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(378, 40, 4, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 4 - Materials and material workflow</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 3 exercise. Introduction to material types (Anisotropic, Lambert, Blinn, Phong), material type properties (color, transparency, ambience, incandescence, diffuse), material workflows and processes in Maya (Hypershade and connections). Demonstrate the application of materials and their properties to objects in a scene.</td>\r\n<th>Lab:</th>\r\n<td>Work on midterm assignment; Assign materials to objects and set material properties. Working from the previous scene (the match lighting scene), add materials to scene objects.</td>\r\n<th>Homework:</th>\r\n<td>Finish the scene for the midterm assignment. Log into the portal website, review week 4 material, and take the week 4 quiz.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(379, 40, 5, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 5 - Midterm</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of midterm assignment turn in midterm. Introduction to UVs in Maya, the UV texture editor, tools available for UV layout, UV mapping coordinates, and object texture mapping types (Automatic, Planar, Cylindrical, Spherical mapping). Demonstrate UV layout on objects using different methods.</td>\r\n<th>Lab:</th>\r\n<td>Finish midterm assignment. Start on week 5 exercise; layout UVs on objects provided using different methods.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 5 exercise, layout UVs. Log into the portal website, review week 5 material, and take the week 5 quiz.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(380, 40, 6, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 6 - UV layout</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 5 exercise, UV layout. Introduce UV Layout strategies for various objects. Discuss UV layout strategies, and alternatives to Maya UV layout. Demonstrate methods for UV layout methods. Discuss final assignment.</td>\r\n<th>Lab:</th>\r\n<td>Start on week 6 exercise; layout UVs on objects provided using different methods.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 6 exercise, layout UVs continued. Log into the portal website, review week 6 material, and take the week 6 quiz. Start collecting references and develop ideas for final assignment.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(381, 40, 7, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 7 - Texture types</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 6 exercise. Introduce texture creation using Photoshop, Illustrator, other design tools, 2D texture types (Normal, Projection, Stencil), procedural, 3D, and Layered Textures. Discuss file types, their use in textures and rendering, and texture map resolutions. Demonstrate texture design workflow, UV snapshot, using the snapshot in the creation of textures in design tools and working with other tools to create textures.</td>\r\n<th>Lab:</th>\r\n<td>Start on week 7 exercise; export UV snapshot, and create textures with Photoshop for layout.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 7 exercise, texture creation. Log into the portal website, review week 7 material, and take the week 7 quiz. Refine ideas, and create sketches for the final assignment.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(382, 40, 8, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 8 - Textures and surfacing</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 7 exercise, textures. Introduce surface detailing using bump mapping and normal mapping, applying textures to surfaces using multiple methods, using procedural textures as bump maps. Demonstrate bump map creation using Photoshop and other illustration and design tools, applying procedural textures as a bump maps.</td>\r\n<th>Lab:</th>\r\n<td>Start on week 8 exercise; add detail to objects with created textures, and bump mapping.</td>\r\n<th>Homework:</th>\r\n<td>Finish week 8 exercise, finish texture creation. Log into the portal website, review week 8 material, and take the week 8 quiz. Refine ideas, and create sketches for the final assignment.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(383, 40, 9, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 9 - Texture utilities</th></tr>\r\n<tr><th style="width: 100px;">Lecture:</th>\r\n<td>Peer critique of week 8 exercise, textures and details. Introduce utility nodes (blend color, remap color, smear, stencil), and their various functions with textures and other nodes in Maya. Review lighting for the final assignment. Demonstrate connections with various utilities in combination with textures and shading.</td>\r\n<th>Lab:</th>\r\n<td>Work on final assignment, create objects and texturing.</td>\r\n<th>Homework:</th>\r\n<td>Continue working on final assignment.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(384, 40, 10, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 10 - Rendering</th></tr>\r\n<tr><th>Lecture:</th>\r\n<td>\r\n<p>Peer critique for final assignment progress. Discuss final rendering, render types (mental ray, software, hardware), rendering engines (scanline, rasterisation, raytracing). Discuss camera setup, attributes and placement. Demonstrate camera and render settings in Maya.</p>\r\n</td>\r\n<th>Lab:</th>\r\n<td>Work on final assignment, setup camera and final rendering options.</td>\r\n<th>Homework:</th>\r\n<td>Finish final assignment and complete any other additional work for credit.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(385, 40, 11, '<table class="outline">\r\n<tbody>\r\n<tr><th class="WeekHeading" colspan="2">Week 11 - WeekDesc11</th></tr>\r\n<tr><th style="width: 100px;">Lecture</th>\r\n<td>Final assignment critiques.</td>\r\n<th>Lab:</th>\r\n<td>Finish up work and turn in final assignment.</td>\r\n</tr>\r\n</tbody>\r\n</table>');
INSERT INTO `activities` VALUES(386, 41, 1, '<p><strong>Lecture:</strong>&nbsp; Course introduction and process discussion; Discussion of the portfolio format and individual professional promotional methods.</p>\r\n<p><strong>Lab:</strong>&nbsp; Personal graphic identity development; Discussion of planned portfolio contents.</p>\r\n<p><strong>Homework:</strong>&nbsp; Assignment defined by the instructor.</p>');
INSERT INTO `activities` VALUES(387, 41, 2, '<p><strong>Lecture:</strong>&nbsp; Introduction of creative development for personal identity design; Discussion of exhibit selection for portfolio presentation.</p>\r\n<p><strong>Lab:</strong>&nbsp; Concept development for personal identification design;&nbsp; Selection and review of portfolio exhibits for refinement.</p>\r\n<p><strong>Homework:</strong>&nbsp; Design development of personal identity design; Select exhibits for portfolio.</p>');
INSERT INTO `activities` VALUES(388, 41, 3, '<p><strong>Lecture:</strong>&nbsp; Introduction of personal stationery design assignment; Introduction of "Challenge and Solution" statement assignment.</p>\r\n<p><strong>Lab:&nbsp;</strong> Stationery design development; Writing of "Challenge and Solution" statements.</p>\r\n<p><strong>Homework:</strong>&nbsp; Assignment development; Completion of assigned deadlines.</p>\r\n<p>&nbsp;</p>');
INSERT INTO `activities` VALUES(389, 41, 4, '<p><strong>Lecture:</strong>&nbsp; Introduction of the "Leave Behind" and "Mailer" publications</p>\r\n<p><strong>Lab:&nbsp;</strong> Design development of the "Leave Behind and "Mailer" publication concepts;&nbsp; Finalization of the previous assignments.</p>\r\n<p><strong>Homework:</strong>&nbsp; Assignment development; Completion of assigned deadline.</p>');
INSERT INTO `activities` VALUES(390, 41, 5, '<p><strong>Lecture:</strong>&nbsp; Introduction of exhibit photography process, Introduction of Electronic Portfolio and Web Site Design; Discuss the layout of table top display for portfolio show.</p>\r\n<p><strong>Lab:&nbsp;</strong> Continue design development for previous assignments and exhibit refinements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Assignment development; Completion of assigned deadline.</p>');
INSERT INTO `activities` VALUES(391, 41, 6, '<p><strong>Lecture:</strong>&nbsp; Professional Panel Review.</p>\r\n<p><strong>Lab:</strong> Continue design development for previous assignments and exhibit refinements.</p>\r\n<p><strong> Homework:&nbsp;</strong> Assignment development; Completion of assigned deadline.</p>');
INSERT INTO `activities` VALUES(392, 41, 7, '<p><strong>Lecture:</strong>&nbsp; Each student will review all portfolio elements with the instructor;&nbsp; Discussion of the Faculty Panel Review.</p>\r\n<p><strong>Lab:</strong>&nbsp; Continue design development for previous assignments and exhibit refinements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Prepare for the Faculty Review.</p>');
INSERT INTO `activities` VALUES(393, 41, 8, '<p><strong>Faculty Panel Review</strong></p>');
INSERT INTO `activities` VALUES(394, 41, 9, '<p><strong>Lecture:</strong>&nbsp; Discussion of Faculty Panel Review out-come and comments.</p>\r\n<p><strong>Lab:&nbsp;</strong> Continued refinement based on suggestions of the Faculty Panel.</p>\r\n<p><strong>Homework:</strong>&nbsp; Finalization of all portfolio elements.</p>');
INSERT INTO `activities` VALUES(395, 41, 10, '<p><strong>Lecture:</strong>&nbsp; Final portfolio presentation of graduation candidates.</p>\r\n<p><strong>Lab:</strong>&nbsp; Non-graduation candidates will continue design refinement of all portfolio elements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Non-graduation candidates will prepare for final portfolio presentations.</p>');
INSERT INTO `activities` VALUES(396, 41, 11, '<p>Non-graduation candidates will make their final portfolio presentations.</p>');
INSERT INTO `activities` VALUES(397, 42, 1, '<p><strong>Lecture: </strong>The graphic teams discussed. Assignments discussed and considered. Proposal Writing</p>\r\n<p><strong>Lab: </strong>Teams begin working together to determine each other&rsquo;s strengths for a given project and their role in the graphic group. <strong></strong></p>\r\n<p><strong>Homework: </strong>Design Team Position Essay<strong></strong></p>');
INSERT INTO `activities` VALUES(398, 42, 2, '<p><strong>Lecture: </strong>The assignments are given. Discussion of research, target market, initial planning in regards to budget restrictions.<strong></strong></p>\r\n<p><strong>Lab: </strong>Teams develop research and analysis. Formulate ideas for budget distribution.<strong></strong></p>\r\n<p><strong>Homework:</strong> Storyboarding</p>');
INSERT INTO `activities` VALUES(399, 42, 3, '<p><strong>Lecture: </strong>Teams present first analysis/Storyboard<strong></strong></p>\r\n<p><strong>Lab: </strong>Teams return to working on Phase 2.<strong></strong></p>\r\n<p><strong>Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(400, 42, 4, '<p><strong>Lecture: </strong>Timelines for deliverables.<strong></strong></p>\r\n<p><strong>Lab: </strong>Studio time for mid-term projects.<strong></strong></p>\r\n<p><strong>Homework:</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(401, 42, 5, '<p><strong>Lecture: </strong>Mid term research projects presented to class. 1st set of comps for client. CEO evaluation.<strong></strong></p>\r\n<p><strong>Lab: </strong>Team begins Phase 3, revision and next set of more finalized comps.<strong></strong></p>\r\n<p><strong>Homework: </strong>None</p>');
INSERT INTO `activities` VALUES(402, 42, 6, '<p><strong>Lecture: </strong>Phase 3 Discussion<strong></strong></p>\r\n<p><strong>Lab: </strong>Project continues.<strong></strong></p>\r\n<p><strong>Homework: </strong>Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(403, 42, 7, '<p><strong>Lecture: </strong>Review student progress. 2<sup>nd</sup> set of comps for client. CEO evaluation.<strong></strong></p>\r\n<p><strong>Lab: </strong>Continue project. <strong></strong></p>\r\n<p><strong>Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(404, 42, 8, '<p><strong>Lecture: </strong>All class review of each person&rsquo;s progress complete project. <strong></strong></p>\r\n<p><strong>Lab: </strong>Continue work on final project.<strong></strong></p>\r\n<p><strong>Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(405, 42, 9, '<p><strong>Lecture: </strong>Final questions and answers review.<strong></strong></p>\r\n<p><strong>Lab: </strong>Work on final projects.<strong></strong></p>\r\n<p><strong>Homework:</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(406, 42, 10, '<p><strong>Lab: </strong>Work on final projects.<strong></strong></p>\r\n<p><strong>Homework:</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(407, 42, 11, '<p><strong>Lecture: </strong>Final presentation with critique.</p>\r\n<p><strong>Lab: </strong>Document all work for portfolio.</p>\r\n<p><strong>Homework: </strong>None</p>');
INSERT INTO `activities` VALUES(408, 43, 1, '<p><strong>Lecture: </strong>The graphic teams discussed. Assignments discussed and considered. Proposal Writing</p>\r\n<p><strong>Lab: </strong>Teams begin working together to determine each other&rsquo;s strengths for a given project and their role in the graphic group. <strong></strong></p>\r\n<p><strong>Homework: </strong>Design Team Position Essay<strong></strong></p>');
INSERT INTO `activities` VALUES(409, 43, 2, '<p><strong>Lecture: </strong>The assignments are given. Discussion of research, target market, initial planning in regards to budget restrictions.<strong></strong></p>\r\n<p><strong>Lab: </strong>Teams develop research and analysis. Formulate ideas for budget distribution.<strong></strong></p>\r\n<p><strong>Homework:</strong> Storyboarding</p>');
INSERT INTO `activities` VALUES(410, 43, 3, '<p><strong>Lecture: </strong>Teams present first analysis/Storyboard<strong></strong></p>\r\n<p><strong>Lab: </strong>Teams return to working on Phase 2.<strong></strong></p>\r\n<p><strong>Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(411, 43, 4, '<p><strong>Lecture: </strong>Timelines for deliverables.<strong></strong></p>\r\n<p><strong>Lab: </strong>Studio time for mid-term projects.<strong></strong></p>\r\n<p><strong>Homework:</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(412, 43, 5, '<p><strong>Lecture: </strong>Mid term research projects presented to class. 1st set of comps for client. CEO evaluation.<strong></strong></p>\r\n<p><strong>Lab: </strong>Team begins Phase 3, revision and next set of more finalized comps.<strong></strong></p>\r\n<p><strong>Homework: </strong>None</p>');
INSERT INTO `activities` VALUES(413, 43, 6, '<p><strong>Lecture: </strong>Phase 3 Discussion<strong></strong></p>\r\n<p><strong>Lab: </strong>Project continues.<strong></strong></p>\r\n<p><strong>Homework: </strong>Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(414, 43, 7, '<p><strong>Lecture: </strong>Review student progress. 2<sup>nd</sup> set of comps for client. CEO evaluation.<strong></strong></p>\r\n<p><strong>Lab: </strong>Continue project. <strong></strong></p>\r\n<p><strong>Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(415, 43, 8, '<p><strong>Lecture: </strong>All class review of each person&rsquo;s progress complete project. <strong></strong></p>\r\n<p><strong>Lab: </strong>Continue work on final project.<strong></strong></p>\r\n<p><strong>Homework:</strong> Continue developing assignment.</p>');
INSERT INTO `activities` VALUES(416, 43, 9, '<p><strong>Lecture: </strong>Final questions and answers review.<strong></strong></p>\r\n<p><strong>Lab: </strong>Work on final projects.<strong></strong></p>\r\n<p><strong>Homework:</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(417, 43, 10, '<p><strong><br /></strong><strong>Lab: </strong>Work on final projects.</p>\r\n<p><strong>Homework:</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(418, 43, 11, '<p><strong>Lecture: </strong>Final presentation with critique.<strong></strong></p>\r\n<p><strong>Lab: </strong>Document all work for portfolio.<strong></strong></p>\r\n<p><strong>Homework: </strong>None</p>');
INSERT INTO `activities` VALUES(419, 44, 1, '<p><strong>Lecture:</strong> Introduction to class, goals and expectations. The Design Process</p>\r\n<p><strong>Lecture:</strong> Intro to Semiotics </p>\r\n<p><strong>Lab:</strong> Course Assignment Intro + Mindmapping</p>\r\n<p><strong><em>Homework</em></strong>: Week 1 Assignment</p>');
INSERT INTO `activities` VALUES(420, 44, 2, '<p><strong>Lecture:</strong> Images and Meaning + Persuasive Imagery/Image as message/ Connotation-Denontation<em>(find website examples of each MM topic to present)</em></p>\r\n<p><strong>Lab: </strong>Web Intro (Basic Design Concepts) + Exercise 1: Successful Websites</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Week 2 Assignment <em></em></p>');
INSERT INTO `activities` VALUES(421, 44, 3, '<p><strong>Lecture: </strong>Graphic Space-Composition and Structure</p>\r\n<p><strong>Lecture: </strong>Intro to HTML, Designing for the web/Creating a Wireframe</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Week 3 Assignment, Wireframe generation (preliminary)<em></em></p>');
INSERT INTO `activities` VALUES(422, 44, 4, '<p><strong>Lecture/Lab:</strong> CSS/Wireframe Crit and Selection</p>\r\n<p><strong><em>Homework: </em></strong>Week 4 Assignment<em></em></p>');
INSERT INTO `activities` VALUES(423, 44, 5, '<p><strong>Lecture:</strong> Typography and Meaning.</p>\r\n<p><strong>Lab:</strong> Typography for web + Target Audience</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Week 5 Assignment<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>');
INSERT INTO `activities` VALUES(424, 44, 6, '<p><strong>Lecture:</strong> Connotation and Resonance in Web Typography, Typography Critique/Selection</p>\r\n<p><strong>Lab: </strong>Interface Design, Part 1</p>\r\n<p><strong><em>Homework</em></strong><em>: </em>Week 6 Assignment</p>');
INSERT INTO `activities` VALUES(425, 44, 7, '<p><strong>Lecture:</strong> Graphic Space, Part 2. (Field of Tension and Visual Continuity)</p>\r\n<p><strong>Lab:</strong> Web Design Production</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Week 7 Assignment<strong><em></em></strong></p>');
INSERT INTO `activities` VALUES(426, 44, 8, '<p><strong>Lecture: </strong>Graphic Resonance (Style as Message), Critique, Grade one-on-ones<em></em></p>\r\n<p><strong>Lab:</strong> Interface Design, Part 2 (Production)</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Week 8 Assignment<em></em></p>');
INSERT INTO `activities` VALUES(427, 44, 9, '<p>Holiday - NO CLASS</p>');
INSERT INTO `activities` VALUES(428, 44, 10, '<p><strong>Lecture:</strong> How to Package Your Final/How to Present</p>\r\n<p><strong>Lab:</strong> Presentations</p>\r\n<p><strong><em>Homework:</em></strong><em> </em>Complete design work for final<em></em></p>');
INSERT INTO `activities` VALUES(429, 44, 11, '<p><strong>Lecture: </strong>Overview, Final Project Presentations</p>\r\n<p>NOTE:&nbsp; <em>Project schedule may be revised depending on the progress/cri</em><em>ts of the class</em><em></em></p>');
INSERT INTO `activities` VALUES(430, 45, 1, '<p><strong>Lecture: &nbsp;</strong>General introduction, course outline, and grading policies. Discuss the role of the designer, elements and principals of Design. Design from 2D to 3D. Discussion of in-class assignment. Assignment #1: Rethink / Redesign an existing package.</p>\r\n<p><strong>Lab: &nbsp;</strong>Team packaging project based off of a song (creativity exercise). Team packaging project based on current packaging.</p>\r\n<p>Assignment #1: Separate into groups and redesign a package.&nbsp;As a group, analyze an existing package design (breakdown of elements, corporate research) then begin individual preliminary sketches for the redesign. The project should include at least five completely different solutions. Discuss what constitutes a design &ldquo;sketch.&rdquo;</p>\r\n<p><strong>Homework: &nbsp;</strong>Continue developing assignment. Five different layouts are due, each layout showing all necessary sides. Each group must make a research presentation (in PowerPoint or as a PDF), which will be followed by individual sketch presentations. "Song based" packaging sketches due (3 concepts). Reading Assignment &amp; questions.</p>');
INSERT INTO `activities` VALUES(431, 45, 2, '<p><strong>Lecture: &nbsp;</strong>Group Presentations. Present individual sketches (of five different solutions). Highlight the best concept. Group and individual critiques.&nbsp;Lecture on research techniques. Discussion: what makes packaging good?</p>\r\n<p><strong>Lab:&nbsp;</strong>Project firings and redistribution (file swapping). Individual help.&nbsp;</p>\r\n<p><strong>Homework: &nbsp;</strong>Choose the best layout and revise. Complete Assignment #1 (final drawings of all sides) and prepare for in-class presentation. Start term project by picking a corporate product/brand to revitalize or reinvent. Start a creative brief (Phase I). Do in-store research, library and online data gathering. At least <strong>two</strong> successful phone research-related phone calls will be required, so start planning. Reading assignment &amp; questions.</p>');
INSERT INTO `activities` VALUES(432, 45, 3, '<p><strong>Lecture:&nbsp;</strong>Presentation of digital packaging drawings. Original group reviews. Research/project discussion (student findings)&nbsp;continued. Packaging discussion.&nbsp;Cold-calls discussion: creating a script.</p>\r\n<p><strong>Lab:&nbsp;</strong>Continue Research. Individual Help.</p>\r\n<p><strong>Homework:</strong> &nbsp;Research, make a creative brief, make at least two phone calls, and prepare a digital presentation of your Phase I findings. Be detailed! Bring materials for sketch model construction. Reading assignment &amp; questions.</p>');
INSERT INTO `activities` VALUES(433, 45, 4, '<p><strong>Lecture: &nbsp;</strong>Research presentations, critique and discussion.</p>\r\n<p><strong>Lab: &nbsp;</strong>Exploration of 3D forms for packaging. Develop construction technique. 3D comps to be developed using chipboard or Bristol board. Rough layout of all elements required for package. Continued: model-making workshop. Perspective tool in Illustrator.</p>\r\n<p><strong>Homework:</strong>&nbsp; Brainstorm solutions (Phase II). Sketches exploring form and structure as well as overall look. Sketch model construction. Present a series of ideas to the class. Find 4 examples of unusual packaging. Bring them (or photos) in and discuss. Reading assignment &amp; questions.</p>');
INSERT INTO `activities` VALUES(434, 45, 5, '<p><strong>Lecture: &nbsp;</strong>Present 3D computer sketch models and sketches. Discuss samples.</p>\r\n<p><strong>Lab: &nbsp;</strong>Further development of identity, look and feel of redesign. May use markers and/or colored pencils for graphics, colored paper, and the computer (color printouts).</p>\r\n<p><strong>Homework: &nbsp;</strong>Work on design refinement, using feedback from the critique (Phase III). 5 digitally produced comps due for in-class discussion at next session. Research packaging materials and construction methods. Be prepared to present 3 options for your project. Find 3 current packages that utilize different packaging materials to their full advantage. Start creating sketch models. Reading assignment &amp; questions.</p>');
INSERT INTO `activities` VALUES(435, 45, 6, '<p><strong>Lecture: &nbsp;</strong>Group critique of work in progress.</p>\r\n<p><strong>Lab:</strong>&nbsp; Die-line creation exercise.&nbsp;Continue work. Individual help.</p>\r\n<p><strong>Homework: &nbsp;</strong>Continue package die-line practice. Start constructing die-line elements for your project. Continue design refinement. Finish sketch models. Research complex die-lines/packaging and bring in something to share with the class. Reading assignment &amp; questions.</p>');
INSERT INTO `activities` VALUES(436, 45, 7, '<p><strong>Lecture: &nbsp;</strong>Discussion of student&rsquo;s progress. Tips and goals reviewed. Present sketch models.</p>\r\n<p><strong>Lab: &nbsp;</strong>Begin refined flat layout of best design solution, or combination of solutions. Type must be done on a computer. May use markers (tight) for graphics/illustration if desired, or do all on a computer. However, digitally produced comps on 3D forms due for in class discussion at next session.</p>\r\n<p><strong>Homework:</strong> &nbsp;Finalize design (Phase IV), work on supporting materials. White model creation. â€¨Container creation exercise. Follow handout: weekly list of deliverables.</p>');
INSERT INTO `activities` VALUES(437, 45, 8, '<p><strong>Lecture: &nbsp;</strong>Presentation of white models. Discussion of student&rsquo;s progress. Tips and goals reviewed.</p>\r\n<p><strong>Lab: &nbsp;</strong>Continue refinement of 2D and 3D elements.</p>\r\n<p><strong>Homework:</strong> &nbsp;Continue design refinement. Start working on final model. Gather materials for editorial photographs.&nbsp;Follow handout: weekly list of deliverables.</p>');
INSERT INTO `activities` VALUES(438, 45, 9, '<p><strong>Lecture: &nbsp;</strong>Begin full-color comprehensive, to be assembled into 3D package. Must include all elements required for package. All&nbsp;comps to be computer generated.</p>\r\n<p><strong>Lab: &nbsp;</strong>Work on project.</p>\r\n<p><strong>Homework:</strong>&nbsp; Finish final model. Work on presentation elements, digital, print &amp; 3D (Phase IV). Practice presenting. You don&rsquo;t have to show your final presentation on week 10, but you should be able to show a strong, reasonably fleshed-out framework of all elements.Bring model and accessories for photography.&nbsp;Follow handout: weekly list of deliverables.</p>');
INSERT INTO `activities` VALUES(439, 45, 10, '<p><strong>Lecture: &nbsp;</strong>Review student progress. Dry run of presentations. Turn in final models for photography.</p>\r\n<p><strong>Lab: &nbsp;</strong>Continue work on final comprehensive.</p>\r\n<p><strong>Homework: &nbsp;</strong>Complete project.&nbsp;Follow handout: weekly list of deliverables.</p>');
INSERT INTO `activities` VALUES(440, 45, 11, '<p><strong>Lecture: &nbsp;</strong>Presentation and critique of final comprehensive.</p>\r\n<p><strong>Lab: </strong>&nbsp;Discussion. Photographing final projects.</p>\r\n<p><strong>Homework: &nbsp;</strong>None</p>');
INSERT INTO `activities` VALUES(441, 46, 1, '<p>Course Introduction: Self-Introductions, review syllabus, class rules, lesson plans, etc.</p>\r\n<p><strong>Lecture</strong>: &nbsp;Marketing Planning Today. Developing the Marketing Plan. Preparing for Marketing Planning.&nbsp;Case Studies: Tropicana, Zappos, Best Buy, Netflix, McDonalds, Unicef</p>\r\n<p><strong>Lab</strong>: &nbsp;What do you think a Marketing Plan is? Elevator Pitches. Discussion.&nbsp;Workshop: Introduce course project; review project development schedule; create research teams;&nbsp;Choose your product; Write/Present preliminary statement of marketing problem.</p>\r\n<p><strong>Homework</strong>: Finish lab work, Read Chapters 1, 2, Appendix for next week. Prepare Chapter questions. Bring in a sample from a marketing campaign.</p>');
INSERT INTO `activities` VALUES(442, 46, 2, '<p>Quiz&mdash;Week 2</p>\r\n<p><strong>Lecture</strong>: &nbsp;Analyzing the current situation, environmental scanning and analysis today, SWOT analysis, analyzing internal and external environments. Discuss campaigns brought in.</p>\r\n<p><strong>Lab</strong>: &nbsp;Refine Statement of Marketing Problem; Begin Collection of Secondary Research Data.</p>\r\n<p>Case Studies: Nintendo, Google, Palm, JC Penney, Tata Motors, Bank of America, Burger King</p>\r\n<p><strong>Homework</strong>: Read Chapter 3, prepare chapter questions. Create a SWOT on your business.</p>');
INSERT INTO `activities` VALUES(443, 46, 3, '<p>Quiz &ndash; Week 3</p>\r\n<p><strong>Lecture</strong>: Understanding Markets and Customers, Analyzing Markets, Customer Needs and Behaviors, Planning Marketing Research. &nbsp;Case Studies: Nike, Kiva, PC Industry, Kroger, Coca-Cola, Staples</p>\r\n<p><strong>Lab</strong>: &nbsp;Research and define Situation Analysis, Market Needs and Trends. Guest Speaker</p>\r\n<p><strong>Homework</strong>: Read chapters 4-5; prepare to present and turn in: statement of marketing problem, secondary research.</p>');
INSERT INTO `activities` VALUES(444, 46, 4, '<p>Quiz &ndash; Week 4.</p>\r\n<p><strong>Lab</strong>: &nbsp;Research and define market growth. Complete SWOT analysis, review for midterm.</p>\r\n<p><strong>Homework</strong>: Prepare to present and turn in: Marketing Plan to date, read chapters 4-5 again, prepare for the midterm exam.</p>');
INSERT INTO `activities` VALUES(445, 46, 5, '<p>Midterm Exam (1 hour)</p>\r\n<p><strong>Lab</strong>: &nbsp;Video: Modern Marvels, Failed Inventions (Marketing Research Might Have Helped&hellip;) &ndash; Part 1. Discuss</p>\r\n<p>Turn in and Present Marketing Plan Outlines&nbsp;</p>');
INSERT INTO `activities` VALUES(446, 46, 6, '<p><strong>Lecture:</strong> Planning segmentation, targeting and positioning. Segmenting markets, positioning for competitive advantage, planning direction objective and marketing support, shaping the marketing mix.&nbsp;Case Studies: Sweetpea, Harley Davidson, Foster Bank, Dell, John Deere, Airgas, Hyundai, and others.</p>\r\n<p><strong>Lab</strong>: &nbsp;Group discussion of marketing plans to date. Include: Statement of marketing problem, secondary&nbsp;research findings / sources, assumptions that have changed, successes and problems.&nbsp;Workshop: analyze competition</p>\r\n<p><strong>Homework</strong>: Read chapter 6. Prepare chapter questions. Continue work on marketing plan.</p>');
INSERT INTO `activities` VALUES(447, 46, 7, '<p>Quiz &ndash; Week 7</p>\r\n<p><strong>Lecture</strong>: &nbsp;Developing product and brand strategy, product development and management, planning branding.&nbsp;Case Studies: M&amp;M&rsquo;s, Wal-Mart, Wikipedia, Sony, Kia. Guest speaker</p>\r\n<p><strong>Lab</strong>: &nbsp;Develop Brand and Pricing Strategy.&nbsp;Video: Modern Marvels, Failed Inventions &ndash; Part 2, Discuss.</p>\r\n<p><strong>Homework</strong>: Read chapters 7,8,9. (Focus on 9). Prepare chapter questions. Continue work on marketing plan</p>');
INSERT INTO `activities` VALUES(448, 46, 8, '<p><strong>Lecture</strong>: Developing marketing communications, pricing, channel and logistics strategy.&nbsp;Case Studies: Dollar Menu, Zipcar, Traffic, IKEA, Verizon Wireless, Luxury Pricing, Li&amp;Fung, Medical Clinics, Recellular and others.</p>\r\n<p><strong>Lab</strong>: &nbsp;Develop marketing mix</p>\r\n<p><strong>Homework</strong>: Continue work on marketing plan</p>');
INSERT INTO `activities` VALUES(449, 46, 9, '<p>Quiz- Week 9</p>\r\n<p><strong>Lecture</strong>: Pulling it all together (review of key concepts to date, apply to course project); presenting/summarizing marketing plans, review schedule/expectations for weeks 10, 11</p>\r\n<p><strong>Lab</strong>: Q&amp;A session, continue work on marketing plan</p>\r\n<p><strong>Homework</strong>: Continue work on marketing plan</p>');
INSERT INTO `activities` VALUES(450, 46, 10, '<p><strong>Lecture</strong>: &ldquo;Open Mic&rdquo; &ndash; Questions and issues.&nbsp;Videos: TBD. Possible guest lecturer.</p>\r\n<p><strong>Lab</strong>: Pull together data, findings and recommendations; create charts, graphs; develop ads; develop and practice presentations.</p>\r\n<p><strong>Homework</strong>: Complete final marketing plan presentation to turn in and present to class.</p>');
INSERT INTO `activities` VALUES(451, 46, 11, '<p>Prep Time: for final research study presentations</p>\r\n<p>Team Presentations: Final marketing plan and evaluations (peer and instructor).</p>\r\n<p>Turn In: Final Marketing Plan&nbsp;</p>');
INSERT INTO `activities` VALUES(452, 47, 1, '<p><strong>Lecture: </strong>Course overview;&nbsp;Environmental graphic design intro; Wayfinding &amp; sign system design: (a) Site Inventory (what exists); (b) Site Analysis (what works, what doesn&rsquo;t &amp; why); (c) Wayfinding Analysis (sign location and justification).<strong><br /> </strong><strong></strong></p>\r\n<p><strong>Lab: </strong>EX: Wayfinding Analysis (Destination Zones, Wayfinding Tasks, Users, &amp; Decision Hierarchy) <br /> <strong></strong></p>\r\n<p><strong>Homework: A1 due week 2 </strong>(See handout, download from myaicampus). <strong>READING&nbsp; pgs 10&ndash;27, 98&ndash;107</strong><strong></strong></p>');
INSERT INTO `activities` VALUES(453, 47, 2, '<p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Corporate Environments); &nbsp;Wayfinding: Navigational Plan | Sign Program Design: Hierarchy of Sign Types &amp; Branding</p>\r\n<p><strong>Lab: </strong>EX: Nav. plan; &nbsp;Wayfinding and signage image database development; Architect&rsquo;s scale, elevations, plan view, isometric drawings; CRITS.<br /> <strong></strong></p>\r\n<p><strong>Homework:</strong> <strong>A2 due week 3 </strong>(See handout, download from myaicampus). <strong>&nbsp;Read pgs 28&ndash;45, 56-67, 84&ndash;97</strong></p>');
INSERT INTO `activities` VALUES(454, 47, 3, '<p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Health-Care Facilities); Signage Design; Internal and external signage &amp; wayfinding systems; Introduce P3: billboards and vehicle wrap</p>\r\n<p><strong>Lab: </strong>Presentations of compiled wayfinding and signage image database&nbsp; | CRITS + Work on signs</p>\r\n<p><strong>Homework:</strong> <strong>A3 due week 4 </strong>(See handout, download from myaicampus). <strong>Read</strong><strong>&nbsp;pgs 46&ndash;55, 146&ndash;155</strong></p>');
INSERT INTO `activities` VALUES(455, 47, 4, '<p><strong>Lecture:</strong> P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Universities &amp; Campuses);&nbsp;ADA compliance, fabrication and implementation</p>\r\n<p><strong>Lab:</strong>&nbsp; Test and crit signs to size | Refine signs | Specify materials and finishes<br /> <strong></strong></p>\r\n<p><strong>Homework:</strong> <strong>Project 2 DUE&mdash;Final Wayfinding Signage System</strong> (See homework handout)<strong>. No reading</strong></p>');
INSERT INTO `activities` VALUES(456, 47, 5, '<p><strong>Lecture: </strong>NO INDIVIDUAL PRESENTATIONS THIS WEEK; &nbsp;Billboard and Vehicle Wrap Design<strong></strong></p>\r\n<p><strong>Lab: </strong><strong>Midterm Project 2 Due;</strong>&nbsp;Project 3: Billboard analysis field trip (in teams); Analysis presentations</p>\r\n<p><strong>Homework: A5 due week 6 </strong>(See handout, download from myaicampus). <strong>Read pgs 108&ndash;117</strong></p>');
INSERT INTO `activities` VALUES(457, 47, 6, '<p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application<em> </em>(Museums &amp; Exhibits);&nbsp;Billboard &amp; Vehicle Wrap Design&mdash;Cost Estimating &amp; Proper File Prep&nbsp;<strong><br /> </strong><strong></strong></p>\r\n<p><strong>Lab: </strong>CRIT P3; Refine Billboard &amp; Bus Wrap</p>\r\n<p><strong>Homework:</strong> <strong>Project 3 DUE&mdash;Final Billboard &amp; Vehicle Wrap Design</strong> (See homework handout). <strong>Read pgs 132&ndash;145</strong></p>');
INSERT INTO `activities` VALUES(458, 47, 7, '<p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Heritage Areas &amp; Parks);&nbsp;P4 Exhibit design basics: schematics, development &amp; implementation; Design principles applied three-dimensionally<strong><br /> </strong><strong></strong></p>\r\n<p><strong>Lab: </strong><strong>Project 3 Due;&nbsp;</strong>P4: Creative brief &amp; preliminary storyboard; (Object &amp; Graphic) Infographics research <strong><br /> </strong></p>\r\n<p><strong>Homework:</strong> <strong>A7 &amp; A8 due week 8 </strong>(See handout, download from myaicampus). <strong>Read pgs 156&ndash;169 // pgs.120&ndash;131</strong></p>');
INSERT INTO `activities` VALUES(459, 47, 8, '<p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Retail &amp; trade show design); Placemaking &amp; Interpretive Design: Designing Experiences; Scale plans &amp; models; &nbsp;Spatial planning: spatial manipulation and traffic flow;&nbsp;P1 Individual<strong>&nbsp;</strong>presentations of identity evolution and 3-D design application (Civic &amp; Urban Systems)&nbsp;</p>\r\n<p><strong>Lab: </strong>P4 CRITS; P4 Refinement&mdash;Revise plan based on principles of object staging; Define an intentional pace;&nbsp;Develop Plan View; 3-D model; Concept Statement;&nbsp;P4 CRITS: exhibit&rsquo;s object staging, spatial manipulation, traffic flow and interpretative elements;&nbsp;P4 Refinement&mdash;Materials, Cost &amp; Interpretative Signage</p>\r\n<p><strong>Homework:&nbsp;</strong><strong>A9 due week 10&nbsp;</strong>(See handout, download from myaicampus).&nbsp;<strong>Read pgs 70&ndash;83</strong><strong></strong></p>');
INSERT INTO `activities` VALUES(460, 47, 9, '<p><strong>Holiday - no class.</strong></p>');
INSERT INTO `activities` VALUES(461, 47, 10, '<p><strong>Lecture: </strong>P1 Individual<strong> </strong>presentations of identity evolution and 3-D design application (Transportation) |</p>\r\n<p><strong>Lab:</strong> P4 CRITS; Work on final presentation materials for P4</p>\r\n<p><strong>Homework:</strong> <strong>Project 4 DUE&mdash;Final Exhibit due</strong> (See homework handout)&nbsp;<strong></strong></p>');
INSERT INTO `activities` VALUES(462, 47, 11, '<p><strong>Lecture: </strong>Final class review and discussion</p>\r\n<p><strong>Lab: </strong><strong>Project 4 Due: </strong>Final Presentation of proposed exhibits. Document all work for portfolio.</p>');
INSERT INTO `activities` VALUES(463, 48, 1, '<p><strong>Lecture:</strong>&nbsp; Course introduction and process discussion; Discussion of the portfolio format and individual professional promotional methods.</p>\r\n<p><strong>Lab:</strong>&nbsp; Personal graphic identity development; Discussion of planned portfolio contents.</p>\r\n<p><strong>Homework:</strong>&nbsp; Assignment defined by the instructor.</p>');
INSERT INTO `activities` VALUES(464, 48, 2, '<p><strong>Lecture:</strong>&nbsp; Introduction of creative development for personal identity design; Discussion of exhibit selection for portfolio presentation.</p>\r\n<p><strong>Lab:</strong>&nbsp; Concept development for personal identification design;&nbsp; Selection and review of portfolio exhibits for refinement.</p>\r\n<p><strong>Homework:</strong>&nbsp; Design development of personal identity design; Select exhibits for portfolio.</p>');
INSERT INTO `activities` VALUES(465, 48, 3, '<p><strong>Lecture:</strong>&nbsp; Introduction of personal stationery design assignment; Introduction of "Challenge and Solution" statement assignment.</p>\r\n<p><strong>Lab:&nbsp;</strong> Stationery design development; Writing of "Challenge and Solution" statements.</p>\r\n<p><strong>Homework:</strong>&nbsp; Assignment development; Completion of assigned deadlines.</p>');
INSERT INTO `activities` VALUES(466, 48, 4, '<p><strong>Lecture:</strong>&nbsp; Introduction of the "Leave Behind" and "Mailer" publications</p>\r\n<p><strong>Lab:&nbsp;</strong> Design development of the "Leave Behind and "Mailer" publication concepts;&nbsp; Finalization of the previous assignments.</p>\r\n<p><strong>Homework:</strong>&nbsp; Assignment development; Completion of assigned deadline.</p>');
INSERT INTO `activities` VALUES(467, 48, 5, '<p><strong>Lecture:</strong>&nbsp; Introduction of exhibit photography process, Introduction of Electronic Portfolio and Web Site Design; Discuss the layout of table top display for portfolio show.</p>\r\n<p><strong>Lab:&nbsp;</strong> Continue design development for previous assignments and exhibit refinements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Assignment development; Completion of assigned deadline.</p>');
INSERT INTO `activities` VALUES(468, 48, 6, '<p><strong>Lecture:</strong>&nbsp; Professional Panel Review.</p>\r\n<p><strong>Lab:</strong> Continue design development for previous assignments and exhibit refinements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Assignment development; Completion of assigned deadline.</p>');
INSERT INTO `activities` VALUES(469, 48, 7, '<p><strong>Lecture:</strong>&nbsp; Each student will review all portfolio elements with the instructor;&nbsp; Discussion of the Faculty Panel Review.</p>\r\n<p><strong>Lab:</strong>&nbsp; Continue design development for previous assignments and exhibit refinements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Prepare for the Faculty Review.</p>');
INSERT INTO `activities` VALUES(470, 48, 8, '<p><strong>Faculty Panel Review</strong></p>');
INSERT INTO `activities` VALUES(471, 48, 9, '<p><strong>Lecture:</strong>&nbsp; Discussion of Faculty Panel Review out-come and comments.</p>\r\n<p><strong>Lab:&nbsp;</strong> Continued refinement based on suggestions of the Faculty Panel.</p>\r\n<p><strong>Homework:</strong>&nbsp; Finalization of all portfolio elements.</p>');
INSERT INTO `activities` VALUES(472, 48, 10, '<p><strong>Lecture:</strong>&nbsp; Final portfolio presentation of graduation candidates.</p>\r\n<p><strong>Lab:</strong>&nbsp; Non-graduation candidates will continue design refinement of all portfolio elements.</p>\r\n<p><strong>Homework:&nbsp;</strong> Non-graduation candidates will prepare for final portfolio presentations.</p>');
INSERT INTO `activities` VALUES(473, 48, 11, '<p>Non-graduation candidates will make their final portfolio presentations.</p>');
INSERT INTO `activities` VALUES(474, 49, 1, '');
INSERT INTO `activities` VALUES(475, 49, 2, '');
INSERT INTO `activities` VALUES(476, 49, 3, '');
INSERT INTO `activities` VALUES(477, 49, 4, '');
INSERT INTO `activities` VALUES(478, 49, 5, '');
INSERT INTO `activities` VALUES(479, 49, 6, '');
INSERT INTO `activities` VALUES(480, 49, 7, '');
INSERT INTO `activities` VALUES(481, 49, 8, '');
INSERT INTO `activities` VALUES(482, 49, 9, '');
INSERT INTO `activities` VALUES(483, 49, 10, '');
INSERT INTO `activities` VALUES(484, 49, 11, '');
INSERT INTO `activities` VALUES(485, 50, 1, '<p><strong>Lecture:&nbsp;</strong> Introduce the concept of Corporate Communications and the career possibilities in related fields; Discuss the organizational structure of a corporate design center and the role of the graphic designer as a member of the communications team.</p>\r\n<p><strong>Lab:</strong>&nbsp; Assignment research and documentation phase.</p>\r\n<p><strong>Homework:&nbsp;</strong> Complete assignment.</p>');
INSERT INTO `activities` VALUES(486, 50, 2, '<p><strong>Lecture:</strong>&nbsp; The role of brand design in an integrated corporate communications program;&nbsp; display of "best in category" exhibits.</p>\r\n<p><strong>Lab:&nbsp;</strong> Assignment #1 development:&nbsp; Corporate Press Folder</p>\r\n<p><strong>Homework:</strong> Completion of assignment #1.</p>\r\n<p>&nbsp;</p>');
INSERT INTO `activities` VALUES(487, 50, 3, '<p><strong>Lecture:&nbsp;</strong> Discussion of the history of corporate communications:&nbsp; best practices examples displayed and discussed.</p>\r\n<p><strong>Lab:&nbsp;</strong> Assignment #1 critique;&nbsp; Introduction of assignment #2: Employee Communication</p>\r\n<p><strong>Homework:</strong>&nbsp; Completion of assignment #2</p>');
INSERT INTO `activities` VALUES(488, 50, 4, '<p><strong>Lecture:</strong>&nbsp; Discussion of the qualities and abilities required to be successful as a corporate graphic designer.</p>\r\n<p><strong>Lab:</strong>&nbsp; Assignment #2 critique;&nbsp; Introduction of assignment #3:&nbsp; Product Marketing Literature, Phase 1.</p>\r\n<p><strong>Homework:</strong> Completion of assignment #3, phase 1.&nbsp;</p>');
INSERT INTO `activities` VALUES(489, 50, 5, '<p><strong>Lecture:</strong>&nbsp; Discussion of corporate product marketing and the designer''s role.</p>\r\n<p><strong>Lab:</strong>&nbsp; Assignment #3, phase 1 critique;&nbsp; Introduction of assignment #3, phase 2.</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of assignment #3, phase 2.</p>');
INSERT INTO `activities` VALUES(490, 50, 6, '<p><strong>Lecture:</strong>&nbsp; Class critique and review of Assignment #3, phases 1 &amp; 2;&nbsp; Introduction of the "Trade Show" environment and fabrication methods.</p>\r\n<p><strong>Lab:&nbsp;</strong> Assignment #4:&nbsp; Corporate Trade Show, phase 1 development.</p>\r\n<p><strong>Homework:</strong> Completion of Assignment #4, phase 1.</p>');
INSERT INTO `activities` VALUES(491, 50, 7, '<p><strong>Lecture:</strong> Discussion of corporate trade show best practices.</p>\r\n<p><strong>Lab:</strong>&nbsp; Assignment #4, phase 2 development.</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of Assignment #4, phase 2.</p>');
INSERT INTO `activities` VALUES(492, 50, 8, '<p><strong>Lecture:</strong>&nbsp; Final discussion and critique of Assignment #4, phases 1 &amp; 2.</p>\r\n<p><strong>Lab:</strong>&nbsp; Assignment #5:&nbsp; Corporate Event Marketing.</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of Assignment #5.</p>');
INSERT INTO `activities` VALUES(493, 50, 9, '<p><strong>Lecture:&nbsp;</strong> Final discussion and critique of Assignment #5.</p>\r\n<p><strong>Lab:&nbsp;</strong> Assignment #6:&nbsp; Corporate Annual Report Cover</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of Assignment #6.</p>');
INSERT INTO `activities` VALUES(494, 50, 10, '<p><strong>Lecture:</strong>&nbsp; Content Review for Final Exam;&nbsp; Outline for final design presentation.</p>\r\n<p><strong>Lab:&nbsp;</strong> Final discussion and critique of assignment #6.</p>\r\n<p><strong>Homework:</strong>&nbsp; Study for final exam and prepare the final design presentation.</p>');
INSERT INTO `activities` VALUES(495, 50, 11, '<p>Final exam and design presentation.</p>');
INSERT INTO `activities` VALUES(496, 51, 1, '<p><strong>Lecture:</strong>&nbsp; Introduction to course objectives and methodology;&nbsp; Discussion of international design consulting and related challenges;&nbsp; Discussion of the target culture and audience.</p>\r\n<p><strong>Lab:</strong>&nbsp; Assignment #1:&nbsp; Research development.</p>\r\n<p><strong>Homework:</strong>&nbsp; Complete research assignment #1.</p>');
INSERT INTO `activities` VALUES(497, 51, 2, '<p><strong>Lecture:</strong>&nbsp; Evaluate the research process and the selection of meaningful data.</p>\r\n<p><strong>Lab:&nbsp;</strong> Each student will present the findings of their research assignment #1;&nbsp; Introduction of Assignment #2:&nbsp; Exterior Identification Signing, phase 1.</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of Assignment #2, phase 1.</p>');
INSERT INTO `activities` VALUES(498, 51, 3, '<p><strong>Lecture:</strong>&nbsp; Discussion of exterior signing fabrication;&nbsp; Critique of Assignment #2, phase 1.</p>\r\n<p><strong>Lab:&nbsp;</strong> Continuation of Assignment #2, phase 2.</p>\r\n<p><strong>Homework:</strong> Completion of Assignment #2, phase 2.&nbsp;</p>');
INSERT INTO `activities` VALUES(499, 51, 4, '<p><strong>Lecture:</strong>&nbsp; Discussion of Product Marketing / Corporate Capabilities introduced to targeted audience and culture;&nbsp; Introduce Assignment #3, phase 1.</p>\r\n<p><strong>Lab:</strong>&nbsp; Creative concept development for Assignment #3, phase 1.</p>\r\n<p><strong>Homework:</strong>&nbsp; Complete Assignment #3, phase 1.</p>');
INSERT INTO `activities` VALUES(500, 51, 5, '<p><strong>Lecture:</strong>&nbsp; Critique and discussion of exhibits representing Assignment #3, phase 1;&nbsp; Introduce Assignment #3, phase 2.</p>\r\n<p><strong>Lab:&nbsp;</strong> Creative concept development for Assignment #3, phase 2.</p>\r\n<p><strong>Homework:&nbsp;</strong> Complete Assignment #3, phase 2.</p>');
INSERT INTO `activities` VALUES(501, 51, 6, '<p><strong>Lecture:</strong>&nbsp; Critique and discussion of exhibits representing Assignment #3, phase 2;&nbsp; Introduce Assignment #3, phase 3.</p>\r\n<p><strong>Lab:</strong>&nbsp; Creative concept development for Assignment #3, phase 3.</p>\r\n<p><strong>Homework:</strong>&nbsp; Complete Assignment #3, phase 3.</p>');
INSERT INTO `activities` VALUES(502, 51, 7, '<p><strong>Lecture:&nbsp;</strong> Critique and discussion of exhibits representing Assignment #3, phase 3;&nbsp; Introduce Assignment #3, final refinement;&nbsp; Introduce Assignment #4.</p>\r\n<p><strong>Lab:&nbsp;</strong> Final refinement for Assignment #3.</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of Assignment #4.</p>');
INSERT INTO `activities` VALUES(503, 51, 8, '<p><strong>Lecture:</strong>&nbsp; Critique and discussion of exhibits representing Assignment #4;&nbsp; Introduction of Assignment #5, phase 1.</p>\r\n<p><strong>Lab:</strong>&nbsp; Creative development of Assignment #5, phase 1.</p>\r\n<p><strong>Homework:&nbsp;</strong> Completion of Assignment #5, phase 1.</p>');
INSERT INTO `activities` VALUES(504, 51, 9, '<p><strong>Lecture:</strong>&nbsp; Critique and discussion of exhibits representing Assignment #5, phase 1;&nbsp; Introduction of Assignment #5, phase 2.</p>\r\n<p><strong>Lab:</strong>&nbsp; Creative development of Assignment #5, phase 2.</p>\r\n<p><strong>Homework:</strong>&nbsp; Completion of Assignment #5, phase 2.</p>');
INSERT INTO `activities` VALUES(505, 51, 10, '<p><strong>Lecture:</strong>&nbsp; Critique and discussion exhibit representing Assignment #5, phase 2;&nbsp; Discussion of final exam and final presentation of exhibits representing Assignments #2 through #5.</p>\r\n<p><strong>Lab:&nbsp;</strong> Final exhibit refinements</p>\r\n<p><strong>Homework:</strong>&nbsp; Prepare for final exam and exhibit presentation.</p>');
INSERT INTO `activities` VALUES(506, 51, 11, '<p>Final exam and design presentation.</p>');
INSERT INTO `activities` VALUES(507, 52, 1, '<p><strong>Lecture: </strong>Introduction to the class, introduction of design methodology for process book; required elements.</p>\r\n<p><strong>Lab: </strong>Project selection. Start page layout design of process book.</p>\r\n<p><strong>Homework: </strong>Start research: work on creative brief.</p>');
INSERT INTO `activities` VALUES(508, 52, 2, '<p><strong>Lecture: </strong>Creative brief, target audience, competition/branding</p>\r\n<p><strong>Lab: </strong>Work on introduction creative brief, competition/branding, and target audience pages for process book</p>\r\n<p><strong>Homework: </strong>finalize</p>');
INSERT INTO `activities` VALUES(509, 52, 3, '<p><strong>Lecture: </strong>Critique of previous pages. Logo design process:Company&rsquo;s logo and product&rsquo;s logo.</p>\r\n<p><strong>Lab: </strong>Work on thumbnails and comps for both assignments.</p>\r\n<p><strong>Homework: </strong>Finalize thumbnails and comps.</p>\r\n<p><strong>&nbsp;</strong></p>');
INSERT INTO `activities` VALUES(510, 52, 4, '<p><strong>Lecture: </strong>Critique: company and product&rsquo;s logo comps.</p>\r\n<p><strong>Lab: </strong>Refine logos</p>\r\n<p><strong>Homework: </strong>Finalize logos</p>');
INSERT INTO `activities` VALUES(511, 52, 5, '<p><strong>Lecture: </strong>Critique: Final logos. Front panel: add logos, violators, commercial icons, backgrounds, textures and materials. Branding design.</p>\r\n<p><strong>Lab: </strong>Refine final logos. Work on violators and commercial icons if needed. Start working on background textures and materials for design. Add ideas into process book.</p>\r\n<p><strong>Homework: </strong>Continue working on Lab assignment</p>');
INSERT INTO `activities` VALUES(512, 52, 6, '<p><strong>Lecture: </strong>Critique Branding and front panel components.</p>\r\n<p><strong>Lab: </strong>Refine front panel design and branding ideas.</p>\r\n<p><strong>Homework: </strong>Work on branding.</p>');
INSERT INTO `activities` VALUES(513, 52, 7, '<p><strong>Lecture: </strong>Side panels and back panel. Mandatories. Die. Both products for the same line should be included.</p>\r\n<p><strong>Lab: </strong>Work on side panels and back panel. Add main design and mandatories on&nbsp; die. Both products for the same line should be included. Review before class is over. Make final 3-d package.</p>\r\n<p><strong>Homework: </strong>Make final 3-D package and bring to critique.</p>');
INSERT INTO `activities` VALUES(514, 52, 8, '<p><strong>Lecture: </strong>Critique of final 3-D package design. Revisions of process book; required elements.</p>\r\n<p><strong>Lab: </strong>Work on process book, final corrections of 3-D package design and prepare for photo of package design.</p>\r\n<p><strong>Homework: </strong>Work on final process book. Photograph Design.</p>');
INSERT INTO `activities` VALUES(515, 52, 9, '<p><strong>Class Will Not Be Held.</strong></p>');
INSERT INTO `activities` VALUES(516, 52, 10, '<p><strong>Lecture: </strong>Review of product/photography, photo retouching, work on final stages of process book, work on 2-D design presentation board.</p>\r\n<p><strong>Lab: </strong>Photo retouching, revisions.</p>\r\n<p><strong>Homework: </strong>work on final process book.</p>');
INSERT INTO `activities` VALUES(517, 52, 11, '<p>Final Exam and Presentation.</p>');
INSERT INTO `activities` VALUES(518, 53, 1, '<p><strong>Lecture:</strong> Introduction to Course, faculty, students; Introduce Assignment #1, phase 1.</p>\r\n<p><strong>Lab:</strong> Elements of 3D Design and their relationship to practical communication design applications.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #1, phase 1</p>');
INSERT INTO `activities` VALUES(519, 53, 2, '<p><strong>Lecture:</strong> Critique Assignment #1, phase 1; Introduce Assignment #2, phase 2</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #2, phase 2.</p>');
INSERT INTO `activities` VALUES(520, 53, 3, '<p><strong>Lecture:</strong> Critique and discussion of Assignment #2, phase 2;&nbsp; Introduce Assignment #3, phase 1</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #3, phase 1.</p>');
INSERT INTO `activities` VALUES(521, 53, 4, '<p><strong>Lecture:</strong> Critique and discussion of Assignment #3, phase 1; Introduce Assignment #3, phase 2.</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #3, phase 2.</p>');
INSERT INTO `activities` VALUES(522, 53, 5, '<p><strong>Lecture:</strong> Mid-term exam; Critique and discussion of Assignment #3, phase 2; Introduce Assignment #4, phase 1.</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #4, phase 1.</p>');
INSERT INTO `activities` VALUES(523, 53, 6, '<p><strong>Lecture:</strong> Critique and discussion of Assignment #4, phase 1;&nbsp; Introduce Assignment #4, phase 2.</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #4, phase 2.</p>');
INSERT INTO `activities` VALUES(524, 53, 7, '<p><strong>Lecture:</strong> Critique and discussion of Assignment #4, phase 2;&nbsp; Introduce Assignment #5, phase 1.</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #5, phase 1.</p>');
INSERT INTO `activities` VALUES(525, 53, 8, '<p><strong>Lecture:</strong> Critique and discussion of Assignment #5, phase 1;&nbsp; Introduce Assignment #5, phase 2.</p>\r\n<p><strong>Lab:</strong> Work on assignment in class</p>\r\n<p><strong>Homework:</strong> Complete Assignment #5, phase 2;&nbsp; Develop concept for Final Assignment.</p>');
INSERT INTO `activities` VALUES(526, 53, 9, '<p>Holiday:&nbsp; Class Will Not Be Held.</p>');
INSERT INTO `activities` VALUES(527, 53, 10, '<p><strong>Lecture:</strong> Discuss concepts for final project;&nbsp; Introduce Assignment #6:&nbsp; Final Assignment.</p>\r\n<p><strong>Lab:</strong> Work on assignment in class.</p>\r\n<p><strong>Homework:</strong> Complete Assignment #6:&nbsp; Final Assignment.</p>');
INSERT INTO `activities` VALUES(528, 53, 11, '<p>Each student will present his / her final project.</p>');
INSERT INTO `activities` VALUES(529, 54, 1, '<p><strong>Lecture:</strong> Course Introduction. HTML5 and page structure.</p>\r\n<p><strong>Lab: </strong>Build page structure of example project</p>\r\n<p><strong>Homework: </strong>Pick project topic and start design work.</p>\r\n<p>&nbsp;</p>');
INSERT INTO `activities` VALUES(530, 54, 2, '<p><strong>Lecture:</strong> Design Critique</p>\r\n<p><strong>Lab</strong>: Content rotators, Intro to Flash tools</p>\r\n<p><strong>Homework: </strong>Design revisions. Design content rotator slides.</p>');
INSERT INTO `activities` VALUES(531, 54, 3, '<p><strong>Lecture: </strong>jQuery UI and tabbed interface</p>\r\n<p><strong>Lab: </strong>Build jQuery UI part of sample project</p>\r\n<p><strong>Homework: </strong>build jQuery UI into your project.</p>\r\n<p><strong><br /></strong></p>');
INSERT INTO `activities` VALUES(532, 54, 4, '<p><strong>Lecture: </strong>none</p>\r\n<p><strong>Lab: </strong>Work on final project design</p>\r\n<p><strong>Homework: </strong>Work on final project design</p>');
INSERT INTO `activities` VALUES(533, 54, 5, '<p><strong>Lecture: </strong>Video and video players</p>\r\n<p><strong>Lab: </strong>HTML5 video, Flash video players and fallback techniques</p>\r\n<p><strong>Homework: </strong>Find video for your project</p>');
INSERT INTO `activities` VALUES(534, 54, 6, '<p><strong>Lecture: </strong>Forms Part 1</p>\r\n<p><strong>Lab: </strong>Form basics and processing</p>\r\n<p><strong>Homework: </strong>Work on final project</p>');
INSERT INTO `activities` VALUES(535, 54, 7, '<p><strong>Lecture: </strong>Forms part 2</p>\r\n<p><strong>Lab: </strong>Form validation techniques</p>\r\n<p><strong>Homework: </strong>Work on final project</p>');
INSERT INTO `activities` VALUES(536, 54, 8, '<p><strong>Lecture: </strong>Forms part 3</p>\r\n<p><strong>Lab: </strong>advanced form validation techniques</p>\r\n<p><strong>Homework: </strong>build form into final project</p>');
INSERT INTO `activities` VALUES(537, 54, 9, '<p><strong>Lecture: </strong>Flash animations part 1.</p>\r\n<p><strong>Lab: </strong>Building animations, using shape and motion tweens.</p>\r\n<p><strong>Homework: </strong>Work on Flash banner ad animations.</p>');
INSERT INTO `activities` VALUES(538, 54, 10, '<p><strong>Lecture: </strong>Flash animations part 2</p>\r\n<p><strong>Lab: </strong>Using click tags and embedding Flash into HTML</p>\r\n<p><strong>Homework: </strong>Write content for final project</p>');
INSERT INTO `activities` VALUES(539, 54, 11, '<p><strong>Lecture: </strong>Present final projects</p>\r\n<p><strong>Lab: </strong>none</p>\r\n<p><strong>Homework: </strong>none</p>');
INSERT INTO `activities` VALUES(540, 55, 1, '<p>Introduction and discussion of course content. Find a real-world client to design/develop a website for. Brainstorm ideas for the site.</p>');
INSERT INTO `activities` VALUES(541, 55, 2, '<p>Contact client for initial discussion and define project requirements and a realistic scope. Clearly define tasks for you and client. Begin research for the design and development of a professional real-world website project.&nbsp;Prepare calendar plan. Work on project.</p>');
INSERT INTO `activities` VALUES(542, 55, 3, '<p>Critique conceptual proposals and plan. Discuss design issues related to project.&nbsp;Have plan approved by instructor.&nbsp;Continue work on project. Contact client weekly.</p>');
INSERT INTO `activities` VALUES(543, 55, 4, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor.</p>');
INSERT INTO `activities` VALUES(544, 55, 5, '<p>Midterm - Present site draft for class review. Usability check.</p>');
INSERT INTO `activities` VALUES(545, 55, 6, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(546, 55, 7, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(547, 55, 8, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(548, 55, 9, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(549, 55, 10, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(550, 55, 11, '<p>Final - Present finished site for class review. Finalize site for client and deliver files.</p>');
INSERT INTO `activities` VALUES(551, 56, 1, '<p>Introduction and discussion of course content. Find a real-world client to design/develop a website for. Brainstorm ideas for the site.</p>');
INSERT INTO `activities` VALUES(552, 56, 2, '<p>Contact client for initial discussion and define project requirements and a realistic scope. Clearly define tasks for you and client. Begin research for the design and development of a professional real-world website project. Prepare calendar plan. Work on project.</p>');
INSERT INTO `activities` VALUES(553, 56, 3, '<p>Critique conceptual proposals and plan. Discuss design issues related to project. Have plan approved by instructor. Continue work on project. Contact client weekly.</p>');
INSERT INTO `activities` VALUES(554, 56, 4, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor.</p>');
INSERT INTO `activities` VALUES(555, 56, 5, '<p>Midterm - Present site draft for class review. Usability check.</p>');
INSERT INTO `activities` VALUES(556, 56, 6, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(557, 56, 7, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(558, 56, 8, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(559, 56, 9, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(560, 56, 10, '<p>Continue work on project. Contact client weekly. Summarize progress/issues to instructor. Refine as necessary.</p>');
INSERT INTO `activities` VALUES(561, 56, 11, '<p>Final - Present finished site for class review. Finalize site for client and deliver files.</p>');
INSERT INTO `activities` VALUES(562, 57, 1, '<p><strong>Lecture: </strong>Introduction to history and terminology of graphic design and typography part 1.</p>\r\n<p><strong>Lab: </strong>Phase 1: Experimental Glyph Project.</p>\r\n<p><strong>Homework: </strong>Observational assignment 1: bag; Begin reading Sheep book chapters 1&ndash;3; get supplies for week 2.</p>');
INSERT INTO `activities` VALUES(563, 57, 2, '<p><strong>Lecture: </strong>Observational assignment discussion. Introduction to history and terminology of graphic design and typography part 2. Notetaking discussion.</p>\r\n<p><strong>Lab: </strong>Phase 1: Glyph Project continued.<strong></strong></p>\r\n<p><strong>Homework: </strong>Observational assignment 2: logos, continue reading Sheep book chapters 4&ndash;6.</p>');
INSERT INTO `activities` VALUES(564, 57, 3, '<p><strong>Lecture: </strong>Observational assignment 2 due.</p>\r\n<p><strong>Lab: </strong>Phase 1: Glyph Project continued. Creativity and intuition. <em>(m)</em><strong></strong></p>\r\n<p><strong>Homework: </strong>glyph generation continued; complete reading Sheep book.</p>');
INSERT INTO `activities` VALUES(565, 57, 4, '<p><strong>Lecture: </strong>Sheep book Quiz. History of world writing systems, creativity discussion.</p>\r\n<p><strong>Lab: </strong>Further development of experimental letterforms.<strong></strong></p>\r\n<p><strong>Homework: </strong>Read Lupton (etextbook) thru page 45; Letterform studies continued.</p>');
INSERT INTO `activities` VALUES(566, 57, 5, '<p><strong>Lecture: </strong>20th Century Modern as inspiration/contrast. <em>(m)</em></p>\r\n<p><strong>Lab: </strong>In class timed &ldquo;challenge&rdquo; assignment.</p>\r\n<p><strong>Homework: </strong>Read Lupton pages 46&ndash;83; Observational assignment 3 (WorldType) introduced, due week 7; Observational assignment 4 (Helvetica) introduced, due next week.</p>');
INSERT INTO `activities` VALUES(567, 57, 6, '<p><strong>Lecture: </strong>Observational assignment 4 (Helvetica) due; Discussion: Swiss International Style, Chancery letterforms.</p>\r\n<p><strong>Lab: </strong>Phase 2: Italics, development of letterforms, recreating Medieval scribe environment.<strong></strong></p>\r\n<p><strong>Homework: </strong>Read Lupton pages 87&ndash;107; Observational assignment 3 (WorldType) continued, due week 7; letterform studies continued.</p>');
INSERT INTO `activities` VALUES(568, 57, 7, '<p><strong>Lecture: </strong>Observational assignment 3 (WorldType) due. Discussion: Logotype, Trademark and Wordplay overview.</p>\r\n<p><strong>Lab: </strong>Phase 3: Traditional Roman letterforms.</p>\r\n<p><strong>Homework: </strong>Read Lupton pages 108&ndash;147; Read the text section of the Tschichold Reader PDF; Letterform studies continued.</p>');
INSERT INTO `activities` VALUES(569, 57, 8, '<p><strong>Lecture: </strong>Roman letterform discussion. Introduction to traditional design presentations, process books. Time management discussion.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>Lab: </strong>Phase 3: Traditional Roman letterforms. Further development of letterforms using Renaissance-era type tools.</p>\r\n<p><strong>Homework: </strong>Finish reading Lupton; Roman refinements. Xacto Knife Cut Paper assignment, &ldquo;Dry run&rdquo; Wordplay/Process Book option.</p>');
INSERT INTO `activities` VALUES(570, 57, 9, '<p>Holiday &ndash; no class.</p>');
INSERT INTO `activities` VALUES(571, 57, 10, '<p><strong>Lecture: </strong> Lupton Quiz. Form and Composition, letterspacing.</p>\r\n<p><strong>Lab: </strong>Roman refinements continued.<strong> </strong>Presentation demonstration.</p>\r\n<p><strong>Homework: </strong>Complete Type Development Project, Process Book w/Wordplay for presentation.</p>');
INSERT INTO `activities` VALUES(572, 57, 11, '<p><strong>Lecture: </strong>Final project deadline with critique.</p>\r\n<p><strong>Lab: </strong>Type Development Project, Process Book w/Wordplay presentations.</p>');
INSERT INTO `activities` VALUES(573, 58, 1, '<p><strong>Lecture: </strong>Introduction to the course goals, objectives and methodology; Demonstration in exhibit presentation methods; Discussion on the principles of accurate proofreading and methodology along with brief introduction to application workspace.</p>\r\n<p><strong>Lab: </strong>In class assignment experiencing proofreading methodology.</p>\r\n<p><strong>Homework: </strong>Read chapters 1 and 2 in the text; Case Study: Nealdron&rsquo;s Candy Develop Sales sheet Assignment is due at the beginning of week 2.</p>');
INSERT INTO `activities` VALUES(574, 58, 2, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 1 reading assignment.</p>\r\n<p><strong>Lab: </strong>Review and critique of assignment submitted;&nbsp; In class assignment related to text chapters 1 and 2.</p>\r\n<p><strong>Homework: </strong>Read chapters 3 and 4 in the text; Case Study: Nealdron&rsquo;s Candy Develop Internal Newsletter Assignment is due at the beginning of week 3.</p>');
INSERT INTO `activities` VALUES(575, 58, 3, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 2 reading assignment.</p>\r\n<p><strong>Lab: </strong>Review and critique of assignment submitted;&nbsp; In class assignment related to the text chapters 3 and 4.</p>\r\n<p><strong>Homework: </strong>Read chapters 5 and 6 in the text; Complete the in class assignment and prepare exhibits for presentation. Nealdron&rsquo;s Candy redesign sales sheet and design crossword puzzle. Assignment is due at the beginning of week 4.</p>');
INSERT INTO `activities` VALUES(576, 58, 4, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 3 reading assignment. Guest Lecturer.</p>\r\n<p><strong>Lab: </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 5 and 6.</p>\r\n<p><strong>Homework: </strong>Read chapters 7 and 8 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Nealdron&rsquo;s Candy develop promotional pack for suckers that includes a sales flier, bookmark and invitation to promo party. Develop External trifold brochure. Assignment is due at the beginning of week 5.</p>');
INSERT INTO `activities` VALUES(577, 58, 5, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 4 reading assignment;<strong></strong></p>\r\n<p><strong>Mid-term exam.</strong></p>\r\n<p><strong>Lab: </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 7 and 8.</p>\r\n<p><strong>Homework: </strong>Read chapters 9 and 10 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Nealdron&rsquo;s Candy develop CD jewel case. In addition, design a letterhead, envelope and stationary pad. Assignment is due at the beginning of week 6.</p>');
INSERT INTO `activities` VALUES(578, 58, 6, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 5 reading assignment.</p>\r\n<p><strong>Lab:&nbsp; </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 9 and 10.</p>\r\n<p><strong>Homework:</strong>&nbsp; Read chapters 11 and 12 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Nealdron&rsquo;s Candy develop letter on letterhead and envelope using page tool. Students use Indesign to create their individual promo pack with page tool. Assignment is due at the beginning of week 7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>');
INSERT INTO `activities` VALUES(579, 58, 7, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 6 reading assignment. Guest Lecturer.</p>\r\n<p>&nbsp;<strong>Lab: </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 11 and 12.</p>\r\n<p><strong>Homework: </strong>Read chapters 13 and 14 in the text; Complete the in class assignment and prepare exhibits for presentation. Case Study: Zonicle Book Project Proposal. Begin layout of 10 pages of book. Assignment is due at the beginning of week 8.</p>');
INSERT INTO `activities` VALUES(580, 58, 8, '<p><strong>Lecture: </strong>Discussion and demonstration of content in week 7 reading assignment.</p>\r\n<p><strong>Lab:&nbsp; </strong>Review and critique of assignment submitted; In class assignment related to the text chapters 13 and 14.</p>\r\n<p><strong>Homework:</strong> Case Study: Zonicle Book Project Proposal. Design book cover and spine.</p>');
INSERT INTO `activities` VALUES(581, 58, 9, '<p><strong>Lecture: </strong>Presentation of topic related to the principles experienced in the final assignment.&nbsp; Discussion of professional applications of production principles.</p>\r\n<p><strong>&nbsp;Lab:</strong>Continued development of the final assignment.</p>\r\n<p><strong>Homework: </strong>Case Study: Zonicle Book Project Proposal. Work towards completing book.</p>');
INSERT INTO `activities` VALUES(582, 58, 10, '<p><strong>Lecture: </strong>Review of major topics covered throughout the previous nine weeks.</p>\r\n<p><strong>Lab: </strong>Group formal presentation of the assignments completed throughout the previous ten weeks.</p>\r\n<p><strong>Homework:&nbsp; </strong>Prepare for final exam.</p>');
INSERT INTO `activities` VALUES(583, 58, 11, '<p>&nbsp;<strong>Lecture / Lab: </strong>Final Presentation of book project due. Final Group presentations due. Critique of the final assignment; discussion of production methods for the final presentation. &nbsp;<strong></strong></p>\r\n<p><strong>Final Exam. </strong></p>');
INSERT INTO `activities` VALUES(584, 59, 1, '');
INSERT INTO `activities` VALUES(585, 59, 2, '');
INSERT INTO `activities` VALUES(586, 59, 3, '');
INSERT INTO `activities` VALUES(587, 59, 4, '');
INSERT INTO `activities` VALUES(588, 59, 5, '');
INSERT INTO `activities` VALUES(589, 59, 6, '');
INSERT INTO `activities` VALUES(590, 59, 7, '');
INSERT INTO `activities` VALUES(591, 59, 8, '');
INSERT INTO `activities` VALUES(592, 59, 9, '');
INSERT INTO `activities` VALUES(593, 59, 10, '');
INSERT INTO `activities` VALUES(594, 59, 11, '');
INSERT INTO `activities` VALUES(595, 60, 1, '');
INSERT INTO `activities` VALUES(596, 60, 2, '');
INSERT INTO `activities` VALUES(597, 60, 3, '');
INSERT INTO `activities` VALUES(598, 60, 4, '');
INSERT INTO `activities` VALUES(599, 60, 5, '');
INSERT INTO `activities` VALUES(600, 60, 6, '');
INSERT INTO `activities` VALUES(601, 60, 7, '');
INSERT INTO `activities` VALUES(602, 60, 8, '');
INSERT INTO `activities` VALUES(603, 60, 9, '');
INSERT INTO `activities` VALUES(604, 60, 10, '');
INSERT INTO `activities` VALUES(605, 60, 11, '');
INSERT INTO `activities` VALUES(606, 61, 1, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(607, 61, 2, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(608, 61, 3, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(609, 61, 4, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(610, 61, 5, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(611, 61, 6, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(612, 61, 7, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(613, 61, 8, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(614, 61, 9, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(615, 61, 10, '<p>do lots of stuff</p>');
INSERT INTO `activities` VALUES(616, 61, 11, '<p>do lots of stuff</p>');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` VALUES(26, 16, 'Murach', 'Joel Murach', 'Mike Murach & Associates', '2010', '978-1890774561', 'http://www.amazon.com/Murachs-PHP-MySQL-Murach-Reference/dp/1890774561/ref=sr_1_1?ie=UTF8&qid=1340081633&sr=8-1&keywords=php+murach', 2, 1);
INSERT INTO `books` VALUES(27, 17, 'Creating Games with Unity and Maya: How to Develop Fun and Marketable 3D Games', 'Adam Watkins', 'Focal Press', 'July 21, 2011', '978-0240818818', 'http://www.amazon.com/Creating-Games-Unity-Maya-ebook/dp/B005A3K4NK/ref=dp_kinw_strp_1?ie=UTF8&m=AG56TWVU5XWC2', 2, 1);
INSERT INTO `books` VALUES(28, 17, 'Google SketchUp for Game Design: Beginner', 'Robin de Jongh', 'Packt Publishing', 'November 25, 2011', '978-1849691345', 'http://www.amazon.com/Google-SketchUp-Game-Design-ebook/dp/B006EEJSK4/ref=dp_kinw_strp_1?ie=UTF8&m=AG56TWVU5XWC2', 2, 2);
INSERT INTO `books` VALUES(29, 18, 'Database Concepts, 5th ed.', ' David M. Kroenke', 'Pearson Education', '2010', '978-0138018801', 'http://www.amazon.com/Database-Concepts-Edition-David-Kroenke/dp/0138018804/ref=sr_1_1?ie=UTF8&qid=1340167076&sr=8-1&keywords=database+concepts', 2, 1);
INSERT INTO `books` VALUES(30, 20, 'Current AiCASAC Student Handbook', ' Ai', 'Ai', ' 2012', ' none', ' ', 1, 1);
INSERT INTO `books` VALUES(31, 23, 'Head First HTML with CSS & XHTML', 'Elisabeth Freeman and Eric Freeman', 'Oâ€™Reilly Media', '2005', '059610197X', '', 1, 1);
INSERT INTO `books` VALUES(32, 26, 'Adobe Photoshop CS5 Classroom in a Book (eBook)', 'Adobe Creative Team', 'Adobe Press', '2010', '0321701763', 'http://www.amazon.com/Adobe-Photoshop-CS5-Classroom-Book/dp/0321701763/ref=sr_1_1?ie=UTF8&qid=1340569402&sr=8-1&keywords=Adobe+classroom+in+a+book+photoshop', 1, 1);
INSERT INTO `books` VALUES(33, 29, 'AiCASAC Student Handbook', 'Art Institutes', 'n.a.', 'n.a.', 'n.a.', 'You can obtain a free copy at the bookstore.', 1, 1);
INSERT INTO `books` VALUES(34, 25, 'Type and Image: The Language of Graphic Design', 'Phillip B. Meggs', 'John Wiley & Sons', '1992', '442-25846-1', 'http://www.amazon.com/Type-Image-Language-Graphic-Design/dp/0471284920', 1, 1);
INSERT INTO `books` VALUES(35, 30, 'Meggs', 'Phillip B. Meggs', 'John Wiley & Sons', '5th Edition', '9781118292662', 'http://www.amazon.com/Meggs-History-Graphic-Design-Philip/dp/0471699020', 1, 1);
INSERT INTO `books` VALUES(39, 31, 'Layout Workbook: A Real-World Guide to Building Pages in Graphic Design ', 'Kristen Cullen. ', 'Rockport', '2007 (on reserve at the library for 2 hrs)', 'ISBN-10: 1592533523 ', '', 1, 1);
INSERT INTO `books` VALUES(40, 31, 'Grid Systems: Principles of Organizing Type ', 'Kimberly Elam ', 'Princeton Architectural Press', '2004 (on reserve at the library for 2 hrs)', 'ISBN-10: 1568984650', '', 2, 2);
INSERT INTO `books` VALUES(41, 31, 'Typographic Systems of Design ', 'Kimberly Elam', 'Princeton Architectural Press', '2007 (on reserve at the library for 2 hrs)', 'ISBN-10: 1568986874', '', 2, 3);
INSERT INTO `books` VALUES(42, 33, 'Do Good Design: How Designers Can Change the World ', 'David B. Berman', 'Peachpit Press ', '(2003)', 'ISBN-10: 032157320X', '', 2, 1);
INSERT INTO `books` VALUES(43, 33, 'Green Graphic Design by Brian Dougherty', 'Celery Design Collaborative ', ' Allworth Press', '(2008)', 'ISBN-10: 1581155115', '', 2, 2);
INSERT INTO `books` VALUES(44, 33, 'Thinking Creatively ', 'Robin Landa  ', 'North Light Books ', '(2002)', ' ISBN-10: 1581803389', '', 2, 3);
INSERT INTO `books` VALUES(45, 35, 'Just Enough Programming Logic and Design', 'Joyce Farrell', 'Course Technology', '2010', '978-1-4390-3957-1', 'http://www.amazon.com/Just-Enough-Programming-Logic-Design/dp/1111825955/ref=sr_1_1?ie=UTF8&qid=1340989435&sr=8-1&keywords=just+enough+programming+logic', 2, 1);
INSERT INTO `books` VALUES(46, 24, 'jQuery in Action, 2nd Ed.', 'Bear Bibeault ', 'Manning Publications', '2010', '978-1935182320', '', 2, 1);
INSERT INTO `books` VALUES(47, 40, 'Advanced Maya Texturing and Lighting (2nd Ed)', ' Lee Lanier', 'Sybex', '2008', '978-04702927', '', 2, 1);
INSERT INTO `books` VALUES(48, 40, 'Digital Lighting and Rendering (2nd Ed)', 'Jeremy Birn', 'New Riders Press', '2006', '978-0321316318', '', 2, 2);
INSERT INTO `books` VALUES(49, 40, 'Mastering Autodesk Maya 2012', 'Eric Keller', 'John Wiley and Sons', '2011', '978-0470919774', '', 2, 3);
INSERT INTO `books` VALUES(50, 44, 'Type and Image: The Language of Graphic Design', 'Phillip B. Meggs', 'John Wiley & Sons', '1992', '9781118292662', 'http://www.amazon.com/Type-Image-Language-Graphic-Design/dp/0471284920/ref=sr_1_4?s=books&ie=UTF8&qid=1341438792&sr=1-4', 2, 1);
INSERT INTO `books` VALUES(51, 45, 'The Art and Science of Successful Packaging', 'Silva, John and DuPuis, Steven', 'Rockport Publishers', '2008', '1-59253-322-1', 'www.rockpub.com', 1, 1);
INSERT INTO `books` VALUES(52, 46, 'The Marketing Plan Handbook 4/e', 'M.B. Wood', 'Prentice Hall', '2011', '978-0-13-608936-0', '', 1, 1);
INSERT INTO `books` VALUES(53, 47, 'Wayfinding: Designing and Implementing Graphic Navigational Systems', 'Berger, Craig', 'Wiley and Sons', '2005 or 2009', '13: 97828889305070', '', 1, 1);
INSERT INTO `books` VALUES(54, 47, 'Signage and Wayfinding Design', 'Calori, Chris', 'Wiley and Sons', '2007', '978-0-471-74891-5', '', 3, 2);
INSERT INTO `books` VALUES(55, 57, 'Thinking With Type: A Critical Guide for Designers, Writers Editors, & Students. 2nd Edition. ', 'Ellen Lupton', 'Princeton Architectural Press', '2010', 'ISBN 978-1568989693', '', 1, 1);
INSERT INTO `books` VALUES(56, 57, 'Stop Stealing Sheep & Find Out How Type Works, 2nd Edition.', 'Erik Spiekermann and E.M. Ginger', 'Adobe Press', '2002', 'ISBN: 978-0201703399', '', 1, 2);
INSERT INTO `books` VALUES(57, 58, 'Exploring InDesign CS5', 'Terry Rydberg', 'Thomson Delmar Learning', '200', '13: 978-1435442009', '', 1, 1);

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
  `approvedby` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `term_id` (`term_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` VALUES(15, 12, 13, 16, 0, 0, 0);
INSERT INTO `classes` VALUES(16, 10, 1, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(17, 15, 18, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(18, 13, 15, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(19, 5, 20, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(20, 23, 16, 16, 0, 2, 16);
INSERT INTO `classes` VALUES(21, 20, 21, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(22, 21, 21, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(23, 11, 21, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(24, 24, 21, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(25, 31, 25, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(26, 43, 29, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(27, 42, 29, 16, 0, 0, 0);
INSERT INTO `classes` VALUES(29, 23, 23, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(30, 30, 25, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(31, 26, 23, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(32, 19, 20, 16, 0, 0, 0);
INSERT INTO `classes` VALUES(33, 25, 23, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(34, 16, 20, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(35, 17, 20, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(36, 18, 20, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(37, 42, 30, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(38, 41, 30, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(39, 44, 30, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(40, 22, 22, 16, 0, 2, 16);
INSERT INTO `classes` VALUES(41, 18, 24, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(42, 32, 25, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(43, 33, 25, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(44, 29, 25, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(45, 38, 27, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(46, 37, 27, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(47, 36, 27, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(48, 19, 24, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(49, 22, 22, 16, 0, 0, 0);
INSERT INTO `classes` VALUES(50, 35, 24, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(51, 49, 24, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(52, 27, 24, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(53, 28, 24, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(54, 47, 32, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(55, 14, 18, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(56, 7, 18, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(57, 39, 28, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(58, 34, 26, 16, 0, 2, 1);
INSERT INTO `classes` VALUES(59, 48, 31, 16, 0, 0, 0);
INSERT INTO `classes` VALUES(60, 48, 31, 16, 0, 0, 0);
INSERT INTO `classes` VALUES(61, 1, 1, 16, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

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
INSERT INTO `class_days_times` VALUES(18, 26, 'Thursday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(19, 27, 'Tuesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(21, 29, 'Wednesday', '1:00 pm', '3:00 pm', 1);
INSERT INTO `class_days_times` VALUES(22, 25, 'Friday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(23, 30, 'Tuesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(24, 31, 'Tuesday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(25, 33, 'Wednesday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(26, 36, 'Tuesday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(27, 34, 'Monday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(28, 35, 'Tuesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(29, 37, 'Friday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(30, 38, 'Tuesday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(31, 39, 'Thursday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(32, 40, 'Thursday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(33, 42, 'Friday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(34, 43, 'Friday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(35, 44, 'Monday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(36, 45, 'Thursday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(37, 46, 'Wednesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(38, 41, 'Wednesday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(39, 47, 'Monday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(40, 48, 'Wednesday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(41, 50, 'Thursday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(42, 51, 'Wednesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(43, 52, 'Monday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(44, 53, 'Monday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(45, 54, 'Wednesday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(46, 55, 'Thursday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(47, 56, 'Thursday', '5:30 pm', '9:30 pm', 1);
INSERT INTO `class_days_times` VALUES(48, 57, 'Monday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(49, 58, 'Wednesday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(50, 61, 'Monday', '8:00 am', '12:00 pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `sectnum` varchar(10) NOT NULL,
  `materials` text NOT NULL,
  `methods` text NOT NULL,
  `tech` text NOT NULL,
  `hwhrs` varchar(255) NOT NULL,
  `officehrs` varchar(255) NOT NULL,
  `add_req` text NOT NULL,
  `focus` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` VALUES(7, 15, '', '', '', '', '', '', '', '');
INSERT INTO `class_details` VALUES(8, 16, 'E3', '<p>Digital storage device, notepad and pen</p>', '<p>Lecture and Lab</p>', '<p>Computer lab, Adobe Creative Suite, XAMPP or similar, Internet Access</p>', '4 hours per week', 'On Fridays from 4 pm to 5 pm and by appointment', '', '');
INSERT INTO `class_details` VALUES(9, 17, 'A2', '<p>USB Flash Drive or External Hardrive.</p>', '<p>Lecture and Lab</p>', '<p>Technology/Software Requirements Provided in the Ai Computer Labs.</p>', '4', 'Mondays from 12-1pm and by appointment', '', '');
INSERT INTO `class_details` VALUES(10, 18, 'B3', '<p><span style="font-size: small;">Notebook and USB Thumb drive or other storage medium</span></p>', '<p>Lecture and lab</p>', '<p><span style="font-size: small;">Computer lab, Internet connection, Web Browsers, HTML editor or tool as found in most word processing software and others provided in class.</span></p>', '2 - 3 hours per week', 'Tuesdays from 4:30 - 5:30 PM and by appointment', '', '');
INSERT INTO `class_details` VALUES(11, 19, 'E3', '<p class="Text">Digital storage device, notebook and pen</p>', '<p>Lecture and lab</p>', '<p>Computer lab, Adobe Creative Suite, Internet access, Camtasia Studio, Captivate, video and audio recording devices</p>', '4 hours per week', 'Mondays 12-1, Tuesdays 12-1 and by appointment', '', '');
INSERT INTO `class_details` VALUES(12, 20, 'D1', '<ul>\r\n<li>A folder or binder to collect class materials.</li>\r\n<li>Note-taking materials, including paper, pens, pencils.</li>\r\n<li>Class notes, handouts, and homework.</li>\r\n</ul>', '<p>Lecture and discussion</p>', '<p>Access to MyAiCampus, Microsoft Word</p>', '1', 'By appointment', '<p>Not having a computer at home is not an excuse for not completing assignments &ndash; computer labs on campus are readily available.</p>\r\n<p>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER ATTENDANCE HAS BEEN TAKEN&nbsp;</p>\r\n<p>Late work receives a grade of zero.</p>\r\n<p><strong>It is your own responsibility to know what material is covered in class and what all the assignments are.&nbsp; <span style="text-decoration: underline;">Being absent is <em>not</em> an excuse for not knowing information covered in class or for missing an assignment</span>. Use your group members as your first resource!</strong></p>\r\n<p><strong>Professional behavior is expected from all students while in class.</strong> Rude, inappropriate, sexually explicit or harassing language or actions will not be tolerated in this class. <strong>If you behave in an unprofessional manner you will be asked to leave the classroom immediately. </strong>You will then lose participation points for the day, as well as points for any projects that were due that day.</p>', '');
INSERT INTO `class_details` VALUES(13, 23, 'C2', '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these.</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(14, 21, 'B3', '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(15, 22, 'C1', '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these.</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(16, 24, 'D1', '<p>USB Flash drive, sketching materials, access to a computer, and scanner or digital camera.</p>', '<p>This class will be taught with lectures, discussion of the reading, quizzes, online research, and digital production using computers.</p>', '<p>Adobe Dreamweaver and Photoshop provided by the school in the personal computer lab.&nbsp; Access to the Internet and eCompanion.&nbsp; The school should provide these.</p>', '4 hours per week', 'By appointment', '', '');
INSERT INTO `class_details` VALUES(17, 26, 'D1', '<ul>\r\n<li><strong><span style="text-decoration: underline;">Storage Disk:</span></strong> USB Flash Drive (4GB recommended) *<em>Students should not store important files on the computer''s desktop</em></li>\r\n<li><strong><span style="text-decoration: underline;">Presentation Materials:</span></strong> Mattboard/Foamcore, &amp; mounting material (spray, contact), paper cutter. <em>*I expect a professional level of craftsmanship when presenting your projects. Poorly presented projects will seriously affect your grade.</em></li>\r\n<li><strong><span style="text-decoration: underline;">Notes/Journal:</span><em> </em></strong>Students should have note-taking materials handy <strong><em>every</em></strong> class. Notebooks / journal / log, pens and pencils. <em>*Sketching, jotting down ideas, and taking software notes is essential for successful completion of this course.</em></li>\r\n</ul>', '<p><strong>Combination: Lecture/Lab</strong></p>\r\n<p>The software applications used in the creation of digital media are tools&hellip; just like a paintbrush. Solid design principles, and artistic aesthetics are just as important as understanding the software to create significant imagery. It is the student&rsquo;s responsibility to choose their level of commitment regarding the quality of their work and learning process.</p>\r\n<p>&nbsp;</p>\r\n<p>In general, lecture and demonstrations will begin the class session followed by hands on projects. Students are encouraged to network for supplemental info, answers to questions, and additional ideas. Students are highly encouraged to engage in constructive discussion during critiques, and lab time. However, please keep topics relevant to the subject matter.</p>\r\n<p>&nbsp;</p>\r\n<p>If you have a question and I don&rsquo;t see you, please raise your hand or speak up. Your Questions are very important to me, and if I don&rsquo;t have an immediate answer, I will do my best to find one by the next class session.</p>', '<p>PC or Apple PC with Adobe Photoshop CS6 software, peripherals, and Internet Access.</p>', '4 hours per week', '7 am - 8 am Thursday Mornings', '<p><strong>Student Evaluation/Grading Policies:</strong></p>\r\n<ul>\r\n<li>All work must be received by the set deadlines in the course outline. <strong><span style="text-decoration: underline;">No Late work will be accepted</span>&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with me (the instructor) prior to the due date. Regardless of circumstances, penalties will be assessed unless you show me paperwork justifying your absence.</li>\r\n<li>Absolutely no work will be accepted after the final class meets week 11.</li>\r\n<li><strong>Resubmitting projects for re-grading&mdash;</strong>On-time projects may be redone in order to improve grade. You must have instructor&rsquo;s prior approval.<strong></strong></li>\r\n<li><strong>Mid-Term &amp; Final Projects are </strong>graded on scale of A, B, C, D, &amp;&nbsp; F. These two projects represent 50% of your grade. If you fail to complete either one, you will most likely not pass the class. Treat these projects as if your grade depends on it&hellip; because it does. Each project will be graded based on the following:</li>\r\n</ul>\r\n<p class="Normal11pt">&middot; Technical Ability 20%</p>\r\n<p>&middot; Visual Communication 20%</p>\r\n<p>&middot; Concept 20%</p>\r\n<p>&middot; Design 20%</p>\r\n<p>&middot; Presentation 20%</p>\r\n<p><em>*NOTE poorly presented projects will drop your grade by TWO GRADE LEVELS</em><strong></strong></p>\r\n<ul>\r\n<li><strong>Homework Assignments </strong>are to be completed before class begins on the due date. Unless you have made prior arrangements with me, late homework will NOT be accepted, and will be given zero points. If during class you are working on any portion of the homework that is due that day, your homework will not be accepted, thus losing all possible points. Additionally, you will also lose all participation points. All printed homework must be turned in with your name. If the work is submitted without an envelope or other protective case you risk damage to your piece. All digital homework must be turned in to the class&rsquo; online drop box and is due by the beginning of class on the due date.</li>\r\n<li><strong>In-class Assignments </strong>Unless you have made prior arrangements with me (the instructor) you cannot make-up missed in-class work. Most in class assignments are based on homework given the previous class. It is crucial for you to attend every session to be successful in this class.</li>\r\n</ul>\r\n<p>NOTE: Even though you can&rsquo;t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.</p>\r\n<ul>\r\n<li><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by &ldquo;Class time will be spent in a productive manner.&rdquo; Points given for participation or in-class work will NOT be available to students who are not present.<strong></strong></li>\r\n</ul>\r\n<p><em>NOTE: If you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment or research) you will lose all participation points for that day.</em><em> </em></p>\r\n<ul>\r\n<li><strong>Exams-</strong>There is no make-up exams, unless you have contacted the instructor in a responsible and timely manner<em> prior to the exam date class session</em>. If you miss an exam, you will receive a 0 (zero) for that exam.</li>\r\n<li><strong>Critiques</strong> will be held at the beginning of class on the due date of each project. If you arrive late to the Mid-Term or Final project critique within the first 60 minutes of class, your project will lose half a letter grade. If you arrive any time after the first 60 minutes, your project will lose one letter grade. You are required to attend critiques even if your work is not complete. Critiques are crucial in learning to analyze what students have produced, and what could have been done to improve the execution of your concepts. Failing to participate in critiques, or leaving after your work is critiqued will seriously affect your grade for the project.</li>\r\n</ul>', '<p>This course focuses on pushing the students photoshop knowlege past basic competencies. Students will explore the creative the application of photoshop while developing a personal style and refining production skills.</p>');
INSERT INTO `class_details` VALUES(18, 27, 'D1', '', '', '', '4 hours per week', 'Tuesday 7am - 8am', '', '');
INSERT INTO `class_details` VALUES(20, 29, 'C2', '<ul>\r\n<li>A folder or binder to collect class materials;</li>\r\n<li>Note-taking materials, including paper, pens, pencils;</li>\r\n<li>Class notes and handouts</li>\r\n</ul>', '<p><strong></strong><span style="font-size: 10pt; font-family: ''Arial Narrow'';">Lecture/Lab with<strong> </strong>a variety of learner-centered approaches used such as case study analyses, collaborative learning through discussion and application; discovery learning; use of graphic organizers; role play; scaffolding; problem based learning; etc.</span></p>', '<p>Internet to access myaicampus.com</p>\r\n<p><strong>Class Website:</strong> All handouts, resources, and grading for this class will be available 24/7 on the <em>myaicampus </em>website.</p>\r\n<ol>\r\n<li>To access myaicampus and other online resources for this class go to the Art Institute Student Portal at: <strong><em><a href="http://myaicampus.com/">http://myaicampus.com</a></em></strong>.</li>\r\n<li>Login. If first-time user, you must set up your portal account. Follow the steps under the link "<strong><em>Quick Guide: Setting up your account</em></strong>" on the myaicampus.com page.</li>\r\n<li>Once in the portal, locate your current classes, click the link "<strong>My Classes</strong>". This button will take you to your eCourses home page where you will see all courses your are enrolled in. To access a specific course, click on the course title.</li>\r\n</ol>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>', '0 hrs', 'Wednesday 3-4 pm (room 160) or by appointment or email. Email: aperez@aii.edu   Note, when emailing me, PLEASE put the following in the subject line â€œRS091â€ to ensure you receive a reply within 24 hrs. If contacting instructor by email, please note th', '', '');
INSERT INTO `class_details` VALUES(21, 25, 'E1', '<p>Sketchpad, pencils/markers, flash drive.</p>', '<p><span style="font-size: 10pt; font-family: Garamond; color: black;">Lab, Lecture, Applied Projects</span></p>', '<p><span style="font-size: 10pt; font-family: Garamond;">Access to you eCompanion class, which can be done on campus. Access to Internet, Adobe Creative Suite.</span></p>', '4 hours per week', 'Mondays from 11 am - 12 pm or by appointment', '<p><em></em><span style="font-size: 10pt; font-family: Garamond;">As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance.</span><em><span style="font-size: 10pt; font-family: Garamond;"> (When sending email, please put &ldquo;GD2262-C1&rdquo; in the subject line to ensure I see and reply promptly to your email.)</span></em></p>\r\n<p><em></em><span style="font-size: 10pt; font-family: Garamond;"><strong>I will not accept your weekly assignment unless I hear from you <span style="text-decoration: underline;">and</span> receive your work prior to the end of the class period.</strong> <br /></span></p>', '');
INSERT INTO `class_details` VALUES(22, 30, 'B1', '<p><span style="font-size: 11pt; font-family: Garamond;">Storage disk, presentation supplies, color prints, notebook, sketchbook,pens/pencils<ins cite="mailto:Holly%20Hadley" datetime="2010-07-14T10:03"></ins></span></p>', '<p><span style="font-size: 11pt; font-family: Garamond;"><span style="font-size: 11pt; font-family: Garamond;">Discussions, Lab, Readings, and Research.<span>&nbsp; </span></span> </span></p>', '<p><span style="font-size: 11pt; font-family: Garamond;">Computer, design software, office software, PowerPoint, camera, printers, scanner</span></p>', '6 hours per week', 'Mondays from 11 am - 12 pm or by appointment', '<p><span style="font-size: 10pt; font-family: Garamond;">As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance.</span><em><span style="font-size: 10pt; font-family: Garamond;"> (When sending email, please put &ldquo;GD3391-B1&rdquo; in the subject line to ensure I see and reply promptly to your email.)</span></em><em></em><span style="font-size: 10pt; font-family: Garamond;"><strong>I will not accept your weekly assignment unless I hear from you <span style="text-decoration: underline;">and</span> receive your work prior to the end of the class period.</strong> </span></p>', '');
INSERT INTO `class_details` VALUES(23, 31, 'B2', '<p>8"x50yds white tracing paper roll</p>\r\n<p>Artist tape (one white, one black)</p>\r\n<p>Triangle or T-square&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>Kneaded Eraser and White eraser</p>\r\n<p>#11 X-acto + blades&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>Metal Ruler</p>\r\n<p>Portable drive to archive work</p>\r\n<p>Felt tip pens&mdash;ultra fine point, micro point, chisel tip (Sharpies ok)</p>\r\n<p>&sect; Ruler-Inches and Pica Scale 18" <br /> (C-Thru or Schaedler Precision Rule)</p>\r\n<p>&sect; Several magazines (to be assigned)</p>\r\n<p>Letramax Black Mounting Board:</p>\r\n<p><em>(3) 15"x20" boards </em></p>\r\n<p><em>(1) 18"x24" board&nbsp; </em></p>\r\n<p>Portfolio tote to accommodate an 18"X24" board minimum</p>', '<ul>\r\n<li>Instructor-led method with demonstrations</li>\r\n<li>Collaborative discussion and application of reading</li>\r\n<li>In-class individual and group exercises; projects and homework assignments</li>\r\n<li>Formal and informal assessment (self-critiques, peer critiques, group-to group critiques, surprise quizzes &amp; exams)</li>\r\n</ul>', '<p>Computer with standard graphic design software (Adobe Creative Suite) and peripherals (i.e., color printer, scanner, digital camera), high quality-color output, and Internet access (note: you have access to most of these via the campus computer labs and the CAGE). Additionally, you will need a portable hard drive or flash drive to store your work.</p>\r\n<p><strong>Class Website:</strong> All handouts, resources, and grading for this class will be available 24/7 on the <em>myaicampus </em>website.</p>\r\n<ol>\r\n<li>To access myaicampus and other online resources for this class go to the Art Institute Student Portal at: <strong><em><a href="http://myaicampus.com/">http://myaicampus.com</a></em></strong>.</li>\r\n<li>Login. If first-time user, you must set up your portal account. Follow the steps under the link "<strong><em>Quick Guide: Setting up your account</em></strong>" on the myaicampus.com page.</li>\r\n<li>Once in the portal, locate your current classes, click the link "<strong>My Classes</strong>". This button will take you to your eCourses home page where you will see all courses your are enrolled in. To access a specific course, click on the course title.</li>\r\n</ol>', '4-8 Hours (this will depend on your skills in reading comprehension, InDesign, time management, scanning and general computer use).', 'Wednesdays 3-4 pm (room 160) or by appointment. NOTE: When emailing me, PLEASE put the following in the subject line â€œGD1132â€ to ensure you receive a reply within 24 hrs. Any email sent Friday past 6 pm, Sat. or Sun. may not receive a reply till Monda', '', '');
INSERT INTO `class_details` VALUES(24, 33, 'C3', '<p><span style="font-size: 10pt; font-family: ''Arial Narrow'';">Binder with 20-30 plastic sleeves, felt tip pens, presentation supplies, high quality printing, standard graphic design tools (i.e., glue stick, scissors, X-acto + blades, tracing paper, artist tape). </span></p>', '<p><span style="font-size: 10pt; font-family: ''Arial Narrow'';">a variety of learner-centered approaches are used such as case study analyses, collaborative learning through discussion and application of reading in small group or as a class; discovery learning; use of graphic organizers; role play; scaffolding; problem based learning; individual or small group practice exercises; controlled practice exercises; lecture-discussion between instructor and students; informal assessment (self-critiques, peer critiques, group-to-group crits, surprise quizzes); demonstration-guided performance; etc</span></p>', '<p><span style="font-size: 10pt; font-family: ''Arial Narrow'';">Computer with standard graphic design software (Adobe Creative Suite) and peripherals (i.e., color printer, scanner, digital camera), high quality-color output, and Internet access (note: you have access to most of these via the campus computer labs and the CAGE). Additionally, you will need a portable hard drive or flash drive to store your work.</span></p>\r\n<p><strong>Class Website:</strong> All handouts, resources, and grading for this class will be available 24/7 on the <em>myaicampus </em>website.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>To access myaicampus and other online resources for this class go to the Art Institute Student Portal at: <strong><em><a href="http://myaicampus.com/">http://myaicampus.com</a></em></strong>.</li>\r\n<li>Login. If first-time user, you must set up your portal account. Follow the steps under the link "<strong><em>Quick Guide: Setting up your account</em></strong>" on the myaicampus.com page.</li>\r\n<li><span style="font-size: 10pt; font-family: ''Arial Narrow'';">Once in the portal, locate your current classes, click the link "<strong>My Classes</strong>". This button will take you to your eCourses home page where you will see all courses your are enrolled in. To access a specific course, click on the course title <br /></span></li>\r\n</ol>', '4-8 Hours (this will depend on your skills in time management and image making)', 'Wednesday 3-4 pm (room 160), by appointment, by email at aperez@aii.edu NOTE: When emailing me, PLEASE put the following in the subject line â€œGD2265â€ to ensure you receive a reply within 24 hrs. Any email sent Friday past 6 pm or weekend may not recei', '', '');
INSERT INTO `class_details` VALUES(25, 36, 'B2', '<p>Domain name, Hosting, budget $300 for Portfolio Show (printing, rentals, etc.)</p>', '<p>Lab</p>', '<p>PC or Mac Computer, whatever software and hardware it takes to produce your portfolio, Camera</p>', '10 hours per week', 'Mondays 12-1, Tuesdays 12-1 and by appointment', '', '');
INSERT INTO `class_details` VALUES(26, 34, 'A1', '<p>None</p>', '<p>Lecture and lab</p>', '<p>PC or Mac with Adobe Creative Suite</p>', '4 hours per week', 'Mondays 12-1, Tuesdays 12-1 and by appointment', '', '');
INSERT INTO `class_details` VALUES(27, 35, 'B1', '<p>None</p>', '<p>Lecture and lab</p>', '<p>PC or Mac with code editing tool</p>', '4 hours per week', 'Mondays 12-1, Tuesdays 12-1 and by appointment', '', '');
INSERT INTO `class_details` VALUES(28, 37, 'E3', '<p>Flash drive for storage (Minimum of 4 GB)</p>\r\n<p>Mount board or Foam core (2 11x17 boards)</p>', '<p>Lecture</p>', '<p>Computer lab with image manipulation software and peripherals.&nbsp;&nbsp;&nbsp;&nbsp;</p>', '4 Hours Per week', 'Tuesdays & Thursdays 4:00-5:00', '', '');
INSERT INTO `class_details` VALUES(29, 38, 'D3', '<p>Flash drive for storage (4 GB minimum)</p>\r\n<p>Mout Board or Foam Core (2 11x17 boards)</p>', '<p>Lecture, Field study</p>', '<p>Personal computer, digital camera</p>', '4 Hours per week', 'Tuesdays & Thursdays 4:00-5:00PM', '', '');
INSERT INTO `class_details` VALUES(30, 39, 'D3', '<p>Flash Drive for storage (minimum of 4GB)</p>\r\n<p>Mount Board or Foam Core (2 11x17 boards)</p>', '<p>Lecture, Field study</p>', '<p>Computer, Digital camera, various lighting equipment</p>', '4 Hours per week', 'Tuesdays & Thursdays 4:00-5:00PM', '', '');
INSERT INTO `class_details` VALUES(31, 40, 'D1', '<p>Storage Media (flash drive, hard drive), drawing supplies.</p>', '<p>Lecture and Lab</p>', '<p>Computer Lab, Maya, Photoshop, other design and image manipulation applications, access to still camera.</p>', '3 to 4 Hours per week', 'To be discussed in class.', '', '');
INSERT INTO `class_details` VALUES(32, 42, 'E2', '<p><span style="font-size: 11pt; font-family: Garamond;">Storage Disk, presentation supplies, color prints, sketchbook, pens and markers</span></p>', '<p>Lab, Lecture, Applied Projects</p>\r\n<p>&nbsp;</p>', '<p><span style="font-size: 11pt; font-family: Garamond;">Access to you eCompanion class, which can be done on campus. Access to Internet, Adobe Creative Suite</span></p>', '4 hours per week', 'Mondays from 11 am - 12 pm or by appointment', '<p>As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance. (When sending email, please put &ldquo;GD4401&rdquo; in the subject line to ensure I see and reply promptly to your email.) <em>Additionally, please hold this same level of accountability with your Account Supervisor or team leader.</em> <strong>The main focus of this course is cultivating your skills as a member of a creative team, therefore your participation, accountability and commitment to your team is essential to the integrity of your learning experience.</strong></p>', '');
INSERT INTO `class_details` VALUES(33, 43, 'E2', '<p>Storage Disk, presentation supplies, color prints, sketchbook, pens and markers<em></em></p>', '<p><span style="font-size: 11pt; font-family: Garamond; color: black;">Lab, Lecture, Applied Projects</span></p>', '<p><span style="font-size: 11pt; font-family: Garamond;">Access to you eCompanion class, which can be done on campus. Access to Internet, Adobe Creative Suite</span></p>', '4 hours per week', 'Mondays from 11 am - 12 pm or by appointment', '<p>As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance. (When sending email, please put &ldquo;GD4411&rdquo; in the subject line to ensure I see and reply promptly to your email.)<em> Additionally, please hold this same level of accountability with your Account Supervisor or team leader.</em> <strong>The main focus of this course is cultivating your skills as a member of a creative team, therefore your participation, accountability and commitment to your team is essential to the integrity of your learning experience.</strong></p>', '');
INSERT INTO `class_details` VALUES(34, 44, 'A2', '<p>Flash/USB Drive: <strong>REQUIRED</strong></p>\r\n<p>Note taking materials (pen/pencil and paper): <strong>REQUIRED</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><em>Instructor expects every student to keep notes for lecture.</em></p>', '<p>Lecture, lab, applied projects</p>', '<p>Access to Adobe Creative Suite, scanner, printers and camera</p>', '4 hours per week', 'Mondays from 11 am - 12 pm or by appointment', '<p>As you are preparing for your career in design, I ask you to treat your attendance and coursework deadlines as if you were accountable to a workplace. Therefore, if you are going to be absent or late, email me at hagundes@aii.edu or call me at 916-230-1362 to account for your attendance. (When sending email, please put &ldquo;GD2264-A2&rdquo; in the subject line to ensure I see and reply promptly to your email.)<strong>I will not accept your weekly assignment unless I hear from you <span style="text-decoration: underline;">and</span> receive your work prior to the end of the class period.</strong></p>', '');
INSERT INTO `class_details` VALUES(35, 45, 'D1', '<p>Metal Ruler<br />T-Square<br />Pens / Pencils / Markers<br />Drawing Templates (not required but helpful)<br />Hot Glue or adhesive<br />Foam Core Sheets (x3) at 30"x30"<br />Matte Board Sheets (x7) at up to 36"x36"<br />Rubber Cement<br />Artist''s tape (roll)<br />1 X-Acto Knife<br />1 Cutting mat<br />Minimum 20 X-Acto blades<br />1/2 ream of white paper or clean sketchbook<br />Minimum 10 sheets of Bristol Board or similar cardstock paper (at 18"x24")&nbsp;</p>', '<p>Lecture, Lab, Individual and Group Critique</p>', '<p>Access to color printer, scanner, digital camera, flash drive or portable hard drive</p>', '4 hours per week', 'Thursdays from 12:00 PM - 1:00 PM and by appointment', '', '<p>This class will build upon the foundation tools that students have learned in <em>Introduction to Packaging.</em> Students will have the opportunity to collaborate on team projects as well as choose a personally meaningful brand/package design to define and redesign for incorporation into their portfolio.&nbsp;</p>');
INSERT INTO `class_details` VALUES(36, 46, 'C1', '<p>Course Textbook<br />3-Ring binder for your research materials<br />Notebook for lecture materials (or sketchbook)<br />Pen(s)/Pencil(s)<br />1/2 ream of white paper (or sketchbook)<br />Plastic sleeves and/or folder inserts for your notebook<br />Notebook divider tabs<br />Flash drive or portable hard drive<br />Business presentation-style folder for final project&nbsp;</p>', '<p>Lectures, labs, individual and group critiques</p>', '<p>Computer with internet access, office software (word processing, presentation, design), digital camera, scanner, transportation access to/from local business site&nbsp;</p>', '4-6 hours per week', 'Wednesdays from 12:00 PM - 1:00 PM and by appointment', '', '<p>The student will create a relationship with a local, Sacramento-based business to gain first-hand knowledge of the market and create a substantial, realistic design project.</p>');
INSERT INTO `class_details` VALUES(37, 41, 'C2', '<p>High quality print production; graphic design tools and fabrication materials; portfolio display format and presentation materials specified by the instructor.</p>', '<p>Lecture and Lab</p>', '<p>Computer lab and Adobe CS software; Storage Disk / Flash Drive; email account and web server space.</p>', '4 hours per week', 'Thursday from 10 p.m. to 12 p.m. and by appointment', '<p>Successful completion of this course will require the student to meet specific deadline requirements and participation in all scheduled review processes.</p>', '<p>The focus of this course will be to establish a personal professional identity and display format for your creative skills and abilities.&nbsp; A high level of refinement, execution and presentation will be required.&nbsp;</p>');
INSERT INTO `class_details` VALUES(38, 47, 'A3', '<p>An architect scale; 9x12 or 10x13 envelope; dura-tote portfolio; storage disk (flash drive or portable hard drive), presentation supplies, color prints, pens and markers, boards, x-acto knife plus blades, adhesive, foamcore, matte board, and miscellaneous materials for maquette.</p>', '<p>Lecture, lab (research, reading and discussion, critiques, group and individual in-class exercises)</p>', '<p>Computer with graphic software and peripherals (color printer, scanner, camera, etc.). These can be found with access to the computer labs.</p>', '4-8 hours per week (depending upon your skills in time management and image making)', 'Mondays from 4:30 PM - 5:30 PM and by appointment', '<ul>\r\n<li><strong>Email Etiquette:</strong> The industry standard for sending files over email is to send very small files (2 MB or less) or to use an online service for sharing large files (e.g., yousendit.com; box.com; or sharefile.com)&mdash;you upload the file and email the download link to your email recipients. If you need to &ldquo;send&rdquo; a file to the instructor your file must be in PDF format and the total size must not exceed 2 MB. If your file is larger use a file sharing service and send the link OR upload file to myaicampus docsharing (set visibility to instructor only if you wish) let the instructor know where the file is along with the file name.</li>\r\n</ul>\r\n<ul>\r\n<li><strong>Use of Images:</strong> In an effort to encourage students&rsquo; image-making skills, images of your own creation are encouraged over stock images. If you absolutely must use a stock image, you must credit the source (e.g., SOURCE: Corbis Images 2011). Under no circumstances are students allowed to use internet images from non-reputable sources.</li>\r\n</ul>', '');
INSERT INTO `class_details` VALUES(39, 48, 'C2', '<p>High quality print production; Graphic design tools and fabrication materials; portfolio display format and presentation materials specified by the instructor.</p>', '<p>Lecture and Lab</p>', '<p>Computer lab and Adobe CS software; Storage Disk / Flash Drive; emnail account and web server space.</p>', '4 hours per week', 'Thursday from 10 p.m. to 12 p.m. and by appointment', '<p>Successful completion of this course will require the student to meet specific deadline requirements and participation in all scheduled review processes.</p>', '<p>The focus of this course will be to extablish a personal professional identity and display format for your creative skills and abilities.&nbsp; A high level of refinement, execution and presentation will be required.</p>');
INSERT INTO `class_details` VALUES(40, 50, 'C1', '<p>Graphic design materials including layout pad, drawing materials and comprehensive fabrication supplies.&nbsp; Materials as requested by instructor.</p>', '<p>Lecture and Lab</p>', '<p>Computer lab; Adobe CS software; Ability to aquire excellent quality prints.</p>', '4 hours per week', 'Thursday from 10 p.m. to 12 p.m. and by appointment', '', '<p>Based on the understanding of the client requirements the student will be challenged to produce a series of corporate specific design solutions.&nbsp; There will be a series of assignments to encourage the student to experience a broad range of corporate communication opportunities.</p>');
INSERT INTO `class_details` VALUES(41, 51, 'C1', '<p>High quality graphic design materials and tools; concept development materials for sketching and evaluating preliminary ideas; High quality print papers and related exhibit fabrication materials.</p>', '<p>Lecture and Lab</p>', '<p>Computer lab with Adobe CS software; High quality print availability.</p>', '4 hours per week', 'Thursday from 10 p.m. to 12 p.m. and by appointment', '', '<p>This course focuses on advanced concepts in designing visual communication for a unique culture and target audience.&nbsp; The student will be requested to research and document supportive information that will aid in the creative development of communication design solutions.&nbsp; Assignment solutions will be directed toward specific messages targeted to a unique culture and audience.&nbsp; This course will introduce the concept and opportunity of international design consulting.</p>');
INSERT INTO `class_details` VALUES(42, 52, 'A1', '<p>Storage disk (Flash Drive), presentation supplies, quality color prints, layout pads, pens and markers.</p>', '<p>Lecture and Lab</p>', '<p>Computer lab; Adobe CS software; Quality print production.</p>', '4 hours per week', 'Thursday from 10 p.m. to 12 p.m. and by appointment', '', '<p>This course will focus on communication design projects that are related to the process of free-lance assignments.&nbsp; Day to day business realities will be studied and discussed.&nbsp; Selected business topics will be highlighted and documented.</p>');
INSERT INTO `class_details` VALUES(43, 53, 'A2', '<p>Straight Edge/Ruler</p>\r\n<p>Pencils</p>\r\n<p>Sketchbook (8 X 10 ) (drawing paper, not newsprint) *</p>\r\n<p>Xacto knife and extra blades *</p>\r\n<p>Adhesives: Elmer&rsquo;s white or wood glue, epoxy &ndash;other glue sources to be announced</p>\r\n<p>Other Materials will be announced prior to each assignment.</p>', '<p>Lecture and Lab</p>', '<p>Access to computer labs with Adobe CS software; Flash Drive.</p>', '4 hours per week', 'Thursday from 10 p.m. to 12 p.m. and by appointment', '', '<p>This course encourages the student to make conceptual relationships between practical graphic communication applications and abstract three-dimensional assignments.</p>');
INSERT INTO `class_details` VALUES(44, 54, 'C3', '<p>Storage device, notebook and pen</p>', '<p>Lecture and Lab</p>', '<p>Computer lab with Adobe Creative Suite</p>', '4', 'Wednesdays from 4:30pm to 5:30pm', '', '');
INSERT INTO `class_details` VALUES(45, 55, 'D3', '<p>USB Flash Drive or External Hardrive.</p>', '<p>Lecture and Lab</p>', '<p>Technology / Software Requirements are Provide in the Ai Computer Lab</p>', '4 hours per week', 'Thursdays from 5 - 5:30 pm and by appointment', '', '');
INSERT INTO `class_details` VALUES(46, 56, 'D3', '<p>USB Flash Drive or External Hardrive.</p>', '<p>Lecture and Lab</p>', '<p>Technology and Software Requirements Provided by the Ai Computer Labs</p>', '4 hours per week', 'Thursdays from 5 - 5:30 pm and by appointment', '', '');
INSERT INTO `class_details` VALUES(47, 57, 'A1', '<p>Comfortable notebook or sketchbook. Notes will be required for this class, and notebooks may be collected and incorporated into your Type Development Project grade at the end of the quarter (at the instructor&rsquo;s discretion).<strong></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>Drawing tools</em></strong><em> (need as soon as possible, no later than week 2)</em></p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Speedball Calligraphy Pen Set <br /> or comparable calligraphy or broad pen set (no drawing or crow quill sets, they contain nibs that will not work for our assignments)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Calligraphy ink (Pelikan 4001 available in the bookstore), do not buy india ink &ndash; it clogs the pens</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ink cleaning solution (hand sanitizer is a good alternate, since our bookstore does not carry the cleaning solution)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ink eraser</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Technical/drawing pen, .25mm or .50mm (can be Rapidograph or inexpensive fine tip drawing pen &ndash; do not purchase a roller ball-type pen or a Sharpie)</p>\r\n<p>&nbsp;</p>\r\n<p><em>paper (need as soon as possible, no later than week 2)</em></p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8.5x11" transparent vellum 20 &ndash; 50 sheets, do not buy bristol board that says &ldquo;vellum&rdquo; on it (must be transparent<br /> vellum, you will be doing a lot of tracing)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9x12" marker pen paper pad (also used for tracing)<br /> Do NOT buy parchment or &lsquo;calligraphy&rsquo; paper (even though the bookstore carries them). <br /> We will not be using them in this class.</p>\r\n<p>&nbsp;</p>\r\n<p><em>drafting tools (need by week 6)</em></p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .25 or .50 mm mechanical pencil and reï¬ll leads (hb)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; erasing shield</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; kneaded rubber eraser</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 18" metal ruler with cork back</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mini dusting brush</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; flexible curvex (French) curve (flexible is better than the standard French curves)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; drafting compass</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suggested/optional: green circle template for tracing</p>\r\n<p>&nbsp;</p>\r\n<p><em>presentation (necessary for final presentation, purchase after week 10)</em></p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 sheets large Canson or Strathmore paper for cover sheets (black or charcoal gray)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15x20" Letramax No. 100st, Super Black mounting boards (foam core will not be accepted)</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; #11 X-acto knife with extra blades</p>\r\n<p>&nbsp;</p>\r\n<p><em>adhesives (necessary for final presentation, purchase after week 10)</em></p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; White artist tape, any width</p>\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spray adhesive or Letraset StudioTac/Chartpack drybond adhesive (do NOT use glue stick)</p>', '<p><strong></strong>Classroom discussions and critiques, observational research, historical lectures, in-class exercises, reading and critiques.</p>', '<p>Internet access, MyAiCampus access, wordprocessing software and access to a photocopier (A pay-per-use copier can be found in the Art Institute&rsquo;s Library).</p>\r\n<p>&nbsp;</p>\r\n<p>When use of MyAiCampus.com is required for an assignment, it is the student&rsquo;s responsibility to report any difficulties with or confusion about the system at the time they occur&mdash;and before the deadline for the assignment. Deadlines for all assignments&mdash;whether turned in during class or via MyAiCampus.com&mdash;are not flexible, and problems with MyAiCampus.com are not a valid excuse for late work.</p>', '4â€“8 hours per week.', 'via my class@mehallo.com email (fastest way to reach me), or Monday noonâ€“1 PM (directly after class); Tuesdays, Wednesdays, Thursdays 9:30â€“10:30pm; or by appointment.', '<p>Also in use in this class will be Jan Tschichold&rsquo;s classic <em>Treasury of Alphabets and Lettering, </em>ISBN 978-0393701975. However, it is currently out of print &ndash; so an abridged digital reader copy of selected material will be provided free (as a PDF) via the eclassroom. You will be required to print selected pages for use in class.</p>', '');
INSERT INTO `class_details` VALUES(48, 58, 'C2', '<p>Pencil, Sketch Book, Pen, Note Pad, X-acto knife and Portable Hard Drive/Flash Drive.</p>\r\n<p>Additional production materials will be specified by the instructor</p>', '<p>Lecture and Lab; Emphasis will be placed on Lab activity and student class participation.&nbsp; Students will be encouraged to verbally support their creative solutions through classroom presentations and discussions.</p>', '<p>The Macintosh PC computer, flatbed scanners, digital camera, CD drives, printers.&nbsp; Software:<strong> </strong>Adobe InDesign, Adobe Photoshop, and Adobe Illustrator.</p>', '10', 'Wednesdays 12:30 to 1:00pm and 5:00pm to 5:30pm', '', '');
INSERT INTO `class_details` VALUES(49, 61, 'A1', '<p>Some materials</p>', '<p>Lots of methods</p>', '<p>computers and stuff</p>', '4 Hours per week', 'All the time', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=701 ;

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
INSERT INTO `competencies` VALUES(452, 41, 0, 'Demonstrate an understanding of planning the photographic composition.', 0, 0, 1);
INSERT INTO `competencies` VALUES(453, 41, 0, 'Compare film and digital cameras.', 0, 0, 2);
INSERT INTO `competencies` VALUES(454, 41, 0, 'Demonstrate an understanding of photographs as a message making and design element.', 0, 0, 3);
INSERT INTO `competencies` VALUES(455, 41, 0, 'Demonstrate an understanding of the basic elements of photography do''s and don''ts such as: red eye, shadow casting, hot spots.', 0, 0, 4);
INSERT INTO `competencies` VALUES(456, 41, 0, 'Develop an understanding of storytelling, narrative structures, rhythm, audience, and point of view through photography.', 0, 0, 5);
INSERT INTO `competencies` VALUES(457, 41, 0, 'Apply principles of composition and design.', 0, 0, 6);
INSERT INTO `competencies` VALUES(458, 41, 0, 'Explore sequence design.', 0, 0, 7);
INSERT INTO `competencies` VALUES(459, 41, 0, 'Use tabletop photography.', 0, 0, 8);
INSERT INTO `competencies` VALUES(460, 41, 0, 'Use portrait photography.', 0, 0, 9);
INSERT INTO `competencies` VALUES(461, 41, 0, 'Demonstrate photography in various lighting conditions: daylight, dark with flash, indoor photo lights, backlighting, night-exposure.', 0, 0, 10);
INSERT INTO `competencies` VALUES(462, 41, 0, 'Demonstrate the ability to conceive and stage a photographic composition, working with actors/models as well as inanimate objects.', 0, 0, 11);
INSERT INTO `competencies` VALUES(481, 43, 0, 'Apply the Principles of Color Theory.', 0, 0, 1);
INSERT INTO `competencies` VALUES(482, 43, 0, 'Make necessary adjustments to color and contrast.', 0, 0, 2);
INSERT INTO `competencies` VALUES(483, 43, 0, 'Create specific color palettes to solve specific illustration problems.', 0, 0, 3);
INSERT INTO `competencies` VALUES(484, 43, 0, 'Identify, analyze, and apply the critical-thinking process to the design challenges of specific problems.', 0, 0, 4);
INSERT INTO `competencies` VALUES(485, 43, 0, 'Analyze the requirements for a given task and assign the appropriate operating mode, resolution and other variables.', 0, 0, 5);
INSERT INTO `competencies` VALUES(486, 43, 0, 'Use image manipulation software.', 0, 0, 6);
INSERT INTO `competencies` VALUES(487, 43, 0, 'Ensure that all images are properly configured for final output.', 0, 0, 7);
INSERT INTO `competencies` VALUES(488, 43, 0, 'Combine images from several programs into new composite images.', 0, 0, 8);
INSERT INTO `competencies` VALUES(489, 43, 0, 'Operate a digital camera and capture images for use in a raster based computer application.', 0, 0, 9);
INSERT INTO `competencies` VALUES(490, 43, 0, 'Import and manipulate data from other graphics software as part of the final graphics assembly.', 0, 0, 10);
INSERT INTO `competencies` VALUES(491, 43, 0, 'Prepare imagery for proofing and/or final outputting at a service bureau or other supplier.', 0, 0, 11);
INSERT INTO `competencies` VALUES(492, 43, 0, 'Select/apply filters and layers using appropriate menus, tools, and commands.', 0, 0, 12);
INSERT INTO `competencies` VALUES(493, 43, 0, ' Use an Internet Browser.', 0, 0, 13);
INSERT INTO `competencies` VALUES(494, 43, 0, 'Utilize Internet tools and technology.', 0, 0, 14);
INSERT INTO `competencies` VALUES(495, 44, 0, 'Develop an understanding of storytelling, narrative structures, rhythm, audience, and point of view through photography.', 0, 0, 1);
INSERT INTO `competencies` VALUES(496, 44, 0, 'Apply principles of composition and design.', 0, 0, 2);
INSERT INTO `competencies` VALUES(497, 44, 0, 'Explore sequence design.', 0, 0, 3);
INSERT INTO `competencies` VALUES(498, 44, 0, 'Use tabletop photography.', 0, 0, 4);
INSERT INTO `competencies` VALUES(499, 44, 0, 'Use portrait photography.', 0, 0, 5);
INSERT INTO `competencies` VALUES(500, 44, 0, 'Demonstrate photography in various lighting conditions: daylight, dark with flash, indoor photo lights, backlighting, night-exposure.', 0, 0, 6);
INSERT INTO `competencies` VALUES(501, 44, 0, 'Demonstrate the ability to conceive and stage a photographic composition, working with actors/models as well as inanimate objects.', 0, 0, 7);
INSERT INTO `competencies` VALUES(502, 44, 0, 'Demonstrate a basic understanding of how to art direct a professional photography session.', 0, 0, 8);
INSERT INTO `competencies` VALUES(534, 17, 0, 'Understand the relationship of information architecture to user-centered interface design.', 0, 0, 1);
INSERT INTO `competencies` VALUES(535, 17, 0, 'Research topics and organize ideas into comprehensive information structures.', 0, 0, 2);
INSERT INTO `competencies` VALUES(536, 17, 0, 'Identify the components of a knowledge base including interfaces, classes, properties, facets, implementations and instances.', 0, 0, 3);
INSERT INTO `competencies` VALUES(537, 17, 0, 'Present information structures in industry-standard visual formats (flowcharts, Unified Modeling Language 2).', 0, 0, 4);
INSERT INTO `competencies` VALUES(538, 17, 0, 'Work effectively as a team member.', 0, 0, 5);
INSERT INTO `competencies` VALUES(539, 17, 0, 'Operate a personal computer using current operating system interfaces', 0, 1, 6);
INSERT INTO `competencies` VALUES(540, 17, 0, 'Use correct terms and definitions to describe the operations and applications of computers', 0, 2, 7);
INSERT INTO `competencies` VALUES(541, 17, 0, 'Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed', 0, 2, 8);
INSERT INTO `competencies` VALUES(542, 17, 0, 'Match appropriate connection devices with external equipment', 0, 2, 9);
INSERT INTO `competencies` VALUES(543, 17, 0, 'Compare and contrast operation systems', 0, 2, 10);
INSERT INTO `competencies` VALUES(544, 17, 0, 'Describe and apply the major steps in the "imaging chain"', 0, 2, 11);
INSERT INTO `competencies` VALUES(545, 17, 0, 'Produce documents using word-processing, spreadsheet, and database tools', 0, 2, 12);
INSERT INTO `competencies` VALUES(546, 17, 0, 'Transfer data across platforms', 0, 2, 13);
INSERT INTO `competencies` VALUES(547, 17, 0, 'Correlate keyboard functions with menu operations', 0, 2, 14);
INSERT INTO `competencies` VALUES(548, 17, 0, 'Define characteristics of peripheral communications standards', 0, 2, 15);
INSERT INTO `competencies` VALUES(549, 17, 0, 'Demonstrate cross-platform applications', 0, 2, 16);
INSERT INTO `competencies` VALUES(550, 17, 0, 'Apply database and spreadsheet skills', 0, 2, 17);
INSERT INTO `competencies` VALUES(551, 17, 0, 'Protect data and equipment through the use of virus utilities', 0, 2, 18);
INSERT INTO `competencies` VALUES(552, 17, 0, 'Perform basic disk maintenance and data retrieval operations', 0, 2, 19);
INSERT INTO `competencies` VALUES(553, 17, 0, 'Use and manage computer hardware peripherals for input, output, and storage', 0, 1, 20);
INSERT INTO `competencies` VALUES(554, 17, 0, 'Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets', 0, 2, 21);
INSERT INTO `competencies` VALUES(555, 17, 0, 'Employ appropriate input-output devices', 0, 2, 22);
INSERT INTO `competencies` VALUES(556, 17, 0, 'Use an Internet browser', 0, 1, 23);
INSERT INTO `competencies` VALUES(557, 17, 0, 'Identify the operational characteristics of the Internet and intranets as these compare to standalone systems', 0, 2, 24);
INSERT INTO `competencies` VALUES(558, 17, 0, 'Create and organize directories, folders, and documents using file management techniques', 0, 2, 25);
INSERT INTO `competencies` VALUES(559, 42, 0, 'Apply principles of color theory', 0, 1, 1);
INSERT INTO `competencies` VALUES(560, 42, 0, 'Apply color theory in the scanning, manipulating, and outputting of imagery', 0, 2, 2);
INSERT INTO `competencies` VALUES(561, 42, 0, 'Compare and contrast additive and subtractive color theory', 0, 2, 3);
INSERT INTO `competencies` VALUES(562, 42, 0, 'Identify and define which color theories apply to different input/output devices', 0, 2, 4);
INSERT INTO `competencies` VALUES(563, 42, 0, 'Use and manage computer hardware peripherals for input, output, and storage', 0, 1, 5);
INSERT INTO `competencies` VALUES(564, 42, 0, 'Operate different kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets', 0, 2, 6);
INSERT INTO `competencies` VALUES(565, 42, 0, 'Operate a personal computer using current operating system interfaces', 0, 1, 7);
INSERT INTO `competencies` VALUES(566, 42, 0, 'Correlate keyboard functions with menu operations', 0, 2, 8);
INSERT INTO `competencies` VALUES(567, 42, 0, 'Use image manipulation software', 0, 1, 9);
INSERT INTO `competencies` VALUES(568, 42, 0, 'Manipulate layers, channels and paths', 0, 2, 10);
INSERT INTO `competencies` VALUES(569, 42, 0, 'Describe and apply the major steps in the "imaging chain"', 0, 2, 11);
INSERT INTO `competencies` VALUES(570, 42, 0, 'Use a digital camera to capture images for use in a raster-based computer application', 0, 2, 12);
INSERT INTO `competencies` VALUES(571, 42, 0, 'Produce B&W and/or color illustrations', 0, 2, 13);
INSERT INTO `competencies` VALUES(572, 42, 0, 'Use tools, menus, and keyboard commands to perform complex image selection techniques', 0, 2, 14);
INSERT INTO `competencies` VALUES(573, 42, 0, 'Control image characteristics (size, mode, dpi, etc.)', 0, 2, 15);
INSERT INTO `competencies` VALUES(574, 42, 0, 'Select/apply filters and layers using appropriate menus, tools, and commands', 0, 2, 16);
INSERT INTO `competencies` VALUES(575, 42, 0, 'Prepare imagery for proofing and/or final outputting at a service bureau or other supplier', 0, 2, 17);
INSERT INTO `competencies` VALUES(576, 42, 0, 'Save documents using the appropriate specialized file formats', 0, 2, 18);
INSERT INTO `competencies` VALUES(577, 42, 0, 'Use of the correct computer programs is required for all project applications.', 0, 2, 19);
INSERT INTO `competencies` VALUES(578, 42, 0, 'Operate a personal computer using current operating system interfaces', 0, 1, 20);
INSERT INTO `competencies` VALUES(579, 42, 0, 'Use correct terms and definitions to describe the operations and applications of computers', 0, 2, 21);
INSERT INTO `competencies` VALUES(580, 42, 0, 'Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed', 0, 2, 22);
INSERT INTO `competencies` VALUES(581, 42, 0, 'Match appropriate connection devices with external equipment', 0, 2, 23);
INSERT INTO `competencies` VALUES(582, 42, 0, 'Compare and contrast operation systems', 0, 2, 24);
INSERT INTO `competencies` VALUES(583, 42, 0, 'Describe and apply the major steps in the "imaging chain"', 0, 2, 25);
INSERT INTO `competencies` VALUES(584, 42, 0, 'Produce documents using word-processing, spreadsheet, and database tools', 0, 2, 26);
INSERT INTO `competencies` VALUES(585, 42, 0, 'Transfer data across platforms', 0, 2, 27);
INSERT INTO `competencies` VALUES(586, 42, 0, 'Correlate keyboard functions with menu operations', 0, 2, 28);
INSERT INTO `competencies` VALUES(587, 42, 0, 'Define characteristics of peripheral communications standards', 0, 2, 29);
INSERT INTO `competencies` VALUES(588, 42, 0, 'Demonstrate cross-platform applications', 0, 2, 30);
INSERT INTO `competencies` VALUES(589, 42, 0, 'Apply database and spreadsheet skills', 0, 2, 31);
INSERT INTO `competencies` VALUES(590, 42, 0, 'Protect data and equipment through the use of virus utilities', 0, 2, 32);
INSERT INTO `competencies` VALUES(591, 42, 0, 'Perform basic disk maintenance and data retrieval operations', 0, 2, 33);
INSERT INTO `competencies` VALUES(592, 42, 0, 'Use and manage computer hardware peripherals for input, output, and storage', 0, 1, 34);
INSERT INTO `competencies` VALUES(593, 42, 0, 'Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets', 0, 2, 35);
INSERT INTO `competencies` VALUES(594, 42, 0, 'Employ appropriate input-output devices', 0, 2, 36);
INSERT INTO `competencies` VALUES(595, 42, 0, 'Use an Internet browser', 0, 1, 37);
INSERT INTO `competencies` VALUES(596, 42, 0, 'Identify the operational characteristics of the Internet and intranets as these compare to standalone systems', 0, 2, 38);
INSERT INTO `competencies` VALUES(597, 42, 0, 'Create and organize directories, folders, and documents using file management techniques', 0, 2, 39);
INSERT INTO `competencies` VALUES(598, 34, 0, 'Effectively use a page layout software program to graphically create a single and multi-page document.', 0, 0, 1);
INSERT INTO `competencies` VALUES(599, 34, 0, 'Effectively apply typographic principles to documents produced in an electronic environment. ', 0, 0, 2);
INSERT INTO `competencies` VALUES(600, 34, 0, 'Create professionally acceptable layouts for subsequent electronic application.', 0, 0, 3);
INSERT INTO `competencies` VALUES(601, 34, 0, 'Import and manipulate data from other graphics software as part of the final graphics assembly.', 0, 0, 4);
INSERT INTO `competencies` VALUES(602, 34, 0, 'Develop and use a grid structure that will organize type, images and graphic elements for a successful layout.', 0, 0, 5);
INSERT INTO `competencies` VALUES(603, 34, 0, 'Collect and save documents using appropriate specialized file formats for successful proofing and/or final output at a service bureau or other supplier.', 0, 0, 6);
INSERT INTO `competencies` VALUES(604, 34, 0, 'Operate a personal computer using current operating system interfaces', 0, 1, 7);
INSERT INTO `competencies` VALUES(605, 34, 0, 'Use correct terms and definitions to describe the operations and applications of computers', 0, 2, 8);
INSERT INTO `competencies` VALUES(606, 34, 0, 'Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed', 0, 2, 9);
INSERT INTO `competencies` VALUES(607, 34, 0, 'Match appropriate connection devices with external equipment', 0, 2, 10);
INSERT INTO `competencies` VALUES(608, 34, 0, 'Compare and contrast operation systems', 0, 2, 11);
INSERT INTO `competencies` VALUES(609, 34, 0, 'Describe and apply the major steps in the "imaging chain"', 0, 2, 12);
INSERT INTO `competencies` VALUES(610, 34, 0, 'Produce documents using word-processing, spreadsheet, and database tools', 0, 2, 13);
INSERT INTO `competencies` VALUES(611, 34, 0, 'Transfer data across platforms', 0, 2, 14);
INSERT INTO `competencies` VALUES(612, 34, 0, 'Correlate keyboard functions with menu operations', 0, 2, 15);
INSERT INTO `competencies` VALUES(613, 34, 0, 'Define characteristics of peripheral communications standards', 0, 2, 16);
INSERT INTO `competencies` VALUES(614, 34, 0, 'Demonstrate cross-platform applications', 0, 2, 17);
INSERT INTO `competencies` VALUES(615, 34, 0, 'Apply database and spreadsheet skills', 0, 2, 18);
INSERT INTO `competencies` VALUES(616, 34, 0, 'Protect data and equipment through the use of virus utilities', 0, 2, 19);
INSERT INTO `competencies` VALUES(617, 34, 0, 'Perform basic disk maintenance and data retrieval operations', 0, 2, 20);
INSERT INTO `competencies` VALUES(618, 34, 0, 'Use and manage computer hardware peripherals for input, output, and storage', 0, 1, 21);
INSERT INTO `competencies` VALUES(619, 34, 0, 'Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets', 0, 2, 22);
INSERT INTO `competencies` VALUES(620, 34, 0, 'Employ appropriate input-output devices', 0, 2, 23);
INSERT INTO `competencies` VALUES(621, 34, 0, 'Use an Internet browser', 0, 1, 24);
INSERT INTO `competencies` VALUES(622, 34, 0, 'Identify the operational characteristics of the Internet and intranets as these compare to standalone systems', 0, 2, 25);
INSERT INTO `competencies` VALUES(623, 34, 0, 'Create and organize directories, folders, and documents using file management techniques', 0, 2, 26);
INSERT INTO `competencies` VALUES(624, 46, 0, 'Use multiple software applications to solve design problems.', 0, 0, 1);
INSERT INTO `competencies` VALUES(625, 46, 0, 'Identify different types of software media.', 0, 0, 2);
INSERT INTO `competencies` VALUES(626, 46, 0, 'Define professional vocabulary.', 0, 0, 3);
INSERT INTO `competencies` VALUES(627, 46, 0, 'Identify and use appropriate electronic vocabulary.', 0, 0, 4);
INSERT INTO `competencies` VALUES(628, 46, 0, 'Evaluate principles of design theory as they apply to professional applications including corporate, advertising, informational, and electronic environments.', 0, 0, 5);
INSERT INTO `competencies` VALUES(629, 46, 0, 'Use computer design to communicate advertising objectives.', 0, 0, 6);
INSERT INTO `competencies` VALUES(630, 46, 0, 'Identify different electronic illustration methods.', 0, 0, 7);
INSERT INTO `competencies` VALUES(631, 46, 0, 'Use of the correct computer programs is required for all project applications.', 0, 0, 8);
INSERT INTO `competencies` VALUES(632, 46, 0, 'Operate a personal computer using current operating system interfaces', 0, 1, 9);
INSERT INTO `competencies` VALUES(633, 46, 0, 'Use correct terms and definitions to describe the operations and applications of computers', 0, 2, 10);
INSERT INTO `competencies` VALUES(634, 46, 0, 'Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed', 0, 2, 11);
INSERT INTO `competencies` VALUES(635, 46, 0, 'Match appropriate connection devices with external equipment', 0, 2, 12);
INSERT INTO `competencies` VALUES(636, 46, 0, 'Compare and contrast operation systems', 0, 2, 13);
INSERT INTO `competencies` VALUES(637, 46, 0, 'Describe and apply the major steps in the "imaging chain"', 0, 2, 14);
INSERT INTO `competencies` VALUES(638, 46, 0, 'Produce documents using word-processing, spreadsheet, and database tools', 0, 2, 15);
INSERT INTO `competencies` VALUES(639, 46, 0, 'Transfer data across platforms', 0, 2, 16);
INSERT INTO `competencies` VALUES(640, 46, 0, 'Correlate keyboard functions with menu operations', 0, 2, 17);
INSERT INTO `competencies` VALUES(641, 46, 0, 'Define characteristics of peripheral communications standards', 0, 2, 18);
INSERT INTO `competencies` VALUES(642, 46, 0, 'Demonstrate cross-platform applications', 0, 2, 19);
INSERT INTO `competencies` VALUES(643, 46, 0, 'Apply database and spreadsheet skills', 0, 2, 20);
INSERT INTO `competencies` VALUES(644, 46, 0, 'Protect data and equipment through the use of virus utilities', 0, 2, 21);
INSERT INTO `competencies` VALUES(645, 46, 0, 'Perform basic disk maintenance and data retrieval operations', 0, 2, 22);
INSERT INTO `competencies` VALUES(646, 46, 0, 'Use and manage computer hardware peripherals for input, output, and storage', 0, 1, 23);
INSERT INTO `competencies` VALUES(647, 46, 0, 'Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets', 0, 2, 24);
INSERT INTO `competencies` VALUES(648, 46, 0, 'Employ appropriate input-output devices', 0, 2, 25);
INSERT INTO `competencies` VALUES(649, 46, 0, 'Use an Internet browser', 0, 1, 26);
INSERT INTO `competencies` VALUES(650, 46, 0, 'Identify the operational characteristics of the Internet and intranets as these compare to standalone systems', 0, 2, 27);
INSERT INTO `competencies` VALUES(651, 46, 0, 'Create and organize directories, folders, and documents using file management techniques', 0, 2, 28);
INSERT INTO `competencies` VALUES(652, 11, 0, 'Identify websites that demonstrate good layout and usability design techniques.', 0, 0, 1);
INSERT INTO `competencies` VALUES(653, 11, 0, 'Compose basic HTML using a simple text editor.', 0, 0, 2);
INSERT INTO `competencies` VALUES(654, 11, 0, 'Design, produce, and successfully upload a basic website. ', 0, 0, 3);
INSERT INTO `competencies` VALUES(655, 11, 0, 'Construct logical file and directory structures for a website.', 0, 0, 4);
INSERT INTO `competencies` VALUES(656, 11, 0, 'Implement frames, tables and forms using HTML.', 0, 0, 5);
INSERT INTO `competencies` VALUES(657, 11, 0, 'Apply principles of visual design to the layout of web pages.', 0, 0, 6);
INSERT INTO `competencies` VALUES(658, 11, 0, 'Create a proposal and flow chart suitable for delivery to a potential client.', 0, 0, 7);
INSERT INTO `competencies` VALUES(659, 11, 0, 'Apply time and resource management principles to the website production.', 0, 0, 8);
INSERT INTO `competencies` VALUES(660, 11, 0, 'Prepare and use images as effective elements of web design and content.', 0, 0, 9);
INSERT INTO `competencies` VALUES(661, 11, 0, 'Operate a personal computer using current operating system interfaces', 0, 1, 10);
INSERT INTO `competencies` VALUES(662, 11, 0, 'Use correct terms and definitions to describe the operations and applications of computers', 0, 2, 11);
INSERT INTO `competencies` VALUES(663, 11, 0, 'Summarize hardware characteristics based on configuration, compatibility, processing speed, cost, and rendering speed', 0, 2, 12);
INSERT INTO `competencies` VALUES(664, 11, 0, 'Match appropriate connection devices with external equipment', 0, 2, 13);
INSERT INTO `competencies` VALUES(665, 11, 0, 'Compare and contrast operation systems', 0, 2, 14);
INSERT INTO `competencies` VALUES(666, 11, 0, 'Describe and apply the major steps in the "imaging chain"', 0, 2, 15);
INSERT INTO `competencies` VALUES(667, 11, 0, 'Produce documents using word-processing, spreadsheet, and database tools', 0, 2, 16);
INSERT INTO `competencies` VALUES(668, 11, 0, 'Transfer data across platforms', 0, 2, 17);
INSERT INTO `competencies` VALUES(669, 11, 0, 'Correlate keyboard functions with menu operations', 0, 2, 18);
INSERT INTO `competencies` VALUES(670, 11, 0, 'Define characteristics of peripheral communications standards', 0, 2, 19);
INSERT INTO `competencies` VALUES(671, 11, 0, 'Demonstrate cross-platform applications', 0, 2, 20);
INSERT INTO `competencies` VALUES(672, 11, 0, 'Apply database and spreadsheet skills', 0, 2, 21);
INSERT INTO `competencies` VALUES(673, 11, 0, 'Protect data and equipment through the use of virus utilities', 0, 2, 22);
INSERT INTO `competencies` VALUES(674, 11, 0, 'Perform basic disk maintenance and data retrieval operations', 0, 2, 23);
INSERT INTO `competencies` VALUES(675, 11, 0, 'Use and manage computer hardware peripherals for input, output, and storage', 0, 1, 24);
INSERT INTO `competencies` VALUES(676, 11, 0, 'Operate difference kinds of peripheral hardware, including printers, scanners, external drives, and Wacom tablets', 0, 2, 25);
INSERT INTO `competencies` VALUES(677, 11, 0, 'Employ appropriate input-output devices', 0, 2, 26);
INSERT INTO `competencies` VALUES(678, 11, 0, 'Use an Internet browser', 0, 1, 27);
INSERT INTO `competencies` VALUES(679, 11, 0, 'Identify the operational characteristics of the Internet and intranets as these compare to standalone systems', 0, 2, 28);
INSERT INTO `competencies` VALUES(680, 11, 0, 'Create and organize directories, folders, and documents using file management techniques', 0, 2, 29);
INSERT INTO `competencies` VALUES(681, 47, 0, 'Understand the basic concepts of interactive site and page structure.', 0, 0, 1);
INSERT INTO `competencies` VALUES(682, 47, 0, 'Create animation with shape and motion tweens.', 0, 0, 2);
INSERT INTO `competencies` VALUES(683, 47, 0, 'Understand and apply fundamental programming concepts to create interaction.', 0, 0, 3);
INSERT INTO `competencies` VALUES(684, 47, 0, 'Create usable navigation and basic interaction functions.', 0, 0, 4);
INSERT INTO `competencies` VALUES(685, 47, 0, 'Demonstrate basic skills in debugging and testing interactive media.', 0, 0, 5);
INSERT INTO `competencies` VALUES(686, 48, 0, 'Recognize the interrelationship between design and illustration.', 0, 0, 1);
INSERT INTO `competencies` VALUES(687, 48, 0, 'Demonstrate basic illustration skills.', 0, 0, 2);
INSERT INTO `competencies` VALUES(688, 48, 0, 'Develop visual literacy, through exploring the principles and techniques of visual communication. ', 0, 0, 3);
INSERT INTO `competencies` VALUES(689, 48, 0, 'Utilize illustration as a storytelling device.', 0, 0, 4);
INSERT INTO `competencies` VALUES(690, 48, 0, 'Demonstrate concept building using the visual and written word.', 0, 0, 5);
INSERT INTO `competencies` VALUES(691, 48, 0, 'Develop the relationship of content/form/image.', 0, 0, 6);
INSERT INTO `competencies` VALUES(692, 0, 45, 'Teamwork will be emphasized throughout the term. Strong effort at clear communication and class involvement (especially in reviews and critiques) will enable every student to push themselves and their designs farther.', 1, 0, 1);
INSERT INTO `competencies` VALUES(693, 49, 0, 'Develop an advanced sensitivity to the combination of image, typography and layout. ', 0, 0, 1);
INSERT INTO `competencies` VALUES(694, 49, 0, 'Demonstrate advanced graphic design skills: sequence, advertising, visual and verbal narrative as it interrelates through time and space, storytelling, narrative structures, rhythm, audience, and point of view.', 0, 0, 2);
INSERT INTO `competencies` VALUES(695, 49, 0, 'Develop and demonstrate the graphic creative process through extensive thumbnails and comps before creating completed portfolio pieces.', 0, 0, 3);
INSERT INTO `competencies` VALUES(696, 49, 0, 'Demonstrate by presentation their clarity in problem (assignment) recognition, solution and presentation.', 0, 0, 4);
INSERT INTO `competencies` VALUES(697, 49, 0, 'Develop and demonstrate the ability to research and define the design challenges in a given problem/assignment.', 0, 0, 5);
INSERT INTO `competencies` VALUES(698, 49, 0, 'Develop an understanding of a marketing brief and copywriting skills.', 0, 0, 6);
INSERT INTO `competencies` VALUES(699, 0, 50, 'Develop the ability to research and document critical client information that will aid in the successful execution of graphic design solutions.', 1, 0, 1);
INSERT INTO `competencies` VALUES(700, 0, 51, 'Develop an understanding of targeted communication solutions that are effected by the audience and cultural specifics.', 1, 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

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
INSERT INTO `courses` VALUES(41, 'GD1125', 'Introduction To Photography', 'Photography is a fundamental component of graphic design. This course will introduce the elements of photography and explore its impact and various applications as a vehicle to convey a visual message. Students will learn the operation of cameras such as 35-millimeter and digital, and the principles of composition, lighting, and depth of field. The student will be introduced to the concepts of portraiture, narrative, and documentary issues.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(42, 'FS122', 'Image Manipulation', 'Students are introduced to basic image manipulation skills in a raster-based computer environment. Emphasis is placed on mastering the fundamentals of scanning, color management, photo retouching, imaging, special effects and filters and masks.', 44, 22, 22, 3, 9);
INSERT INTO `courses` VALUES(43, 'GD2244', 'Advanced Image Manipulation', 'This course builds upon the Image Manipulation class to integrate raster and vector graphics with concerns for varied formats including Web and print graphics. Students will create visual messages and focused visual statements and gain an understanding of the differences in Web and print graphics.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(44, 'GD3383', 'Photography 2', 'This course focuses on how the visual and verbal narrative inter relates through time and space. Principle of storytelling, narrative, structures, rhythm, audience and point of view will be developed.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(46, 'GD1134', 'Digital Illustration', 'This course helps students communicate and design with the computer as a professional tool. Using different software applications, the student will demonstrate an understanding of electronic illustration. The course will explore vector-based graphic applications that are considered to be industry standard.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(47, 'MM1132', 'Fundamentals Of Authoring', 'This course is an introduction to interactive design using authoring tools. Students create animation and interactivity using basic scripting techniques.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(48, 'GD2242', 'Illustrative Concept Design', 'This course introduces the philosophy behind illustration. It also highlights the uses of illustration in the graphic design industry. Assignments will focus on black and white and color techniques, using contrast, values, composition, and function. Conceptual visual problem solving will play a fundamental role in this course.', 44, 22, 22, 3, 3);
INSERT INTO `courses` VALUES(49, 'GD3384', 'Advanced Design', 'This course further defines the role of the graphic designer in advertising and photography.  Students are introduced to\r\ninformational and administrative approaches to the development of advertising campaign strategies.  Media and marketing realities are applied.', 44, 22, 22, 3, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=225 ;

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
INSERT INTO `evalscales` VALUES(75, 26, 'Participation', 15, 1);
INSERT INTO `evalscales` VALUES(76, 26, 'In Class Exercises & Homework ', 35, 2);
INSERT INTO `evalscales` VALUES(77, 26, 'Mid-Term Project & Critique', 25, 3);
INSERT INTO `evalscales` VALUES(78, 26, 'Final Project & Critique', 25, 4);
INSERT INTO `evalscales` VALUES(87, 25, 'Participation', 10, 1);
INSERT INTO `evalscales` VALUES(88, 25, 'Assignments and Exercises', 65, 2);
INSERT INTO `evalscales` VALUES(89, 25, 'Final Project', 25, 3);
INSERT INTO `evalscales` VALUES(90, 30, 'Participation', 10, 1);
INSERT INTO `evalscales` VALUES(91, 30, 'In-Class Challenges and Videos', 20, 2);
INSERT INTO `evalscales` VALUES(92, 30, 'Weekly Assignment', 50, 3);
INSERT INTO `evalscales` VALUES(93, 30, 'Final Project', 20, 4);
INSERT INTO `evalscales` VALUES(94, 29, 'Participation; In-Class Assignments & Activities', 70, 1);
INSERT INTO `evalscales` VALUES(95, 29, 'Portfolio Show Attendance', 15, 2);
INSERT INTO `evalscales` VALUES(96, 29, 'Team Project', 15, 3);
INSERT INTO `evalscales` VALUES(97, 31, 'Homework Assignments ', 30, 1);
INSERT INTO `evalscales` VALUES(98, 31, 'Participation (Reading Responses, In-class Assignments, Quizzes/Exams)', 15, 2);
INSERT INTO `evalscales` VALUES(99, 31, 'Midterm Exam', 3, 3);
INSERT INTO `evalscales` VALUES(100, 31, 'Project 1â€”Poster (Midterm Project)', 15, 4);
INSERT INTO `evalscales` VALUES(101, 31, 'Project 2â€”Magazine', 15, 5);
INSERT INTO `evalscales` VALUES(102, 31, 'Project 3â€”Brochure or Catalogue (Final Project)', 10, 6);
INSERT INTO `evalscales` VALUES(103, 31, 'Process Book (Final Project)', 8, 7);
INSERT INTO `evalscales` VALUES(104, 31, 'Final Exam / Self-Reflection', 4, 8);
INSERT INTO `evalscales` VALUES(105, 33, 'Participation; In-Class Assignments & Exercises; Final Exam', 17, 1);
INSERT INTO `evalscales` VALUES(106, 33, 'Homework Assignments (Process work)', 16, 2);
INSERT INTO `evalscales` VALUES(107, 33, 'Project 1â€”Design Philosophy ', 6, 3);
INSERT INTO `evalscales` VALUES(108, 33, 'Magazine Cover (midterm)', 6, 4);
INSERT INTO `evalscales` VALUES(109, 33, 'Project 2â€”Project Concept Phase 1', 45, 5);
INSERT INTO `evalscales` VALUES(110, 33, 'Project 3â€”Project Concept Phase 2 ', 10, 6);
INSERT INTO `evalscales` VALUES(111, 36, 'Attendance and participation', 10, 1);
INSERT INTO `evalscales` VALUES(112, 36, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(113, 36, 'Final project Review', 40, 3);
INSERT INTO `evalscales` VALUES(114, 34, 'Attendance and participation', 10, 1);
INSERT INTO `evalscales` VALUES(115, 34, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(116, 34, 'Mid-term Project', 15, 3);
INSERT INTO `evalscales` VALUES(117, 34, 'Final Project', 25, 4);
INSERT INTO `evalscales` VALUES(118, 35, 'Attendance and participation', 10, 1);
INSERT INTO `evalscales` VALUES(119, 35, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(120, 35, 'Mid-term Project', 15, 3);
INSERT INTO `evalscales` VALUES(121, 35, 'Final Project', 25, 4);
INSERT INTO `evalscales` VALUES(122, 22, 'Attendance and Participation', 10, 1);
INSERT INTO `evalscales` VALUES(123, 22, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(124, 22, 'Mid-Term Project', 15, 3);
INSERT INTO `evalscales` VALUES(125, 22, 'Final Project', 25, 4);
INSERT INTO `evalscales` VALUES(126, 24, 'Attendance and Participation', 10, 1);
INSERT INTO `evalscales` VALUES(127, 24, 'Assignments and Exercises', 50, 2);
INSERT INTO `evalscales` VALUES(128, 24, 'Mid-Term Project', 15, 3);
INSERT INTO `evalscales` VALUES(129, 24, 'Final Project', 25, 4);
INSERT INTO `evalscales` VALUES(130, 37, 'Attendance/Participation', 25, 1);
INSERT INTO `evalscales` VALUES(131, 37, 'Quizzes', 5, 2);
INSERT INTO `evalscales` VALUES(132, 37, 'Standard Assignments', 25, 3);
INSERT INTO `evalscales` VALUES(133, 37, 'Major Assignments', 35, 4);
INSERT INTO `evalscales` VALUES(134, 37, 'Final Exam', 10, 5);
INSERT INTO `evalscales` VALUES(135, 38, 'Attendance/Participation', 25, 1);
INSERT INTO `evalscales` VALUES(136, 38, 'Quizzes', 5, 2);
INSERT INTO `evalscales` VALUES(137, 38, 'Standard Assignments', 25, 3);
INSERT INTO `evalscales` VALUES(138, 38, 'Major Assignments', 35, 4);
INSERT INTO `evalscales` VALUES(139, 38, 'Final Exam', 10, 5);
INSERT INTO `evalscales` VALUES(140, 39, 'Attendance/participation', 30, 1);
INSERT INTO `evalscales` VALUES(141, 39, 'Standard Assignments', 30, 2);
INSERT INTO `evalscales` VALUES(142, 39, 'Major Assignments', 40, 3);
INSERT INTO `evalscales` VALUES(143, 40, 'Class Participation', 12, 1);
INSERT INTO `evalscales` VALUES(144, 40, 'Quizzes', 18, 2);
INSERT INTO `evalscales` VALUES(145, 40, 'Exercises', 35, 3);
INSERT INTO `evalscales` VALUES(146, 40, 'Midterm Assignment', 15, 4);
INSERT INTO `evalscales` VALUES(147, 40, 'Final Assignment', 20, 5);
INSERT INTO `evalscales` VALUES(148, 42, 'Participation/Teamwork', 50, 1);
INSERT INTO `evalscales` VALUES(149, 42, 'Assignments and Exercises', 25, 2);
INSERT INTO `evalscales` VALUES(150, 42, 'Final Presentation', 25, 3);
INSERT INTO `evalscales` VALUES(151, 43, 'Participation/Teamwork', 50, 1);
INSERT INTO `evalscales` VALUES(152, 43, 'Assignments and Exercises', 25, 2);
INSERT INTO `evalscales` VALUES(153, 43, 'Final Presentation', 25, 3);
INSERT INTO `evalscales` VALUES(154, 44, 'Participation', 10, 1);
INSERT INTO `evalscales` VALUES(155, 44, 'Assignments and Exercises', 60, 2);
INSERT INTO `evalscales` VALUES(156, 44, 'Midterm Critique', 10, 3);
INSERT INTO `evalscales` VALUES(157, 44, 'Final Project and Presentation', 20, 4);
INSERT INTO `evalscales` VALUES(158, 45, 'Attendance & Participation', 10, 1);
INSERT INTO `evalscales` VALUES(159, 45, 'In-class Assignments & Exercises', 20, 2);
INSERT INTO `evalscales` VALUES(160, 45, 'Weekly Projects', 30, 3);
INSERT INTO `evalscales` VALUES(161, 45, 'Final Project / Examination', 40, 4);
INSERT INTO `evalscales` VALUES(162, 46, 'Attendance & Participation', 10, 1);
INSERT INTO `evalscales` VALUES(163, 46, 'In-class Assignments & Exercises', 10, 2);
INSERT INTO `evalscales` VALUES(164, 46, 'Team Evaluations', 10, 3);
INSERT INTO `evalscales` VALUES(165, 46, 'Quizzes', 10, 4);
INSERT INTO `evalscales` VALUES(166, 46, 'Weekly Projects', 30, 5);
INSERT INTO `evalscales` VALUES(167, 46, 'Final Project / Examination', 30, 6);
INSERT INTO `evalscales` VALUES(168, 41, 'Class Participation', 10, 1);
INSERT INTO `evalscales` VALUES(169, 41, 'Portfolio Required Promotional Elements', 40, 2);
INSERT INTO `evalscales` VALUES(170, 41, 'Portfolio Display', 50, 3);
INSERT INTO `evalscales` VALUES(171, 48, 'Class Participation', 10, 1);
INSERT INTO `evalscales` VALUES(172, 48, 'Portfolio Required Promotional Elements', 40, 2);
INSERT INTO `evalscales` VALUES(173, 48, 'Portfolio Display', 50, 3);
INSERT INTO `evalscales` VALUES(174, 47, 'Participation: in-class assignments, exercises and attendance', 20, 1);
INSERT INTO `evalscales` VALUES(175, 47, 'Homework Assignments (process/progress)', 30, 2);
INSERT INTO `evalscales` VALUES(176, 47, 'Project 1: Environmental Design Presentation', 5, 3);
INSERT INTO `evalscales` VALUES(177, 47, 'Project 2: Wayfinding Signage System', 15, 4);
INSERT INTO `evalscales` VALUES(178, 47, 'Project 3: Billboard Design/Vehicle Graphics Wraps', 10, 5);
INSERT INTO `evalscales` VALUES(179, 47, 'Project 4: Interpretive and Placemaking Design', 20, 6);
INSERT INTO `evalscales` VALUES(183, 50, 'Class Participation', 10, 1);
INSERT INTO `evalscales` VALUES(184, 50, 'Assignment Concept Development', 30, 2);
INSERT INTO `evalscales` VALUES(185, 50, 'Assignment Creative Development', 30, 3);
INSERT INTO `evalscales` VALUES(186, 50, 'Assignment Craftsmanship', 30, 4);
INSERT INTO `evalscales` VALUES(187, 51, 'Class Participation', 10, 1);
INSERT INTO `evalscales` VALUES(188, 51, 'Core Assignment Research and Documentation', 10, 2);
INSERT INTO `evalscales` VALUES(189, 51, 'Creative Concept Development', 30, 3);
INSERT INTO `evalscales` VALUES(190, 51, 'Creative Design Development', 30, 4);
INSERT INTO `evalscales` VALUES(191, 51, 'Assignment Execution and Presentation', 20, 5);
INSERT INTO `evalscales` VALUES(192, 52, 'Class Participation', 10, 1);
INSERT INTO `evalscales` VALUES(193, 52, 'Assignment Concept Development', 35, 2);
INSERT INTO `evalscales` VALUES(194, 52, 'Assignment Creative Development', 35, 3);
INSERT INTO `evalscales` VALUES(195, 52, 'Exhibit Production Craftsmanship', 20, 4);
INSERT INTO `evalscales` VALUES(196, 53, 'Class Participation', 10, 1);
INSERT INTO `evalscales` VALUES(197, 53, 'Creative Concept Development', 35, 2);
INSERT INTO `evalscales` VALUES(198, 53, 'Creative Design Development', 35, 3);
INSERT INTO `evalscales` VALUES(199, 53, 'Assignment Craftsmanship', 20, 4);
INSERT INTO `evalscales` VALUES(200, 54, 'Attendance and Participation', 10, 1);
INSERT INTO `evalscales` VALUES(201, 54, 'Assignments and Exercises', 40, 2);
INSERT INTO `evalscales` VALUES(202, 54, 'Mid-Term Project/Examination', 10, 3);
INSERT INTO `evalscales` VALUES(203, 54, 'Final Project/Examination', 40, 4);
INSERT INTO `evalscales` VALUES(204, 17, 'Class Participation', 20, 1);
INSERT INTO `evalscales` VALUES(205, 17, 'Assignments and Exercises', 20, 2);
INSERT INTO `evalscales` VALUES(206, 17, 'Mid-Term Project / Examination', 20, 3);
INSERT INTO `evalscales` VALUES(207, 17, 'Final Project / Examination', 40, 4);
INSERT INTO `evalscales` VALUES(208, 55, 'Class Participation', 20, 1);
INSERT INTO `evalscales` VALUES(209, 55, 'Assignments and Exercises', 20, 2);
INSERT INTO `evalscales` VALUES(210, 55, 'Mid-Term Project / Examination', 20, 3);
INSERT INTO `evalscales` VALUES(211, 55, 'Final Project / Examination', 40, 4);
INSERT INTO `evalscales` VALUES(212, 56, 'Class Participation', 20, 1);
INSERT INTO `evalscales` VALUES(213, 56, 'Assignments and Exercises', 20, 2);
INSERT INTO `evalscales` VALUES(214, 56, 'Mid-Term Project / Examination', 20, 3);
INSERT INTO `evalscales` VALUES(215, 56, 'Final Project / Examination', 40, 4);
INSERT INTO `evalscales` VALUES(216, 57, 'Participation', 8, 1);
INSERT INTO `evalscales` VALUES(217, 57, 'Assignments', 32, 2);
INSERT INTO `evalscales` VALUES(218, 57, 'Type Development Project', 60, 3);
INSERT INTO `evalscales` VALUES(219, 58, 'Class Participation ', 20, 1);
INSERT INTO `evalscales` VALUES(220, 58, 'Assignments and Exercises ', 30, 2);
INSERT INTO `evalscales` VALUES(221, 58, 'Mid-Term Project/Examination                       	', 20, 3);
INSERT INTO `evalscales` VALUES(222, 58, 'Final Project/Examination                                 	', 30, 4);
INSERT INTO `evalscales` VALUES(223, 61, 'stuff', 50, 1);
INSERT INTO `evalscales` VALUES(224, 61, 'more stuff', 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gradingpolicies`
--

CREATE TABLE `gradingpolicies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `policy` text NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `term_id` (`term_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

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
INSERT INTO `gradingpolicies` VALUES(104, 0, 23, 1, '<ul>\r\n<li>Late work will not be accepted. Deadlines are very serious in the industry. Each assignment must be received by the set deadline, typically one week after it is introduced. If you don&rsquo;t keep up with the assignments, it will become harder to comprehend later course material.</li>\r\n<li>On-time projects may be redone with instructor approval.</li>\r\n<li>The use of MyAiCampus.com is required for submitting assignments. It is the student&rsquo;s responsibility to report any difficulties with or confusion about the system at the time they occur&mdash;and before the deadline for the assignment. Deadlines for all assignments&mdash;whether turned in during class or via MyAiCampus.com&mdash;are not flexible. Problems with MyAiCampus.com are not a valid excuse for late work.</li>\r\n<li>Work turned into the wrong Dropbox basket for a given assignment will not be graded.</li>\r\n<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>\r\n</ul>', 1);
INSERT INTO `gradingpolicies` VALUES(109, 0, 21, 1, '<ul>\r\n<li>Late work will not be accepted. Deadlines are very serious in the industry. Each assignment must be received by the set deadline, typically one week after it is introduced. If you don&rsquo;t keep up with the assignments, it will become harder to comprehend later course material.</li>\r\n<li>On-time projects may be redone with instructor approval.</li>\r\n<li>The use of MyAiCampus.com is required for submitting assignments. It is the student&rsquo;s responsibility to report any difficulties with or confusion about the system at the time they occur&mdash;and before the deadline for the assignment. Deadlines for all assignments&mdash;whether turned in during class or via MyAiCampus.com&mdash;are not flexible. Problems with MyAiCampus.com are not a valid excuse for late work.</li>\r\n<li>Work turned into the wrong Dropbox basket for a given assignment will not be graded.</li>\r\n<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>\r\n</ul>', 1);
INSERT INTO `gradingpolicies` VALUES(122, 0, 29, 1, 'Pass // No Pass (S=Satisfactory, NS=Not Satisfactory).This class does not assign a grade however, you must complete at least 70% of the total work to satisfactorily pass the class. Students who earn 69% or less will not pass the class and must repeat it. Seventy percent of the final possible points are based on participation, completion of weekly assignments and activities, which can only be earned if you attend class.', 1);
INSERT INTO `gradingpolicies` VALUES(148, 0, 31, 1, '<p>&nbsp;</p>\r\n<p><strong>Email Etiquette:</strong> The industry standard for sending files over email is to send very small files (2 MB or less) or to use an online service for sharing large files (e.g., yousendit.com; box.com; or sharefile.com)&mdash;you upload the file and email the download link to your email recipients. If you need to &ldquo;send&rdquo; a file to the instructor your file must be in PDF format and the total size must not exceed 2 MB. If your file is larger use a file sharing service and send the link OR upload file to myaicampus docsharing (set visibility to instructor only if you wish) let the instructor know where the file is along with the file name.<strong></strong></p>\r\n<p><strong>Use of Images:</strong> In an effort to encourage students&rsquo; image-making skills, images of your own creation are encouraged over stock images. If you absolutely must use a stock image, you must credit the source (e.g., SOURCE: Corbis Images 2011). Under no circumstances are students allowed to use internet images from non-reputable sources.<strong></strong></p>\r\n<p><strong>Late Work:</strong> <strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with instructor <em>prior</em> to the due date. Regardless of circumstances, penalties will be assessed unless student shows valid paperwork justifying absence.<strong></strong></p>\r\n<p><strong>Weekly Homework Assignments: </strong>As indicated above, late homework is NOT accepted and will be given zero points. If during class the student is working on any portion of the homework that is due that day, homework will not be accepted thus losing all possible points. Additionally, student will also lose all participation points. (1) Unless otherwise indicated DIGITAL HOMEWORK must be turned in to the corresponding week&rsquo;s dropbox through myaicampus and is due at the beginning of class on the due date. No digital homework will be accepted over email. Any digital work submitted to an incorrect dropbox, not properly uploaded, or having file corruption will NOT earn any points. After uploading homework, I suggest you test it by downloading and opening all files to make sure they work correctly. Improperly labeled files will lose most points; (2) unless otherwise indicated, HARDCOPY HOMEWORK must be turned in an envelope (9x12 or 10x13) with student&rsquo;s name and class number on the upper right-hand corner, and is due at the end of class.<strong></strong></p>\r\n<p><strong>Final Project Critiques:</strong> If you arrive late to a final project critique within the first 30 minutes of class, your project will lose <strong>half a letter grade</strong>. If you arrive any time after the first 30 minutes, your project will lose <strong>one letter grade</strong>. No final projects will be accepted after the end of the class in which they are due. Out of respect to your fellow design classmates, if you arrive past the first 10 minutes of class you forfeit the right to have your project critiqued by your peers. Unless otherwise indicated, final printed work must be turned in a portfolio tote with your name on the flap (if you can&rsquo;t afford one talk to instructor).<strong></strong></p>\r\n<p><strong>Resubmitting final projects for re-grading&mdash;</strong>On-time projects may be redone to improve grade. Obtain instructor approval.</p>\r\n<p>Absolutely no work will be accepted after the final class meets week 11.<strong></strong></p>\r\n<p><strong>In-class Assignments </strong>Unless you have made prior arrangements with the instructor you cannot make-up missed in-class work. Even though you can&rsquo;t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.<strong></strong></p>\r\n<p><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by &ldquo;Class time will be spent in a productive manner.&rdquo; Points given for participation or in-class work will NOT be available to students who are not present. NOTE: you will lose all participation points for that day if you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment). <strong></strong></p>\r\n<p><strong>Storing class work: </strong>Students are to take proper measures to protect their work (digital or analog) when storing and transporting it.&nbsp; ANALOG WORK: Put class supplies, work in progress, and finished projects in secure places. DIGITAL WORK: When dealing with digital files, save early and save often. Use reliable storage media to transport and backup your files. Backup all files daily (at home or in the lab). The on-campus Student Server is not a secure storage place. Nor are the lab computers, which self-erase on re-start.<strong> </strong>Stolen, damaged, or lost work (including that due to corrupt files or defective hard drives) will NOT be excused. For work requested electronically, please test all files on a Mac before handing them in. Platform incompatibility issues will not be excused either.</p>', 1);
INSERT INTO `gradingpolicies` VALUES(149, 0, 33, 1, '<p><strong>Meaning of Grades</strong></p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="23">\r\n<p>A</p>\r\n<p>A-</p>\r\n</td>\r\n<td valign="top" width="45">\r\n<p>100-93%<br /> 92-90%</p>\r\n</td>\r\n<td width="378">\r\n<p>The student has exceeded the expectations of all criteria. Exceptional accomplishment and outstanding performance&mdash;demonstrated by initiative, high competence and innovative results.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="23">\r\n<p class="HeaderFooter">B+</p>\r\n<p>B&nbsp;&nbsp;</p>\r\n<p>B-</p>\r\n</td>\r\n<td valign="top" width="45">\r\n<p class="HeaderFooter">89-87%</p>\r\n<p>86-83%</p>\r\n<p>82-80%</p>\r\n</td>\r\n<td width="378">\r\n<p>The student has met all objectives competently. Superior and above average performance&mdash;student pursues work with extra effort and success. Work is effective and at times surprising.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="23">\r\n<p>C+<strong></strong></p>\r\n<p>C</p>\r\n<p>C-</p>\r\n</td>\r\n<td valign="top" width="45">\r\n<p>79-77%<strong></strong></p>\r\n<p>76-73%</p>\r\n<p>72-70%</p>\r\n</td>\r\n<td width="378">\r\n<p>The student has met the requirements within their simplest definition. <br /> Average amount of work and adequate performance&mdash;average competence, all required work completed.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="23">\r\n<p>D+</p>\r\n<p>D</p>\r\n</td>\r\n<td valign="top" width="45">\r\n<p>69-67%</p>\r\n<p>66-65%</p>\r\n</td>\r\n<td width="378">\r\n<p>The student has not met all requirements but has adequately met some. <br /> Inferior effort and marginal outcome&mdash;less than required involvement to develop work.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="23">\r\n<p>F</p>\r\n</td>\r\n<td valign="top" width="45">\r\n<p>64% or below</p>\r\n</td>\r\n<td width="378">\r\n<p>The student has not fulfilled most requirements or has done them extremely poorly. <br /> Failure to meaningfully complete or submit required assignments.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>*NOTE: Please note that showing up to class and doing all assignments, without progress, does not constitute a passing grade.<strong> </strong>Grades are available 24/7 through the myaicampus gradebook on the class&rsquo; Website. <strong>It is the student&rsquo;s responsibility to know his/her grade status at all times.&nbsp; </strong></p>\r\n<p><strong>Email Etiquette:</strong> The industry standard for sending files over email is to send very small files (2 MB or less) or to use an online service for sharing large files (e.g., yousendit.com; box.com; or sharefile.com)&mdash;you upload the file and email the download link to your email recipients. If you need to &ldquo;send&rdquo; a file to the instructor your file must be in PDF format and the total size must not exceed 2 MB. If your file is larger use a file sharing service and send the link OR upload file to myaicampus docsharing (set visibility to instructor only if you wish) let the instructor know where the file is along with the file name.<br />Grading will be done on a point system. Points for individual activities will be announced.<br /><strong>Use of Images:</strong> In addition to the plagiarism and cheating policies below, and given that this class is partially meant to help you develop your image-making skills, use of stock images is NOT allowed on final projects. All images must be of your own creation. Any student caught using images not created by student on any final project will automatically fail the course.<br /><strong>Late Work:</strong> <strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with instructor <em>prior</em> to the due date. Regardless of circumstances, penalties will be assessed unless student shows valid paperwork justifying absence.<br /><strong>Weekly Homework Assignments: </strong>As indicated above, late homework is NOT accepted and will be given zero points. If during class the student is working on any portion of the homework that is due that day, homework will not be accepted thus losing all possible points. Additionally, student will also lose all participation points. (1) Unless otherwise indicated DIGITAL HOMEWORK must be turned in to the corresponding week&rsquo;s dropbox through myaicampus and is due at the beginning of class on the due date. No digital homework will be accepted over email. Any digital work submitted to an incorrect dropbox, not properly uploaded, or having file corruption will NOT earn any points. After uploading homework, I suggest you test it by downloading and opening all files to make sure they work correctly. Improperly labeled files will lose most points; (2) unless otherwise indicated, HARDCOPY HOMEWORK must be turned in an envelope (9x12 or 10x13) with student&rsquo;s name and class number on the upper right-hand corner, and is due at the end of class.<br /><strong>Final Project Critiques:</strong> If you arrive late to a final project critique within the first 30 minutes of class, your project will lose <strong>half a letter grade</strong>. If you arrive any time after the first 30 minutes, your project will lose <strong>one letter grade</strong>. No final projects will be accepted after the end of the class in which they are due. Out of respect to your fellow design classmates, if you arrive past the first 10 minutes of class you forfeit the right to have your project critiqued by your peers. Unless otherwise indicated, final printed work must be turned in a portfolio tote with your name on the flap (if you can&rsquo;t afford one talk to instructor).<br /><strong>Resubmitting final projects for re-grading&mdash;</strong>On-time projects may be redone to improve grade. Obtain instructor approval.<br />Absolutely no work will be accepted after the final class meets week 11.<br /><strong>In-class Assignments </strong>Unless you have made prior arrangements with the instructor you cannot make-up missed in-class work. Even though you can&rsquo;t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.<br /><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by &ldquo;Class time will be spent in a productive manner.&rdquo; Points given for participation or in-class work will NOT be available to students who are not present. NOTE: you will lose all participation points for that day if you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment). <strong></strong><br /><strong>Storing class work: </strong>Students are to take proper measures to protect their work (digital or analog) when storing and transporting it.&nbsp; ANALOG WORK: Put class supplies, work in progress, and finished projects in secure places. DIGITAL WORK: When dealing with digital files, save early and save often. Use reliable storage media to transport and backup your files. Backup files daily (at home/in the lab). The on-campus Student Server is not a secure storage place. Nor are the lab computers, which self-erase on re-start.<strong> </strong>Stolen, damaged, or lost work (including that due to corrupt files or defective hard drives) will NOT be excused. For work requested electronically, please test all files on a Mac before handing them in. Platform incompatibility issues will not be excused either.<strong></strong></p>', 1);
INSERT INTO `gradingpolicies` VALUES(150, 0, 36, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(151, 0, 34, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(152, 0, 35, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(153, 0, 22, 1, '<ul>\r\n<li>Late work will not be accepted. Deadlines are very serious in the industry. Each assignment must be received by the set deadline, typically one week after it is introduced. If you don&rsquo;t keep up with the assignments, it will become harder to comprehend later course material.</li>\r\n<li>On-time projects may be redone with instructor approval.</li>\r\n<li>The use of MyAiCampus.com is required for submitting assignments. It is the student&rsquo;s responsibility to report any difficulties with or confusion about the system at the time they occur&mdash;and before the deadline for the assignment. Deadlines for all assignments&mdash;whether turned in during class or via MyAiCampus.com&mdash;are not flexible. Problems with MyAiCampus.com are not a valid excuse for late work.</li>\r\n<li>Work turned into the wrong Dropbox basket for a given assignment will not be graded.</li>\r\n<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>\r\n</ul>', 1);
INSERT INTO `gradingpolicies` VALUES(154, 0, 24, 1, '<ul>\r\n<li>Late work will not be accepted. Deadlines are very serious in the industry. Each assignment must be received by the set deadline, typically one week after it is introduced. If you don&rsquo;t keep up with the assignments, it will become harder to comprehend later course material.</li>\r\n<li>On-time projects may be redone with instructor approval.</li>\r\n<li>The use of MyAiCampus.com is required for submitting assignments. It is the student&rsquo;s responsibility to report any difficulties with or confusion about the system at the time they occur&mdash;and before the deadline for the assignment. Deadlines for all assignments&mdash;whether turned in during class or via MyAiCampus.com&mdash;are not flexible. Problems with MyAiCampus.com are not a valid excuse for late work.</li>\r\n<li>Work turned into the wrong Dropbox basket for a given assignment will not be graded.</li>\r\n<li>ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.</li>\r\n</ul>', 1);
INSERT INTO `gradingpolicies` VALUES(155, 0, 37, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(156, 0, 38, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(157, 0, 39, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(158, 0, 40, 1, '<div class="expectations">\r\n<h2>Instructor&rsquo;s Expectations</h2>\r\n<h3>Professionalism</h3>\r\n<ul>\r\n<li>This is a professional environment. It&rsquo;s not just a class; this is your introduction to a professional working environment. Be respectful of other students. During lectures, do not disrupt others by talking, unless you are involved with the class discussion.</li>\r\n<li>While I encourage discussions, because they are essential to learning, interruptions are counter-productive. If there are repeated disruptions, this will be noted, and participation for the day will be reduced, and can lead to further action.</li>\r\n<li>Do not hold side conversations with an individual or a small group during discussions. If you have something to contribute to the discussion, do so following the proper etiquette in the class. If this has nothing to do with the topic, then wait to have side conversations for break or during lab.</li>\r\n<li>Be prepared for class at the start of class time. Sometimes there will be a short amount of time at the beginning of class to prepare for critiques, but don&rsquo;t expect to come to class and finish an exercise that is due.</li>\r\n<li>If you have problems getting to class, if you&rsquo;re sick, have transportation issues, the cat ate your keys, whatever it is, turn assignments into the portal website. At least you will get credit for the assignment.</li>\r\n<li>Take notes in class, even though I place much of the material online, you should be keeping your own notes to have something to refer to. Quite often discussions in class will cover material not online.</li>\r\n<li>Keep track of due dates, and work in progress reviews.</li>\r\n</ul>\r\n<h3>Assignments, Exercises and turning in files</h3>\r\n<ul>\r\n<li>Most of the assignments, exercises and projects will be turned into the dropbox drive in the lab (unless specifically noted in the requirements).</li>\r\n<li>Each lab has a specific dropbox. Since this is a fairly new system, and can be prone to some issues, you need to check with the instructor before you leave the class and confirm that the assignment or exercise is turned in.</li>\r\n<li>Do not use the student drive to turn in or permanently store your project files; files left on the student drive can be easily deleted by another student (even unintentionally). I cannot retrieve anything that has been deleted off the student drive.</li>\r\n<li>Pay close attention to assignment and exercise formats. The format of images, or movie files are requirements. If it is in a format that I cannot view, I will not be able to grade it.</li>\r\n<li>For all work where a project directory is required, make sure that you turn in the entire project directory, and not just a scene file.</li>\r\n<li>Turn in all your assignments on time, even if it is incomplete. Assignments not turned in on time will receive a score of Zero, but if you turn it in on time, later you can revise the assignment. I will re-grade the work, and if you show progress, the grade will improve. In a professional environment, you will be expected to show progress sometimes every day. Employees who cannot do this tend to be former employees.</li>\r\n<li>In previous quarters I have graded assignments on how well the directions of the assignment are followed, this included the naming convention, properly formatted project directories, and the location of files in the project directory. This will no longer be a graded component of exercises and assignments. However, if the specific directions for formatting are not followed, the assignment or exercise will not be accepted, and will be given a score of zero until the formatting of the project folder is corrected. Each assignment and exercise will have specific requirements listed, which will give the details of for the requirements. Play close attention to this requirement.</li>\r\n</ul>\r\n<h3>Extra Credit and Resubmitted Work</h3>\r\n<ul>\r\n<li>Extra credit assignments may be offered, which will be due during the final week of class. Sometimes these will be projects outside of class, like challenges and competitions.</li>\r\n<li>Any exercise or assignment, except for the final assignment, may be turned in for an improved grade. The deadline to turn in resubmitted work is 2 weeks after the date the grade is posted. The work must show improvement to receive a higher grade. In the case that the quality of the work is not as good as the original (it happens), the original grade will not be changed.</li>\r\n</ul>\r\n<h3>Project files and backups</h3>\r\n<ul>\r\n<li>Save all your work through the quarter. Even if you turn in assignments and exercises, do not delete projects after they are turned in. If you''re running out of space on a portable hard drive, start burning things to DVD. Every time I finish with client work, I back up everything to some other media, sometimes multiple copies. You never know when you may have to go back to it.</li>\r\n<li>Make sure you have multiple backups of all your work. Do not rely on one location for all your files. I''ve lost things from crashed hard drives before. If possible setup automatic backups for important files and projects. I will not accept "my hard drive crashed" as an excuse for not having an assignment or exercise turned in. I will empathize with you, but I cannot grade what I cannot view.</li>\r\n<li>Similarly, even after the end of the quarter, you should backup your work. You might have a situation where files may be needed for work in another class. You have no proof that you did work once files are deleted from your personal drive.</li>\r\n</ul>\r\n<h3>The Portal - myeclassonline.com</h3>\r\n<ul>\r\n<li>Log in to the Portal Website (myeclassonline) during the week, this is part of your homework every week. All the materials, assignments, demonstrations and quizzes are online. If there is a problem with the website, let me know as soon as possible. Do not wait until the day of class to log in to get information, post assignments, or take a quiz, it may be too late.</li>\r\n<li>I realize that I may use this resource more then any other instructor. I do this to assist you. All the due dates will be posted here, and if you use this resource, you can be better prepared for class.</li>\r\n<li>Grades and specific assignment and exercise feedback are posted in the gradebook on the portal. Check this regularly to get an idea of how you''re doing in the class.</li>\r\n</ul>\r\n</div>', 1);
INSERT INTO `gradingpolicies` VALUES(159, 0, 19, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(160, 0, 30, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(161, 0, 42, 1, '<p><strong><em>If you fail to continuously participate as a functional member of your design team, you will not pass the course.</em></strong></p>', 1);
INSERT INTO `gradingpolicies` VALUES(162, 0, 25, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(163, 0, 43, 1, '<p><em><strong>If you fail to continuously participate as a functional member of your design team, you will not pass the course.</strong></em><br /><br /></p>', 1);
INSERT INTO `gradingpolicies` VALUES(164, 0, 44, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(165, 0, 45, 1, '<p>The success of your design and your classmates'' designs has a direct effect on everyone''s grades. Participate in critiques, share ideas and information and you''ll contribute to your everyone''s academic success in the class.</p>', 1);
INSERT INTO `gradingpolicies` VALUES(166, 0, 46, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(167, 0, 41, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(168, 0, 47, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(169, 0, 48, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(170, 0, 50, 1, '<p>Each assignment will be evaluated and graded on a weekly basis.&nbsp; The final quarterly grade will be based on the average of the total assignment grades, plus additional evaluation points.</p>', 1);
INSERT INTO `gradingpolicies` VALUES(171, 0, 51, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(172, 0, 52, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(173, 0, 53, 1, '<ul>\r\n<li>Class time must be spent in a productive manner.</li>\r\n<li>Grading will be done on a point system.</li>\r\n<li>Points for individual activities will be announced.</li>\r\n<li>All work must be received by the scheduled deadlines.<strong> </strong></li>\r\n<li><strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero.&nbsp; Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with me (the instructor) prior to the due date. Regardless of circumstances, penalties will be assessed unless you show me paperwork justifying your absence.</li>\r\n<li>On-time projects may be redone for an improved grade <em>with instructor approval</em>.</li>\r\n<li>No work will be accepted after the final class in week 11.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Homework Assignments:</strong></p>\r\n<p>Please note that all assignments are due on time and are to be completed before class begins. Unless you have made prior arrangements with the instructor, late homework will <strong>NOT</strong> be accepted, and will be given zero points.&nbsp;</p>\r\n<p>&nbsp;<strong>In-class Assignments:</strong></p>\r\n<p><strong></strong>Unless you have made prior arrangements with the instructor you cannot make-up missed in-class work.</p>', 1);
INSERT INTO `gradingpolicies` VALUES(174, 0, 54, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(175, 0, 17, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(176, 0, 55, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(177, 0, 56, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(178, 0, 57, 1, '<p><em>You are expected to participate in classroom discussions. Your interest and participation will affect your grade.</em></p>\r\n<ul>\r\n<li><em>You are expected to participate in classroom discussions. Your interest and participation will affect your grade.</em></li>\r\n<li><em>Lecture slides contain copyrighted material and will not be available for any reason outside of class.</em></li>\r\n<li><em>All work is due at the beginning of class, late work will not be accepted.</em></li>\r\n</ul>\r\n<ul>\r\n<li>All work must be received by the set deadlines. <strong>No Late work&mdash;</strong>Late work or missed work receives a grade of zero. Late work due to extenuating circumstances may be accepted, BUT the student must make arrangements with me (the instructor) prior to the due date. Regardless of circumstances, penalties will be assessed unless you show me paperwork justifying your absence.</li>\r\n<li><strong>Project Critiques</strong>: If you arrive late to a project critique within the first 60 minutes of the critique, your project will lose half a letter grade. If you arrive any time after the first 60 minutes, your project will lose one letter grade. Out of respect to your fellow design classmates, if you arrive past the first 10 minutes of class you forfeit the right to have your project critiqued by your peers.</li>\r\n<li><strong>Homework Assignments </strong>are to be completed before class begins on the due date. Unless you have made prior arrangements with me, late homework will NOT be accepted, and will be given zero points. If during class you are working on any portion of the homework that is due that day, your homework will not be accepted, thus losing all possible points. Additionally, you will also lose all participation points.</li>\r\n<li><strong>In-class Assignments </strong>Unless you have made prior arrangements with me (the instructor) you cannot make-up missed <br /> in-class work. Even though you can&rsquo;t make up lost points, I encourage you to do any work you miss for the sake of your own learning. Please know that I am always available to give you feedback.</li>\r\n<li><strong>Participation </strong>reflects the expectation that each student attends class; is on time; contributes positively to the classroom-learning environment by being attentive, by asking questions, by participating during critiques, and by working on the given assignment. This is what is meant by &ldquo;Class time will be spent in a productive manner.&rdquo; Points given for participation or in-class work will NOT be available to students who are not present. NOTE: If you are working on anything other than what you are supposed to be working on during class (i.e., working on late homework, doing work for another class, reading your email, texting, or browsing the internet when it is not part of an assignment) you will lose all participation points for that day.</li>\r\n</ul>\r\n<ul>\r\n<li>No food allowed in class or lab at any time. Only drinks in re-closeable bottles allowed in classroom.</li>\r\n<li>Edible items brought to class or lab must be thrown out or left outside the computer lab.</li>\r\n<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>\r\n<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>\r\n<li>Attendance is mandatory. There is no way to make up missed sessions, therefore it is recommended that you attend all class sessions.</li>\r\n<li>However, absences do occur. But there is a catch:<strong> </strong>You are still responsible for all materials covered during any class in which you are absent. <strong>The instructor of this course will not inform you of what you&rsquo;ve missed. </strong>It is strongly suggested you team up with other students and follow the Course Outline to keep track of class work.</li>\r\n<li>Lecture/critique/handout materials will not be available from your instructor for any class you have missed.</li>\r\n<li>Break times are scheduled by the instructor at appropriate intervals.</li>\r\n<li>No private software is to be brought to lab or loaded onto school computers.</li>\r\n<li>No software games are allowed in lab for this class.</li>\r\n<li>No use of internet access in class that is not directly related to course curriculum.</li>\r\n<li>Unless directly related to the class, laptops or any electronic device (including headphones) are NOT allowed during lectures, critiques, and group assignments. It is okay to use headphones during any other times<em>.</em></li>\r\n<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.<em></em></li>\r\n<li><em>As a courtesy to all, cell phones must be turned off.</em></li>\r\n<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>\r\n</ul>\r\n<p><em><br /></em></p>', 1);
INSERT INTO `gradingpolicies` VALUES(179, 0, 58, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(180, 0, 18, 1, '', 1);
INSERT INTO `gradingpolicies` VALUES(181, 0, 61, 1, '', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

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
INSERT INTO `prereqs` VALUES(48, 43, 'FS122 Image Manipulation', 1);
INSERT INTO `prereqs` VALUES(49, 44, 'GD1125 Introduction to Photography ', 1);
INSERT INTO `prereqs` VALUES(50, 47, 'MM1123 Fundamentals of Web-based Programming or by Permission of Academic Director', 1);
INSERT INTO `prereqs` VALUES(51, 48, 'GD1132 Grid Systems', 1);
INSERT INTO `prereqs` VALUES(52, 49, 'GD2262 Message Making', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `syll_process`
--

INSERT INTO `syll_process` VALUES(11, 21, 21, 1, 2, '2012-07-03 10:51:19', '');
INSERT INTO `syll_process` VALUES(12, 26, 29, 1, 2, '2012-06-24 13:42:24', 'Looks great Dan, this is a good test of this system. You have much more information on here than I have tested. Let me know if the resulting word doc looks ok.\r\n\r\nI notice some weird spacing. The text areas in the form are "supposed to" remove all evil word formatting, but who knows how well that will really work.\r\n\r\n-Bill');
INSERT INTO `syll_process` VALUES(14, 29, 23, 1, 2, '2012-06-28 11:24:14', 'This one only had one additional grading policy and should be ok. So I can approve it. Yay.');
INSERT INTO `syll_process` VALUES(15, 19, 20, 1, 2, '2012-07-04 07:31:59', 'Ok, that makes sense. I can easily set it to save as well as submit.');
INSERT INTO `syll_process` VALUES(16, 31, 23, 1, 2, '2012-06-30 10:56:52', 'Looks great. I haven''t made the Availability section longer yet, but looks like you made it fit. :-)\r\n\r\nI meant to do it, but have been distracted by 10 other things.\r\n\r\n-Bill');
INSERT INTO `syll_process` VALUES(17, 36, 20, 1, 2, '2012-06-30 08:00:13', 'Looks great!');
INSERT INTO `syll_process` VALUES(18, 34, 20, 1, 2, '2012-06-30 07:58:51', 'Looks great! -Bill');
INSERT INTO `syll_process` VALUES(19, 35, 20, 1, 2, '2012-06-30 19:38:35', 'Ok, week stuff is still formatted funny. Let''s see how Word handles it.');
INSERT INTO `syll_process` VALUES(20, 22, 21, 1, 2, '2012-07-03 07:14:39', '');
INSERT INTO `syll_process` VALUES(21, 24, 21, 1, 2, '2012-07-03 07:12:42', '');
INSERT INTO `syll_process` VALUES(22, 16, 1, 1, 2, '2012-07-09 10:29:47', '');
INSERT INTO `syll_process` VALUES(23, 37, 30, 1, 2, '2012-07-03 12:56:52', 'You should probably send the final to Doug as well, but just put a note that I have looked at it and that it came out of the syllabus generator.\r\n\r\nThanks Scott!\r\n\r\n-Bill');
INSERT INTO `syll_process` VALUES(24, 39, 30, 1, 2, '2012-07-03 12:55:46', 'Looks good. There is some funky formatting on the weekly activities. We will have to see how it comes out in the word file at the end.');
INSERT INTO `syll_process` VALUES(25, 38, 30, 1, 2, '2012-07-03 12:54:45', 'Looks good Scott!');
INSERT INTO `syll_process` VALUES(26, 30, 25, 1, 2, '2012-07-04 19:50:49', 'It does include the phone number and email address that are in your profile page. I think I need to make that more obvious. The note about having students text you could go in the "Availability out side class" field.');
INSERT INTO `syll_process` VALUES(27, 25, 25, 1, 2, '2012-07-04 19:48:20', 'That is fine. You can tweak the reading on the resulting Word file.');
INSERT INTO `syll_process` VALUES(28, 42, 25, 1, 2, '2012-07-04 19:47:11', '');
INSERT INTO `syll_process` VALUES(29, 43, 25, 1, 2, '2012-07-04 19:46:38', 'Looks great Holly');
INSERT INTO `syll_process` VALUES(30, 45, 27, 1, 2, '2012-07-05 10:40:39', 'Excellent!');
INSERT INTO `syll_process` VALUES(31, 46, 27, 1, 2, '2012-07-04 19:43:46', 'Looks great Daniel!');
INSERT INTO `syll_process` VALUES(32, 41, 24, 1, 2, '2012-07-05 13:34:50', 'Looks great Steve!');
INSERT INTO `syll_process` VALUES(33, 40, 22, 16, 2, '2012-07-05 14:35:22', 'Thank you! What did you think of the generator?');
INSERT INTO `syll_process` VALUES(34, 48, 24, 1, 2, '2012-07-05 15:52:08', 'Looks Great Steve!');
INSERT INTO `syll_process` VALUES(35, 50, 24, 1, 2, '2012-07-05 18:37:12', '');
INSERT INTO `syll_process` VALUES(36, 44, 25, 1, 2, '2012-07-05 18:36:56', 'Looks great Holly. By the way, I traded my Honda Element in for a Mini Cooper ;-)');
INSERT INTO `syll_process` VALUES(37, 33, 23, 1, 2, '2012-07-06 09:07:16', '');
INSERT INTO `syll_process` VALUES(38, 51, 24, 1, 2, '2012-07-06 06:55:39', '');
INSERT INTO `syll_process` VALUES(39, 52, 24, 1, 2, '2012-07-06 06:55:12', 'Sounds good Steve. Have you connected with Bridget, the lawyer?');
INSERT INTO `syll_process` VALUES(40, 47, 27, 1, 2, '2012-07-06 09:06:24', 'I like the comment on use of images.');
INSERT INTO `syll_process` VALUES(41, 53, 24, 1, 2, '2012-07-06 13:43:49', 'Looks great! I just spoke to a student who is starting this term and is signed up for this class. It will be fun for you to get them early on, before they get all jaded for a change!');
INSERT INTO `syll_process` VALUES(42, 54, 32, 1, 2, '2012-07-06 13:42:53', 'Thanks!');
INSERT INTO `syll_process` VALUES(43, 17, 18, 1, 2, '2012-07-06 12:50:14', '');
INSERT INTO `syll_process` VALUES(44, 55, 18, 1, 2, '2012-07-06 12:49:46', '');
INSERT INTO `syll_process` VALUES(45, 56, 18, 1, 2, '2012-07-06 12:49:12', 'Thanks Jon, it is coming along. Has a lot of rough edges still.');
INSERT INTO `syll_process` VALUES(46, 57, 28, 1, 2, '2012-07-06 15:40:19', 'Looks great Steve!');
INSERT INTO `syll_process` VALUES(47, 58, 26, 1, 2, '2012-07-06 15:40:42', 'Looks great Kevin!');
INSERT INTO `syll_process` VALUES(48, 18, 15, 1, 2, '2012-07-07 19:56:16', 'Yes, a few people have requested a review feature. I am going to have to work on that.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

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
INSERT INTO `users` VALUES(24, 'Steve', 'Holler', 'sholler', 0x1656287d9e167097, 0, '916-202-3200', 'rholler@aii.edu', 1, 'userphoto24.jpg', 'none listed');
INSERT INTO `users` VALUES(25, 'Holly', 'Agundes', 'hagundes', 0x772f79f998bb153b, 0, '916-230-1362', 'hagundes@aii.edu', 1, '', '');
INSERT INTO `users` VALUES(26, 'Kevin', 'Trivedi', 'ktrivedi', 0xb2b9eb24fe47d62c, 0, '916-521-9687', 'ktrivedi@edmc.edu', 1, 'userphoto26.jpg', 'none listed');
INSERT INTO `users` VALUES(27, 'Daniel', 'Von Nydeggen', 'dvonnydeggen', 0xbe05cb7c0dfe2398ccf882f0, 0, '917-715-5584', 'dvonnydeggen@edmc.edu', 1, 'userphoto27.jpg', 'More things than I can shake a stick at!');
INSERT INTO `users` VALUES(28, 'steve', 'mehallo', 'smehallo', 0xbdfa88396ae7254b, 0, '916-331-9172', 'steve@mehallo.com', 1, 'userphoto28.jpg', 'eat.');
INSERT INTO `users` VALUES(29, 'Dan', 'Hererra', 'dherrera', 0x77e13e1467f1a10d, 0, '916-915-7626', 'dherrera@aii.edu', 1, 'userphoto29.jpg', 'www.danherrerastudio.com');
INSERT INTO `users` VALUES(30, 'Scott', 'Wreyford-Sr', 'swreyford', 0x8040eb43906a0218, 0, '209-406-0727', 'swreyford@edmc.edu', 1, 'userphoto30.jpg', 'none listed');
INSERT INTO `users` VALUES(31, 'Jonathan', 'Weast', 'jweast', 0x185ac6bc6ed2cffb, 0, '916-284-5545', 'jweast@aii.edu', 1, '', 'none listed');
INSERT INTO `users` VALUES(32, 'Jeff', 'Virgen', 'jvirgen', 0x4c80b45f3e4003c3, 0, '209.648.7897', 'jvirgen@virgendesign.com', 1, '', 'none listed');
INSERT INTO `users` VALUES(33, 'Kathy', 'Griley', 'kgriley', 0xdb6d6e9f0b28a7c2, 1, '123-456-7890', 'kgriley@aii.edu', 1, '', '');
