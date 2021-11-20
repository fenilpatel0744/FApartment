-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 01:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appt_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email Id` varchar(255) NOT NULL,
  `Rating` float NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`Id`, `Name`, `Email Id`, `Rating`, `Feedback`) VALUES
(1, 'aaa bbb ', 'a@gmail.com', 4.4, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `navratri`
--

CREATE TABLE `navratri` (
  `id` int(11) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Date & Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navratri`
--

INSERT INTO `navratri` (`id`, `Day`, `Description`, `Amount`, `Date & Time`) VALUES
(1, '1', 'Aarti', '1100', '2021-11-20 12:34:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email Id` (`Email Id`);

--
-- Indexes for table `navratri`
--
ALTER TABLE `navratri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `navratri`
--
ALTER TABLE `navratri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
