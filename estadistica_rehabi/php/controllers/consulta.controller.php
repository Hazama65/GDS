<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ER.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_paciente dp
        JOIN procedimientos pro ON dp.id_paciente = pro.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $nombre_terapeuta = $data['nombre_terapeuta'];
                $Turno_terapeuta = $data['Turno_terapeuta'];
                $nombre_paciente = $data['nombre_paciente'];
                $curp = $data['curp'];
                $fecha = $data['fecha'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $tipo_paciente = $data['tipo_paciente'];
                $fecha_inicio = $data['fecha_inicio'];
                $fecha_fin = $data['fecha_fin'];
                $sesiones_num_terapia_fisica = $data['sesiones_num_terapia_fisica'];
                $primera_vez_terapia_fisica = $data['primera_vez_terapia_fisica'];
                $subsecuente_terapia_fisica = $data['subsecuente_terapia_fisica'];
                $terapias_ambulatorias_terapia_fisica = $data['terapias_ambulatorias_terapia_fisica'];
                $terapias_hospitalizacion_terapia_fisica = $data['terapias_hospitalizacion_terapia_fisica'];
                $sesiones_num_terapia_ocupacional = $data['sesiones_num_terapia_ocupacional'];
                $primera_vez_terapia_ocupacional = $data['primera_vez_terapia_ocupacional'];
                $subsecuente_terapia_ocupacional = $data['subsecuente_terapia_ocupacional'];
                $terapias_ambulatorias_terapia_ocupacional = $data['terapias_ambulatorias_terapia_ocupacional'];
                $terapias_hospitalizacion_terapia_ocupacional = $data['terapias_hospitalizacion_terapia_ocupacional'];
                $sesiones_num_terapia_lenguaje = $data['sesiones_num_terapia_lenguaje'];
                $primera_vez_terapia_lenguaje = $data['primera_vez_terapia_lenguaje'];
                $subsecuente_terapia_lenguaje = $data['subsecuente_terapia_lenguaje'];
                $terapias_ambulatorias_terapia_lenguaje = $data['terapias_ambulatorias_terapia_lenguaje'];
                $terapias_hospitalizacion_terapia_lenguaje = $data['terapias_hospitalizacion_terapia_lenguaje'];
                $sesiones_num_aplicacion_ferula = $data['sesiones_num_aplicacion_ferula'];
                $sesiones_num_Aplicacion_vendaje_enyesado = $data['sesiones_num_Aplicacion_vendaje_enyesado'];
                $sesiones_num_Baño_parafina = $data['sesiones_num_Baño_parafina'];
                $sesiones_num_CHC_CF = $data['sesiones_num_CHC_CF'];
                $sesiones_num_Corrientes_interfereciales = $data['sesiones_num_Corrientes_interfereciales'];
                $sesiones_num_Electroestimulacion = $data['sesiones_num_Electroestimulacion'];
                $sesiones_num_Ejercicio_Asistido = $data['sesiones_num_Ejercicio_Asistido'];
                $sesiones_num_Ejercicio_Fisioterapia = $data['sesiones_num_Ejercicio_Fisioterapia'];
                $sesiones_num_Hidroterapia_TanqueTerapéutico = $data['sesiones_num_Hidroterapia_TanqueTerapéutico'];
                $sesiones_num_Hidroterapia_Tina_Habbard = $data['sesiones_num_Hidroterapia_Tina_Habbard'];
                $sesiones_num_Hidroterapia_Tina_Remolinos = $data['sesiones_num_Hidroterapia_Tina_Remolinos'];
                $sesiones_num_TENS = $data['sesiones_num_TENS'];
                $sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica = $data['sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica'];
                $sesiones_num_Ultrasonido_Terapeutico = $data['sesiones_num_Ultrasonido_Terapeutico'];
                $sesiones_num_TraccionCervical_Lumbar = $data['sesiones_num_TraccionCervical_Lumbar'];
                $sesiones_num_Rehabi_cardiaca = $data['sesiones_num_Rehabi_cardiaca'];
                $sesiones_num_Ejercicios_respiratorio = $data['sesiones_num_Ejercicios_respiratorio'];
                $sesiones_num_Terapia_Laser = $data['sesiones_num_Terapia_Laser'];
                $sesiones_num_Toxina_Botulinica = $data['sesiones_num_Toxina_Botulinica'];

            }
        }else {
            echo "No se encontro la informacion";
            exit;
        }
    }else {
        echo $id_paciente;
        exit;
    }


?>