-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2019 at 08:33 AM
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
(15, 'b', 'michelle', 'michelly@gmail.com', '$2y$10$73GSi4c3yD.yQz2NkPq9PeWTBSrfZU0e7jyEkWB5tc0gd2WI3URYa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
