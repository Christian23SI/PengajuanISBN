-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 03:14 PM
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
-- Database: `tugas_kelompok3`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `edisi` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `jumlah_halaman` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `sinopsis` longtext NOT NULL,
  `id_status` int(10) NOT NULL,
  `no_isbn` varchar(100) NOT NULL,
  `tanggal_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `judul`, `penulis`, `edisi`, `seri`, `jumlah_halaman`, `gambar`, `sinopsis`, `id_status`, `no_isbn`, `tanggal_pengajuan`) VALUES
(8, 'BDD', 'DHQ', '1', '2', '145', 'buku1.png', '-    ', 3, '-    ', '2024-07-23'),
(9, 'RPL', 'Zidane', '2012', '1', '350', 'pcr1.png', '1    ', 1, '1    ', '2024-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'pengajuan'),
(2, 'proses'),
(3, 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','penulis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$8QEBab0oqdnnNfZGi.RfNeZ6ky9pvx9rZE74aubjWz.arKlEl2BrK', 'admin'),
(2, 'penulis', 'penulis@gmail.com', '$2y$10$mAE4NHvNpmZix0n8V9NdROzfty0xb4dgfbKTgA.7T.x8xgJxbAff.', 'penulis'),
(3, 'penulis', 'penulis@gmail.com', '$2y$10$N.pD8BbCGke.AN7W7sfscuKlWLW43ZD/KZeNijRO/fh8w.Xj5qnh2', 'penulis'),
(4, 'penulis', 'penulis@gmail.com', '$2y$10$YpE1yzC0ha.512C3aHE0LeDEtDQjXZ8VQiW43atCvOltky8e.aoEG', 'penulis'),
(5, 'hafis', 'hafis@gmail.com', '$2y$10$gRjWQYmjviMkBojKjvLCz.gaOWwbNzBFBkLz9X.UWCchYpCVrJkMG', 'penulis'),
(6, 'Carlos', 'hvhv@gmail.com', '$2y$10$NG08I9ewHDhuPuMBZPEPGeZfNzA4w5j2rcaCbTR7HA5GZq5GdS2oO', 'penulis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
