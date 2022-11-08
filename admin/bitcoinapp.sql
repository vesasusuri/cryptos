-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 02:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcoinapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
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
  `status` varchar(255) DEFAULT NULL,
  `fileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `amount`, `btcWallet`, `username`, `date`, `status`, `fileUpload`) VALUES
(38, '2', '1441', 'vesa@gmail.com', '2022-10-23', 'Accept', NULL),
(39, '2', '123', 'admin@admin.com', '2022-10-23', 'Decline', NULL),
(40, '100', '123314235', 'admin@admin.com', '2022-10-24', 'Accept', NULL),
(41, '55', '3453530', 'admin@admin.com', '2022-10-24', 'Decline', NULL),
(42, '3333333', '33333', 'admin@admin.com', '2022-10-31', 'DEcline', NULL),
(43, '123', '123', 'admin@admin.com', '2022-10-31', NULL, NULL),
(44, '123', '123', 'admin@admin.com', '2022-10-31', NULL, NULL);

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
  `passwordi` varchar(255) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `fileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regjistrimi`
--

INSERT INTO `regjistrimi` (`id`, `emri`, `mbiemri`, `email`, `username`, `passwordi`, `hash`, `fileUpload`) VALUES
(2, 'vesa', 'susuri', 'vesas@gmail.com', 'vesasusuri', '123', 'ertretertert', NULL),
(22, 'admin', 'admin', 'admin@admin.com', 'adminadmin', '123', 'fdgdgdrgrd', NULL),
(23, 'almir', 'pinduk', 'almirp@gmail.com', 'almirpinduk', '123', 'dsfeerererwi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `totalfee` varchar(255) DEFAULT NULL,
  `latesDepositDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`id`, `username`, `totalfee`, `latesDepositDate`, `endDate`, `date`) VALUES
(1, 'vesas@gmail.com', '2222220', '0000-00-00', '2022-10-31', '2022-11-09'),
(2, 'admin@admin.com', '12121', '2022-10-05', '2022-10-05', '2022-10-26'),
(3, 'admin@admin.com', '12121', '2022-10-05', '2022-10-05', '2022-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `h` int(50) NOT NULL,
  `m` int(50) NOT NULL,
  `s` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `date`, `h`, `m`, `s`) VALUES
(1, '2022-11-02', 10, 18, 60);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(255) NOT NULL,
  `bwallet` varchar(255) DEFAULT NULL,
  `btcAddres` varchar(255) DEFAULT NULL,
  `amount` int(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `bwallet`, `btcAddres`, `amount`, `username`) VALUES
(1, '2323', '345v', 45, 'admin@admin.com'),
(2, '2323', '345v', 23, 'admin@admin.com'),
(3, '2323', 'we23', 333, 'admin@admin.com'),
(4, '333', '3234234', 34234, 'admin@admin.com'),
(5, '333', '3234234', 34234, 'admin@admin.com'),
(6, '8783', '3333', 3333, 'admin@admin.com'),
(7, '8783', '3333', 3333, 'admin@admin.com'),
(8, '333', '3234234', 34234, 'admin@admin.com'),
(9, '333', '3234234', 34234, 'admin@admin.com'),
(10, '333', '232', 23, 'admin@admin.com'),
(11, '333', '232', 23, ''),
(12, '878', '3234234', 23, ''),
(13, '878', '3234234', 23, ''),
(14, '8783', '3234234', 34234, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- Indexes for table `timer`
--
ALTER TABLE `timer`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `regjistrimi`
--
ALTER TABLE `regjistrimi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `section2`
--
ALTER TABLE `section2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
