<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig_gc.php');

$connectionDBSEG = new Database(DB_HOST_seg, DB_NAME_seg, DB_USERNAME_seg, DB_PASSWORD_seg);

$id_paciente = null;
if (isset($_GET['valorSeleccionado']) && isset($_GET['textoSeleccionado'])) {
    $id_paciente = $_GET['valorSeleccionado'];
    $fecha_seguimiento = $_GET['textoSeleccionado'];

    $query_seguimiento = "SELECT *
    FROM datos_seguimiento DS
    LEFT JOIN seguimiento_atencion_clinica SAC ON DS.id_seguimiento = SAC.id_seguimiento
    LEFT JOIN seguimiento_caracteristicas SC ON DS.id_seguimiento = SC.id_seguimiento
    LEFT JOIN seguimiento_otros SO ON DS.id_seguimiento = SO.id_seguimiento
    WHERE id_paciente = '$id_paciente' AND fecha_seguimiento = '$fecha_seguimiento'";
    $data_seguimiento = $connectionDBSEG->getRows($query_seguimiento);


    if (!empty($data_seguimiento)) {
        foreach ($data_seguimiento as $data) {
            $nombre_paciente = $data['nombre_paciente'];
            $fecha_seguimiento = $data['fecha_seguimiento'];
            $tiempo_evo = $data['tiempo_evo'];
            $periodo_evo = $data['periodo_evo'];
            $tam_ganglio = $data['tam_ganglio'];
            $doloroso = $data['doloroso'];
            $no_doloroso = $data['no_doloroso'];
            $indurado = $data['indurado'];
            $no_indurado = $data['no_indurado'];
            $fijo = $data['fijo'];
            $eritematoso = $data['eritematoso'];
            $hipertermico = $data['hipertermico'];
            $secrecion = $data['secrecion'];
            $sin_secrecion = $data['sin_secrecion'];
            $movil = $data['movil'];
            $delimitado = $data['delimitado'];
            $mal_delimitado = $data['mal_delimitado'];
            $coloracion = $data['coloracion'];
            $sin_coloracion = $data['sin_coloracion'];
            $otros_ganglios = $data['otros_ganglios']; 
            $submandibulares = $data['submandibulares'];
            $axilares = $data['axilares'];
            $inguinales = $data['inguinales'];
            $cervicales = $data['cervicales'];
            $retroauriculares = $data['retroauriculares'];
            $subclavicular = $data['subclavicular'];
            $occipital = $data['occipital'];
            $adenopatias = $data['adenopatias'];
        }
    }else {
        echo "No se encontro la informacion";
        exit;
    }

} else {
    echo $id_paciente;
}


?>