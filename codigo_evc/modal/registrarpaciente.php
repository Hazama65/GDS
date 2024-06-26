<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard2-heart modal-title fs-4" id="exampleModalLabel">Registro Paciente Stroke</h1>


                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="evc_form" method="POST">
                    <!-- Datos de llegada del paciente  -->
                    <div class="row">

                        <div class="col-md-6" id="idnombre">
                            <strong style="font-size: 14px;">Nombre Completo</strong>
                            <input id="nombre" name="nombre" type="text" class="control form-control"
                                style="font-size: 13px;" required>
                        </div>

                        <div class="col-md-6" id="idcurp">
                            <strong style="font-size: 14px;">CURP</strong>
                            <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px; ">Fecha de Nacimiento</strong>
                            <input id="fecha" name="fecha" type="date" onblur="curp2date();"
                                class="control form-control" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Sexo</strong>
                            <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo"
                                style="font-size: 13px;" readonly>
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 14px;">Edad de Ingreso</strong>
                            <input id="edad" name="edad" type="number" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6" style="display:none">
                            <strong style="font-size: 14px; ">Fecha</strong>
                            <input id="fecha_Actual" name="fecha_Actual" type="date" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-3" style="display:none">
                            <strong style="font-size: 14px; ">Horario</strong>
                            <input id="tiempo" name="tiempo" type="time" class="control form-control"
                                style="font-size: 13px;" style="display: none;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Fecha de Sintomas</strong>
                            <input id="fecha_inicio" name="fecha_inicio" type="date" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Inicio de Sintomas</strong>
                            <input id="inicio_sintomas" name="inicio_sintomas" type="time" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <!-- ************************Escala F.A.S.T*********************************** -->
                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(155, 165, 209) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                Escala F.A.S.T</h5>
                        </div>


                        <div class="row"> <!--ROW DE ESCALA FACE  -->

                            <div class="col-md-3" id="escala_face">
                                <strong style="font-size: 14px;">FACE</strong>
                                <select name="Face" id="Face" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>

                            <div class="col-md-3" id="escala_arms">
                                <strong style="font-size: 14px;">ARMS</strong>
                                <select name="arms" id="arms" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>

                            <div class="col-md-3" id="escala_speech">
                                <strong style="font-size: 14px;">SPEECH</strong>
                                <select name="speech" id="speech" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>


                            <div class="col-md-3">
                                <strong style="font-size: 14px;">TIME</strong>
                                <input type="text" class="control form-control" id="resultado_time"
                                    name="resultado_time" style="font-size: 13px;" readonly>
                            </div>

                        </div><!-- row  ESCALA FAST-->

                        <!-- ************************Escala NIHHS*********************************** -->
                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(155, 165, 209) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                Escala N.I.H.S.S Inicial</h5>
                        </div>



                        <div class="col-md-12" id="escala_nihss">
                            <i><a style="font-size: 14px; margin-top: 50px;" href="https://hraeigds.site/escalas/"
                                    target="_blank">Escala NIHSS</a></i>
                            <i><a style="font-size: 14px; margin-top: 50px;" href="guias.php"
                                    target="_blank">Instructivos</a></i>
                            <select name="nihss" id="nihss" class="form-control" style="font-size: 14px;"
                                onchange="mostrarParametrosNihss()">
                                <option value="Seleccione">Seleccione</option>
                                <option value="1-4 Leve">1- 4 Leve</option>
                                <option value="5-15 Moderado">5- 15 Moderado</option>
                                <option value="16-20 Moderado Severo">16- 20 Moderado Severo</option>
                                <option value="21-42 Severo">21- 42 Severo</option>
                            </select>
                        </div>

                        <div class="container" id="parametros_nihss" style="display: none;">
                            <div class="row">
                                <div class="col-md-3" id="trombolisis">
                                    <strong style="font-size: 14px; margin-top: 50px;">Trombolisis</strong>
                                    <select name="trombolisis1" id="trombolisis1" class="form-control"
                                        style="font-size: 14px;" onchange="actualizarColorTrombolisis()">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-3" id="si_rtpa" style="display: none;">
                                    <strong style="font-size: 14px; margin-top: 50px;">r-TPA</strong>
                                    <select name="vr_TPA_1" id="r_TPA_1" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Alteplasa">Alteplasa</option>
                                        <option value="Tenecteplasa">Tenecteplasa</option>
                                        <option value="Reteplasa">Reteplasa</option>
                                    </select>
                                </div>

                                <div class="col-md-3" id="sangrado_1" style="display: none;">
                                    <strong style="font-size: 14px; margin-top: 50px;">Sangrado</strong>
                                    <select name="sangrado" id="sangrado" class="form-control" style="font-size: 14px;">
                                        <option value="Negado">Negado</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>

                                <div class="col-md-3" id="nivel_1" style="display: none;">
                                    <strong style="font-size: 14px; margin-top: 50px;">Nivel </strong>
                                    <select name="nivel" id="nivel" class="form-control" style="font-size: 14px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Cerebro">Cerebro</option>
                                        <option value="Encías">Encías</option>
                                        <option value="Genitourinario">Genitourinario</option>
                                        <option value="Gastrico">Gastrico</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>

                                <div class="col-md-12" id="fecha_sangrado_1" style="display: none;">
                                    <strong style="font-size: 14px; margin-top: 50px;">Fecha de Sangrado</strong>
                                    <input type="date" class="control form-control" id="fecha_sangrado"
                                        name="fecha_sangrado" style="font-size: 13px;">
                                </div>

                            </div>
                        </div>



                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(155, 165, 209) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                Factor de Riesgo</h5>
                        </div>

                        <div class="row "> <!-- DIV DE ROW DEL FACTOR DE RIESGO-->

                            <div class="col-md-4">
                                <span style="font-size:14px;">Enfermedad Vascular Cerebral</span>
                                <input type="checkbox" name="EVC" id="EVC" value="Ninguno" style="font-size:14px;">
                            </div>

                            <div class="col-md-2">
                                <span style="font-size: 14px;">Hipertensión</span>
                                <input type="checkbox" name="Hipertension" id="hipertension" value="Si"
                                    style="font-size: 14px;">
                            </div>

                            <div class="col-md-2">
                                <span style="font-size: 14px;">Diabetes</span>
                                <input type="checkbox" name="Diabetes" id="Diabetes" value="Si"
                                    style="font-size: 14px;">
                            </div>

                            <div class="col-md-2">
                                <span style="font-size: 14px;">Tabaquismo</span>
                                <input type="checkbox" name="Tabaquismo" id="Tabaquismo" value="Si"
                                    style="font-size: 14px;">
                            </div>

                            <div class="col-md-2">
                                <span style="font-size: 14px;">Covid</span>
                                <input type="checkbox" name="Covid" id="Covid" value="Si" style="font-size: 14px;">
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3 style=" margin-top: 10px;">
                                <span style="font-size: 14px;">Hiperlipidemia</span>
                                <input type="checkbox" name="Hiperlipidemia" id="Hiperlipidemia" value="Si"
                                    style="font-size: 14px;">
                            </div>

                            <div class="col-md-3">
                                <span style="font-size: 14px;">Apnea de Sueño</span>
                                <input type="checkbox" name="Apnea" id="Apnea" value="Si" style="font-size: 14px;">
                            </div>

                            <div class="col-md-4">
                                <span style="font-size: 14px;">Enfermedad Cardiovascular </span>
                                <input type="checkbox" name="enfermedad_cardio" id="enfermedad_cardio" value="Si"
                                    style="font-size: 14px;">
                            </div>

                        </div> <!-- DIV FINAL DE ROW DEL FACTOR DE RIESGO-->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(155, 165, 209);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                Código de EVC</h5>
                        </div>

                        <div class="row"> <!-- CÓDIGO DE EVC -->

                            <div class="col-md-4">
                                <strong style="font-size: 14px; margin-top: 50px;">Se Activa Código EVC</strong>
                                <select name="se_activa" id="se_activa" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 14px; margin-top: 50px;">Defunción</strong>
                                <select name="defuncion" id="defuncion" class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 14px; margin-top: 50px;">Área</strong>
                                <select name="area" id="area" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Urgencias">Urgencias</option>
                                    <option value="Hospitalización">Hospitalización</option>

                                </select>
                            </div>
                            <br>

                            <div class="col-md-12" id="equipo_multi">
                                <div class="form-header">
                                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(171, 153, 193,0.5);
                                color:rgb(255, 255, 255);
                                margin-top:15px;
                                font-size: 14px;">
                                        Equipo Multidisciplinario</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Personal Médico Adscrito Urgencias</span>
                                        <input type="checkbox" name="pmau" id="pmau" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Personal de Admisión Hospitalaria</span>
                                        <input type="checkbox" name="pah" id="pah" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Personal de Enfermería</span>
                                        <input type="checkbox" name="peia" id="peia" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Personal de Imagenología</span>
                                        <input type="checkbox" name="pim" id="pim" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Personal de Laboratorio</span>
                                        <input type="checkbox" name="plio" id="plio" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Personal de CISFA</span>
                                        <input type="checkbox" name="pcisfa" id="pcisfa" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Trabajo Social</span>
                                        <input type="checkbox" name="ts" id="ts" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Camillero</span>
                                        <input type="checkbox" name="camillero" id="camillero" style="font-size:14px;">
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-size:12px;">Médico neurólogo</span>
                                        <input type="checkbox" name="med_neuro" id="med_neuro" style="font-size:14px;">
                                    </div>


                                </div>
                            </div>

                        </div><!-- CÓDIGO DE EVC -->


                        <!-- HORA DE REGISTRO -->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(155, 165, 209) ;
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                Puertas</h5>
                        </div>


                        <div class="col-md-12">
                            <strong style="font-size: 14px; ">Hora de llegada Urgencias</strong>
                            <input id="tiempo_urgencias" name="tiempo_urgencias" type="time"
                                class="control form-control" style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de Atención TRIAGE</strong>
                            <input id="tiempo_TRIAGE" name="tiempo_TRIAGE" type="time" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Puerta-TRIAGE</strong>
                            <input type="text" id="puerta_triage" name="puerta_triage" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de Atención CHOQUE</strong>
                            <input id="tiempo_CHOQUE" name="tiempo_CHOQUE" type="time" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Puerta-URGENCIAS</strong>
                            <input type="text" id="puerta_urgencias" name="puerta_urgencias"
                                class="control form-control" style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de Realización TAC</strong>
                            <input id="tiempo_TAC" name="tiempo_TAC" type="time" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Puerta-TAC</strong>
                            <input type="text" id="puerta_tac" name="puerta_tac" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de Atención Equipo Multidisciplinario</strong>
                            <input id="tiempo_Multidisciplinario" name="tiempo_Multidisciplinario" type="time"
                                class="control form-control" style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Puerta-MÉDICOS</strong>
                            <input type="text" id="puerta_medicos" name="puerta_medicos" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de Inicio de Trombolisis</strong>
                            <input id="tiempo_Trombolisis" name="tiempo_Trombolisis" type="time"
                                class="control form-control" style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Puerta-AGUJA</strong>
                            <input type="text" id="puerta_aguja" name="puerta_aguja" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de Ingreso a Terapia</strong>
                            <input id="tiempo_Terapia" name="tiempo_Terapia" type="time" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">Terapia Intensiva</strong>
                            <input type="text" id="puerta_terapia" name="puerta_terapia" class="control form-control"
                                style="font-size: 13px;" readonly>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px; ">Hora de TAC-Control</strong>
                            <input id="tiempo_tac" name="tiempo_tac" type="time" class="control form-control"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 14px;">TAC-Control</strong>
                            <input type="text" id="puerta_taccontrol" name="puerta_taccontrol"
                                class="control form-control" style="font-size: 13px;" readonly>
                        </div>



                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(155, 165, 209);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 14px;">
                                Escalas de Rehabilitación</h5>
                        </div>

                        <div class="row"> <!--  div del row de Escalas de Rehabilitacion -->

                            <div class="col-md-6">
                                <strong style="font-size: 14px; margin-top: 50px;">Val. Inicial de
                                    Rehabilitación</strong>
                                <select name="Valoracioninicial_Rehabi" id="Valoracioninicial_Rehabi"
                                    class="form-control" style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 14px; margin-top: 50px;">Val. Rehabilitación
                                    Hospitalaria</strong>
                                <select name="valoracion_hospitalaria" id="valoracion_hospitalaria" class="form-control"
                                    style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>


                        </div>


                        <!-- ESCALAS -->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(171, 153, 193,0.5);
                         color:rgb(255, 255, 255);
                        margin-top:15px;
                        font-size: 14px;">
                                Escalas</h5>
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <strong style="font-size: 14px; margin-top: 50px;">Dependencia Funcional</strong>
                                <select name="dependendcia_funcional" id="dependendcia_funcional" class="form-control"
                                    style="font-size: 14px;">
                                    <option value="Negado">Negado</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>

                            <div class="col-md-4" id="depedencia" style="display:none">
                                <strong style="font-size: 14px; margin-top: 50px;">Dependencia Funcional-Nivel</strong>
                                <select name="dependendcia_tipo" id="dependendcia_tipo" class="form-control"
                                    style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Leve">Leve</option>
                                    <option value="Moderado">Moderado</option>
                                    <option value="Severo">Severo</option>
                                </select>
                            </div>




                            <div class="col-md-4">
                                <strong style="font-size: 14px;">FIM Inicial </strong>
                                <input type="number" step="any" class="form-control" id="fim_inicial" name="fim_inicial"
                                    style="font-size: 13px;">
                            </div>


                            <div class="col-md-6">
                                <strong style="font-size: 14px; margin-top: 50px;">Barthel Inicial</strong>
                                <select name="bart" id="bart" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Menos de 20 dependencia Total">Menos de 20 dependencia Total
                                    </option>
                                    <option value="20-35 Dependencia Severa">20-35 Dependencia Severa</option>
                                    <option value="40-55 Dependencia Moderada">40-55 Dependencia Moderada</option>
                                    <option value="60-95 Dependencia Leve">60-95 Dependencia Leve</option>
                                    <option value="95-100 Independencia ">95-100 Independencia </option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 14px; margin-top: 50px;">RANKIN</strong>
                                <select name="rank" id="rank" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="0 Sin Sintomas A pesar de sintomas  realiza actividades cotidianas.">
                                        0 Sin Sintomas A pesar de sintomas realiza actividades cotidianas.</option>
                                    <option
                                        value="2 Incapacidad Leve. Incapaz de realizar actividades  previas  pero capaz de  hacer alguna actividad sin asistencia .">
                                        2 Incapacidad Leve. Incapaz de realizar actividades previas pero capaz de hacer
                                        alguna actividad sin asistencia .</option>
                                    <option
                                        value="3 Incapacidad Moderada  Requiere alguna ayuda pero capaz de caminar sin ayuda.">
                                        3 Incapacidad Moderada Requiere alguna ayuda pero capaz de caminar sin ayuda.
                                    </option>
                                    <option
                                        value="4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de realizar sus necesidades corporales sin ayuda">
                                        4 Incapacidad Moderadamente Severa. Incapaz de caminar sin ayuda e incapaz de
                                        realizar sus necesidades corporales sin ayuda</option>
                                    <option
                                        value="5 Incapacidad Severa  Confinado a cama,incontinente y requiere cuidado constante.">
                                        5 Incapacidad Severa Confinado a cama,incontinente y requiere cuidado constante.
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <strong style="font-size: 14px;">Motricity Index </strong>
                                <input type="number" step="any" class="form-control" id="motri" name="motri"
                                    style="font-size: 13px;">
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 14px; margin-top: 50px;">Marcha FAC</strong>
                                <select name="marcha" id="marcha" class="form-control" style="font-size: 14px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="0 Sin deambulación">0 Sin deambulación</option>
                                    <option value="1 Deambulación funcional">1 Deambulación funcional</option>
                                    <option value="2 Deambulación Hogar">2 Deambulación Hogar</option>
                                    <option value="3 Deambulación cerca de casa">3 Deambulación cerca de casa</option>
                                    <option value="4 Independiente en la comunidad">4 Independiente en la comunidad
                                    </option>
                                    <option value="5 Normal">5 Normal</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 14px;">Agatha</strong>
                                <input type="text" step="any" class="form-control" id="agatha" name="agatha"
                                    style="font-size: 13px;">
                            </div>

                        </div> <!--  div del row de Escalas de Rehabilitacion -->

                        <!-- SECUELAS -->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                        background-color:rgb(171, 153, 193,0.5);
                        color:rgb(255, 255, 255);
                        margin-top:15px;
                        font-size: 14px;">
                                Secuelas</h5>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Deglución</strong>
                            <select name="deglucion" id="deglucion" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>


                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Lenguaje</strong>
                            <select name="Lenguaje" id="Lenguaje" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Motor</strong>
                            <select name="Motor" id="Motor" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Negado">Negado</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="motor_extramidadsuperior" style="display: none">
                            <strong style="font-size: 14px;">Extremidad Superior</strong>
                            <select name="Extremidad_superior" id="Extremidad_superior" class="form-control"
                                style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecha">Derecha</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="motor_extramidadinferior" style="display: none">
                            <strong style="font-size: 14px;">Extremidad Inferior</strong>
                            <select name="Extremidad_Inferior" id="Extremidad_Inferior" class="form-control"
                                style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Derecha">Derecha</option>
                                <option value="Izquierda">Izquierda</option>
                                <option value="Bilateral">Bilateral</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Dolor</strong>
                            <select name="Dolor" id="Dolor" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Neuropatico">Neuropático</option>
                                <option value="Somatico">Somatico</option>
                            </select>
                        </div>

                        <div class="col-md-3" id="dolor_neuropatico" style="display: none">
                            <strong style="font-size: 14px;">Tipo-Neuropático</strong>
                            <input type="text" class="control form-control" id="neuropatico" name="neuropatico"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Cognitivo</strong>
                            <select name="Cognitivo" id="Cognitivo" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Interconsulta</strong>
                            <select name="interconsulta" id="interconsulta" class="form-control"
                                style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Neuropsicología</strong>
                            <input type="text" class="control form-control" id="neuropsicologia" name="neuropsicologia"
                                style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Marcha</strong>
                            <select name="Marcha" id="Marcha" class="form-control" style="font-size: 14px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Dependiente">Dependiente</option>
                                <option value="Independiente">Independiente</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 14px;">Equilibrio</strong>
                            <input type="text" class="control form-control" id="Equilibrio" name="Equilibrio"
                                style="font-size: 13px;">
                        </div>

                    </div> <!-- DIV ROW LINEA 11 -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div><!--DIV DEL BODY  -->

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>