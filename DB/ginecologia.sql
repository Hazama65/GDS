-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2024 a las 16:52:02
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
-- Base de datos: `ginecologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_go`
--

CREATE TABLE `antecedentes_go` (
  `gesta` int(11) NOT NULL,
  `paras` int(11) NOT NULL,
  `abortos` int(11) NOT NULL,
  `embarazos_ecto` int(11) NOT NULL,
  `hijos_vivos` int(11) NOT NULL,
  `FUM` date NOT NULL,
  `fecha_parto` date NOT NULL,
  `sem_gestacion` int(11) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_go`
--

INSERT INTO `antecedentes_go` (`gesta`, `paras`, `abortos`, `embarazos_ecto`, `hijos_vivos`, `FUM`, `fecha_parto`, `sem_gestacion`, `id_GN`) VALUES
(1, 2, 3, 4, 5, '2023-08-10', '2024-05-16', 21, 1),
(1, 6, 4, 5, 2, '2023-11-09', '2024-08-15', 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

CREATE TABLE `datos_generales` (
  `id_GN` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `elabora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_generales`
--

INSERT INTO `datos_generales` (`id_GN`, `fecha`, `elabora`) VALUES
(1, '2024-01-09', 'Ejemplo3'),
(2, '2024-01-10', 'Jesus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `curp` varchar(20) NOT NULL,
  `nombre_paciente` varchar(55) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `covid` varchar(15) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`curp`, `nombre_paciente`, `fecha_nacimiento`, `edad`, `covid`, `id_GN`) VALUES
('CILJ020514HMCHPSA2', 'EXAMPLE5', '2002-05-14', 21, 'Positivo', 1),
('CILJ020514HMCHPSA2', 'JESUS', '2002-05-14', 21, 'Negativo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_triaje`
--

CREATE TABLE `resultados_triaje` (
  `resultado_triage` varchar(20) NOT NULL,
  `destino` varchar(55) NOT NULL,
  `codigo` varchar(55) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultados_triaje`
--

INSERT INTO `resultados_triaje` (`resultado_triage`, `destino`, `codigo`, `id_GN`) VALUES
('Rojo', 'Hospitalización', 'Código Dorado - SARS COV2', 1),
('Rojo', 'Domicilio', 'Código Dorado - Preeclampsia / Eclampsia', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos`
--

CREATE TABLE `signos` (
  `mov_fetales` varchar(20) NOT NULL,
  `sang_vag` varchar(20) NOT NULL,
  `liquido_amniotico` varchar(20) NOT NULL,
  `parto` varchar(20) NOT NULL,
  `pres_fetal` varchar(20) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `signos`
--

INSERT INTO `signos` (`mov_fetales`, `sang_vag`, `liquido_amniotico`, `parto`, `pres_fetal`, `id_GN`) VALUES
('Disminuidos', 'Abundante', 'Presente', 'En expulsivo', 'Partes fetales', 1),
('Presentes', 'Ausente', 'Sospecha', 'Fase latente activa', 'Partes fetales', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos_vitales`
--

CREATE TABLE `signos_vitales` (
  `presion_sis` int(11) NOT NULL,
  `presion_dia` int(11) NOT NULL,
  `frecuencia_card` int(11) NOT NULL,
  `frecuencia_respi` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `frecuencia_card_fet` int(11) NOT NULL,
  `talla` decimal(3,2) NOT NULL,
  `peso` int(11) NOT NULL,
  `imc` decimal(5,2) NOT NULL,
  `resultadoIMC` varchar(25) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `signos_vitales`
--

INSERT INTO `signos_vitales` (`presion_sis`, `presion_dia`, `frecuencia_card`, `frecuencia_respi`, `temperatura`, `frecuencia_card_fet`, `talla`, `peso`, `imc`, `resultadoIMC`, `id_GN`) VALUES
(105, 80, 85, 70, 37, 55, 1.45, 85, 40.43, 'Obesidad grado III', 1),
(145, 55, 86, 41, 37, 140, 1.55, 55, 22.89, 'Peso normal', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sintomas`
--

CREATE TABLE `sintomas` (
  `conciencia` varchar(30) NOT NULL,
  `convulsiones` varchar(30) NOT NULL,
  `vasoespasmo` varchar(30) NOT NULL,
  `epigastrio` varchar(30) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sintomas`
--

INSERT INTO `sintomas` (`conciencia`, `convulsiones`, `vasoespasmo`, `epigastrio`, `id_GN`) VALUES
('Despierta', 'Ausentes', 'Ninguno', 'Ausente', 1),
('Despierta', 'Ausentes', 'Ninguno', 'Presente', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tira_reactiva`
--

CREATE TABLE `tira_reactiva` (
  `proteinas` varchar(30) NOT NULL,
  `leucocitos` varchar(30) NOT NULL,
  `glucosa` varchar(30) NOT NULL,
  `nitritos` varchar(30) NOT NULL,
  `cetonas` varchar(30) NOT NULL,
  `eritrocitos` varchar(30) NOT NULL,
  `id_GN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tira_reactiva`
--

INSERT INTO `tira_reactiva` (`proteinas`, `leucocitos`, `glucosa`, `nitritos`, `cetonas`, `eritrocitos`, `id_GN`) VALUES
('(-)', '500+++', '100mg/dl', 'ROSA1', '15md/dl (+)', '(++)', 1),
('(-)', '15+-', '200mg/dl', 'ROSA2', '15md/dl (+)', '(+++)', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_go`
--
ALTER TABLE `antecedentes_go`
  ADD KEY `id_GN` (`id_GN`);

--
-- Indices de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD PRIMARY KEY (`id_GN`);

--
-- Indices de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD KEY `id_GN` (`id_GN`);

--
-- Indices de la tabla `resultados_triaje`
--
ALTER TABLE `resultados_triaje`
  ADD KEY `id_GN` (`id_GN`);

--
-- Indices de la tabla `signos`
--
ALTER TABLE `signos`
  ADD KEY `id_GN` (`id_GN`);

--
-- Indices de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
  ADD KEY `id_GN` (`id_GN`);

--
-- Indices de la tabla `sintomas`
--
ALTER TABLE `sintomas`
  ADD KEY `id_GN` (`id_GN`);

--
-- Indices de la tabla `tira_reactiva`
--
ALTER TABLE `tira_reactiva`
  ADD KEY `id_GN` (`id_GN`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  MODIFY `id_GN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
