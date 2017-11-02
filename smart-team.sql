-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 09:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
(119, '2017-11-02 06:10:06', 'd6d4e1a9', 'asdfasdf asdf asdf a', 'aba2058', 'asdfasdf', 'asdfasdf', '1684649849', 'apai@gmail.com', 'adfg adg adfgdsaf gardsg asdfg', 'DALAM PROSES', '', 'permohonan baru', ''),
(120, '2017-11-02 06:10:10', '35b3b74b', 'asdfasdf asdf asdf a', 'aba2058', 'asdfasdf', 'asdfasdf', '1684649849', 'apai@gmail.com', 'adfg adg adfgdsaf gardsg asdfg', 'DALAM PROSES', '', '', ''),
(121, '2017-11-02 06:10:16', '7694c3a1', 'asdfasdf asdf asdf a', 'aba2058', 'asdfasdf', 'asdfasdf', '1684649849', 'apai@gmail.com', 'adfg adg adfgdsaf gardsg asdfg', 'DALAM PROSES', '', '', ''),
(122, '2017-11-02 06:10:22', 'f4deaa68', 'asdfasdf asdf asdf a', 'aba2058', 'asdfasdf', 'asdfasdf', '1684649849', 'apai@gmail.com', 'adfg adg adfgdsaf gardsg asdfg', 'DALAM PROSES', 'kamil lahad datu', 'masih dalam siasatan asing', 'belum selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` enum('admin','JPN','ppd','jtk') NOT NULL,
  `ppd` enum('PPD BATANG PADANG','PPD MANJUNG','PPD KRIAN','PPD HILIR PERAK','PPD PERAK TENGAH','PPD KUALA KANGSAR','PPD LARUT/MATANG/SELAMA','PPD KINTA UTARA','PPD KINTA SELATAN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level_user`, `ppd`) VALUES
(1, 'admin', 'admin@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'PPD BATANG PADANG'),
(2, 'yani', 'zamzuryani@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', '', 'PPD BATANG PADANG'),
(3, 'ppd', 'ppd@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', 'ppd', 'PPD BATANG PADANG'),
(4, 'aba2008', 'aba2008@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', '', 'PPD BATANG PADANG'),
(6, 'ppd2', 'ppd@moe.edu.my', 'e10adc3949ba59abbe56e057f20f883e', 'ppd', 'PPD BATANG PADANG');

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
  MODIFY `id_mohon` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
