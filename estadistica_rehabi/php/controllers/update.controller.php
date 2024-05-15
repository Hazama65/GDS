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
            'fecha_registro'    => $_POST['fecha_registro'],
            'nombre_paciente'   => $_POST['nombre_paciente'],
            'curp'              => $_POST['curp'],
            'fecha'             => $_POST['fecha'],
            'edad'              => $_POST['edad'],
            'sexo'              => $_POST['sexo'],
            'tipo_paciente'     => $_POST['tipo_paciente'],
            'tipo_consulta'     => $_POST['tipo_consulta'],
            'sesiones_num'      => $_POST['sesiones_num']
        );

        $connectionDB->updateData($Tables[0],$update_paciente,$updateColum,$updateId);

        $update_patologicos = array(
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
            'Toxina_Botulinica'                      => isset($_POST['Toxina_Botulinica']) ? 'Si' : 'No'
        );

        $connectionDB->updateData($Tables[1],$update_patologicos,$updateColum,$updateId);


        echo 'success'; 
    }
?>