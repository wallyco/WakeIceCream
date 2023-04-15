-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Apr 15, 2023 at 12:54 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WakeIceCreamDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Category_ID` bigint UNSIGNED NOT NULL,
  `Category_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Category_ID`, `Category_Name`, `Description`) VALUES
(1, 'Ice_cream', 'A soft frozen food make with sweetened and flavored milk fat'),
(2, 'Topping ', 'Something put in the top of ice cream such as hot fudge, chocolate syrup'),
(3, 'Waffle Cone', 'Joy Waffle Classic Regular Cone '),
(4, 'Ice Cream Cup ', 'Fabri-Kal 9oz Clear Cup ');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Product_ID` bigint UNSIGNED NOT NULL,
  `Product_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Product_Unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Product_Price` decimal(7,2) NOT NULL,
  `Product_Quantity` bigint NOT NULL,
  `Product_Status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Supplier_ID` bigint UNSIGNED DEFAULT NULL,
  `Category_ID` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Product_ID`, `Product_Name`, `Description`, `Product_Unit`, `Product_Price`, `Product_Quantity`, `Product_Status`, `Supplier_ID`, `Category_ID`) VALUES
(1, 'Mango Mix ', 'Dole Soft Serve Mango Mix ', 'lbs ', 8.00, 4, 'Using ', 3, 1),
(2, 'Cookies and Frozen Yogurt Ice Cream ', 'Honey Hill Low Fat ', 'gallons ', 7.00, 3, 'Using ', 5, 1),
(3, 'Toppers Rainbow Sprinkles', 'Gluten Free', 'lbs', 4.00, 6, 'Using', 6, 2),
(4, 'Semi Sweet Mini Baking Chips ', 'Hershey \'s chips ', 'lbs', 2.50, 10, 'Using ', 4, 2),
(5, 'Waffle Cone ', 'Large Cone ', 'package ', 1.00, 300, 'Using ', 6, 3),
(6, 'Mint Chocolate Ice Cream ', 'Non Dairy Mint Chocolate ', 'lbs ', 6.50, 6, 'Using ', 2, 1),
(7, 'Vanilla Syrup ', 'JHS Vanilla Syrup ', 'gallons ', 2.00, 2, 'Not use', 7, 2),
(8, 'Plastic Ice cream Cup ', 'Fabri-Kal 9oz ', 'package ', 0.80, 500, 'Using ', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `Role_ID` bigint UNSIGNED NOT NULL,
  `Role_Name` varchar(255) NOT NULL,
  `Auth_Level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`Role_ID`, `Role_Name`, `Auth_Level`) VALUES
(0, 'Admin', 0),
(1, 'Staff', 1),
(2, 'Manager', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `Staff_ID` bigint UNSIGNED NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` bigint NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role_ID` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`Staff_ID`, `First_Name`, `Last_Name`, `Address`, `Phone`, `Email`, `Password`, `Role_ID`) VALUES
(1, 'Josh', 'Pierce', 'test', 342788292, 'testing@test', '12345', 0),
(3, 'Quyen', 'Hoang', '123 Address Lane', 7095559921, 'qtest@test', '123', 1),
(14, 'Bob', 'Vance', '123 Garden', 4032911029, 'bobv@test', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `Supplier_ID` bigint UNSIGNED NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Comments` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`Supplier_ID`, `Name`, `Address`, `Phone`, `Fax`, `Email`, `Comments`) VALUES
(1, 'Cheasapeake ', 'Baltimore, MD ', '410-675-6674', '410-675-6670', 'cheasapeake@gmail.com', 'Ice cream cone, ice cream syrup'),
(2, 'Dutt and Wagner', 'Abingdon, VA', '800-688-2110', '800-688-2112', 'duttwagner@gmail.com', 'Baked sweet goods, soft serve ice cream'),
(3, 'Nestle_USA', 'Arlington, VA', '703-682-4500', '703-682-4501', 'nestle_usa@hotmail.com', 'Chocolate products.'),
(4, 'Vista Corporate', 'Englewood, CO', '800-880-9911', '800-880-9922', 'nestle_usa@hotmail.com', 'Ice cream, candies, snacks '),
(5, 'Good Time Ice Cream Distributor ', 'Raleigh, NC ', '919-876-3333', '919-876-3330', 'goodtime@gmail.com', 'Base ice cream distribution company that supply ice cream & frozen desset in the Triangle area '),
(6, 'Regional Distributors Inc', 'Rochester, NY ', '585-485-3300', '585-485-3301', 'customer_service@redist.com ', 'frozen yogurt, disposable cups, bowls, straws, napkins'),
(7, 'King\'s Cupboard ', 'Red Lodge, MT ', '800-962-6550', '800-962-6551', 'kingcup_service21@hotmail.com', 'Hot, sweet, caramel , organic chcolate, sweeteners and ice-cream topping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `product_fk_supplier_id` (`Supplier_ID`),
  ADD KEY `product_fk_category_id` (`Category_ID`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD KEY `staff_fk_role_id` (`Role_ID`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`Supplier_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Category_ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `Product_ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `Staff_ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `Supplier_ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_fk_category_id` FOREIGN KEY (`Category_ID`) REFERENCES `Category` (`Category_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_fk_supplier_id` FOREIGN KEY (`Supplier_ID`) REFERENCES `Supplier` (`Supplier_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Staff`
--
ALTER TABLE `Staff`
  ADD CONSTRAINT `staff_fk_role_id` FOREIGN KEY (`Role_ID`) REFERENCES `Role` (`Role_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
