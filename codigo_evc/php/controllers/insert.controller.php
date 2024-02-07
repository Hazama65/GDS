<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_evc.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datosPacinete   = 'datos_paciente',
            $table_fast            = 'fast',
            $table_nihss           = 'nihss',
            $table_factorRiesgo    = 'factor_riesgo',
            $table_evc             = 'codigo_evc',
            $table_rehabilitacion  = 'rehabilitacion',
            $table_escalas         = 'escalas'
        );

        $Data_pacientes = array(
            'nombre_paciente'  => $_POST['nombre'],
            'curp'             => $_POST['curp'],
            'fecha_nacimiento' => $_POST['fecha'],
            'sexo'             => $_POST['sexo'],
            'edad'             => $_POST['edad'],
            'fecha_sintomas'   => $_POST['fecha_inicio'],
            'inicio_sintomas'  => $_POST['inicio_sintomas']
        );
        foreach ($Data_pacientes as $key => $value) {
            $Data_pacientes[$key] = $connectionDB->escapeString($value);
        }
        $Result_Paciente = $connectionDB->insertData($Tables[0], $Data_pacientes);

        $Data_fast = array(
            'face'         => $_POST['Face'],
            'arms'         => $_POST['arms'],
            'speech'       => $_POST['speech'],
            'time'         => $_POST['resultado_time'],
            'id_paciente'  => $Result_Paciente
        );

        foreach ($Data_fast as $key => $value) {
            $Data_fast[$key] = $connectionDB->escapeString($value);
        }
        $Result_Fast = $connectionDB->insertData($Tables[1], $Data_fast);

        $Data_Nihss = array(
            'escala'       => $_POST['nihss'],
            'trombolisis'  => $_POST['trombolisis1'],
            'tpa'          => $_POST['vr_TPA_1'],
            'sangrado'     => $_POST['sangrado'],
            'nivel'        => $_POST['nivel'],
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_Nihss as $key => $value) {
            $Data_Nihss[$key] = $connectionDB->escapeString($value);
        }
        $Result_Nihss = $connectionDB->insertData($Tables[2], $Data_Nihss);

        $Data_Factos = array(
            'evc'            => isset($_POST["EVC"]) ? 'Si' : 'No',
            'hipertension'   => isset($_POST["Hipertension"]) ? 'Si' : 'No',
            'diabetes'       => isset($_POST["Diabetes"]) ? 'Si' : 'No',
            'tabaquismo'     => isset($_POST["Tabaquismo"]) ? 'Si' : 'No',
            'covid'          => isset($_POST["Covid"]) ? 'Si' : 'No',
            'hiperlipidemia' => isset($_POST["Hiperlipidemia"]) ? 'Si' : 'No',
            'apnea'          => isset($_POST["Apnea"]) ? 'Si' : 'No',
            'enfcardio'      => isset($_POST["enfermedad_cardio"]) ? 'Si' : 'No',
            'id_paciente'    => $Result_Paciente
        );

        foreach ($Data_Factos as $key => $value) {
            $Data_Factos[$key] = $connectionDB->escapeString($value);
        }
        
        $Result_Facto = $connectionDB->insertData($Tables[3],$Data_Factos);

        $Data_evc = array(
            'activacion'   => $_POST['se_activa'],
            'defuncion'    => $_POST['defuncion'],
            'area'         => $_POST['area'],
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_evc as $key => $value) {
            $Data_evc[$key] = $connectionDB->escapeString($value);
        }
        $Result_evc = $connectionDB->insertData($Tables[4],$Data_evc);

        $Data_Rehabilitacion = array(
            'inicial'      => $_POST['Valoracioninicial_Rehabi'],
            'hospitalaria' => $_POST['valoracion_hospitalaria'],
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_Rehabilitacion as $key => $value) {
            $Data_Rehabilitacion[$key] = $connectionDB->escapeString($value);
        }
        $Result_Rehabilitacion = $connectionDB->insertData($Tables[5],$Data_Rehabilitacion);

        $Data_Escalas = array(
            'df_nivel'     => $_POST['dependendcia_tipo'],
            'df'           => $_POST['dependendcia_funcional'],
            'fim'          => $_POST['fim_inicial'],
            'barthel'      => $_POST['rankin'],
            'rankin'       => $_POST['dependendcia_funcional'],
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_Escalas as $key => $value) {
            $Data_Escalas[$key] = $connectionDB->escapeString($value);
        }
        $Result_Escalas = $connectionDB->insertData($Tables[6],$Data_Escalas);


        
        echo 'success';
    }


?>