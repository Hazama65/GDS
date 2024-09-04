<?php

require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $Tables = array(
        $table_datos_paciente = 'datos_paciente',
        $table_error_med      = 'error_med',
        $table_med_inv        = 'med_inv',
        $table_med_text       = 'med_text',
        $table_med_seg        = 'med_seg',
        $table_med_seg_inv    = 'med_seg_inv',
        $table_med_seg_last   = 'med_seg_last'
    );


    $Data_pacientes = array(
        'nombre_paciente' => $_POST['nombre_paciente'],
        'cama'            => $_POST['cama'],
        'servicio'        => $_POST['servicio']
    );

    foreach ($Data_pacientes as $key => $value) {
        $Data_pacientes[$key] = $connectionDB->escapeString($value);
    }
    $Result_pacientes = $connectionDB->insertData($Tables[0], $Data_pacientes);

    $Data_error_med = array(
        'fecha_cifv'            => $_POST['fecha_cifv'],
        'fecha_medicacion'      => $_POST['fecha_medicacion'],
        'uti_medicamento'       => $_POST['uti_medicamento'],
        'consecuencia_px'       => $_POST['consecuencia_px'],
        'realizo_investigacion' => $_POST['realizo_investigacion'],
        'id_paciente'           => $Result_pacientes
    );

    foreach ($Data_error_med as $key => $value) {
        $Data_error_med[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[1], $Data_error_med);

    $Data_med_inv = array(
        'Denominacion'              => $_POST['Denominacion'],
        'Concentracion'             => $_POST['Concentracion'],
        'Fabricante'                => $_POST['Fabricante'],
        'Lote'                      => $_POST['Lote'],
        'Caducidad'                 => $_POST['Caducidad'],
        'Forma'                     => $_POST['Forma'],
        'Dosis'                     => $_POST['Dosis'],
        'Via_Administracion'        => $_POST['Via_Administracion'],
        'Intervalo_Administracion'  => $_POST['Intervalo_Administracion'],
        'Denominacion_1'            => $_POST['Denominacion_1'],
        'Concentracion1'            => $_POST['Concentracion1'],
        'Fabricante1'               => $_POST['Fabricante1'],
        'Lote1'                     => $_POST['Lote1'],
        'Caducidad1'                => $_POST['Caducidad1'],
        'Forma1'                    => $_POST['Forma1'],
        'Dosis1'                    => $_POST['Dosis1'],
        'Via_Administracion1'       => $_POST['Via_Administracion1'],
        'Intervalo_Administracion1' => $_POST['Intervalo_Administracion1'],
        'Denominacion_3'            => $_POST['Denominacion_3'],
        'Concentracion3'            => $_POST['Concentracion3'],
        'Fabricante3'               => $_POST['Fabricante3'],
        'Lote3'                     => $_POST['Lote3'],
        'Caducidad3'                => $_POST['Caducidad3'],
        'Forma3'                    => $_POST['Forma3'],
        'Dosis3'                    => $_POST['Dosis3'],
        'Via_Administracion3'       => $_POST['Via_Administracion3'],
        'Intervalo_Administracion3' => $_POST['Intervalo_Administracion3'],
        'id_paciente'               => $Result_pacientes
    );

    foreach ($Data_med_inv as $key => $value) {
        $Data_med_inv[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[2], $Data_med_inv);

    $Data_med_text = array(
        'descripcion_error'    => $_POST['descripcion_error'],
        'nombbre_notificacion' => $_POST['nombbre_notificacion'],
        'cargo'                => $_POST['cargo'],
        'id_paciente'          => $Result_pacientes
    );

    foreach ($Data_med_text as $key => $value) {
        $Data_med_text[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[3], $Data_med_text);

    $Data_med_seg = array(
        'id_paciente' => $Result_pacientes
    );

    foreach ($Data_med_seg as $key => $value) {
        $Data_med_seg[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[4], $Data_med_seg);

    $Data_med_seg_inv = array(
        'Denominacion_editar1' => $_POST['Denominacion'],
        'Concentracion_editar1' => $_POST['Concentracion'],
        'Fabricante_editar1' => $_POST['Fabricante'],
        'Lote_editar1' => $_POST['Lote'],
        'Caducidad_editar1' => $_POST['Caducidad'],
        'Forma_editar1' => $_POST['Forma'],
        'Dosis_editar1' => $_POST['Dosis'],
        'Via_Administracion_editar1' => $_POST['Via_Administracion'],
        'Intervalo_Administracion_editar1' => $_POST['Intervalo_Administracion'],
        'Denominacion_editar2' => $_POST['Denominacion_1'],
        'Concentracion_editar2' => $_POST['Concentracion1'],
        'Fabricante_editar2' => $_POST['Fabricante1'],
        'Lote_editar2' => $_POST['Lote1'],
        'Caducidad_editar2' => $_POST['Caducidad1'],
        'Forma_editar2' => $_POST['Forma1'],
        'Dosis_editar2' => $_POST['Dosis1'],
        'Via_Administracion_editar2' => $_POST['Via_Administracion1'],
        'Intervalo_Administracion_editar2' => $_POST['Intervalo_Administracion1'],
        'Denominacion_editar3' => $_POST['Denominacion_3'],
        'Concentracion_editar3' => $_POST['Concentracion3'],
        'Fabricante_editar3' => $_POST['Fabricante3'],
        'Lote_editar3' => $_POST['Lote3'],
        'Caducidad_editar3' => $_POST['Caducidad3'],
        'Forma_editar3' => $_POST['Forma3'],
        'Dosis_editar3' => $_POST['Dosis3'],
        'Via_Administracion_editar3' => $_POST['Via_Administracion3'],
        'Intervalo_Administracion_editar3' => $_POST['Intervalo_Administracion3'],
        'id_paciente'               => $Result_pacientes
    );

    foreach ($Data_med_seg_inv as $key => $value) {
        $Data_med_seg_inv[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[5], $Data_med_seg_inv);

    $Data_med_seg_last = array(
        'id_paciente' => $Result_pacientes
    );

    foreach ($Data_med_seg_last as $key => $value) {
        $Data_med_seg_last[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[6], $Data_med_seg_last);

    echo 'success';

}


?>