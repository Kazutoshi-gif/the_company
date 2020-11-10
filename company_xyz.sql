-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 09:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'scott', 'walker', 'scott12', '$2y$10$AtmmpyKgBAl3Hr8ZRyVkHuVp2q42HKjInqUYpTOEQJ/HMn3JJdcwq'),
(21, 'suzuki', 'damo', 'suzuki12', '$2y$10$m65Zk/Ef1OPVK.f.BnFI4.xGVbOf4nW.sF./DbyvW3pfkf/ASABau'),
(22, 'ian', 'curtis', 'ian12', '$2y$10$vXDUEzjWsFMhX/dyphZ0Fea/7azQG8WhXb10FFGstpA6OjaEnPKUG'),
(23, 'Johnny', 'greenwood', 'johnny12', '$2y$10$rJC6ZSnpQx86bRZIiF89q.4Hq28dIykHiaheFeBHLRgBrIhMJcrUC'),
(24, 'Thomas', 'Yorke', 'Thomas12', '$2y$10$QAvc2OaIUtnoYqi7jK45j.FLl2e/9Q5aGEdDBQj4Hfe01QvJbLbj.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
