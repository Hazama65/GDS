<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $queryDiagnoticos = "SELECT id_diagnostico,nombre FROM diagnosticos";

    $dataDiagnosticos= mysqli_query($conn,$queryDiagnoticos);



    $queryProcedimientos = "SELECT id_procedimiento, nombre FROM procedimientos";

    $dataProcediminetos = mysqli_query($conn,$queryProcedimientos);
?>