<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_db.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];

        $query = "DELETE dp.*, ah.*, c.*, com.*, ec.*, hip.*, hg.*, hipo.*, ins.*, lab.*, ot.*, di.*, dis.*, ej.*
        FROM datos_paciente dp
        LEFT JOIN antihipertensivos ah ON dp.id_paciente = ah.id_paciente   
        LEFT JOIN comorbilidades c ON dp.id_paciente = c.id_paciente
        LEFT JOIN complicaciones com ON dp.id_paciente = com.id_paciente
        LEFT JOIN enfermedad_cardiovascular ec ON dp.id_paciente = ec.id_paciente
        LEFT JOIN hipertension_arterial hip ON dp.id_paciente = hip.id_paciente
        LEFT JOIN hipoglucemiantes hg ON dp.id_paciente = hg.id_paciente
        LEFT JOIN hipolipemiantes hipo ON dp.id_paciente = hipo.id_paciente
        LEFT JOIN insulina ins ON dp.id_paciente = ins.id_paciente
        LEFT JOIN laboratorio lab ON dp.id_paciente = lab.id_paciente
        LEFT JOIN otros ot ON dp.id_paciente = ot.id_paciente
        LEFT JOIN diabetes_mellitus di ON dp.id_paciente = di.id_paciente
        LEFT JOIN dislipidemia dis ON dp.id_paciente = dis.id_paciente
        LEFT JOIN ejercicio ej ON dp.id_paciente = ej.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $connectionDB->deleteRow($query);

        echo 1;

    }else {
        echo 'hola';
        exit;
    }
    
?>