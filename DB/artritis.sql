-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2024 a las 22:09:28
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
-- Base de datos: `artritis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_patologicos`
--

CREATE TABLE `antecedentes_patologicos` (
  `tabaquismo` varchar(5) NOT NULL,
  `alcoholismo` varchar(5) NOT NULL,
  `EH` varchar(5) NOT NULL,
  `DM` varchar(5) NOT NULL,
  `HA` varchar(5) NOT NULL,
  `obesidad` varchar(5) NOT NULL,
  `hiperlipidemia` varchar(5) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_patologicos`
--

INSERT INTO `antecedentes_patologicos` (`tabaquismo`, `alcoholismo`, `EH`, `DM`, `HA`, `obesidad`, `hiperlipidemia`, `id_paciente`) VALUES
('Si', 'No', 'Si', 'Si', 'Si', 'Si', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `nombre_paciente` varchar(55) NOT NULL,
  `escolaridad` varchar(55) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `talla` decimal(5,2) NOT NULL,
  `peso` int(11) NOT NULL,
  `imc` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `curp`, `nombre_paciente`, `escolaridad`, `fecha_nacimiento`, `edad`, `sexo`, `talla`, `peso`, `imc`) VALUES
(1, 'CILJ020514HMCHPSA6', 'Chico Lopez Jesus', 'Primaria', '2002-05-14', 21, 'Hombre', 1.40, 55, 28.06);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `plaquetas` int(11) NOT NULL,
  `FRB` int(11) NOT NULL,
  `FRN` varchar(55) NOT NULL,
  `PCR` int(11) NOT NULL,
  `VDB` int(11) NOT NULL,
  `VDN` varchar(55) NOT NULL,
  `AAB` int(11) NOT NULL,
  `AAN` varchar(55) NOT NULL,
  `VSG` int(11) NOT NULL,
  `TGOB` int(11) NOT NULL,
  `TGON` varchar(55) NOT NULL,
  `TGPB` int(11) NOT NULL,
  `TGPN` varchar(55) NOT NULL,
  `glucosa` int(11) NOT NULL,
  `colesterol` int(11) NOT NULL,
  `trigliceridos` int(11) NOT NULL,
  `FIB4` int(11) NOT NULL,
  `resultado_fib` varchar(55) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`plaquetas`, `FRB`, `FRN`, `PCR`, `VDB`, `VDN`, `AAB`, `AAN`, `VSG`, `TGOB`, `TGON`, `TGPB`, `TGPN`, `glucosa`, `colesterol`, `trigliceridos`, `FIB4`, `resultado_fib`, `id_paciente`) VALUES
(5, 5, 'Positivo', 5, 1, 'Normal', 1, 'Negativo', 3, 2, 'Normal', 2, 'Anormal', 2, 4, 1, 14, 'F3-F4 Fibrosis Significativa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `Metrotexate` varchar(20) NOT NULL,
  `ds_metro` int(11) NOT NULL,
  `Leflunomide` varchar(20) NOT NULL,
  `ds_leflu` int(11) NOT NULL,
  `Sulfazalasina` varchar(20) NOT NULL,
  `ds_sulfa` int(11) NOT NULL,
  `Tocoferol` varchar(20) NOT NULL,
  `ds_toco` int(11) NOT NULL,
  `Glucocorticoide` varchar(20) NOT NULL,
  `tx_gluco` varchar(20) NOT NULL,
  `ds_gluco` int(11) NOT NULL,
  `vit_d` varchar(20) NOT NULL,
  `ds_vit` int(11) NOT NULL,
  `Biologico` varchar(20) NOT NULL,
  `tx_bio` varchar(20) NOT NULL,
  `AT` varchar(20) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`Metrotexate`, `ds_metro`, `Leflunomide`, `ds_leflu`, `Sulfazalasina`, `ds_sulfa`, `Tocoferol`, `ds_toco`, `Glucocorticoide`, `tx_gluco`, `ds_gluco`, `vit_d`, `ds_vit`, `Biologico`, `tx_bio`, `AT`, `id_paciente`) VALUES
('Si', 3, 'No', 6, 'Si', 4, 'Si', 6, 'Si', 'Deflazacort', 7, 'Si', 3, 'Si', 'Adalimumab', 'Sin Apego', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usg_clinica`
--

CREATE TABLE `usg_clinica` (
  `USG_hep` varchar(20) NOT NULL,
  `USG_haz` varchar(20) NOT NULL,
  `CE` varchar(20) NOT NULL,
  `sjc28` int(11) NOT NULL,
  `tjc28` int(11) NOT NULL,
  `pga` int(11) NOT NULL,
  `ega` int(11) NOT NULL,
  `CDAI` int(11) NOT NULL,
  `SDAI` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usg_clinica`
--

INSERT INTO `usg_clinica` (`USG_hep`, `USG_haz`, `CE`, `sjc28`, `tjc28`, `pga`, `ega`, `CDAI`, `SDAI`, `id_paciente`) VALUES
('Si', 'Cirrosis hepatica', 'Moderada', 5, 4, 3, 6, 18, 23, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
