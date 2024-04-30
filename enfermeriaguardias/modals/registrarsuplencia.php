<!-- Modal -->
<div class="modal fade" id="RegistrarSuplencia" tabindex="-1" aria-labelledby="RegistrarSuplencia" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header header-modal">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Formato para solicitud de autorización de suplencia
                    personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="EG_form" method="POST">

                    <!--este es el primer row para seleccionar qué número de suplencia se va a registrar-->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="suplencia" id="inlineRadio1"
                                    value="Suplencia 1" required>
                                <label class="form-check-label" for="inlineRadio1">1° Suplencia</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="suplencia" id="inlineRadio2"
                                    value="Suplencia 2">
                                <label class="form-check-label" for="inlineRadio2">2° Suplencia</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="suplencia" id="inlineRadio3"
                                    value="Suplencia 3">
                                <label class="form-check-label" for="inlineRadio3">3° Suplencia</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="suplencia" id="inlineRadio4"
                                    value="Suplencia 4">
                                <label class="form-check-label" for="inlineRadio4">4° Suplencia</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="suplencia" id="inlineRadio5"
                                    value="Suplencia 5">
                                <label class="form-check-label" for="inlineRadio5">5° Suplencia</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="suplencia" id="inlineRadio6"
                                    value="Suplencia 6">
                                <label class="form-check-label" for="inlineRadio6">6° Suplencia</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-inline">
                                <strong for="fechaHoy" class="me-2">Fecha de Solicitud</strong>
                                <input type="date" id="fechaHoy" name="fechaHoy" class="form-control"
                                    value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>

                    </div> <!--este div cierra el primer row del número de suplencia a registrar-->


                    <!--Segmento de Datos del solicitante-->
                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                background-color: rgb(163, 186, 187 );
                color: aliceblue;
                margin-top:10px;
                font-size: 18px;">Datos del Solicitante</h4>
                    </div>

                    <div class="row"><!--este row corresponde a los datos del solicitante-->

                        <div class="col-md-4">
                            <strong>No. Empleado</strong>
                            <input id="numeroempleado_1" name="numeroempleado_1" type="number"
                                class="control form-control" onblur="datos_1()">
                        </div>

                        <div class="col-md-8">
                            <strong>Nombre</strong>
                            <input name="enlace_numeroempleado" id="enlace_numeroempleado" class="control form-control"
                                readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Nivel Académico</strong>
                            <input name="nivel_academico" id="nivel_academico" class="control form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Código de Puesto</strong>
                            <input id="codigopuesto" name="codigopuesto" type="text" class="control form-control"
                                readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Puesto</strong>
                            <input id="puesto" name="puesto" type="text" class="control form-control" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong>Turno</strong>
                            <select class="form-select" name="turno" id="turno" aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Nocturno">Nocturno</option>
                                <option value="Jornada Acumulada">Jornada Acumulada</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong>Días Hábiles</strong>
                            <select class="form-select" name="dias_h" id="dias_h"  aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                <option value="Lunes a Viernes">Lunes a Viernes</option>
                                <option value="Lunes, Jueves y Sábado">Lunes, Jueves y Sábado</option>
                                <option value="Lunes, Miércoles y Sábado">Lunes, Miércoles y Sábado</option>
                                <option value="Lunes, Miércoles y Viernes">Lunes, Miércoles y Viernes</option>
                                <option value="Martes, Jueves y Domingo">Martes, Jueves y Domingo</option>
                                <option value="Martes, Jueves y Sábado">Martes, Jueves y Sábado</option>
                                <option value="Martes, Viernes y Domingo">Martes, Viernes y Domingo</option>
                                <option value="Miércoles, Viernes y Domingo">Miércoles, Viernes y Domingo</option>
                                <option value="Jornada Acumulada Diruna">Jornada Acumulada Diruna</option>
                            </select>
                        </div>

                        <!-- Campo para seleccionar el rango de horarios -->
                        <div class="col-md-3">
                            <strong for="horaInicio" class="form-label">Horario inicio:</strong>
                            <input type="time" id="horaInicio" name="horaInicio" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <strong for="horaFin" class="form-label">Horario fin:</strong>
                            <input type="time" id="horaFin" name="horaFin" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <strong>Servicio</strong>
                            <select name="servicio" id="servicio" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Críticas">Críticas</option>
                                <option value="Quirúrgicas">Quirúrgicas</option>
                                <option value="Perinatales">Perinatales</option>
                                <option value="Ambulatorias">Ambulatorias</option>
                                <option value="Hospitalización">Hospitalización</option>
                                <option value="Pediatría/Neonatología">Pediatría/Neonatología</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_critica" style="display: none;">
                            <strong>Críticas</strong>
                            <select name="critica" id="critica" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Urgencias">Urgencias</option>
                                <option value="UTIA">UTIA</option>
                                <option value="UCIA">UCIA</option>
                                <option value="Hemodinamia">Hemodinamia</option>
                                <option value="4° Piso">4° Piso</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_clinica" style="display: none;">
                            <strong>Clínicas</strong>
                            <select name="clinicas" id="clinicas" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Medicina Interna">Medicina Interna</option>
                                <option value="Hematología">Hematología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Oncopediatría ">Oncopediatría </option>
                                <option value="Hemodiálisis">Hemodiálisis</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_quirurgica" style="display: none;">
                            <strong>Quirúrgicas</strong>
                            <select name="quirurgicas" id="quirurgicas" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Hemodinamía">Hemodinamía</option>
                                <option value="Quirófano">Qurófano</option>
                                <option value="Cirugía Ambulatoria">Cirugía Ambulatoria</option>
                                <option value="Endoscopía">Endoscopía</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Ceye">Ceye</option>
                            </select>
                        </div>


                        <div class="col-md-3" id="servicio_perinatales" style="display: none;">
                            <strong>Perinatales</strong>
                            <select name="perinatales" id="perinatales" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Gineco">Gineco</option>
                                <option value="Triage Urgencias">Triage Urgencias</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_ambulatoria" style="display: none;">
                            <strong>Ambulatorias</strong>
                            <select name="Ambulatorias" id="Ambulatorias" class="form-control">
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
                            <strong>Hospitarias</strong>
                            <select name="hospitalizacion" id="hospitalizacion" class="form-control">
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
                            <strong>Pediatría / Neonatología</strong>
                            <select name="pediatria" id="pediatria" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Urgencias Pediatría">Urgencias Pediatría</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option>
                            </select>
                        </div>
                    </div><!-- este div cierra el row corresponde a los datos del solicitante-->

                    <!--Segmento de Datos de quien efectua la supplencia-->
                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                background-color: rgb(163, 186, 187 );
                color: aliceblue;
                margin-top:10px;
                font-size: 18px;">Datos de quien efectúa la suplencia</h4>
                    </div>

                    <div class="row"><!--este es el div row de quien efectua la suplencia-->
                        <div class="col-md-4">
                            <strong>No. Empleado</strong>
                            <input id="numeroempleado_suplencia" name="numeroempleado_suplencia"
                                type="number" class="control form-control" onblur="datos_2()">
                        </div>

                        <div class="col-md-8">
                            <strong>Nombre</strong>
                            <input name="nombre_suplencia" id="nombre_suplencia" class="control form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Nivel Académico</strong>
                            <input name="nivel_academico_suplencia" id="nivel_academico_suplencia"
                                class="control form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Código de Puesto</strong>
                            <input id="codigopuesto_suplencia" name="codigopuesto_suplencia" type="text"
                                class="control form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Puesto</strong>
                            <input id="puesto_suplencia" name="puesto_suplencia" type="text"
                                class="control form-control" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong>Turno</strong>
                            <select class="form-select" name="turno2" id="turno2" aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Nocturno">Nocturno</option>
                                <option value="Jornada Acumulada">Jornada Acumulada</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong>Días Hábiles</strong>
                            <select class="form-select" name="dias_h2" id="dias_h2" aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                <option value="Lunes a Viernes">Lunes a Viernes</option>
                                <option value="Lunes, Jueves y Sábado">Lunes, Jueves y Sábado</option>
                                <option value="Lunes, Miércoles y Sábado">Lunes, Miércoles y Sábado</option>
                                <option value="Lunes, Miércoles y Viernes">Lunes, Miércoles y Viernes</option>
                                <option value="Martes, Jueves y Domingo">Martes, Jueves y Domingo</option>
                                <option value="Martes, Jueves y Sábado">Martes, Jueves y Sábado</option>
                                <option value="Martes, Viernes y Domingo">Martes, Viernes y Domingo</option>
                                <option value="Miércoles, Viernes y Domingo">Miércoles, Viernes y Domingo</option>
                                <option value="Jornada Acumulada Diruna">Jornada Acumulada Diruna</option>
                            </select>
                        </div>

                        <!-- Campo para seleccionar el rango de horarios -->
                        <div class="col-md-3">
                            <strong for="horaInicio_suplencia" class="form-label">Horario inicio:</strong>
                            <input type="time" id="horaInicio_suplencia" name="horaInicio_suplencia"
                                class="form-control">
                        </div>

                        <div class="col-md-3">
                            <strong for="horaFin_suplencia" class="form-label">Horario fin:</strong>
                            <input type="time" id="horaFin_suplencia" name="horaFin_suplencia" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <strong>Servicio</strong>
                            <select name="servicio_sustituto" id="servicio_sustituto" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Críticas">Críticas</option>
                                <option value="Quirúrgicas">Quirúrgicas</option>
                                <option value="Perinatales">Perinatales</option>
                                <option value="Ambulatorias">Ambulatorias</option>
                                <option value="Hospitalización">Hospitalización</option>
                                <option value="Pediatría/Neonatología">Pediatría/Neonatología</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_critica_sustituto" style="display: none;">
                            <strong>Críticas</strong>
                            <select name="critica_sustituto" id="critica_sustituto" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Urgencias">Urgencias</option>
                                <option value="UTIA">UTIA</option>
                                <option value="UCIA">UCIA</option>
                                <option value="Hemodinamia">Hemodinamia</option>
                                <option value="4° Piso">4° Piso</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_clinica_sustituto" style="display: none;">
                            <strong>Clínicas</strong>
                            <select name="clinicas_sustituto" id="clinicas_sustituto" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Medicina Interna">Medicina Interna</option>
                                <option value="Hematología">Hematología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Oncopediatría ">Oncopediatría </option>
                                <option value="Hemodiálisis">Hemodiálisis</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_quirurgica_sustituto" style="display: none;">
                            <strong>Quirúrgicas</strong>
                            <select name="quirurgicas_sustituto" id="quirurgicas_sustituto" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Hemodinamía">Hemodinamía</option>
                                <option value="Quirófano">Qurófano</option>
                                <option value="Cirugía Ambulatoria">Cirugía Ambulatoria</option>
                                <option value="Endoscopía">Endoscopía</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Ceye">Ceye</option>
                            </select>

                        </div>
                        <div class="col-md-3" id="servicio_perinatales_sustituto" style="display: none;">
                            <strong>Perinatales</strong>
                            <select name="perinatales_sustituto" id="perinatales_sustituto" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="UTQ">UTQ</option>
                                <option value="Gineco">Gineco</option>
                                <option value="Triage Urgencias">Triage Urgencias</option>

                            </select>
                        </div>

                        <div class="col-md-3" id="servicio_ambulatoria_sustituto" style="display: none;">
                            <strong>Ambulatorias</strong>
                            <select name="Ambulatorias_sustituto" id="Ambulatorias_sustituto" class="form-control">
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
                            <strong>Hospitalarias</strong>
                            <select name="hospitalizacion_sustituto" id="hospitalizacion_sustituto"
                                class="form-control">
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
                            <strong>Pediatría / Neonatología</strong>
                            <select name="pediatria_sustituto" id="pediatria_sustituto" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Urgencias Pediatría">Urgencias Pediatría</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="UCIN">UCIN</option>
                                <option value="UTIN ">UTIN </option>
                                <option value="UCIP">UCIP</option>
                                <option value="UTIP">UTIP</option>
                            </select>
                        </div>

                    </div><!--este es el div row de quien efectua la suplencia-->


                    <!--Segmento de Día que solicita-->
                    <div class="form-header">
                        <h4 class="form-title" style="text-align: center;
                background-color: rgb(163, 186, 187 );
                color: aliceblue;
                margin-top:10px;
                font-size: 18px;">Día que solicita</h4>
                    </div>

                    <div class="row">
                        <!-- Campo para seleccionar la fecha de inicio -->
                        <div class="col-md-4">
                            <strong for="fechaInicio" class="form-label">Del:</strong>
                            <input type="date" id="fechaInicio" name="fechaInicio" class="form-control">
                        </div>

                        <!-- Campo para seleccionar la fecha de fin -->
                        <div class="col-md-4">
                            <strong for="fechaFin" class="form-label">Al:</strong>
                            <input type="date" id="fechaFin" name="fechaFin" class="form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong>Autoriza</strong>
                            <select type="text" class="control form-control" id="autoriza" name="autoriza">
                                <option value="">Seleccione...</option>
                                <option value="BECERRIL VERGARA ALONDRA MERCEDES">BECERRIL VERGARA ALONDRA MERCEDES</option>
                                <option value="ESPINOZA REYES MARIA DEL CARMEN">ESPINOZA REYES MARIA DEL CARMEN</option>
                                <option value="GARCIA VELASCO MARIA DE LOS ANGELES">GARCIA VELASCO MARIA DE LOS ANGELES</option>
                                <option value="GAYTAN MEDEL SARAI">GAYTAN MEDEL SARAI</option>
                                <option value="GORDILLO CRUZ ARACELI">GORDILLO CRUZ ARACELI</option>
                                <option value="HERNANDEZ GARCIA VERONICA">HERNANDEZ GARCIA VERONICA</option>
                                <option value="HERRERA HINOJOSA MARCO ANTONIO">HERRERA HINOJOSA MARCO ANTONIO</option>
                                <option value="HUERTA ESPINDOLA MARIO ROBERTO">HUERTA ESPINDOLA MARIO ROBERTO</option>
                                <option value="JAINZ HERNANDEZ ALEJANDRA">JAINZ HERNANDEZ ALEJANDRA</option>
                                <option value="SALADO LUCERO MARIA LETICIA">SALADO LUCERO MARIA LETICIA</option>
                                <option value="SANABRIA PAISANO JOSE ALFREDO">SANABRIA PAISANO JOSE ALFREDO</option>
                                <option value="SANCHEZ MORENO MARIA DEL ROCIO">SANCHEZ MORENO MARIA DEL ROCIO</option>
                                <option value="TAMANIS LAVASTIDA PABLO">TAMANIS LAVASTIDA PABLO</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <strong>Observaciones</strong>
                            <input id="observaciones" name="observaciones" type="text" class="control form-control">
                        </div>

                    </div><!-- es el div que cierra día que solicita-->


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                    </div>

                </form>


            </div>

        </div>
    </div>
</div>