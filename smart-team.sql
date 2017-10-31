-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 06:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `tarikh` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_mohon`, `tarikh`, `no_tiket`, `sekolah`, `kod_sekolah`, `nama_pelapor`, `jawatan_pelapor`, `telefon_pelapor`, `email`, `keterangan`, `status`, `kumpulan`, `laporan_pantau`, `laporan_selesai`) VALUES
(1, '2017-10-01 16:00:00', 'c0ea8fc4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(2, '2017-10-01 16:00:00', 'c0ea8fc4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(3, '2017-10-01 16:00:00', '17a089da', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(4, '2017-10-01 16:00:00', '17a089da', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(5, '2017-10-01 16:00:00', '775e9837', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(6, '2017-10-01 16:00:00', '775e9837', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(7, '2017-10-01 16:00:00', 'e8253e9d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(8, '2017-10-01 16:00:00', 'e8253e9d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(9, '2017-10-01 16:00:00', '27684c5e', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(10, '2017-10-01 16:00:00', '27684c5e', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(11, '2017-10-01 16:00:00', '047529a6', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(12, '2017-10-01 16:00:00', '047529a6', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(13, '2017-10-01 16:00:00', '204ee4ee', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(14, '2017-10-01 16:00:00', '204ee4ee', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(15, '2017-10-01 16:00:00', 'd2ae6fd5', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(16, '2017-10-01 16:00:00', 'd2ae6fd5', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(17, '2017-10-01 16:00:00', '6c59dd76', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(18, '2017-10-01 16:00:00', 'f7c44cbf', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(19, '2017-10-01 16:00:00', '6982134c', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(20, '2017-10-01 16:00:00', 'f00d7365', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(21, '2017-10-01 16:00:00', '66d33b4d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(22, '2017-10-01 16:00:00', '05cdbea1', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(23, '2017-10-01 16:00:00', 'f6651325', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(24, '2017-10-01 16:00:00', 'af4aa24d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(25, '2017-10-01 16:00:00', '73e50309', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(26, '2017-10-01 16:00:00', '974d7fda', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(27, '2017-10-01 16:00:00', '3e193191', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(28, '2017-10-01 16:00:00', '934512bf', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(29, '2017-10-01 16:00:00', '774ee902', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(30, '2017-10-01 16:00:00', 'aa06d7ab', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(31, '2017-10-01 16:00:00', 'aa06d7ab', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(32, '2017-10-01 16:00:00', 'f4188063', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(33, '2017-10-01 16:00:00', 'f4188063', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(34, '2017-10-01 16:00:00', '585c1028', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(35, '2017-10-01 16:00:00', '585c1028', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(36, '2017-10-01 16:00:00', 'e458ae8a', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(37, '2017-10-01 16:00:00', 'e458ae8a', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(38, '2017-10-01 16:00:00', '8cab3509', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(39, '2017-10-01 16:00:00', '8cab3509', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(40, '2017-10-01 16:00:00', '5b11659d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(41, '2017-10-01 16:00:00', '5b11659d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(42, '2017-10-01 16:00:00', 'b2855aa4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(43, '2017-10-01 16:00:00', 'b2855aa4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(44, '2017-10-01 16:00:00', '253d5cd7', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(45, '2017-10-01 16:00:00', '253d5cd7', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(46, '2017-10-01 16:00:00', 'd488d986', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(47, '2017-10-01 16:00:00', 'd488d986', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(48, '2017-10-01 16:00:00', '63025259', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(49, '2017-10-01 16:00:00', '63025259', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(50, '2017-10-01 16:00:00', '52e1770f', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(51, '2017-10-01 16:00:00', '52e1770f', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(52, '2017-10-01 16:00:00', '1bab54b4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(53, '2017-10-01 16:00:00', '1bab54b4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(54, '2017-10-01 16:00:00', '4e67bd6a', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(55, '2017-10-01 16:00:00', '4e67bd6a', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(56, '2017-10-01 16:00:00', '999cebf4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(57, '2017-10-01 16:00:00', '999cebf4', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(58, '2017-10-01 16:00:00', 'e8d51179', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(59, '2017-10-01 16:00:00', 'e8d51179', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(60, '2017-10-01 16:00:00', 'aa057b7d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(61, '2017-10-01 16:00:00', 'aa057b7d', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(62, '2017-10-01 16:00:00', '6631573b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(63, '2017-10-01 16:00:00', '6631573b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(64, '2017-10-01 16:00:00', '9c881ba0', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(65, '2017-10-01 16:00:00', '9c881ba0', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(66, '2017-10-01 16:00:00', 'fcfc59b9', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(67, '2017-10-01 16:00:00', 'fcfc59b9', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(68, '2017-10-01 16:00:00', '4421ac52', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(69, '2017-10-01 16:00:00', '4421ac52', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(70, '2017-10-01 16:00:00', '753c9f94', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(71, '2017-10-01 16:00:00', '753c9f94', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(72, '2017-10-01 16:00:00', '05f789f2', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(73, '2017-10-01 16:00:00', '05f789f2', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(74, '2017-10-01 16:00:00', 'dec29690', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(75, '2017-10-01 16:00:00', 'dec29690', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(76, '2017-10-01 16:00:00', 'e2e67bf7', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(77, '2017-10-01 16:00:00', 'e2e67bf7', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(78, '2017-10-01 16:00:00', '72eec6ed', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(79, '2017-10-01 16:00:00', '72eec6ed', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(80, '2017-10-01 16:00:00', 'a3c1484b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(81, '2017-10-01 16:00:00', 'a3c1484b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(82, '2017-10-01 16:00:00', 'b36b0cfc', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(83, '2017-10-01 16:00:00', 'b36b0cfc', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(84, '2017-10-01 16:00:00', '38574ed8', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(85, '2017-10-01 16:00:00', '38574ed8', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(86, '2017-10-01 16:00:00', 'a40f9ec2', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(87, '2017-10-01 16:00:00', 'a40f9ec2', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(88, '2017-10-01 16:00:00', '997a98ef', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(89, '2017-10-01 16:00:00', '997a98ef', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(90, '2017-10-01 16:00:00', '9134aba6', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(91, '2017-10-01 16:00:00', '9134aba6', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(92, '2017-10-01 16:00:00', '8363ac8e', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(93, '2017-10-01 16:00:00', '8363ac8e', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(94, '2017-10-01 16:00:00', '977162e9', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(95, '2017-10-01 16:00:00', '977162e9', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(96, '2017-10-01 16:00:00', 'c7994ba7', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(97, '2017-10-01 16:00:00', 'c7994ba7', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(98, '2017-10-01 16:00:00', '2af12e8b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(99, '2017-10-01 16:00:00', '2af12e8b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(100, '2017-10-01 16:00:00', '77fdb91b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(101, '2017-10-01 16:00:00', '77fdb91b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(102, '2017-10-01 16:00:00', '8fcdd290', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(103, '2017-10-01 16:00:00', '8fcdd290', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(104, '2017-10-01 16:00:00', '11151e4b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(105, '2017-10-01 16:00:00', '11151e4b', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(106, '2017-10-01 16:00:00', '204d9d1f', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', ''),
(107, '2017-10-01 16:00:00', '204d9d1f', '', '', '', '', '', '', '', 'DALAM PROSES', '', '', '');

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
  MODIFY `id_mohon` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
