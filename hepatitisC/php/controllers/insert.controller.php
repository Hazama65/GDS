<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $curp                 = $_POST["curp"];
        $nombre               = $_POST["nombre"];
        $fecha                = $_POST["fecha"];
        $edad                 = $_POST["edad"];
        $sexo                 = $_POST["sexo"];
        $estadocivil          = $_POST["estadocivil"];
        $estado               = $_POST['estado'];
        $municipio            = $_POST['municipio'];
        $referencia           = $_POST["referencia"];



        $queryPaciente ="INSERT INTO pacientes (curp,nombre,fecha_nacimiento,edad,sexo,estado_civil,estado,municipio,referencia) 
        VALUES ('$curp','$nombre','$fecha','$edad','$sexo','$estadocivil','$estado','$municipio','$referencia')";
        $dataPaciente = $connectionDB->ShotSimple($queryPaciente);
        $ultimoID =$connectionDB->last_id;

        $talla                = $_POST["talla"];
        $peso                 = $_POST["peso"];
        $imc                  = $_POST["imc"];
        $imcdescripcion       = $_POST["imcdescripcion"];
        $circunferencia       = $_POST["circunferencia"];

        $querySometria = "INSERT INTO sometria VALUES ('$talla','$peso','$imc','$imcdescripcion','$circunferencia','$ultimoID')";
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
        $niguna               = isset($_POST["RS_Ninguna"]) ? 'Si' : 'No';

        $queryFacts = "INSERT INTO factores_riesgo VALUES ('$sinRegistro','$relacionesSex','$transfusiones','$drogasEnd','$piercing',
        '$presidiario','$expresidiario','$situacionCalle','$vih','$hepatitis','$sexoServidoras','$parejasOcasionales',
        '$pacienteToxicomanias','$niguna','$ultimoID')";
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

        $queryAntecedentes = "INSERT INTO antecedentes VALUES ('$hemofilia','$ERC','$trabajadorSalud','$transplante','$cirrosis',
        '$obesidad','$prediabetes','$diabetesMellitus','$hipertencionArt','$alcoholismo','$HB','$ninguno_Ant','$ultimoID')";

        $dataAntecedentes = $connectionDB->ShotSimple($queryAntecedentes);


        $atencion_inicial   = $_POST["fai"];
        $carga_inicial      = $_POST["fcvi"];
        $cargaDX            = $_POST["cvd"];
        $respuestaViral     = $_POST["respuestaviralsostenida"];
        $RVS                = $_POST["valorrvs"];
        $fechaRVS           = $_POST["frvs"];

        $queryAtencion = "INSERT INTO atencion_clinica VALUES ('$atencion_inicial','$carga_inicial','$cargaDX','$respuestaViral',
        '$RVS','$fechaRVS','$ultimoID')";
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

        $queryLaboratorio = "INSERT INTO laboratorio VALUES ('$AST','$BUN','$CREAT','$ALT','$plaquetas','$albumina','$glucosa',
        '$HBA1C','$trigliceridos','$HDL','$ultimoID')";
        $dataLaboratorio = $connectionDB->ShotSimple($queryLaboratorio);
    
    
        $ultrasonido    = $_POST["ultrasonidohepatico"];
        $resultadoUltra = $_POST["resultadoultrasonido"];
        $esteatosis     = $_POST["opcionesteatosis"];

        $queryUltra = "INSERT INTO ultrasonidohepatico VALUES ('$ultrasonido','$resultadoUltra','$esteatosis','$ultimoID')";
        $dataUltra = $connectionDB->ShotSimple($queryUltra);
    
    
        $FIB4           = $_POST["fib4"];
        $FIB4resultado  = $_POST["resultadofib"];
        $NAFLD          = $_POST["nafld"];
        $NAFLDresultado = $_POST["resultadonafld"];
        $APRI           = $_POST["apri"];
        $APRIresultado  = $_POST["resultadoapri"];

        $queryIndice = "INSERT INTO indicehepatico VALUES ('$FIB4','$FIB4resultado','$NAFLD','$NAFLDresultado','$APRI',
        '$APRIresultado','$ultimoID')";
        $dataIndice = $connectionDB->ShotSimple($queryIndice);
    
    
        $fecha_inicio = $_POST["fit"];
        $fecha_fin    = $_POST["fft"];
        $tratamiento  = $_POST["tratamiento"];
        $ribavirina   = $_POST["Ribavirina"];

        $queryTratamiento = "INSERT INTO tratamiento VALUES ('$fecha_inicio','$fecha_fin','$tratamiento','$ribavirina','$ultimoID')";
        $dataTratamiento = $connectionDB->ShotSimple($queryTratamiento);

        
        $defuncion_paciente = $_POST["defuncion"];
        $causa              = $_POST["causadefuncion"];

        $queryDefuncion = "INSERT INTO defuncion VALUES ('$defuncion_paciente','$causa','$ultimoID')";
        $dataDefuncion = $connectionDB->ShotSimple($queryDefuncion);

        echo 'success'; 
    }




?>