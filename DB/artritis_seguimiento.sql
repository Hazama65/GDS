-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2024 a las 22:09:32
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
-- Base de datos: `artritis_seguimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente_seg` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_seg` date NOT NULL,
  `curp` varchar(20) NOT NULL,
  `talla` decimal(5,2) NOT NULL,
  `peso` int(11) NOT NULL,
  `imc` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente_seg`, `id_paciente`, `fecha_seg`, `curp`, `talla`, `peso`, `imc`) VALUES
(1, 1, '2024-04-10', 'CILJ020514HMCHPSA6', 1.78, 45, 14.20);

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
  `id_paciente_seg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`plaquetas`, `FRB`, `FRN`, `PCR`, `VDB`, `VDN`, `AAB`, `AAN`, `VSG`, `TGOB`, `TGON`, `TGPB`, `TGPN`, `glucosa`, `colesterol`, `trigliceridos`, `FIB4`, `resultado_fib`, `id_paciente_seg`) VALUES
(1, 2, 'Negativo', 3, 4, 'Deficiente', 5, 'Positivo', 6, 7, 'Normal', 8, 'Anormal', 9, 10, 11, 12, 'F3-F4 Fibrosis Significativa', 1);

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
  `id_paciente_seg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`Metrotexate`, `ds_metro`, `Leflunomide`, `ds_leflu`, `Sulfazalasina`, `ds_sulfa`, `Tocoferol`, `ds_toco`, `Glucocorticoide`, `tx_gluco`, `ds_gluco`, `vit_d`, `ds_vit`, `Biologico`, `tx_bio`, `AT`, `id_paciente_seg`) VALUES
('Si', 1, 'Si', 2, 'Si', 3, 'Si', 4, 'Si', 'Prednisona', 5, 'Si', 6, 'Si', 'Abatacept', 'Total', 1);

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
  `id_paciente_seg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usg_clinica`
--

INSERT INTO `usg_clinica` (`USG_hep`, `USG_haz`, `CE`, `sjc28`, `tjc28`, `pga`, `ega`, `CDAI`, `SDAI`, `id_paciente_seg`) VALUES
('Si', 'Cirrosis hepatica', 'Leve', 1, 2, 3, 4, 10, 13, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente_seg`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id_paciente_seg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
