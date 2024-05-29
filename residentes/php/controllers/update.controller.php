<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_residentes.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $Tables = array(
            $table_datos_datos_productividad = 'datos_productividad',
            $table_datos_procedimientos = 'procedimientos',
            $table_datos_puncion_lumbar = 'puncion_lumbar',
            $table_datos_intubacion = 'intubacion',
            $table_datos_cvc = 'cvc',
            $table_datos_paracentesis = 'paracentesis',
            $table_datos_biopsia_piel = 'biopsia_piel',
            $table_datos_biopsia_celular = 'biopsia_celular',
            $table_datos_biopsia_tiroides = 'biopsia_tiroides',
            $table_datos_toracocentesis = 'toracocentesis',
            $table_datos_artrocentesis = 'artrocentesis',
            $table_datos_aspiracion_mo = 'aspiracion_mo'
        );

        $updateColum ='id_productividad';
        $updateId    = $_POST['id_residente'];

        $data_datos_productividad  = array(
            'fecha'              => $_POST['fecha'],
            'residentes'         => $_POST['nombre_residentes'],
            'nombre_responsable' => $_POST['nombre_responsable'],
            'nombre_paciente'    => $_POST['nombre_paciente']
        );

        $connectionDB->updateData($Tables[0],$data_datos_productividad,$updateColum,$updateId);

        $data_procedimientos  = array(
            'puncionLumbar'    => $_POST['conteo_pl'],
            'intubacion'       => $_POST['conteo_intubacion'],
            'cvc'              => $_POST['conteo_cvc'],
            'parasentesis'     => $_POST['conteo_parecentesis'],
            'biopsia_piel'     => $_POST['conteo_biopsiapiel'],
            'biopsia_celular'  => $_POST['conteo_biopsiaSUBC'],
            'biopsia_tiroides' => $_POST['conteo_biopsiatiroides'],
            'toracosentesis'   => $_POST['conteo_toracocentesis'],
            'artrocentesis'    => $_POST['conteo_artrocentesis'],
            'mo'               => $_POST['conteo_mo'],
            );

        $connectionDB->updateData($Tables[1],$data_procedimientos,$updateColum,$updateId);
    
        $data_puncion_lumbar  = array(
            'pl_intento1'       => $_POST['intento_1'],
            'pl_comp1'          => $_POST['complicacion_1'],
            'pl_TpoComp1'       => $_POST['tipocomplicacion_1'],
            'pl_otros1'         => $_POST['pl_otros_1'],
            'pl_intento2'       => $_POST['intento_2'],
            'pl_comp2'          => $_POST['complicacion_2'],
            'pl_TpoComp2'       => $_POST['tipocomplicacion_2'],
            'pl_otros2'         => $_POST['pl_otros_2'],
            'pl_intento3'       => $_POST['intento_3'],
            'pl_comp3'          => $_POST['complicacion_3'],
            'pl_TpoComp3'       => $_POST['tipocomplicacion_3'],
            'pl_otros3'         => $_POST['pl_otros_3'],
        );
    
        $connectionDB->updateData($Tables[2],$data_puncion_lumbar,$updateColum,$updateId);
    
        $data_intubacion  = array(
            'ib_intento1'       => $_POST['intento_intubacion1'],
            'ib_comp1'          => $_POST['complicacion_intubacion_1'],
            'ib_TpoComp1'       => $_POST['tipocomplicacion_intubacion1'],
            'ib_otros1'         => $_POST['intub_otros_1'],
            'ib_intento2'       => $_POST['intento_intubacion2'],
            'ib_comp2'          => $_POST['complicacion_intubacion_2'],
            'ib_TpoComp2'       => $_POST['tipocomplicacion_intubacion2'],
            'ib_otros2'         => $_POST['intub_otros_2'],
            'ib_intento3'       => $_POST['intento_intubacion3'],
            'ib_comp3'          => $_POST['complicacion_intubacion_3'],
            'ib_TpoComp3'       => $_POST['tipocomplicacion_intubacion3'],
            'ib_otros3'         => $_POST['intub_otros_3'],
        );

        $connectionDB->updateData($Tables[3],$data_intubacion,$updateColum,$updateId);
    
    
        $data_cvc  = array(
            'cv_TpoCVC1'        => $_POST['tipocvc'],
            'cv_Anatomia1'      => $_POST['sitio_anatomico_1'],
            'cv_intento1'       => $_POST['intento_cvc_1'],
            'cv_comp1'          => $_POST['complicacion_cvc1'],
            'cv_TpoComp1'       => $_POST['tipocomplicacion_cvc1'],
            'cv_otros1'         => $_POST['cvc_otros_1'],
            'cv_TpoCVC2'        => $_POST['tipocvc2'],
            'cv_Anatomia2'      => $_POST['sitio_anatomico_2'],
            'cv_intento2'       => $_POST['intento_cvc_2'],
            'cv_comp2'          => $_POST['complicacion_cvc2'],
            'cv_TpoComp2'       => $_POST['tipocomplicacion_cvc2'],
            'cv_otros2'         => $_POST['cvc_otros_2'],
            'cv_TpoCVC3'        => $_POST['tipocvc3'],
            'cv_Anatomia3'      => $_POST['sitio_anatomico_3'],
            'cv_intento3'       => $_POST['intento_cvc_3'],
            'cv_comp3'          => $_POST['complicacion_cvc3'],
            'cv_TpoComp3'       => $_POST['tipocomplicacion_cvc3'],
            'cv_otros3'         => $_POST['cvc_otros_3'],
        );

        $connectionDB->updateData($Tables[4],$data_cvc,$updateColum,$updateId);
    
        $data_paracentesis  = array(
            'pt_intento1'       => $_POST['intento_paracentesis_1'],
            'pt_comp1'          => $_POST['complicacion_paracentesis_1'],
            'pt_TpoComp1'       => $_POST['tipocomplicacion_paracentesis_1'],
            'pt_otros1'         => $_POST['paracen_otros_1'],
            'pt_intento2'       => $_POST['intento_paracentesis_2'],
            'pt_comp2'          => $_POST['complicacion_paracentesis_2'],
            'pt_TpoComp2'       => $_POST['tipocomplicacion_paracentesis_2'],
            'pt_otros2'         => $_POST['paracen_otros_2'],
            'pt_intento3'       => $_POST['intento_paracentesis_3'],
            'pt_comp3'          => $_POST['complicacion_paracentesis_3'],
            'pt_TpoComp3'       => $_POST['tipocomplicacion_paracentesis_3'],
            'pt_otros3'         => $_POST['paracen_otros_3'],

        );

        $connectionDB->updateData($Tables[5],$data_paracentesis,$updateColum,$updateId);
    
        $data_biopsia_piel  = array(
            'bp_intento1'       => $_POST['intento_biopsiapiel_1'],
            'bp_comp1'          => $_POST['complicacion_biopsiapiel_1'],
            'bp_TpoComp1'       => $_POST['tp_biopsiapiel_1'],
            'bp_otros1'         => $_POST['biopiel_otros_1'],
            'bp_intento2'       => $_POST['intento_biopsiapiel_2'],
            'bp_comp2'          => $_POST['complicacion_biopsiapiel_2'],
            'bp_TpoComp2'       => $_POST['tp_biopsiapiel_2'],
            'bp_otros2'         => $_POST['biopiel_otros_2'],
            'bp_intento3'       => $_POST['intento_biopsiapiel_3'],
            'bp_comp3'          => $_POST['complicacion_biopsiapiel_3'],
            'bp_TpoComp3'       => $_POST['tp_biopsiapiel_3'],
            'bp_otros3'         => $_POST['biopiel_otros_3'],
        );

        $connectionDB->updateData($Tables[6],$data_biopsia_piel,$updateColum,$updateId);
    
        $data_biopsia_celular  = array(

            'bc_intento1'       => $_POST['SUBC_1'],
            'bc_comp1'          => $_POST['complicacion_SUBC_1'],
            'bc_TpoComp1'       => $_POST['tp_SUBC_1'],
            'bc_otros1'         => $_POST['subc_otros_1'],
            'bc_intento2'       => $_POST['SUBC_2'],
            'bc_comp2'          => $_POST['complicacion_SUBC_2'],
            'bc_TpoComp2'       => $_POST['tp_SUBC_2'],
            'bc_otros2'         => $_POST['subc_otros_2'],
            'bc_intento3'       => $_POST['SUBC_3'],
            'bc_comp3'          => $_POST['complicacion_SUBC_3'],
            'bc_TpoComp3'       => $_POST['tp_SUBC_3'],
            'bc_otros3'         => $_POST['subc_otros_3'],

        );

        $connectionDB->updateData($Tables[7],$data_biopsia_celular,$updateColum,$updateId);
    
        $data_biopsia_tiroides  = array(
            'bt_intento1'       => $_POST['BT_1'],
            'bt_comp1'          => $_POST['complicacion_BT_1'],
            'bt_TpoComp1'       => $_POST['tp_BT1'],
            'bt_otros1'         => $_POST['bt_otros_1'],
            'bt_intento2'       => $_POST['BT_2'],
            'bt_comp2'          => $_POST['complicacion_BT_2'],
            'bt_TpoComp2'       => $_POST['tp_BT2'],
            'bt_otros2'         => $_POST['bt_otros_2'],
            'bt_intento3'       => $_POST['BT_3'],
            'bt_comp3'          => $_POST['complicacion_BT_3'],
            'bt_TpoComp3'       => $_POST['tp_BT3'],
            'bt_otros3'         => $_POST['bt_otros_3'],
        );

        $connectionDB->updateData($Tables[8],$data_biopsia_tiroides,$updateColum,$updateId);
    
        $data_toracocentesis  = array(

            'tora_intento1'     => $_POST['Toracocentesi_1'],
            'tora_comp1'        => $_POST['complicacion_tora_1'],
            'tora_TpoComp1'     => $_POST['tp_tora1'],
            'tora_otros1'       => $_POST['tora_otros_1'],
            'tora_intento2'     => $_POST['Toracocentesi_2'],
            'tora_comp2'        => $_POST['complicacion_tora_2'],
            'tora_TpoComp2'     => $_POST['tp_tora2'],
            'tora_otros2'       => $_POST['tora_otros_2'],
            'tora_intento3'     => $_POST['Toracocentesi_3'],
            'tora_comp3'        => $_POST['complicacion_tora_3'],
            'tora_TpoComp3'     => $_POST['tp_tora3'],
            'tora_otros3'       => $_POST['tora_otros_3'],

        );

        $connectionDB->updateData($Tables[9],$data_toracocentesis,$updateColum,$updateId);
    
        $data_artrocentesis  = array(

            'at_intento1'       => $_POST['Artro_1'],
            'at_comp1'          => $_POST['complicacion_Artro_1'],
            'at_TpoComp1'       => $_POST['tp_Artro_1'],
            'at_otros1'         => $_POST['artro_otros_1'],
            'at_intento2'       => $_POST['Artro_2'],
            'at_comp2'          => $_POST['complicacion_Artro_2'],
            'at_TpoComp2'       => $_POST['tp_Artro_2'],
            'at_otros2'         => $_POST['artro_otros_2'],
            'at_intento3'       => $_POST['Artro_3'],
            'at_comp3'          => $_POST['complicacion_Artro_3'],
            'at_TpoComp3'       => $_POST['tp_Artro_3'],
            'at_otros3'         => $_POST['artro_otros_3'],

        );

        $connectionDB->updateData($Tables[10],$data_artrocentesis,$updateColum,$updateId);
    
        $data_aspiracion_mo  = array(

            'mo_intento1'       => $_POST['MO_1'],
            'mo_comp1'          => $_POST['complicacion_MO_1'],
            'mo_TpoComp1'       => $_POST['tc_MO1'],
            'mo_otros1'         => $_POST['mo_otros_1'],
            'mo_intento2'       => $_POST['MO_2'],
            'mo_comp2'          => $_POST['complicacion_MO_2'],
            'mo_TpoComp2'       => $_POST['tc_MO_2'],
            'mo_otros2'         => $_POST['mo_otros_2'],
            'mo_intento3'       => $_POST['MO_3'],
            'mo_comp3'          => $_POST['complicacion_MO_3'],
            'mo_TpoComp3'       => $_POST['tc_MO_3'],
            'mo_otros3'         => $_POST['mo_otros_3'],

        );

        $connectionDB->updateData($Tables[11],$data_aspiracion_mo,$updateColum,$updateId);


        echo 'success';
    }

?>