<?php

require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $Tables = array(
        $table_datos_paciente = 'datos_paciente',
        $table_hospi = 'hospi',
        $table_ambu = 'ambu',
        $table_notificacion = 'notificacion',
        $table_cisp = 'cisp',
        $table_resultados = 'resultados',
        $table_validacion = 'validacion',
        $table_evitabilidad = 'evitabilidad',
        $table_registro = 'registro'
    );

    $Data_datos_paciente = array(
        'nombre_paciente' => $_POST['nombre_paciente'],
        'fecha'           => $_POST['fecha'],
        'edad'            => $_POST['edad'],
        'sexo'            => $_POST['sexo'],
        'cama'            => $_POST['cama'],
        'Turno'           => $_POST['Turno'],
        'Personal'        => $_POST['Personal'],
        'area_atencion'   => $_POST['area_atencion']
    );

    foreach ($Data_datos_paciente as $key => $value) {
        $Data_datos_paciente[$key] = $connectionDB->escapeString($value);
    }
    $Result_datos_paciente = $connectionDB->insertData($Tables[0], $Data_datos_paciente);



    $Data_hospi = array(
        'area_atencionHospi' => $_POST['area_atencionHospi'],
        'pb_urgencias' => $_POST['pb_urgencias'],
        'planta_primerpiso' => $_POST['planta_primerpiso'],
        'planta_segundopiso' => $_POST['planta_segundopiso'],
        'planta_tercerpiso' => $_POST['planta_tercerpiso'],
        'planta_cuartopiso' => $_POST['planta_cuartopiso'],
        'id_paciente' => $Result_datos_paciente
    );

    foreach ($Data_hospi as $key => $value) {
        $Data_hospi[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[1], $Data_hospi);

    $Data_ambu = array(
        'area_ambu' => $_POST['area_ambu'],
        'ambu_pb' => $_POST['ambu_pb'],
        'ambu_unidadapoyo' => $_POST['ambu_unidadapoyo'],
        'ambu_piso1' => $_POST['ambu_piso1'],
        'ambu_unidadapoyo1' => $_POST['ambu_unidadapoyo1'],
        'ambu_piso2' => $_POST['ambu_piso2'],
        'ambu_piso3' => $_POST['ambu_piso3'],
        'ambu_enseñanza1' => $_POST['ambu_enseñanza1'],
        'id_paciente' => $Result_datos_paciente
    );

    foreach ($Data_ambu as $key => $value) {
        $Data_ambu[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[2], $Data_ambu);

    $Data_notificacion = array(
        'fecha_notificacion' => $_POST['fecha_notificacion'],
        'fecha_incidente' => $_POST['fecha_incidente'],
        'descripcion' => $_POST['descripcion'],
        'Tipo_evento' => $_POST['Tipo_evento'],
        'evento_tipoadv' => $_POST['evento_tipoadv'],
        'evento_tipocenti' => $_POST['evento_tipocenti'],
        'infopx' => $_POST['infopx'],
        'id_paciente' => $Result_datos_paciente
    );

    foreach ($Data_notificacion as $key => $value) {
        $Data_notificacion[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->insertData($Tables[3], $Data_notificacion);


    $Data_cisp = array(
        'id_paciente' => $Result_datos_paciente
    );

    $connectionDB->insertData($Tables[4], $Data_cisp);

    $Data_resultados = array(
        'id_paciente' => $Result_datos_paciente
    );

    $connectionDB->insertData($Tables[5], $Data_resultados);

    $Data_validacion = array(
        'id_paciente' => $Result_datos_paciente
    );

    $connectionDB->insertData($Tables[6], $Data_validacion);

    $Data_evitabilidad = array(
        'id_paciente' => $Result_datos_paciente
    );

    $connectionDB->insertData($Tables[7], $Data_evitabilidad);

    $Data_registro = array(
        'id_paciente' => $Result_datos_paciente
    );

    $connectionDB->insertData($Tables[8], $Data_registro);



    echo 'success';

}


?>