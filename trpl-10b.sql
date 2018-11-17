-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 03:40 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trpl-10b`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `id_detail_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_appointment`, `id_user`, `id_jadwal`, `tanggal`, `id_detail_waktu`) VALUES
(4, 12, 12, '2018-11-21', 13),
(5, 12, 12, '2018-11-14', 12),
(6, 12, 14, '2018-11-28', 13),
(7, 12, 14, '2018-11-28', 15);

-- --------------------------------------------------------

--
-- Table structure for table `detail_waktu`
--

CREATE TABLE `detail_waktu` (
  `id_detail_waktu` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `detail_waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_waktu`
--

INSERT INTO `detail_waktu` (`id_detail_waktu`, `id_waktu`, `detail_waktu`) VALUES
(1, 1, '08.00'),
(2, 1, '09.00'),
(3, 1, '10.00'),
(4, 1, '11.00'),
(5, 1, '12.00'),
(6, 2, '13.00'),
(7, 2, '14.00'),
(8, 2, '15.00'),
(9, 2, '16.00'),
(10, 2, '17.00'),
(11, 3, '18.00'),
(12, 3, '19.00'),
(13, 3, '20.00'),
(14, 3, '21.00'),
(15, 3, '22.00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `id_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_user`, `id_poli`, `hari`, `id_waktu`) VALUES
(8, 7, 10, 'selasa', 3),
(11, 2, 5, 'senin', 2),
(12, 7, 1, 'rabu', 3),
(13, 2, 10, 'rabu', 3),
(14, 6, 1, 'rabu', 3),
(15, 6, 1, 'rabu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level` int(1) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level`, `role`) VALUES
(1, 'ADMIN'),
(2, 'DOKTER'),
(3, 'PASIEN');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Gigi'),
(5, 'sikil'),
(9, 'usus'),
(10, 'pantat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `nama`, `alamat`, `no_ktp`) VALUES
(1, 'admin', 'admin', 1, 'admin', 'dirahasiakan', '0000000000000000'),
(2, 'bambang', 'bambang', 2, 'om bambang in action', 'bambang hayuk', '1234567890123456'),
(4, 'sukri', 'sukri', 3, 'skruiman', 'jalan sukuri', '2345678901234567'),
(6, 'sutris', 'sutris', 2, 'sutrisna', 'jalan sutris gg 10 no 6', '3456789012345678'),
(7, 'gugun', 'gugun', 2, 'gugun', 'jalan gunung gundulan2', '7856472634676581'),
(11, 'klkl', 'klkl', 3, 'klkl', 'klkl', '0931029379823692'),
(12, 'pasien', 'pasien', 3, 'pasien manjah', 'dari planet mars', '7638230909749091'),
(13, 'asdasd', 'asdasd', 3, 'asdasd', 'asdasd', '7818236812638723'),
(15, 'adam', 'adam', 3, 'adam', 'adam', '123123'),
(19, 'adam1', 'adam1', 3, 'adam', 'adam', '123123123'),
(36, 'adam2', 'adam2', 3, 'adam kedua', 'gurun sahara pasir berbisik', '678675765765'),
(37, 'adam3', 'adam3', 3, 'dam adam', 'kjhkuhiuh', '4578765434567876'),
(38, 'wewe', 'wewe', 3, 'wewe', 'wewewewewewe', '12356789'),
(39, 'momomo', 'momomo', 3, 'momomo', 'ma sjdnakjsnd', '5678567891867257'),
(40, 'mimimi', 'mimimi', 3, 'mimimimi', 'mimimalskdjalsid', '8765434567890'),
(44, 'popo', 'popo', 3, 'popo', 'lakmsldkmqlkwmkm', '3456789876543'),
(45, 'pipi', 'pipi', 3, 'hagfsdhagsd', 'fhgahsj;dhkagjsd67890', '09876543567'),
(46, 'popop', 'ansdkajsd', 3, 'ajnskdjmasbdz', 'kshbdjbms780', '10863279213987');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu`) VALUES
(1, '08.00 - 12.00'),
(2, '13.00 - 17.00'),
(3, '18.00 - 22.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_detail_waktu` (`id_detail_waktu`);

--
-- Indexes for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  ADD PRIMARY KEY (`id_detail_waktu`),
  ADD KEY `id_waktu` (`id_waktu`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_user` (`id_user`,`id_poli`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_waktu` (`id_waktu`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_appointment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  MODIFY `id_detail_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`id_detail_waktu`) REFERENCES `detail_waktu` (`id_detail_waktu`);

--
-- Constraints for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  ADD CONSTRAINT `detail_waktu_ibfk_1` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
