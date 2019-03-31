-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2018 a las 23:33:01
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matriculadosciclos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `NOMBRECICLO` varchar(4) DEFAULT NULL,
  `TIPOCICLO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`IDENTIFICADOR`, `NOMBRECICLO`, `TIPOCICLO`) VALUES
(1, 'ASIR', 'SUPERIOR'),
(2, 'DAW', 'SUPERIOR'),
(3, 'SMR', 'MEDIO'),
(4, 'DAM', 'SUPERIOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculados`
--

CREATE TABLE `matriculados` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDOS` varchar(50) DEFAULT NULL,
  `FECHANACIMIENTO` date DEFAULT NULL,
  `MODULO` varchar(20) DEFAULT NULL,
  `CICLOFORMATIVO` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matriculados`
--

INSERT INTO `matriculados` (`IDENTIFICADOR`, `NOMBRE`, `APELLIDOS`, `FECHANACIMIENTO`, `MODULO`, `CICLOFORMATIVO`) VALUES
(1, 'Angel', 'Principal Perez', '2016-02-04', 'ASO', 'ASIR'),
(2, 'PERICO', 'DE LOS PALOTES', '2018-09-10', 'IAW', 'DAW'),
(3, 'FULANO', 'DE TAL', '2018-01-15', 'SRI', 'ASIR'),
(4, 'MENGANITO', 'PEREZ', '2017-09-05', 'EINEM', 'SMR'),
(5, 'ROBERTO', 'SAEZ', '2018-01-22', 'SRI', 'DAM'),
(6, 'CRISTIAN', 'PARDO', '2017-11-13', 'ASGBD', 'ASIR'),
(7, 'PEDRO', 'SANCHEZ SANCHEZ', '2017-04-10', 'SAD', 'ASIR'),
(8, 'FERNANDO', 'ALONSO', '2018-01-15', 'SRI', 'ASIR'),
(9, 'ANDRES', 'INIESTA', '2016-11-22', 'ASGBD', 'DAM'),
(10, 'GOKU', 'KAKAROT', '2016-08-16', 'SAD', 'ASIR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`IDENTIFICADOR`);

--
-- Indices de la tabla `matriculados`
--
ALTER TABLE `matriculados`
  ADD PRIMARY KEY (`IDENTIFICADOR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `IDENTIFICADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `matriculados`
--
ALTER TABLE `matriculados`
  MODIFY `IDENTIFICADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
