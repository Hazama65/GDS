<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig_evc.php');

$connectionDB = new Database (DB_HOS_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT * FROM datos_seguimiento DS
    LEFT JOIN fim_seguimiento fim ON DS.id_seguimiento = fim.id_seguimiento
    LEFT JOIN barthel b ON DS.id_seguimiento = b.id_seguimiento
    LEFT JOIN nihss_seguimiento nihss ON DS.id_seguimiento = nihss.id_seguimiento
    LEFT JOIN rankin_seguimiento rankin ON DS.id_seguimiento = rankin.id_seguimiento
    WHERE id_paciente = '$id_paciente' AND fecha_seg = '$fecha_seguimiento'";

    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $fecha_seg = $data['fecha_seg'];
            $tiempo_seguimiento = $data['tiempo_seguimiento'];
            $nivel_seguimiento = $data['nivel_seguimiento'];
            $fim_inicial = $data['fim_inicial'];
            $nivel_fim = $data['nivel_fim'];
            $fim_final = $data['fim_final'];
            $seguimineto_barthel = $data['seguimineto_barthel'];
            $nivel_barthel = $data['nivel_barthel'];
            $nihss_tiempo = $data['nihss_tiempo'];
            $escala = $data['escala'];
            $rankin_tiempo = $data['rankin_tiempo'];
            $valor = $data['valor'];

        }
    }else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>