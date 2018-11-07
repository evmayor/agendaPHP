-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-10-2018 a las 04:30:57
-- Versión del servidor: 5.5.13
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `curso_id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_nombre` varchar(200) NOT NULL,
  `curso_dia` varchar(100) DEFAULT NULL,
  `curso_hora_inicio` varchar(100) DEFAULT NULL,
  `curso_tipo` varchar(50) NOT NULL,
  `curso_fecha` date DEFAULT NULL,
  `curso_activo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`curso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`curso_id`, `curso_nombre`, `curso_dia`, `curso_hora_inicio`, `curso_tipo`, `curso_fecha`, `curso_activo`) VALUES
(1, 'MONGO', 'TUESDAY', '15:00', '1', NULL, '0'),
(2, 'CORRER', '', '06:00', '0', '2018-09-25', '0'),
(3, 'ASP MVC', 'MONDAY', '18:59', '1', NULL, '1'),
(4, 'ANGULAR', 'MONDAY', '18:58', '1', NULL, '1'),
(5, 'ICPNA-EXAM', '', '19:29', '0', '2018-09-24', '1'),
(6, 'LEER', NULL, '10:00', '0', '2011-08-19', '0'),
(7, 'DJANGO', 'MONDAY', '19:00', '1', NULL, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
