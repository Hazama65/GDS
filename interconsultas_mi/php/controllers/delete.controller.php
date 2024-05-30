<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_ic.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];

        $query = "DELETE FROM datos_generales  WHERE id_paciente='$id_paciente'";

        $connectionDB->deleteRow($query);

        $query1 = "DELETE FROM procedimientos WHERE id_paciente='$id_paciente'";

        $connectionDB->deleteRow($query1);


        echo 1;

    }else {
        echo ('Error');
        exit;
    }

?>

