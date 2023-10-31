<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die("Error en la conexion a la base de datos" . mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $fecha = $_POST["fecha"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $diabetico = $_POST["diabetico"];
        $has = $_POST["has"];

        $data_paciente = "INSERT INTO datos_paciente 
        (fecha,nombre_paciente,edad,sexo,diabetico,hipertension)
        VALUES('$fecha','$nombre','$edad','$sexo','$diabetico','$has')" ;

        mysqli_query($conn,$data_paciente);
        $last_id = mysqli_insert_id($conn);


        $medico = $_POST["medico"];
        $diagnostico = $_POST["diagnostico"];
        $procedimiento = $_POST["procedimiento"];
        $Programada = $_POST["Programada"];
        $STEMI = $_POST["STEMI"];

        $dataAtencionMedica = "INSERT INTO atencion_medica VALUES
        ('$medico','$diagnostico','$procedimiento','$Programada','$STEMI','$last_id')";
        mysqli_query($conn,$dataAtencionMedica);

        $braquial = $_POST["braquial"];
        $lateralidadbraquial = $_POST["lateralidadbraquial"];
        $Cubital = $_POST["Cubital"];
        $lateralidadCubital = $_POST["lateralidadCubital"];
        $Deltopectoral = $_POST["Deltopectoral"];
        $lateralidadDeltopectoral = $_POST["lateralidadDeltopectoral"];
        $Femoral = $_POST["Femoral"];
        $lateralidadFemoral = $_POST["lateralidadFemoral"];
        $Radial = $_POST["Radial"];
        $lateralidadRadial = $_POST["lateralidadRadial"];
        $Subclavio = $_POST["Subclavio"];
        $lateralidadSubclavio= $_POST["lateralidadSubclavio"];
        $TransradialDistal = $_POST["TransradialDistal"];
        $lateralidadTransradialDistal = $_POST["lateralidadTransradialDistal"];
        $destinofinal = $_POST["destinofinal"];

        $dataAbordaje = "INSERT INTO abordaje VALUES 
        ('$braquial','$lateralidadbraquial','$Cubital','$lateralidadCubital','$Deltopectoral',
        '$lateralidadDeltopectoral','$Femoral','$lateralidadFemoral','$Radial','$lateralidadRadial',
        '$Subclavio','$lateralidadSubclavio','$TransradialDistal','$lateralidadTransradialDistal','$destinofinal','$last_id')";
        mysqli_query($conn,$dataAbordaje);

        $bifurcacion = $_POST["bifurcacion"];
        $Cincunfleja = $_POST["Cincunfleja"];
        $coronarioderecha = $_POST["coronarioderecha"];
        $descendenteanterior = $_POST["descendenteanterior"];
        $ramointermedio = $_POST["ramointermedio"];
        $troncocoronario = $_POST["troncocoronario"];

        $dataLesionCorona = "INSERT INTO lesion_coronaria VALUES 
        ('$bifurcacion','$Cincunfleja','$coronarioderecha','$descendenteanterior','$ramointermedio',
        '$troncocoronario','$last_id')";
        mysqli_query($conn,$dataLesionCorona);

        $Stent = $_POST["Stent"];
        $nostent = $_POST["nostent"];
        $medidastent = $_POST["medidastent"];
        $balon = $_POST["balon"];
        $nobalon = $_POST["nobalon"];
        $medidabalon = $_POST["medidabalon"];

        $dataStentBalon = "INSERT INTO sten_balon VALUES 
        ('$Stent','$nostent','$medidastent','$balon','$nobalon','$medidabalon','$last_id');";
        mysqli_query($conn,$dataStentBalon);


        echo 'success'; // Éxito en la inserción

        mysqli_close($conn);

    }
?>