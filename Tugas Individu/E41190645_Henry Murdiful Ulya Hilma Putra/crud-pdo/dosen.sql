-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2020 pada 04.48
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `Nip` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Umur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`Nip`, `Nama`, `Jenis_kelamin`, `Umur`) VALUES
('E41190990', 'Ery Budi P.', 'Laki-Laki', 25),
('E41190991', 'Budi Prasetia E.', 'Laki-Laki', 23),
('E41190992', 'Prasetia Ery B.', 'Laki-Laki', 25),
('E41190993', 'Pambudi Pamungkas', 'Laki-Laki', 24),
('E41190994', 'Pamungkas Pambudi ', 'Laki-Laki', 26),
('E41190995', 'A. Rizhal', 'Laki-Laki', 29),
('E41190996', 'A. Buyung', 'Laki-Laki', 27);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`Nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
