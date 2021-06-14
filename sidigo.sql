-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jun 2021 pada 16.35
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
  `pemasangan_service_ac` varchar(20) DEFAULT NULL,
  `fogging` varchar(20) DEFAULT NULL,
  `sedot_wc` varchar(20) DEFAULT NULL,
  `pengecatan_kantor` varchar(20) DEFAULT NULL,
  `perbaikan_kantor` varchar(20) DEFAULT NULL,
  `lainnya` varchar(20) DEFAULT NULL,
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

--
-- Dumping data untuk tabel `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `id_user`, `tgl_pengajuan`, `nama_pekerjaan`, `nomor_pekerjaan`, `nama_pelaksana`, `pimpinan_rekanan`, `no_tlp_pimpinan`, `pengawas_rekanan`, `no_tlp_pengawas`, `lokasi_pekerjaan`, `lama_dari`, `lama_sampai`, `jam_kerja`, `pengawas_teknis`, `jumlah_tenaga`, `instalasi_listrik`, `instalasi_jaringan`, `pemasangan_service_ac`, `fogging`, `sedot_wc`, `pengecatan_kantor`, `perbaikan_kantor`, `lainnya`, `detail_perbaikan`, `detail_lainnya`, `uu`, `peraturan_umum_k3`, `surat_izin`, `syarat_kerja`, `claim`, `pelaporan`, `p3k`, `peraturan1`, `peraturan2`, `peraturan3`, `peraturan_1`, `peraturan_2`, `peraturan_3`, `ttd_pelaksana`, `ttd_kabag`, `ttd_rekan`, `ttd_pengawas_k3`, `ttd_mr`, `rekomendasi_pengawas_k3`, `rekomendasi_mr`, `catatan`, `tgl_catatan_satpam`, `status`, `tgl_acc_kabag`, `tgl_acc_rekan`, `tgl_acc_pengawas_k3`, `tgl_acc_mr`, `nama_rekan`, `nama_pengawas`, `nama_kabag`, `nama_mr`, `nama_satpam`) VALUES
(27, 1, '2021-06-13 08:58:30', 'Service Ac', '1', 'Nuzul', 'Kartono', '0898323', 'Koko', '093283928', 'ruang operasional', '2021-06-13', '2021-06-16', '', 'OB', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                     \r\n                                    ', ' \r\n                                                                        ', '1', '1', NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, '', '', '', 'ttdku.jpg', 'ttdku.jpg', 'ttdku.jpg', 'ttdku.jpg', 'ttdku.jpg', ' -persiapan APD\r\n-melakukan pengecekan alat', '- okee', 'mantapp', '0000-00-00', 'rekan', '2021-06-13 08:58:58', '2021-06-13 09:29:34', '2021-06-13 09:00:05', '2021-06-13 09:25:43', 'nuzul', 'osy', 'yanti', 'hermen', 'bobi'),
(28, 1, '2021-06-13 09:37:47', 'Pemasangan TPLink', '2', 'Nurul', 'Nurul', '0839289', 'Nurul', '823782738', 'ruang kabag', '2021-06-15', '2021-06-15', '8', 'OB', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                     \r\n                                    ', ' \r\n                                                                        ', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '', '', '', 'ttdku.jpg', 'ttdku.jpg', 'ttdku.jpg', 'ttdku.jpg', 'ttdku.jpg', ' \r\n                                                            ', 'oke', '                                      sudah oke                      ', '0000-00-00', 'rekan', '2021-06-13 09:38:13', '2021-06-13 09:42:20', '2021-06-13 09:38:36', '2021-06-13 09:41:20', 'nuzul', 'osy', 'yanti', 'hermen', 'bobi');

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
(1, 'nuzul', 'nuzul@gmail.com', 'nuzul', 'nuzul123', 'ttdku.jpg', '1'),
(2, 'osy', 'osy@gmail.com', 'osy', 'osy123', 'ttdku.jpg', '2'),
(3, 'yanti', 'yanti@gmail.com', 'yanti', 'yanti123', 'ttdku.jpg', '3'),
(4, 'bobi', 'bobi@gmail.com', 'bobi', 'bobi123', 'ttdku.jpg', '4'),
(5, 'hermen', 'hermen@gmail.com', 'hermen', 'hermen123', 'ttdku.jpg', '6');

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
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
