-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 09:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `mobile`) VALUES
('admin', 'admin@123', 'admin@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`username`, `email`, `amount`) VALUES
('John Doe', 'john@gmail.com', 150),
('Ranveer Singh', 'Ranveer Singh', 100),
('Priyanka Chopra', 'Priyanka@gmail.com', 50),
('vaishnavi', 'vaishnavi@gmail.com', 100),
('Shradha', 'Shradhhda@gmail.com', 130),
('Satish ', 'Satish@gmail.com', 500),
('Suresh', 'Suresh@gmail.com', 200),
('manish', 'manish@gmail.com', 130);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `username` varchar(20) NOT NULL,
  `complaint` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`username`, `complaint`) VALUES
('Gayatri ', 'The animal is not behaving right after eating the food . please suggest a specialist for it'),
('John Doe', 'my pet is suffering from cold.'),
('John Doe', 'i need my monthly dosage of medicines for my cat.'),
('Shraddha', 'tommy needs his monthly food'),
('harshal', 'i need a dog for adoption'),
('shubham', 'my bakri suffering from lampi'),
('rani', 'i am cow '),
('vishakha', 'i am popat');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `mobile`) VALUES
('Amol kale', '12345', 'Amol@gmail.com', 1234567890),
('Dr. Joshi', '12345', 'emailemail@gmail.com', 123123123),
('gauri patil', '12345', 'gauri@gmail.com', 1231231231),
('hegdevar', '12345', 'dsfs@gmail.com', 2147483647),
('kalyani patil', '12345', 'kalyani@gmail.com', 544646757),
('Prasad Joshi', '12345', 'Prasad@gmail.com', 2147483647),
('Sarita  patil', '12345', 'sarita@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
