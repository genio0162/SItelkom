-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 02:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_struk`
--

CREATE TABLE `data_struk` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_struk`
--

INSERT INTO `data_struk` (`id`, `nama`, `filename`, `created_at`) VALUES
(2, '', 'JWD_B_M__Ghifari_Ilham_Akbar.pdf', '2021-07-29 06:54:44'),
(3, '', 'JWD_B_M__Ghifari_Ilham_Akbar1.pdf', '2021-07-29 07:29:46'),
(4, '', 'SJ_STB_FIBERHOME_(09_DESEMBER_2020)_(2).pdf', '2021-07-31 23:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `lap_barkel`
--

CREATE TABLE `lap_barkel` (
  `id` int(11) NOT NULL,
  `nofrak` varchar(500) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `namatek` varchar(1000) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_barkel`
--

INSERT INTO `lap_barkel` (`id`, `nofrak`, `tanggal`, `id_barang`, `namatek`, `nama`, `tipe`, `satuan`, `jumlah`, `keterangan`, `graf`) VALUES
(2, '020821000001', '2021-08-02', 'BR000001', 'Teknisi 1', 'PRECON 50 METER', 'AKSESORIS', 'BH', 1, 'Pasang Baru', 1),
(3, '020821000001', '2021-08-02', 'BR000002', 'Teknisi 1', 'PRECON 60 METER', 'AKSESORIS', 'BH', 1, 'Pasang Baru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lap_barkel2`
--

CREATE TABLE `lap_barkel2` (
  `id` int(11) NOT NULL,
  `nofrak` varchar(500) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `namatek` varchar(1000) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_barkel2`
--

INSERT INTO `lap_barkel2` (`id`, `nofrak`, `tanggal`, `id_barang`, `namatek`, `nama`, `tipe`, `satuan`, `jumlah`, `keterangan`, `graf`) VALUES
(2, '020821000001', '2021-07-02', 'BR000001', 'Teknisi 2', 'PRECON 50 METER', 'AKSESORIS', 'BH', 2, 'Pasang Baru', 1),
(3, '020821000001', '2021-07-02', 'BR000002', 'Teknisi 2', 'PRECON 60 METER', 'AKSESORIS', 'BH', 2, 'Pasang Baru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lap_barkel3`
--

CREATE TABLE `lap_barkel3` (
  `id` int(11) NOT NULL,
  `nofrak` varchar(500) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `namatek` varchar(1000) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_barkel3`
--

INSERT INTO `lap_barkel3` (`id`, `nofrak`, `tanggal`, `id_barang`, `namatek`, `nama`, `tipe`, `satuan`, `jumlah`, `keterangan`, `graf`) VALUES
(2, '020821000001', '2021-06-02', 'BR000001', 'Teknisi 3', 'PRECON 50 METER', 'AKSESORIS', 'BH', 3, 'Pasang Baru', 1),
(3, '020821000001', '2021-06-02', 'BR000002', 'Teknisi 3', 'PRECON 60 METER', 'AKSESORIS', 'BH', 3, 'Pasang Baru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lap_barkel4`
--

CREATE TABLE `lap_barkel4` (
  `id` int(11) NOT NULL,
  `nofrak` varchar(500) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `namatek` varchar(1000) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lap_barmas`
--

CREATE TABLE `lap_barmas` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_barmas`
--

INSERT INTO `lap_barmas` (`id`, `tanggal`, `id_barang`, `nama`, `tipe`, `satuan`, `jumlah`, `pengirim`, `keterangan`, `graf`) VALUES
(1, '2021-08-02', 'BR000001', 'PRECON 50 METER', 'AKSESORIS', 'BH', 1, 'vendor', 'pengadaan', 1),
(2, '2021-08-02', 'BR000002', 'PRECON 60 METER', 'AKSESORIS', 'BH', 1, 'Vendor', 'pengadaan', 1),
(7, '2021-08-09', '', 'router nokia', 'ONT', 'BH', 10, 'Vendor', 'Pengadaan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lap_barmas2`
--

CREATE TABLE `lap_barmas2` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_barmas2`
--

INSERT INTO `lap_barmas2` (`id`, `tanggal`, `id_barang`, `nama`, `tipe`, `satuan`, `jumlah`, `pengirim`, `keterangan`, `graf`) VALUES
(3, '2021-07-02', 'BR000001', 'PRECON 50 METER', 'AKSESORIS', 'BH', 2, 'vendor', 'pengadaan', 1),
(4, '2021-07-02', 'BR000002', 'PRECON 60 METER', 'AKSESORIS', 'BH', 2, 'Vendor', 'pengadaan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lap_barmas3`
--

CREATE TABLE `lap_barmas3` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_barmas3`
--

INSERT INTO `lap_barmas3` (`id`, `tanggal`, `id_barang`, `nama`, `tipe`, `satuan`, `jumlah`, `pengirim`, `keterangan`, `graf`) VALUES
(2, '2021-06-02', 'BR000001', 'PRECON 50 METER', 'AKSESORIS', 'BH', 3, 'vendor', 'pengadaan', 1),
(3, '2021-06-02', 'BR000002', 'PRECON 60 METER', 'AKSESORIS', 'BH', 3, 'Vendor', 'pengadaan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lap_barmas4`
--

CREATE TABLE `lap_barmas4` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `graf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_pengajuan`
--

CREATE TABLE `list_pengajuan` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pemohon` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `statusin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_pengajuan`
--

INSERT INTO `list_pengajuan` (`id`, `tanggal`, `pemohon`, `tipe`, `satuan`, `jumlah`, `statusin`) VALUES
(1, '2021-08-01 21:07:07', 'Admin 1', 'ONT', 'BH', 100, 1),
(2, '2021-08-09 06:05:06', 'Admin 1', 'router nokia', 'BH', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `id_barang`, `nama`, `tipe`, `satuan`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'AKSESORIS', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'AKSESORIS', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'AKSESORIS', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'AKSESORIS', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'AKSESORIS', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'AKSESORIS', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'AKSESORIS', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'AKSESORIS', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'AKSESORIS', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'AKSESORIS', 'BH', 0),
(11, 'BR000011', 'DROP CORE', 'AKSESORIS', 'METER', 0),
(12, 'BR000012', 'DROPWIRE', 'AKSESORIS', 'METER', 0),
(13, 'BR000013', 'BRIKET', 'AKSESORIS', 'BH', 0),
(14, 'BR000014', 'PROTECTION', 'AKSESORIS', 'BH', 0),
(15, 'BR000015', 'ROSET', 'AKSESORIS', 'BH', 0),
(16, 'BR000016', 'ONT_ZTE_F609_V5.3', 'ONT', 'BH', 0),
(17, 'BR000017', 'ONT ZTE F609', 'ONT', 'BH', 0),
(18, 'BR000018', 'ONT_ZTE_F670_V2.0', 'ONT', 'BH', 0),
(19, 'BR000019', 'ONT_ZTE_F670_V2.0 (WIFI.ID)', 'ONT', 'BH', 0),
(20, 'BR000020', 'ONT HUAWEI HG8245H5', 'ONT', 'BH', 0),
(21, 'BR000021', 'ONT_NOKIA_G240WF', 'ONT', 'BH', 0),
(22, 'BR000022', 'ONT_NOKIA_G240W-L', 'ONT', 'BH', 0),
(23, 'BR000023', 'ONT H8245 U (PREMIUM)', 'ONT', 'BH', 0),
(24, 'BR000024', 'ONT HUAWEI HG8245H', 'ONT', 'BH', 0),
(25, 'BR000025', 'STB FIBERHOME *', 'STB', 'BH', 0),
(26, 'BR000026', 'SetTopBox_ZTE_B860H_V5.0', 'STB', 'BH', 0),
(27, 'BR000027', 'SetTopBox_ZTE_B860H_V2.1', 'STB', 'BH', 0),
(28, 'BR000028', 'INDIBOX AKARI', 'STB', 'BH', 0),
(29, 'BR000029', 'WIFI EXTENDER', 'STB', 'BH', 0),
(30, 'BR000030', 'PLC', 'STB', 'BH', 0),
(31, 'BR000031', 'IP_Camera_Azustar_WM-03', 'AKSESORIS', 'BH', 0),
(32, 'BR000032', 'router nokia', 'ONT', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi_manager`
--

CREATE TABLE `notifikasi_manager` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi_pengajuan`
--

CREATE TABLE `notifikasi_pengajuan` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pemohon` varchar(200) NOT NULL,
  `statusin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `pengumuman` varchar(1000) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `pengumuman`, `dibuat`) VALUES
(1, 'Semangat besok sidang!!!', '2021-08-01 23:01:57'),
(2, 'Persiapkan metal untuk besok', '2021-08-01 23:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `satuan`) VALUES
(1, 'BH'),
(2, 'METER');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `statusan` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `statusan`, `nama`) VALUES
(1, 0, 'Pending'),
(2, 1, 'Diterima'),
(3, 2, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `stok_gudang`
--

CREATE TABLE `stok_gudang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(200) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tipe` varchar(500) NOT NULL,
  `satuan` varchar(500) NOT NULL,
  `whjember` int(11) NOT NULL,
  `soinvjemkotin` int(11) NOT NULL,
  `soinvjemkotout` int(11) NOT NULL,
  `soinvjember` int(11) NOT NULL,
  `soinvtguin` int(11) NOT NULL,
  `soinvtguout` int(11) NOT NULL,
  `soinvgen` int(11) NOT NULL,
  `soinvbwi` int(11) NOT NULL,
  `soinvbws` int(11) NOT NULL,
  `soinvsit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_gudang`
--

INSERT INTO `stok_gudang` (`id`, `id_barang`, `nama`, `tipe`, `satuan`, `whjember`, `soinvjemkotin`, `soinvjemkotout`, `soinvjember`, `soinvtguin`, `soinvtguout`, `soinvgen`, `soinvbwi`, `soinvbws`, `soinvsit`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'AKSESORIS', 'BH', 100, 200, 300, 0, 0, 0, 0, 0, 0, 0),
(2, 'BR000002', 'PRECON 60 METER', 'AKSESORIS', 'BH', 100, 200, 300, 0, 0, 0, 0, 0, 0, 0),
(3, 'BR000003', 'PRECON 70 METER', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'BR000004', 'PRECON 80 METER', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'BR000005', 'CLAM S', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'BR000006', 'GUIDERING', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'BR000007', 'PULL STEPRING', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'BR000011', 'DROP CORE', 'AKSESORIS', 'METER', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'BR000012', 'DROPWIRE', 'AKSESORIS', 'METER', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'BR000013', 'BRIKET', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'BR000014', 'PROTECTION', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'BR000015', 'ROSET', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'BR000016', 'ONT_ZTE_F609_V5.3', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'BR000017', 'ONT ZTE F609', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'BR000018', 'ONT_ZTE_F670_V2.0', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'BR000019', 'ONT_ZTE_F670_V2.0 (WIFI.ID)', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'BR000020', 'ONT HUAWEI HG8245H5', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'BR000021', 'ONT_NOKIA_G240WF', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'BR000022', 'ONT_NOKIA_G240W-L', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'BR000023', 'ONT H8245 U (PREMIUM)', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'BR000024', 'ONT HUAWEI HG8245H', 'ONT', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'BR000025', 'STB FIBERHOME *', 'STB', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'BR000026', 'SetTopBox_ZTE_B860H_V5.0', 'STB', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'BR000027', 'SetTopBox_ZTE_B860H_V2.1', 'STB', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'BR000028', 'INDIBOX AKARI', 'STB', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'BR000029', 'WIFI EXTENDER', 'STB', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'BR000030', 'PLC', 'STB', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'BR000031', 'IP_Camera_Azustar_WM-03', 'AKSESORIS', 'BH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'BR000032', 'router nokia', 'ONT', 'BH', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id` int(11) NOT NULL,
  `tipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `tipe`) VALUES
(1, 'ONT'),
(2, 'STB'),
(4, 'AKSESORIS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `password2` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `password2`, `nama`, `foto`, `nik`, `wilayah`, `id_wilayah`, `role`, `is_active`) VALUES
(0, 'admin0@telkom.com', '$2y$10$kS01H9lxRF5LuRK/gTwdf.v6ex.ZlTsjZ0Nqr3Xibq0FXqB5Ed3BS', 'gh123456', 'Ghifari Ilham', 'download.jpg', 'E32181989', 'Mahasiswa', 0, 1, 1),
(1, 'manager1@telkom.com', '$2y$10$6kGWo1fJe1RTgtOQMIf2G.sdNfaVr97zqQSJTRqXKtyqTSG919zpO', 'manager', 'Manager 1', 'default.jpg', 'M0001', 'Manager Witel Jember', 0, 3, 1),
(2, 'admin1@telkom.com', '$2y$10$bmIyeyh6midNxX0OSMopEe1856gEOcKHMsyzKUWLWs1fqAq9WfLfG', 'admin1', 'Admin 1', 'default.jpg', 'A0001', '', 1, 1, 1),
(3, 'admin2@telkom.com', '$2y$10$Rd8EnAhGPSljY0csZ9YD...UjuWl3/n1rhc84POM7L7jc96uTrqKe', 'admin2', 'Admin 2', 'default.jpg', 'A0002', '', 2, 1, 1),
(21, 'teknisi1@telkom.com', '$2y$10$EvX2dneqvzYiS6Bc/Pun2.ElGcY0aQCL6staPCEn./SqR6BO0KuJG', 'teknisi1', 'Teknisi 1', 'default.jpg', 'T0001', '', 1, 2, 1),
(22, 'teknisi2@telkom.com', '$2y$10$COKja.0YLAPGzDku4sql.OQ2qj8a6wVe9k5GeYMeOTIt84eEaPSR2', 'teknisi2', 'Teknisi 2', 'default.jpg', 'T0002', '', 2, 2, 1),
(23, 'admin3@telkom.com', '$2y$10$JghJUHDum1Tq6WsHuMne.uSiI8JXCPTHWkCCiMG7tJe9/VD13ETpm', 'admin3', 'Admin 3', 'default.jpg', 'A0003', 'Admin', 3, 1, 1),
(24, 'admin4@telkom.com', '$2y$10$S9SsBSUCVxJwdrJ5XuQ1xOCqfe9tDoXIGzrir2KOYvkoInflXPt4G', 'admin4', 'Admin 4', 'default.jpg', 'A0004', 'admin', 4, 1, 1),
(25, 'admin5@telkom.com', '$2y$10$xUv0PRvMc8WBnY.CQyiIl.N8DP8SWDKNmZjyuGI5RyxhARN/1kC1q', 'admin5', 'Admin 5', 'default.jpg', 'A0005', 'Admin', 5, 1, 1),
(26, 'admin6@telkom.com', '$2y$10$HV65/UJKzBkM9syh5Rt/P.SF0wet8h.9j6jdmPPHThNOEQRgdYoVa', 'admin6', 'Admin 6', 'default.jpg', 'A0006', 'Admin', 6, 1, 1),
(27, 'admin7@telkom.com', '$2y$10$/EeWWgOs434s1X7HOYMIUO0LiPXGL.7AipB4/djwh3DBChYy3Vcyq', 'admin7', 'Admin 7', 'default.jpg', 'A0007', 'Admin', 7, 1, 1),
(28, 'admin8@telkom.com', '$2y$10$B91qXq849PpdbeBhs1VeAusN2G.wXwAIoYBePJ9XiMbDmcNRG3Hau', 'admin8', 'Admin 8', 'default.jpg', 'A0008', 'Admin', 8, 1, 1),
(29, 'admin9@telkom.com', '$2y$10$9pJFjdBoFWK1BqgTUV/TYunEdv3Q7xpt3kd/x3OBTXlgsxeUCOCw.', 'admin9', 'Admin 9', 'default.jpg', 'A0009', 'Admin', 9, 1, 1),
(30, 'admin10@telkom.com', '$2y$10$J5/.TpqUa74Tyn16QdN2sOhDHtzK0a6mOlk4NrjVjUAt87WDkrBey', 'admin10', 'Admin 10', 'default.jpg', 'A0010', 'Admin', 10, 1, 1),
(31, 'teknisi3@telkom.com', '$2y$10$7q7UI7tLVVgaynboJGQtTOYEFKXhY7rMb7IcsccFAIqzQAabEEOkG', 'teknisi3', 'Teknisi 3', 'default.jpg', 'T0003', 'Teknisi', 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 4),
(7, 2, 5),
(8, 3, 1),
(9, 3, 4),
(10, 3, 6),
(11, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `menu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `id_menu`, `menu`) VALUES
(1, 1, 'Dashboard'),
(2, 2, 'Transaksi'),
(3, 3, 'Data_gudang'),
(4, 4, 'User'),
(5, 5, 'Bon_material'),
(6, 6, 'Laporan'),
(7, 7, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Teknisi'),
(3, 'HO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_struk`
--
ALTER TABLE `data_struk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barkel`
--
ALTER TABLE `lap_barkel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barkel2`
--
ALTER TABLE `lap_barkel2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barkel3`
--
ALTER TABLE `lap_barkel3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barkel4`
--
ALTER TABLE `lap_barkel4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barmas`
--
ALTER TABLE `lap_barmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barmas2`
--
ALTER TABLE `lap_barmas2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barmas3`
--
ALTER TABLE `lap_barmas3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_barmas4`
--
ALTER TABLE `lap_barmas4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_pengajuan`
--
ALTER TABLE `list_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi_manager`
--
ALTER TABLE `notifikasi_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi_pengajuan`
--
ALTER TABLE `notifikasi_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_gudang`
--
ALTER TABLE `stok_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_struk`
--
ALTER TABLE `data_struk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lap_barkel`
--
ALTER TABLE `lap_barkel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lap_barkel2`
--
ALTER TABLE `lap_barkel2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lap_barkel3`
--
ALTER TABLE `lap_barkel3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lap_barkel4`
--
ALTER TABLE `lap_barkel4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lap_barmas`
--
ALTER TABLE `lap_barmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lap_barmas2`
--
ALTER TABLE `lap_barmas2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lap_barmas3`
--
ALTER TABLE `lap_barmas3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lap_barmas4`
--
ALTER TABLE `lap_barmas4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_pengajuan`
--
ALTER TABLE `list_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notifikasi_manager`
--
ALTER TABLE `notifikasi_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifikasi_pengajuan`
--
ALTER TABLE `notifikasi_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stok_gudang`
--
ALTER TABLE `stok_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
