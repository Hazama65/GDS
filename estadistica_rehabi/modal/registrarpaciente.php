<div class="modal fade" id="CancerMama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard2-pulse modal-title fs-4" id="exampleModalLabel">Estadistica Rehabilitación</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div style="background-color: rgb(106, 158, 218);
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                    <h6>Datos del Terapeuta</h6>
                </div>

                <!-- Datos de llegada del paciente  -->

                <form id="ER_form" method="POST">
                    <div class="row">
    
                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Nombre Terapeuta</strong>
                            <select name="nombre_terapeuta" id="nombre_terapeuta" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                                <option value="L.T.F  Estephanie García Martinez">L.T.F  Estephanie García Martinez</option>
                                <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                                <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                                <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                                <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                            </select>
                        </div>
    
    
                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Turno</strong>
                            <select name="Turno_terapeuta" id="Turno_terapeuta" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Jornada">Jornada</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                            </select>
                        </div>
    
                        <div class="col-md-6" style="display:none;">
                            <strong style="font-size: 13px;">Fecha de registro</strong>
                            <input id="fecha_registro" name="fecha_registro" type="date" class="control form-control" value="" style="font-size: 13px;" readonly>
                        </div>
    
                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                                background-color:rgb(106, 158, 218);
                                color: aliceblue;
                                margin-top:10px;
                                font-size: 14px;">
                                Datos del Paciente</h5>
                        </div>
    
                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Nombre del Paciente</strong>
                            <input id="nombre_paciente" name="nombre_paciente" type="text" class="control form-control" value="" style="font-size: 13px;">
                        </div>
    
    
    
                        <div class="col-md-3">
                            <strong style="font-size: 13px;">CURP</strong>
                            <input id="curp" name="curp" type="text" class="control form-control" value="" style="font-size: 13px;">
                        </div>
    
                        <div class="col-md-3">
                            <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                            <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                        </div>
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Edad</strong>
                            <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                        </div>
    
                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Sexo</strong>
                            <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                        </div>
    
                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Tipo de Paciente</strong>
                            <select name="tipo_paciente" id="tipo_paciente" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Pediatrico">Pediatrico</option>
                                <option value="Adulto">Adulto</option>
                            </select>
                        </div>
    
                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Tipo de Consulta</strong>
                            <select name="tipo_consulta" id="tipo_consulta" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Primera Vez">Primera Vez</option>
                                <option value="Subsecuente">Subsecuente</option>
                            </select>
                        </div>
    
    
                        <div class="col-md-3" id="num_sesiones" style="display:none;">
                            <strong style="font-size: 13px;">Número de Sesiones</strong>
                            <input id="sesiones_num" name="sesiones_num" type="number" class="control form-control" value="" style="font-size: 13px;">
                        </div>
    
    
    
                        <div class="form-header">
                            <h6 class="form-title" style="text-align: center;
                                background-color: rgb(106, 158, 218) ;
                                color: aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                                Terapias y Procedimientos</h6>
                        </div>
    
                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Tipo de Terapias</strong>
                            <select name="tipo_terapias" id="tipo_terapias" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Terapias ambulatorias">Terapias ambulatorias</option>
                                <option value="Terapias en Hospitalización">Terapias en Hospitalización</option>
                            </select>
                        </div>
    
    
    
    
                        <!-- Procedimientos -->
    
                        <div class="container" id="Procedimientos">
                        <div class="form-header">
                            <h6 class="form-title" style="text-align: center;
                                background-color: rgb(106, 158, 218,0.5) ;
                                color: aliceblue;
                                margin-top:15px;
                                font-size: 14px;"> Procedimientos</h6>
                        </div>
                            <div class="row">
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia fisica</span>
                                    <input type="checkbox" name="terapia_fisica" id="terapia_fisica" value="Terapia fisica" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia ocupacional</span>
                                    <input type="checkbox" name="terapia_ocupacional" id="terapia_ocupacional" value="Terapia ocupacional" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia de lenguaje</span>
                                    <input type="checkbox" name="terapia_lenguaje" id="terapia_lenguaje" value="Terapia de lenguaje" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Aplicación de férula</span>
                                    <input type="checkbox" name="aplicacion_ferula" id="aplicacion_ferula" value="Aplicación de férula" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Aplicación de vendaje enyesado</span>
                                    <input type="checkbox" name="Aplicacion_vendaje_enyesado" id="Aplicacion_vendaje_enyesado" value="Aplicación de vendaje enyesado" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Baño de parafina</span>
                                    <input type="checkbox" name="Baño_parafina" id="Baño_parafina" value="Baño de parafina" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">CHC/CF</span>
                                    <input type="checkbox" name="CHC_CF" id="CHC_CF" value="CHC/CF" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Corrientes interfereciales</span>
                                    <input type="checkbox" name="Corrientes_interfereciales" id="Corrientes_interfereciales" value="Corrientes interfereciales" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Electroestimulación</span>
                                    <input type="checkbox" name="Electroestimulacion" id="Electroestimulacion" value="Electroestimulación" style="font-size:14px; margin: 5px auto; display: block;">
    
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ejercicio Asistido</span>
                                    <input type="checkbox" name="Ejercicio_Asistido" id="Ejercicio_Asistido" value="Ejercicio Asistido" style="font-size:14px; margin: 5px auto; display: block;">
    
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ejercicio de Fisioterapia</span>
                                    <input type="checkbox" name="Ejercicio_Fisioterapia" id="Ejercicio_Fisioterapia" value="Ejercicio de Fisioterapia" style="font-size:14px; margin: 5px auto; display: block;">
    
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Hidroterapia/Tanque Terapéutico</span>
                                    <input type="checkbox" name="Hidroterapia_TanqueTerapéutico" id="Hidroterapia_TanqueTerapéutico" value="Hidroterapia/Tanque Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Hidroterapia/Tina de Habbard</span>
                                    <input type="checkbox" name="Hidroterapia_Tina_Habbard" id="Hidroterapia_Tina_Habbard" value="Hidroterapia/Tina de Habbard" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Hidroterapia/Tina de Remolinos</span>
                                    <input type="checkbox" name="Hidroterapia_Tina_Remolinos" id="Hidroterapia_Tina_Remolinos" value="Hidroterapia/Tina de Remolinos" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">TENS</span>
                                    <input type="checkbox" name="TENS" id="TENS" value="TENS" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia combinada USG y Corriente Eléctrica</span>
                                    <input type="checkbox" name="TerapiacombinadaUSG_CorrienteEléctrica" id="TerapiacombinadaUSG_CorrienteEléctrica" value="Terapia combinada USG y Corriente Eléctrica" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ultrasonido Terapéutico</span>
                                    <input type="checkbox" name="Ultrasonido_Terapeutico" id="Ultrasonido_Terapeutico" value="Ultrasonido Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Tracción Cervical y Lumbar</span>
                                    <input type="checkbox" name="TraccionCervical_Lumbar" id="TraccionCervical_Lumbar" value="Tracción Cervical y Lumbar" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Rehabilitacion Cardíaca</span>
                                    <input type="checkbox" name="Rehabi_cardiaca" id="Rehabi_cardiaca" value="Rehabilitacion Cardíaca" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ejercicio respiratorio (R. Pulmonar)</span>
                                    <input type="checkbox" name="Ejercicios_respiratorio" id="Ejercicios_respiratorio" value="Ejercicio respiratorio (R. Pulmonar)" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia Laser</span>
                                    <input type="checkbox" name="Terapia_Laser" id="Terapia_Laser" value="Terapia Laser" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
                                <div class="col-md-3" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Toxina Botulinica</span>
                                    <input type="checkbox" name="Toxina_Botulinica" id="Toxina_Botulinica" value="Toxina Botulinica" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>
    
    
    
    
    
    
    
                            </div>
                        </div>
    
    
    
    
                    </div> <!-- DIV ROW LINEA 11 -->
    
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> <br>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>


            </div><!--DIV DEL BODY  -->


        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>