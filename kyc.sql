-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 11:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kyc`
--
CREATE DATABASE IF NOT EXISTS `kyc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kyc`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10000) NOT NULL,
  `lname` varchar(10000) NOT NULL,
  `mobno` varchar(10000) NOT NULL,
  `dob` varchar(10000) NOT NULL,
  `file` varchar(10000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `mobno`, `dob`, `file`, `type`, `size`) VALUES
(1, 'dasdasda', 'dasdasda', '8655819463', '0000-00-00', '76670-challenger.png', 'image/png', '30.5986328125'),
(2, 'dasdasd', 'dadada', '8655819463', '0000-00-00', '10544-baladna-food.png', 'image/png', '79.916015625'),
(3, 'dasdasdas', 'dadada', '8655819463', '$', '90151-baladna-food.png', 'image/png', '79.916015625'),
(4, 'dsfsdfsd', 'fsdfsf', '96324589', '$', '97043-baladna-food.png', 'image/png', '79.916015625');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
