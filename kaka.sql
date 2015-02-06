-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 01:41 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE IF NOT EXISTS `med` (
  `form2_name` varchar(255) NOT NULL,
  `form2_disease` varchar(255) NOT NULL,
  `click_stock` tinyint(1) NOT NULL,
  `pills` int(255) NOT NULL,
  `remind` int(255) NOT NULL,
  `dossage` int(255) NOT NULL,
  `optionsRadios` varchar(255) NOT NULL,
  `daily_reminder` time NOT NULL,
  `SUNDAY` varchar(255) NOT NULL,
  `MONDAY` varchar(255) NOT NULL,
  `TUESDAY` varchar(255) NOT NULL,
  `WEDNESDAY` varchar(255) NOT NULL,
  `THURSDAY` varchar(255) NOT NULL,
  `FRIDAY` varchar(255) NOT NULL,
  `SATURDAY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`form2_name`, `form2_disease`, `click_stock`, `pills`, `remind`, `dossage`, `optionsRadios`, `daily_reminder`, `SUNDAY`, `MONDAY`, `TUESDAY`, `WEDNESDAY`, `THURSDAY`, `FRIDAY`, `SATURDAY`) VALUES
('faladala', 'shshhss', 0, 3, 2, 4, '0', '00:00:00', '', '', '', '', '', '', ''),
('faladala', 'shshhss', 0, 3, 2, 4, '0', '00:00:00', '', '', '', '', '', '', ''),
('faladala', 'shshhss', 0, 3, 2, 4, '0', '00:00:00', '', '', '', '', '', '', ''),
('shkh', 'miraj', 0, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('lalllaalla', 'phusssssss', 0, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('lalllaalla', 'phusssssss', 0, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('shkkkkkkkkkkkkkk', 'phusssssss', 0, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('kkkkkkkk', 'phusssssss', 0, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('lalalallalaa', 'dkkdkdkdkd', 1, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('lalalallalaa', 'dkkdkdkdkd', 0, 9, 2, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('akak', 'lalalala', 0, 0, 0, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('plll', 'hhh', 0, 0, 0, 2, '0', '00:00:00', '', '', '', '', '', '', ''),
('eyah', 'yahya', 0, 0, 0, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('rrr', 'bala', 0, 0, 0, 3, '0', '00:00:00', '', '', '', '', '', '', ''),
('rrr', 'bala', 0, 0, 0, 3, '0', '08:14:00', '', '', '', '', '', '', ''),
('uip', 'lkh', 0, 0, 0, 5, '0', '08:12:02', '', '', '', '', '', '', ''),
('uip', 'lkh', 1, 5, 3, 5, '0', '08:12:02', '', '', '', '', '', '', ''),
('lallalaa', 'dkkd', 1, 9, 10, 11, 'option2', '08:09:00', '', '', '', '', '', '', ''),
('mano', 'janu', 1, 19, 20, 30, 'option1', '09:12:30', '', '', '', '', '', '', ''),
('naima', 'sheikh', 0, 0, 0, 8, 'option2', '10:12:22', '', '', '', '', '', '', ''),
('naima', 'rud', 0, 0, 0, 9, 'option1', '11:12:00', '', '', '', '', '', '', ''),
('mbdd', 'dddddddd', 0, 0, 0, 9, 'option2', '10:33:00', '', '', '', '', '', '', ''),
('rana', 'baji', 0, 0, 0, 0, 'option2', '11:12:00', 'sun', '', '', '', '', '', ''),
('rahema', 'imran', 1, 9, 10, 10, 'option2', '08:12:02', '', '', '', '', '', '', ''),
('manju', 'kala', 1, 8, 911, 11, 'option2', '05:30:00', 'sun', '', '', '', '', '', ''),
('raiii', 'llalalal', 1, 9, 11, 12, 'option1', '00:00:00', '''Mon', '', '', '', '', '', ''),
('raiii', 'dndnndnd', 0, 0, 0, 4, 'option2', '10:12:22', 'Mon', '', '', '', '', '', ''),
('farual', 'shk', 1, 8, 10, 2, 'option2', '10:14:00', 'sun', '', '', '', '', '', ''),
('BAN', 'rat', 1, 8, 12, 23, 'option2', '01:19:00', 'sun', 'Mon', 'tues', 'wed', '', '', ''),
('mbdd', 'ee', 0, 0, 0, 5, 'option2', '03:23:00', 'Mon', '', '', '', '', '', ''),
('shkhkijaan', 'fever', 1, 4, 36, 6, 'option2', '11:12:00', '', '', '', '', '', '', ''),
('lalala', 'dhhdhdh', 0, 0, 0, 19, 'option1', '10:12:22', '', '', '', '', '', '', ''),
('ujjj', 'kdbbdbd', 1, 8, 11, 2, 'option2', '07:11:00', 'Array', '', '', '', '', '', ''),
('ujjj', 'kdbbdbd', 0, 8, 11, 2, 'option2', '07:11:00', 'Array', '', '', '', '', '', ''),
('laka', 'dd', 0, 0, 0, 12, 'option2', '08:09:00', '', '', '', '', '', '', ''),
('rania', 'shkh', 1, 27, 7, 9, 'option2', '07:11:00', '', '', '', '', '', '', ''),
('yumna', 'rahh', 0, 0, 0, 9, 'option1', '11:12:00', '', '', '', '', '', '', ''),
('hafsa', 'jia', 0, 0, 0, 3, 'option2', '10:12:00', '', '', '', '', '', '', ''),
('kkdkd', 'lalla', 0, 0, 0, 5, 'option1', '10:12:22', 'sun', '', '', '', '', '', ''),
('ras', 'lala', 0, 0, 0, 8, 'option2', '09:12:30', 'Array', '', '', '', '', '', ''),
('laika', 'shs', 1, 9, 12, 13, 'option2', '08:09:00', 'Array', '', '', '', '', '', ''),
('lala', 'yuan', 1, 3, 5, 4, 'option1', '10:12:00', 'sun', '', '', '', '', '', ''),
('sitara', 'syncl', 1, 1, 2, 3, 'option2', '10:12:22', 'sun', '', '', '', '', '', ''),
('shkh', 'kaam', 0, 3, 8, 3, 'option2', '11:10:00', 'sun', '', '', '', '', '', ''),
('shkh', 'kaam', 0, 3, 8, 3, 'option2', '11:10:00', 'sun', '', '', '', '', '', ''),
('shkh', 'kaam', 1, 3, 8, 3, 'option2', '11:10:00', 'sun', 'Mon', '', '', '', '', ''),
('shkh', 'kaam', 0, 3, 8, 3, 'option2', '11:10:00', 'sun', 'Mon', 'tues', 'wed', '', '', ''),
('KAKALALAL', 'kaam', 0, 3, 8, 3, 'option2', '11:10:00', 'sun', 'Mon', 'tues', 'wed', 'thur', 'Fri', 'Sat'),
('KAKALALAL', 'kaam', 0, 3, 8, 3, 'option2', '11:10:00', 'sun', 'Mon', 'tues', '', '', '', ''),
('KAKALALAL', 'kaam', 0, 3, 8, 3, 'option2', '11:10:00', 'sun', 'Mon', 'tues', 'wed', '', '', ''),
('KAKALALAL', 'kaam', 1, 3, 8, 3, 'option2', '11:10:00', 'sun', 'Mon', 'tues', 'wed', 'thur', 'Fri', 'Sat'),
('LALAA', 'KAM', 1, 3, 5, 8, 'option2', '08:12:02', 'sun', 'Mon', 'tues', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sayeen`
--

CREATE TABLE IF NOT EXISTS `sayeen` (
  `documentname` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `descryption` varchar(255) NOT NULL,
  `datepicker` date NOT NULL,
  `userfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayeen`
--

INSERT INTO `sayeen` (`documentname`, `document_type`, `descryption`, `datepicker`, `userfile`) VALUES
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('yeahhh', 'Discharge Summary (DS)', 'bla bla', '0000-00-00', 0x494d472d32303134313232382d5741303030382e6a7067),
('ayaya', 'Operative Note or Report (OP)', 'djdjd', '2015-12-03', 0x494d472d32303134313232382d5741303030382e6a7067);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
