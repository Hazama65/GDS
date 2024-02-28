<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_censo.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id_paciente=$_GET['id'];
        

        $queryAllData = "SELECT dp.*,ea.*,h.*,tx.*
        FROM datos_paciente dp
        LEFT JOIN estado_alerte ea ON dp.id_paciente = ea.id_paciente   
        LEFT JOIN herramientas h ON dp.id_paciente = h.id_paciente
        LEFT JOIN tratamiento tx ON dp.id_paciente = tx.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

        $AllData = $connectionDB->getRows($queryAllData);

        if (!empty($AllData)) {
            foreach ($AllData as $data) {

                $id_paciente = $data['id_paciente'];
                $fecha = $data['fecha'];
                $nombre_paciente = $data['nombre_paciente'];
                $curp = $data['curp'];
                $fecha_nacimiento = $data['fecha_nacimiento'];
                $sexo = $data['sexo'];
                $edad = $data['edad'];
                $cama = $data['cama'];
                $cama_movimiento = $data['cama_movimiento'];
                $estado_salud = $data['estado_salud'];
                $dx = $data['dx'];
                $glasgow = $data['glasgow'];
                $ramsey = $data['ramsey'];
                $act_mot = $data['act_mot'];
                $signos_v = $data['signos_v'];
                $pvc = $data['pvc'];
                $precaucion_t = $data['precaucion_t'];
                $cateter_c = $data['cateter_c'];
                $cateter_v = $data['cateter_v'];
                $dispositivo_r = $data['dispositivo_r'];
                $sonda_foley = $data['sonda_foley'];
                $sonda_naso = $data['sonda_naso'];
                $colostomia = $data['colostomia'];
                $penrose = $data['penrose'];
                $dieta = $data['dieta'];
                $introvenosa = $data['introvenosa'];
                $infusiones = $data['infusiones'];

            }
        }
    }


?>