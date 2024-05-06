<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_SC.php');

$connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT *
    FROM datos_seguimiento DS
    LEFT JOIN tratamiento trat ON DS.id_seguimiento = trat.id_seguimiento
    WHERE DS.id_paciente = '$id_paciente' AND DS.fecha_seg = '$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $fecha_seg = $data['fecha_seg'];
            $Seguimiento_SXcoronario = $data['Seguimiento_SXcoronario'];
            $Acido_salicilico = $data['Acido_salicilico'];
            $Clopidogrel = $data['Clopidogrel'];
            $Eptifibatida = $data['Eptifibatida'];
            $Prasugrel = $data['Prasugrel'];
            $Ticagrelor = $data['Ticagrelor'];
            $Anticuagulantes = $data['Anticuagulantes'];
            $Betabloqueadores = $data['Betabloqueadores'];
            $IECA = $data['IECA'];
            $Calcioantagonistas = $data['Calcioantagonistas'];
            $ARA_II = $data['ARA_II'];
            $Estatinas = $data['Estatinas'];
            $Fibratos = $data['Fibratos'];
            $Antianginosos = $data['Antianginosos'];
            $Inhibidor_absorcion = $data['Inhibidor_absorcion'];
            $Anticuerpos_Monoclonales = $data['Anticuerpos_Monoclonales'];

        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>