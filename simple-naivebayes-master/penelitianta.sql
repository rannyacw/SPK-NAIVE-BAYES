-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2022 pada 06.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penelitianta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tablename`
--

CREATE TABLE `tablename` (
  `matematika` varchar(300) DEFAULT NULL,
  `pemrog` varchar(300) DEFAULT NULL,
  `pbo` varchar(300) DEFAULT NULL,
  `multimedia` varchar(300) DEFAULT NULL,
  `jarkom` varchar(300) DEFAULT NULL,
  `konsentrasi` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tablename`
--

INSERT INTO `tablename` (`matematika`, `pemrog`, `pbo`, `multimedia`, `jarkom`, `konsentrasi`) VALUES
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Cukup', 'Tinggi', 'Cukup', 'Tinggi', 'TKJ'),
('Tinggi', 'Cukup', 'Tinggi', 'Cukup', 'Tinggi', 'TKJ'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Cukup', 'Tinggi', 'Rendah', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Cukup', 'MM'),
('Tinggi', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Cukup', 'Cukup', 'Tinggi', 'Rendah', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Rendah', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Rendah', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'MM'),
('Cukup', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'MM'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Cukup', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'TKJ'),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'RPL '),
('Rendah', 'Cukup', 'Tinggi', 'Rendah', 'Tinggi', 'TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jarkom`
--

CREATE TABLE `tbl_jarkom` (
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jarkom`
--

INSERT INTO `tbl_jarkom` (`kategori`) VALUES
('Tinggi'),
('Cukup '),
('Rendah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsentrasi`
--

CREATE TABLE `tbl_konsentrasi` (
  `konsentrasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konsentrasi`
--

INSERT INTO `tbl_konsentrasi` (`konsentrasi`) VALUES
('RPL '),
('MM'),
('TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matem`
--

CREATE TABLE `tbl_matem` (
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_matem`
--

INSERT INTO `tbl_matem` (`kategori`) VALUES
('Tinggi'),
('Cukup '),
('Rendah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_multi`
--

CREATE TABLE `tbl_multi` (
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_multi`
--

INSERT INTO `tbl_multi` (`kategori`) VALUES
('Tinggi'),
('Cukup '),
('Rendah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nama`
--

CREATE TABLE `tbl_nama` (
  `Nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pbo`
--

CREATE TABLE `tbl_pbo` (
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pbo`
--

INSERT INTO `tbl_pbo` (`kategori`) VALUES
('Tinggi'),
('Cukup '),
('Rendah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemrog`
--

CREATE TABLE `tbl_pemrog` (
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pemrog`
--

INSERT INTO `tbl_pemrog` (`kategori`) VALUES
('Tinggi'),
('Cukup '),
('Rendah');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
