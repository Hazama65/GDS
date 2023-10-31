<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_residentes.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_residente = $_POST['id_residente'];
        $fecha = $_POST['fecha'];
        $nombre_residentes = $_POST['nombre_residentes'];
        $queryGeneral = "UPDATE datos_productividad 
                        SET fecha = '$fecha', residentes = '$nombre_residentes'
                        WHERE id_productividad  = $id_residente";
        $dataGeneral = $connectionDB->ShotSimple($queryGeneral);
        
        
        $conteo_pl = $_POST['conteo_pl']; //conteo
        $intento_1 = $_POST['intento_1'];
        $complicacion_1 = $_POST['complicacion_1'];
        $tipocomplicacion_1 = $_POST['tipocomplicacion_1'];
        $pl_otros_1 = $_POST['pl_otros_1'];
        $intento_2 = $_POST['intento_2'];
        $complicacion_2 = $_POST['complicacion_2'];
        $tipocomplicacion_2 = $_POST['tipocomplicacion_2'];
        $pl_otros_2 = $_POST['pl_otros_2'];
        $intento_3 = $_POST['intento_3'];
        $complicacion_3 = $_POST['complicacion_3'];
        $tipocomplicacion_3 = $_POST['tipocomplicacion_3'];
        $pl_otros_3 = $_POST['pl_otros_3'];

        $queryPuncionLumbar = "UPDATE puncion_lumbar
        SET 
            pl_intento1 = '$intento_1',
            pl_comp1 = '$complicacion_1',
            pl_TpoComp1 = '$tipocomplicacion_1',
            pl_otros1 = '$pl_otros_1',
            pl_intento2 = '$intento_2',
            pl_comp2 = '$complicacion_2',
            pl_TpoComp2 = '$tipocomplicacion_2',
            pl_otros2 = '$pl_otros_2',
            pl_intento3 = '$intento_3',
            pl_comp3 = '$complicacion_3',
            pl_TpoComp3 = '$tipocomplicacion_3',
            pl_otros3 = '$pl_otros_3'
        WHERE id_productividad = $id_residente";
        $dataPuncionLumbar  = $connectionDB->ShotSimple($queryPuncionLumbar);


        $conteo_intubacion = $_POST['conteo_intubacion'];//conteo
        $intento_intubacion1 = $_POST['intento_intubacion1'];
        $complicacion_intubacion_1 = $_POST['complicacion_intubacion_1'];
        $tipocomplicacion_intubacion1 = $_POST['tipocomplicacion_intubacion1'];
        $intub_otros_1 = $_POST['intub_otros_1'];
        $intento_intubacion2 = $_POST['intento_intubacion2'];
        $complicacion_intubacion_2 = $_POST['complicacion_intubacion_2'];
        $tipocomplicacion_intubacion2 = $_POST['tipocomplicacion_intubacion2'];
        $intub_otros_2 = $_POST['intub_otros_2'];
        $intento_intubacion3 = $_POST['intento_intubacion3'];
        $complicacion_intubacion_3 = $_POST['complicacion_intubacion_3'];
        $tipocomplicacion_intubacion3 = $_POST['tipocomplicacion_intubacion3'];
        $intub_otros_3 = $_POST['intub_otros_3'];

        $queryIntubacion = "UPDATE intubacion
        SET 
            ib_intento1 = '$intento_intubacion1',
            ib_comp1 = '$complicacion_intubacion_1',
            ib_TpoComp1 = '$tipocomplicacion_intubacion1',
            ib_otros1 = '$intub_otros_1',
            ib_intento2 = '$intento_intubacion2',
            ib_comp2 = '$complicacion_intubacion_2',
            ib_TpoComp2 = '$tipocomplicacion_intubacion2',
            ib_otros2 = '$intub_otros_2',
            ib_intento3 = '$intento_intubacion3',
            ib_comp3 = '$complicacion_intubacion_3',
            ib_TpoComp3 = '$tipocomplicacion_intubacion3',
            ib_otros3 = '$intub_otros_3'
        WHERE id_productividad = $id_residente";
        $dataIntubacion = $connectionDB->ShotSimple($queryIntubacion);


        $conteo_cvc = $_POST['conteo_cvc'];
        $tipocvc = $_POST['tipocvc'];
        $intento_cvc_1 = $_POST['intento_cvc_1'];
        $complicacion_cvc1 = $_POST['complicacion_cvc1'];
        $tipocomplicacion_cvc1 = $_POST['tipocomplicacion_cvc1'];
        $cvc_otros_1 = $_POST['cvc_otros_1'];
        $tipocvc2 = $_POST['tipocvc2'];
        $intento_cvc_2 = $_POST['intento_cvc_2'];
        $complicacion_cvc2 = $_POST['complicacion_cvc2'];
        $tipocomplicacion_cvc2 = $_POST['tipocomplicacion_cvc2'];
        $cvc_otros_2 = $_POST['cvc_otros_2'];
        $tipocvc3 = $_POST['tipocvc3'];
        $intento_cvc_3 = $_POST['intento_cvc_3'];
        $complicacion_cvc3 = $_POST['complicacion_cvc3'];
        $tipocomplicacion_cvc3 = $_POST['tipocomplicacion_cvc3'];
        $cvc_otros_3 = $_POST['cvc_otros_3'];

        $queryCvc = "UPDATE cvc
        SET 
            cv_TpoCVC1 = '$tipocvc',
            cv_intento1 = '$intento_cvc_1',
            cv_comp1 = '$complicacion_cvc1',
            cv_TpoComp1 = '$tipocomplicacion_cvc1',
            cv_otros1 = '$cvc_otros_1',
            cv_TpoCVC2 = '$tipocvc2',
            cv_intento2 = '$intento_cvc_2',
            cv_comp2 = '$complicacion_cvc2',
            cv_TpoComp2 = '$tipocomplicacion_cvc2',
            cv_otros2 = '$cvc_otros_2',
            cv_TpoCVC3 = '$tipocvc3',
            cv_intento3 = '$intento_cvc_3',
            cv_comp3 = '$complicacion_cvc3',
            cv_TpoComp3 = '$tipocomplicacion_cvc3',
            cv_otros3 = '$cvc_otros_3'
        WHERE id_productividad = $id_residente";
        $dataCvc= $connectionDB->ShotSimple($queryCvc);


        $conteo_parecentesis = $_POST['conteo_parecentesis'];
        $intento_paracentesis_1 = $_POST['intento_paracentesis_1'];
        $complicacion_paracentesis_1 = $_POST['complicacion_paracentesis_1'];
        $tipocomplicacion_paracentesis_1 = $_POST['tipocomplicacion_paracentesis_1'];
        $paracen_otros_1 = $_POST['paracen_otros_1'];
        $intento_paracentesis_2 = $_POST['intento_paracentesis_2'];
        $complicacion_paracentesis_2 = $_POST['complicacion_paracentesis_2'];
        $tipocomplicacion_paracentesis_2 = $_POST['tipocomplicacion_paracentesis_2'];
        $paracen_otros_2 = $_POST['paracen_otros_2'];
        $intento_paracentesis_3 = $_POST['intento_paracentesis_3'];
        $complicacion_paracentesis_3 = $_POST['complicacion_paracentesis_3'];
        $tipocomplicacion_paracentesis_3 = $_POST['tipocomplicacion_paracentesis_3'];
        $paracen_otros_3 = $_POST['paracen_otros_3'];

        $queryParacentesis = "UPDATE paracentesis
        SET 
            pt_intento1 = '$intento_paracentesis_1',
            pt_comp1 = '$complicacion_paracentesis_1',
            pt_TpoComp1 = '$tipocomplicacion_paracentesis_1',
            pt_otros1 = '$paracen_otros_1',
            pt_intento2 = '$intento_paracentesis_2',
            pt_comp2 = '$complicacion_paracentesis_2',
            pt_TpoComp2 = '$tipocomplicacion_paracentesis_2',
            pt_otros2 = '$paracen_otros_2',
            pt_intento3 = '$intento_paracentesis_3',
            pt_comp3 = '$complicacion_paracentesis_3',
            pt_TpoComp3 = '$tipocomplicacion_paracentesis_3',
            pt_otros3 = '$paracen_otros_3'
        WHERE id_productividad = $id_residente";
        $dataParacentesis = $connectionDB->ShotSimple($queryParacentesis);

        $conteo_biopsiapiel = $_POST['conteo_biopsiapiel'];
        $intento_biopsiapiel_1 = $_POST['intento_biopsiapiel_1'];
        $complicacion_biopsiapiel_1 = $_POST['complicacion_biopsiapiel_1'];
        $tp_biopsiapiel_1 = $_POST['tp_biopsiapiel_1'];
        $biopiel_otros_1 = $_POST['biopiel_otros_1'];
        $intento_biopsiapiel_2 = $_POST['intento_biopsiapiel_2'];
        $complicacion_biopsiapiel_2 = $_POST['complicacion_biopsiapiel_2'];
        $tp_biopsiapiel_2 = $_POST['tp_biopsiapiel_2'];
        $biopiel_otros_2 = $_POST['biopiel_otros_2'];
        $intento_biopsiapiel_3 = $_POST['intento_biopsiapiel_3'];
        $complicacion_biopsiapiel_3 = $_POST['complicacion_biopsiapiel_3'];
        $tp_biopsiapiel_3 = $_POST['tp_biopsiapiel_3'];
        $biopiel_otros_3 = $_POST['biopiel_otros_3'];

        $queryBiopsiaPiel = "UPDATE biopsia_piel
        SET 
            bp_intento1 = '$intento_biopsiapiel_1',
            bp_comp1 = '$complicacion_biopsiapiel_1',
            bp_TpoComp1 = '$tp_biopsiapiel_1',
            bp_otros1 = '$biopiel_otros_1',
            bp_intento2 = '$intento_biopsiapiel_2',
            bp_comp2 = '$complicacion_biopsiapiel_2',
            bp_TpoComp2 = '$tp_biopsiapiel_2',
            bp_otros2 = '$biopiel_otros_2',
            bp_intento3 = '$intento_biopsiapiel_3',
            bp_comp3 = '$complicacion_biopsiapiel_3',
            bp_TpoComp3 = '$tp_biopsiapiel_3',
            bp_otros3 = '$biopiel_otros_3'
        WHERE id_productividad = $id_residente";
        $dataBiopsiaPiel = $connectionDB->ShotSimple($queryBiopsiaPiel);


        $conteo_biopsiaSUBC = $_POST['conteo_biopsiaSUBC'];
        $SUBC_1 = $_POST['SUBC_1'];
        $complicacion_SUBC_1 = $_POST['complicacion_SUBC_1'];
        $tp_SUBC_1 = $_POST['tp_SUBC_1'];
        $subc_otros_1 = $_POST['subc_otros_1'];
        $SUBC_2 = $_POST['SUBC_2'];
        $complicacion_SUBC_2 = $_POST['complicacion_SUBC_2'];
        $tp_SUBC_2 = $_POST['tp_SUBC_2'];
        $subc_otros_2 = $_POST['subc_otros_2'];
        $SUBC_3 = $_POST['SUBC_3'];
        $complicacion_SUBC_3 = $_POST['complicacion_SUBC_3'];
        $tp_SUBC_3 = $_POST['tp_SUBC_3'];
        $subc_otros_3 = $_POST['subc_otros_3'];

        $querySUBC = "UPDATE biopsia_celular
        SET 
            bc_intento1 = '$SUBC_1',
            bc_comp1 = '$complicacion_SUBC_1',
            bc_TpoComp1 = '$tp_SUBC_1',
            bc_otros1 = '$subc_otros_1',
            bc_intento2 = '$SUBC_2',
            bc_comp2 = '$complicacion_SUBC_2',
            bc_TpoComp2 = '$tp_SUBC_2',
            bc_otros2 = '$subc_otros_2',
            bc_intento3 = '$SUBC_3',
            bc_comp3 = '$complicacion_SUBC_3',
            bc_TpoComp3 = '$tp_SUBC_3',
            bc_otros3 = '$subc_otros_3'
        WHERE id_productividad = $id_residente";
        $dataSUBC = $connectionDB->ShotSimple($querySUBC);


        $conteo_biopsiatiroides = $_POST['conteo_biopsiatiroides'];
        $BT_1 = $_POST['BT_1'];
        $complicacion_BT_1 = $_POST['complicacion_BT_1'];
        $tp_BT1 = $_POST['tp_BT1'];
        $bt_otros_1 = $_POST['bt_otros_1'];
        $BT_2 = $_POST['BT_2'];
        $complicacion_BT_2 = $_POST['complicacion_BT_2'];
        $tp_BT2 = $_POST['tp_BT2'];
        $bt_otros_2 = $_POST['bt_otros_2'];
        $BT_3 = $_POST['BT_3'];
        $complicacion_BT_3 = $_POST['complicacion_BT_3'];
        $tp_BT3 = $_POST['tp_BT3'];
        $bt_otros_3 = $_POST['bt_otros_3'];

        $queryBT = "UPDATE biopsia_tiroides
        SET 
            bt_intento1 = '$BT_1',
            bt_comp1 = '$complicacion_BT_1',
            bt_TpoComp1 = '$tp_BT1',
            bt_otros1 = '$bt_otros_1',
            bt_intento2 = '$BT_2',
            bt_comp2 = '$complicacion_BT_2',
            bt_TpoComp2 = '$tp_BT2',
            bt_otros2 = '$bt_otros_2',
            bt_intento3 = '$BT_3',
            bt_comp3 = '$complicacion_BT_3',
            bt_TpoComp3 = '$tp_BT3',
            bt_otros3 = '$bt_otros_3'
        WHERE id_productividad = $id_residente";
        $dataBT = $connectionDB->ShotSimple($queryBT);


        $conteo_toracocentesis = $_POST['conteo_toracocentesis'];
        $Toracocentesi_1 = $_POST['Toracocentesi_1'];
        $complicacion_tora_1 = $_POST['complicacion_tora_1'];
        $tp_tora1 = $_POST['tp_tora1'];
        $tora_otros_1 = $_POST['tora_otros_1'];
        $Toracocentesi_2 = $_POST['Toracocentesi_2'];
        $complicacion_tora_2 = $_POST['complicacion_tora_2'];
        $tp_tora2 = $_POST['tp_tora2'];
        $tora_otros_2 = $_POST['tora_otros_2'];
        $Toracocentesi_3 = $_POST['Toracocentesi_3'];
        $complicacion_tora_3 = $_POST['complicacion_tora_3'];
        $tp_tora3 = $_POST['tp_tora3'];
        $tora_otros_3 = $_POST['tora_otros_3'];

        $queryTora = "UPDATE toracocentesis
        SET 
            tora_intento1 = '$Toracocentesi_1',
            tora_comp1 = '$complicacion_tora_1',
            tora_TpoComp1 = '$tp_tora1',
            tora_otros1 = '$tora_otros_1',
            tora_intento2 = '$Toracocentesi_2',
            tora_comp2 = '$complicacion_tora_2',
            tora_TpoComp2 = '$tp_tora2',
            tora_otros2 = '$tora_otros_2',
            tora_intento3 = '$Toracocentesi_3',
            tora_comp3 = '$complicacion_tora_3',
            tora_TpoComp3 = '$tp_tora3',
            tora_otros3 = '$tora_otros_3'
        WHERE id_productividad = $id_residente";
        $dataTora= $connectionDB->ShotSimple($queryTora);


        $conteo_artrocentesis = $_POST['conteo_artrocentesis'];
        $Artro_1 = $_POST['Artro_1'];
        $complicacion_Artro_1 = $_POST['complicacion_Artro_1'];
        $tp_Artro_1 = $_POST['tp_Artro_1'];
        $artro_otros_1 = $_POST['artro_otros_1'];
        $Artro_2 = $_POST['Artro_2'];
        $complicacion_Artro_2 = $_POST['complicacion_Artro_2'];
        $tp_Artro_2 = $_POST['tp_Artro_2'];
        $artro_otros_2 = $_POST['artro_otros_2'];
        $Artro_3 = $_POST['Artro_3'];
        $complicacion_Artro_3 = $_POST['complicacion_Artro_3'];
        $tp_Artro_3 = $_POST['tp_Artro_3'];
        $artro_otros_3 = $_POST['artro_otros_3'];

        $queryArtro = "UPDATE artrocentesis
        SET 
            at_intento1 = '$Artro_1',
            at_comp1 = '$complicacion_Artro_1',
            at_TpoComp1 = '$tp_Artro_1',
            at_otros1 = '$artro_otros_1',
            at_intento2 = '$Artro_2',
            at_comp2 = '$complicacion_Artro_2',
            at_TpoComp2 = '$tp_Artro_2',
            at_otros2 = '$artro_otros_2',
            at_intento3 = '$Artro_3',
            at_comp3 = '$complicacion_Artro_3',
            at_TpoComp3 = '$tp_Artro_3',
            at_otros3 = '$artro_otros_3'
        WHERE id_productividad = $id_residente";
        $dataArtro = $connectionDB->ShotSimple($queryArtro);

        $conteo_mo = $_POST['conteo_mo'];
        $MO_1 = $_POST['MO_1'];
        $complicacion_MO_1 = $_POST['complicacion_MO_1'];
        $tc_MO1 = $_POST['tc_MO1'];
        $mo_otros_1 = $_POST['mo_otros_1'];
        $MO_2 = $_POST['MO_2'];
        $complicacion_MO_2 = $_POST['complicacion_MO_2'];
        $tc_MO_2 = $_POST['tc_MO_2'];
        $mo_otros_2 = $_POST['mo_otros_2'];
        $MO_3 = $_POST['MO_3'];
        $complicacion_MO_3 = $_POST['complicacion_MO_3'];
        $tc_MO_3 = $_POST['tc_MO_3'];
        $mo_otros_3 = $_POST['mo_otros_3'];

        $queryMO = "UPDATE aspiracion_mo
        SET 
            mo_intento1 = '$MO_1',
            mo_comp1 = '$complicacion_MO_1',
            mo_TpoComp1 = '$tc_MO1',
            mo_otros1 = '$mo_otros_1',
            mo_intento2 = '$MO_2',
            mo_comp2 = '$complicacion_MO_2',
            mo_TpoComp2 = '$tc_MO_2',
            mo_otros2 = '$mo_otros_2',
            mo_intento3 = '$MO_3',
            mo_comp3 = '$complicacion_MO_3',
            mo_TpoComp3 = '$tc_MO_3',
            mo_otros3 = '$mo_otros_3'
        WHERE id_productividad = $id_residente";
        $dataMO = $connectionDB->ShotSimple($queryMO);



        $queryProcedimientos = "UPDATE procedimientos
        SET 
            puncionLumbar = $conteo_pl,
            intubacion = $conteo_intubacion,
            cvc = $conteo_cvc,
            parasentesis = $conteo_parecentesis,
            biopsia_piel = $conteo_biopsiapiel,
            biopsia_celular = $conteo_biopsiaSUBC,
            biopsia_tiroides = $conteo_biopsiatiroides,
            toracosentesis = $conteo_toracocentesis,
            artrocentesis = $conteo_artrocentesis,
            mo = $conteo_mo
        WHERE id_productividad = $id_residente";
        $dataProcedimientos = $connectionDB->ShotSimple($queryProcedimientos);

        echo 'success';
    }

?>