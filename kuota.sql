-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2018 pada 13.03
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tampung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuota`
--

CREATE TABLE `kuota` (
  `Departemen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SNMPTN` int(11) NOT NULL,
  `SBMPTN` int(11) NOT NULL,
  `Mandiri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuota`
--

INSERT INTO `kuota` (`Departemen`, `SNMPTN`, `SBMPTN`, `Mandiri`) VALUES
('Teknik Informatika', 54, 72, 54),
('Sistem Informasi', 45, 60, 45),
('Teknologi Informasi', 14, 18, 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
