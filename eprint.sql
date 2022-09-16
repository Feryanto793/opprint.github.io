-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 07:20 AM
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
(5, 'IPHONE 4', '8500'),
(7, 'IPHONE 6', '9500'),
(8, 'IPHONE 6+', '9500'),
(9, 'IPHONE 7', '8500'),
(10, 'IPHONE 7+', '8500'),
(11, 'IPHONE 4 (DB)', '17500'),
(12, 'IPHONE 5 (DB)', '17500'),
(13, 'IPHONE 6 (DB)', '17500'),
(14, 'IPHONE 7 (DB)', '17500'),
(15, 'IPHONE 6+ (DB)', '17500'),
(16, 'IPHONE 7+ (DB)', '17500'),
(17, 'IPAD MINI 1/2/3', '30000'),
(18, 'IPAD MINI 4', '32500'),
(19, 'IPAD 2/3/4', '35000'),
(20, 'IPAD AIR /IPAD 5/6', '40000'),
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
(1, 'boss', 'boss', 'boss');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(9) NOT NULL,
  `tipe` varchar(40) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `qty` int(8) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `hp` varchar(15) DEFAULT NULL,
  `ymd` varchar(12) DEFAULT NULL,
  `invoice` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tipe`, `harga`, `qty`, `nama`, `alamat`, `hp`, `ymd`, `invoice`) VALUES
(1, 'IPHONE 5', 8500, 3, 'bayu', 'cilacap', '081390241937', '25-08-17', '453616'),
(88, 'SAMSUNG TAB A 10IN', 40000, 5, 'bayu', 'cilacap', '081390241937', '25-08-17', '453616'),
(141, 'VIVO Y51', 8500, 2, 'bayu', 'cilacap', '081390241937', '25-08-17', '453616'),
(144, 'VIVO X3 SHOT', 8500, 19, 'bayu', 'cilacap', '081390241937', '25-08-17', '453616'),
(321, 'IPHONE 5', 8500, 3, 'bayu', 'cilacap', '081390241937', '25-08-17', '881941'),
(360, 'SAMSUNG A3 2017/A320', 8500, 67, 'bayu', 'cilacap', '081390241937', '25-08-17', '881941'),
(364, 'SAMSUNG A5', 8500, 9, 'bayu', 'cilacap', '081390241937', '25-08-17', '881941'),
(408, 'SAMSUNG TAB A 10IN', 40000, 5, 'bayu', 'cilacap', '081390241937', '25-08-17', '881941'),
(461, 'VIVO Y51', 8500, 2, 'bayu', 'cilacap', '081390241937', '25-08-17', '881941'),
(464, 'VIVO X3 SHOT', 8500, 19, 'bayu', 'cilacap', '081390241937', '25-08-17', '881941'),
(641, 'IPHONE 5', 8500, 3, 'bayu', 'cilacap', '081390241937', '25-08-17', '144899'),
(680, 'SAMSUNG A3 2017/A320', 8500, 67, 'bayu', 'cilacap', '081390241937', '25-08-17', '144899'),
(684, 'SAMSUNG A5', 8500, 9, 'bayu', 'cilacap', '081390241937', '25-08-17', '144899'),
(728, 'SAMSUNG TAB A 10IN', 40000, 5, 'bayu', 'cilacap', '081390241937', '25-08-17', '144899'),
(781, 'VIVO Y51', 8500, 2, 'bayu', 'cilacap', '081390241937', '25-08-17', '144899'),
(784, 'VIVO X3 SHOT', 8500, 19, 'bayu', 'cilacap', '081390241937', '25-08-17', '144899'),
(961, 'IPHONE 5', 8500, 1, 'bayu', 'cilacap', '081390241937', '25-08-17', '836118'),
(1281, 'IPHONE 5', 8500, 1, 'bayu', 'cilacap', '081390241937', '25-08-17', '640910'),
(1596, 'UNIVERSAL 5 INC', 8500, 2, 'bayu', 'cilacap', '081390241937', '25-08-17', '640910'),
(1602, 'IPHONE 4', 8500, 3, 'bayu', 'semarang', '081390241937', '25-08-17', '116179'),
(1604, 'IPHONE 6+', 8500, 4, 'bayu', 'semarang', '081390241937', '25-08-17', '116179'),
(1921, 'IPHONE 5', 8500, 1, 'bayu', 'semarang', '', '25-08-17', '384569'),
(1922, 'IPHONE 4', 8500, 67, 'bayu', 'semarang', '', '25-08-17', '384569'),
(1923, 'IPHONE 6', 8500, 8, 'bayu', 'semarang', '', '25-08-17', '384569'),
(2261, 'SAMSUNG CORE 1/8262', 8500, 2, 'bayu', 'semarang', '081390241937', '25-08-17', '917590'),
(2262, 'SAMSUNG CORE 2/G355H', 8500, 10, 'bayu', 'semarang', '081390241937', '25-08-17', '917590'),
(2263, 'IPAD 2/3/4', 35000, 2, 'bayu', 'kebumen', '08127888', '30-08-17', '783376'),
(2264, 'IPAD 2/3/4', 35000, 1, 'bayu', 'kebumen', '08127888', '30-08-17', '337371'),
(2280, 'IPAD 2/3/4', 35000, 12, 'rehan', '232', '089221312312', '15-07-21', '298163'),
(2426, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '169348'),
(2460, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '526280'),
(2355, 'IPHONE 6+ (DB)', 17500, 1, 'ere', '12', '23343545', '15-07-21', '550511'),
(2596, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '966216'),
(2579, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '243711'),
(2647, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '325185'),
(2613, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '746681'),
(2511, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '860371'),
(2630, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '146729'),
(2800, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '621864'),
(2936, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '243629'),
(2919, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '426950'),
(2296, 'IPAD 2/3/4', 35000, 12, 'rehan', '232', '089221312312', '15-07-21', '607699'),
(2328, 'IPAD 2/3/4', 35000, 1, 'simon', 'eq', 'we', '15-07-21', '391593'),
(2312, 'IPAD 2/3/4', 35000, 1, 'simon', 'eq', 'we', '15-07-21', '609697'),
(2375, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '153423'),
(2376, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '153423'),
(2392, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '716584'),
(2393, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '716584'),
(2409, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '955089'),
(2410, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '955089'),
(2427, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '169348'),
(2443, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '327260'),
(2444, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '327260'),
(2461, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '526280'),
(2477, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '130015'),
(2478, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '130015'),
(2494, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '782791'),
(2495, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '782791'),
(2512, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '860371'),
(2545, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '505906'),
(2528, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '180139'),
(2529, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '180139'),
(2562, 'Stiker', 5000, 12, 'mimin', 'surabaya', '09878675', '15-07-21', '875167'),
(2648, 'Stiker V', 12000, 1, 'mimin', 'surabaya', '09878675', '15-07-21', '325185'),
(2664, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '692667'),
(2665, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '692667'),
(2681, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '169690'),
(2682, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '169690'),
(2715, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '463382'),
(2698, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '463618'),
(2699, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '463618'),
(2716, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '463382'),
(2732, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '415463'),
(2733, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '415463'),
(2749, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '468647'),
(2750, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '468647'),
(2766, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '471057'),
(2767, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '471057'),
(2783, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '161519'),
(2784, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '161519'),
(2801, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '621864'),
(2817, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '243476'),
(2818, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '243476'),
(2834, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '217867'),
(2835, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '217867'),
(2851, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '723812'),
(2852, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '723812'),
(2868, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '230698'),
(2869, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '230698'),
(2885, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '732954'),
(2886, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '732954'),
(2902, 'Stiker', 5000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '243818'),
(2903, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '243818'),
(2920, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '426950'),
(2937, 'Stiker V', 12000, 2, 'simon', 'djfiodjf', '090980', '15-07-21', '243629'),
(2953, 'Stiker', 5000, 21, 'ning', 'probolinggo', '086543222', '15-07-21', '317149'),
(2954, 'Stiker V', 12000, 3, 'ning', 'probolinggo', '086543222', '15-07-21', '317149');

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
(2, 'mimin', '1', '1');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `boss`
--
ALTER TABLE `boss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2955;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
