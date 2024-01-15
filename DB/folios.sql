-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 18:20:59
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
-- Base de datos: `folios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_folio` int(11) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `servicio` varchar(25) NOT NULL,
  `medicoValorador` varchar(75) NOT NULL,
  `mediocoAutorizador` varchar(75) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `diagnostico` varchar(50) NOT NULL,
  `fechaLlegada` date NOT NULL,
  `folio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_folio`, `fechaHora`, `servicio`, `medicoValorador`, `mediocoAutorizador`, `apellidoPaterno`, `apellidoMaterno`, `nombre`, `edad`, `sexo`, `diagnostico`, `fechaLlegada`, `folio`) VALUES
(1, '2023-10-03 14:06:00', '1', '1', '1', '1', '1', '1', 1, 'Hombre', '1', '2023-10-03', '03T14:06102023_11_1'),
(2, '2023-10-03 14:07:00', '1', '1', '2', '2', '2', '2', 2, 'Mujer', '2', '2023-10-03', '03T14:07102023_22_1'),
(3, '2023-10-03 14:08:00', '3', '3', '3', '3', '3', '3', 3, 'Hombre', '3', '2023-10-03', '03T14:08102023_33_3'),
(4, '2023-10-03 14:15:00', '4', '4', '4', '4', '4', '4', 4, 'Hombre', 'CANCER', '2023-10-03', '03T14:15102023_44_4'),
(5, '2023-10-03 14:16:00', '5', '5', '5', '5', '5', '5', 5, 'Hombre', 'CANCER', '2023-10-03', '03T14:16102023_55_5'),
(6, '2023-10-03 14:19:00', '1', '1', '1', '1', '71', '1', 1, 'Hombre', 'CANCER', '2023-10-04', '03T14:19102023_11_1'),
(8, '2023-10-03 14:19:00', '1', '1', '1', '13', '718', '1', 1, 'Hombre', 'CANCER', '2023-10-04', '03T14:19102023_131_1'),
(9, '2023-10-03 14:23:00', '3', '3', '3', '6543', '345', '23456', 2345, 'Hombre', 'CANCER', '2023-10-03', '03T14:23102023_6543234_3'),
(10, '2023-10-03 14:23:00', '3', '3', '3', '697', '345', '23456', 2345, 'Hombre', 'CANCER', '2023-10-03', '03T14:23102023_697234_3'),
(11, '2023-10-03 14:23:00', '3', '3', '3', '69DQWD', '345', '23456', 2345, 'Hombre', 'CANCER', '2023-10-03', '03T14:23102023_69DQWD234_3'),
(12, '2023-10-03 14:25:00', '3', 'CHICO', '3', 'QWDQ', 'DWDQ', 'QWDQW', 0, 'Hombre', 'CANCER DE OJO', '2023-10-26', '03T14:25102023_QWDQQWD_3'),
(13, '2023-10-03 14:25:00', 'QFE', 'FQ3F', 'EFWFC', 'VWV', 'WRV', 'RWRV', 0, 'Hombre', 'VDFVWE', '2023-10-11', '03T14:25102023_VWVRWR_QFE'),
(14, '2023-10-03 14:25:00', 'WEF', 'EWFWE', 'FQE', 'ECVEW', 'VQE', 'VQE', 0, 'Hombre', 'CANCER', '2023-10-19', '03T14:25102023_ECVEWVQE_WEF'),
(15, '2023-10-03 14:28:00', '1', 'D3', 'D3', 'D3', 'D3', 'D3D3', 0, 'Hombre', 'D3', '2023-10-11', '03T14:28102023_D3D3D_1'),
(17, '2023-10-03 14:28:00', 'YBNUIM', 'TVYBUNI', 'CTVYBUN', 'TVYBUN', 'VBNM', 'BNM', 0, 'Hombre', '1', '2023-10-03', '03T14:28102023_TVYBUNBNM_YBNUI'),
(18, '2023-10-03 14:29:00', 'BOUE', 'OIECIO', 'OIENC', 'NCOIE', 'CNOIEN', 'CNOIE', 0, 'Hombre', 'CANCER DE OJO', '2023-10-19', '03T14:29102023_NCOIECNO_BOUE'),
(19, '2023-10-03 15:30:00', 'URGENCIAS', 'NIDIA', 'GASCA', 'OLVERA', 'PEÑA', 'SANDRA GUADALUPE', 30, 'Mujer', 'COLITIS', '2023-10-05', '03T15:30102023_OLVERASAN_URGEN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_folio`),
  ADD UNIQUE KEY `folio` (`folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
