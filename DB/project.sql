-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 12:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angrez`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `p_id` bigint(11) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `price` bigint(11) NOT NULL,
  `qty` bigint(11) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `u_id`, `price`, `qty`, `total`) VALUES
(2, 1, 'hardik', 69999, 10, 100),
(81, 2, 'hardik', 155900, 1, 155900),
(91, 3, 'hardik', 29990, 10, 299900),
(93, 1, '', 69999, 1, 69999),
(94, 1, 'hardik', 69999, 1, 69999),
(121, 1, '', 69999, 1, 69999),
(122, 1, '', 69999, 4, 279996);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `sub_cat` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `rating` float NOT NULL,
  `ratings_total` int(5) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `sub_cat`, `title`, `detail`, `price`, `rating`, `ratings_total`, `image`) VALUES
(1, 'Mobile', 'Vivo', 'Vivo X60 Pro+ 5G (Midnight Black, 256GB, 12GB)', '- 12 GB RAM | 256 GB  ROM\r\n- 16.66 cm (6.56 inch) Full HD+ Display\r\n- 50MP +  48MP + 32MP + 8MP | 32 MP Front Camera\r\n- 4200 mAh Lithium-ion Battery\r\n- Qualcomm Snapdragon 888 Processor\r\n- AMOLED Display\r\n- Warranty | 1 Year for Handset and 6 Months For In-box Accessories', 69999, 4.9, 7, 'p_image/x60-pro-v2047-vivo-original-imagfht6cwsabkhg.jpeg'),
(2, 'Mobile', 'APPLE  iPhone', 'APPLE iPhone 12 Pro Max (Graphite, 512 GB)', '- 512 GB ROM\r\n- 17.02 cm (6.7 inch) Super Retina XDR Display\r\n- 12MP + 12MP + 12MP | 12MP Front Camera\r\n- A14 Bionic Chip with Next Generation Neural Engine Processor\r\n- Ceramic Shield | IP68 Water Resistance\r\n- All Screen OLED Display \r\n- LiDAR Scanner for Improved AR Experiences\r\n- Brand Warranty for 1 Year', 155900, 0, 0, 'p_image/apple-iphone-12-pro-max-dummyapplefsn-original-imafwgcyyahey58k.jpeg'),
(3, 'Mobile', 'Vivo', 'ViVO V20 Pro (Midnight Jazz, 128 GB)', '- 8 GB RAM | 128 GB ROM\r\n- 16.36 cm (6.44 inch) Full HD+ Display\r\n- 64MP + 8MP + 2MP | 44MP + 8MP Dual\r\n- Front Camera\r\n- 4000 mAh Lithium-ion Battery\r\n- Qualcomm Snapdragon 765G Processor\r\n- Warranty | 1 Year on Handset and 6 Months for In Box Accessories', 29990, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `name`, `password`) VALUES
(1, 'Hardip muliyashiya', 'hello'),
(2, 'Karan karavadra', 'hyyy'),
(3, 'Raj muliyashiya', 'rjjj'),
(4, 'Laxman odedra', 'lax'),
(5, 'Rajesh parmar', 'eesss'),
(6, 'Ajay divraniya', ''),
(7, 'Pratap parmar', 'prrr'),
(8, 'Navghan jadeja', 'nvvv'),
(9, 'Vijay odedra', 'vjvjvj'),
(10, 'Hamir muliyashiya', 'hrrrh'),
(11, 'Bharat odedra', 'brttt'),
(12, 'Vishal muliyashiya', 'vsllll'),
(13, 'Karshan parmar', 'krrs'),
(14, 'Kamlesh tarkhala', 'kmmml'),
(15, 'Malde kotda', 'mlla'),
(16, 'Gogan parmar', 'gnnn'),
(17, 'Jayesh muliyashiya', 'jyyys'),
(18, 'Kana parmar', 'knn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
