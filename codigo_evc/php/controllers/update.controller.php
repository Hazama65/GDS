<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_evc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

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
            $table_secuelas        = 'secuelas'
        );

        $updateColum ='id_paciente';
        $updateId    = $_POST['id_paciente'];
        

        $update_paciente = array(
            'nombre_paciente'  => $_POST['nombre'],
            'curp'             => $_POST['curp'],
            'fecha_nacimiento' => $_POST['fecha'],
            'sexo'             => $_POST['sexo'],
            'edad'             => $_POST['edad'],
            'fecha_sintomas'   => $_POST['fecha_inicio'],
            'inicio_sintomas'  => $_POST['inicio_sintomas']
        );

        $connectionDB->updateData($Tables[0],$update_paciente,$updateColum,$updateId);


        $update_fast = array(
            'face'         => $_POST['Face'],
            'arms'         => $_POST['arms'],
            'speech'       => $_POST['speech'],
            'time'         => $_POST['resultado_time']
        );

        $connectionDB->updateData($Tables[1],$update_fast,$updateColum,$updateId);


        $update_Nihss = array(
            'escala'         => $_POST['nihss'],
            'trombolisis'    => $_POST['trombolisis1'],
            'tpa'            => $_POST['vr_TPA_1'],
            'sangrado'       => $_POST['sangrado'],
            'nivel'          => $_POST['nivel'],
            'fecha_sangrado' => $_POST['fecha_sangrado']

        );

        $connectionDB->updateData($Tables[2],$update_Nihss,$updateColum,$updateId);


        $update_Factos = array(
            'evc'            => isset($_POST["EVC"]) ? 'Si' : 'No',
            'hipertension'   => isset($_POST["Hipertension"]) ? 'Si' : 'No',
            'diabetes'       => isset($_POST["Diabetes"]) ? 'Si' : 'No',
            'tabaquismo'     => isset($_POST["Tabaquismo"]) ? 'Si' : 'No',
            'covid'          => isset($_POST["Covid"]) ? 'Si' : 'No',
            'hiperlipidemia' => isset($_POST["Hiperlipidemia"]) ? 'Si' : 'No',
            'apnea'          => isset($_POST["Apnea"]) ? 'Si' : 'No',
            'enfcardio'      => isset($_POST["enfermedad_cardio"]) ? 'Si' : 'No'
        );

        $connectionDB->updateData($Tables[3],$update_Factos,$updateColum,$updateId);


        $update_evc = array(
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
            'med_neuro'    => isset($_POST['med_neuro']) ? 'Si' : 'No'
        );

        $connectionDB->updateData($Tables[4],$update_evc,$updateColum,$updateId);


        $update_Puertas = array(
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
            'tac_control'        => $_POST['puerta_taccontrol']
        );

        $connectionDB->updateData($Tables[5],$update_Puertas,$updateColum,$updateId);


        $update_Rehabilitacion = array(
            'inicial'      => $_POST['Valoracioninicial_Rehabi'],
            'hospitalaria' => $_POST['valoracion_hospitalaria']
        );

        $connectionDB->updateData($Tables[6],$update_Rehabilitacion,$updateColum,$updateId);


        $update_Escalas = array(
            'df_nivel'     => $_POST['dependendcia_tipo'],
            'df'           => $_POST['dependendcia_funcional'],
            'fim'          => $_POST['fim_inicial'],
            'barthel'      => $_POST['bart'],
            'rankin'       => $_POST['rank'],
            'motri'        => $_POST['motri'],
            'marcha'       => $_POST['marcha'],
            'agatha'       => $_POST['agatha']
        );

        $connectionDB->updateData($Tables[7],$update_Escalas,$updateColum,$updateId);


        $update_Secuelas = array(

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
            'equilibrio'    => $_POST['Equilibrio']
        );

        $connectionDB->updateData($Tables[8],$update_Secuelas,$updateColum,$updateId);

        echo 'success';
    }

?>