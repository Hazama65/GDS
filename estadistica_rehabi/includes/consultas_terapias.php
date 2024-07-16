<?php
include (__DIR__ . "/../php/dbconfig_ER.php");
require (__DIR__ . '/../php/models/database.model.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Obtener las variables de la solicitud AJAX
    $empleado = isset($_GET['empleado']) ? $_GET['empleado'] : '';
    $tipo_terapia = isset($_GET['tipo_terapia']) ? $_GET['tipo_terapia'] : '';
    $fecha_1 = isset($_GET['fecha_1']) ? $_GET['fecha_1'] : '2020-01-30';
    $fecha_2 = isset($_GET['fecha_2']) ? $_GET['fecha_2'] : '2055-12-30';

    // Inicializar un arreglo para contener las condiciones de la consulta
    $conditions = [];

    // Agregar condiciones a la consulta solo si las variables tienen datos
    if ($empleado !== '') {
        $conditions[] = "estadistica.terapeuta = '$empleado'";
    }
    if ($tipo_terapia !== '') {
        $conditions[] = "estadistica.tipo_terapias = '$tipo_terapia'";
    }
    if ($fecha_1 !== '' && $fecha_2 !== '') {
        $conditions[] = "estadistica.fecha BETWEEN '$fecha_1' AND '$fecha_2'";
    }
    // Construir la parte WHERE de la consulta SQL
    $whereClause = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';


    $consulta = "SELECT
        SUM(CASE WHEN terapia_fisica = 'si' THEN 1 ELSE 0 END) AS total_terapia_fisica,
        SUM(CASE WHEN terapia_ocupacional = 'si' THEN 1 ELSE 0 END) AS total_terapia_ocupacional,
        SUM(CASE WHEN terapia_lenguaje = 'si' THEN 1 ELSE 0 END) AS total_terapia_lenguaje,
        SUM(CASE WHEN aplicacion_ferula = 'si' THEN 1 ELSE 0 END) AS total_aplicacion_ferula,
        SUM(CASE WHEN Aplicacion_vendaje_enyesado = 'si' THEN 1 ELSE 0 END) AS total_Aplicacion_vendaje_enyesado,
        SUM(CASE WHEN Baño_parafina = 'si' THEN 1 ELSE 0 END) AS total_Baño_parafina,
        SUM(CASE WHEN CHC_CF = 'si' THEN 1 ELSE 0 END) AS total_CHC_CF,
        SUM(CASE WHEN Corrientes_interfereciales = 'si' THEN 1 ELSE 0 END) AS total_Corrientes_interfereciales,
        SUM(CASE WHEN Electroestimulacion = 'si' THEN 1 ELSE 0 END) AS total_Electroestimulacion,
        SUM(CASE WHEN Ejercicio_Asistido = 'si' THEN 1 ELSE 0 END) AS total_Ejercicio_Asistido,
        SUM(CASE WHEN Ejercicio_Fisioterapia = 'si' THEN 1 ELSE 0 END) AS total_Ejercicio_Fisioterapia,
        SUM(CASE WHEN Hidroterapia_TanqueTerapéutico = 'si' THEN 1 ELSE 0 END) AS total_Hidroterapia_TanqueTerapéutico,
        SUM(CASE WHEN Hidroterapia_Tina_Habbard = 'si' THEN 1 ELSE 0 END) AS total_Hidroterapia_Tina_Habbard,
        SUM(CASE WHEN Hidroterapia_Tina_Remolinos = 'si' THEN 1 ELSE 0 END) AS total_Hidroterapia_Tina_Remolinos,
        SUM(CASE WHEN TENS = 'si' THEN 1 ELSE 0 END) AS total_TENS,
        SUM(CASE WHEN TerapiacombinadaUSG_CorrienteEléctrica = 'si' THEN 1 ELSE 0 END) AS total_TerapiacombinadaUSG_CorrienteEléctrica,
        SUM(CASE WHEN Ultrasonido_Terapeutico = 'si' THEN 1 ELSE 0 END) AS total_Ultrasonido_Terapeutico,
        SUM(CASE WHEN TraccionCervical_Lumbar = 'si' THEN 1 ELSE 0 END) AS total_TraccionCervical_Lumbar,
        SUM(CASE WHEN Rehabi_cardiaca = 'si' THEN 1 ELSE 0 END) AS total_Rehabi_cardiaca,
        SUM(CASE WHEN Ejercicios_respiratorio = 'si' THEN 1 ELSE 0 END) AS total_Ejercicios_respiratorio,
        SUM(CASE WHEN Terapia_Laser = 'si' THEN 1 ELSE 0 END) AS total_Terapia_Laser,
        SUM(CASE WHEN Toxina_Botulinica = 'si' THEN 1 ELSE 0 END) AS total_Toxina_Botulinica
    FROM estadistica_avd 
    JOIN estadistica ON estadistica_avd.id_paciente= estadistica.id_paciente $whereClause";

    $all_consulta = $connectionDB->getRows($consulta);

    echo json_encode($all_consulta);



} else {


    // echo json_encode($data);
}

?>