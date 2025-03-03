-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2025 at 10:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(350) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`msg_id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'name', 'email', 'message', '2025-03-03 06:28:34'),
(2, 'yasasferreira', 'yasas@gmail.com', '', '2025-03-03 06:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `id` int(11) NOT NULL,
  `make_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`id`, `make_name`) VALUES
(5, 'BMW'),
(3, 'Ford'),
(2, 'Honda'),
(4, 'Tesla'),
(1, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone_number`, `address`, `created_at`) VALUES
(1, 'user1', 'password123', 'user1@example.com', 'John Doe', '1234567890', '1234 Elm St, Springfield', '2025-03-02 07:08:43'),
(2, 'user2', 'password456', 'user2@example.com', 'Jane Smith', '0987654321', '5678 Oak St, Rivertown', '2025-03-02 07:08:43'),
(3, 'user3', 'password789', 'user3@example.com', 'Mike Johnson', '1122334455', '9101 Pine St, Lakeside', '2025-03-02 07:08:43'),
(4, 'user4', 'password321', 'user4@example.com', 'Sarah Lee', '2233445566', '1122 Maple St, Greenfield', '2025-03-02 07:08:43'),
(5, 'Yasas', '12345678', 'yasas@gmail.com', 'Yasas Ferreira', '0762751352', 'Gampaha,Asgiriya.', '2025-03-03 04:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `mileage` int(11) NOT NULL,
  `fuel_type` enum('Petrol','Diesel','Electric','Hybrid') NOT NULL,
  `transmission` enum('Manual','Automatic') NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('available','sold') DEFAULT 'available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `seller_id`, `make_id`, `model`, `year`, `price`, `mileage`, `fuel_type`, `transmission`, `description`, `image`, `status`, `created_at`) VALUES
(1, 1, 1, 'Camry', '2020', 22000.00, 35000, 'Petrol', 'Automatic', 'Well-maintained sedan with excellent fuel efficiency.', 'uploads/vehicle1.jpg', 'available', '2025-03-02 07:12:24'),
(2, 2, 2, 'Civic', '2019', 18000.00, 42000, 'Petrol', 'Manual', 'Sporty and reliable car with a clean history.', 'uploads/vehicle2.jpg', 'available', '2025-03-02 07:12:24'),
(3, 3, 3, 'F-150', '2021', 35000.00, 25000, 'Diesel', 'Automatic', 'Powerful pickup truck with great towing capacity.', 'uploads/vehicle3.jpeg', 'available', '2025-03-02 07:12:24'),
(4, 1, 4, 'Model 3', '2022', 45000.00, 10000, 'Electric', 'Automatic', 'High-performance electric car with autopilot features.', 'uploads/vehicle4.jpeg', 'available', '2025-03-02 07:12:24'),
(5, 2, 5, 'X5', '2018', 40000.00, 60000, 'Petrol', 'Automatic', 'Luxury SUV with premium interior and great handling.', 'uploads/vehicle5.jpg', 'available', '2025-03-02 07:12:24'),
(6, 3, 1, 'Corolla', '2021', 22000.00, 25000, 'Petrol', 'Automatic', 'Compact sedan with reliable performance.', 'uploads/vehicle1.jpg', 'sold', '2025-03-02 07:12:24'),
(7, 1, 2, 'Accord', '2019', 23000.00, 38000, 'Petrol', 'Automatic', 'Spacious and efficient midsize sedan.', 'uploads/vehicle2.jpg', 'available', '2025-03-02 07:12:24'),
(8, 2, 3, 'Explorer', '2020', 32000.00, 30000, 'Diesel', 'Automatic', 'Versatile SUV with three-row seating.', 'uploads/vehicle3.jpeg', 'available', '2025-03-02 07:12:24'),
(9, 3, 4, 'Model S', '2021', 65000.00, 15000, 'Electric', 'Automatic', 'Luxury electric sedan with premium features.', 'uploads/vehicle4.jpeg', 'available', '2025-03-02 07:12:24'),
(10, 1, 5, 'X6', '2021', 75000.00, 20000, 'Petrol', 'Automatic', 'Sporty and luxurious SUV with advanced technology.', 'uploads/vehicle5.jpg', 'available', '2025-03-02 07:12:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `make_name` (`make_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `make_id` (`make_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_ibfk_2` FOREIGN KEY (`make_id`) REFERENCES `make` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
