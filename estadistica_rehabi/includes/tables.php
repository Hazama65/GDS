<?php
include (__DIR__ . "/../php/dbconfig_ER.php");
require (__DIR__ . '/../php/models/database.model.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$query_tabla_conteo = "SELECT
        YEAR(dp.fecha_inicio) AS año,
        DATE_FORMAT(dp.fecha_inicio, '%M') AS mes,
        SUM(p.sesiones_num_terapia_fisica) AS total_terapia_fisica,
        SUM(p.sesiones_num_terapia_ocupacional) AS total_terapia_ocupacional,
        SUM(p.sesiones_num_terapia_lenguaje) AS total_terapia_lenguaje,
        SUM(p.sesiones_num_aplicacion_ferula) AS total_aplicacion_ferula,
        SUM(p.sesiones_num_Aplicacion_vendaje_enyesado) AS total_Aplicacion_vendaje_enyesado,
        SUM(p.sesiones_num_Baño_parafina) AS total_Baño_parafina,
        SUM(p.sesiones_num_CHC_CF) AS total_CHC_CF,
        SUM(p.sesiones_num_Corrientes_interfereciales) AS total_Corrientes_interfereciales,
        SUM(p.sesiones_num_Electroestimulacion) AS total_Electroestimulacion,
        SUM(p.sesiones_num_Ejercicio_Asistido) AS total_Ejercicio_Asistido,
        SUM(p.sesiones_num_Ejercicio_Fisioterapia) AS total_Ejercicio_Fisioterapia,
        SUM(p.sesiones_num_Hidroterapia_TanqueTerapéutico) AS total_Hidroterapia_TanqueTerapéutico,
        SUM(p.sesiones_num_Hidroterapia_Tina_Habbard) AS total_Hidroterapia_Tina_Habbard,
        SUM(p.sesiones_num_Hidroterapia_Tina_Remolinos) AS total_Hidroterapia_Tina_Remolinos,
        SUM(p.sesiones_num_TENS) AS total_TENS,
        SUM(p.sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica) AS total_TerapiacombinadaUSG_CorrienteEléctrica,
        SUM(p.sesiones_num_Ultrasonido_Terapeutico) AS total_Ultrasonido_Terapeutico,
        SUM(p.sesiones_num_TraccionCervical_Lumbar) AS total_TraccionCervical_Lumbar,
        SUM(p.sesiones_num_Rehabi_cardiaca) AS total_Rehabi_cardiaca,
        SUM(p.sesiones_num_Ejercicios_respiratorio) AS total_Ejercicios_respiratorio,
        SUM(p.sesiones_num_Terapia_Laser) AS total_Terapia_Laser,
        SUM(p.sesiones_num_Toxina_Botulinica) AS total_Toxina_Botulinica
    FROM 
        procedimientos p
    JOIN 
        datos_paciente dp ON p.id_paciente = dp.id_paciente
    GROUP BY 
        año, mes;";

$data_tabla = $connectionDB->getRows($query_tabla_conteo);

echo json_encode($data_tabla);
?>
