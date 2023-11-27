-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 05:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'active/inactive',
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `address`, `email`, `mobile`, `password`, `cpassword`, `status`, `token`) VALUES
(12, 'Shivkumar', 'wagholi', 'shivkumar@gmail.com', '1234567890', 'shiv', 'shiv', 'active', '12345678901234567890'),
(14, 'Rounak', 'pune', 'rounak_goje@persistent.com', '7385791049', '$2y$10$MGXPcOeiMydaFiL/IuPk3efP0D5tUkAcwv.YXz/.Xg3.0AmhxaeUK', '$2y$10$I6n3gpXwcEEyQRWnIponw.R0uD8Ik6BDN4LU1wMzXOApNlgGSDFxW', 'active', '836cdb065a5e2c61c7dd'),
(15, 'Shivkumar', 'egkj4', 'rounakgoje@gmail.com', '7385791049', '$2y$10$Hoovjip2XZH4YWvCCgAZRuZD.NVGKzUEtyxrzX1Y9oM7rjkjHTZQu', '$2y$10$4EaEgNLVMHgHZYTljga5tuf8R2jhBZDjDU1LLw1GqC.B9oSWOb0QK', 'active', '03460c8ebaed7272072c'),
(16, 'vaishnavi', 'hgfghjj', 'rounak1234@gmail.com', '7385791049', '$2y$10$.SNXXsuzh/rOmczERelSOOooZicvVvGiewalklPF./sz0YVIZr2Ke', '$2y$10$F8n8NAeXf3Ypi6SU2Cy60uVkgBpwgnLacfkAq6SLndzuf8/BYy4Ja', 'active', '1ae379922d642bc334cc');

-- --------------------------------------------------------

--
-- Table structure for table `clientfeedback`
--

CREATE TABLE `clientfeedback` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `servicename` text NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientfeedback`
--

INSERT INTO `clientfeedback` (`id`, `name`, `email`, `servicename`, `q1`, `q2`, `q3`, `q4`, `q5`, `rating`) VALUES
(1, 'rounak', 'rounak@gmail.com', 'RG IT Services', 5, 4, 3, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `username` varchar(120) NOT NULL,
  `category` varchar(100) NOT NULL,
  `rating` float NOT NULL,
  `area` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'active/inactive',
  `token` varchar(255) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `category`, `rating`, `area`, `email`, `mobile`, `password`, `cpassword`, `status`, `token`, `image`) VALUES
(1, 'Shruti Furniture', 'Carpenter', 3.4, 'Dubai', 'shruti@gmail.com', '5252525252', '', '', 'active', '', '1.jpg'),
(2, 'Auswalt Washing Centre', 'Car Wash', 4.2, 'Germany', 'auswalt@gmail.com', '8585685478', '', '', 'active', '', '1.jpg'),
(3, 'Akash Plumbing Services', 'Plumber', 3.8, 'Wagholi', 'akash@gmail.com', '0000000000', '', '', 'active', '', '1.jpg'),
(4, 'Teddy Phones', 'Gadgets', 0, 'Dubai', 'teddy@gmail.com', '7878787878', '', '', 'active', '', '1.jpg'),
(5, 'Vaishnavi Supermarket', 'Groceries', 4.5, 'Wagholi', 'vaishnavi@gmail.com', '3333333333', '', '', 'active', '', '1.jpg'),
(6, 'Nikhil Electrical Services', 'Electrician', 0, 'Wagholi', 'nikhil@gmail.com', '1010101010', '', '', 'active', '', '1.jpg'),
(7, 'RG IT Services', 'Others', 0, 'Germany', 'rg@gmail.com', '2222222222', '', '', 'active', '', '1.jpg'),
(8, 'Ace Washing Center And Cares', 'Car Wash', 0, 'Viman Nagar', 'ace@gmail.com', '6549873210', '', '', 'active', '', '1.jpg'),
(9, 'Raju TV And Gadgets', 'Gadgets', 0, 'France', 'raju@gmail.com', '8989898989', '', '', 'active', '', '1.jpg'),
(10, 'Riddhi Furniture', 'Carpenter', 0, 'Dubai', 'riddhi@gmail.com', '3232323232', '', '', 'active', '', '1.jpg'),
(11, 'Sankarshan Plumbers', 'Plumber', 3.2, 'France', 'sankarshan@gmail.com', '1111111111', '', '', 'active', '', '1.jpg'),
(12, 'Shivkumar Vegetables And Fruits', 'Vegetables', 0, 'Viman Nagar', 'shiv@gmail.com', '1234567890', '', '', 'active', '', '1.jpg'),
(13, 'Raj Super Complex', 'Groceries', 0, 'Russia', 'raj@gmail.com', '4545454545', '', '', 'active', '', '1.jpg'),
(14, 'Santosh Electical Services And Fitter', 'Electrician', 0, 'United States', 'santosh@gmail.com', '6666666666', '', '', 'active', '', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `servicefeedback`
--

CREATE TABLE `servicefeedback` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicefeedback`
--

INSERT INTO `servicefeedback` (`id`, `sname`, `email`, `cname`, `q1`, `q2`, `q3`, `q4`, `q5`, `rating`) VALUES
(10, 'pratik', 'pratikjangam999@gmail.com', 'rounak', 2, 1, 2, 1, 1, 1.4);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phn` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'active/inactive',
  `token1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `phn`, `cemail`, `service`, `semail`, `category`, `status`, `token1`) VALUES
(3, 'Rounak Annasaheb Goje', '7385791049', 'rounak.goje.cs@ghrcem.raisoni.net', 'Garry Car Repairers', 'rounakgoje@gmail.com', 'Maintenance', 'active', 'rounak1234'),
(4, '', '', '', '', '', '', 'active', 'rag1234'),
(5, 'Rounak Annasaheb Goje', '7385791049', 'rounak.goje.cs@ghrcem.raisoni.net', 'Shiv Maintenance Services', 'rounak.goje.cs@ghrcem.raisoni.net', 'Plumber', 'active', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientfeedback`
--
ALTER TABLE `clientfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicefeedback`
--
ALTER TABLE `servicefeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `clientfeedback`
--
ALTER TABLE `clientfeedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `servicefeedback`
--
ALTER TABLE `servicefeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
