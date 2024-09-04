<?php
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig.php');


$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id_paciente = $_GET['id'];


    $query = "SELECT *
        FROM datos_paciente dp
        JOIN error_med em ON dp.id_paciente = em.id_paciente
        JOIN med_inv mi ON dp.id_paciente = mi.id_paciente
        JOIN med_text mt ON dp.id_paciente = mt.id_paciente
        JOIN med_seg ms ON dp.id_paciente = ms.id_paciente
        JOIN med_seg_inv msi ON dp.id_paciente = msi.id_paciente
        JOIN med_seg_last msl ON dp.id_paciente = msl.id_paciente

    WHERE dp.id_paciente ='$id_paciente'";

    $AllData = $connectionDB->getRows($query);

    if (!empty($AllData)) {
        foreach ($AllData as $data) {

            $nombre_paciente = $data['nombre_paciente'];
            $cama = $data['cama'];
            $servicio = $data['servicio'];
            $fecha_cifv = $data['fecha_cifv'];
            $fecha_medicacion = $data['fecha_medicacion'];
            $uti_medicamento = $data['uti_medicamento'];
            $consecuencia_px = $data['consecuencia_px'];
            $realizo_investigacion = $data['realizo_investigacion'];
            $Denominacion = $data['Denominacion'];
            $Concentracion = $data['Concentracion'];
            $Fabricante = $data['Fabricante'];
            $Lote = $data['Lote'];
            $Caducidad = $data['Caducidad'];
            $Forma = $data['Forma'];
            $Dosis = $data['Dosis'];
            $Via_Administracion = $data['Via_Administracion'];
            $Intervalo_Administracion = $data['Intervalo_Administracion'];
            $Denominacion_1 = $data['Denominacion_1'];
            $Concentracion1 = $data['Concentracion1'];
            $Fabricante1 = $data['Fabricante1'];
            $Lote1 = $data['Lote1'];
            $Caducidad1 = $data['Caducidad1'];
            $Forma1 = $data['Forma1'];
            $Dosis1 = $data['Dosis1'];
            $Via_Administracion1 = $data['Via_Administracion1'];
            $Intervalo_Administracion1 = $data['Intervalo_Administracion1'];
            $Denominacion_3 = $data['Denominacion_3'];
            $Concentracion3 = $data['Concentracion3'];
            $Fabricante3 = $data['Fabricante3'];
            $Lote3 = $data['Lote3'];
            $Caducidad3 = $data['Caducidad3'];
            $Forma3 = $data['Forma3'];
            $Dosis3 = $data['Dosis3'];
            $Via_Administracion3 = $data['Via_Administracion3'];
            $Intervalo_Administracion3 = $data['Intervalo_Administracion3'];
            $descripcion_error = $data['descripcion_error'];
            $nombbre_notificacion = $data['nombbre_notificacion'];
            $cargo = $data['cargo'];
            $validacion_evento = $data['validacion_evento'];
            $tipo_evento = $data['tipo_evento'];
            $id_hraei = $data['id_hraei'];
            $id_CIFV = $data['id_CIFV'];
            $id_ESAVI = $data['id_ESAVI'];
            $fecha = $data['fecha'];
            $nombbre_seguimiento = $data['nombbre_seguimiento'];
            $tipo_error = $data['tipo_error'];
            $error = $data['error'];
            $error_tipootro = $data['error_tipootro'];
            $medicamento_erroneo = $data['medicamento_erroneo'];
            $inapropiada_medic = $data['inapropiada_medic'];
            $omision = $data['omision'];
            $dosis_incorrecta = $data['dosis_incorrecta'];
            $tratamiento_incorrecta = $data['tratamiento_incorrecta'];
            $monitorizacion_insuficiente = $data['monitorizacion_insuficiente'];
            $realizo_investigacion_1 = $data['realizo_investigacion_1'];
            $Denominacion_editar1 = $data['Denominacion_editar1'];
            $Concentracion_editar1 = $data['Concentracion_editar1'];
            $Fabricante_editar1 = $data['Fabricante_editar1'];
            $Lote_editar1 = $data['Lote_editar1'];
            $Caducidad_editar1 = $data['Caducidad_editar1'];
            $Forma_editar1 = $data['Forma_editar1'];
            $Dosis_editar1 = $data['Dosis_editar1'];
            $Via_Administracion_editar1 = $data['Via_Administracion_editar1'];
            $Intervalo_Administracion_editar1 = $data['Intervalo_Administracion_editar1'];
            $Denominacion_editar2 = $data['Denominacion_editar2'];
            $Concentracion_editar2 = $data['Concentracion_editar2'];
            $Fabricante_editar2 = $data['Fabricante_editar2'];
            $Lote_editar2 = $data['Lote_editar2'];
            $Caducidad_editar2 = $data['Caducidad_editar2'];
            $Forma_editar2 = $data['Forma_editar2'];
            $Dosis_editar2 = $data['Dosis_editar2'];
            $Via_Administracion_editar2 = $data['Via_Administracion_editar2'];
            $Intervalo_Administracion_editar2 = $data['Intervalo_Administracion_editar2'];
            $Denominacion_editar3 = $data['Denominacion_editar3'];
            $Concentracion_editar3 = $data['Concentracion_editar3'];
            $Fabricante_editar3 = $data['Fabricante_editar3'];
            $Lote_editar3 = $data['Lote_editar3'];
            $Caducidad_editar3 = $data['Caducidad_editar3'];
            $Forma_editar3 = $data['Forma_editar3'];
            $Dosis_editar3 = $data['Dosis_editar3'];
            $Via_Administracion_editar3 = $data['Via_Administracion_editar3'];
            $Intervalo_Administracion_editar3 = $data['Intervalo_Administracion_editar3'];
            $realizoInvestigacion = $data['realizoInvestigacion'];
            $descripcion_investigacion = $data['descripcion_investigacion'];
            $evidencia_inves = $data['evidencia_inves'];
            $file_1 = $data['file_1'];
            $Medicamento_categoria = $data['Medicamento_categoria'];
            $error_potencial = $data['error_potencial'];
            $Error_sindaño = $data['Error_sindaño'];
            $error_condaño = $data['error_condaño'];
            $Error_Mortal = $data['Error_Mortal'];
            $analisis_causa = $data['analisis_causa'];
            $raiz_descrip = $data['raiz_descrip'];
            $file_2 = $data['file_2'];
            $conclusion_investigacion = $data['conclusion_investigacion'];
            $conclusiondes_investigacion = $data['conclusiondes_investigacion'];
            $estrategia_preve = $data['estrategia_preve'];
            $prevencion_investigacion = $data['prevencion_investigacion'];
            $Estatus = $data['Estatus'];
            $nombre_enfermeria = $data['nombre_enfermeria'];
            $nombre_medico = $data['nombre_medico'];
            $nombre_cisfa = $data['nombre_cisfa'];
            $nombre_personallabora = $data['nombre_personallabora'];

        }
    }
}

?>