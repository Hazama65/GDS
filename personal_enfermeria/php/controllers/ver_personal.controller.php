<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');


$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id_enfermero = $_GET['id'];


    $query = "SELECT dp.id_enfermero,dp.apellidoPaterno,dp.apellidoMaterno,dp.nombre,dp.noempleado,dp.tipocontrato,dp.codigo,
    p.puesto,dp.fechaIngreso,dp.onomastico,dp.ayo_curso,t.turno,dp.jornada,s.servicio,dp.foto,ia.*
        FROM datos_personal dp
        JOIN puesto p ON dp.puesto = p.id_puesto
        JOIN servicio s ON dp.servicio = s.id_servicio
        JOIN turno t ON dp.turno = t.id_turno
        JOIN informacion_academica ia ON dp.informacion_academica = ia.id
    WHERE dp.id_enfermero ='$id_enfermero'";

    $AllData = $connectionDB->getRows($query);


    if (!empty($AllData)) {
        foreach ($AllData as $data) {

            $id_enfermero = $data['id_enfermero'];
            $apellidoPaterno = $data['apellidoPaterno'];
            $apellidoMaterno = $data['apellidoMaterno'];
            $nombre = $data['nombre'];
            $noempleado = $data['noempleado'];
            $tipocontrato = $data['tipocontrato'];
            $codigo = $data['codigo'];
            $puesto = $data['puesto'];
            $fechaIngreso = $data['fechaIngreso'];
            $onomastico = $data['onomastico'];
            $ayo_curso = $data['ayo_curso'];
            $turno = $data['turno'];
            $jornada = $data['jornada'];
            $servicio = $data['servicio'];
            $foto = $data['foto'];
            $grado_tecnico = $data['grado_tecnico'];
            $cedula_tecnico = $data['cedula_tecnico'];
            $grado_posttecnico = $data['grado_posttecnico'];
            $cedula_posttecnico = $data['cedula_posttecnico'];
            $grado_licenciatura = $data['grado_licenciatura'];
            $cedula_lic = $data['cedula_lic'];
            $grado_especialidad = $data['grado_especialidad'];
            $cedula_especialidad = $data['cedula_especialidad'];
            $grado_maestria = $data['grado_maestria'];
            $cedula_maestria = $data['cedula_maestria'];
            $observaciones = $data['observaciones'];



        }
    }
}

?>