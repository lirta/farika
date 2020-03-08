-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 01:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farika`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_lowongan`
--

CREATE TABLE `detail_lowongan` (
  `id` int(11) NOT NULL,
  `lowongan_id` varchar(125) NOT NULL,
  `kualifikasi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_lowongan`
--

INSERT INTO `detail_lowongan` (`id`, `lowongan_id`, `kualifikasi`) VALUES
(1, '1', 'asas'),
(2, '1', 'dssdds'),
(3, 'IT11426626', 'sasd'),
(4, 'IT11426626', 'sasd'),
(5, 'IT32987124', 'sdf'),
(6, 'IT32987124', 'sfdg'),
(7, 'IT32987124', 'fdf'),
(8, 'IT32987124', 'sa'),
(9, 'IT32987124', 'as'),
(10, 'sales82772726', 'buronan'),
(11, 'sales82772726', 'belum menikah'),
(12, 'sales82772726', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `kariawan`
--

CREATE TABLE `kariawan` (
  `kariawan_id` int(11) NOT NULL,
  `kariawan_nama` varchar(125) NOT NULL,
  `kariawan_tmp_lhr` varchar(125) NOT NULL,
  `kariawan_tgl_lhr` varchar(50) NOT NULL,
  `kariawan_jns_kel` varchar(20) NOT NULL,
  `kariawan_agama` varchar(20) NOT NULL,
  `kariawan_alamat` varchar(225) NOT NULL,
  `kariawan_foto` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kariawan`
--

INSERT INTO `kariawan` (`kariawan_id`, `kariawan_nama`, `kariawan_tmp_lhr`, `kariawan_tgl_lhr`, `kariawan_jns_kel`, `kariawan_agama`, `kariawan_alamat`, `kariawan_foto`, `username`, `password`) VALUES
(1, 'inda', '', '', '', '', '', '', 'inda', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `lowongan_id` varchar(225) NOT NULL,
  `lowongan_posisi` varchar(125) NOT NULL,
  `lowongan_tgl_terbit` varchar(50) NOT NULL,
  `lowongan_tgl_batas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`lowongan_id`, `lowongan_posisi`, `lowongan_tgl_terbit`, `lowongan_tgl_batas`) VALUES
('1', 'it', '111', '222'),
('2', 'kjk', '', ''),
('3', 'kl', '', ''),
('IT11426626', 'IT', '20.03.07', '3434'),
('IT32987124', 'IT', '20.03.07', 'asdad'),
('sales82772726', 'sales', '20.03.07', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kariawan`
--
ALTER TABLE `kariawan`
  ADD PRIMARY KEY (`kariawan_id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`lowongan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kariawan`
--
ALTER TABLE `kariawan`
  MODIFY `kariawan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
