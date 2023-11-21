<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente          = $_POST["id_paciente"];
        $curp                 = $_POST["curp"];
        $nombre               = $_POST["nombre"];
        $fecha                = $_POST["fecha"];
        $edad                 = $_POST["edad"];
        $sexo                 = $_POST["sexo"];
        $estadocivil          = $_POST["estadocivil"];
        $estado               = $_POST['estado'];
        $municipio            = $_POST['municipio'];
        $referencia           = $_POST["referencia"];
        $unidad_referencia    = $_POST["unidad_referencia"];



        $queryPaciente = "UPDATE pacientes SET
            curp = '$curp',
            nombre = '$nombre',
            fecha_nacimiento = '$fecha',
            edad = '$edad',
            sexo = '$sexo',
            estado_civil = '$estadocivil',
            estado = '$estado',
            municipio = '$municipio',
            referencia = '$referencia',
            unidad_referencia='$unidad_referencia'
        WHERE id_paciente = $id_paciente";
        $dataPaciente = $connectionDB->ShotSimple($queryPaciente);

        $talla                = $_POST["talla"];
        $peso                 = $_POST["peso"];
        $imc                  = $_POST["imc"];
        $imcdescripcion       = $_POST["imcdescripcion"];
        $circunferencia       = $_POST["circunferencia"];

        $querySometria = "UPDATE sometria SET
            talla = '$talla',
            peso = '$peso',
            imc = '$imc',
            descripcionimc = '$imcdescripcion',
            circunferencia = '$circunferencia'
        WHERE id_paciente = '$id_paciente'";

        $dataSometria = $connectionDB->ShotSimple($querySometria);


        $sinRegistro          = isset($_POST["FR_Sin_Registro"]) ? 'Si' : 'No';
        $relacionesSex        = isset($_POST["FR_Relaciones_Sexuales"]) ? 'Si' : 'No';
        $transfusiones        = isset($_POST["FR_Transfusiones"]) ? 'Si' : 'No';
        $drogasEnd            = isset($_POST["FR_Drogas_Endovenosas"]) ? 'Si' : 'No';
        $piercing             = isset($_POST["FR_Piercing"]) ? 'Si' : 'No';
        $presidiario          = isset($_POST["FR_Presidiario"]) ? 'Si' : 'No';
        $expresidiario        = isset($_POST["FR_Expresidiario"]) ? 'Si' : 'No';
        $situacionCalle       = isset($_POST["FR_Situacion_de_Calle"]) ? 'Si' : 'No';
        $vih                  = isset($_POST["RS_Pacientes_con_VIH"]) ? 'Si' : 'No';
        $hepatitis            = isset($_POST["RS_Pacientes_con_Hepatitis"]) ? 'Si' : 'No';
        $sexoServidoras       = isset($_POST["RS_Sexo_Servidoras"]) ? 'Si' : 'No';
        $parejasOcasionales   = isset($_POST["RS_Parejas_Ocasionales"]) ? 'Si' : 'No';
        $pacienteToxicomanias = isset($_POST["RS_Pacientes_con_Toxicomanias"]) ? 'Si' : 'No';
        $ninguna               = isset($_POST["RS_Ninguna"]) ? 'Si' : 'No';

        $queryFacts = "UPDATE factores_riesgo SET
            sinRegistro = '$sinRegistro',
            relacionesSex = '$relacionesSex',
            transfusiones = '$transfusiones',
            drogasEnd = '$drogasEnd',
            piercing = '$piercing',
            presidiario = '$presidiario',
            expresidiario = '$expresidiario',
            situacionCalle = '$situacionCalle',
            vih = '$vih',
            hepatitis = '$hepatitis',
            sexoServidoras = '$sexoServidoras',
            parejasOcasionales = '$parejasOcasionales',
            pacienteToxicomanias = '$pacienteToxicomanias',
            ninguna = '$ninguna'
        WHERE id_paciente = '$id_paciente'";

        $dataFacts = $connectionDB->ShotSimple($queryFacts);

        
        $hemofilia          =isset( $_POST["APP_Hemofilia"])? 'Si' : 'No';
        $ERC                =isset( $_POST["APP_ERC_en_Hemodialisis"])? 'Si' : 'No';
        $trabajadorSalud    =isset( $_POST["APP_Trabajador_de_la_Salud"])? 'Si' : 'No';
        $transplante        =isset( $_POST["APP_Transplante"])? 'Si' : 'No';
        $cirrosis           =isset( $_POST["APP_Cirrosis"])? 'Si' : 'No';
        $obesidad           =isset( $_POST["APP_Obesidad"])? 'Si' : 'No';
        $prediabetes        =isset( $_POST["APP_Prediabetes"])? 'Si' : 'No';
        $diabetesMellitus   =isset( $_POST["APP_Diabetes_Mellitus"])? 'Si' : 'No';
        $hipertencionArt    =isset( $_POST["APP_Hipertension_Arterial"])? 'Si' : 'No';
        $alcoholismo        =isset( $_POST["APP_Alcoholismo"])? 'Si' : 'No';
        $HB                 =isset( $_POST["APP_Virus_HB"])? 'Si' : 'No';
        $ninguno_Ant        =isset( $_POST["APP_Ninguno"])? 'Si' : 'No';

        $queryAntecedentes = "UPDATE antecedentes SET
            hemofilia = '$hemofilia',
            ERC = '$ERC',
            trabajadorSalud = '$trabajadorSalud',
            transplante = '$transplante',
            cirrosis = '$cirrosis',
            obesidad = '$obesidad',
            prediabetes = '$prediabetes',
            diabetesMellitus = '$diabetesMellitus',
            hipertencionArt = '$hipertencionArt',
            alcoholismo = '$alcoholismo',
            HB = '$HB',
            ninguno_Ant = '$ninguno_Ant'
        WHERE id_paciente = '$id_paciente'";
    
        $dataAntecedentes = $connectionDB->ShotSimple($queryAntecedentes);


        $atencion_inicial   = $_POST["fai"];
        $carga_inicial      = $_POST["fcvi"];
        $cargaDX            = $_POST["cvd"];
        $respuestaViral     = $_POST["respuestaviralsostenida"];
        $RVS                = $_POST["valorrvs"];
        $fechaRVS           = $_POST["frvs"];

        $queryAtencion = "UPDATE atencion_clinica SET
            atencion_inicial = '$atencion_inicial',
            carga_inicial = '$carga_inicial',
            cargaDX = '$cargaDX',
            respuestaViral = '$respuestaViral',
            RVS = '$RVS',
            fechaRVS = '$fechaRVS'
        WHERE id_paciente = '$id_paciente'";
        $dataAtencion = $connectionDB->ShotSimple($queryAtencion);
    
    
        $AST           = $_POST["AST"];
        $BUN           = $_POST["BUN"];
        $CREAT         = $_POST["CREAT"];
        $ALT           = $_POST["ALT"];
        $plaquetas     = $_POST["Plaquetas"];
        $albumina      = $_POST["Albumina"];
        $glucosa       = $_POST["Glucosa"];
        $HBA1C         = $_POST["HBA1C"];
        $trigliceridos = $_POST["Trigliceridos"];
        $HDL           = $_POST["HDL"];

        $queryLaboratorio = "UPDATE laboratorio SET
            AST = '$AST',
            BUN = '$BUN',
            CREAT = '$CREAT',
            ALT = '$ALT',
            plaquetas = '$plaquetas',
            albumina = '$albumina',
            glucosa = '$glucosa',
            HBA1C = '$HBA1C',
            trigliceridos = '$trigliceridos',
            HDL = '$HDL'
        WHERE id_paciente = '$id_paciente'";
        $dataLaboratorio = $connectionDB->ShotSimple($queryLaboratorio);
    
    
        $ultrasonido    = $_POST["ultrasonidohepatico"];
        $resultadoUltra = $_POST["resultadoultrasonido"];
        $esteatosis     = $_POST["opcionesteatosis"];

        $queryUltra = "UPDATE ultrasonidohepatico SET
            ultrasonido = '$ultrasonido',
            resultadoUltra = '$resultadoUltra',
            esteatosis = '$esteatosis'
        WHERE id_paciente = '$id_paciente'";
        $dataUltra = $connectionDB->ShotSimple($queryUltra);
    
    
        $FIB4           = $_POST["fib4"];
        $FIB4resultado  = $_POST["resultadofib"];
        $NAFLD          = $_POST["nafld"];
        $NAFLDresultado = $_POST["resultadonafld"];
        $APRI           = $_POST["apri"];
        $APRIresultado  = $_POST["resultadoapri"];

        $queryIndice = "UPDATE indicehepatico SET
            FIB4 = '$FIB4',
            FIB4resultado = '$FIB4resultado',
            NAFLD = '$NAFLD',
            NAFLDresultado = '$NAFLDresultado',
            APRI = '$APRI',
            APRIresultado = '$APRIresultado'
        WHERE id_paciente = '$id_paciente'";
        $dataIndice = $connectionDB->ShotSimple($queryIndice);
    
    
        $fecha_inicio = $_POST["fit"];
        $fecha_fin    = $_POST["fft"];
        $tratamiento  = $_POST["tratamiento"];
        $ribavirina   = $_POST["Ribavirina"];

        $queryTratamiento = "UPDATE tratamiento SET
            fecha_inicio = '$fecha_inicio',
            fecha_fin = '$fecha_fin',
            tratamiento = '$tratamiento',
            ribavirina = '$ribavirina'
        WHERE id_paciente = '$id_paciente'";
        $dataTratamiento = $connectionDB->ShotSimple($queryTratamiento);

        
        $defuncion_paciente = $_POST["defuncion"];
        $causa              = $_POST["causadefuncion"];

        $queryDefuncion = "UPDATE defuncion SET
            defuncion_paciente = '$defuncion_paciente',
            causa = '$causa'
        WHERE id_paciente = '$id_paciente'";
        $dataDefuncion = $connectionDB->ShotSimple($queryDefuncion);
        echo 'success';
    }

?>