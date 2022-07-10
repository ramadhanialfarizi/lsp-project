-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2022 pada 17.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `deskripsi_produk` varchar(600) NOT NULL,
  `harga` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `gambar_produk`, `nama_produk`, `deskripsi_produk`, `harga`) VALUES
(16, '62cae22d6719f.jpg', 'cat choice', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor \r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure \r\ndolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Rp. 12.000'),
(17, '62cae3ad34dac.jpg', 'cat choice', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor \r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure \r\ndolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Rp. 12.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nomor_telepon` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `seller`
--

INSERT INTO `seller` (`id`, `nama_lengkap`, `email`, `nomor_telepon`, `password`) VALUES
(1, 'ramadhani', 'ramadhani@gmail.com', '12312312313', '$2y$10$gAcB.PTJxAazSeLeL6Fs9uBZ/AUUoDn4hwmgxw2hxSgdzhMfNE4hC'),
(2, 'muhammad ramadhani alfarizi', 'ramadhani.alfarizi@gmail.com', '12312312313', '$2y$10$zujk2z8UtGJNHZPlZVIJM.aMXCnMTI1yx/VB7Zw8aF7hQszd13eaC'),
(3, 'yoza', 'elnickopangestu@gmail.com', '12312312313', '$2y$10$5Nmn3r5y2uhQYQ0R0zUPUePyP6VV6oVnySKPr3IyAFVNPL3Oftkz2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nomor_telepon` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `nomor_telepon`, `alamat`, `password`) VALUES
(3, 'muhammad ramadhani alfarizi', 'ramadhani.alfarizi@gmail.com', '0812123123131', 'jl. kenangan indah bersama mu kasih', '$2y$10$eiSYA5wtAe0tseDChWzV0OnMekG5qivOwjtyYfYtdgsKVA7P6sPB.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
