-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 04:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `merk` varchar(255) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga_beli` int(255) UNSIGNED NOT NULL,
  `harga_jual` int(255) UNSIGNED NOT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `stok` int(100) UNSIGNED NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `tgl_update` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `id_kategori`, `nama_barang`, `merk`, `warna`, `ukuran`, `harga_beli`, `harga_jual`, `satuan_barang`, `stok`, `tgl_input`, `tgl_update`) VALUES
(1, 'BR001', 1, 'T-Shirt Lengan Panjang', 'Afterkids', '', '', 25000, 30000, 'PCS', 10, '6 October 2020, 0:41', '9 January 2021, 7:42'),
(2, 'BR002', 2, 'Jeans', 'Afterkids', '', '', 50000, 70000, 'PCS', 8, '6 October 2020, 0:41', '9 January 2021, 7:41'),
(3, 'BR003', 1, 'T-Shirt Polos', 'Afterkids', '', '', 15000, 30000, 'PCS', 8, '6 October 2020, 1:34', '9 January 2021, 7:41'),
(4, 'BR004', 3, 'Bomber', 'Afterkids', '', '', 90000, 110000, 'PCS', 12, '9 January 2021, 7:40', NULL),
(5, 'BR005', 4, 'Straw Hat white stripe', 'Adidas', '', '', 25000, 50000, 'PCS', 100, '13 January 2021, 13:09', NULL),
(8, 'BR007', 2, 'celana panjang hitam', 'Adidas', '', '', 50000, 100000, 'PCS', 67, '13 January 2021, 13:42', NULL),
(11, 'BR009', 2, 'Celana jeans', 'Levis', '', '', 25000, 50000, 'PCS', 200, '27 January 2021, 20:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(1, 'Baju', '7 May 2017, 10:23'),
(2, 'Celana', '7 May 2017, 10:28'),
(3, 'Jaket', '6 October 2020, 0:19'),
(4, 'Topi', '6 October 2020, 0:20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_member`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nm_member` varchar(255) NOT NULL,
  `alamat_member` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `NIK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `telepon`, `email`, `gambar`, `NIK`) VALUES
(1, 'Aditya Yoga Pamungkas', 'Jl. Tegalbesar - Jember', '082235301951', 'adityapamungkas@gmail.com', 'Logo.png', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `periode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_barang`, `id_member`, `jumlah`, `total`, `tanggal_input`, `periode`) VALUES
(1, 'BR001', 1, '4', '12000', '6 October 2020, 0:45', '10-2020'),
(2, 'BR001', 1, '4', '12000', '6 October 2020, 0:45', '10-2020'),
(3, 'BR001', 1, '4', '12000', '6 October 2020, 0:45', '10-2020'),
(4, 'BR001', 1, '4', '12000', '6 October 2020, 0:45', '10-2020'),
(5, 'BR001', 1, '2', '6000', '6 October 2020, 0:49', '10-2020'),
(6, 'BR001', 1, '2', '6000', '6 October 2020, 0:49', '10-2020'),
(7, 'BR001', 1, '2', '6000', '6 October 2020, 1:15', '10-2020'),
(8, 'BR002', 1, '2', '6000', '6 October 2020, 1:17', '10-2020'),
(9, 'BR001', 1, '2', '6000', '6 October 2020, 1:20', '10-2020'),
(10, 'BR001', 1, '1', '30000', '9 January 2021, 2:39', '01-2021'),
(11, 'BR002', 1, '2', '140000', '9 January 2021, 2:39', '01-2021'),
(12, 'BR003', 1, '2', '60000', '9 January 2021, 2:39', '01-2021'),
(13, 'BR001', 1, '1', '30000', '9 January 2021, 2:39', '01-2021'),
(14, 'BR002', 1, '2', '140000', '9 January 2021, 2:39', '01-2021'),
(15, 'BR003', 1, '2', '60000', '9 January 2021, 2:39', '01-2021'),
(16, 'BR001', 1, '1', '30000', '9 January 2021, 2:39', '01-2021'),
(17, 'BR002', 1, '2', '140000', '9 January 2021, 2:39', '01-2021'),
(18, 'BR003', 1, '2', '60000', '9 January 2021, 2:39', '01-2021'),
(19, 'BR001', 1, '0', '0', '13 January 2021, 21:45', '01-2021'),
(20, 'BR001', 1, '0', '0', '13 January 2021, 21:45', '01-2021'),
(21, 'BR001', 1, '0', '0', '13 January 2021, 21:48', '01-2021'),
(22, 'BR001', 1, '0', '0', '13 January 2021, 21:48', '01-2021'),
(23, 'BR001', 1, '0', '0', '13 January 2021, 21:48', '01-2021'),
(24, 'BR001', 1, '0', '0', '13 January 2021, 22:37', '01-2021'),
(25, 'BR007', 1, '50', '5000000', '27 January 2021, 10:52', '01-2021'),
(26, 'BR007', 1, '1', '100000', '27 January 2021, 21:08', '01-2021'),
(27, 'BR007', 1, '1', '100000', '27 January 2021, 21:42', '01-2021'),
(28, 'BR007', 1, '1', '100000', '27 January 2021, 21:42', '01-2021'),
(29, 'BR007', 1, '2', '200000', '27 January 2021, 21:42', '01-2021'),
(30, 'BR007', 1, '2', '200000', '27 January 2021, 21:42', '01-2021'),
(31, 'BR007', 1, '2', '200000', '27 January 2021, 21:42', '01-2021'),
(32, 'BR007', 1, '5', '500000', '27 January 2021, 21:57', '01-2021'),
(33, 'BR007', 1, '5', '500000', '27 January 2021, 21:57', '01-2021'),
(34, 'BR007', 1, '5', '500000', '27 January 2021, 21:57', '01-2021'),
(35, 'BR007', 1, '10', '1000000', '27 January 2021, 21:57', '01-2021');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) UNSIGNED NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `tlp`, `nama_pemilik`) VALUES
(1, 'Afterkids', 'Jl. Tegalbesar - Jember', '082235301951', 'Aditya Yoga Pratama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
