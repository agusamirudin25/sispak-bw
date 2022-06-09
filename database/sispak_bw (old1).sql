-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 14.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak_bw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(255) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kode_gejala`, `nama_gejala`) VALUES
(35, 'G1', 'Bayi terlihat lemas'),
(36, 'G2', 'Suhu bayi terasa dingin'),
(37, 'G3', 'Kulit bayi memerah'),
(38, 'G4', 'Bayi sulit bernapas'),
(39, 'G5', 'Bayi sering buang air besar'),
(40, 'G6', 'Tinja bayi berwarna hitam'),
(41, 'G7', 'Nafas bayi tidak teratur'),
(42, 'G8', 'Bayi  mendengus'),
(43, 'G9', 'Kulit bayi membiru'),
(44, 'G10', 'Bayi batuk'),
(47, 'G11', 'Bayi buang air besar kurang dari tiga kali seminggu'),
(48, 'G12', 'Bayi rewel karena kesakitan ketika mengejan saat buang air besar'),
(49, 'G13', 'Bayi mengalamai kesulitan mengeluarkan feses karena kering dan keras'),
(50, 'G14', 'Bayi berkeringat '),
(51, 'G15', 'Bayi menggigil '),
(52, 'G16', 'Benjolan kemerahan di kelopak mata '),
(53, 'G17', 'Benjolan kecil di kelopak mata '),
(54, 'G18', 'Mata bayi berair'),
(55, 'G19', 'Bayi demam hingga lebih dari 40° C '),
(56, 'G20', 'Muncul ruam di tubuh bayi'),
(57, 'G21', 'Lingkar kepala bayi terlihat semakin membesar'),
(58, 'G22', 'Urat urat pada kepala bayi terlihat jelas'),
(59, 'G23', 'Ubun ubun bayi terlihat menggelembung'),
(60, 'G24', 'Bayi mengalami bersin-bersin'),
(61, 'G25', 'Bayi mengeluarkan cairan/lendir pada hidung'),
(62, 'G26', 'Bengkak disekitar hidung dan mata bayi'),
(63, 'G27', 'Bayi demam'),
(64, 'G28', 'Bayi menangis terus menerus '),
(65, 'G29', 'Bayi sulit mengonsumsi asi'),
(66, 'G30', 'Terdapat ruam serta bercak berwarna ungu'),
(67, 'G31', 'Jumlah jari tangan atau kaki bayi berlebih'),
(68, 'G32', 'Benjolan kecil jaringan lunak yang menonjol, tidak mengandung tulang'),
(69, 'G33', 'Jari memiliki tulang namun tidak memiliki persendian'),
(70, 'G34', 'Bayi kekurangan hemoglobin'),
(71, 'G35', 'Tingkat oksigen dan darah rendah'),
(72, 'G36', 'Kulit yang terlihat lebih pucat'),
(73, 'G37', 'Kulit tubuh bayi terlihat kuning'),
(74, 'G38', 'Tonjolan lunak di area pusar'),
(75, 'G39', 'Bengkak dan benjolan berubah warna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsul`
--

CREATE TABLE `tb_konsul` (
  `id_konsul` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konsul`
--

INSERT INTO `tb_konsul` (`id_konsul`, `id_user`, `nama`, `pesan`, `tujuan`, `waktu`) VALUES
(61, 38, 'user', 'wwww', 'pakar', '2022-05-24 18:45:49'),
(62, 37, 'pakar', 'eee', '38', '2022-05-24 18:46:50'),
(63, 37, 'pakar', 'ttt', '38', '2022-05-24 18:47:25'),
(64, 37, 'pakar', 'hyhhh', '38', '2022-05-24 18:47:28'),
(65, 37, 'pakar', 'jjjjjjjjj', '38', '2022-05-24 18:47:31'),
(66, 37, 'pakar', 'iiiiiiiii', '38', '2022-05-24 18:47:35'),
(67, 37, 'pakar', 'uuuuuuuuuuuuuu', '38', '2022-05-24 18:47:38'),
(68, 37, 'pakar', 'uuuuuuuuuu', '38', '2022-05-24 18:47:40'),
(69, 37, 'pakar', 'uuuuuuu', '38', '2022-05-24 18:47:43'),
(70, 38, 'user', 'yyy', 'pakar', '2022-05-24 18:48:29'),
(71, 38, 'user', 'asdasdasd', 'pakar', '2022-05-24 18:50:06'),
(72, 38, 'user', 'gbggg', 'pakar', '2022-05-24 18:52:22'),
(73, 38, 'user', 'gblg', 'pakar', '2022-05-24 18:56:24'),
(74, 37, 'pakar', 'gl', '38', '2022-05-24 18:56:58'),
(75, 37, 'pakar', 'dsd', '38', '2022-05-30 17:31:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(28, 'alvin', 'alvins', '1234', 'admin'),
(37, 'pakar', 'pakar', 'pakar', 'pakar'),
(38, 'user', 'user', 'user', 'user'),
(39, 'as', 'asd', '123', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(4) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
(13, 'P1 ', 'Hipotermia', 'Apabila bayi kedinginan dan menunjukkan gejala hipotermia, cobalah untuk mengukur suhu tubuhnya. Pengukuran suhu yang paling akurat dapat dilakukan melalui rektal. Namun jika tidak memiliki termometer khusus rektal, pengukuran suhu lewat ketiak juga dapat dilakukan. Gunakan inkubator. Ganti pakaian basah dengan pakaian hangat disertai topi. Tempatkan bayi di ruangan hangat.'),
(14, 'P2', 'Diare', 'Bayi perlu mendapatkan asupan cairan dan nutrisi yang cukup selama diare. Memberikan asi dan cairan elektrolit. Memberikan suplemen zinc. Memberikan probiotik.'),
(16, 'P3', 'Dispnea', 'Invalid'),
(20, 'P4', 'Konstipasi', 'Invalid'),
(28, 'P5', 'xcx', 'cxcxcx');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konsul`
--
ALTER TABLE `tb_konsul`
  ADD PRIMARY KEY (`id_konsul`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_konsul`
--
ALTER TABLE `tb_konsul`
  MODIFY `id_konsul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
