<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_evc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];


        $query= "SELECT dp.*,dp.id_paciente,f.*,n.*,fr.*,evc.*,p.*,r.*,e.*,s.*,es.*
        FROM datos_paciente dp
        LEFT JOIN fast f ON dp.id_paciente = f.id_paciente   
        LEFT JOIN nihss n ON dp.id_paciente = n.id_paciente
        LEFT JOIN factor_riesgo fr ON dp.id_paciente = fr.id_paciente
        LEFT JOIN codigo_evc evc ON dp.id_paciente = evc.id_paciente
        LEFT JOIN puertas p ON dp.id_paciente = p.id_paciente
        LEFT JOIN rehabilitacion r ON dp.id_paciente = r.id_paciente
        LEFT JOIN escalas e ON dp.id_paciente = e.id_paciente
        LEFT JOIN secuelas s ON dp.id_paciente = s.id_paciente
        LEFT JOIN escalas_salida es ON dp.id_paciente = es.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $nombre_paciente = $data['nombre_paciente'];
                $curp = $data['curp'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $sexo = $data['sexo'];
                $edad = $data['edad'];
                $fecha_sintomas = $data['fecha_sintomas'];
                $inicio_sintomas = $data['inicio_sintomas'];
                $face = $data['face'];
                $arms = $data['arms'];
                $speech = $data['speech'];
                $escala = $data['escala'];
                $trombolisis = $data['trombolisis'];
                $tpa = $data['tpa'];
                $sangrado = $data['sangrado'];
                $nivel = $data['nivel'];
                $fecha_sangrado = $data['fecha_sangrado'];
                $evc = $data['evc'];
                $hipertension = $data['hipertension'];
                $diabetes = $data['diabetes'];
                $tabaquismo = $data['tabaquismo'];
                $covid = $data['covid'];
                $hiperlipidemia = $data['hiperlipidemia'];
                $apnea = $data['apnea'];
                $enfcardio = $data['enfcardio'];
                $activacion = $data['activacion'];
                $defuncion = $data['defuncion'];
                $area = $data['area'];
                $pmau = $data['pmau'];
                $pah = $data['pah'];
                $peia = $data['peia'];
                $pim = $data['pim'];
                $plio = $data['plio'];
                $pcisfa = $data['pcisfa'];
                $ts = $data['ts'];
                $camillero = $data['camillero'];
                $med_neuro = $data['med_neuro'];
                $hora_llegada = $data['hora_llegada'];
                $hora_triage = $data['hora_triage'];
                $puerta_triage = $data['puerta_triage'];
                $hora_choque = $data['hora_choque'];
                $puerta_urgencias = $data['puerta_urgencias'];
                $hora_tac = $data['hora_tac'];
                $puerta_tac = $data['puerta_tac'];
                $hora_em = $data['hora_em'];
                $puerta_medicos = $data['puerta_medicos'];
                $hora_trombo = $data['hora_trombo'];
                $puerta_aguja = $data['puerta_aguja'];
                $hora_terapia = $data['hora_terapia'];
                $terapia_intensiva = $data['terapia_intensiva'];
                $hora_tac_control = $data['hora_tac_control'];
                $tac_control = $data['tac_control'];
                $inicial = $data['inicial'];
                $hospitalaria = $data['hospitalaria'];
                $df_nivel = $data['df_nivel'];
                $df = $data['df'];
                $fim = $data['fim'];
                $barthel = $data['barthel'];
                $rankin = $data['rankin'];
                $motri = $data['motri'];
                $marcha = $data['marcha'];
                $deglucion = $data['deglucion'];
                $lenguaje = $data['lenguaje'];
                $motor = $data['motor'];
                $extr_sup = $data['extr_sup'];
                $extr_inf = $data['extr_inf'];
                $dolor = $data['dolor'];
                $tipo_neuro = $data['tipo_neuro'];
                $cognitivo = $data['cognitivo'];
                $interconsulta = $data['interconsulta'];
                $neuro = $data['neuro'];
                $marcha = $data['marcha'];
                $equilibrio = $data['equilibrio'];
                $nihss_salida =$data['nihss_salida'];
                $Escala_gose =$data['Escala_gose'];

            }
        }
    }

?>