<?php
require(__DIR__ . '/../models/database.model.php');
include(__DIR__ . '/../dbconfig.php');

$connectionDB = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$id_paciente = null;
if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
    $id_paciente = $_GET['idPaciente'];


    $queryAllData = "SELECT dp.*,hp.*,ab.*,nt.*,cisp.*,rs.*,vl.*,ed.*,rt.*
        FROM datos_paciente dp
        JOIN hospi hp ON dp.id_paciente = hp.id_paciente
        JOIN ambu ab ON dp.id_paciente = ab.id_paciente
        JOIN notificacion nt ON dp.id_paciente = nt.id_paciente
        JOIN cisp ON dp.id_paciente = cisp.id_paciente
        JOIN resultados rs ON dp.id_paciente = rs.id_paciente
        JOIN validacion vl ON dp.id_paciente = vl.id_paciente
        JOIN evitabilidad ed ON dp.id_paciente = ed.id_paciente
        JOIN registro rt ON dp.id_paciente = rt.id_paciente
        WHERE dp.id_paciente ='$id_paciente'";

    $AllData = $connectionDB->getRows($queryAllData);

    if (!empty($AllData)) {
        foreach ($AllData as $data) {

            $nombre_paciente = $data['nombre_paciente'];
            $fecha = $data['fecha'];
            $edad = $data['edad'];
            $sexo = $data['sexo'];
            $cama = $data['cama'];
            $Turno = $data['Turno'];
            $Personal = $data['Personal'];
            $area_atencion = $data['area_atencion'];
            $area_atencionHospi = $data['area_atencionHospi'];
            $pb_urgencias = $data['pb_urgencias'];
            $planta_primerpiso = $data['planta_primerpiso'];
            $planta_segundopiso = $data['planta_segundopiso'];
            $planta_tercerpiso = $data['planta_tercerpiso'];
            $planta_cuartopiso = $data['planta_cuartopiso'];
            $area_ambu = $data['area_ambu'];
            $ambu_pb = $data['ambu_pb'];
            $ambu_unidadapoyo = $data['ambu_unidadapoyo'];
            $ambu_piso1 = $data['ambu_piso1'];
            $ambu_unidadapoyo1 = $data['ambu_unidadapoyo1'];
            $ambu_piso2 = $data['ambu_piso2'];
            $ambu_piso3 = $data['ambu_piso3'];
            $ambu_enseñanza1 = $data['ambu_enseñanza1'];
            $fecha_notificacion = $data['fecha_notificacion'];
            $fecha_incidente = $data['fecha_incidente'];
            $descripcion = $data['descripcion'];
            $Tipo_evento = $data['Tipo_evento'];
            $evento_tipoadv = $data['evento_tipoadv'];
            $evento_tipocenti = $data['evento_tipocenti'];
            $infopx = $data['infopx'];
            $tipo_incidente = $data['tipo_incidente'];
            $Proceso_AC = $data['Proceso_AC'];
            $Problema_ac = $data['Problema_ac'];
            $Proceso_PC = $data['Proceso_PC'];
            $Problema_PC = $data['Problema_PC'];
            $tipo_Documentacion = $data['tipo_Documentacion'];
            $Problema_Documentacion = $data['Problema_Documentacion'];
            $tipo_OrganismoIAAS = $data['tipo_OrganismoIAAS'];
            $Lugar_infeccion = $data['Lugar_infeccion'];
            $cuestion_sangre = $data['cuestion_sangre'];
            $Proceso_sangre = $data['Proceso_sangre'];
            $Problema_sangre = $data['Problema_sangre'];
            $Nutri_cuestion = $data['Nutri_cuestion'];
            $Proceso_nutricion = $data['Proceso_nutricion'];
            $Problema_nutricion = $data['Problema_nutricion'];
            $oxigeno = $data['oxigeno'];
            $Proceso_O2 = $data['Proceso_O2'];
            $Problema_gases = $data['Problema_gases'];
            $Comportamiento_personal = $data['Comportamiento_personal'];
            $Comportamiento_paciente = $data['Comportamiento_paciente'];
            $aacidentes_fuerzaNoPenetrante = $data['aacidentes_fuerzaNoPenetrante'];
            $Fuerza_Punzante = $data['Fuerza_Punzante'];
            $Otra_fuerza = $data['Otra_fuerza'];
            $Mecanismo_termino = $data['Mecanismo_termino'];
            $AmenazaRespi = $data['AmenazaRespi'];
            $Productos_quimicos = $data['Productos_quimicos'];
            $mecanismo_lesion = $data['mecanismo_lesion'];
            $fenomenos = $data['fenomenos'];
            $Caidas = $data['Caidas'];
            $TipoCaidas = $data['TipoCaidas'];
            $ElementoCaidas = $data['ElementoCaidas'];
            $Recursos_Gestion = $data['Recursos_Gestion'];
            $Dañop_grado = $data['Dañop_grado'];
            $resultados_organizacion = $data['resultados_organizacion'];
            $pxAumentoRecursos = $data['pxAumentoRecursos'];
            $no_caso = $data['no_caso'];
            $Val_evento = $data['Val_evento'];
            $Evidencia = $data['Evidencia'];
            $evento_adversoseg = $data['evento_adversoseg'];
            $evento_analisis = $data['evento_analisis'];
            $analisis = $data['analisis'];
            $No_porque_select = $data['No_porque_select'];
            $respuesta_eve = $data['respuesta_eve'];
            $no_oficio = $data['no_oficio'];
            $fecha_Envio = $data['fecha_Envio'];
            $respuesta = $data['respuesta'];
            $Corto = $data['Corto'];
            $corto_descrip = $data['corto_descrip'];
            $Mediano = $data['Mediano'];
            $Mediano_descrip = $data['Mediano_descrip'];
            $Largo = $data['Largo'];
            $largo_descrip = $data['largo_descrip'];
            $Evitabilidad = $data['Evitabilidad'];
            $CaracteristicasPaciente = $data['CaracteristicasPaciente'];
            $IndividualesEquipo = $data['IndividualesEquipo'];
            $TrabajoEquipo = $data['TrabajoEquipo'];
            $AmbienteTrabajo = $data['AmbienteTrabajo'];
            $OrganizacionalesEstablecimiento = $data['OrganizacionalesEstablecimiento'];
            $InstitucionalesExternos = $data['InstitucionalesExternos'];
            $Otro = $data['Otro'];
            $AplicacionIndicaciones = $data['AplicacionIndicaciones'];
            $SREA_seg = $data['SREA_seg'];
            $estatus = $data['estatus'];

        }
    } else {
        echo "No se encontro la informacion";
        exit;
    }
} else {
    echo $id_paciente;
    exit;
}


?>