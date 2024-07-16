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
                                <option value="L.T.F Ana Carolina Flores Morelos">L.T.F Ana Carolina Flores Morelos</option>
                                <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                                <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                                <option value="L.T.C.H Fonseca Ayala Mariana">L.T.C.H Fonseca Ayala Mariana</option>
                                <option value="L.T.C.H Katia Mayte De La Paz Gonzalez">L.T.C.H Katia Mayte De La Paz Gonzalez</option>
                                <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                                <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                                <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                                <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                                <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                                <option value="L.T.F Diana Carolina Villegas Bannack.">L.T.F Diana Carolina Villegas Bannack.</option>
                                <option value="L.T.F Estephanie García Martinez">L.T.F Estephanie García Martinez</option>
                                <option value="L.T.F Juan Carlos Reyna Mayorga">L.T.F Juan Carlos Reyna Mayorga</option>
                                <option value="L.T.F Maria Teresa De Jesus Perez Rios">L.T.F Maria Teresa De Jesus Perez Rios</option>
                                <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                                <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                                <option value="L.T.F Najla Karina Gelista Tovar">L.T.F Najla Karina Gelista Tovar</option>
                                <option value="L.T.F Negrete Rubio David Israel">L.T.F Negrete Rubio David Israel</option>
                                <option value="L.T.O Briseida Guevara Leyva">L.T.O Briseida Guevara Leyva</option>
                                <option value="L.T.O Lopez Sanchez Andrea Berenice">L.T.O Lopez Sanchez Andrea Berenice</option>
                                <option value="P.T.C.H Espejo Rodríguez Erika Daniela">P.T.C.H Espejo Rodríguez Erika Daniela</option>
                                <option value="P.T.F Diana Sofia Arceo Ramirez">P.T.F Diana Sofia Arceo Ramirez</option>
                                <option value="P.T.F Eloisa Medina Galicia">P.T.F Eloisa Medina Galicia</option>
                                <option value="P.T.F Mariana Quintero Flores">P.T.F Mariana Quintero Flores</option>
                                <option value="P.T.F Valeria Yamilet Albarran Casanova">P.T.F Valeria Yamilet Albarran Casanova</option>
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
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Edad</strong>
                            <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                        </div>
    
                        <div class="col-md-2">
                            <strong style="font-size: 14px;">Sexo</strong>
                            <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                        </div>
    
                        <div class="col-md-2">
                            <strong style="font-size: 13px;">Tipo de Paciente</strong>
                            <select name="tipo_paciente" id="tipo_paciente" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Pediatrico">Pediatrico</option>
                                <option value="Adulto">Adulto</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px; ">Fecha Incio (Tratamiento)</strong>
                            <input id="fecha_inicio" name="fecha_inicio" type="date" class="control form-control" style="font-size: 13px;" required>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px; ">Fecha Fin (Tratamiento)</strong>
                            <input id="fecha_fin" name="fecha_fin" type="date" class="control form-control" style="font-size: 13px;" required>
                        </div>
        
                        <!-- Procedimientos -->
    
                        <div class="container" id="Procedimientos">
                            <div class="form-header">
                                <h6 class="form-title" style="text-align: center;
                                    background-color: rgb(106, 158, 218) ;
                                    color: aliceblue;
                                    margin-top:15px;
                                    font-size: 14px;">
                                    Terapias</h6>
                            </div>
                            <div class="row">
    
                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia fisica</span>
                                    <input type="checkbox" onchange="toggleFields('terapia_fisica')" name="terapia_fisica" id="terapia_fisica" value="Terapia fisica" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_terapia_fisica" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Terapias fisicas</strong>
                                    <input id="sesiones_num_terapia_fisica" name="sesiones_num_terapia_fisica" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_primera_vez_terapia_fisica" style="display:none;">
                                    <strong style="font-size: 13px;">Primera Vez</strong>
                                    <input id="primera_vez_terapia_fisica" name="primera_vez_terapia_fisica" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_subsecuente_terapia_fisica" style="display:none;">
                                    <strong style="font-size: 13px;">Subsecuente</strong>
                                    <input id="subsecuente_terapia_fisica" name="subsecuente_terapia_fisica" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_terapias_ambulatorias_terapia_fisica" style="display:none;">
                                    <strong style="font-size: 13px;">Terapias ambulatorias</strong>
                                    <input id="terapias_ambulatorias_terapia_fisica" name="terapias_ambulatorias_terapia_fisica" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_terapias_hospitalizacion_terapia_fisica" style="display:none;">
                                    <strong style="font-size: 13px;">Terapias en Hospitalización</strong>
                                    <input id="terapias_hospitalizacion_terapia_fisica" name="terapias_hospitalizacion_terapia_fisica" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>
    
                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia ocupacional</span>
                                    <input type="checkbox" onchange="toggleFields('terapia_ocupacional')" name="terapia_ocupacional" id="terapia_ocupacional" value="Terapia ocupacional" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_terapia_ocupacional" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Terapia ocupacional</strong>
                                    <input id="sesiones_num_terapia_ocupacional" name="sesiones_num_terapia_ocupacional" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_primera_vez_terapia_ocupacional" style="display:none;">
                                    <strong style="font-size: 13px;">Primera Vez</strong>
                                    <input id="primera_vez_terapia_ocupacional" name="primera_vez_terapia_ocupacional" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_subsecuente_terapia_ocupacional" style="display:none;">
                                    <strong style="font-size: 13px;">Subsecuente</strong>
                                    <input id="subsecuente_terapia_ocupacional" name="subsecuente_terapia_ocupacional" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_terapias_ambulatorias_terapia_ocupacional" style="display:none;">
                                    <strong style="font-size: 13px;">Terapias ambulatorias</strong>
                                    <input id="terapias_ambulatorias_terapia_ocupacional" name="terapias_ambulatorias_terapia_ocupacional" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_terapias_hospitalizacion_terapia_ocupacional" style="display:none;">
                                    <strong style="font-size: 13px;">Terapias en Hospitalización</strong>
                                    <input id="terapias_hospitalizacion_terapia_ocupacional" name="terapias_hospitalizacion_terapia_ocupacional" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>
    
                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia de lenguaje</span>
                                    <input type="checkbox" onchange="toggleFields('terapia_lenguaje')" name="terapia_lenguaje" id="terapia_lenguaje" value="Terapia de lenguaje" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_terapia_lenguaje" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Terapia de lenguaje</strong>
                                    <input id="sesiones_num_terapia_lenguaje" name="sesiones_num_terapia_lenguaje" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_primera_vez_terapia_lenguaje" style="display:none;">
                                    <strong style="font-size: 13px;">Primera Vez</strong>
                                    <input id="primera_vez_terapia_lenguaje" name="primera_vez_terapia_lenguaje" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_subsecuente_terapia_lenguaje" style="display:none;">
                                    <strong style="font-size: 13px;">Subsecuente</strong>
                                    <input id="subsecuente_terapia_lenguaje" name="subsecuente_terapia_lenguaje" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_terapias_ambulatorias_terapia_lenguaje" style="display:none;">
                                    <strong style="font-size: 13px;">Terapias ambulatorias</strong>
                                    <input id="terapias_ambulatorias_terapia_lenguaje" name="terapias_ambulatorias_terapia_lenguaje" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" id="div_terapias_hospitalizacion_terapia_lenguaje" style="display:none;">
                                    <strong style="font-size: 13px;">Terapias en Hospitalización</strong>
                                    <input id="terapias_hospitalizacion_terapia_lenguaje" name="terapias_hospitalizacion_terapia_lenguaje" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>
    
                            </div>
                            <div class="form-header">
                                <h6 class="form-title" style="text-align: center;
                                    background-color: rgb(106, 158, 218) ;
                                    color: aliceblue;
                                    margin-top:15px;
                                    font-size: 14px;">
                                    Procedimientos</h6>
                            </div>
                            <div class="row">

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Aplicación de férula</span>
                                    <input type="checkbox" onchange="toggleFields('aplicacion_ferula')" name="aplicacion_ferula" id="aplicacion_ferula" value="Aplicación de férula" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_aplicacion_ferula" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Aplicación de férula</strong>
                                    <input id="sesiones_num_aplicacion_ferula" name="sesiones_num_aplicacion_ferula" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Aplicación de vendaje enyesado</span>
                                    <input type="checkbox" onchange="toggleFields('Aplicacion_vendaje_enyesado')" name="Aplicacion_vendaje_enyesado" id="Aplicacion_vendaje_enyesado" value="Aplicación de vendaje enyesado" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Aplicacion_vendaje_enyesado" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Aplicación de vendaje enyesado</strong>
                                    <input id="sesiones_num_Aplicacion_vendaje_enyesado" name="sesiones_num_Aplicacion_vendaje_enyesado" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Baño de parafina</span>
                                    <input type="checkbox" onchange="toggleFields('Baño_parafina')" name="Baño_parafina" id="Baño_parafina" value="Baño de parafina" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Baño_parafina" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Baño de parafina</strong>
                                    <input id="sesiones_num_Baño_parafina" name="sesiones_num_Baño_parafina" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">CHC/CF</span>
                                    <input type="checkbox" onchange="toggleFields('CHC_CF')" name="CHC_CF" id="CHC_CF" value="CHC/CF" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_CHC_CF" style="display:none;">
                                    <strong style="font-size: 13px;">Número de CHC/CF</strong>
                                    <input id="sesiones_num_CHC_CF" name="sesiones_num_CHC_CF" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Corrientes interfereciales</span>
                                    <input type="checkbox" onchange="toggleFields('Corrientes_interfereciales')" name="Corrientes_interfereciales" id="Corrientes_interfereciales" value="Corrientes interfereciales" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Corrientes_interfereciales" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Corrientes interfereciales</strong>
                                    <input id="sesiones_num_Corrientes_interfereciales" name="sesiones_num_Corrientes_interfereciales" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Electroestimulación</span>
                                    <input type="checkbox" onchange="toggleFields('Electroestimulacion')" name="Electroestimulacion" id="Electroestimulacion" value="Electroestimulación" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Electroestimulacion" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Electroestimulación</strong>
                                    <input id="sesiones_num_Electroestimulacion" name="sesiones_num_Electroestimulacion" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ejercicio Asistido</span>
                                    <input type="checkbox" onchange="toggleFields('Ejercicio_Asistido')" name="Ejercicio_Asistido" id="Ejercicio_Asistido" value="Ejercicio Asistido" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Ejercicio_Asistido" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Ejercicio Asistido</strong>
                                    <input id="sesiones_num_Ejercicio_Asistido" name="sesiones_num_Ejercicio_Asistido" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ejercicio de Fisioterapia</span>
                                    <input type="checkbox" onchange="toggleFields('Ejercicio_Fisioterapia')" name="Ejercicio_Fisioterapia" id="Ejercicio_Fisioterapia" value="Ejercicio de Fisioterapia" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Ejercicio_Fisioterapia" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Ejercicio de Fisioterapia</strong>
                                    <input id="sesiones_num_Ejercicio_Fisioterapia" name="sesiones_num_Ejercicio_Fisioterapia" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Hidroterapia/Tanque Terapéutico</span>
                                    <input type="checkbox" onchange="toggleFields('Hidroterapia_TanqueTerapéutico')" name="Hidroterapia_TanqueTerapéutico" id="Hidroterapia_TanqueTerapéutico" value="Hidroterapia/Tanque Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Hidroterapia_TanqueTerapéutico" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Hidroterapia/Tanque Terapéutico</strong>
                                    <input id="sesiones_num_Hidroterapia_TanqueTerapéutico" name="sesiones_num_Hidroterapia_TanqueTerapéutico" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Hidroterapia/Tina de Habbard</span>
                                    <input type="checkbox" onchange="toggleFields('Hidroterapia_Tina_Habbard')" name="Hidroterapia_Tina_Habbard" id="Hidroterapia_Tina_Habbard" value="Hidroterapia/Tina de Habbard" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Hidroterapia_Tina_Habbard" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Hidroterapia/Tina de Habbard</strong>
                                    <input id="sesiones_num_Hidroterapia_Tina_Habbard" name="sesiones_num_Hidroterapia_Tina_Habbard" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Hidroterapia/Tina de Remolinos</span>
                                    <input type="checkbox" onchange="toggleFields('Hidroterapia_Tina_Remolinos')" name="Hidroterapia_Tina_Remolinos" id="Hidroterapia_Tina_Remolinos" value="Hidroterapia/Tina de Remolinos" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Hidroterapia_Tina_Remolinos" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Hidroterapia/Tina de Remolinos</strong>
                                    <input id="sesiones_num_Hidroterapia_Tina_Remolinos" name="sesiones_num_Hidroterapia_Tina_Remolinos" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">TENS</span>
                                    <input type="checkbox" onchange="toggleFields('TENS')" name="TENS" id="TENS" value="TENS" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_TENS" style="display:none;">
                                    <strong style="font-size: 13px;">Número de TENS</strong>
                                    <input id="sesiones_num_TENS" name="sesiones_num_TENS" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia combinada USG y Corriente Eléctrica</span>
                                    <input type="checkbox" onchange="toggleFields('TerapiacombinadaUSG_CorrienteEléctrica')" name="TerapiacombinadaUSG_CorrienteEléctrica" id="TerapiacombinadaUSG_CorrienteEléctrica" value="Terapia combinada USG y Corriente Eléctrica" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Terapia combinada USG y Corriente Eléctrica</strong>
                                    <input id="sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica" name="sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ultrasonido Terapéutico</span>
                                    <input type="checkbox" onchange="toggleFields('Ultrasonido_Terapeutico')" name="Ultrasonido_Terapeutico" id="Ultrasonido_Terapeutico" value="Ultrasonido Terapéutico" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Ultrasonido_Terapeutico" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Ultrasonido Terapéutico</strong>
                                    <input id="sesiones_num_Ultrasonido_Terapeutico" name="sesiones_num_Ultrasonido_Terapeutico" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Tracción Cervical y Lumbar</span>
                                    <input type="checkbox" onchange="toggleFields('TraccionCervical_Lumbar')" name="TraccionCervical_Lumbar" id="TraccionCervical_Lumbar" value="Tracción Cervical y Lumbar" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_TraccionCervical_Lumbar" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Tracción Cervical y Lumbar</strong>
                                    <input id="sesiones_num_TraccionCervical_Lumbar" name="sesiones_num_TraccionCervical_Lumbar" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Rehabilitacion Cardíaca</span>
                                    <input type="checkbox" onchange="toggleFields('Rehabi_cardiaca')" name="Rehabi_cardiaca" id="Rehabi_cardiaca" value="Rehabilitacion Cardíaca" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Rehabi_cardiaca" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Rehabilitacion Cardíaca</strong>
                                    <input id="sesiones_num_Rehabi_cardiaca" name="sesiones_num_Rehabi_cardiaca" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Ejercicio respiratorio (R. Pulmonar)</span>
                                    <input type="checkbox" onchange="toggleFields('Ejercicios_respiratorio')" name="Ejercicios_respiratorio" id="Ejercicios_respiratorio" value="Ejercicio respiratorio (R. Pulmonar)" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Ejercicios_respiratorio" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Ejercicio respiratorio (R. Pulmonar)</strong>
                                    <input id="sesiones_num_Ejercicios_respiratorio" name="sesiones_num_Ejercicios_respiratorio" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Terapia Laser</span>
                                    <input type="checkbox" onchange="toggleFields('Terapia_Laser')" name="Terapia_Laser" id="Terapia_Laser" value="Terapia Laser" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Terapia_Laser" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Terapia Laser</strong>
                                    <input id="sesiones_num_Terapia_Laser" name="sesiones_num_Terapia_Laser" type="number" class="control form-control" value="" style="font-size: 13px;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size:13px; display: block;">Toxina Botulinica</span>
                                    <input type="checkbox" onchange="toggleFields('Toxina_Botulinica')" name="Toxina_Botulinica" id="Toxina_Botulinica" value="Toxina Botulinica" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" id="div_sesiones_num_Toxina_Botulinica" style="display:none;">
                                    <strong style="font-size: 13px;">Número de Toxina Botulinica</strong>
                                    <input id="sesiones_num_Toxina_Botulinica" name="sesiones_num_Toxina_Botulinica" type="number" class="control form-control" value="" style="font-size: 13px;">
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