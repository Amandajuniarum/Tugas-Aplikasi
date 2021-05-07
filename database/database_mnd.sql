-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 11:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_mnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_aset`
--

CREATE TABLE `tabel_aset` (
  `id_aset` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_aset`
--

INSERT INTO `tabel_aset` (`id_aset`, `nama_barang`, `jumlah`, `kondisi`, `keterangan`) VALUES
(1, 'meja', 100, 'Baik', 'Aset milik negara'),
(7, 'Kursi', 100, 'Baik', 'Aset milik negara');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_investor`
--

CREATE TABLE `tabel_investor` (
  `id_investor` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_investor`
--

INSERT INTO `tabel_investor` (`id_investor`, `nama`, `alamat`, `keterangan`) VALUES
(6, 'Pemerintah Jawa Tengah', 'Jawa Tengah', 'Dana Bos'),
(7, 'Pemerintah Jawa Barat', 'Jawa Barat', 'Dana Bos');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
(5, 'Amanda', 'manda', '123'),
(6, 'Denis', 'denis', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `tabel_investor`
--
ALTER TABLE `tabel_investor`
  ADD PRIMARY KEY (`id_investor`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_investor`
--
ALTER TABLE `tabel_investor`
  MODIFY `id_investor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
