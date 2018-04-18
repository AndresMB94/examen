-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2018 a las 20:32:53
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresarios`
--

CREATE TABLE `empresarios` (
  `id` int(11) NOT NULL,
  `codigo` int(10) DEFAULT NULL,
  `razonsocial` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresarios`
--

INSERT INTO `empresarios` (`id`, `codigo`, `razonsocial`, `nombre`, `pais`, `estado`, `ciudad`, `telefono`, `correo`, `activo`) VALUES
(1, 256530, 'Juan Gonzalez S.A.', 'Juan Gonzalez Perez', 'Mexico', 'Nuevo Leon', 'Monterrey', 5526132, 'jgp25@mail.com', 0),
(2, 856519, 'Comercio Seguro R.L.', 'Angeles Flores Cabrera', 'Mexico', 'Aguascalientes', 'Aguascalientes', 3528675, 'flores639@csmail.com', 1),
(3, 669852, 'E-Store Inc.', 'Samantha Smith', 'Estados Unidos', 'California', 'Santa Ana', 5501009, 'smiths88@email.com', 1),
(4, 128573, 'Luis Ferrer Solis S.A.', 'Luis Ferrer Solis', 'Mexico', 'Tlaxcala', 'Tlaxcala', 4629630, 'luissolis@gmail.com', 0),
(5, 129637, 'Ferreteria Suarez S.A. de C.V.', 'Karla Espinosa Aguirre', 'Mexico', 'Puebla', 'Puebla', 4596237, 'karlaespinosa@suarezmail.com', 0),
(6, 943685, 'El Porvenir', 'Alejandro Dimas Lopez', 'Peru', 'Aqueripa', 'Aqueripa', 1596483, 'adm32@mail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresarios`
--
ALTER TABLE `empresarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresarios`
--
ALTER TABLE `empresarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
