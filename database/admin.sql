-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2015 at 09:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(250) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dname` varchar(250) NOT NULL,
  `pnumber` int(11) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `etype` varchar(250) NOT NULL,
  `eattendees` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `dvenue` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `userid`, `name`, `dname`, `pnumber`, `emailid`, `etype`, `eattendees`, `date`, `dvenue`, `price`, `status`, `description`) VALUES
(19, 23, 'hjklfkj', 'lohgftdhg', 2147483647, '*E-MAIL ID', 'Summer Conferences', '500+', '07/01/2015', '11', '25000/- INR', 1, 'hfdgfsrdfkjkn'),
(21, 23, 'sdsadsad', 'sdasdsd', 2147483647, 'yadavsurendra828gmail.com', 'Meetings and Conferences', '1 to 10', '07/21/2015', '17', '15000/- INR', 0, 'zxczxc'),
(23, 23, 'ccccc', 'cfdfdgf', 1234567890, 'yadavsurendra828@gmail.com', 'Meetings and Conferences', '11 to 50', '07/26/2015', '14', '15000/- INR', 2, 'asdasdasdas'),
(24, 31, 'hjhgjggh', 'jhghjgjgj', 878778787, 'hkjhyadavsurendra828gmail.com', 'Summer Conferences', '201 to 500', '07/23/2015', '12', '75000/- INR', 1, 'gjhghgjgjgjghjgj');

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE IF NOT EXISTS `event_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `description` varchar(1020) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event_table`
--

INSERT INTO `event_table` (`id`, `event_name`, `description`) VALUES
(3, 'yes', 'xzcvcv'),
(4, 'birthday', 'fsdjfhsjdfhkhksdf');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(1020) NOT NULL,
  `img_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `img_date`) VALUES
(7, 'image/event-management-pictures-31-728.jpg', NULL),
(8, 'image/2.jpg', NULL),
(9, 'image/home1.jpg', NULL),
(10, 'image/', NULL),
(11, 'image/', NULL),
(12, 'image/', NULL),
(13, 'image/', NULL),
(14, 'image/', NULL),
(15, 'image/', NULL),
(16, 'image/', NULL),
(17, 'image/', NULL),
(18, 'image/', NULL),
(19, 'image/', NULL),
(20, 'image/', NULL),
(21, 'image/', NULL),
(22, 'image/', NULL),
(23, 'image/', NULL),
(24, 'image/', NULL),
(25, 'image/', NULL),
(26, 'image/', NULL),
(27, 'image/', NULL),
(28, 'image/', NULL),
(29, 'image/', NULL),
(30, 'image/', NULL),
(31, 'image/', NULL),
(32, 'image/', NULL),
(33, 'image/', NULL),
(34, 'image/', NULL),
(35, 'image/', NULL),
(36, 'image/', NULL),
(37, 'image/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `passid` varchar(32) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passid`, `name`, `address`, `country`, `zip`, `email`, `gender`) VALUES
(22, 'sannu', '25d55ad283aa400af464c76d713c07ad', 'Surendra', 'asdasdaA1', 'IN', 332603, 'yadavsurendra828@gmail.com', 'Male'),
(23, 'surendra', '25d55ad283aa400af464c76d713c07ad', 'surendra', 'asdasA11', 'IN', 333333, 'yadavsurendra828@gmail.com', 'Male'),
(24, 'kumarsanu', '25d55ad283aa400af464c76d713c07ad', 'Surendra', 'asdasAA1', 'AL', 332603, 'yadavsurendra828@gmail.com', 'Male'),
(30, 'dik', '25d55ad283aa400af464c76d713c07ad', 'deeksha', 'assdasA1', 'CA', 1111111, 'diksha.235@outlook.com', 'Female'),
(31, 'bhgya12', '25d55ad283aa400af464c76d713c07ad', 'deeksha', 'sdfsdAa1', 'CA', 560083, 'diksha.235@outlook.com', 'Female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
