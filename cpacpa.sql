-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2009 at 10:48 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition`
--

CREATE TABLE IF NOT EXISTS `addition` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition`
--

INSERT INTO `addition` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('slide1', 0, 0, 0, 1, 'single digit without carry', ' '),
('slide2', 1, 1, 2, 1, 'single digit without carry', 'sl'),
('slide3', 0, 0, 0, 1, 'single digit with carry', ' '),
('slide4', 1, 1, 2, 1, 'single digit with carry', 'en'),
('end', 0, 0, 0, 1, 'single digit with carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `priority` int(5) NOT NULL,
  `completed` int(2) NOT NULL,
  PRIMARY KEY (`cname`,`mname`,`pname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cname`, `mname`, `pname`, `priority`, `completed`) VALUES
('add complete', 'add', 'addition', 2, 0),
('add complete', 'add', 'ramu', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `howtoadd`
--

CREATE TABLE IF NOT EXISTS `howtoadd` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `howtoadd`
--

INSERT INTO `howtoadd` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('add1', 0, 0, 0, 1, 'single digit without carry', ' '),
('add2', 0, 0, 0, 0, '', ' '),
('add11', 1, 1, 2, 1, 'single digit without carry', 'ad'),
('add21', 0, 0, 0, 1, 'single digit with carry', ' '),
('add22', 1, 1, 2, 1, 'single digit with carry', 'ad'),
('add31', 0, 0, 0, 1, 'double digit without carry', ' '),
('add32', 1, 1, 2, 1, 'double digit without carry', 'en'),
('add12', 0, 0, 0, 0, '', ' '),
('end', 0, 0, 0, 1, 'double digit without carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `lno` int(5) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  PRIMARY KEY (`lno`,`lname`,`mname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`lno`, `lname`, `mname`) VALUES
(1, 'decimal to binary', 'binary numbers'),
(1, 'decimal to hexa', 'hexa conversion'),
(1, 'single digit without borrow', 'sub'),
(1, 'single digit without carry', 'add'),
(2, 'binary to decimal', 'binary numbers'),
(2, 'hexa to decimal', 'hexa conversion'),
(2, 'single digit with borrow', 'sub'),
(2, 'single digit with carry', 'add'),
(3, 'double digit without borrow', 'sub'),
(3, 'double digit without carry', 'add'),
(4, 'double digit with borrow', 'sub'),
(4, 'double digit with carry', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `mname` varchar(50) NOT NULL,
  `nl` int(5) NOT NULL,
  PRIMARY KEY (`mname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mname`, `nl`) VALUES
('sub', 4),
('add', 4),
('hexa conversion', 2);

-- --------------------------------------------------------

--
-- Table structure for table `myp`
--

CREATE TABLE IF NOT EXISTS `myp` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myp`
--

INSERT INTO `myp` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('t3', 0, 0, 0, 1, 'single digit with carry', ' '),
('t2', 1, 1, 2, 1, 'single digit without carry', 't3'),
('t1', 0, 0, 0, 1, 'single digit without carry', ' '),
('t4', 1, 1, 2, 1, 'single digit with carry', 'end'),
('end', 0, 0, 0, 1, 'single digit with carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('a1', 0, 0, 0, 1, 'single digit without carry', ' '),
('a2', 1, 1, 2, 1, 'single digit without carry', 'a3'),
('a3', 0, 0, 0, 1, 'single digit with carry', ' '),
('end', 0, 0, 0, 1, 'single digit with carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `presentations`
--

CREATE TABLE IF NOT EXISTS `presentations` (
  `pname` varchar(20) NOT NULL,
  `completed` int(2) NOT NULL,
  `lmodule` varchar(50) NOT NULL,
  `structure` varchar(5) NOT NULL,
  `content` int(5) NOT NULL,
  `decision` int(5) NOT NULL,
  `first_slide` varchar(20) NOT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentations`
--

INSERT INTO `presentations` (`pname`, `completed`, `lmodule`, `structure`, `content`, `decision`, `first_slide`) VALUES
('addition', 1, 'add', 's1', 0, 0, 'slide1'),
('myp', 1, 'add', 's1', 0, 0, 't1'),
('ramu', 0, 'add', 's2', 0, 0, ' '),
('raguveera', 1, 'add', 's1', 0, 0, 'slide1'),
('sample', 0, 'add', 's2', 0, 0, ' '),
('new', 1, 'add', 's1', 0, 0, 'a1'),
('howtoadd', 0, 'add', 's1', 0, 0, 'add1');

-- --------------------------------------------------------

--
-- Table structure for table `raguveera`
--

CREATE TABLE IF NOT EXISTS `raguveera` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raguveera`
--

INSERT INTO `raguveera` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('slide1', 0, 0, 0, 1, 'single digit without carry', ' '),
('slide2', 1, 1, 2, 1, 'single digit without carry', 'sl'),
('slide3', 0, 0, 0, 1, 'single digit with carry', ' '),
('slide4', 1, 1, 2, 1, 'single digit with carry', 'en'),
('slide5', 0, 0, 0, 1, 'single digit with carry', ' '),
('end', 0, 0, 0, 1, 'single digit with carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ramu`
--

CREATE TABLE IF NOT EXISTS `ramu` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ramu`
--

INSERT INTO `ramu` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('slide1', 0, 0, 0, 0, 'single digit without carry', ' '),
('slide2', 0, 0, 0, 0, 'single digit without carry', ' '),
('slide3', 1, 1, 2, 0, 'single digit without carry', ' '),
('slide4', 1, 1, 2, 0, 'single digit without carry', ' '),
('slide5', 1, 1, 2, 0, 'single digit without carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('s1', 0, 0, 0, 0, 'single digit without carry', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `fname` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  PRIMARY KEY (`fname`,`pname`),
  UNIQUE KEY `fname` (`fname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`fname`, `pname`) VALUES
('02 - taylor swift - ', ''),
('1.jpg', 'addition'),
('6pack1.jpg', 'works1'),
('add.gif', 'howtoadd'),
('arr1.jpg', 'test5'),
('arr2.jpg', 'sample'),
('arr4.jpg', 'try'),
('arr5.jpg.jpg', ''),
('g1.jpg', 'ramu'),
('g2.jpg', 'test5'),
('g3.jpg', 'try'),
('g4.gif', 'test3'),
('lake.jpg', 'try'),
('test.png', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uname` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `pword`, `type`) VALUES
('kannan', 'kv', 'author'),
('dinesh', 'ds', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `yeah`
--

CREATE TABLE IF NOT EXISTS `yeah` (
  `sname` varchar(20) NOT NULL,
  `cd` int(2) DEFAULT NULL,
  `de` int(2) DEFAULT NULL,
  `nde` int(5) DEFAULT NULL,
  `linked` int(2) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `result` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yeah`
--

INSERT INTO `yeah` (`sname`, `cd`, `de`, `nde`, `linked`, `lname`, `result`) VALUES
('hello', 0, 0, 0, 0, 'single digit without', ' ');
