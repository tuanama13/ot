-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 02:13 PM
-- Server version: 10.1.26-MariaDB
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
-- Database: `ot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat_pegawai` text NOT NULL,
  `kontak_pegawai` varchar(14) NOT NULL,
  `jabatan_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat_pegawai`, `kontak_pegawai`, `jabatan_pegawai`) VALUES
(1, 'Iron Man', 'Jl. Avengers', '080000000000', 'Kasir'),
(2, 'Black Widow', 'Jl. Avengers', '081111111111', 'Kasir'),
(3, 'Nick Fury', 'Jl. Avengers', '082222222222', 'Pimpinan'),
(5, 'Demi Levato', 'Pontianak', '089878675890', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(5) NOT NULL,
  `nama_satuan` varchar(20) NOT NULL,
  `kode_satuan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `nama_satuan`, `kode_satuan`) VALUES
(1, 'Karton', 'K'),
(2, 'Pieces', 'PCS'),
(3, 'Box', 'B'),
(4, 'Lusin', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat_toko` text NOT NULL,
  `kontak_toko` varchar(13) NOT NULL,
  `email_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`id_toko`, `nama_toko`, `alamat_toko`, `kontak_toko`, `email_toko`) VALUES
(1, 'Toko Wira', 'Jl. Nawawi Hasan No 95', '089834478908', 'toko.wira@mail.com'),
(2, 'Toko Makmur', 'Jl. Kom Yos Sudarso No 565', '081245678945', ''),
(3, 'dasdasd', 'asdsadasd', '123123', 'aasdasd@gagf.com'),
(4, 'dsfsdf', 'sfsdfdsf', '234234234', 'asdfasdas@gg.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_pegawai`, `username_user`, `password_user`) VALUES
(1, 1, 'ironkece', 'ambrosius13'),
(2, 2, 'cutewidow', 'ambrosius13'),
(3, 3, 'furyeye', 'ambrosius13'),
(4, 5, 'demiapa', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(13) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_barang` int(2) NOT NULL,
  `stok_barang` int(255) NOT NULL,
  `satuan_barang1` varchar(255) NOT NULL,
  `isi_satuan1` int(11) NOT NULL,
  `satuan_barang2` varchar(11) NOT NULL,
  `isi_satuan2` int(11) NOT NULL,
  `satuan_barang3` varchar(11) NOT NULL,
  `isi_satuan3` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `kategori_barang`, `stok_barang`, `satuan_barang1`, `isi_satuan1`, `satuan_barang2`, `isi_satuan2`, `satuan_barang3`, `isi_satuan3`, `harga_barang`) VALUES
('1213424', 'Liang Cha Adem Sejuk 350 ML', 2, 1200, 'K', 100, '', 0, '', 0, 4500),
('123123424124', 'Tango Coklat 176Gr', 1, 552, 'K', 23, '', 0, '', 0, 12500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailorder`
--

CREATE TABLE `tb_detailorder` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `satuan_barang` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detailorder`
--

INSERT INTO `tb_detailorder` (`id`, `id_order`, `id_barang`, `jumlah_barang`, `harga_barang`, `satuan_barang`, `created_at`, `updated_at`) VALUES
(4, 1, 1213424, 3, 4500, 'Karton', '2019-08-08 17:00:35', '2019-08-08 17:00:35'),
(5, 4, 1213424, 48, 4500, 'PCS', '2019-08-08 17:06:38', '2019-08-08 17:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `tgl_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `tgl_order`, `id_user`, `id_toko`, `grandtotal`, `created_at`, `updated_at`) VALUES
(1, '2019-08-08 16:55:56', 2, 1, 162000, '2019-08-08 16:55:56', '2019-08-08 16:59:04'),
(4, '2019-08-08 17:03:46', 1, 2, 216000, '2019-08-08 17:03:46', '2019-08-08 17:05:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_detailorder`
--
ALTER TABLE `tb_detailorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_detailorder`
--
ALTER TABLE `tb_detailorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
