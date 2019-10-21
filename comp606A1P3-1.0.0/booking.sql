-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 07:51 AM
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
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminUsers`
--

CREATE TABLE `adminUsers` (
  `id` int(11) NOT NULL,
  `user` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminUsers`
--

INSERT INTO `adminUsers` (`id`, `user`, `pwd`) VALUES
(1, 'admin', '$2y$10$uE/nSEa4sl/vTWkHLmkcr.qJ2.m86AqsPLtTBJFeeBbbPGv2cIrGK');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `res_slot` varchar(8) DEFAULT NULL,
  `res_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_id`, `res_name`, `res_email`, `res_tel`, `res_notes`, `res_date`, `res_slot`, `res_type`) VALUES
(1, 'qqq', 'qqq@gmail.com', '23', 'qqq', '2019-09-25', '8:00 AM', 'sports massage'),
(2, 'sally s', 'sss@gmail.com', '321', '213', '2019-09-26', '1:00 PM', 'Sports massage'),
(3, 'sally s', 'sss@gmail.com', '321', '312', '2019-09-26', '8:00 AM', 'Sports massage'),
(4, 'sally s', 'sss@gmail.com', '123', '231', '2019-09-29', '8:00 AM', 'Sports massage'),
(5, 'sally s', 'sss@gmail.com', '2312', '321312', '2019-09-28', '2:00 PM', 'Tissue Massage'),
(6, 'sally s', 'sss@gmail.com', '43534', '5345', '2019-11-14', '8:00 AM', 'Therapeutic Massage');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `nameLast` varchar(256) NOT NULL,
  `nameFirst` varchar(256) NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `nameLast`, `nameFirst`, `emailUsers`, `pwdUsers`) VALUES
(2, 'b', 'bobby', 'bobbyb@gmail.com', '$2y$10$gFVJC67oRxlMKZB283wuW.uGXs9QbCeEtL.PHwXZ7aYPyMrv8NPXG'),
(3, 'g', 'abi', 'abig@gmail.com', '$2y$10$DSBK/DrjTxdu02Bu2ePXg.vdEJ3bgGm5FFJGkFI3G0HSGhrCD64wy'),
(4, 'gear', 'top', 'topg@gmail.com', '$2y$10$iYTRhmMZaexaKtu80.p4DeWfMhUYQA4DI3ri2jVuTW.WH.QWPwqFy'),
(5, 'americano', 'iced', 'iceda@gmail.com', '$2y$10$2jxouIqc6beHalxiP7ypDuvHfAIo2vvjc7DeUaQItvooqzeJ8B0mG'),
(6, 'gilmour', 'josh', 'joshgil@gmail.com', '$2y$10$8HIgFAtlCHcoKHLKKYj8deqEo/ldgy9cnbqN0j0pCvuJG9j8Osq2G'),
(7, 'co', 'hotel', 'hotel@gmail.com', '$2y$10$Lt3tCV4.oKueBJ74NE6mTOGFtLsFsICtM7ZucLW0kmAcwkM7JSk22'),
(8, 'Wheezer222', 'Carl', 'smolbrainbiy@gmail.com', '$2y$10$CrOuA6X/c6PsaVfz3KA63.8kWxccV/ayxSUqLbxptxt6DkIYC.S1e'),
(9, 'Spinelli', 'Ashley', 'recess@gmail.com', '$2y$10$x3LHyZmQJ2mZEn89RXICOOjHifiyzHbL8p1I5yFHtafjuyHpxyokW'),
(10, 'buyn', 'michelle', 'michelle.buyn@gmail.com', '$2y$10$LBPb9SyrU3HEUr09AaexTuTohuHQV53JCFiP.iI4l3g5Ck1F1nPDq'),
(14, 'brown', 'millie', '11@gmail.com', '$2y$10$MhSsPTGkOEgeJoUtdo5MYueSrvehNyk6bIB29Ua0stvy1pURhoFU6'),
(15, 'b', 'michelle', 'michelly@gmail.com', '$2y$10$73GSi4c3yD.yQz2NkPq9PeWTBSrfZU0e7jyEkWB5tc0gd2WI3URYa'),
(16, 'b', 'michelle', 'qqq@gmail.com', '$2y$10$Byb.PB8RvUzwtDctgx8pV.fBFxDEZH0iI6PPM4SC8JQu/0iMpOtAK'),
(17, 'q', 'q', 'aaa@gmail.com', '$2y$10$RBJogjPy0eEibiYd.RVxWuIOEuHOLidIz1tEYz7ezKTP12X7p.JOq'),
(18, 'bb', 'michelle', 'bb@gmail.com', '$2y$10$fOhgUldsGqsXH1sTAsENPuwscffGaPZx2.1plCWSvbz.Qm0zZ2/km'),
(19, 'wheezer', 'carl', 'zzz@gmail.com', '$2y$10$RH423vfSLTWiM.7aXJE7A.kkm.hZh8sk69IekYS3aXiCXcUWpIrOW'),
(20, 'www', 'www', 'www@gmail.com', '$2y$10$IG/bLVKHhnnicci4mX2aguvdE8Q1OXMLZ5i4ZaL1Ta7oQHX/hOMUm'),
(21, 'a', 'a', 'aa@gmail.com', '$2y$10$I9gKrxVxfrTMFEjh1E84/.ToAFRv6IftuikM28JOJq3kk96XIFv0m'),
(22, 's', 'sally', 'sss@gmail.com', '$2y$10$lxeDX439Zf5pYOy6jjKiM.lW0BUgLSsuL65C/X9NPJL/SWyy8DiYW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminUsers`
--
ALTER TABLE `adminUsers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_email` (`res_email`),
  ADD KEY `res_tel` (`res_tel`),
  ADD KEY `res_date` (`res_date`),
  ADD KEY `res_slot` (`res_slot`),
  ADD KEY `res_type` (`res_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminUsers`
--
ALTER TABLE `adminUsers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
