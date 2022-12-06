-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 08:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsp-uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `memes`
--

CREATE TABLE `memes` (
  `id` int(11) NOT NULL,
  `url_picture` varchar(700) NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memes`
--

INSERT INTO `memes` (`id`, `url_picture`, `likes`) VALUES
(1, 'https://i.pinimg.com/564x/aa/81/13/aa81136d4c3fe75fd31ae61e639bcedf.jpg', NULL),
(2, 'https://i.pinimg.com/564x/ac/78/4a/ac784adfd60244a60e48ec3732ab147f.jpg', NULL),
(3, 'https://i.pinimg.com/564x/45/66/b7/4566b730ab8f235cd0ceb866184a256b.jpg', NULL),
(4, 'https://i.pinimg.com/564x/60/ae/85/60ae8574e034b475f259098d0d19422b.jpg', NULL),
(5, 'https://i.pinimg.com/564x/c0/1f/b4/c01fb43f5f9973e3d2244a71142ecebe.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meme_user`
--

CREATE TABLE `meme_user` (
  `meme_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `liked` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('160420004', '160420004'),
('160420038', '160420038'),
('160420042', '160420042');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meme_user`
--
ALTER TABLE `meme_user`
  ADD KEY `fk_memeuser_meme_id` (`meme_id`),
  ADD KEY `fk_memeuser_username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memes`
--
ALTER TABLE `memes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meme_user`
--
ALTER TABLE `meme_user`
  ADD CONSTRAINT `fk_memeuser_meme_id` FOREIGN KEY (`meme_id`) REFERENCES `memes` (`id`),
  ADD CONSTRAINT `fk_memeuser_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
