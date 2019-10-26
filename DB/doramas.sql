-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2019 a las 15:31:09
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doramas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `edad` int(11) NOT NULL,
  `producciones` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id_actor`, `nombre`, `edad`, `producciones`) VALUES
(1, 'lelele', 14, 'lo lo lo'),
(3, 'lululu', 21, 'lo lo lo'),
(4, 'lelele', 32, 'lilili'),
(5, 'lalala', 21, 'lo lo lo'),
(6, 'lololo', 21, 'lo lo lo'),
(7, 'lululu', 21, 'lo lo lo'),
(8, 'lelele', 32, 'lilili');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dorama`
--

CREATE TABLE `dorama` (
  `id_dorama` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `genero` varchar(32) NOT NULL,
  `sinopsis` varchar(140) NOT NULL,
  `cant_capitulos` int(11) NOT NULL,
  `en_emision` tinyint(1) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dorama`
--

INSERT INTO `dorama` (`id_dorama`, `nombre`, `genero`, `sinopsis`, `cant_capitulos`, `en_emision`, `id_actor`) VALUES
(6, 'lelele', 'drama', 'lo lo lo', 17, 1, 1),
(8, 'lololo', 'drama', 'lo lo lo', 12, 1, 3),
(9, 'lululu', 'drama', 'lo lo lo', 12, 1, 3),
(10, 'laloli', 'drama', 'lo lo lo', 12, 1, 4),
(11, 'lalala', 'drama', 'lo lo lo', 12, 1, 1),
(12, 'lelele', 'romance', 'lilili', 14, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Indices de la tabla `dorama`
--
ALTER TABLE `dorama`
  ADD PRIMARY KEY (`id_dorama`),
  ADD KEY `fk_dorama_actor` (`id_actor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dorama`
--
ALTER TABLE `dorama`
  MODIFY `id_dorama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dorama`
--
ALTER TABLE `dorama`
  ADD CONSTRAINT `fk_dorama_actor` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
