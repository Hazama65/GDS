-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 18:18:25
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
-- Base de datos: `hemofilia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `tipohemofilia` varchar(15) NOT NULL,
  `deficienciafactor` varchar(15) DEFAULT NULL,
  `tipoVIII` varchar(15) DEFAULT NULL,
  `tipoIX` varchar(15) DEFAULT NULL,
  `tipoXI` varchar(15) DEFAULT NULL,
  `tipovw` varchar(15) DEFAULT NULL,
  `otrashemofilias` varchar(15) DEFAULT NULL,
  `clasificacionGravedad` varchar(20) NOT NULL,
  `inhibidor` varchar(20) NOT NULL,
  `bajarespuesta` int(11) NOT NULL,
  `altarespuesta` int(11) NOT NULL,
  `artropatiahemolitica` varchar(15) NOT NULL,
  `area_afectada` varchar(15) NOT NULL,
  `sangradosmensuales` int(11) NOT NULL,
  `requierefactor` varchar(15) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clinica`
--

INSERT INTO `clinica` (`tipohemofilia`, `deficienciafactor`, `tipoVIII`, `tipoIX`, `tipoXI`, `tipovw`, `otrashemofilias`, `clasificacionGravedad`, `inhibidor`, `bajarespuesta`, `altarespuesta`, `artropatiahemolitica`, `area_afectada`, `sangradosmensuales`, `requierefactor`, `id_paciente`) VALUES
('Congenita', 'EVW', 'Sin registro', 'Sin registro', 'Sin registro', 'Tipo 2', '', 'Moderado', 'Baja respuesta -5UB', 5, 0, 'No', 'Sin registro', 12, 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(254) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `peso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `nombre_paciente`, `curp`, `fecha_nacimiento`, `edad`, `sexo`, `peso`) VALUES
(1, 'Ejemplo2', 'CILJ020514HMCHPSA5', '2002-05-14', 21, 'Hombre', 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fish`
--

CREATE TABLE `fish` (
  `resultadoFISH` int(11) NOT NULL,
  `comer_aseo` int(11) NOT NULL,
  `bathe` int(11) NOT NULL,
  `vestirse` int(11) NOT NULL,
  `sentar` int(11) NOT NULL,
  `Cunclillas` int(11) NOT NULL,
  `Caminar` int(11) NOT NULL,
  `Correr` int(11) NOT NULL,
  `Subir` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fish`
--

INSERT INTO `fish` (`resultadoFISH`, `comer_aseo`, `bathe`, `vestirse`, `sentar`, `Cunclillas`, `Caminar`, `Correr`, `Subir`, `id_paciente`) VALUES
(5, 1, 2, 3, 1, 2, 1, 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hjhs`
--

CREATE TABLE `hjhs` (
  `puntuacion_HJHS` int(11) NOT NULL,
  `CI_inflamacion` varchar(255) NOT NULL,
  `CI_duracion` varchar(255) NOT NULL,
  `CI_atrofiamuscular` varchar(255) NOT NULL,
  `CI_crepitacion_movimiento` varchar(255) NOT NULL,
  `CI_perdida_flexion` varchar(255) NOT NULL,
  `CI_perdida_extension` varchar(255) NOT NULL,
  `CI_dolor_articular` varchar(255) NOT NULL,
  `CI_fuerza` varchar(255) NOT NULL,
  `CD_inflamacion` varchar(255) NOT NULL,
  `CD_duracion` varchar(255) NOT NULL,
  `CD_atrofiamuscular` varchar(255) NOT NULL,
  `CD_crepitacion_movimiento` varchar(255) NOT NULL,
  `CD_perdida_flexion` varchar(255) NOT NULL,
  `CD_perdida_extension` varchar(255) NOT NULL,
  `CD_dolor_articular` varchar(255) NOT NULL,
  `CD_fuerza` varchar(255) NOT NULL,
  `RI_inflamacion` varchar(255) NOT NULL,
  `RI_duracion` varchar(255) NOT NULL,
  `RI_atrofiamuscular` varchar(255) NOT NULL,
  `RI_crepitacion_movimiento` varchar(255) NOT NULL,
  `RI_perdida_flexion` varchar(255) NOT NULL,
  `RI_perdida_extension` varchar(255) NOT NULL,
  `RI_dolor_articular` varchar(255) NOT NULL,
  `RI_fuerza` varchar(255) NOT NULL,
  `RD_inflamacion` varchar(255) NOT NULL,
  `RD_duracion` varchar(255) NOT NULL,
  `RD_atrofiamuscular` varchar(255) NOT NULL,
  `RD_crepitacion_movimiento` varchar(255) NOT NULL,
  `RD_perdida_flexion` varchar(255) NOT NULL,
  `RD_perdida_extension` varchar(255) NOT NULL,
  `RD_dolor_articular` varchar(255) NOT NULL,
  `RD_fuerza` varchar(255) NOT NULL,
  `TI_inflamacion` varchar(255) NOT NULL,
  `TI_duracion` varchar(255) NOT NULL,
  `TI_atrofiamuscular` varchar(255) NOT NULL,
  `TI_crepitacion_movimiento` varchar(255) NOT NULL,
  `TI_perdida_flexion` varchar(255) NOT NULL,
  `TI_perdida_extension` varchar(255) NOT NULL,
  `TI_dolor_articular` varchar(255) NOT NULL,
  `TI_fuerza` varchar(255) NOT NULL,
  `TD_inflamacion` varchar(255) NOT NULL,
  `TD_duracion` varchar(255) NOT NULL,
  `TD_atrofiamuscular` varchar(255) NOT NULL,
  `TD_crepitacion_movimiento` varchar(255) NOT NULL,
  `TD_perdida_flexion` varchar(255) NOT NULL,
  `TD_perdida_extension` varchar(255) NOT NULL,
  `TD_dolor_articular` varchar(255) NOT NULL,
  `TD_fuerza` varchar(255) NOT NULL,
  `suma_articulaciones` int(11) NOT NULL,
  `marcha_global` varchar(255) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hjhs`
--

INSERT INTO `hjhs` (`puntuacion_HJHS`, `CI_inflamacion`, `CI_duracion`, `CI_atrofiamuscular`, `CI_crepitacion_movimiento`, `CI_perdida_flexion`, `CI_perdida_extension`, `CI_dolor_articular`, `CI_fuerza`, `CD_inflamacion`, `CD_duracion`, `CD_atrofiamuscular`, `CD_crepitacion_movimiento`, `CD_perdida_flexion`, `CD_perdida_extension`, `CD_dolor_articular`, `CD_fuerza`, `RI_inflamacion`, `RI_duracion`, `RI_atrofiamuscular`, `RI_crepitacion_movimiento`, `RI_perdida_flexion`, `RI_perdida_extension`, `RI_dolor_articular`, `RI_fuerza`, `RD_inflamacion`, `RD_duracion`, `RD_atrofiamuscular`, `RD_crepitacion_movimiento`, `RD_perdida_flexion`, `RD_perdida_extension`, `RD_dolor_articular`, `RD_fuerza`, `TI_inflamacion`, `TI_duracion`, `TI_atrofiamuscular`, `TI_crepitacion_movimiento`, `TI_perdida_flexion`, `TI_perdida_extension`, `TI_dolor_articular`, `TI_fuerza`, `TD_inflamacion`, `TD_duracion`, `TD_atrofiamuscular`, `TD_crepitacion_movimiento`, `TD_perdida_flexion`, `TD_perdida_extension`, `TD_dolor_articular`, `TD_fuerza`, `suma_articulaciones`, `marcha_global`, `id_paciente`) VALUES
(74, '1= Leve', '1 => 6 meses', 'NE = No Evaluable', '1 = Leve', '0 = Dentro del Rango', '3 = Perdida de > 10°', '2 = Dolor en el rango de movimiento activo', '2 = dos habilidades no están dentro de los límites normales.', '2= Moderada', '1 => 6 meses', '0 = Ninguna', '2 = Severa', '1 = Prdida de 1 a 4', '2 = Perdida de 5 a 10', '2 = Dolor en el rango de movimiento activo', '1 = una habilidad no está dentro de los limites normales.', '2= Moderada', '1 = > 6 meses', '1 = Leve', '2 = Severa', '2 = Perdida de 5 a 10', '2 = Perdida de 5 a 10', 'NE = No Evaluable', '1 = una habilidad no está dentro de los limites normales.', '2= Moderada', '1 = > 6 meses', 'NE = No Evaluable', '2 = Severa', '1 = Prdida de 1 a 4', '1 = Prdida de 1 a 4', '2 = Dolor en el rango de movimiento activo', '4 = ninguna habilidad está dentro de los limites normales.', '0 = Sin Inflamacion', '0 = 0 < 6 meses', '1 = Leve', '1 = Leve', '3 = Perdida de > 10°', '2 = Perdida de 5 a 10', '2 = Dolor en el rango de movimiento activo', '2 = dos habilidades no están dentro de los límites normales.', '2= Moderada', 'NE = No Evaluable', '2 = Severa', '2 = Severa', '1 = Prdida de 1 a 4', '3 = Perdida de > 10°', '2 = Dolor en el rango de movimiento activo', '2 = dos habilidades no están dentro de los límites normales.', 70, '4 = ninguna habilidad está dentro de los limites normales.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inhibidor`
--

CREATE TABLE `inhibidor` (
  `dosis` int(11) DEFAULT NULL,
  `totalui_total` int(11) DEFAULT NULL,
  `nodosisporsemana_2` int(11) DEFAULT NULL,
  `totaluisemana` int(11) DEFAULT NULL,
  `dosis_desvio` int(11) DEFAULT NULL,
  `totalui_desvio` int(11) DEFAULT NULL,
  `nodosisporsemana_desvio` int(11) DEFAULT NULL,
  `totalui_desvio_semana` int(11) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inhibidor`
--

INSERT INTO `inhibidor` (`dosis`, `totalui_total`, `nodosisporsemana_2`, `totaluisemana`, `dosis_desvio`, `totalui_desvio`, `nodosisporsemana_desvio`, `totalui_desvio_semana`, `id_paciente`) VALUES
(0, 0, 4, 0, 1, 2, 3, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `tipo_tratamiento` varchar(22) NOT NULL,
  `profilaxis` varchar(12) NOT NULL,
  `Profilaxis_Emicizumab` varchar(12) NOT NULL,
  `tipo_Profilaxis` varchar(12) NOT NULL,
  `dosis_tipoProfilaxis` int(11) NOT NULL,
  `totalui` int(11) NOT NULL,
  `nodosisporsemana` int(11) NOT NULL,
  `entrega` varchar(15) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`tipo_tratamiento`, `profilaxis`, `Profilaxis_Emicizumab`, `tipo_Profilaxis`, `dosis_tipoProfilaxis`, `totalui`, `nodosisporsemana`, `entrega`, `id_paciente`) VALUES
('Profilaxis', 'Terciaria', 'Si', 'Terciaria', 1, 2, 4, 'Domiciliaria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento_mensual`
--

CREATE TABLE `tratamiento_mensual` (
  `turo_250` int(11) NOT NULL,
  `turo_500` int(11) NOT NULL,
  `turo_1000` int(11) NOT NULL,
  `octo_250` int(11) NOT NULL,
  `octo_500` int(11) NOT NULL,
  `simo_250` int(11) NOT NULL,
  `simo_500` int(11) NOT NULL,
  `simo_1000` int(11) NOT NULL,
  `factorVIII_250` int(11) NOT NULL,
  `factorVIII_500` int(11) NOT NULL,
  `factorVIIIvW_500` int(11) NOT NULL,
  `factorVIIIvW_1000` int(11) NOT NULL,
  `factorIX_500` int(11) NOT NULL,
  `factorIX_500_2` int(11) NOT NULL,
  `factorIX_600` int(11) NOT NULL,
  `factorIX_1000` int(11) NOT NULL,
  `entrega_2` varchar(15) NOT NULL,
  `fVW_500` int(11) NOT NULL,
  `fvw_100` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamiento_mensual`
--

INSERT INTO `tratamiento_mensual` (`turo_250`, `turo_500`, `turo_1000`, `octo_250`, `octo_500`, `simo_250`, `simo_500`, `simo_1000`, `factorVIII_250`, `factorVIII_500`, `factorVIIIvW_500`, `factorVIIIvW_1000`, `factorIX_500`, `factorIX_500_2`, `factorIX_600`, `factorIX_1000`, `entrega_2`, `fVW_500`, `fvw_100`, `id_paciente`) VALUES
(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, '60 MG', 17, 18, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usg`
--

CREATE TABLE `usg` (
  `USG_6meses` int(11) NOT NULL,
  `6_actividad_inflamatoria` varchar(255) NOT NULL,
  `6_derrame_sinovitis` varchar(255) NOT NULL,
  `6_hipertrofia_sinovial` varchar(255) NOT NULL,
  `6_Cartilago` varchar(255) NOT NULL,
  `6_Hueso` varchar(255) NOT NULL,
  `USG_12meses` int(11) NOT NULL,
  `12_actividad_inflamatoria` varchar(255) NOT NULL,
  `12_derrame_sinovitis` varchar(255) NOT NULL,
  `12_hipertrofia_sinovial` varchar(255) NOT NULL,
  `12_Cartilago` varchar(255) NOT NULL,
  `12_Hueso` varchar(255) NOT NULL,
  `USG_24meses` int(11) NOT NULL,
  `24_actividad_inflamatoria` varchar(255) NOT NULL,
  `24_derrame_sinovitis` varchar(255) NOT NULL,
  `24_hipertrofia_sinovial` varchar(255) NOT NULL,
  `24_Cartilago` varchar(255) NOT NULL,
  `24_Hueso` varchar(255) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usg`
--

INSERT INTO `usg` (`USG_6meses`, `6_actividad_inflamatoria`, `6_derrame_sinovitis`, `6_hipertrofia_sinovial`, `6_Cartilago`, `6_Hueso`, `USG_12meses`, `12_actividad_inflamatoria`, `12_derrame_sinovitis`, `12_hipertrofia_sinovial`, `12_Cartilago`, `12_Hueso`, `USG_24meses`, `24_actividad_inflamatoria`, `24_derrame_sinovitis`, `24_hipertrofia_sinovial`, `24_Cartilago`, `24_Hueso`, `id_paciente`) VALUES
(7, 'Hipertrofia sinovial', 'Moderado', 'Severo', 'Pérdida parcial o completa del cartílago articular ч 50 %', 'Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares', 7, 'Derrame Sinovitis', 'Severo', 'Sin registro', 'Pérdida parcial o completa de > 50%', 'Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares', 7, 'Hipertrofia sinovial', 'Sin registro', 'Severo', 'Pérdida parcial o completa de > 50%', 'Alteracion del hueso subcondral con/sin erosiones y presencia de osteofitos prominentes periarticulares', 1);

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
