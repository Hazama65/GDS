<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Editar</title>
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


        <h5>Editar-Registro Pacientes</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>
    <div class="container">

        <div style="background-color: rgb(240, 128, 128, 0.7);
                color: aliceblue;
                text-align: center;
                margin-top: 20px;">
            <h6>Generales - Unidad Quirúrgica</h6>
        </div>

        <div class="row">
            <div class="col-md-3">
                <strong>Fecha</strong>
                <input readonly disabled type="date" id="fecha" name="fecha" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
            </div>

            <div class="col-md-3">
                <strong>Responsable Turno</strong>
                <select id="responsable_turno" name="responsable_turno" class="form-control" required>
                    <option value="0">Seleccione...</option>
                    <option value="Maria Medina Durcio">María Medina Durcio</option>
                    <option value="Elvia Aida Galicia Buendia">Elvia Aida Galicia Buendía</option>
                    <option value="Rocio Dolores Romero Ramirez">Rocío Dolores Romero Ramírez</option>
                    <option value="Flor Arizbeck Dinorin Rodriguez">Flor Arizbeck Dinorin Rodríguez</option>
                    <option value="Patricio Camarillo Ramirez">Patricio Camarillo Ramírez</option>
                    <option value="Monica Itzel Velazco Miranda">Mónica Itzel Velazco Miranda</option>
                    <option value="Blanca Guadalupe Cuaxilo Alvarez">Blanca Guadalupe Cuaxilo Álvarez</option>
                    <option value="Leticia Salado Lucero">Leticia Salado Lucero</option>
                    <option value="Martha Laura Nunez Othero">Martha Laura Nuñez Othero</option>
                    <option value="Elizabeth Garcia Malagon">Elizabeth García Malagon</option>
                    <option value="otro">Otro...</option>
                </select>
            </div>


            <div class="col-md-3">
                <strong>Unidad</strong>
                <select name="unidad" id="unidad" class="form-control" required>
                    <option value="0">Seleccione...</option>
                    <option value="ENDOSCOPIA">Endoscopia</option>
                    <option value="TOCOQUIRUGICA">Tocoquirurgica</option>
                    <option value="QUIRURGICA">Quirurgica</option>
                </select>
            </div>

            <div class="col-md-3">
                <strong>Turno</strong>
                <select name="turno" id="turno" class="form-control" required>
                    <option value="0">Seleccione...</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option>
                </select>
            </div>
        </div><!-- div del row-->
        <!-- **************************************************************************** -->
        <div style="background-color: rgb(240, 128, 128, 0.7);
                color: aliceblue;
                text-align: center;
                margin-top: 20px;">
            <h6>Activos</h6>
        </div>

        <div class="row">
            <div style="color: #2B9BA0; text-align: center; ">
                <strong>
                    <h7>Preoperatorio</h7>
                </strong>
            </div>

            <div class="col-md-4">
                <strong>Recibo:</strong>
                <input type="number" class="form-control" name="pacientes_recibidos_pre" id="pacientes_recibidos_pre" required>
            </div>

            <div class="col-md-4">
                <strong>Ingreso:</strong>
                <input type="number" class="form-control" name="pacientes_ingresados_pre" id="pacientes_ingresados_pre" required>
            </div>

            <div class="col-md-4">
                <strong>Egreso:</strong>
                <input type="number" class="form-control" name="pacientes_egresados_pre" id="pacientes_egresados_pre" required>
            </div>

            <div style="color: #2B9BA0; text-align: center; ">
                <strong>
                    <h7>Transoperatoria</h7>
                </strong>
            </div>

            <div class="col-md-4">
                <strong>Recibo:</strong>
                <input type="number" class="form-control" name="pacientes_recibidos_trans" id="pacientes_recibidos_trans" required>
            </div>
            <div class="col-md-4">
                <strong>Ingreso:</strong>
                <input type="number" class="form-control" name="pacientes_ingresados_trans" id="pacientes_ingresados_trans" required>
            </div>

            <div class="col-md-4">
                <strong>Egreso:</strong>
                <input type="number" class="form-control" name="pacientes_egresados_trans" id="pacientes_egresados_trans" required>
            </div>

            <div style="color: #2B9BA0; text-align: center; ">
                <strong>
                    <h7>Posoperatorio</h7>
                </strong>
            </div>

            <div class="col-md-4">
                <strong>Recibo:</strong>
                <input type="number" class="form-control" name="pacientes_recibidos_post" id="pacientes_recibidos_post" required>
            </div>
            <div class="col-md-4">
                <strong>Ingreso:</strong>
                <input type="number" class="form-control" name="pacientes_ingresados_post" id="pacientes_ingresados_post" required>
            </div>

            <div class="col-md-4">
                <strong>Egreso:</strong>
                <input type="number" class="form-control" name="pacientes_egresados_post" id="pacientes_egresados_post" required>
            </div>
        </div> <!-- div del row-->

        <!--*******************************-->

        <div style="background-color: rgb(240, 128, 128, 0.7);
                color: aliceblue;
                text-align: center;
                margin-top: 20px;">
            <h6>Personal</h6>
        </div>

        <div class="row">
            <div class="col-md-4">
                <strong>E. Especialista </strong>
                <input type="number" class="form-control" name="enfermeras_especialistas" id="enfermeras_especialistas" required>
            </div>

            <div class="col-md-4">
                <strong>E. General</strong>
                <input type="number" class="form-control" name="enfermeras_generales" id="enfermeras_generales" required>
            </div>

            <div class="col-md-4">
                <strong>Auxiliar Enfer.</strong>
                <input type="number" class="form-control" name="auxiliares_enfermeria" id="auxiliares_enfermeria" required>
            </div>
        </div><!-- div de row-->


        <!--*******************************-->

        <div style="background-color: rgb(240, 128, 128, 0.7);
                color: aliceblue;
                text-align: center;
                margin-top: 20px;">
            <h6>Códigos y Carros</h6>
        </div>

        <div class="row">

            <div class="col-md-2">
                <strong>Mater</strong>
                <input type="number" class="form-control" name="MATER" id="MATER">
            </div>

            <div class="col-md-2">
                <strong>Azul</strong>
                <input type="number" class="form-control" name="AZUL" id="AZUL">
            </div>

            <div class="col-md-2">
                <strong>Infarto</strong>
                <input type="number" class="form-control" name="INFARTO" id="INFARTO">
            </div>

            <div class="col-md-2">
                <strong>Aéreo</strong>
                <input type="number" class="form-control" name="AÉREO" id="AÉREO">
            </div>

            <div class="col-md-2">
                <strong>EVC</strong>
                <input type="number" class="form-control" name="EVC" id="EVC">
            </div>

            <div class="col-md-2">
                <strong>Blanco</strong>
                <input type="number" class="form-control" name="BLANCO" id="BLANCO">
            </div>

            <div class="col-md-2">
                <strong>Morado</strong>
                <input type="number" class="form-control" name="MORADO" id="MORADO">
            </div>

            <div class="col-md-2">
                <strong>Naranja</strong>
                <input type="number" class="form-control" name="NARANJA" id="NARANJA">
            </div>

            <div class="col-md-2">
                <strong>Dorado</strong>
                <input type="number" class="form-control" name="DORADO" id="DORADO">
            </div>

            <div class="col-md-6">
                <strong>Carros Rojos</strong>
                <select class="form-control" name="carros_rojos" id="carros_rojos" required>
                    <option value="0">Seleccione...</option>
                    <option value="completo">Completo</option>
                    <option value="incompleto">Incompleto</option>
                </select>
            </div>

        </div> <!-- div del row-->

        <!--*******************************-->

        <div style="background-color: rgb(240, 128, 128, 0.7);
                color: aliceblue;
                text-align: center;
                margin-top: 20px;">
            <h6>Eventos Adversos</h6>
        </div>

        <div class="row">

            <div class="col-md-12">
                <strong>Evento Adverso</strong>
                <select class="form-control" name="Evento" id="Evento" required>
                    <option value="0">Seleccione...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="row" id="eventos_datos" name="eventos_datos">
                <div class="col-md-6">
                    <strong>Personal involucrado</strong>
                    <select class="form-control" name="personal_involucrado" id="personal_involucrado">
                        <option value="0">Seleccione</option>
                        <option value="medico">Médico</option>
                        <option value="enfermeria">Enfermero(a)</option>
                        <option value="ts">T.S</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong>Notificación</strong>
                    <select class="form-control" name="notificacion" id="notificacion">
                        <option value="0">Seleccione</option>
                        <option value="SINOI">SINOI</option>
                        <option value="Farmacovigilancia">Farmacovigilancia</option>
                        <option value="Area de Calidad">Área de Calidad</option>
                        <option value="Jefe de Servicio">Jefe de Servicio</option>
                        <option value="Supervision de enfermeria">Supervisión de Enfermería</option>
                    </select>
                </div>
            </div> <!-- div del row-->
        </div> <!-- div del row-->
        <!--*******************************-->

        <div style="background-color: rgb(240, 128, 128, 0.7);
                color: aliceblue;
                text-align: center;
                margin-top: 20px;">
            <h6>Momento</h6>
        </div>

        <div class="row">

            <div class="col-md-4" id="productividad_a" name="productividad_a">
                <div style="background-color: rgb(143, 188, 143, 0.70); color: dimgray; text-align: center; margin-top: 20px;">
                    <h6>Productividad Administrativa</h6>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Enlace de turno</span>
                    <select class="form-control" name="ENLACE_TURNO" id="ENLACE_TURNO">
                        <option value="0">Seleccione...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> <br>


                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Recepción y entrega</span>
                    <select class="form-control" name="RECEPCION_ENTREGA" id="RECEPCION_ENTREGA">
                        <option value="0">Seleccione...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Distribución de personal</span>
                    <input type="number" class="form-control" name="DISTRIBUCIÓN_PERSONAL" id="DISTRIBUCIÓN_PERSONAL">
                </div> <br>

                <div class="input-group input-group-sm mb-3" style="background-color: mintcream;">
                    <span class="input-group-text" style="background-color: mintcream;">Inducción a personal de nuevo ingreso</span>
                    <input type="number" class="form-control" name="INDUCCIÓN_PERSONAL_NUEVO_INGRESO" id="INDUCCIÓN_PERSONAL_NUEVO_INGRESO">
                </div> <br>

                <div class="input-group input-group-sm mb-3" style="background-color: mintcream;">
                    <span class="input-group-text" style="background-color: mintcream;">Inducción a personal en formación</span>
                    <input type="number" class="form-control" name="INDUCCIÓN_PERSONA_FORMACIÓN" id="INDUCCIÓN_PERSONA_FORMACIÓN">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Evaluación de personal operativo</span>
                    <input type="number" class="form-control" name="EVALUACIÓN_PERSONAL_OPERATIVO" id="EVALUACIÓN_PERSONAL_OPERATIVO">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Revisión de Bitácoras</span>
                    <input type="number" class="form-control" name="REVISIÓN_BITACORAS" id="REVISIÓN_BITACORAS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión de RPBI</span>
                    <input type="number" class="form-control" name="SUPERVISION_ARPBI" id="SUPERVISION_ARPBI">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Vigilancia de red fría</span>
                    <input type="number" class="form-control" name="VIGILANCIA_RED_FRIA" id="VIGILANCIA_RED_FRIA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión de higiene de manos <br>(agua y jabón/ antiséptico/ quirúrgico)</span>
                    <input type="number" class="form-control" name="SUPERVISIÓN_HIGIENE_MANOS" id="SUPERVISIÓN_HIGIENE_MANOS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión de los 5 momentos de lavado de manos</span>
                    <input type="number" class="form-control" name="SUPERVISIÓN_MOMENTOS_LAVADO_MANOS" id="SUPERVISIÓN_MOMENTOS_LAVADO_MANOS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Notificación y registro de eventos adversos</span>
                    <input type="number" class="form-control" name="NOTIFICACIÓN_REGISTRO_EVENTOS_ADVERSOS" id="NOTIFICACIÓN_REGISTRO_EVENTOS_ADVERSOS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión de los correctos en la <br>ministración de medicamentos</span>
                    <input type="number" class="form-control" name="SUPERVISIÓN_CORRECTOS_MINISTRACIÓN_MEDICAMENTOS" id="SUPERVISIÓN_CORRECTOS_MINISTRACIÓN_MEDICAMENTOS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión en la documentación en la <br>ministración de medicamentos</span>
                    <input type="number" class="form-control" name="SUPERVISIÓN_DOCUMENTACIÓN_MINISTRACIÓN_MEDICAMENTOS" id="SUPERVISIÓN_DOCUMENTACIÓN_MINISTRACIÓN_MEDICAMENTOS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión de doble verificación</span>
                    <input type="number" class="form-control" name="SUPERVISIÓN_DOBLE_VERIFICACIÓN" id="SUPERVISIÓN_DOBLE_VERIFICACIÓN">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Recepción de medicamentos 24 hrs</span>
                    <input type="number" class="form-control" name="RECEPCIÓN_MEDICAMENTOS_24_HORAS" id="RECEPCIÓN_MEDICAMENTOS_24_HORAS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Devolución de medicamentos por paciente</span>
                    <input type="number" class="form-control" name="DEVOLUCIÓN_MEDICAMENTOS_PACIENTE" id="DEVOLUCIÓN_MEDICAMENTOS_PACIENTE">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Verificación de unidades limpias con base al tratamiento <br>requerido</span>
                    <input type="number" class="form-control" name="VERIFICACIÓN_UNIDADES_LIMPIAS" id="VERIFICACIÓN_UNIDADES_LIMPIAS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream; ">Verificación de actividades <br> (surtimiento CEYE, Biomédico)</span>
                    <input type="number" class="form-control" name="SUPERVISIÓN_ACTIVIDADES" id="SUPERVISIÓN_ACTIVIDADES">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Idenfificación y reporte de faltantes <br>insumos y/o materiales</span>
                    <input type="number" class="form-control" name="IDENTIFICACIÓN_REPORTE_FALTANTES_INSUMOS_MATERIALES" id="IDENTIFICACIÓN_REPORTE_FALTANTES_INSUMOS_MATERIALES">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Verificación de pre altas y altas del servicio <br>para disponibilidad de camas</span>
                    <input type="number" class="form-control" name="PREALTAS_ALTAS_SERVICIO_CAMAS" id="PREALTAS_ALTAS_SERVICIO_CAMAS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión, identificación y registro de riesgo <br>de caidas</span>
                    <input type="number" class="form-control" name="RIESGO_CAÍDAS" id="RIESGO_CAÍDAS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Supervisión, identificación y registro de riesgo de caidas</span>
                    <input type="number" class="form-control" name="RIESGO_CAÍDAS" id="RIESGO_CAÍDAS">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Evaluación de los riesgos clínicos de enfermería</span>
                    <input type="number" class="form-control" name="RIESGOS_CLÍNICOS_ENFERMERÍA" id="RIESGOS_CLÍNICOS_ENFERMERÍA">
                </div> <br>

            </div> <!-- div de productividad_a-->


            <div class="col-md-4" id="cuidados_endo" name="cuidados_endo">
                <div style="background-color: rgb(143, 188, 143, 0.70); color: dimgray; text-align: center; margin-top: 20px;">
                    <h6>Cuidados Especializados de Endoscopia</h6>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Panendoscopia</span>
                    <input type="number" class="form-control" name="PANENDOSCOPIA" id="PANENDOSCOPIA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Colonoscopia</span>
                    <input type="number" class="form-control" name="COLONOSCOPIA" id="COLONOSCOPIA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Ecotranseso</span>
                    <input type="number" class="form-control" name="ECOTRANSESO" id="ECOTRANSESO">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Pro. Oncologa </span>
                    <input type="number" class="form-control" name="PRO_ONCOLOGA" id="PRO_ONCOLOGA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Pro. Otr </span>
                    <input type="number" class="form-control" name="PRO_OTR" id="PRO_OTR">
                </div> <br>

            </div> <!-- div de cuidados_endo-->



            <div class="col-md-4" id="cuidados_utqx" name="cuidados_utqx">
                <div style="background-color: rgb(143, 188, 143, 0.70); color: dimgray; text-align: center; margin-top: 20px;">
                    <h6>Cuidados Especializados de UTQX</h6>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Maniobras de Leopold</span>
                    <input type="number" class="form-control" name="MANIOBRAS_LEOPOLD" id="MANIOBRAS_LEOPOLD">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Toma de frecuencia cardiaca fetal</span>
                    <input type="number" class="form-control" name="FRECUENCIA_CARDIACA_FETAL" id="FRECUENCIA_CARDIACA_FETAL">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Reanimación intrauterina</span>
                    <input type="number" class="form-control" name="REANIMACION_INTRAUTERINA" id="REANIMACION_INTRAUTERINA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Asistencia a analgesia obstétrica</span>
                    <input type="number" class="form-control" name="ASISTENCIA_ANALGESIA_OBSTETRICA" id="ASISTENCIA_ANALGESIA_OBSTETRICA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Vigilancia de pérdida transvaginal</span>
                    <input type="number" class="form-control" name="VIGILANCIA_PERDIDA_TRANSVAGINAL" id="VIGILANCIA_PERDIDA_TRANSVAGINAL">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Vigilancia de actividad intrauterina</span>
                    <input type="number" class="form-control" name="VIGILANCIA_ACTIVIDAD_INTRAUTERINA" id="VIGILANCIA_ACTIVIDAD_INTRAUTERINA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Vigilancia de involución uterina</span>
                    <input type="number" class="form-control" name="VIGILANCIA_INVOLUCION_UTERINA" id="VIGILANCIA_INVOLUCION_UTERINA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Asistencia y/o curación de catéter umbilical</span>
                    <input type="number" class="form-control" name="ASISTENCIA_CURACIÓN_CATETER_UMBILICAL" id="ASISTENCIA_CURACIÓN_CATETER_UMBILICAL">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Cuidados inmediatos del RN</span>
                    <input type="number" class="form-control" name="CUIDADOS_INMEDIATOS_RN" id="CUIDADOS_INMEDIATOS_RN">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Valoración de succión/deglución del RN</span>
                    <input type="number" class="form-control" name="VALORACION_SUCCIÓN_DEGLUCION_RN" id="VALORACION_SUCCIÓN_DEGLUCION_RN">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Toma de perímetro abdominal pre/posprandrial del RN</span>
                    <input type="number" class="form-control" name="PERIMETRO_ABDOMINAL_PRE_POSPRANDRIAL_RN" id="PERIMETRO_ABDOMINAL_PRE_POSPRANDRIAL_RN">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Peso y Talla del RN</span>
                    <input type="number" class="form-control" name="PESO_TALLA_RN" id="PESO_TALLA_RN">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Instalación y/o cuidados de sonda naso/orogástrica</span>
                    <input type="number" class="form-control" name="INSTALACION_CUIDADOS_SONDA_NASO_OROGASTRICA" id="INSTALACION_CUIDADOS_SONDA_NASO_OROGASTRICA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Manejo y cuidado de fototerapia</span>
                    <input type="number" class="form-control" name="MANEJO_CUIDADO_FOTOTERAPIA" id="MANEJO_CUIDADO_FOTOTERAPIA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Capacitación a lactancia materna</span>
                    <input type="number" class="form-control" name="CAPACITACION_LACTANCIA_MATERNA" id="CAPACITACION_LACTANCIA_MATERNA">
                </div> <br>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: mintcream;">Intervenciones de enfermería del duelo perinatal</span>
                    <input type="number" class="form-control" name="INTERVENCIONES_ENFERMERÍA_DUELO_PERINATAL" id="INTERVENCIONES_ENFERMERÍA_DUELO_PERINATAL">
                </div> <br>
            </div> <!--cuidados_utqx-->
        </div>

        <br>
        <div class="row">
            <div class="col-md-4" id="preoperatorio" name="preoperatorio">
                <div style="background-color: #64b8b6; color: aliceblue; text-align: center; margin-top: 20px;">
                    <h6>Preoperatorio</h6>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Idenfificación correcta de paciente</span>
                    <input type="number" class="form-control" name="IDENTIFICACIÓN_CORRECTA_PACIENTE_PRE" id="IDENTIFICACIÓN_CORRECTA_PACIENTE_PRE">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Orientación para el paciente ambulatorio</span>
                    <input type="number" class="form-control" name="ORIENTACION_PARA_INGRESO_PACIENTE_AMBULATORIO" id="ORIENTACION_PARA_INGRESO_PACIENTE_AMBULATORIO">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Valoración preoperatoria de enfermería</span>
                    <input type="number" class="form-control" name="VALORACION_PREOPERATORIA_ENFERMERIA" id="VALORACION_PREOPERATORIA_ENFERMERIA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Identificación de alergias</span>
                    <input type="number" class="form-control" name="IDENTIFICACION_ALERGIAS" id="IDENTIFICACION_ALERGIAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Preparación de la unidad</span>
                    <input type="number" class="form-control" name="PREPARACION_UNIDAD" id="PREPARACION_UNIDAD">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Instalación y cuidado de catéter periférico</span>
                    <input type="number" class="form-control" name="INSTALACION_CUIDADO_CATETER_PERIFÉRICO" id="INSTALACION_CUIDADO_CATETER_PERIFÉRICO">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Toma de muestras para laboratorio y/o banco de sangre</span>
                    <input type="number" class="form-control" name="TOMA_MUESTRAS_LABORATORIO_BANCO_SANGRE" id="TOMA_MUESTRAS_LABORATORIO_BANCO_SANGRE">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Oxigencación (puntas nasales y mascarilla)</span>
                    <input type="number" class="form-control" name="OXIGENACION_PRE" id="OXIGENACION_PRE">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Manejo y vigilancia NPT</span>
                    <input type="number" class="form-control" name="MANEJO_VIGILANCIA_NPT" id="MANEJO_VIGILANCIA_NPT">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Pre medicación y Profilaxis antibiótica</span>
                    <input type="number" class="form-control" name="PRE_MEDICACION_PROFILAXIS_ANTIBIOTICA" id="PRE_MEDICACION_PROFILAXIS_ANTIBIOTICA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Prevención de medidas antitrombóticas</span>
                    <input type="number" class="form-control" name="PREVENCION_MEDIDAS_ANTITROMBOTICAS" id="PREVENCION_MEDIDAS_ANTITROMBOTICAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Marcaje quirúrgico</span>
                    <input type="number" class="form-control" name="MARCAJE_QUIRURGICO" id="MARCAJE_QUIRURGICO">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Integración del expediente clinico quirúrgico</span>
                    <input type="number" class="form-control" name="INTEGRACION_EXPEDIENTE_CLINICO_QUIRURGICO" id="INTEGRACION_EXPEDIENTE_CLINICO_QUIRURGICO">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(83, 176, 174, 0.15);">Verificación de disponibilidad de hemocomponentes</span>
                    <input type="number" class="form-control" name="VERIFICACION_DISPONIBILIDAD_HEMOCOMPONENTES" id="VERIFICACION_DISPONIBILIDAD_HEMOCOMPONENTES">
                </div>
            </div> <!--div del preoperatorio-->


            <div class="col-md-4" id="transoperatorio" name="transoperatorio">
                <div style="background-color: #d95b5a; color: aliceblue; text-align: center; margin-top: 20px;">
                    <h6>Transoperatorio</h6>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Identificación correcta de paciente</span>
                    <input type="number" class="form-control" name="IDENTIFICACION_CORRECTA_PACIENTE_TRAS" id="IDENTIFICACION_CORRECTA_PACIENTE_TRAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Verificación de la programación quirúrgica</span>
                    <input type="number" class="form-control" name="VERIFICACIÓN_PROGRAMACIO_QUIRURGICA" id="VERIFICACIÓN_PROGRAMACIO_QUIRURGICA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Equipamento de la sala quirúrgica</span>
                    <input type="number" class="form-control" name="EQUIPAMIENTO_SALA_QUIRURGICA" id="EQUIPAMIENTO_SALA_QUIRURGICA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Valoración transoperatoria de enfermería</span>
                    <input type="number" class="form-control" name="VALORACION_TRANSOPERATORIA_ENFERMERIA" id="VALORACION_TRANSOPERATORIA_ENFERMERIA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Entrega recepción de paciente</span>
                    <input type="number" class="form-control" name="ENTREGA_RECEPCION_PACIENTE" id="ENTREGA_RECEPCION_PACIENTE">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Entrega recepción del expediente clinico quirúrgico</span>
                    <input type="number" class="form-control" name="ENTREGA_RECEPCION_EXPEDIENTE_CLINICO_QUIRURGICO" id="ENTREGA_RECEPCION_EXPEDIENTE_CLINICO_QUIRURGICO">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Posición quirúrgica y confor del paciente</span>
                    <input type="number" class="form-control" name="POSICION_QUIRURGICA_CONFORT_PACIENTE" id="POSICION_QUIRURGICA_CONFORT_PACIENTE">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Aplicación de cirugía segura</span>
                    <input type="number" class="form-control" name="APLICACION_CIRUGIA_SEGURA" id="APLICACION_CIRUGIA_SEGURA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Funciones de enfermera instrumentista</span>
                    <input type="number" class="form-control" name="FUNCIONES_ENFERMERA_INSTRUMENTISTA" id="FUNCIONES_ENFERMERA_INSTRUMENTISTA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Funciones de enfermera circulante</span>
                    <input type="number" class="form-control" name="FUNCIONES_ENFERMERA_CIRCULANTE" id="FUNCIONES_DE_ENFERMERA_CIRCULANTE">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Instalación y manejo de sonsa vesical</span>
                    <input type="number" class="form-control" name="INSTALACION_MANEJO_SONDA_VESICAL" id="INSTALACION_MANEJO_SONDA_VESICAL">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Asistencia en la instalación de cateter central</span>
                    <input type="number" class="form-control" name="ASISTENCIA_INSTALACION_CATETER_CENTRAL" id="ASISTENCIA_INSTALACION_CATETER_CENTRAL">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Asistencia en la instalación de línea arterial</span>
                    <input type="number" class="form-control" name="ASISTENCIA_INSTALACION_LINEA_ARTERIAL" id="ASISTENCIA_INSTALACION_LINEA_ARTERIAL">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Transfusión de hemocomponentes</span>
                    <input type="number" class="form-control" name="TRANSFUSION_HEMOCOMPONENTES" id="TRANSFUSION_HEMOCOMPONENTES">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Manejo de la pieza patológica</span>
                    <input type="number" class="form-control" name="MANEJO_PIEZA_PATOLOGICA" id="MANEJO_PIEZA_PATOLOGICA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Cuenta de instrumentos y punzo cortantes</span>
                    <input type="number" class="form-control" name="CUENTA_INSTRUMENTOS_PUNZO_CORTANTES" id="CUENTA_INSTRUMENTOS_PUNZO_CORTANTES">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Cuenta de gasas y compresas</span>
                    <input type="number" class="form-control" name="CUENTA_GASAS_COMPRESAS" id="CUENTA_GASAS_COMPRESAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Participación de enfermería en el proceso de Cadena Custodia</span>
                    <input type="number" class="form-control" name="PARTICIPACION_ENFERMERIA_PROCESO_CADENA_CUSTODIA" id="PARTICIPACION_ENFERMERIA_PROCESO_CADENA_CUSTODIA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Cuidados Post-mortem</span>
                    <input type="number" class="form-control" name="CUIDADOS_POST_MORTEM" id="CUIDADOS_POST_MORTEM">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(217, 91, 90, 0.15);">Precauciones basadas en la transmisión</span>
                    <input type="number" class="form-control" name="PRECAUCIONES_BASADAS_TRASMISION" id="PRECAUCIONES_BASADAS_TRASMISION">
                </div>

            </div><!--TRANSOPERATORIO-->


            <div class="col-md-4" id="posoperatorio" name="posoperatorio">
                <div style="background-color: #e24788; color: aliceblue; text-align: center; margin-top: 20px;">
                    <h6>Postoperatorio</h6>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Identificación correcta de paciente</span>
                    <input type="number" class="form-control" name="IDENTIFICACION_CORRECTA_PACIENTE_POS" id="IDENTIFICACION_CORRECTA_PACIENTE_POS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Toma de signos vitales (monitorización)</span>
                    <input type="number" class="form-control" name="SIGNOS_VITALES" id="SIGNOS_VITALES">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Preparación de la unidad</span>
                    <input type="number" class="form-control" name="PREPARACIÓN_UNIDAD" id="PREPARACIÓN_UNIDAD">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Oxigenación (puntas nasales y mascarilla)</span>
                    <input type="number" class="form-control" name="OXIGENACION_POST" id="OXIGENACION_POST">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Control térmico</span>
                    <input type="number" class="form-control" name="CONTROL_TERMICO" id="CONTROL_TERMICO">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Cuidados de drenajes y sondas</span>
                    <input type="number" class="form-control" name="CUIDADOS_DRENAJES_SONDAS" id="CUIDADOS_DRENAJES_SONDAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);;">Valoración de escalas (Eva, Aldrete, Glasgow, Caídas)</span>
                    <input type="number" class="form-control" name="VALORACION_ESCALAS" id="VALORACION_ESCALAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Ministración de medicamentos</span>
                    <input type="number" class="form-control" name="MINISTRACION_MEDICAMENTOS" id="MINISTRACION_MEDICAMENTOS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Terapia intravenosa</span>
                    <input type="number" class="form-control" name="TERAPIA_INTRAVENOSA" id="TERAPIA_INTRAVENOSA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Toma de glicemia capilar</span>
                    <input type="number" class="form-control" name="TERAPIA_INTRAVENOSA" id="TERAPIA_INTRAVENOSA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Cuidado de catéreres</span>
                    <input type="number" class="form-control" name="CUIDADO_CATETERES" id="CUIDADO_CATETERES">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Aspiración de secreciones</span>
                    <input type="number" class="form-control" name="ASPIRACION_SECRECIONES" id="ASPIRACION_SECRECIONES">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Cuidado de herida quirúrgica</span>
                    <input type="number" class="form-control" name="CUIDADO_HERIDA_QUIRURGICA" id="CUIDADO_HERIDA_QUIRURGICA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Vigilancia neurovascular distal</span>
                    <input type="number" class="form-control" name="VIGILANCIA_NEUROVASCULAR_DISTAL" id="VIGILANCIA_NEUROVASCULAR_DISTAL">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Manejo de estomas</span>
                    <input type="number" class="form-control" name="MANEJO_ESTOMAS" id="MANEJO_ESTOMAS">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Cuidado de traqueostomia</span>
                    <input type="number" class="form-control" name="CUIDADO_TRAQUEOSTOMIA" id="CUIDADO_TRAQUEOSTOMIA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Cuidados a ventriculostomía</span>
                    <input type="number" class="form-control" name="CUIDADOS_VENTRICULOSTOMIA" id="CUIDADOS_VENTRICULOSTOMIA">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" style="background-color: rgba(226, 71, 136, 0.15);">Plan de Alta</span>
                    <input type="number" class="form-control" name="PLAN_ALTA" id="PLAN_ALTA">
                </div>
            </div> <!--Pos operatorio-->


        </div> <!-- div del row-->

        <div class="modal-footer">
            <button type="button" class="btn btn-success">Guardar Cambios</button>
        </div> <br>



    </div> <!-- container-->


</body>

</html>