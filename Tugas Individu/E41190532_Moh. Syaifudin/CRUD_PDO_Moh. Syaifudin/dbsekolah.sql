-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 01:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `alamat`, `kelas`) VALUES
('NIS001', 'Muhammad Hidayatullah', 'Jl Pepaya No 55', '2'),
('NIS002', 'Bambang', 'Jl Durian No 44', '2'),
('NIS003', 'Firman Wahyudi', 'Jl Anggur No 87', '1'),
('NIS004', 'Benny Ramdhani', 'Jl Duku No 35', '1'),
('NIS005', 'Ihwan Samad', 'Jl Belimbing No 99', '3'),
('NIS006', 'Rudi Tabuti', 'JL Dirgantara No 77', '2'),
('NIS007', 'Habibi', 'Jl Kungingan No 12', '1'),
('NIS008', 'Dora The Explorer', 'Jl Pisang Ijo No 89', '3'),
('NIS009', 'Wahyu Adi', 'Jl Kapuk No 66', '3'),
('NIS010', 'Budi Sakti', 'JL Nusantara No 1', '3'),
('NIS011', 'Akbar Rosidin', 'JL Palangka No 71', '2'),
('NIS012', 'Bagus Sandy', 'Jl. Juragan No 123', '2'),
('NIS013', 'Jordan Vincent', 'Jln Merak no 21', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
