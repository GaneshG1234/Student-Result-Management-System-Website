-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 03:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `roll` varchar(8) NOT NULL,
  `fname` text NOT NULL,
  `dob` date NOT NULL,
  `contact` int(20) NOT NULL,
  `CNS` int(255) NOT NULL,
  `IOT` int(255) NOT NULL,
  `CC` int(255) NOT NULL,
  `SE` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `roll`, `fname`, `dob`, `contact`, `CNS`, `IOT`, `CC`, `SE`) VALUES
(54, 'Debasish', '7007', 'BINAYA KUMAR PRADHAN', '2003-04-29', 2147483647, 78, 78, 78, 78),
(55, 'S. SUDIPTA', '7019', 'PRASAN KUMAR SWAIN', '2001-09-07', 2147483647, 90, 89, 89, 89),
(56, 'LATIKA PUHAN', '7014', 'BASANT PUHAN', '2001-09-29', 2147483647, 78, 78, 78, 78),
(57, 'SUMIT SWAIN', '7032', 'XYZ SWAIN', '2000-02-09', 2147483647, 78, 78, 78, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
