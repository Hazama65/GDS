<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_evc.php');

$connectionDB = new Database(DB_HOS_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);
$connectionDB_n = new Database(DB_HOS_seg_n, DB_NAME_seg_n, DB_USERNAME_seg_n, DB_PASSWORD_seg_n);



if (isset($_GET['idPaciente'])) {
    $idPaciente = $_GET['idPaciente'];

    // Realiza la consulta SQL
    $query_seguimiento = "SELECT * FROM datos_seguimiento WHERE id_paciente = $idPaciente";
    $data_seguimiento = $connectionDB->getRows($query_seguimiento);

    $query_seguimiento_n = "SELECT * FROM datos_seguimiento WHERE id_paciente = $idPaciente";
    $data_seguimiento_n = $connectionDB_n->getRows($query_seguimiento_n);

    // Inicializa un array para almacenar las opciones
    $opcionesSelect = [];

    // Recorre los resultados de la consulta y agrega cada fila al array de opciones
    foreach ($data_seguimiento as $fila) {
        // Ajusta 'valor' y 'texto' según los campos específicos en tu tabla datos_seguimiento
        $opcion = [
            'valor' => $fila['id_paciente'],
            'texto' => $fila['fecha_seg'] . ' - ' . $fila['tipo_seguimiento']
        ];

        // Agrega la opción al array
        $opcionesSelect[] = $opcion;
    }

    // Recorre los resultados de la consulta y agrega cada fila al array de opciones
    foreach ($data_seguimiento_n as $fila) {
        // Ajusta 'valor' y 'texto' según los campos específicos en tu tabla datos_seguimiento
        $opcion = [
            'valor' => $fila['id_paciente'],
            'texto' => $fila['fecha_seg'] . ' - ' . $fila['tipo_seguimiento']
        ];

        // Agrega la opción al array
        $opcionesSelect[] = $opcion;
    }

    // Devuelve las opciones en formato JSON
    echo json_encode($opcionesSelect);
} else {
    echo "Error: No se proporcionó un ID de paciente.";
}
?>