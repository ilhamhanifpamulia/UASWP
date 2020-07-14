-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2020 pada 16.01
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `kritik` varchar(1000) NOT NULL,
  `saran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`, `level`) VALUES
(18581, 'Azam', 'VCL18581', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_pasien`
--

CREATE TABLE `pendaftaran_pasien` (
  `id_pasien` int(15) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `gender` varchar(200) CHARACTER SET latin1 NOT NULL,
  `umur` int(3) NOT NULL,
  `nomer_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keluhan` varchar(250) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `no_ruangan` int(2) NOT NULL,
  `nama_wali` varchar(80) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_pasien`
--

INSERT INTO `pendaftaran_pasien` (`id_pasien`, `nama_pasien`, `gender`, `umur`, `nomer_hp`, `alamat`, `keluhan`, `ruangan`, `no_ruangan`, `nama_wali`, `c_date`) VALUES
(22, 'Fatimahtuz Zahra Meilia', 'Perempuan', 18, '1234567891011', 'Jakarta Pusat', 'Sakit', 'Merpati', 4, 'rfgrwahhrg', '2020-07-11 04:56:29'),
(28, 'API', 'Lain-Lain', 100, '001540', 'Server', 'Server', 'Dahlia', 9, 'Server', '2020-07-11 04:56:29'),
(29, 'Ara', 'Perempuan', 19, '-', 'Jakarta', '-', 'Mawar', 5, '-', '2020-07-11 04:56:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pendaftaran_pasien`
--
ALTER TABLE `pendaftaran_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18582;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_pasien`
--
ALTER TABLE `pendaftaran_pasien`
  MODIFY `id_pasien` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
