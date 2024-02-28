-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 22:21:52
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
-- Base de datos: `censo_p`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_paciente` varchar(200) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `edad` int(11) NOT NULL,
  `cama` int(11) NOT NULL,
  `cama_movimiento` int(11) DEFAULT NULL,
  `estado_salud` varchar(10) NOT NULL,
  `dx` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `fecha`, `nombre_paciente`, `curp`, `fecha_nacimiento`, `sexo`, `edad`, `cama`, `cama_movimiento`, `estado_salud`, `dx`) VALUES
(1, '2024-02-22', 'CHICO LOPEZ JESUS', 'CILJ020514HMCHPSA2', '2002-05-14', 'Hombre', 21, 150, 175, 'Muy Grave', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_alerte`
--

CREATE TABLE `estado_alerte` (
  `glasgow` int(11) NOT NULL,
  `ramsey` int(11) NOT NULL,
  `act_mot` varchar(50) NOT NULL,
  `signos_v` varchar(50) NOT NULL,
  `pvc` varchar(50) NOT NULL,
  `precaucion_t` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_alerte`
--

INSERT INTO `estado_alerte` (`glasgow`, `ramsey`, `act_mot`, `signos_v`, `pvc`, `precaucion_t`, `id_paciente`) VALUES
(5, 2, '3', 'Seleccione', 'Seleccione', 'Seleccione', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `cateter_c` varchar(50) NOT NULL,
  `cateter_v` varchar(50) NOT NULL,
  `dispositivo_r` varchar(50) NOT NULL,
  `sonda_foley` varchar(50) NOT NULL,
  `sonda_naso` varchar(50) NOT NULL,
  `colostomia` varchar(50) NOT NULL,
  `penrose` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`cateter_c`, `cateter_v`, `dispositivo_r`, `sonda_foley`, `sonda_naso`, `colostomia`, `penrose`, `id_paciente`) VALUES
('Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `dieta` varchar(50) NOT NULL,
  `introvenosa` varchar(50) NOT NULL,
  `infusiones` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`dieta`, `introvenosa`, `infusiones`, `id_paciente`) VALUES
('Seleccione', 'Seleccione', 'Seleccione', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `estado_alerte`
--
ALTER TABLE `estado_alerte`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estado_alerte`
--
ALTER TABLE `estado_alerte`
  ADD CONSTRAINT `estado_alerte_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD CONSTRAINT `herramientas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `tratamiento_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
