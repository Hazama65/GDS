<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT * FROM seguimiento DS
    WHERE DS.id_paciente = '$id_paciente' AND DS.Fecha_Seguimiento = '$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $Fecha_Seguimiento = $data['Fecha_Seguimiento'];
            $NIHSS = $data['NIHSS'];
            $NIHSS_escala = $data['NIHSS_escala'];
            $BARTHEL = $data['BARTHEL'];
            $BARTHEL_escala = $data['BARTHEL_escala'];
            $FIM = $data['FIM'];
            $FIM_escala = $data['FIM_escala'];
            $RANKIN = $data['RANKIN'];
            $RANKIN_escala = $data['RANKIN_escala'];
            $MOTRICITY = $data['MOTRICITY'];
            $MARCHA = $data['MARCHA'];
            $MARCHA_escala = $data['MARCHA_escala'];


        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>