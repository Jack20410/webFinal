-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 10:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_movie_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `alt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `img_path`, `alt`) VALUES
(1, '/webfinal/assets/images/Carousel/carousel1.jpeg', 'first page'),
(2, '/webfinal/assets/images/Carousel/carousel2.jpg', 'second page'),
(3, '/webfinal/assets/images/Carousel/doraemon.jpg', 'third page');

-- --------------------------------------------------------

--
-- Table structure for table `film_available`
--

CREATE TABLE `film_available` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `timeline` varchar(50) NOT NULL,
  `trailer` varchar(225) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_available`
--

INSERT INTO `film_available` (`id`, `name`, `genre`, `age`, `sub`, `release_date`, `timeline`, `trailer`, `image`) VALUES
(1, 'VÂY HÃM: KẺ TRỪNG PHẠT', 'Action/Adventure/SF Korea', '18.png', 'vietsub', '24/04/2024', '109 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202404/11402_301_100001.mp4', 'vay-ham.png'),
(2, 'LUYỆN NGẢI: CÔ HỒN DÃ QUỶ', 'Thriller/Criminal/Horror Thailand', '18.png', 'vietsub', '17/05/2024', '103 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202405/11462_301_100001.mp4', 'co-hon-da-quy.png'),
(3, 'MÈO MẬP MANG 10 MẠNG', 'Animation USA', 'p.png', 'vietsub', '26/04/2024', '88 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202403/11434_301_100001.mp4', 'meo-map-mang-10-mang.jpg'),
(4, 'HAIKYU: TRẬN CHIẾN BÃI PHẾ LIỆU', 'Animation Japan', 'p.png', 'vietsub', '15/05/2024', '85 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202405/11461_301_100001.mp4', 'haikyu.png'),
(5, 'DORAEMON: NOBITA VÀ BẢN GIAO HƯỞNG ĐỊA CẦU', 'Animation Japan', 'p.png', 'vietsub', '24/05/2024', '115 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202405/11421_301_100001.mp4', 'doraemon.png'),
(6, 'NGÔI ĐỀN KỲ QUÁI 4', 'Thriller/Criminal/Horror Thailand', '16.png', 'vietsub', '27/05/2024', '111 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202404/11411_301_100001.mp4', 'ngoi-den-ky-quai.jpg'),
(7, 'LẬT MẶT 7: MỘT ĐIỀU ƯỚC', 'Drama Vietnam', '13.png', 'vietsub', '24/04/2024', '138 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202403/11399_301_100001.mp4', 'lat-mat-7.png'),
(8, 'PANDA ĐẠI NÁO LÃNH ĐỊA VUA SƯ TỬ', 'Animation USA', 'p.png', 'vietsub', '03/05/2024', '88 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202404/11423_301_100002.mp4', 'panda-dai-nao-loan-lanh-dia-vua-su-tu.jpg'),
(9, 'FURIOSA: CÂU CHUYỆN TỪ MAX ĐIÊN', 'Action/Adventure/SF USA', '18.png', 'vietsub', '22/05/2024', '148 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202405/11360_301_100002.mp4', 'furiosa.jpg'),
(10, 'NHỮNG NGƯỜI BẠN TƯỞNG TƯỢNG', 'Animation USA', 'p.png', 'vietsub', '17/05/2024', '104 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202402/11387_301_100001.mp4', 'nhung-nguoi-ban-tuong-tuong.png'),
(11, 'HÀNH TINH KHỈ: VƯƠNG QUỐC MỚI', 'Action/Adventure/SF England', '13.png', 'vietsub', '10/05/2024', '144 minutes ', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202405/11395_301_100001.mp4', 'hanh-tinh-khi-vuong-quoc-moi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `film_upcoming`
--

CREATE TABLE `film_upcoming` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `timeline` varchar(50) NOT NULL,
  `trailer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_upcoming`
--

INSERT INTO `film_upcoming` (`id`, `name`, `genre`, `age`, `release_date`, `timeline`, `trailer`) VALUES
(1, 'GARFIELD: MÈO BÉO SIÊU QUẬY', 'Animation USA', 'Under 13 needs to watch with a parent', '2024-05-31', '101 minutes', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202405/11349_301_100001.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film_available`
--
ALTER TABLE `film_available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film_upcoming`
--
ALTER TABLE `film_upcoming`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `film_available`
--
ALTER TABLE `film_available`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `film_upcoming`
--
ALTER TABLE `film_upcoming`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
