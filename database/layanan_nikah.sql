-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2023 at 11:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan_nikah`
--

-- --------------------------------------------------------

--
-- Table structure for table `akad`
--

CREATE TABLE `akad` (
  `id_akad` int NOT NULL,
  `nama_cami` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_cais` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `wali` varchar(50) NOT NULL,
  `id_peng` int NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akad`
--

INSERT INTO `akad` (`id_akad`, `nama_cami`, `nama_cais`, `wali`, `id_peng`, `tempat`, `tanggal`, `waktu`) VALUES
(1, 'Ruswadi', 'Apri Sujarwati', 'Sujarwo', 5, 'Cilacap', '2003-10-17', '21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `calon_istri`
--

CREATE TABLE `calon_istri` (
  `id` int NOT NULL,
  `nama_cais` varchar(50) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `noktp_cais` varchar(16) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_cais` varchar(50) NOT NULL,
  `pekerjaan_cais` varchar(20) NOT NULL,
  `status_cais` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `calon_istri`
--

INSERT INTO `calon_istri` (`id`, `nama_cais`, `wali`, `noktp_cais`, `tempat_lahir`, `tanggal_lahir`, `alamat_cais`, `pekerjaan_cais`, `status_cais`) VALUES
(35, 'Pradita', 'Ruswadi', '987657', 'Cilacap', '2000-06-17', 'Cilacap', 'PNS', 'Belum pernah menikah'),
(36, 'Astrid', 'Bapak', '210986', 'Cilacap', '2000-08-21', 'Cilacap', 'PNS', 'Belum pernah menikah'),
(40, 'Yuni', 'Bapak', '121', 'Cilacap', '2000-08-19', 'Cilacap', 'PNS', 'Belum pernah menikah');

-- --------------------------------------------------------

--
-- Table structure for table `calon_suami`
--

CREATE TABLE `calon_suami` (
  `id` int NOT NULL,
  `nama_cami` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `tpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_cami` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `calon_suami`
--

INSERT INTO `calon_suami` (`id`, `nama_cami`, `no_ktp`, `tpt_lahir`, `tgl_lahir`, `alamat`, `pekerjaan`, `status_cami`) VALUES
(16, 'Azam R', '3301', 'Cilacap', '1976-10-04', 'Jalan Malabar', 'Buruh', 'Belum pernah menikah'),
(38, 'Diva Satria Aji', '56789', 'Cilacap', '2000-08-30', 'Cilacap', 'PNS', 'Belum pernah menikah'),
(40, 'Masdzuky', '1345', 'Gandrung', '2004-09-08', 'Gandrung', 'PNS', 'Belum pernah menikah');

-- --------------------------------------------------------

--
-- Table structure for table `penghulu`
--

CREATE TABLE `penghulu` (
  `id_peng` int NOT NULL,
  `nama_peng` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `alamat_peng` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penghulu`
--

INSERT INTO `penghulu` (`id_peng`, `nama_peng`, `nip`, `alamat_peng`, `no_hp`) VALUES
(4, 'Suharto, S.H', '55559', 'Jalan Pucang', '089999990090');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'KUA Cilteng', 'adminkua', 'admin123', 'admin'),
(7, 'dita', 'ditacan', '170604', ''),
(13, 'Ruswadi', 'ruswadi0410', '041076', ''),
(15, 'Dimas Setyawan', 'dimas09', '270999', ''),
(16, 'Evan Arlen Handy', 'evan21', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akad`
--
ALTER TABLE `akad`
  ADD PRIMARY KEY (`id_akad`),
  ADD KEY `id_peng` (`id_peng`);

--
-- Indexes for table `calon_istri`
--
ALTER TABLE `calon_istri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_suami`
--
ALTER TABLE `calon_suami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghulu`
--
ALTER TABLE `penghulu`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akad`
--
ALTER TABLE `akad`
  MODIFY `id_akad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `calon_istri`
--
ALTER TABLE `calon_istri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `calon_suami`
--
ALTER TABLE `calon_suami`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `penghulu`
--
ALTER TABLE `penghulu`
  MODIFY `id_peng` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
