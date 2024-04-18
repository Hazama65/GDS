<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_EG.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$id_paciente = null;
if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
    $id_paciente = $_GET['idPaciente'];


    $queryAllData = "SELECT * FROM datos_suplencia ds
        JOIN trabajador_sustituido ts ON ds.id_sustituido = ts.id_sustituido
        JOIN trabajador_sustituto tss ON ds.id_sustituto = tss.id_sustituto
        JOIN uso_suplencias us ON ds.id_suplencia = us.id_suplencia
        WHERE ds.id_suplencia ='$id_paciente'";

    $AllData = $connectionDB->getRows($queryAllData);

    if (!empty($AllData)) {
        foreach ($AllData as $data) {

            $id_suplencia = $data['id_suplencia'];
            $num_suplencia = $data['num_suplencia'];
            $fecha_realizada = $data['fecha_realizada'];
            $enlace_numeroempleado = $data['enlace_numeroempleado'];
            $numeroempleado_1 = $data['numeroempleado_1'];
            $niv_academico = $data['niv_academico'];
            $codigopuesto = $data['codigopuesto'];
            $puesto = $data['puesto'];
            $turno = $data['turno'];
            $dias_h = $data['dias_h'];
            $horaInicio = $data['horaInicio'];
            $horaFin = $data['horaFin'];
            $servicio = $data['servicio'];
            $sub_servicio = $data['criticas'] . $data['clinicas'] . $data['quirurgicas'] . $data['perinatales'] . $data['ambulatoria'] . $data['hospitalizacion'] . $data['pediatria'];
            $nombre_suplencia = $data['nombre_suplencia'];
            $numeroempleado_suplencia = $data['numeroempleado_suplencia'];
            $niv_academico2 = $data['niv_academico2'];
            $codigopuesto_suplencia = $data['codigopuesto_suplencia'];
            $puesto_suplencia = $data['puesto_suplencia'];
            $turno2 = $data['turno2'];
            $dias_h2 = $data['dias_h2'];
            $horaInicio2 = $data['horaInicio2'];
            $horaFin2 = $data['horaFin2'];
            $servicio2 = $data['servicio2'];
            $sub_servicio2 = $data['criticas2'] . $data['clinicas2'] . $data['quirurgicas2'] . $data['perinatales2'] . $data['ambulatoria2'] . $data['hospitalizacion2'] . $data['pediatria2'];
            $fecha_tramite = $data['fecha_tramite'];
            $fecha_suplencia = $data['fecha_suplencia'];
            $autoriza = $data['autoriza'];
            $observaciones = $data['observaciones'];



        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }
} else {
    echo $id_paciente;
    exit;
}


?>