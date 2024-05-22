<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_paciente dp WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $nombre = $data['nombre'];
                $horallegada = $data['horallegada'];
                $medico = $data['medico'];
                $Temperatura = $data['Temperatura'];
                $FR = $data['FR'];
                $Presion_arterial = $data['Presion_arterial'];
                $Pulso = $data['Pulso'];
                $Talla = $data['Talla'];
                $Peso = $data['Peso'];

            }
        }else {
            echo "No se encontro la informacion";
            var_dump($id_paciente);
            exit;
        }
    }else {
        echo $id_paciente;
        exit;
    }


?>