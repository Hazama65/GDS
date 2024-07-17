<?php
include (__DIR__ . "/../php/dbconfig_ER.php");
require (__DIR__ . '/../php/models/database.model.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Obtener las variables de la solicitud AJAX
    $empleado = isset($_GET['empleado']) ? $_GET['empleado'] : '';
    $tipo_terapia = isset($_GET['tipo_terapia']) ? $_GET['tipo_terapia'] : '';
    $fecha_1 = !empty($_GET['fecha_1']) ? $_GET['fecha_1'] : '2020-01-30';
    $fecha_2 = !empty($_GET['fecha_2']) ? $_GET['fecha_2'] : '2055-12-30';

    // Inicializar un arreglo para contener las condiciones de la consulta
    $conditions = [];

    if (!empty($empleado)) {
        $conditions[] = "datos_paciente.nombre_terapeuta = '$empleado'";
    }
    if (!empty($fecha_1)) {
        $conditions[] = "datos_paciente.fecha_inicio >= '$fecha_1'";
    }
    if (!empty($fecha_2)) {
        $conditions[] = "datos_paciente.fecha_fin <= '$fecha_2'";
    }
    // Construir la parte WHERE de la consulta SQL
    $whereClause = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';


    $consulta = "SELECT
        SUM(sesiones_num_terapia_fisica) AS total_terapia_fisica,
        SUM(sesiones_num_terapia_ocupacional) AS total_terapia_ocupacional,
        SUM(sesiones_num_terapia_lenguaje) AS total_terapia_lenguaje,
        SUM(sesiones_num_aplicacion_ferula) AS total_aplicacion_ferula,
        SUM(sesiones_num_Aplicacion_vendaje_enyesado) AS total_Aplicacion_vendaje_enyesado,
        SUM(sesiones_num_Baño_parafina) AS total_Baño_parafina,
        SUM(sesiones_num_CHC_CF) AS total_CHC_CF,
        SUM(sesiones_num_Corrientes_interfereciales) AS total_Corrientes_interfereciales,
        SUM(sesiones_num_Electroestimulacion) AS total_Electroestimulacion,
        SUM(sesiones_num_Ejercicio_Asistido) AS total_Ejercicio_Asistido,
        SUM(sesiones_num_Ejercicio_Fisioterapia) AS total_Ejercicio_Fisioterapia,
        SUM(sesiones_num_Hidroterapia_TanqueTerapéutico) AS total_Hidroterapia_TanqueTerapéutico,
        SUM(sesiones_num_Hidroterapia_Tina_Habbard) AS total_Hidroterapia_Tina_Habbard,
        SUM(sesiones_num_Hidroterapia_Tina_Remolinos) AS total_Hidroterapia_Tina_Remolinos,
        SUM(sesiones_num_TENS) AS total_TENS,
        SUM(sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica) AS total_TerapiacombinadaUSG_CorrienteEléctrica,
        SUM(sesiones_num_Ultrasonido_Terapeutico) AS total_Ultrasonido_Terapeutico,
        SUM(sesiones_num_TraccionCervical_Lumbar) AS total_TraccionCervical_Lumbar,
        SUM(sesiones_num_Rehabi_cardiaca) AS total_Rehabi_cardiaca,
        SUM(sesiones_num_Ejercicios_respiratorio) AS total_Ejercicios_respiratorio,
        SUM(sesiones_num_Terapia_Laser) AS total_Terapia_Laser,
        SUM(sesiones_num_Toxina_Botulinica) AS total_Toxina_Botulinica
    FROM procedimientos 
    JOIN datos_paciente ON procedimientos.id_paciente= datos_paciente.id_paciente $whereClause";

    $all_consulta = $connectionDB->getRows($consulta);

    echo json_encode($all_consulta);



} else {


    // echo json_encode($data);
}

?>