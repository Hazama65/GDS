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
    LEFT JOIN paraclinicos para ON DS.id_seguimiento = para.id_seguimiento
    LEFT JOIN miocardio mio ON DS.id_seguimiento = mio.id_seguimiento
    LEFT JOIN eco_defuncion eco ON DS.id_seguimiento = eco.id_seguimiento

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
            $Seguimiento_ck = $data['Seguimiento_ck'];
            $Seguimiento_ck_mb = $data['Seguimiento_ck_mb'];
            $Seguimiento_Troponinas = $data['Seguimiento_Troponinas'];
            $Seguimiento_Glucosa = $data['Seguimiento_Glucosa'];
            $Seguimiento_Urea = $data['Seguimiento_Urea'];
            $Seguimiento_Creatinina = $data['Seguimiento_Creatinina'];
            $Seguimiento_Colesterol = $data['Seguimiento_Colesterol'];
            $Seguimiento_Trigliceridos = $data['Seguimiento_Trigliceridos'];
            $Seguimiento_Acido_Urico = $data['Seguimiento_Acido_Urico'];
            $Seguimiento_hb_glucosilada = $data['Seguimiento_hb_glucosilada'];
            $Seguimiento_Proteinas = $data['Seguimiento_Proteinas'];
            $Seguimiento_LDL = $data['Seguimiento_LDL'];
            $Seguimiento_HDL = $data['Seguimiento_HDL'];
            $Seg_Gamma = $data['Seg_Gamma'];
            $Seg_gamma_cardi = $data['Seg_gamma_cardi'];
            $Seg_Localizacion_gamma = $data['Seg_Localizacion_gamma'];
            $Seg_Segmento_gamma = $data['Seg_Segmento_gamma'];
            $Seg_Resonancia_inicial = $data['Seg_Resonancia_inicial'];
            $Seg_resultado_resonancia = $data['Seg_resultado_resonancia'];
            $Seg_ergometria = $data['Seg_ergometria'];
            $Seg_Etapa_1 = $data['Seg_Etapa_1'];
            $Seg_Etapa_2 = $data['Seg_Etapa_2'];
            $Seg_Etapa_3 = $data['Seg_Etapa_3'];
            $Seg_Etapa_4 = $data['Seg_Etapa_4'];
            $Seg_Etapa_5 = $data['Seg_Etapa_5'];
            $Seg_Etapa_6 = $data['Seg_Etapa_6'];
            $Seg_Etapa_7 = $data['Seg_Etapa_7'];
            $Seg_Suspension_estudio = $data['Seg_Suspension_estudio'];
            $Seg_Distolico_inicial = $data['Seg_Distolico_inicial'];
            $Seg_Sistolico_inicial = $data['Seg_Sistolico_inicial'];
            $Seg_eyeccion_ventriizqui = $data['Seg_eyeccion_ventriizqui'];
            $Seg_movilidad_inicial = $data['Seg_movilidad_inicial'];
            $Seg_Segmento = $data['Seg_Segmento'];
            $Seg_defun = $data['Seg_defun'];
            $Seg_Causa_defun = $data['Seg_Causa_defun'];
            $Seg_Defuncion_fecha = $data['Seg_Defuncion_fecha'];

        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>