-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2019 at 11:26 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goonj`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(20) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(3, 'Sujini', '2019-02-20', '2019-03-30', 1800, 2019, 78),
(4, 'Aasan', '2019-02-23', '2019-03-12', 1234, 2019, 67),
(5, 'Organising Books', '2019-02-23', '2019-03-23', 45, 67, 56),
(6, 'Sanitary Pads', '2019-02-06', '2019-03-20', 1800, 3600, 45),
(26, 'Fancy Products', '2019-02-23', '2019-03-12', 34, 89, 23);

-- --------------------------------------------------------

--
-- Table structure for table `bactivity`
--

DROP TABLE IF EXISTS `bactivity`;
CREATE TABLE IF NOT EXISTS `bactivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bactivity`
--

INSERT INTO `bactivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Cloth', '2019-02-12', '2019-10-23', 900, 2019, 56),
(2, 'sujini', '2019-02-27', '2019-04-23', 890, 2067, 23);

-- --------------------------------------------------------

--
-- Table structure for table `bemployee`
--

DROP TABLE IF EXISTS `bemployee`;
CREATE TABLE IF NOT EXISTS `bemployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bemployee`
--

INSERT INTO `bemployee` (`id`, `aid`, `name`, `age`, `salary`, `date_of_birth`, `date_of_join`, `qualification`) VALUES
(1, 1, 'Ryhdhf', 45, 546365, '1970-01-01', '2019-04-12', 'Nursery');

-- --------------------------------------------------------

--
-- Table structure for table `bres`
--

DROP TABLE IF EXISTS `bres`;
CREATE TABLE IF NOT EXISTS `bres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `btime`
--

DROP TABLE IF EXISTS `btime`;
CREATE TABLE IF NOT EXISTS `btime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cactivity`
--

DROP TABLE IF EXISTS `cactivity`;
CREATE TABLE IF NOT EXISTS `cactivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cactivity`
--

INSERT INTO `cactivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Cloth', '2019-02-24', '2019-04-23', 799, 2019, 56),
(2, 'Sanitary Pads', '2019-02-05', '2019-03-20', 1800, 3000, 23);

-- --------------------------------------------------------

--
-- Table structure for table `cemployee`
--

DROP TABLE IF EXISTS `cemployee`;
CREATE TABLE IF NOT EXISTS `cemployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cemployee`
--

INSERT INTO `cemployee` (`id`, `aid`, `name`, `age`, `salary`, `date_of_birth`, `date_of_join`, `qualification`) VALUES
(1, 1, 'seeta', 45, 34535, '2002-02-12', '2019-04-23', 'btech');

-- --------------------------------------------------------

--
-- Table structure for table `cres`
--

DROP TABLE IF EXISTS `cres`;
CREATE TABLE IF NOT EXISTS `cres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ctime`
--

DROP TABLE IF EXISTS `ctime`;
CREATE TABLE IF NOT EXISTS `ctime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `id` int(12) NOT NULL,
  `date` date NOT NULL,
  `st` time NOT NULL,
  `et` time NOT NULL,
  `tt` int(12) NOT NULL,
  `daid` int(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`daid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id`, `date`, `st`, `et`, `tt`, `daid`) VALUES
(1, '2019-03-03', '09:00:00', '11:00:00', 2, 1),
(2, '2019-03-03', '11:00:00', '13:00:00', 2, 2),
(7, '2019-03-03', '11:00:00', '14:00:00', 3, 3),
(1, '2019-03-04', '12:00:00', '14:00:00', 2, 4),
(3, '2019-04-03', '11:00:00', '14:00:00', 3, 5),
(4, '2019-03-05', '11:00:00', '14:00:00', 3, 6),
(6, '2019-03-04', '09:00:00', '14:00:00', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `eemmail`
--

DROP TABLE IF EXISTS `eemmail`;
CREATE TABLE IF NOT EXISTS `eemmail` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `fromm` varchar(30) NOT NULL,
  `too` varchar(30) NOT NULL,
  `suubject` varchar(50) NOT NULL,
  `messege` varchar(150) NOT NULL,
  `ffile` longblob NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eemmail`
--

