<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_censo.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Tables = array(
            $table_datos_paciente   = 'datos_paciente',
            $table_estado_alerte    = 'estado_alerte',
            $table_herramientas     = 'herramientas',
            $table_tratamiento      = 'tratamiento'
        );

        $updateColum ='id_paciente';
        $updateId    = $_POST['id_paciente'];
        

        $update_paciente = array(
            'fecha'            => $_POST['fecha_inicio'],
            'nombre_paciente'  => $_POST['nombre'],
            'curp'             => $_POST['curp'],
            'fecha_nacimiento' => $_POST['fecha'],
            'sexo'             => $_POST['sexo'],
            'edad'             => $_POST['edad'],
            'cama'             => $_POST['cama'],
            'cama_movimiento'  => $_POST['cama_cambio'],
            'estado_salud'     => $_POST['estado_salud'],
            'dx'               => $_POST['Diagnostico']
        );

        $connectionDB->updateData($Tables[0],$update_paciente,$updateColum,$updateId);

        $update_Alerta = array(
            'glasgow'       => $_POST['GLASGOW'],
            'ramsey'        => $_POST['RAMSEY'],
            'act_mot'       => $_POST['act_motora'],
            'signos_v'      => $_POST['Signos_vitales'],
            'pvc'           => $_POST['PVC'],
            'precaucion_t'  => $_POST['precauciones_basadast']
        );

        $connectionDB->updateData($Tables[1],$update_Alerta,$updateColum,$updateId);

        $update_Herramientas = array(
            'cateter_c'     => $_POST['cateter_perifericoC'],
            'cateter_v'     => $_POST['cateter_venoso'],
            'dispositivo_r' => $_POST['dispositivo_respiratorio'],
            'sonda_foley'   => $_POST['sonda_foley'],
            'sonda_naso'    => $_POST['sonda_nasogastrica'],
            'colostomia'    => $_POST['sonda_colostomia'],
            'penrose'       => $_POST['penrose']
        );

        $connectionDB->updateData($Tables[2],$update_Herramientas,$updateColum,$updateId);

        $update_Tratamiento = array(
            'dieta'       => $_POST['tratamiento_dieta'],
            'introvenosa' => $_POST['tratamiento'],
            'infusiones'  => $_POST['infusiones_especiales']
        );

        $connectionDB->updateData($Tables[3],$update_Tratamiento,$updateColum,$updateId);

        

        echo 'success';
    }

?>