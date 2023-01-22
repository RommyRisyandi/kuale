-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 10:12 AM
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
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `stok` enum('ada','habis') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga`, `kategori`, `stok`, `foto`) VALUES
(32, 'Ayam Bakar Malay + Nasi', 15000, 'Makanan', 'habis', 'ayam_bakar_malay.jpg'),
(33, 'Cassava Susu Keju', 8000, 'Makanan', 'ada', 'cassava_susu_keju.jpg'),
(34, 'Cassava Susu', 6000, 'Makanan', 'ada', 'Cassava_Susu.jpg'),
(35, 'Mie Tiaw Goreng', 8000, 'Makanan', 'ada', 'mie_tiaw_goreng.jpg'),
(36, 'Mie Rebus', 8000, 'Makanan', 'ada', 'Mie_Rebus.jpg'),
(37, 'Pisang Susu Keju', 6000, 'Makanan', 'ada', 'pisang_susu_keju.jpg'),
(38, 'Cah Pakis/Miding', 6000, 'Makanan', 'ada', 'Cah_Miding.jpg'),
(39, 'Nasi Liwet', 25000, 'Makanan', 'ada', 'nasi_liwet.jpg'),
(40, 'Nasi Seprah', 50000, 'Makanan', 'ada', 'Nasi_Seprah1.jpg'),
(41, 'Sop Ikan Lumek', 22000, 'Makanan', 'ada', 'Sop_Ikan_Lumek.jpg'),
(42, 'Sop Ikan', 22000, 'Makanan', 'ada', 'sup_ikan_2.jpg'),
(43, 'Sop Iga', 25000, 'Makanan', 'ada', 'Sop_Tulang_Iga.jpg'),
(44, 'Soto Betawi', 15000, 'Makanan', 'ada', 'soto_betawi.jpg'),
(45, 'Soto Ayam Surabaya', 15000, 'Makanan', 'ada', 'Soto_Ayam_Surabaya.jpg'),
(46, 'Cappucino Hangat', 5000, 'Minuman', 'ada', 'dekang-eliquid-capuccino.jpg'),
(47, 'Teh Es', 4000, 'Minuman', 'ada', 'es-teh-m-300x300.png'),
(48, 'Kopi Hangat', 5000, 'Minuman', 'ada', '23328842052_d87782d0f81.jpg'),
(49, 'Teh Hangat', 4000, 'Minuman', 'ada', 'Teh.jpg'),
(50, 'Kopi Es', 5000, 'Minuman', 'ada', 'es-kopi.jpg'),
(51, 'Cappucino Es', 5000, 'Minuman', 'ada', 'Cappucino_Es.jpg'),
(52, 'Susu Hangat', 5000, 'Minuman', 'ada', 'Susu_Hangat.jpg'),
(53, 'Susu Es', 5000, 'Minuman', 'ada', 'Es_Susu.png'),
(54, 'Milo Hangat', 5000, 'Minuman', 'ada', 'Milo.jpg'),
(55, 'Milo Es', 5000, 'Minuman', 'ada', 'Milo_Es.png'),
(56, 'Kopi Susu Hangat', 6000, 'Minuman', 'ada', 'milk-coffee_2017071518105132_650x.jpg'),
(57, 'Kopi Susu Es', 6000, 'Minuman', 'ada', 'es_kopi_susu.jpg'),
(59, 'Cincau Es', 5000, 'Minuman', 'ada', 'Cincau_Es.jpg'),
(60, 'Es Jeruk Kecil', 5000, 'Minuman', 'ada', 'Es_Jeruk_Kecil.jpg'),
(61, 'Jus Buah Segar', 10500, 'Minuman', 'ada', 'jus_buah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `no_meja` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `jml_porsi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`no_meja`, `id_menu`, `id_pesanan`, `jml_porsi`, `status`, `bayar`) VALUES
(1, 34, 85, 1, 1, 1),
(1, 38, 86, 1, 1, 1),
(1, 51, 87, 1, 1, 1),
(1, 38, 88, 1, 1, 1),
(1, 51, 89, 1, 1, 1),
(1, 50, 90, 1, 1, 1),
(1, 50, 91, 1, 1, 1),
(1, 38, 92, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` enum('admin','pelayan','kasir','dapur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'rommy', 'rommy', 'rommy', 'admin'),
(2, 'budi', 'budi', 'budi', 'pelayan'),
(3, 'mawan', 'mawan', 'mawan', 'kasir'),
(4, 'fajar', 'fajar', 'fajar', 'dapur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
