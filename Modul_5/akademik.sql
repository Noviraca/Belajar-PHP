-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2022 pada 06.36
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
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kode_guru` varchar(20) NOT NULL,
  `kode_kk` varchar(20) NOT NULL,
  `nama_guru` varchar(20) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `alamat_guru` varchar(20) DEFAULT NULL,
  `telp_guru` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_kk` varchar(20) NOT NULL,
  `kode_md` varchar(20) NOT NULL,
  `nama_jurusan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_diklat`
--

CREATE TABLE `mata_diklat` (
  `kode_md` varchar(20) NOT NULL,
  `nama_md` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nisn` int(13) NOT NULL,
  `kode_guru` varchar(20) NOT NULL,
  `kode_sk` varchar(20) DEFAULT NULL,
  `nilai_angka` varchar(20) DEFAULT NULL,
  `nilai_huruf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(13) NOT NULL,
  `kode_kk` varchar(20) NOT NULL,
  `nama_siswa` varchar(20) DEFAULT NULL,
  `alamat_siswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `hoby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `standar_kompetensi`
--

CREATE TABLE `standar_kompetensi` (
  `kode_sk` varchar(11) NOT NULL,
  `kode_kk` varchar(20) NOT NULL,
  `nama_sk` varchar(20) DEFAULT NULL,
  `kelas_sk` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_murid`
--

CREATE TABLE `wali_murid` (
  `kode_wali` varchar(20) NOT NULL,
  `nisn` int(13) NOT NULL,
  `nama_ayah` varchar(20) DEFAULT NULL,
  `pekerjaan_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(20) DEFAULT NULL,
  `pekerjaan_ibu` varchar(20) DEFAULT NULL,
  `alamat_wali` varchar(20) DEFAULT NULL,
  `telp_wali` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`),
  ADD KEY `kode_kk` (`kode_kk`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_kk`),
  ADD KEY `kode_md` (`kode_md`);

--
-- Indeks untuk tabel `mata_diklat`
--
ALTER TABLE `mata_diklat`
  ADD PRIMARY KEY (`kode_md`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `nisn` (`nisn`),
  ADD KEY `kode_sk` (`kode_sk`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `standar_kompetensi`
--
ALTER TABLE `standar_kompetensi`
  ADD PRIMARY KEY (`kode_sk`),
  ADD KEY `kode_kk` (`kode_kk`);

--
-- Indeks untuk tabel `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`kode_wali`),
  ADD KEY `nisn` (`nisn`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kode_kk`) REFERENCES `jurusan` (`kode_kk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`kode_md`) REFERENCES `mata_diklat` (`kode_md`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_sk`) REFERENCES `standar_kompetensi` (`kode_sk`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`kode_guru`) REFERENCES `guru` (`kode_guru`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `standar_kompetensi`
--
ALTER TABLE `standar_kompetensi`
  ADD CONSTRAINT `standar_kompetensi_ibfk_1` FOREIGN KEY (`kode_kk`) REFERENCES `jurusan` (`kode_kk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD CONSTRAINT `wali_murid_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
