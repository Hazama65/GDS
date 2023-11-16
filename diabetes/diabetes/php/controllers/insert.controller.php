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


        $HepaticaSelect        = $_POST['HepaticaSelect'];
        $CirrosisSelect        = $_POST['CirrosisSelect'];
        $DislipidemiaSelect    = $_POST['DislipidemiaSelect'];
        $DistiroidismoSelect   = $_POST['DistiroidismoSelect'];
        $CancerSelect          = $_POST['CancerSelect'];
        $Insfuciencia_Cardiaca = $_POST['Insfuciencia_Cardiaca'];
        $Disritmias_cardiacas  = $_POST['Disritmias_cardiacas'];
        $OsteoporosisSelect    = $_POST['OsteoporosisSelect'];
        $Gota                  = $_POST['Gota'];
        $LupusSelect           = $_POST['LupusSelect'];
        $ArtritisSelect        = $_POST['ArtritisSelect'];
        $CushingSelect         = $_POST['CushingSelect'];
        $SindromeSelect        = $_POST['SindromeSelect'];

        $queryComorbilidades = "INSERT INTO comorbilidades VALUES ('$HepaticaSelect','$CirrosisSelect','$DislipidemiaSelect',
        '$DistiroidismoSelect','$CancerSelect','$Insfuciencia_Cardiaca','$Disritmias_cardiacas','$OsteoporosisSelect',
        '$Gota','$LupusSelect','$ArtritisSelect','$CushingSelect','$SindromeSelect','$ultimoId')";
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

        $queryLaboratorio = "INSERT INTO laboratorio VALUES ('$id_TGO','$id_TGP','$id_FA','$id_GGT','$id_DHL',
        '$id_proteinastotales','$id_Albumina','$id_Globulinas','$id_relacion','$id_BT','$id_BD','$id_BI','$id_HB',
        '$id_VSG','$id_OHD','$creatinina','$cistatina','$ultimoId')";
        $dataLaboratorio = $connectionDB->ShotSimple($queryLaboratorio);


        $RetinopatiaSelect                     = $_POST['RetinopatiaSelect'];
        $CegueraSelect                         = $_POST['CegueraSelect'];
        $nefro                                 = $_POST['nefro'];
        $neuropatiaSelect                      = $_POST['neuropatiaSelect'];
        $Cardiopatia_isquemicaSelect           = $_POST['Cardiopatia_isquemicaSelect'];
        $AmputacionesSelect                    = $_POST['AmputacionesSelect'];
        $IsquemicaSelect                       = $_POST['IsquemicaSelect'];
        $InsuficienciaArterialPerifericaSelect = $_POST['InsuficienciaArterialPerifericaSelect'];

        $queryComplicaciones = "INSERT INTO complicaciones VALUES ('$RetinopatiaSelect','$CegueraSelect','$nefro',
        '$neuropatiaSelect','$Cardiopatia_isquemicaSelect','$AmputacionesSelect','$IsquemicaSelect',
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


        $HipolipemiantesSelect = $_POST['HipolipemiantesSelect'];
        $EstatinasSelect       = $_POST['EstatinasSelect'];
        $FibratosSelect        = $_POST['FibratosSelect'];
        $OmegaSelect           = $_POST['OmegaSelect'];

        $queryHipolipe = "INSERT INTO hipolipemiantes VALUES ('$HipolipemiantesSelect','$EstatinasSelect',
        '$FibratosSelect','$OmegaSelect','$ultimoId')";
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

        echo 'success';

    }
    
?>