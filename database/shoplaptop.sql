-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 12:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `fullname`, `email`) VALUES
('admin', 'admin', 'duong van dat', 'email'),
('ahihi', '0405xxx@', '', ''),
('dat1998', '123', 'kaka', 'email'),
('dat2k', '123', 'duong van dat', 'email'),
('datduong', 'anhdat123', '', ''),
('datkkk', '123', 'duong van dat', 'email'),
('datxxx', '123', 'duong van dat', 'email'),
('hoanghieu', 'hieu199x', '', ''),
('linhcua', 'yeudat', '', ''),
('linhnguyen', 'linhcua', '', ''),
('tretrau', '123', '', 'email'),
('xamle', 'nhucc', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bills_detail`
--

CREATE TABLE `bills_detail` (
  `detail_id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Pro_price` double DEFAULT NULL,
  `bill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CateID` int(10) NOT NULL,
  `CateName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CateID`, `CateName`) VALUES
(1, 'LapTop Van Phong'),
(2, 'LapTop Gaming '),
(3, 'LapTop Do Hoa');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pro_id` int(11) NOT NULL,
  `Pro_name` varchar(50) DEFAULT NULL,
  `Pro_band` varchar(100) NOT NULL,
  `CateID` int(11) DEFAULT NULL,
  `Pro_price` float NOT NULL,
  `Pro_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pro_id`, `Pro_name`, `Pro_band`, `CateID`, `Pro_price`, `Pro_img`) VALUES
(1, 'Laptop thinkpad t480s', 'Lenovo', 1, 200, './assets/products/lenovo1.png'),
(2, 'Lenovo L430s', 'Lenovo', 1, 200, './assets/products/lenovo1.png'),
(3, 'MacBook Pro 2015', 'Apple', 1, 200, './assets/products/anh2.png'),
(4, 'Mackbook Pro 2015', 'Apple', 1, 200, './assets/products/anh2.png'),
(5, 'Asus VivoBook', 'Asus', 1, 200, './assets/products/anh1.png'),
(6, 'Asus VivoBook', 'Asus', 1, 200, './assets/products/anh1.png'),
(7, 'Acer Nitro 5', 'Acer', 1, 200, './assets/products/acer1.png'),
(8, 'Acer Nitro 5', 'Acer', 1, 200, './assets/products/acer2.png'),
(9, 'MSI Alpha 15', 'Msi', 1, 200, './assets/products/msi1.png'),
(10, 'MSI Alpha 15', 'Msi', 1, 200, './assets/products/msi1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `bills_detail`
--
ALTER TABLE `bills_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CateID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pro_id`),
  ADD KEY `CateID` (`CateID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `bills_detail`
--
ALTER TABLE `bills_detail`
  ADD CONSTRAINT `bills_detail_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`Pro_id`);


--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CateID`) REFERENCES `category` (`CateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
