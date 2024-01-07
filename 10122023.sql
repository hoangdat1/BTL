-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 12:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10122023`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_username` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_address` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_username`, `admin_pass`, `admin_image`, `admin_address`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Hoàng Xuân Đạt ', 'hoangxuandatnb2003@gmail.com', 'HoangXuanDat', '193e340e4ad9fc76100c0fac4ff84337bbdf19b8', 'z4981070510206_ac4750b15be1b6a0989e81c81313a855.jpg', 'VN', 'Không có việc gì là không làm được, khó khăn nào cũng vượt qua.<br>Không có việc gì là không làm được, khó khăn nào cũng vượt qua.<br>Không có việc gì là không làm được, khó khăn nào cũng vượt qua.<br>Cái gì quan trọng nói 3 lần !!', '0389999999', 'IT at HUMG');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(1, 'Phục vụ tốt nhất', 'Phục vụ tốt nhất HUMG :)'),
(2, 'Giá tốt nhất', 'Mua hàng được cho thêm tiền không cần lãi'),
(3, ' Hàng chính tốt nhất', ' Hàng chính tốt nhất');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` text NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_username` text NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_contact`, `customer_username`, `customer_pass`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'Call me Su', 'Test1@gmail.com', '0389999999', 'HoangXuanDat', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 'Học viện Quốc Phòng, Hoàng Quốc Việt,\nNghĩa Đô, Cầu Giấy, Hà Nội, Việt Nam ', 'AnhConGai1.jpg', '127.0.0.1'),
(2, 'Iam Su', 'Test2@gmail.com', '0389999998', 'HoangXuanDat1', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 'Học viện Quốc Phòng, Hoàng Quốc Việt,\nNghĩa Đô, Cầu Giấy, Hà Nội, Việt Nam ', 'Kotlin.jpg', '127.0.0.1'),
(3, 'Su is me', 'Test2@gmail.com', '0389999997', 'HoangXuanDat2', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 'Học viện Quốc Phòng, Hoàng Quốc Việt,\nNghĩa Đô, Cầu Giấy, Hà Nội, Việt Nam ', 'Logo_CNTT_HUMG.jpg', '::1'),
(4, 'Tớ là Su ', 'Test3@gmail.com', '0389999996', 'HoangXuanDat3', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 'No Address', 'Logo_HUMG.jpg', '127.0.0.1'),
(5, 'CallmeSupls Test', 'Test4@gmail.com', '0389999995', 'HoangXuanDat4', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 'No Address', 'CoGiaoVatLy.jpg', '127.0.0.1'),
(6, 'CallmeSupls Test Register', 'Test5@gmail.com', '0389999994', 'HoangXuanDat5', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 'No Address Test Register', 'User.jpg', '127.0.0.1'),
(7, 'Test', 'TestTest@gmail.com', '46516516565165', 'HoangXuanDa6', '4bcac1e58d0b3f801909795b324d0245f6062e1e', 'HUMG', 'User.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `note` text NOT NULL,
  `name_product` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `name`, `phone`, `email`, `address`, `note`, `name_product`, `quantity`, `total`, `date_create`) VALUES
(6, 1, 'Test', '123456789', 'hoangxuandatnb2003@gmail.com', 'trường đại học Mỏ Địa Chất', 'Shop Su Store quá tuyệt vời, 10 điểm :))', 'Bánh Croissant Hạnh Nhân', 1, 60000, '2023-12-12'),
(7, 1, 'Test', '123456789', 'hoangxuandatnb2003@gmail.com', 'trường đại học Mỏ Địa Chất', 'Shop Su Store quá tuyệt vời, 10 điểm :))', 'Bí đỏ', 1, 27500, '2023-12-12'),
(8, 7, 'Su Su', '0984449999', 'hoangxuandatnb2003@gmail.com', 'trường đại học Mỏ Địa Chất', 'Shop Su Store quá tuyệt vời, 10 điểm :))', 'Cam sành', 1, 20000, '2023-12-12'),
(9, 7, 'Su Su', '0984449999', 'hoangxuandatnb2003@gmail.com', 'trường đại học Mỏ Địa Chất', 'Shop Su Store quá tuyệt vời, 10 điểm :))', 'Cải thìa', 1, 15000, '2023-12-12'),
(10, 7, 'Su Su', '0984449999', 'hoangxuandatnb2003@gmail.com', 'trường đại học Mỏ Địa Chất', 'Shop Su Store quá tuyệt vời, 10 điểm :))', 'Bánh Croissant Hạnh Nhân', 1, 60000, '2023-12-12'),
(11, 1, 'a a', '0984449999', 'hoangxuandatnb2003@gmail.com', 'trường đại học Mỏ Địa Chất', 'Shop Su Store quá tuyệt vời, 10 điểm :)) Test 15/12/2023 15:38 PM', 'Cà Phê Espresso Buôn Ma Thuột', 6, 1182000, '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(1, 1, '2023-12-14 16:26:16', 'Cà Phê Legend Sữa Đá 9 gói ( Thùng 24 hộp)', 'p1_1.png', 'p1_2.jpg', 'p1_3.png', 1540000, 'Cà Phê Legend Sữa Đá 9 gói ( Thùng 24 hộp)', '<p>Cà Phê Legend Sữa Đá 9 gói ( Thùng 24 hộp)</p>', 'new', 0),
(2, 1, '2023-12-14 16:27:23', 'Legend Success 3', 'p2_1.png', 'p2_2.png', 'p2_3.png', 189000, 'Legend Success 3', '<p>Legend Success 3</p>', 'sale', 180000),
(3, 1, '2023-12-14 16:27:50', 'Legend Success 2', 'p3_1.png', 'p3_2.png', 'p3_3.png', 375000, 'Legend Success 2', '<p>Legend Success 2</p>', 'sale', 370000),
(4, 1, '2023-12-14 16:28:13', 'Legend Success 1', 'p4_1.png', 'p4_2.png', 'p4_3.png', 229000, 'Legend Success 1', '<p>Legend Success 1</p>', 'new', 0),
(5, 1, '2023-12-14 16:28:31', 'Cà phê hòa tan Trung Nguyên Legend – Americano', 'p5_1.png', 'p5_2.png', 'p5_3.png', 39000, 'Cà phê hòa tan Trung Nguyên Legend – Americano', '<p>Cà phê hòa tan Trung Nguyên Legend – Americano</p>', 'sale', 30000),
(6, 1, '2023-12-14 16:28:49', 'Trung Nguyên Legend Classic – Hộp 21', 'p6_1.jpg', 'p6_2.jpg', 'p6_3.jpg', 68000, 'Trung Nguyên Legend Classic – Hộp 21', '<p>Trung Nguyên Legend Classic – Hộp 21</p>', 'new', 0),
(7, 1, '2023-12-14 16:29:05', 'Cà Phê Drip 1 – Culi Robusta', 'p7_1.jpg', 'p7_2.jpg', 'p7_3.jpg', 592500, 'Cà Phê Drip 1 – Culi Robusta', '<p>Cà Phê Drip 1 – Culi Robusta</p>', 'new', 0),
(8, 1, '2023-12-14 16:29:22', 'Cà Phê Espresso Buôn Ma Thuột', 'p8_1.png', 'p8_2.png', 'p8_3.png', 197000, 'Cà Phê Espresso Buôn Ma Thuột', '<p>Cà Phê Espresso Buôn Ma Thuột</p>', 'new', 0),
(9, 2, '2023-12-14 16:29:46', 'Khăn rằn', 'p9_1.jpg', 'p9_2.jpg', 'p9_3.jpg', 65000, 'Khăn rằn', '<p>Khăn rằn</p>', 'sale', 63000),
(10, 2, '2023-12-14 16:29:59', 'BỘ QUÀ TẾT GIÀU CÓ', 'p10_1.jpg', 'p10_2.jpg', 'p10_3.jpg', 508500, 'BỘ QUÀ TẾT GIÀU CÓ', '<p>BỘ QUÀ TẾT GIÀU CÓ</p>', 'new', 0),
(11, 2, '2023-12-14 16:30:18', 'Bộ Quà Tặng Trung Nguyên Legend', 'p11_1.jpg', 'p11_2.jpg', 'p11_3.jpg', 2180500, 'Bộ Quà Tặng Trung Nguyên Legend', '<p>Bộ Quà Tặng Trung Nguyên Legend</p>', 'sale', 2170500),
(12, 3, '2023-12-14 16:30:36', 'Khăn giấy vuông Trung Nguyên Legend', 'p12_1.png', 'p12_2.png', 'p12_3.png', 16500, 'Khăn giấy vuông Trung Nguyên Legend', '<p>Khăn giấy vuông Trung Nguyên Legend</p>', 'new', 0),
(13, 3, '2023-12-14 16:31:00', 'Bộ Tách gốm Epresso Trung Nguyên Legend (Tách và Đĩa)', 'p13_1.png', 'p13_2.png', 'p13_3.png', 80000, 'Bộ Tách gốm Epresso Trung Nguyên Legend (Tách và Đĩa)', '<p>Bộ Tách gốm Epresso Trung Nguyên Legend (Tách và Đĩa)</p>', 'new', 0),
(14, 3, '2023-12-14 16:31:10', 'Bộ Tách Latte Trung Nguyên Legend ( Tách và Đĩa)', 'p14_1.png', 'p14_2.png', 'p14_3.png', 140000, 'Bộ Tách Latte Trung Nguyên Legend ( Tách và Đĩa)', '<p>Bộ Tách Latte Trung Nguyên Legend ( Tách và Đĩa)</p>', 'sale', 120000),
(15, 3, '2023-12-14 16:31:29', 'Túi giấy đen Trung Nguyên Legend', 'p15_1.jpg', 'p15_2.jpg', 'p15_3.jpg', 15000, 'Túi giấy đen Trung Nguyên Legend', '<p>Túi giấy đen Trung Nguyên Legend</p>', 'new', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Cà Phê Đóng Gói', 'Cà Phê Đóng Gói'),
(2, 'Quà Tặng', 'Quà Tặng'),
(3, 'Vật Phẩm Thương Hiệu', 'Vật Phẩm Thương Hiệu');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', '1360-x-375px.png'),
(2, 'Slide number 2', '1360-x-540px-2048x813.jpg'),
(3, 'Slide number 3', '1360-x-540px-2-2048x813.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
