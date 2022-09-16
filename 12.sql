-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 03:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `12`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '1'),
(9, 'boss', 'boss', '1');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(8) NOT NULL,
  `tipe` varchar(60) DEFAULT NULL,
  `harga` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `tipe`, `harga`) VALUES
(6, 'Stiker', '5000'),
(5, 'banner2', '12000'),
(7, 'stiker2', '9000'),
(8, 'Art paper', '3000'),
(26, 'Banner ', '10000'),
(12, 'Art paper2', '5000'),
(13, 'stiker transparan', '12000'),
(14, 'banner3', '15000'),
(15, 'Art paper3', '7000'),
(33, 'stiker baru', '7000'),
(27, 'banner4', '18000'),
(21, 'Stiker V', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `boss`
--

CREATE TABLE `boss` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss`
--

INSERT INTO `boss` (`id`, `nama`, `username`, `password`) VALUES
(1, 'boss', 'boss', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(9) NOT NULL,
  `tipe` varchar(40) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `qty` int(8) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `hp` varchar(15) DEFAULT NULL,
  `catatan` text NOT NULL,
  `name` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `size` int(11) NOT NULL,
  `ymd` varchar(12) DEFAULT NULL,
  `invoice` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tipe`, `harga`, `qty`, `nama`, `alamat`, `hp`, `catatan`, `name`, `type`, `size`, `ymd`, `invoice`) VALUES
(3897, 'banner2', 12000, 1, 'simon', '1', '1', '1', '', '', 0, '06-09-21', '193132'),
(3998, 'Stiker', 5000, 1, 'mimin', 'wqeqwe', '1212', 'wewe', '', '', 0, '06-09-21', '655044'),
(3949, 'banner4', 18000, 6, 'qweqw', '1231', 'qweqw231', '123213', '', '', 0, '06-09-21', '735471'),
(4191, 'Art paper3', 7000, 2, 'wew', 'ddd', 'www', 'wewe', 'bob.jpg', '47974', 0, '19-09-21', '963659'),
(4183, 'banner4', 18000, 2, 'simon', 'surabaya', '09890786', '1233', 'bob.jpg', '47974', 47974, '08-09-21', '677884'),
(4182, 'banner3', 15000, 1, 'simon', 'surabaya', '09890786', '1233', 'bob.jpg', '47974', 47974, '08-09-21', '677884'),
(4154, 'Art paper2', 5000, 1, 'andrian', 'surabaya jawa timur', '08765432112', '3x3 ', 'bob.jpg', '47974', 47974, '07-09-21', '730372'),
(4166, 'Art paper2', 5000, 1, 'andrian', 'surabaya jawa timur', '08765432112', '3x3 ', 'bob.jpg', '47974', 47974, '07-09-21', '537074'),
(4163, 'Stiker V', 12000, 1, 'andrian', 'surabaya jawa timur', '08765432112', '3x3 ', 'bob.jpg', '47974', 47974, '07-09-21', '730372'),
(4175, 'Stiker V', 12000, 1, 'andrian', 'surabaya jawa timur', '08765432112', '3x3 ', 'bob.jpg', '47974', 47974, '07-09-21', '537074');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'simon', '12', '1'),
(2, 'mimin', '1', '1'),
(3, 'test', 'test', '1'),
(4, 'Hosni', 'Hos', '14'),
(5, 'Andrian', 'Andrian_cahya', 'ferianto12'),
(6, 'Anton', 'Anton', 'anton123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss`
--
ALTER TABLE `boss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `boss`
--
ALTER TABLE `boss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4201;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
