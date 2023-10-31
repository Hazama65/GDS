<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die("Error en la conexion a la base de datos" . mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $fecha_registro = $_POST['fecha_registro'];
        $nombre_paciente = $_POST['nombre_paciente'];
        $curp = $_POST['curp'];
        $fecha_nacimiento = $_POST['fecha'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        $data_paciente = "INSERT INTO pacientes(fecha_registro,nombre_paciente,curp,fecha_nacimiento,edad,sexo) 
        VALUES ('$fecha_registro','$nombre_paciente','$curp','$fecha_nacimiento','$edad','$sexo')";

        mysqli_query($conn,$data_paciente);
        $lastId = mysqli_insert_id($conn);

        $diagnostico = $_POST['diagnostico'];
        $cama = $_POST['cama'];
        $dias_eih = $_POST['dias_eih'];

        $data_hosp = "INSERT INTO hospitalizacion VALUES('$diagnostico','$cama','$dias_eih','$lastId')";
        mysqli_query($conn,$data_hosp);

        $hb = $_POST['hb'];
        $hcto = $_POST['hcto'];
        $plaquetas = $_POST['plaquetas'];
        $inr = $_POST['inr'];
        $cultivo = $_POST['cultivo'];

        $data_lab = "INSERT INTO laboratorio VALUES ('$hb','$hcto','$plaquetas','$inr','$cultivo','$lastId')";
        mysqli_query($conn,$data_lab);

        $procedimiento = $_POST['procedimiento_realizado'];
        $prioridad = $_POST['prioridad'];
        $medico_endo = $_POST['medico_endo'];
        $estatus_solicitud = $_POST['estatus_solicitud'];
        $fecha_programada = $_POST['fecha_programada'];

        $data_estudio = "INSERT INTO estudios VALUES ('$procedimiento','$prioridad','$medico_endo','$estatus_solicitud',
        '$fecha_programada',$lastId)";
        mysqli_query($conn,$data_estudio);

        $Pinza_Biopsia = $_POST['Pinza_Biopsia'];
        $Kit_Ligadura_micro = $_POST['Kit_Ligadura_microtech'];
        $Aguja_Escleroterapia = $_POST['Aguja_Escleroterapia'];
        $Argon_Plasma = $_POST['Argon_Plasma'];
        $Sonda_FiAPC = $_POST['Sonda_FiAPC'];
        $Protesis_Esofagica_Wallflex = $_POST['Protesis_Esofagica_Wallflex'];
        $Sistema_Ovesco = $_POST['Sistema_Ovesco'];
        $Guia_Hidrofilica = $_POST['Guia_Hidrofilica'];
        $Kit_Gastrotomia_Endoscopica_Pull = $_POST['Kit_Gastrotomia_Endoscopica_Pull'];
        $Hemoclips = $_POST['Hemoclips'];
        $Ovesco = $_POST['Ovesco'];
        $Kit_Ligadura = $_POST['Kit_Ligadura'];
        $Sonda_de_Gastrotomia = $_POST['Sonda_de_Gastrotomia'];
        $Asa_de_Polipectomia = $_POST['Asa_de_Polipectomia'];
        $Balon_Cre = $_POST['Balon_Cre'];

        $data_materiales = "INSERT INTO materiales VALUES ('$Pinza_Biopsia','$Kit_Ligadura_micro','$Aguja_Escleroterapia','$Argon_Plasma',
        '$Sonda_FiAPC','$Protesis_Esofagica_Wallflex','$Sistema_Ovesco','$Guia_Hidrofilica','$Kit_Gastrotomia_Endoscopica_Pull',
        '$Hemoclips','$Ovesco','$Kit_Ligadura','$Sonda_de_Gastrotomia','$Asa_de_Polipectomia','$Balon_Cre','$lastId')";

        mysqli_query($conn,$data_materiales);

        $fecha_pre_programada = $_POST['fecha_pre_programada'];
        $fecha_estudio = $_POST['fecha_estudio'];
        $defuncion = $_POST['defuncion'];

        $data_seguimiento = "INSERT INTO seguimiento VALUES ('$fecha_pre_programada','$fecha_estudio','$defuncion','$lastId')";
        mysqli_query($conn,$data_seguimiento);


        $archivo_temporal = $_FILES['imagen']['tmp_name'];

        // Verifica si se ha enviado una imagen
        if (isset($_FILES['imagen']) && is_uploaded_file($archivo_temporal)) {
            // Lee los datos binarios del archivo
            $datos = file_get_contents($archivo_temporal);

            $stmt = $conn->prepare("INSERT INTO imagenes (imagen, id_paciente) VALUES (?, ?)");
            $stmt->bind_param("si", $datos, $lastId); // Cambia "si" si el tipo de 'id_paciente' es diferente
            $stmt->send_long_data(0, $datos);
            $stmt->execute();
            $stmt->close();
        } else {
            echo 'error';
        }
        echo 'success'; // Éxito en la inserción

        mysqli_close($conn);

    }
?>