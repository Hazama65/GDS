<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $curp                   = $_POST['curp'];
        $nombre                 = $_POST['nombre'];
        $fecha                  = $_POST['fecha'];
        $edad                   = $_POST['edad'];
        $sexo                   = $_POST['sexo'];
        $Escolaridad            = $_POST['Escolaridad'];
        $Estadocivil            = $_POST['Estadocivil'];
        $estado                 = $_POST['estado'];
        $municipio              = $_POST['municipio'];
        $referencia             = $_POST['referencia'];
        $talla                  = $_POST['talla'];
        $peso                   = $_POST['peso'];
        $imc                    = $_POST['imc'];
        $imcdescripcion         = $_POST['imcdescripcion'];
        $circunferencia         = $_POST['circunferencia'];
        $derechohabiencia       = $_POST['derechohabiencia'];
        $estudio_socioeconomico = $_POST['estudio_socioeconomico'];
        $nivel                  = $_POST['nivel'];

        // Verificar si el CURP ya existe en la base de datos
        $queryCheckCURP = "SELECT COUNT(*) as count FROM datos_paciente WHERE curp = '$curp'";
        $result = $connectionDB->getSimple($queryCheckCURP);

        // Verificar si el resultado es "1" (indicando que se encontró al menos un registro)
        if ($result === "1") {
            // Si el CURP ya existe, mostrar un mensaje de error
            echo 2;
        } else {
            // Si el CURP no existe, insertar el nuevo registro en la base de datos
            $queryPacientes = "INSERT INTO datos_paciente (curp,nombre,fecha_nacimiento,edad,sexo,escolaridad,estadoCivil,estado,
            municipio,referencia,talla,peso,imc,resultado_imc,circunferencia_abdominal,derechoAbiencia,estudio_socioEconomico,
            nivel_economico)
            VALUES ('$curp','$nombre','$fecha','$edad','$sexo','$Escolaridad','$Estadocivil','$estado','$municipio','$referencia',
            '$talla','$peso','$imc','$imcdescripcion','$circunferencia','$derechohabiencia','$estudio_socioeconomico','$nivel')";
            $dataPacientes = $connectionDB->ShotSimple($queryPacientes);
            $ultimoId = $connectionDB->last_id;
    
    
            $diabetesSelect    = $_POST['diabetesSelect'];
            $tipoPadre         = $_POST['tipoPadre'];
            $tipoMadre         = $_POST['tipoMadre'];
            $tipoAbueloMaterno = $_POST['tipoAbueloMaterno'];
            $tipoAbuelaMaterna = $_POST['tipoAbuelaMaterna'];
            $tipoAbueloPaterno = $_POST['tipoAbueloPaterno'];
            $tipoAbuelaPaterna = $_POST['tipoAbuelaPaterna'];
            $num_hermanas      = $_POST['num_hermanas'];
            $num_hermanos      = $_POST['num_hermanos'];
    
            $queryDM = "INSERT INTO diabetes_mellitus 
            VALUES ('$diabetesSelect','$tipoPadre','$tipoMadre','$tipoAbueloMaterno','$tipoAbuelaMaterna',
            '$tipoAbueloPaterno','$tipoAbuelaPaterna','$num_hermanas','$num_hermanos','$ultimoId')";
            $dataDM = $connectionDB->ShotSimple($queryDM);
    
    
            $hipertensionSelect = $_POST['hipertensionSelect'];
            $HAS_Padre          = $_POST['HAS_Padre'];
            $HAS_Madre          = $_POST['HAS_Madre'];
            $AbueloM_HAS        = $_POST['AbueloM_HAS'];
            $AbuelaM_HAS        = $_POST['AbuelaM_HAS'];
            $AbueloP_HAS        = $_POST['AbueloP_HAS'];
            $AbuelaP_HAS        = $_POST['AbuelaP_HAS'];
            $num_hermanasHAS    = $_POST['num_hermanasHAS'];
            $num_hermanosHAS    = $_POST['num_hermanosHAS'];
    
            $queryHAS ="INSERT INTO hipertension_arterial VALUES('$hipertensionSelect','$HAS_Padre','$HAS_Madre',
            '$AbueloM_HAS','$AbuelaM_HAS','$AbueloP_HAS','$AbuelaP_HAS','$num_hermanasHAS','$num_hermanosHAS','$ultimoId')";
            $dataHAS = $connectionDB->ShotSimple($queryHAS);
    
    
            $EVCSelect         = $_POST['EVCSelect'];
            $ECVSelect         = $_POST['ECVSelect'];
            $ECV_Padre         = $_POST['ECV_Padre'];
            $ECV_Madre         = $_POST['ECV_Madre'];
            $AbueloM_ECV       = $_POST['AbueloM_ECV'];
            $AbuelaM_ECV       = $_POST['AbuelaM_ECV'];
            $AbueloP_ECV       = $_POST['AbueloP_ECV'];
            $AbuelaP_ECV       = $_POST['AbuelaP_ECV'];
            $num_hermanasECV   = $_POST['num_hermanasECV'];
            $num_hermanosECV   = $_POST['num_hermanosECV'];
            $CardiopatiaSelect = $_POST['CardiopatiaSelect'];
            $CI_Padre          = $_POST['CI_Padre'];
            $CI_Madre          = $_POST['CI_Madre'];
            $AbueloM_CI        = $_POST['AbueloM_CI'];
            $AbuelaM_CI        = $_POST['AbuelaM_CI'];
            $AbueloP_CI        = $_POST['AbueloP_CI'];
            $AbuelaP_CI        = $_POST['AbuelaP_CI'];
            $num_hermanasCI    = $_POST['num_hermanasCI'];
            $num_hermanosCI    = $_POST['num_hermanosCI'];
    
            $queryEVC = "INSERT INTO enfermedad_cardiovascular VALUES ('$EVCSelect','$ECVSelect','$ECV_Padre','$ECV_Madre',
            '$AbueloM_ECV','$AbuelaM_ECV','$AbueloP_ECV','$AbuelaP_ECV','$num_hermanasECV','$num_hermanosECV','$CardiopatiaSelect',
            '$CI_Padre','$CI_Madre','$AbueloM_CI','$AbuelaM_CI','$AbueloP_CI','$AbuelaP_CI','$num_hermanasCI','$num_hermanosCI',
            '$ultimoId')";
            $dataEVC = $connectionDB->ShotSimple($queryEVC);
    
    
            $dislipidemiaSelect        = $_POST['dislipidemiaSelect'];
            $trigliceridemiaSelect     = $_POST['trigliceridemiaSelect'];
            $trigliceridemia_Padre     = $_POST['trigliceridemia_Padre'];
            $HTG_Madre                 = $_POST['HTG_Madre'];
            $AbueloM_HTG               = $_POST['AbueloM_HTG'];
            $AbuelaM_HTG               = $_POST['AbuelaM_HTG'];
            $AbueloP_HTG               = $_POST['AbueloP_HTG'];
            $AbuelaPaterna_HTG         = $_POST['AbuelaPaterna_HTG'];
            $num_hermanasHTG           = $_POST['num_hermanasHTG'];
            $num_hermanosHTG           = $_POST['num_hermanosHTG'];
            $HipercolesterolemiaSelect = $_POST['HipercolesterolemiaSelect'];
            $LDL_Padre                 = $_POST['LDL_Padre'];
            $LDL_Madre                 = $_POST['LDL_Madre'];
            $AbueloM_LDL               = $_POST['AbueloM_LDL'];
            $AbuelaM_LDL               = $_POST['AbuelaM_LDL'];
            $AbueloP_LDL               = $_POST['AbueloP_LDL'];
            $AbuelaP_LDL               = $_POST['AbuelaP_LDL'];
            $num_hermanasLDL           = $_POST['num_hermanasLDL'];
            $num_hermanosLDL           = $_POST['num_hermanosLDL'];
    
            $queryDislipidemia = "INSERT INTO dislipidemia VALUES ('$dislipidemiaSelect','$trigliceridemiaSelect',
            '$trigliceridemia_Padre','$HTG_Madre','$AbueloM_HTG','$AbuelaM_HTG','$AbueloP_HTG','$AbuelaPaterna_HTG',
            '$num_hermanasHTG','$num_hermanosHTG','$HipercolesterolemiaSelect','$LDL_Padre','$LDL_Madre','$AbueloM_LDL',
            '$AbuelaM_LDL','$AbueloP_LDL','$AbuelaP_LDL','$num_hermanasLDL','$num_hermanosLDL','$ultimoId')";
            $dataDislipidemia = $connectionDB->ShotSimple($queryDislipidemia);
    
    
            $HepaticaSelect          = $_POST['HepaticaSelect'];
            $CirrosisSelect          = $_POST['CirrosisSelect'];
            $DislipidemiaSelect      = $_POST['DislipidemiaSelect'];
            $DistiroidismoSelect     = $_POST['DistiroidismoSelect'];
            $CancerSelect            = $_POST['CancerSelect'];
            $Insfuciencia_Cardiaca   = $_POST['Insfuciencia_Cardiaca'];
            $Disritmias_cardiacas    = $_POST['Disritmias_cardiacas'];
            $OsteoporosisSelect      = $_POST['OsteoporosisSelect'];
            $Gota                    = $_POST['Gota'];
            $LupusSelect             = $_POST['LupusSelect'];
            $ArtritisSelect          = $_POST['ArtritisSelect'];
            $HipertensioncomorSelect = $_POST['HipertensioncomorSelect'];
            $CushingSelect           = $_POST['CushingSelect'];
            $SindromeSelect          = $_POST['SindromeSelect'];
    
            $queryComorbilidades = "INSERT INTO comorbilidades VALUES ('$HepaticaSelect','$CirrosisSelect','$DislipidemiaSelect',
            '$DistiroidismoSelect','$CancerSelect','$Insfuciencia_Cardiaca','$Disritmias_cardiacas','$OsteoporosisSelect',
            '$Gota','$LupusSelect','$ArtritisSelect','$HipertensioncomorSelect','$CushingSelect','$SindromeSelect','$ultimoId')";
            $dataComorbilidades = $connectionDB->ShotSimple($queryComorbilidades);
    
    
            $id_TGO              = $_POST['id_TGO'];
            $id_TGP              = $_POST['id_TGP'];
            $id_FA               = $_POST['id_FA'];
            $id_GGT              = $_POST['id_GGT'];
            $id_DHL              = $_POST['id_DHL'];
            $id_proteinastotales = $_POST['id_proteinastotales'];
            $id_Albumina         = $_POST['id_Albumina'];
            $id_Globulinas       = $_POST['id_Globulinas'];
            $id_relacion         = $_POST['id_relacion'];
            $id_BT               = $_POST['id_BT'];
            $id_BD               = $_POST['id_BD'];
            $id_BI               = $_POST['id_BI'];
            $id_HB               = $_POST['id_HB'];
            $id_VSG              = $_POST['id_VSG'];
            $id_OHD              = $_POST['id_OHD'];
            $creatinina          = $_POST['creatinina'];
            $cistatina           = $_POST['cistatina'];
            $id_glucosa          = $_POST['id_glucosa'];
            $id_glucosilada      = $_POST['id_glucosilada'];
            $id_urico            = $_POST['id_urico'];
            $id_urea             = $_POST['id_urea'];
            $id_creatinina       = $_POST['id_creatinina'];
            $id_colesterol       = $_POST['id_colesterol'];
            $id_trigliceridos    = $_POST['id_trigliceridos'];
            $id_LDL              = $_POST['id_LDL'];
            $id_HDL              = $_POST['id_HDL'];
            $id_HBG              = $_POST['id_HBG'];
    
            $queryLaboratorio = "INSERT INTO laboratorio VALUES ('$id_TGO','$id_TGP','$id_FA','$id_GGT','$id_DHL',
            '$id_proteinastotales','$id_Albumina','$id_Globulinas','$id_relacion','$id_BT','$id_BD','$id_BI','$id_HB',
            '$id_VSG','$id_OHD','$creatinina','$cistatina','$id_glucosa','$id_glucosilada','$id_urico','$id_urea',
            '$id_creatinina','$id_colesterol','$id_trigliceridos','$id_LDL','$id_HDL','$id_HBG','$ultimoId')";
            $dataLaboratorio = $connectionDB->ShotSimple($queryLaboratorio);
    
    
            $RetinopatiaSelect                     = $_POST['RetinopatiaSelect'];
            $CegueraSelect                         = $_POST['CegueraSelect'];
            $nefro                                 = $_POST['nefro'];
            $neuropatiaSelect                      = $_POST['neuropatiaSelect'];
            $polineuropatia                        = $_POST['polineuropatia'];
            $Simetrica_Distal                      = $_POST['Simetrica_Distal'];
            $Pie_Charcot                           = $_POST['Pie_Charcot'];
            $neuropatia_gastro                     = $_POST['neuropatia_gastro'];
            $neuropatia_genito                     = $_POST['neuropatia_genito'];
            $neuropatia_cardio                     = $_POST['neuropatia_cardio'];
            $Cardiopatia_isquemicaSelect           = $_POST['Cardiopatia_isquemicaSelect'];
            $AmputacionesSelect                    = $_POST['AmputacionesSelect'];
            $amputaciones_dedos                     = $_POST['amputaciones_dedos'];
            $Mano_dedos                             = $_POST['Mano_dedos'];
            $Pies_dedos                             = $_POST['Pies_dedos'];
            $amputaciones_transmetatarsiana         = $_POST['amputaciones_transmetatarsiana'];
            $lateralidad_Transmetatarsiana          = $_POST['lateralidad_Transmetatarsiana'];
            $amputaciones_infracondilea             = $_POST['amputaciones_infracondilea'];
            $lateralidad_Infracondilea              = $_POST['lateralidad_Infracondilea'];
            $amputaciones_Supracondilea             = $_POST['amputaciones_Supracondilea'];
            $lateralidad_Supracondilea              = $_POST['lateralidad_Supracondilea'];
            $IsquemicaSelect                       = $_POST['IsquemicaSelect'];
            $InsuficienciaArterialPerifericaSelect = $_POST['InsuficienciaArterialPerifericaSelect'];
    
            $queryComplicaciones = "INSERT INTO complicaciones VALUES ('$RetinopatiaSelect','$CegueraSelect','$nefro','$neuropatiaSelect',
            '$polineuropatia','$Simetrica_Distal','$Pie_Charcot','$neuropatia_gastro','$neuropatia_genito','$neuropatia_cardio',
            '$Cardiopatia_isquemicaSelect','$AmputacionesSelect','$amputaciones_dedos','$Mano_dedos','$Pies_dedos',
            '$amputaciones_transmetatarsiana','$lateralidad_Transmetatarsiana','$amputaciones_infracondilea',
            '$lateralidad_Infracondilea','$amputaciones_Supracondilea','$lateralidad_Supracondilea','$IsquemicaSelect',
            '$InsuficienciaArterialPerifericaSelect','$ultimoId')";
            $dataComplicaciones = $connectionDB->ShotSimple($queryComplicaciones);
    
    
            $HipoglucemiantesSelect  = $_POST['HipoglucemiantesSelect'];
            $MetforminaSelect        = $_POST['MetforminaSelect'];
            $SulfonilureaSelect      = $_POST['SulfonilureaSelect'];
            $GlinidasSelect          = $_POST['GlinidasSelect'];
            $I_DPP4Select            = $_POST['I_DPP4Select'];
            $ISGLT2Select            = $_POST['ISGLT2Select'];
            $GLP1Select              = $_POST['GLP1Select'];
            $PioglitazonaSelect      = $_POST['PioglitazonaSelect'];
            $inhibidoresSelect       = $_POST['inhibidoresSelect'];
    
            $queryHipoglu = "INSERT INTO hipoglucemiantes VALUES ('$HipoglucemiantesSelect','$MetforminaSelect',
            '$SulfonilureaSelect','$GlinidasSelect','$I_DPP4Select','$ISGLT2Select','$GLP1Select','$PioglitazonaSelect',
            '$inhibidoresSelect','$ultimoId')";
            $dataHipoglu= $connectionDB->ShotSimple($queryHipoglu);
    
    
            $InsulinasSelect     = $_POST['InsulinasSelect'];
            $NPHSelect           = $_POST['NPHSelect'];
            $id_nph              = $_POST['id_nph'];
            $RapidaRegularSelect = $_POST['RapidaRegularSelect'];
            $id_rapidaregular    = $_POST['id_rapidaregular'];
            $GlarginaSelect      = $_POST['GlarginaSelect'];
            $id_glargina         = $_POST['id_glargina'];
            $Glar300Select       = $_POST['Glar300Select'];
            $id_glargina300      = $_POST['id_glargina300'];
            $DetemirSelect       = $_POST['DetemirSelect'];
            $id_detemir          = $_POST['id_detemir'];
            $DegludecrSelect     = $_POST['DegludecrSelect'];
            $id_degludec         = $_POST['id_degludec'];
            $LisproSelect        = $_POST['LisproSelect'];
            $id_lispro           = $_POST['id_lispro'];
            $AspartSelect        = $_POST['AspartSelect'];
            $id_aspart           = $_POST['id_aspart'];
            $Glulisina           = $_POST['Glulisina'];
            $id_glulisina        = $_POST['id_glulisina'];
            $NPH_Regular         = $_POST['NPH_Regular'];
            $id_nphRegular       = $_POST['id_nphRegular'];
            $protamina           = $_POST['protamina'];
            $id_Protamina        = $_POST['id_Protamina'];
    
            $queryInsulina = "INSERT INTO insulina VALUES ('$InsulinasSelect','$NPHSelect','$id_nph','$RapidaRegularSelect',
            '$id_rapidaregular','$GlarginaSelect','$id_glargina','$Glar300Select','$id_glargina300','$DetemirSelect','$id_detemir',
            '$DegludecrSelect','$id_degludec','$LisproSelect','$id_lispro','$AspartSelect','$id_aspart','$Glulisina','$id_glulisina',
            '$NPH_Regular','$id_nphRegular','$protamina','$id_Protamina','$ultimoId')";
            $dataInsulina = $connectionDB->ShotSimple($queryInsulina);
    
    
            $HipolipemiantesSelect        = $_POST['HipolipemiantesSelect'];
            $EstatinasSelect              = $_POST['EstatinasSelect'];
            $FibratosSelect               = $_POST['FibratosSelect'];
            $OmegaSelect                  = $_POST['OmegaSelect'];
            $Inhibidores_AbsorcionSelect  = $_POST['Inhibidores_AbsorcionSelect'];
    
            $queryHipolipe = "INSERT INTO hipolipemiantes VALUES ('$HipolipemiantesSelect','$EstatinasSelect',
            '$FibratosSelect','$OmegaSelect','$Inhibidores_AbsorcionSelect','$ultimoId')";
            $dataHipolipe = $connectionDB->ShotSimple($queryHipolipe);
    
    
            $AntihipertensivosSelect  = $_POST['AntihipertensivosSelect'];
            $IECASSelect              = $_POST['IECASSelect'];
            $ARAIISelect              = $_POST['ARAIISelect'];
            $InhibidoresSelect        = $_POST['InhibidoresSelect'];
            $CalcioantagonistasSelect = $_POST['CalcioantagonistasSelect'];
            $BetabloqueadoresSelect   = $_POST['BetabloqueadoresSelect'];
            $DiureticosSelect         = $_POST['DiureticosSelect'];
            $AlfabloqueadoresSelect   = $_POST['AlfabloqueadoresSelect'];
            $EspironolactonaSelect    = $_POST['EspironolactonaSelect'];
    
            $queryAnti = "INSERT INTO antihipertensivos VALUES ('$AntihipertensivosSelect','$IECASSelect','$ARAIISelect',
            '$InhibidoresSelect','$CalcioantagonistasSelect','$BetabloqueadoresSelect','$DiureticosSelect','$AlfabloqueadoresSelect',
            '$EspironolactonaSelect','$ultimoId')";
            $dataAnti = $connectionDB->ShotSimple($queryAnti);
    
    
            $OtrosSelect          = $_POST['OtrosSelect'];
            $ASASelect            = $_POST['ASASelect'];
            $AlopurinolSelect     = $_POST['AlopurinolSelect'];
            $NeuromoduladorSelect = $_POST['NeuromoduladorSelect'];
            $ProcineticosSelect   = $_POST['ProcineticosSelect'];
            $Farmacos_utilizados  = $_POST['Farmacos_utilizados'];
    
            $queryOtros = "INSERT INTO otros values ('$OtrosSelect','$ASASelect','$AlopurinolSelect','$NeuromoduladorSelect',
            '$ProcineticosSelect','$Farmacos_utilizados','$ultimoId')";
            $dataOtros = $connectionDB->ShotSimple($queryOtros);
    
            $EjercicioSelect  = $_POST['EjercicioSelect'];
            $id_vecestiempo   = $_POST['id_vecestiempo'];
            $id_apegotiempo   = $_POST['id_apegotiempo'];
            $id_tiemposemana  = $_POST['id_tiemposemana'];
            $id_apegoveces    = $_POST['id_apegoveces'];
    
            $queryEjercicio = "INSERT INTO ejercicio VALUES ('$EjercicioSelect','$id_vecestiempo','$id_apegotiempo','$id_tiemposemana',
            '$id_apegoveces','$ultimoId')";
            $dataEjercicio = $connectionDB->ShotSimple($queryEjercicio);
    
    
            echo 'success';
        }


    }
    
?>