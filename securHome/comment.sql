-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2023, 22:22:21
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `securhome`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`name`, `email`, `message`) VALUES
('Fatih', 'fatih@gmail.com', 'That is amazing'),
('Mustafa', 'can@gmail.com', 'I like it!'),
('Ali', 'ali@gmail.com', 'That web page need to be more spesific :('),
('Kevin', 'kevin@gmail.com', 'I will never forget my door open anymore'),
('uras', 'uras@gmail.com', 'testing'),
('asd', 'asdasd@asd', 'test iyi olmuş');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
