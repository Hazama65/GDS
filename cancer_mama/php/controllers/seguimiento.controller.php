<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_CM.php');
    $connectionDB = new Database (DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Tables = array(
            $table_datos_seguimiento = 'datos_seguimiento',

        );

        $Data_datos_seguimiento = array(
            'id_paciente'                   => $_POST['id_paciente'],
            'fecha_seg'                     => $_POST['fecha_seg'],
            'Seguimiento_Calidad_ECOG'      => $_POST['Seguimiento_Calidad_ECOG'],
            'ProgresionEnfermedad'          => $_POST['ProgresionEnfermedad'],
            'fecha_progreEnfermedad'        => $_POST['fecha_progreEnfermedad'],
            'Recurrencia'                   => $_POST['Recurrencia'],
            'Recurrencia_fecha'             => $_POST['Recurrencia_fecha'],
            'tipo_cuidado_seguimiento'      => $_POST['tipo_cuidado_seguimiento'],
            'Protocolo_clinico'             => $_POST['Protocolo_clinico'],
            'Protocolo_Investigacion'       => $_POST['Protocolo_Investigacion'],
            'Reintervencion_fecha'          => $_POST['Reintervencion_fecha'],
            'Lateralidad_Seguimiento_QX'    => $_POST['Lateralidad_Seguimiento_QX'],
            'Reintervencion_fecha2'         => $_POST['Reintervencion_fecha2'],
            'Tipo_Seguimiento'              => $_POST['Tipo_Seguimiento'],
            'Tratamiento_Seguimiento'       => $_POST['Tratamiento_Seguimiento'],
            'Tipo_RadioterapiaSeguimiento'  => $_POST['Tipo_RadioterapiaSeguimiento'],
            'Seguimiento_Iniciofecha'       => $_POST['Seguimiento_Iniciofecha']
        );

        foreach ($Data_datos_seguimiento as $key => $value) {
            $Data_datos_seguimiento[$key] = $connectionDB->escapeString($value);
        }
        $connectionDB->insertData($Tables[0], $Data_datos_seguimiento);


        
        echo 'success';
    }


?>