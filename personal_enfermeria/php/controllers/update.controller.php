<?php

require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $Tables = array(
        $table_datos_personal = 'datos_personal',
        $table_informacion_academica = 'informacion_academica'
    );

    $updateColum_ia ='id';
    $updateColum ='id_enfermero';
    $updateId= $_POST['id_enfermero'];


    $Data_informacion_academica = array(
        'grado_tecnico'       => $_POST['grado_tecnico'],
        'cedula_tecnico'      => $_POST['cedula_tecnico'],
        'grado_posttecnico'   => $_POST['grado_posttecnico'],
        'cedula_posttecnico'  => $_POST['cedula_posttecnico'],
        'grado_licenciatura'  => $_POST['grado_licenciatura'],
        'cedula_lic'          => $_POST['cedula_lic'],
        'grado_especialidad'  => $_POST['grado_especialidad'],
        'cedula_especialidad' => $_POST['cedula_especialidad'],
        'grado_maestria'      => $_POST['grado_maestria'],
        'cedula_maestria'     => $_POST['cedula_maestria'],
        'observaciones'       => $_POST['observaciones'],
    );

    $connectionDB->updateData($Tables[1],$Data_informacion_academica,$updateColum_ia,$updateId);


    $Data_personal = array(
        'apellidoPaterno'       => $_POST['apellidoPaterno'],
        'apellidoMaterno'       => $_POST['apellidoMaterno'],
        'nombre'                => $_POST['nombre'],
        'noempleado'            => $_POST['noempleado'],
        'tipocontrato'          => $_POST['tipocontrato'],
        'codigo'                => $_POST['codigo'],
        'puesto'                => $_POST['puesto'],
        'fechaIngreso'          => $_POST['fechaIngreso'],
        'onomastico'            => $_POST['onomastico'],
        'ayo_curso'             => $_POST['ayo_curso'],
        'turno'                 => $_POST['Turno'],
        'servicio'              => $_POST['Servicio'],
    );

    $connectionDB->updateData($Tables[0],$Data_personal,$updateColum,$updateId);

    echo 'success';



}


?>