-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2019 at 04:02 PM
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
  `ftypes` varchar(255) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`user_id`, `user_name`, `last_name`, `age`, `nation`, `veg`, `ftypes`, `ptype`, `ftimes`, `address`, `email`, `password`, `recive_date`, `code1`, `code2`, `code3`) VALUES
(29, 'thilina', 'ss', '1', '2', '2', NULL, '2', '1', 'America', 'Thisum44@gmail.com', '011494875', '2019-08-29', NULL, NULL, NULL);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_name`, `user_password`, `user_type`) VALUES
(29, 'thilina', '011494875', 'customer');

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
  `veg` varchar(255) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_registration`
--

INSERT INTO `shop_registration` (`id`, `user_name`, `shop_name`, `food_type`, `veg`, `upload_picture`, `F_vp`, `F_od`, `S_vp`, `S_od`, `Drive`, `email`, `password`, `recive_date`) VALUES
(9, 'Thisun', 'Pizza Hut', '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '', '450-4506999_tea-leaf-logo-clip-art-tea-leaves (1).png', '400', '   20%', '1000', '   50%', 'yes', 'Thisum44@gmail.com', '4444', '2019-08-11'),
(8, 'Thisun', 'Pizza Hut', '[\"2\",\"3\",\"4\",\"5\"]', '', '450-4506999_tea-leaf-logo-clip-art-tea-leaves (1).png', '400', '   20%', '1000', '   50%', 'yes', 'Thisum44@gmail.com', '4444', '2019-08-11'),
(10, 'Pieushan', 'Pizza Hut', '[\"Sri Lankan\",\"Indian\",\"Thai\",\"Chaineese\",\"Mexican\"]', '', 'Capture 1.PNG', '1000', '   40%', '1500', '   60%', 'yes', 'Thisum44@gmail.com', '4444', '2019-08-11'),
(11, 'Dulitha', 'KFC', '[\"Sri Lankan\",\"Indian\",\"Chaineese\",\"Mexican\"]', 'Non-Vegeterian', 'logo.jpeg', '400', '  40 %', '1000', '   50%', 'yes', 'Thisum44@gmail.com', '1234', '2019-08-29'),
(12, 'Dulitha', 'KFC', '[\"Sri Lankan\"]', 'Non-Vegeterian', 'main2.jpg', '44', '   4%', '44', '   4%', 'yes', 'Thisum44@gmail.com', '44', '2019-08-29'),
(13, 'Dulitha', 'KFC', '[\"Sri Lankan\"]', 'Non-Vegeterian', 'main2.jpg', '44', '   4%', '44', '   4%', 'yes', 'Thisum44@gmail.com', '44', '2019-08-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
