<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ER.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_paciente  = 'datos_seguimiento',
            $table_procedimientos  = 'procedimientos_seg',
            $table_estadistica     = 'estadistica',
            $table_estadistica_avd = 'estadistica_avd'
        );

        $Data_pacientes = array(
            'id_paciente'          => $_POST['id_paciente'],
            'nombre_terapeuta_seg' => $_POST['nombre_terapeuta_seg'],
            'Turno_terapeutai_seg' => $_POST['Turno_terapeutai_seg'],
            'sesiones_num_seg'     => $_POST['sesiones_num_seg'],
            'fecha_seg'            => $_POST['fecha_seg']
        );

        foreach ($Data_pacientes as $key => $value) {
            $Data_pacientes[$key] = $connectionDB->escapeString($value);
        }
        $Result_pacientes = $connectionDB->insertData($Tables[0], $Data_pacientes);


        $Data_procedimientos = array(
            'tipo_terapias'                          => $_POST['tipo_terapias'],
            'terapia_fisica'                         => isset($_POST['terapia_fisica']) ? 'Si' : 'No',
            'terapia_ocupacional'                    => isset($_POST['terapia_ocupacional']) ? 'Si' : 'No',
            'terapia_lenguaje'                       => isset($_POST['terapia_lenguaje']) ? 'Si' : 'No',
            'aplicacion_ferula'                      => isset($_POST['aplicacion_ferula']) ? 'Si' : 'No',
            'Aplicacion_vendaje_enyesado'            => isset($_POST['Aplicacion_vendaje_enyesado']) ? 'Si' : 'No',
            'Baño_parafina'                          => isset($_POST['Baño_parafina']) ? 'Si' : 'No',
            'CHC_CF'                                 => isset($_POST['CHC_CF']) ? 'Si' : 'No',
            'Corrientes_interfereciales'             => isset($_POST['Corrientes_interfereciales']) ? 'Si' : 'No',
            'Electroestimulacion'                    => isset($_POST['Electroestimulacion']) ? 'Si' : 'No',
            'Ejercicio_Asistido'                     => isset($_POST['Ejercicio_Asistido']) ? 'Si' : 'No',
            'Ejercicio_Fisioterapia'                 => isset($_POST['Ejercicio_Fisioterapia']) ? 'Si' : 'No',
            'Hidroterapia_TanqueTerapéutico'         => isset($_POST['Hidroterapia_TanqueTerapéutico']) ? 'Si' : 'No',
            'Hidroterapia_Tina_Habbard'              => isset($_POST['Hidroterapia_Tina_Habbard']) ? 'Si' : 'No',
            'Hidroterapia_Tina_Remolinos'            => isset($_POST['Hidroterapia_Tina_Remolinos']) ? 'Si' : 'No',
            'TENS'                                   => isset($_POST['TENS']) ? 'Si' : 'No',
            'TerapiacombinadaUSG_CorrienteEléctrica' => isset($_POST['TerapiacombinadaUSG_CorrienteEléctrica']) ? 'Si' : 'No',
            'Ultrasonido_Terapeutico'                => isset($_POST['Ultrasonido_Terapeutico']) ? 'Si' : 'No',
            'TraccionCervical_Lumbar'                => isset($_POST['TraccionCervical_Lumbar']) ? 'Si' : 'No',
            'Rehabi_cardiaca'                        => isset($_POST['Rehabi_cardiaca']) ? 'Si' : 'No',
            'Ejercicios_respiratorio'                => isset($_POST['Ejercicios_respiratorio']) ? 'Si' : 'No',
            'Terapia_Laser'                          => isset($_POST['Terapia_Laser']) ? 'Si' : 'No',
            'Toxina_Botulinica'                      => isset($_POST['Toxina_Botulinica']) ? 'Si' : 'No',
            'id_seguimiento'                         => $Result_pacientes
        );

        foreach ($Data_procedimientos as $key => $value) {
            $Data_procedimientos[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[1], $Data_procedimientos);


        $Data_estadistica = array(
            'id_paciente'    => $_POST['id_paciente'],
            'terapeuta'      => $_POST['nombre_terapeuta_seg'],
            'fecha'          => $_POST['fecha_seg'],
            'turno'          => $_POST['Turno_terapeutai_seg'],
            't_fisica'       => isset($_POST['terapia_fisica']) ? 'Si' : 'No',
            't_ocupacional'  => isset($_POST['terapia_ocupacional']) ? 'Si' : 'No',
            't_lenguaje'     => isset($_POST['terapia_lenguaje']) ? 'Si' : 'No',
            'tipo_consulta'  => 'Subsecuente',
            'tipo_terapias'  => $_POST['tipo_terapias']
        );

        $connectionDB->insertData($Tables[2], $Data_estadistica);

        $Data_estadistica_avd = array(
            'fecha'                                  => $_POST['fecha_seg'],
            'terapia_fisica'                         => isset($_POST['terapia_fisica']) ? 'Si' : 'No',
            'terapia_ocupacional'                    => isset($_POST['terapia_ocupacional']) ? 'Si' : 'No',
            'terapia_lenguaje'                       => isset($_POST['terapia_lenguaje']) ? 'Si' : 'No',
            'aplicacion_ferula'                      => isset($_POST['aplicacion_ferula']) ? 'Si' : 'No',
            'Aplicacion_vendaje_enyesado'            => isset($_POST['Aplicacion_vendaje_enyesado']) ? 'Si' : 'No',
            'Baño_parafina'                          => isset($_POST['Baño_parafina']) ? 'Si' : 'No',
            'CHC_CF'                                 => isset($_POST['CHC_CF']) ? 'Si' : 'No',
            'Corrientes_interfereciales'             => isset($_POST['Corrientes_interfereciales']) ? 'Si' : 'No',
            'Electroestimulacion'                    => isset($_POST['Electroestimulacion']) ? 'Si' : 'No',
            'Ejercicio_Asistido'                     => isset($_POST['Ejercicio_Asistido']) ? 'Si' : 'No',
            'Ejercicio_Fisioterapia'                 => isset($_POST['Ejercicio_Fisioterapia']) ? 'Si' : 'No',
            'Hidroterapia_TanqueTerapéutico'         => isset($_POST['Hidroterapia_TanqueTerapéutico']) ? 'Si' : 'No',
            'Hidroterapia_Tina_Habbard'              => isset($_POST['Hidroterapia_Tina_Habbard']) ? 'Si' : 'No',
            'Hidroterapia_Tina_Remolinos'            => isset($_POST['Hidroterapia_Tina_Remolinos']) ? 'Si' : 'No',
            'TENS'                                   => isset($_POST['TENS']) ? 'Si' : 'No',
            'TerapiacombinadaUSG_CorrienteEléctrica' => isset($_POST['TerapiacombinadaUSG_CorrienteEléctrica']) ? 'Si' : 'No',
            'Ultrasonido_Terapeutico'                => isset($_POST['Ultrasonido_Terapeutico']) ? 'Si' : 'No',
            'TraccionCervical_Lumbar'                => isset($_POST['TraccionCervical_Lumbar']) ? 'Si' : 'No',
            'Rehabi_cardiaca'                        => isset($_POST['Rehabi_cardiaca']) ? 'Si' : 'No',
            'Ejercicios_respiratorio'                => isset($_POST['Ejercicios_respiratorio']) ? 'Si' : 'No',
            'Terapia_Laser'                          => isset($_POST['Terapia_Laser']) ? 'Si' : 'No',
            'Toxina_Botulinica'                      => isset($_POST['Toxina_Botulinica']) ? 'Si' : 'No',
            'id_paciente'                            => $Result_pacientes
        );

        $connectionDB->insertData($Tables[3], $Data_estadistica_avd);



        echo 'success';
    }


?>