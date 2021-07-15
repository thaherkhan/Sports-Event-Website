-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 07:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `Admin_id` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`Admin_id`, `Email`, `Password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `Event_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(50000) NOT NULL,
  `Date` date NOT NULL,
  `Image` blob NOT NULL,
  `Category` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`Event_id`, `Name`, `Description`, `Date`, `Image`, `Category`, `Status`) VALUES
(1, 'ICC World Test Championship', 'ICC World Test Championship is a League Competition for Test Cricket.             ', '2021-07-08', 0x4576656e74496d6167652f746573745f637269636b65742e6a7067, 'Cricket', 'Enable'),
(2, 'ODI Super League', 'ODI Super League is a League Competition for One Day Cricket.           ', '2020-11-09', 0x4576656e74496d6167652f6f64695f637269636b65742e6a7067, 'Cricket', 'Enable'),
(3, 'US Open', 'Gladnsam tournament of Tennis.     ', '2021-11-19', 0x4576656e74496d6167652f75736f70656e2e6a7067, 'Tennis', 'Disable'),
(4, 'Cupa America', 'This is Championship of South America.      ', '2021-06-12', 0x4576656e74496d6167652f637570612e6a7067, 'Football', 'Enable'),
(5, 'Euro 2020', 'The Championship od Europian Nations.    ', '2021-07-14', 0x4576656e74496d6167652f6575726f2e6a7067, 'Football', 'Enable'),
(6, 'French Open', 'Glandsum of Tennis Championship.   ', '2021-04-10', 0x4576656e74496d6167652f6672656e63682e6a7067, 'Tennis', 'Enable'),
(7, 'Wimboldon Open', 'Glandsum of Tennis Championship.   ', '2021-07-01', 0x4576656e74496d6167652f77696d626c65646f6e2e6a7067, 'Tennis', 'Enable'),
(8, 'Australian Open', 'Glandsum of Tennis Championship.  ', '2021-01-13', 0x4576656e74496d6167652f6175737472616c69612e6a7067, 'Tennis', 'Disable'),
(9, 'Hockey World Cup', 'Highest Championship of Hockey.   ', '2021-09-21', 0x4576656e74496d6167652f686f636b657977632e6a7067, 'Hockey', 'Disable'),
(10, 'Champions Trophy', 'Hockey Championship   ', '2021-06-02', 0x4576656e74496d6167652f6368616d70696f6e7354726f706879486f636b65792e6a7067, 'Hockey', 'Enable'),
(11, 'Asia Cup Hockey', ' Asian Championship of Hockey   ', '2021-11-25', 0x4576656e74496d6167652f41736961437570486f636b65792e6a7067, 'Hockey', 'Disable'),
(12, 'Womens Hockey World Cup', ' Hokcey Womens World Cup Championship   ', '2021-05-18', 0x4576656e74496d6167652f576f6d656e7348576375702e6a7067, 'Hockey', 'Enable'),
(16, 'UEFA Champions League', 'Championship of Europian Club Football.', '2021-08-10', 0x4576656e74496d6167652f756566612e6a7067, 'Football', 'Disable'),
(17, 'FIFA World Cup', 'Fifa World Cup is the Highest Competition of Football', '2022-06-09', 0x4576656e74496d6167652f666966612e6a7067, 'Football', 'Disable'),
(23, 'ICC Cricket World Cup', ' ICC 50 Over World Cup  ', '2021-07-11', 0x4576656e74496d6167652f637269636b6574776f726c646375702e6a7067, 'Cricket', 'Disable'),
(25, 'T-20 World Cup', 'T-20 Championship of Cricket.    ', '2021-10-15', 0x4576656e74496d6167652f49434354323049576f726c644375702e6a7067, 'Cricket', 'Disable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`Event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `Admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
