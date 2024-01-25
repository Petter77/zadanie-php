-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 25, 2024 at 04:56 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gigaproject`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post`
--

CREATE TABLE `post` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `author` varchar(30) NOT NULL,
  `content` varchar(1025) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `author`, `content`, `date`, `removed`) VALUES
(00001, 'Petter77', 'rgegrergsrgrsergse', '2023-12-13 19:09:19', 0),
(00002, 'test', 'xdd', '2023-12-13 19:32:03', 1),
(00003, 'test', 'xd', '2023-12-13 19:23:07', 1),
(00004, 'test', 'x', '2023-12-13 19:39:07', 1),
(00005, 'test', 'x', '2023-12-13 21:18:53', 1),
(00006, 'test', 'x', '2023-12-13 21:14:12', 1),
(00007, 'test', 'x', '2023-12-13 21:14:23', 1),
(00008, 'test', 'test', '2023-12-13 21:26:13', 1),
(00009, 'test', '', '2023-12-13 22:05:49', 1),
(00010, 'test', '', '2023-12-13 22:05:49', 1),
(00011, 'xdd', 'xd', '2023-12-14 10:10:47', 0),
(00012, 'xddxd', 'xddd', '2023-12-14 10:10:47', 0),
(00013, 'Petter77', 'test', '2023-12-14 10:11:28', 0),
(00014, 'Petter77', 'qwerty', '2023-12-14 10:37:10', 1),
(00015, 'Petter77', 'test', '2023-12-14 10:37:09', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `name`, `lastName`, `date`, `password`) VALUES
(00001, 'test@test.test', 'test', 'test', '', '2002-01-01', 'test'),
(00002, 'ppawlinski77@gmail.com', 'Petter77', 'Petter', '', '2016-01-01', 'test');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
