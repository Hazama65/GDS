<?php
    include(__DIR__ . "/../php/dbconfig_ic.php");

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $query_residente = "SELECT residente, COUNT(*) as conteo FROM datos_generales GROUP BY residente";
    $result_residente = mysqli_query($conn, $query_residente);
    $data_residente = array();
    
    if ($result_residente->num_rows > 0) {
        while ($row = $result_residente->fetch_assoc()) {
            $data_residente[] = array(
                "country" => $row["residente"],
                "value" => intval($row["conteo"])
            );
        }
    }


    $query_responsable = "SELECT responsable, COUNT(*) as conteo FROM datos_generales GROUP BY responsable";
    $result_responsable = mysqli_query($conn, $query_responsable);
    $data_responsable = array();
    
    if ($result_responsable->num_rows > 0) {
        while ($row = $result_responsable->fetch_assoc()) {
            $data_responsable[] = array(
                "country" => $row["responsable"],
                "value" => intval($row["conteo"])
            );
        }
    }


    $query_interConsulta = "SELECT servicio_interconsulta, COUNT(*) as conteo FROM procedimientos GROUP BY servicio_interconsulta";
    $result_interConsulta = mysqli_query($conn, $query_interConsulta);
    $data_interConsulta = array();
    
    if ($result_interConsulta->num_rows > 0) {
        while ($row = $result_interConsulta->fetch_assoc()) {
            $data_interConsulta[] = array(
                "country" => $row["servicio_interconsulta"],
                "value" => intval($row["conteo"])
            );
        }
    }


    $query_respondiente = "SELECT servicio_respondiente, COUNT(*) as conteo FROM procedimientos GROUP BY servicio_respondiente";
    $result_respondiente = mysqli_query($conn, $query_respondiente);
    $data_respondiente = array();
    
    if ($result_respondiente->num_rows > 0) {
        while ($row = $result_respondiente->fetch_assoc()) {
            $data_respondiente[] = array(
                "country" => $row["servicio_respondiente"],
                "value" => intval($row["conteo"])
            );
        }
    }

    $query_diasDiferencia = "SELECT diferencia_dias, COUNT(diferencia_dias) as conteo FROM procedimientos GROUP BY diferencia_dias";
    $result_diasDiferencia = mysqli_query($conn,$query_diasDiferencia);
    $data_diasDiferencia = array();
    
    if ($result_diasDiferencia->num_rows > 0) {
        while ($row = $result_diasDiferencia->fetch_assoc()) {
            $data_diasDiferencia[] = array(
                "country" => $row["diferencia_dias"],
                "value" => intval($row["conteo"])
            );
        }
    }
    



?>