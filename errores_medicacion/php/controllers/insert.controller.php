<?php

require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $Tables = array(
        $table_datos_paciente = 'datos_paciente',
        $table_error_med = 'error_med',
        $table_seguimiento = 'seguimiento',
    );



    $Data_pacientes = array(
        'id_hraei'          => $_POST['id_hraei'],
        'fecha'             => $_POST['fecha'],
        'fecha_cifv'        => $_POST['fecha_cifv'],
        'fecha_medicacion'  => $_POST['fecha_medicacion'],
        'servicio'          => $_POST['servicio'],
        'nombre_paciente'   => $_POST['nombre_paciente'],
        'cama'              => $_POST['cama']
    );

    foreach ($Data_pacientes as $key => $value) {
        $Data_pacientes[$key] = $connectionDB->escapeString($value);
    }
    $Result_pacientes = $connectionDB->insertData($Tables[0], $Data_pacientes);

    $Data_error_med = array(
        'nombbre_notificacion' => $_POST['nombbre_notificacion'],
        'cargo'                => $_POST['cargo'],
        'uti_medicamento'      => $_POST['uti_medicamento'],
        'consecuencia_px'      => $_POST['consecuencia_px'],
        'descripcion_error'    => $_POST['descripcion_error'],
        'id_paciente'          => $Result_pacientes
    );

    foreach ($Data_error_med as $key => $value) {
        $Data_error_med[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[1], $Data_error_med);

    $Data_seguimiento = array(
        'id_paciente' => $Result_pacientes
    );

    foreach ($Data_seguimiento as $key => $value) {
        $Data_seguimiento[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[2], $Data_seguimiento);

    echo 'success';

}


?>