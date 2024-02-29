<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_generales = 'datos_generales',
        );

        $Data_general = array(
            'trabajador_sustituido' => $_POST['enlace_numeroempleado'],
            'trabajador_sustituto'  => $_POST['nombre'],
            'nivel_academia'        => $_POST['nivel_academico'],
            'turno'                 => $_POST['Turno'],
            'servicio'              => $_POST['servicio'],
            'fecha_tramite'         => $_POST['fecha_tramite'],
            'fecha_suplencia'       => $_POST['fecha_suplencia'],
            'autoriza'              => $_POST['autoriza']
        );

        foreach ($Data_general as $key => $value) {
            $Data_general[$key] = $connectionDB->escapeString($value);
        }
        $Result_Paciente = $connectionDB->insertData($Tables[0], $Data_general);


        
        echo 'success';
    }


?>