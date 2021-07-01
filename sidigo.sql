-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2021 pada 04.07
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidigo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `tgl_pengajuan` datetime NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `nomor_pekerjaan` varchar(100) DEFAULT NULL,
  `nama_pelaksana` varchar(100) DEFAULT NULL,
  `pimpinan_rekanan` varchar(100) DEFAULT NULL,
  `no_tlp_pimpinan` varchar(50) DEFAULT NULL,
  `pengawas_rekanan` varchar(100) DEFAULT NULL,
  `no_tlp_pengawas` varchar(50) DEFAULT NULL,
  `lokasi_pekerjaan` varchar(100) DEFAULT NULL,
  `lama_dari` date DEFAULT NULL,
  `lama_sampai` date DEFAULT NULL,
  `jam_kerja` varchar(50) DEFAULT NULL,
  `pengawas_teknis` varchar(100) DEFAULT NULL,
  `jumlah_tenaga` varchar(50) DEFAULT NULL,
  `instalasi_listrik` varchar(20) DEFAULT NULL,
  `instalasi_jaringan` varchar(20) DEFAULT NULL,
  `jartel` varchar(20) DEFAULT NULL,
  `pengelasan` varchar(20) DEFAULT NULL,
  `fire` varchar(20) DEFAULT NULL,
  `tandon` varchar(20) DEFAULT NULL,
  `pemasangan_service_ac` varchar(20) DEFAULT NULL,
  `fogging` varchar(20) DEFAULT NULL,
  `kaca` varchar(20) DEFAULT NULL,
  `pengecatan_kantor` varchar(20) DEFAULT NULL,
  `perbaikan_kantor` varchar(20) DEFAULT NULL,
  `limbah_b3` varchar(20) DEFAULT NULL,
  `detail_perbaikan` varchar(100) DEFAULT NULL,
  `detail_lainnya` varchar(100) DEFAULT NULL,
  `uu` varchar(20) DEFAULT NULL,
  `peraturan_umum_k3` varchar(20) DEFAULT NULL,
  `surat_izin` varchar(20) DEFAULT NULL,
  `syarat_kerja` varchar(20) DEFAULT NULL,
  `claim` varchar(20) DEFAULT NULL,
  `pelaporan` varchar(20) DEFAULT NULL,
  `p3k` varchar(20) DEFAULT NULL,
  `peraturan1` varchar(10) DEFAULT NULL,
  `peraturan2` varchar(10) DEFAULT NULL,
  `peraturan3` varchar(10) DEFAULT NULL,
  `peraturan_1` varchar(20) DEFAULT NULL,
  `peraturan_2` varchar(20) DEFAULT NULL,
  `peraturan_3` varchar(20) DEFAULT NULL,
  `ttd_pelaksana` varchar(20) DEFAULT NULL,
  `ttd_kabag` varchar(20) DEFAULT NULL,
  `ttd_rekan` varchar(20) DEFAULT NULL,
  `ttd_pengawas_k3` varchar(20) DEFAULT NULL,
  `ttd_mr` varchar(20) DEFAULT NULL,
  `rekomendasi_pengawas_k3` varchar(200) DEFAULT NULL,
  `rekomendasi_mr` varchar(200) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `tgl_catatan_satpam` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `tgl_acc_kabag` datetime DEFAULT NULL,
  `tgl_acc_rekan` datetime DEFAULT NULL,
  `tgl_acc_pengawas_k3` datetime DEFAULT NULL,
  `tgl_acc_mr` datetime DEFAULT NULL,
  `nama_rekan` varchar(200) DEFAULT NULL,
  `nama_pengawas` varchar(200) DEFAULT NULL,
  `nama_kabag` varchar(200) DEFAULT NULL,
  `nama_mr` varchar(200) DEFAULT NULL,
  `nama_satpam` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_ttd` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `username`, `password`, `foto_ttd`, `level`) VALUES
(1, 'Nurul Abidin', 'nurul@gmail.com', 'nurul', 'Nurul123', 'nurul.png', '1'),
(2, 'Ossy Anita Pratiwi', 'osy@gmail.com', 'ossy', 'Ossy123', 'ossy.png', '2'),
(3, 'Heri Hermawan', 'heri@gmail.com', 'heri', 'Heri123', 'heri.png', '3'),
(4, 'satpam', 'satpam@gmail.com', 'satpam', 'Satpam123', 'ttdku.jpg', '4'),
(5, 'Hermen Eri Wibowo', 'hermen@gmail.com', 'hermen', 'Hermen123', 'hermen.png', '6'),
(6, 'admin', 'admin@admin', 'admin', 'admin', '', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
