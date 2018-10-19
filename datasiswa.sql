-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.12
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataprofil`
--

CREATE TABLE `dataprofil` (
  `nama` varchar(40) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `program_studi` varchar(40) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `moto_hidup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataprofil`
--

INSERT INTO `dataprofil` (`nama`, `nim`, `tanggal_lahir`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('elisa', '1234', '2018-10-12', 'Perempuan', 'D3 Manajemen Informatika', 'Fakultas Ilmu Terapan', 'rgry', 'dfegt'),
('hasby', '5678', '2018-11-18', 'Laki-laki', 'Desain Interior', 'Fakultas Industri Kreatif', 'bandung', 'gfcfcg'),
('firza', '7890', '2018-10-04', 'Laki-laki', 'D3 Teknik Telekomunikasi', 'Fakultas Ilmu Terapan', 'frgr', 'etet'),
('', '', '', 'Laki-laki', 'D3 Manajemen Informatika', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
