-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 03.50
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_komik`
--

CREATE TABLE `data_komik` (
  `id_komik` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Sinopsis` varchar(1000) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Updated` timestamp NULL DEFAULT NULL,
  `Tanggal_Rilis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_komik`
--

INSERT INTO `data_komik` (`id_komik`, `Judul`, `Penulis`, `Sinopsis`, `Gambar`, `Created_at`, `Updated`, `Tanggal_Rilis`) VALUES
(17, 'reretregdsg', 'fsgfgghgh', 'rtdsfa', 'onepiece.jpeg', '2023-01-24 17:23:32', NULL, ''),
(23, 'rtrnikoad', 'rt', 'trt67', 'onepiece.jpeg', '2023-01-24 17:29:07', NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_created_at` timestamp NULL DEFAULT NULL,
  `user_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_email`, `user_password`, `user_created_at`, `user_updated_at`) VALUES
(1, '', 'hui@gmail.com', '$2y$10$oHmyLY8vnGNjutbtwsD59uxEwxST4hp1u.JfJet7YdB8rqhcvUmq2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_komik`
--
ALTER TABLE `data_komik`
  ADD PRIMARY KEY (`id_komik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_komik`
--
ALTER TABLE `data_komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
