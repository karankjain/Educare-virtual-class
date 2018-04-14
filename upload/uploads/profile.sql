-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2012 at 10:14 AM
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
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`p_id`, `email_id`, `country`, `city`, `school`, `College`, `Qualification`, `Occupation`, `Interest`, `idol`) VALUES
(1, 'antriksh_mutha27@ymail.com', 'india', 'bhiwandi', 'Nes english medium school', 'S.I.E.S COllege', 'B .E Comp.', 'Student', 'Mobile Phones,MOvies', 'karan');
