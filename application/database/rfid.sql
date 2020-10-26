-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2020 at 03:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfid`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_barang`
--

CREATE TABLE `data_jenis_barang` (
  `id_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `detail_barang` text,
  `distributor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jenis_barang`
--

INSERT INTO `data_jenis_barang` (`id_barang`, `nama_barang`, `detail_barang`, `distributor`) VALUES
('1', 'rokok', 'untuk merokok', 'PT Tobanga DO'),
('2', 'Sembako', 'ini sembako kita', 'PT Sembako Raya'),
('21518012125', 'tags putih', 'sedap', 'PT. MI'),
('247131202122', 'gantungan biru', 'ini hp', 'pt indofood');

-- --------------------------------------------------------

--
-- Table structure for table `data_realtime_gudang`
--

CREATE TABLE `data_realtime_gudang` (
  `id_realtime` int(11) NOT NULL,
  `id_barang` varchar(25) NOT NULL,
  `keterangan` varchar(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_realtime_gudang`
--

INSERT INTO `data_realtime_gudang` (`id_realtime`, `id_barang`, `keterangan`, `tanggal`) VALUES
(135, '21518012125', 'KELUAR', '2020-10-13 08:12:09'),
(136, '247131202122', 'KELUAR', '2020-10-13 08:12:19'),
(137, '247131202122', 'KELUAR', '2020-10-13 08:12:57'),
(138, '21518012125', 'KELUAR', '2020-10-13 08:13:02'),
(139, '247131202122', 'KELUAR', '2020-10-26 10:06:29'),
(140, '247131202122', 'KELUAR', '2020-10-26 10:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(128) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1: admin, 2: user',
  `is_active` int(1) NOT NULL COMMENT '0: nonaktif, 1: aktif',
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `password`, `image`, `level`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin', '$2y$10$Q6WhX7NjGHD6Kt0kfb/GxOcNcoWMID8QyvxqYwuwMF7MIUoWhiqNy', 'admin/shipit.png', 1, 1, '2020-04-02 18:33:34'),
(2, 'Masrizal Eka Yulianto', 'admin88', '$2y$10$B9iZ0rASTvzZLbIF/DhCaeexK7yOyVv3c9VQrgIGX.cQ2UtD.b3h.', 'default.jpg', 2, 1, '2020-09-07 10:04:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jenis_barang`
--
ALTER TABLE `data_jenis_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_realtime_gudang`
--
ALTER TABLE `data_realtime_gudang`
  ADD PRIMARY KEY (`id_realtime`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_realtime_gudang`
--
ALTER TABLE `data_realtime_gudang`
  MODIFY `id_realtime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
