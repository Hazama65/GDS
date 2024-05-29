<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');
    $connectionDB = new Database (DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];


        $query= "SELECT * FROM datos_paciente dp WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($query);


        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente= $data['id_paciente'];
            }
        }
    }

?>