-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-03-2014 a las 05:25:21
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jhonathan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adelantos`
--

CREATE TABLE IF NOT EXISTS `adelantos` (
  `id_adelanto` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_adelanto` date NOT NULL,
  `ima_adelanto` varchar(32) NOT NULL,
  `des_adelanto` text NOT NULL,
  `dise_id` int(11) NOT NULL,
  `asigna_id` int(11) NOT NULL,
  PRIMARY KEY (`id_adelanto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `adelantos`
--

INSERT INTO `adelantos` (`id_adelanto`, `fecha_adelanto`, `ima_adelanto`, `des_adelanto`, `dise_id`, `asigna_id`) VALUES
(1, '2014-03-18', 'Penguins.jpg', 'Adelanto de Diseño', 1053987005, 5),
(2, '2014-03-18', '3794.jpg', 'Adelanto de Diseño', 1054654007, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE IF NOT EXISTS `asignaciones` (
  `cod_asigna` int(11) NOT NULL AUTO_INCREMENT,
  `solicitud_id` int(11) NOT NULL,
  `dise_id` int(11) NOT NULL,
  `est_asigna` varchar(32) NOT NULL,
  PRIMARY KEY (`cod_asigna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`cod_asigna`, `solicitud_id`, `dise_id`, `est_asigna`) VALUES
(5, 6, 1053987005, 'Asignado'),
(6, 4, 1054654007, 'Asignado'),
(7, 7, 1053987005, 'Asignado'),
(8, 3, 1054654007, 'Asignado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `tip_solicitud` varchar(32) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `ima_solicitud` varchar(32) NOT NULL,
  `des_solicitud` varchar(128) NOT NULL,
  `est_solicitud` varchar(32) NOT NULL,
  PRIMARY KEY (`id_solicitud`),
  KEY `id_solicitud` (`id_solicitud`),
  KEY `tip_solicitud` (`tip_solicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id_solicitud`, `usuario_id`, `tip_solicitud`, `fecha_solicitud`, `ima_solicitud`, `des_solicitud`, `est_solicitud`) VALUES
(1, 1054789000, 'Diseño Web', '2014-02-20', '', 'Diseño de la pagina web de una tienda virtual', 'Pendiente'),
(2, 1053332001, 'Diseño Grafico', '2014-02-19', '', 'Diseño de logo y eslogan de una empresa multinacional', 'Pendiente'),
(3, 1054789000, 'Diseño Web', '2014-02-23', '', 'Diseño de la pagina web de un restaurante', 'Asignado'),
(4, 1053332001, 'Diseño Grafico', '2014-02-24', '', 'Diseño de un logo empresarial', 'Asignado'),
(5, 1054789000, 'Diseño de Interiores', '2014-02-26', '', 'Diseño de amoblado', 'Pendiente'),
(6, 1053332001, 'Diseño Web', '2014-03-07', '', 'Diseño Web de una tienda Online', 'Asignado'),
(7, 1053332001, 'Diseño de Interiores', '2014-03-13', '', 'Remodelacion de habitación principal', 'Asignado'),
(8, 1054789000, 'Diseño Grafico', '2014-03-12', '', 'Realizar eslogan y logo para una empresa de chocolates.', 'Pendiente'),
(9, 1053987250, 'Diseño Grafico', '2014-03-26', '', 'Realizar logo de una empresa de confeccion', 'Aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_us` int(11) NOT NULL AUTO_INCREMENT,
  `document_us` int(11) NOT NULL,
  `firstName_us` varchar(32) NOT NULL,
  `lastName_us` varchar(32) NOT NULL,
  `phone_us` bigint(20) NOT NULL,
  `email_us` varchar(32) NOT NULL,
  `user_us` varchar(32) NOT NULL,
  `password_us` varchar(32) NOT NULL,
  `state_us` varchar(32) NOT NULL,
  `rol_us` varchar(32) NOT NULL,
  PRIMARY KEY (`id_us`),
  KEY `id_us` (`id_us`),
  KEY `user_us` (`user_us`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_us`, `document_us`, `firstName_us`, `lastName_us`, `phone_us`, `email_us`, `user_us`, `password_us`, `state_us`, `rol_us`) VALUES
(1, 1054231065, 'Christian Felipe', 'Buitrago Hoyos', 8752100, 'christian25@misena.edu.co', 'Christian', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(2, 1053987250, 'Sergio Daniel', 'Duque Gutierrez', 8882004, 'checho45@misena.edu.co', 'Sergio', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(3, 1053332001, 'Viviana Carolina', 'Martinez Osorio', 8780030, 'vicamaos@misena.edu.co', 'Viviana', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(4, 1054009789, 'Marcela', 'Sanchez Manrique', 8874530, 'msmanrique@misena.edu.co', 'Marcela', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(5, 1053797940, 'Jhonathan Fernando', 'Beltran Gonzalez', 8902887, 'jfdobg-18@hotmail.com', 'Jonanfer', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Administrador'),
(6, 1053987005, 'Dayana Andrea ', 'Marin Gallego', 8741108, 'dayaan@hotmail.com', 'Dayana', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Diseñador'),
(7, 1060254697, 'Diego Alejandro', 'Hernandez', 8751236, 'dahored@hotmail.com', 'Diego', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Empleado'),
(8, 1054654007, 'Yeny Paola', 'Cardona Marin', 8785420, 'yanypaoc@misena.edu.co', 'Yeny', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Diseñador'),
(9, 1053210060, 'Juan David', 'Rivera Giraldo', 8873800, 'juan_faclo17@hotmail.com', 'Juan', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Empleado'),
(10, 1054789005, 'Yamileth', 'Erazo Becerra', 8874523, 'yamierzo@misena.edu.co', 'Yamileth', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(11, 1054789000, 'Luisa Fernanda', 'Aristizabal Aguirre', 8752564, 'luferaristi@hotmail.com', 'Luisa', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adelantos`
--
ALTER TABLE `adelantos`
  ADD CONSTRAINT `adelantos_ibfk_1` FOREIGN KEY (`id_adelanto`) REFERENCES `solicitudes` (`id_solicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`cod_asigna`) REFERENCES `solicitudes` (`id_solicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `user` (`id_us`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
