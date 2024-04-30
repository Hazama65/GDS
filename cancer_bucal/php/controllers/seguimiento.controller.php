<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CB.php');
    $connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_seguimiento     = 'datos_seguimiento',
            $table_enfermedad_reinterve  = 'enfermedad_reinterve',
            $table_qt                    = 'qt',
            $table_radioterapia          = 'radioterapia',
            $table_pallia_proto          = 'palia_proto'
        );

        $Data_datos_seguimiento = array(
            'id_paciente'         => $_POST['id_paciente'],
            'fecha_seguimiento'   => $_POST['fecha_seg']
        );

        foreach ($Data_datos_seguimiento as $key => $value) {
            $Data_datos_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $Result_datos_seguimiento = $connectionDB->insertData($Tables[0], $Data_datos_seguimiento);

        $Data_enfermedad_reinterve = array(
            'progre_enf'           => $_POST['progre_enf'],
            'fecha_progre'         => $_POST['fecha_progre'],
            'recu_enfer'           => $_POST['recu_enfer'],
            'fecha_recu'           => $_POST['fecha_recu'],
            'reintervencion'       => $_POST['reintervencion'],
            'fecha_reintervencion' => $_POST['fecha_reintervencion'],
            'lat_reintervencion'   => $_POST['lat_reintervencion'],
            'id_seguimiento'       => $Result_datos_seguimiento
        );

        foreach ($Data_enfermedad_reinterve as $key => $value) {
            $Data_enfermedad_reinterve[$key] = $connectionDB->escapeString($value);
        }
        $Result_enfermedad_reinterve = $connectionDB->insertData($Tables[1], $Data_enfermedad_reinterve);

        $Data_qt = array(
            'nuevo_qt'           => $_POST['nuevo_qt'],
            'tx_5Fluororacilo'   => isset($_POST['tx_5Fluororacilo']) ? 'Si' : 'No',
            'tx_Beuacizumab'     => isset($_POST['tx_Beuacizumab']) ? 'Si' : 'No',
            'tx_Capecitabina'    => isset($_POST['tx_Capecitabina']) ? 'Si' : 'No',
            'tx_Carboplatino'    => isset($_POST['tx_Carboplatino']) ? 'Si' : 'No',
            'tx_Cetuximab'       => isset($_POST['tx_Cetuximab']) ? 'Si' : 'No',
            'tx_Ciclofosfamida'  => isset($_POST['tx_Ciclofosfamida']) ? 'Si' : 'No',
            'tx_Cisplatino'      => isset($_POST['tx_Cisplatino']) ? 'Si' : 'No',
            'tx_Docetaxel'       => isset($_POST['tx_Docetaxel']) ? 'Si' : 'No',
            'tx_Etoposido'       => isset($_POST['tx_Etoposido']) ? 'Si' : 'No',
            'tx_Herceptin'       => isset($_POST['tx_Herceptin']) ? 'Si' : 'No',
            'tx_Paclitaxel'      => isset($_POST['tx_Paclitaxel']) ? 'Si' : 'No',
            'tx_Pertuzumab'      => isset($_POST['tx_Pertuzumab']) ? 'Si' : 'No',
            'tx_Trastuzumab'     => isset($_POST['tx_Trastuzumab']) ? 'Si' : 'No',
            'momento_qt'         => $_POST['momento_qt'],
            'id_seguimiento'     => $Result_datos_seguimiento
        );

        foreach ($Data_qt as $key => $value) {
            $Data_qt[$key] = $connectionDB->escapeString($value);
        }
        $Result_qt = $connectionDB->insertData($Tables[2], $Data_qt);

        $Data_radioterapia = array(
            'nueva_radio'        => $_POST['nueva_radio'],
            'fecha_radio'        => $_POST['fecha_radio'],
            'momento_radio'      => $_POST['momento_radio'],
            'dosis_radio'        => $_POST['dosis_radio'],
            'fracciones_radio'   => $_POST['fracciones_radio'],
            'no_fracciones'      => $_POST['no_fracciones'],
            'tecnica_fracciones' => $_POST['tecnica_fracciones'],
            'rt_caries'          => isset($_POST['rt_caries']) ? 'Si' : 'No',
            'rt_disgeusia'       => isset($_POST['rt_disgeusia']) ? 'Si' : 'No',
            'rt_dolor'           => isset($_POST['rt_dolor']) ? 'Si' : 'No',
            'rt_fractura'        => isset($_POST['rt_fractura']) ? 'Si' : 'No',
            'rt_infeccion'       => isset($_POST['rt_infeccion']) ? 'Si' : 'No',
            'rt_hemorragias'     => isset($_POST['rt_hemorragias']) ? 'Si' : 'No',
            'rt_mucositis'       => isset($_POST['rt_mucositis']) ? 'Si' : 'No',
            'rt_osteonecrosis'   => isset($_POST['rt_osteonecrosis']) ? 'Si' : 'No',
            'rt_parestesia'      => isset($_POST['rt_parestesia']) ? 'Si' : 'No',
            'rt_propios'         => isset($_POST['rt_propios']) ? 'Si' : 'No',
            'rt_radiodermitis'   => isset($_POST['rt_radiodermitis']) ? 'Si' : 'No',
            'rt_RA'              => isset($_POST['rt_RA']) ? 'Si' : 'No',
            'rt_trismus'         => isset($_POST['rt_trismus']) ? 'Si' : 'No',
            'rt_xerostomia'      => isset($_POST['rt_xerostomia']) ? 'Si' : 'No',
            'rt_ninguno'         => isset($_POST['rt_ninguno']) ? 'Si' : 'No',
            'id_seguimiento'     => $Result_datos_seguimiento
        );

        foreach ($Data_radioterapia as $key => $value) {
            $Data_radioterapia[$key] = $connectionDB->escapeString($value);
        }
        $Result_radioterapia = $connectionDB->insertData($Tables[3], $Data_radioterapia);

        $Data_pallia_proto = array(
            'cuidado_palia'  => $_POST['cuidado_palia'],
            'tipo_palia'     => $_POST['tipo_palia'],
            'proto_clinico'  => $_POST['proto_clinico'],
            'proto_inv'      => $_POST['proto_inv'],
            'id_seguimiento' => $Result_datos_seguimiento
        );

        foreach ($Data_pallia_proto as $key => $value) {
            $Data_pallia_proto[$key] = $connectionDB->escapeString($value);
        }
        $Result_pallia_proto = $connectionDB->insertData($Tables[4], $Data_pallia_proto);



        
        echo 'success';
    }


?>