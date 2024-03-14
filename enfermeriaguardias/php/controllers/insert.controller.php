<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_sustituido = 'trabajador_sustituido',
            $table_datos_sustituto = 'trabajador_sustituto',
            $table_datos_generales = 'datos_suplencia',
        );

        $Data_sustituido = array(
            'nom_sustituido' => $_POST['enlace_numeroempleado'],
            'num_empleado'=> $_POST['numeroempleado_1'],
            'niv_academico'=> $_POST['nivel_academico'],
            'turno'=> $_POST['Turno'],
            'servicio'=> $_POST['servicio'],
            'criticas'=> $_POST['critica'],
            'clinicas'=> $_POST['clinicas'],
            'quirurgicas'=> $_POST['quirurgicas'],
            'perinatales'=> $_POST['perinatales'],
            'ambulatoria'=> $_POST['Ambulatorias'],
            'hospitalizacion'=> $_POST['hospitalizacion'],
            'pediatria'=> $_POST['pediatria']
        );

        foreach ($Data_sustituido as $key => $value) {
            $Data_sustituido[$key] = $connectionDB->escapeString($value);
        }
        $Result_sustituido = $connectionDB->insertData($Tables[0], $Data_sustituido);

        $Data_sustituto = array(
            'nom_sustituto' => $_POST['nombre_sustituto'],
            'num_empleado2'=> $_POST['enlace_numeroempleado_sustituto'],
            'niv_academico2'=> $_POST['nivel_academico_sustituto'],
            'turno2'=> $_POST['Turno_sustituto'],
            'servicio2'=> $_POST['servicio_sustituto'],
            'criticas2'=> $_POST['critica_sustituto'],
            'clinicas2'=> $_POST['clinicas_sustituto'],
            'quirurgicas2'=> $_POST['quirurgicas_sustituto'],
            'perinatales2'=> $_POST['perinatales_sustituto'],
            'ambulatoria2'=> $_POST['Ambulatorias_sustituto'],
            'hospitalizacion2'=> $_POST['hospitalizacion_sustituto'],
            'pediatria2'=> $_POST['pediatria_sustituto']
        );

        foreach ($Data_sustituto as $key => $value) {
            $Data_sustituto[$key] = $connectionDB->escapeString($value);
        }
        $Result_sustituto = $connectionDB->insertData($Tables[1], $Data_sustituto);


        $Data_suplencia = array(
            'fecha_tramite' => $_POST['fecha_tramite'],
            'fecha_suplencia' => $_POST['fecha_suplencia'],
            'autoriza' => $_POST['autoriza'],
            'id_sustituido' => $Result_sustituido,
            'id_sustituto' => $Result_sustituto
        );

        foreach ($Data_suplencia as $key => $value) {
            $Data_suplencia[$key] = $connectionDB->escapeString($value);
        }
        $Result_suplencia = $connectionDB->insertData($Tables[2], $Data_suplencia);


        
        echo 'success';
    }


?>