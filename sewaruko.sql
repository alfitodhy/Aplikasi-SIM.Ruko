-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 10.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewaruko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaruko`
--

CREATE TABLE `penyewaruko` (
  `NIK` int(20) NOT NULL,
  `NamaPenyewa` varchar(30) DEFAULT NULL,
  `NoHP` int(13) DEFAULT NULL,
  `NomorRuko` varchar(20) DEFAULT NULL,
  `TanggalMulaiSewa` date DEFAULT NULL,
  `TanggalAkhirSewa` date DEFAULT NULL,
  `BesarPembayaran` double(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewaruko`
--

INSERT INTO `penyewaruko` (`NIK`, `NamaPenyewa`, `NoHP`, `NomorRuko`, `TanggalMulaiSewa`, `TanggalAkhirSewa`, `BesarPembayaran`) VALUES
(325345562, 'akukukuuu', 2147483647, '5554', '2023-06-26', '2023-08-04', 988875),
(2147483647, 'alfito', 823123312, '112', '2023-05-03', '2023-05-25', 1200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruko`
--

CREATE TABLE `ruko` (
  `NomorRuko` varchar(20) NOT NULL,
  `HargaSewa` double(12,0) DEFAULT NULL,
  `AlamatRuko` text DEFAULT NULL,
  `StatusRuko` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruko`
--

INSERT INTO `ruko` (`NomorRuko`, `HargaSewa`, `AlamatRuko`, `StatusRuko`) VALUES
('123', 11111, 'kompui', 'baru'),
('234', 676767, 'bumiayu', 'baru'),
('56787', 34234, 'kampung', 'baru'),
('878', 2372893, 'pagardewa', 'ngutang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penyewaruko`
--
ALTER TABLE `penyewaruko`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `ruko`
--
ALTER TABLE `ruko`
  ADD PRIMARY KEY (`NomorRuko`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penyewaruko`
--
ALTER TABLE `penyewaruko`
  MODIFY `NIK` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
