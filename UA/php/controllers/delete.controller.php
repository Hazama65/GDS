<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];

        $query = "DELETE dp.* FROM datos_paciente dp WHERE dp.id_paciente ='$id_paciente'";

        $connectionDB->deleteRow($query);

        echo 1;

    }else {
        echo ('Error');
        exit;
    }
    
?>