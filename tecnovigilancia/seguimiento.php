<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Seguimiento</title>
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
        <!-- ======================== AQUI INICIA  ======================== -->
        <h5>Seguimiento</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="container">

        <fieldset>
            <legend>

                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(76, 126, 134);
                color: aliceblue;
                margin-top:c15px;
                font-size: 15px;
                text-align: center;">Datos Generales</h4>
                </div>

                <div class="container">
                    <fieldset>
                        <legend>


                            <div class="row">

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Nombre del Paciente</strong>
                                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>


                                <div class="col-md-3">
                                    <strong style="font-size: 12PX; ">Fecha de Nacimiento</strong>
                                    <input id="fecha" name="fecha" type="date" value="" class="control form-control" style="font-size: 12px;">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 12PX;">Edad</strong>
                                    <input id="edad" name="edad" type="number" class="control form-control" value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-2">
                                    <strong style="font-size: 12PX;">Sexo</strong>
                                    <input type="text" class="control form-control" id="sexo" name="sexo" style="font-size: 12px;">
                                </div>



                                <div class="col-md-4">
                                    <strong style="font-size: 12px; ">Cama</strong>
                                    <input id="cama" name="cama" type="text" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Servicio</strong>
                                    <select name="servicio" id="servicio" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Imagen">Imagen</option>
                                        <option value="Laboratorio">Laboratorio</option>
                                        <option value="Patología">Patología</option>
                                        <option value="Urgencias">Urgencias</option>
                                        <option value="Banco De Sangre">Banco De Sangre</option>
                                        <option value="Quimioterapia">Quimioterapia</option>
                                        <option value="Radioterapia">Radioterapia</option>
                                        <option value="Braquiterapia">Braquiterapia</option>
                                        <option value="Rehabilitación">Rehabilitación</option>
                                        <option value="Endoscopia">Endoscopia</option>
                                        <option value="Cirugía Ambulatoria">Cirugía Ambulatoria</option>
                                        <option value="Hemodiálisis">Hemodiálisis</option>
                                        <option value="Hematología">Hematología</option>
                                        <option value="Hospitalización Pediatría">Hospitalización Pediatría</option>
                                        <option value="Hospitalización 2do Piso">Hospitalización 2do Piso</option>
                                        <option value="Hospitalización 3er Piso">Hospitalización 3er Piso</option>
                                        <option value="Hospitalización 4to Piso">Hospitalización 4to Piso</option>
                                        <option value="Gineco-Obstetricia">Gineco-Obstetricia</option>
                                        <option value="Clínica De Heridas">Clínica De Heridas</option>
                                        <option value="Clínica De Catéteres">Clínica De Catéteres</option>
                                        <option value="Quirófano">Quirófano</option>
                                        <option value="Clínica Del Dolor">Clínica Del Dolor</option>
                                        <option value="Hemodinamia">Hemodinamia</option>
                                        <option value="Inhaloterapia">Inhaloterapia</option>
                                        <option value="UTIP">UTIP</option>
                                        <option value="UTIHP">UTIHP</option>
                                        <option value="UCIN">UCIN</option>
                                        <option value="UTIN">UTIN</option>
                                        <option value="UCIA">UCIA</option>
                                        <option value="UTIA">UTIA</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Piso</strong>
                                    <select name="Piso" id="Piso" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>



                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Turno</strong>
                                    <select name="Turno" id="Turno" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Jornada Especial">Jornada Especial</option>
                                        <option value="Matutino">Matutino</option>
                                        <option value="Vespertino">Vespertino</option>
                                        <option value="Nocturno">Nocturno</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px; ">Personal que Reporta</strong>
                                    <input id="personalReporta" name="personalReporta" type="text" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Cargo</strong>
                                    <select name="Cargo" id="Cargo" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Medico ">Medico </option>
                                        <option value="Enfermería">Enfermería</option>
                                        <option value="Auxiliar ">Auxiliar </option>
                                        <option value="Técnico ">Técnico </option>
                                        <option value="Personal En Formación">Personal En Formación</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>


                                <div class="col-md-4" id="personal_Otro">
                                    <strong style="font-size: 12px;">Otro</strong>
                                    <input id="personotro" name="personotro" type="text" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>




                            </div>

                        </legend>
                    </fieldset>

                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Notificación</h4>
                </div>
                <div class="container">
                    <fieldset>
                        <legend>

                            <div class="row">

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Fecha de notificación</strong>
                                    <input id="fecha_notificacion" name="fecha_notificacion" type="date" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Fecha de Incidente</strong>
                                    <input id="fecha_incidente" name="fecha_incidente" type="date" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px; ">Dispositivo M. Involucrado</strong>
                                    <input id="medicamento_sospechoso" name="medicamento_sospechoso" type="text" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>

                                <div class="col-md-12">
                                    <strong style="font-size: 12px;">Descripción del Incidente</strong>
                                    <textarea id="descripcion_error" name="descripcion_error" type="text" class="control form-control" value=""
                                        style="font-size: 12px;"
                                        placeholder="Describa el Incidente"></textarea>
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Tipo de Evento</strong>
                                    <select name="tipo_evento" id="tipo_evento" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Incidente">Incidente</option>
                                        <option value="Incidente Adverso">Incidente Adverso</option>
                                        <option value="Incidente Adverso Previsto">Incidente Adverso Previsto</option>
                                        <option value="Incidente Adverso Imprevisto">Incidente Adverso Imprevisto</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Momento del Incidente</strong>
                                    <select name="momento_incidente" id="momento_incidente" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Antes">Antes</option>
                                        <option value="Durante">Durante</option>
                                        <option value="Después">Después</option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Afectación del Personal de Salud </strong>
                                    <select name="afectacion_personal" id="afectacion_personal" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>


                                <div class="col-md-6" id="daño">
                                    <strong style="font-size: 12px;">Daño Generado</strong>
                                    <select name="Daño_generado" id="Daño_generado" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Muerte">Muerte </option>
                                        <option value=" Intervención Médica O Quirúrgica"> Intervención Médica O Quirúrgica</option>
                                        <option value="Daño De Una Función O Estructura Corporal">Daño De Una Función O Estructura Corporal</option>
                                        <option value="Hospitalización Inicial O Prolongada">Hospitalización Inicial O Prolongada</option>
                                        <option value="Enfermedad O Daño Que Amenace La Vida">Enfermedad O Daño Que Amenace La Vida</option>
                                        <option value="No Hubo Daño O Lesión">No Hubo Daño O Lesión</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>

                                <div class="col-md-4" id="dañogenerado_Otro">
                                    <strong style="font-size: 12px;">Otro</strong>
                                    <input id="generadootro_daño" name="generadootro_daño" type="text" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>


                                <!-- <div class="col-md-6">
                                    <strong style="font-size: 12px;">Evitable</strong>
                                    <select name="" id="" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div> -->













                                <div class="col-md-4">
                                    <!-- Div para el espacio entre campos. -->
                                </div>

                            </div>
                        </legend>
                    </fieldset>
                </div>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(38, 41, 60); 
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">CISP</h4>
                </div>



                <div class="row">

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Fecha de Seguimiento</strong>
                        <input id="fecha_seguimiento" name="fecha_seguimiento" type="date" class="control form-control"
                            value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Dispositivo Médico Involucrado</strong>
                        <select name="dispositivo_select" id="dispositivo_select" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="row" id="select_dispositivomedico" style="display: none;">

                        <div class="col-md-6">
                            <strong style="font-size: 12px;">Nombre del Dispositivo Médico</strong>
                            <input type="text" class="control form-control" id="Nombre_dispositivo" name="Nombre_dispositivo" style="font-size: 12px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 12px;">ID del Dispositivo</strong>
                            <input id="ClaveHRAEI" name="ClaveHRAEI" type="text" class="control form-control" style="font-size: 12px;">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">No.Lote</strong>
                            <input type="text" class="control form-control" id="no_lote" name="no_lote" style="font-size: 12px;">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">No.Serie</strong>
                            <input type="text" class="control form-control" id="no_serie" name="no_serie" style="font-size: 12px;">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Registro Sanitario</strong>
                            <input type="text" class="control form-control" id="registro_sanitario" name="registro_sanitario" style="font-size: 12px;">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">No.Inventario</strong>
                            <input type="text" class="control form-control" id="no_inventario" name="no_inventario" style="font-size: 12px;">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Marca</strong>
                            <input type="text" class="control form-control" id="marca" name="marca" style="font-size: 12px;">
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Fecha de Caducidad</strong>
                            <input type="date" class="control form-control" id="fecha_caducidad" name="fecha_caducidad" style="font-size: 12px;">
                        </div>

                    </div>


                    <div class="col-md-6 semaforo-container">
                        <strong style="font-size: 12px;">Alertas Cofepris</strong>
                        <select name="alerta_cofrepris" id="alerta_cofrepris" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <div class="col-md-6 semaforo">
                            <div id="circle-red" class="circle red"></div>
                            <div id="circle-yellow" class="circle yellow"></div>
                            <div id="circle-green" class="circle green"></div>
                        </div>
                    </div>



                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Clasificación del Incidente</h4>
                    </div>




                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178,0.5);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Categoria de Uso</h4>
                    </div>


                    <div class="col-md-1"></div>

                    <div class="col-md-9" id="factores_Dispositivocategoria">

                        <div class="form-header">
                            <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(121, 173, 220);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Factores de Dispositivo</h4>
                        </div>




                        <fieldset>
                            <legend>
                                <div class="row">


                                    <div class="col-md-4">
                                        <input type="checkbox" name="agentes_diagnostico" id="agentes_diagnostico" value="Agentes Del Diagnostico" style="font-size:12px;">
                                        <label for="agentes_diagnostico" style="font-size:12px;">Agentes Del Diagnostico</label>

                                        <div class="col-md-6" id="Agentesinvasivos_diagnostico" style="display:none;">
                                            <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                                            <select name="tipo_diagnostico" id="tipo_diagnostico" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Invasivo">Invasivo</option>
                                                <option value="No Invasivo">No Invasivo</option>
                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-md-4">
                                        <input type="checkbox" name="equipo_medico" id="equipo_medico" value="Equipo Medico" style="font-size: 12px;">
                                        <label for="equipo_medico" style="font-size: 12px;">Equipo Medico</label>

                                        <div class="col-md-6" id="Equipo_invasivos_medico" style="display:none;">
                                            <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                                            <select name="tipo_diagnostico_medico" id="tipo_diagnostico_medico" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Invasivo">Invasivo</option>
                                                <option value="No Invasivo">No Invasivo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox" name="protesis_ortesis" id="protesis_ortesis" value="Prótesis, Ortesis Y Ayudas Funcionales" style="font-size: 12px;">
                                        <label for="protesis_ortesis" style="font-size: 12px;">Prótesis, Ortesis Y Ayudas Funcionales</label>

                                        <div class="col-md-6" id="Protesis_invasivos_ortesis" style="display:none;">
                                            <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                                            <select name="tipo_diagnostico_ortesis" id="tipo_diagnostico_ortesis" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Invasivo">Invasivo</option>
                                                <option value="No Invasivo">No Invasivo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox" name="insumos_odonto" id="insumos_odonto" value="Insumos De Uso Odontológico" style="font-size:12px;">
                                        <label for="insumos_odonto" style="font-size:12px;">Insumos De Uso Odontológico</label>

                                        <div class="col-md-6" id="Insumos_invasivos_odonto" style="display:none;">
                                            <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                                            <select name="tipo_diagnostico_odonto" id="tipo_diagnostico_odonto" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Invasivo">Invasivo</option>
                                                <option value="No Invasivo">No Invasivo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox" name="materiales_quirurgicos" id="materiales_quirurgicos" value="Materiales Quirúrgicos Y De Curación" style="font-size:12px;">
                                        <label for="materiales_quirurgicos" style="font-size:12px;">Materiales Quirúrgicos Y De Curación</label>

                                        <div class="col-md-6" id="Materiales_invasivos_quirurgicos" style="display:none;">
                                            <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                                            <select name="tipo_diagnostico_quirurgico" id="tipo_diagnostico_quirurgico" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Invasivo">Invasivo</option>
                                                <option value="No Invasivo">No Invasivo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox" name="productos_higienicos" id="productos_higienicos" value="Productos Higiénicos" style="font-size:12px;">
                                        <label for="productos_higienicos" style="font-size:12px;">Productos Higiénicos</label>

                                        <div class="col-md-6" id="Productos_invasivos_higienicos" style="display:none;">
                                            <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                                            <select name="tipo_diagnostico_higienicos" id="tipo_diagnostico_higienicos" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Invasivo">Invasivo</option>
                                                <option value="No Invasivo">No Invasivo</option>
                                            </select>
                                        </div>
                                    </div>



                                </div>
                            </legend>
                        </fieldset>
                        <br>
                    </div>


                    <div class="col-md-12">
                        <strong style="font-size: 12px;">Nivel de Riesgo Sanitario</strong>
                        <select name="Nivel_riesgoSanitario" id="Nivel_riesgoSanitario" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="CLASE I">"CLASE I.Insumos conocidos, seguridad y eficacia comprobada, no se introducen en el organismo"</option>
                            <option value="CLASE II">"CLASE II.Insumos conocidos, pueden tener variaciones en el material con el que están elaborados o en su concentración, introducción al organismo -30 días."</option>
                            <option value="CLASE III">"CLASE III.Insumos nuevos o recientemente aceptados, se introducen al organismo y permanecen +30 días"</option>
                        </select>
                    </div>


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 174,0.4);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Reglas de Clasificación</h4>
                    </div>


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 174,0.4);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Factores del Incidente</h4>
                    </div>

                    <div class="col-md-12 row">

                        <div class="col-md-2">

                        </div>

                        <div class="col-md-3">
                            <input type="checkbox" name="factor_dispositivo" id="factor_dispositivo" value="Factores de Dispositivo" style="font-size:12px;">
                            <label for="factor_dispositivo" style="font-size:12px;">Factores de Dispositivo</label>
                        </div>

                        <div class="col-md-3">
                            <input type="checkbox" name="error_usuario" id="error_usuario" value="Error del Usuario" style="font-size: 12px;">
                            <label for="error_usuario" style="font-size: 12px;">Error del Usuario</label>
                        </div>

                        <div class="col-md-3">
                            <input type="checkbox" name="error_externo" id="error_externo" value="Errores Externos" style="font-size: 12px;">
                            <label for="error_externo" style="font-size: 12px;">Errores Externos</label>
                        </div>


                    </div>

                    <!-- Factores de Dispositivo  -->

                    <div class="col-md-4" id="Dispositivo_factores" style="display:none;">

                        <fieldset>
                            <legend>

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(121, 173, 220);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Factores de Dispositivo</h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="error_armado" id="error_armado" value="Error De Armado" style="font-size:12px;">
                                        <label for="error_armado" style="font-size:12px;">Error De Armado</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="error_etiquetado" id="error_etiquetado" value="Error De Etiquetado" style="font-size: 12px;">
                                        <label for="error_etiquetado" style="font-size: 12px;">Error De Etiquetado</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="falla_dispositivo" id="falla_dispositivo" value="Falla Del Dispositivo" style="font-size: 12px;">
                                        <label for="falla_dispositivo" style="font-size: 12px;">Falla Del Dispositivo</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="inadecuado_mantenimiento" id="inadecuado_mantenimiento" value="Inadecuado Mantenimiento" style="font-size: 12px;">
                                        <label for="inadecuado_mantenimiento" style="font-size: 12px;">Inadecuado Mantenimiento</label>
                                    </div>

                                </div>

                            </legend>
                        </fieldset>
                    </div>


                    <!-- ERROR DEL USUARIO -->


                    <div class="col-md-4" id="factores_Usuario" style="display:none;">

                        <fieldset>
                            <legend>

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(121, 173, 220);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Errores de Usuario</h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="programacion_incorrecta" id="programacion_incorrecta" value="Programación Incorrecta" style="font-size: 12px;">
                                        <label for="programacion_incorrecta" style="font-size: 12px;">Programación Incorrecta</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="conxion_erradas" id="conxion_erradas" value="Conexiones Erradas" style="font-size: 12px;">
                                        <label for="conxion_erradas" style="font-size: 12px;">Conexiones Erradas</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="dispositivos_malensamblados" id="dispositivos_malensamblados" value="Dispositivo Mal Ensamblado" style="font-size: 12px;">
                                        <label for="dispositivos_malensamblados" style="font-size: 12px;">Dispositivo Mal Ensamblado</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="no_lectura_etiquetado" id="no_lectura_etiquetado" value="No Lectura De Etiquetado " style="font-size: 12px;">
                                        <label for="no_lectura_etiquetado" style="font-size: 12px;">No Lectura De Etiquetado </label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="no_lecturadeInstrucciones" id="no_lecturadeInstrucciones" value="No Lectura De Instrucciones" style="font-size: 12px;">
                                        <label for="no_lecturadeInstrucciones" style="font-size: 12px;">No Lectura De Instrucciones</label>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="checkbox" name="fallas_pruebasInspeccion" id="fallas_pruebasInspeccion" value="Fallas En Pruebas De Inspección Previo Uso" style="font-size:12px;">
                                        <label for="fallas_pruebasInspeccion" style="font-size:12px;">Fallas En Pruebas De Inspección Previo Uso</label>
                                    </div>

                                </div>

                            </legend>
                        </fieldset>
                    </div>


                    <!-- ERRORES EXTERNOS -->
                    <div class="col-md-4" id="factores_Exteros" style="display:none;">

                        <fieldset>
                            <legend>

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color: rgb(121, 173, 220);
                                        color: aliceblue;
                                        margin-top:12px;
                                        font-size: 12px;
                                        text-align: center;">Erores Externos</h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="falla_suministroelectrico" id="falla_suministroelectrico" value="Falla Suministro Eléctrico" style="font-size:12px;">
                                        <label for="falla_suministroelectrico" style="font-size:12px;">Falla Suministro Eléctrico</label>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="checkbox" name="falla_dispositivo_errorExterno" id="falla_dispositivo_errorExterno" value="Medio Ambientales" style="font-size: 12px;">
                                        <label for="falla_dispositivo_errorExterno" style="font-size: 12px;">Medio Ambientales</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="inadecuado_mantenimiento_errorExterno" id="inadecuado_mantenimiento_errorExterno" value="Inadecuado Mantenimiento" style="font-size: 12px;">
                                        <label for="inadecuado_mantenimiento_errorExterno" style="font-size: 12px;">Inadecuado Mantenimiento</label>
                                    </div>


                                    <div class="col-md-12">
                                        <input type="checkbox" name="interferencia" id="interferencia" value="Interferencias Electromagnéticas" style="font-size: 12px;">
                                        <label for="interferencia" style="font-size: 12px;">Interferencias Electromagnéticas</label>
                                    </div>

                                </div>




                            </legend>
                        </fieldset>


                    </div>


                    <div class="col-md-12">
                        <strong style="font-size: 12px;">Evitabilidad</strong>
                        <select name="Evitabilidad" id="Evitabilidad" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>




                    <!-- <div class="col-md-3">
                        <strong style="font-size: 12px;">Problema</strong>
                        <input type="text" class="control form-control" id="problema" name="problema" value="" style="font-size: 12px;">
                    </div>
                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Validación Del Evento</strong>
                        <select name="validacionevento" id="validacionevento" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Incidente">Incidente</option>
                            <option value="Incidente Adverso">Incidente Adverso</option>
                            <option value="Incidente Adverso Previsto">Incidente Adverso Previsto</option>
                            <option value="Incidente Adverso Imprevisto">Incidente Adverso Imprevisto</option>
                        </select>
                    </div> -->

                </div>
            </legend>
        </fieldset>
    </div>


    <div class="container">
        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Validación del Evento</h4>
        </div>

        <fieldset>

            <legend>

                <div class="col-md-12">
                    <strong style="font-size: 12px;">Validación de Evento</strong>
                    <select name="validacion_evento" id="validacion_evento" class="form-select" style="font-size: 12px;">
                        <option value="">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>



                <div class="row" id="val_event" style="display:none;">
                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Validación del Evento</strong>
                        <select name="Validacion_evento" id="Validacion_evento" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Incidente">Incidente</option>
                            <option value="Incidente Adverso">Incidente Adverso</option>
                            <option value="Incidente Adverso Previsto">Incidente Adverso Previsto</option>
                            <option value="Incidente Adverso Imprevisto">Incidente Adverso Imprevisto</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">No.Reporte</strong>
                        <input id="no_reporte" name="no_reporte" placeholder="HRAEI/UTV/0000/2024" type="text"
                            class="control form-control" value="" style="font-size: 12px;">
                    </div>


                </div>
            </legend>
        </fieldset>
    </div>



    <div class="container">
        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Gestión</h4>
        </div>

        <fieldset>

            <legend>


                <div class="row">

                    <div class="col-md-3">
                        <strong style="font-size: 12px;">Acciones Correctivas</strong>
                        <select name="acciones_correctivas" id="acciones_correctivas" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 12px;">Acciones Preventivas</strong>
                        <select name="acciones_preventivas" id="acciones_preventivas" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="evidencia_estatus" style="display:none;">
                        <strong style="font-size: 12px;">Evidencia</strong>
                        <select name="evidencia" id="evidencia" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="seleccion_archivo" style="display:none;"> <!-- style="display:none;" -->
                        <label for="file" class="form-label" style="font-size: 12px; font-weight: bold;">Selecciona un archivo PDF:</label>
                        <input type="file" name="file" id="file" class="form-control" accept=".pdf" required>
                        <!-- <button type="submit" class="btn btn-primary mt-3" style="font-size: 12px; width: 100%;">Subir Archivo</button> -->
                    </div>



                    <div class="col-md-3">
                        <strong style="font-size: 12px;">AMEF</strong>
                        <select name="AMEF" id="AMEF" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
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
            </legend>
        </fieldset>
    </div>

    <br>
    <br>




    </div>

</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptseguimiento.js"></script>
<script type="module">
    import {
        seguimientoForm
    } from "./js/seguimiento.js";
    seguimientoForm();
</script>

</html>