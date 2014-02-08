-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2014 at 01:09 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ubit`
--
CREATE DATABASE IF NOT EXISTS `ubit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ubit`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `adminid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `password`, `is_admin`) VALUES
('administrator', 'admin', 'yes'),
('faculty', 'faculty', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `stu_login`
--

CREATE TABLE IF NOT EXISTS `stu_login` (
  `seatno` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `doa` varchar(255) NOT NULL,
  `contact_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_login`
--

INSERT INTO `stu_login` (`seatno`, `password`, `full_name`, `father_name`, `field_name`, `semester`, `section`, `age`, `dob`, `doa`, `contact_no`) VALUES
(1249071, 'demo', 'Usman Durrani', '', 'BSCS', '4', 'B', 21, '', '', 0),
(1249071, 'demo', 'Usman Durrani', '', 'BSCS', '4', 'B', 21, '', '', 2147483647),
(1249072, 'demo', 'Faizan Durrani', 'faizan', 'bscs', '5', 'a', 13, '08/02/2014', '2011', 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
