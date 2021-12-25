-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 03:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `status`) VALUES
(1, 'abc', 'abc@xyz.com', 111111111, 'abc', 'active'),
(3, 'heloo', 'hello@gmail.com', 1112223334, 'sftnfasdcscc', '400');

-- --------------------------------------------------------

--
-- Table structure for table `res_page`
--

CREATE TABLE `res_page` (
  `id` int(11) NOT NULL,
  `res_rating` text NOT NULL,
  `res_tag` text NOT NULL,
  `res_img` text NOT NULL,
  `res_name` varchar(30) NOT NULL,
  `res_type` text NOT NULL,
  `res_time` text NOT NULL,
  `res_price` text NOT NULL,
  `res_offer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_page`
--

INSERT INTO `res_page` (`id`, `res_rating`, `res_tag`, `res_img`, `res_name`, `res_type`, `res_time`, `res_price`, `res_offer`) VALUES
(1, '3.1 (200+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/1.png', 'World Famous', 'North Indian • American • Pure veg', '20–25', '250', '65%'),
(2, '2.5 (100+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/2.png', 'Famous Food', 'South Indian • Italian • Pure veg', '15–25', '200', '50%'),
(3, '3.4 (150+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/3.png', 'Bite Me Sandwiches', 'North Indian • Indian • Pure veg', '25-35', '100', '55%'),
(4, '3.4 (150+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/4.png', 'Famous Dave\'s Bar-B-Que', 'Vegetarian • Indian • Pure veg', '25-35', '150', '50%'),
(5, '4.4 (250+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/5.png', 'Thai Famous Cuisine', 'North Indian • Indian • Pure veg', '30–35', '250', '40%'),
(6, '3.2 (100+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/6.png', 'The osahan Restaurant', 'North • Hamburgers • Pure veg', '35-45', '250', '70%'),
(7, '1.2 (50+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/7.png', 'Stan\'s Restaurant', 'North • Hamburgers • Pure veg', '15-25', '200', '40%'),
(8, '3.5 (150+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/8.png', 'Polo Lounge', 'Vegetarian • Indian • Pure veg', '25-35', '450', '60%'),
(9, '4.5 (250+)', 'Promoted', 'http://localhost/osahan/uploads/Res_Image/9.png', 'Jack Fry\'s', 'North Indian • Indian • Pure veg', '25-30', '100', '65%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_page`
--
ALTER TABLE `res_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `res_page`
--
ALTER TABLE `res_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
