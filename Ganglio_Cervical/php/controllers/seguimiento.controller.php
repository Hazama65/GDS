<?php
    require(__DIR__ . '/../models/database.model.php');
    include(__DIR__ . '/../dbconfig_gc.php');

    $connectionDBSEG = new Database(DB_HOST_seg,DB_NAME_seg,DB_USERNAME_seg,DB_PASSWORD_seg);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente         = $_POST['id_paciente'];
        $nombre_paciente_seg = $_POST['nombre_paciente_seg'];
        $seguimiento_seg     = $_POST['seguimiento_seg'];

        $queryPaciente = "INSERT INTO datos_seguimiento (nombre_paciente,fecha_seguimiento,id_paciente) 
        VALUES ('$nombre_paciente_seg','$seguimiento_seg','$id_paciente')";
        $dataPacinetes = $connectionDBSEG->ShotSimple($queryPaciente);
        $ultimoId = $connectionDBSEG->last_id;


        $evolucion_ganglio_seg = $_POST['evolucion_ganglio_seg'];
        $periodo_ganglio_seg   = $_POST['periodo_ganglio_seg'];
        $Ganglio_tama_seg      = $_POST['Ganglio_tama_seg'];

        $queryAtencion = "INSERT INTO seguimiento_atencion_clinica VALUES ('$evolucion_ganglio_seg','$periodo_ganglio_seg',
        '$Ganglio_tama_seg','$ultimoId')";
        $dataAtencion = $connectionDBSEG->ShotSimple($queryAtencion);


        $Doloroso_seg           = isset ($_POST['Doloroso_seg']) ? 'Si' : 'No';
        $No_doloroso_seg        = isset ($_POST['No_doloroso_seg']) ? 'Si' : 'No';
        $Indurado_seg           = isset ($_POST['Indurado_seg']) ? 'Si' : 'No';
        $No_Indurado_seg        = isset ($_POST['No_Indurado_seg']) ? 'Si' : 'No';
        $Fijo_seg               = isset ($_POST['Fijo_seg']) ? 'Si' : 'No';
        $Eritematoso_seg        = isset ($_POST['Eritematoso_seg']) ? 'Si' : 'No';
        $Hipertermico_seg       = isset ($_POST['Hipertermico_seg']) ? 'Si' : 'No';
        $con_secrecion_seg      = isset ($_POST['con_secrecion_seg']) ? 'Si' : 'No';
        $sin_secrecion_seg      = isset ($_POST['sin_secrecion_seg']) ? 'Si' : 'No';
        $Movil_seg              = isset ($_POST['Movil_seg']) ? 'Si' : 'No';
        $bien_delimitado_seg    = isset ($_POST['bien_delimitado_seg']) ? 'Si' : 'No';
        $mal_delimitado_seg     = isset ($_POST['mal_delimitado_seg']) ? 'Si' : 'No';
        $cambios_coloracion_seg = isset ($_POST['cambios_coloracion_seg']) ? 'Si' : 'No';
        $sin_cambios_seg        = isset ($_POST['sin_cambios_seg']) ? 'Si' : 'No';

        $queryCaracteristicas = "INSERT INTO seguimiento_caracteristicas VALUES ('$Doloroso_seg','$No_doloroso_seg','$Indurado_seg',
        '$No_Indurado_seg','$Fijo_seg','$Eritematoso_seg','$Hipertermico_seg','$con_secrecion_seg','$sin_secrecion_seg','$Movil_seg',
        '$bien_delimitado_seg','$mal_delimitado_seg','$cambios_coloracion_seg','$sin_cambios_seg','$ultimoId')";
        $dataCaracteristicas = $connectionDBSEG->ShotSimple($queryCaracteristicas);


        $otros_ganglios_seg        = $_POST['otros_ganglios_seg'];
        $local_submandibulares_seg = isset($_POST['local_submandibulares_seg']) ? 'Si' : 'No';
        $local_axilares_seg        = isset ($_POST['local_axilares_seg']) ? 'Si' : 'No';
        $local_inguinales_seg      = isset ($_POST['local_inguinales_seg']) ? 'Si' : 'No';
        $local_cervicales_seg      = isset ($_POST['local_cervicales_seg']) ? 'Si' : 'No';
        $local_retroauri_seg       = isset ($_POST['local_retroauri_seg']) ? 'Si' : 'No';
        $local_subclav_seg         = isset ($_POST['local_subclav_seg']) ? 'Si' : 'No';
        $local_occipital_seg       = isset ($_POST['local_occipital_seg']) ? 'Si' : 'No';
        $local_adeno_seg           = isset ($_POST['local_adeno_seg']) ? 'Si' : 'No';

        $queryOtros = "INSERT INTO seguimiento_otros VALUES ('$otros_ganglios_seg','$local_submandibulares_seg','$local_axilares_seg',
        '$local_inguinales_seg','$local_cervicales_seg','$local_retroauri_seg','$local_subclav_seg','$local_occipital_seg',
        '$local_adeno_seg','$ultimoId')";
        $dataOtros = $connectionDBSEG->ShotSimple($queryOtros);



        echo 'success';

    }
    
?>