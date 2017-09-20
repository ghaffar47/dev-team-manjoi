-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 12:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart-team`
--

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_mohon` int(255) NOT NULL,
  `tarikh` date NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `kod_sekolah` varchar(100) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `jawatan_pelapor` varchar(100) NOT NULL,
  `telefon_pelapor` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `status` enum('DALAM PROSES','SELESAI','','') NOT NULL,
  `kumpulan` varchar(100) NOT NULL,
  `laporan_pantau` varchar(1000) NOT NULL,
  `laporan_selesai` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` enum('admin','JPN','ppd') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level_user`) VALUES
(1, 'admin', 'admin@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'yani', 'zamzuryani@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', ''),
(3, 'ppd', 'ppd@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', 'ppd'),
(4, 'aba2008', 'aba2008@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'mira', 'mira@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', ''),
(6, 'ppd2', 'ppd@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', 'ppd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_mohon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_mohon` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
