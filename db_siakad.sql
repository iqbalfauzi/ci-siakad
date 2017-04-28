-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 10:58 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_username` char(30) NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` char(30) NOT NULL,
  `foto` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_username`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jam_kuliah`
--

CREATE TABLE `jam_kuliah` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kd_mk` varchar(10) NOT NULL,
  `kd_prodi` varchar(10) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `sks` smallint(6) NOT NULL,
  `smt` enum('1','2','3','4','5','6') NOT NULL,
  `semester` enum('Ganjil','Genap','','') NOT NULL,
  `aktif` enum('Ya','Tidak','','') NOT NULL,
  `tgl_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kd_mk`, `kd_prodi`, `nama_mk`, `sks`, `smt`, `semester`, `aktif`, `tgl_insert`, `tgl_update`) VALUES
('TM001', '112', 'Biologi', 2, '1', 'Ganjil', 'Ya', '2017-04-23 05:31:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_mhs`
--

CREATE TABLE `mutasi_mhs` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` varchar(10) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `singkat` varchar(10) NOT NULL,
  `ketua_prodi` char(20) NOT NULL,
  `nik` char(30) NOT NULL,
  `akreditasi` char(3) NOT NULL,
  `tgl_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `prodi`, `singkat`, `ketua_prodi`, `nik`, `akreditasi`, `tgl_insert`, `tgl_update`) VALUES
('112', 'Biologi', 'BIOLOGI', 'Bpk. Supriyono', '14650013', 'A', '2017-04-27 17:01:47', '0000-00-00 00:00:00'),
('113', 'Teknik Informatika', 'TI', 'Dr.Cahyo Chrysdian', '157765867463789743', 'A', '2017-04-27 21:43:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kuliah`
--

CREATE TABLE `ruang_kuliah` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `no` int(3) NOT NULL,
  `semester` enum('Ganjil','Genap','','') NOT NULL,
  `dari` smallint(6) NOT NULL,
  `sampai` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_username`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
