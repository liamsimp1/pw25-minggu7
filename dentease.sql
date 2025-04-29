-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 05:26 PM
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
(2, 'anisyazwanis79@gmail.com', 'Syazwani', 'Bogor', 'Pemeriksaan Gigi Anak', 'Spesialis Gigi Anak', 'Anak susah makan karena gigi sakit', '2025-04-29'),
(3, 'rina.sari@gmail.com', 'Rina Sari', 'Tangerang', 'Pembersihan Gigi', 'Spesialis Periodonti', 'Plak menumpuk dan bau mulut', '2025-05-01'),
(4, 'agus.budi@yahoo.com', 'Agus Budi', 'Bekasi', 'Pasang Behel', 'Spesialis Ortodonti', 'Gigi tidak rata', '2025-05-03'),
(5, 'tika.nur@outlook.com', 'Tika Nuraini', 'Bogor', 'Tambal Gigi', 'Spesialis Gigi Restoratif', 'Gigi berlubang kecil', '2025-05-04'),
(6, 'wahyu.prasetya@gmail.com', 'Wahyu Prasetya', 'Tangerang', 'Cabut Gigi', 'Spesialis Bedah Mulut', 'Gigi bungsu tumbuh miring', '2025-05-05'),
(7, 'fitri.maulida@gmail.com', 'Fitri Maulida', 'Bekasi', 'Veneer Gigi', 'Spesialis Gigi Estetika', 'Ingin memperbaiki tampilan gigi', '2025-05-06'),
(8, 'arif.santoso@gmail.com', 'Arif Santoso', 'Bogor', 'Pemeriksaan Gigi Anak', 'Spesialis Gigi Anak', 'Cek rutin anak usia 7 tahun', '2025-05-07'),
(9, 'dinda.amalia@gmail.com', 'Dinda Amalia', 'Tangerang', 'Perawatan Gigi', 'Spesialis Bedah Gigi', 'Sakit gusi dan nyeri saat mengunyah', '2025-05-08'),
(10, 'reza.hakim@gmail.com', 'Reza Hakim', 'Bekasi', 'Pasang Behel', 'Spesialis Ortodonti', 'Perlu koreksi gigi atas', '2025-05-09'),
(11, 'lisa.melani@yahoo.com', 'Lisa Melani', 'Bogor', 'Pembersihan Gigi', 'Spesialis Periodonti', 'Gusi mudah berdarah', '2025-05-10'),
(12, 'tommy.siregar@gmail.com', 'Tommy Siregar', 'Tangerang', 'Cabut Gigi', 'Spesialis Bedah Mulut', 'Gigi geraham rusak parah', '2025-05-11'),
(13, 'salsa.rizky@gmail.com', 'Salsa Rizky', 'Bekasi', 'Tambal Gigi', 'Spesialis Gigi Restoratif', 'Tambalan lama lepas', '2025-05-12'),
(14, 'dian.anggraeni@gmail.com', 'Dian Anggraeni', 'Bogor', 'Perawatan Gigi', 'Spesialis Bedah Gigi', 'Nyeri berdenyut malam hari', '2025-05-13'),
(15, 'irma.wulandari@gmail.com', 'Irma Wulandari', 'Tangerang', 'Veneer Gigi', 'Spesialis Gigi Estetika', 'Ingin gigi terlihat lebih putih', '2025-05-14'),
(16, 'alif.ramadhan@gmail.com', 'Alif Ramadhan', 'Bekasi', 'Pemeriksaan Gigi Anak', 'Spesialis Gigi Anak', 'Anak takut ke dokter gigi', '2025-05-15'),
(17, 'yuni.asri@gmail.com', 'Yuni Asri', 'Bogor', 'Tambal Gigi', 'Spesialis Gigi Restoratif', 'Gigi patah sebagian', '2025-05-16');

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

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `dokter_name` varchar(100) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `spec` varchar(100) DEFAULT NULL,
  `layanan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `dokter_name`, `jam`, `hari`, `ruangan`, `spec`, `layanan`) VALUES
(1, 'Dr. Andi Setiawan', '08:00:00', 'Senin', 'Ruangan 1', 'Spesialis Bedah Mulut', 'Perawatan Gigi'),
(2, 'Dr. Siti Mulyani', '10:00:00', 'Senin', 'Ruangan 2', 'Spesialis Gigi Anak', 'Pemeriksaan Gigi Anak'),
(3, 'Dr. Budi Prasetyo', '13:00:00', 'Selasa', 'Ruangan 3', 'Spesialis Periodonti', 'Pembersihan Gigi'),
(4, 'Dr. Rina Fitria', '09:00:00', 'Rabu', 'Ruangan 1', 'Spesialis Ortodonti', 'Pasang Behel'),
(5, 'Dr. Tono Wijaya', '11:00:00', 'Rabu', 'Ruangan 2', 'Spesialis Gigi Restoratif', 'Tambal Gigi'),
(6, 'Dr. Diana Putri', '14:00:00', 'Kamis', 'Ruangan 3', 'Spesialis Bedah Gigi', 'Cabut Gigi'),
(7, 'Dr. Eko Prabowo', '08:30:00', 'Jumat', 'Ruangan 1', 'Spesialis Gigi Estetika', 'Veneer Gigi'),
(8, 'Dr. Nurul Aisyah', '10:30:00', 'Jumat', 'Ruangan 2', 'Spesialis Periodonti', 'Pembersihan Gigi'),
(9, 'Dr. Ali Mustofa', '08:00:00', 'Sabtu', 'Ruangan 3', 'Spesialis Ortodonti', 'Perawatan Behel'),
(10, 'Dr. Farah Zahra', '09:00:00', 'Sabtu', 'Ruangan 1', 'Spesialis Gigi Anak', 'Pemeriksaan Gigi Anak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(3, 'Admin', 'Utama', 'f1d02310107@student.unram.ac.id', 'admin107', 'admin');

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
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_107`
--
ALTER TABLE `crud_107`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dokter_layanan`
--
ALTER TABLE `dokter_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
