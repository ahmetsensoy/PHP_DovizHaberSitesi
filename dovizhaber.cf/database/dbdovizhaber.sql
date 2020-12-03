-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 Haz 2020, 19:31:48
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dbdovizhaber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblhaber`
--

CREATE TABLE `tblhaber` (
  `id` int(11) NOT NULL,
  `resimyol` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `baslik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblhaber`
--

INSERT INTO `tblhaber` (`id`, `resimyol`, `baslik`, `icerik`) VALUES
(24, '1.jpg', 'Turkcell yabancı tedarikçilerle anlaşmalarını yerel para birimi üzerinden yapacak ', 'Turkcell, Çinli telekomünikasyon ekipmanı üreticileri ile gelecekteki ticaret anlaşmalarını Çin yerel para birimi ile yapma konusunda anlaştı.'),
(26, '2258366_620x349.jpg', 'Merkez bankaları dolar operasyonlarını azalttı ', '<p>Uluslararası piyasalardaki dolar baskısının hafiflemesiyle birlikte merkez bankaları dolar operasyonlarını azalttı</p>\r\n'),
(31, '2258875_620x349.jpg', 'qwer ', '<p>qwer</p>\r\n'),
(32, 'thumbs_b_c_2d6bcbecf631a2818a4a4897944227b3.jpg', '111 ', '<p>1111</p>\r\n'),
(33, 'wp-1.jpg', '222 ', '<p>222</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tblhaber`
--
ALTER TABLE `tblhaber`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tblhaber`
--
ALTER TABLE `tblhaber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
