<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gn.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $fechahoy  = $_POST['fechahoy'];
        $elabora   = $_POST['elabora'];


        $queryGenerales ="INSERT INTO datos_generales (fecha,elabora) 
        VALUES ('$fechahoy','$elabora')";
        
        $dataGeneral = $connectionDB->ShotSimple($queryGenerales);
        $ultimoID =$connectionDB->last_id;

        $curp         = $_POST['curp'];
        $nombre       = $_POST['nombre'];
        $fecha        = $_POST['fecha'];
        $edad         = $_POST['edad'];
        $pruebacovid  = $_POST['pruebacovid'];

        $queryPaciente = "INSERT INTO datos_paciente VALUES ('$curp','$nombre','$fecha','$edad','$pruebacovid','$ultimoID')";
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

        $queryAntecedentes = "INSERT INTO antecedentes_go VALUES ('$gesta','$paras',$cesarea,'$abortos','$embarazosectopicos','$hijosvivos',
        '$fechaFUM','$fechaFPP','$semanagestacion','$ultimoID')";
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

        $querySignosVitales = "INSERT INTO signos_vitales VALUES ('$presionsistolica','$presiondiastolica','$frecuenciacardiaca',
        '$frecuenciarespiratoria','$temperatura','$frecuenciacardiacafetal','$talla','$peso','$imc','$imcdescripcion','$ultimoID')";
        $dataSignosVitales = $connectionDB ->ShotSimple($querySignosVitales);


        $estadoconciencia = $_POST['estadoconciencia'];
        $convulsiones     = $_POST['convulsiones'];
        $vasoespasmo      = $_POST['vasoespasmo'];
        $epigastrio       = $_POST['epigastrio'];

        $querySintomas = "INSERT INTO sintomas VALUES ('$estadoconciencia','$convulsiones','$vasoespasmo','$epigastrio','$ultimoID')";
        $dataSintomas = $connectionDB -> ShotSimple($querySintomas);


        $movimientosfetales = $_POST['movimientosfetales'];
        $sangradovaginal    = $_POST['sangradovaginal'];
        $salidaliquido      = $_POST['salidaliquido'];
        $trabajoparto       = $_POST['trabajoparto'];
        $presentacionfetal  = $_POST['presentacionfetal'];

        $querySignos = "INSERT INTO signos VALUES ('$movimientosfetales','$sangradovaginal','$salidaliquido','$trabajoparto',
        '$presentacionfetal','$ultimoID')";
        $dataSignos = $connectionDB ->ShotSimple($querySignos);

        $proteinas   = $_POST['proteinas'];
        $leucocitos  = $_POST['leucocitos'];
        $glucosa     = $_POST['glucosa'];
        $nitritos    = $_POST['nitritos'];
        $cetonas     = $_POST['cetonas'];
        $eritrocitos = $_POST['eritrocitos'];

        $queryTiraje = "INSERT INTO tira_reactiva VALUES ('$proteinas','$leucocitos','$glucosa','$nitritos','$cetonas','$eritrocitos',
        '$ultimoID')";
        $dataTiraje = $connectionDB ->ShotSimple($queryTiraje);

        $resultado_semaforo = $_POST['resultado_semaforo'];
        $destinopaciente = $_POST['destinopaciente'];
        $activacioncodigo = $_POST['activacioncodigo'];

        $queryResultados = "INSERT INTO resultados_triaje VALUES ('$resultado_semaforo','$destinopaciente','$activacioncodigo','$ultimoID')";
        $dataResultados = $connectionDB -> ShotSimple($queryResultados);



        echo 'success'; 
    }




?>