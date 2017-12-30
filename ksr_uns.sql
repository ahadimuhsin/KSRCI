-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 03:56 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksr_uns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('adminksr', '2538cbc5a6a44df2e14fb794e20dc7a1');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `nama_acara` varchar(30) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `tempat_acara` varchar(150) NOT NULL,
  `url_lampiran` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `status_surat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `instansi`, `nama_acara`, `tanggal_acara`, `tempat_acara`, `url_lampiran`, `kontak`, `status_surat`) VALUES
(10, '23', 'Himaster', 'Networking', '2017-12-05', 'Tawangmangu', 'ATM_M0515040.pdf', '23242412341', 'Diterima'),
(11, '2323', 'ewrwer', '23232', '2017-11-28', 'wqeweq', 'Student-Connect_w_ur_Class.docx', '23232', 'Diterima'),
(12, '123', 'Himaster', 'Rabes', '2017-12-04', 'B407', 'Screenshot.docx', '233232', 'Diterima'),
(13, 'e23', 'e2e', '35435', '2017-12-11', 'g4t33', 'FORM-TA_11-PRESENSI-MENGIKUTI-SEMINAR-HASIL-TUGAS-AKHIR.docx', '64y54', 'Diterima'),
(14, '34242', 'trg3rt', '4t3', '2017-12-07', 'gege', 'FORM-TA_10_KARTU-MENGIKUTI-SEMINAR-HASIL-TUGAS-AKHIR1.doc', '3grq3q4', 'Menunggu Konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
