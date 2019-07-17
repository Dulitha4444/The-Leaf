-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2019 at 01:13 PM
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
-- Database: `leaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_person`
--

DROP TABLE IF EXISTS `answer_person`;
CREATE TABLE IF NOT EXISTS `answer_person` (
  `id` int(11) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `town` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `salary` double NOT NULL,
  `gender` varchar(10) NOT NULL,
  `race` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

DROP TABLE IF EXISTS `questionnaire`;
CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `answer1` tinyint(25) DEFAULT NULL,
  `answer2` tinyint(25) DEFAULT NULL,
  `answer3` tinyint(25) DEFAULT NULL,
  `answer4` tinyint(25) DEFAULT NULL,
  `answer5` tinyint(25) DEFAULT NULL,
  `answer6` tinyint(25) DEFAULT NULL,
  `answer7` tinyint(25) DEFAULT NULL,
  `answer8` tinyint(255) DEFAULT NULL,
  `answer9` tinyint(25) DEFAULT NULL,
  `answer10` tinyint(25) DEFAULT NULL,
  `answer11` tinyint(25) DEFAULT NULL,
  `answer12` tinyint(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) DEFAULT NULL,
  `questions` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
