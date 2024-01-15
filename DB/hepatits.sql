-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 21:31:12
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
-- Base de datos: `hepatits`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--

CREATE TABLE `antecedentes` (
  `hemofilia` varchar(5) DEFAULT NULL,
  `ERC` varchar(5) DEFAULT NULL,
  `trabajadorSalud` varchar(5) DEFAULT NULL,
  `transplante` varchar(5) DEFAULT NULL,
  `cirrosis` varchar(5) DEFAULT NULL,
  `obesidad` varchar(5) DEFAULT NULL,
  `prediabetes` varchar(5) DEFAULT NULL,
  `diabetesMellitus` varchar(5) DEFAULT NULL,
  `hipertencionArt` varchar(5) DEFAULT NULL,
  `alcoholismo` varchar(5) DEFAULT NULL,
  `HB` varchar(5) DEFAULT NULL,
  `ninguno_Ant` varchar(5) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`hemofilia`, `ERC`, `trabajadorSalud`, `transplante`, `cirrosis`, `obesidad`, `prediabetes`, `diabetesMellitus`, `hipertencionArt`, `alcoholismo`, `HB`, `ninguno_Ant`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_clinica`
--

CREATE TABLE `atencion_clinica` (
  `atencion_inicial` date NOT NULL,
  `carga_inicial` date NOT NULL,
  `cargaDX` decimal(5,2) NOT NULL,
  `respuestaViral` varchar(25) NOT NULL,
  `RVS` decimal(5,2) NOT NULL,
  `fechaRVS` date NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atencion_clinica`
--

INSERT INTO `atencion_clinica` (`atencion_inicial`, `carga_inicial`, `cargaDX`, `respuestaViral`, `RVS`, `fechaRVS`, `id_paciente`) VALUES
('2023-11-16', '2023-11-16', 55.00, 'Detectable', 24.00, '2023-11-16', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `defuncion`
--

CREATE TABLE `defuncion` (
  `defuncion_paciente` varchar(15) DEFAULT NULL,
  `causa` varchar(30) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `defuncion`
--

INSERT INTO `defuncion` (`defuncion_paciente`, `causa`, `id_paciente`) VALUES
('Si', 'Normal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factores_riesgo`
--

CREATE TABLE `factores_riesgo` (
  `sinRegistro` varchar(5) DEFAULT NULL,
  `relacionesSex` varchar(5) DEFAULT NULL,
  `transfusiones` varchar(5) DEFAULT NULL,
  `drogasEnd` varchar(5) DEFAULT NULL,
  `piercing` varchar(5) DEFAULT NULL,
  `presidiario` varchar(5) DEFAULT NULL,
  `expresidiario` varchar(5) DEFAULT NULL,
  `situacionCalle` varchar(5) DEFAULT NULL,
  `vih` varchar(5) DEFAULT NULL,
  `hepatitis` varchar(5) DEFAULT NULL,
  `sexoServidoras` varchar(5) DEFAULT NULL,
  `parejasOcasionales` varchar(5) DEFAULT NULL,
  `pacienteToxicomanias` varchar(5) DEFAULT NULL,
  `ninguna` varchar(5) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factores_riesgo`
--

INSERT INTO `factores_riesgo` (`sinRegistro`, `relacionesSex`, `transfusiones`, `drogasEnd`, `piercing`, `presidiario`, `expresidiario`, `situacionCalle`, `vih`, `hepatitis`, `sexoServidoras`, `parejasOcasionales`, `pacienteToxicomanias`, `ninguna`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicehepatico`
--

CREATE TABLE `indicehepatico` (
  `FIB4` decimal(5,2) NOT NULL,
  `FIB4resultado` varchar(35) DEFAULT NULL,
  `NAFLD` decimal(5,2) NOT NULL,
  `NAFLDresultado` varchar(35) DEFAULT NULL,
  `APRI` decimal(5,2) NOT NULL,
  `APRIresultado` varchar(35) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `indicehepatico`
--

INSERT INTO `indicehepatico` (`FIB4`, `FIB4resultado`, `NAFLD`, `NAFLDresultado`, `APRI`, `APRIresultado`, `id_paciente`) VALUES
(1.00, 'F0-F2 Sin Fibrosis Avanzada', 1.00, 'F0-F2 Sin Fibrosis Avanzada', 1.00, 'F0-F2 Sin Fibrosis Avanzada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `AST` int(11) NOT NULL,
  `BUN` int(11) NOT NULL,
  `CREAT` int(11) NOT NULL,
  `ALT` int(11) NOT NULL,
  `plaquetas` int(11) NOT NULL,
  `albumina` int(11) NOT NULL,
  `glucosa` int(11) NOT NULL,
  `HBA1C` int(11) NOT NULL,
  `trigliceridos` int(11) NOT NULL,
  `HDL` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`AST`, `BUN`, `CREAT`, `ALT`, `plaquetas`, `albumina`, `glucosa`, `HBA1C`, `trigliceridos`, `HDL`, `id_paciente`) VALUES
(5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `referencia` varchar(110) DEFAULT NULL,
  `unidad_referencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `curp`, `nombre`, `fecha_nacimiento`, `edad`, `sexo`, `estado_civil`, `estado`, `municipio`, `referencia`, `unidad_referencia`) VALUES
(1, 'CILJ020514HMCHPSA3', 'Hazama1', '2002-05-14', 21, 'Hombre', 'Concubinato', '4', '4003', 'si', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sometria`
--

CREATE TABLE `sometria` (
  `talla` decimal(3,2) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `imc` decimal(5,2) NOT NULL,
  `descripcionimc` varchar(30) NOT NULL,
  `circunferencia` decimal(5,2) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sometria`
--

INSERT INTO `sometria` (`talla`, `peso`, `imc`, `descripcionimc`, `circunferencia`, `id_paciente`) VALUES
(1.45, 55.00, 26.16, 'Sobrepeso', 45.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `tratamiento` varchar(60) DEFAULT NULL,
  `ribavirina` varchar(15) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`fecha_inicio`, `fecha_fin`, `tratamiento`, `ribavirina`, `id_paciente`) VALUES
('2023-11-16', '2023-11-16', 'Peginterferon', 'No', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultrasonidohepatico`
--

CREATE TABLE `ultrasonidohepatico` (
  `ultrasonido` varchar(10) NOT NULL,
  `resultadoUltra` varchar(15) DEFAULT NULL,
  `esteatosis` varchar(50) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ultrasonidohepatico`
--

INSERT INTO `ultrasonidohepatico` (`ultrasonido`, `resultadoUltra`, `esteatosis`, `id_paciente`) VALUES
('Si', 'Esteatosis', 'S2 del 34 al 66', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `atencion_clinica`
--
ALTER TABLE `atencion_clinica`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `defuncion`
--
ALTER TABLE `defuncion`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `factores_riesgo`
--
ALTER TABLE `factores_riesgo`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `indicehepatico`
--
ALTER TABLE `indicehepatico`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`),
  ADD UNIQUE KEY `curp` (`curp`);

--
-- Indices de la tabla `sometria`
--
ALTER TABLE `sometria`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `ultrasonidohepatico`
--
ALTER TABLE `ultrasonidohepatico`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `antecedentes_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `atencion_clinica`
--
ALTER TABLE `atencion_clinica`
  ADD CONSTRAINT `atencion_clinica_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `defuncion`
--
ALTER TABLE `defuncion`
  ADD CONSTRAINT `defuncion_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `factores_riesgo`
--
ALTER TABLE `factores_riesgo`
  ADD CONSTRAINT `factores_riesgo_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `indicehepatico`
--
ALTER TABLE `indicehepatico`
  ADD CONSTRAINT `indicehepatico_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD CONSTRAINT `laboratorio_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `sometria`
--
ALTER TABLE `sometria`
  ADD CONSTRAINT `sometria_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `tratamiento_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `ultrasonidohepatico`
--
ALTER TABLE `ultrasonidohepatico`
  ADD CONSTRAINT `ultrasonidohepatico_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
