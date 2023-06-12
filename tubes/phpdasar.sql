-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 08:43 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Smartphone'),
(2, 'Komputer'),
(3, 'Games'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`, `id_user`) VALUES
(1, 'test', 'test@mail.com', 'test', 0),
(2, 'test2', 'test2@mail.com', '<h2 style=\"background: #000\"> hahahahah kena tipu </h2>', 0),
(3, 'dasd', 'asdasd@gmail.com', 'asdasdas', 1),
(4, 'tesst', 'test@gmail.com', '12312312', 2);

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `post_id` int NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(20) DEFAULT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`post_id`, `judul`, `deskripsi`, `gambar`, `link`, `id_kategori`) VALUES
(1, 'Redmi Note 10 Pro', 'Xiaomi selalu mengeluarkan smartphone yang memiliki harga yang ...', 'rn10p.jpg', 'artikel', 1),
(2, 'Rekomendasi Laptop 4 jutaan', 'Semakin berkembangnya teknologi informasi dan teknologi ...', 'laptop-1.jpg', 'artikel1', 2),
(3, 'Guardian Tales', 'Guardian Tales adalah game RPG petualangan yang penuh dengan puzzle dan ...', 'gt-1.jpg', 'artikel2', 3),
(4, 'Integrasi Indihome ke Telkomsel', 'PT Telkom Indonesia (Persero) Tbk memperoleh persetujuan ...', 'indihome.jpg', 'artikel3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `level` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  `gambar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`, `gambar`) VALUES
(1, 'admin', 'admin@mail.com', '$2y$10$Rv.lzIeE.abk4sbemoWZ2OMWUj6ez8zw4sWncEOBnx/XxcIkQRNYK', 'admin', 'default.jpg'),
(2, 'dimas', 'dimas@mail.com', '$2y$10$Erfqwp/RsL/k/e3U6u1Co.aBLjyWVQ5dXUP0.sPm04EgyHxEfw1Oe', 'user', 'default.jpg'),
(6, 'user2', 'user2@gmail.com', '$2y$10$W9AeqShtYgh3Sre14.uSDOIvMuScls9kKTD6mQ1ifeXd.zuAX4j9W', 'user', 'default.jpg'),
(7, 'user3', 'user3@gmail.com', '$2y$10$W9AeqShtYgh3Sre14.uSDOIvMuScls9kKTD6mQ1ifeXd.zuAX4j9W', 'user', 'default.jpg'),
(8, 'user4', 'user4@gmail.com', '$2y$10$W9AeqShtYgh3Sre14.uSDOIvMuScls9kKTD6mQ1ifeXd.zuAX4j9W', 'user', 'default.jpg'),
(9, 'user5', 'user5@gmail.com', '$2y$10$W9AeqShtYgh3Sre14.uSDOIvMuScls9kKTD6mQ1ifeXd.zuAX4j9W', 'user', 'default.jpg'),
(10, 'asdasd', 'asd@mail', '$2y$10$LRTqSq2xtg/wb7w7dBjdDezSl3qg/6c7XWGEU/F8fKJUhYDYP88x2', 'user', 'default.jpg'),
(11, 'dimas2', 'dimas2@mail.com', '$2y$10$R/LkbDFxD71bhVcCXcbkuOpNsUbXztrWqVH/3MaX4iGluQ/0DIMT2', 'user', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan` (`id_user`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `postingan` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
