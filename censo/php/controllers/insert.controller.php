<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_censo.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_paciente   = 'datos_paciente',
            $table_estado_alerte    = 'estado_alerte',
            $table_herramientas     = 'herramientas',
            $table_tratamiento      = 'tratamiento'
        );

        $Data_pacientes = array(
            'fecha'            => $_POST['fecha_inicio'],
            'nombre_paciente'  => $_POST['nombre'],
            'curp'             => $_POST['curp'],
            'fecha_nacimiento' => $_POST['fecha'],
            'sexo'             => $_POST['sexo'],
            'edad'             => $_POST['edad'],
            'cama'             => $_POST['cama'],
            'estado_salud'     => $_POST['estado_salud'],
            'dx'               => $_POST['Diagnostico']
        );

        foreach ($Data_pacientes as $key => $value) {
            $Data_pacientes[$key] = $connectionDB->escapeString($value);
        }
        $Result_Paciente = $connectionDB->insertData($Tables[0], $Data_pacientes);

        $Data_Alerta = array(
            'glasgow'       => $_POST['GLASGOW'],
            'ramsey'        => $_POST['RAMSEY'],
            'act_mot'       => $_POST['act_motora'],
            'signos_v'      => $_POST['Signos_vitales'],
            'pvc'           => $_POST['PVC'],
            'precaucion_t'  => $_POST['precauciones_basadast'],
            'id_paciente'   => $Result_Paciente
        );
        
        foreach ($Data_Alerta as $key => $value) {
            $Data_Alerta[$key] = $connectionDB->escapeString($value);
        }
        $Result_Alerta = $connectionDB->insertData($Tables[1], $Data_Alerta);

        $Data_Herramientas = array(
            'cateter_c'     => $_POST['cateter_perifericoC'],
            'cateter_v'     => $_POST['cateter_venoso'],
            'dispositivo_r' => $_POST['dispositivo_respiratorio'],
            'sonda_foley'   => $_POST['sonda_foley'],
            'sonda_naso'    => $_POST['sonda_nasogastrica'],
            'colostomia'    => $_POST['sonda_colostomia'],
            'penrose'       => $_POST['penrose'],
            'id_paciente'   => $Result_Paciente
        );
        
        foreach ($Data_Herramientas as $key => $value) {
            $Data_Herramientas[$key] = $connectionDB->escapeString($value);
        }
        $Result_Herramientas = $connectionDB->insertData($Tables[2], $Data_Herramientas);

        $Data_Tratamiento = array(
            'dieta'       => $_POST['tratamiento_dieta'],
            'introvenosa' => $_POST['tratamiento'],
            'infusiones'  => $_POST['infusiones_especiales'],
            'id_paciente' => $Result_Paciente
        );
        
        foreach ($Data_Tratamiento as $key => $value) {
            $Data_Tratamiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_Tratamiento = $connectionDB->insertData($Tables[3], $Data_Tratamiento);

        
        echo 'success';
    }


?>