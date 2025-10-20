-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2025 at 10:27 AM
-- Server version: 8.4.5
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `harga`, `gambar`, `created_at`) VALUES
(1, 'Avengers: Endgame', 50000, 'https://image.tmdb.org/t/p/w500/ulzhLuWrPK07P1YkdWQLZnQh1JL.jpg', '2025-10-09 06:59:58'),
(2, 'Joker', 45000, 'https://image.tmdb.org/t/p/w500/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg', '2025-10-09 06:59:58'),
(3, 'Spider-Man: No Way Home', 55000, 'https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg', '2025-10-09 06:59:58'),
(4, 'The Batman', 50000, 'https://image.tmdb.org/t/p/w500/74xTEgt7R36Fpooo50r9T25onhq.jpg', '2025-10-09 06:59:58'),
(5, 'Oppenheimer', 60000, 'https://image.tmdb.org/t/p/w500/bafQF7oz7z5xAqYbOGpGpQH3G4G.jpg', '2025-10-09 06:59:58'),
(6, 'Inside Out 2', 40000, 'https://image.tmdb.org/t/p/w500/7BdxZX6Es74oE6dPw3jSy8fM0mI.jpg', '2025-10-09 06:59:58'),
(7, 'Dune: Part Two', 60000, 'https://image.tmdb.org/t/p/w500/8bZ7guF94ZyCzj1M6FzjY5YjSvh.jpg', '2025-10-09 06:59:58'),
(8, 'Interstellar', 55000, 'https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg', '2025-10-09 06:59:58'),
(9, 'Frozen II', 40000, 'https://image.tmdb.org/t/p/w500/pjeMs3yqRmFL3giJy4PMXWZTTPa.jpg', '2025-10-09 06:59:58'),
(10, 'Top Gun: Maverick', 60000, 'https://image.tmdb.org/t/p/w500/62HCnUTziyWcpDaBO2i1DX17ljH.jpg', '2025-10-09 06:59:58'),
(11, 'How To blablabla', 50000, '', '2025-10-09 07:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `film_id` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `email`, `film_id`, `jumlah`, `total`, `created_at`) VALUES
(1, 'Fugit repudian', 'muduwywy@gmail.com', 3, 2, 110000, '2025-10-09 07:36:45'),
(2, 'Ab doloribus se', 'xedak@gmail.com', 11, 2, 100000, '2025-10-09 07:42:42'),
(3, 'Laborum Cupida', 'mubiluzy@gmail.com', 10, 2, 120000, '2025-10-09 08:00:10'),
(4, 'Debitis unde od', 'lolyqeky@gmail.com', 6, 2, 80000, '2025-10-09 08:00:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
