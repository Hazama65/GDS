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
            $table_puertas         = 'puertas',
            $table_rehabilitacion  = 'rehabilitacion',
            $table_escalas         = 'escalas',
            $table_secuelas        = 'secuelas',
            $table_escalas_salida  = 'escalas_salida'
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
            'id_paciente'  => $Result_Paciente
        );

        foreach ($Data_fast as $key => $value) {
            $Data_fast[$key] = $connectionDB->escapeString($value);
        }
        $Result_Fast = $connectionDB->insertData($Tables[1], $Data_fast);

        $Data_Nihss = array(
            'escala'         => $_POST['nihss'],
            'trombolisis'    => $_POST['trombolisis1'],
            'tpa'            => $_POST['vr_TPA_1'],
            'sangrado'       => $_POST['sangrado'],
            'nivel'          => $_POST['nivel'],
            'fecha_sangrado' => $_POST['fecha_sangrado'],
            'id_paciente'    => $Result_Paciente
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
            'pmau'         => isset($_POST['pmau']) ? 'Si' : 'No',
            'pah'          => isset($_POST['pah']) ? 'Si' : 'No',
            'peia'         => isset($_POST['peia']) ? 'Si' : 'No',
            'pim'          => isset($_POST['pim']) ? 'Si' : 'No',
            'plio'         => isset($_POST['plio']) ? 'Si' : 'No',
            'pcisfa'       => isset($_POST['pcisfa']) ? 'Si' : 'No',
            'ts'           => isset($_POST['ts']) ? 'Si' : 'No',
            'camillero'    => isset($_POST['camillero']) ? 'Si' : 'No',
            'med_neuro'    => isset($_POST['med_neuro']) ? 'Si' : 'No',
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_evc as $key => $value) {
            $Data_evc[$key] = $connectionDB->escapeString($value);
        }
        $Result_evc = $connectionDB->insertData($Tables[4],$Data_evc);


        $Data_Puertas = array(
            'hora_llegada'       => $_POST['tiempo_urgencias'],
            'hora_triage'        => $_POST['tiempo_TRIAGE'],
            'puerta_triage'      => $_POST['puerta_triage'],
            'hora_choque'        => $_POST['tiempo_CHOQUE'],
            'puerta_urgencias'   => $_POST['puerta_urgencias'],
            'hora_tac'           => $_POST['tiempo_TAC'],
            'puerta_tac'         => $_POST['puerta_tac'],
            'hora_em'            => $_POST['tiempo_Multidisciplinario'],
            'puerta_medicos'     => $_POST['puerta_medicos'],
            'hora_trombo'        => $_POST['tiempo_Trombolisis'],
            'puerta_aguja'       => $_POST['puerta_aguja'],
            'hora_terapia'       => $_POST['tiempo_Terapia'],
            'terapia_intensiva'  => $_POST['puerta_terapia'],
            'hora_tac_control'   => $_POST['tiempo_tac'],
            'tac_control'        => $_POST['puerta_taccontrol'],
            'id_paciente'        => $Result_Paciente
        );
        foreach ($Data_Puertas as $key => $value) {
            $Data_Puertas[$key] = $connectionDB->escapeString($value);
        }
        $Result_Puertas = $connectionDB->insertData($Tables[5],$Data_Puertas);




        $Data_Rehabilitacion = array(
            'inicial'      => $_POST['Valoracioninicial_Rehabi'],
            'hospitalaria' => $_POST['valoracion_hospitalaria'],
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_Rehabilitacion as $key => $value) {
            $Data_Rehabilitacion[$key] = $connectionDB->escapeString($value);
        }
        $Result_Rehabilitacion = $connectionDB->insertData($Tables[6],$Data_Rehabilitacion);

        $Data_Escalas = array(
            'df_nivel'     => $_POST['dependendcia_tipo'],
            'df'           => $_POST['dependendcia_funcional'],
            'fim'          => $_POST['fim_inicial'],
            'barthel'      => $_POST['bart'],
            'rankin'       => $_POST['rank'],
            'motri'        => $_POST['motri'],
            'marcha'       => $_POST['marcha'],
            'id_paciente'  => $Result_Paciente
        );
        foreach ($Data_Escalas as $key => $value) {
            $Data_Escalas[$key] = $connectionDB->escapeString($value);
        }
        $Result_Escalas = $connectionDB->insertData($Tables[7],$Data_Escalas);

        $Data_Secuelas = array(

            'deglucion'     => $_POST['deglucion'],
            'lenguaje'      => $_POST['Lenguaje'],
            'motor'         => $_POST['Motor'],
            'extr_sup'      => $_POST['Extremidad_superior'],
            'extr_inf'      => $_POST['Extremidad_Inferior'],
            'dolor'         => $_POST['Dolor'],
            'tipo_neuro'    => $_POST['neuropatico'],
            'cognitivo'     => $_POST['Cognitivo'],
            'interconsulta' => $_POST['interconsulta'],
            'neuro'         => $_POST['neuropsicologia'],
            'marcha'        => $_POST['Marcha'],
            'equilibrio'    => $_POST['Equilibrio'],
            'id_paciente'   => $Result_Paciente
        );
        foreach ($Data_Secuelas as $key => $value) {
            $Data_Secuelas[$key] = $connectionDB->escapeString($value);
        }
        $Result_Secuelas = $connectionDB->insertData($Tables[8],$Data_Secuelas);

        $Data_escalas_salida = array(
            'nihss_salida' => $_POST['nihss_salida'],
            'Escala_gose'  => $_POST['Escala_gose'],
            'id_paciente'   => $Result_Paciente
        );

        foreach ($Data_escalas_salida as $key => $value) {
            $Data_escalas_salida[$key] = $connectionDB->escapeString($value);
        }
        $Result_Secuelas = $connectionDB->insertData($Tables[9],$Data_escalas_salida);



        
        echo 'success';
    }


?>