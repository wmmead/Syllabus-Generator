-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 10:27 PM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

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
INSERT INTO `activities` VALUES(45, 10, 1, '<p>We will do some stuff in this class</p>');
INSERT INTO `activities` VALUES(46, 10, 2, '');
INSERT INTO `activities` VALUES(47, 10, 3, '');
INSERT INTO `activities` VALUES(48, 10, 4, '');
INSERT INTO `activities` VALUES(49, 10, 5, '');
INSERT INTO `activities` VALUES(50, 10, 6, '');
INSERT INTO `activities` VALUES(51, 10, 7, '');
INSERT INTO `activities` VALUES(52, 10, 8, '');
INSERT INTO `activities` VALUES(53, 10, 9, '');
INSERT INTO `activities` VALUES(54, 10, 10, '');
INSERT INTO `activities` VALUES(55, 10, 11, '');
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
INSERT INTO `activities` VALUES(67, 12, 1, '');
INSERT INTO `activities` VALUES(68, 12, 2, '');
INSERT INTO `activities` VALUES(69, 12, 3, '');
INSERT INTO `activities` VALUES(70, 12, 4, '');
INSERT INTO `activities` VALUES(71, 12, 5, '');
INSERT INTO `activities` VALUES(72, 12, 6, '');
INSERT INTO `activities` VALUES(73, 12, 7, '');
INSERT INTO `activities` VALUES(74, 12, 8, '');
INSERT INTO `activities` VALUES(75, 12, 9, '');
INSERT INTO `activities` VALUES(76, 12, 10, '');
INSERT INTO `activities` VALUES(77, 12, 11, '');
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
INSERT INTO `activities` VALUES(89, 14, 1, '');
INSERT INTO `activities` VALUES(90, 14, 2, '');
INSERT INTO `activities` VALUES(91, 14, 3, '');
INSERT INTO `activities` VALUES(92, 14, 4, '');
INSERT INTO `activities` VALUES(93, 14, 5, '');
INSERT INTO `activities` VALUES(94, 14, 6, '');
INSERT INTO `activities` VALUES(95, 14, 7, '');
INSERT INTO `activities` VALUES(96, 14, 8, '');
INSERT INTO `activities` VALUES(97, 14, 9, '');
INSERT INTO `activities` VALUES(98, 14, 10, '');
INSERT INTO `activities` VALUES(99, 14, 11, '');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` VALUES(16, 11, 'I love cheese', 'My Author', 'some publisher', 'date', '1234', 'http://amazon.com', 1, 1);
INSERT INTO `books` VALUES(17, 11, 'This is required', 'the required author', 'pub', 'date', '5432', '', 1, 2);
INSERT INTO `books` VALUES(18, 9, 'some title', 'blah', 'blah', '2012', '1234', '', 1, 1);
INSERT INTO `books` VALUES(19, 12, 'sdfd', 'sdfsds', 'fsdfs', 'sfsd', '1234', '', 1, 1);
INSERT INTO `books` VALUES(20, 13, 'Some book title', 'the author', 'the publisher', '2012', '1234', '', 2, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` VALUES(9, 5, 1, 11, 0, 0);
INSERT INTO `classes` VALUES(10, 10, 1, 11, 1, 0);
INSERT INTO `classes` VALUES(11, 1, 1, 13, 0, 2);
INSERT INTO `classes` VALUES(12, 5, 1, 13, 0, 0);
INSERT INTO `classes` VALUES(13, 10, 1, 14, 0, 0);
INSERT INTO `classes` VALUES(14, 1, 1, 15, 0, 0);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `class_days_times`
--

