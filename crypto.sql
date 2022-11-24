-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 07:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `id` int(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(255) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `btcWallet` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT 'Decline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `amount`, `btcWallet`, `username`, `date`, `status`) VALUES
(1, '123123', '23', 'vesas@gmail.com', '2022-11-07', 'decline'),
(2, '123123', '23', 'vesas@gmail.com', '2022-11-07', 'Accept'),
(3, '123123', '111', 'vesas@gmail.com', '2022-11-07', 'Decline'),
(5, '243', '222', 'vesas@gmail.com', '2022-11-22', 'Decline'),
(6, '111', '111', 'vesas@gmail.com', '2022-11-22', 'Accept'),
(7, '243', '5155', 'vesas@gmail.com', '2022-11-23', 'Decline'),
(12, '243', '3434342', 'vesas@gmail.com', '2022-11-24', 'Accept'),
(13, '111', '233434', 'resas@gmail.com', '2022-11-24', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `regjistrimi`
--

CREATE TABLE `regjistrimi` (
  `id` int(255) NOT NULL,
  `emri` varchar(255) DEFAULT NULL,
  `mbiemri` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `passwordi` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regjistrimi`
--

INSERT INTO `regjistrimi` (`id`, `emri`, `mbiemri`, `email`, `username`, `passwordi`, `hash`) VALUES
(2, 'vesa', 'susuri', 'vesas@gmail.com', 'vesasusuri', '12345', 'rgergergtertre'),
(3, 'resa', 'susuri', 'resas@gmail.com', 'ressasusurii', '1234', 'drter');

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `totalFee` varchar(255) DEFAULT NULL,
  `latesDeposit` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`id`, `username`, `totalFee`, `latesDeposit`, `endDate`, `date`) VALUES
(1, 'vesas@gmail.com', '333330', '0000-00-00', '2022-11-17', '2022-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(255) NOT NULL,
  `bwallet` varchar(255) DEFAULT NULL,
  `btcAddress` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `bwallet`, `btcAddress`, `amount`, `username`, `status`) VALUES
(3, '343r', '34543', '345345', 'vesas@gmail.com', 'Accept'),
(4, '453', '34534', '3453', 'vesas@gmail.com', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regjistrimi`
--
ALTER TABLE `regjistrimi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section2`
--
ALTER TABLE `section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admini`
--
ALTER TABLE `admini`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `regjistrimi`
--
ALTER TABLE `regjistrimi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section2`
--
ALTER TABLE `section2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
