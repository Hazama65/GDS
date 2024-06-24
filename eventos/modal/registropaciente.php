<!-- Modal -->
<div class="modal fade" id="Eventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <i class="bi bi-person-plus-fill"></i> Registrar Paciente
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(198, 79, 113);
                color: aliceblue;
                margin-top:c15px;
                font-size: 15px;
                text-align: center;">Datos del Paciente</h4>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Nombre del Paciente</strong>
                        <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">CURP</strong>
                        <input id="curp" name="curp" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px; ">Fecha de Nacimiento</strong>
                        <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                    </div>
                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Edad</strong>
                        <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Sexo</strong>
                        <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Cama</strong>
                        <input type="number" class="control form-control" id="cama" name="cama" style="font-size: 13px;">
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Turno</strong>
                        <select name="Turno" id="Turno" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Jornada Especial">Jornada Especial</option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Nocturno">Nocturno</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Personal</strong>
                        <select name="Personal" id="Personal" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Enfermera">Enfermera</option>
                            <option value="Médico">Médico</option>
                        </select>
                    </div>


                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Area de Atención</strong>
                        <select name="area_atencion" id="area_atencion" class="form-select" style="font-size: 13px;">
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
                                    background-color: rgb(198, 79, 113,0.5);
                                    color: aliceblue;
                                    margin-top:12px;
                                    font-size: 12px;
                                    text-align: center;">Servicios Hospitalización</h4>
                            </div>

                            <div class="col-md-6" id="atencion_hospitalizacion">
                                <strong style="font-size: 13px;">Pisos y Servicios</strong>
                                <select name="area_atencionHospi" id="area_atencionHospi" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="P.B">P.B</option>
                                    <option value="Primero Piso">Primero Piso</option>
                                    <option value="Segundo Piso">Segundo Piso</option>
                                    <option value="Tercer Piso">Tercer Piso</option>
                                    <option value="Cuarto Piso">Cuarto Piso</option>
                                </select>
                            </div>


                            <div class="col-md-6" id="PB" style="display:none;">
                                <strong style="font-size: 13px;">P.B P </strong>
                                <select name="pb_urgencias" id="pb_urgencias" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Urgencias">Urgencias</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="primerpiso" style="display:none;">
                                <strong style="font-size: 13px;">Primer Piso</strong>
                                <select name="planta_primerpiso" id="planta_primerpiso" class="form-select" style="font-size: 13px;">
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
                                <strong style="font-size: 13px">Segundo Piso</strong>
                                <select name="planta_segundopiso" id="planta_segundopiso" class="form-select" style="font-size: 13px">
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
                                <strong style="font-size: 13px;">Tercer Piso</strong>
                                <select name="planta_tercerpiso" id="planta_tercerpiso" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Neurocirugía">Neurocirugía</option>
                                    <option value="Trauma-Ortopedia">Trauma-Ortopedia</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="cuartopiso" style="display:none;">
                                <strong style="font-size: 13px;">Cuarto Piso</strong>
                                <select name="planta_cuartopiso" id="planta_cuartopiso" class="form-select" style="font-size: 13px;">
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
                                    background-color: rgb(198, 79, 113,0.5);
                                    color: aliceblue;
                                    margin-top:12px;
                                    font-size: 12px;
                                    text-align: center;">Servicios Ambulatorios</h4>
                            </div>


                            <div class="col-md-6" id="atencion_ambulatorias">
                                <strong style="font-size: 13px;">Pisos y Servicios</strong>
                                <select name="area_ambu" id="area_ambu" class="form-select" style="font-size: 13px;">
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
                                <strong style="font-size: 13px;">P.B</strong>
                                <select name="ambu_pb" id="ambu_pb" class="form-select" style="font-size: 13px;">
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
                                <strong style="font-size: 13px;">Unidad de Apoyo PB</strong>
                                <select name="ambu_unidadapoyo" id="ambu_unidadapoyo" class="form-select" style="font-size: 13px;">
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
                                <strong style="font-size : 13px;">Piso 1</strong>
                                <select name="ambu_piso1" id="ambu_piso1" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Clínica de Heridas">Clínica de Heridas</option>
                                    <option value="Clínica de Cateteres">Clínica de Cateteres</option>
                                    <option value="Clínica de la Mujer">Clínica de la Mujer</option>
                                    <option value="Signos Vitales">Signos Vitales</option>
                                    <option value="Consulta Externa">Consulta Externa</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_unidadapoyopiso1" style="display:none;">
                                <strong style="font-size: 13px;">Unidad de Apoyo Piso 1</strong>
                                <select name="ambu_unidadapoyo1" id="ambu_unidadapoyo1" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Endoscopía">Endoscopía</option>
                                    <option value="Electrodiágnostico">Electrodiágnostico</option>
                                    <option value="Hemodiálisis">Hemodiálisis</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_piso2" style="display:none;">
                                <strong style="font-size: 13px;">Piso 2</strong>
                                <select name="ambu_piso2" id="ambu_piso2" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Cardiología">Cardiología</option>
                                    <option value="Electrodiágnostico">Electrodiágnostico</option>
                                    <option value="Clínica del Dolor">Clínica del Dolor</option>
                                    <option value="Audiología">Audiología</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_piso3" style="display:none;">
                                <strong style="font-size: 13px;">Piso 3</strong>
                                <select name="ambu_piso3" id="ambu_piso3" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Inhaloterapia">Inhaloterapia</option>
                                    <option value="Area Administrativa">Area Administrativa</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="ambulatoria_enseñanzapiso1" style="display:none;">
                                <strong style="font-size: 13px;">Enseñanza Piso 1</strong>
                                <select name="ambu_enseñanza1" id="ambu_enseñanza1" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Laboratorio Molecular">Laboratorio Molecular</option>
                                </select>
                            </div>



                        </div>
                    </div>




                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(198, 79, 113);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Notificación</h4>
                    </div>



                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Fecha de Notificación</strong>
                        <input id="fecha_notificacion" name="fecha_notificacion" type="date" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Fecha de Incidente</strong>
                        <input id="fecha_incidente" name="fecha_incidente" type="date" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Num de Caso</strong>
                        <input type="number" class="control form-control" id="no_caso" placeholder="#" name="no_caso" value="" style="font-size: 13px;">
                    </div>



                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Medio de Notificación</strong>
                        <select name="Medio_notificacion" id="Medio_notificacion" class="form-select" style="font-size: 13px;">
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
                    </div>

                    <div class="col-md-4">
                        <!-- Div para el espacio entre campos. -->
                    </div>

                    <div class="col-md-12">
                        <label for="descripcion" style="font-size: 13px; font-weight: bold;">Descripción del evento</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" style="font-size: 13px;"></textarea>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Tipo del Evento</strong>
                        <select name="Tipo_evento" id="Tipo_evento" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Cuasifalla">Cuasifalla</option>
                            <option value="Evento sin daño">Evento sin daño</option>
                            <option value="Evento Leve">Evento Leve</option>
                            <option value="Evento Moderado">Evento Moderado</option>
                            <option value="Evento Grave">Evento Grave</option>
                            <option value="Evento Centinela">Evento Centinela</option>
                        </select>
                    </div>



                    <div class="col-md-2">
                        <strong style="font-size: 13px;">CISP</strong>
                        <input type="text" class="control form-control" id="CISP" name="CISP" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Proceso</strong>
                        <input type="text" class="control form-control" id="PROCESO" name="PROCESO" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Problema</strong>
                        <input type="text" class="control form-control" id="PROBLEMA" name="PROBLEMA" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">SREA</strong>
                        <input type="number" class="control form-control" id="SREA" name="SREA" value="" style="font-size: 13px;">
                    </div>

                    <!-- SEGUIMIENTO -->


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(198, 79, 113);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Seguimiento</h4>
                    </div>



                    <div class="col-md-3">
                        <strong style="font-size: 13 px;">Fecha de Envio</strong>
                        <input id="fecha_Envio" name="fecha_Envio" type="date" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">No. de Oficio</strong>
                        <input id="no_envio" name="no_envio" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Fecha de Respuesta</strong>
                        <input id="fecha_respuesta" name="fecha_respuesta" type="date" class="control form-control" value="" style="font-size: 13px;">
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Respuesta</strong>
                        <select name="respuesta" id="respuesta" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="container" id="respuesta_tipo" style="display:none;">
                        <div class="row">

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Corto Plazo</strong>
                                <select id="Corto" name="Corto" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-8" id="desc_corto" style="display:none;">
                                <label for="respuestadescrip" style="font-size: 13px; font-weight: bold;">Descripción de Respuesta Corto Plazo</label>
                                <textarea name="corto_descrip" id="corto_descrip" class="form-control" style="font-size: 13px;"></textarea>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Mediano Plazo</strong>
                                <select id="Mediano" name="Mediano" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-8" id="desc_mediano" style="display:none;">
                                <label for="respuestadescrip" style="font-size: 13px; font-weight: bold;">Descripción de Respuesta Mediano Plazo</label>
                                <textarea name="Mediano_descrip" id="Mediano_descrip" class="form-control" style="font-size: 13px;"></textarea>
                            </div>


                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Largo Plazo</strong>
                                <select id="Largo" name="Largo" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-8" id="desc_largo" style="display:none;">
                                <label for="respuestadescrip" style="font-size: 13px; font-weight: bold;">Descripción de Respuesta Largo Plazo</label>
                                <textarea name="largo_descrip" id="largo_descrip" class="form-control" style="font-size: 13px;"></textarea>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Seguimiento</strong>
                        <input id="Seguimiento_seg" name="Seguimiento_seg" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Evidencia</strong>
                        <input id="Evidencia" name="Evidencia" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>


                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Estatus</strong>
                        <select id="estatus" name="estatus" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Solo Detectado">Solo Detectado</option>
                            <option value="No hay respuesta">No hay respuesta</option>
                            <option value="Respuesta">Respuesta</option>
                            <option value="Seguimiento">Seguimiento</option>
                            <option value="Cerrado Caso">Cerrado Caso</option>
                        </select>
                    </div>









                </div> <!--Row de Registro -->





            </div> <!--MODAL BODY -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar Paciente</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>