INSERT INTO `eemmail` (`mid`, `fromm`, `too`, `suubject`, `messege`, `ffile`) VALUES
(10, 'yash', '', '', '', ''),
(11, 'yash', '', '', '', ''),
(12, 'yash', '', '', '', ''),
(15, 'yash', '', '', '', ''),
(16, 'yash', '', '', '', ''),
(17, 'yash', '', '', '', ''),
(19, 'yash', '', '', '', ''),
(20, 'yash', '', '', '', ''),
(21, 'yash', '', '', '', ''),
(22, 'yash', '', '', '', ''),
(23, 'yash', '', '', '', ''),
(24, 'yash', '', '', '', ''),
(25, 'yash', '', '', '', ''),
(26, 'yash', '', '', '', ''),
(27, 'yash', 'yash', 'hello', 'test', ''),
(32, 'vipin', 'vipin', 'hello', 'test message', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `aid`, `name`, `age`, `salary`) VALUES
(1, 3, 'ram', 45, 34535),
(2, 4, 'shyam', 20, 45435),
(3, 5, 'rahul', 45, 45454),
(4, 6, 'ramesh', 56, 234234),
(5, 3, 'sonu', 56, 546365),
(6, 4, 'monu', 20, 45454),
(7, 4, 'Ram', 45, 56756);

-- --------------------------------------------------------

--
-- Table structure for table `hactivity`
--

DROP TABLE IF EXISTS `hactivity`;
CREATE TABLE IF NOT EXISTS `hactivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hactivity`
--

INSERT INTO `hactivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Kits', '2019-02-27', '2019-04-23', 999, 2019, 57),
(2, 'Aasan', '2019-02-27', '2019-04-23', 45, 89, 23);

-- --------------------------------------------------------

--
-- Table structure for table `hemployee`
--

DROP TABLE IF EXISTS `hemployee`;
CREATE TABLE IF NOT EXISTS `hemployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hres`
--

DROP TABLE IF EXISTS `hres`;
CREATE TABLE IF NOT EXISTS `hres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `htime`
--

DROP TABLE IF EXISTS `htime`;
CREATE TABLE IF NOT EXISTS `htime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kactivity`
--

DROP TABLE IF EXISTS `kactivity`;
CREATE TABLE IF NOT EXISTS `kactivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kactivity`
--

INSERT INTO `kactivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Aasan', '2019-02-04', '2019-03-20', 45, 89, 34);

-- --------------------------------------------------------

--
-- Table structure for table `kemployee`
--

DROP TABLE IF EXISTS `kemployee`;
CREATE TABLE IF NOT EXISTS `kemployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kres`
--

DROP TABLE IF EXISTS `kres`;
CREATE TABLE IF NOT EXISTS `kres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ktime`
--

DROP TABLE IF EXISTS `ktime`;
CREATE TABLE IF NOT EXISTS `ktime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `lid` int(30) NOT NULL AUTO_INCREMENT,
  `lname` varchar(28) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `lname`) VALUES
(1, 'banglore'),
(2, 'chennai'),
(3, 'delhi'),
(4, 'hyderabad'),
(5, 'kolkata'),
(6, 'mumbai'),
(7, 'patna'),
(8, 'rishikesh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('admin','sr','hr') NOT NULL,
  `postt` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `name`, `password`, `type`, `postt`) VALUES
(1, 'vipin', 'vip', 'sr', 'sman'),
(2, 'nitish', 'nit', 'hr', 'lheaddelhi'),
(3, 'yash', 'yas', 'admin', 'dheaddelhi1'),
(4, 'dheeraj', 'dhe', 'admin', 'dhead'),
(5, 'yashbanglore1', 'yas', 'admin', 'dheadbanglore1'),
(6, 'yashchennai1', 'yas', 'admin', 'dheadchennai1'),
(7, 'yashhyderabad1', 'yas', 'admin', 'dheadhyderabad1'),
(8, 'yashkolkata1', 'yas', 'admin', 'dheadkolkata1'),
(9, 'yashmumbai1', 'yas', 'admin', 'dheadmumbai1'),
(10, 'yashpatna1', 'yas', 'admin', 'dheadpatna1'),
(11, 'yashrishikesh1', 'yas', 'admin', 'dheadrishikesh1'),
(12, 'nitishbanglore', 'nit', 'hr', 'lheadbanglore'),
(13, 'nitishchennai', 'nit', 'hr', 'lheadchennai'),
(14, 'nitishhyderabad', 'nit', 'hr', 'lheadhyderabad'),
(15, 'nitishkolkata', 'nit', 'hr', 'lheadkolkata'),
(16, 'nitishmumbai', 'nit', 'hr', 'lheadmumbai'),
(17, 'nitishpatna', 'nit', 'hr', 'lheadpatna'),
(18, 'nitishrishikesh', 'nit', 'hr', 'lheadrishikesh'),
(19, 'dheeraj', 'dhe', 'admin', 'dheaddelhi1');

