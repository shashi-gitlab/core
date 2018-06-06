-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2016 at 01:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(50) DEFAULT NULL,
  `cont_no` bigint(10) DEFAULT NULL,
  `cont_group` varchar(50) DEFAULT NULL,
  `cont_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_id` int(11) NOT NULL,
  `grpid` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_no`, `cont_group`, `cont_time`, `log_id`, `grpid`) VALUES
(85, 'Fanny', 8983336345, '26', '2016-09-01 19:36:21', 13, 26),
(86, 'Shashi', 9898748745, '26', '2016-09-03 14:59:26', 10, 27),
(87, 'Kiran', 9865745487, '28', '2016-09-03 14:59:22', 13, 27),
(88, 'raju', 7524547895, '24', '2016-09-04 07:28:09', 10, 24),
(89, 'eeerw', 7524545451, '24', '2016-09-29 21:55:07', 10, 24),
(90, 'rajiv', 8787878787, '26', '2016-09-29 22:56:27', 10, 26),
(91, 'ravi', 5545454541, '25', '2016-10-03 16:33:41', 10, 25),
(92, 'shashikant', 1245789632, '24', '2016-10-03 16:40:33', 10, 24);

-- --------------------------------------------------------

--
-- Table structure for table `lg_group`
--

CREATE TABLE IF NOT EXISTS `lg_group` (
  `grp_id` int(11) NOT NULL,
  `grp_name` varchar(50) DEFAULT NULL,
  `grp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_group`
--

INSERT INTO `lg_group` (`grp_id`, `grp_name`, `grp_time`, `log_id`) VALUES
(24, 'Friends', '2016-08-30 19:58:14', 10),
(25, 'Collegue', '2016-08-30 19:58:21', 10),
(26, 'Best Friends', '2016-09-01 19:39:31', 10),
(27, 'Just Friends', '2016-08-31 17:35:53', 13),
(28, 'LocalTrain', '2016-09-03 14:50:24', 13),
(29, 'sdf sfdf', '2016-09-29 21:54:14', 10);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `lib_id` int(11) NOT NULL,
  `lib_name` varchar(50) DEFAULT NULL,
  `lib_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`lib_id`, `lib_name`, `lib_time`, `log_id`) VALUES
(21, 'Good Night', '2016-08-30 19:56:58', 10),
(22, 'Good Morning', '2016-08-30 19:57:05', 10),
(23, 'Funny Msg', '2016-08-31 17:34:38', 13),
(24, 'Emotional', '2016-08-31 17:35:41', 13),
(25, 'Navratri', '2016-09-03 14:50:16', 13),
(26, 'sadasdsad', '2016-09-29 21:53:53', 10),
(27, 'dsada xcX', '2016-09-29 21:54:22', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `mobile`, `pass`, `status`, `time`) VALUES
(10, 'ShashiMaurya', 'shashi@gmail.com', 787878784, '8cb2237d0679ca88db6464eac60da96345513964', 0, '2016-08-28 07:17:52'),
(11, 'Vinay Yadav', 'vinay123@gmail.com', 787878787, '8cb2237d0679ca88db6464eac60da96345513964', 0, '2016-08-28 07:49:45'),
(12, 'cfsdhscfdfc', 'addd@gmail.com', 525252525, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2016-08-28 07:54:10'),
(13, 'AmitChaurasia', 'amit@gmail.com', 898989898, '8cb2237d0679ca88db6464eac60da96345513964', 0, '2016-08-28 13:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL,
  `lbr_id` text,
  `msg_name` varchar(50) DEFAULT NULL,
  `msg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `lbr_id`, `msg_name`, `msg_time`, `log_id`) VALUES
(41, '21', 'Nightone', '2016-08-30 19:58:36', 10),
(42, '21', 'Nighttwo', '2016-08-30 19:58:42', 10),
(43, '22', 'Morningone', '2016-08-30 19:58:48', 10),
(44, '22', 'Morningtwo', '2016-08-30 19:58:57', 10),
(45, '21', 'GoodNightthree', '2016-08-30 20:31:09', 10),
(46, '23', 'Hahahahahahahaahahahaahah', '2016-08-31 17:34:57', 13),
(48, '24', 'Ok Chalega', '2016-08-31 19:55:37', 13),
(49, '24', 'Cryyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '2016-09-03 14:51:28', 13),
(50, '21', 'Good night my dear.', '2016-09-29 22:38:39', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `lg_group`
--
ALTER TABLE `lg_group`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `lg_group`
--
ALTER TABLE `lg_group`
  MODIFY `grp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
