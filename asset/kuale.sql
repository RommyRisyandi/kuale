-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 08:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuale`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pesanan`
--

CREATE TABLE `tb_detail_pesanan` (
  `id_detail_pesanan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_pesanan` varchar(50) NOT NULL,
  `harga_satuan` int(20) NOT NULL,
  `jml_porsi` int(20) NOT NULL,
  `subtotal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_detail_pesanan`, `id_menu`, `nama_pesanan`, `harga_satuan`, `jml_porsi`, `subtotal`) VALUES
(12, 4, 'Mie Tiaw Goreng', 12000, 4, 48000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga`, `kategori`, `foto`) VALUES
(4, 'Mie Tiaw Goreng', 12000, 'Makanan', 'mie_tiaw_goreng.jpg'),
(5, 'Pisang Susu Keju', 6000, 'Makanan', 'pisang_susu_keju1.jpg'),
(6, 'Ikan Asam Pedas', 25000, 'Makanan', 'ikan_asam_pedas2.jpg'),
(7, 'Sup Ikan', 10000, 'Makanan', 'sup_ikan.jpg'),
(8, 'Soto Betawi', 16000, 'Makanan', 'soto_betawi.jpg'),
(9, 'Es Teh', 3000, 'Minuman', 'es-teh-m-300x3001.png'),
(10, 'Cappucino Hangat', 6000, 'Minuman', 'dekang-eliquid-capuccino1.jpg'),
(11, 'Burger', 6000, 'Makanan', '3-2-burger-free-png-image1.png'),
(28, 'Paket Ikan Bakar', 50000, 'Makanan', 'IMG-20180304-WA0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `no_meja` int(3) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` enum('admin','pelayan','kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `password`, `level`) VALUES
('rommy', 'rommy', 'rommy', 'admin'),
('budi', 'budi', 'budi', 'pelayan'),
('mawan', 'mawan', 'mawan', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  MODIFY `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD CONSTRAINT `tb_detail_pesanan_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `tb_pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
