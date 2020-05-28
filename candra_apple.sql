-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 19.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candra_apple`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(4) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `total_bayar` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `email`, `nomor_hp`, `keterangan`, `total_bayar`) VALUES
(1, 'Iphone 7 plus', 'entestore691@gmail.com', '089666991', 'Barang Harus Baguss', 3800000),
(2, 'Iphone 7+', 'entestore69@gmail.com', '089666999777', 'Harus Bagus', 4700000),
(4, 'Iphone 8', 'hiiiigg@gmail.com', '05888888', 'mulus', 4000000),
(5, 'Iphone 7 plus', 'entestore691@gmail.com', '45588888', 'Barang Harus Baguss', 4000000),
(6, 'Iphone 7 plus', 'entestore691@gmail.com', '578588', 'mulus', 4000000),
(7, 'Iphone X', 'entestore691@gmail.com', '585089689', 'Barang Harus Baguss', 4000000),
(8, 'Iphone 8', 'entestore691@gmail.com', '458585', 'mulus', 4000000),
(9, 'Iphone X', 'hidaytatsvgh@gmail.com', '5455555', 'mulus', 4000000),
(10, 'Iphone 8', 'hidayattaufik340@gmail.com', '058757857887', 'Barang Harus Baguss', 4000000),
(12, 'Iphone X', 'hidayattaufik340@gmail.com', '52888', 'hjtyhghgg', 4000000),
(13, 'Iphone Xs', 'hidayattaufik340@gmail.com', '089659469690', 'Barang Harus Baguss', 4000000),
(14, 'Iphone Xs max', 'hidayattaufik340@gmail.com', '058585858', 'Barang Harus Baguss', 4000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
