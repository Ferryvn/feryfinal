-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 09:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feryuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `belanja`
--

CREATE TABLE `belanja` (
  `id` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `anggaran` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sisa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dana`
--

CREATE TABLE `dana` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `anggaran` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `sisa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dana`
--

INSERT INTO `dana` (`id`, `nama`, `anggaran`, `tanggal`, `sisa`) VALUES
(1, 'Dana Desa', '696,000,000,00', '2023-01-10', '0,00');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jmlhkk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id`, `nama`, `jmlhkk`) VALUES
(1, 'Dusun Ajas', 45),
(2, 'Dusun Hidayah', 115);

-- --------------------------------------------------------

--
-- Table structure for table `rancangan`
--

CREATE TABLE `rancangan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anggaran` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sisa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rancangan`
--

INSERT INTO `rancangan` (`id`, `nama`, `anggaran`, `tanggal`, `sisa`) VALUES
(110, 'Pembangunan Paud', '36,800,000,00', '2023-06-06', '0,00'),
(111, 'Pembangunan TK', '24,800,000,00', '2023-01-11', '0,00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `last_log`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2024-01-18 05:25:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rancangan`
--
ALTER TABLE `rancangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dana`
--
ALTER TABLE `dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rancangan`
--
ALTER TABLE `rancangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
