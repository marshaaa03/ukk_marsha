-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2024 pada 02.18
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kasir`
--
CREATE DATABASE IF NOT EXISTS `kasir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kasir`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'marsha', 'marsha'),
(2, 'sha', 'sha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE IF NOT EXISTS `detail_penjualan` (
  `produk_id` int(5) NOT NULL,
  `penjualan_id` int(5) NOT NULL,
  `jumlah_produk` int(10) NOT NULL,
  `sub_total` int(50) NOT NULL,
  `detail_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`produk_id`, `penjualan_id`, `jumlah_produk`, `sub_total`, `detail_id`) VALUES
(131, 55577, 1, 5000, 1221),
(132, 55588, 2, 5000, 1222);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `penjualan_id` int(5) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  PRIMARY KEY (`penjualan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `tanggal_penjualan`, `total_harga`) VALUES
(55588, '2024-02-20', '4000'),
(66677, '2024-02-26', '9000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `produk_id` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` varchar(20) NOT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `harga`, `stok`) VALUES
(131, 'Minute Maid', 5000, '6'),
(132, 'ABC Coffee ', 4000, '8'),
(133, ' Teh Pucuk', 3500, '8'),
(134, 'Fruit Tea ', 5000, '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
