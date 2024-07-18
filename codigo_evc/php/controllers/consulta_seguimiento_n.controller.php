<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig_evc.php');

$connectionDB = new Database (DB_HOS_seg_n, DB_NAME_seg_n, DB_USERNAME_seg_n, DB_PASSWORD_seg_n);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT * FROM datos_seguimiento DS
    LEFT JOIN factor_riesgo fact ON DS.id_seguimiento = fact.id_seguimiento
    LEFT JOIN preve_trombo pt ON DS.id_seguimiento = pt.id_seguimiento
    LEFT JOIN cerebro cere ON DS.id_seguimiento = cere.id_seguimiento
    LEFT JOIN nrc rank ON DS.id_seguimiento = rank.id_seguimiento
    WHERE DS.id_paciente = '$id_paciente' AND DS.fecha_seg = '$fecha_seguimiento'";

    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $fecha_seg = $data['fecha_seg'];
            $fecha_inicio = $data['fecha_inicio'];
            $inicio_sintomas = $data['inicio_sintomas'];
            $fecha_atencion = $data['fecha_atencion'];
            $EVC = $data['EVC'];
            $Hipertension = $data['Hipertension'];
            $Diabetes = $data['Diabetes'];
            $Tabaquismo = $data['Tabaquismo'];
            $Covid = $data['Covid'];
            $Hiperlipidemia = $data['Hiperlipidemia'];
            $Apnea = $data['Apnea'];
            $enfermedad_cardio = $data['enfermedad_cardio'];
            $antiagregante = $data['antiagregante'];
            $antioagulante = $data['antioagulante'];
            $estatinas = $data['estatinas'];
            $Estatinas_med = $data['Estatinas_med'];
            $dosis_Estatinas = $data['dosis_Estatinas'];
            $tiempo_Estatinas = $data['tiempo_Estatinas'];
            $trombolisis = $data['trombolisis'];
            $r_TPA_1 = $data['r_TPA_1'];
            $sangrado = $data['sangrado'];
            $nivel = $data['nivel'];
            $fecha_sangrado = $data['fecha_sangrado'];
            $cerebrolisina = $data['cerebrolisina'];
            $dosis_cerebro = $data['dosis_cerebro'];
            $tiempo_cerebro = $data['tiempo_cerebro'];
            $escala_nihss_seg = $data['escala_nihss_seg'];
            $rankin_seguimiento = $data['rankin_seguimiento'];
            $puntuacion_has = $data['puntuacion_has'] ;
            $interpretacion_has = $data['interpretacion_has'];
            $chads = $data['chads'];
            $riesgo_chads = $data['riesgo_chads'];

        }
    }else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>