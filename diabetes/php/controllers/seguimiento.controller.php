<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');

    $connectionDBSEG = new Database(DB_HOST_seg,DB_NAME_seg,DB_USERNAME_seg,DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente        = $_POST['id_paciente'];
        $curp_seg           = $_POST['curp_seg'];
        $fecha_seg          = $_POST['fecha_seg'];
        $talla_seg          = $_POST['talla_seg'];
        $peso_seg           = $_POST['peso_seg'];
        $imc_seg            = $_POST['imc_seg'];
        $imcdescripcion_seg = $_POST['imcdescripcion_seg'];
        $circunferencia_seg = $_POST['circunferencia_seg'];

        $queryPacientes = "INSERT INTO datos_seguimiento (curp,fecha_seguimiento,talla,peso,imc,resultado_imc,
        circunferencia_abdominal,id_paciente)
        VALUES ('$curp_seg','$fecha_seg','$talla_seg','$peso_seg','$imc_seg','$imcdescripcion_seg','$circunferencia_seg','$id_paciente')";
        $dataPacientes = $connectionDBSEG->ShotSimple($queryPacientes);
        $ultimoId = $connectionDBSEG->last_id;


        $HepaticaSelect_seg          = $_POST['HepaticaSelect_seg'];
        $CirrosisSelect_seg          = $_POST['CirrosisSelect_seg'];
        $DislipidemiaSelect_seg      = $_POST['DislipidemiaSelect_seg'];
        $DistiroidismoSelect_seg     = $_POST['DistiroidismoSelect_seg'];
        $CancerSelect_seg            = $_POST['CancerSelect_seg'];
        $Insfuciencia_Cardiaca_seg   = $_POST['Insfuciencia_Cardiaca_seg'];
        $Disritmias_cardiacas_seg    = $_POST['Disritmias_cardiacas_seg'];
        $OsteoporosisSelect_seg      = $_POST['OsteoporosisSelect_seg'];
        $Gota_seg                    = $_POST['Gota_seg'];
        $LupusSelect_seg             = $_POST['LupusSelect_seg'];
        $ArtritisSelect_seg          = $_POST['ArtritisSelect_seg'];
        $HipertensioncomorSelect_seg = $_POST['HipertensioncomorSelect_seg'];
        $CushingSelect_seg           = $_POST['CushingSelect_seg'];
        $SindromeSelect_seg          = $_POST['SindromeSelect_seg'];

        $queryComorbilidades = "INSERT INTO seguimiento_comorbilidades VALUES 
        ('$HepaticaSelect_seg','$CirrosisSelect_seg','$DislipidemiaSelect_seg','$DistiroidismoSelect_seg','$CancerSelect_seg',
        '$Insfuciencia_Cardiaca_seg','$Disritmias_cardiacas_seg','$OsteoporosisSelect_seg','$Gota_seg','$LupusSelect_seg',
        '$ArtritisSelect_seg','$HipertensioncomorSelect_seg','$CushingSelect_seg','$SindromeSelect_seg','$ultimoId')";
        $dataComorbilidades = $connectionDBSEG->ShotSimple($queryComorbilidades);


        $id_TGO_seg              = $_POST['id_TGO_seg'];
        $id_TGP_seg              = $_POST['id_TGP_seg'];
        $id_FA_seg               = $_POST['id_FA_seg'];
        $id_GGT_seg              = $_POST['id_GGT_seg'];
        $id_DHL_seg              = $_POST['id_DHL_seg'];
        $id_proteinastotales_seg = $_POST['id_proteinastotales_seg'];
        $id_Albumina_seg         = $_POST['id_Albumina_seg'];
        $id_Globulinas_seg       = $_POST['id_Globulinas_seg'];
        $id_relacion_seg         = $_POST['id_relacion_seg'];
        $id_BT_seg               = $_POST['id_BT_seg'];
        $id_BD_seg               = $_POST['id_BD_seg'];
        $id_BI_seg               = $_POST['id_BI_seg'];
        $id_HB_seg               = $_POST['id_HB_seg'];
        $id_VSG_seg              = $_POST['id_VSG_seg'];
        $id_OHD_seg              = $_POST['id_OHD_seg'];
        $creatinina_seg          = $_POST['creatinina_seg'];
        $cistatina_seg           = $_POST['cistatina_seg'];
        $id_glucosa_seg          = $_POST['id_glucosa_seg'];
        $id_glucosilada_seg      = $_POST['id_glucosilada_seg'];
        $id_urico_seg            = $_POST['id_urico_seg'];
        $id_urea_seg             = $_POST['id_urea_seg'];
        $id_creatinina_seg       = $_POST['id_creatinina_seg'];
        $id_colesterol_seg       = $_POST['id_colesterol_seg'];
        $id_trigliceridos_seg    = $_POST['id_trigliceridos_seg'];
        $id_LDL_seg              = $_POST['id_LDL_seg'];
        $id_HDL_seg              = $_POST['id_HDL_seg'];
        $id_HBG_seg              = $_POST['id_HBG_seg'];

        $queryLaboratorio = "INSERT INTO seguimiento_laboratorio VALUES ('$id_TGO_seg','$id_TGP_seg','$id_FA_seg','$id_GGT_seg',
        '$id_DHL_seg','$id_proteinastotales_seg','$id_Albumina_seg','$id_Globulinas_seg','$id_relacion_seg','$id_BT_seg','$id_BD_seg',
        '$id_BI_seg','$id_HB_seg','$id_VSG_seg','$id_OHD_seg','$creatinina_seg','$cistatina_seg','$id_glucosa_seg','$id_glucosilada_seg',
        '$id_urico_seg','$id_urea_seg','$id_creatinina_seg','$id_colesterol_seg','$id_trigliceridos_seg','$id_LDL_seg','$id_HDL_seg',
        '$id_HBG_seg','$ultimoId')";
        $dataLaboratorio = $connectionDBSEG->ShotSimple($queryLaboratorio);


        $RetinopatiaSelect_seg                     = $_POST['RetinopatiaSelect_seg'];
        $CegueraSelect_seg                         = $_POST['CegueraSelect_seg'];
        $nefro_seg                                 = $_POST['nefro_seg'];
        $Cardiopatia_isquemicaSelect_seg           = $_POST['Cardiopatia_isquemicaSelect_seg'];
        $IsquemicaSelect_seg                       = $_POST['IsquemicaSelect_seg'];
        $InsuficienciaArterialPerifericaSelect_seg = $_POST['InsuficienciaArterialPerifericaSelect_seg'];
        $neuropatiaSelect_seg                      = $_POST['neuropatiaSelect_seg'];
        $polineuropatia_seg                        = $_POST['polineuropatia_seg'];
        $Simetrica_Distal_seg                      = $_POST['Simetrica_Distal_seg'];
        $Pie_Charcot_seg                           = $_POST['Pie_Charcot_seg'];
        $neuropatia_gastro_seg                     = $_POST['neuropatia_gastro_seg'];
        $neuropatia_genito_seg                     = $_POST['neuropatia_genito_seg'];
        $neuropatia_cardio_seg                     = $_POST['neuropatia_cardio_seg'];
        $AmputacionesSelect_seg                    = $_POST['AmputacionesSelect_seg'];
        $amputaciones_dedos_seg                    = $_POST['amputaciones_dedos_seg'];
        $Mano_dedos_seg                            = $_POST['Mano_dedos_seg'];
        $Pies_dedos_seg                            = $_POST['Pies_dedos_seg'];
        $amputaciones_transmetatarsiana_seg        = $_POST['amputaciones_transmetatarsiana_seg'];
        $lateralidad_Transmetatarsiana_seg         = $_POST['lateralidad_Transmetatarsiana_seg'];
        $amputaciones_infracondilea_seg            = $_POST['amputaciones_infracondilea_seg'];
        $lateralidad_Infracondilea_seg             = $_POST['lateralidad_Infracondilea_seg'];
        $amputaciones_Supracondilea_seg            = $_POST['amputaciones_Supracondilea_seg'];
        $lateralidad_Supracondilea_seg             = $_POST['lateralidad_Supracondilea_seg'];

        $queryComplicaciones = "INSERT INTO seguimiento_complicaciones VALUES ('$RetinopatiaSelect_seg','$CegueraSelect_seg','$nefro_seg',
        '$Cardiopatia_isquemicaSelect_seg','$neuropatiaSelect_seg','$polineuropatia_seg','$Simetrica_Distal_seg','$Pie_Charcot_seg',
        '$neuropatia_gastro_seg','$neuropatia_genito_seg','$neuropatia_cardio_seg','$AmputacionesSelect_seg','$amputaciones_dedos_seg',
        '$Mano_dedos_seg','$Pies_dedos_seg','$amputaciones_transmetatarsiana_seg','$lateralidad_Transmetatarsiana_seg',
        '$amputaciones_infracondilea_seg','$lateralidad_Infracondilea_seg','$amputaciones_Supracondilea_seg',
        '$lateralidad_Supracondilea_seg','$IsquemicaSelect_seg','$InsuficienciaArterialPerifericaSelect_seg','$ultimoId')";
        $dataComplicaciones = $connectionDBSEG->ShotSimple($queryComplicaciones);


        $HipoglucemiantesSelect_seg = $_POST['HipoglucemiantesSelect_seg'];
        $MetforminaSelect_seg       = $_POST['MetforminaSelect_seg'];
        $SulfonilureaSelect_seg     = $_POST['SulfonilureaSelect_seg'];
        $GlinidasSelect_seg         = $_POST['GlinidasSelect_seg'];
        $I_DPP4Select_seg           = $_POST['I_DPP4Select_seg'];
        $ISGLT2Select_seg           = $_POST['ISGLT2Select_seg'];
        $GLP1Select_seg             = $_POST['GLP1Select_seg'];
        $PioglitazonaSelect_seg     = $_POST['PioglitazonaSelect_seg'];
        $inhibidoresSelect_seg      = $_POST['inhibidoresSelect_seg'];

        $queryHipoglu = "INSERT INTO seguimiento_hipoglucemiantes VALUES ('$HipoglucemiantesSelect_seg','$MetforminaSelect_seg',
        '$SulfonilureaSelect_seg','$GlinidasSelect_seg','$I_DPP4Select_seg','$ISGLT2Select_seg','$GLP1Select_seg',
        '$PioglitazonaSelect_seg','$inhibidoresSelect_seg','$ultimoId')";
        $dataHipoglu= $connectionDBSEG->ShotSimple($queryHipoglu);


        $InsulinasSelect_Seg     = $_POST['InsulinasSelect_Seg'];
        $NPHSelect_Seg           = $_POST['NPHSelect_Seg'];
        $id_nph_Seg              = $_POST['id_nph_Seg'];
        $RapidaRegularSelect_Seg = $_POST['RapidaRegularSelect_Seg'];
        $id_rapidaregular_Seg    = $_POST['id_rapidaregular_Seg'];
        $GlarginaSelect_Seg      = $_POST['GlarginaSelect_Seg'];
        $id_glargina_Seg         = $_POST['id_glargina_Seg'];
        $Glar300Select_Seg       = $_POST['Glar300Select_Seg'];
        $id_glargina300_Seg      = $_POST['id_glargina300_Seg'];
        $DetemirSelect_Seg       = $_POST['DetemirSelect_Seg'];
        $id_detemir_Seg          = $_POST['id_detemir_Seg'];
        $DegludecrSelect_Seg     = $_POST['DegludecrSelect_Seg'];
        $id_degludec_Seg         = $_POST['id_degludec_Seg'];
        $LisproSelect_Seg        = $_POST['LisproSelect_Seg'];
        $id_lispro_Seg           = $_POST['id_lispro_Seg'];
        $AspartSelect_Seg        = $_POST['AspartSelect_Seg'];
        $id_aspart_Seg           = $_POST['id_aspart_Seg'];
        $Glulisina_Seg           = $_POST['Glulisina_Seg'];
        $id_glulisina_Seg        = $_POST['id_glulisina_Seg'];
        $NPH_Regular_Seg         = $_POST['NPH_Regular_Seg'];
        $id_nphRegular_Seg       = $_POST['id_nphRegular_Seg'];
        $protamina_Seg           = $_POST['protamina_Seg'];
        $id_Protamina_Seg        = $_POST['id_Protamina_Seg'];

        $queryInsulina = "INSERT INTO seguimiento_insulina VALUES ('$InsulinasSelect_Seg','$NPHSelect_Seg','$id_nph_Seg','$RapidaRegularSelect_Seg',
        '$id_rapidaregular_Seg','$GlarginaSelect_Seg','$id_glargina_Seg','$Glar300Select_Seg','$id_glargina300_Seg','$DetemirSelect_Seg',
        '$id_detemir_Seg','$DegludecrSelect_Seg','$id_degludec_Seg','$LisproSelect_Seg','$id_lispro_Seg','$AspartSelect_Seg',
        '$id_aspart_Seg','$Glulisina_Seg','$id_glulisina_Seg','$NPH_Regular_Seg','$id_nphRegular_Seg','$protamina_Seg','$id_Protamina_Seg',
        '$ultimoId')";
        $dataInsulina = $connectionDBSEG->ShotSimple($queryInsulina);


        $HipolipemiantesSelect_seg       = $_POST['HipolipemiantesSelect_seg'];
        $EstatinasSelect_seg             = $_POST['EstatinasSelect_seg'];
        $FibratosSelect_seg              = $_POST['FibratosSelect_seg'];
        $OmegaSelect_seg                 = $_POST['OmegaSelect_seg'];
        $Inhibidores_AbsorcionSelect_seg = $_POST['Inhibidores_AbsorcionSelect_seg'];

        $queryHipolipe = "INSERT INTO seguimiento_hipolipemiante VALUES ('$HipolipemiantesSelect_seg','$EstatinasSelect_seg',
        '$FibratosSelect_seg','$OmegaSelect_seg','$Inhibidores_AbsorcionSelect_seg','$ultimoId')";
        $dataHipolipe = $connectionDBSEG->ShotSimple($queryHipolipe);



        $AntihipertensivosSelect_seg  = $_POST['AntihipertensivosSelect_seg'];
        $IECASSelect_seg              = $_POST['IECASSelect_seg'];
        $ARAIISelect_seg              = $_POST['ARAIISelect_seg'];
        $InhibidoresSelect_seg        = $_POST['InhibidoresSelect_seg'];
        $CalcioantagonistasSelect_seg = $_POST['CalcioantagonistasSelect_seg'];
        $BetabloqueadoresSelect_seg   = $_POST['BetabloqueadoresSelect_seg'];
        $DiureticosSelect_seg         = $_POST['DiureticosSelect_seg'];
        $AlfabloqueadoresSelect_seg   = $_POST['AlfabloqueadoresSelect_seg'];
        $EspironolactonaSelect_seg    = $_POST['EspironolactonaSelect_seg'];

        $queryAnti = "INSERT INTO seguimiento_antihipertensivos VALUES ('$AntihipertensivosSelect_seg','$IECASSelect_seg','$ARAIISelect_seg',
        '$InhibidoresSelect_seg','$CalcioantagonistasSelect_seg','$BetabloqueadoresSelect_seg','$DiureticosSelect_seg',
        '$AlfabloqueadoresSelect_seg','$EspironolactonaSelect_seg','$ultimoId')";
        $dataAnti = $connectionDBSEG->ShotSimple($queryAnti);


        $OtrosSelect_seg          = $_POST['OtrosSelect_seg'];
        $ASASelect_seg            = $_POST['ASASelect_seg'];
        $AlopurinolSelect_seg     = $_POST['AlopurinolSelect_seg'];
        $NeuromoduladorSelect_seg = $_POST['NeuromoduladorSelect_seg'];
        $ProcineticosSelect_seg   = $_POST['ProcineticosSelect_seg'];
        $Farmacos_utilizados      = $_POST['Farmacos_utilizados'];

        $queryOtros = "INSERT INTO seguimiento_otros values ('$OtrosSelect_seg','$ASASelect_seg','$AlopurinolSelect_seg','$NeuromoduladorSelect_seg',
        '$ProcineticosSelect_seg','$Farmacos_utilizados','$ultimoId')";
        $dataOtros = $connectionDBSEG->ShotSimple($queryOtros);


        $EjercicioSelect_seg = $_POST['EjercicioSelect_seg'];
        $id_vecestiempo_seg  = $_POST['id_vecestiempo_seg'];
        $id_apegotiempo_seg  = $_POST['id_apegotiempo_seg'];
        $id_tiemposemana_seg = $_POST['id_tiemposemana_seg'];
        $id_apegoveces_seg   = $_POST['id_apegoveces_seg'];

        $queryEjercicio = "INSERT INTO seguimiento_ejercicio VALUES ('$EjercicioSelect_seg','$id_vecestiempo_seg','$id_apegotiempo_seg',
        '$id_tiemposemana_seg','$id_apegoveces_seg','$ultimoId')";
        $dataEjercicio = $connectionDBSEG->ShotSimple($queryEjercicio);


        echo 'success';

    }
    
?>