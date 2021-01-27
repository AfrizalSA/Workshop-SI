-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 28. Jan 2021 um 00:31
-- Server-Version: 10.3.27-MariaDB
-- PHP-Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `u1011496_db_toko`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `merk` varchar(255) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `stok` text NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `tgl_update` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `id_kategori`, `nama_barang`, `merk`, `warna`, `ukuran`, `harga_beli`, `harga_jual`, `satuan_barang`, `stok`, `tgl_input`, `tgl_update`) VALUES
(1, 'BR001', 1, 'T-Shirt Lengan Panjang', 'Afterkids', '', '', '25000', '30000', 'PCS', '20', '6 October 2020, 0:41', '28 January 2021, 0:13'),
(2, 'BR002', 2, 'Celana Jeans', 'Afterkids', '', '', '50000', '70000', 'PCS', '20', '6 October 2020, 0:41', '28 January 2021, 0:13'),
(3, 'BR003', 1, 'T-Shirt Polos', 'Afterkids', '', '', '15000', '30000', 'PCS', '20', '6 October 2020, 1:34', '28 January 2021, 0:13'),
(4, 'BR004', 3, 'Jaket Bomber', 'Afterkids', '', '', '90000', '110000', 'PCS', '20', '9 January 2021, 7:40', '28 January 2021, 0:13'),
(5, 'BR005', 4, 'Topi Snapback', 'Afterkids', '', '', '70000', '100000', 'PCS', '20', '9 January 2021, 7:42', '28 January 2021, 0:13');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(1, 'Baju', '27 January 2021, 10:23'),
(2, 'Celana', '27 January 2021, 10:28'),
(3, 'Jaket', '27 January 2021, 0:19'),
(4, 'Topi', '27 January 2021, 0:20'),
(8, 'Ikat Pinggang', '27 January 2021, 19:24');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_member`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `member`
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
-- Daten für Tabelle `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `telepon`, `email`, `gambar`, `NIK`) VALUES
(1, 'Aditya Yoga', 'Jl. Tegalbesar - Jember', '082235301951', 'adityapamungkas@gmail.com', 'logo afterkids.png', '12345678');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nota`
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
-- Daten für Tabelle `nota`
--

INSERT INTO `nota` (`id_nota`, `id_barang`, `id_member`, `jumlah`, `total`, `tanggal_input`, `periode`) VALUES
(10, 'BR001', 1, '1', '30000', '9 January 2021, 2:39', '01-2021'),
(11, 'BR002', 1, '2', '140000', '9 January 2021, 2:39', '01-2021'),
(12, 'BR003', 1, '2', '60000', '9 January 2021, 2:39', '01-2021'),
(13, 'BR005', 1, '3', '300000', '27 January 2021, 17:10', '01-2021'),
(14, 'BR004', 1, '3', '330000', '27 January 2021, 19:24', '01-2021'),
(15, 'BR005', 1, '1', '100000', '27 January 2021, 19:24', '01-2021'),
(16, 'BR002', 1, '4', '280000', '27 January 2021, 19:25', '01-2021'),
(17, 'BR001', 1, '2', '60000', '27 January 2021, 20:06', '01-2021'),
(18, 'BR003', 1, '3', '90000', '27 January 2021, 20:07', '01-2021'),
(19, 'BR004', 1, '1', '110000', '27 January 2021, 20:07', '01-2021'),
(20, 'BR001', 1, '2', '60000', '27 January 2021, 20:06', '01-2021'),
(21, 'BR003', 1, '3', '90000', '27 January 2021, 20:07', '01-2021'),
(22, 'BR004', 1, '1', '110000', '27 January 2021, 20:07', '01-2021'),
(23, 'BR001', 1, '2', '60000', '27 January 2021, 20:06', '01-2021'),
(24, 'BR003', 1, '3', '90000', '27 January 2021, 20:07', '01-2021'),
(25, 'BR004', 1, '1', '110000', '27 January 2021, 20:07', '01-2021');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `tlp`, `nama_pemilik`) VALUES
(1, 'Afterkids', 'Jl. Tegal Besar - Jember', '082235301951', 'Aditya Yoga Pamungkas');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indizes für die Tabelle `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indizes für die Tabelle `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indizes für die Tabelle `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indizes für die Tabelle `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT für Tabelle `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT für Tabelle `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
