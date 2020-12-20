-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Des 2020 pada 22.32
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `username`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `kodebarang` varchar(50) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `hargasatuan` int(11) NOT NULL,
  `hargajual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `kodebarang`, `namabarang`, `hargasatuan`, `hargajual`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 'jaskdjkajkd', 'hjdhjsahdjhkj', 78, 6876, 78678, '2020-12-19 05:04:23', '2020-12-19 05:04:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `ID_DETAIL_PESANAN` int(11) NOT NULL,
  `ID_PESANAN` int(11) NOT NULL,
  `KODE_BARANG` int(11) NOT NULL,
  `JUMLAH_BARANG` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_laporan`
--

CREATE TABLE `header_laporan` (
  `KODE_LAPORAN` int(11) NOT NULL,
  `KODE_PESANAN` int(11) NOT NULL,
  `TGL_LAPORAN` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `IDPESANAN` int(11) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `TOTAL_HARGA` int(11) NOT NULL,
  `TGL_TRANSAKSI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_laporan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_laporan` (
`KODE_LAPORAN` int(11)
,`TGL_LAPORAN` datetime
,`NAMA` varchar(255)
,`TOTAL_HARGA` int(11)
,`TGL_TRANSAKSI` datetime
,`total_barang` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_laporan`
--
DROP TABLE IF EXISTS `v_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_laporan`  AS  select `a`.`KODE_LAPORAN` AS `KODE_LAPORAN`,`a`.`TGL_LAPORAN` AS `TGL_LAPORAN`,`b`.`NAMA` AS `NAMA`,`b`.`TOTAL_HARGA` AS `TOTAL_HARGA`,`b`.`TGL_TRANSAKSI` AS `TGL_TRANSAKSI`,sum(`c`.`JUMLAH_BARANG`) AS `total_barang` from ((`header_laporan` `a` left join `pesanan` `b` on((`b`.`IDPESANAN` = `a`.`KODE_PESANAN`))) left join `detail_pesanan` `c` on((`c`.`ID_PESANAN` = `b`.`IDPESANAN`))) group by `a`.`KODE_LAPORAN` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`ID_DETAIL_PESANAN`);

--
-- Indexes for table `header_laporan`
--
ALTER TABLE `header_laporan`
  ADD PRIMARY KEY (`KODE_LAPORAN`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`IDPESANAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `ID_DETAIL_PESANAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_laporan`
--
ALTER TABLE `header_laporan`
  MODIFY `KODE_LAPORAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `IDPESANAN` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
