-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2024 pada 06.38
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_fajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(302) NOT NULL,
  `tanggal` varchar(3200) NOT NULL,
  `nama_siswa` varchar(2300) NOT NULL,
  `asal_sekolah` varchar(3000) NOT NULL,
  `gelombang` varchar(2300) NOT NULL,
  `jumlah` bigint(230) NOT NULL,
  `bayar` bigint(210) NOT NULL,
  `kembalian` bigint(230) NOT NULL,
  `sisa` bigint(200) NOT NULL,
  `keterangan` varchar(2300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bayar`
--

INSERT INTO `data_bayar` (`id`, `no_pendaftaran`, `tanggal`, `nama_siswa`, `asal_sekolah`, `gelombang`, `jumlah`, `bayar`, `kembalian`, `sisa`, `keterangan`) VALUES
(24, 'BYR001', '15-05-2024', 'afwan afandi', 'madya depok', 'pertama', 1000000, 1000000, 0, 0, 'Lunas'),
(25, 'BYR002', '15-05-2024', 'afwan afandi', 'madya depok', 'kedua', 1250000, 1250000, 0, 0, 'Lunas'),
(26, 'BYR003', '15-05-2024', 'fajar maulana putra', 'madya depok', 'pertama', 1000000, 1000000, 0, 0, 'Lunas'),
(30, 'BYR004', '16-05-2024', 'fajar maulana putra', 'madya depok', 'kedua', 1250000, 1250000, 0, 0, 'Lunas'),
(31, 'BYR005', '16-05-2024', 'testimola', 'madya depok', 'pertama', 1000000, 1000000, 0, 0, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_ortu` varchar(123) NOT NULL,
  `alamat_ortu` varchar(123) NOT NULL,
  `no_telOrtu` varchar(123) NOT NULL,
  `pekerjaan_ortu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(1, 'hsavdhdvha', 'vghvfhfg', 'bnvgvnh', '', 'cfgdg'),
(2, 'hsavdhdvha', 'vghvfhfg', 'bnvgvnh', '', 'cfgdg'),
(3, 'hsavdhdvha', 'vghvfhfg', 'bnvgvnh', '', 'cfgdg'),
(4, 'svdghsehhfs', 'bvgfcg', 'bgf', '', 'shgfes'),
(5, 'fgfdfgfdg', 'bvccfc', 'nvhfgfgh', '', 'bcgfdg'),
(6, 'hsavdhdvha', '6775567', 'bchds', '', 'bcgfdg'),
(7, 'fgfgf', 'hgfhgf', 'gfhgf', '', 'hgfh'),
(8, ' chaevf', 'bhweabde', 'gfhgf', '', 'bcwaejh'),
(9, 'jgvghf', 'dgfdgf', 'bchds', '', 'ggf'),
(10, 'vjbgfhwe', ' ceavgr', 'ghvgcfcgfd', '', 'vhg'),
(11, 'dbgwyugwq', 'dbhwf', 'gfhgf', '', 'njhf'),
(12, 'kampret', 'kepo', 'gatau', '', 'kepo'),
(13, 'aar', 'kepo', 'tapos', '', 'kepo'),
(14, 'aarr', '', '', '', ''),
(15, 'afwan af', '', '', '', ''),
(16, 'afwan affandiiii', '', '', '', ''),
(19, 'Fwann', '', '', '', ''),
(20, 'pajar', '', '', '', ''),
(22, 'pajar', '', '', '', ''),
(23, 'aar', '', '', '', ''),
(25, 'pajar', '', '', '', ''),
(26, 'afwan', '', '', '', ''),
(27, 'pajar', '', '', '', ''),
(28, 'jaki', '', '', '', ''),
(29, 'aar', '', '', '', ''),
(30, 'afwan afandi', '', '', '', ''),
(31, 'afwan afandi', '', '', '', ''),
(32, 'fajar maulana putra', '', '', '', ''),
(33, 'fajar maulana putra', '', '', '', ''),
(34, 'testimola', '', '', '', ''),
(35, 'testimola', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(111) NOT NULL,
  `no_pendaftaran` varchar(123) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `ttl` varchar(123) NOT NULL,
  `jenis_kel` varchar(123) NOT NULL,
  `agama` varchar(123) NOT NULL,
  `no_telSiswa` varchar(123) NOT NULL,
  `asal_sekolah` varchar(123) NOT NULL,
  `alamat_sekolah` varchar(123) NOT NULL,
  `jurusan` varchar(123) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `ukuran` varchar(1231) NOT NULL,
  `gelombang` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(30, 'BYR001', 'afwan afandi', 'depok', 'Laki-Laki', 'Islam', '0822', 'madya depok', 'Leuwinanggung, Tapos-depok', 'REKAYASA PERANGKAT LUNAK', '14-05-2024', 'XL', 'pertama'),
(31, 'BYR002', 'afwan afandi', 'depok', 'Laki-Laki', 'Islam', '0822', 'madya depok', 'Leuwinanggung, Tapos-Depok', 'REKAYASA PERANGKAT LUNAK', '14-05-2024', 'L', 'kedua'),
(32, 'BYR003', 'fajar maulana putra', 'bogor', 'Laki-Laki', 'Islam', '0896', 'madya depok', 'Leuwinanggung, Tapos-Depok', 'REKAYASA PERANGKAT LUNAK', '14-05-2024', 'XL', 'pertama'),
(33, 'BYR004', 'fajar maulana putra', 'bogor', 'Laki-Laki', 'Islam', '0896', 'madya depok', 'Leuwinanggung, Tapos-Depok', 'REKAYASA PERANGKAT LUNAK', '14-05-2024', 'L', 'kedua'),
(35, 'BYR005', 'testimola', 'depok', 'Laki-Laki', 'Islam', '0822', 'madya depok', 'Leuwinanggung, Tapos-Depok', 'REKAYASA PERANGKAT LUNAK', '15-05-2024', 'XXL', 'pertama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_wali` varchar(123) NOT NULL,
  `alamat_wali` varchar(123) NOT NULL,
  `no_telWali` varchar(123) NOT NULL,
  `pekerjaan_wali` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(1, 'hsavdhdvha', 'vcgfhdgfd', 'ghvgcfcgfd', '', 'gfhtrfrtdt'),
(2, 'hsavdhdvha', 'vcgfhdgfd', 'ghvgcfcgfd', '', 'gfhtrfrtdt'),
(3, 'hsavdhdvha', 'vcgfhdgfd', 'ghvgcfcgfd', '', 'gfhtrfrtdt'),
(4, 'svdghsehhfs', 'chvbhgdc', 'bchds', '', 'hvsghcvhds'),
(5, 'fgfdfgfdg', 'bfdgfdvbf', 'gfhgf', '', 'gfhfgdgrs'),
(6, 'hsavdhdvha', 'ari januar', 'nvhfgfgh', '', 'hvsghcvhds'),
(7, 'fgfgf', 'gfhgf', 'bgf', '', '767'),
(8, ' chaevf', 'bhwbb', 'ghvgcfcgfd', '', 'bwejhf'),
(9, 'jgvghf', 'fhg', 'gfhgf', '', 'vngv'),
(10, 'vjbgfhwe', 'jgvg', 'bchds', '', 'ch'),
(11, 'dbgwyugwq', 'bfwhbf', 'bgf', '', 'fbw'),
(12, 'kampret', 'ari januar', 'depok', '', 'guru'),
(13, 'kuda hitam', 'ari januar', 'tapos', '', 'gawe'),
(14, 'jaki', '', '', '', ''),
(15, 'afwan af', '', '', '', ''),
(16, 'afwan affandi', '', '', '', ''),
(19, 'Fwann', '', '', '', ''),
(20, 'pajar', '', '', '', ''),
(22, 'jwgfef', '', '', '', ''),
(23, 'aar', '', '', '', ''),
(25, 'pajar', '', '', '', ''),
(26, 'afwan', '', '', '', ''),
(27, 'pajar', '', '', '', ''),
(28, 'jaki', '', '', '', ''),
(29, 'aar', '', '', '', ''),
(30, 'afwan afandi', '', '', '', ''),
(31, 'afwan afandi', '', '', '', ''),
(32, 'fajar maulana putra', '', '', '', ''),
(33, 'fajar maulana putra', '', '', '', ''),
(34, 'testimola', '', '', '', ''),
(35, 'testimola', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(111) NOT NULL,
  `gelombang` varchar(111) NOT NULL,
  `nominal` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(20, 'pertama', 1000000),
(21, 'kedua', 1250000),
(22, 'ketiga', 1500000),
(23, 'keempat', 2000000),
(25, 'kelima', 3500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(290) NOT NULL,
  `username` varchar(290) NOT NULL,
  `password` varchar(289) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(31, 'afwan', 'afwan', 'hallo', 'admin'),
(32, 'afwan', 'afwan', 'halo', 'petugas'),
(33, 'fajar', 'admin', '123', 'admin'),
(34, 'fajar', 'petugas', '112', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
