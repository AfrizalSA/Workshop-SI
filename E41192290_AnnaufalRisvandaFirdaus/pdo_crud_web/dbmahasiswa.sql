SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
 
CREATE DATABASE IF NOT EXISTS `db_mahasiswa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_mahasiswa`;
 
 
CREATE TABLE `tb_mahasiswa` (
`kd_mahasiswa` int(11) NOT NULL,
`nama_mahasiswa` varchar(255) NOT NULL,
`kelas` varchar(10) NOT NULL,
`alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
ALTER TABLE `tb_mahasiswa`
ADD PRIMARY KEY (`kd_mahasiswa`);
 
 INSERT INTO `tb_mahasiswa` (`kd_mahasiswa`, `nama_mahasiswa`, `kelas`, `alamat`) VALUES
(1, 'Annaufal Firdaus', 'TIF19D', 'Jombang'),
(2, 'Risvanda', 'TIF19D', 'Jombang');
 
ALTER TABLE `tb_mahasiswa`
MODIFY `kd_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
