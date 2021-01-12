-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2021 pada 10.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `iddivisi` int(20) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `ketua_divisi` varchar(100) NOT NULL,
  `info_divisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`iddivisi`, `nama_divisi`, `ketua_divisi`, `info_divisi`) VALUES
(1, 'produksi', 'Hermanto', 'Brand new components and templates to help folks quickly get started with Bootstrap and demonstrate best practices for adding onto the '),
(2, 'pemasaran', 'Ayu', 'Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(20) NOT NULL,
  `iduser` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `jml_kehadiran` int(20) NOT NULL,
  `bonus` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `iduser`, `tanggal`, `jumlah`, `jml_kehadiran`, `bonus`) VALUES
(1, 2, '2020-12-01', 1200000, 31, 0),
(2, 2, '2021-01-01', 1200000, 31, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `jml_kehadiran` int(20) NOT NULL,
  `no_rek` int(30) NOT NULL,
  `level` enum('pegawai','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama_lengkap`, `divisi`, `jml_kehadiran`, `no_rek`, `level`) VALUES
(1, 'admin', 'admin', 'Puput Yohana', '-', 0, 0, 'admin'),
(2, 'pegawai', 'pegawai', 'Puput Yohana Ayu', 'Produksi', 31, 97654545, 'pegawai'),
(6, 'bunga', 'bunga123', 'BUnga Indah', 'Pemasaran', 26, 371379191, 'pegawai'),
(7, 'Dara', 'dara123', 'Dara Yanti', 'Pemasaran', 31, 531371817, 'pegawai'),
(8, 'Lala', 'lala123', 'Lala Lili', 'Produksi', 26, 2319200, 'pegawai'),
(9, 'Wawa', 'wawa123', 'Wawa Nana', 'Pemasaran', 26, 25678191, 'pegawai'),
(10, 'Lala', 'lala123', 'Lala Lili', 'Produksi', 26, 2319200, 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`iddivisi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `iddivisi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
