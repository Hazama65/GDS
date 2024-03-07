<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $Tables = array(
            $table_datos_cuestionario   = 'datos_cuestionario',
            $table_pregunta1            = 'pregunta1',
            $table_pregunta2            = 'pregunta2',
            $table_pregunta3            = 'pregunta3',
            $table_pregunta4            = 'pregunta4'
        );

        $Data_datos_cuestionario = array(
            'edad'       => $_POST['Edad'],
            'sexo'       => $_POST['Sexo'],
            'servicio'   => $_POST['Servicio'],
            'turno'      => $_POST['Turno'],
            'profesion'  => $_POST['Disciplina'],
            'contrato'   => $_POST['contratacion']
        );

        foreach ($Data_datos_cuestionario as $key => $value) {
            $Data_datos_cuestionario[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_cuestionario = $connectionDB->insertData($Tables[0], $Data_datos_cuestionario);

        $Data_pregunta1 = array(
            'pregunta_1'         => $_POST['cuestion_1'],
            'pregunta_1_a'       => isset($_POST['opciones_a_1']) ? $_POST['opciones_a_1'] : '',
            'pregunta_1_b'       => isset($_POST['opciones_a_2']) ? $_POST['opciones_a_2'] : '',
            'pregunta_1_c'       => isset($_POST['opciones_a_3']) ? $_POST['opciones_a_3'] : '',
            'pregunta_1_d'       => isset($_POST['opciones_a_4']) ? $_POST['opciones_a_4'] : '',
            'pregunta_1_e'       => isset($_POST['opciones_a_5']) ? $_POST['opciones_a_5'] : '',
            'pregunta_1_f'       => isset($_POST['opciones_a_otros']) ? $_POST['opciones_a_otros'] : '',
            'pregunta_1_otros'   => $_POST['otro_cual'],
            'num_cuestionario'   => $Result_datos_cuestionario
        );
        
        foreach ($Data_pregunta1 as $key => $value) {
            $Data_pregunta1[$key] = $connectionDB->escapeString($value);
        }
        $Result_pregunta1 = $connectionDB->insertData($Tables[1], $Data_pregunta1);

        $Data_pregunta2 = array(
            'pregunta_2'           => $_POST['cuestion_2'],
            'pregunta_2_1'         => isset($_POST['ocasiones']) ? $_POST['ocasiones'] : '',
            'pregunta_2_2_a'       => isset($_POST['razones_a_1']) ? $_POST['razones_a_1'] : '',
            'pregunta_2_2_b'       => isset($_POST['razones_a_2']) ? $_POST['razones_a_2'] : '',
            'pregunta_2_2_c'       => isset($_POST['razones_a_3']) ? $_POST['razones_a_3'] : '',
            'pregunta_2_2_d'       => isset($_POST['razones_a_4']) ? $_POST['razones_a_4'] : '',
            'pregunta_2_2_e'       => isset($_POST['razones_a_5']) ? $_POST['razones_a_5'] : '',
            'pregunta_2_2_f'       => isset($_POST['razones_a_6']) ? $_POST['razones_a_6'] : '',
            'pregunta_2_2_g'       => isset($_POST['razones_a_7']) ? $_POST['razones_a_7'] : '',
            'pregunta_2_2_h'       => isset($_POST['razones_a_8']) ? $_POST['razones_a_8'] : '',
            'pregunta_2_2_i'       => isset($_POST['razones_a_9']) ? $_POST['razones_a_9'] : '',
            'pregunta_2_2_j'       => isset($_POST['razones_a_10']) ? $_POST['razones_a_10'] : '',
            'pregunta_2_2_k'       => isset($_POST['razones_a_11']) ? $_POST['razones_a_11'] : '',
            'pregunta_2_2_l'       => isset($_POST['razones_a_12']) ? $_POST['razones_a_12'] : '',
            'pregunta_2_2_m'       => isset($_POST['razones_a_13']) ? $_POST['razones_a_13'] : '',
            'pregunta_2_2_n'       => isset($_POST['razones_a_14']) ? $_POST['razones_a_14'] : '',
            'pregunta_2_2_o'       => isset($_POST['razones_a_15']) ? $_POST['razones_a_15'] : '',
            'pregunta_2_2_p'       => isset($_POST['razones_otro']) ? $_POST['razones_otro'] : '',
            'pregunta_2_2_otros'   => isset($_POST['razones_otro_cual']) ? $_POST['razones_otro_cual'] : '',
            'num_cuestionario'     => $Result_datos_cuestionario
        );
        
        foreach ($Data_pregunta2 as $key => $value) {
            $Data_pregunta2[$key] = $connectionDB->escapeString($value);
        }
        $Result_pregunta2 = $connectionDB->insertData($Tables[2], $Data_pregunta2);

        $Data_pregunta3 = array(
            'pregunta_3'         => $_POST['informante'],
            'pregunta_3_otros'   => $_POST['informante_otro_cual'],
            'num_cuestionario'   => $Result_datos_cuestionario
        );
        
        foreach ($Data_pregunta3 as $key => $value) {
            $Data_pregunta3[$key] = $connectionDB->escapeString($value);
        }
        $Result_pregunta3 = $connectionDB->insertData($Tables[3], $Data_pregunta3);


        $Data_pregunta4 = array(
            'pregunta_4'           => $_POST['cuestion_6'],
            'pregunta_4_2_a'       => isset($_POST['eventos_a_1']) ? $_POST['eventos_a_1'] : '',
            'pregunta_4_2_b'       => isset($_POST['eventos_a_2']) ? $_POST['eventos_a_2'] : '',
            'pregunta_4_2_c'       => isset($_POST['eventos_a_3']) ? $_POST['eventos_a_3'] : '',
            'pregunta_4_2_d'       => isset($_POST['eventos_a_4']) ? $_POST['eventos_a_4'] : '',
            'pregunta_4_2_e'       => isset($_POST['eventos_a_5']) ? $_POST['eventos_a_5'] : '',
            'pregunta_4_2_f'       => isset($_POST['eventos_a_6']) ? $_POST['eventos_a_6'] : '',
            'pregunta_4_2_g'       => isset($_POST['eventos_a_7']) ? $_POST['eventos_a_7'] : '',
            'pregunta_4_2_h'       => isset($_POST['eventos_a_8']) ? $_POST['eventos_a_8'] : '',
            'pregunta_4_2_i'       => isset($_POST['eventos_a_9']) ? $_POST['eventos_a_9'] : '',
            'pregunta_4_3_a'       => isset($_POST['eventos_centinelas_b_1']) ? $_POST['eventos_centinelas_b_1'] : '',
            'pregunta_4_3_b'       => isset($_POST['eventos_centinelas_b_2']) ? $_POST['eventos_centinelas_b_2'] : '',
            'pregunta_4_3_c'       => isset($_POST['eventos_centinelas_b_3']) ? $_POST['eventos_centinelas_b_3'] : '',
            'pregunta_4_3_d'       => isset($_POST['eventos_centinelas_b_4']) ? $_POST['eventos_centinelas_b_4'] : '',
            'pregunta_4_3_e'       => isset($_POST['eventos_centinelas_b_5']) ? $_POST['eventos_centinelas_b_5'] : '',
            'pregunta_4_3_f'       => isset($_POST['eventos_centinelas_b_6']) ? $_POST['eventos_centinelas_b_6'] : '',
            'pregunta_4_3_g'       => isset($_POST['eventos_centinelas_b_7']) ? $_POST['eventos_centinelas_b_7'] : '',
            'pregunta_4_4_a'       => isset($_POST['incidentes_c_1']) ? $_POST['incidentes_c_1'] : '',
            'pregunta_4_4_b'       => isset($_POST['incidentes_c_2']) ? $_POST['incidentes_c_2'] : '',
            'num_cuestionario'     => $Result_datos_cuestionario
        );
        
        foreach ($Data_pregunta4 as $key => $value) {
            $Data_pregunta4[$key] = $connectionDB->escapeString($value);
        }
        $Result_pregunta4 = $connectionDB->insertData($Tables[4], $Data_pregunta4);




        echo 'success';
    }

    
?>