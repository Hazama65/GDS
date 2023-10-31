<?php
    
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_folio.php');


    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];


        $updateEstatus="UPDATE registros SET estatus='Atendido' WHERE id_folio='$id'";

        $dataEstatus= $connectionDB->ShotSimple($updateEstatus);
    }
    echo 'success';


?>