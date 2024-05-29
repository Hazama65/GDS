<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_paciente dp 
        LEFT JOIN escalas SA ON dp.id_paciente = SA.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {
                $id_paciente= $data['id_paciente'];
                $nombre_paciente = $data['nombre_paciente'];
                $curp = $data['curp'];
                $fecha = $data['fecha'];
                $edad = $data['edad'];
                $sexo = $data['sexo'];
                $NIHSS = $data['NIHSS'];
                $NIHSS_escala = $data['NIHSS_escala'];
                $BARTHEL = $data['BARTHEL'];
                $BARTHEL_escala = $data['BARTHEL_escala'];
                $FIM = $data['FIM'];
                $FIM_escala = $data['FIM_escala'];
                $RANKIN = $data['RANKIN'];
                $RANKIN_escala = $data['RANKIN_escala'];
                $MOTRICITY = $data['MOTRICITY'];
                $MARCHA = $data['MARCHA'];
                $MARCHA_escala = $data['MARCHA_escala'];

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