-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2024 a las 22:33:37
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
-- Base de datos: `evc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_evc`
--

CREATE TABLE `codigo_evc` (
  `activacion` varchar(15) NOT NULL,
  `defuncion` varchar(15) NOT NULL,
  `area` varchar(15) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codigo_evc`
--

INSERT INTO `codigo_evc` (`activacion`, `defuncion`, `area`, `id_paciente`) VALUES
('Si', 'Si', 'Hospitalización', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(200) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_sintomas` date NOT NULL,
  `inicio_sintomas` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `nombre_paciente`, `curp`, `fecha_nacimiento`, `sexo`, `edad`, `fecha_sintomas`, `inicio_sintomas`) VALUES
(1, 'CHICO LOPEZ JESUS', 'CILJ020514HMCHPSA2', '2002-05-14', 'Hombre', 21, '2024-02-12', '02:52:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalas`
--

CREATE TABLE `escalas` (
  `df_nivel` varchar(15) NOT NULL,
  `df` varchar(15) NOT NULL,
  `fim` int(11) NOT NULL,
  `barthel` varchar(30) NOT NULL,
  `rankin` varchar(200) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escalas`
--

INSERT INTO `escalas` (`df_nivel`, `df`, `fim`, `barthel`, `rankin`, `id_paciente`) VALUES
('Seleccione', '3 Incapacidad M', 1, '40-55 Dependencia Moderada', '3 Incapacidad Moderada  Requiere alguna ayuda pero capaz de caminar sin ayuda.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factor_riesgo`
--

CREATE TABLE `factor_riesgo` (
  `evc` varchar(5) NOT NULL,
  `hipertension` varchar(5) NOT NULL,
  `diabetes` varchar(5) NOT NULL,
  `tabaquismo` varchar(5) NOT NULL,
  `covid` varchar(5) NOT NULL,
  `hiperlipidemia` varchar(5) NOT NULL,
  `apnea` varchar(5) NOT NULL,
  `enfcardio` varchar(5) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factor_riesgo`
--

INSERT INTO `factor_riesgo` (`evc`, `hipertension`, `diabetes`, `tabaquismo`, `covid`, `hiperlipidemia`, `apnea`, `enfcardio`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fast`
--

CREATE TABLE `fast` (
  `face` varchar(15) NOT NULL,
  `arms` varchar(15) NOT NULL,
  `speech` varchar(15) NOT NULL,
  `time` double(5,2) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fast`
--

INSERT INTO `fast` (`face`, `arms`, `speech`, `time`, `id_paciente`) VALUES
('Negado', 'Negado', 'Si', 9.01, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nihss`
--

CREATE TABLE `nihss` (
  `escala` varchar(55) NOT NULL,
  `trombolisis` varchar(15) NOT NULL,
  `tpa` varchar(15) NOT NULL,
  `sangrado` varchar(15) NOT NULL,
  `nivel` varchar(15) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nihss`
--

INSERT INTO `nihss` (`escala`, `trombolisis`, `tpa`, `sangrado`, `nivel`, `id_paciente`) VALUES
('16-20 Moderado Severo', 'Si', 'Tenecteplasa', 'Si', 'Cerebro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puertas`
--

CREATE TABLE `puertas` (
  `hora_llegada` time NOT NULL,
  `hora_triage` time NOT NULL,
  `puerta_triage` varchar(50) NOT NULL,
  `hora_choque` time NOT NULL,
  `puerta_urgencias` varchar(50) NOT NULL,
  `hora_tac` time NOT NULL,
  `puerta_tac` varchar(50) NOT NULL,
  `hora_em` time NOT NULL,
  `puerta_medicos` varchar(50) NOT NULL,
  `hora_trombo` time NOT NULL,
  `puerta_aguja` varchar(50) NOT NULL,
  `hora_terapia` time NOT NULL,
  `terapia_intensiva` varchar(50) NOT NULL,
  `hora_tac_control` time NOT NULL,
  `tac_control` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puertas`
--

INSERT INTO `puertas` (`hora_llegada`, `hora_triage`, `puerta_triage`, `hora_choque`, `puerta_urgencias`, `hora_tac`, `puerta_tac`, `hora_em`, `puerta_medicos`, `hora_trombo`, `puerta_aguja`, `hora_terapia`, `terapia_intensiva`, `hora_tac_control`, `tac_control`, `id_paciente`) VALUES
('11:53:00', '11:53:00', 'Si', '11:53:00', 'Si', '11:53:00', 'Si', '11:53:00', 'Si', '11:53:00', 'Si', '11:53:00', 'Si', '11:53:00', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rehabilitacion`
--

CREATE TABLE `rehabilitacion` (
  `inicial` varchar(15) NOT NULL,
  `hospitalaria` varchar(15) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rehabilitacion`
--

INSERT INTO `rehabilitacion` (`inicial`, `hospitalaria`, `id_paciente`) VALUES
('Si', 'Negado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuelas`
--

CREATE TABLE `secuelas` (
  `deglucion` varchar(50) NOT NULL,
  `lenguaje` varchar(50) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `extr_sup` varchar(50) NOT NULL,
  `extr_inf` varchar(50) NOT NULL,
  `dolor` varchar(50) NOT NULL,
  `tipo_neuro` varchar(50) NOT NULL,
  `cognitivo` varchar(50) NOT NULL,
  `interconsulta` varchar(50) NOT NULL,
  `neuro` varchar(50) NOT NULL,
  `marcha` varchar(50) NOT NULL,
  `equilibrio` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `secuelas`
--

INSERT INTO `secuelas` (`deglucion`, `lenguaje`, `motor`, `extr_sup`, `extr_inf`, `dolor`, `tipo_neuro`, `cognitivo`, `interconsulta`, `neuro`, `marcha`, `equilibrio`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Bilateral', 'Bilateral', 'Neuropatico', '', 'No', 'No', '2', 'Independiente', '3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codigo_evc`
--
ALTER TABLE `codigo_evc`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `escalas`
--
ALTER TABLE `escalas`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `factor_riesgo`
--
ALTER TABLE `factor_riesgo`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `fast`
--
ALTER TABLE `fast`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `nihss`
--
ALTER TABLE `nihss`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `puertas`
--
ALTER TABLE `puertas`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `rehabilitacion`
--
ALTER TABLE `rehabilitacion`
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
-- Filtros para la tabla `codigo_evc`
--
ALTER TABLE `codigo_evc`
  ADD CONSTRAINT `codigo_evc_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `escalas`
--
ALTER TABLE `escalas`
  ADD CONSTRAINT `escalas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `factor_riesgo`
--
ALTER TABLE `factor_riesgo`
  ADD CONSTRAINT `factor_riesgo_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `fast`
--
ALTER TABLE `fast`
  ADD CONSTRAINT `fast_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `nihss`
--
ALTER TABLE `nihss`
  ADD CONSTRAINT `nihss_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `puertas`
--
ALTER TABLE `puertas`
  ADD CONSTRAINT `puertas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rehabilitacion`
--
ALTER TABLE `rehabilitacion`
  ADD CONSTRAINT `rehabilitacion_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `datos_paciente` (`id_paciente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
