<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $Tables = array(
            $table_datos_paciente = 'datos_paciente',
            $table_datos_escalas  = 'escalas'

        );

        $data_paciente  = array(
            'nombre_paciente' => $_POST['nombre_paciente'],
            'curp'            => $_POST['curp'],
            'fecha'           => $_POST['fecha'],
            'edad'            => $_POST['edad'],
            'sexo'            => $_POST['sexo']
        );

        foreach ($data_paciente  as $key => $value) {
            $data_paciente [$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_cuestionario = $connectionDB->insertData($Tables[0], $data_paciente );

        $data_escalas  = array(
            'NIHSS'          => $_POST['NIHSS'],
            'NIHSS_escala'   => $_POST['NIHSS_escala'],
            'BARTHEL'        => $_POST['BARTHEL'],
            'BARTHEL_escala' => $_POST['BARTHEL_escala'],
            'FIM'            => $_POST['FIM'],
            'FIM_escala'     => $_POST['FIM_escala'],
            'RANKIN'         => $_POST['RANKIN'],
            'RANKIN_escala'  => $_POST['RANKIN_escala'],
            'MOTRICITY'      => $_POST['MOTRICITY'],
            'MARCHA'         => $_POST['MARCHA'],
            'MARCHA_escala'  => $_POST['MARCHA_escala'],
            'id_paciente'    => $Result_datos_cuestionario
        );

        foreach ($data_escalas  as $key => $value) {
            $data_escalas [$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[1], $data_escalas );

        echo 'success';
    }

    
?>