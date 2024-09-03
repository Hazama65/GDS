<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar-Seguimiento</title>
</head>

<body>
    <header style="text-align: center;">
        <div style=" padding: 20px; text-align: left;">
            <a href="index.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                    <i class="bi bi-rewind-fill"></i>
                </button>
            </a>
        </div>


        <h5>Editar Registro Notificación de Eventos</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <div class="row">



            <div class="container">
                <div class="row">

                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(157, 7, 7);
                color: aliceblue;
                margin-top:15px;
                font-size: 15px;
                text-align: center;">Datos del Paciente</h4>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Nombre del Paciente</strong>
                        <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 12px; ">Fecha de Nacimiento</strong>
                        <input id="fecha" name="fecha" type="date" value="" class="control form-control" style="font-size: 12px;">
                    </div>
                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Edad</strong>
                        <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Sexo</strong>
                        <select name="sexo" id="sexo" class="form-select" style="font-size: 12px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Cama</strong>
                        <input type="number" class="control form-control" id="cama" name="cama" style="font-size: 12px;">
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Turno</strong>
                        <select name="Turno" id="Turno" class="form-select" style="font-size: 12px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Jornada Especial">Jornada Especial</option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Nocturno">Nocturno</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Personal</strong>
                        <select name="Personal" id="Personal" class="form-select" style="font-size: 12px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Enfermera">Enfermera</option>
                            <option value="Médico">Médico</option>
                            <option value="Repeción">Repeción</option>
                            <option value="Trabajo Social">Trabajo Social</option>
                            <option value="Laboratorio">Laboratorio</option>
                            <option value="Imagen">Imagen</option>
                            <option value="Vigilancia">Vigilancia</option>
                            <option value="Kiosco">Kiosco</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Banco De Sangre">Banco De Sangre</option>
                            <option value="Quimioterapia">Quimioterapia</option>
                            <option value="Radioterapia">Radioterapia</option>
                            <option value="Farmacia">Farmacia</option>
                            <option value="Camillero">Camillero</option>
                            <option value="Personal En Formación">Personal En Formación</option>
                            <option value="Atención Al Usuario">Atención Al Usuario</option>
                            <option value="Psicología">Psicología</option>
                        </select>
                    </div>


                    <div class="col-md-12">
                        <strong style="font-size: 12px;">Area de Atención</strong>
                        <select name="area_atencion" id="area_atencion" class="form-select" style="font-size: 12px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Ambulatorio">Ambulatorio</option>
                            <option value="Hospitalizacion">Hospitalización</option>
                        </select>
                    </div>

                    <div class="container" id="hospitalazacion_area" style="display:none;">

                        <div class="row">

                            <div class="form-header">
                                <h4 class="form-title" style="text-align: left;
                                    border-radius: 10px;
                                    background-color: rgb(203, 0, 0);
                                    color: aliceblue;
                                    margin-top:12px;
                                    font-size: 12px;
                                    text-align: center;">Servicios Hospitalización</h4>
                            </div>

                            <div class="col-md-6" id="atencion_hospitalizacion">
                                <strong style="font-size: 12px;">Pisos y Servicios</strong>
                                <select name="area_atencionHospi" id="area_atencionHospi" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="P.B">P.B</option>
                                    <option value="Primero Piso">Primero Piso</option>
                                    <option value="Segundo Piso">Segundo Piso</option>
                                    <option value="Tercer Piso">Tercer Piso</option>
                                    <option value="Cuarto Piso">Cuarto Piso</option>
                                </select>
                            </div>


                            <div class="col-md-6" id="PB" style="display:none;">
                                <strong style="font-size: 12px;">P.B P </strong>
                                <select name="pb_urgencias" id="pb_urgencias" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Urgencias">Urgencias</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="primerpiso" style="display:none;">
                                <strong style="font-size: 12px;">Primer Piso</strong>
                                <select name="planta_primerpiso" id="planta_primerpiso" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Hematología">Hematología</option>
                                    <option value="Ginecología">Ginecología</option>
                                    <option value="Hosp.Pediatría">Hosp.Pediatría</option>
                                    <option value="UTIP">UTIP</option>
                                    <option value="UCIP">UCIP</option>
                                    <option value="UCIN">UCIN</option>
                                    <option value="UTIN">UTIN</option>
                                    <option value="Tococirugía">Tococirugía</option>
                                    <option value="Lactario">Lactario</option>
                                    <option value="Unidad de T.">Unidad de T.</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="segundopiso" style="display:none;">
                                <strong style="font-size: 12px">Segundo Piso</strong>
                                <select name="planta_segundopiso" id="planta_segundopiso" class="form-select" style="font-size: 12px">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Cirugía General">Cirugía General</option>
                                    <option value="Cirugía Oncólogica">Cirugía Oncólogica</option>
                                    <option value="CEYE">CEYE</option>
                                    <option value="UTIA">UTIA</option>
                                    <option value="UCIA">UCIA</option>
                                    <option value="Quirófano">Quirófano</option>
                                    <option value="Hemodinamia">Hemodinamia</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="tercerpiso" style="display:none;">
                                <strong style="font-size: 12px;">Tercer Piso</strong>
                                <select name="planta_tercerpiso" id="planta_tercerpiso" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Neurocirugía">Neurocirugía</option>
                                    <option value="Trauma-Ortopedia">Trauma-Ortopedia</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="cuartopiso" style="display:none;">
                                <strong style="font-size: 12px;">Cuarto Piso</strong>
                                <select name="planta_cuartopiso" id="planta_cuartopiso" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Medicina Interna">Medicina Interna</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <!-- SERVICIOS AMBULATORIOS -->

                    <div class="container" id="area_ambulatorio" style="display:none;">
                        <div class="row">

                            <div class="form-header">
                                <h4 class="form-title" style="text-align: left;
                                    border-radius: 10px;
                                    background-color: rgb(203, 0, 0);
                                    color: aliceblue;
                                    margin-top:12px;
                                    font-size: 12px;
                                    text-align: center;">Servicios Ambulatorios</h4>
                            </div>


                            <div class="col-md-6" id="atencion_ambulatorias">
                                <strong style="font-size: 12px;">Pisos y Servicios</strong>
                                <select name="area_ambu" id="area_ambu" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="P.B">P.B</option>
                                    <option value="Piso 1">Piso 1</option>
                                    <option value="Piso 2">Piso 2</option>
                                    <option value="Piso 3">Piso 3</option>
                                    <option value="Unidad de Apoyo de PB">Unidad de Apoyo de PB</option>
                                    <option value="Unidad de Apoyo Piso 1">Unidad de Apoyo Piso 1</option>
                                    <option value="Enseñanza Piso 1">Enseñanza Piso 1</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_PB" style="display:none;">
                                <strong style="font-size: 12px;">P.B</strong>
                                <select name="ambu_pb" id="ambu_pb" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Imagenología">Imagenología</option>
                                    <option value="Banco de Sangre">Banco de Sangre</option>
                                    <option value="Medicina Nuclear">Medicina Nuclear</option>
                                    <option value="Laboratorio">Laboratorio</option>
                                    <option value="Salud Mental">Salud Mental</option>
                                    <option value="CISFA">CISFA</option>
                                    <option value="Farmacia Ambulatoria">Farmacia Ambulatoria</option>
                                    <option value="INAI">INAI</option>
                                    <option value="Anatomía Patológica">Anatomía Patológica</option>
                                    <option value="Recepción">Recepción</option>
                                    <option value="Comedor">Comedor</option>
                                    <option value="Estacionamiento">Estacionamiento</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_unidadapoyo" style="display:none;">
                                <strong style="font-size: 12px;">Unidad de Apoyo PB</strong>
                                <select name="ambu_unidadapoyo" id="ambu_unidadapoyo" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Oncología">Oncología</option>
                                    <option value="Quimioterapia">Quimioterapia</option>
                                    <option value="Radioterapia">Radioterapia</option>
                                    <option value="Braquiterapia">Braquiterapia</option>
                                    <option value="Rehabilitación">Rehabilitación</option>
                                    <option value="Maxilofacial">Maxilofacial</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_piso1" style="display:none;">
                                <strong style="font-size : 12px;">Piso 1</strong>
                                <select name="ambu_piso1" id="ambu_piso1" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Clínica de Heridas">Clínica de Heridas</option>
                                    <option value="Clínica de Cateteres">Clínica de Cateteres</option>
                                    <option value="Clínica de la Mujer">Clínica de la Mujer</option>
                                    <option value="Signos Vitales">Signos Vitales</option>
                                    <option value="Consulta Externa">Consulta Externa</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_unidadapoyopiso1" style="display:none;">
                                <strong style="font-size: 12px;">Unidad de Apoyo Piso 1</strong>
                                <select name="ambu_unidadapoyo1" id="ambu_unidadapoyo1" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Endoscopía">Endoscopía</option>
                                    <option value="Electrodiágnostico">Electrodiágnostico</option>
                                    <option value="Hemodiálisis">Hemodiálisis</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_piso2" style="display:none;">
                                <strong style="font-size: 12px;">Piso 2</strong>
                                <select name="ambu_piso2" id="ambu_piso2" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Cardiología">Cardiología</option>
                                    <option value="Electrodiágnostico">Electrodiágnostico</option>
                                    <option value="Clínica del Dolor">Clínica del Dolor</option>
                                    <option value="Audiología">Audiología</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_piso3" style="display:none;">
                                <strong style="font-size: 12px;">Piso 3</strong>
                                <select name="ambu_piso3" id="ambu_piso3" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Inhaloterapia">Inhaloterapia</option>
                                    <option value="Area Administrativa">Area Administrativa</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_enseñanzapiso1" style="display:none;">
                                <strong style="font-size: 12px;">Enseñanza Piso 1</strong>
                                <select name="ambu_enseñanza1" id="ambu_enseñanza1" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Laboratorio Molecular">Laboratorio Molecular</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(157, 7, 7);
                color: aliceblue;
                margin-top:15px;
                font-size: 15px;
                text-align: center;">Notificación</h4>
                    </div>

                    <fieldset>
                        <legend>
                            <div class="container">

                                <div class="row">


                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Fecha de Notificación</strong>
                                        <input id="fecha_notificacion" name="fecha_notificacion" type="date" class="control form-control" value="" style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Fecha de Incidente</strong>
                                        <input id="fecha_incidente" name="fecha_incidente" type="date" class="control form-control" value="" style="font-size: 12px;">
                                    </div>

                                    <!-- <div class="col-md-6">
                        <strong style="font-size: 12px;">Num de Caso</strong>
                        <input type="number" class="control form-control" id="no_caso" placeholder="#" name="no_caso" value="" style="font-size: 12px;">
                    </div> -->



                                    <!-- <div class="col-md-6">
                        <strong style="font-size: 12px;">Medio de Notificación</strong>
                        <select name="Medio_notificacion" id="Medio_notificacion" class="form-select" style="font-size: 12px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="FVG">Farmacovigilancia</option>
                            <option value="S">Sinoi</option>
                            <option value="SS">Sistemas Saludness</option>
                            <option value="C">Codigos</option>
                            <option value="E">Epidemiología</option>
                            <option value="CT">Comites</option>
                            <option value="TV">Tecnovigilancia</option>
                            <option value="HV">Hemovigilancia</option>
                            <option value="BA">Búsqueda Activa</option>
                        </select>
                    </div> -->

                                    <div class="col-md-4">
                                        <!-- Div para el espacio entre campos. -->
                                    </div>

                                    <div class="col-md-12">
                                        <label for="descripcion" style="font-size: 12px; font-weight: bold;">Descripción del evento</label>
                                        <textarea name="descripcion" id="descripcion" class="form-control" style="font-size: 12px;"></textarea>
                                    </div>


                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Tipo del Evento</strong>
                                        <select name="Tipo_evento" id="Tipo_evento" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Cuasifalla">Cuasifalla</option>
                                            <option value="Evento Adverso">Evento Adverso</option>
                                            <option value="Centinela">Centinela</option>
                                            <option value="Riesgo de Infección">Riesgo de Infección</option>
                                            <option value="Incidente">Incidente</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6" id="tip_adverso" style="display:none;">
                                        <strong style="font-size: 12px;">Evento Adverso</strong>
                                        <select name="evento_tipoadv" id="evento_tipoadv" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Sin daño">Sin daño</option>
                                            <option value="Leve">Leve</option>
                                            <option value="Moderado">Moderado</option>
                                            <option value="Grave">Grave</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="tip_centinela" style="display:none;">
                                        <strong style="font-size: 12px;">Evento Centinela</strong>
                                        <select name="evento_tipocenti" id="evento_tipocenti" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Sin daño">Sin daño</option>
                                            <option value="Leve">Leve</option>
                                            <option value="Moderado">Moderado</option>
                                            <option value="Grave">Grave</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="info_familiar" style="display:none;">
                                        <strong style="font-size: 12px;">Se le brindo información al familiar</strong>
                                        <select name="infopx" id="infopx" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>



                                    <!-- <div class="col-md-2">
                        <strong style="font-size: 12px;">CISP</strong>
                        <input type="text" class="control form-control" id="CISP" name="CISP" value="" style="font-size: 12px;">
                    </div> -->

                                    <!-- <div class="col-md-2">
                        <strong style="font-size: 12px;">Proceso</strong>
                        <input type="text" class="control form-control" id="PROCESO" name="PROCESO" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Problema</strong>
                        <input type="text" class="control form-control" id="PROBLEMA" name="PROBLEMA" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">SREA</strong>
                        <input type="number" class="control form-control" id="SREA" name="SREA" value="" style="font-size: 12px;">
                    </div> -->

                                </div>

                            </div>
                        </legend>
                    </fieldset>


                    <!-- SEGUIMIENTO -->


                    <!-- SEGUIMIENTO -->


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(157, 7, 7);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Seguimiento</h4>
                    </div>

                    <fieldset>
                        <legend>
                            <div class="Container">
                                <div class="row">
                                    <div class="container">


                                        <fieldset>
                                            <legend>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="form-header">
                                                            <h4 class="form-title" style="text-align: left;
                                                            border-radius: 10px;
                                                            background-color: rgb(203, 0, 0);
                                                            color: aliceblue;
                                                            margin-top:15px;
                                                            font-size: 13px;
                                                            text-align: center;">Clasificación Internacional De Seguridad Del Paciente (CISP)</h4>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <strong style="font-size: 12px;">Tipo de incidente</strong>
                                                            <select name="tipo_incidente" id="tipo_incidente" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Administración clínica">Administración clínica</option>
                                                                <option value="Proceso/procedimiento clínico">Proceso/procedimiento clínico</option>
                                                                <option value="Documentación">Documentación</option>
                                                                <option value="Infección asociada a la atención sanitaria">Infección asociada a la atención sanitaria</option>
                                                                <option value="Sangre/productos sanguíneos">Sangre/productos sanguíneos</option>
                                                                <option value="Nutrición">Nutrición</option>
                                                                <option value="Oxígeno/gases/vapores">Oxígeno/gases/vapores</option>
                                                                <option value="Comportamiento">Comportamiento</option>
                                                                <option value="Accidentes de los pacientes">Accidentes de los pacientes</option>
                                                                <option value="Recursos/Gestión de la organización">Recursos/Gestión de la organización</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="container" id="admi_Clinica" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Proceso AC</strong>
                                                            <select name="Proceso_AC" id="Proceso_AC" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Relevo de equipo asistencial">Relevo de equipo asistencial</option>
                                                                <option value="Cita">Cita</option>
                                                                <option value="Lista de espera">Lista de espera</option>
                                                                <option value="Derivación/interconsulta">Derivación/interconsulta</option>
                                                                <option value="Ingreso">Ingreso</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Traspaso asistencial">Traspaso asistencial</option>
                                                                <option value="Respuesta a una urgencia">Respuesta a una urgencia</option>
                                                                <option value="Asignación de tareas">Asignación de tareas</option>
                                                                <option value="Consentimiento">Consentimiento</option>
                                                                <option value="Identificación del paciente">Identificación del paciente</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Problema Incidente AC</strong>
                                                            <select name="Problema_ac" id="Problema_ac" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="No se hizo cuando estaba indicado">No se hizo cuando estaba indicado</option>
                                                                <option value="Incompleto/inadecuado">Incompleto/inadecuado</option>
                                                                <option value="No disponible">No disponible</option>
                                                                <option value="Paciente erróneo">Paciente erróneo</option>
                                                                <option value="Proceso/servicio erróneo">Proceso/servicio erróneo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- PROCESO/PROCEDIMIENTO -->
                                                <div class="container" id="Proceso_procedimiento" style="display:none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Proceso (PC)</strong>
                                                            <select name="Proceso_PC" id="Proceso_PC" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Cribado/prevención/reconocimiento">Cribado/prevención/reconocimiento</option>
                                                                <option value="Sistemático">Sistemático</option>
                                                                <option value="Diagnóstico/evaluación">Diagnóstico/evaluación</option>
                                                                <option value="Procedimiento/tratamiento/intervención">Procedimiento/tratamiento/intervención</option>
                                                                <option value="Atención/tratamiento general">Atención/tratamiento general</option>
                                                                <option value="Análisis/pruebas">Análisis/pruebas</option>
                                                                <option value="Muestras/resultados">Muestras/resultados</option>
                                                                <option value="Confinamiento/restricción física">Confinamiento/restricción física</option>

                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Problema PC</strong>
                                                            <select name="Problema_PC" id="Problema_PC" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="No se hizo cuando estaba indicado">No se hizo cuando estaba indicado</option>
                                                                <option value="Incompleto/inadecuado">Incompleto/inadecuado</option>
                                                                <option value="No disponible">No disponible</option>
                                                                <option value="Paciente erróneo">Paciente erróneo</option>
                                                                <option value="Proceso/tratamiento/procedimiento erróneo">Proceso/tratamiento/procedimiento erróneo</option>
                                                                <option value="Parte/lado/lugar del cuerpo erróneo">Parte/lado/lugar del cuerpo erróneo</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Documentación -->

                                                <div class="container" id="Documentacion" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Tipo Documentación</strong>
                                                            <select name="tipo_Documentacion" id="tipo_Documentacion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Pedidos/solicitudes">Pedidos/solicitudes</option>
                                                                <option value="Hojas de evolución/historias clínicas/evaluaciones/interconsultas">Hojas de evolución/historias clínicas/evaluaciones/interconsultas</option>
                                                                <option value="Listas de comprobación">Listas de comprobación</option>
                                                                <option value="Formularios/certificados">Formularios/certificados</option>
                                                                <option value="Instrucciones/información/políticas/procedimientos/directrices">Instrucciones/información/políticas/procedimientos/directrices</option>
                                                                <option value="Etiquetas/adhesivos/pulseras de identificación/tarjetas">Etiquetas/adhesivos/pulseras de identificación/tarjetas</option>
                                                                <option value="Cartas/correos electrónicos/registros de comunicación">Cartas/correos electrónicos/registros de comunicación</option>
                                                                <option value="Informes/resultados/imágenes">Informes/resultados/imágenes</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Problema Documentación</strong>
                                                            <select name="Problema_Documentacion" id="Problema_Documentacion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Documento ausente o no disponible">Documento ausente o no disponible</option>
                                                                <option value="Demora en el acceso al documento">Demora en el acceso al documento</option>
                                                                <option value="Documento para un paciente erróneo o documento erróneo">Documento para un paciente erróneo o documento erróneo</option>
                                                                <option value="Documentación">Documentación</option>
                                                                <option value="Información del documento poco Clara/Ambigua/Ilegible/Incompleta">Información del documento poco Clara/Ambigua/Ilegible/Incompleta</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- INFECCION ASOCIADA A LA ATENCION  -->
                                                <div class="container" id="Documentacion_InfeccionSanitaria" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Tipo Organismo IAAS</strong>
                                                            <select name="tipo_OrganismoIAAS" id="tipo_OrganismoIAAS" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Bacteria">Bacteria</option>
                                                                <option value="Virus">Virus</option>
                                                                <option value="Hongo">Hongo</option>
                                                                <option value="Parásito">Parásito</option>
                                                                <option value="Protozoo">Protozoo</option>
                                                                <option value="Rickettsia">Rickettsia</option>
                                                                <option value="Prion">Prion</option>
                                                                <option value="Microorganismo causal no identificado">Microorganismo causal no identificado</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Lugar de la Infección</strong>
                                                            <select name="Lugar_infeccion" id="Lugar_infeccion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Torrente sanguíneo">Torrente sanguíneo</option>
                                                                <option value="Sitio quirúrgico">Sitio quirúrgico</option>
                                                                <option value="Absceso">Absceso</option>
                                                                <option value="Neumonía">Neumonía</option>
                                                                <option value="Cánulas intravasculares">Cánulas intravasculares</option>
                                                                <option value="Prótesis/sitio infectado">Prótesis/sitio infectado</option>
                                                                <option value="Sonda/drenaje urinario">Sonda/drenaje urinario</option>
                                                                <option value="Tejidos blandos">Tejidos blandos</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Sangre/productos sanguíneos -->

                                                <div class="container" id="Sangre_productos" style="display:none;">
                                                    <div class="row">


                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Sangre/Producto en Cuestión</strong>
                                                            <select name="cuestion_sangre" id="cuestion_sangre" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Productos celulares">Productos celulares</option>
                                                                <option value="Factores de la coagulación">Factores de la coagulación</option>
                                                                <option value="Albúmina/proteínas plasmáticas">Albúmina/proteínas plasmáticas</option>
                                                                <option value="Inmunoglobulinas">Inmunoglobulinas</option>

                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Proceso Uso Sangre/Producto En Cuestión</strong>
                                                            <select name="Proceso_sangre" id="Proceso_sangre" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Pruebas pretransfusionales">Pruebas pretransfusionales</option>
                                                                <option value="Prescripción">Prescripción</option>
                                                                <option value="Preparación/dispensación">Preparación/dispensación</option>
                                                                <option value="Distribución">Distribución</option>
                                                                <option value="Administración">Administración</option>
                                                                <option value="Conservación">Conservación</option>
                                                                <option value="Supervisión">Supervisión</option>
                                                                <option value="Presentación/Envasado">Presentación/Envasado</option>
                                                                <option value="Suministro/Pedido">Suministro/Pedido</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Problema Sangre/Producto En Cuestión</strong>
                                                            <select name="Problema_sangre" id="Problema_sangre" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Paciente erróneo">Paciente erróneo</option>
                                                                <option value="Sangre/producto sanguíneo erróneo">Sangre/producto sanguíneo erróneo</option>
                                                                <option value="Dosis o frecuencia errónea">Dosis o frecuencia errónea</option>
                                                                <option value="Cantidad errónea">Cantidad errónea</option>
                                                                <option value="Información/instrucciones de dispensación errónea">Información/instrucciones de dispensación errónea</option>
                                                                <option value="Contraindicación">Contraindicación</option>
                                                                <option value="Condiciones de conservación inadecuadas">Condiciones de conservación inadecuadas</option>
                                                                <option value="Omisión de medicamento o dosis">Omisión de medicamento o dosis</option>
                                                                <option value="Sangre/producto sanguíneo caducado">Sangre/producto sanguíneo caducado</option>
                                                                <option value="Efecto adverso">Efecto adverso</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Nutricion -->

                                                <div class="container" id="Nutricion" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Nutrición en Cuestión</strong>
                                                            <select name="Nutri_cuestion" id="Nutri_cuestion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Dieta general">Dieta general</option>
                                                                <option value="Dieta especial">Dieta especial</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Proceso de uso Nutrición</strong>
                                                            <select name="Proceso_nutricion" id="Proceso_nutricion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Prescripción/solicitud">Prescripción/solicitud</option>
                                                                <option value="Preparación/fabricación/cocinado">Preparación/fabricación/cocinado</option>
                                                                <option value="Suministro/pedido">Suministro/pedido</option>
                                                                <option value="Presentación">Presentación</option>
                                                                <option value="Dispensación/asignación">Dispensación/asignación</option>
                                                                <option value="Distribución">Distribución</option>
                                                                <option value="Administración">Administración</option>
                                                                <option value="Conservación">Conservación</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Problema En Nutrición</strong>
                                                            <select name="Problema_nutricion" id="Problema_nutricion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Paciente erróneo">Paciente erróneo</option>
                                                                <option value="Dieta errónea">Dieta errónea</option>
                                                                <option value="Cantidad errónea">Cantidad errónea</option>
                                                                <option value="Frecuencia errónea">Frecuencia errónea</option>
                                                                <option value="Consistencia errónea">Consistencia errónea</option>
                                                                <option value="Condiciones de conservación inadecuada">Condiciones de conservación inadecuada</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Oxígeno/gases/vapores -->

                                                <div class="container" id="oxigeno_gasesVapores" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Oxígeno/Gases/Vapores</strong>
                                                            <input id="oxigeno" name="oxigeno" type="text" class="control form-control" value="" style="font-size: 12px;">
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Proceso de uso de O2/Gases/Vapores</strong>
                                                            <select name="Proceso_O2" id="Proceso_O2" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Etiquetado de la botella/código de colores/estribo de seguridad">Etiquetado de la botella/código de colores/estribo de seguridad</option>
                                                                <option value="Prescripción">Prescripción</option>
                                                                <option value="Administración">Administración</option>
                                                                <option value="Distribución">Distribución</option>
                                                                <option value="Suministro/pedido">Suministro/pedido</option>
                                                                <option value="Conservación">Conservación</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Problema O2/Gases/Vapores</strong>
                                                            <select name="Problema_gases" id="Problema_gases" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Paciente erróneo">Paciente erróneo</option>
                                                                <option value="Gas/vapor erróneo">Gas/vapor erróneo</option>
                                                                <option value="Velocidad/concentración/caudal erróneo">Velocidad/concentración/caudal erróneo</option>
                                                                <option value="Modo de administración erróneo">Modo de administración erróneo</option>
                                                                <option value="Contraindicación">Contraindicación</option>
                                                                <option value="Condiciones de conservación inadecuadas">Condiciones de conservación inadecuadas</option>
                                                                <option value="Ausencia de administración">Ausencia de administración</option>
                                                                <option value="Contaminación">Contaminación</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- COMPORTAMIENTO -->

                                                <div class="container" id="Comportamiento" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Comportamiento del Personal</strong>
                                                            <select name="Comportamiento_personal" id="Comportamiento_personal" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Incumplidor/no colaborador/obstructivo">Incumplidor/no colaborador/obstructivo</option>
                                                                <option value="Desconsiderado/grosero/hostil/inapropiado">Desconsiderado/grosero/hostil/inapropiado</option>
                                                                <option value="Arriesgado/imprudente/peligroso">Arriesgado/imprudente/peligroso</option>
                                                                <option value="Problema de uso/abuso de sustancias">Problema de uso/abuso de sustancias</option>
                                                                <option value="Acoso">Acoso</option>
                                                                <option value="Discriminación/prejuicio">Discriminación/prejuicio</option>
                                                                <option value="Vagabundeo/fugas">Vagabundeo/fugas</option>
                                                                <option value="Autolesión deliberada/suicidio">Autolesión deliberada/suicidio</option>
                                                                <option value="Agresión verbal">Agresión verbal</option>
                                                                <option value="Agresión física">Agresión física</option>
                                                                <option value="Agresión sexual">Agresión sexual</option>
                                                                <option value="Agresión a objeto inanimado">Agresión a objeto inanimado</option>
                                                                <option value="Amenaza de muerte">Amenaza de muerte</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Comportamiento del Paciente</strong>
                                                            <select name="Comportamiento_paciente" id="Comportamiento_paciente" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Incumplidor/no colaborador/obstructivo">Incumplidor/no colaborador/obstructivo</option>
                                                                <option value="Desconsiderado/grosero/hostil/inapropiado">Desconsiderado/grosero/hostil/inapropiado</option>
                                                                <option value="Arriesgado/imprudente/peligroso">Arriesgado/imprudente/peligroso</option>
                                                                <option value="Problema de uso/abuso de sustancias">Problema de uso/abuso de sustancias</option>
                                                                <option value="Acoso">Acoso</option>
                                                                <option value="Discriminación/prejuicio">Discriminación/prejuicio</option>
                                                                <option value="Vagabundeo/fugas">Vagabundeo/fugas</option>
                                                                <option value="Autolesión deliberada/suicidio">Autolesión deliberada/suicidio</option>
                                                                <option value="Agresión verbal">Agresión verbal</option>
                                                                <option value="Agresión física">Agresión física</option>
                                                                <option value="Agresión sexual">Agresión sexual</option>
                                                                <option value="Agresión a objeto inanimado">Agresión a objeto inanimado</option>
                                                                <option value="Amenaza de muerte">Amenaza de muerte</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>


                                                <!-- Accidentes de los pacientes -->
                                                <div class="container" id="AccidentesPacientes" style="display:none;">
                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Accidentes Por Fuerza No Penetrante</strong>
                                                            <select name="aacidentes_fuerzaNoPenetrante" id="aacidentes_fuerzaNoPenetrante" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Contacto con objeto o animal">Contacto con objeto o animal</option>
                                                                <option value="Contacto con persona">Contacto con persona</option>
                                                                <option value="Exposición A gravedad baja">Exposición a gravedad baja</option>
                                                                <option value="Aplastamiento">Aplastamiento</option>
                                                                <option value="Abrasión/ROCE">Abrasión/ROCE</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Fuerza Punzante/Penetrante</strong>
                                                            <select name="Fuerza_Punzante" id="Fuerza_Punzante" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Rasguño/corte/desgarro/sección">Rasguño/corte/desgarro/sección</option>
                                                                <option value="Pinchazo/herida punzante">Pinchazo/herida punzante</option>
                                                                <option value="Mordedura/picadura/inoculación de veneno de animal">Mordedura/picadura/inoculación de veneno de animal</option>
                                                                <option value="Otra fuerza punzante/penetrante especificada">Otra fuerza punzante/penetrante especificada</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Otra Fuerza Mecánica</strong>
                                                            <select name="Otra_fuerza" id="Otra_fuerza" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Afectado por una Explosión">Afectado por una Explosión</option>
                                                                <option value="Contacto con Maquinaria">Contacto con Maquinaria</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Mecanismo Térmico </strong>
                                                            <select name="Mecanismo_termino" id="Mecanismo_termino" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Calor excesivo/fuego">Calor excesivo/fuego</option>
                                                                <option value="Frío excesivo/congelación">Frío excesivo/congelación</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Amenaza a la Respiración</strong>
                                                            <select name="AmenazaRespi" id="AmenazaRespi" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Amenaza mecánica para la respiración">Amenaza mecánica para la respiración</option>
                                                                <option value="Ahogamiento/cuasi ahogamiento">Ahogamiento/cuasi ahogamiento</option>
                                                                <option value="Reclusión en lugar con falta de oxígeno">Reclusión en lugar con falta de oxígeno</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Exposición A Productos Químicos</strong>
                                                            <select name="Productos_quimicos" id="Productos_quimicos" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Intoxicación por producto químico u otra sustancia">Intoxicación por producto químico u otra sustancia</option>
                                                                <option value="Corrosión por producto químico u otra sustancia">Corrosión por producto químico u otra sustancia</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Otros Mecanismos de Lesión</strong>
                                                            <select name="mecanismo_lesion" id="mecanismo_lesion" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Exposición a electricidad/radiación">Exposición a electricidad/radiación</option>
                                                                <option value="Exposición a sonido/vibración">Exposición a sonido/vibración</option>
                                                                <option value="Exposición a presión de aire">Exposición a presión de aire</option>
                                                                <option value="Exposición a gravedad baja">Exposición a gravedad baja</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Exposición A Fenómenos Meteorológicos, Catástrofes, Etc</strong>
                                                            <select name="fenomenos" id="fenomenos" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="huracan">Huracán</option>
                                                                <option value="tornado">Tornado</option>
                                                                <option value="terremoto">Terremoto</option>
                                                                <option value="inundacion">Inundación</option>
                                                                <option value="sequía">Sequía</option>
                                                                <option value="deslizamiento">Deslizamiento de tierra</option>
                                                                <option value="erupcion">Erupción volcánica</option>
                                                                <option value="tormenta">Tormenta eléctrica</option>
                                                                <option value="granizo">Granizo</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <strong style="font-size: 12px;">Caídas</strong>
                                                            <select name="Caidas" id="Caidas" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="container" id="caidas_tipo" style="display:none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Tipo de Caída</strong>
                                                            <select name="TipoCaidas" id="TipoCaidas" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Tropezón/Traspié">Tropezón/Traspié</option>
                                                                <option value="Resbalón">Resbalón</option>
                                                                <option value="Desmayo">Desmayo</option>
                                                                <option value="Pérdida de equilibrio">Pérdida de equilibrio</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <strong style="font-size: 12px;">Elemento Implicado en la Caída</strong>
                                                            <select name="ElementoCaidas" id="ElementoCaidas" class="form-select" style="font-size: 12px;">
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Seleccione">Seleccione</option>
                                                                <option value="Cuna">Cuna</option>
                                                                <option value="Cama">Cama</option>
                                                                <option value="Silla">Silla</option>
                                                                <option value="Camilla">Camilla</option>
                                                                <option value="Inodoro">Inodoro</option>
                                                                <option value="Equipo Terapéutico">Equipo Terapéutico</option>
                                                                <option value="Escaleras/Escalones">Escaleras/Escalones</option>
                                                                <option value="Transporte/Sujeción por otra persona">Transporte/Sujeción por otra persona</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>


                                                <!-- Recursos/gestión de la organización -->

                                                <div class="col-md-12" id="Gestion_recursos" style="display:none;">
                                                    <strong style="font-size: 12px;">Recursos/Gestión de la Organización</strong>
                                                    <select name="Recursos_Gestion" id="Recursos_Gestion" class="form-select" style="font-size: 12px;">
                                                        <option value="Seleccione">Seleccione</option>
                                                        <option value="Adaptación de la gestión de la carga de trabajo">Adaptación de la gestión de la carga de trabajo</option>
                                                        <option value="Disponibilidad/idoneidad de camas/servicios">Disponibilidad/idoneidad de camas/servicios</option>
                                                        <option value="Disponibilidad/idoneidad de recursos humanos/personal">Disponibilidad/idoneidad de recursos humanos/personal</option>
                                                        <option value="Disponibilidad/Idoneidad de">Disponibilidad/Idoneidad de</option>
                                                        <option value="Protocolos/Políticas/Procedimientos/Directrices de Protocolos Etc">Protocolos/Políticas/Procedimientos/Directrices de Protocolos Etc</option>
                                                    </select>
                                                </div>



                                        </fieldset>
                        </legend>
                </div>




                <div class="col-md-12"></div><br>

                <div class="container">
                    <fieldset>
                        <legend>
                            <div class="row">

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color:  rgb(203, 0, 0);
                                        color: aliceblue;
                                        margin-top:13px;
                                        font-size: 13px;
                                        text-align: center;">Resultados para el paciente</h4>
                                </div>

                                <div class="col-md-12" id="GradoDaño">
                                    <strong style="font-size: 12px;">Grado del Daño</strong>
                                    <select id="Dañop_grado" name="Dañop_grado" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Ninguno">Ninguno</option>
                                        <option value="Leve">Leve</option>
                                        <option value="Moderado">Moderado</option>z
                                        <option value="Grave">Grave</option>
                                        <option value="Muerte">Muerte</option>
                                    </select>
                                </div>

                            </div>
                        </legend>
                    </fieldset>
                </div>

                <div class="row"></div> <br>

                <div class="container">
                    <fieldset>
                        <legend>
                            <div class="row">
                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                                border-radius: 10px;
                                                background-color:  rgb(203, 0, 0);
                                                color: aliceblue;
                                                margin-top:13px;
                                                font-size: 13px;
                                                text-align: center;">Resultados para la Organización</h4>
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Resultados para la Organización</strong>
                                    <select id="resultados_organizacion" name="resultados_organizacion" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Daños a bienes">Daños a bienes</option>
                                        <option value="Aumento de los recursos asignados al paciente">Aumento de los recursos asignados al paciente</option>
                                        <option value="Atención de los medios de comunicación">Atención de los medios de comunicación</option>
                                        <option value="Reclamación formal">Reclamación formal</option>
                                        <option value="Perjuicio para la reputación ">Perjuicio para la reputación </option>
                                        <option value="Consecuencias jurídicas">Consecuencias jurídicas</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                                <div class="col-md-6" id="AumentoRecursosPX" style="display:none;">
                                    <strong style="font-size: 12px;">Aumento de los recursos asignados al paciente</strong>
                                    <select id="pxAumentoRecursos" name="pxAumentoRecursos" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Prolongación de la estancia">Prolongación de la estancia</option>
                                        <option value="Ingreso en una zona de atención especial">Ingreso en una zona de atención especial</option>
                                        <option value="Tratamientos/pruebas suplementarias">Tratamientos/pruebas suplementarias</option>
                                        <option value="Alteración del flujo de trabajo/demoras para otros pacientes">Alteración del flujo de trabajo/demoras para otros pacientes</option>
                                        <option value="Necesidad de más personal">Necesidad de más personal</option>
                                        <option value="Necesidad de más equipos">Necesidad de más equipos</option>
                                    </select>
                                </div>

                            </div>

                </div>
                </legend>
                </fieldset>
            </div>

        </div>

        </legend>
        </fieldset>



        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color: rgb(157, 7, 7);
                                        color: aliceblue;
                                        margin-top:13px;
                                        font-size: 13px;
                                        text-align: center;">Validación</h4>
        </div>
        <fieldset>
            <legend>
                <div class="container">

                    <div class="row">

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">No. Caso</strong>
                            <input id="no_caso" name="no_caso" type="text" class="control form-control" value="" style="font-size: 12px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Validación del Evento</strong>
                            <select name="Val_evento" id="Val_evento" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Cuasifalla">Cuasifalla</option>
                                <option value="Evento Adverso">Evento Adverso</option>
                                <option value="Centinela">Centinela</option>
                                <option value="Riesgo de Infección">Riesgo de Infección</option>
                                <option value="Incidente">Incidente</option>
                                <option value="No aplica">No aplica</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <strong style="font-size: 12px;">Evidencia</strong>
                            <select id="Evidencia" name="Evidencia" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="tipo_adverso" style="display:none;">
                            <strong style="font-size: 12px;">Evento Adverso</strong>
                            <select name="evento_adversoseg" id="evento_adversoseg" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Sin daño">Sin daño</option>
                                <option value="Leve">Leve</option>
                                <option value="Moderado">Moderado</option>
                                <option value="Grave">Grave</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="analisis_event" style="display:none;">
                            <strong style="font-size: 12px;">Análisis</strong>
                            <select name="evento_analisis" id="evento_analisis" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Analisis_cr" style="display:none;">
                            <strong style="font-size: 12px;">Análisis C-R</strong>
                            <select name="analisis" id="analisis" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="No_porque" style="display:none;">
                            <strong style="font-size: 12px;">¿Por qué?</strong>
                            <select name="No_porque_select" id="No_porque_select" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Se descarta EA">Se descarta EA</option>
                                <option value="No recolección de información">No recolección de información</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="resultado_centi" style="display:none;">
                            <label for="respuesta_eve" style="font-size: 12px; font-weight: bold;">Resultado</label>
                            <textarea name="respuesta_eve" id="respuesta_eve" class="form-control" style="font-size: 12px;"></textarea>
                        </div>



                        <div class="container" id="validacion_segui" style="display:none;">
                            <div class="row">


                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">No. Oficio</strong>
                                    <input id="no_oficio" name="no_oficio" type="text" class="control form-control" value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Fecha de Envio</strong>
                                    <input id="fecha_Envio" name="fecha_Envio" type="date" class="control form-control" value="" style="font-size: 12px;">
                                </div>
                            </div>



                            <div class="col-md-3" id="segui_respuesVal" style="display:none;">
                                <strong style="font-size: 12px;">Respuesta</strong>
                                <select name="respuesta" id="respuesta" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <!-- 
            <div class="col-md-3">
                <strong style="font-size: 12px;">Fecha de Respuesta</strong>
                <input id="fecha_respuesta" name="fecha_respuesta" type="date" class="control form-control" value="" style="font-size: 12px;">
            </div> -->
                        </div>
                    </div>

                    <div class="container" id="respuesta_tipo" style="display:none;">
                        <div class="row">

                            <div class="col-md-4">
                                <strong style="font-size: 12px;">Corto Plazo</strong>
                                <select id="Corto" name="Corto" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-8" id="desc_corto" style="display:none;">
                                <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción de Respuesta Corto Plazo</label>
                                <textarea name="corto_descrip" id="corto_descrip" class="form-control" style="font-size: 12px;"></textarea>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 12px;">Mediano Plazo</strong>
                                <select id="Mediano" name="Mediano" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-8" id="desc_mediano" style="display:none;">
                                <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción de Respuesta Mediano Plazo</label>
                                <textarea name="Mediano_descrip" id="Mediano_descrip" class="form-control" style="font-size: 12px;"></textarea>
                            </div>


                            <div class="col-md-4">
                                <strong style="font-size: 12px;">Largo Plazo</strong>
                                <select id="Largo" name="Largo" class="form-select" style="font-size: 12px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-8" id="desc_largo" style="display:none;">
                                <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción de Respuesta Largo Plazo</label>
                                <textarea name="largo_descrip" id="largo_descrip" class="form-control" style="font-size: 12px;"></textarea>
                            </div>

                        </div>
                    </div>

                </div>


            </legend>
        </fieldset>


        <!-- 
            <div class="col-md-6">
                <strong style="font-size: 12px;">Seguimiento</strong>
                <input id="Seguimiento_seg" name="Seguimiento_seg" type="text" class="control form-control" value="" style="font-size: 12px;">
            </div>

           -->


        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(157, 7, 7);
                            color: aliceblue;
                            margin-top:13px;
                            font-size: 13px;
                            text-align: center;">Evitabilidad</h4>

        </div>


        <fieldset>
            <legend>
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">
                            <strong style="font-size: 12px;">Era Evitable</strong>
                            <select id="Evitabilidad" name="Evitabilidad" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>


                        <div class="container">
                            <strong style="font-size: 12px;">Factores del Incidente</strong> <br>

                            <fieldset>
                                <legend>

                                    <div class="row"> <!-- DIV DE ROW DEL FACTOR DE RIESGO-->

                                        <div class="col-md-4">
                                            <input type="checkbox" name="CaracteristicasPaciente" id="CaracteristicasPaciente" value="Relacionados Con Las Características Del Paciente." style="font-size:12px;">
                                            <label for="CaracteristicasPaciente" style="font-size:12px;">Relacionados Con Las Características Del Paciente</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="IndividualesEquipo" id="IndividualesEquipo" value="Individuales Asociadas Con Los Integrantes Del Equipo." style="font-size: 12px;">
                                            <label for="IndividualesEquipo" style="font-size: 12px;">Individuales Asociadas Con Los Integrantes Del Equipo</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="TrabajoEquipo" id="TrabajoEquipo" value="Relacionados Con El Trabajo En Equipo." style="font-size: 12px;">
                                            <label for="TrabajoEquipo" style="font-size: 12px;">Relacionados Con El Trabajo En Equipo</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="AmbienteTrabajo" id="AmbienteTrabajo" value="Relacionados Con El Ambiente De Trabajo Y El Entorno." style="font-size: 12px;">
                                            <label for="AmbienteTrabajo" style="font-size: 12px;">Relacionados Con El Ambiente De Trabajo Y El Entorno</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="OrganizacionalesEstablecimiento" id="OrganizacionalesEstablecimiento" value="Organizacionales Del Establecimiento De Atención Médica." style="font-size: 12px;">
                                            <label for="OrganizacionalesEstablecimiento" style="font-size: 12px;">Organizacionales Del Establecimiento De Atención Médica</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="InstitucionalesExternos" id="InstitucionalesExternos" value="Institucionales O Del Ambiente Externo." style="font-size: 12px;">
                                            <label for="InstitucionalesExternos" style="font-size: 12px;">Institucionales O Del Ambiente Externo</label>
                                        </div>


                                        <div class="col-md-4">
                                            <input type="checkbox" name="Otro" id="Otro" value="Otro" style="font-size: 12px;">
                                            <label for="Otro" style="font-size: 12px;">Otro</label>
                                        </div>


                                        <div class="col-md-8">
                                            <input type="checkbox" name="AplicacionIndicaciones" id="AplicacionIndicaciones" value="Relacionados Con La Aplicación De Las Indicaciones, Protocolos, Manuales, Lineamientos Y Guías De Práctica Clínica." style="font-size: 12px;">
                                            <label for="AplicacionIndicaciones" style="font-size: 12px;">Relacionados Con La Aplicación De Las Indicaciones, Protocolos, Manuales, Lineamientos Y Guías De Práctica Clínica</label>
                                        </div>

                                    </div>
                                </legend>
                            </fieldset>
                        </div>

                    </div>
                </div>
            </legend>
        </fieldset>




        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color: rgb(157, 7, 7);
                                        color: aliceblue;
                                        margin-top:13px;
                                        font-size: 13px;
                                        text-align: center;">Registro</h4>
        </div>

        <fieldset>
            <legend>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <strong style="font-size: 12px;">SREA</strong>
                            <input id="SREA_seg" name="SREA_seg" type="number" class="control form-control" value="" style="font-size: 12px;">
                        </div>

                        <div class="col-md-12">
                            <strong style="font-size: 12px;">Estatus</strong>
                            <select id="estatus" name="estatus" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Solo Detectado">Solo Detectado</option>
                                <option value="No hay respuesta">No hay respuesta</option>
                                <option value="Respuesta">Respuesta</option>
                                <option value="Seguimiento">Seguimiento</option>
                                <option value="Cerrado Caso">Cerrado Caso</option>
                            </select>
                        </div>

                    </div>
                </div>
            </legend>
        </fieldset>

    </div><br>

    <div style="display: flex; justify-content: flex-end; align-items: center;">
        <button type="submit" class="btn btn-primary" style="font-size: 14px; padding: 6px 14px;">Editar</button>
    </div><br>

    </div>






    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/scripteditar.js"></script>



</body>

</html>