-- --------------------------------------------------------

--
-- Table structure for table `mactivity`
--

DROP TABLE IF EXISTS `mactivity`;
CREATE TABLE IF NOT EXISTS `mactivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mactivity`
--

INSERT INTO `mactivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Kits', '2019-02-24', '2019-04-12', 45, 100, 57);

-- --------------------------------------------------------

--
-- Table structure for table `memployee`
--

DROP TABLE IF EXISTS `memployee`;
CREATE TABLE IF NOT EXISTS `memployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mres`
--

DROP TABLE IF EXISTS `mres`;
CREATE TABLE IF NOT EXISTS `mres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mtime`
--

DROP TABLE IF EXISTS `mtime`;
CREATE TABLE IF NOT EXISTS `mtime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pactivity`
--

DROP TABLE IF EXISTS `pactivity`;
CREATE TABLE IF NOT EXISTS `pactivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pactivity`
--

INSERT INTO `pactivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Cloth', '2019-02-12', '2019-04-12', 34, 67, 67);

-- --------------------------------------------------------

--
-- Table structure for table `pemployee`
--

DROP TABLE IF EXISTS `pemployee`;
CREATE TABLE IF NOT EXISTS `pemployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pres`
--

DROP TABLE IF EXISTS `pres`;
CREATE TABLE IF NOT EXISTS `pres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ptime`
--

DROP TABLE IF EXISTS `ptime`;
CREATE TABLE IF NOT EXISTS `ptime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ractivity`
--

DROP TABLE IF EXISTS `ractivity`;
CREATE TABLE IF NOT EXISTS `ractivity` (
  `aid` int(4) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `tsa` date NOT NULL,
  `tea` date NOT NULL,
  `ac` int(20) NOT NULL,
  `ta` int(4) NOT NULL,
  `noe` int(4) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ractivity`
--

INSERT INTO `ractivity` (`aid`, `aname`, `tsa`, `tea`, `ac`, `ta`, `noe`) VALUES
(1, 'Fancy Products', '2019-02-28', '2019-04-12', 23, 67, 57);

-- --------------------------------------------------------

--
-- Table structure for table `remployee`
--

DROP TABLE IF EXISTS `remployee`;
CREATE TABLE IF NOT EXISTS `remployee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

DROP TABLE IF EXISTS `res`;
CREATE TABLE IF NOT EXISTS `res` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`rid`, `aid`, `rname`, `cost`, `rquan`) VALUES
(67, 3, 'cloth', 568, 488),
(68, 3, 'milk', 456, 34);

-- --------------------------------------------------------

--
-- Table structure for table `rres`
--

DROP TABLE IF EXISTS `rres`;
CREATE TABLE IF NOT EXISTS `rres` (
  `rid` int(27) NOT NULL AUTO_INCREMENT,
  `aid` int(28) NOT NULL,
  `rname` varchar(75) NOT NULL,
  `cost` int(23) NOT NULL,
  `rquan` int(43) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rtime`
--

DROP TABLE IF EXISTS `rtime`;
CREATE TABLE IF NOT EXISTS `rtime` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sactivity`
--

DROP TABLE IF EXISTS `sactivity`;
CREATE TABLE IF NOT EXISTS `sactivity` (
  `acname` varchar(30) NOT NULL,
  PRIMARY KEY (`acname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sactivity`
--

INSERT INTO `sactivity` (`acname`) VALUES
('Aasan'),
('cloth'),
('Fancy Products'),
('Kits'),
('Sanitary Pads'),
('sujini');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
CREATE TABLE IF NOT EXISTS `time` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time_i1` int(11) NOT NULL,
  `time_i2` int(11) NOT NULL,
  `time_o1` int(11) NOT NULL,
  `time_o2` int(11) NOT NULL,
  `date_of` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`tid`, `id`, `time_i1`, `time_i2`, `time_o1`, `time_o2`, `date_of`) VALUES
(1, 1, 12, 12, 23, 23, '2019-02-13'),
(2, 1, 12, 12, 23, 23, '2019-02-24'),
(3, 1, 12, 12, 23, 23, '2019-02-25'),
(4, 1, 12, 12, 12, 12, '2019-02-26'),
(5, 1, 12, 12, 23, 23, '2019-02-27'),
(6, 1, 12, 12, 23, 23, '2019-02-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
