-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2022 pada 03.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2_sri_lama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `gambar_admin` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `gambar_admin`) VALUES
(1, 'Sri Rahayu Ningsih', 'admin', 'admin', '4x6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'bagaimana cara mendaftar akun admin pemilik tempat?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(2, 'Bagaimana cara mengisi data tempat?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `kode_tempat` char(5) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `nama_gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `kode_tempat`, `nama_galeri`, `nama_gambar`) VALUES
(2, 'T0001', 'GAMBAR TEMPAT 2', 'GAMBAR TEMPAT 2.jpg'),
(6, 'T0002', 'Kegiatan dipasr', 'Kegiatan dipasr.jpg'),
(7, 'T0005', 'Kegiatan 1', 'Kegiatan 1.jpg'),
(8, 'T0005', 'Kegiatan 2', 'Kegiatan 2.jpeg'),
(9, 'T0005', 'Kegiatan 3', 'Kegiatan 3.jpg'),
(11, 'T0006', 'Produk', 'Produk.png'),
(12, 'T0007', 'Produk', 'Produk.png'),
(13, 'T0008', 'lokasi', 'lokasi.png'),
(15, 'T0001', 'zdxzx', 'zdxzx.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` char(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'K0001', 'Tradisional'),
(2, 'K0002', 'Modern');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat`
--

CREATE TABLE `tempat` (
  `id_tempat` int(11) NOT NULL,
  `kode_tempat` char(5) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `alamat_tempat` longtext NOT NULL,
  `lat_tempat` varchar(50) NOT NULL,
  `lng_tempat` varchar(50) NOT NULL,
  `des_tempat` longtext NOT NULL,
  `user_tempat` varchar(50) NOT NULL,
  `pass_tempat` varchar(50) NOT NULL,
  `kode_kategori` char(5) NOT NULL,
  `status_akun` enum('Baru','Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `kode_tempat`, `nama_tempat`, `alamat_tempat`, `lat_tempat`, `lng_tempat`, `des_tempat`, `user_tempat`, `pass_tempat`, `kode_kategori`, `status_akun`) VALUES
(2, 'T0001', 'Pasar Rangge Sentap', 'Pegadaian UPC Rangge Sentap, Kantor, Kabupaten Ketapang, Kalimantan Barat, Indonesia', '-1.8613465', '109.9732709', '<p><strong>Menyediakan berbagai macam kebutuhan harian anda</strong></p>\r\n\r\n<p>Seperti :&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Mainan Anak anak</li>\r\n	<li>Perabotan rumah tangga</li>\r\n	<li>bumbu dapur</li>\r\n	<li>Lauk pauk</li>\r\n	<li>Sayur mayur</li>\r\n	<li>Pakaina anak anak dan dewasa</li>\r\n	<li>Dll</li>\r\n</ol>\r\n\r\n<p><strong>Buka setiap hari</strong></p>\r\n\r\n<p>mulai pukul&nbsp;<em>07.00 - 19.00</em><strong> WIB</strong></p>\r\n', 'sentap', 'sentap', 'K0001', 'Aktif'),
(3, 'T0002', 'Pasar Baru', 'Bank Kalimantan Barat, Jalan Merdeka, Kantor, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78821, Indonesia', '-1.8498754', '109.9706521', '<p>Buka setiap hari</p>\r\n\r\n<p>senin - minggu pukul 08.00 &ndash; 22.00</p>\r\n', 'baru', 'baru', 'K0002', 'Aktif'),
(4, 'T0003', 'Pasar Tradisional Diponegoro 24jam', '5X2F+WFR Ketapang, Kantor, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat, Indonesia', '-1.8476375', '109.9736406', '<p>Buka 24 Jam</p>\r\n\r\n<p>Senin -&nbsp; Minggu Pkl 08.00 -&nbsp; 22.00</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menyediakan berbagai macam kebutuhan harian anda</p>\r\n', 'pasar1', 'pasar1', 'K0001', 'Aktif'),
(5, 'T0004', 'Pasar Durian Depan Akper', 'Jl. DR. Sutomo, Kantor, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78821, Indonesia', '-1.8513386', '109.9759071', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p><br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>\r\n\r\n<p><br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'durian', 'durian', 'K0001', 'Aktif'),
(9, 'T0005', 'Pasar malam', 'Kantor Kelurahan Sampit, Sampit, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811, Indonesia', '-1.834466', '109.9633276', '<p>asdadadad</p>\r\n', '1', '1', 'K0001', 'Aktif'),
(10, 'T0006', 'Pasar Haji Sani', 'Jalan Kol. Sugiono, Sampit, Ketapang Regency, West Kalimantan, Indonesia', '-1.8367096', '109.9687024', '<p>gdhfjhdfgyugfsdjfsjfhkdf</p>\n\n<p>gjfgsjdgfshdgajhdad</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 'sri', 'sri', 'K0001', 'Aktif'),
(11, 'T0007', 'JM Swalayan', 'Jl. Karya Tani, Mulia Baru, Ketapang Regency, West Kalimantan, Indonesia', '-1.8264774', '109.9899791', '<p>Terserah deh</p>\r\n', 'saya', '12345', 'K0002', 'Aktif'),
(12, 'T0008', 'pasar sore', 'Payah Kumang, Ketapang Regency, West Kalimantan, Indonesia', '-1.8123948', '109.9690387', '<p>ada berbagai macam bahan bahan rumah tangga</p>\n', 'mereka', '123', 'K0001', 'Aktif'),
(13, 'T0009', 'pasar Baru', 'Jalan Imam Bonjol, Kantor, Ketapang Regency, West Kalimantan, Indonesia', '-1.8586103', '109.9761494', '<p>Berbagai peralatan rumah tangga lengkap dan serba ada</p>\n', 'kalian', '123', 'K0001', 'Aktif'),
(17, 'T0013', 'Darmanto Mart', 'Politeknik Negeri Ketapang, Sukaharja, Ketapang Regency, West Kalimantan, Indonesia', '-1.8168375', '109.988631', '<p>Supermarket</p>\r\n', 'Darmanto', 'Darmanto', 'K0002', 'Aktif'),
(22, 'T0014', 'ADFASF', 'Jl. DI Panjaitan, Sampit, Ketapang Regency, West Kalimantan, Indonesia', '-1.8307614', '109.9721041', '<p>ASASAS</p>\r\n', 'saya', 'saya', 'K0001', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `kode_tempat` (`kode_tempat`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indeks untuk tabel `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `kode_tempat` (`kode_tempat`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
