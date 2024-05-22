<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_SC.php');
    $connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_seguimiento  = 'datos_seguimiento',
            $table_tratamiento        = 'tratamiento',
            $table_paraclinicos       = 'paraclinicos',
            $table_miocardio          = 'miocardio',
            $table_eco_defuncion      = 'eco_defuncion',
        );

        $Data_datos_seguimiento = array(
            'id_paciente'             => $_POST['id_paciente'],
            'fecha_seg'               => $_POST['fecha_seg'],
            'Seguimiento_SXcoronario' => $_POST['Seguimiento_SXcoronario']
        );

        foreach ($Data_datos_seguimiento as $key => $value) {
            $Data_datos_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_seguimiento = $connectionDB->insertData($Tables[0], $Data_datos_seguimiento);

        $Data_tratamiento = array(
            'Acido_salicilico'          => isset($_POST['Acido_salicilico']) ? 'Si' : 'No',
            'Clopidogrel'               => isset($_POST['Clopidogrel']) ? 'Si' : 'No',
            'Eptifibatida'              => isset($_POST['Eptifibatida']) ? 'Si' : 'No',
            'Prasugrel'                 => isset($_POST['Prasugrel']) ? 'Si' : 'No',
            'Ticagrelor'                => isset($_POST['Ticagrelor']) ? 'Si' : 'No',
            'Anticuagulantes'           => $_POST['Anticuagulantes'],
            'Betabloqueadores'          => $_POST['Betabloqueadores'],
            'IECA'                      => $_POST['IECA'],
            'Calcioantagonistas'        => $_POST['Calcioantagonistas'],
            'ARA_II'                    => $_POST['ARA_II'],
            'Estatinas'                 => $_POST['Estatinas'],
            'Fibratos'                  => $_POST['Fibratos'],
            'Antianginosos'             => $_POST['Antianginosos'],
            'Inhibidor_absorcion'       => $_POST['Inhibidor_absorcion'],
            'Anticuerpos_Monoclonales'  => $_POST['Anticuerpos_Monoclonales'],
            'id_seguimiento'            => $Result_datos_seguimiento
        );

        foreach ($Data_tratamiento as $key => $value) {
            $Data_tratamiento[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[1], $Data_tratamiento);

        $Data_paraclinicos = array(
            'Seguimiento_ck'              => $_POST['Seguimiento_ck'],
            'Seguimiento_ck_mb'           => $_POST['Seguimiento_ck_mb'],
            'Seguimiento_Troponinas'      => $_POST['Seguimiento_Troponinas'],
            'Seguimiento_Glucosa'         => $_POST['Seguimiento_Glucosa'],
            'Seguimiento_Urea'            => $_POST['Seguimiento_Urea'],
            'Seguimiento_Creatinina'      => $_POST['Seguimiento_Creatinina'],
            'Seguimiento_Colesterol'      => $_POST['Seguimiento_Colesterol'],
            'Seguimiento_Trigliceridos'   => $_POST['Seguimiento_Trigliceridos'],
            'Seguimiento_Acido_Urico'     => $_POST['Seguimiento_Acido_Urico'],
            'Seguimiento_hb_glucosilada'  => $_POST['Seguimiento_hb_glucosilada'],
            'Seguimiento_Proteinas'       => $_POST['Seguimiento_Proteinas'],
            'Seguimiento_LDL'             => $_POST['Seguimiento_LDL'],
            'Seguimiento_HDL'             => $_POST['Seguimiento_HDL'],
            'id_seguimiento'              => $Result_datos_seguimiento
        );

        foreach ($Data_paraclinicos as $key => $value) {
            $Data_paraclinicos[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[2], $Data_paraclinicos);

        $Data_miocardio = array(
            'Seg_Gamma'                 => $_POST['Seg_Gamma'],
            'Seg_gamma_cardi'           => $_POST['Seg_gamma_cardi'],
            'Seg_Localizacion_gamma'    => $_POST['Seg_Localizacion_gamma'],
            'Seg_Segmento_gamma'        => $_POST['Seg_Segmento_gamma'],
            'Seg_Resonancia_inicial'    => $_POST['Seg_Resonancia_inicial'],
            'Seg_resultado_resonancia'  => $_POST['Seg_resultado_resonancia'],
            'Seg_ergometria'            => $_POST['Seg_ergometria'],
            'Seg_Etapa_1'               => $_POST['Seg_Etapa_1'],
            'Seg_Etapa_2'               => $_POST['Seg_Etapa_2'],
            'Seg_Etapa_3'               => $_POST['Seg_Etapa_3'],
            'Seg_Etapa_4'               => $_POST['Seg_Etapa_4'],
            'Seg_Etapa_5'               => $_POST['Seg_Etapa_5'],
            'Seg_Etapa_6'               => $_POST['Seg_Etapa_6'],
            'Seg_Etapa_7'               => $_POST['Seg_Etapa_7'],
            'Seg_Suspension_estudio'    => $_POST['Seg_Suspension_estudio'],
            'id_seguimiento'            => $Result_datos_seguimiento
        );

        foreach ($Data_miocardio as $key => $value) {
            $Data_miocardio[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[3], $Data_miocardio);

        $Data_eco_defuncion = array(
            'Seg_Distolico_inicial'     => $_POST['Seg_Distolico_inicial'],
            'Seg_Sistolico_inicial'     => $_POST['Seg_Sistolico_inicial'],
            'Seg_eyeccion_ventriizqui'  => $_POST['Seg_eyeccion_ventriizqui'],
            'Seg_movilidad_inicial'     => $_POST['Seg_movilidad_inicial'],
            'Seg_Segmento'              => $_POST['Seg_Segmento'],
            'Seg_defun'                 => $_POST['Seg_defun'],
            'Seg_Causa_defun'           => $_POST['Seg_Causa_defun'],
            'Seg_Defuncion_fecha'       => $_POST['Seg_Defuncion_fecha'],
            'id_seguimiento'            => $Result_datos_seguimiento
        );

        foreach ($Data_eco_defuncion as $key => $value) {
            $Data_eco_defuncion[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[4], $Data_eco_defuncion);

        
        echo 'success';
    }


?>