<?php
    include(__DIR__ . "/../php/dbconfig_EG.php");


    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $servicio = $_POST['servicio'];
        $nombre = $_POST['nombre'];
        $fecha_completa = $_POST['fecha'];

        $fecha = explode("-", $fecha_completa);
        $año = $fecha[0];
        $mes = $fecha[1]; 

        $querySustituido= "SELECT trabajador_sustituido,COUNT(*) as conteo FROM `datos_generales` 
        WHERE MONTH(fecha_suplencia)='$mes' 
        AND YEAR(fecha_suplencia) = '$año' 
        AND servicio='$servicio' 
        AND trabajador_sustituido='$nombre' 
        GROUP BY trabajador_sustituido";
        $resultSustituido = mysqli_query($conn,$querySustituido);
    
        $dataSustituido = array();
        if ($resultSustituido->num_rows > 0) {
            while ($row = $resultSustituido->fetch_assoc()) {
                $dataSustituido[] = array(
                    "name" => $row["trabajador_sustituido"],
                    "count" => intval($row["conteo"]), // Convertir a entero
                    "pictureSettings" => array(
                        "src" => 'includes/uploads/descarga.jpeg'
                    )
                );
            }
        }
        $dataSustituidoJSON = json_encode($dataSustituido);


        $querySustituto= "SELECT trabajador_sustituto,COUNT(*) as conteo FROM `datos_generales` 
        WHERE MONTH(fecha_suplencia)='$mes' 
        AND YEAR(fecha_suplencia) = '$año' 
        AND servicio='$servicio' 
        AND trabajador_sustituto='$nombre' 
        GROUP BY trabajador_sustituto";
        $resultSustituto = mysqli_query($conn,$querySustituto);
    
        $dataSustituto = array();
        if ($resultSustituto->num_rows > 0) {
            while ($row = $resultSustituto->fetch_assoc()) {
                $dataSustituto[] = array(
                    "name" => $row["trabajador_sustituto"],
                    "count" => intval($row["conteo"]), // Convertir a entero
                    "pictureSettings" => array(
                        "src" => 'includes/uploads/descarga.jpeg'
                    )
                );
            }
        }
        
        $dataSustitutoJSON = json_encode($dataSustituto); 



    }else{

        $querySustituido= "SELECT trabajador_sustituido,COUNT(*) as conteo FROM datos_generales
        GROUP BY trabajador_sustituido";
        $resultSustituido = mysqli_query($conn,$querySustituido);
    
        $dataSustituido = array();
        if ($resultSustituido->num_rows > 0) {
            while ($row = $resultSustituido->fetch_assoc()) {
                $dataSustituido[] = array(
                    "name" => $row["trabajador_sustituido"],
                    "count" => intval($row["conteo"]), // Convertir a entero
                    "pictureSettings" => array(
                        "src" => 'includes/uploads/descarga.jpeg'
                    )
                );
            }
        }
        $dataSustituidoJSON = json_encode($dataSustituido);

        
        
        $querySustituto= "SELECT trabajador_sustituto,COUNT(*) as conteo FROM datos_generales
        GROUP BY trabajador_sustituto";
        $resultSustituto = mysqli_query($conn,$querySustituto);
    
        $dataSustituto = array();
        if ($resultSustituto->num_rows > 0) {
            while ($row = $resultSustituto->fetch_assoc()) {
                $dataSustituto[] = array(
                    "name" => $row["trabajador_sustituto"],
                    "count" => intval($row["conteo"]), // Convertir a entero
                    "pictureSettings" => array(
                        "src" => 'includes/uploads/descarga.jpeg'
                    )
                );
            }
        }
        
        $dataSustitutoJSON = json_encode($dataSustituto); 
    }


?>
