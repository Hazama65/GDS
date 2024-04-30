<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_CB.php');

$connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT *
    FROM datos_seguimiento DS
    LEFT JOIN enfermedad_reinterve er ON DS.id_seguimiento = er.id_seguimiento
    LEFT JOIN qt ON DS.id_seguimiento = qt.id_seguimiento
    LEFT JOIN radioterapia radio ON DS.id_seguimiento = radio.id_seguimiento
    LEFT JOIN palia_proto pp ON DS.id_seguimiento = pp.id_seguimiento
    WHERE DS.id_paciente = '$id_paciente' AND DS.fecha_seguimiento = '$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $fecha_seg = $data['fecha_seguimiento'];
            $progre_enf = $data['progre_enf'];
            $fecha_progre = $data['fecha_progre'];
            $recu_enfer = $data['recu_enfer'];
            $fecha_recu = $data['fecha_recu'];
            $reintervencion = $data['reintervencion'];
            $fecha_reintervencion = $data['fecha_reintervencion'];
            $lat_reintervencion = $data['lat_reintervencion'];
            $nuevo_qt = $data['nuevo_qt'];
            $tx_5Fluororacilo = $data['tx_5Fluororacilo'];
            $tx_Beuacizumab = $data['tx_Beuacizumab'];
            $tx_Capecitabina = $data['tx_Capecitabina'];
            $tx_Carboplatino = $data['tx_Carboplatino'];
            $tx_Cetuximab = $data['tx_Cetuximab'];
            $tx_Ciclofosfamida = $data['tx_Ciclofosfamida'];
            $tx_Cisplatino = $data['tx_Cisplatino'];
            $tx_Docetaxel = $data['tx_Docetaxel'];
            $tx_Etoposido = $data['tx_Etoposido'];
            $tx_Herceptin = $data['tx_Herceptin'];
            $tx_Paclitaxel = $data['tx_Paclitaxel'];
            $tx_Pertuzumab = $data['tx_Pertuzumab'];
            $tx_Trastuzumab = $data['tx_Trastuzumab'];
            $momento_qt = $data['momento_qt'];
            $nueva_radio = $data['nueva_radio'];
            $fecha_radio = $data['fecha_radio'];
            $momento_radio = $data['momento_radio'];
            $dosis_radio = $data['dosis_radio'];
            $fracciones_radio = $data['fracciones_radio'];
            $no_fracciones = $data['no_fracciones'];
            $tecnica_fracciones = $data['tecnica_fracciones'];
            $rt_caries = $data['rt_caries'];
            $rt_disgeusia = $data['rt_disgeusia'];
            $rt_dolor = $data['rt_dolor'];
            $rt_fractura = $data['rt_fractura'];
            $rt_infeccion = $data['rt_infeccion'];
            $rt_hemorragias = $data['rt_hemorragias'];
            $rt_mucositis = $data['rt_mucositis'];
            $rt_osteonecrosis = $data['rt_osteonecrosis'];
            $rt_parestesia = $data['rt_parestesia'];
            $rt_propios = $data['rt_propios'];
            $rt_radiodermitis = $data['rt_radiodermitis'];
            $rt_RA = $data['rt_RA'];
            $rt_trismus = $data['rt_trismus'];
            $rt_xerostomia = $data['rt_xerostomia'];
            $rt_ninguno = $data['rt_ninguno'];
            $cuidado_palia = $data['cuidado_palia'];
            $tipo_palia = $data['tipo_palia'];
            $proto_clinico = $data['proto_clinico'];
            $proto_inv = $data['proto_inv'];


        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>