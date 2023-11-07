<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ic.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];

        $queryAllData = "SELECT * FROM datos_generales dg JOIN procedimientos p ON p.id_paciente=dg.id_paciente WHERE dg.id_paciente='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $nombre_paciente = $data['nombre_paciente'];
                $cama = $data['cama'];
                $residente = $data['residente'];
                $responsable = $data['responsable'];
                $servicio_inter = $data['servicio_interconsulta'];
                $servicio_resp = $data['servicio_respondiente'];
                $fecha_inter = $data['fecha_interconsulta'];
                $fecha_resp =$data ['fecha_respuesta'];
                $observaciones = $data['observaciones'];
                $diferencia_dias = intval($data['diferencia_dias']);
            }
        }else {
            echo "No se encontro la informacion";
            exit;
        }
    }else {
        echo $id_paciente;
        exit;
    }
?>