-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 21:27:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guardias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

CREATE TABLE `datos_generales` (
  `id_guardia` int(11) NOT NULL,
  `enlace` int(11) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `nivel_academia` varchar(15) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `servicio` varchar(200) NOT NULL,
  `fecha_tramite` date NOT NULL,
  `fecha_suplencia` date NOT NULL,
  `autoriza` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_generales`
--

INSERT INTO `datos_generales` (`id_guardia`, `enlace`, `nombre_completo`, `nivel_academia`, `turno`, `servicio`, `fecha_tramite`, `fecha_suplencia`, `autoriza`) VALUES
(1, 1, 'EJEMPLO', 'Técnico', 'Vespertino', 'Eje2', '2024-02-28', '2024-02-29', 'Eje2'),
(2, 2, 'CHICO LOPEZ JESUS', 'Posgrado', 'Jornada Acumulada', 'EJEMPLO', '2024-02-28', '2024-02-29', 'MEDICO2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD PRIMARY KEY (`id_guardia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  MODIFY `id_guardia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
