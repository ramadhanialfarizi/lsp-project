-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 17.37
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
