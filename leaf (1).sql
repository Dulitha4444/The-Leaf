-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2019 at 09:04 AM
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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `recive_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

DROP TABLE IF EXISTS `customer_registration`;
CREATE TABLE IF NOT EXISTS `customer_registration` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recive_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`user_id`, `user_name`, `last_name`, `gender`, `age`, `nation`, `address`, `email`, `password`, `recive_date`) VALUES
(10, 'Thisun', 'Pieushan', '1', 24, '2', 'Panadura', 'Thisum44@gmail.com', '44', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

DROP TABLE IF EXISTS `questionnaire`;
CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `answer1` tinyint(25) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` tinyint(25) NOT NULL,
  `answer4` tinyint(25) NOT NULL,
  `answer5` varchar(255) NOT NULL,
  `answer6` tinyint(25) NOT NULL,
  `answer7` tinyint(25) NOT NULL,
  `answer8` tinyint(255) NOT NULL,
  `answer9` tinyint(25) NOT NULL,
  `answer10` tinyint(25) NOT NULL,
  `answer11` tinyint(25) NOT NULL,
  `answer12` tinyint(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`, `answer11`, `answer12`) VALUES
(1, 2, '5', 1, 1, '1', 3, 1, 2, 3, 2, 4, 1),
(2, 1, '5', 1, 2, '2', 3, 1, 2, 3, 2, 2, 2),
(3, 2, '4', 1, 2, '4', 2, 2, 2, 3, 2, 2, 2),
(4, 1, '2', 1, 1, '1', 2, 1, 2, 3, 1, 2, 1),
(5, 1, '3', 1, 2, '', 2, 2, 2, 3, 2, 4, 2),
(6, 1, '3', 1, 2, '', 2, 2, 2, 3, 2, 4, 2),
(7, 1, '2', 1, 2, '', 3, 2, 3, 3, 2, 3, 2),
(8, 2, '3', 1, 2, '1', 3, 2, 2, 3, 2, 4, 2),
(11, 2, '3', 1, 1, '[\"1\",\"2\",\"3\",\"4\"]', 3, 2, 4, 3, 2, 4, 2),
(10, 2, '3', 1, 1, '[\"1\",\"2\",\"3\",\"4\"]', 3, 2, 4, 3, 2, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) DEFAULT NULL,
  `questions` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_registration`
--

DROP TABLE IF EXISTS `shop_registration`;
CREATE TABLE IF NOT EXISTS `shop_registration` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `upload_picture` varchar(255) NOT NULL,
  `F_od` varchar(255) NOT NULL,
  `S_od` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recive_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_registration`
--

INSERT INTO `shop_registration` (`id`, `user_name`, `shop_name`, `food_type`, `upload_picture`, `F_od`, `S_od`, `email`, `password`, `recive_date`) VALUES
(1, 'Thisun', 'KFC', '[\"1\",\"2\",\"4\"]', 'Food 1.jpg', '  40%', '   40%', 'Thisum44@gmail.com', '4444', '2019-08-10'),
(7, 'Thisun', 'KFC', '[\"1\",\"2\",\"4\"]', 'Food 1.jpg', '  40%', '   40%', 'Thisum44@gmail.com', '6666', '2019-08-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
