<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_ER.php');

$connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT *
    FROM datos_seguimiento DS
    LEFT JOIN procedimientos_seg pro ON DS.id_seguimiento = pro.id_seguimiento
    WHERE DS.id_paciente = '$id_paciente' AND DS.fecha_seg = '$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $nombre_terapeuta_seg = $data['nombre_terapeuta_seg'];
            $Turno_terapeutai_seg = $data['Turno_terapeutai_seg'];
            $sesiones_num_seg = $data['sesiones_num_seg'];
            $fecha_seg = $data['fecha_seg'];
            $tipo_terapias = $data['tipo_terapias'];
            $terapia_fisica = $data['terapia_fisica'];
            $terapia_ocupacional = $data['terapia_ocupacional'];
            $terapia_lenguaje = $data['terapia_lenguaje'];
            $aplicacion_ferula = $data['aplicacion_ferula'];
            $Aplicacion_vendaje_enyesado = $data['Aplicacion_vendaje_enyesado'];
            $Baño_parafina = $data['Baño_parafina'];
            $CHC_CF = $data['CHC_CF'];
            $Corrientes_interfereciales = $data['Corrientes_interfereciales'];
            $Electroestimulacion = $data['Electroestimulacion'];
            $Ejercicio_Asistido = $data['Ejercicio_Asistido'];
            $Ejercicio_Fisioterapia = $data['Ejercicio_Fisioterapia'];
            $Hidroterapia_TanqueTerapéutico = $data['Hidroterapia_TanqueTerapéutico'];
            $Hidroterapia_Tina_Habbard = $data['Hidroterapia_Tina_Habbard'];
            $Hidroterapia_Tina_Remolinos = $data['Hidroterapia_Tina_Remolinos'];
            $TENS = $data['TENS'];
            $TerapiacombinadaUSG_CorrienteEléctrica = $data['TerapiacombinadaUSG_CorrienteEléctrica'];
            $Ultrasonido_Terapeutico = $data['Ultrasonido_Terapeutico'];
            $TraccionCervical_Lumbar = $data['TraccionCervical_Lumbar'];
            $Rehabi_cardiaca = $data['Rehabi_cardiaca'];
            $Ejercicios_respiratorio = $data['Ejercicios_respiratorio'];
            $Terapia_Laser = $data['Terapia_Laser'];
            $Toxina_Botulinica = $data['Toxina_Botulinica'];


        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>