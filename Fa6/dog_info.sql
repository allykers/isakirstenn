-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldogs`
--

CREATE TABLE `tbldogs` (
  `id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_breed` varchar(100) NOT NULL,
  `d_age` int(11) NOT NULL,
  `d_add` varchar(255) NOT NULL,
  `d_color` varchar(50) NOT NULL,
  `d_height` varchar(50) NOT NULL,
  `d_weight` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldogs`
--

INSERT INTO `tbldogs` (`id`, `d_name`, `d_breed`, `d_age`, `d_add`, `d_color`, `d_height`, `d_weight`) VALUES
(1, 'Obi', 'Poodle', 3, '9 F. Cruz St., Santolan, Pasig City', 'Brown', '25 cm', '3.5 kg'),
(2, 'Hero', 'Golden Retriever', 6, '17 Baraso Compound, Taytay, Rizal', 'Cream', '61 cm', '34 kg'),
(3, 'Luna', 'Shih Tzu', 2, '12 Evangelista St. Santolan, Pasig City', 'Black & Brown', '26 cm', '6.8 kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldogs`
--
ALTER TABLE `tbldogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldogs`
--
ALTER TABLE `tbldogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
