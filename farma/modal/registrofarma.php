<!-- Modal -->
<div class="modal fade" id="farmacovig" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <i class="bi bi-person-plus-fill"></i> Registro-Farmacovigilancia
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                border-radius: 10px;
                background-color: rgb(42, 157, 143);
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
                                    <strong style="font-size: 12px;">Nombre(s) del Paciente</strong>
                                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Apellido Paterno</strong>
                                    <input id="apellidos_paterno" name="apellidos_paterno" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Apellido Materno</strong>
                                    <input id="apellidos_materno" name="apellidos_materno" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>


                                <div class="col-md-3">
                                    <strong style="font-size: 12PX;">CURP</strong>
                                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 12px;">
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 12PX; ">Fecha de Nacimiento</strong>
                                    <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 12px;" readonly>
                                </div>

                                <div class="col-md-3">
                                    <strong style="font-size: 12PX;">Sexo</strong>
                                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 12px;" readonly>
                                </div>


                                <div class="col-md-3">
                                    <strong style="font-size: 12PX;">Edad</strong>
                                    <input id="edad" name="edad" type="number" class="control form-control" value="" style="font-size: 12px;" readonly>
                                </div>

                                <div class="container" id="mujer" style="display:none;">
                                    <div class="row">


                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">FUM</strong>
                                            <input id="FUM" name="FUM" type="date" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-4">
                                            <strong style="font-size: 12px;">Embarazo</strong>
                                            <select name="embarazo" id="embarazo" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <strong style="font-size: 12px;">Lactando</strong>
                                            <select name="lactando" id="lactando" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Informante</strong>
                                    <select name="informante" id="informante" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Profesional De La Salud">Profesional De La Salud</option>
                                        <option value="Paciente o Familiar">Paciente o Familiar</option>
                                    </select>
                                </div>

                                <div class="container" id="informante_info" style="display:none;">

                                    <div class="row">

                                        <div class="col-md-3">
                                            <strong style="font-size: 12px;">Titulo</strong>
                                            <select name="titulo" id="titulo" class="form-select" style="font-size: 12px;">
                                                <option value="">Seleccione</option>
                                                <option value="Medico(a)">Medico(a)</option>
                                                <option value="Enfermero(a)">Enfermero(a)</option>
                                                <option value="Químico(a)">Químico(a)</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>


                                        <div class="col-md-3">
                                            <strong style="font-size: 12px; ">Departamento</strong>
                                            <input id="departamento" name="departamento" type="text" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-3">
                                            <strong style="font-size: 12px; ">Telefono</strong>
                                            <input id="telefono" name="telefono" type="tel" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-3">
                                            <strong style="font-size: 12px; ">Correo Electronico</strong>
                                            <input id="correo" name="correo" type="email" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                    </div> <!-- TERMINO INFORMANTE -->

                                </div>


                                <div class="container" id="datos_pacientefam" style="display:none;">
                                    <div class="row">


                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Calle</strong>
                                            <input id="calle" name="calle" type="text" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>


                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Numero Interior</strong>
                                            <input id="numero_interior" name="numero_interior" type="number" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>


                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Numero Exterior</strong>
                                            <input id="numero_exterior" name="numero_exterior" type="number" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>


                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Colonia</strong>
                                            <input id="colonia" name="colonia" type="number" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Municipio</strong>
                                            <input id="municipio" name="municipio" type="number" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>


                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Codigo Postal</strong>
                                            <input id="Cp" name="Cp" type="number" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Telefono</strong>
                                            <input id="telefono_acompa" name="telefono_acompa" type="tel" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-4">
                                            <strong style="font-size: 12px; ">Correo Electronico</strong>
                                            <input id="correoacompa" name="correoacompa" type="email" value=""
                                                class="control form-control" style="font-size: 12px;">
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Area</strong>
                                    <select name="area" id="area" class="form-select" style="font-size: 12px;">
                                        <option value="">Seleccione</option>
                                        <option value="Hospitalización">Hospitalización</option>
                                        <option value="Ambulatoria">Ambulatoria</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px; ">Cama</strong>
                                    <input id="cama" name="cama" type="email" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>



                                <!-- <div class="col-md-4">
                                    <strong style="font-size: 12px; ">Fecha de Reporte en CIFV</strong>
                                    <input id="fecha_cifv" name="fecha_cifv" type="date" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px; ">Fecha de Error de Medicación</strong>
                                    <input id="fecha_medicacion" name="fecha_medicacion" type="date" value=""
                                        class="control form-control" style="font-size: 12px;">
                                </div>

                                <div class="col-md-8">
                                    <strong style="font-size: 12px;">Servicio</strong>
                                    <select name="servicio" id="servicio" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
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


                                <div class="col-md-8">
                                    <strong style="font-size: 12px;">Nombre del Paciente</strong>
                                    <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Cama</strong>
                                    <input id="cama" name="cama" type="text" class="control form-control" value=""
                                        style="font-size: 12px;">
                                </div> -->

                            </div>

                        </legend>
                    </fieldset>

                </div>

                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(42, 157, 143);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">nombbre_notificacion</h4>
                </div>
                <div class="container">

                    <fieldset>
                        <legend>

                            <div class="row">

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Fecha de evento</strong>
                                    <input id="fecha_evento" name="fecha_evento" type="date" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Cargo </strong>
                                    <input id="cargo" name="cargo" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Utilización del Medicamento Erroneo en el Paciente</strong>
                                    <select name="uti_medicamento" id="uti_medicamento" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Hubo Consecuncia en el Paciente</strong>
                                    <select name="consecuencia_px" id="consecuencia_px" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <strong style="font-size: 12px;">Descripción del Error</strong>
                                    <textarea id="descripcion_error" name="descripcion_error" type="text" class="control form-control" value=""
                                        style="font-size: 12px;"
                                        placeholder="Cual fue el Error y Agregar Sintomas en Caso de Presentarse"></textarea>
                                </div>

                                <div class="col-md-4">
                                    <!-- Div para el espacio entre campos. -->
                                </div>

                            </div>
                        </legend>
                    </fieldset>
                </div>

                <!-- <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const tipoErrorSelect = document.getElementById('tipo_error');
                        const errorField = document.querySelector('.col-md-6:nth-of-type(2)'); // Selecciona el segundo elemento con la clase .col-md-6
                        
                        // Oculta el campo "Error" al cargar la página
                        errorField.style.display = 'none';
                        
                    tipoErrorSelect.addEventListener('change', function () {
                        if (this.value) {
                            errorField.style.display = 'block';
                            } else {
                            errorField.style.display = 'none';
                        }
                    });
                });
            </script>
 -->






            </div> <!--MODAL BODY -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar Paciente</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>