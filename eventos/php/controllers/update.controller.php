<?php

require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $Tables = array(
        $table_datos_paciente = 'datos_paciente',
        $table_hospi = 'hospi',
        $table_ambu = 'ambu',
        $table_notificacion = 'notificacion',
        $table_cisp = 'cisp',
        $table_resultados = 'resultados',
        $table_validacion = 'validacion',
        $table_evitabilidad = 'evitabilidad',
        $table_registro = 'registro'
    );

    $updateColum ='id_paciente';
    $updateId    = $_POST['id_paciente'];

    $Data_datos_paciente = array(
        'nombre_paciente' => $_POST['nombre_paciente'],
        'fecha'           => $_POST['fecha'],
        'edad'            => $_POST['edad'],
        'sexo'            => $_POST['sexo'],
        'cama'            => $_POST['cama'],
        'Turno'           => $_POST['Turno'],
        'Personal'        => $_POST['Personal'],
        'area_atencion'   => $_POST['area_atencion']
    );

    foreach ($Data_datos_paciente as $key => $value) {
        $Data_datos_paciente[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->updateData($Tables[0],$Data_datos_paciente,$updateColum,$updateId);



    $Data_hospi = array(
        'area_atencionHospi' => $_POST['area_atencionHospi'],
        'pb_urgencias' => $_POST['pb_urgencias'],
        'planta_primerpiso' => $_POST['planta_primerpiso'],
        'planta_segundopiso' => $_POST['planta_segundopiso'],
        'planta_tercerpiso' => $_POST['planta_tercerpiso'],
        'planta_cuartopiso' => $_POST['planta_cuartopiso'],

    );

    foreach ($Data_hospi as $key => $value) {
        $Data_hospi[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->updateData($Tables[1],$Data_hospi,$updateColum,$updateId);

    $Data_ambu = array(
        'area_ambu' => $_POST['area_ambu'],
        'ambu_pb' => $_POST['ambu_pb'],
        'ambu_unidadapoyo' => $_POST['ambu_unidadapoyo'],
        'ambu_piso1' => $_POST['ambu_piso1'],
        'ambu_unidadapoyo1' => $_POST['ambu_unidadapoyo1'],
        'ambu_piso2' => $_POST['ambu_piso2'],
        'ambu_piso3' => $_POST['ambu_piso3'],
        'ambu_enseñanza1' => $_POST['ambu_enseñanza1'],

    );

    foreach ($Data_ambu as $key => $value) {
        $Data_ambu[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->updateData($Tables[2],$Data_ambu,$updateColum,$updateId);

    $Data_notificacion = array(
        'fecha_notificacion' => $_POST['fecha_notificacion'],
        'fecha_incidente' => $_POST['fecha_incidente'],
        'descripcion' => $_POST['descripcion'],
        'Tipo_evento' => $_POST['Tipo_evento'],
        'evento_tipoadv' => $_POST['evento_tipoadv'],
        'evento_tipocenti' => $_POST['evento_tipocenti'],
        'infopx' => $_POST['infopx'],

    );

    foreach ($Data_notificacion as $key => $value) {
        $Data_notificacion[$key] = $connectionDB->escapeString($value);
    }
    $connectionDB->updateData($Tables[3],$Data_notificacion,$updateColum,$updateId);


    $Data_cisp = array(
        'tipo_incidente' => $_POST['tipo_incidente'],
        'Proceso_AC' => $_POST['Proceso_AC'],
        'Problema_ac' => $_POST['Problema_ac'],
        'Proceso_PC' => $_POST['Proceso_PC'],
        'Problema_PC' => $_POST['Problema_PC'],
        'tipo_Documentacion' => $_POST['tipo_Documentacion'],
        'Problema_Documentacion' => $_POST['Problema_Documentacion'],
        'tipo_OrganismoIAAS' => $_POST['tipo_OrganismoIAAS'],
        'Lugar_infeccion' => $_POST['Lugar_infeccion'],
        'cuestion_sangre' => $_POST['cuestion_sangre'],
        'Proceso_sangre' => $_POST['Proceso_sangre'],
        'Problema_sangre' => $_POST['Problema_sangre'],
        'Nutri_cuestion' => $_POST['Nutri_cuestion'],
        'Proceso_nutricion' => $_POST['Proceso_nutricion'],
        'Problema_nutricion' => $_POST['Problema_nutricion'],
        'oxigeno' => $_POST['oxigeno'],
        'Proceso_O2' => $_POST['Proceso_O2'],
        'Problema_gases' => $_POST['Problema_gases'],
        'Comportamiento_personal' => $_POST['Comportamiento_personal'],
        'Comportamiento_paciente' => $_POST['Comportamiento_paciente'],
        'aacidentes_fuerzaNoPenetrante' => $_POST['aacidentes_fuerzaNoPenetrante'],
        'Fuerza_Punzante' => $_POST['Fuerza_Punzante'],
        'Otra_fuerza' => $_POST['Otra_fuerza'],
        'Mecanismo_termino' => $_POST['Mecanismo_termino'],
        'AmenazaRespi' => $_POST['AmenazaRespi'],
        'Productos_quimicos' => $_POST['Productos_quimicos'],
        'mecanismo_lesion' => $_POST['mecanismo_lesion'],
        'fenomenos' => $_POST['fenomenos'],
        'Caidas' => $_POST['Caidas'],
        'TipoCaidas' => $_POST['TipoCaidas'],
        'ElementoCaidas' => $_POST['ElementoCaidas'],
        'Recursos_Gestion' => $_POST['Recursos_Gestion'],

    );

    $connectionDB->updateData($Tables[4],$Data_cisp,$updateColum,$updateId);

    $Data_resultados = array(
        'Dañop_grado' => $_POST['Dañop_grado'],
        'resultados_organizacion' => $_POST['resultados_organizacion'],
        'pxAumentoRecursos' => $_POST['pxAumentoRecursos'],
    );

    $connectionDB->updateData($Tables[5],$Data_resultados,$updateColum,$updateId);

    $Data_validacion = array(
        'no_caso' => $_POST['no_caso'],
        'Val_evento' => $_POST['Val_evento'],
        'Evidencia' => $_POST['Evidencia'],
        'evento_adversoseg' => $_POST['evento_adversoseg'],
        'evento_analisis' => $_POST['evento_analisis'],
        'analisis' => $_POST['analisis'],
        'No_porque_select' => $_POST['No_porque_select'],
        'respuesta_eve' => $_POST['respuesta_eve'],
        'no_oficio' => $_POST['no_oficio'],
        'fecha_Envio' => $_POST['fecha_Envio'],
        'respuesta' => $_POST['respuesta'],
        'Corto' => $_POST['Corto'],
        'corto_descrip' => $_POST['corto_descrip'],
        'Mediano' => $_POST['Mediano'],
        'Mediano_descrip' => $_POST['Mediano_descrip'],
        'Largo' => $_POST['Largo'],
        'largo_descrip' => $_POST['largo_descrip'],
    );

    $connectionDB->updateData($Tables[6],$Data_validacion,$updateColum,$updateId);

    $Data_evitabilidad = array(
        'Evitabilidad' => $_POST['Evitabilidad'],
        'CaracteristicasPaciente' => isset($_POST['CaracteristicasPaciente']) ? 'Si' : 'No',
        'IndividualesEquipo' => isset($_POST['IndividualesEquipo']) ? 'Si' : 'No',
        'TrabajoEquipo' => isset($_POST['TrabajoEquipo']) ? 'Si' : 'No',
        'AmbienteTrabajo' => isset($_POST['AmbienteTrabajo']) ? 'Si' : 'No',
        'OrganizacionalesEstablecimiento' => isset($_POST['OrganizacionalesEstablecimiento']) ? 'Si' : 'No',
        'InstitucionalesExternos' => isset($_POST['InstitucionalesExternos']) ? 'Si' : 'No',
        'Otro' => isset($_POST['Otro']) ? 'Si' : 'No',
        'AplicacionIndicaciones' => isset($_POST['AplicacionIndicaciones']) ? 'Si' : 'No',
    );

    $connectionDB->updateData($Tables[7],$Data_evitabilidad,$updateColum,$updateId);

    $Data_registro = array(
        'SREA_seg' => $_POST['SREA_seg'],
        'estatus' => $_POST['estatus'],
    );

    $connectionDB->updateData($Tables[8],$Data_registro,$updateColum,$updateId);



    echo 'success';

}


?>