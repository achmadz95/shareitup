-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 07:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(3) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `deskripsi_barang` varchar(200) NOT NULL,
  `dipinjam` tinyint(1) NOT NULL,
  `dikembalikan` tinyint(1) NOT NULL,
  `id_pemilik` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis`, `foto_barang`, `deskripsi_barang`, `dipinjam`, `dikembalikan`, `id_pemilik`) VALUES
(2411, 'Canon EOS 600D', 'Kamera', 'assets/img/barang2-4.jpg', 'Canon EOS 600D salah satu keunggulannya ada fitur Full Hight Definiton Movies, dengan 9 titik Auto Focus yang dapat memudahkan penggunanya untuk menggambil gambar yang bagus.', 0, 0, 2),
(3411, 'Sony Camera Cybershot DSC-W830', 'Kamera', 'assets/img/barang3-4.jpg', 'Camera Digital SONY DSC-W830 di lengkapi dengan resolusi 20.1MP, LCD 2,7", ISO 3200, Intelligent auto, Optical Zoom 8x, Carl Seiss HD Movie (720p), Baterai Li-Ion.', 0, 0, 3),
(24112, 'Paket Traveling GoPro HERO 6 Action Camera', 'Kamera', 'assets/img/barang1-4.jpg', 'Paket Traveling GoPro HERO 6 mampu mengeluarkan resolusi Ultra HD video 4K 60 fps, stabilizer yang sangat smooth, dan koneksi WiFi yang sangat cepat ke Gopro App.', 0, 0, 2),
(222983, 'Pompa Ban Mini IL983', 'Pompa Ban', 'assets/img/barang1-2.jpg', 'Berat asli produk: 90 Gram. Mampu memompa hingga tekanan 87 Psi / 6 Bar.', 0, 0, 2),
(313839, 'OXONE Setrika Uap Berdiri OX-839 - Hitam', 'Setrika Baju', 'assets/img/barang3-1.jpg', 'Setrika uap untuk menyetrika baju dengan cepat', 1, 0, 3),
(2131172, 'Philips Setrika Listrik HD1172  ', 'Setrika Baju', 'assets/img/barang2-1.jpg', 'Setrika listrik mudah dipakai dan dibawa berpergian', 0, 0, 2),
(2223325, 'Pompa Injak Darurat KM3325', 'Pompa Ban', 'assets/img/barang1-2.jpg', 'Pompa Injak Darurat untuk sepeda, motor, dan mobil', 1, 0, 2),
(3131301, 'Philips Setrika Travel HD1301 - Putih', 'Setrika Baju', 'assets/img/barang1-1.jpg', 'Setrika baju travel ini mudah dibawa ke mana-mana', 0, 0, 3),
(3227745, 'Pompa Ban Mini Tekanan 100PSI 7745', 'Pompa Ban', 'assets/img/barang3-2.jpg', 'Tegangan : 12V DC\r\nTekanan : 100psi\r\nDaya : 130W\r\nDiameter Tabung : 30mm', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_barang`
--

CREATE TABLE `transaksi_barang` (
  `id_peminjam` int(4) NOT NULL,
  `id_barangP` int(3) NOT NULL,
  `tgl_dipinjam` date NOT NULL,
  `tgl_dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_barang`
--

INSERT INTO `transaksi_barang` (`id_peminjam`, `id_barangP`, `tgl_dipinjam`, `tgl_dikembalikan`) VALUES
(2, 313839, '2017-12-01', '2017-12-05'),
(3, 2223325, '2017-12-12', '2017-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `kecamatan`, `no_telp`, `kode_pos`, `foto_profil`, `foto_ktp`, `email`, `deskripsi`, `username`, `password`, `isAdmin`) VALUES
(1, 'admin', 'Wonorejo Selatan III no. 18', 'Rungkut', '087899998767', '60296', '', '', '6666666666', 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'Zakaria Achmad', 'Sukolilo Damai II no. 4', 'Sukolilo', '081567234577', '60111', 'assets/img/profil_zakaria.jpg', 'assets/img/ktp_zakaria.jpg', 'pujpuj72@gmail.com', 'User', 'achmadz', '7654ae508ade5a9c01dbd566eca6b5a9d5e2135d', 0),
(3, 'Andhika Supriyanto', 'Wisma Permai II no. 23', 'Mulyorejo', '083865432516', '60113', 'assets/img/profil_supri.jpg', 'assets/img/ktp_supri.jpg', 'pujichoirul3@gmail.com', 'User', 'supri', 'e404fb3a838a8c931b3ef40889cd0cd0b99b0db3', 0),
(4, 'Puji Choirul Huda', 'Delta Gardenia III-11', 'Waru', '087774063958', '61256', 'assets/img/profil_puji.jpg', 'assets/img/futsal.png', 'pujichoirul3@gmail.com', 'User', 'pujiji', 'ea1eee52fafc2142680ef260843441197f0a357d', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD KEY `id_peminjam` (`id_peminjam`),
  ADD KEY `id_barang` (`id_barangP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3227746;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD CONSTRAINT `transaksi_barang_ibfk_1` FOREIGN KEY (`id_peminjam`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_barang_ibfk_2` FOREIGN KEY (`id_barangP`) REFERENCES `barang` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
