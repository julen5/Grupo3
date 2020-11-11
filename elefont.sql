-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2020 a las 11:28:21
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elefont`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
--

CREATE TABLE `dietas` (
  `id` int(11) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `continente` varchar(200) NOT NULL,
  `gastos` int(200) NOT NULL,
  `medio_transporte` varchar(200) NOT NULL,
  `peaje` int(6) NOT NULL,
  `parking` int(200) NOT NULL,
  `ticket` int(200) NOT NULL,
  `otros_conceptos` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dietas`
--

INSERT INTO `dietas` (`id`, `pais`, `ciudad`, `fecha_inicio`, `fecha_fin`, `continente`, `gastos`, `medio_transporte`, `peaje`, `parking`, `ticket`, `otros_conceptos`) VALUES
(1, '', '', '0000-00-00', '0000-00-00', '', 0, '', 0, 0, 0, ''),
(2, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(3, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(4, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(5, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(6, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(7, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(8, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(9, '1', 'Mondragón', '2020-10-28', '2020-10-30', '', 0, '', 0, 0, 0, ''),
(10, 'España', 'Durango', '2020-10-09', '2020-11-28', '', 0, '', 0, 0, 0, ''),
(11, 'España', 'Durango', '2020-10-09', '2020-10-28', 'Europa', 0, '', 0, 0, 0, ''),
(12, 'España', 'Durango', '2020-10-09', '2020-10-28', 'Europa', 0, '', 0, 0, 0, ''),
(13, 'España', 'Durango', '2020-10-09', '2020-10-28', 'Europa', 0, '', 0, 0, 0, ''),
(14, 'España', 'Durango', '2020-10-26', '2020-10-30', 'Europa', 0, '', 0, 0, 0, ''),
(15, 'España', 'Durango', '2020-10-26', '2020-10-30', 'Europa', 0, '', 0, 0, 0, ''),
(16, 'ehpaña', 'madrid', '2020-10-26', '2020-10-30', 'Asia', 400, '', 0, 0, 0, ''),
(17, 'España', 'Mondragón', '2020-11-02', '2020-11-08', 'Europa', 360, '', 0, 0, 0, ''),
(18, 'ehpaña', 'madrid', '2020-10-26', '2020-10-30', 'Asia', 400, '', 0, 0, 0, ''),
(19, 'España', 'Durango', '2020-10-26', '2020-11-08', 'Europa', 780, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE `gestion` (
  `id` int(200) NOT NULL,
  `horas` int(2) NOT NULL,
  `nombre_proyecto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`id`, `horas`, `nombre_proyecto`) VALUES
(1, 14, ''),
(2, 14, ''),
(3, 15, 'AAA'),
(4, 9, 'b'),
(5, 10, 'f'),
(6, 12, 'e'),
(7, 12, ''),
(8, 9, ''),
(9, 6, 'sdfg'),
(10, 6, 'dfgh'),
(11, 8, 'dsfgfg'),
(12, 12, 'KJHGKJH');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dietas`
--
ALTER TABLE `dietas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `gestion`
--
ALTER TABLE `gestion`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
