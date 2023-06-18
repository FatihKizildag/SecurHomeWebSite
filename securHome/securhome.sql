-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Haz 2023, 13:58:26
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
-- Tablo için tablo yapısı `airconditioning`
--

CREATE TABLE `airconditioning` (
  `id` int(11) NOT NULL,
  `baslik` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `aktif` char(1) COLLATE utf8_turkish_ci NOT NULL,
  `modes` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alarms`
--

CREATE TABLE `alarms` (
  `id` int(11) NOT NULL,
  `User Name` text NOT NULL,
  `Error` text NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doors`
--

CREATE TABLE `doors` (
  `id` int(11) NOT NULL,
  `baslik` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `aktif` char(1) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `doors`
--

INSERT INTO `doors` (`id`, `baslik`, `aktif`) VALUES
(1, 'Bedroom', '1'),
(2, 'Balcony', '1'),
(3, 'Garage', '1'),
(4, 'Gate', '0'),
(5, 'Back Yard', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lights`
--

CREATE TABLE `lights` (
  `id` int(11) NOT NULL,
  `baslik` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `aktif` char(1) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `lights`
--

INSERT INTO `lights` (`id`, `baslik`, `aktif`) VALUES
(1, 'Bedroom', '0'),
(2, 'Kitchen', '1'),
(3, 'Balcony', '0'),
(4, 'Roof', '1'),
(5, 'Corridor', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name_surname` text NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name_surname`, `mail`, `password`, `phone`) VALUES
(3, 'admin', 'admin@admin', 'admin', 'xxxxxxx'),
(4, 'fatih kizildag', 'fatih@gmail.com', '112100', '+502143536'),
(5, 'test user', 'test@gmail.com', '123', '012345'),
(48, 'dadad', 'da@fanf', '1233', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alarms`
--
ALTER TABLE `alarms`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `doors`
--
ALTER TABLE `doors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lights`
--
ALTER TABLE `lights`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alarms`
--
ALTER TABLE `alarms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `doors`
--
ALTER TABLE `doors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `lights`
--
ALTER TABLE `lights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
