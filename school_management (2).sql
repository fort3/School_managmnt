-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2020 at 04:45 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `secured_password` varchar(50) NOT NULL,
  `sex` char(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `secured_password`, `sex`) VALUES
(1, 'SwapAdmin', 'demigod123', '0e04439261eeec1b6378db78e30ffa96', 'M'),
(12, 'secondadmin', 'clemnt', '2a6aed8e5c7cc1aee76fd7242ebeb1b2', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `matric_number` int(11) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_lecturer` varchar(25) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `credit_units` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `matric_number`, `course_name`, `course_lecturer`, `faculty`, `department`, `semester`, `level`, `credit_units`) VALUES
(1, 2605, 'Geds 404 Entreprenuership', 'Daniel Adewale', 'Computing and Engineering', 'Computer Science', 2, 400, 2),
(2, 2605, 'Geds 404 Entreprenuership', 'Daniel Adewale', 'Computing and Engineering', 'Computer Science', 2, 400, 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Semester` varchar(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `course_lecturer` varchar(25) NOT NULL,
  `matric_number` int(10) NOT NULL,
  `score` int(5) NOT NULL,
  `grade` char(5) NOT NULL,
  `gpa` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Id`, `Semester`, `course`, `course_lecturer`, `matric_number`, `score`, `grade`, `gpa`) VALUES
(4, '1st', 'Cosc 104 - Programming in C', 'Daniel Adewale', 2605, 98, 'A', 4),
(3, '1st', 'Cosc-103 Introduction to C++', 'Daniel Adewale', 2605, 98, 'A', 4),
(5, '2nd', 'Maths-204 Engineering Mathematics', 'Daniel Adewale', 2605, 88, 'A', 4),
(6, '2nd', 'Cosc-205 Circuit Theory', 'Daniel Adewale', 2605, 87, 'A', 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `sex` char(10) NOT NULL,
  `position` varchar(30) NOT NULL,
  `salary` float(10,2) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `password` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `lastname`, `sex`, `position`, `salary`, `faculty`, `department`, `age`, `password`, `course`) VALUES
(1, 'Daniel', 'Adewale', 'M', 'Head Lecturer', 120000.00, 'School of Computing and Engineering', 'Computer Science', 30, 'forty', 'Cosc 104 - Programming in C');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `matric_number` int(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `age` int(5) NOT NULL,
  `sex` char(10) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `gpa` float NOT NULL,
  `password` varchar(50) NOT NULL,
  `secured_password` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `matric_number`, `firstname`, `lastname`, `middlename`, `age`, `sex`, `faculty`, `department`, `course`, `level`, `gpa`, `password`, `secured_password`) VALUES
(3, 2605, 'Fortune', 'Okon', 'Sam', 24, 'M', 'School of Computing and Engineering', 'Computer Science', 'Computer Technology', 400, 4.2, 'forte', 'd8c4dd02753e47b2f87158814aa50d00');
