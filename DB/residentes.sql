-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 18:50:49
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
-- Base de datos: `residentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artrocentesis`
--

CREATE TABLE `artrocentesis` (
  `at_intento1` varchar(40) NOT NULL,
  `at_comp1` varchar(40) NOT NULL,
  `at_TpoComp1` varchar(40) NOT NULL,
  `at_otros1` varchar(40) NOT NULL,
  `at_intento2` varchar(40) NOT NULL,
  `at_comp2` varchar(40) NOT NULL,
  `at_TpoComp2` varchar(40) NOT NULL,
  `at_otros2` varchar(40) NOT NULL,
  `at_intento3` varchar(40) NOT NULL,
  `at_comp3` varchar(40) NOT NULL,
  `at_TpoComp3` varchar(40) NOT NULL,
  `at_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artrocentesis`
--

INSERT INTO `artrocentesis` (`at_intento1`, `at_comp1`, `at_TpoComp1`, `at_otros1`, `at_intento2`, `at_comp2`, `at_TpoComp2`, `at_otros2`, `at_intento3`, `at_comp3`, `at_TpoComp3`, `at_otros3`, `id_productividad`) VALUES
('Fallido', 'si', 'Hematoma', '', 'Exitoso', 'si', 'Otros', 'Ejemplo', 'Fallido', 'si', 'Hematoma', '', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspiracion_mo`
--

CREATE TABLE `aspiracion_mo` (
  `mo_intento1` varchar(40) NOT NULL,
  `mo_comp1` varchar(40) NOT NULL,
  `mo_TpoComp1` varchar(40) NOT NULL,
  `mo_otros1` varchar(40) NOT NULL,
  `mo_intento2` varchar(40) NOT NULL,
  `mo_comp2` varchar(40) NOT NULL,
  `mo_TpoComp2` varchar(40) NOT NULL,
  `mo_otros2` varchar(40) NOT NULL,
  `mo_intento3` varchar(40) NOT NULL,
  `mo_comp3` varchar(40) NOT NULL,
  `mo_TpoComp3` varchar(40) NOT NULL,
  `mo_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aspiracion_mo`
--

INSERT INTO `aspiracion_mo` (`mo_intento1`, `mo_comp1`, `mo_TpoComp1`, `mo_otros1`, `mo_intento2`, `mo_comp2`, `mo_TpoComp2`, `mo_otros2`, `mo_intento3`, `mo_comp3`, `mo_TpoComp3`, `mo_otros3`, `id_productividad`) VALUES
('Exitoso', 'si', 'Neuropatia Transitoria', '', 'Exitoso', 'si', 'Otros', 'Ejemplo', 'Fallido', 'si', 'Hemomediastino', '', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biopsia_celular`
--

CREATE TABLE `biopsia_celular` (
  `bc_intento1` varchar(40) NOT NULL,
  `bc_comp1` varchar(40) NOT NULL,
  `bc_TpoComp1` varchar(40) NOT NULL,
  `bc_otros1` varchar(40) NOT NULL,
  `bc_intento2` varchar(40) NOT NULL,
  `bc_comp2` varchar(40) NOT NULL,
  `bc_TpoComp2` varchar(40) NOT NULL,
  `bc_otros2` varchar(40) NOT NULL,
  `bc_intento3` varchar(40) NOT NULL,
  `bc_comp3` varchar(40) NOT NULL,
  `bc_TpoComp3` varchar(40) NOT NULL,
  `bc_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `biopsia_celular`
--

INSERT INTO `biopsia_celular` (`bc_intento1`, `bc_comp1`, `bc_TpoComp1`, `bc_otros1`, `bc_intento2`, `bc_comp2`, `bc_TpoComp2`, `bc_otros2`, `bc_intento3`, `bc_comp3`, `bc_TpoComp3`, `bc_otros3`, `id_productividad`) VALUES
('Exitoso', 'si', 'Lesión Muscular', '', 'Exitoso', 'si', 'Otros', 'Ejemplo', 'Fallido', 'si', 'Sangrado', '', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biopsia_piel`
--

CREATE TABLE `biopsia_piel` (
  `bp_intento1` varchar(40) NOT NULL,
  `bp_comp1` varchar(40) NOT NULL,
  `bp_TpoComp1` varchar(40) NOT NULL,
  `bp_otros1` varchar(40) NOT NULL,
  `bp_intento2` varchar(40) NOT NULL,
  `bp_comp2` varchar(40) NOT NULL,
  `bp_TpoComp2` varchar(40) NOT NULL,
  `bp_otros2` varchar(40) NOT NULL,
  `bp_intento3` varchar(40) NOT NULL,
  `bp_comp3` varchar(40) NOT NULL,
  `bp_TpoComp3` varchar(40) NOT NULL,
  `bp_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `biopsia_piel`
--

INSERT INTO `biopsia_piel` (`bp_intento1`, `bp_comp1`, `bp_TpoComp1`, `bp_otros1`, `bp_intento2`, `bp_comp2`, `bp_TpoComp2`, `bp_otros2`, `bp_intento3`, `bp_comp3`, `bp_TpoComp3`, `bp_otros3`, `id_productividad`) VALUES
('Exitoso', 'si', 'Lesión Muscular', '', 'Fallido', 'si', 'Lesión Muscular', '', 'Fallido', 'si', 'Otros', 'Ejemplo', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biopsia_tiroides`
--

CREATE TABLE `biopsia_tiroides` (
  `bt_intento1` varchar(40) NOT NULL,
  `bt_comp1` varchar(40) NOT NULL,
  `bt_TpoComp1` varchar(40) NOT NULL,
  `bt_otros1` varchar(40) NOT NULL,
  `bt_intento2` varchar(40) NOT NULL,
  `bt_comp2` varchar(40) NOT NULL,
  `bt_TpoComp2` varchar(40) NOT NULL,
  `bt_otros2` varchar(40) NOT NULL,
  `bt_intento3` varchar(40) NOT NULL,
  `bt_comp3` varchar(40) NOT NULL,
  `bt_TpoComp3` varchar(40) NOT NULL,
  `bt_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `biopsia_tiroides`
--

INSERT INTO `biopsia_tiroides` (`bt_intento1`, `bt_comp1`, `bt_TpoComp1`, `bt_otros1`, `bt_intento2`, `bt_comp2`, `bt_TpoComp2`, `bt_otros2`, `bt_intento3`, `bt_comp3`, `bt_TpoComp3`, `bt_otros3`, `id_productividad`) VALUES
('Fallido', 'si', 'Infección', '', 'Exitoso', 'si', 'Otros', 'Ejemplo', 'Exitoso', 'si', 'Punción Vascular', '', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cvc`
--

CREATE TABLE `cvc` (
  `cv_TpoCVC1` varchar(30) NOT NULL,
  `cv_intento1` varchar(30) NOT NULL,
  `cv_comp1` varchar(30) NOT NULL,
  `cv_TpoComp1` varchar(30) NOT NULL,
  `cv_otros1` varchar(30) NOT NULL,
  `cv_TpoCVC2` varchar(30) NOT NULL,
  `cv_intento2` varchar(30) NOT NULL,
  `cv_comp2` varchar(30) NOT NULL,
  `cv_TpoComp2` varchar(30) NOT NULL,
  `cv_otros2` varchar(30) NOT NULL,
  `cv_TpoCVC3` varchar(30) NOT NULL,
  `cv_intento3` varchar(30) NOT NULL,
  `cv_comp3` varchar(30) NOT NULL,
  `cv_TpoComp3` varchar(30) NOT NULL,
  `cv_otros3` varchar(30) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cvc`
--

INSERT INTO `cvc` (`cv_TpoCVC1`, `cv_intento1`, `cv_comp1`, `cv_TpoComp1`, `cv_otros1`, `cv_TpoCVC2`, `cv_intento2`, `cv_comp2`, `cv_TpoComp2`, `cv_otros2`, `cv_TpoCVC3`, `cv_intento3`, `cv_comp3`, `cv_TpoComp3`, `cv_otros3`, `id_productividad`) VALUES
('NIAGARA', 'Exitoso', 'si', 'Neumotórax', '', 'NIAGARA', 'Exitoso', 'si', 'Trombosis', '', 'MAHURKAR', 'Fallido', 'si', 'Otros', 'Ejemplo', 1),
('Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_productividad`
--

CREATE TABLE `datos_productividad` (
  `id_productividad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `residentes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_productividad`
--

INSERT INTO `datos_productividad` (`id_productividad`, `fecha`, `residentes`) VALUES
(1, '2023-10-08', 'ARIAS HUERTA JENNIFERD'),
(2, '2023-10-15', 'PAULINA ORTEGA ITURBIDE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intubacion`
--

CREATE TABLE `intubacion` (
  `ib_intento1` varchar(30) NOT NULL,
  `ib_comp1` varchar(30) NOT NULL,
  `ib_TpoComp1` varchar(30) NOT NULL,
  `ib_otros1` varchar(30) NOT NULL,
  `ib_intento2` varchar(30) NOT NULL,
  `ib_comp2` varchar(30) NOT NULL,
  `ib_TpoComp2` varchar(30) NOT NULL,
  `ib_otros2` varchar(30) NOT NULL,
  `ib_intento3` varchar(30) NOT NULL,
  `ib_comp3` varchar(30) NOT NULL,
  `ib_TpoComp3` varchar(30) NOT NULL,
  `ib_otros3` varchar(30) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `intubacion`
--

INSERT INTO `intubacion` (`ib_intento1`, `ib_comp1`, `ib_TpoComp1`, `ib_otros1`, `ib_intento2`, `ib_comp2`, `ib_TpoComp2`, `ib_otros2`, `ib_intento3`, `ib_comp3`, `ib_TpoComp3`, `ib_otros3`, `id_productividad`) VALUES
('Fallido', 'si', 'Ruptura de Tráquea', '', 'Exitoso', 'si', 'Ruptura de Tráquea', '', 'Exitoso', 'si', 'Otros', 'Ejemplo', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paracentesis`
--

CREATE TABLE `paracentesis` (
  `pt_intento1` varchar(40) NOT NULL,
  `pt_comp1` varchar(40) NOT NULL,
  `pt_TpoComp1` varchar(40) NOT NULL,
  `pt_otros1` varchar(40) NOT NULL,
  `pt_intento2` varchar(40) NOT NULL,
  `pt_comp2` varchar(40) NOT NULL,
  `pt_TpoComp2` varchar(40) NOT NULL,
  `pt_otros2` varchar(40) NOT NULL,
  `pt_intento3` varchar(40) NOT NULL,
  `pt_comp3` varchar(40) NOT NULL,
  `pt_TpoComp3` varchar(40) NOT NULL,
  `pt_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paracentesis`
--

INSERT INTO `paracentesis` (`pt_intento1`, `pt_comp1`, `pt_TpoComp1`, `pt_otros1`, `pt_intento2`, `pt_comp2`, `pt_TpoComp2`, `pt_otros2`, `pt_intento3`, `pt_comp3`, `pt_TpoComp3`, `pt_otros3`, `id_productividad`) VALUES
('Fallido', 'si', 'Hemoperitoneo', '', 'Exitoso', 'si', 'Otros', 'Ejemplo', 'Fallido', 'si', 'Fistula', '', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimientos`
--

CREATE TABLE `procedimientos` (
  `puncionLumbar` int(11) NOT NULL,
  `intubacion` int(11) NOT NULL,
  `cvc` int(11) NOT NULL,
  `parasentesis` int(11) NOT NULL,
  `biopsia_piel` int(11) NOT NULL,
  `biopsia_celular` int(11) NOT NULL,
  `biopsia_tiroides` int(11) NOT NULL,
  `toracosentesis` int(11) NOT NULL,
  `artrocentesis` int(11) NOT NULL,
  `mo` int(11) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procedimientos`
--

INSERT INTO `procedimientos` (`puncionLumbar`, `intubacion`, `cvc`, `parasentesis`, `biopsia_piel`, `biopsia_celular`, `biopsia_tiroides`, `toracosentesis`, `artrocentesis`, `mo`, `id_productividad`) VALUES
(3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puncion_lumbar`
--

CREATE TABLE `puncion_lumbar` (
  `pl_intento1` varchar(30) NOT NULL,
  `pl_comp1` varchar(30) NOT NULL,
  `pl_TpoComp1` varchar(30) NOT NULL,
  `pl_otros1` varchar(30) NOT NULL,
  `pl_intento2` varchar(30) NOT NULL,
  `pl_comp2` varchar(30) NOT NULL,
  `pl_TpoComp2` varchar(30) NOT NULL,
  `pl_otros2` varchar(30) NOT NULL,
  `pl_intento3` varchar(30) NOT NULL,
  `pl_comp3` varchar(30) NOT NULL,
  `pl_TpoComp3` varchar(30) NOT NULL,
  `pl_otros3` varchar(30) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puncion_lumbar`
--

INSERT INTO `puncion_lumbar` (`pl_intento1`, `pl_comp1`, `pl_TpoComp1`, `pl_otros1`, `pl_intento2`, `pl_comp2`, `pl_TpoComp2`, `pl_otros2`, `pl_intento3`, `pl_comp3`, `pl_TpoComp3`, `pl_otros3`, `id_productividad`) VALUES
('Exitoso', 'si', 'Cefalea', '', 'Fallido', 'si', 'otros', 'Ejemplo', 'Exitoso', 'si', 'otros', 'Ejemplo', 1),
('Exitoso', 'si', 'Lesión Neural', '', 'Fallido', 'si', 'otros', 'Ejemplo', 'Exitoso', 'si', 'Dolor transitorio radicular', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `toracocentesis`
--

CREATE TABLE `toracocentesis` (
  `tora_intento1` varchar(40) NOT NULL,
  `tora_comp1` varchar(40) NOT NULL,
  `tora_TpoComp1` varchar(40) NOT NULL,
  `tora_otros1` varchar(40) NOT NULL,
  `tora_intento2` varchar(40) NOT NULL,
  `tora_comp2` varchar(40) NOT NULL,
  `tora_TpoComp2` varchar(40) NOT NULL,
  `tora_otros2` varchar(40) NOT NULL,
  `tora_intento3` varchar(40) NOT NULL,
  `tora_comp3` varchar(40) NOT NULL,
  `tora_TpoComp3` varchar(40) NOT NULL,
  `tora_otros3` varchar(40) NOT NULL,
  `id_productividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `toracocentesis`
--

INSERT INTO `toracocentesis` (`tora_intento1`, `tora_comp1`, `tora_TpoComp1`, `tora_otros1`, `tora_intento2`, `tora_comp2`, `tora_TpoComp2`, `tora_otros2`, `tora_intento3`, `tora_comp3`, `tora_TpoComp3`, `tora_otros3`, `id_productividad`) VALUES
('Exitoso', 'si', 'Punción Visceral', '', 'Fallido', 'si', 'Otros', 'Ejemplo', 'Exitoso', 'si', 'Hemotorax', '', 1),
('Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 'Seleccione', 'Seleccione', 'Seleccione', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_productividad`
--
ALTER TABLE `datos_productividad`
  ADD PRIMARY KEY (`id_productividad`);

--
-- Indices de la tabla `puncion_lumbar`
--
ALTER TABLE `puncion_lumbar`
  ADD KEY `id_productividad` (`id_productividad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_productividad`
--
ALTER TABLE `datos_productividad`
  MODIFY `id_productividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
