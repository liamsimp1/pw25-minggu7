-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 11:43 AM
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
-- Database: `dentease`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_107`
--

CREATE TABLE `crud_107` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cabang` enum('Bekasi','Bogor','Tangerang') NOT NULL,
  `layanan` enum('Perawatan Gigi','Pemeriksaan Gigi Anak','Pembersihan Gigi','Pasang Behel','Tambal Gigi','Cabut Gigi','Veneer Gigi') NOT NULL,
  `spec` enum('Spesialis Bedah Gigi','Spesialis Bedah Mulut','Spesialis Gigi Anak','Spesialis Gigi Estetika','Spesialis Gigi Restoratif','Spesialis Ortodonti','Spesialis Periodonti') NOT NULL,
  `keluhan` longtext DEFAULT NULL,
  `tanggalJanji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud_107`
--

INSERT INTO `crud_107` (`id`, `email`, `name`, `cabang`, `layanan`, `spec`, `keluhan`, `tanggalJanji`) VALUES
(1, 'f1d02310107@student.unram.ac.i', 'Baiq Mutia Dewi Edelweis', 'Bekasi', 'Perawatan Gigi', 'Spesialis Bedah Gigi', 'Sakit gigi belakang', '2025-04-28'),
(2, 'anisyazwanis79@gmail.com', 'Syazwani', 'Bogor', 'Pemeriksaan Gigi Anak', 'Spesialis Gigi Anak', 'Anak susah makan karena gigi sakit', '2025-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `dokter_layanan`
--

CREATE TABLE `dokter_layanan` (
  `id` int(11) NOT NULL,
  `dokter_name` varchar(100) NOT NULL,
  `layanan` enum('Perawatan Gigi','Pemeriksaan Gigi Anak','Pembersihan Gigi','Pasang Behel','Tambal Gigi','Cabut Gigi','Veneer Gigi') NOT NULL,
  `spec` enum('Spesialis Bedah Gigi','Spesialis Bedah Mulut','Spesialis Gigi Anak','Spesialis Gigi Estetika','Spesialis Gigi Restoratif','Spesialis Ortodonti','Spesialis Periodonti') NOT NULL,
  `biaya` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter_layanan`
--

INSERT INTO `dokter_layanan` (`id`, `dokter_name`, `layanan`, `spec`, `biaya`) VALUES
(1, 'Dr. Andi Setiawan', 'Perawatan Gigi', 'Spesialis Bedah Gigi', 500000.00),
(2, 'Dr. Siti Mulyani', 'Pemeriksaan Gigi Anak', 'Spesialis Gigi Anak', 300000.00),
(3, 'Dr. Budi Prasetyo', 'Pembersihan Gigi', 'Spesialis Periodonti', 400000.00),
(4, 'Dr. Rina Fitria', 'Pasang Behel', 'Spesialis Ortodonti', 2500000.00),
(5, 'Dr. Tono Wijaya', 'Tambal Gigi', 'Spesialis Gigi Restoratif', 600000.00),
(6, 'Dr. Diana Putri', 'Cabut Gigi', 'Spesialis Bedah Mulut', 700000.00),
(7, 'Dr. Eko Prabowo', 'Veneer Gigi', 'Spesialis Gigi Estetika', 3000000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_107`
--
ALTER TABLE `crud_107`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter_layanan`
--
ALTER TABLE `dokter_layanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dokter_layanan_unique` (`dokter_name`,`layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_107`
--
ALTER TABLE `crud_107`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokter_layanan`
--
ALTER TABLE `dokter_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
