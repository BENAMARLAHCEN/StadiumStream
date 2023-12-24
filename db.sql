-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2023 at 04:14 PM
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
-- Database: `stadiumstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coach_id` int NOT NULL,
  `team_id` int DEFAULT NULL,
  `coach_name` varchar(255) NOT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `experience_years` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` int NOT NULL,
  `home_team_id` int DEFAULT NULL,
  `away_team_id` int DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `goals_home_team` int DEFAULT NULL,
  `goals_away_team` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int NOT NULL,
  `team_id` int DEFAULT NULL,
  `player_id` int DEFAULT NULL,
  `media_type` varchar(50) DEFAULT NULL,
  `media_url` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int NOT NULL,
  `team_id` int DEFAULT NULL,
  `player_name` varchar(255) NOT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `coach_id` int DEFAULT NULL,
  `foundation_year` date DEFAULT NULL,
  `stadium_name` varchar(255) DEFAULT NULL,
  `team_detail` text NOT NULL,
  `logo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `country`, `coach_id`, `foundation_year`, `stadium_name`, `team_detail`, `logo`) VALUES
(6, 'Declan Stevenssdfvb', NULL, NULL, '1977-01-17', 'Daphne Atkinson', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editornnn</p>', ''),
(7, 'Cora Cox', NULL, NULL, '1970-09-22', 'Fitzgerald Miller', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(12, 'Barrett Campbell', NULL, NULL, '1989-01-06', 'Tana Cantrell', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(13, 'Madeline Cline', NULL, NULL, '2014-02-16', 'August Christian', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(14, 'Carly Bailey', NULL, NULL, '1979-06-09', 'Nicholas Guy', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(15, 'Mariko Frost', NULL, NULL, '2015-12-01', 'Guinevere Love', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(16, 'Aimee Love', NULL, NULL, '1994-12-11', 'Orson Hendrix', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(17, 'Zelenia Castaneda', NULL, NULL, '1993-10-06', 'Alma Estrada', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(18, 'Zelenia Castaneda', NULL, NULL, '1993-10-06', 'Alma Estrada', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', ''),
(19, 'Rudyard Arnold', NULL, NULL, '1995-07-08', 'Xaviera Wise', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', '_5f460bb9-d6af-4389-8f78-d179d65ebfab.jpeg'),
(20, 'Melissa Vazquez', NULL, NULL, '2018-09-13', 'Cameron Macias', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', 'lahcen.jpeg'),
(21, 'Sylvester May', NULL, NULL, '1983-05-15', 'Aurora Swanson', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', 'lahcen.jpeg'),
(22, 'Sylvester May', NULL, NULL, '1983-05-15', 'Aurora Swanson', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', 'lahcen.jpeg'),
(23, 'Sylvester May', NULL, NULL, '1983-05-15', 'Aurora Swanson', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', 'lahcen.jpeg'),
(24, 'Sylvester May', NULL, NULL, '1983-05-15', 'Aurora Swanson', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', 'lahcen.jpeg'),
(25, 'Baxter Cox', NULL, NULL, '1981-08-09', 'Herrod Walters', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editor</p>', 'cegedim.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coach_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `home_team_id` (`home_team_id`),
  ADD KEY `away_team_id` (`away_team_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coach_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coaches`
--
ALTER TABLE `coaches`
  ADD CONSTRAINT `coaches_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`home_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`away_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
