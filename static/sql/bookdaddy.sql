-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 01:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdaddy`
--
CREATE DATABASE IF NOT EXISTS `bookdaddy` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bookdaddy`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `ISBN` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `UID` int(11) NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `price`, `ISBN`, `Description`, `Type`, `UID`, `dateAdded`) VALUES
('', 0, '', '', '', 1, '2018-12-11'),
('a big tv', 99999, '23423', 'a big description', 'other', 1, '2018-12-04'),
('Another Cool Thing', 345, '', 'ITS SO COOL OMG', 'other', 1, '2018-12-03'),
('Another dog', 2147483647, '', '', 'other', 1, '2018-12-04'),
('Big Chair', 23, '', 'A very big and nice chair', 'furniture', 2, '2018-12-03'),
('Big Couch', 39, '', 'A very nice and big couch. Perfect for a family.', 'furniture', 1, '2018-12-04'),
('Big sofa', 23, '', 'A very comfortable sofa', 'furniture', 1, '2018-12-03'),
('Clown Statue', 800, NULL, 'Its a creepy statue of a clown.', 'other', 2, '2018-12-03'),
('Cool Thing', 4, '', 'A very cool thing', 'other', 1, '2018-12-03'),
('Dog', 3456, '', '', 'other', 1, '2018-12-04'),
('Good Book', 45, '4246746787654', 'A very good book', 'book', 2, '2018-12-03'),
('Harry Potter 1', 10, '1234237263827', 'The first book in the harry potter series', 'book', 1, '2018-12-03'),
('lord of the rings', 35, '5636345634575', '', 'book', 1, '2018-12-04'),
('Nice Thing', 2, '', 'Its quite a nice thing.', 'other', 1, '2018-12-03'),
('tv', 10000, '', 'the description', 'other', 1, '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `pass` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `dob`, `username`, `uid`, `pass`, `salt`) VALUES
('Geordie', 'Tate', '1998-10-03', 'tateg', 1, '1797d10c37a68a5c9071a33d2665d37107f8c08a3cced8bd19210fc81ac14111', '7fcd682ed53158a3d28a8504c7a2679f2ece23f1dafa53c30094e4893c647460'),
('Alex', 'Ford', '1999-04-04', 'fordg@epi.edu', 2, 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '7fcd682ed53158a3d28a8504c7a2679f2ece23f1dafa53c30094e4893c647460'),
('janus', 'doe', '2012-12-21', 'tateg@rpi.edu', 3, '1b58c3a974ab24f28632e63ffb7e19ce21411c0a7b3b13ae993ee7dd14459b0c', 'b1531440bf26842b98c075e6b599ab7a7b145d71c450a4f2d5ed267788985bac'),
('jane', 'slavowicz', '1873-01-21', 'doej@rpi.edu', 4, '22faf25ae8259788cf8189a49da3361436668aa383c8a981cc42f8d5ae2db34c', '1ea6c79d60806c8a84c07d9f13add00725850c1bd2e2e9ab119218c75a01fe6d'),
('Karmine', 'slavowicz', '2012-12-21', 'slavok@rpi.edu', 5, '49a9f429b2fbd5dc16a00d0fe2305bd472ca659ea618d79ab9c36faad343996c', 'b82fa04cab48329395a8641a55d93a3153ad0e16e3f209474c19001971536b14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`),
  ADD KEY `OwnerID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
