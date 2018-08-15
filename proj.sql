-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 05:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` varchar(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `kelas` enum('10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `pass`, `kelas`) VALUES
('12345678', 'Sanja Avi', 'sanja', '10');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `act` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `waktu`, `act`) VALUES
('12345678', '2018-07-05 01:34:25', 'tambah data'),
('12345678', '2018-07-05 01:41:56', 'tambah data'),
('12345678', '2018-07-05 01:43:09', 'tambah data'),
('12345678', '2018-07-05 02:16:23', 'tambah soal'),
('12345678', '2018-07-05 02:18:51', 'tambah soal'),
('12345678', '2018-07-05 02:26:03', 'edit soal'),
('12345678', '2018-07-05 02:26:33', 'edit soal'),
('12345678', '2018-07-05 10:11:15', 'edit soal'),
('12345678', '2018-07-05 10:14:20', 'edit soal');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(3) NOT NULL,
  `mapel` enum('BAHASA INDONESIA','MATEMATIKA','BAHASA INGGRIS','FISIKA') NOT NULL,
  `kelas` enum('10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `kelas`) VALUES
('1A', 'BAHASA INDONESIA', '10'),
('1B', 'MATEMATIKA', '10');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` varchar(10) NOT NULL,
  `jawaban` text NOT NULL,
  `kunci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` enum('10','11','12') NOT NULL,
  `jenis_kel` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `kelas`, `jenis_kel`) VALUES
('1234567', 'SANJA AVI M', '10', 'L'),
('1234556', 'MAULANA AVI', '11', 'L'),
('1234444', 'SADASDADSA', '10', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` varchar(3) NOT NULL,
  `kelas` enum('10','11','12') NOT NULL,
  `nip` varchar(8) NOT NULL,
  `judul_soal` varchar(20) NOT NULL,
  `soal` text NOT NULL,
  `mapel` enum('BAHASA INDONESIA','MATEMATIKA','BAHASA INGGRIS','FISIKA') NOT NULL,
  `kunci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `kelas`, `nip`, `judul_soal`, `soal`, `mapel`, `kunci`) VALUES
('1AB', '10', '12345678', 'MEMBUAT POHON', 'SIAPA YANG BERNAMA BUDI?', 'BAHASA INDONESIA', 'SAYA ADALAH BUDI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
