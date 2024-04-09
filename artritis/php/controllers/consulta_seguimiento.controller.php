<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_AT.php');

$connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT *
    FROM datos_paciente DS
    LEFT JOIN laboratorio Lab ON DS.id_paciente_seg = Lab.id_paciente_seg
    LEFT JOIN usg_clinica UC ON DS.id_paciente_seg = UC.id_paciente_seg
    LEFT JOIN tratamiento TX ON DS.id_paciente_seg = TX.id_paciente_seg
    WHERE DS.id_paciente = '$id_paciente' AND DS.fecha_seg = '$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $fecha_seg = $data['fecha_seg'];
            $curp = $data['curp'];
            $talla = $data['talla'];
            $peso = $data['peso'];
            $imc = $data['imc'];
            $plaquetas = $data['plaquetas'];
            $FRB = $data['FRB'];
            $FRN = $data['FRN'];
            $PCR = $data['PCR'];
            $VDB = $data['VDB'];
            $VDN = $data['VDN'];
            $AAB = $data['AAB'];
            $AAN = $data['AAN'];
            $VSG = $data['VSG'];
            $TGOB = $data['TGOB'];
            $TGON = $data['TGON'];
            $TGPB = $data['TGPB'];
            $TGPN = $data['TGPN'];
            $glucosa = $data['glucosa'];
            $colesterol = $data['colesterol'];
            $trigliceridos = $data['trigliceridos'];
            $FIB4 = $data['FIB4'];
            $resultado_fib = $data['resultado_fib'];
            $USG_hep = $data['USG_hep'];
            $USG_haz = $data['USG_haz'];
            $CE = $data['CE'];
            $sjc28 = $data['sjc28'];
            $tjc28 = $data['tjc28'];
            $pga = $data['pga'];
            $ega = $data['ega'];
            $CDAI = $data['CDAI'];
            $SDAI = $data['SDAI'];
            $Metrotexate = $data['Metrotexate'];
            $ds_metro = $data['ds_metro'];
            $Leflunomide = $data['Leflunomide'];
            $ds_leflu = $data['ds_leflu'];
            $Sulfazalasina = $data['Sulfazalasina'];
            $ds_sulfa = $data['ds_sulfa'];
            $Tocoferol = $data['Tocoferol'];
            $ds_toco = $data['ds_toco'];
            $Glucocorticoide = $data['Glucocorticoide'];
            $tx_gluco = $data['tx_gluco'];
            $ds_gluco = $data['ds_gluco'];
            $vit_d = $data['vit_d'];
            $ds_vit = $data['ds_vit'];
            $Biologico = $data['Biologico'];
            $tx_bio = $data['tx_bio'];
            $AT = $data['AT'];


        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>