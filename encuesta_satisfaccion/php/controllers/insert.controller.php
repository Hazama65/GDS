<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Data_encuesta = $_POST['informacionCuestionario'];

        $Tables = array(
            $table_respuesta_encuesta   = 'respuesta_encuesta'
        );

        $Data_respuesta_encuesta = array(
            'pregunta_1'   => $Data_encuesta[0],
            'pregunta_2'   => $Data_encuesta[1],
            'pregunta_3'   => $Data_encuesta[2],
            'pregunta_4'   => $Data_encuesta[3],
            'pregunta_5'   => $Data_encuesta[4],
            'pregunta_6'   => $Data_encuesta[5],
            'pregunta_7'   => $Data_encuesta[6],
            'pregunta_8'   => $Data_encuesta[7],
            'pregunta_9'   => $Data_encuesta[8],
            'pregunta_10'  => $Data_encuesta[9],
            'pregunta_11'  => $Data_encuesta[10],
            'pregunta_12'  => $Data_encuesta[11],
            'dato_seg'     => $Data_encuesta[12],
        );

        foreach ($Data_respuesta_encuesta as $key => $value) {
            $Data_respuesta_encuesta[$key] = $connectionDB->escapeString($value);
        }
        $Result_respuesta_encuesta = $connectionDB->insertData($Tables[0], $Data_respuesta_encuesta);

        echo 'success';
    }

    
?>