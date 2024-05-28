<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_seguimiento = 'seguimiento',
        );

        $Data_datos_seguimiento = array(
            'Fecha_Seguimiento' => $_POST['Fecha_Seguimiento'],
            'NIHSS'             => $_POST['NIHSS'],
            'NIHSS_escala'      => $_POST['NIHSS_escala'],
            'BARTHEL'           => $_POST['BARTHEL'],
            'BARTHEL_escala'    => $_POST['BARTHEL_escala'],
            'FIM'               => $_POST['FIM'],
            'FIM_escala'        => $_POST['FIM_escala'],
            'RANKIN'            => $_POST['RANKIN'],
            'RANKIN_escala'     => $_POST['RANKIN_escala'],
            'MOTRICITY'         => $_POST['MOTRICITY'],
            'MARCHA'            => $_POST['MARCHA'],
            'MARCHA_escala'     => $_POST['MARCHA_escala'],
            'id_paciente'       => $_POST['id_paciente']
        );

        foreach ($Data_datos_seguimiento as $key => $value) {
            $Data_datos_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_seguimiento = $connectionDB->insertData($Tables[0], $Data_datos_seguimiento);





        
        echo 'success';
    }


?>