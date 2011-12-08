-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2011 at 07:39 PM
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
  `weeknum` tinyint(2) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `activities`
--


-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `books`
--


-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `length` tinyint(2) NOT NULL,
  `day` varchar(1) NOT NULL,
  `period` int(1) NOT NULL,
  `materials` text NOT NULL,
  `methods` text NOT NULL,
  `tech` text NOT NULL,
  `hwhrs` text NOT NULL,
  `officehrs` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `classes`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `competencies`
--

INSERT INTO `competencies` VALUES(64, 1, 0, 'Combine principles of design and interactivity to develop user-centered interface concepts.', 0, 1);
INSERT INTO `competencies` VALUES(65, 1, 0, 'Understand and apply principles of grid structures to layout navigational systems.', 0, 2);
INSERT INTO `competencies` VALUES(66, 1, 0, 'Use digital type as an expressive and informational tool of communication. ', 0, 3);
INSERT INTO `competencies` VALUES(67, 1, 0, 'Use color as an expressive and informational tool of communication.', 0, 4);
INSERT INTO `competencies` VALUES(68, 1, 0, 'Understand the role of timing in an interactive experience.', 0, 5);
INSERT INTO `competencies` VALUES(78, 10, 0, 'Understand the differences between client-side, server-side, and server-parsed languages ', 0, 1);
INSERT INTO `competencies` VALUES(79, 10, 0, 'Understand the basics of server, as opposed to workstation design and software', 0, 2);
INSERT INTO `competencies` VALUES(80, 10, 0, 'Understand common web server software (e.g., Apache, IIS) configuration the differences between client-side, server-side, and server-parsed languages ', 0, 3);
INSERT INTO `competencies` VALUES(81, 10, 0, 'Understand how CGI (Common Gateway Interface) links web forms to back-end programs', 0, 4);
INSERT INTO `competencies` VALUES(82, 10, 0, 'Apply basic Perl to create a functional CGI script ', 0, 5);
INSERT INTO `competencies` VALUES(83, 10, 0, 'Understand how server-parsed languages allow access to server variables and resources', 0, 6);
INSERT INTO `competencies` VALUES(84, 10, 0, 'Apply basic PHP to create a functional server-parsed program', 0, 7);
INSERT INTO `competencies` VALUES(85, 10, 0, 'Understand the basics of web-database links', 0, 8);
INSERT INTO `competencies` VALUES(86, 10, 0, 'Understand the use of CGI and PHP in e-commerce systems', 0, 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` VALUES(1, 'MM2201', 'Interface Design', 'This course is an exploration of the synthesis of visual design and principles of human interactivity. This course examines the conceptual and practical design of interfaces.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(5, 'MM3312', 'Computer-based Traning', 'This course provides an exploration of authoring techniques for interactive training and education. Students gain experience in the process of design, development, and evaluation of effective computer-based training systems.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(7, 'MM4403', 'Senior Project Development', 'Students conduct project-based research of advanced topic in multimedia design.', 44, 22, 22, 3, 1);
INSERT INTO `courses` VALUES(10, 'MM3323', 'Advanced Web Based Programming', 'This course is an exploration of scripting and programming languages used to develop advanced "server-side" Web applications. Students learn how to create programs capable of storing and retrieving data from servers supporting advanced interactivity.', 44, 22, 22, 3, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` VALUES(36, 13, '2011-11-24', 'Thursday', 'Thanksgiving', 1);
INSERT INTO `dates` VALUES(37, 13, '2011-11-25', 'Friday', 'Thanksgiving', 2);

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` VALUES(1, 'Web Design and Interactive Media');
INSERT INTO `depts` VALUES(2, 'Digital Film and Video Production');
INSERT INTO `depts` VALUES(3, 'Graphic Design');
INSERT INTO `depts` VALUES(4, 'Interior Design');
INSERT INTO `depts` VALUES(5, 'Culinary');
INSERT INTO `depts` VALUES(6, 'Media Arts and Animation');
INSERT INTO `depts` VALUES(7, 'Game Art and Design');
INSERT INTO `depts` VALUES(8, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `evalscales`
--

CREATE TABLE `evalscales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `percent` tinyint(2) NOT NULL,
  `order` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `evalscales`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` VALUES(4, 1, 'Permission of Academic Director/Advisor ', 1);
INSERT INTO `prereqs` VALUES(6, 10, 'MM2233 Intermediate Web-based Programming', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `order` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sections`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` VALUES(10, 1, 2011, '2011-01-10', '2011-03-23', 1);
INSERT INTO `terms` VALUES(11, 2, 2011, '2011-10-04', '2011-12-16', 0);
INSERT INTO `terms` VALUES(12, 3, 2011, '2011-07-10', '2011-09-24', 0);
INSERT INTO `terms` VALUES(13, 4, 2011, '2011-10-03', '2011-12-16', 0);

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

INSERT INTO `users` VALUES(1, 'Bill', 'Mead', 'wmmead', 0xb99f24961740, 2, '530-313-5141', 'wmead@aii.edu', 1, 'userphoto1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor consequat augue, id ullamcorper est cursus sagittis. Praesent vel nibh sit amet arcu euismod euismod. In porta rhoncus sem, nec elementum lacus suscipit id. Praesent molestie adipiscing magna, a tempus sem semper a. Cras nibh ante, mattis a iaculis a, vehicula et nisi. In tincidunt ullamcorper pulvinar. Vivamus ut tristique ipsum. Morbi diam urna, lacinia et sollicitudin feugiat, condimentum ac urna. Duis aliquet adipiscing sem quis sagittis. Morbi sed dolor elit.');
INSERT INTO `users` VALUES(3, 'Joey', 'Schmo', 'jschmo', 0xb99f24961740, 0, '123-456-6789', 'joe@somewhere.com', 0, '', NULL);
INSERT INTO `users` VALUES(4, 'Sandy', 'Green', 'sgreen', 0xb99f24961740, 0, '213-098-9876', 'sgreen@gmail.com', 1, 'userphoto4.jpg', 'none listed');
INSERT INTO `users` VALUES(5, 'Bob', 'Smith', 'bsmith', 0xb99f24961740, 0, '432-345-5431', 'bill@meaddesign.net', 1, '', 'none listed');
INSERT INTO `users` VALUES(6, 'John', 'Dingleberry', 'jdingle', 0xb99f24961740, 1, '121-212-1122', 'jdingle@hotmail.com', 1, '', '');
INSERT INTO `users` VALUES(7, 'Phat', 'Monster', 'monster', 0xb99f24961740, 0, '222-333-4444', 'monster@somewhere.com', 1, 'userphoto7.jpg', 'none listed');
INSERT INTO `users` VALUES(8, 'Mary', 'Johnson', 'mjohnson', 0xb99f24961740, 0, '340-549-2233', 'mj@somewhere.com', 1, '', '');
