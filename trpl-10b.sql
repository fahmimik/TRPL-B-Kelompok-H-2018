-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 06:37 PM
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
  `id_detail_waktu` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_appointment`, `id_user`, `id_jadwal`, `tanggal`, `id_detail_waktu`, `status`) VALUES
(40, 57, 16, '2018-12-17', 2, 'Canceled'),
(41, 57, 21, '2018-12-24', 6, 'Done'),
(42, 57, 21, '2018-12-24', 6, 'Booked'),
(43, 57, 21, '2018-12-24', 6, 'Done'),
(44, 57, 21, '2018-12-24', 10, 'Booked');

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
(16, 52, 1, 'senin', 1),
(17, 52, 1, 'selasa', 1),
(19, 52, 1, 'rabu', 1),
(20, 52, 1, 'kamis', 1),
(21, 51, 1, 'senin', 2),
(22, 51, 1, 'selasa', 2),
(23, 51, 1, 'rabu', 2),
(24, 51, 1, 'kamis', 2);

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
(5, 'Gizi'),
(9, 'Jantung'),
(10, 'Paru'),
(11, 'Syaraf');

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
(47, 'toni', 'toni', 2, 'Toni Kusumo, dr., Sp.GK-DFN', 'Jalan', ''),
(50, 'subandi', 'subandi', 2, 'Ahmad Subandi, dr.,Sp.GK-DFN', 'Jalan Jawa Nomor 2', '1234567987654356'),
(51, 'diana', 'diana', 2, 'Diana Hanindio, drg', 'Jalan Sulawesi nomor 36', '9876543234567876'),
(52, 'eka', 'eka', 2, 'Eka Putri, drg', 'Jalan Pakusari nomor 135', '2345676543234567'),
(53, 'samuel', 'samuel', 2, 'Samuel, dr., Sp.JP', 'Perumahan Gunung Batu blok JK nomor 56B', '5676543234567898'),
(54, 'bambang', 'bambang', 2, 'Bambang, dr., Sp.P', 'Jalan Letjen Sutoyo nomor 122', '3456785432345678'),
(55, 'agus', 'agus', 2, 'Agus, dr., Sp.P', 'Perumahan Villa Tegal Besar blok C nomor 14', '3456789876545678'),
(56, 'eko', 'eko', 2, 'Eko Susilo, dr., Sp.P', 'Jalan Panjaitan nomor 77', '2345678908765456'),
(57, 'pasien', 'pasien', 3, 'Bratasena Anggabayu', 'Perumahan Villa Tegal Besar blok C nomor 14', '4567898765434567');

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
  MODIFY `id_appointment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  MODIFY `id_detail_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
