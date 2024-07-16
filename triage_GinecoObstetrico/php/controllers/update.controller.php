<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gn.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_GN     = $_POST['id_paciente'];
        $fechahoy  = $_POST['fechahoy'];
        $elabora   = $_POST['elabora'];


        $queryGenerales ="UPDATE datos_generales SET 
            fecha = '$fechahoy', 
            elabora = '$elabora' 
        WHERE id_GN = $id_GN";   
        $dataGeneral = $connectionDB->ShotSimple($queryGenerales);

        $curp         = $_POST['curp'];
        $nombre       = $_POST['nombre'];
        $fecha        = $_POST['fecha'];
        $edad         = $_POST['edad'];
        $pruebacovid  = $_POST['pruebacovid'];

        $queryPaciente = "UPDATE datos_paciente SET 
            curp = '$curp',
            nombre_paciente = '$nombre',
            fecha_nacimiento = '$fecha',
            edad = '$edad',
            covid = '$pruebacovid'
        WHERE id_GN = '$id_GN'";
        $dataPaciente = $connectionDB -> ShotSimple($queryPaciente);


        $gesta              = $_POST['gesta'];
        $paras              = $_POST['paras'];
        $cesarea            = $_POST['cesarea'];
        $abortos            = $_POST['abortos'];
        $embarazosectopicos = $_POST['embarazosectopicos'];
        $hijosvivos         = $_POST['hijosvivos'];
        $fechaFUM           = $_POST['fechaFUM'];
        $fechaFPP           = $_POST['fechaFPP'];
        $semanagestacion    = $_POST['semanagestacion'];

        $queryAntecedentes = "UPDATE antecedentes_go SET 
            gesta = '$gesta',
            paras = '$paras',
            cesarea = '$cesarea',
            abortos = '$abortos',
            embarazos_ecto = '$embarazosectopicos',
            hijos_vivos = '$hijosvivos',
            FUM = '$fechaFUM',
            fecha_parto = '$fechaFPP',
            sem_gestacion = '$semanagestacion'
        WHERE id_GN = '$id_GN'";
        $dataAntecedentes = $connectionDB -> ShotSimple($queryAntecedentes);


        $presionsistolica        = $_POST['presionsistolica'];
        $presiondiastolica       = $_POST['presiondiastolica'];
        $frecuenciacardiaca      = $_POST['frecuenciacardiaca'];
        $frecuenciarespiratoria  = $_POST['frecuenciarespiratoria'];
        $temperatura             = $_POST['temperatura'];
        $frecuenciacardiacafetal = $_POST['frecuenciacardiacafetal'];
        $talla                   = $_POST['talla'];
        $peso                    = $_POST['peso'];
        $imc                     = $_POST['imc'];
        $imcdescripcion          = $_POST['imcdescripcion'];

        $querySignosVitales = "UPDATE signos_vitales SET 
            presion_sis = '$presionsistolica',
            presion_dia = '$presiondiastolica',
            frecuencia_card = '$frecuenciacardiaca',
            frecuencia_respi = '$frecuenciarespiratoria',
            temperatura = '$temperatura',
            frecuencia_card_fet = '$frecuenciacardiacafetal',
            talla = '$talla',
            peso = '$peso',
            imc = '$imc',
            resultadoIMC = '$imcdescripcion'
        WHERE id_GN = '$id_GN'";
        $dataSignosVitales = $connectionDB ->ShotSimple($querySignosVitales);


        $estadoconciencia = $_POST['estadoconciencia'];
        $convulsiones     = $_POST['convulsiones'];
        $vasoespasmo      = $_POST['vasoespasmo'];
        $epigastrio       = $_POST['epigastrio'];

        $querySintomas = "UPDATE sintomas SET 
            conciencia = '$estadoconciencia',
            convulsiones = '$convulsiones',
            vasoespasmo = '$vasoespasmo',
            epigastrio = '$epigastrio'
        WHERE id_GN = '$id_GN'";
        $dataSintomas = $connectionDB -> ShotSimple($querySintomas);


        $movimientosfetales = $_POST['movimientosfetales'];
        $sangradovaginal    = $_POST['sangradovaginal'];
        $salidaliquido      = $_POST['salidaliquido'];
        $trabajoparto       = $_POST['trabajoparto'];
        $presentacionfetal  = $_POST['presentacionfetal'];

        $querySignos = "UPDATE signos SET 
            mov_fetales = '$movimientosfetales',
            sang_vag = '$sangradovaginal',
            liquido_amniotico = '$salidaliquido',
            parto = '$trabajoparto',
            pres_fetal = '$presentacionfetal'
        WHERE id_GN = '$id_GN'";
        $dataSignos = $connectionDB ->ShotSimple($querySignos);

        $proteinas   = $_POST['proteinas'];
        $leucocitos  = $_POST['leucocitos'];
        $glucosa     = $_POST['glucosa'];
        $nitritos    = $_POST['nitritos'];
        $cetonas     = $_POST['cetonas'];
        $eritrocitos = $_POST['eritrocitos'];

        $queryTiraje = "UPDATE tira_reactiva SET 
            proteinas = '$proteinas',
            leucocitos = '$leucocitos',
            glucosa = '$glucosa',
            nitritos = '$nitritos',
            cetonas = '$cetonas',
            eritrocitos = '$eritrocitos'
        WHERE id_GN = '$id_GN'";
        $dataTiraje = $connectionDB ->ShotSimple($queryTiraje);

        $resultado_semaforo = $_POST['resultado_semaforo'];
        $destinopaciente = $_POST['destinopaciente'];
        $activacioncodigo = $_POST['activacioncodigo'];

        $queryResultados = "UPDATE resultados_triaje SET 
            resultado_triage = '$resultado_semaforo',
            destino = '$destinopaciente',
            codigo = '$activacioncodigo'
        WHERE id_GN = '$id_GN'";
        $dataResultados = $connectionDB -> ShotSimple($queryResultados);

        echo 'success';
    }

?>