-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 09:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `user_id` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `passpord_ID` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `departureTime` time NOT NULL,
  `accommo_Type` varchar(30) NOT NULL,
  `accommo_Rooms` int(11) NOT NULL,
  `accommo_PriceMin` int(11) NOT NULL,
  `accommo_PriceMax` int(11) NOT NULL,
  `baggage_Checked` int(11) NOT NULL,
  `baggage_Cabin` int(11) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `card_Num` varchar(30) NOT NULL,
  `card_Date` date NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_ccv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`user_id`, `mobile`, `passpord_ID`, `departure`, `departureTime`, `accommo_Type`, `accommo_Rooms`, `accommo_PriceMin`, `accommo_PriceMax`, `baggage_Checked`, `baggage_Cabin`, `seat`, `meal`, `card_Num`, `card_Date`, `card_name`, `card_ccv`) VALUES
(1, 20909942, '465789009876', 'Copenhagen', '02:00:00', 'hostel', 1, 120, 230, 0, 2, 'front-window', 'vegetarian', '978345', '2016-11-10', 'Viktoriya Nikolova', 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Viktoriya', 'Nikolova', 'viknikolova@yahoo.co.uk', 'pass'),
(2, 'Vik', 'Nikolova', 'viksnikolova@gmail.com', 'viktoriq'),
(3, 'Cat', 'Test', 'test@email.com', 'pass'),
(6, 'vik', 'nik', 'mail', 'pass'),
(8, 'anjh', 'ghkjl;', 'test', 'pass'),
(9, 'Viktoriya', 'Nikolova', 'test@test.uk', 'pass'),
(10, 'sa', 'jnhjyg', 'hkjl;', ';lkjhg'),
(11, ',km', 'kjkh', 'jkl;kj', 'jnkm'),
(12, ',kljh', 'l;k', '	lkjhjk', 'll;km'),
(13, ' mn', 'm,', '.m,.', 'kmjl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `preferences_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
