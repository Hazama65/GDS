<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ER.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];


        $query= "SELECT * FROM datos_paciente dp
        JOIN procedimientos pro ON dp.id_paciente = pro.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);


        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente= $data['id_paciente'];
                $nombre_terapeuta = $data['nombre_terapeuta'];
                $Turno_terapeuta = $data['Turno_terapeuta'];
                $fecha_registro = $data['fecha_registro'];
                $nombre_paciente = $data['nombre_paciente'];
                $curp = $data['curp'];
                $fecha = $data['fecha'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $tipo_paciente = $data['tipo_paciente'];
                $tipo_consulta = $data['tipo_consulta'];
                $sesiones_num = $data['sesiones_num'];
                $tipo_terapias = $data['tipo_terapias'];
                $terapia_fisica = $data['terapia_fisica'];
                $terapia_ocupacional = $data['terapia_ocupacional'];
                $terapia_lenguaje = $data['terapia_lenguaje'];
                $aplicacion_ferula = $data['aplicacion_ferula'];
                $Aplicacion_vendaje_enyesado = $data['Aplicacion_vendaje_enyesado'];
                $Baño_parafina = $data['Baño_parafina'];
                $CHC_CF = $data['CHC_CF'];
                $Corrientes_interfereciales = $data['Corrientes_interfereciales'];
                $Electroestimulacion = $data['Electroestimulacion'];
                $Ejercicio_Asistido = $data['Ejercicio_Asistido'];
                $Ejercicio_Fisioterapia = $data['Ejercicio_Fisioterapia'];
                $Hidroterapia_TanqueTerapéutico = $data['Hidroterapia_TanqueTerapéutico'];
                $Hidroterapia_Tina_Habbard = $data['Hidroterapia_Tina_Habbard'];
                $Hidroterapia_Tina_Remolinos = $data['Hidroterapia_Tina_Remolinos'];
                $TENS = $data['TENS'];
                $TerapiacombinadaUSG_CorrienteEléctrica = $data['TerapiacombinadaUSG_CorrienteEléctrica'];
                $Ultrasonido_Terapeutico = $data['Ultrasonido_Terapeutico'];
                $TraccionCervical_Lumbar = $data['TraccionCervical_Lumbar'];
                $Rehabi_cardiaca = $data['Rehabi_cardiaca'];
                $Ejercicios_respiratorio = $data['Ejercicios_respiratorio'];
                $Terapia_Laser = $data['Terapia_Laser'];
                $Toxina_Botulinica = $data['Toxina_Botulinica'];

            }
        }
    }

?>