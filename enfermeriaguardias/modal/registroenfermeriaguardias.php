<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-journal-medical modal-title fs-4" id="exampleModalLabel">Registro Guardias</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="EG_form" method="POST">


                    <!-- Datos de llegada del paciente  -->
                    <div class="row">

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(131, 96, 126);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                                Trabajador Sustituido</h5>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Trabajador Sustituido</strong>
                            <select name="enlace_numeroempleado" id="enlace_numeroempleado" class="control form-control"
                                style="font-size: 13px;" required>
                                <option value="">Seleccione un Empleado</option>
                                <?php
                                if (!empty($data_empleados)) {
                                    foreach ($data_empleados as $row1) {
                                        echo "<option value='" . $row1["nombre_empleado"] . "' 
                                        data-numeroempleado='" . $row1["no_empleado"] . "'
                                        data-gradoEstudios='" . $row1["ult_grado_estudio"] . "'
                                        >" . $row1["nombre_empleado"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay datos disponibles</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Número de Empleado</strong>
                            <input id="numeroempleado_1" name="numeroempleado_1" type="number"
                                class="control form-control" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Nivel Académico</strong>
                            <input name="nivel_academico" id="nivel_academico" class="control form-control"
                                style="font-size: 13px;" readonly>
                            
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Turno</strong>
                            <select name="Turno" id="Turno" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Nocturno - LUNES, JUEVES Y SABADO">Nocturno - LUNES, JUEVES Y SABADO</option>
                                <option value="Nocturno - LUNES, MIERCOLES Y SABADO">Nocturno - LUNES, MIERCOLES Y SABADO</option>
                                <option value="Nocturno - LUNES, MIERCOLES Y VIERNES">Nocturno - LUNES, MIERCOLES Y VIERNES</option>
                                <option value="Nocturno - MARTES, JUEVES Y DOMINGO">Nocturno - MARTES, JUEVES Y DOMINGO</option>
                                <option value="Nocturno - MARTES, JUEVES Y SABADO">Nocturno - MARTES, JUEVES Y SABADO</option>
                                <option value="Nocturno - MARTES, VIERNES Y DOMINGO">Nocturno - MARTES, VIERNES Y DOMINGO</option>
                                <option value="Nocturno - MIERCOLES, VIERNES Y DOMINGO">Nocturno - MIERCOLES, VIERNES Y DOMINGO</option>
                                <option value="Jornada Acumulada Diurna">Jornada Acumulada Diurna</option>

                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Servicio</strong>
                            <select name="servicio" id="servicio" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Críticas">Críticas</option>
                                <!-- <option value="Clínicas">Clínicas</option> -->
                                <option value="Quirúrgicas">Quirúrgicas</option>
                                <option value="Perinatales">Perinatales</option>
                                <option value="Ambulatorias">Ambulatorias</option>
                                <option value="Hospitalización">Hospitalización</option>
                                <option value="Pediatría/Neonatología">Pediatría/Neonatología</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_critica" style="display: none;">
                            <strong style="font-size: 14px;">Críticas</strong>
                            <select name="critica" id="critica" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Urgencias">Urgencias</option>
                                <!-- <option value="UCIA">UCIA</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option>-->
                                <option value="UTIA">UTIA</option>
                                <option value="UCIA">UCIA</option>
                                <option value="Hemodinamia">Hemodinamia</option>
                                <option value="4° Piso">4° Piso</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_clinica" style="display: none;">
                            <strong style="font-size: 14px;">Clínicas</strong>
                            <select name="clinicas" id="clinicas" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Medicina Interna">Medicina Interna</option>
                                <option value="Hematología">Hematología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Oncopediatría ">Oncopediatría </option>
                                <option value="Hemodiálisis">Hemodiálisis</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_quirurgica" style="display: none;">
                            <strong style="font-size: 14px;">Quirúrgicas</strong>
                            <select name="quirurgicas" id="quirurgicas" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <!-- <option value="TyO">TyO</option>
                                <option value="Neurocirugía">Neurocirugía</option>
                                <option value="Cirugía oncológica">Cirugía oncológica</option>
                                <option value="Cirugía Cardiotorácica">Cirugía Cardiotorácica</option>
                                <option value="Cirugía General">Cirugía General</option>
                                <option value="Ortopédica">Ortopédica</option>
                                <option value="Ginecología y Obstetricia">Ginecología y Obstetricia</option>
                                <option value="Urología">Urología</option>
                                <option value="Trasplante">Trasplante</option> -->
                                <option value="Hemodinamía">Hemodinamía</option>
                                <option value="Quirófano">Qurófano</option>
                                <option value="Cirugía Ambulatoria">Cirugía Ambulatoria</option>
                                <option value="Endoscopía">Endoscopía</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Ceye">Ceye</option>
                            </select>
                        </div>


                        <div class="col-md-3" id="servicio_perinatales" style="display: none;">
                            <strong style="font-size: 14px;">Perinatales</strong>
                            <select name="perinatales" id="perinatales" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Gineco">Gineco</option>
                                <option value="Triage Urgencias">Triage Urgencias</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_ambulatoria" style="display: none;">
                            <strong style="font-size: 14px;">Ambulatorias</strong>
                            <select name="Ambulatorias" id="Ambulatorias" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Consulta Externa">Consulta Externa</option>
                                <option value="Unidad Funcional">Unidad Funcional</option>
                                <option value="Rehabilitación">Rehabilitación</option>
                                <option value="Banco Sangre">Banco Sangre</option>
                                <option value="Imagen">Imagen</option>
                                <option value="Medicina Nuclear">Medicina Nuclear</option>
                                <option value="Hemodiálisis">Hemodiálisis</option>
                                <option value="Clínica Cateteres">Clínica Cateteres</option>
                                <option value="Clínica Heridas">Clínica Heridas</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_hospitalizacion" style="display: none;">
                            <strong style="font-size: 14px;">Hospitarias</strong>
                            <select name="hospitalizacion" id="hospitalizacion" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="4°">4°</option>
                                <option value="3°">3°</option>
                                <option value="2°">2°</option>
                                <option value="1° Hematología">1° Hematología</option>
                                <option value="1° Oncología Amb">1° Oncología Amb</option>
                                <option value="Gineco">Gineco</option>
                                <option value="Urgencías">Urgencías</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_Pediatria" style="display: none;">
                            <strong style="font-size: 14px;">Pediatría / Neonatología</strong>
                            <select name="pediatria" id="pediatria" class="form-control" style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Urgencias Pediatría">Urgencias Pediatría</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option>
                            </select>
                        </div>


                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(131, 96, 126);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                                Trabajador Sustituto</h5>
                        </div>


                        <div class="col-md-6" id="idnombre">
                            <strong style="font-size: 14px;">Trabajador Sustituto</strong>
                            <select name="nombre_sustituto" id="nombre_sustituto" class="control form-control"
                                style="font-size: 13px;" required>
                                <option value="">Seleccione un Empleado</option>
                                <?php
                                if (!empty($data_empleados)) {
                                    foreach ($data_empleados as $row1) {
                                        echo "<option value='" . $row1["nombre_empleado"] . "' 
                                        data-numeroempleado='" . $row1["no_empleado"] . "'
                                        data-gradoEstudios='" . $row1["ult_grado_estudio"] . "'
                                        >" . $row1["nombre_empleado"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay datos disponibles</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Número de Empleado</strong>
                            <input id="enlace_numeroempleado_sustituto" name="enlace_numeroempleado_sustituto"
                                type="number" class="control form-control" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Nivel Académico</strong>
                            <input name="nivel_academico_sustituto" id="nivel_academico_sustituto" class="control form-control"
                                style="font-size: 14px;" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Turno</strong>
                            <select name="Turno_sustituto" id="Turno_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Nocturno - LUNES, JUEVES Y SABADO">Nocturno - LUNES, JUEVES Y SABADO</option>
                                <option value="Nocturno - LUNES, MIERCOLES Y SABADO">Nocturno - LUNES, MIERCOLES Y SABADO</option>
                                <option value="Nocturno - LUNES, MIERCOLES Y VIERNES">Nocturno - LUNES, MIERCOLES Y VIERNES</option>
                                <option value="Nocturno - MARTES, JUEVES Y DOMINGO">Nocturno - MARTES, JUEVES Y DOMINGO</option>
                                <option value="Nocturno - MARTES, JUEVES Y SABADO">Nocturno - MARTES, JUEVES Y SABADO</option>
                                <option value="Nocturno - MARTES, VIERNES Y DOMINGO">Nocturno - MARTES, VIERNES Y DOMINGO</option>
                                <option value="Nocturno - MIERCOLES, VIERNES Y DOMINGO">Nocturno - MIERCOLES, VIERNES Y DOMINGO</option>
                                <option value="Jornada Acumulada Diurna">Jornada Acumulada Diurna</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Servicio</strong>
                            <select name="servicio_sustituto" id="servicio_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Críticas">Críticas</option>
                                <!-- <option value="Clínicas">Clínicas</option> -->
                                <option value="Quirúrgicas">Quirúrgicas</option>
                                <option value="Perinatales">Perinatales</option>
                                <option value="Ambulatorias">Ambulatorias</option>
                                <option value="Hospitalización">Hospitalización</option>
                                <option value="Pediatría/Neonatología">Pediatría/Neonatología</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_critica_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Críticas</strong>
                            <select name="critica_sustituto" id="critica_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Urgencias">Urgencias</option>
                                <!-- <option value="UCIA">UCIA</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option> -->
                                <option value="UTIA">UTIA</option>
                                <option value="UCIA">UCIA</option>
                                <option value="Hemodinamia">Hemodinamia</option>
                                <option value="4° Piso">4° Piso</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_clinica_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Clínicas</strong>
                            <select name="clinicas_sustituto" id="clinicas_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Medicina Interna">Medicina Interna</option>
                                <option value="Hematología">Hematología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Oncopediatría ">Oncopediatría </option>
                                <option value="Hemodiálisis">Hemodiálisis</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_quirurgica_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Quirúrgicas</strong>
                            <select name="quirurgicas_sustituto" id="quirurgicas_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <!-- <option value="Cirugía oncológica">Cirugía oncológica</option>
                                <option value="TyO">TyO</option> 
                                <option value="Neurocirugía">Neurocirugía</option>
                                <option value="Cirugía Cardiotorácica">Cirugía Cardiotorácica</option>
                                <option value="Cirugía General">Cirugía General</option>
                                <option value="Ortopédica">Ortopédica</option>
                                <option value="Ginecología y Obstetricia">Ginecología y Obstetricia</option>
                                <option value="Urología">Urología</option>
                                <option value="Trasplante">Trasplante</option> -->
                                <option value="Hemodinamía">Hemodinamía</option>
                                <option value="Quirófano">Qurófano</option>
                                <option value="Cirugía Ambulatoria">Cirugía Ambulatoria</option>
                                <option value="Endoscopía">Endoscopía</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Ceye">Ceye</option>
                            </select>

                        </div>
                        <div class="col-md-3" id="servicio_perinatales_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Perinatales</strong>
                            <select name="perinatales_sustituto" id="perinatales_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Gineco">Gineco</option>
                                <option value="Triage Urgencias">Triage Urgencias</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_ambulatoria_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Ambulatorias</strong>
                            <select name="Ambulatorias_sustituto" id="Ambulatorias_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Consulta Externa">Consulta Externa</option>
                                <option value="Unidad Funcional">Unidad Funcional</option>
                                <option value="Rehabilitación">Rehabilitación</option>
                                <option value="Banco Sangre">Banco Sangre</option>
                                <option value="Imagen">Imagen</option>
                                <option value="Medicina Nuclear">Medicina Nuclear</option>
                                <option value="Hemodiálisis">Hemodiálisis</option>
                                <option value="Clínica Cateteres">Clínica Cateteres</option>
                                <option value="Clínica Heridas">Clínica Heridas</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_hospitalizacion_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Hospitalarias</strong>
                            <select name="hospitalizacion_sustituto" id="hospitalizacion_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="4°">4°</option>
                                <option value="3°">3°</option>
                                <option value="2°">2°</option>
                                <option value="1° Hematología">1° Hematología</option>
                                <option value="1° Oncología Amb">1° Oncología Amb</option>
                                <option value="Gineco">Gineco</option>
                                <option value="Urgencías">Urgencías</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_Pediatria_sustituto" style="display: none;">
                            <strong style="font-size: 14px;">Pediatría / Neonatología</strong>
                            <select name="pediatria_sustituto" id="pediatria_sustituto" class="form-control"
                                style="font-size: 14px;">
                                <option value="">Seleccione</option>
                                <option value="Urgencias Pediatría">Urgencias Pediatría</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option>
                            </select>
                        </div>


                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(131, 96, 126);
                        color: aliceblue;
                        margin-top:10px;
                        font-size: 14px;">
                                Datos de la Suplencia</h5>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha de Tramite</strong>
                            <input type="date" class="control form-control" id="fecha_tramite" name="fecha_tramite"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Fecha de Suplencia</strong>
                            <input type="date" class="control form-control" id="fecha_suplencia" name="fecha_suplencia"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Nombre de Quien Autoriza </strong>
                            <input type="text" class="control form-control" id="autoriza" name="autoriza"
                                style="font-size: 13px;">
                        </div>



                    </div> <!-- DIV ROW LINEA 13 -->

            </div><!--DIV DEL BODY  -->


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>



        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
