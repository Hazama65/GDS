-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 19:25:28
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
-- Base de datos: `lph`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_familiares`
--

CREATE TABLE `antecedentes_familiares` (
  `fisura` varchar(10) NOT NULL,
  `padre` varchar(10) NOT NULL,
  `madre` varchar(10) NOT NULL,
  `abuelo_materno` varchar(10) NOT NULL,
  `abuela_materna` varchar(10) NOT NULL,
  `abuelo_paterno` varchar(10) NOT NULL,
  `abuela_paterna` varchar(10) NOT NULL,
  `no_hermanas` int(11) NOT NULL,
  `no_hermanos` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_familiares`
--

INSERT INTO `antecedentes_familiares` (`fisura`, `padre`, `madre`, `abuelo_materno`, `abuela_materna`, `abuelo_paterno`, `abuela_paterna`, `no_hermanas`, `no_hermanos`, `id_paciente`) VALUES
('Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_natales`
--

CREATE TABLE `antecedentes_natales` (
  `sem_gestacion` int(11) NOT NULL,
  `comp_embarazo` varchar(10) NOT NULL,
  `comp_parto` varchar(10) NOT NULL,
  `tabaquismo` varchar(10) NOT NULL,
  `alcoholismo` varchar(10) NOT NULL,
  `malformaciones` varchar(10) NOT NULL,
  `fisura_embarazo` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_natales`
--

INSERT INTO `antecedentes_natales` (`sem_gestacion`, `comp_embarazo`, `comp_parto`, `tabaquismo`, `alcoholismo`, `malformaciones`, `fisura_embarazo`, `id_paciente`) VALUES
(5, 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_patologicos`
--

CREATE TABLE `antecedentes_patologicos` (
  `alergias` varchar(10) NOT NULL,
  `analgesicos` varchar(10) NOT NULL,
  `anastesicos` varchar(10) NOT NULL,
  `antibioticos` varchar(10) NOT NULL,
  `antiinflamatorios` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_patologicos`
--

INSERT INTO `antecedentes_patologicos` (`alergias`, `analgesicos`, `anastesicos`, `antibioticos`, `antiinflamatorios`, `id_paciente`) VALUES
('Desconoce', 'Negado', 'Negado', 'Negado', 'Negado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `nombre_paciente` varchar(55) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `referencia` varchar(55) NOT NULL,
  `num_telefonico` varchar(12) NOT NULL,
  `escolaridad` varchar(30) NOT NULL,
  `estado_civil` varchar(12) NOT NULL,
  `talla` decimal(5,2) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `imc` decimal(5,2) NOT NULL,
  `resultado_imc` varchar(25) NOT NULL,
  `circunferencia_abdominal` decimal(5,2) NOT NULL,
  `derecho_habiencia` varchar(15) NOT NULL,
  `socioeconomico` varchar(15) NOT NULL,
  `nivel_economico` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `curp`, `nombre_paciente`, `fecha_nacimiento`, `edad`, `sexo`, `estado`, `municipio`, `referencia`, `num_telefonico`, `escolaridad`, `estado_civil`, `talla`, `peso`, `imc`, `resultado_imc`, `circunferencia_abdominal`, `derecho_habiencia`, `socioeconomico`, `nivel_economico`) VALUES
(1, 'CILJ020514HMCHPSA2', 'CHICO LOPEZ JESUS2', '2002-05-14', 21, 'Hombre', 'ejemplo', 'ejemplo', 'Si', '56-1367-4359', 'Secundaria Incompleta', 'Divorciada', 1.68, 67.00, 23.74, 'Peso normal', 44.00, 'No', 'No', 'N6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_a`
--

CREATE TABLE `etapa_a` (
  `a_audiologia` varchar(10) NOT NULL,
  `a_maxilofacial` varchar(10) NOT NULL,
  `a_reconstructiva` varchar(10) NOT NULL,
  `a_neonatologia` varchar(10) NOT NULL,
  `a_ortodoncia` varchar(10) NOT NULL,
  `a_otorrino` varchar(10) NOT NULL,
  `a_protesis_maxilo` varchar(10) NOT NULL,
  `a_psicologia` varchar(10) NOT NULL,
  `a_rehabilitacion` varchar(10) NOT NULL,
  `a_terapia_lenguaje` varchar(10) NOT NULL,
  `a_terapia_fisica` varchar(10) NOT NULL,
  `a_terapia_ocupacional` varchar(10) NOT NULL,
  `a_psicomotriz` varchar(10) NOT NULL,
  `a_curso_induccion` varchar(10) NOT NULL,
  `a_lactancia_materna` varchar(10) NOT NULL,
  `a_estudios_audio` varchar(10) NOT NULL,
  `a_terapia_padres` varchar(10) NOT NULL,
  `a_valoracion_lenguaje` varchar(10) NOT NULL,
  `a_ortopedia` varchar(10) NOT NULL,
  `a_palatoplastia` varchar(10) NOT NULL,
  `a_queiloplastia` varchar(10) NOT NULL,
  `a_estapa_estatus` varchar(12) NOT NULL,
  `a_fecha_cirugia` date NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa_a`
--

INSERT INTO `etapa_a` (`a_audiologia`, `a_maxilofacial`, `a_reconstructiva`, `a_neonatologia`, `a_ortodoncia`, `a_otorrino`, `a_protesis_maxilo`, `a_psicologia`, `a_rehabilitacion`, `a_terapia_lenguaje`, `a_terapia_fisica`, `a_terapia_ocupacional`, `a_psicomotriz`, `a_curso_induccion`, `a_lactancia_materna`, `a_estudios_audio`, `a_terapia_padres`, `a_valoracion_lenguaje`, `a_ortopedia`, `a_palatoplastia`, `a_queiloplastia`, `a_estapa_estatus`, `a_fecha_cirugia`, `id_paciente`) VALUES
('Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'Desconoce', 'No Requiere', '2023-11-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_atencion`
--

CREATE TABLE `etapa_atencion` (
  `fecha_ingreso` date NOT NULL,
  `etapa_atencion` varchar(25) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa_atencion`
--

INSERT INTO `etapa_atencion` (`fecha_ingreso`, `etapa_atencion`, `id_paciente`) VALUES
('2023-10-31', 'Etapa D de 16 a 22 años', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_b`
--

CREATE TABLE `etapa_b` (
  `b_audiologia` varchar(10) NOT NULL,
  `b_maxilofacial` varchar(10) NOT NULL,
  `b_reconstructiva` varchar(10) NOT NULL,
  `b_nutricion` varchar(10) NOT NULL,
  `b_ortodoncia` varchar(10) NOT NULL,
  `b_otorrino` varchar(10) NOT NULL,
  `b_pediatria` varchar(10) NOT NULL,
  `b_psicologia` varchar(10) NOT NULL,
  `b_protesis_maxilo` varchar(10) NOT NULL,
  `b_rehabilitacion` varchar(10) NOT NULL,
  `b_terapia_lenguaje` varchar(10) NOT NULL,
  `b_terapia_fisica` varchar(10) NOT NULL,
  `b_terapia_ocupacional` varchar(10) NOT NULL,
  `b_atencion_psicologia` varchar(10) NOT NULL,
  `b_curso_induccion` varchar(10) NOT NULL,
  `b_estudios_audiologicos` varchar(10) NOT NULL,
  `b_cierre_velar` varchar(10) NOT NULL,
  `b_valoracion_lenguaje` varchar(10) NOT NULL,
  `b_inserto_oseo` varchar(10) NOT NULL,
  `b_ortopedia_maxilar` varchar(10) NOT NULL,
  `b_palatoplastia` varchar(10) NOT NULL,
  `b_queiloplastia` varchar(10) NOT NULL,
  `b_etapa_estatus` varchar(12) NOT NULL,
  `b_fecha_cirugia` date NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa_b`
--

INSERT INTO `etapa_b` (`b_audiologia`, `b_maxilofacial`, `b_reconstructiva`, `b_nutricion`, `b_ortodoncia`, `b_otorrino`, `b_pediatria`, `b_psicologia`, `b_protesis_maxilo`, `b_rehabilitacion`, `b_terapia_lenguaje`, `b_terapia_fisica`, `b_terapia_ocupacional`, `b_atencion_psicologia`, `b_curso_induccion`, `b_estudios_audiologicos`, `b_cierre_velar`, `b_valoracion_lenguaje`, `b_inserto_oseo`, `b_ortopedia_maxilar`, `b_palatoplastia`, `b_queiloplastia`, `b_etapa_estatus`, `b_fecha_cirugia`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Realizado', '2023-11-06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_c`
--

CREATE TABLE `etapa_c` (
  `c_audiologia` varchar(12) NOT NULL,
  `c_maxilofacial` varchar(12) NOT NULL,
  `c_cirugia_recontructiva` varchar(12) NOT NULL,
  `c_nutricion` varchar(12) NOT NULL,
  `c_ortodoncia` varchar(12) NOT NULL,
  `c_otorrino` varchar(12) NOT NULL,
  `c_pediatria` varchar(12) NOT NULL,
  `c_psicologia` varchar(12) NOT NULL,
  `c_protesis_maxilo` varchar(12) NOT NULL,
  `c_rehabilitacion` varchar(12) NOT NULL,
  `c_terapia_leguaje` varchar(12) NOT NULL,
  `c_terapia_fisica` varchar(12) NOT NULL,
  `c_terapia_ocupacional` varchar(12) NOT NULL,
  `c_atencion_psicologica` varchar(12) NOT NULL,
  `c_curso_induccion` varchar(12) NOT NULL,
  `c_estudio_audiologicos` varchar(12) NOT NULL,
  `c_cierre_veral` varchar(12) NOT NULL,
  `c_valoracion_lenguaje` varchar(12) NOT NULL,
  `c_inserto_oseo` varchar(12) NOT NULL,
  `c_ortodoncia_tratamiento` varchar(12) NOT NULL,
  `c_ortopedia_maxilar` varchar(12) NOT NULL,
  `c_otras_plastias` varchar(12) NOT NULL,
  `c_palatoplastia` varchar(12) NOT NULL,
  `c_queiloplastia` varchar(12) NOT NULL,
  `c_etapa_estatus` varchar(12) NOT NULL,
  `c_fecha_cirugia` date NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa_c`
--

INSERT INTO `etapa_c` (`c_audiologia`, `c_maxilofacial`, `c_cirugia_recontructiva`, `c_nutricion`, `c_ortodoncia`, `c_otorrino`, `c_pediatria`, `c_psicologia`, `c_protesis_maxilo`, `c_rehabilitacion`, `c_terapia_leguaje`, `c_terapia_fisica`, `c_terapia_ocupacional`, `c_atencion_psicologica`, `c_curso_induccion`, `c_estudio_audiologicos`, `c_cierre_veral`, `c_valoracion_lenguaje`, `c_inserto_oseo`, `c_ortodoncia_tratamiento`, `c_ortopedia_maxilar`, `c_otras_plastias`, `c_palatoplastia`, `c_queiloplastia`, `c_etapa_estatus`, `c_fecha_cirugia`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Sin registro', '2023-11-19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_d`
--

CREATE TABLE `etapa_d` (
  `d_audiologia` varchar(12) NOT NULL,
  `d_maxilofacial` varchar(12) NOT NULL,
  `d_cirugia_recontructiva` varchar(12) NOT NULL,
  `d_nutricion` varchar(12) NOT NULL,
  `d_ortodoncia` varchar(12) NOT NULL,
  `d_otorrino` varchar(12) NOT NULL,
  `d_pediatria` varchar(12) NOT NULL,
  `d_psicologia` varchar(12) NOT NULL,
  `d_protesis_maxilo` varchar(12) NOT NULL,
  `d_rehabilitacion` varchar(12) NOT NULL,
  `d_terapia_lenguaje` varchar(12) NOT NULL,
  `d_terapia_fisica` varchar(12) NOT NULL,
  `d_terapia_ocupacional` varchar(12) NOT NULL,
  `d_atencion_psicologica` varchar(12) NOT NULL,
  `d_curso_induccion` varchar(12) NOT NULL,
  `d_estudios_audiologicos` varchar(12) NOT NULL,
  `d_valoracion_lenguaje` varchar(12) NOT NULL,
  `d_ortagnatica` varchar(12) NOT NULL,
  `d_inserto_oseo` varchar(12) NOT NULL,
  `d_ortodoncia_tratamiento` varchar(12) NOT NULL,
  `d_ortopedia_maxilar` varchar(12) NOT NULL,
  `d_otras_plastias` varchar(12) NOT NULL,
  `d_palatoplastias` varchar(12) NOT NULL,
  `d_queiloplastia` varchar(12) NOT NULL,
  `d_rinoplastia` varchar(12) NOT NULL,
  `d_etapa_estatus` varchar(12) NOT NULL,
  `d_etapa_fecha` date NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa_d`
--

INSERT INTO `etapa_d` (`d_audiologia`, `d_maxilofacial`, `d_cirugia_recontructiva`, `d_nutricion`, `d_ortodoncia`, `d_otorrino`, `d_pediatria`, `d_psicologia`, `d_protesis_maxilo`, `d_rehabilitacion`, `d_terapia_lenguaje`, `d_terapia_fisica`, `d_terapia_ocupacional`, `d_atencion_psicologica`, `d_curso_induccion`, `d_estudios_audiologicos`, `d_valoracion_lenguaje`, `d_ortagnatica`, `d_inserto_oseo`, `d_ortodoncia_tratamiento`, `d_ortopedia_maxilar`, `d_otras_plastias`, `d_palatoplastias`, `d_queiloplastia`, `d_rinoplastia`, `d_etapa_estatus`, `d_etapa_fecha`, `id_paciente`) VALUES
('Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Sin registro', '2023-05-14', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisura`
--

CREATE TABLE `fisura` (
  `fisura_or` varchar(12) NOT NULL,
  `labio_dcho` varchar(12) NOT NULL,
  `labio_izdo` varchar(12) NOT NULL,
  `alveolo_dcho` varchar(12) NOT NULL,
  `alveolo_izdo` varchar(12) NOT NULL,
  `paladar_duro` varchar(12) NOT NULL,
  `velo_paladar` varchar(12) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fisura`
--

INSERT INTO `fisura` (`fisura_or`, `labio_dcho`, `labio_izdo`, `alveolo_dcho`, `alveolo_izdo`, `paladar_duro`, `velo_paladar`, `id_paciente`) VALUES
('Desconoce', 'Submucoso', 'Submucoso', 'Submucoso', 'Submucoso', 'Submucoso', 'Submucoso', 1);

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
