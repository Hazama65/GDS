<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_residentes.php');

    $connectionDB = new Database(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);

    $id_paciente = null;
    if (isset($_GET['idResidente']) && is_numeric($_GET['idResidente'])) {
        $id_residente = $_GET['idResidente'];

        $query = "DELETE dp.*, a.*, b.*, c.*, d.*, e.*, f.*, g.*, h.*, i.*, j.*
        FROM datos_productividad dp
        LEFT JOIN artrocentesis a ON dp.id_productividad = a.id_productividad
        LEFT JOIN aspiracion_mo b ON dp.id_productividad = b.id_productividad
        LEFT JOIN biopsia_celular c ON dp.id_productividad = c.id_productividad
        LEFT JOIN biopsia_piel d ON dp.id_productividad = d.id_productividad
        LEFT JOIN biopsia_tiroides e ON dp.id_productividad = e.id_productividad
        LEFT JOIN cvc f ON dp.id_productividad = f.id_productividad
        LEFT JOIN intubacion g ON dp.id_productividad = g.id_productividad
        LEFT JOIN paracentesis h ON dp.id_productividad = h.id_productividad
        LEFT JOIN puncion_lumbar i ON dp.id_productividad = i.id_productividad
        LEFT JOIN toracocentesis j ON dp.id_productividad = j.id_productividad WHERE dp.id_productividad ='$id_residente'";

        $connectionDB->deleteRow($query);

        echo 1;

    }else {
        echo ('Error');
        exit;
    }
    
?>