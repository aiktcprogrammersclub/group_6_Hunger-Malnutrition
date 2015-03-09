-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2015 at 05:19 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `message`) VALUES
('', '', 'asdfff');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `name` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `ammount` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `email`, `address`, `phoneno`, `ammount`) VALUES
('sdsd', 'adsad@sdsd', 'sdsd', 0, 12),
('siddiqua', 'siddiquamaaz@yahoo.c', '', 2147483647, 9000),
('siddiquamaaz', 'siddiquamaaz@yahoo.c', '', 2147483647, 9000),
('siddiquamaazsk', 'siddiquamaaz@yahoo.c', 'nerul', 2147483647, 9000),
('siddiquamaazsk1', 'siddiquamaaz@yahoo.c', 'nerul', 2147483647, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(23) NOT NULL,
  `email` varchar(23) NOT NULL,
  `password` varchar(8) NOT NULL,
  `address` varchar(23) NOT NULL,
  `phone_no` int(10) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `address`, `phone_no`) VALUES
('fauziua', 'siddiquamaaz@yahoo.com', 'hhhh', 'hareth@w.com', 90000),
('hgff', 'siddiquamaaz@yahoo.com', 'aas', 'hareth@w.com', 0),
('priya', 'piyu@gmail.com', 'siddiqua', 'chembur', 2147483647),
('siddiqua', 'siddiquamaazsk@gmail.co', 'siddiqua', 'chembur', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE IF NOT EXISTS `suggest` (
  `name` varchar(20) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
