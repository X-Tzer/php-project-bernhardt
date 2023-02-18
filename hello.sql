-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 05:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotelrooms`
--

CREATE TABLE `hotelrooms` (
  `id` int(11) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `roomsize` varchar(255) NOT NULL,
  `bedsize` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelrooms`
--

INSERT INTO `hotelrooms` (`id`, `roomtype`, `guests`, `children`, `roomsize`, `bedsize`, `price`) VALUES
(1, 'Standard One Person Room', '2', '3', '110', '2 King', 15),
(2, 'Deluxe Dark Room', '3', '2', '110', '2 King', 30),
(3, 'Standard Economic Single Room', '1', '5', '160', '5 king', 60),
(4, 'Standard Big Room', '4', '3', '95', '1 King', 25),
(5, 'Standard Double Room', '3', '2', '90', '3 king', 50),
(6, 'Standard Economic Double Room', '4', '5', '180', '1 king', 30);

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `firstname`, `lastname`, `phone`, `password`, `email`, `username`, `role`) VALUES
(1, 'Dipu', 'Dangol', '9863339739', '98ede4ea7c4595de0298e92fd3a5114f', 'ddangol123@hotmail.com', 'dangoldipu', 1),
(2, 'Anuraj', 'Giri', '9841174455', '97df097c87b32858ec671df4f35a7b31', 'g.anurajgiree07@gmail.com', 'giriAnuraj', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotelrooms`
--
ALTER TABLE `hotelrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotelrooms`
--
ALTER TABLE `hotelrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
