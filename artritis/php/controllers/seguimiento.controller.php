<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_AT.php');
    $connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_paciente = 'datos_paciente',
            $table_datos_laboratorio = 'laboratorio',
            $table_datos_usg_clinica = 'usg_clinica',
            $table_datos_tratamiento = 'tratamiento'
        );

        $Data_pacientes = array(
            'id_paciente'      => $_POST['id_paciente'],
            'fecha_seg'        => $_POST['fecha_seg'],
            'curp'             => $_POST['curp'],
            'talla'            => $_POST['talla'],
            'peso'             => $_POST['peso'],
            'imc'              => $_POST['imc']
        );

        foreach ($Data_pacientes as $key => $value) {
            $Data_pacientes[$key] = $connectionDB->escapeString($value);
        }
        $Result_pacientes = $connectionDB->insertData($Tables[0], $Data_pacientes);


        $Data_laboratorio = array(
            'plaquetas'         => $_POST['plaquetas'],
            'FRB'               => $_POST['FRB'],
            'FRN'               => $_POST['FRN'],
            'PCR'               => $_POST['PCR'],
            'VDB'               => $_POST['VDB'],
            'VDN'               => $_POST['VDN'],
            'AAB'               => $_POST['AAB'],
            'AAN'               => $_POST['AAN'],
            'VSG'               => $_POST['VSG'],
            'TGOB'              => $_POST['TGOB'],
            'TGON'              => $_POST['TGON'],
            'TGPB'              => $_POST['TGPB'],
            'TGPN'              => $_POST['TGPN'],
            'glucosa'           => $_POST['glucosa'],
            'colesterol'        => $_POST['colesterol'],
            'trigliceridos'     => $_POST['trigliceridos'],
            'FIB4'              => $_POST['FIB4'],
            'resultado_fib'     => $_POST['resultado_fib'],
            'id_paciente_seg'   => $Result_pacientes

        );

        foreach ($Data_laboratorio as $key => $value) {
            $Data_laboratorio[$key] = $connectionDB->escapeString($value);
        }
        $Result_laboratorio = $connectionDB->insertData($Tables[1], $Data_laboratorio);


        $Data_usg_clinica = array(
            'USG_hep'         => $_POST['USG_hep'],
            'USG_haz'         => $_POST['USG_haz'],
            'CE'              => $_POST['CE'],
            'sjc28'           => $_POST['sjc28'],
            'tjc28'           => $_POST['tjc28'],
            'pga'             => $_POST['pga'],
            'ega'             => $_POST['ega'],
            'CDAI'            => $_POST['CDAI'],
            'SDAI'            => $_POST['SDAI'],
            'id_paciente_seg' => $Result_pacientes

        );

        foreach ($Data_usg_clinica as $key => $value) {
            $Data_usg_clinica[$key] = $connectionDB->escapeString($value);
        }
        $Result_usg_clinica = $connectionDB->insertData($Tables[2], $Data_usg_clinica);


        $data_tratamiento = array(
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
            'AT'              => $_POST['AT'],
            'id_paciente_seg' => $Result_pacientes
        );

        foreach ($data_tratamiento as $key => $value) {
            $data_tratamiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_tratamiento = $connectionDB->insertData($Tables[3], $data_tratamiento);
        
        echo 'success';
    }


?>