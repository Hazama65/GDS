<?php
    require('../models/database.model.php');
    include('../dbconfig_folio.php');

    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fechaHora = $_POST['fechaHora'];
        $servicio = $_POST['servicio'];
        $medico = $_POST['medico'];
        $autoriza = $_POST['autoriza'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $diagnostico = $_POST['diagnostico'];
        $fechaLlegada = $_POST['fechaLlegada'];
        $folio = $_POST['folio'];

        // Prepara la consulta SQL correctamente con comillas alrededor de los valores
        $query = "INSERT INTO registros (fechaHora, servicio, medicoValorador, mediocoAutorizador, apellidoPaterno, apellidoMaterno, nombre, edad, sexo, diagnostico, fechaLlegada, folio) 
                    VALUES ('$fechaHora', '$servicio', '$medico', '$autoriza', '$apellidoPaterno', '$apellidoMaterno', '$nombre', '$edad', '$sexo', '$diagnostico', '$fechaLlegada', '$folio')";

        // Ejecuta la consulta SQL
        $data_insert = $connectionDB->ShotSimple($query);


        echo true; 
    } else {
        echo 0; // Método incorrecto (no es POST)
    }
?>
