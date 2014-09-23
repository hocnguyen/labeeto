-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2014 at 09:02 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labeeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `user_id`, `date`) VALUES
(1, 'WHAT IS THE LAST MOVIE YOU WATCHED?', 'The Godfather Trilogy', 41, '0000-00-00 00:00:00'),
(2, 'MY PERFECT SUNDAY', 'DARK', 41, '0000-00-00 00:00:00'),
(3, 'WHAT IS YOUR CAR MAKE?', 'Honda', 41, '0000-00-00 00:00:00'),
(4, 'WHO IS YOUR CELEBRITY CRUSH?', 'Jennifer Lawrence', 41, '0000-00-00 00:00:00'),
(5, 'WHAT IS THE LAST MOVIE YOU WATCHED?', 'The Godfather Trilogy', 41, '0000-00-00 00:00:00');
