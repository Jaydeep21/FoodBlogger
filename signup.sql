-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 03:39 PM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `phone`, `dob`, `gender`, `password`) VALUES
(2, 'Jaydeep', 'Dharamsey', 'jaydeepdharamsey21@gmail.com', 8080436593, '1998-04-21', 'm', 'asdf1234'),
(3, 'Abhishek', 'Patel', 'abhishekrock171@gmail.com', 9769602025, '1998-11-04', 'm', 'abhi1234'),
(4, 'Mihit', 'Chheda', 'rockingmihit@gmail.com', 9820902280, '1998-11-12', 'm', 'mihit1234'),
(5, 'Nimeesh', 'Bagwe', 'bagwe.nimeesh4@gmail.com', 9869187670, '1999-04-06', 'm', 'nimya1234'),
(6, 'Prasad', 'Awate', 'prasad.awate@sakec.ac.in', 8097651700, '1998-08-24', 'm', 'prasad1234'),
(7, 'Swati', 'Gajbhiye', 'swati.gajbhiye@sakec.ac.in', 1234567890, '1998-04-21', 'f', 'swati1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
