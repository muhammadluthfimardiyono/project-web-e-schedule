-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 02:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mc_jumat`
--

CREATE TABLE `mc_jumat` (
  `id_mc` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_mc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mc_jumat`
--

INSERT INTO `mc_jumat` (`id_mc`, `tanggal`, `nama_mc`) VALUES
(2, '2022-05-27', 'budi'),
(4, '2022-06-03', 'ujang'),
(5, '2022-06-10', 'aji'),
(6, '2022-06-17', 'ucup'),
(7, '2022-06-24', 'jajang'),
(9, '2022-07-01', 'kamal'),
(10, '2022-07-08', 'Tejo'),
(11, '2022-07-15', 'luthfi'),
(12, '2022-07-22', 'dudi'),
(13, '2022-07-29', 'Difa');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_jumat`
--

CREATE TABLE `petugas_jumat` (
  `id_petugas` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_khotib` varchar(50) NOT NULL,
  `nama_imam` varchar(50) NOT NULL,
  `nama_bilal` varchar(50) NOT NULL,
  `nama_muazin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas_jumat`
--

INSERT INTO `petugas_jumat` (`id_petugas`, `tanggal`, `nama_khotib`, `nama_imam`, `nama_bilal`, `nama_muazin`) VALUES
(3, '2022-05-27', 'Ust. Satiri', 'Ust. Abbas', 'Dayah', 'Dafa'),
(10, '2022-06-03', 'Ust. Abdul', 'Ust. Budi', 'Abizar', 'Atha'),
(11, '2022-06-10', 'Ust. Thoriq', 'Ust. Bashir', 'Devan', 'Dedi'),
(12, '2022-06-17', 'Ust. Faiz', 'Ust. Faiz', 'Fadil', 'Luthfi'),
(13, '2022-06-24', 'Ust. Faisal', 'Ust. Faqih', 'Dudi', 'Dirja'),
(14, '2022-07-01', 'Ust. Fauzan', 'Ust. Gilang', 'Dedi', 'Dayah'),
(15, '2022-07-08', 'Ust. Rayhan', 'Ust. Rayhan', 'Andi', 'Budi'),
(16, '2022-07-15', 'Ust. Haikal', 'Ust. Hanan ', 'Hariz', 'Sutejo'),
(17, '2022-07-22', 'Ust. Iqbal', 'Ust. Ikhlas', 'Bilal', 'Dafa'),
(18, '2022-07-29', 'Ust. Ujang', 'Ust. Ujang', 'Dayah', 'Difa');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_terawih`
--

CREATE TABLE `petugas_terawih` (
  `id_petugas` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_imam` varchar(50) NOT NULL,
  `bilal_kamilin` varchar(50) NOT NULL,
  `nama_kultum` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas_terawih`
--

INSERT INTO `petugas_terawih` (`id_petugas`, `tanggal`, `nama_imam`, `bilal_kamilin`, `nama_kultum`) VALUES
(9, '2022-04-05', 'Ust. Raharja', 'Dafa', 'Ust. Sholeh'),
(10, '2022-04-06', 'Ust. Budi', 'Dayah', ''),
(11, '2022-04-07', 'Ust. Sutejo', 'Bilal', 'Ust. Danang'),
(12, '2022-04-08', 'Ust. Danar', 'Difa', ''),
(13, '2022-04-09', 'Ust. Dadang', 'Dudi', ''),
(14, '2022-04-10', 'Ust. Ujang', 'Fadil', ''),
(15, '2022-04-11', 'Ust. Ucup', 'Dani', 'Ust. Kamal'),
(16, '2022-04-12', 'Ust. Jaja', 'Kamal', ''),
(17, '2022-04-13', 'Ust. Latif', 'Alvin', 'Ust. Ucup'),
(18, '2022-04-14', 'Ust. Danang', 'Gilang', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id_user` bigint(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id_user`, `first_name`, `last_name`, `email`, `password`, `alamat`, `tanggal_lahir`) VALUES
(7, 'budi', 'hartono', 'budi@gmail.com', '12345', 'jakarta', '2022-05-10'),
(12, 'Luthfi', 'Mardiyono', 'lutphi@gmail.com', '12345', 'Depok', '2001-03-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mc_jumat`
--
ALTER TABLE `mc_jumat`
  ADD PRIMARY KEY (`id_mc`);

--
-- Indexes for table `petugas_jumat`
--
ALTER TABLE `petugas_jumat`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `petugas_terawih`
--
ALTER TABLE `petugas_terawih`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mc_jumat`
--
ALTER TABLE `mc_jumat`
  MODIFY `id_mc` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `petugas_jumat`
--
ALTER TABLE `petugas_jumat`
  MODIFY `id_petugas` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `petugas_terawih`
--
ALTER TABLE `petugas_terawih`
  MODIFY `id_petugas` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
