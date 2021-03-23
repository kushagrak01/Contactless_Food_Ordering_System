-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 08:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(30) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `dish_price` int(11) NOT NULL,
  `im` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`dish_id`, `dish_name`, `cat_name`, `dish_price`, `im`) VALUES
(1001, 'Soup', 'Starter', 140, 'soup.jpg'),
(1002, 'Paneer Chilly', 'Starter', 200, 'paneerchilly.jpg'),
(1003, 'Veg Crispy', 'Starter', 200, 'vegcrispy.jpg'),
(1004, 'Noodles', 'Main', 220, 'noodles.jpg'),
(1005, 'Pizza', 'Main', 250, 'pizza.jpg'),
(1006, 'Pasta', 'Main', 250, 'pasta.jpg'),
(1007, 'Pav Bhaji', 'Main', 220, 'pavbhaji.jpg'),
(1008, 'Sandwhich', 'Main', 200, 'sandwhich.jpg'),
(1009, 'Pepsi', 'Beverages', 80, 'pepsi.jpeg'),
(1010, 'Coca Cola', 'Beverages', 80, 'cocacola.jpeg'),
(1011, 'Thums Up', 'Beverages', 80, 'thumsup.jpeg'),
(1012, 'Ice Cream', 'Dessert', 180, 'icecreame.jpg'),
(1013, 'Pastry', 'Dessert', 80, 'pastry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `order_id` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `table_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`order_id`, `cust_name`, `phone`, `table_no`) VALUES
(1, 'Yash', 1234567890, 1),
(2, 'Yash', 1234567890, 1),
(3, 'Yash', 1234567890, 1),
(4, 'Yash', 1234567890, 1),
(5, 'Yash', 1234567890, 1),
(6, 'Yash', 1234567890, 1),
(7, 'Yash', 1234567890, 1),
(8, 'Yash', 1234567890, 1),
(9, 'Yash', 1234567890, 1),
(10, 'Yash', 1234567890, 1),
(11, 'Yash', 1234567890, 1),
(12, 'Yash', 1234567890, 1),
(13, 'Yash', 1234567890, 1),
(14, 'Yash', 1234567890, 1),
(15, 'Yash', 1234567890, 1),
(16, 'Yash', 1234567890, 1),
(17, 'Yash', 1234567890, 1),
(18, 'Yash', 1234567890, 1),
(19, 'Yash', 1234567890, 1),
(20, 'Yash', 1234567890, 1),
(21, 'Yash', 1234567890, 1),
(22, 'Yash', 1234567890, 1),
(23, 'Yash', 1234567890, 1),
(24, 'Yash', 1234567890, 1),
(25, 'Yash', 1234567890, 1),
(26, 'Yash', 1234567890, 1),
(27, 'Yash', 1234567890, 1),
(28, 'Yash', 1234567890, 1),
(29, 'Yash', 1234567890, 1),
(30, 'Yash', 1234567890, 1),
(31, 'Yash', 1234567890, 1),
(32, 'Yash', 1234567890, 1),
(33, 'Yash', 1234567890, 1),
(34, 'Yash', 1234567890, 1),
(35, 'Yash', 1234567890, 1),
(36, 'Yash', 1234567890, 1),
(37, 'Yash', 1234567890, 1),
(38, 'Yash', 1234567890, 1),
(39, 'Yash', 1234567890, 1),
(40, 'Yash', 1234567890, 1),
(41, 'Yash', 1234567890, 1),
(42, 'Yash', 1234567890, 1),
(43, 'Yash', 1234567890, 1),
(44, 'Yash', 1234567890, 1),
(45, 'Yash', 1234567890, 1),
(46, 'Yash', 1234567890, 1),
(47, 'Yash', 1234567890, 1),
(48, 'Yash', 112244, 2),
(49, 'Yash1', 112211, 1),
(50, 'Yash2', 112222, 2),
(51, 'Yash', 1234567890, 1),
(52, 'Yash', 1234567890, 1),
(53, 'Yash', 1234567890, 1),
(54, 'Yash', 1234567890, 1),
(55, 'Yash', 1234567890, 1),
(56, 'Yash', 1234567890, 1),
(57, 'Yash', 1234567890, 1),
(58, 'Yash', 1234567890, 1),
(59, 'Yash', 1234567890, 1),
(60, 'Yash', 1234567890, 1),
(61, 'Yash', 1234567890, 1),
(62, 'Yash', 1234567890, 1),
(63, 'Yash', 1234567890, 1),
(64, 'Yash', 1234567890, 1),
(65, 'Yash', 1234567890, 1),
(66, 'Yash', 987654321, 1),
(67, 'Kush', 112244, 2),
(68, 'Kush', 112244, 2),
(69, 'Yash', 112244, 1),
(70, 'Yash', 112244, 1),
(71, 'Yash', 112244, 1),
(72, 'Yash', 112244, 1),
(73, 'Yash', 112244, 1),
(74, 'Jay', 1122, 0),
(75, 'Yash', 1122, 2),
(76, 'Yash', 1122, 2),
(77, 'Kush', 987654321, 2),
(78, 'Kush', 987654321, 2),
(79, 'Yash', 1122, 2),
(80, 'Yash', 987654321, 1),
(81, 'Yash', 987654321, 2),
(82, 'Yash', 987654321, 2),
(83, 'Yash', 987654321, 2),
(84, 'Yash', 987654321, 2),
(85, 'Yash', 987654321, 2),
(86, 'Yash', 987654321, 2),
(87, 'Yash', 987654321, 2),
(88, 'Yash', 987654321, 2),
(89, 'Yash', 987654321, 2),
(90, 'Yash', 987654321, 2),
(91, 'Yash', 987654321, 2),
(92, 'Yash', 987654321, 2),
(93, 'Yash', 987654321, 2),
(94, 'Yash', 987654321, 2),
(95, 'Yash', 987654321, 2),
(96, 'Yash', 987654321, 2),
(97, 'Yash', 987654321, 2),
(98, 'Yash', 987654321, 2),
(99, 'Yash', 987654321, 2),
(100, 'Yash', 987654321, 2),
(101, 'Yash', 987654321, 2),
(102, 'Yash', 987654321, 2),
(103, 'Yash', 987654321, 2),
(104, 'Yash', 987654321, 2),
(105, 'Yash', 987654321, 2),
(106, 'Yash', 987654321, 2),
(107, 'Yash', 987654321, 2),
(108, 'Yash', 987654321, 2),
(109, 'Yash', 987654321, 2),
(110, 'Yash', 987654321, 2),
(111, 'Yash', 987654321, 2),
(112, 'Yash', 987654321, 2),
(113, 'Yash', 987654321, 2),
(114, 'Yash', 987654321, 2),
(115, 'Yash', 987654321, 2),
(116, 'Yash', 987654321, 2),
(117, 'Yash', 987654321, 2),
(118, 'Yash', 987654321, 2),
(119, 'Yash', 987654321, 2),
(120, 'Yash', 987654321, 2),
(121, 'Yash', 987654321, 2),
(122, 'Yash', 987654321, 2),
(123, 'Yash', 987654321, 2),
(124, 'Yash', 987654321, 2),
(125, 'Yash', 987654321, 2),
(126, 'Yash', 987654321, 2),
(127, 'Yash', 987654321, 2),
(128, 'Yash', 987654321, 2),
(129, 'Yash', 987654321, 2),
(130, 'Yash', 987654321, 2),
(131, 'Yash', 987654321, 2),
(132, 'Yash', 987654321, 2),
(133, 'Yash', 987654321, 2),
(134, 'Yash', 987654321, 2),
(135, 'Yash', 987654321, 2),
(136, 'Yash', 987654321, 2),
(137, 'Yash', 987654321, 2),
(138, 'Yash', 987654321, 2),
(139, 'Yash', 987654321, 2),
(140, 'Yash', 987654321, 2),
(141, 'Yash', 987654321, 2),
(142, 'Kush', 1234567890, 2),
(143, '', 0, 1),
(144, 'yashr', 112244, 1),
(145, 'yashr', 112244, 1),
(146, 'Yash', 1234567890, 1),
(147, 'Yash', 1234567890, 1),
(148, 'Yash', 1234567890, 1),
(149, 'Yash', 1234567890, 1),
(150, 'Yash', 1234567890, 1),
(151, 'Yash', 1234567890, 1),
(152, 'Yash', 1234567890, 1),
(153, 'Yash', 1234567890, 1),
(154, 'Yash', 1234567890, 1),
(155, 'Yash', 1234567890, 1),
(156, 'Yash', 1234567890, 1),
(157, 'Yash', 1234567890, 1),
(158, 'Yash', 1234567890, 1),
(159, 'Yash', 1234567890, 1),
(160, 'Yash', 1234567890, 1),
(161, 'Yash', 1234567890, 1),
(162, 'Yash', 1234567890, 1),
(163, 'Yash', 1234567890, 1),
(164, 'Yash', 1234567890, 1),
(165, 'Yash', 1234567890, 1),
(166, 'Yash', 1234567890, 1),
(167, 'Yash', 1234567890, 1),
(168, 'Yash', 1234567890, 1),
(169, 'Yash', 1234567890, 1),
(170, 'Yash', 1234567890, 1),
(171, 'Yash', 1234567890, 1),
(172, 'Yash', 1234567890, 1),
(173, 'Yash', 1234567890, 1),
(174, 'Yash', 1234567890, 1),
(175, 'Yash', 1234567890, 1),
(176, 'Yash', 1234567890, 1),
(177, 'Yash', 1234567890, 1),
(178, 'Jay', 1122, 2),
(179, 'Yash', 1234567890, 1),
(180, 'Jay', 112244, 1),
(181, 'Kush', 1234567890, 2),
(182, 'Jay', 112244, 1),
(183, 'Jay', 112244, 1),
(184, 'Jay', 112244, 1),
(185, 'Kush', 1234567890, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `dish_name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `table_no` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `entry_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `dish_name`, `quantity`, `price`, `table_no`, `status`, `entry_time`) VALUES
(175, 1, ' Soup', 1, 140, 1, 1, '2020-10-29 01:52:10'),
(175, 2, ' Paneer Chilly', 3, 600, 1, 1, '2020-10-29 01:52:20'),
(176, 3, ' Soup', 1, 140, 1, 1, '2020-10-29 01:55:56'),
(177, 4, ' Soup', 1, 140, 1, 1, '2020-10-29 02:01:04'),
(177, 5, ' Soup', 1, 140, 1, 1, '2020-10-29 02:01:34'),
(177, 6, ' Soup', 1, 140, 1, 1, '2020-10-29 02:01:47'),
(177, 7, ' Soup', 1, 140, 1, 1, '2020-10-29 02:02:39'),
(177, 8, ' Soup', 1, 140, 1, 1, '2020-10-29 02:02:51'),
(177, 9, ' Soup', 1, 140, 1, 1, '2020-10-29 02:03:26'),
(178, 10, ' Soup', 1, 140, 2, 1, '2020-10-29 02:08:08'),
(178, 11, ' Paneer Chilly', 1, 200, 2, 1, '2020-10-29 02:08:08'),
(178, 12, ' Veg Crispy', 1, 200, 2, 1, '2020-10-29 02:08:08'),
(179, 13, ' Soup', 1, 140, 1, 1, '2020-10-29 03:08:11'),
(179, 14, ' Paneer Chilly', 1, 200, 1, 1, '2020-10-29 03:08:11'),
(180, 15, ' Soup', 1, 140, 1, 1, '2020-10-29 11:48:28'),
(180, 16, ' Paneer Chilly', 1, 200, 1, 1, '2020-10-29 11:48:28'),
(180, 17, ' Pepsi', 2, 160, 1, 1, '2020-10-29 11:48:39'),
(180, 18, ' Pizza', 1, 250, 1, 1, '2020-10-29 11:48:48'),
(180, 19, ' Pav Bhaji', 2, 440, 1, 1, '2020-10-29 11:49:35'),
(181, 20, ' Pastry', 3, 240, 2, 1, '2020-10-29 11:50:24'),
(181, 21, ' Thums Up', 1, 80, 2, 1, '2020-10-29 11:50:48'),
(180, 22, ' Pav Bhaji', 1, 220, 1, 1, '2020-10-29 11:50:51'),
(181, 23, ' Ice Cream', 1, 180, 2, 1, '2020-10-29 11:52:22'),
(181, 24, ' Thums Up', 1, 80, 2, 1, '2020-10-29 11:52:22'),
(180, 25, ' Pepsi', 1, 80, 1, 1, '2020-10-29 11:52:26'),
(180, 26, ' Pav Bhaji', 1, 220, 1, 1, '2020-10-29 11:55:04'),
(181, 27, ' Ice Cream', 1, 180, 2, 1, '2020-10-29 11:55:09'),
(180, 28, ' Noodles', 1, 220, 1, 1, '2020-10-29 11:55:15'),
(181, 29, ' Pizza', 1, 250, 2, 1, '2020-10-29 11:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_no` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_no`, `code`) VALUES
(1, 101),
(2, 102),
(3, 103);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
