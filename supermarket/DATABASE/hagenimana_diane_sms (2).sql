-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 01:14 PM
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
-- Database: `hagenimana_diane_sms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteOldOrders` (IN `deleteDate` DATE)   BEGIN
    DELETE FROM `Order` WHERE OrderDate < deleteDate;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetCustomersWithMultipleOrders` ()   BEGIN
    SELECT C.CustomerID, C.FirstName, C.LastName
    FROM Customer C
    WHERE (SELECT COUNT(*) FROM `Order` O WHERE O.CustomerID = C.CustomerID) > 3;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetProductInfo` ()   BEGIN
    SELECT * FROM Product;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertProduct` (IN `productName` VARCHAR(255), IN `productPrice` DECIMAL(10,2), IN `productQuantity` INT)   BEGIN
    INSERT INTO Product (Name, Price, Quantity) VALUES (productName, productPrice, productQuantity);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateProduct` (IN `productId` INT, IN `newProductName` VARCHAR(255), IN `newProductPrice` DECIMAL(10,2))   BEGIN
    UPDATE Product SET Name = newProductName, Price = newProductPrice WHERE ProductID = productId;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('supermarket@gmail.com', '000'),
('supermarket@gmail.com', '000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `password`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '000'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '1234'),
(11, 'kamugi', 'kahu', 'kamu@gmail.com', '1234');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `AfterDeleteCustomer` AFTER DELETE ON `customer` FOR EACH ROW BEGIN
    
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `customerswithmultipleorders`
-- (See below for the actual view)
--
CREATE TABLE `customerswithmultipleorders` (
`CustomerID` int(11)
,`FirstName` varchar(50)
,`LastName` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `productname` varchar(87) NOT NULL,
  `quantity` int(87) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `productname`, `quantity`, `CustomerID`, `date`) VALUES
(1, '', 0, 1, '2023-09-10'),
(2, '', 0, 2, '2023-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `OrderID` int(34) NOT NULL,
  `item` varchar(34) DEFAULT NULL,
  `quantity` varchar(43) DEFAULT NULL,
  `CustomerID` varchar(67) DEFAULT NULL,
  `OrderDate` varchar(76) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`OrderID`, `item`, `quantity`, `CustomerID`, `OrderDate`) VALUES
(1, 'television', '5', 'Boy', '2024-03-21'),
(42, 'books', '12', 'John123', '2024-04-24'),
(45, 'books', '1', 'John123', '2024-04-30'),
(49, 'television', '3', 'John123', '2024-04-30'),
(50, 'books', '34', 'Boy', '2024-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productname` varchar(76) NOT NULL,
  `quantity` varchar(112) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productname`, `quantity`, `price`, `date`) VALUES
(4, 'banana', '30', '7600000', '2024-04-04'),
(5, 'apple', '3', '5000', '2024-04-10'),
(6, 'ferarri', '100', '76000000000', '0000-00-00'),
(7, 'banana', '50', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Name`, `Price`, `Quantity`) VALUES
(1, 'bread', 1200.00, 22),
(2, 'mandazi', 5000.00, 15),
(3, 'B Juice', 7000.00, 16);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `AfterInsertProduct` AFTER INSERT ON `product` FOR EACH ROW BEGIN
    
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AfterUpdateProduct` AFTER UPDATE ON `product` FOR EACH ROW BEGIN
    
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(39) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`) VALUES
(1, 'hagenimanadiane10@gmail.com', '2345678', ''),
(2, 'sonia@gmail.com', '76', ''),
(3, 'sonia@gmail.com', '72', ''),
(4, 'neza@gmail.com', '12345', ''),
(5, 'john@gmail.com', 'john', ''),
(6, 'john@gmail.com', 'john', ''),
(7, 'john@gmail.com', 'john', ''),
(8, 'john@gmail.com', 'jesddew', ''),
(9, 'boy@gmail.com', '1212', ''),
(10, 'diane@gmail.com', '12345', ''),
(11, 'sonia@gmail.com', '1', '');

-- --------------------------------------------------------

--
-- Structure for view `customerswithmultipleorders`
--
DROP TABLE IF EXISTS `customerswithmultipleorders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customerswithmultipleorders`  AS SELECT `c`.`CustomerID` AS `CustomerID`, `c`.`FirstName` AS `FirstName`, `c`.`LastName` AS `LastName` FROM `customer` AS `c` WHERE (select count(0) from `order` `o` where `o`.`CustomerID` = `c`.`CustomerID`) > 33 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8890;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `OrderID` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
