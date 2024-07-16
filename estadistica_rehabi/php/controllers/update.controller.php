<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ER.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Tables = array(
            $table_datos_paciente = 'datos_paciente',
            $table_procedimientos = 'procedimientos'
        );
        $updateColum ='id_paciente';
        $updateId    = $_POST['id_paciente'];

        $update_paciente = array(
            'nombre_terapeuta'  => $_POST['nombre_terapeuta'],
            'Turno_terapeuta'   => $_POST['Turno_terapeuta'],
            'nombre_paciente'   => $_POST['nombre_paciente'],
            'curp'              => $_POST['curp'],
            'fecha'             => $_POST['fecha'],
            'edad'              => $_POST['edad'],
            'sexo'              => $_POST['sexo'],
            'tipo_paciente'     => $_POST['tipo_paciente'],
            'fecha_inicio'      => $_POST['fecha_inicio'],
            'fecha_fin'         => $_POST['fecha_fin']
        );

        $connectionDB->updateData($Tables[0],$update_paciente,$updateColum,$updateId);

        $update_patologicos = array(
            'sesiones_num_terapia_fisica'                                      => $_POST['sesiones_num_terapia_fisica'],
            'primera_vez_terapia_fisica'                                       => $_POST['primera_vez_terapia_fisica'],
            'subsecuente_terapia_fisica'                                       => $_POST['subsecuente_terapia_fisica'],
            'terapias_ambulatorias_terapia_fisica'                             => $_POST['terapias_ambulatorias_terapia_fisica'],
            'terapias_hospitalizacion_terapia_fisica'                          => $_POST['terapias_hospitalizacion_terapia_fisica'],
            'sesiones_num_terapia_ocupacional'                                 => $_POST['sesiones_num_terapia_ocupacional'],
            'primera_vez_terapia_ocupacional'                                  => $_POST['primera_vez_terapia_ocupacional'],
            'subsecuente_terapia_ocupacional'                                  => $_POST['subsecuente_terapia_ocupacional'],
            'terapias_ambulatorias_terapia_ocupacional'                        => $_POST['terapias_ambulatorias_terapia_ocupacional'],
            'terapias_hospitalizacion_terapia_ocupacional'                     => $_POST['terapias_hospitalizacion_terapia_ocupacional'],
            'sesiones_num_terapia_lenguaje'                                    => $_POST['sesiones_num_terapia_lenguaje'],
            'primera_vez_terapia_lenguaje'                                     => $_POST['primera_vez_terapia_lenguaje'],
            'subsecuente_terapia_lenguaje'                                     => $_POST['subsecuente_terapia_lenguaje'],
            'terapias_ambulatorias_terapia_lenguaje'                           => $_POST['terapias_ambulatorias_terapia_lenguaje'],
            'terapias_hospitalizacion_terapia_lenguaje'                        => $_POST['terapias_hospitalizacion_terapia_lenguaje'],
            'sesiones_num_aplicacion_ferula'                                   => $_POST['sesiones_num_aplicacion_ferula'],
            'sesiones_num_Aplicacion_vendaje_enyesado'                         => $_POST['sesiones_num_Aplicacion_vendaje_enyesado'],
            'sesiones_num_Baño_parafina'                                       => $_POST['sesiones_num_Baño_parafina'],
            'sesiones_num_CHC_CF'                                              => $_POST['sesiones_num_CHC_CF'],
            'sesiones_num_Corrientes_interfereciales'                          => $_POST['sesiones_num_Corrientes_interfereciales'],
            'sesiones_num_Electroestimulacion'                                 => $_POST['sesiones_num_Electroestimulacion'],
            'sesiones_num_Ejercicio_Asistido'                                  => $_POST['sesiones_num_Ejercicio_Asistido'],
            'sesiones_num_Ejercicio_Fisioterapia'                              => $_POST['sesiones_num_Ejercicio_Fisioterapia'],
            'sesiones_num_Hidroterapia_TanqueTerapéutico'                      => $_POST['sesiones_num_Hidroterapia_TanqueTerapéutico'],
            'sesiones_num_Hidroterapia_Tina_Habbard'                           => $_POST['sesiones_num_Hidroterapia_Tina_Habbard'],
            'sesiones_num_Hidroterapia_Tina_Remolinos'                         => $_POST['sesiones_num_Hidroterapia_Tina_Remolinos'],
            'sesiones_num_TENS'                                                => $_POST['sesiones_num_TENS'],
            'sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica'              => $_POST['sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica'],
            'sesiones_num_Ultrasonido_Terapeutico'                             => $_POST['sesiones_num_Ultrasonido_Terapeutico'],
            'sesiones_num_TraccionCervical_Lumbar'                             => $_POST['sesiones_num_TraccionCervical_Lumbar'],
            'sesiones_num_Rehabi_cardiaca'                                     => $_POST['sesiones_num_Rehabi_cardiaca'],
            'sesiones_num_Ejercicios_respiratorio'                             => $_POST['sesiones_num_Ejercicios_respiratorio'],
            'sesiones_num_Terapia_Laser'                                       => $_POST['sesiones_num_Terapia_Laser'],
            'sesiones_num_Toxina_Botulinica'                                   => $_POST['sesiones_num_Toxina_Botulinica']
        );

        $connectionDB->updateData($Tables[1],$update_patologicos,$updateColum,$updateId);


        echo 'success'; 
    }
?>