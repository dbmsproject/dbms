-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 12:42 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(32) NOT NULL,
  `f_name` varchar(1024) NOT NULL,
  `l_name` varchar(1024) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `phone_no` int(32) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `c_password` varchar(1024) NOT NULL,
  `spec` varchar(1024) NOT NULL,
  `qualification` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `f_name`, `l_name`, `email`, `phone_no`, `password`, `c_password`, `spec`, `qualification`) VALUES
(2001, 'abhinav', 'karna', 'abhinavkarn55@gmail.com', 234567, 'rajeeva66', 'rajeeva66', 'cardio', 'MBBS'),
(2002, 'abhinit', 'karna', 'abhinitkarn@hotmail.com', 123456, 'rajeeva667', 'rajeeva667', 'brain', 'MD'),
(2003, 'saurabh', 'kumar', 'example@live.com', 123456, 'gogo', 'gogo', 'bones', 'MBBS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
