-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2014 at 10:05 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chianda`
--
CREATE DATABASE IF NOT EXISTS `chianda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chianda`;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `yearofbirth` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `fees` int(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `kcpe` int(25) NOT NULL,
  `parentfname` varchar(25) NOT NULL,
  `parentsname` varchar(25) NOT NULL,
  `parentmobile` varchar(25) NOT NULL,
  `nationalid` int(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `county` varchar(25) NOT NULL,
  `primaryname` varchar(25) NOT NULL,
  `primarycounty` varchar(25) NOT NULL,
  `primaryaddress` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `date`, `yearofbirth`, `gender`, `fees`, `fname`, `sname`, `kcpe`, `parentfname`, `parentsname`, `parentmobile`, `nationalid`, `address`, `county`, `primaryname`, `primarycounty`, `primaryaddress`) VALUES
(1, '2014-04-21', '2008', 'Female', 23000, 'Violet', 'chianda', 450, 'Mwancha', 'Kivuli', '0756565656', 22222046, 'thika road', 'Thika', 'Nyakemencha', 'Nairobi', 'inda road'),
(2, '2014-04-15', '2004', 'Male', 40, 'Tom', 'Ojienda', 403, 'otieno', 'Kimanu', '076565656', 2147483647, 'kenyatta road', 'Mombasa', 'Nyakemencha', 'Kisumu', 'Nyakemencha road');

-- --------------------------------------------------------

--
-- Table structure for table `all_rights_reserved`
--

DROP TABLE IF EXISTS `all_rights_reserved`;
CREATE TABLE IF NOT EXISTS `all_rights_reserved` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `all_rights_reserved`
--

INSERT INTO `all_rights_reserved` (`id`, `details`) VALUES
(1, 'chianda High School Admission System ©');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Njoroge', 'njoro@yahoo.com', 'the system is superb'),
(2, 'eric', 'eric@yahoo.com', 'the schhool provides a good service'),
(3, 'rose', 'rose@yahoo.com', 'the system is nice ');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

DROP TABLE IF EXISTS `heading`;
CREATE TABLE IF NOT EXISTS `heading` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `heading`
--

INSERT INTO `heading` (`id`, `heading`) VALUES
(1, 'chianda High School Admission System');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'chianda', 'chianda123');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_no` int(4) NOT NULL,
  `form` varchar(10) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `english` varchar(2) NOT NULL,
  `maths` varchar(2) NOT NULL,
  `kiswahili` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_no`, `form`, `stream`, `fname`, `date`, `english`, `maths`, `kiswahili`) VALUES
(1, 6, 'Form 3', 'West', 'Njoroge', '0000-00-00', 'B+', 'B', 'C'),
(2, 4, 'Form 3', 'West', 'Kimani', '0000-00-00', 'B', 'C-', 'D'),
(4, 6, 'Form 2', 'West', 'Kinuthia', '0000-00-00', 'C+', 'D+', 'C'),
(5, 8, 'Form 1', 'North', 'rose', '0000-00-00', 'B-', 'C+', 'C+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
