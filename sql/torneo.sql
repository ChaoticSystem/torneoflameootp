-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2022 a las 17:58:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `torneo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nombrereal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombredeinvocador` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `participantes`
--
DELIMITER $$
CREATE TRIGGER `update - insert` BEFORE INSERT ON `participantes` FOR EACH ROW INSERT INTO vs (id1,id2,winid) VALUES ( NEW.nombredeinvocador ,"Ñ","?")
      ON DUPLICATE KEY UPDATE vs.id2=NEW.nombredeinvocador
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vs`
--

CREATE TABLE `vs` (
  `id` int(11) NOT NULL,
  `id1` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id2` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `winid` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombredeinvocador_2` (`nombredeinvocador`),
  ADD KEY `nombredeinvocador` (`nombredeinvocador`);

--
-- Indices de la tabla `vs`
--
ALTER TABLE `vs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id2` (`id2`),
  ADD UNIQUE KEY `id1_3` (`id1`),
  ADD KEY `id1` (`id1`),
  ADD KEY `id1_2` (`id1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vs`
--
ALTER TABLE `vs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
