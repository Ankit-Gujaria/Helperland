-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 10:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Address_id` int(11) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Street_Name` varchar(200) NOT NULL,
  `House_No` int(10) NOT NULL,
  `Postal_Code` int(10) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `City` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Address_id`, `Customer_id`, `Street_Name`, `House_No`, `Postal_Code`, `Phone_Number`, `City`) VALUES
(3, 1, 'pratapara', 135, 364225, 25145765, 'bhavnagar');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_Email` varchar(200) NOT NULL,
  `Admin_Name` varchar(200) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_Email`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'anku1@gmail.com', 'Ankit', 'Ankit@456');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email_Address` varchar(200) NOT NULL,
  `Mobile_Number` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `First_Name`, `Last_Name`, `Email_Address`, `Mobile_Number`, `Password`, `Confirm Password`) VALUES
(1, 'Ankit', 'Gujaria', 'ankitgujaria2000@gmail.com', 1212121212, 'Ab@123', 'Ab@123');

-- --------------------------------------------------------

--
-- Table structure for table `favourite_sp`
--

CREATE TABLE `favourite_sp` (
  `Favourite_id` int(11) NOT NULL,
  `Service_Provide_id` int(10) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Favourite` varchar(255) NOT NULL,
  `Unfavourite` varchar(255) NOT NULL,
  `Block_SP` varchar(255) NOT NULL,
  `Block_Customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Notification_id` int(11) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Service_Provide_id` int(10) NOT NULL,
  `Admin_id` int(10) NOT NULL,
  `Notification_Massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating_service_provider`
--

CREATE TABLE `rating_service_provider` (
  `Rating_id` int(11) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Service_id` int(10) NOT NULL,
  `Service_Provide_id` int(10) NOT NULL,
  `On_Time_Arrival` float NOT NULL,
  `Friendly` float NOT NULL,
  `Quality_Of_Service` float NOT NULL,
  `Feedbake_Service_Provider` varchar(255) NOT NULL,
  `Average_Rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_booking`
--

CREATE TABLE `service_booking` (
  `Service_id` int(11) NOT NULL,
  `Service_Date` date NOT NULL,
  `Service_Start_Time` time NOT NULL,
  `Services_End_time` time NOT NULL,
  `Service_Provider` int(10) NOT NULL,
  `Service_Amount` int(10) NOT NULL,
  `Service_Status` varchar(255) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pets` varchar(255) NOT NULL,
  `Service_Inside_Cabinets` time NOT NULL,
  `Service_Inside_fridge` time NOT NULL,
  `Service_Inside_Oven` time NOT NULL,
  `Service_Laundry_Wash_Dry` time NOT NULL,
  `Service_Interior_Window` time NOT NULL,
  `Services_Need_Time` time NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Service_Provide_id` int(10) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Admin_id` int(10) NOT NULL,
  `Admin_Reschedule_Comment` varchar(255) NOT NULL,
  `Call_Center_EMP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `Service_Provide_id` int(11) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email_Address` varchar(200) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Street_Name` varchar(255) NOT NULL,
  `House_Number` varchar(20) NOT NULL,
  `Postal_Code` int(10) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`Service_Provide_id`, `First_Name`, `Last_Name`, `Email_Address`, `Mobile_Number`, `Nationality`, `Gender`, `Status`, `Street_Name`, `House_Number`, `Postal_Code`, `Location`, `City`, `Password`, `Confirm_Password`) VALUES
(1, 'santodh', 'solanki', 'santosh123@gmail.com', 1245786254, 'indian', 'male', 'pendding', 'vejodary', '186', 364037, 'bhavnagar', 'bhavnagar', 'S1233', 'S1233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Address_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `favourite_sp`
--
ALTER TABLE `favourite_sp`
  ADD PRIMARY KEY (`Favourite_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Service_Provide_id` (`Service_Provide_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Notification_id`),
  ADD KEY `notification_ibfk_1` (`Customer_id`),
  ADD KEY `notification_ibfk_2` (`Service_Provide_id`),
  ADD KEY `notification_ibfk_3` (`Admin_id`);

--
-- Indexes for table `rating_service_provider`
--
ALTER TABLE `rating_service_provider`
  ADD PRIMARY KEY (`Rating_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Service_Provide_id` (`Service_Provide_id`),
  ADD KEY `Service_id` (`Service_id`);

--
-- Indexes for table `service_booking`
--
ALTER TABLE `service_booking`
  ADD PRIMARY KEY (`Service_id`),
  ADD KEY `Service_Provide_id` (`Service_Provide_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `service_booking_ibfk_3` (`Admin_id`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`Service_Provide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `Address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favourite_sp`
--
ALTER TABLE `favourite_sp`
  MODIFY `Favourite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating_service_provider`
--
ALTER TABLE `rating_service_provider`
  MODIFY `Rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_booking`
--
ALTER TABLE `service_booking`
  MODIFY `Service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `Service_Provide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favourite_sp`
--
ALTER TABLE `favourite_sp`
  ADD CONSTRAINT `favourite_sp_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourite_sp_ibfk_2` FOREIGN KEY (`Service_Provide_id`) REFERENCES `service_provider` (`Service_Provide_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`Service_Provide_id`) REFERENCES `service_provider` (`Service_Provide_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating_service_provider`
--
ALTER TABLE `rating_service_provider`
  ADD CONSTRAINT `rating_service_provider_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_service_provider_ibfk_2` FOREIGN KEY (`Service_Provide_id`) REFERENCES `service_provider` (`Service_Provide_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_service_provider_ibfk_3` FOREIGN KEY (`Service_id`) REFERENCES `service_booking` (`Service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_booking`
--
ALTER TABLE `service_booking`
  ADD CONSTRAINT `service_booking_ibfk_1` FOREIGN KEY (`Service_Provide_id`) REFERENCES `service_provider` (`Service_Provide_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_booking_ibfk_2` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_booking_ibfk_3` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
