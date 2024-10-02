-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 03:14 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaurim_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `country` enum('South Korea','Australia','Çanada',' ÚSA','Other') NOT NULL,
  `inquiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `country`, `inquiry`) VALUES
('Joe Tribbiyani', 'Joe@yahoo.com', 'Australia', ' Does hotel has Pet Policy?'),
('Lee Jun Suk', 'leejunsuk@gmail.com', 'Çanada', 'Can I pay the bill through Visa Card ?'),
('Miya Smith', 'Msmith@gmail.com', ' ÚSA', 'Do you have any child policy?'),
(' Nimethya Gamage', ' nimethya@gmail.com', '', ' Thank you'),
(' Yamuna Hettiarachchi', ' yamuna@gmail.com', '', ' Can I generally request an extra bed for a third person in a double room and at what costs?'),
(' Champa Siriwardana', ' champa@gmail.com', ' ÚSA', ' Do I pay a reservation fee?'),
(' Supun Kalpana', ' supun@gmail.com', '', ' Are taxes included in the room rates?');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `Day` enum('Sunday','Monday','Tuesday','Wednessday','Thurseday','Friday','Saturday') NOT NULL,
  `Hour` enum('10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00') NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_Number` int(15) NOT NULL,
  `No_of_Adults` int(3) NOT NULL,
  `No_of_Children` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`Day`, `Hour`, `Name`, `Phone_Number`, `No_of_Adults`, `No_of_Children`) VALUES
('Sunday', '10:00', 'KIm MIn Ah', 21154789, 2, 0),
('Monday', '14:00', 'Ashwin Patel', 914578456, 1, 0),
('Tuesday', '18:00', 'Paul Smith', 214587963, 4, 2),
('Friday', '19:00', 'Depika Perera', 214587963, 2, 2),
('Sunday', '20:00', 'KimMInJay', 717277885, 1, 1),
('Sunday', '19:00', 'KimMInJay', 717277885, 2, 1),
('Tuesday', '23:00', 'KimMInJay', 941257863, 1, 0),
('Sunday', '21:00', 'KimMInJay', 941257863, 2, 1),
('Monday', '23:00', 'Hiruni Navodya', 717277885, 1, 0),
('Sunday', '23:00', 'Yamuna Hettiarachchi', 71428987, 2, 2),

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `Fullname` varchar(30) NOT NULL,
  `Nic` int(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Job_Category` enum('Manager','Hotel Receptionist','Chef','Waiter') NOT NULL,
  `Tel_no` int(15) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`Fullname`, `Nic`, `Email`, `Job_Category`, `Tel_no`, `gender`) VALUES
('Nimal Perera', 954876521, 'nimal@gmail.com', 'Hotel Receptionist', 914756847, 'Male'),
('Sunil Hettiarachchi', 947856214, 'sunil@gmail.com', 'Hotel Receptionist', 947851236, 'Male'),
('Nimethya Gamage', 2147483647, 'nimethya@gmail.com', 'Chef', 789548652, ''),
('Nimethya Gamage', 2147483647, 'nimethya@gmail.com', 'Chef', 789548652, ''),
('Yamuna Hettiarachchi', 676842252, 'yamuna@gmail.com', 'Manager', 712224856, ''),
('Manula Pankaja', 99887544, 'manula@gmail.com', 'Chef', 718456988, ''),
('Neth Kalum', 2147483647, 'neth@gmail.com', 'Waiter', 718549633, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
