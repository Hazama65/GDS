<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_sustituido      = 'trabajador_sustituido',
            $table_datos_sustituto       = 'trabajador_sustituto',
            $table_datos_generales       = 'datos_suplencia',
            $table_datos_uso_suplencias  = 'uso_suplencias',
        );


        $Data_sustituido = array(
            'numeroempleado_1'      => $_POST['numeroempleado_1'],
            'enlace_numeroempleado' => $_POST['enlace_numeroempleado'],
            'niv_academico'         => $_POST['nivel_academico'],
            'codigopuesto'          => $_POST['codigopuesto'],
            'puesto'                => $_POST['puesto'],
            'turno'                 => $_POST['turno'],
            'dias_h'                => $_POST['dias_h'],
            'horaInicio'            => $_POST['horaInicio'],
            'horaFin'               => $_POST['horaFin'],
            'servicio'              => $_POST['servicio'],
            'criticas'              => $_POST['critica'],
            'clinicas'              => $_POST['clinicas'],
            'quirurgicas'           => $_POST['quirurgicas'],
            'perinatales'           => $_POST['perinatales'],
            'ambulatoria'           => $_POST['Ambulatorias'],
            'hospitalizacion'       => $_POST['hospitalizacion'],
            'pediatria'             => $_POST['pediatria']
        );

        foreach ($Data_sustituido as $key => $value) {
            $Data_sustituido[$key] = $connectionDB->escapeString($value);
        }
        $Result_sustituido = $connectionDB->insertData($Tables[0], $Data_sustituido);

        $Data_sustituto = array(
            'numeroempleado_suplencia' => $_POST['numeroempleado_suplencia'],
            'nombre_suplencia'         => $_POST['nombre_suplencia'],
            'niv_academico2'           => $_POST['nivel_academico_suplencia'],
            'codigopuesto_suplencia'   => $_POST['codigopuesto_suplencia'],
            'puesto_suplencia'         => $_POST['puesto_suplencia'],
            'turno2'                   => $_POST['turno2'],
            'dias_h2'                  => $_POST['dias_h2'],
            'horaInicio2'              => $_POST['horaInicio_suplencia'],
            'horaFin2'                  => $_POST['horaFin_suplencia'],
            'servicio2'                => $_POST['servicio_sustituto'],
            'criticas2'                => $_POST['critica_sustituto'],
            'clinicas2'                => $_POST['clinicas_sustituto'],
            'quirurgicas2'             => $_POST['quirurgicas_sustituto'],
            'perinatales2'             => $_POST['perinatales_sustituto'],
            'ambulatoria2'             => $_POST['Ambulatorias_sustituto'],
            'hospitalizacion2'         => $_POST['hospitalizacion_sustituto'],
            'pediatria2'               => $_POST['pediatria_sustituto'],
        );

        foreach ($Data_sustituto as $key => $value) {
            $Data_sustituto[$key] = $connectionDB->escapeString($value);
        }
        $Result_sustituto = $connectionDB->insertData($Tables[1], $Data_sustituto);


        $Data_suplencia = array(
            'fecha_tramite'   => $_POST['fechaInicio'],
            'fecha_suplencia' => $_POST['fechaFin'],
            'autoriza'        => $_POST['autoriza'],
            'observaciones'   => $_POST['observaciones'],
            'id_sustituido'   => $Result_sustituido,
            'id_sustituto'    => $Result_sustituto
        );

        foreach ($Data_suplencia as $key => $value) {
            $Data_suplencia[$key] = $connectionDB->escapeString($value);
        }
        $Result_suplencia = $connectionDB->insertData($Tables[2], $Data_suplencia);


        $Data_uso_suplencias = array(
            'num_suplencia'   => $_POST['suplencia'],
            'fecha_realizada' => $_POST['fechaHoy'],
            'id_sustituido'   => $Result_sustituido,
            'id_suplencia'    => $Result_suplencia
        );

        foreach ($Data_uso_suplencias as $key => $value) {
            $Data_uso_suplencias[$key] = $connectionDB->escapeString($value);
        }
        $Result_uso = $connectionDB->insertData($Tables[3], $Data_uso_suplencias);

        
        echo 'success';
    }


?>