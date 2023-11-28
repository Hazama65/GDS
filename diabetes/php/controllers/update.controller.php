<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $id_paciente            = $_POST['id_paciente']; 
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

        $queryPacientes = "UPDATE datos_paciente SET 
        curp = '$curp', 
        nombre = '$nombre', 
        fecha_nacimiento = '$fecha', 
        edad = '$edad', 
        sexo = '$sexo', 
        escolaridad = '$Escolaridad', 
        estadoCivil = '$Estadocivil', 
        estado = '$estado', 
        municipio = '$municipio', 
        referencia = '$referencia', 
        talla = '$talla', 
        peso = '$peso', 
        imc = '$imc', 
        resultado_imc = '$imcdescripcion', 
        circunferencia_abdominal = '$circunferencia', 
        derechoAbiencia = '$derechohabiencia', 
        estudio_socioEconomico = '$estudio_socioeconomico', 
        nivel_economico = '$nivel' 
        WHERE id_paciente = '$id_paciente'";

        $dataPacientes = $connectionDB->ShotSimple($queryPacientes);

        $id_paciente            = $_POST['id_paciente']; 
        $diabetesSelect    = $_POST['diabetesSelect'];
        $tipoPadre         = $_POST['tipoPadre'];
        $tipoMadre         = $_POST['tipoMadre'];
        $tipoAbueloMaterno = $_POST['tipoAbueloMaterno'];
        $tipoAbuelaMaterna = $_POST['tipoAbuelaMaterna'];
        $tipoAbueloPaterno = $_POST['tipoAbueloPaterno'];
        $tipoAbuelaPaterna = $_POST['tipoAbuelaPaterna'];
        $num_hermanas      = $_POST['num_hermanas'];
        $num_hermanos      = $_POST['num_hermanos'];

        $queryDM = "UPDATE diabetes_mellitus SET 
            diabetes_mellitus_estado = '$diabetesSelect',
            padre_dm = '$tipoPadre',
            madre_dm = '$tipoMadre',
            abuelo_materno_dm = '$tipoAbueloMaterno',
            abuela_materna_dm = '$tipoAbuelaMaterna',
            abuelo_paterno_dm = '$tipoAbueloPaterno',
            abuela_paterna_dm = '$tipoAbuelaPaterna',
            no_hermanas_dm = '$num_hermanas',
            no_hermanos_dm = '$num_hermanos'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryHAS = "UPDATE hipertension_arterial SET 
            hipertension_arterial_estado = '$hipertensionSelect',
            padre_has = '$HAS_Padre',
            madre_has = '$HAS_Madre',
            abuelo_materno_has = '$AbueloM_HAS',
            abuela_materna_has = '$AbuelaM_HAS',
            abuelo_paterno_has = '$AbueloP_HAS',
            abuela_paterna_has = '$AbuelaP_HAS',
            no_hermanas_has = '$num_hermanasHAS',
            no_hermanos_has = '$num_hermanosHAS'
            WHERE id_paciente = '$id_paciente';
        ";
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

        $queryEVC = "UPDATE enfermedad_cardiovascular SET 
            enfermedad_cardioVascular_estado = '$EVCSelect',
            evento_vascular_cerebral_estado = '$ECVSelect',
            padre_evc = '$ECV_Padre',
            madre_evc = '$ECV_Madre',
            abuelo_materno_evc = '$AbueloM_ECV',
            abuela_materna_evc = '$AbuelaM_ECV',
            abuelo_paterno_evc = '$AbueloP_ECV',
            abuela_paterna_evc = '$AbuelaP_ECV',
            no_hermanas_evc = '$num_hermanasECV',
            no_hermanos_evc = '$num_hermanosECV',
            cardiopatia_isquemica_estado = '$CardiopatiaSelect',
            padre_ci = '$CI_Padre',
            madre_ci = '$CI_Madre',
            abuelo_materno_ci = '$AbueloM_CI',
            abuela_materna_ci = '$AbuelaM_CI',
            abuelo_paterno_ci = '$AbueloP_CI',
            abuela_paterna_ci = '$AbuelaP_CI',
            no_hermanas_ci = '$num_hermanasCI',
            no_hermanos_ci = '$num_hermanosCI'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryDislipidemia = "UPDATE dislipidemia SET 
            dislipidemia_estado = '$dislipidemiaSelect',
            hipertrigliceridemia = '$trigliceridemiaSelect',
            padre_htg = '$trigliceridemia_Padre',
            madre_htg = '$HTG_Madre',
            abuelo_materno_htg = '$AbueloM_HTG',
            abuela_materna_htg = '$AbuelaM_HTG',
            abuelo_paterno_htg = '$AbueloP_HTG',
            abuela_paterna_htg = '$AbuelaPaterna_HTG',
            no_hermanas_htg = '$num_hermanasHTG',
            no_hermanos_htg = '$num_hermanosHTG',
            hipercolesterolemia_estado = '$HipercolesterolemiaSelect',
            padre_ldl = '$LDL_Padre',
            madre_ldl = '$LDL_Madre',
            abuelo_materno_ldl = '$AbueloM_LDL',
            abuela_materna_ldl = '$AbuelaM_LDL',
            abuelo_paterno_ldl = '$AbueloP_LDL',
            abuela_paterna_ldl = '$AbuelaP_LDL',
            no_hermanas_ldl = '$num_hermanasLDL',
            no_hermanos_ldl = '$num_hermanosLDL'
        WHERE id_paciente = '$id_paciente';
        ";
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
        $hipertension          = $_POST['HipertensioncomorSelect'];
        $CushingSelect         = $_POST['CushingSelect'];
        $SindromeSelect        = $_POST['SindromeSelect'];

        $queryComorbilidades = "UPDATE comorbilidades SET 
            EHGNA = '$HepaticaSelect',
            Child_Pugh = '$CirrosisSelect',
            dislipidemia = '$DislipidemiaSelect',
            distiroidismo = '$DistiroidismoSelect',
            cancer = '$CancerSelect',
            insuficiencia_cardiaca = '$Insfuciencia_Cardiaca',
            disritmias_cardiacas = '$Disritmias_cardiacas',
            osteoporosis = '$OsteoporosisSelect',
            gota = '$Gota',
            LES = '$LupusSelect',
            artritis_reumatoide = '$ArtritisSelect',
            hipertension = '$hipertension',
            SC = '$CushingSelect',
            tipo_SC = '$SindromeSelect'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryLaboratorio = "UPDATE laboratorio SET 
            TGO = '$id_TGO',
            TGP = '$id_TGP',
            FA = '$id_FA',
            GGT = '$id_GGT',
            DHL = '$id_DHL',
            proteinas_totales = '$id_proteinastotales',
            albumina = '$id_Albumina',
            globulinas = '$id_Globulinas',
            AG = '$id_relacion',
            BT = '$id_BT',
            BD = '$id_BD',
            BI = '$id_BI',
            HB = '$id_HB',
            VSG = '$id_VSG',
            OHD = '$id_OHD',
            creatinina = '$creatinina',
            creatinina_cistatina = '$cistatina',
            glucosa = '$id_glucosa',
            glucosilada = '$id_glucosilada',
            acido_urico = '$id_urico',
            urea = $id_urea,
            creatinina2 = '$id_creatinina',
            colesterol = '$id_colesterol',
            trigliceridos = '$id_trigliceridos',
            LDL = '$id_LDL',
            HDL = '$id_HDL',
            HBG = '$id_HBG'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryComplicaciones = "UPDATE complicaciones SET 
            retinopatia = '$RetinopatiaSelect',
            ceguera = '$CegueraSelect',
            nefropatia = '$nefro',
            neuropatia = '$neuropatiaSelect',
            polineuropatia = '$polineuropatia',
            Simetrica_Distal = '$Simetrica_Distal',
            Pie_Charcot = '$Pie_Charcot',
            neuropatia_gastro = '$neuropatia_gastro',
            neuropatia_genito = '$neuropatia_genito',
            neuropatia_cardio = '$neuropatia_cardio',
            CI = '$Cardiopatia_isquemicaSelect',
            amputacion = '$AmputacionesSelect',
            amputaciones_dedos = '$amputaciones_dedos',
            Mano_dedos = '$Mano_dedos',
            Pies_dedos = '$Pies_dedos',
            amputaciones_transmetatarsiana = '$amputaciones_transmetatarsiana',
            lateralidad_Transmetatarsiana = '$lateralidad_Transmetatarsiana',
            amputaciones_infracondilea = '$amputaciones_infracondilea',
            lateralidad_Infracondilea = '$lateralidad_Infracondilea',
            amputaciones_Supracondilea = '$amputaciones_Supracondilea',
            lateralidad_Supracondilea = '$lateralidad_Supracondilea',
            EVCI = '$IsquemicaSelect',
            IAP = '$InsuficienciaArterialPerifericaSelect'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryHipoglu = "UPDATE hipoglucemiantes SET 
            hipoglucemiantes = '$HipoglucemiantesSelect',
            metformina = '$MetforminaSelect',
            sulfonilureas = '$SulfonilureaSelect',
            glinidas = '$GlinidasSelect',
            DPP4 = '$I_DPP4Select',
            ISGLT = '$ISGLT2Select',
            GLP = '$GLP1Select',
            pioglitazona = '$PioglitazonaSelect',
            IA = '$inhibidoresSelect'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryInsulina = "UPDATE insulina SET 
            insulina = '$InsulinasSelect',
            NPH = '$NPHSelect',
            NPH_dosis = $id_nph,
            rapida_regular = '$RapidaRegularSelect',
            rapida_regular_dosis = '$id_rapidaregular',
            glardina = '$GlarginaSelect',
            glardina_dosis = '$id_glargina',
            glardina_300 = '$Glar300Select',
            glardina_300_dosis = '$id_glargina300',
            detemir = '$DetemirSelect',
            detemir_dosis = '$id_detemir',
            degludec = '$DegludecrSelect',
            degludec_dosis = '$id_degludec',
            lispro = '$LisproSelect',
            lispro_dosis = '$id_lispro',
            aspart = '$AspartSelect',
            aspart_dosis = '$id_aspart',
            glulisina = '$Glulisina',
            glulisina_dosis = '$id_glulisina',
            NPH_regular = '$NPH_Regular',
            NPH_regular_dosis = '$id_nphRegular',
            lispro_prota = '$protamina',
            lispro_prota_dosis = '$id_Protamina'
        WHERE id_paciente = '$id_paciente';
        ";
        $dataInsulina = $connectionDB->ShotSimple($queryInsulina);


        $HipolipemiantesSelect        = $_POST['HipolipemiantesSelect'];
        $EstatinasSelect              = $_POST['EstatinasSelect'];
        $FibratosSelect               = $_POST['FibratosSelect'];
        $OmegaSelect                  = $_POST['OmegaSelect'];
        $Inhibidores_AbsorcionSelect  = $_POST['Inhibidores_AbsorcionSelect'];

        $queryHipolipe = "UPDATE hipolipemiantes SET 
            hipolipemiante = '$HipolipemiantesSelect',
            estatinas = '$EstatinasSelect',
            fibratos = '$FibratosSelect',
            omega_3 = '$OmegaSelect',
            IAB = '$Inhibidores_AbsorcionSelect'
        WHERE id_paciente = '$id_paciente';
        ";
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

        $queryAnti = "UPDATE antihipertensivos SET 
            antihipertensivos = '$AntihipertensivosSelect',
            IECAS = '$IECASSelect',
            ARAII = '$ARAIISelect',
            IR = '$InhibidoresSelect',
            calcioantagonistas = '$CalcioantagonistasSelect',
            betabloqueadores = '$BetabloqueadoresSelect',
            DT = '$DiureticosSelect',
            alfabloqueadores = '$AlfabloqueadoresSelect',
            espironolactoma = '$EspironolactonaSelect'
        WHERE id_paciente = '$id_paciente';
        ";
        $dataAnti = $connectionDB->ShotSimple($queryAnti);


        $OtrosSelect          = $_POST['OtrosSelect'];
        $ASASelect            = $_POST['ASASelect'];
        $AlopurinolSelect     = $_POST['AlopurinolSelect'];
        $NeuromoduladorSelect = $_POST['NeuromoduladorSelect'];
        $ProcineticosSelect   = $_POST['ProcineticosSelect'];
        $Farmacos_utilizados  = $_POST['Farmacos_utilizados'];

        $queryOtros = "UPDATE otros SET 
            otros = '$OtrosSelect',
            ASA = '$ASASelect',
            alopurinol = '$AlopurinolSelect',
            neuromodulador = '$NeuromoduladorSelect',
            procineticos = '$ProcineticosSelect',
            no_farmacos = '$Farmacos_utilizados'
        WHERE id_paciente = '$id_paciente';
        ";
        $dataOtros = $connectionDB->ShotSimple($queryOtros);

        $EjercicioSelect  = $_POST['EjercicioSelect'];
        $id_vecestiempo   = $_POST['id_vecestiempo'];
        $id_apegotiempo   = $_POST['id_apegotiempo'];
        $id_tiemposemana  = $_POST['id_tiemposemana'];
        $id_apegoveces    = $_POST['id_apegoveces'];

        $queryEjercicio = "UPDATE ejercicio SET 
            ejercicio_estatus = '$EjercicioSelect',
            no_semana = '$id_vecestiempo',
            no_veces = '$id_apegotiempo',
            t_semana = '$id_tiemposemana',
            t_no_semana = '$id_apegoveces'
        WHERE id_paciente = '$id_paciente';
        ";
        $dataEjercicio = $connectionDB->ShotSimple($queryEjercicio);



        echo 'success';
    }

?>