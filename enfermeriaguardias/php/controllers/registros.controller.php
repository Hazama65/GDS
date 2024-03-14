<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');

    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

    $query_pacientes="SELECT * FROM datos_suplencia ds
    JOIN trabajador_sustituido ts ON ds.id_sustituido = ts.id_sustituido
    JOIN trabajador_sustituto tss ON ds.id_sustituto = tss.id_sustituto";

    $query_personal = "SELECT * FROM empleados ORDER BY empleados.nombre_empleado asc;";

    $data_EG =$connectionDB->getRows($query_pacientes);

    $data_empleados = $connectionDB ->getRows($query_personal);

?>