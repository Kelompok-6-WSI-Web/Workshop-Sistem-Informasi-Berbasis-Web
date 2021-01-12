-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 04:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hi_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_news` int(5) NOT NULL,
  `judul_news` varchar(50) NOT NULL,
  `deskripsi_news` text NOT NULL,
  `banner_news` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_news`, `judul_news`, `deskripsi_news`, `banner_news`) VALUES
(1, 'SALEEEEE', 'bismillah', ''),
(2, 'promo', 'alhamdulillah', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Alat Hidroponik'),
(2, 'Sayuran');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kecamatan`, `tarif`) VALUES
(1, 'Kalisat', 40000),
(2, 'Sumbersari', 15000),
(3, 'Ambulu', 30000),
(4, 'Arjasa', 20000),
(5, 'Balung', 20000),
(6, 'Bangsalsari', 30000),
(7, 'Gumukmas', 30000),
(8, 'Jelbuk', 35000),
(9, 'Jenggawah', 20000),
(10, 'Jombang', 20000),
(11, 'Kaliwates', 10000),
(12, 'Kencong', 40000),
(13, 'Ledokombo', 30000),
(14, 'Mayang', 40000),
(15, 'Mumbulsari ', 40000),
(16, 'Pakusari', 20000),
(17, 'Panti', 15000),
(18, 'Rambipuji', 8000),
(19, 'Semboro', 20000),
(20, 'Silo', 25000),
(21, 'Sukorambi', 10000),
(22, 'Sukowono', 30000),
(23, 'Sumberbaru', 30000),
(24, 'Sumberjambe', 30000),
(25, 'Tanggul', 40000),
(26, 'Tempurejo', 30000),
(27, 'Umbulsari', 30000),
(28, 'Wuluhan', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` varchar(10) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `bukti`, `status`) VALUES
(1, 2, 1, '2020-12-04', '180000', 'polije.jpg', 'proses'),
(2, 2, 2, '2020-12-16', '200000', '0', NULL),
(3, 2, 0, '2020-12-24', '35000', '0', NULL),
(4, 2, 1, '2020-12-24', '40000', '0', NULL),
(5, 2, 2, '2020-12-24', '80000', '0', NULL),
(6, 2, 1, '2020-12-24', '100000', '0', NULL),
(7, 2, 1, '2020-12-24', '50000', '0', NULL),
(8, 3, 1, '2020-12-24', '50000', '0', NULL),
(9, 3, 1, '2020-12-24', '35000', '0', NULL),
(10, 2, 1, '2020-12-24', '35000', '0', NULL),
(11, 2, 1, '2020-12-24', '65000', '0', NULL),
(12, 2, 1, '2020-12-24', '55000', '0', NULL),
(13, 2, 1, '2020-12-24', '55000', '0', NULL),
(14, 2, 1, '2020-12-24', '50000', '0', NULL),
(15, 2, 1, '2020-12-24', '40000', '0', NULL),
(16, 2, 1, '2020-12-24', '35000', '0', NULL),
(17, 0, 0, '2020-12-24', '15000', '0', NULL),
(18, 0, 1, '2020-12-24', '55000', '0', NULL),
(19, 0, 1, '2020-12-24', '50000', '0', NULL),
(20, 2, 1, '2020-12-24', '95000', '0', NULL),
(21, 3, 1, '2020-12-24', '55000', '0', NULL),
(22, 3, 1, '2020-12-24', '50000', '0', NULL),
(23, 0, 1, '2020-12-24', '55000', '0', NULL),
(24, 0, 1, '2020-12-24', '50000', '0', NULL),
(25, 0, 1, '2020-12-24', '55000', '0', NULL),
(26, 0, 1, '2020-12-24', '35000', '0', NULL),
(27, 0, 1, '2020-12-25', '50000', '0', NULL),
(28, 0, 1, '2020-12-25', '55000', '0', NULL),
(29, 0, 1, '2020-12-25', '60000', '0', NULL),
(30, 0, 2, '2020-12-25', '35000', '0', NULL),
(31, 3, 1, '2020-12-25', '45000', '0', NULL),
(32, 3, 1, '2020-12-25', '35000', '0', NULL),
(33, 3, 2, '2020-12-25', '35000', '0', NULL),
(34, 3, 1, '2020-12-25', '35000', '0', NULL),
(35, 3, 1, '2020-12-25', '45000', '0', NULL),
(36, 3, 1, '2020-12-25', '40000', '0', NULL),
(37, 3, 1, '2020-12-25', '40000', '0', NULL),
(38, 3, 1, '2020-12-25', '20000', '0', NULL),
(39, 2, 2, '2020-12-25', '35000', 'images.jpg', 'proses'),
(40, 2, 2, '2020-12-25', '35000', '0', NULL),
(41, 2, 1, '2020-12-25', '40000', '0', NULL),
(42, 2, 1, '2020-12-25', '50000', '0', NULL),
(43, 2, 1, '2020-12-25', '50000', '0', NULL),
(44, 2, 1, '2020-12-25', '65000', '0', NULL),
(45, 2, 1, '2020-12-25', '60000', '0', NULL),
(46, 2, 1, '2020-12-25', '115000', 'unnamed (2).jpg', 'proses'),
(47, 5, 2, '2020-12-25', '35000', 'unnamed.jpg', 'proses'),
(48, 2, 1, '2020-12-25', '70000', '1.png', 'proses'),
(49, 6, 2, '2020-12-25', '50000', '2.png', 'proses'),
(50, 2, 1, '2020-12-27', '65000', '4.png', 'proses'),
(51, 3, 1, '2020-12-29', '70000', '', NULL),
(52, 2, 2, '2020-12-29', '65000', '', NULL),
(53, 2, 2, '2020-12-29', '65000', '', NULL),
(54, 2, 1, '2020-12-29', '90000', '', NULL),
(55, 2, 1, '2020-12-29', '55000', '', NULL),
(56, 2, 2, '2020-12-29', '70000', '', NULL),
(57, 2, 1, '2020-12-29', '50000', '', NULL),
(58, 2, 1, '2020-12-29', '55000', '', NULL),
(59, 2, 1, '2020-12-29', '85000', '', NULL),
(60, 2, 1, '2020-12-29', '70000', '', NULL),
(61, 2, 2, '2020-12-29', '80000', '', NULL),
(62, 2, 2, '2020-12-29', '70000', '', NULL),
(63, 2, 2, '2020-12-29', '60000', '', NULL),
(64, 2, 1, '2021-01-03', '70000', '1.png', 'proses'),
(65, 2, 1, '2021-01-07', '55000', '4.png', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `subharga`) VALUES
(1, 1, 1, '10000', 0),
(2, 2, 2, '30000', 0),
(3, 5, 1, '2', 0),
(4, 5, 6, '1', 0),
(5, 5, 8, '1', 0),
(6, 6, 1, '20000', 0),
(7, 6, 6, '15000', 0),
(8, 6, 8, '10000', 0),
(9, 7, 1, '20000', 0),
(10, 7, 8, '10000', 0),
(11, 8, 1, '20000', 0),
(12, 8, 8, '10000', 0),
(13, 9, 6, '15000', 0),
(14, 10, 6, '15000', 0),
(15, 11, 8, '10000', 0),
(16, 11, 6, '15000', 0),
(17, 11, 1, '20000', 0),
(18, 12, 1, '20000', 0),
(19, 12, 6, '15000', 0),
(20, 13, 1, '20000', 0),
(21, 13, 6, '15000', 0),
(22, 14, 1, '20000', 0),
(23, 14, 8, '10000', 0),
(24, 15, 1, '20000', 0),
(25, 16, 6, '15000', 0),
(26, 17, 6, '15000', 0),
(27, 18, 1, '20000', 0),
(28, 18, 6, '15000', 0),
(29, 19, 1, '20000', 0),
(30, 19, 8, '10000', 0),
(31, 20, 1, '3', 0),
(32, 20, 6, '1', 0),
(33, 21, 6, '1', 0),
(34, 21, 1, '1', 0),
(35, 22, 1, '1', 0),
(36, 22, 8, '1', 0),
(37, 23, 1, '20000', 0),
(38, 23, 6, '15000', 0),
(39, 24, 1, '20000', 0),
(40, 24, 8, '10000', 0),
(41, 25, 1, '20000', 0),
(42, 25, 6, '15000', 0),
(43, 26, 6, '15000', 0),
(44, 27, 1, '20000', 0),
(45, 27, 8, '10000', 0),
(46, 28, 6, '15000', 0),
(47, 28, 1, '20000', 0),
(48, 29, 1, '2', 0),
(49, 30, 1, '1', 0),
(50, 31, 6, '1', 0),
(51, 31, 8, '1', 0),
(52, 32, 6, '1', 0),
(53, 39, 1, '1', 20000),
(54, 40, 1, '1', 20000),
(55, 41, 1, '1', 20000),
(56, 42, 1, '1', 10000),
(57, 42, 8, '1', 10000),
(58, 43, 1, '1', 10000),
(59, 43, 8, '1', 10000),
(60, 44, 1, '1', 10000),
(61, 44, 6, '1', 10000),
(62, 44, 8, '1', 10000),
(63, 45, 1, '2', 40000),
(64, 46, 1, '2', 45000),
(65, 46, 8, '1', 45000),
(66, 46, 6, '3', 45000),
(67, 47, 1, '1', 20000),
(68, 48, 1, '1', 30000),
(69, 48, 6, '2', 30000),
(70, 49, 6, '1', 20000),
(71, 49, 1, '1', 20000),
(72, 50, 6, '3', 45000),
(73, 51, 1, '1', 30000),
(74, 51, 6, '2', 30000),
(75, 52, 1, '1', 30000),
(76, 52, 6, '2', 30000),
(77, 53, 1, '1', 30000),
(78, 53, 6, '2', 30000),
(79, 54, 1, '2', 30000),
(80, 54, 6, '2', 30000),
(81, 55, 6, '1', 20000),
(82, 55, 8, '2', 20000),
(83, 56, 1, '1', 20000),
(84, 56, 6, '1', 20000),
(85, 56, 8, '2', 20000),
(86, 57, 1, '1', 10000),
(87, 57, 8, '1', 10000),
(88, 58, 1, '1', 15000),
(89, 58, 6, '1', 15000),
(90, 59, 1, '1', 15000),
(91, 59, 6, '3', 15000),
(92, 60, 1, '2', 0),
(93, 60, 8, '1', 0),
(94, 61, 1, '1', 0),
(95, 61, 6, '3', 0),
(96, 62, 1, '2', 0),
(97, 62, 6, '1', 0),
(98, 63, 1, '1', 20000),
(99, 63, 6, '1', 15000),
(100, 63, 8, '1', 10000),
(101, 64, 1, '1', 20000),
(102, 64, 6, '2', 30000),
(103, 65, 1, '1', 20000),
(104, 65, 6, '1', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `berat_produk` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_jenis`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(6, 0, 'Sawi', '15000', '1000', 'Sawi.jpg', 'sayur sawi murah berkualitas sangat baik'),
(10, 0, 'Pakcoy', '12000', '1000', 'pakcoy.jpg', 'Hasil panen dari kebun hidroponik kami den...'),
(11, 0, 'Kangkung', '10000', '1000', 'kangkung.jpg', 'Sayur murah hasil panen dari kebun hidropo...'),
(12, 0, 'Sawi', '10000', '1000', 'Sawi.jpg', 'Sayur murah hasil panen dari kebun hidropo...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_kategori`, `email`, `nama`, `no_hp`, `alamat`, `password`) VALUES
(1, 1, 'mohamadhidayatullah@gmail.com', 'mohammad hidayatullah', '082301878744', 'Pamekarasa, Jawa Timur', '123'),
(2, 2, 'rian@gmail.com', 'rian admojo', '082333344555', 'jalan jalan', '123'),
(3, 2, 'yayang@gmail.com', 'Yayang', '087123456789', 'jalan2', '1234'),
(4, 2, 'sintanur096@gmail.com', 'sinta nuriyah wulandari', '085235138387', 'Winongan Pasuruan', '12345'),
(5, 2, 'aku@gmail.com', 'Sayang', '085436243098', 'Perum Mastrip Blok ZZ', '333'),
(6, 2, 'tiyas@gmail.com', 'Nih Latuliah', '086543123456', 'Jalan Jawa', '5555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_news` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
