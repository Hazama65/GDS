<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_LP.php');

$connectionDB = new Database(DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT * FROM datos_paciente dp
    JOIN act_lupica al ON dp.id_seguimiento = al.id_seguimiento
    JOIN sledai sl ON dp.id_seguimiento = sl.id_seguimiento
    JOIN laboratorio l ON dp.id_seguimiento = l.id_seguimiento
    JOIN anticuerpos_renal ar ON dp.id_seguimiento = ar.id_seguimiento
    JOIN tratamiento_defuncion td ON dp.id_seguimiento = td.id_seguimiento
    WHERE dp.id_seguimiento = '$id_paciente' AND dp.fecha_seguimiento = '$fecha_seguimiento'";


    $data_seguimiento = $connectionDB->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {

            $curp = $data['curp'];
            $nombre_completo = $data['nombre_completo'];
            $fecha_seguimiento = $data['fecha_seguimiento'];
            $AA = $data['AA'];
            $AC = $data['AC'];
            $AH = $data['AH'];
            $AI = $data['AI'];
            $AN = $data['AN'];
            $ARE = $data['ARE'];
            $AM = $data['AM'];
            $ACA = $data['ACA'];

            $registros_sledai = array(
                'convulsion' => $data['convulsion'],
                'psicosis' => $data['psicosis'],
                'SCO' => $data['SCO'],
                'AV' => $data['AV'],
                'TNC' => $data['TNC'],
                'DCL' => $data['DCL'],
                'EVC' => $data['EVC'],
                'vasculitis' => $data['vasculitis'],
                'artritis' => $data['artritis'],
                'miositis' => $data['miositis'],
                'CU' => $data['CU'],
                'hematuria' => $data['hematuria'],
                'piuria' => $data['piuria'],
                'proteinuria' => $data['proteinuria'],
                'erupcion' => $data['erupcion'],
                'UM' => $data['UM'],
                'pleuritis' => $data['pleuritis'],
                'pericarditis' => $data['pericarditis'],
                'COM' => $data['COM'],
                'ADN' => $data['ADN'],
                'fiebre' => $data['fiebre'],
                'trombocitopenia' => $data['trombocitopenia'],
                'leucopenia' => $data['leucopenia'],
                'alopecia' => $data['alopecia']
            );
            
            $valores_sledai = '';
            
            foreach ($registros_sledai as $sledai) {
                // Si la variable no está vacía, la concatenamos a la cadena con una coma
                if ($sledai !== '') {
                    // Si la cadena ya tiene contenido, agregamos una coma antes de concatenar el valor
                    if ($valores_sledai !== '') {
                        $valores_sledai .= ',';
                    }
                    $valores_sledai .= $sledai;
                }
            }
            
            $resultados_sledai = $data['resultados_sledai'];
            $ASE = $data['ASE'];
            $BUN = $data['BUN'];
            $C3 = $data['C3'];
            $C4 = $data['C4'];
            $CS = $data['CS'];
            $P24 = $data['P24'];
            $A24 = $data['A24'];
            $leucocitos = $data['leucocitos'];
            $linfocitos = $data['linfocitos'];
            $plaquetas = $data['plaquetas'];
            $hemoglobina = $data['hemoglobina'];
            $VD = $data['VD'];
            $AL = $data['AL'];
            $AC_DNA = $data['AC_DNA'];
            $AC_SM = $data['AC_SM'];
            $AC_RNP = $data['AC_RNP'];
            $AC_RO = $data['AC_RO'];
            $AC_LA = $data['AC_LA'];
            $AC_CM = $data['AC_CM'];
            $AC_CG = $data['AC_CG'];
            $AC_BG = $data['AC_BG'];
            $AC_BM = $data['AC_BM'];
            $BR = $data['BR'];
            $BR_tipo = $data['BR_tipo'];
            $Metrotexate = $data['Metrotexate'];
            $ds_metro = $data['ds_metro'];
            $Hidroxicloroquina = $data['Hidroxicloroquina'];
            $ds_hidro = $data['ds_hidro'];
            $Azatioprina = $data['Azatioprina'];
            $ds_aza = $data['ds_aza'];
            $Prednisona = $data['Prednisona'];
            $ds_predi = $data['ds_predi'];
            $Micofenolato = $data['Micofenolato'];
            $ds_mico = $data['ds_mico'];
            $Ciclofosfamida = $data['Ciclofosfamida'];
            $ds_ciclo = $data['ds_ciclo'];
            $Rituximab = $data['Rituximab'];
            $AT = $data['AT'];
            $defuncion = $data['defuncion'];


        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>