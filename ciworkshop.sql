-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 30 Nis 2016, 02:51:27
-- Sunucu sürümü: 5.6.27-log
-- PHP Sürümü: 5.6.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ciworkshop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `general_settings`
--

INSERT INTO `general_settings` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'site_name', 'Workshop Blog'),
(2, 'site_slug', 'Birimiz hepimiz için');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_settings`
--

CREATE TABLE `slider_settings` (
  `id` int(11) NOT NULL,
  `alt` varchar(300) NOT NULL,
  `src` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider_settings`
--

INSERT INTO `slider_settings` (`id`, `alt`, `src`, `link`) VALUES
(1, 'Oturan kızcağız.', 'http://localhost:7070/assets/images/slide1.jpg', 'http://www.google.com'),
(2, 'Havalı kız', 'http://localhost:7070/assets/images/slide2.jpg', 'www.instagram.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider_settings`
--
ALTER TABLE `slider_settings`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `slider_settings`
--
ALTER TABLE `slider_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
