-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2015 a las 16:39:44
-- Versión del servidor: 5.5.43-0+deb8u1
-- Versión de PHP: 5.6.7-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `loginweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(10) NOT NULL,
  `cedula` int(30) NOT NULL,
  `realname` text CHARACTER SET utf8 NOT NULL,
  `user` varchar(200) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `pasadmin` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `cedula`, `realname`, `user`, `password`, `email`, `pasadmin`) VALUES
(1, 0, '', 'Rusel Cierto Trinidad', 'demo', 'rciertot@outlook.com.pe', ''),
(2, 0, '', 'RV', '', 'oficina@outlook.com', '123'),
(3, 0, '', 'Jonathan', 'person2015++', 'jmelendez@contactop2p.com', ''),
(5, 0, '', 'jmelendez', '', 'jmelendez@contactop2p.com', 'neptuno++'),
(6, 0, '', 'darkalexve', '123456', 'jmelendez@contactop2p.com', ''),
(8, 0, '', 'arkanderve', 'e10adc3949ba59abbe56e057f20f883e', 'jmelendezp2p@gmail.com', ''),
(9, 0, '', 'sigma', 'e10adc3949ba59abbe56e057f20f883e', 'pperez@contactop2p.com', ''),
(10, 0, '', 'sigma2', 'e10adc3949ba59abbe56e057f20f883e', 'darkalexve@gmail.com', ''),
(11, 0, '', 'sigma3', 'e10adc3949ba59abbe56e057f20f883e', 'jjj@jjj.com', ''),
(12, 20616682, 'Pedro Perez', 'pperez', 'f0d0ccd4e2c631ae28d1c4d3cdb8950c', 'pperez@contactop2p.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
