-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 06:37 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fiter`
--
CREATE DATABASE IF NOT EXISTS `fiter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fiter`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'inda', 'fb27814fee4b2e819ccf4edb37f7db65');

-- --------------------------------------------------------

--
-- Table structure for table `contak`
--

CREATE TABLE IF NOT EXISTS `contak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` text NOT NULL,
  `no_tlp` varchar(125) NOT NULL,
  `hp` varchar(125) NOT NULL,
  `no_wa` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contak`
--

INSERT INTO `contak` (`id`, `alamat`, `no_tlp`, `hp`, `no_wa`, `email`) VALUES
(1, 'Jl. SM. Amin No 89 D / Arengka 2Panam - Pekanbaru', '0761-6700142', '+6281378191881', '+6281378191881', 'djaya_hydraulic@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `foto_f` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `foto_f`) VALUES
(1, 'mesin bubut 4 ', 'bg_2.jpg'),
(2, 'mesin bubut 2 m', 'team-1.jpg'),
(4, 'mesin bubut', 'work-1.jpg'),
(5, 'mesin kontraktor', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hme`
--

CREATE TABLE IF NOT EXISTS `hme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(225) NOT NULL,
  `slide_a` varchar(225) NOT NULL,
  `slide_b` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hme`
--

INSERT INTO `hme` (`id`, `nama_perusahaan`, `slide_a`, `slide_b`) VALUES
(1, 'DJAYA HIDROLIC', 'image_6.jpg', 'bg_21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile`) VALUES
(1, 'Kami, CV Djaya Hydraulic yang beralamatkan di Jl SM Amin / Arengka 2 No 89D , Panam Pekanbaru yang bergerak dibidang perbengkelan, pengadaaan, jasa perbaikan alat  alat industri dari Pabrik Kelapa Sawit dan komponen alat berat lainnya.\r\n\r\nKami lebih menekankan kepada perbaikan atau pembuatan barang dan jasa industri, dimana kami memberikan pelayanan antar jemput barang yang hendak diperbaiki dan menawarkan kwalitas yang baik dan harga yang terjangkau.\r\n\r\nKami, CV Djaya Hydraulic yang beralamatkan di Jl SM Amin / Arengka 2 No 89D .Panam Pekanbaru yang bergerak dibidang perbengkelan, pengadaaan, jasa perbaikan alat . alat industri dari Pabrik Kelapa Sawit dan komponen alat berat lainnya.\r\n\r\nKami lebih menekankan kepada perbaikan atau pembuatan barang dan jasa industri, dimana kami memberikan pelayanan antar jemput barang yang hendak diperbaiki dan menawarkan kwalitas yang baik dan harga yang terjangkau.\r\n\r\nasdasd\r\nasdasd\r\nasdas\r\nasd\r\n\r\nKami, CV Djaya Hydraulic yang beralamatkan di Jl SM Amin / Arengka 2 No 89D  Panam Pekanbaru yang bergerak dibidang perbengkelan, pengadaaan, jasa perbaikan alat alat industri dari Pabrik Kelapa Sawit dan komponen alat berat lainnya.\r\n\r\nKami lebih menekankan kepada perbaikan atau pembuatan barang dan jasa industri, dimana kami memberikan pelayanan antar jemput barang yang hendak diperbaiki dan menawarkan kwalitas yang baik dan harga yang terjangkau.\r\n\r\nasdasd\r\nasdasd\r\nasdas\r\nasd\r\n\r\nasdasd\r\nasdasd\r\nasdas\r\nasd');

-- --------------------------------------------------------

--
-- Table structure for table `projec`
--

CREATE TABLE IF NOT EXISTS `projec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `foto_p` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `projec`
--

INSERT INTO `projec` (`id`, `nama`, `foto_p`) VALUES
(1, 'inda', 'work-1.jpg'),
(2, 'lirta', 'work-2.jpg'),
(3, 'padisma', 'work-3.jpg'),
(6, 'nnn', 'work-8.jpg'),
(7, 'mmm', 'bg_3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
