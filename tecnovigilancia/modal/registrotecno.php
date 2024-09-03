<!-- Modal -->
<div class="modal fade" id="tecnovigilancia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <i class="bi bi-person-plus-fill"></i>Registro Tecnovigilancia
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                                    <input id="fecha" name="fecha" type="date" value="" class="control form-control" style="font-size: 12px;" readonly>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 12PX;">Edad</strong>
                                    <input id="edad" name="edad" type="number" class="control form-control" value="" style="font-size: 12px;" readonly>
                                </div>

                                <div class="col-md-2">
                                    <strong style="font-size: 12PX;">Sexo</strong>
                                    <input type="text" class="control form-control" id="sexo" name="sexo" style="font-size: 12px;" readonly>
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


                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Hospitalizacion</strong>
                                    <select name="Hospitalizacion" id="Hospitalizacion" class="form-select" style="font-size: 12px;">
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
                <!-- 
                <div class="col-md-6">
                    <strong style="font-size: 12px;">Fecha de reporte plataforma</strong>
                    <input id="fecha_reporte" name="fecha_reporte" type="date" class="control form-control"
                        value="" style="font-size: 12px;">
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 12px; ">Fecha de Reporte en CIFV</strong>
                    <input id="fecha_cifv" name="fecha_cifv" type="date" value=""
                        class="control form-control" style="font-size: 12px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 12px; ">Fecha de Error de Medicación</strong>
                    <input id="fecha_medicacion" name="fecha_medicacion" type="date" value=""
                        class="control form-control" style="font-size: 12px;">
                </div>

 -->












            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>