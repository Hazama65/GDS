-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2024 a las 22:33:44
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
-- Base de datos: `evc_seguimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barthel`
--

CREATE TABLE `barthel` (
  `seguimineto_barthel` varchar(25) NOT NULL,
  `nivel_barthel` varchar(20) NOT NULL,
  `id_seguimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `barthel`
--

INSERT INTO `barthel` (`seguimineto_barthel`, `nivel_barthel`, `id_seguimiento`) VALUES
('Tres Meses', 'Severa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_seguimiento`
--

CREATE TABLE `datos_seguimiento` (
  `id_seguimiento` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_seg` date NOT NULL,
  `tiempo_seguimiento` varchar(25) NOT NULL,
  `nivel_seguimiento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_seguimiento`
--

INSERT INTO `datos_seguimiento` (`id_seguimiento`, `id_paciente`, `fecha_seg`, `tiempo_seguimiento`, `nivel_seguimiento`) VALUES
(1, 1, '2024-02-12', 'Mes', 'Leve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fim_seguimiento`
--

CREATE TABLE `fim_seguimiento` (
  `fim_inicial` int(11) NOT NULL,
  `nivel_fim` varchar(20) NOT NULL,
  `fim_final` int(11) NOT NULL,
  `id_seguimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fim_seguimiento`
--

INSERT INTO `fim_seguimiento` (`fim_inicial`, `nivel_fim`, `fim_final`, `id_seguimiento`) VALUES
(1, 'Moderado', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nihss_seguimiento`
--

CREATE TABLE `nihss_seguimiento` (
  `nihss_tiempo` varchar(20) NOT NULL,
  `escala` varchar(35) NOT NULL,
  `id_seguimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nihss_seguimiento`
--

INSERT INTO `nihss_seguimiento` (`nihss_tiempo`, `escala`, `id_seguimiento`) VALUES
('Seis Meses', '5-15 Moderado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rankin_seguimiento`
--

CREATE TABLE `rankin_seguimiento` (
  `rankin_tiempo` varchar(20) NOT NULL,
  `valor` varchar(200) NOT NULL,
  `id_seguimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rankin_seguimiento`
--

INSERT INTO `rankin_seguimiento` (`rankin_tiempo`, `valor`, `id_seguimiento`) VALUES
('Un año', '4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barthel`
--
ALTER TABLE `barthel`
  ADD KEY `id_seguimiento` (`id_seguimiento`);

--
-- Indices de la tabla `datos_seguimiento`
--
ALTER TABLE `datos_seguimiento`
  ADD PRIMARY KEY (`id_seguimiento`);

--
-- Indices de la tabla `fim_seguimiento`
--
ALTER TABLE `fim_seguimiento`
  ADD KEY `id_seguimiento` (`id_seguimiento`);

--
-- Indices de la tabla `nihss_seguimiento`
--
ALTER TABLE `nihss_seguimiento`
  ADD KEY `id_seguimiento` (`id_seguimiento`);

--
-- Indices de la tabla `rankin_seguimiento`
--
ALTER TABLE `rankin_seguimiento`
  ADD KEY `id_seguimiento` (`id_seguimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_seguimiento`
--
ALTER TABLE `datos_seguimiento`
  MODIFY `id_seguimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
