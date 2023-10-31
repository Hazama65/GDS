<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $query = "SELECT id_diagnostico,nombre FROM diagnosticos";

    $dataCatalogo= mysqli_query($conn,$query);
?>