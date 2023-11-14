-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2023 a las 18:38:52
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
-- Base de datos: `diabetes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antihipertensivos`
--

CREATE TABLE `antihipertensivos` (
  `antihipertensivos` varchar(10) NOT NULL,
  `IECAS` varchar(12) NOT NULL,
  `ARAII` varchar(13) NOT NULL,
  `IR` varchar(10) NOT NULL,
  `calcioantagonistas` varchar(12) NOT NULL,
  `betabloqueadores` varchar(12) NOT NULL,
  `DT` varchar(20) NOT NULL,
  `alfabloqueadores` varchar(12) NOT NULL,
  `espironolactoma` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antihipertensivos`
--

INSERT INTO `antihipertensivos` (`antihipertensivos`, `IECAS`, `ARAII`, `IR`, `calcioantagonistas`, `betabloqueadores`, `DT`, `alfabloqueadores`, `espironolactoma`, `id_paciente`) VALUES
('Negado', 'Otros', 'Otros', 'Negado', 'Otros', 'Otros', 'Otros', 'Otros', 'Otros', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comorbilidades`
--

CREATE TABLE `comorbilidades` (
  `EHGNA` varchar(20) NOT NULL,
  `Child_Pugh` varchar(5) NOT NULL,
  `dislipidemia` varchar(25) NOT NULL,
  `distiroidismo` varchar(18) NOT NULL,
  `cancer` varchar(15) NOT NULL,
  `insuficiencia_cardiaca` varchar(15) NOT NULL,
  `disritmias_cardiacas` varchar(15) NOT NULL,
  `osteoporosis` varchar(15) NOT NULL,
  `gota` varchar(15) NOT NULL,
  `LES` varchar(15) NOT NULL,
  `artritis_reumatoide` varchar(15) NOT NULL,
  `SC` varchar(15) NOT NULL,
  `tipo_SC` varchar(12) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comorbilidades`
--

INSERT INTO `comorbilidades` (`EHGNA`, `Child_Pugh`, `dislipidemia`, `distiroidismo`, `cancer`, `insuficiencia_cardiaca`, `disritmias_cardiacas`, `osteoporosis`, `gota`, `LES`, `artritis_reumatoide`, `SC`, `tipo_SC`, `id_paciente`) VALUES
('Esteatosis', 'A', 'Hipertrigliceridemia', 'Hipotiroidismo', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Exogeno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complicaciones`
--

CREATE TABLE `complicaciones` (
  `retinopatia` varchar(40) NOT NULL,
  `ceguera` varchar(10) NOT NULL,
  `nefropatia` varchar(40) NOT NULL,
  `neuropatia` varchar(35) NOT NULL,
  `polineuropatia` varchar(10) NOT NULL,
  `Simetrica_Distal` varchar(10) NOT NULL,
  `Pie_Charcot` varchar(10) NOT NULL,
  `neuropatia_gastro` varchar(10) NOT NULL,
  `neuropatia_genito` varchar(10) NOT NULL,
  `neuropatia_cardio` varchar(10) NOT NULL,
  `CI` varchar(10) NOT NULL,
  `amputacion` varchar(25) NOT NULL,
  `amputaciones_dedos` varchar(12) NOT NULL,
  `Mano_dedos` varchar(12) NOT NULL,
  `Pies_dedos` varchar(12) NOT NULL,
  `amputaciones_transmetatarsiana` varchar(12) NOT NULL,
  `lateralidad_Transmetatarsiana` varchar(12) NOT NULL,
  `amputaciones_infracondilea` varchar(12) NOT NULL,
  `lateralidad_Infracondilea` varchar(12) NOT NULL,
  `amputaciones_Supracondilea` varchar(12) NOT NULL,
  `lateralidad_Supracondilea` varchar(12) NOT NULL,
  `EVCI` varchar(10) NOT NULL,
  `IAP` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `complicaciones`
--

INSERT INTO `complicaciones` (`retinopatia`, `ceguera`, `nefropatia`, `neuropatia`, `polineuropatia`, `Simetrica_Distal`, `Pie_Charcot`, `neuropatia_gastro`, `neuropatia_genito`, `neuropatia_cardio`, `CI`, `amputacion`, `amputaciones_dedos`, `Mano_dedos`, `Pies_dedos`, `amputaciones_transmetatarsiana`, `lateralidad_Transmetatarsiana`, `amputaciones_infracondilea`, `lateralidad_Infracondilea`, `amputaciones_Supracondilea`, `lateralidad_Supracondilea`, `EVCI`, `IAP`, `id_paciente`) VALUES
('Edema Macular de significancia clínica', 'Negado', 'G4 15-29 Descenso severo', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Bilateral', 'Bilateral', 'Negado', 'Bilateral', 'Negado', 'Bilateral', 'Negado', 'Bilateral', 'Negado', 'Negado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `escolaridad` varchar(30) NOT NULL,
  `estadoCivil` varchar(25) NOT NULL,
  `estado` varchar(55) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `talla` decimal(3,2) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `imc` decimal(5,2) NOT NULL,
  `resultado_imc` varchar(30) NOT NULL,
  `circunferencia_abdominal` decimal(5,2) NOT NULL,
  `derechoAbiencia` varchar(10) NOT NULL,
  `estudio_socioEconomico` varchar(10) NOT NULL,
  `nivel_economico` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `curp`, `nombre`, `fecha_nacimiento`, `edad`, `sexo`, `escolaridad`, `estadoCivil`, `estado`, `municipio`, `referencia`, `talla`, `peso`, `imc`, `resultado_imc`, `circunferencia_abdominal`, `derechoAbiencia`, `estudio_socioEconomico`, `nivel_economico`) VALUES
(1, 'CILJ020514HMCHPSA3', 'CHICO LOPEZ JESUS2', '2002-05-14', 21, 'Hombre', 'Doctorado Incompleto', 'Separada', 'estado de mexico2', 'Ixtapaluca2', 'frente a una tienda2', 1.72, 55.00, 17.36, 'Bajo peso', 55.00, 'No', 'No', 'Nx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diabetes_mellitus`
--

CREATE TABLE `diabetes_mellitus` (
  `diabetes_mellitus_estado` varchar(11) NOT NULL,
  `padre_dm` varchar(11) NOT NULL,
  `madre_dm` varchar(11) NOT NULL,
  `abuelo_materno_dm` varchar(11) NOT NULL,
  `abuela_materna_dm` varchar(11) NOT NULL,
  `abuelo_paterno_dm` varchar(11) NOT NULL,
  `abuela_paterna_dm` varchar(11) NOT NULL,
  `no_hermanas_dm` varchar(11) NOT NULL,
  `no_hermanos_dm` varchar(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `diabetes_mellitus`
--

INSERT INTO `diabetes_mellitus` (`diabetes_mellitus_estado`, `padre_dm`, `madre_dm`, `abuelo_materno_dm`, `abuela_materna_dm`, `abuelo_paterno_dm`, `abuela_paterna_dm`, `no_hermanas_dm`, `no_hermanos_dm`, `id_paciente`) VALUES
('Si', 'Tipo 1', 'Tipo 1', 'Tipo 1', 'Tipo 1', 'Tipo 1', 'Tipo 1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dislipidemia`
--

CREATE TABLE `dislipidemia` (
  `dislipidemia_estado` varchar(11) NOT NULL,
  `hipertrigliceridemia` varchar(11) NOT NULL,
  `padre_htg` varchar(11) NOT NULL,
  `madre_htg` varchar(11) NOT NULL,
  `abuelo_materno_htg` varchar(11) NOT NULL,
  `abuela_materna_htg` varchar(11) NOT NULL,
  `abuelo_paterno_htg` varchar(11) NOT NULL,
  `abuela_paterna_htg` varchar(11) NOT NULL,
  `no_hermanas_htg` varchar(11) NOT NULL,
  `no_hermanos_htg` varchar(11) NOT NULL,
  `hipercolesterolemia_estado` varchar(11) NOT NULL,
  `padre_ldl` varchar(11) NOT NULL,
  `madre_ldl` varchar(11) NOT NULL,
  `abuelo_materno_ldl` varchar(11) NOT NULL,
  `abuela_materna_ldl` varchar(11) NOT NULL,
  `abuelo_paterno_ldl` varchar(11) NOT NULL,
  `abuela_paterna_ldl` varchar(11) NOT NULL,
  `no_hermanas_ldl` varchar(11) NOT NULL,
  `no_hermanos_ldl` varchar(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dislipidemia`
--

INSERT INTO `dislipidemia` (`dislipidemia_estado`, `hipertrigliceridemia`, `padre_htg`, `madre_htg`, `abuelo_materno_htg`, `abuela_materna_htg`, `abuelo_paterno_htg`, `abuela_paterna_htg`, `no_hermanas_htg`, `no_hermanos_htg`, `hipercolesterolemia_estado`, `padre_ldl`, `madre_ldl`, `abuelo_materno_ldl`, `abuela_materna_ldl`, `abuelo_paterno_ldl`, `abuela_paterna_ldl`, `no_hermanas_ldl`, `no_hermanos_ldl`, `id_paciente`) VALUES
('Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', '18', '18', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', '45', '48', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `ejercicio_estatus` varchar(10) NOT NULL,
  `no_semana` int(11) NOT NULL,
  `no_veces` varchar(10) NOT NULL,
  `t_semana` int(11) NOT NULL,
  `t_no_semana` varchar(12) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`ejercicio_estatus`, `no_semana`, `no_veces`, `t_semana`, `t_no_semana`, `id_paciente`) VALUES
('Negado', 5, 'Malo', 5, 'Mal Apego', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad_cardiovascular`
--

CREATE TABLE `enfermedad_cardiovascular` (
  `enfermedad_cardioVascular_estado` varchar(11) NOT NULL,
  `evento_vascular_cerebral_estado` varchar(11) NOT NULL,
  `padre_evc` varchar(11) NOT NULL,
  `madre_evc` varchar(11) NOT NULL,
  `abuelo_materno_evc` varchar(11) NOT NULL,
  `abuela_materna_evc` varchar(11) NOT NULL,
  `abuelo_paterno_evc` varchar(11) NOT NULL,
  `abuela_paterna_evc` varchar(11) NOT NULL,
  `no_hermanas_evc` varchar(11) NOT NULL,
  `no_hermanos_evc` varchar(11) NOT NULL,
  `cardiopatia_isquemica_estado` varchar(11) NOT NULL,
  `padre_ci` varchar(11) NOT NULL,
  `madre_ci` varchar(11) NOT NULL,
  `abuelo_materno_ci` varchar(11) NOT NULL,
  `abuela_materna_ci` varchar(11) NOT NULL,
  `abuelo_paterno_ci` varchar(11) NOT NULL,
  `abuela_paterna_ci` varchar(11) NOT NULL,
  `no_hermanas_ci` varchar(11) NOT NULL,
  `no_hermanos_ci` varchar(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `enfermedad_cardiovascular`
--

INSERT INTO `enfermedad_cardiovascular` (`enfermedad_cardioVascular_estado`, `evento_vascular_cerebral_estado`, `padre_evc`, `madre_evc`, `abuelo_materno_evc`, `abuela_materna_evc`, `abuelo_paterno_evc`, `abuela_paterna_evc`, `no_hermanas_evc`, `no_hermanos_evc`, `cardiopatia_isquemica_estado`, `padre_ci`, `madre_ci`, `abuelo_materno_ci`, `abuela_materna_ci`, `abuelo_paterno_ci`, `abuela_paterna_ci`, `no_hermanas_ci`, `no_hermanos_ci`, `id_paciente`) VALUES
('Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', '5', '5', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', '10', '10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hipertension_arterial`
--

CREATE TABLE `hipertension_arterial` (
  `hipertension_arterial_estado` varchar(11) NOT NULL,
  `padre_has` varchar(11) NOT NULL,
  `madre_has` varchar(11) NOT NULL,
  `abuelo_materno_has` varchar(11) NOT NULL,
  `abuela_materna_has` varchar(11) NOT NULL,
  `abuelo_paterno_has` varchar(11) NOT NULL,
  `abuela_paterna_has` varchar(11) NOT NULL,
  `no_hermanas_has` varchar(11) NOT NULL,
  `no_hermanos_has` varchar(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hipertension_arterial`
--

INSERT INTO `hipertension_arterial` (`hipertension_arterial_estado`, `padre_has`, `madre_has`, `abuelo_materno_has`, `abuela_materna_has`, `abuelo_paterno_has`, `abuela_paterna_has`, `no_hermanas_has`, `no_hermanos_has`, `id_paciente`) VALUES
('Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', 'Negado', '2', '2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hipoglucemiantes`
--

CREATE TABLE `hipoglucemiantes` (
  `hipoglucemiantes` varchar(10) NOT NULL,
  `metformina` varchar(10) NOT NULL,
  `sulfonilureas` varchar(15) NOT NULL,
  `glinidas` varchar(15) NOT NULL,
  `DPP4` varchar(15) NOT NULL,
  `ISGLT` varchar(15) NOT NULL,
  `GLP` varchar(15) NOT NULL,
  `pioglitazona` varchar(10) NOT NULL,
  `IA` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hipoglucemiantes`
--

INSERT INTO `hipoglucemiantes` (`hipoglucemiantes`, `metformina`, `sulfonilureas`, `glinidas`, `DPP4`, `ISGLT`, `GLP`, `pioglitazona`, `IA`, `id_paciente`) VALUES
('Negado', 'Negado', 'Otra', 'Repaglinida', 'Otra', 'Empaglifozina', 'Otra', 'Si', 'Miglitol', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hipolipemiantes`
--

CREATE TABLE `hipolipemiantes` (
  `hipolipemiante` varchar(10) NOT NULL,
  `estatinas` varchar(15) NOT NULL,
  `fibratos` varchar(15) NOT NULL,
  `omega_3` varchar(10) NOT NULL,
  `IAB` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hipolipemiantes`
--

INSERT INTO `hipolipemiantes` (`hipolipemiante`, `estatinas`, `fibratos`, `omega_3`, `IAB`, `id_paciente`) VALUES
('Negado', 'Otros', 'Gemfibrozil', 'Negado', 'Negado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insulina`
--

CREATE TABLE `insulina` (
  `insulina` varchar(10) NOT NULL,
  `NPH` varchar(10) NOT NULL,
  `NPH_dosis` int(11) NOT NULL,
  `rapida_regular` varchar(10) NOT NULL,
  `rapida_regular_dosis` int(11) NOT NULL,
  `glardina` varchar(10) NOT NULL,
  `glardina_dosis` int(11) NOT NULL,
  `glardina_300` varchar(10) NOT NULL,
  `glardina_300_dosis` int(11) NOT NULL,
  `detemir` varchar(10) NOT NULL,
  `detemir_dosis` int(11) NOT NULL,
  `degludec` varchar(10) NOT NULL,
  `degludec_dosis` int(11) NOT NULL,
  `lispro` varchar(10) NOT NULL,
  `lispro_dosis` int(11) NOT NULL,
  `aspart` varchar(10) NOT NULL,
  `aspart_dosis` int(11) NOT NULL,
  `glulisina` varchar(10) NOT NULL,
  `glulisina_dosis` int(11) NOT NULL,
  `NPH_regular` varchar(10) NOT NULL,
  `NPH_regular_dosis` int(11) NOT NULL,
  `lispro_prota` varchar(10) NOT NULL,
  `lispro_prota_dosis` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `insulina`
--

INSERT INTO `insulina` (`insulina`, `NPH`, `NPH_dosis`, `rapida_regular`, `rapida_regular_dosis`, `glardina`, `glardina_dosis`, `glardina_300`, `glardina_300_dosis`, `detemir`, `detemir_dosis`, `degludec`, `degludec_dosis`, `lispro`, `lispro_dosis`, `aspart`, `aspart_dosis`, `glulisina`, `glulisina_dosis`, `NPH_regular`, `NPH_regular_dosis`, `lispro_prota`, `lispro_prota_dosis`, `id_paciente`) VALUES
('Negado', 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 'Negado', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `TGO` decimal(5,2) NOT NULL,
  `TGP` decimal(5,2) NOT NULL,
  `FA` decimal(5,2) NOT NULL,
  `GGT` decimal(5,2) NOT NULL,
  `DHL` decimal(5,2) NOT NULL,
  `proteinas_totales` decimal(5,2) NOT NULL,
  `albumina` decimal(5,2) NOT NULL,
  `globulinas` decimal(5,2) NOT NULL,
  `AG` decimal(5,2) NOT NULL,
  `BT` decimal(5,2) NOT NULL,
  `BD` decimal(5,2) NOT NULL,
  `BI` decimal(5,2) NOT NULL,
  `HB` decimal(5,2) NOT NULL,
  `VSG` decimal(5,2) NOT NULL,
  `OHD` decimal(5,2) NOT NULL,
  `creatinina` decimal(5,2) NOT NULL,
  `creatinina_cistatina` decimal(5,2) NOT NULL,
  `glucosa` decimal(5,2) NOT NULL,
  `BH` decimal(5,2) NOT NULL,
  `glucosilada` decimal(5,2) NOT NULL,
  `acido_urico` decimal(5,2) NOT NULL,
  `urea` decimal(5,2) NOT NULL,
  `creatinina2` decimal(5,2) NOT NULL,
  `colesterol` decimal(5,2) NOT NULL,
  `trigliceridos` decimal(5,2) NOT NULL,
  `LDL` decimal(5,2) NOT NULL,
  `HDL` decimal(5,2) NOT NULL,
  `HBG` decimal(5,2) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`TGO`, `TGP`, `FA`, `GGT`, `DHL`, `proteinas_totales`, `albumina`, `globulinas`, `AG`, `BT`, `BD`, `BI`, `HB`, `VSG`, `OHD`, `creatinina`, `creatinina_cistatina`, `glucosa`, `BH`, `glucosilada`, `acido_urico`, `urea`, `creatinina2`, `colesterol`, `trigliceridos`, `LDL`, `HDL`, `HBG`, `id_paciente`) VALUES
(2.00, 3.00, 4.00, 5.00, 6.00, 7.00, 8.00, 9.00, 10.00, 11.00, 12.00, 13.00, 14.00, 15.00, 16.00, 17.00, 18.00, 19.00, 20.00, 21.00, 22.00, 23.00, 24.00, 25.00, 26.00, 27.00, 28.00, 29.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros`
--

CREATE TABLE `otros` (
  `otros` varchar(10) NOT NULL,
  `ASA` varchar(10) NOT NULL,
  `alopurinol` varchar(10) NOT NULL,
  `neuromodulador` varchar(15) NOT NULL,
  `procineticos` varchar(15) NOT NULL,
  `no_farmacos` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `otros`
--

INSERT INTO `otros` (`otros`, `ASA`, `alopurinol`, `neuromodulador`, `procineticos`, `no_farmacos`, `id_paciente`) VALUES
('Negado', 'Negado', 'Negado', 'Otros', 'Otros', 5, 1);

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
