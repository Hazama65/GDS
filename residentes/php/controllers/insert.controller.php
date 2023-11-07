<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_residentes.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $fecha             = $_POST['fecha'];
        $nombre_residentes = $_POST['nombre_residentes'];
        $queryGeneral = "INSERT INTO datos_productividad (fecha,residentes)
        VALUES ('$fecha','$nombre_residentes')";
        $dataGeneral = $connectionDB->ShotSimple($queryGeneral);
        $ultimoId = $connectionDB->last_id;



        $conteo_pl              = $_POST['conteo_pl'];
        $conteo_intubacion      = $_POST['conteo_intubacion'];
        $conteo_cvc             = $_POST['conteo_cvc'];
        $conteo_parecentesis    = $_POST['conteo_parecentesis'];
        $conteo_biopsiapiel     = $_POST['conteo_biopsiapiel'];
        $conteo_biopsiaSUBC     = $_POST['conteo_biopsiaSUBC'];
        $conteo_biopsiatiroides = $_POST['conteo_biopsiatiroides'];
        $conteo_toracocentesis  = $_POST['conteo_toracocentesis'];
        $conteo_artrocentesis   = $_POST['conteo_artrocentesis'];
        $conteo_mo              = $_POST['conteo_mo'];

        $queryProcedimientos = "INSERT INTO procedimientos VALUES ('$conteo_pl','$conteo_intubacion','$conteo_cvc',
        '$conteo_parecentesis','$conteo_biopsiapiel','$conteo_biopsiaSUBC','$conteo_biopsiatiroides',
        '$conteo_toracocentesis','$conteo_artrocentesis','$conteo_mo','$ultimoId')";
        $dataProcedimientos = $connectionDB->ShotSimple($queryProcedimientos);

        $intento_1          = $_POST['intento_1'];
        $complicacion_1     = $_POST['complicacion_1'];
        $tipocomplicacion_1 = $_POST['tipocomplicacion_1'];
        $pl_otros_1         = $_POST['pl_otros_1'];
        $intento_2          = $_POST['intento_2'];
        $complicacion_2     = $_POST['complicacion_2'];
        $tipocomplicacion_2 = $_POST['tipocomplicacion_2'];
        $pl_otros_2         = $_POST['pl_otros_2'];
        $intento_3          = $_POST['intento_3'];
        $complicacion_3     = $_POST['complicacion_3'];
        $tipocomplicacion_3 = $_POST['tipocomplicacion_3'];
        $pl_otros_3         = $_POST['pl_otros_3'];
        $queryPuncionLumbar = "INSERT INTO puncion_lumbar 
        VALUES ('$intento_1','$complicacion_1','$tipocomplicacion_1','$pl_otros_1','$intento_2','$complicacion_2',
        '$tipocomplicacion_2','$pl_otros_2','$intento_3','$complicacion_3','$tipocomplicacion_3','$pl_otros_3','$ultimoId')";
        $dataPuncionLumbar  = $connectionDB->ShotSimple($queryPuncionLumbar);


        $intento_intubacion1          = $_POST['intento_intubacion1'];
        $complicacion_intubacion_1    = $_POST['complicacion_intubacion_1'];
        $tipocomplicacion_intubacion1 = $_POST['tipocomplicacion_intubacion1'];
        $intub_otros_1                = $_POST['intub_otros_1'];
        $intento_intubacion2          = $_POST['intento_intubacion2'];
        $complicacion_intubacion_2    = $_POST['complicacion_intubacion_2'];
        $tipocomplicacion_intubacion2 = $_POST['tipocomplicacion_intubacion2'];
        $intub_otros_2                = $_POST['intub_otros_2'];
        $intento_intubacion3          = $_POST['intento_intubacion3'];
        $complicacion_intubacion_3    = $_POST['complicacion_intubacion_3'];
        $tipocomplicacion_intubacion3 = $_POST['tipocomplicacion_intubacion3'];
        $intub_otros_3                = $_POST['intub_otros_3'];

        $queryIntubacion = "INSERT INTO intubacion VALUES ('$intento_intubacion1','$complicacion_intubacion_1',
        '$tipocomplicacion_intubacion1','$intub_otros_1','$intento_intubacion2','$complicacion_intubacion_2',
        '$tipocomplicacion_intubacion2','$intub_otros_2','$intento_intubacion3','$complicacion_intubacion_3',
        '$tipocomplicacion_intubacion3','$intub_otros_3','$ultimoId')";

        $dataIntubacion = $connectionDB->ShotSimple($queryIntubacion);


        $tipocvc               = $_POST['tipocvc'];
        $sitio_anatomico_1     = $_POST['sitio_anatomico_1'];
        $intento_cvc_1         = $_POST['intento_cvc_1'];
        $complicacion_cvc1     = $_POST['complicacion_cvc1'];
        $tipocomplicacion_cvc1 = $_POST['tipocomplicacion_cvc1'];
        $cvc_otros_1           = $_POST['cvc_otros_1'];
        $tipocvc2              = $_POST['tipocvc2'];
        $sitio_anatomico_2     = $_POST['sitio_anatomico_2'];
        $intento_cvc_2         = $_POST['intento_cvc_2'];
        $complicacion_cvc2     = $_POST['complicacion_cvc2'];
        $tipocomplicacion_cvc2 = $_POST['tipocomplicacion_cvc2'];
        $cvc_otros_2           = $_POST['cvc_otros_2'];
        $tipocvc3              = $_POST['tipocvc3'];
        $sitio_anatomico_3     = $_POST['sitio_anatomico_3'];
        $intento_cvc_3         = $_POST['intento_cvc_3'];
        $complicacion_cvc3     = $_POST['complicacion_cvc3'];
        $tipocomplicacion_cvc3 = $_POST['tipocomplicacion_cvc3'];
        $cvc_otros_3           = $_POST['cvc_otros_3'];

        $queryCvc = "INSERT INTO cvc VALUES ('$tipocvc','$sitio_anatomico_1','$intento_cvc_1','$complicacion_cvc1','$tipocomplicacion_cvc1',
        '$cvc_otros_1','$tipocvc2','$sitio_anatomico_2','$intento_cvc_2','$complicacion_cvc2','$tipocomplicacion_cvc2','$cvc_otros_2',
        '$tipocvc3','$sitio_anatomico_3','$intento_cvc_3','$complicacion_cvc3','$tipocomplicacion_cvc3','$cvc_otros_3','$ultimoId')";

        $dataCvc= $connectionDB->ShotSimple($queryCvc);

        $intento_paracentesis_1          = $_POST['intento_paracentesis_1'];
        $complicacion_paracentesis_1     = $_POST['complicacion_paracentesis_1'];
        $tipocomplicacion_paracentesis_1 = $_POST['tipocomplicacion_paracentesis_1'];
        $paracen_otros_1                 = $_POST['paracen_otros_1'];
        $intento_paracentesis_2          = $_POST['intento_paracentesis_2'];
        $complicacion_paracentesis_2     = $_POST['complicacion_paracentesis_2'];
        $tipocomplicacion_paracentesis_2 = $_POST['tipocomplicacion_paracentesis_2'];
        $paracen_otros_2                 = $_POST['paracen_otros_2'];
        $intento_paracentesis_3          = $_POST['intento_paracentesis_3'];
        $complicacion_paracentesis_3     = $_POST['complicacion_paracentesis_3'];
        $tipocomplicacion_paracentesis_3 = $_POST['tipocomplicacion_paracentesis_3'];
        $paracen_otros_3                 = $_POST['paracen_otros_3'];

        $queryParacentesis = "INSERT INTO paracentesis VALUES ('$intento_paracentesis_1','$complicacion_paracentesis_1',
        '$tipocomplicacion_paracentesis_1','$paracen_otros_1','$intento_paracentesis_2','$complicacion_paracentesis_2',
        '$tipocomplicacion_paracentesis_2','$paracen_otros_2','$intento_paracentesis_3','$complicacion_paracentesis_3',
        '$tipocomplicacion_paracentesis_3','$paracen_otros_3','$ultimoId')";

        $dataParacentesis = $connectionDB->ShotSimple($queryParacentesis);


        $intento_biopsiapiel_1      = $_POST['intento_biopsiapiel_1'];
        $complicacion_biopsiapiel_1 = $_POST['complicacion_biopsiapiel_1'];
        $tp_biopsiapiel_1           = $_POST['tp_biopsiapiel_1'];
        $biopiel_otros_1            = $_POST['biopiel_otros_1'];
        $intento_biopsiapiel_2      = $_POST['intento_biopsiapiel_2'];
        $complicacion_biopsiapiel_2 = $_POST['complicacion_biopsiapiel_2'];
        $tp_biopsiapiel_2           = $_POST['tp_biopsiapiel_2'];
        $biopiel_otros_2            = $_POST['biopiel_otros_2'];
        $intento_biopsiapiel_3      = $_POST['intento_biopsiapiel_3'];
        $complicacion_biopsiapiel_3 = $_POST['complicacion_biopsiapiel_3'];
        $tp_biopsiapiel_3           = $_POST['tp_biopsiapiel_3'];
        $biopiel_otros_3            = $_POST['biopiel_otros_3'];

        $queryBiopsiaPiel  = "INSERT INTO biopsia_piel VALUES('$intento_biopsiapiel_1','$complicacion_biopsiapiel_1',
        '$tp_biopsiapiel_1','$biopiel_otros_1','$intento_biopsiapiel_2','$complicacion_biopsiapiel_2',
        '$tp_biopsiapiel_2','$biopiel_otros_2','$intento_biopsiapiel_3','$complicacion_biopsiapiel_3',
        '$tp_biopsiapiel_3','$biopiel_otros_3','$ultimoId')";

        $dataBiopsiaPiel = $connectionDB->ShotSimple($queryBiopsiaPiel);


        $SUBC_1              = $_POST['SUBC_1'];
        $complicacion_SUBC_1 = $_POST['complicacion_SUBC_1'];
        $tp_SUBC_1           = $_POST['tp_SUBC_1'];
        $subc_otros_1        = $_POST['subc_otros_1'];
        $SUBC_2              = $_POST['SUBC_2'];
        $complicacion_SUBC_2 = $_POST['complicacion_SUBC_2'];
        $tp_SUBC_2           = $_POST['tp_SUBC_2'];
        $subc_otros_2        = $_POST['subc_otros_2'];
        $SUBC_3              = $_POST['SUBC_3'];
        $complicacion_SUBC_3 = $_POST['complicacion_SUBC_3'];
        $tp_SUBC_3           = $_POST['tp_SUBC_3'];
        $subc_otros_3        = $_POST['subc_otros_3'];

        $querySUBC ="INSERT INTO biopsia_celular VALUES ('$SUBC_1','$complicacion_SUBC_1','$tp_SUBC_1','$subc_otros_1',
        '$SUBC_2','$complicacion_SUBC_2','$tp_SUBC_2','$subc_otros_2','$SUBC_3','$complicacion_SUBC_3','$tp_SUBC_3',
        '$subc_otros_3','$ultimoId')";

        $dataSUBC = $connectionDB->ShotSimple($querySUBC);


        $BT_1              = $_POST['BT_1'];
        $complicacion_BT_1 = $_POST['complicacion_BT_1'];
        $tp_BT1            = $_POST['tp_BT1'];
        $bt_otros_1        = $_POST['bt_otros_1'];
        $BT_2              = $_POST['BT_2'];
        $complicacion_BT_2 = $_POST['complicacion_BT_2'];
        $tp__BT2           = $_POST['tp__BT2'];
        $bt_otros_2        = $_POST['bt_otros_2'];
        $BT_3              = $_POST['BT_3'];
        $complicacion_BT_3 = $_POST['complicacion_BT_3'];
        $tp__BT3           = $_POST['tp__BT3'];
        $bt_otros_3        = $_POST['bt_otros_3'];

        $queryBT = "INSERT INTO biopsia_tiroides VALUES ('$BT_1','$complicacion_BT_1','$tp_BT1','$bt_otros_1','$BT_2',
        '$complicacion_BT_2','$tp__BT2','$bt_otros_2','$BT_3','$complicacion_BT_3','$tp__BT3','$bt_otros_3','$ultimoId')";

        $dataBT = $connectionDB->ShotSimple($queryBT);


        $Toracocentesi_1     = $_POST['Toracocentesi_1'];
        $complicacion_tora_1 = $_POST['complicacion_tora_1'];
        $tp_tora1            = $_POST['tp_tora1'];
        $tora_otros_1        = $_POST['tora_otros_1'];
        $Toracocentesi_2     = $_POST['Toracocentesi_2'];
        $complicacion_tora_2 = $_POST['complicacion_tora_2'];
        $tp_tora2            = $_POST['tp_tora2'];
        $tora_otros_2        = $_POST['tora_otros_2'];
        $Toracocentesi_3     = $_POST['Toracocentesi_3'];
        $complicacion_tora_3 = $_POST['complicacion_tora_3'];
        $tp_tora3            = $_POST['tp_tora3'];
        $tora_otros_3        = $_POST['tora_otros_3'];

        $queryTora = "INSERT INTO toracocentesis VALUES ('$Toracocentesi_1','$complicacion_tora_1','$tp_tora1','$tora_otros_1',
        '$Toracocentesi_2','$complicacion_tora_2','$tp_tora2','$tora_otros_2','$Toracocentesi_3','$complicacion_tora_3',
        '$tp_tora3','$tora_otros_3','$ultimoId')";

        $dataTora= $connectionDB->ShotSimple($queryTora);


        $Artro_1              = $_POST['Artro_1'];
        $complicacion_Artro_1 = $_POST['complicacion_Artro_1'];
        $tp_Artro_1           = $_POST['tp_Artro_1'];
        $artro_otros_1        = $_POST['artro_otros_1'];
        $Artro_2              = $_POST['Artro_2'];
        $complicacion_Artro_2 = $_POST['complicacion_Artro_2'];
        $tp_Artro_2           = $_POST['tp_Artro_2'];
        $artro_otros_2        = $_POST['artro_otros_2'];
        $Artro_3              = $_POST['Artro_3'];
        $complicacion_Artro_3 = $_POST['complicacion_Artro_3'];
        $tp_Artro_3           = $_POST['tp_Artro_3'];
        $artro_otros_3        = $_POST['artro_otros_3'];

        $queryArtro = "INSERT INTO artrocentesis VALUES ('$Artro_1','$complicacion_Artro_1','$tp_Artro_1','$artro_otros_1',
        '$Artro_2','$complicacion_Artro_2','$tp_Artro_2','$artro_otros_2','$Artro_3','$complicacion_Artro_3','$tp_Artro_3',
        '$artro_otros_3','$ultimoId')";

        $dataArtro = $connectionDB->ShotSimple($queryArtro);


        $MO_1              = $_POST['MO_1'];
        $complicacion_MO_1 = $_POST['complicacion_MO_1'];
        $tc_MO1            = $_POST['tc_MO1'];
        $mo_otros_1        = $_POST['mo_otros_1'];
        $MO_2              = $_POST['MO_2'];
        $complicacion_MO_2 = $_POST['complicacion_MO_2'];
        $tc_MO_2           = $_POST['tc_MO_2'];
        $mo_otros_2        = $_POST['mo_otros_2'];
        $MO_3              = $_POST['MO_3'];
        $complicacion_MO_3 = $_POST['complicacion_MO_3'];
        $tc_MO_3           = $_POST['tc_MO_3'];
        $mo_otros_3        = $_POST['mo_otros_3'];

        $queryMO = "INSERT INTO aspiracion_mo VALUES ('$MO_1','$complicacion_MO_1','$tc_MO1','$mo_otros_1','$MO_2',
        '$complicacion_MO_2','$tc_MO_2','$mo_otros_2','$MO_3','$complicacion_MO_3','$tc_MO_3','$mo_otros_3','$ultimoId')";

        $dataMO = $connectionDB->ShotSimple($queryMO);


        echo 'success';
    }else {
        echo 'hola';
    }

    
?>