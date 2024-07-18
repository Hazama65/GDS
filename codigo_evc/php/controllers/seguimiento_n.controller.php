<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_evc.php');
    $connectionDB = new Database (DB_HOS_seg_n, DB_NAME_seg_n, DB_USERNAME_seg_n, DB_PASSWORD_seg_n);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_seguimiento     = 'datos_seguimiento',
            $table_factor_riesgo   = 'factor_riesgo',
            $table_preve_trombo    = 'preve_trombo',
            $table_cerebro         = 'cerebro',
            $table_nrc             = 'nrc'
        );

        $Data_seguimiento = array(
            'fecha_seg'       => $_POST['fecha_seg'],
            'fecha_inicio'    => $_POST['fecha_inicio'],
            'inicio_sintomas' => $_POST['inicio_sintomas'],
            'fecha_atencion'  => $_POST['fecha_atencion'],
            'id_paciente'     => $_POST['id_paciente']
        );
        foreach ($Data_seguimiento as $key => $value) {
            $Data_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_seguimiento = $connectionDB->insertData($Tables[0], $Data_seguimiento);

        $Data_Factos = array(
            'EVC'                => isset($_POST["EVC"]) ? 'Si' : 'No',
            'Hipertension'       => isset($_POST["Hipertension"]) ? 'Si' : 'No',
            'Diabetes'           => isset($_POST["Diabetes"]) ? 'Si' : 'No',
            'Tabaquismo'         => isset($_POST["Tabaquismo"]) ? 'Si' : 'No',
            'Covid'              => isset($_POST["Covid"]) ? 'Si' : 'No',
            'Hiperlipidemia'     => isset($_POST["Hiperlipidemia"]) ? 'Si' : 'No',
            'Apnea'              => isset($_POST["Apnea"]) ? 'Si' : 'No',
            'enfermedad_cardio'  => isset($_POST["enfermedad_cardio"]) ? 'Si' : 'No',
            'id_seguimiento'     => $Result_seguimiento
        );

        foreach ($Data_Factos as $key => $value) {
            $Data_Factos[$key] = $connectionDB->escapeString($value);
        }
        
        $connectionDB->insertData($Tables[1],$Data_Factos);

        $Data_PT = array(
            'antiagregante'   => isset($_POST['antiagregante']) ? 'Si' : 'No',
            'antioagulante'   => isset($_POST['antioagulante']) ? 'Si' : 'No',
            'estatinas'       => isset($_POST['estatinas']) ? 'Si' : 'No',
            'Estatinas_med'   => $_POST['Estatinas_med'],
            'dosis_Estatinas' => $_POST['dosis_Estatinas'],
            'tiempo_Estatinas'=> $_POST['tiempo_Estatinas'],
            'trombolisis'     => $_POST['trombolisis'],
            'r_TPA_1'         => $_POST['r_TPA_1'],
            'sangrado'        => $_POST['sangrado'],
            'nivel'           => $_POST['nivel'],
            'fecha_sangrado'  => $_POST['fecha_sangrado'],
            'id_seguimiento'  => $Result_seguimiento
        );

        foreach ($Data_PT as $key => $value) {
            $Data_PT[$key] = $connectionDB->escapeString($value);
        }
        
        $connectionDB->insertData($Tables[2],$Data_PT);

        $Data_cerebro = array(
            'cerebrolisina'  => $_POST['cerebrolisina'],
            'dosis_cerebro'  => $_POST['dosis_cerebro'],
            'tiempo_cerebro' => $_POST['tiempo_cerebro'],
            'id_seguimiento' => $Result_seguimiento
        );
        foreach ($Data_cerebro as $key => $value) {
            $Data_cerebro[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[3], $Data_cerebro);

        $Data_nrc = array(
            'escala_nihss_seg'     => $_POST['escala_nihss_seg'],
            'rankin_seguimiento'   => $_POST['rankin_seguimiento'],
            'puntuacion_has'       => $_POST ['puntuacion_has'],
            'interpretacion_has'   => $_POST ['interpretacion_has'],
            'chads'                => $_POST['chads'],
            'riesgo_chads'         => $_POST['riesgo_chads'],
            'id_seguimiento'       => $Result_seguimiento
        );
        foreach ($Data_nrc as $key => $value) {
            $Data_nrc[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[4], $Data_nrc);

        
        echo 'success';
    }


?>