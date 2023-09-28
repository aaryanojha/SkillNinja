-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2023 at 06:54 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillninja`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Address` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `City` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `State` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Zip` int DEFAULT NULL,
  `Card_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Card_Number` int DEFAULT NULL,
  `Expmonth` int DEFAULT NULL,
  `Expyear` int DEFAULT NULL,
  `Cvv` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Full_Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Card_Name`, `Card_Number`, `Expmonth`, `Expyear`, `Cvv`) VALUES
(1, 'aa', 'aa@gmail.com', 'aa', 'aa', 'aa', 123, 'aa', 121, 1, 1, 1),
(2, 'pranav', 'p@gmailcom', 'hi', 'nanded', 'maharstra', 431602, 'pranav', 1112, 0, 5, 602);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(33) NOT NULL,
  `name` varchar(33) NOT NULL,
  `pass` varchar(33) NOT NULL,
  `IsAdmin` tinyint NOT NULL,
  `loggedIn` tinyint NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fname`, `name`, `pass`, `IsAdmin`, `loggedIn`) VALUES
(1, '', 'pranav', 'aa', 1, 0),
(16, 'pranav', 'pppp123', 'pppp123', 1, 0),
(17, 'ww', 'wwww23', 'wwww23', 0, 0),
(18, 'qq', 'qqqq12', 'qqqq12', 0, 0),
(28, 'aa', 'sasa324', 'sasa324', 0, 0),
(25, 'aa', 'aaaa12', 'aaaa12', 0, 0),
(26, 'pp', 'pppp55', 'pppp55', 0, 0),
(27, 'aa', 'aaaa34', 'aaaa34', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`) VALUES
(8, 'html4.mp4'),
(7, 'html3.mp4'),
(6, 'html2.mp4'),
(5, 'html1.mp4'),
(9, 'html4.mp4'),
(10, 'html2.mp4'),
(11, 'html2.mp4'),
(12, 'html4.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
