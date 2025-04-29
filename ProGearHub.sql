-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 23, 2025 at 09:29 AM
-- Server version: 10.4.34-MariaDB-1:10.4.34+maria~ubu2004
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ProGearHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'John Doe', 'john@example.com', 'Product Inquiry', 'Do you have mountain bikes available?', '2025-04-23 07:28:51'),
(2, 'Jane Smith', 'jane@example.com', 'Order Issue', 'I need to change my shipping address.', '2025-04-23 07:28:51'),
(3, 'John Smith', 'johnsmith@hotmail.com', 'Inquiry for order', 'Hey I would love to order some stuff', '2025-04-23 07:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL CHECK (`quantity` > 0),
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) GENERATED ALWAYS AS (`quantity` * `price`) STORED,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `email`, `product_name`, `quantity`, `price`, `order_date`) VALUES
(1, 'Alice Brown', 'alice@example.com', 'Running Shoes', 2, 59.99, '2025-04-23 07:28:51'),
(2, 'Bob White', 'bob@example.com', 'Tennis Racket', 1, 89.99, '2025-04-23 07:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(16) DEFAULT NULL,
  `category` varchar(7) DEFAULT NULL,
  `description` varchar(336) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `image`) VALUES
(1, 'Sports Glasses', 'glasses', 'Elevate your game with the ActiveShield Sports Glasses, the ultimate eyewear designed for athletes and outdoor enthusiasts alike. Engineered for performance, these glasses combine cutting-edge technology with sleek, sporty aesthetics to ensure you not only look great but also perform at your best.', 199, 'torege-us-UJk-apX4miQ-unsplash.jpg'),
(2, 'Mountain Bike', 'bicycle', 'Unleash your adventurous spirit with the Apex Trailblazer Mountain Bike, meticulously engineered for both seasoned riders and enthusiastic newcomers. This high-performance mountain bike is designed to conquer the most challenging terrains, from rugged trails to steep inclines, ensuring an exhilarating ride every time.', 2999, 'streetsh-vZAk_n9Plfc-unsplash.jpg'),
(3, 'Hand Ball', 'ball', 'Elevate your game with the ProElite Handball, designed for players who demand excellence on the court. This high-performance handball combines advanced materials and cutting-edge technology to deliver superior grip, control, and durability.', 129, 'sporlab-wUbtxuZ5uiw-unsplash.jpg'),
(4, 'Basketball', 'ball', 'Elevate your game with the ProBounce Basketball, designed for players who demand the best both on and off the court. Crafted from high-quality composite leather, this basketball delivers superior grip and durability, ensuring that you maintain control even during the most intense matches.', 149, 'ruslan-ruslan-AhAMJgq5QPM-unsplash.jpg'),
(5, 'Tennis Racquet', 'racquet', 'Elevate your game with the Ace Pro 3000 Tennis Racquet, expertly designed for players seeking power, precision, and ultimate control on the court. Crafted with advanced materials and cutting-edge technology, this racquet combines a lightweight yet durable frame with a large sweet spot, allowing you to deliver powerful shots with ease.', 299, 'hoi-pham-eLZwsPO8cCQ-unsplash.jpg'),
(6, 'Basketball Shoes', 'shoes', 'Unleash your potential on the court with the Maverick Air Basketball Shoes, designed for players who demand performance, style, and comfort. Engineered with cutting-edge technology, these shoes provide unparalleled support and responsiveness, ensuring you can make every move with confidence.', 499, 'branislav-belko-lJ7iAZxplpc-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
