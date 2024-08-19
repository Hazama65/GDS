<!-- Modal -->
<div class="modal fade" id="Eventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <i class="bi bi-person-plus-fill"></i> Errores de Medicación
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

                <div class="row">

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">ID HRAEI</strong>
                        <input id="id_hraei" name="id_hraei" placeholder="EM/HRAEI/00000/2024" type="text"
                            class="control form-control" value="" style="font-size: 12px;" disabled>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px; ">Fecha de Reporte en Plataforma</strong>
                        <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();"
                            class="control form-control" style="font-size: 12px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px; ">Fecha de Reporte en CIFV</strong>
                        <input id="fecha_cifv" name="fecha_cifv" type="date" value="" onblur="curp2date();"
                            class="control form-control" style="font-size: 12px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px; ">Fecha de Error de Medicación</strong>
                        <input id="fecha_medicacion" name="fecha_medicacion" type="date" value="" onblur="curp2date();"
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
                    </div>

                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(42, 157, 143);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Error en la Medicación</h4>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Nombre de quien notifica el caso</strong>
                        <input id="nombbre_notificacion" name="nombbre_notificacion" type="text" class="control form-control"
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



                </div> <!--Row de Registro -->


            </div> <!--MODAL BODY -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar Paciente</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>