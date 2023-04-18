-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 أبريل 2023 الساعة 22:42
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1-male,2-female'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `gender`) VALUES
('rewaa jamal hamdan', 'admin@gmail.com', '$2y$10$ySD/AUJp9i/KgjMS1iwDAePEJZksYoudUamcV5FzH27', 0),
('rewaa jamal hamdan', 'admin@gmail.com', '$2y$10$ZNGO//Cv3CpkE/quZq5rq.zuqHwu7Ogc4E8cBxNBEFY', 0),
('rt', 'hgf@rfb.n', '$2y$10$xKsImlIP3yztp3a0RnIxI.4bIHTjhYuXHvicueNn5.G', 0),
('rt', 'hgf@rfb.n', '$2y$10$IFKTj9wocxTgVLC3DupMMepsaBFNPsgGh0v6Zfghq9L', 2),
('rewaa', 'rewaajamal3@gmail.com', '$2y$10$y6ltpwnI0UUkJjaV.YK3D.On9KTLN/C4VMTUmMOW895', 0),
('rewaa', 'rewaajamal3@gmail.com', '$2y$10$w68gRpM57lBjMkbn9qm//OhTFCACSfrqx9Lb8ZPXzli', 0),
('rewaa', 'rewaajamal3@gmail.com', '$2y$10$PXjxK7HFKJ7llxILYkDbyOmKI1RYiGoEhuCGGBiVz4g', 0),
('<script>rewaa</script>', 'rewaajamal3@gmail.com', '$2y$10$V14r5MtTv9mbfAwXITFQyuSFpWcSERmPrv4PTLUYLID', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
