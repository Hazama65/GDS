<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $Tables = array(
            $table_datos_cuestionario   = 'datos_paciente'
        );

        $Data_datos_cuestionario = array(
            'nombre'           => $_POST['nombre'],
            'horallegada'      => $_POST['horallegada'],
            'medico'           => $_POST['medico'],
            'Temperatura'      => $_POST['Temperatura'],
            'FR'               => $_POST['FR'],
            'Presion_arterial' => $_POST['Presion_arterial'],
            'Pulso'            => $_POST['Pulso'],
            'Talla'            => $_POST['Talla'],
            'Peso'             => $_POST['Peso']
        );

        foreach ($Data_datos_cuestionario as $key => $value) {
            $Data_datos_cuestionario[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_cuestionario = $connectionDB->insertData($Tables[0], $Data_datos_cuestionario);

        echo 'success';
    }

    
?>