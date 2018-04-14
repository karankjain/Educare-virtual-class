-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2012 at 10:51 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educare`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_member`
--

CREATE TABLE IF NOT EXISTS `chat_member` (
  `room` varchar(40) NOT NULL,
  `member` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`room`,`member`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_member`
--

INSERT INTO `chat_member` (`room`, `member`, `time`) VALUES
('TCET', 'piyubhansali@yahoo.com', '2012-03-26 02:13:39'),
('DSF', 'piyubhansali@yahoo.com', '2012-03-26 10:40:29'),
('DSF', 'karanpugalias@yahoo.in', '2012-03-26 10:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `chat_rooms`
--

CREATE TABLE IF NOT EXISTS `chat_rooms` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `numofuser` int(10) NOT NULL,
  `file` varchar(30) NOT NULL,
  `creator` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`),
  UNIQUE KEY `name_3` (`name`),
  UNIQUE KEY `name_4` (`name`),
  UNIQUE KEY `name_5` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chat_rooms`
--

INSERT INTO `chat_rooms` (`id`, `name`, `numofuser`, `file`, `creator`) VALUES
(2, 'DSF', 0, 'DSF.txt', 'piyubhansali@yahoo.com'),
(1, 'TCET', 0, 'TCET.txt', 'piyubhansali@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE IF NOT EXISTS `chat_users` (
  `id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time_mod` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`id`, `username`, `status`, `time_mod`) VALUES
(49, 'piyubhansali@yahoo.com', 1, 1332745481),
(48, 'karanpugalias@yahoo.in', 1, 1332745478);

-- --------------------------------------------------------

--
-- Table structure for table `chat_users_rooms`
--

CREATE TABLE IF NOT EXISTS `chat_users_rooms` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `mod_time` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1523 ;

--
-- Dumping data for table `chat_users_rooms`
--

INSERT INTO `chat_users_rooms` (`id`, `username`, `room`, `mod_time`) VALUES
(1521, 'karanpugalias@yahoo.in', 'DSF', 1332745478),
(1522, 'piyubhansali@yahoo.com', 'DSF', 1332745481);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `receiver` varchar(30) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`receiver`, `sender`, `msg`, `time`) VALUES
('karanpugalias@yahoo.in', 'piyubhansali@yahoo.com', 'Add me', '2012-03-26 12:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `p_id` int(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `school` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Qualification` varchar(40) NOT NULL,
  `Occupation` varchar(40) NOT NULL,
  `Interest` varchar(200) NOT NULL,
  `idol` varchar(30) NOT NULL,
  `img` varchar(40) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`p_id`, `email_id`, `country`, `city`, `school`, `College`, `Qualification`, `Occupation`, `Interest`, `idol`, `img`) VALUES
(3, 'antriksh_mutha27@ymail.com', 'United Kingdom', '', 'Nav', 'S.I.E.S', 'BSC', '', '', 'Steve Jobs', 'antriksh_mutha27@ymail.com.jpg'),
(1, 'karanpugalias@yahoo.in', 'india', 'bhayander', 'St.Xavier ', 'K.C. College', 'B .E Comp.', 'Student', 'Mobile Phones,MOvies', 'karan', 'karanpugalias@yahoo.in.jpg'),
(2, 'piyubhansali@yahoo.com', '', '', '', '', '', '', '', '', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(30) NOT NULL,
  `lecturer` varchar(30) NOT NULL,
  `attender` varchar(30) NOT NULL,
  PRIMARY KEY (`name`,`lecturer`,`attender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `lecturer`, `attender`) VALUES
('C++', 'Karan Jain', 'Karan Jain'),
('DSF', 'Priyanka Bhansali', 'Karan Jain'),
('DSF', 'Priyanka Bhansali', 'Priyanka Bhansali'),
('Java tutorial1.', 'Karan Jain', 'Karan Jain'),
('Java tutorial1.', 'Karan Jain', 'Priyanka Bhansali');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_lecture`
--

CREATE TABLE IF NOT EXISTS `scheduled_lecture` (
  `sch_id` int(4) NOT NULL,
  `lecturer` varchar(30) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timing` datetime NOT NULL,
  `duration` int(3) NOT NULL,
  `display_time` datetime NOT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduled_lecture`
--

INSERT INTO `scheduled_lecture` (`sch_id`, `lecturer`, `topic`, `description`, `timing`, `duration`, `display_time`) VALUES
(1, 'Karan Jain', 'Java tutorial1.', 'Java Tutorial on Basics.', '2012-03-25 20:00:00', 60, '2012-03-24 06:43:39'),
(2, 'Karan Jain', 'C++', 'C++ Advance knowledge Building.', '2012-03-25 15:00:00', 120, '2012-03-24 07:03:37'),
(3, 'Priyanka Bhansali', 'DSF', 'Dsf Algorithms.', '2012-03-26 11:15:00', 60, '2012-03-26 10:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `signup_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` int(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `dateActivate` date NOT NULL,
  `msg` varchar(40) NOT NULL,
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `signup_id` (`signup_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `first_name`, `last_name`, `email_id`, `password`, `gender`, `date`, `month`, `year`, `dateActivate`, `msg`) VALUES
(1, 'Karan', 'Jain', 'karanpugalias@yahoo.in', 'password', 'male', 19, 'September', 1990, '2012-03-09', 'msg_karanpugalias@yahoo.in.txt'),
(2, 'Priyanka', 'Bhansali', 'piyubhansali@yahoo.com', 'priyanka', 'female', 12, 'February', 1990, '2012-03-11', 'msg_piyubhansali@yahoo.com.txt'),
(3, 'antriksh', 'mutha', 'antriksh_mutha27@ymail.com', 'qwerty', 'male', 27, 'January', 1991, '2012-04-07', 'msg_antriksh_mutha27@ymail.com.txt');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `up_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`up_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`up_id`, `name`, `extension`, `description`, `uploaded_by`, `f_name`, `l_name`, `time`) VALUES
(1, 'apache', '.png', 'apache for friends', 'karanpugalias@yahoo.in', 'Karan', 'Jain', '2012-03-26 12:32:01');
