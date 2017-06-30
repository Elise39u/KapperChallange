-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2017 om 21:20
-- Serverversie: 5.7.14-log
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapperszaak`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(50) NOT NULL,
  `datum` date NOT NULL,
  `start_tijd` time NOT NULL,
  `eind_tijd` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer` varchar(1024) NOT NULL,
  `gereserveerd` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `agenda`
--

INSERT INTO `agenda` (`id`, `datum`, `start_tijd`, `eind_tijd`, `user_id`, `customer`, `gereserveerd`) VALUES
(3, '2017-08-09', '13:25:01', '13:25:01', 1, '0', ''),
(4, '2017-07-02', '16:12:22', '16:12:22', 1, '', 'Nee'),
(6, '2017-07-27', '07:38:52', '07:38:52', 1, '0', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Kapper'),
(2, 'Klant');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(1245) NOT NULL,
  `adres` varchar(1254) NOT NULL,
  `postcode` varchar(33) NOT NULL,
  `plaats` varchar(128) NOT NULL,
  `telefoon` int(189) NOT NULL,
  `mobiel` int(189) NOT NULL,
  `email` varchar(1289) NOT NULL,
  `password` varchar(1289) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `name`, `adres`, `postcode`, `plaats`, `telefoon`, `mobiel`, `email`, `password`, `role_id`) VALUES
(1, 'justin van de laar', 'Weverstraat 24a', '4204CW', 'Gorinchem', 613122302, 613122302, 'justin555@live.nl', 'b8cd7e718c19fa628db7069ea23e38253198c339abb3922c058ca9d52987e77f', 2),
(3, 'trest', '124', '5678hj', 'Werssast', 954945, 954945, 'test@test.com', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646', 1),
(17, 'Stef Klaas', 'Nieuweggein 23', '4204CW', 'Brabant', 613122302, 613122302, 'KlaasTEST@lok.nl', 'b8cd7e718c19fa628db7069ea23e38253198c339abb3922c058ca9d52987e77f', 1),
(18, 'test', 'test34', '543534', 'Gorinchem', 342423, 4234324, 'test@test.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(19, 'test', 'Weverstraat 24a', '4204CW', 'Gorinchem', 613122302, 613122302, 'justin555@live.nl', 'c8d8457d8e48b773c2490ddc2285813f49e436934ccc8aba9d239120c7ea10c6', 1),
(20, 'test', 'Weverstraat 24a', '4204CW', 'Gorinchem', 613122302, 613122302, 'justin555@live.nl', '79a848b68a04820486525617223c32fd54a92c63a4a18a7b2c7a1b59e55af5b9', 1),
(21, 'justin van de laar', 'Weverstraat 24a', '4204CW', 'Gorinchem', 613122302, 613122302, 'justin555@live.nl', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`) USING BTREE;

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
