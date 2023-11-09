-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2023 pada 03.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mobil`
--

CREATE TABLE `data_mobil` (
  `no_polisi` varchar(8) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL,
  `merek_mobil` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `pemilik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_mobil`
--

INSERT INTO `data_mobil` (`no_polisi`, `tipe_mobil`, `merek_mobil`, `warna`, `pemilik`) VALUES
('B1063EYD', 'SIRION', 'DAIHATSU', 'PUTIH', 'DENI'),
('B107DEP', 'PAJERO SPORT', 'MITSUBISHI', 'SILVER', 'ACENG'),
('B1122ZFP', 'AVANZA', 'TOYOTA', 'SILVER', 'EDY'),
('B2336HI', ' COROLLA ALTIS', 'TOYOTA', 'HITAM', 'WENDY'),
('D444NUR', '330i', 'BMW', 'HITAM', 'Rayhan'),
('D4NUR', 'GR86', 'TOYOTA', 'MERAH', 'RAYHAN DANUR'),
('M455BOY', '318i', 'BMW', 'ABU', 'SUBHAN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`no_polisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
