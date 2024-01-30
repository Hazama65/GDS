<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ic.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente      = $_POST['id_paciente']; 
        $nombre_paciente  = $_POST['nombre_paciente'];
        $cama             = $_POST['cama'];
        $nombre_residente = $_POST['nombre_residente'];
        $nombre_adscrito  = $_POST['nombre_adscrito'];

        $queryGeneral = "UPDATE datos_generales
        SET nombre_paciente = '$nombre_paciente',
            cama = '$cama',
            residente = '$nombre_residente',
            responsable = '$nombre_adscrito'
        WHERE id_paciente = $id_paciente";

        $dataGeneral = $connectionDB->ShotSimple($queryGeneral);

        $servicio_ic           = $_POST['servicio_ic'];
        $servicio_respondiente = $_POST['servicio_respondiente'];
        $fecha_ic              = $_POST['fecha_ic'];
        $fecha_ric             = $_POST['fecha_ric'];
        $observaciones         = $_POST['observaciones'];

        $queryProcedimiento = "UPDATE procedimientos
        SET servicio_interconsulta = '$servicio_ic',
            servicio_respondiente = '$servicio_respondiente',
            fecha_interconsulta = '$fecha_ic',
            fecha_respuesta = '$fecha_ric',
            observaciones = '$observaciones'
        WHERE id_paciente = $id_paciente";

        $dataProcedimiento = $connectionDB->ShotSimple($queryProcedimiento);
        echo 'success';
    }

?>