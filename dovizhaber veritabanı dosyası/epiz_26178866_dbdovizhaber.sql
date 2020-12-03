-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql309.epizy.com
-- Üretim Zamanı: 05 Tem 2020, 11:13:04
-- Sunucu sürümü: 5.6.47-87.0
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_26178866_dbdovizhaber`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblhaber`
--

INSERT INTO `tblhaber` (`id`, `resimyol`, `baslik`, `icerik`) VALUES
(40, '2258366_620x349.jpg', 'Merkez bankalari dolar operasyonlarini azaltti ', '<p>Uluslararasi piyasalardaki dolar baskisinin hafiflemesiyle birlikte merkez bankalari&nbsp;dolar operasyonlarini&nbsp;azaltti</p>\r\n'),
(41, 'thumbs_b_c_2d6bcbecf631a2818a4a4897944227b3.jpg', 'ABD de yeni kriz: Madeni para kalmadi ! ', '<p>Karantina sirasinda para dolasimi&nbsp;fazlasiyla yavasladi. Darphane de vir&uuml;se karsi&nbsp;&ouml;nlemler cercevesinde &uuml;retimi durdurunca ABD piyasasinda madeni para kalmadi. Bazi&nbsp;bankalarin elinde sadece hafta sonuna kadar yetecek madeni para bulunuyor.</p>\r\n'),
(42, 'trcjpg.jpg', 'Turkcell yabanci tedarikcilerle anlasmalarini yerel para birimi uzerinden yapacak ', '<p>Turkcell, Cin li telekom&uuml;nikasyon ekipmani&nbsp;&uuml;reticileri ile gelecekteki ticaret anlasmalarini Cin yerel para birimi ile yapma konusunda anlasti.</p>\r\n'),
(43, 'YXoL49TiTEST_IJt_3dyjA.jpg', 'Turk Telekom yerel para ile ticarette ilk adimi atti ', '<p>T&uuml;rk Telekom un ithalat &ouml;demelerinde Cin yuani&nbsp;kullanarak &ouml;nc&uuml;l&uuml;k ettigi uygulama iki &uuml;lke firmalarinin ticaretinde &uuml;c&uuml;nc&uuml; &uuml;lke parasi&nbsp;yerine T&uuml;rk lirasi&nbsp;ve yuanin kullanilmasinin &ouml;n&uuml;ndeki engellerin kalkmis&nbsp;olmasi&nbsp;sonucu gerceklesti.</p>\r\n');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
