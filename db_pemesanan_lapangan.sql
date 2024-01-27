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
('01-02', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('02-03', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('03-04', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('04-05', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('05-06', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('06-07', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('07-08', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('08-09', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('09-10', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('10-11', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('11-12', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('12-13', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('13-14', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('14-15', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('15-16', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('16-17', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('17-18', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('18-19', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('19-20', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('20-21', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('21-22', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('22-23', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong'),
('23-00', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong');

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
