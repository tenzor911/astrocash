-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2014 at 06:43 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `loto_ticket_info`
--

CREATE TABLE IF NOT EXISTS `loto_ticket_info` (
  `tkt_id_num` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id_num` int(11) NOT NULL,
  `num_first` int(11) NOT NULL,
  `num_second` int(11) NOT NULL,
  `num_third` int(11) NOT NULL,
  `num_fourth` int(11) NOT NULL,
  `num_fifth` int(11) NOT NULL,
  `num_sixth` int(11) NOT NULL,
  PRIMARY KEY (`tkt_id_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reg_profile`
--

CREATE TABLE IF NOT EXISTS `reg_profile` (
  `usr_id_num` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name_first` varchar(30) NOT NULL,
  `usr_name_last` varchar(60) NOT NULL,
  `usr_name_mid` varchar(60) NOT NULL,
  `usr_mail` varchar(60) NOT NULL,
  `usr_phone_number` varchar(12) NOT NULL,
  PRIMARY KEY (`usr_id_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
