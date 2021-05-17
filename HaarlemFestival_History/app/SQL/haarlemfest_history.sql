-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2021 at 08:24 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haarlemfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `Language_ID` int(50) NOT NULL,
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`Language_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`Language_ID`, `language`) VALUES
(20, 'English'),
(21, 'Dutch'),
(22, 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE IF NOT EXISTS `tours` (
  `Tour_ID` int(50) NOT NULL,
  `Time` time NOT NULL,
  `Duration` int(11) DEFAULT NULL,
  `Price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Tour_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`Tour_ID`, `Time`, `Duration`, `Price`) VALUES
(1, '10:00:00', 2, '17.50'),
(2, '13:00:00', 2, '17.50'),
(3, '16:00:00', 2, '17.50');

-- --------------------------------------------------------

--
-- Table structure for table `tour_language`
--

DROP TABLE IF EXISTS `tour_language`;
CREATE TABLE IF NOT EXISTS `tour_language` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Language_ID` int(50) NOT NULL,
  `Tour_id` int(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Tour_ID` (`Language_ID`),
  KEY `tour_language_ibfk_2` (`Tour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_language`
--

INSERT INTO `tour_language` (`ID`, `Language_ID`, `Tour_id`) VALUES
(50, 20, 1),
(51, 21, 1),
(52, 22, 1),
(53, 20, 2),
(54, 21, 2),
(55, 22, 2),
(56, 20, 3),
(57, 21, 3),
(58, 22, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour_language`
--
ALTER TABLE `tour_language`
  ADD CONSTRAINT `tour_language_ibfk_1` FOREIGN KEY (`Language_ID`) REFERENCES `language` (`Language_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tour_language_ibfk_2` FOREIGN KEY (`Tour_id`) REFERENCES `tours` (`Tour_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
