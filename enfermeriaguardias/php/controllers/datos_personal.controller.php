<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_EG.php');

    $connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


    if (isset($_GET['numero_empleado']) && !empty($_GET['numero_empleado'])) {
        $numeroEmpleado = $_GET['numero_empleado'];
    
        $query = "SELECT nombre_empleado,ult_grado_estudio , puClave, puDescripcion FROM empleados WHERE no_empleado = $numeroEmpleado";
        $result = $connectionDB->getRows($query);
    
        if ($result && count($result) > 0) {
            $row = $result[0]; // Tomar el primer resultado
            $nombreEmpleado = $row['nombre_empleado'];
            $niv_academico = $row['ult_grado_estudio'];
            $codigoPuesto = $row['puClave'];
            $puesto = $row['puDescripcion'];
    
            echo json_encode(array("nombreEmpleado" => $nombreEmpleado, "nivAcademico" => $niv_academico, "codigoPuesto" => $codigoPuesto, "puesto" => $puesto));
        } else {
            echo json_encode(array("error" => "No se encontró ningún empleado con ese número."));
        }
    } else {
        echo json_encode(array("error" => "Número de empleado no especificado."));
    }
    
?>