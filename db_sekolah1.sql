-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 01:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nisn` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tempat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sekolah_asal` varchar(50) CHARACTER SET latin1 NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Khonghucu') CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET latin1 NOT NULL,
  `status_keluarga` varchar(50) CHARACTER SET latin1 NOT NULL,
  `anak_ke` varchar(3) CHARACTER SET latin1 NOT NULL,
  `bersaudara` varchar(3) CHARACTER SET latin1 NOT NULL,
  `ayah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_telp_ayah` varchar(15) CHARACTER SET latin1 NOT NULL,
  `pekerjaan_ayah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ibu` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_telp_ibu` varchar(15) CHARACTER SET latin1 NOT NULL,
  `pekerjaan_ibu` varchar(50) CHARACTER SET latin1 NOT NULL,
  `wali` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_telp_wali` varchar(15) CHARACTER SET latin1 NOT NULL,
  `pekerjaan_wali` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `nisn`, `tempat`, `tanggal_lahir`, `alamat`, `sekolah_asal`, `agama`, `jenis_kelamin`, `status_keluarga`, `anak_ke`, `bersaudara`, `ayah`, `no_telp_ayah`, `pekerjaan_ayah`, `ibu`, `no_telp_ibu`, `pekerjaan_ibu`, `wali`, `no_telp_wali`, `pekerjaan_wali`) VALUES
(6, 'Ibnu', '201910370311025', 'Palu', '2001-02-23', 'Jl. Lombok lorong 2 no.46', 'SD Negeri 4 Palu', 'Islam', 'Laki-laki', 'AnakKandung', '3', '3', 'Syahrir', '082290188423', '', 'Wijayanti', '08114500017', 'PNS', '', '', ''),
(7, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
