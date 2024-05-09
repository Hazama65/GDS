<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_SC.php');
    $connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_seguimiento  = 'datos_seguimiento',
            $table_tratamiento        = 'tratamiento'
        );

        $Data_datos_seguimiento = array(
            'id_paciente'             => $_POST['id_paciente'],
            'fecha_seg'               => $_POST['fecha_seg'],
            'Seguimiento_SXcoronario' => $_POST['Seguimiento_SXcoronario']
        );

        foreach ($Data_datos_seguimiento as $key => $value) {
            $Data_datos_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_seguimiento = $connectionDB->insertData($Tables[0], $Data_datos_seguimiento);

        $Data_tratamiento = array(
            'Acido_salicilico'          => isset($_POST['Acido_salicilico']) ? 'Si' : 'No',
            'Clopidogrel'               => isset($_POST['Clopidogrel']) ? 'Si' : 'No',
            'Eptifibatida'              => isset($_POST['Eptifibatida']) ? 'Si' : 'No',
            'Prasugrel'                 => isset($_POST['Prasugrel']) ? 'Si' : 'No',
            'Ticagrelor'                => isset($_POST['Ticagrelor']) ? 'Si' : 'No',
            'Anticuagulantes'           => $_POST['Anticuagulantes'],
            'Betabloqueadores'          => $_POST['Betabloqueadores'],
            'IECA'                      => $_POST['IECA'],
            'Calcioantagonistas'        => $_POST['Calcioantagonistas'],
            'ARA_II'                    => $_POST['ARA_II'],
            'Estatinas'                 => $_POST['Estatinas'],
            'Fibratos'                  => $_POST['Fibratos'],
            'Antianginosos'             => $_POST['Antianginosos'],
            'Inhibidor_absorcion'       => $_POST['Inhibidor_absorcion'],
            'Anticuerpos_Monoclonales'  => $_POST['Anticuerpos_Monoclonales'],
            'id_seguimiento'            => $Result_datos_seguimiento
        );

        foreach ($Data_tratamiento as $key => $value) {
            $Data_enfermedad_reinterve[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[1], $Data_enfermedad_reinterve);

        
        echo 'success';
    }


?>