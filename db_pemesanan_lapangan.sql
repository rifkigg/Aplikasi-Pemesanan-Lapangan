-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2024 pada 08.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemesanan_lapangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_lapangan`
--

CREATE TABLE `pemesanan_lapangan` (
  `Jam` varchar(20) NOT NULL,
  `Senin` varchar(50) NOT NULL,
  `Selasa` varchar(50) NOT NULL,
  `Rabu` varchar(50) NOT NULL,
  `Kamis` varchar(50) NOT NULL,
  `Jumat` varchar(50) NOT NULL,
  `Sabtu` varchar(50) NOT NULL,
  `Minggu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan_lapangan`
--

INSERT INTO `pemesanan_lapangan` (`Jam`, `Senin`, `Selasa`, `Rabu`, `Kamis`, `Jumat`, `Sabtu`, `Minggu`) VALUES
('01.00 Sampai 02.00', '', '', '', '', '', '', ''),
('02.00 Sampai 03.00', '', '', '', '', '', '', ''),
('03.00 Sampai 04.00', '', '', '', '', '', '', ''),
('04.00 Sampai 05.00', '', '', '', '', '', '', ''),
('05.00 Sampai 06.00', '', '', '', '', '', '', ''),
('06.00 Sampai 07.00', '', '', '', '', '', '', ''),
('07.00 Sampai 08.00', '', '', '', '', '', '', ''),
('08.00 Sampai 09.00', '', '', '', '', '', '', ''),
('09.00 Sampai 10.00', '', '', '', '', '', '', ''),
('10.00 Sampai 11.00', '', '', '', '', '', '', ''),
('11.00 Sampai 12.00', '', '', '', '', '', '', ''),
('12.00 Sampai 13.00', '', '', '', '', '', '', ''),
('13.00 Sampai 14.00', '', '', '', '', '', '', ''),
('14.00 Sampai 15.00', '', '', '', '', '', '', ''),
('15.00 Sampai 16.00', '', '', '', '', '', '', ''),
('16.00 Sampai 17.00', '', '', '', '', '', '', ''),
('17.00 Sampai 18.00', '', '', '', '', '', '', ''),
('18.00 Sampai 19.00', '', '', '', '', '', '', ''),
('19.00 Sampai 20.00', '', '', '', '', '', '', ''),
('20.00 Sampai 21.00', '', '', '', '', '', '', ''),
('21.00 Sampai 22.00', '', '', '', '', '', '', ''),
('22.00 Sampai 23.00', '', '', '', '', '', '', ''),
('23.00 Sampai 00.00', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan_lapangan`
--
ALTER TABLE `pemesanan_lapangan`
  ADD PRIMARY KEY (`Jam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
