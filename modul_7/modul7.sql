-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2022 pada 09.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` varchar(4) NOT NULL,
  `harga_beli` varchar(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `stok`, `harga_beli`, `harga_jual`) VALUES
(1, 'Sepasang Baju Anak', '100', '150000', '250000'),
(2, 'Celana Pendek Anak', '50', '210000', '215000'),
(3, 'Tas khusus Anak', '40', '200000', '310000'),
(4, 'Topi Anak', '20', '70000', '90000'),
(5, 'Sepatu Anak', '10', '1000000', '2000000'),
(6, 'Baju dewasa', '15', '70000', '200000'),
(11, 'Kacamata Anak', '20', '20000', '500000\r\n'),
(12, 'Hijab pasmina', '50', '20000', '30000'),
(13, 'Sepatu dewasa', '100', '200000', '300000'),
(14, 'tas dewasa', '20', '260000', '350000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_type` varchar(255) NOT NULL,
  `image_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image_path`, `description`, `image_type`, `image_size`) VALUES
(27, '2571minion 1.jpg', 'Minion 1', 'image/jpeg', 19414),
(29, '4739Minion 2.jpg', 'Minion 2', 'image/jpeg', 37512),
(30, '2565Minion 3.jpg', 'Minion 3', 'image/jpeg', 85192),
(31, '3206Minion 4.jpg', 'Minion 4', 'image/jpeg', 56557),
(32, '9454Minion 5.jpg', 'Minion 5', 'image/jpeg', 16556),
(33, '1120Minion 6.jpg', 'Minion 6', 'image/jpeg', 14564),
(34, '1313Minion 7.jpg', 'Minion 7', 'image/jpeg', 1163573),
(35, '8904Minion 8.jpg', 'Minion 8', 'image/jpeg', 15883),
(36, '1869Minion 9.jpg', 'Minion 9', 'image/jpeg', 36896);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_penjualan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `barang_id`, `jumlah`, `tgl_penjualan`) VALUES
(1, 1, 10, '2022-10-15'),
(3, 2, 100, '2022-10-03'),
(4, 3, 20, '2022-10-15'),
(5, 4, 12, '2022-10-09'),
(6, 4, 1, '2022-10-06'),
(7, 3, 88, '2022-10-09'),
(8, 1, 11, '2022-10-14'),
(9, 4, 22, '2022-10-02'),
(10, 3, 12, '2022-10-09'),
(11, 3, 12, '2022-10-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `kelas`, `alamat`) VALUES
(1, 'Noviyanti', 'Ultrasabilillah', 'Soreang'),
(2, 'Dika dirja kusumah', 'Jenius', 'Majalaya'),
(3, 'Azhar alwiranata wijaya', 'favorite', 'Majalaya'),
(4, 'Wilona', 'Smart', 'Bandung Timur'),
(5, 'Brayen', 'compas', 'Garut'),
(6, 'Radbert', 'Ingenue', 'ciamis'),
(7, 'Abbie ', 'Blossoming', 'Semarang garut'),
(8, 'Yuma', 'Bonita', 'Ciwidey'),
(9, 'kahla', 'Dadivosa:', 'Bandung'),
(10, 'Kathline', 'Inmarcesibe', 'Rancabali');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
