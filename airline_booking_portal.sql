-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 12:44 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_booking_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `domestic`
--

CREATE TABLE IF NOT EXISTS `domestic` (
  `name` varchar(30) NOT NULL,
  `id_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` varchar(2) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `timing` varchar(30) NOT NULL,
  `airline_from` varchar(30) NOT NULL,
  `airline_to` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domestic`
--

INSERT INTO `domestic` (`name`, `id_no`, `email`, `age`, `phone_no`, `date`, `timing`, `airline_from`, `airline_to`) VALUES
('', '', '', '21', '9007515391', '2017-11-22', '8:00', 'CCU', 'CAA'),
('aneesh', '', 'sb87490@gmail.com', '21', '9007515391', '2017-11-22', '8:00', 'CCU', 'CAA'),
('Subrata Bhattacharjee', '4566316', 'sb87490@gmail.com', '21', '9007515391', '2017-11-22', '8:00', 'CCU', 'CAA');

-- --------------------------------------------------------

--
-- Table structure for table `international`
--

CREATE TABLE IF NOT EXISTS `international` (
  `name` varchar(30) NOT NULL,
  `id_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `timing` varchar(30) NOT NULL,
  `airline_from` varchar(30) NOT NULL,
  `airline_to` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international`
--

INSERT INTO `international` (`name`, `id_no`, `email`, `age`, `phone_no`, `date`, `timing`, `airline_from`, `airline_to`) VALUES
('Subrata Bhattacharjee', '45286525', 'sb87490@gmail.com', '21', '9007515391', '2017-11-21', '10:30', 'CCU', 'CAA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domestic`
--
ALTER TABLE `domestic`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `international`
--
ALTER TABLE `international`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
