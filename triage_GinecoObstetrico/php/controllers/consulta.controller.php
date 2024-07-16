<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gn.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_GN = $_GET['idPaciente'];

        $queryAllData = "SELECT dg.*,dp.*,ag.*,sv.*,si.*,sg.*,tr.*,rt.* FROM datos_generales dg
        JOIN datos_paciente dp on dg.id_GN = dp.id_GN
        JOIN antecedentes_go ag on dg.id_GN = ag.id_GN
        JOIN signos_vitales sv ON dg.id_GN = sv.id_GN
        JOIN sintomas si ON dg.id_GN = si.id_GN
        JOIN signos sg ON dg.id_GN = sg.id_GN
        JOIN tira_reactiva tr ON dg.id_GN = tr.id_GN
        JOIN resultados_triaje rt ON dg.id_GN = rt.id_GN WHERE dg.id_GN= $id_GN";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $id_GN = $data['id_GN'];
                $fecha = $data['fecha'];
                $elabora = $data['elabora'];
                $curp = $data['curp'];
                $nombre_paciente = $data['nombre_paciente'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $edad = $data['edad'];
                $covid = $data['covid'];
                $gesta = $data['gesta'];
                $paras = $data['paras'];
                $cesarea = $data['cesarea'];
                $abortos = $data['abortos'];
                $embarazos_ecto = $data['embarazos_ecto'];
                $hijos_vivos = $data['hijos_vivos'];
                $FUM = $data['FUM'];
                $fecha_parto = $data['fecha_parto'];
                $sem_gestacion = $data['sem_gestacion'];
                $presion_sis = $data['presion_sis'];
                $presion_dia = $data['presion_dia'];
                $frecuencia_card = $data['frecuencia_card'];
                $frecuencia_respi = $data['frecuencia_respi'];
                $temperatura = $data['temperatura'];
                $frecuencia_card_fet = $data['frecuencia_card_fet'];
                $talla = $data['talla'];
                $peso = $data['peso'];
                $imc = $data['imc'];
                $resultadoIMC = $data['resultadoIMC'];
                $conciencia = $data['conciencia'];
                $convulsiones = $data['convulsiones'];
                $vasoespasmo = $data['vasoespasmo'];
                $epigastrio = $data['epigastrio'];
                $mov_fetales = $data['mov_fetales'];
                $sang_vag = $data['sang_vag'];
                $liquido_amniotico = $data['liquido_amniotico'];
                $parto = $data['parto'];
                $pres_fetal = $data['pres_fetal'];
                $proteinas = $data['proteinas'];
                $leucocitos = $data['leucocitos'];
                $glucosa = $data['glucosa'];
                $nitritos = $data['nitritos'];
                $cetonas = $data['cetonas'];
                $eritrocitos = $data['eritrocitos'];
                $resultado_triage = $data['resultado_triage'];
                $destino = $data['destino'];
                $codigo = $data['codigo'];
                
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