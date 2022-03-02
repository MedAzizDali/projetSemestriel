-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2022 at 05:54 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'test ', 'test@test.com', 'e40f01afbb1b9ae3dd6747ced5bca532'),
(6, 'aziz123', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'aziz*', '123**@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'fss', 'test@testss.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'baananouaa', 'bananoumohamaaed@live.fr', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'ssdf', 'aa@aa.com', '93046758d21048ae10e9fa249537aa79'),
(11, 'ameny ', 'ameny@kk.tn', 'fcea920f7412b5da7be0cf42b8c93759'),
(12, 'ameny elokb ', 'ameny_elokb@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(13, 'tess ', 'tess@tess.tn', '2d592cd6f6338d99d879cddeb9e51219'),
(14, 'baananouaaaaaa  yessine', 'bananoumohamead@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'help', 'help@meeee.tn', '70873e8580c9900986939611618d7b1e'),
(16, 'fsg', 'fsgg@ii.kk', '25f9e794323b453885f5181f1b624d0b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
