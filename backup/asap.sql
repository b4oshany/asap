-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2012 at 08:49 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asap`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` varchar(15) DEFAULT NULL,
  `fac_id` varchar(10) NOT NULL,
  `dep_name` varchar(25) DEFAULT NULL,
  `dep_orate` int(10) DEFAULT NULL,
  `dep_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_id`, `fac_id`, `dep_name`, `dep_orate`, `dep_date`) VALUES
(1, 'computedep', 'fsat', 'Computing', NULL, NULL),
(2, 'mathdep', 'fsat', 'Mathematics', NULL, NULL),
(3, 'chemdep', 'fsat', 'Chemistry', NULL, NULL),
(4, 'physdep', 'fsat', 'Physics', NULL, NULL),
(5, 'psycdep', 'fss', 'Psycology', NULL, NULL),
(6, 'manstuddep', 'fss', 'Management Studies', NULL, NULL),
(7, 'phildep', 'fh', 'Philosophy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dep_comp_courses`
--

CREATE TABLE IF NOT EXISTS `dep_comp_courses` (
  `id` int(10) NOT NULL DEFAULT '0',
  `ccode` varchar(15) NOT NULL,
  `coursename` text NOT NULL,
  `depid` varchar(10) NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_comp_courses`
--

INSERT INTO `dep_comp_courses` (`id`, `ccode`, `coursename`, `depid`, `orate`, `date`) VALUES
(0, 'comp2240', 'Software Engineering', 'computedep', 5, '0000-00-00'),
(0, 'comp2240', 'Software Engineering', 'computedep', 6, '0000-00-00'),
(0, 'comp2240', 'Software Engineering', 'computedep', 4, '0000-00-00'),
(0, 'comp2110', 'Descrete Maths', 'computedep', 4, '0000-00-00'),
(0, 'comp2110', 'Descrete Maths', 'computedep', 5, '0000-00-00'),
(0, 'comp2110', 'Descrete Maths', 'computedep', 2, '0000-00-00'),
(0, 'math1141', 'Linear Mathematics', 'computedep', 2, '0000-00-00'),
(0, 'math1141', 'Linear Mathematics', 'computedep', 3, '0000-00-00'),
(0, 'math1141', 'Linear Mathematics', 'computedep', 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `dep_maths_courses`
--

CREATE TABLE IF NOT EXISTS `dep_maths_courses` (
  `id` int(10) NOT NULL DEFAULT '0',
  `ccode` varchar(15) NOT NULL,
  `coursename` text NOT NULL,
  `depid` varchar(10) NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_maths_courses`
--

INSERT INTO `dep_maths_courses` (`id`, `ccode`, `coursename`, `depid`, `orate`, `date`) VALUES
(0, 'math1141', 'Linear Mathematics', 'mathdep', 2, '0000-00-00'),
(0, 'math1141', 'Linear Mathematics', 'mathdep', 4, '0000-00-00'),
(0, 'math1141', 'Linear Mathematics', 'mathdep', 3, '0000-00-00'),
(0, 'math1142', 'Calculus 1', 'mathdep', 3, '0000-00-00'),
(0, 'math1142', 'Calculus 1', 'mathdep', 4, '0000-00-00'),
(0, 'math1142', 'Calculus 1', 'mathdep', 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_id` varchar(10) NOT NULL,
  `fac_name` text NOT NULL,
  `orate` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `fac_id`, `fac_name`, `orate`, `date`) VALUES
(1, 'fh', 'Faculity of Humanities', 5, '2012-12-07'),
(2, 'fss', 'Faculity of Social Sciences', 3, '2012-12-07'),
(3, 'fsat', 'Faculty of Science and Techology', 3, '2012-12-07'),
(4, 'fl', 'Faculty of Law', 4, '2012-12-07'),
(5, 'fms', 'Faculty of Medical Sciences', 2, '2012-12-07'),
(6, 'fh', 'Faculty of Humanities', 5, '2011-10-12'),
(7, 'fh', 'Faculty of Humanities', 5, '2010-09-22'),
(8, 'fss', 'Faculty of Social Sciences', 5, '2011-11-16'),
(9, 'fss', 'Faculty of Social Sciences', 4, '2010-10-12'),
(10, 'fl', 'Faculty of Law', 4, '2011-10-20'),
(11, 'fl', 'Faculty of Law', 4, '2010-10-08'),
(12, 'fsat', 'Faculty of Science and Technology', 2, '2011-09-15'),
(13, 'fsat', 'Faculty of Science and Technology', 3, '2010-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `fh_lecturer`
--

CREATE TABLE IF NOT EXISTS `fh_lecturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lect_id` varchar(15) NOT NULL,
  `dep_id` varchar(10) NOT NULL,
  `lect_name` text NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `ccode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contains the information of each lecturer' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fh_lecturer`
--

INSERT INTO `fh_lecturer` (`id`, `lect_id`, `dep_id`, `lect_name`, `orate`, `date`, `fac_id`, `ccode`) VALUES
(1, '620041122', 'phildep', 'Petagay Hens', 4, '2011-08-18', 'fh', NULL),
(2, '620041122', 'phildep', 'Petagay Hens', 4, '2012-12-06', 'fh', NULL),
(3, '620041122', 'phildep', 'Petagay Hens', 5, '2010-10-13', 'fh', NULL),
(4, '620041111', 'phildep', 'Rocsine Lewis', 5, '2010-10-12', 'fh', NULL),
(5, '620041111', 'phildep', 'Rocsine Lewis', 5, '2011-09-15', 'fh', NULL),
(6, '620041111', 'phildep', 'Rocsine Lewis', 4, '2012-12-06', 'fh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fl_lecturer`
--

CREATE TABLE IF NOT EXISTS `fl_lecturer` (
  `id` int(11) NOT NULL DEFAULT '0',
  `lect_id` varchar(15) NOT NULL,
  `dep_id` varchar(10) NOT NULL,
  `lect_name` text NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `ccode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fms_lecturer`
--

CREATE TABLE IF NOT EXISTS `fms_lecturer` (
  `id` int(11) NOT NULL DEFAULT '0',
  `lect_id` varchar(15) NOT NULL,
  `dep_id` varchar(10) NOT NULL,
  `lect_name` text NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `ccode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fsat_lecturer`
--

CREATE TABLE IF NOT EXISTS `fsat_lecturer` (
  `id` int(11) NOT NULL DEFAULT '0',
  `lect_id` varchar(15) NOT NULL,
  `dep_id` varchar(10) NOT NULL,
  `lect_name` text NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `ccode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fsat_lecturer`
--

INSERT INTO `fsat_lecturer` (`id`, `lect_id`, `dep_id`, `lect_name`, `orate`, `date`, `fac_id`, `ccode`) VALUES
(0, '620042528', 'computedep', 'Oshane Bailey', 5, '0000-00-00', 'fsat', NULL),
(0, '620041111', 'computedep', 'Damion Lowers', 3, '0000-00-00', 'fsat', NULL),
(0, '620042528', 'computedep', 'Oshane Bailey', 4, '0000-00-00', 'fsat', NULL),
(0, '620042528', 'computedep', 'Oshane Bailey', 5, '0000-00-00', 'fsat', NULL),
(0, '620041111', 'computedep', 'Damion Lowers', 4, '0000-00-00', 'fsat', NULL),
(0, '620041111', 'computedep', 'Damion Lowers', 5, '0000-00-00', 'fsat', NULL),
(0, '620041112', 'phildep', 'Rocsine Lewis', 5, '0000-00-00', 'fh', NULL),
(0, '620041122', 'phildep', 'Petagay Hens', 4, '0000-00-00', 'fh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fss_lecturer`
--

CREATE TABLE IF NOT EXISTS `fss_lecturer` (
  `id` int(11) NOT NULL DEFAULT '0',
  `lect_id` varchar(15) NOT NULL,
  `dep_id` varchar(10) NOT NULL,
  `lect_name` text NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `ccode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ugrad_comp_results`
--

CREATE TABLE IF NOT EXISTS `ugrad_comp_results` (
  `id` int(100) NOT NULL DEFAULT '0',
  `ques_id` varchar(15) NOT NULL,
  `ccode` varchar(15) NOT NULL,
  `lect_id` varchar(15) NOT NULL,
  `module` int(5) NOT NULL,
  `date` year(4) NOT NULL,
  `sex` text NOT NULL,
  `yos` int(5) NOT NULL,
  `age` varchar(10) NOT NULL,
  `regs` text NOT NULL,
  `rate_1` int(10) NOT NULL,
  `rate_2` int(10) NOT NULL,
  `rate_3` int(10) NOT NULL,
  `rate_4` int(10) NOT NULL,
  `rate_5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrad_comp_results`
--

INSERT INTO `ugrad_comp_results` (`id`, `ques_id`, `ccode`, `lect_id`, `module`, `date`, `sex`, `yos`, `age`, `regs`, `rate_1`, `rate_2`, `rate_3`, `rate_4`, `rate_5`) VALUES
(19, 'ques1_comp', 'COMP2240', '620041228', 6, 2012, 'male', 2, 'young', 'pt', 0, 2, 0, 0, 0),
(20, 'ques2_comp', 'COMP2240', '620041228', 6, 2012, 'male', 2, 'young', 'pt', 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ugrad_courses`
--

CREATE TABLE IF NOT EXISTS `ugrad_courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ccode` varchar(15) NOT NULL,
  `coursename` text NOT NULL,
  `depid` varchar(10) NOT NULL,
  `orate` int(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ugrad_math_results`
--

CREATE TABLE IF NOT EXISTS `ugrad_math_results` (
  `id` int(100) NOT NULL DEFAULT '0',
  `ques_id` varchar(15) NOT NULL,
  `ccode` varchar(15) NOT NULL,
  `lect_id` varchar(15) NOT NULL,
  `module` int(5) NOT NULL,
  `date` year(4) NOT NULL,
  `sex` text NOT NULL,
  `yos` int(5) NOT NULL,
  `age` varchar(10) NOT NULL,
  `regs` text NOT NULL,
  `rate_1` int(10) NOT NULL,
  `rate_2` int(10) NOT NULL,
  `rate_3` int(10) NOT NULL,
  `rate_4` int(10) NOT NULL,
  `rate_5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrad_math_results`
--

INSERT INTO `ugrad_math_results` (`id`, `ques_id`, `ccode`, `lect_id`, `module`, `date`, `sex`, `yos`, `age`, `regs`, `rate_1`, `rate_2`, `rate_3`, `rate_4`, `rate_5`) VALUES
(19, 'ques1_comp', 'COMP2240', '620041228', 6, 2012, 'male', 2, 'young', 'pt', 0, 2, 0, 0, 0),
(20, 'ques2_comp', 'COMP2240', '620041228', 6, 2012, 'male', 2, 'young', 'pt', 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ugrad_results`
--

CREATE TABLE IF NOT EXISTS `ugrad_results` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ques_id` varchar(15) NOT NULL,
  `ccode` varchar(15) NOT NULL,
  `lect_id` varchar(15) NOT NULL,
  `module` int(5) NOT NULL,
  `date` year(4) NOT NULL,
  `sex` text NOT NULL,
  `yos` int(5) NOT NULL,
  `age` varchar(10) NOT NULL,
  `regs` text NOT NULL,
  `rate_1` int(10) NOT NULL,
  `rate_2` int(10) NOT NULL,
  `rate_3` int(10) NOT NULL,
  `rate_4` int(10) NOT NULL,
  `rate_5` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ugrad_results`
--

INSERT INTO `ugrad_results` (`id`, `ques_id`, `ccode`, `lect_id`, `module`, `date`, `sex`, `yos`, `age`, `regs`, `rate_1`, `rate_2`, `rate_3`, `rate_4`, `rate_5`) VALUES
(19, 'ques1_comp', 'COMP2240', '620041228', 6, 2012, 'male', 2, 'young', 'pt', 0, 2, 0, 0, 0),
(20, 'ques2_comp', 'COMP2240', '620041228', 6, 2012, 'male', 2, 'young', 'pt', 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `passer` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passer`) VALUES
(1, 'oshany', '32250170a0dca92d53ec9624f336ca24'),
(3, ':user', ':pass'),
(4, 'bailey', 'dfb2576a6828ca862396db19cf4590e2'),
(5, 'oshany', '7d0df4f46505d83bc7949dd1fb9c0db8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
