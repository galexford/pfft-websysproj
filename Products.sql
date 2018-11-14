-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 10:55 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--
CREATE TABLE 'Users' (
	'fname' text NOT NULL,
	'lname' text NOT NULL,
	'picture' text NOT NULL,
	'dob' text NOT NULL,
	'email' text NOT NULL,
	'pass' text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;


CREATE TABLE `products` (
  `Name` VARCHAR(100) PRIMARY KEY NOT NULL,
  `ISBN` VARCHAR(13) NOT NULL,
  `Description` TEXT NOT NULL,
  `Type` VARCHAR(9) NOT NULL,
  `OwnerFName` VARCHAR(100) NOT NULL,
  `OwnerLName` VARCHAR(100) NOT NULL,
  `dateAdded` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
