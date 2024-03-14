<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
        $id_paciente = $_GET['idPaciente'];
        

        $queryAllData = "SELECT * FROM datos_suplencia ds
        JOIN trabajador_sustituido ts ON ds.id_sustituido = ts.id_sustituido
        JOIN trabajador_sustituto tss ON ds.id_sustituto = tss.id_sustituto
        WHERE id_suplencia ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $nom_sustituido = $data['nom_sustituido'];
                $num_empleado = $data['num_empleado'];
                $niv_academico = $data['niv_academico'];
                $turno = $data['turno'];
                $servicio = $data['servicio'];
                $criticas = $data['criticas'];
                $clinicas = $data['clinicas'];
                $quirurgicas = $data['quirurgicas'];
                $perinatales = $data['perinatales'];
                $ambulatoria = $data['ambulatoria'];
                $hospitalizacion = $data['hospitalizacion'];
                $pediatria = $data['pediatria'];
                $nom_sustituto = $data['nom_sustituto'];
                $num_empleado2 = $data['num_empleado2'];
                $niv_academico2 = $data['niv_academico2'];
                $turno2 = $data['turno2'];
                $servicio2 = $data['servicio2'];
                $criticas2 = $data['criticas2'];
                $clinicas2 = $data['clinicas2'];
                $quirurgicas2 = $data['quirurgicas2'];
                $perinatales2 = $data['perinatales2'];
                $ambulatoria2 = $data['ambulatoria2'];
                $hospitalizacion2 = $data['hospitalizacion2'];
                $pediatria2 = $data['pediatria2'];
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