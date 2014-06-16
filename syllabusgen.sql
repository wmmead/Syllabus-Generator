-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2014 at 06:05 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `exec_sum` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `term_id` (`term_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `sectnum` varchar(10) DEFAULT NULL,
  `materials` text NOT NULL,
  `methods` text NOT NULL,
  `tech` text NOT NULL,
  `hwhrs` varchar(512) NOT NULL,
  `officehrs` varchar(512) DEFAULT NULL,
  `add_req` text NOT NULL,
  `focus` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=172 ;

--
-- Dumping data for table `competencies`
--

INSERT INTO `competencies` (`id`, `course_id`, `class_id`, `competency`, `type`, `level`, `ordr`) VALUES
(139, 5, 0, 'Understand and identify a variety of methods of computer-based training (CBT).', 0, 0, 1),
(140, 5, 0, 'Analyze audience and instructional needs for effective CBT design.', 0, 0, 2),
(141, 5, 0, 'Apply the basic principles of instructional design to the organization of content.', 0, 0, 3),
(142, 5, 0, 'Develop a concept for an instructional project.', 0, 0, 4),
(143, 5, 0, 'Support instructional needs effectively with multimedia elements including sound, video, and animation.', 0, 0, 5),
(144, 5, 0, 'Design and produce an interactive instructional project.', 0, 0, 6),
(167, 1, 0, 'Combine principles of design and interactivity to develop user-centered interface concepts.', 0, 0, 1),
(168, 1, 0, 'Use digital type as an expressive and informational tool of communication. ', 0, 0, 2),
(169, 1, 0, 'Use color as an expressive and informational tool of communication.', 0, 0, 3),
(170, 1, 0, 'Understand the role of timing in an interactive experience.', 0, 0, 4),
(171, 1, 0, 'Understand and apply principles of grid structures to layout navigational systems.', 0, 0, 5);

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
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `coursenum`, `name`, `description`, `totalhrs`, `lecthrs`, `labhrs`, `credit`, `dept`, `active`) VALUES
(1, 'MM2201', 'Interface Design', 'This course is an exploration of the synthesis of visual design and principles of human interactivity. This course examines the conceptual and practical design of interfaces.', 44, 22, 22, 3, 1, 1),
(5, 'MM3312', 'Computer-based Traning', 'This course provides an exploration of authoring techniques for interactive training and education. Students gain experience in the process of design, development, and evaluation of effective computer-based training systems.', 44, 22, 22, 3, 1, 1);

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

INSERT INTO `dates` (`id`, `term_id`, `date`, `day`, `name`, `ordr`) VALUES
(52, 16, '2012-09-03', 'Monday', 'Labor Day', 2);

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

INSERT INTO `depts` (`id`, `name`, `abbrv`) VALUES
(1, 'Web Design and Interactive Media', 'WDIM'),
(2, 'Digital Film and Video Production', 'DFVP'),
(3, 'Graphic Design', 'GD'),
(4, 'Interior Design', 'ID'),
(5, 'Culinary', 'Cul'),
(6, 'Media Arts and Animation', 'MAA'),
(7, 'Game Art and Design', 'GAD'),
(8, 'Fashion Retailing', 'FR'),
(9, 'Foundation Studies', 'FS'),
(10, 'General Education', 'GE');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exec_sum`
--

CREATE TABLE `exec_sum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `priv_pub` tinyint(1) NOT NULL,
  `summary_txt` text NOT NULL,
  `strengths_txt` text NOT NULL,
  `challenges_txt` text NOT NULL,
  `grades_txt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `gradingpolicies`
--

INSERT INTO `gradingpolicies` (`id`, `term_id`, `class_id`, `type`, `policy`, `ordr`) VALUES
(96, 16, NULL, 0, 'Class time will be spent in a productive manner.', 1),
(97, 16, NULL, 0, 'Grading will be done on a point system.', 2),
(98, 16, NULL, 0, 'Points for individual activities will be announced.', 3),
(99, 16, NULL, 0, 'All work must be received by the set deadlines.', 4),
(100, 16, NULL, 0, 'Late work receives a grade of zero.', 5),
(101, 16, NULL, 0, 'On-time projects may be redone with instructor approval.', 6),
(102, 16, NULL, 0, 'ABSOLUTELY NO WORK WILL BE ACCEPTED AFTER THE FINAL CLASS MEETS WEEK 11.', 7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` (`id`, `course_id`, `prereq`, `ordr`) VALUES
(14, 5, 'MM3311 Interaction Design for Entertainment', 1),
(18, 1, 'Permission of Academic Director/Advisor', 1);

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

INSERT INTO `sections` (`id`, `term_id`, `title`, `content`, `ordr`) VALUES
(38, 16, 'Quarter Credit Hour Definition:', '<p>A quarter credit hour is an amount of work represented in intended learning outcomes and verified by evidence of student achievement that is an institutionally established equivalency that reasonably approximates not less than:</p>\r\n<p>(1) One hour of classroom or direct faculty instruction and a minimum of two hours of out-of-class student work each week for 10-12 weeks, or the equivalent amount of work over a different amount of time; or</p>\r\n<p>(2) At least an equivalent amount of work as required in paragraph (1) of this definition for other academic activities as established by the institution including laboratory work, internships, practica, studio work, and other academic work leading to the award of credit hours.</p>', 1),
(39, 16, 'Classroom Policy:', '<ul>\r\n<li>No food allowed in class or lab at any time. Drinks in recloseable bottles allowed in classroom.</li>\r\n<li>Edible items brought to class or lab must be thrown out.</li>\r\n<li>If student elects to eat/drink outside class or lab door, missed time is recorded as absent.</li>\r\n<li>Attendance is taken hourly. Tardiness or absence is recorded in 15-minute increments.</li>\r\n<li>Break times are scheduled by the instructor at appropriate intervals.</li>\r\n<li>No private software is to be brought to lab or loaded onto school computers.</li>\r\n<li>No software games are allowed in lab (unless in course curriculum).</li>\r\n<li>Headphones are required if listening to music during lab. No headphones are allowed in lecture.</li>\r\n<li>Any student who has special needs that may affect his or her performance in this class is asked to identify his/her needs to the instructor in private by the end of the first day of class. Any resulting class performance problems that may arise for those who do not identify their needs will not receive any special grading considerations.</li>\r\n<li>It is AI-Sacramento policy that cell phones may NOT be used in the classroom. If you have an emergency that requires you to take a call during class, you MUST inform the instructor before class begins, and step outside the room to take the call or text message.</li>\r\n</ul>', 2),
(40, 16, 'School-wide Attendance Policy:', '<p>Students who do not attend any classes for fourteen (14) consecutive calendar days and fail to notify the Academic Affairs Department will be withdrawn from school.&nbsp; In addition, the student may be involuntarily withdrawn at the discretion of the Academic Director, and with the approval of the Dean of Academic Affairs, at any time.</p>', 3),
(41, 16, 'Withdraw from a Course:', '<p>In order to withdraw from a course (that is, receive a grade of &ldquo;W&rdquo;), a student must meet with his or her Academic Director before noon on the Friday of week 9.</p>', 4),
(42, 16, 'Academic Dishonesty:', '<p>Students are expected to maintain the highest standards of academic honesty while pursuing their studies at The Art Institutes. Academic dishonesty includes but is not limited to: plagiarism and cheating; misuse of academic resources or facilities; and misuse of computer software, data, equipment or networks.</p>\r\n<p>Plagiarism is the use (copying) of another person&rsquo;s ideas, words, visual images or audio samples, presented in a manner that makes the work appear to be the student&rsquo;s original creation. All work that is not the student&rsquo;s original creation, or any idea or fact that is not &ldquo;common knowledge,&rdquo; must be documented to avoid even accidental infractions of the conduct code.</p>\r\n<p>Cheating is to gain unfair advantage on a grade by deception, fraud, or breaking the rules set forth by the instructor of the class. Cheating may include but is not limited to: copying the work of others; using notes or other materials when unauthorized; communicating to others during an exam; and any other unfair advantage as determined by the instructor.</p>\r\n<p>Students accused of academic dishonesty will be brought before a Student Conduct Committee. If the committee determines that there has been a violation of the Academic Dishonesty policy, the student will automatically fail the class and, depending on the severity of the infraction, may face further disciplinary action up to and including suspension from classes or expulsion from school.</p>', 5),
(43, 16, 'Disability Policy Statement:', '<p>It is our policy not to discriminate against qualified students with documented disabilities in our educational programs, activities, or services. If you have a disability-related need for adjustments or other accommodations in this class see Steven Franklin, Director of Student Affairs located on the 2<sup>nd</sup> &nbsp;floor or e-mail him at sfranklin@aii.edu. You must inform your instructors and the Academic Affairs Office before the end of week one of classes and preferably before the class start.</p>', 6),
(44, 16, 'Student Assistance Program:', '<p>The college provides confidential short-term counseling, crisis intervention, and community referral services through the AllOne Health Student Assistance Program (SAP) for a wide range of concerns, including relationship issues, family problems, loneliness, depression, and alcohol or drug abuse. Services are available 24 hours a day, 7 days a week, at 1.888-617-3362. The Student Affairs office also offers programs on mental health-related topics each quarter. If you have any questions regarding counseling services, please contact the Student Affairs office.</p>', 7),
(45, 16, 'Library Operation Hours:', '<p>The library is open from 8 AM to 8 PM Monday &ndash; Thursday, 8 AM to 5 PM on Friday and 9 AM to 2 PM on Saturday. The library is closed on Sunday.&nbsp; Computers are available during these hours for students to work on classroom projects.</p>', 8);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

INSERT INTO `terms` (`id`, `term`, `year`, `startdate`, `enddate`, `locked`) VALUES
(16, 3, 2012, '2012-07-09', '2012-09-22', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `login`, `password`, `type`, `phone`, `email`, `status`, `photo`, `info`) VALUES
(1, 'Joe', 'Teacher', 'jteacher', 0xb99f24961740, 0, '123-456-7890', 'joe@email.com', 1, 'userphoto1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor consequat augue, id ullamcorper est cursus sagittis. Praesent vel nibh sit amet arcu euismod euismod. In porta rhoncus sem, nec elementum lacus suscipit id. Praesent molestie adipiscing magna, a tempus sem semper a. Cras nibh ante, mattis a iaculis a, vehicula et nisi. In tincidunt ullamcorper pulvinar. Vivamus ut tristique ipsum. Morbi diam urna, lacinia et sollicitudin feugiat, condimentum ac urna. Duis aliquet adipiscing sem quis sagittis. Morbi sed dolor elit.'),
(10, 'Bill', 'Admin', 'admin', 0xc344a80cd77ec5a7, 2, '123-456-7890', 'admin@somewhere.com', 1, '', 'Hi, I am an administrator of this system. I hope you like my necktie.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
