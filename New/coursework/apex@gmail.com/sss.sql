-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 07:12 AM
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
-- Table structure for table `assign_supervisior`
--

CREATE TABLE IF NOT EXISTS `assign_supervisior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `super_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stu_id` (`stu_id`),
  UNIQUE KEY `stu_id_2` (`stu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assign_supervisior`
--

INSERT INTO `assign_supervisior` (`id`, `stu_id`, `super_id`, `start_date`, `end_date`) VALUES
(1, 5, 5, '2015-04-13', '2015-04-14');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `receiver`, `subject`, `message`, `date`) VALUES
(3, 'phptpoint@gmail.com', 'sanejev@gmail.com 	', 'hiiiiiiiiii', 'hiiii aaru how are you', '2015-04-10'),
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
  `secondMarker` varchar(50) NOT NULL,
  `notification` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `admin`, `supervisior`, `secondMarker`, `notification`, `date`) VALUES
(2, 'phptpoint@gmail.com', 'mamta@gmail.com', 'aaradhya@gmail.com', 'dfdfd', '2015-04-12');

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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `program`, `course`) VALUES
(1, 'sanjeev', 'sanejev@gmail.com', 'sanjeev', '55555555555', 'm', '', 'Course3'),
(2, 'ravi', 'ravi@gmail.com', 'ravi', '85555555555', 'm', 'BCA', 'Course4'),
(3, 'abhi', 'abhi@gmail.com', 'abhi', '91', 'm', 'BCA', 'Course4'),
(4, 'raj', 'raj@gmail.com', 'raj', '+91 9015501897', 'f', 'B.Tech', 'Course2'),
(5, 'ajay', 'ajay@gmail.com', '*BC108C851D5302A3944BBAB99E65DB732D27CF22', '+91 9015501888', 'm', 'B.Tech', 'Course1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `program`, `course`, `status`) VALUES
(3, 'sanjeev', 'sanjeev@gmail.com', 'sanjeev', '544545', 'male', 'MCA', 'lp', '1'),
(5, 'mamta', 'mamta@gmail.com', '*64AEF20FAA6710E48E98450618406DAC02551FBD', '87850037231', 'm', 'BCA', 'Course3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `upload_coursework`
--

CREATE TABLE IF NOT EXISTS `upload_coursework` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_email` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `supervisior` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `upload_coursework`
--

INSERT INTO `upload_coursework` (`id`, `stu_email`, `file`, `supervisior`, `date`) VALUES
(1, 'sanejev@gmail.com', 'PHP BOND.docx', 'ravi@gmail.com ', '2015-04-11'),
(2, 'sanejev@gmail.com', 'g-logix.png', 'ravi@gmail.com ', '2015-04-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
