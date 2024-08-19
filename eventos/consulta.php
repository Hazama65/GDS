<?php
include ('php/controllers/consulta.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Consulta Notificación de Evento</title>
</head>

<body>
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(62, 104, 170,0.5);"> Datos del Paciente </th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <!--====================================Datos del Terapueta============================-->
            <tr>
                <td class="estilo-celda">Nombre del Paciente</td>
                <td><?php echo $nombre_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Nacimiento</td>
                <td><?php echo $fecha; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Cama</td>
                <td><?php echo $cama; ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">Turno</td>
                <td><?php echo $Turno; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Personal</td>
                <td><?php echo $Personal; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Area de Atención</td>
                <td><?php echo $area_atencion; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(226, 167, 184);">Servicios Ambulatorios</th>
                <th scope="col" style="background-color: rgb(226, 167, 184);"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">P.B</td>
                <td><?php echo $ambu_pb; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Piso 1</td>
                <td><?php echo $ambu_unidadapoyo; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Piso 2</td>
                <td><?php echo $ambu_piso1; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Piso 3</td>
                <td><?php echo $ambu_unidadapoyo1; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Unidad de Apoyo PB</td>
                <td><?php echo $ambu_piso2; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Unidad de Apoyo Piso 1</td>
                <td><?php echo $ambu_piso3; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Enseñanza Piso 1</td>
                <td><?php echo $ambu_enseñanza1; ?></td>
            </tr>


            <tr>
                <th scope="col" style="background-color: rgb(226, 167, 184);">Servicios Hospitalización</th>
                <th scope="col" style="background-color: rgb(226, 167, 184);"> </th>
            </tr>


            <tr>
                <td classs="estilo-celda">P.B </td>
                <td><?php echo $pb_urgencias; ?></td>
            </tr>

            <tr>
                <td classs="estilo-celda">Primer Piso</td>
                <td><?php echo $planta_primerpiso; ?></td>
            </tr>

            <tr>
                <td classs="estilo-celda">Segundo Piso</td>
                <td><?php echo $planta_segundopiso; ?></td>
            </tr>

            <tr>
                <td classs="estilo-celda">Tercer Piso</td>
                <td><?php echo $planta_tercerpiso; ?></td>
            </tr>

            <tr>
                <td classs="estilo-celda">Cuarto Piso</td>
                <td><?php echo $planta_cuartopiso; ?></td>
            </tr>





            <tr>
                <th scope="col" style="background-color: rgb(198, 79, 113);">Notificación</th>
                <th scope="col" style="background-color: rgb(198, 79, 113);"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">Fecha de Notificación/td>
                <td><?php echo $fecha_notificacion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Incidente</td>
                <td><?php echo $fecha_incidente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Descripción del evento</td>
                <td><?php echo $descripcion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo del Evento</td>
                <td><?php echo $Tipo_evento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Evento Adverso</td>
                <td><?php echo $evento_tipoadv; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Evento Centinela</td>
                <td><?php echo $evento_tipocenti; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Se le brindo información al familiar</td>
                <td><?php echo $infopx; ?></td>
            </tr>



            <tr>
                <th scope="col" style="background-color: rgb(198, 79, 113);">Seguimiento</th>
                <th scope="col" style="background-color: rgb(198, 79, 113);"> </th>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(93, 193, 185);">Clasificación Internacional De Seguridad Del Paciente (CISP)</th>
                <th scope="col" style="background-color: rgb(93, 193, 185);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo de incidente</td>
                <td><?php echo $tipo_incidente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proceso AC</td>
                <td><?php echo $Proceso_AC; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Problema Incidente AC</td>
                <td><?php echo $Problema_ac; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proceso (PC)</td>
                <td><?php echo $Proceso_PC; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Problema PC</td>
                <td><?php echo $Problema_PC; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo Documentación</td>
                <td><?php echo $tipo_Documentacion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Problema Documentación</td>
                <td><?php echo $Problema_Documentacion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo Organismo IAAS</td>
                <td><?php echo $tipo_OrganismoIAAS; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Lugar de la Infección</td>
                <td><?php echo $Lugar_infeccion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sangre/Producto en Cuestión</td>
                <td><?php echo $cuestion_sangre; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proceso Uso Sangre/Producto En Cuestión</td>
                <td><?php echo $Proceso_sangre; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Problema Sangre/Producto En Cuestión</td>
                <td><?php echo $Problema_sangre; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nutrición en Cuestión</td>
                <td><?php echo $Nutri_cuestion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proceso de uso Nutrición</td>
                <td><?php echo $Proceso_nutricion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Problema En Nutrición</td>
                <td><?php echo $Problema_nutricion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Oxígeno/Gases/Vapores</td>
                <td><?php echo $oxigeno; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Proceso de uso de O2/Gases/Vapores</td>
                <td><?php echo $Proceso_O2; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Problema O2/Gases/Vapores</td>
                <td><?php echo $Problema_gases; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Comportamiento del Personal</td>
                <td><?php echo $Comportamiento_personal; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Comportamiento del Paciente</td>
                <td><?php echo $Comportamiento_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Accidentes Por Fuerza No Penetrante</td>
                <td><?php echo $aacidentes_fuerzaNoPenetrante; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fuerza Punzante/Penetrante</td>
                <td><?php echo $Fuerza_Punzante; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otra Fuerza Mecánica</td>
                <td><?php echo $Otra_fuerza; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Mecanismo Térmico</td>
                <td><?php echo $Mecanismo_termino; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Amenaza a la Respiración</td>
                <td><?php echo $AmenazaRespi; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Exposición A Productos Químicos</td>
                <td><?php echo $Productos_quimicos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otros Mecanismos de Lesión</td>
                <td><?php echo $mecanismo_lesion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Exposición A Fenómenos Meteorológicos, Catástrofes, Etc</td>
                <td><?php echo $fenomenos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Caídas</td>
                <td><?php echo $Caidas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo de Caída</td>
                <td><?php echo $TipoCaidas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Elemento Implicado en la Caída</td>
                <td><?php echo $ElementoCaidas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Recursos/Gestión de la Organización</td>
                <td><?php echo $Recursos_Gestion; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(93, 193, 185);">Resultados para el paciente</th>
                <th scope="col" style="background-color: rgb(93, 193, 185);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Grado del Daño</td>
                <td><?php echo $Dañop_grado; ?></td>
            </tr>


            <tr>
                <th scope="col" style="background-color: rgb(93, 193, 185);">Resultados para la Organización</th>
                <th scope="col" style="background-color: rgb(93, 193, 185);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Resultados para la Organización</td>
                <td><?php echo $Dañop_grado; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Aumento de los recursos asignados al paciente</td>
                <td><?php echo $Dañop_grado; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(93, 193, 185);">Validación</th>
                <th scope="col" style="background-color: rgb(93, 193, 185);"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">No. Caso</td>
                <td><?php echo $no_caso; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Validación del Evento</td>
                <td><?php echo $Val_evento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Evidencia</td>
                <td><?php echo $Evidencia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Análisis</td>
                <td><?php echo $evento_adversoseg; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">No. Oficio</td>
                <td><?php echo $evento_analisis; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Envio</td>
                <td><?php echo $analisis; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Respuesta</td>
                <td><?php echo $No_porque_select; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Corto Plazo</td>
                <td><?php echo $respuesta_eve; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Descripción de Respuesta Corto Plazo</td>
                <td><?php echo $no_oficio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Mediano Plazo</td>
                <td><?php echo $fecha_Envio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Descripción de Respuesta Mediano Plazo</td>
                <td><?php echo $respuesta; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Largo Plazo</td>
                <td><?php echo $Corto; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Descripción de Respuesta Largo Plazo</td>
                <td><?php echo $corto_descrip; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Evento Adverso</td>
                <td><?php echo $Mediano; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Análisis C-R</td>
                <td><?php echo $Mediano_descrip; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado</td>
                <td><?php echo $Largo; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(93, 193, 185);">Evitabilidad</th>
                <th scope="col" style="background-color: rgb(93, 193, 185);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Era Evitable</td>
                <td><?php echo $largo_descrip; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Factores del Incidente</td>
                <td><?php echo $Evitabilidad ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Relacionados Con Las Características Del Paciente </td>
                <td><?php echo $CaracteristicasPaciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Relacionados Con El Ambiente De Trabajo Y El Entorno</td>
                <td><?php echo $IndividualesEquipo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Individuales Asociadas Con Los Integrantes Del Equipo</td>
                <td><?php echo $TrabajoEquipo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Organizacionales Del Establecimiento De Atención Médica</td>
                <td><?php echo $AmbienteTrabajo ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Relacionados Con La Aplicación De Las Indicaciones, Protocolos, Manuales, Lineamientos Y Guías De Práctica Clínica</td>
                <td><?php echo $OrganizacionalesEstablecimiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Otro</td>
                <td><?php echo $InstitucionalesExternos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Relacionados Con El Trabajo En Equipo</td>
                <td><?php echo $Otro ; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Institucionales O Del Ambiente Externo</td>
                <td><?php echo $AplicacionIndicaciones; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(93, 193, 185);">Registro</th>
                <th scope="col" style="background-color: rgb(93, 193, 185);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">SREA</td>
                <td><?php echo $SREA_seg; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estatus</td>
                <td><?php echo $estatus; ?></td>
            </tr>

        




        </tbody>
    </table>





</body>

</html>