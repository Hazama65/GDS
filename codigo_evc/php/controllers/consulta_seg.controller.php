<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_evc.php');

    $connectionDB = new Database (DB_HOS_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);


if (isset($_GET['idPaciente'])) {
    $idPaciente = $_GET['idPaciente'];

    // Realiza la consulta SQL
    $query_seguimiento = "SELECT * FROM datos_seguimiento WHERE id_paciente = $idPaciente";
    $data_seguimiento = $connectionDB->getRows($query_seguimiento);

    // Inicializa un array para almacenar las opciones
    $opcionesSelect = [];

    // Recorre los resultados de la consulta y agrega cada fila al array de opciones
    foreach ($data_seguimiento as $fila) {
        // Ajusta 'valor' y 'texto' según los campos específicos en tu tabla datos_seguimiento
        $opcion = [
            'valor' => $fila['id_paciente'],
            'texto' => $fila['fecha_seg']
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
