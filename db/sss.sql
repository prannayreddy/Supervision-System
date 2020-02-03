-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 07:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `attachments` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `subject`, `message`, `attachments`, `date`) VALUES
(13, 'Testtt', 'Testtt', '3.txt', '2017-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `assign_supervisior`
--

CREATE TABLE IF NOT EXISTS `assign_supervisior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `super_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stu_id` (`stu_id`),
  UNIQUE KEY `stu_id_2` (`stu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assign_supervisior`
--

INSERT INTO `assign_supervisior` (`id`, `stu_id`, `super_id`, `start_date`) VALUES
(2, 6, 6, '2017-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `receiver`, `subject`, `message`, `date`) VALUES
(8, 'apex@gmail.com', 'abhi@gmail.com', 'dfdfdf', 'dfdfdfdf', '2017-05-16'),
(2, 'phptpoint@gmail.com', 'aaradhya@gmail.com', 'hiiii', 'hello aaradhya', '2015-04-10'),
(4, 'sanejev@gmail.com', 'ravi@gmail.com', 'hello ravi ', 'hello ravi sir............', '2015-04-10'),
(5, 'sanejev@gmail.com', 'ravi@gmail.com', 'dfd', 'fdf', '2015-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(50) NOT NULL,
  `supervisior` varchar(50) NOT NULL,
  `notification` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `admin`, `supervisior`, `notification`, `date`) VALUES
(3, 'admin@gmail.com', 'apex@gmail.com', 'sdsdsd', '2017-05-14'),
(4, 'admin@gmail.com', 'apex@gmail.com', 'sdsdsd', '2017-05-14'),
(5, 'admin@gmail.com', 'apex@gmail.com', 'dfd', '2017-05-14'),
(6, 'admin@gmail.com', 'test1@gmail.com', 'dfdfd', '2017-05-14'),
(7, 'admin@gmail.com', 'test@gmail.com', 'dfdfd', '2017-05-14'),
(8, 'admin@gmail.com', 'apex@gmail.com', 'dfdfdfd', '2017-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `project_title`
--

CREATE TABLE IF NOT EXISTS `project_title` (
  `Tid` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `super_id` int(11) NOT NULL,
  `project_title` varchar(150) NOT NULL,
  `project_description` text NOT NULL,
  `title_status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `project_title`
--

INSERT INTO `project_title` (`Tid`, `stu_id`, `super_id`, `project_title`, `project_description`, `title_status`, `date`) VALUES
(4, 6, 9, 'student Supervision system', 'Studnet sueprvsidofndf symste is a good project lddddddddddddddddddddd\r\ndljfldjfljdlfjdlkfd\r\nd\r\nf[d\r\nf[d\r\nf', '0', '2017-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `remainder`
--

CREATE TABLE IF NOT EXISTS `remainder` (
  `rem_id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(50) NOT NULL,
  `supervisior` varchar(50) NOT NULL,
  `remainder` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`rem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `remainder`
--

INSERT INTO `remainder` (`rem_id`, `student`, `supervisior`, `remainder`, `date`) VALUES
(11, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(12, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(13, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(14, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(15, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(16, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(17, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkjhkj', '2015-04-11'),
(18, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkhk', '2015-04-11'),
(19, 'sanejev@gmail.com', 'ravi@gmail.com', 'kjhkhk', '2015-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `Rid` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `super_id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `results` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`Rid`, `stu_id`, `super_id`, `subject`, `results`, `date`) VALUES
(1, 6, 6, 'dfdf', '35434', '2017-05-18'),
(2, 6, 6, 'php', '500', '2017-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `program`, `course`) VALUES
(2, 'apexa', 'apexa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '98989989', 'Female', 'B.Tech', 'Course3'),
(8, 'shiv', 'shiv@gmail.com', '671fc86500ae5dd534f859e4483354fe', '123456789', 'Female', 'BCA', 'Course3'),
(3, 'abhi', 'abhi@gmail.com', 'abhi', '91', 'm', 'BCA', 'Course4'),
(4, 'raj', 'raj@gmail.com', 'raj', '+91 9015501897', 'f', 'B.Tech', 'Course2'),
(5, 'ajay', 'ajay@gmail.com', '*BC108C851D5302A3944BBAB99E65DB732D27CF22', '+91 9015501888', 'm', 'B.Tech', 'Course1'),
(6, 'apex', 'apex@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '989898989', 'f', 'B.Tech', 'Course2');

-- --------------------------------------------------------

--
-- Table structure for table `supervisior_request`
--

CREATE TABLE IF NOT EXISTS `supervisior_request` (
  `Tid` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `super_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `supervisior_request`
--

INSERT INTO `supervisior_request` (`Tid`, `stu_id`, `super_id`, `status`, `date`) VALUES
(8, 6, 9, '1', '2017-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `program`, `course`, `status`) VALUES
(6, 'apex', 'apex@gmail.com', '15f9976d7df15fca7a3b8409cd6fd195', '989898989', 'f', 'B.Tech', 'Course2', '0'),
(7, 'test', 'test@gmail.com', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', '88888', 'f', 'B.Tech', 'Course2', '1'),
(8, 'test', 'test1@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '123456789', 'f', 'BCA', 'Course3', '0'),
(9, 'abhi', 'abhi@gmail.com', 'd76f3d05cc9ac98f1f9160274a39fe33', '44444444', 'Male', 'Other', 'Course5', '0'),
(10, 'sanje', 'rashmi@gmail.com', '98d34c1758b15b5a359b69c2b08c5767', '989898989', 'Female', 'B.Tech', 'Course2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `upload_coursework`
--

CREATE TABLE IF NOT EXISTS `upload_coursework` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `supervisior` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `upload_coursework`
--

INSERT INTO `upload_coursework` (`id`, `stu_email`, `subject`, `file`, `supervisior`, `date`) VALUES
(1, 'apex@gmail.com', 'dfdfd', '1.jpg', 'abhi@gmail.com ', '2017-05-16'),
(2, 'apex@gmail.com', 'dfdfd', '1.jpg', 'abhi@gmail.com ', '2017-05-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
