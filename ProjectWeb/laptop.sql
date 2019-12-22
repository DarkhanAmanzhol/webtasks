-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 10:59 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaminglaptop`
--

CREATE TABLE `gaminglaptop` (
  `id` int(11) NOT NULL,
  `model_number` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaminglaptop`
--

INSERT INTO `gaminglaptop` (`id`, `model_number`, `name`, `title`, `image`, `price`) VALUES
(1, 3, 'Max 2019', 'Microsoft - Surface Pro 6 - 12.3\" Touch-Screen - Intel Core i7 - 8GB Memory - 256GB Solid State Drive - Black', 'surfacepro.jpg', 2200),
(2, 6, 'Triton', 'Best gamers laptop', 'image2.jpg', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `model`) VALUES
(1, 'Macbook Pro'),
(2, 'Dell XPS'),
(3, 'Surface Pro'),
(4, 'Acer Switch 3'),
(5, 'asus'),
(6, 'HP'),
(7, 'Torpeda');

-- --------------------------------------------------------

--
-- Table structure for table `netbook`
--

CREATE TABLE `netbook` (
  `id` int(11) NOT NULL,
  `model_number` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `netbook`
--

INSERT INTO `netbook` (`id`, `model_number`, `name`, `title`, `image`, `price`) VALUES
(1, 2, 'Pro 2019', 'Dell - Inspiron 2-in-1 17.3\" Touch-Screen Laptop - Intel Core i7 - 16GB Memory - 512GB SSD + Optane - Silver', 'dellxps13.jpg', 1600),
(2, 7, 'Pro X Grud', 'Neutral laptop', 'image2.jpg', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `ultrabook`
--

CREATE TABLE `ultrabook` (
  `id` int(11) NOT NULL,
  `model_number` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ultrabook`
--

INSERT INTO `ultrabook` (`id`, `model_number`, `name`, `title`, `image`, `price`) VALUES
(1, 1, 'Apple', 'Apple - MacBook Pro 15.4\" Display with Touch Bar - Intel Core i9 - 16GB Memory - AMD Radeon Pro 560X - 512GB SSD - Space Gray', 'mackbookpro19.jpg', 2000),
(2, 4, 'Nitro', 'Acer - Nitro 5 15.6\" Gaming Laptop - Intel Core i5 - 8GB Memory - NVIDIA GeForce GTX 1650 - 1TB Hard Drive + 128GB SSD - Black', 'acerswitch3.jpg', 1400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaminglaptop`
--
ALTER TABLE `gaminglaptop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_number` (`model_number`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `netbook`
--
ALTER TABLE `netbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_number` (`model_number`);

--
-- Indexes for table `ultrabook`
--
ALTER TABLE `ultrabook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_number` (`model_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaminglaptop`
--
ALTER TABLE `gaminglaptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `netbook`
--
ALTER TABLE `netbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ultrabook`
--
ALTER TABLE `ultrabook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaminglaptop`
--
ALTER TABLE `gaminglaptop`
  ADD CONSTRAINT `gaminglaptop_ibfk_1` FOREIGN KEY (`model_number`) REFERENCES `models` (`id`);

--
-- Constraints for table `netbook`
--
ALTER TABLE `netbook`
  ADD CONSTRAINT `netbook_ibfk_1` FOREIGN KEY (`model_number`) REFERENCES `models` (`id`);

--
-- Constraints for table `ultrabook`
--
ALTER TABLE `ultrabook`
  ADD CONSTRAINT `ultrabook_ibfk_1` FOREIGN KEY (`model_number`) REFERENCES `models` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
