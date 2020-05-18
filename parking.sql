-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2020 at 08:02 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7288432_car_park`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `NIC` varchar(10) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `Hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`NIC`, `Last`, `Hours`) VALUES
('941472087V', 'DHARMARATHNE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Slot_ID` varchar(4) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `R_Time` datetime NOT NULL,
  `E_Time` datetime NOT NULL,
  `U_Time` datetime DEFAULT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `Type` varchar(20) NOT NULL,
  `Value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`Type`, `Value`) VALUES
('Cash_Per_Hour', '50'),
('ETime', '50'),
('MapH', '512px'),
('MapW', '787px');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `SlotID` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Tp` varchar(10) NOT NULL,
  `Lft` varchar(10) NOT NULL,
  `Deg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`SlotID`, `Type`, `Tp`, `Lft`, `Deg`) VALUES
(1, 'd', '10.95%', '21.52%', '0'),
(2, 'c', '17.89%', '29.82%', '0'),
(3, 'b', '10.95%', '73.14%', '310'),
(4, 'c', '27.37%', '29.82%', '0'),
(5, 'm', '2.76%', '6.39%', '0'),
(5, 'b', '15.79%', '76.93%', '310'),
(6, 'm', '2.74%', '21.66%', '0'),
(6, 'b', '20.84%', '81.01%', '310'),
(7, 'c', '36.84%', '18.28%', '0'),
(7, 'm', '2.74%', '79.61%', '0'),
(8, 'c', '27.58%', '18.28%', '0'),
(8, 'm', '2.76%', '64.50%', '0'),
(9, 'm', '2.74%', '49.93%', '0'),
(9, 'c', '46.11%', '18.28%', '0'),
(10, 'c', '55.37%', '18.28%', '0'),
(10, 'm', '2.74%', '36.29%', '0'),
(11, 'm', '35.83%', '88.12%', '90'),
(11, 'c', '64.63%', '18.14%', '0'),
(12, 'm', '91.73%', '81.74%', '0'),
(12, 'b', '62.80%', '86.72%', '0'),
(13, 'b', '70.08%', '86.72%', '0'),
(13, 'm', '12.60%', '88.12%', '90'),
(14, 'c', '37.68%', '49.51%', '270'),
(14, 'm', '91.37%', '51.34%', '0'),
(15, 'c', '37.68%', '55.70%', '270'),
(15, 'm', '91.37%', '38.12%', '0'),
(16, 'c', '65.05%', '29.40%', '0'),
(16, 'm', '91.37%', '33.33%', '0'),
(17, 'b', '32.87%', '86.72%', '0'),
(17, 'm', '91.37%', '7.03%', '0'),
(18, 'm', '58.07%', '0.13%', '90'),
(18, 'b', '39.79%', '86.78%', '0'),
(19, 'b', '47.44%', '86.72%', '0'),
(19, 'm', '34.84%', '0.13%', '90'),
(20, 'm', '15.16%', '0.13%', '90'),
(21, 'b', '54.72%', '86.59%', '0'),
(22, 'm', '80.71%', '88.12%', '90'),
(23, 'm', '58.07%', '88.12%', '90'),
(24, 'c', '53.89%', '49.51%', '270'),
(24, 'i', '86.74%', '24.89%', '0'),
(25, 'o', '87.37%', '72.86%', '0'),
(27, 'd', '43.58%', '8.02%', '270'),
(27, 'c', '53.68%', '55.84%', '270'),
(28, 'd', '26.74%', '66.24%', '39'),
(29, 'd', '70.11%', '71.03%', '90'),
(32, 'd', '81.47%', '13.08%', '180'),
(34, 'c', '45.89%', '29.68%', '0'),
(35, 'c', '56.00%', '29.54%', '0'),
(36, 'm', '91.34%', '55.43%', '0'),
(37, 'm', '81.50%', '0.13%', '90'),
(38, 'd', '82.32%', '46.98%', '0'),
(39, 'd', '44.42%', '39.52%', '90'),
(40, 'd', '12.00%', '46.69%', '0'),
(36, 'c', '21.26%', '46.87%', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIC` varchar(10) NOT NULL,
  `First` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Cont_No` int(10) NOT NULL,
  `Address` text NOT NULL,
  `Super_ID` varchar(4) DEFAULT '1000',
  `Vehical_No` text NOT NULL,
  `Finger_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIC`, `First`, `Last`, `Password`, `Email`, `Cont_No`, `Address`, `Super_ID`, `Vehical_No`, `Finger_ID`) VALUES
('941390463v', 'Shanika', 'Uminda', '123456', 'shanika199@gmail.com', 758334227, '44,katugasthota ,kandy', '1000', 'XS-1236', ''),
('941472087v', 'nileshana', 'DHARMARATHNE', 'lion', 'nileshanad@sltc.edu.lk', 702083455, '168/1,\r\nGodigamuwa ,\r\nRathnapura.', '1000', 'DC3059', ''),
('943391513v', 'Ishanka', 'Jayawardena', 'charu', 'charuishanka.00@gmail.com', 770835056, '07, alotuwa, hatharaliyadda', '1000', 'Cp JP 8386', ''),
('952021005v', 'Lasitha', 'Jayawa', 'qq', 'un@dd.d.com', 76, '', '1000', '', NULL),
('952021095', 'Lasitha', 'jya', '19360', 'un@h.com', 33, '225', '1000', '55', NULL),
('952021095v', 'Lasitha', 'Jayawardana', '19360', 'lasithaj@sltc.edu.lk', 717378271, 'No 12 , Alotuwa , Hatharaliyadda.', '0', '', ''),
('952021096v', 'lasiya', 'jayaw', '1', 'unlimit@gmail.com', 717378271, 'br', '1000', 'bv 4568|vb - 4566', NULL),
('952421409V', 'Harsha', 'Weerasinghe', '290895', 'harshaw@sltc.edu.lk', 716967450, 'Sirigala,\r\nDambadeniya', '1000', 'PA-0895', ''),
('952762710v', 'Sandaruwan', 'Chathuranga', '6828', 'lionbroh95@gmail.com', 716201368, '298/a/1, Urubokka, Matara.', '1003', '', ''),
('953210770v', 'Mithun', 'Hathurusinghe', '49', 'mithunh@sltc.edu.lk', 770573082, 'No.17/8/1,Horagasmulla,Divulapitiya.', '1000', 'CAT-2008', ''),
('957771055v', 'Prabodha', 'Chandrasekara', 'mukulitha1', 'prabomge@icloud.com', 714615209, '407/1, Bakamoona', '1000', 'CAE- 5986', ''),
('961172195v', 'Sharuka', 'Thirimanne', 'sharuka', 'sharukat@sltc.edu.lk', 712378326, '440/A1,\r\nPulluhena\r\nPamunugama', '1000', 'KD-3423|JD-6347|KK-5346', ''),
('961592500v', 'Chamil Jayasanka', 'Weerasinghe', 'chamil96', 'chamilw@sltc.edu.lk', 715422637, 'No 51,Ranpokuna,Medagoda,Kamburugamuwa', '1000', 'CBC-4708', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Slot_ID`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`Type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `NIC_2` (`NIC`),
  ADD UNIQUE KEY `NIC` (`Email`,`Super_ID`,`Finger_ID`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
