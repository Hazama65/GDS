<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_generales
        WHERE id_guardia ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $trabajador_sustituido = $data['trabajador_sustituido'];
                $trabajador_sustituto = $data['trabajador_sustituto'];
                $nivel_academia = $data['nivel_academia'];
                $turno = $data['turno'];
                $servicio = $data['servicio'];
                $criticas = $data['criticas'];
                $clinicas = $data['clinicas'];
                $quirurgicas = $data['quirurgicas'];
                $fecha_tramite = $data['fecha_tramite'];
                $fecha_suplencia = $data['fecha_suplencia'];
                $autoriza = $data['autoriza'];



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