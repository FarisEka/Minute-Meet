-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 08:02 AM
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
-- Database: `rapat_unbraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_rapat`
--

CREATE TABLE `daftar_rapat` (
  `id_rapat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time DEFAULT NULL,
  `agenda_rapat` varchar(255) NOT NULL,
  `dokumen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_rapat`
--

INSERT INTO `daftar_rapat` (`id_rapat`, `tanggal`, `jam_awal`, `jam_akhir`, `agenda_rapat`, `dokumen`) VALUES
(123213123, '2023-11-01', '00:00:00', '00:00:00', '23123', '');

-- --------------------------------------------------------

--
-- Table structure for table `notulensi`
--

CREATE TABLE `notulensi` (
  `id_notulensi` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `dokumen` longblob NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partisipan`
--

CREATE TABLE `partisipan` (
  `id_partisipan` int(11) NOT NULL,
  `nama_partisipan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `ahli_partisipan` varchar(255) NOT NULL,
  `jabatan_partisipan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `undangan_rapat`
--

CREATE TABLE `undangan_rapat` (
  `id_undangan` int(11) NOT NULL,
  `id_rapat` varchar(255) NOT NULL,
  `lokasi_rapat` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `id_partisipan` varchar(255) NOT NULL,
  `detail_acara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email_user`, `username`, `password_user`, `department`) VALUES
(2, 'Fahmi ', 'fahmi@gmail.com', 'northencat', '3326', 'Pendidikan'),
(3, 'Neo', 'neo@gmail.com', 'neo', '3326', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notulensi`
--
ALTER TABLE `notulensi`
  ADD PRIMARY KEY (`id_notulensi`);

--
-- Indexes for table `partisipan`
--
ALTER TABLE `partisipan`
  ADD PRIMARY KEY (`id_partisipan`);

--
-- Indexes for table `undangan_rapat`
--
ALTER TABLE `undangan_rapat`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notulensi`
--
ALTER TABLE `notulensi`
  MODIFY `id_notulensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partisipan`
--
ALTER TABLE `partisipan`
  MODIFY `id_partisipan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undangan_rapat`
--
ALTER TABLE `undangan_rapat`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
