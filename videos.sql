-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 01:27 PM
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
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `cusine` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `videol` varchar(100) NOT NULL,
  `recepie` varchar(2000) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `dname`, `cusine`, `course`, `videol`, `recepie`, `description`, `image`, `name`) VALUES
(1, 'Sheera', 'Indian', 'Desert', 'Sheera.mp4', 'Ingredients for Sheera Recipe\r\nSemolina (rawa/suji) 1 cup\r\nGhee 1/2 cup\r\nMilk 2 1/2 cup\r\nsaffron strands 5-6\r\nGreen cardamom powder 1/2 teaspoon\r\nSugar 1 1/2 cup\r\nAlmonds chopped 2 tablespo for garnishing\r\nCashewnuts chopped 2 tablespo for garnishing\r\n\r\nMethod\r\nStep 1\r\nHeat ghee in a non-stick pan. Add semolina and roast on low heat till fragrant.\r\nStep 2\r\nHeat milk in another non-stick pan.\r\nStep 3\r\nAdd milk, saffron and cardamom powder to semolina, mix, cover and cook on low heat for 5 minutes.\r\nStep 4\r\nAdd sugar, mix, cover and cook till it melts. Switch off heat, add almonds and cashewnuts and mix well.\r\nStep 5\r\nServe hot garnished with cashewnuts and almonds', 'Yummy ', '1.jpg', ''),
(2, 'JD da  Sheera', 'Indian', 'Desert', 'JDSheera.mp4', 'yojd', 'JD da sheera ', '2.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
