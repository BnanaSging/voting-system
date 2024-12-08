-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2024 at 11:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Partylist` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `PoliticalPlatform` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `Name`, `Username`, `password`, `Partylist`, `Position`, `birthday`, `PoliticalPlatform`, `Image`) VALUES
(2, 'James Reid', 'jamespogi', '$2y$10$14y1N275lbvzV.g1PAeANOMAG9dvhXwqkeU5i7ecq5rWtamUvncWm', 'Blue', 'President', '2024-12-03', 'naniniwala na ako sa forever', 'JAMES_REID_MINT_PERFUME_HOLIDAYS_2015_(26253072737)_(cropped).jpg'),
(3, 'Alden Richards', 'yayadub', '$2y$10$NDnw1gf4HwB1f.gUYKZqt.lRTlJUmKVIv3fGwcZ6fJHDKn98I8JSG', 'Red', 'President', '2024-12-03', 'ansarap ni maine mendoza', 'aldeneeee.png'),
(4, 'Daniel Padilla', 'dj', '$2y$10$qMCR/M3hJ1i60U3tEShybe7MDcIs7E3gmYZatpPKbPcil3/sZqNgW', 'Blue', 'Vice President', '2024-12-02', 'yummy', 'djj.jpg'),
(5, 'Coco Martin', 'coco', '$2y$10$LjxkiQgRqvK2nQ9YZzr1LerZvlNlmn43U2m4UX1XSBCW.1ls.CWti', 'Red', 'Vice President', '2024-01-29', 'tangol', 'coco.png'),
(6, 'Leni Robredo', 'leni', '$2y$10$Df6DCqJjGxIEXdOe2Q3gnuTWZwqyaKcnwd9HxdiTCIuBF2pANNZQy', 'Blue', 'Muse', '2024-12-02', 'pinkish', 'Leni_Robredo_Portrait.png'),
(7, 'Inday Sara', 'kalbo', '$2y$10$o8N9dkj9G.sZcZOFeTfMHeUXms4/edReDkD4HVDTeNdELLdw2Xi9S', 'Red', 'Muse', '2024-12-02', 'suntukin', 'inday.jpg'),
(8, 'Rodrigo Duterte', 'd30', '$2y$10$T9hM9G9gwzNUGvOohgICneFuPZ5CYxsPlVBrFomfIJdYHRZCnUsgy', 'Blue', 'Escort', '2024-12-04', 'droga', 'duterte.jpg'),
(9, 'Ferdinand Marcos', 'marcs', '$2y$10$0L33S08qycIEIdoawNiPbOR69aCuVjqDWYq076rixOMCsI99eLAb6', 'Red', 'Escort', '2024-12-03', 'nice', 'marcos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `LastName`, `FirstName`, `Email`, `Username`, `password`, `is_admin`) VALUES
(1, 'Estacio', 'vincent', 'vincent@yahoo.com', 'cute', '$2y$10$jnm22/sDv4NrK/NEy5T57uCWc3bSFNw8ZuimTIJT5aRzLRtQKvWx2', 0),
(2, 'Elisan', 'Ella', 'ella@gmail', 'ella', '$2y$10$Vvu8BGkp3cCBc33WS3ln8uOFFfoWFMqECXf5FjkXeFKrMV2saVVZ.', 0),
(3, 'mejia', 'randale', 'randale@gmail.com', 'randale', '$2y$10$qmQvJpubZZlZCP1w/fHC5eOqFVJgJEB0ELghn2F.BZ5MRbSkS9Vr6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
