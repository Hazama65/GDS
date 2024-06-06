<?php

require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $Tables = array(
        $table_datos_personal = 'datos_personal',
        $table_informacion_academica = 'informacion_academica'
    );

    $foto_nombre = $_FILES['foto']['name'];
    $foto_tmp_name = $_FILES['foto']['tmp_name'];

    $directorio_destino = "uploads/";
    $ruta_final = $directorio_destino . $foto_nombre;

    $directorio_destino_2 = "../../uploads/";
    $ruta_final_2 = $directorio_destino_2 . $foto_nombre;


    if (move_uploaded_file($foto_tmp_name, $ruta_final_2)) {

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

        foreach ($Data_informacion_academica as $key => $value) {
            $Data_informacion_academica[$key] = $connectionDB->escapeString($value);
        }
        $Result_informacion_academica = $connectionDB->insertData($Tables[1], $Data_informacion_academica);


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
            'Turno'                 => $_POST['Turno'],
            'Jornada'               => $_POST['Jornada'],
            'Servicio'              => $_POST['Servicio'],
            'foto'                  => $ruta_final,
            'informacion_academica' => $Result_informacion_academica
        );
    
        foreach ($Data_personal as $key => $value) {
            $Data_personal[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_personal = $connectionDB->insertData($Tables[0], $Data_personal);



    
        echo 'success';
    }



}


?>