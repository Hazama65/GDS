<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_hc.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);
    $connectionDBEM = new Database(DB_HOST_EM,DB_NAME_EM,DB_USERNAME_EM,DB_PASSWORD_EM);


    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];

        $queryAllData = "SELECT p.*,s.*,fr.*,ant.*,ate.*,l.*,uh.*,ih.*,t.*,d.* FROM pacientes p 
        JOIN sometria s on p.id_paciente = s.id_paciente
        JOIN factores_riesgo fr on p.id_paciente = fr.id_paciente
        JOIN antecedentes ant ON p.id_paciente = ant.id_paciente
        JOIN atencion_clinica ate ON p.id_paciente = ate.id_paciente
        JOIN laboratorio l ON p.id_paciente = l.id_paciente
        JOIN ultrasonidohepatico uh ON p.id_paciente = uh.id_paciente
        JOIN indicehepatico ih ON p.id_paciente = ih.id_paciente
        JOIN tratamiento t ON p.id_paciente = t.id_paciente
        JOIN defuncion d ON p.id_paciente = d.id_paciente WHERE p.id_paciente= $id_paciente";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $curp = $data["curp"];
                $nombre = $data["nombre"];
                $fecha_nacimiento = $data["fecha_nacimiento"];
                $edad = $data["edad"];
                $sexo = $data["sexo"];
                $estado_civil = $data["estado_civil"];
                $Estado = $data["estado"];
                $Municipio = $data["municipio"];
                $queryEstado = "SELECT NombreEstado FROM estados WHERE Estado_Id ='$Estado'";
                $dataEstado= $connectionDBEM->getRows($queryEstado);
                foreach($dataEstado as $row1){
                    $Estado1 = $row1['NombreEstado'];
                }
                $queryMunicipio = "SELECT NombreMunicipio FROM municipios WHERE MunicipioID ='$Municipio'";
                $dataMunicipio= $connectionDBEM->getRows($queryMunicipio);
                foreach($dataMunicipio as $row2){
                    $Municipio1 = $row2['NombreMunicipio'];
                }
                $referencia = $data["referencia"];
                $unidad_referencia = $data["unidad_referencia"];


                $talla = $data["talla"];
                $peso = $data["peso"];
                $imc = $data["imc"];
                $descripcionIMC = $data["descripcionimc"];
                $circunferencia = $data["circunferencia"];
    

                $sinRegistro = $data["sinRegistro"];
                $relacionesSex = $data["relacionesSex"];
                $transfusiones = $data["transfusiones"];
                $drogasEnd = $data["drogasEnd"];
                $piercing = $data["piercing"];
                $presidiario = $data["presidiario"];
                $expresidiario = $data["expresidiario"];
                $situacionCalle = $data["situacionCalle"];
                $vih = $data["vih"];
                $hepatitis = $data["hepatitis"];
                $sexoServidoras = $data["sexoServidoras"];
                $parejasOcasionales = $data["parejasOcasionales"];
                $pacienteToxicomanias = $data["pacienteToxicomanias"];
                $ninguna = $data["ninguna"];
    

                $hemofilia = $data["hemofilia"];
                $ERC = $data["ERC"];
                $trabajadorSalud = $data["trabajadorSalud"];
                $transplante = $data["transplante"];
                $cirrosis = $data["cirrosis"];
                $obesidad = $data["obesidad"];
                $prediabetes = $data["prediabetes"];
                $diabetesMellitus = $data["diabetesMellitus"];
                $hipertencionArt = $data["hipertencionArt"];
                $alcoholismo = $data["alcoholismo"];
                $HB = $data["HB"];
                $ninguno_Ant = $data["ninguno_Ant"];
    

                $atencion_inicial = $data["atencion_inicial"];
                $carga_inicial  = $data["carga_inicial"];
                $cargaDX  = $data["cargaDX"];
                $respuestaViral  = $data["respuestaViral"];
                $RVS  = $data["RVS"];
                $fechaRVS  = $data["fechaRVS"];
    

                $AST = $data["AST"];
                $BUN = $data["BUN"];
                $CREAT = $data["CREAT"];
                $ALT = $data["ALT"];
                $plaquetas = $data["plaquetas"];
                $albumina = $data["albumina"];
                $glucosa = $data["glucosa"];
                $HBA1C = $data["HBA1C"];
                $trigliceridos = $data["trigliceridos"];
                $HDL = $data["HDL"];
    

                $ultrasonido = $data["ultrasonido"];
                $resultadoUltra = $data["resultadoUltra"];
                $esteatosis = $data["esteatosis"];
    

                $FIB4 = $data["FIB4"];
                $FIB4resultado = $data["FIB4resultado"];
                $NAFLD = $data["NAFLD"];
                $NAFLDresultado = $data["NAFLDresultado"];
                $APRI = $data["APRI"];
                $APRIresultado = $data["APRIresultado"];
    

                $fecha_inicio = $data["fecha_inicio"];
                $fecha_fin = $data["fecha_fin"];
                $tratamiento = $data["tratamiento"];
                $ribavirina = $data["ribavirina"];
    
                
                $defuncion_paciente = $data["defuncion_paciente"];
                $causa = $data["causa"];
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