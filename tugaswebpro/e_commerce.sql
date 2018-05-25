-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 01:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stok_barang` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama_barang`, `stok_barang`, `harga`) VALUES
('B01', 'Nikon Coolpix 20 MP Black', 3, 5500000),
('B02', 'Fujifilm 20 Mega Pixel', 4, 4000000),
('B03', 'Fujifilm 25 Mega Pixel', 2, 7500000),
('B04', 'Nikon Coolpix 20 MP red', 1, 5000000),
('B05', 'Fujifilm 25 MP DualBattery', 8, 8000000),
('B06', 'Fujifilm 20 MP Mirrorless', 2, 7500000),
('B07', 'Blue Bones Chair', 8, 1500000),
('B08', 'Black Std Chair', 10, 1000000),
('B09', 'Enjoy! Chair', 6, 4500000),
('B10', 'Drawer Letter File', 9, 1250000),
('B11', 'Mini Drawer File', 20, 500000),
('B12', 'Drawer Letter Exc', 3, 3500000),
('B13', 'Black Clock', 30, 70000),
('B14', 'European Clock', 10, 1000000),
('B15 ', 'Classic Clock', 10, 120000),
('B16', 'Comfort Sofa', 10, 14250000),
('B17', 'Standard Sofa', 34, 7000000),
('B18', 'Drawer Letter Exc', 0, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `businessanalyst`
--

CREATE TABLE `businessanalyst` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businessanalyst`
--

INSERT INTO `businessanalyst` (`nama`, `email`, `alamat`, `telepon`) VALUES
('Ergandhi Yudha Kurniawan', 'ergandhiyk@gmail.com', 'ErgnCompany Kediri', '0988897263555');

-- --------------------------------------------------------

--
-- Table structure for table `businessconsultant`
--

CREATE TABLE `businessconsultant` (
  `masalahbisnis` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businessconsultant`
--

INSERT INTO `businessconsultant` (`masalahbisnis`, `email`) VALUES
('Masalah bisnis saya oke oke aja, itu namanya bukan masalah mas', 'oke@gmail.com'),
('Saya Punya Masalah Kesehatan , Jadi bisnis saya tidak lancar bosku', 'larutmalam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `kode` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`kode`, `nama_barang`, `jumlah`, `harga`) VALUES
('B01', 'Nikon Coolpix 20 MP Black', 1, 5500000),
('B04', 'Nikon Coolpix 20 MP red', 1, 5000000),
('B07', 'Blue Bones Chair', 1, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `rekening` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`rekening`, `nama`, `username`, `password`) VALUES
('2335467899', 'Alwi Faisal Zulfikar ', 'alwidigidaw', 'digidaww'),
('98890098730', 'Ergandhi Yudha Kurniawan', 'ergandhiyudha', 'ergandhi');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `kode` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`kode`, `nama_barang`, `harga`) VALUES
('B18', 'Drawer Letter Exc', 3500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