INSERT INTO `class_days_times` VALUES(1, 9, 'Monday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(2, 10, 'Tuesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(3, 10, 'Wednesday', '8:00 am', '12:00 pm', 2);
INSERT INTO `class_days_times` VALUES(4, 11, 'Tuesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(5, 12, 'Tuesday', '8:00 am', '12:00 pm', 1);
INSERT INTO `class_days_times` VALUES(6, 13, 'Monday', '1:00 pm', '5:00 pm', 1);
INSERT INTO `class_days_times` VALUES(7, 14, 'Monday', '1:00 pm', '5:00 pm', 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` VALUES(1, 10, '<p>We have lots of important materials</p>', '<p>We teach u <span style="text-decoration: underline;"><em><strong>real</strong></em></span> good.</p>', '<p>We are gonna use computers and stuff.</p>', '4 hours per week', 'I am available pretty much all the time', '<p>You must be a good student.</p>', '<p>Lets focus on making some cool stuff.</p>');
INSERT INTO `class_details` VALUES(2, 9, '<p>lots of materials</p>', '<p>We teach <strong><span style="text-decoration: underline;"><em>good</em></span></strong> shit</p>', '<p>computers and stuff</p>', '4 hours per week', 'sometimes whenever', '', '');
INSERT INTO `class_details` VALUES(3, 11, '<p>big cheese</p>', '<p>more cheese</p>', '<p>Lots of cheese</p>', '4 hours per week', 'all the freaking time', '<p>Here are some additional requirements for the course. Just in case there were not enough before I added these.</p>', '<p>The focus of this course is on interface design elements and design patterns commonly found in web interfaces</p>');
INSERT INTO `class_details` VALUES(4, 12, '<p>none</p>', '<p>sdfsdfsdsd</p>', '<p>fsdsdfsdf</p>', '4 hourse', 'whenever', '', '');
INSERT INTO `class_details` VALUES(5, 13, '<p>USB Drive, notebook and your brain</p>', '<p>In class lectures and lab time.</p>', '<p>Computers, Internet, and Adobe Creative Suite</p>', '4 hours per week', 'One hour before class on Mondays', '', '');
INSERT INTO `class_details` VALUES(6, 14, '<p>There are lots of materials required for this class.</p>', '<p>In class demonstrations, as well as research and development work.</p>', '<p>Computers and Adobe Creative Suite</p>', '4 hours per week', 'After class on mondays and by appointment', '', '');

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
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- Dumping data for table `competencies`
--

INSERT INTO `competencies` VALUES(78, 10, 0, 'Understand the differences between client-side, server-side, and server-parsed languages ', 0, 1);
INSERT INTO `competencies` VALUES(79, 10, 0, 'Understand the basics of server, as opposed to workstation design and software', 0, 2);
INSERT INTO `competencies` VALUES(80, 10, 0, 'Understand common web server software (e.g., Apache, IIS) configuration the differences between client-side, server-side, and server-parsed languages ', 0, 3);
INSERT INTO `competencies` VALUES(81, 10, 0, 'Understand how CGI (Common Gateway Interface) links web forms to back-end programs', 0, 4);
INSERT INTO `competencies` VALUES(82, 10, 0, 'Apply basic Perl to create a functional CGI script ', 0, 5);
INSERT INTO `competencies` VALUES(83, 10, 0, 'Understand how server-parsed languages allow access to server variables and resources', 0, 6);
INSERT INTO `competencies` VALUES(84, 10, 0, 'Apply basic PHP to create a functional server-parsed program', 0, 7);
INSERT INTO `competencies` VALUES(85, 10, 0, 'Understand the basics of web-database links', 0, 8);
INSERT INTO `competencies` VALUES(86, 10, 0, 'Understand the use of CGI and PHP in e-commerce systems', 0, 9);
INSERT INTO `competencies` VALUES(91, 1, 0, 'Combine principles of design and interactivity to develop user-centered interface concepts.', 0, 1);
INSERT INTO `competencies` VALUES(92, 1, 0, 'Use digital type as an expressive and informational tool of communication. ', 0, 2);
INSERT INTO `competencies` VALUES(93, 1, 0, 'Use color as an expressive and informational tool of communication.', 0, 3);
INSERT INTO `competencies` VALUES(94, 1, 0, 'Understand the role of timing in an interactive experience.', 0, 4);
INSERT INTO `competencies` VALUES(95, 1, 0, 'Understand and apply principles of grid structures to layout navigational systems.', 0, 5);
INSERT INTO `competencies` VALUES(107, 11, 0, 'a competency', 0, 1);
INSERT INTO `competencies` VALUES(108, 11, 0, 'another competency', 0, 2);
INSERT INTO `competencies` VALUES(109, 11, 0, 'more cheese', 0, 3);
INSERT INTO `competencies` VALUES(110, 11, 0, 'big llamas', 0, 4);
INSERT INTO `competencies` VALUES(136, 0, 9, 'Demonstrate the ability to make good stuff', 1, 1);
INSERT INTO `competencies` VALUES(137, 0, 9, 'and one more for good luck', 1, 2);
INSERT INTO `competencies` VALUES(138, 0, 9, 'Be excellent at stuff', 1, 3);
INSERT INTO `competencies` VALUES(139, 5, 0, 'Understand and identify a variety of methods of computer-based training (CBT).', 0, 1);
INSERT INTO `competencies` VALUES(140, 5, 0, 'Analyze audience and instructional needs for effective CBT design.', 0, 2);
INSERT INTO `competencies` VALUES(141, 5, 0, 'Apply the basic principles of instructional design to the organization of content.', 0, 3);
INSERT INTO `competencies` VALUES(142, 5, 0, 'Develop a concept for an instructional project.', 0, 4);
INSERT INTO `competencies` VALUES(143, 5, 0, 'Support instructional needs effectively with multimedia elements including sound, video, and animation.', 0, 5);
INSERT INTO `competencies` VALUES(144, 5, 0, 'Design and produce an interactive instructional project.', 0, 6);
INSERT INTO `competencies` VALUES(145, 0, 11, 'Students must learn how to do xyx', 1, 1);
INSERT INTO `competencies` VALUES(146, 0, 11, 'Also, students must learn how to do ABC', 1, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` VALUES(1, 'MM2201', 'Interface Design', 'This course is an exploration of the synthesis of visual design and principles of human interactivity. This course examines the conceptual and practical design of interfaces.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(5, 'MM3312', 'Computer-based Traning', 'This course provides an exploration of authoring techniques for interactive training and education. Students gain experience in the process of design, development, and evaluation of effective computer-based training systems.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(7, 'MM4403', 'Senior Project Development', 'Students conduct project-based research of advanced topic in multimedia design.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(10, 'MM3323', 'Advanced Web Based Programming', 'This course is an exploration of scripting and programming languages used to develop advanced "server-side" Web applications. Students learn how to create programs capable of storing and retrieving data from servers supporting advanced interactivity.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(11, 'MM1123', 'Fundamentals Of Web Programming', 'Here is a better description for the course', 44, 22, 22, 3, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` VALUES(36, 13, '2011-11-24', 'Thursday', 'Thanksgiving', 1);
INSERT INTO `dates` VALUES(37, 13, '2011-11-25', 'Friday', 'Thanksgiving', 2);
INSERT INTO `dates` VALUES(38, 12, '2011-08-03', 'Wednesday', 'Crazy Pointless Holiday', 1);
INSERT INTO `dates` VALUES(39, 11, '2011-05-30', 'Monday', 'Memorial Day', 1);
INSERT INTO `dates` VALUES(40, 11, '2011-06-08', 'Wednesday', 'Random weird holiday', 2);
INSERT INTO `dates` VALUES(47, 14, '2012-01-16', 'Monday', 'MKL Day', 1);
INSERT INTO `dates` VALUES(48, 14, '2012-02-24', 'Friday', 'Presidents Day', 2);
INSERT INTO `dates` VALUES(49, 15, '2012-04-06', 'Friday', 'Good Friday', 1);
INSERT INTO `dates` VALUES(50, 15, '2012-05-28', 'Monday', 'Memorial Day', 2);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `evalscales`
--

INSERT INTO `evalscales` VALUES(18, 9, 'Homework', 20, 1);
INSERT INTO `evalscales` VALUES(19, 9, 'Classwork', 30, 2);
INSERT INTO `evalscales` VALUES(20, 9, 'other stuff', 50, 3);
INSERT INTO `evalscales` VALUES(21, 10, 'Stuff', 100, 1);
INSERT INTO `evalscales` VALUES(28, 11, 'something', 80, 1);
INSERT INTO `evalscales` VALUES(29, 11, 'else', 10, 2);
INSERT INTO `evalscales` VALUES(30, 11, 'Here is a really long description of stuff you might do in class', 10, 3);
INSERT INTO `evalscales` VALUES(32, 12, 'tests', 20, 1);
INSERT INTO `evalscales` VALUES(33, 12, 'quizes', 30, 2);
INSERT INTO `evalscales` VALUES(34, 12, 'homework', 50, 3);
INSERT INTO `evalscales` VALUES(35, 13, 'Tests and Quizes', 20, 1);
INSERT INTO `evalscales` VALUES(36, 13, 'Homework', 30, 2);
INSERT INTO `evalscales` VALUES(37, 13, 'In Class Assignments', 30, 3);
INSERT INTO `evalscales` VALUES(38, 13, 'Final Project', 20, 4);
INSERT INTO `evalscales` VALUES(39, 14, 'In class work', 20, 1);
INSERT INTO `evalscales` VALUES(40, 14, 'Quizes', 15, 2);
INSERT INTO `evalscales` VALUES(41, 14, 'Homework', 30, 3);
INSERT INTO `evalscales` VALUES(42, 14, 'Mid-Term Project', 15, 4);
INSERT INTO `evalscales` VALUES(43, 14, 'Final Project', 20, 5);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `gradingpolicies`
--

INSERT INTO `gradingpolicies` VALUES(36, 12, NULL, 0, 'Class time will be spent in a productive manner.', 1);
INSERT INTO `gradingpolicies` VALUES(37, 12, NULL, 0, 'Grading will be done on a point system.', 2);
INSERT INTO `gradingpolicies` VALUES(38, 12, NULL, 0, 'Points for individual activities will be announced.', 3);
INSERT INTO `gradingpolicies` VALUES(39, 12, NULL, 0, 'All work must be received by the set deadlines.', 4);
INSERT INTO `gradingpolicies` VALUES(40, 12, NULL, 0, 'Late work receives a grade of zero.', 5);
INSERT INTO `gradingpolicies` VALUES(41, 12, NULL, 0, 'On-time projects may be redone with instructor approval.', 6);
INSERT INTO `gradingpolicies` VALUES(42, 12, NULL, 0, 'ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.', 7);
INSERT INTO `gradingpolicies` VALUES(58, 13, NULL, 0, 'Class time will be spent in a productive manner.', 1);
INSERT INTO `gradingpolicies` VALUES(59, 13, NULL, 0, 'Grading will be done on a point system.', 2);
INSERT INTO `gradingpolicies` VALUES(60, 13, NULL, 0, 'Points for individual activities will be announced.', 3);
INSERT INTO `gradingpolicies` VALUES(61, 13, NULL, 0, 'All work must be received by the set deadlines.', 4);
INSERT INTO `gradingpolicies` VALUES(62, 13, NULL, 0, 'Late work receives a grade of zero.', 5);
INSERT INTO `gradingpolicies` VALUES(63, 13, NULL, 0, 'On-time projects may be redone with instructor approval.', 6);
INSERT INTO `gradingpolicies` VALUES(64, 13, NULL, 0, 'ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.', 7);
INSERT INTO `gradingpolicies` VALUES(67, 11, NULL, 0, 'cheese!', 1);
INSERT INTO `gradingpolicies` VALUES(76, 0, 9, 1, 'You must do really good work in this class', 1);
INSERT INTO `gradingpolicies` VALUES(77, 0, 9, 1, 'make this class great', 2);
INSERT INTO `gradingpolicies` VALUES(78, 14, NULL, 0, 'Class time will be spent in a productive manner.', 1);
INSERT INTO `gradingpolicies` VALUES(79, 14, NULL, 0, 'Grading will be done on a point system.', 2);
INSERT INTO `gradingpolicies` VALUES(80, 14, NULL, 0, 'Points for individual activities will be announced.', 3);
INSERT INTO `gradingpolicies` VALUES(81, 14, NULL, 0, 'All work must be received by the set deadlines.', 4);
INSERT INTO `gradingpolicies` VALUES(82, 14, NULL, 0, 'Late work receives a grade of zero.', 5);
INSERT INTO `gradingpolicies` VALUES(83, 14, NULL, 0, 'On-time projects may be redone with instructor approval.', 6);
INSERT INTO `gradingpolicies` VALUES(84, 14, NULL, 0, 'ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.', 7);
INSERT INTO `gradingpolicies` VALUES(85, 0, 11, 1, 'Students will also be graded on how well they can do XYZ', 1);
INSERT INTO `gradingpolicies` VALUES(86, 0, 11, 1, 'Students must also show they can do this and that too.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prereqs`
--

CREATE TABLE `prereqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `prereq` varchar(200) NOT NULL,
  `ordr` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` VALUES(6, 10, 'MM2233 Intermediate Web-based Programming', 1);
INSERT INTO `prereqs` VALUES(8, 1, 'Permission of Academic Director/Advisor ', 1);
INSERT INTO `prereqs` VALUES(13, 11, 'none', 1);
INSERT INTO `prereqs` VALUES(14, 5, 'MM3311 Interaction Design for Entertainment', 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` VALUES(2, 11, 'sdfsdfsdfs', '<p>sdfsdfs</p>', 1);
INSERT INTO `sections` VALUES(3, 11, 'section 2', '<p>some stuff for section 2</p>', 2);
INSERT INTO `sections` VALUES(4, 12, 'sdfsdfsdfs', '<p>sdfsdfs</p>', 1);
INSERT INTO `sections` VALUES(5, 12, 'section 2', '<p>some stuff for section 2</p>', 2);
INSERT INTO `sections` VALUES(14, 13, 'Quarter Credit Hour Definition:', '<p>A quarter credit hour is an amount of work represented in intended learning outcomes and verified by evidence of student achievement that is an institutionally established equivalency that reasonably approximates not less than:</p>\r\n<p>(1) One hour of classroom or direct faculty instruction and a minimum of two hours of out-of-class student work each week for 10-12 weeks, or the equivalent amount of work over a different amount of time; or</p>\r\n<p>(2) At least an equivalent amount of work as required in paragraph (1) of this definition for other academic activities as established by the institution including laboratory work, internships, practica, studio work, and other academic work leading to the award of credit hours.</p>', 1);
INSERT INTO `sections` VALUES(15, 13, 'Classroom Policy:', '<ul>\r\n<li>No food allowed in class or lab at any time. Drinks in recloseable bottles allowed in classroom.</li>\r\n<li>Edible items brought to class or lab must be thrown out.</li>\r\n<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>\r\n<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>\r\n<li>Break times are scheduled by the instructor at appropriate intervals.</li>\r\n<li>No private software is to be brought to lab or loaded onto school computers.</li>\r\n<li>No software games are allowed in lab (unless in course curriculum).</li>\r\n<li>Headphones are required if listening to music during lab. No headphones are allowed in lecture.</li>\r\n<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.</li>\r\n<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>\r\n</ul>', 2);
INSERT INTO `sections` VALUES(16, 13, 'School-wide Attendance Policy:', '<p>Students who do not attend any classes for fourteen (14) consecutive calendar days and fail to notify the Academic Affairs Department will be withdrawn from school.&nbsp; In addition, the student may be involuntarily withdrawn at the discretion of the Academic Director, and with the approval of the Dean of Academic Affairs, at any time.</p>', 3);
INSERT INTO `sections` VALUES(17, 13, 'Withdraw from a Course:', '<p>In order to withdraw from a course (that is, receive a grade of &ldquo;W&rdquo;), a student must meet with his or her Academic Director before noon on the Friday of week 9.</p>', 4);
INSERT INTO `sections` VALUES(18, 13, 'Academic Dishonesty:', '<p>Students are expected to maintain the highest standards of academic honesty while pursuing their studies at The Art Institutes. Academic dishonesty includes but is not limited to: plagiarism and cheating; misuse of academic resources or facilities; and misuse of computer software, data, equipment or networks.</p>\r\n<p>Plagiarism is the use (copying) of another person&rsquo;s ideas, words, visual images or audio samples, presented in a manner that makes the work appear to be the student&rsquo;s original creation. All work that is not the student&rsquo;s original creation, or any idea or fact that is not &ldquo;common knowledge,&rdquo; must be documented to avoid even accidental infractions of the conduct code.</p>\r\n<p>Cheating is to gain unfair advantage on a grade by deception, fraud, or breaking the rules set forth by the instructor of the class. Cheating may include but is not limited to: copying the work of others; using notes or other materials when unauthorized; communicating to others during an exam; and any other unfair advantage as determined by the instructor.</p>\r\n<p>Students accused of academic dishonesty will be brought before a Student Conduct Committee. If the committee determines that there has been a violation of the Academic Dishonesty policy, the student will automatically fail the class and, depending on the severity of the infraction, may face further disciplinary action up to and including suspension from classes or expulsion from school.</p>', 5);
INSERT INTO `sections` VALUES(19, 13, 'Disability Policy Statement:', '<p>It is our policy not to discriminate against qualified students with documented disabilities in our educational programs, activities, or services. If you have a disability-related need for adjustments or other accommodations in this class see Steven Franklin, Director of Student Affairs located on the 2<sup>nd</sup> &nbsp;floor or e-mail him at sfranklin@aii.edu. You must inform your instructors and the Academic Affairs Office before the end of week one of classes and preferably before the class start.</p>', 6);
INSERT INTO `sections` VALUES(20, 13, 'Student Assistance Program:', '<p>The college provides confidential short-term counseling, crisis intervention, and community referral services through the AllOne Health Student Assistance Program (SAP) for a wide range of concerns, including relationship issues, family problems, loneliness, depression, and alcohol or drug abuse. Services are available 24 hours a day, 7 days a week, at 1.888-617-3362. The Student Affairs office also offers programs on mental health-related topics each quarter. If you have any questions regarding counseling services, please contact the Student Affairs office.</p>', 7);
INSERT INTO `sections` VALUES(21, 13, 'Library Operation Hours:', '<p>The library is open from 8 AM to 8 PM Monday &ndash; Thursday, 8 AM to 5 PM on Friday and 9 AM to 2 PM on Saturday. The library is closed on Sunday.&nbsp; Computers are available during these hours for students to work on classroom projects.</p>', 8);
INSERT INTO `sections` VALUES(22, 14, 'Quarter Credit Hour Definition:', '<p>A quarter credit hour is an amount of work represented in intended learning outcomes and verified by evidence of student achievement that is an institutionally established equivalency that reasonably approximates not less than:</p>\r\n<p>(1) One hour of classroom or direct faculty instruction and a minimum of two hours of out-of-class student work each week for 10-12 weeks, or the equivalent amount of work over a different amount of time; or</p>\r\n<p>(2) At least an equivalent amount of work as required in paragraph (1) of this definition for other academic activities as established by the institution including laboratory work, internships, practica, studio work, and other academic work leading to the award of credit hours.</p>', 1);
INSERT INTO `sections` VALUES(23, 14, 'Classroom Policy:', '<ul>\r\n<li>No food allowed in class or lab at any time. Drinks in recloseable bottles allowed in classroom.</li>\r\n<li>Edible items brought to class or lab must be thrown out.</li>\r\n<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>\r\n<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>\r\n<li>Break times are scheduled by the instructor at appropriate intervals.</li>\r\n<li>No private software is to be brought to lab or loaded onto school computers.</li>\r\n<li>No software games are allowed in lab (unless in course curriculum).</li>\r\n<li>Headphones are required if listening to music during lab. No headphones are allowed in lecture.</li>\r\n<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.</li>\r\n<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>\r\n</ul>', 2);
INSERT INTO `sections` VALUES(24, 14, 'School-wide Attendance Policy:', '<p>Students who do not attend any classes for fourteen (14) consecutive calendar days and fail to notify the Academic Affairs Department will be withdrawn from school.&nbsp; In addition, the student may be involuntarily withdrawn at the discretion of the Academic Director, and with the approval of the Dean of Academic Affairs, at any time.</p>', 3);
INSERT INTO `sections` VALUES(25, 14, 'Withdraw from a Course:', '<p>In order to withdraw from a course (that is, receive a grade of &ldquo;W&rdquo;), a student must meet with his or her Academic Director before noon on the Friday of week 9.</p>', 4);
INSERT INTO `sections` VALUES(26, 14, 'Academic Dishonesty:', '<p>Students are expected to maintain the highest standards of academic honesty while pursuing their studies at The Art Institutes. Academic dishonesty includes but is not limited to: plagiarism and cheating; misuse of academic resources or facilities; and misuse of computer software, data, equipment or networks.</p>\r\n<p>Plagiarism is the use (copying) of another person&rsquo;s ideas, words, visual images or audio samples, presented in a manner that makes the work appear to be the student&rsquo;s original creation. All work that is not the student&rsquo;s original creation, or any idea or fact that is not &ldquo;common knowledge,&rdquo; must be documented to avoid even accidental infractions of the conduct code.</p>\r\n<p>Cheating is to gain unfair advantage on a grade by deception, fraud, or breaking the rules set forth by the instructor of the class. Cheating may include but is not limited to: copying the work of others; using notes or other materials when unauthorized; communicating to others during an exam; and any other unfair advantage as determined by the instructor.</p>\r\n<p>Students accused of academic dishonesty will be brought before a Student Conduct Committee. If the committee determines that there has been a violation of the Academic Dishonesty policy, the student will automatically fail the class and, depending on the severity of the infraction, may face further disciplinary action up to and including suspension from classes or expulsion from school.</p>', 5);
INSERT INTO `sections` VALUES(27, 14, 'Disability Policy Statement:', '<p>It is our policy not to discriminate against qualified students with documented disabilities in our educational programs, activities, or services. If you have a disability-related need for adjustments or other accommodations in this class see Steven Franklin, Director of Student Affairs located on the 2<sup>nd</sup> &nbsp;floor or e-mail him at sfranklin@aii.edu. You must inform your instructors and the Academic Affairs Office before the end of week one of classes and preferably before the class start.</p>', 6);
INSERT INTO `sections` VALUES(28, 14, 'Student Assistance Program:', '<p>The college provides confidential short-term counseling, crisis intervention, and community referral services through the AllOne Health Student Assistance Program (SAP) for a wide range of concerns, including relationship issues, family problems, loneliness, depression, and alcohol or drug abuse. Services are available 24 hours a day, 7 days a week, at 1.888-617-3362. The Student Affairs office also offers programs on mental health-related topics each quarter. If you have any questions regarding counseling services, please contact the Student Affairs office.</p>', 7);
INSERT INTO `sections` VALUES(29, 14, 'Library Operation Hours:', '<p>The library is open from 8 AM to 8 PM Monday &ndash; Thursday, 8 AM to 5 PM on Friday and 9 AM to 2 PM on Saturday. The library is closed on Sunday.&nbsp; Computers are available during these hours for students to work on classroom projects.</p>', 8);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `syll_process`
--

INSERT INTO `syll_process` VALUES(3, 11, 1, 6, 2, '2012-06-10 22:10:42', 'That is great');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` VALUES(10, 1, 2011, '2011-01-10', '2011-03-23', 1);
INSERT INTO `terms` VALUES(11, 2, 2011, '2011-04-04', '2011-06-17', 1);
INSERT INTO `terms` VALUES(12, 3, 2011, '2011-07-11', '2011-09-24', 1);
INSERT INTO `terms` VALUES(13, 4, 2011, '2011-10-03', '2011-12-16', 1);
INSERT INTO `terms` VALUES(14, 1, 2012, '2012-01-09', '2012-03-24', 1);
INSERT INTO `terms` VALUES(15, 2, 2012, '2012-04-02', '2012-06-16', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'William', 'Mead', 'wmmead', 0xb99f24961740, 0, '530-219-8998', 'wmead@aii.edu', 1, 'userphoto1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor consequat augue, id ullamcorper est cursus sagittis. Praesent vel nibh sit amet arcu euismod euismod. In porta rhoncus sem, nec elementum lacus suscipit id. Praesent molestie adipiscing magna, a tempus sem semper a. Cras nibh ante, mattis a iaculis a, vehicula et nisi. In tincidunt ullamcorper pulvinar. Vivamus ut tristique ipsum. Morbi diam urna, lacinia et sollicitudin feugiat, condimentum ac urna. Duis aliquet adipiscing sem quis sagittis. Morbi sed dolor elit.');
INSERT INTO `users` VALUES(3, 'Joey', 'Schmo', 'jschmo', 0xb99f24961740, 2, '123-456-6789', 'Bill@meaddesign.net', 1, 'userphoto3.jpg', 'Hi, I am the main administrator on this system!');
INSERT INTO `users` VALUES(4, 'Sandy', 'Green', 'sgreen', 0xb99f24961740, 0, '213-098-9876', 'sgreen@gmail.com', 1, 'userphoto4.jpg', 'none listed');
INSERT INTO `users` VALUES(5, 'Bob', 'Smith', 'bsmith', 0xb99f24961740, 1, '432-345-5431', 'bill@meaddesign.net', 1, '', 'none listed');
INSERT INTO `users` VALUES(6, 'John', 'Dingleberry', 'jdingle', 0xb99f24961740, 1, '121-212-1122', 'mead@greasyfur.com', 1, '', '');
INSERT INTO `users` VALUES(7, 'Phat', 'Monster', 'monster', 0xb99f24961740, 0, '222-333-4444', 'monster@somewhere.com', 1, 'userphoto7.jpg', 'none listed');
INSERT INTO `users` VALUES(8, 'Mary', 'Johnson', 'mjohnson', 0xb99f24961740, 1, '340-549-2233', 'wmmead@mac.com', 1, '', '');
