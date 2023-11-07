<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ic.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nombre_paciente  = $_POST['nombre_paciente'];
        $cama             = $_POST['cama'];
        $nombre_residente = $_POST['nombre_residente'];
        $nombre_adscrito  = $_POST['nombre_adscrito'];

        $queryGeneral ="INSERT INTO datos_generales (nombre_paciente,cama,residente,responsable) 
        VALUES ('$nombre_paciente','$cama','$nombre_residente','$nombre_adscrito')";

        $dataGeneral = $connectionDB->ShotSimple($queryGeneral);
        $ultimoID =$connectionDB->last_id;

        $servicio_ic           = $_POST['servicio_ic'];
        $servicio_respondiente = $_POST['servicio_respondiente'];
        $fecha_ic              = $_POST['fecha_ic'];
        $fecha_ric             = $_POST['fecha_ric'];
        $observaciones         = $_POST['observaciones'];

        $queryProcedimiento ="INSERT INTO procedimientos (servicio_interconsulta,servicio_respondiente,fecha_interconsulta,
        fecha_respuesta,observaciones,id_paciente)
        VALUES('$servicio_ic','$servicio_respondiente','$fecha_ic','$fecha_ric','$observaciones','$ultimoID')";

        $dataProcedimiento = $connectionDB->ShotSimple($queryProcedimiento);

        echo 'success'; 
    }




?>