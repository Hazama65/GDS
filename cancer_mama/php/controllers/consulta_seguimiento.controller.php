<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_CM.php');

$connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT * FROM datos_seguimiento
    WHERE id_paciente = '$id_paciente' AND fecha_seg ='$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $fecha_seg = $data['fecha_seg'];
            $Seguimiento_Calidad_ECOG = $data['Seguimiento_Calidad_ECOG'];
            $ProgresionEnfermedad = $data['ProgresionEnfermedad'];
            $fecha_progreEnfermedad = $data['fecha_progreEnfermedad'];
            $Recurrencia = $data['Recurrencia'];
            $Recurrencia_fecha = $data['Recurrencia_fecha'];
            $tipo_cuidado_seguimiento = $data['tipo_cuidado_seguimiento'];
            $Protocolo_clinico = $data['Protocolo_clinico'];
            $Protocolo_Investigacion = $data['Protocolo_Investigacion'];
            $Reintervencion_fecha = $data['Reintervencion_fecha'];
            $Lateralidad_Seguimiento_QX = $data['Lateralidad_Seguimiento_QX'];
            $Reintervencion_fecha2 = $data['Reintervencion_fecha2'];
            $Tipo_Seguimiento = $data['Tipo_Seguimiento'];
            $Tratamiento_Seguimiento = $data['Tratamiento_Seguimiento'];
            $Tipo_RadioterapiaSeguimiento = $data['Tipo_RadioterapiaSeguimiento'];
            $Seguimiento_Iniciofecha = $data['Seguimiento_Iniciofecha'];

        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>