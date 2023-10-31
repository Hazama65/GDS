<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die("Error en la conexion a la base de datos" . mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente  = $_POST["id_paciente"];

        $fecha = $_POST["fecha"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $diabetico = $_POST["diabetico"];
        $has = $_POST["has"];

        $update_paciente = "UPDATE datos_paciente SET
            fecha = '$fecha',
            nombre_paciente = '$nombre',
            edad = '$edad',
            sexo = '$sexo',
            diabetico = '$diabetico',
            hipertension = '$has'
        WHERE id_paciente = $id_paciente";

        mysqli_query($conn,$update_paciente);


        $medico = $_POST["medico"];
        $diagnostico = $_POST["diagnostico"];
        $procedimiento = $_POST["procedimiento"];
        $Programada = $_POST["Programada"];
        $STEMI = $_POST["STEMI"];

        $updateAtencionMedica = "UPDATE atencion_medica SET
            medico = '$medico',
            diagnostico = '$diagnostico',
            procedimiento = '$procedimiento',
            proce_programado = '$Programada',
            infarto = '$STEMI'
        WHERE id_paciente = $id_paciente";
        mysqli_query($conn,$updateAtencionMedica);

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

        $updateAbordaje = "UPDATE abordaje SET
            braquial = '$braquial',
            lateralidad_braquial = '$lateralidadbraquial',
            cubital = '$Cubital',
            lateralidad_cubital = '$lateralidadCubital',
            deltopectoral = '$Deltopectoral',
            lateralidad_dectopectoral = '$lateralidadDeltopectoral',
            femoral = '$Femoral',
            lateralidad_femoral = '$lateralidadFemoral',
            radial = '$Radial',
            lateralidad_radial = '$lateralidadRadial',
            subclavio = '$Subclavio',
            lateralidad_subclavio = '$lateralidadSubclavio',
            transradial = '$TransradialDistal',
            lateralidad_transradial = '$lateralidadTransradialDistal',
            destino_final = '$destinofinal'
        WHERE id_paciente = $id_paciente";
        mysqli_query($conn,$updateAbordaje);

        $bifurcacion = $_POST["bifurcacion"];
        $Cincunfleja = $_POST["Cincunfleja"];
        $coronarioderecha = $_POST["coronarioderecha"];
        $descendenteanterior = $_POST["descendenteanterior"];
        $ramointermedio = $_POST["ramointermedio"];
        $troncocoronario = $_POST["troncocoronario"];

        $updateLesionCoronaria = "UPDATE lesion_coronaria SET
            bifurcacion = '$bifurcacion',
            cincunfleja = '$Cincunfleja',
            coronaria_derecha = '$coronarioderecha',
            desendente_ant = '$descendenteanterior',
            ramo_inter = '$ramointermedio',
            tronco_coronario = '$troncocoronario'
        WHERE id_paciente = $id_paciente";
        mysqli_query($conn,$updateLesionCoronaria);

        $Stent = $_POST["Stent"];
        $nostent = $_POST["nostent"];
        $medidastent = $_POST["medidastent"];
        $balon = $_POST["balon"];
        $nobalon = $_POST["nobalon"];
        $medidabalon = $_POST["medidabalon"];

        $updateStentBalon = "UPDATE sten_balon SET
            stent = '$Stent',
            stent_numero = '$nostent',
            stent_medidas = '$medidastent',
            balon = '$balon',
            balon_numeros = '$nobalon',
            balon_medidas = '$medidabalon'
        WHERE id_paciente = $id_paciente";
        mysqli_query($conn,$updateStentBalon);

        echo 'success'; // Éxito en la inserción

        mysqli_close($conn);
    }
?>