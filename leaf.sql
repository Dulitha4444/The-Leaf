-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2019 at 10:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `phone_number`, `email`, `reply`, `recive_date`) VALUES
(7, 'Dulitha', 4444, 'Thisum44@gmail.com', 'Hiiiiiiiiiiiiiiiiiiiiiiiiii', '2019-08-10'),
(6, 'Thisun', 4444, 'Thisum44@gmail.com', 'hi', '2019-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `customer_lvl_1`
--

DROP TABLE IF EXISTS `customer_lvl_1`;
CREATE TABLE IF NOT EXISTS `customer_lvl_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code1` varchar(20) DEFAULT NULL,
  `code2` varchar(20) DEFAULT NULL,
  `code3` varchar(20) DEFAULT NULL,
  `lvl1` int(11) DEFAULT NULL,
  `shop1` varchar(100) NOT NULL,
  `shop2` varchar(100) NOT NULL,
  `shop3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_lvl_1`
--

INSERT INTO `customer_lvl_1` (`id`, `user_id`, `code1`, `code2`, `code3`, `lvl1`, `shop1`, `shop2`, `shop3`) VALUES
(1, 1, 'complete', NULL, NULL, NULL, '1', '', ''),
(2, 121, 'complete', 'complete', NULL, NULL, '6', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

DROP TABLE IF EXISTS `customer_registration`;
CREATE TABLE IF NOT EXISTS `customer_registration` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `veg` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `ftimes` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recive_date` date DEFAULT NULL,
  `code1` varchar(255) DEFAULT NULL,
  `code2` varchar(255) DEFAULT NULL,
  `code3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`user_id`, `user_name`, `last_name`, `age`, `nation`, `veg`, `ptype`, `ftimes`, `address`, `email`, `password`, `recive_date`, `code1`, `code2`, `code3`) VALUES
(115, 'thilina', 'robb', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '316516', '2019-01-05', NULL, NULL, NULL),
(113, 'thilina', 'robb', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '316516', '2019-01-10', NULL, NULL, NULL),
(112, 'Dulitha', 'Sophia', '2', '1', '1', '1', '1', 'America', 'Thisum44@gmail.com', 'dsf', '2019-01-20', NULL, NULL, NULL),
(105, 'thilina', 'robb', '2', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '1111', '2019-02-05', NULL, NULL, NULL),
(106, 'thilina', 'Pieushan', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '3313', '2019-02-20', NULL, NULL, NULL),
(107, 'thilina', 'Pieushan', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '3313', '2019-02-24', NULL, NULL, NULL),
(108, 'thilina', 'Pieushan', '2', '1', '1', '1', '1', 'America', 'Thisum44@gmail.com', '2121212', '2019-02-25', NULL, NULL, NULL),
(109, 'Dulitha', 'Pieushan', '2', '1', '1', '1', '1', 'America', 'Thisum44@gmail.com', 'dfsdfdf', '2019-03-05', NULL, NULL, NULL),
(110, 'thilina', 'ss', '2', '1', '1', '1', '1', 'Panadura', 'Thisun44@gmail.com', 'sdfsdf', '2019-03-07', NULL, NULL, NULL),
(104, 'Dulitha', 'Pieushan', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '111111111', '2019-03-21', NULL, NULL, NULL),
(119, 'Dulitha', 'robb', '3', '1', '1', '1', '1', 'Gampaha', 'Thisum44@gmail.com', '311', '2019-04-05', NULL, NULL, NULL),
(117, 'thilina', 'robb', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '316516', '2019-04-07', NULL, NULL, NULL),
(114, 'thilina', 'robb', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '316516', '2019-04-15', NULL, NULL, NULL),
(118, 'thilina', 'robb', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '316516', '2019-04-20', NULL, NULL, NULL),
(111, 'Dulitha', 'Sophia', '2', '1', '1', '1', '1', 'America', 'Thisum44@gmail.com', 'dfsdfsd', '2019-04-21', NULL, NULL, NULL),
(116, 'thilina', 'robb', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '316516', '2019-05-05', NULL, NULL, NULL),
(93, 'Thisun', 'Pieushan', '3', '4', '1', '1', '2', 'Panadura', 'Thisum44@gmail.comds', '4444', '2019-05-07', NULL, NULL, NULL),
(94, 'Anna', 'Sophia', '2', '4', '1', '2', '2', 'Panadura', 'Thisum44@gmail.com', '7777', '2019-05-21', '44', '44', '44'),
(95, 'Anna', 'Sophia', '2', '4', '1', '2', '2', 'Panadura', 'Thisum44@gmail.com', '111', '2019-06-05', NULL, NULL, NULL),
(96, 'Anna', 'Sophia', '2', '4', '1', '2', '2', 'Panadura', 'Thisum44@gmail.com', '111', '2019-07-05', NULL, NULL, NULL),
(97, 'thilina', 'Pieushan', '2', '1', '2', '1', '1', 'America', 'Thisum44@gmail.com', '11111', '2019-07-05', NULL, NULL, NULL),
(98, 'Dulitha', 'Pieushan', '3', '2', '1', '2', '3', 'Gampaha', 'Thisun44@gmail.com', '11111', '2019-07-05', NULL, NULL, NULL),
(99, 'thilina', 'robb', '2', '2', '2', '2', '4', 'America', 'Thisun44@gmail.com', '11111', '2019-08-05', NULL, NULL, NULL),
(100, 'thilina', 'robb', '2', '2', '2', '2', '4', 'America', 'Thisun44@gmail.com', '11111', '2019-09-05', NULL, NULL, NULL),
(101, 'thilina', 'robb', '2', '3', '2', '1', '1', 'Panadura', 'Thisum44@gmail.com', '1234', '2019-09-05', NULL, NULL, NULL),
(102, 'thilina', 'robb', '2', '1', '1', '1', '1', 'America', 'Thisum44@gmail.com', '11111', '2019-09-05', NULL, NULL, NULL),
(103, 'thilina', 'Pieushan', '3', '1', '1', '1', '1', 'Panadura', 'Thisum44@gmail.com', '111111', '2019-09-05', NULL, NULL, NULL),
(120, 'Dulitha', 'robb', '3', '1', '1', '1', '1', 'Gampaha', 'Thisum44@gmail.com', '311', '2019-09-05', NULL, NULL, NULL),
(121, 'Dulitha', 'robb', '3', '2', '1', '1', '2', 'Gampaha', 'Thisum44@gmail.com', '311', '2019-09-05', '123', '123', NULL),
(122, 'Dulitha', 'Pieushan', '2', '1', '2', '1', '4', 'Panadura', 'Thisun44@gmail.com', '1234', '2019-09-10', NULL, NULL, NULL),
(123, 'Pieushan', 'Thisun', '2', '1', '2', '1', '4', 'Panadura', 'Thisum44@gmail.com', '7777', '2019-09-10', NULL, NULL, NULL),
(124, 'Thisun', 'Pieushan', '2', '1', '2', '1', '4', 'Panadura', 'Thisum44@gmail.com', '4444', '2019-09-10', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
CREATE TABLE IF NOT EXISTS `login_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_id_fk` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_name`, `user_password`, `user_type`, `user_id_fk`) VALUES
(107, 'Nisal', '4444', 'customer', NULL),
(106, 'gggg', '4444', 'customer', NULL),
(105, 'gggg', '4444', 'customer', NULL),
(104, 'gggg', '4444', 'customer', NULL),
(103, 'gggg', '4444', 'customer', NULL),
(102, 'gggg', '4444', 'customer', NULL),
(101, '', '', 'customer', NULL),
(100, '', '', 'customer', NULL),
(99, '', '', 'customer', NULL),
(98, '', '', 'customer', NULL),
(97, '', '', 'customer', NULL),
(96, '', '', 'customer', NULL),
(95, '', '', 'customer', NULL),
(94, 'thilina', '11111', 'customer', NULL),
(93, '', '', 'customer', NULL),
(92, '', '', 'customer', NULL),
(91, '', '', 'customer', NULL),
(90, '', '', 'customer', NULL),
(89, 'Dulitha', '4444', 'customer', NULL),
(88, 'Dulitha', '1111', 'customer', 59),
(87, 'Anna', '4444', 'customer', 58),
(108, 'thilina', '', 'customer', NULL),
(109, '', '', 'customer', NULL),
(110, 'thilina', '', 'customer', NULL),
(111, 'ee', '4444', 'customer', NULL),
(151, 'Thisun', '4444', 'customer', 124);

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
-- Table structure for table `reply_message`
--

DROP TABLE IF EXISTS `reply_message`;
CREATE TABLE IF NOT EXISTS `reply_message` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_msg` varchar(255) NOT NULL,
  `reply_msg` varchar(255) NOT NULL,
  `send_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_message`
--

INSERT INTO `reply_message` (`id`, `cust_name`, `cust_email`, `cust_msg`, `reply_msg`, `send_date`) VALUES
(1, 'Dulitha', 'Thisum44@gmail.com', 'Hiiiiiiiiiiiiiiiiiiiiiiiiii', 'aaaaaaaaaaaaaaaaaaaaa', '2019-08-21');

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
  `F_vp` varchar(255) NOT NULL,
  `F_od` varchar(255) NOT NULL,
  `S_vp` varchar(255) NOT NULL,
  `S_od` varchar(255) NOT NULL,
  `Drive` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recive_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_registration`
--

INSERT INTO `shop_registration` (`id`, `user_name`, `shop_name`, `food_type`, `upload_picture`, `F_vp`, `F_od`, `S_vp`, `S_od`, `Drive`, `email`, `password`, `recive_date`) VALUES
(14, 'Dilki', 'Pizza Hut', '[2,3,4,5]', 'Pizza Hut.PNG', '600', '   20%', '1000', '   40%', 'yes', 'Thisum44@gmail.com', '1234', '2019-09-10'),
(12, 'Anna', 'Chineese Dragaon Cafe', '[1,2,3,4]', 'Chinese Dragon Cafe.PNG', '600', '   20%', '800', '   40%', 'yes', 'Thisum44@gmail.com', '7777', '2019-09-10'),
(10, 'Thisun', 'MacDonalds', '[4,5]', 'McDonalds.png', '500', '   20%', '600', '   40%', 'yes', 'Thisum44@gmail.com', '6666', '2019-09-10'),
(11, 'Pieushan', 'Burger King', '[2,4,5]', 'Burger King.PNG', '400', '   20%', '1000', '   50%', 'yes', 'Thisum44@gmail.com', '1111', '2019-09-10'),
(9, 'Dulitha', 'KFC', '[2,4,5]', 'KFC.PNG', '400', '   40%', '600', '   60%', 'yes', 'Thisum44@gmail.com', '4444', '2019-09-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
