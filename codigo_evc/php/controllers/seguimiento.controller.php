<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_evc.php');
    $connectionDB = new Database (DB_HOS_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_seguimiento     = 'datos_seguimiento',
            $table_fim             = 'fim_seguimiento',
            $table_barthel         = 'barthel',
            $table_nihss           = 'nihss_seguimiento',
            $table_rankin          = 'rankin_seguimiento'
        );

        $Data_seguimiento = array(
            'id_paciente'         => $_POST['id_paciente'],
            'fecha_seg  '         => $_POST['fecha_seg'],
            'tiempo_seguimiento'  => $_POST['dependendcia_funcional_seg'],
            'nivel_seguimiento'   => $_POST['dependendcia_nivel_seg']
        );
        foreach ($Data_seguimiento as $key => $value) {
            $Data_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_seguimiento = $connectionDB->insertData($Tables[0], $Data_seguimiento);

        $Data_fim = array(
            'fim_inicial'     => $_POST['fim_inicial_seg'],
            'nivel_fim'       => $_POST['FIM_nivel_seg'],
            'fim_final'       => $_POST['fim_seg'],
            'id_seguimiento'  => $Result_seguimiento
        );

        foreach ($Data_fim as $key => $value) {
            $Data_fim[$key] = $connectionDB->escapeString($value);
        }
        $Result_fim = $connectionDB->insertData($Tables[1], $Data_fim);

        $Data_barthel  = array(
            'seguimineto_barthel' => $_POST['barhtel_seg'],
            'nivel_barthel'       => $_POST['barthel_nivel_seg'],
            'id_seguimiento'      => $Result_seguimiento
        );
        foreach ($Data_barthel  as $key => $value) {
            $Data_barthel [$key] = $connectionDB->escapeString($value);
        }
        $Result_barthel  = $connectionDB->insertData($Tables[2], $Data_barthel );

        $Data_nihss = array(
            'nihss_tiempo'    => $_POST['nihss_seg'],
            'escala'          => $_POST['escala_nihss_seg'],
            'id_seguimiento'  => $Result_seguimiento
        );

        foreach ($Data_nihss as $key => $value) {
            $Data_nihss[$key] = $connectionDB->escapeString($value);
        }
        
        $Result_nihss = $connectionDB->insertData($Tables[3],$Data_nihss);

        $Data_rankin = array(
            'rankin_tiempo'   => $_POST['RANKIN_funcional_seg'],
            'valor'           => $_POST['rankin_seguimiento'],
            'id_seguimiento'  => $Result_seguimiento
        );
        foreach ($Data_rankin as $key => $value) {
            $Data_rankin[$key] = $connectionDB->escapeString($value);
        }
        $Result_rankin = $connectionDB->insertData($Tables[4],$Data_rankin);
        
        echo 'success';
    }


?>