-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jul 2018 pada 11.19
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `kode_guru` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`kode_guru`, `username`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `created_on`) VALUES
('NIP-68969726', 'safri', 'Syafrie Syamsudin, S.Kom', 'Laki-laki', 'Jakarta Barat', '1970-01-09', 'Jln. Kampung Muka Blok C no.13 RT004/RW009 Kec.Pademangan Kel.Ancol', '2018-07-08 11:06:14'),
('NIP-72021484', 'nanda', 'Nanda Andreas, S.Pd', 'Laki-laki', 'Batam', '1970-01-31', 'Jln. Pademangan Raya Blok G no.13', '2018-07-08 11:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matapelajaran`
--

CREATE TABLE `tbl_matapelajaran` (
  `kode_matapelajaran` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_matapelajaran`
--

INSERT INTO `tbl_matapelajaran` (`kode_matapelajaran`, `mata_pelajaran`, `kkm`) VALUES
('MP-45073', 'PKN', 70),
('MP-48366', 'Matematika', 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL,
  `NIS` varchar(30) NOT NULL,
  `kelas` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `pendidikan_agama` int(11) NOT NULL,
  `pendidikan_kewarganegaraan` int(11) NOT NULL,
  `bahasa_indonesia` int(11) NOT NULL,
  `bahasa_inggris` int(11) NOT NULL,
  `matematika` int(11) NOT NULL,
  `ilmu_pengetahuan_alam` int(11) NOT NULL,
  `ilmu_pengetahuan_sosial` int(11) NOT NULL,
  `seni_budaya` int(11) NOT NULL,
  `penjaskes` int(11) NOT NULL,
  `tik` int(11) NOT NULL,
  `plkj` int(11) NOT NULL,
  `tata_busana` int(11) NOT NULL,
  `NA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `NIS`, `kelas`, `semester`, `pendidikan_agama`, `pendidikan_kewarganegaraan`, `bahasa_indonesia`, `bahasa_inggris`, `matematika`, `ilmu_pengetahuan_alam`, `ilmu_pengetahuan_sosial`, `seni_budaya`, `penjaskes`, `tik`, `plkj`, `tata_busana`, `NA`) VALUES
(39, 'NIS-114203558', 71, 'Ganjil', 100, 90, 80, 70, 80, 90, 80, 90, 100, 70, 100, 90, 86.67),
(40, 'NIS-823757595', 71, 'Genap', 80, 90, 80, 70, 80, 70, 80, 90, 80, 80, 80, 80, 80),
(41, 'NIS-114203558', 71, 'Ganjil', 100, 90, 80, 90, 100, 80, 70, 80, 80, 80, 80, 80, 84.17),
(42, 'NIS-823757595', 93, 'Ganjil', 90, 80, 70, 80, 70, 75, 80, 90, 72, 90, 90, 70, 79.75),
(43, 'NIS-823757595', 73, 'Ganjil', 100, 80, 70, 60, 40, 80, 70, 60, 70, 80, 67, 80, 71.42),
(44, 'NIS-114203558', 71, 'Genap', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `NIS` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `agama` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`NIS`, `username`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`) VALUES
('NIS-114203558', 'dayat', 'Hidayat Nurwahid', 'Jakarta Utara', '2018-01-31', 'Laki-laki', 'Islam', 'Jln Kampung Muka Blok C no.13 RT004/RW009 Kec.Pademangan Kel.Ancol'),
('NIS-823757595', 'rendi', 'Rendy Afrian', 'Jakarta Utara', '2018-12-31', 'Laki-laki', 'Islam', 'Jln Kampung Muka Blok C no.13 RT004/RW009 Kec.Pademangan Kel.Ancol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL COMMENT '1=admin, 2=guru, 3=siswa',
  `ket_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `created_at`, `status`, `ket_status`) VALUES
(71, 'jajang', '123', '2018-07-05 14:56:28', 1, 'Administrator'),
(78, 'safri', '1234567', '2018-07-08 11:06:14', 2, 'Guru'),
(79, 'nanda', '123', '2018-07-08 11:15:55', 2, 'Guru'),
(81, 'dayat', 'shafriie113', '2018-07-08 13:31:01', 3, 'Siswa'),
(82, 'rendi', '123', '2018-07-08 13:43:11', 3, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`kode_guru`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_matapelajaran`
--
ALTER TABLE `tbl_matapelajaran`
  ADD PRIMARY KEY (`kode_matapelajaran`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
