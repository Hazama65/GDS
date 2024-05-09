<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_AT.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Tables = array(
            $table_datos_paciente = 'datos_paciente',
            $table_datos_patologicos = 'antecedentes_patologicos',
            $table_datos_laboratorio = 'laboratorio',
            $table_datos_usg_clinica = 'usg_clinica',
            $table_datos_tratamiento = 'tratamiento'
        );
        $updateColum ='id_paciente';
        $updateId    = $_POST['id_paciente'];

        $update_paciente = array(
            'curp'             => $_POST['curp'],
            'nombre_paciente'  => $_POST['nombre_completo'],
            'escolaridad'      => $_POST['escolaridad'],
            'fecha_nacimiento' => $_POST['birth_date'],
            'edad'             => $_POST['edad'],
            'sexo'             => $_POST['sex'],
            'talla'            => $_POST['talla'],
            'peso'             => $_POST['peso'],
            'imc'              => $_POST['imc']
        );

        $connectionDB->updateData($Tables[0],$update_paciente,$updateColum,$updateId);

        $update_patologicos = array(
            'tabaquismo'     => isset($_POST['tabaquismo']) ? 'Si' : 'No',
            'alcoholismo'    => isset($_POST['alcoholismo']) ? 'Si' : 'No',
            'EH'             => isset($_POST['EH']) ? 'Si' : 'No',
            'DM'             => isset($_POST['DM']) ? 'Si' : 'No',
            'HA'             => isset($_POST['HA']) ? 'Si' : 'No',
            'obesidad'       => isset($_POST['obesidad']) ? 'Si' : 'No',
            'hiperlipidemia' => isset($_POST['hiperlipidemia']) ? 'Si' : 'No'
        );

        $connectionDB->updateData($Tables[1],$update_patologicos,$updateColum,$updateId);

        $update_laboratorio = array(
            'plaquetas'     => $_POST['plaquetas'],
            'FRB'           => $_POST['FRB'],
            'FRN'           => $_POST['FRN'],
            'PCR'           => $_POST['PCR'],
            'VDB'           => $_POST['VDB'],
            'VDN'           => $_POST['VDN'],
            'AAB'           => $_POST['AAB'],
            'AAN'           => $_POST['AAN'],
            'VSG'           => $_POST['VSG'],
            'TGOB'          => $_POST['TGOB'],
            'TGON'          => $_POST['TGON'],
            'TGPB'          => $_POST['TGPB'],
            'TGPN'          => $_POST['TGPN'],
            'glucosa'       => $_POST['glucosa'],
            'colesterol'    => $_POST['colesterol'],
            'trigliceridos' => $_POST['trigliceridos'],
            'FIB4'          => $_POST['FIB4'],
            'resultado_fib' => $_POST['resultado_fib']
        );

        $connectionDB->updateData($Tables[2],$update_laboratorio,$updateColum,$updateId);

        $update_usg_clinica = array(
            'USG_hep'       => $_POST['USG_hep'],
            'USG_haz'       => $_POST['USG_haz'],
            'CE'            => $_POST['CE'],
            'sjc28'         => $_POST['sjc28'],
            'tjc28'         => $_POST['tjc28'],
            'pga'           => $_POST['pga'],
            'ega'           => $_POST['ega'],
            'CDAI'          => $_POST['CDAI'],
            'SDAI'          => $_POST['SDAI']
        );

        $connectionDB->updateData($Tables[3],$update_usg_clinica,$updateColum,$updateId);

        $update_tratamiento = array(
            'Metrotexate'     => isset($_POST['Metrotexate']) ? 'Si' : 'No',
            'ds_metro'        => $_POST['ds_metro'],
            'Leflunomide'     => isset($_POST['Leflunomide']) ? 'Si' : 'No',
            'ds_leflu'        => $_POST['ds_leflu'],
            'Sulfazalasina'   => isset($_POST['Sulfazalasina']) ? 'Si' : 'No',
            'ds_sulfa'        => $_POST['ds_sulfa'],
            'Tocoferol'       => isset($_POST['Tocoferol']) ? 'Si' : 'No',
            'ds_toco'         => $_POST['ds_toco'],
            'Glucocorticoide' => isset($_POST['Glucocorticoide']) ? 'Si' : 'No',
            'tx_gluco'        => $_POST['tx_gluco'],
            'ds_gluco'        => $_POST['ds_gluco'],
            'vit_d'           => isset($_POST['vit_d']) ? 'Si' : 'No',
            'ds_vit'          => $_POST['ds_vit'],
            'Biologico'       => isset($_POST['Biologico']) ? 'Si' : 'No',
            'tx_bio'          => $_POST['tx_bio'],
            'AT'              => $_POST['AT']
        );

        $connectionDB->updateData($Tables[4],$update_tratamiento,$updateColum,$updateId);

        echo 'success'; 
    }
?>