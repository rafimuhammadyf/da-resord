-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 19.27
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da-resord`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_menus` bigint(20) NOT NULL,
  `id_users` bigint(20) NOT NULL,
  `id_tables` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_menus`, `id_users`, `id_tables`, `qty`, `updated_at`, `created_at`) VALUES
(25, 5, 34, 1, '2021-05-23 09:21:10', '2021-05-23 09:21:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(25) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `picture`, `type`, `description`, `price`, `updated_at`, `created_at`) VALUES
(11, 'Nasi Goreng', '2086859567nasgor.jpeg', 'makanan', 'Nasi goreng khas Indonesia, pilihan spesial dari da-resto.', 20000, '2021-04-27 22:35:14', '2021-04-27 22:35:14'),
(12, 'Mi Goreng', '1771870374migor.jpeg', 'makanan', 'Mi goreng khas Indonesia, pilihan spesial dari da-resto.', 20000, '2021-04-27 22:40:26', '2021-04-27 22:40:26'),
(13, 'Nasi Bakar', '1370689647naskar.jpeg', 'makanan', 'Nasi bakar khas Indonesia, pilihan spesial dari da-resto.', 25000, '2021-04-27 22:41:57', '2021-04-27 22:41:57'),
(14, 'Mi Godhok', '1952791576mibus.jpeg', 'makanan', 'Mi rebus khas Indonesia, pilihan spesial dari da-resto.', 20000, '2021-04-27 22:42:49', '2021-04-27 22:42:49'),
(15, 'Nasi Liwet', '708092392liwet.jpeg', 'makanan', 'Nasi rempah khas Indonesia, pilihan spesial dari da-resto.', 25000, '2021-04-27 22:43:44', '2021-04-27 22:43:44'),
(16, 'Sekoteng', '803333285skote.jpeg', 'minuman', 'Minuman segar khas Indonesia, pilihan spesial dari da-resto.', 15000, '2021-04-27 22:44:39', '2021-04-27 22:44:39'),
(17, 'Wedang Ronde', '332398261ronde.jpeg', 'minuman', 'Minuman jahe khas Indonesia, pilihan spesial dari da-resto.', 15000, '2021-04-27 22:45:26', '2021-04-27 22:45:26'),
(18, 'Bir Pletok', '1848550986bir.jpeg', 'minuman', 'Minuman kocok khas Indonesia, pilihan spesial dari da-resto.', 15000, '2021-04-27 22:46:15', '2021-04-27 22:46:15'),
(19, 'Bajigur', '350826820jigur.jpeg', 'minuman', 'Minuman daerah khas Indonesia, pilihan spesial dari da-resto.', 12000, '2021-04-27 22:46:57', '2021-04-27 22:46:57'),
(20, 'Es Cendol', '1238452182cendol.jpeg', 'minuman', 'Es segar khas Indonesia, pilihan spesial dari da-resto.', 18000, '2021-04-27 22:47:35', '2021-04-27 22:47:35'),
(21, 'Mi Aceh', '1491562859aceh.jpeg', 'makanan', 'Mi daerah khas Indonesia, pilihan spesial dari da-resto.', 25000, '2021-04-28 20:18:57', '2021-04-28 20:18:57'),
(22, 'Nasi Uduk', '1190092221uduk.jpeg', 'makanan', 'Sarapan khas Indonesia, pilihan spesial dari da-resto.', 15000, '2021-04-28 20:20:17', '2021-04-28 20:20:17'),
(23, 'Soto Mi', '1263361479somi.jpeg', 'makanan', 'Soto khas Indonesia, pilihan spesial dari da-resto.', 20000, '2021-04-28 20:21:16', '2021-04-28 20:21:16'),
(24, 'Nasi Kuning', '1333264654naskun.jpeg', 'makanan', 'Nasi kunyit khas Indonesia, pilihan spesial dari da-resto.', 15000, '2021-04-28 20:22:03', '2021-04-28 20:22:03'),
(25, 'Mi Tek-tek', '1160809525tektek.jpeg', 'makanan', 'Mi daerah khas Indonesia, pilihan spesial dari da-resto.', 20000, '2021-04-28 20:22:52', '2021-04-28 20:22:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `no_meja` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `price_total` bigint(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `nama_menu`, `no_meja`, `nama`, `price_total`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Mi Goreng', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 40000, 'dipesan', '2021-04-28 23:33:24', '2021-04-28 23:33:24'),
(2, 'Nasi Bakar', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 50000, 'dipesan', '2021-04-28 23:34:13', '2021-04-28 23:34:13'),
(3, 'Mi Goreng', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 60000, 'dipesan', '2021-04-28 23:35:32', '2021-04-28 23:35:32'),
(4, 'Mi Goreng', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 60000, 'dipesan', '2021-04-28 23:39:19', '2021-04-28 23:39:19'),
(5, 'Nasi Goreng', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 60000, 'dipesan', '2021-04-28 23:40:27', '2021-04-28 23:40:27'),
(6, 'Nasi Goreng', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 60000, 'dibayar', '2021-04-29 00:15:12', '2021-04-29 00:15:12'),
(10, 'Mi Tek-tek', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 20000, 'dibayar', '2021-04-29 23:43:38', '2021-04-29 23:43:38'),
(11, 'Mi Tek-tek', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 20000, 'dibayar', '2021-04-29 23:44:08', '2021-04-29 23:44:08'),
(12, 'Mi Tek-tek', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 20000, 'dibayar', '2021-04-29 23:46:06', '2021-04-29 23:46:06'),
(27, 'Mi Tek-tek', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 20000, 'selesai', '2021-04-30 01:00:24', '2021-04-30 01:00:24'),
(28, 'Mi Tek-tek', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 20000, 'selesai', '2021-05-07 00:42:45', '2021-05-07 00:42:45'),
(29, 'Mi Tek-tek', 'A5', 'Rafi Muhammad Yusuf Fahturahman', 20000, 'selesai', '2021-05-23 02:42:23', '2021-05-23 02:42:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_meja` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tables`
--

INSERT INTO `tables` (`id`, `no_meja`, `status`, `updated_at`, `created_at`) VALUES
(5, 'A1', 'kosong', '2021-04-30 00:20:06', '2021-04-30 00:20:06'),
(6, 'A2', 'kosong', '2021-04-30 00:20:14', '2021-04-30 00:20:14'),
(7, 'A3', 'kosong', '2021-04-30 00:20:21', '2021-04-30 00:20:21'),
(8, 'A4', 'kosong', '2021-04-30 00:20:27', '2021-04-30 00:20:27'),
(9, 'A5', 'kosong', '2021-04-30 00:20:33', '2021-04-30 00:20:33'),
(10, 'A6', 'kosong', '2021-05-23 02:47:28', '2021-05-23 02:47:28'),
(11, 'A7', 'kosong', '2021-05-23 02:47:39', '2021-05-23 02:47:39'),
(12, 'A8', 'kosong', '2021-05-23 02:47:56', '2021-05-23 02:47:56'),
(13, 'A9', 'kosong', '2021-05-23 02:48:05', '2021-05-23 02:48:05'),
(14, 'A10', 'kosong', '2021-05-23 02:48:12', '2021-05-23 02:48:12'),
(15, 'B1', 'kosong', '2021-05-23 02:48:53', '2021-05-23 02:48:53'),
(16, 'B2', 'kosong', '2021-05-23 02:49:01', '2021-05-23 02:49:01'),
(17, 'B3', 'kosong', '2021-05-23 02:49:11', '2021-05-23 02:49:11'),
(18, 'B4', 'kosong', '2021-05-23 02:49:22', '2021-05-23 02:49:22'),
(19, 'B5', 'kosong', '2021-05-23 02:49:30', '2021-05-23 02:49:30'),
(20, 'B6', 'kosong', '2021-05-23 02:49:38', '2021-05-23 02:49:38'),
(21, 'B7', 'kosong', '2021-05-23 02:49:51', '2021-05-23 02:49:51'),
(22, 'B8', 'kosong', '2021-05-23 02:50:00', '2021-05-23 02:50:00'),
(23, 'B9', 'kosong', '2021-05-23 02:50:12', '2021-05-23 02:50:12'),
(24, 'B10', 'kosong', '2021-05-23 02:50:26', '2021-05-23 02:50:26'),
(25, 'C1', 'kosong', '2021-05-23 03:01:33', '2021-05-23 03:01:33'),
(26, 'C2', 'kosong', '2021-05-23 03:01:43', '2021-05-23 03:01:43'),
(27, 'C3', 'kosong', '2021-05-23 03:01:53', '2021-05-23 03:01:53'),
(28, 'C4', 'kosong', '2021-05-23 03:02:01', '2021-05-23 03:02:01'),
(29, 'C5', 'kosong', '2021-05-23 03:02:11', '2021-05-23 03:02:11'),
(30, 'C6', 'kosong', '2021-05-23 03:02:20', '2021-05-23 03:02:20'),
(31, 'C7', 'kosong', '2021-05-23 03:02:31', '2021-05-23 03:02:31'),
(32, 'C8', 'kosong', '2021-05-23 03:02:40', '2021-05-23 03:02:40'),
(33, 'C9', 'kosong', '2021-05-23 03:02:49', '2021-05-23 03:02:49'),
(34, 'C10', 'kosong', '2021-05-23 03:02:56', '2021-05-23 03:02:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `no_telp`, `email`, `password`, `level`, `updated_at`, `created_at`) VALUES
(5, 'Rafi Muhammad Yusuf Fahturahman', 89646977644, 'rapi150604@gmail.com', 'e4a4b9fd3156c8e7a1c6452e9ac3b09a', 'user', '2021-04-26 11:11:35', '2021-04-26 11:11:35'),
(9, 'Administrator', 81234567890, 'admin@da-resord.id', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2021-04-27 00:18:12', '2021-04-27 00:18:12'),
(10, 'Resto', 1234567890, 'resto@da-resord.id', '9c6350b0aa51300d30790de1192fbcf8', 'resto', '2021-04-27 00:34:54', '2021-04-27 00:34:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `id_menus` (`id_menus`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
