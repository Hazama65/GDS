<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard-heart-fill" id="exampleModalLabel">Registro Paciente (SCA)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div style="background-color: #FF416C;
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                    <h6>Datos del Paciente </h6>
                </div>


                <div class="row">

                    <div class="col-md-4" id="idnombre">
                        <strong style="font-size: 13px;">Nombre Completo</strong>
                        <input id="nombre" name="nombre"  type="text" class="control form-control" value="" style="font-size: 13px;"> 
                    </div>

                    <div class="col-md-4" id="idcurp">
                        <strong style="font-size: 13px;">CURP</strong>
                        <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" style="font-size: 13px;">
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px; ">Fecha de Nacimiento</strong>
                        <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                    </div>
                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Edad</strong>
                        <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Sexo</strong>
                        <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Estado Civil</strong>
                        <select name="Estadocivil" id="Estadocivil" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Seleccione</option>
                            <option value="Soltera">Soltero</option>
                            <option value="Casada">Casado</option>
                            <option value="Viuda">Viudo</option>
                            <option value="Divorciada">Divorciado</option>
                            <option value="Concubinato">Concubinato</option>
                            <option value="Separada">Separado</option>
                        </select>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Población Indígena</strong>
                        <input id="Poblacion_indigena" name="Poblacion_indigena
                        " type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Raza</strong>
                        <input id="Raza" name="Raza" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Escolaridad</strong>
                        <select name="Escolaridad" id="Escolaridad" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Seleccione</option>
                            <option value="Soltera">Soltero</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Preparatoria/Bachillerato">Preparatoria/Bachillerato</option>
                            <option value="Licenciatura/lngenieria">Licenciatura/lngenieria</option>
                            <option value="Maestria">Maestria</option>
                            <option value="Doctorado">Doctorado</option>
                            <option value="Sin Estudios">Sin Estudios</option>
                        </select>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Unidad de Referencia</strong>
                        <select name="unidad_referencia" id="unidad_referencia" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Alcaldía o Municipio</strong>
                        <select name="Alcaldia_municipio" id="Alcaldia_municipio" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>



                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Presión Arterial</strong>
                        <input id="Presion_Arterial" name="Presion_Arterial" type="text" class="control form-control" value="/   mmHg" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Frecuencia Cardíaca</strong>
                        <input id="FC" name="FC" type="number" class="control form-control" value="" style="font-size: 13px;">
                    </div>



                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Frecuencia Respiratoria</strong>
                        <input type="number" class="control form-control" id="fr" name="fr" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Peso (kg)</strong>
                        <input type="number" class="control form-control" id="peso" name="peso" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Talla (m)</strong>
                        <input type="number" class="control form-control" id="talla" name="talla" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Circunferencia Cintura(cm)</strong>
                        <input type="number" class="control form-control" id="circunferencia" name="circunferencia" style="font-size: 13px;">
                    </div>

                    <!-- FACTORES DE RIESGO  -->
                    <div class="form-header">
                        <h6 class="form-title" style="text-align: center;
                            background-color:#FF416C ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            FACTORES DE RIESGO</h6>
                    </div>

                    <div class="container">
                        <label for="Factores_riesgo" style="font-size: 13px;"></label><br>
                        <div class="row">

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Ninguno</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Ninguno_factor" id="Ninguno_factor" value="Ninguno" style="font-size:14px; margin: 5px auto; ">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Hiperlipidemia</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Hiperlipidemia_factor" id="Hiperlipidemia_factor" value="Hiperlipidemia" style="font-size:14px; margin: 5px auto; ">
                            </div>


                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Diabetes</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Diabetes_factor" id="Diabetes_factor" value="Diabetes" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Hipertensión</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Hipertensión_facator" id="Hipertensión_factor" value="Hipertensión" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Alcoholismo</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Alcoholismo_factor" id="Alcoholismo_Factor" value="Alcoholismo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Prima Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Tabaquismo_factor" id="Tabaquismo_factor" value="Tabaquismo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Enfermedad renal cronica</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Enfermedad_renal" id="Enfermedad_renal" value="Enfermedad_renal_cronica" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Hiperuricemia</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Hiperuricemia_factor" id="Hiperuricemia_factor" value="Hiperuricemia" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Obesidad</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Obesidad_factor" id="Obesidad_factor" value="Obesidad" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">IAM previo</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Previo_factor" id="Previo_factor" value="IAM previo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>


                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Ectasia coronaria</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="ectasia_factor" id="ectasia_factor" value="Ectasia coronaria" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Cardiomiopatia de takotsubo</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Cardiomio" id="Cardiomio" value="Cardiomiopatia takotsubo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>


                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Enfermedad multivaso</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="multivaso_factor" id="multivaso_factor" value="Enfermedad multivaso" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Revascularización cardiaca previa</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Resvascularizacion_factor" id="Resvascularizacion_factor" value="Revascularización cardiaca previa" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                        </div>
                    </div>

                    <!-- ANTECENDENTES HEREDO FAMILIARES -->

                    <div class="form-header">
                        <h6 class="form-title" style="text-align: center;
                            background-color:#FF416C ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            ANTECEDENTES HEREDO FAMILIARES</h6>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Padre</strong>
                        <select name="Padre_antecedente" id="Padre_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Madre</strong>
                        <select name="Madre_antecedente" id="Madre_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Abuelo Materno</strong>
                        <select name="Abuelo_Materno_antecedente" id="Abuelo_Materno_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Abuelo Paterno</strong>
                        <select name="Abuelo_Paterno_antecedente" id="Abuelo_Paterno_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Abuela Materna</strong>
                        <select name="Abuela_Materna_antecedente" id="Abuela_Materna_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Abuela Paterna</strong>
                        <select name="Abuela_Paterna_antecedente" id="Abuela_Paterna_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Hermano</strong>
                        <select name="Hermano_antecedente" id="Hermano_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Hermana</strong>
                        <select name="Hermana_antecedente" id="Hermana_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Prima Materna</strong>
                        <select name="Prima_Materna_antecedente" id="Prima_Materna_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Prima Paterna</strong>
                        <select name="Prima_Paterna_antecedente" id="Prima_Paterna_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Primo Paterno</strong>
                        <select name="Primo_Paterno_antecedente" id="Primo_Paterno_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Primo Materno</strong>
                        <select name="Primo_Materno_antecedente" id="Primo_Materno_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Tía Materna</strong>
                        <select name="Tia_Materna_antecedente" id="Tia_Materna_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Tía Paterna</strong>
                        <select name="Tia_Paterna_antecedente" id="Tia_Paterna_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Tío Materno</strong>
                        <select name="Tia_Materno_antecedente" id="Tia_Materno_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Tío Paterno</strong>
                        <select name="Tia_Paterno_antecedente" id="Tia_Paterno_antecedente" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <!-- ATENCIÓN CLINICA -->

                    <div class="form-header">
                        <h6 class="form-title" style="text-align: center;
                            background-color:#FF416C ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            ATENCIÓN CLINICA</h6>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Inicio Sintomas</strong>
                        <input type="datetime-local" class="control form-control" id="Inicio_sintomas" name="Inicio_sintomas" style="font-size: 13px;">
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Características Dolor</strong>
                        <select name="Caracteristica_dolor" id="Caracteristica_dolor" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Típicas">Típicas</option>
                            <option value="Atípicas">Atípicas</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Inicio de triage</strong>
                        <input type="datetime-local" class="control form-control" id="Inicio_triage" name="Inicio_triage" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Termino de triage</strong>
                        <input type="datetime-local" class="control form-control" id="Termino_triage" name="Termino_triage" style="font-size: 13px;">
                    </div>




                    <div class="container" id="Cara_tipicas" style="display:none;">
                        <div class="form-header">
                            <h2 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108,0.5);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                                Características Típicas</h2>
                        </div>
                        <div class="row">

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Dolor Retroesternal</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Dolor_Retroesternal" value="Dolor Retroesternal" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Opresivo</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Opresivo" value="Opresivo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Irradiación brazo izquierdo</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Irradiación_brazo_izquierdo" value="Irradiación brazo izquierdo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Más de 10 minutos</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Más_de_10_minutos" value="Más de 10 minutos" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Náuseas</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Náuseas" value="Náuseas" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Diaforesis</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Diaforesis" value="Diaforesis" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Síncope</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Síncope" value="Síncope" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                        </div>
                    </div>

                    <div class="container" id="Cara_Atipicas" style="display:none;">
                        <div class="form-header">
                            <h2 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108,0.5);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                                Características Atípicas</h2>
                        </div>
                        <div class="row">

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Dolor Epigastrio</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Dolor_Epigastrio" value="Dolor Epigastrio" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Punzante</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Punzante" value="Punzante" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Pleurítico</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Pleurítico" value="Pleurítico" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Disnea</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Disnea" value="Disnea" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Palpitación</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Palpitación" value="Palpitación" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Diaforesis</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Diaforesis" value="Diaforesis" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-3" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Síncope</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Características_Típicas" id="Síncope" value="Síncope" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <strong style="font-size: 13px;">Intensidad Dolor</strong>
                            <select name="Electrocardiograma" id="Electrocardiograma" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="1/10">1/10</option>
                                <option value="2/10">2/10</option>
                                <option value="3/10">3/10</option>
                                <option value="4/10">4/10</option>
                                <option value="5/10">5/10</option>
                                <option value="6/10">6/10</option>
                                <option value="7/10">7/10</option>
                                <option value="8/10">8/10</option>
                                <option value="9/10">9/10</option>
                                <option value="10/10">10/10</option>
                            </select>
                        </div>


                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Electrocardiograma</strong>
                        <select name="Electrocardiograma" id="Electrocardiograma" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Normal">Normal</option>
                            <option value="Isquema">Isquema</option>
                            <option value="Necrosis">Necrosis</option>
                            <option value="Lesión">Lesión</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Localización Electrocardiograma</strong>
                        <select name="Electrocardiograma" id="Electrocardiograma" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Anterior">Anterior</option>
                            <option value="Septal">Septal</option>
                            <option value="Apical">Apical</option>
                            <option value="Anteroseptal">Anteroseptal</option>
                            <option value="Anterior Extenso">Anterior Extenso</option>
                            <option value="Lateral Alto">Lateral Alto</option>
                            <option value="Lateral Bajo">Lateral Bajo</option>
                            <option value="Lateral">Lateral</option>
                            <option value="Inferior">Inferior</option>
                            <option value="Posterior">Posterior</option>
                            <option value="Ventrículo Derecho">Ventrículo Derecho</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Con o Sin Elevación</strong>
                        <select name="ConSin_elevancion" id="ConSin_elevancion" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Con Elevación del ST">Con Elevación del ST</option>
                            <option value="Sin Elevación del ST">Sin Elevación del ST</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">MACE Hospitalario</strong>
                        <select name="mace" id="mace" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="EVC">EVC</option>
                            <option value="Killip Kimball">Killip Kimball</option>
                            <option value="Reinfarto">Reinfarto</option>
                            <option value="Muerte">Muerte</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="Killi_kimball" style="display:none;">
                        <strong style="font-size: 13px;">Killip Kimball</strong>
                        <select name="Kill_kimbal" id="Kill_kimbal" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            PARACLINICOS</h5>
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">CK</strong>
                        <input type="text" class="control form-control" id="ck" name="ck" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">CK-MB</strong>
                        <input type="text" class="control form-control" id="ck_mb" name="ck_mb" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Troponinas</strong>
                        <input type="text" class="control form-control" id="Troponinas" name="Troponinas" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Glucosa</strong>
                        <input type="text" class="control form-control" id="Glucosa" name="Glucosa" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Urea</strong>
                        <input type="text" class="control form-control" id="Urea" name="Urea" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Creatinina</strong>
                        <input type="text" class="control form-control" id="Creatinina" name="Creatinina" value="" sytle="font-size: 13px;">
                    </div>
                    <div class="col-md-2">
                        <strong style="font-size: 13px">Colesterol</strong>
                        <input type="text" class="control form-control" id="Colesterol" name="Colesterol" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Trigliceridos</strong>
                        <input type="text" class="control form-control" id="Trigliceridos" name="Trigliceridos" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Ácido Úrico</strong>
                        <input type="text" class="control form-control" id="Acido_Urico" name="Acido_Urico" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">HB Glucosilada</strong>
                        <input type="text" class="control form-control" id="hb_glucosilada" name="hb_glucosilada" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">Proteínas</strong>
                        <input type="text" class="control form-control" id="Proteinas" name="Proteinas" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">LDL</strong>
                        <input type="text" class="control form-control" id="LDL" name="LDL" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px">HDL</strong>
                        <input type="text" class="control form-control" id="HDL" name="HDL" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            TRATAMIENTO TROMBÓLISIS</h5>
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Fibrinólisis</strong>
                        <select name="Fibrinolisis" id="Fibrinolisis" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="container" id="inicio_fin_txfibronilis" style="display:none;">
                        <div class="row">

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Fecha/hora de inicio</strong>
                                <input type="datetime-local" class="control form-control" id="Inicio_txfibronilis" name="Inicio_txfibronilis" style="font-size: 13px;">
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Fecha/hora de finaliza</strong>
                                <input type="datetime-local" class="control form-control" id="finaliza_txfibronilis" name="finaliza_txfibronilis" style="font-size: 13px;">
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;"> Tipo Fibrinólisis</strong>
                                <select name="Tipo_Fibrinolisis" id="Tipo_Fibrinolisis" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Tecnecteplasa">Tecnecteplasa</option>
                                    <option value="Alteplasa">Alteplasa</option>
                                    <option value="Estreptoquinasa">Estreptoquinasa</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Procedimiento Exitoso</strong>
                                <select name="procedimiento_exitoso" id="procedimiento_exitoso" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Tecnecteplasa">Tecnecteplasa</option>
                                    <option value="Alteplasa">Alteplasa</option>
                                    <option value="Estreptoquinasa">Estreptoquinasa</option>
                                </select>
                            </div>

                        </div>
                    </div>


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            ANGIOPLASTIA CORONARIA TRANSLUMINAL PERCUTANEA</h5>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Fecha/Hora</strong>
                        <input type="datetime-local" class="control form-control" id="Inicio_Angio" name="Inicio_Angio" style="font-size: 13px;">
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Tipo de Procedimiento</strong>
                        <select name="Tipo_Procedimiento" id="Tipo_Procedimiento" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Rescate">Rescate</option>
                            <option value="Farmacoinvasivo">Farmacoinvasivo</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Sitio Punción</strong>
                        <select name="sitio_puncion" id="sitio_puncion" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Braquial">Braquial</option>
                            <option value="Femoral">Femoral</option>
                            <option value="Radial">Radial</option>
                            <option value="Cubital">Cubital</option>
                            <option value="Transradial Distal">Transradial Distal</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Lesiones Coronarias</strong>
                        <select name="Lesiones_coronarias" id="Lesiones_coronarias" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>

                        </select>
                    </div>


                    <div class="container" id="Si_lesionCoronaria" style="display:none;">

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108,0.5);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                                Lesiones Coronarias</h5>
                        </div>

                        <div class="row">

                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Coronaria Derecha</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Coronaria_Derecha" value="Coronaria Derecha" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Coronaria Izquierda</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Coronaria_Izquierda" value="Coronaria Izquierda" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Descendente Anterior</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Descendente_Anterior" value="Descendente Anterior" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Descendente Posterior</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Descendente_Posterior" value="Descendente Posterior" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tronco Coronario Izquierdo</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Tronco_Coronario_Izquierdo" value="Tronco Coronario Izquierdo" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Bifurcación</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Bifurcacion" value="Bifurcación" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Circunfleja</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Circunfleja" value="Circunfleja" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Dominancia Derecha</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Dominancia_Derecha" value="Dominancia Derecha" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Codominancia</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Codominancia" value="Codominancia" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Dominancia Izquierda</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Dominancia_Izquierda" value="Dominancia Izquierda" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Ramo Posterolateral</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Ramo_Posterolateral" value="Ramo Posterolateral" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Ramo Septales</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Ramo_Septales" value="Ramo Septales" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Ramo Marginales</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Revascularizacion" id="Ramo_Marginales" value="Ramo Marginales" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Clasificación DUQUE</strong>
                        <select name="duque" id="duque" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="No aplica">No aplica</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Clasificación Medina</strong>
                        <select name="Medina" id="Medina" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="No aplica">No aplica</option>
                            <option value="Medina 1,0,0">Medina 1,0,0</option>
                            <option value="Medina 0,1,0">Medina 0,1,0</option>
                            <option value="Medina 1,1,0">Medina 1,1,0</option>
                            <option value="Medina 1,1,1">Medina 1,1,1</option>
                            <option value="Medina 0,0,1">Medina 0,0,1</option>
                            <option value="Medina 1,0,1">Medina 1,0,1</option>
                            <option value="Medina 0,1,1">Medina 0,1,1</option>
                        </select>

                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Clasificación ACC/AHA</strong>
                        <select name="clasificacion_acc" id="clasificacion_acc" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Tipo A">Tipo A</option>
                            <option value="Tipo B">Tipo B</option>
                            <option value="Tipo C">Tipo C</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">TIMI</strong>
                        <select name="TIMI" id="TIMI" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>



                    <div class="col-md-3" id="timi_pro1" style="display:none;">
                        <strong style="font-size: 13px;">Procedimiento TIMI</strong>
                        <select name="Procedimiento_TIMI" id="Procedimiento_TIMI" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Preprocedimiento">Preprocedimiento</option>
                            <option value="Procedimiento">Procedimiento</option>
                            <option value="Postprocedimiento">Postprocedimiento</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="timi_pro2" style="display:none;">
                        <strong style="font-size: 13px;">Clasificación TIMI</strong>
                        <select name="Calificacion_TIMI" id="Calificacion_TIMI" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Sin Reperfusón">Sin Reperfusón</option>
                            <option value="Penetración Sin Reperfusión">Penetración Sin Reperfusión</option>
                            <option value="Perfusión Parcial">Perfusión Parcial</option>
                            <option value="Perfusión Completa">Perfusión Completa</option>
                        </select>
                    </div>



                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Tomografía Coherencia Óptica</strong>
                        <select name="Tomografia_coherencia" id="Tomografia_coherencia" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Trombosis Intracoronaria</strong>
                        <select name="Trombosis_intra" id="Trombosis_intra" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Aspiración Trombo</strong>
                        <select name="Aspiracion_trombo" id="Aspiracion_trombo" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Prótesis Metálico</strong>
                        <select name="Protesis_metalico" id="Protesis_metalico" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="num_protesi">
                        <strong style="font-size: 13px;">Número de Prótesis</strong>
                        <input type="text" class="control form-control" id="protesis_num" name="protesis_num" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Revascularización</strong>
                        <select name="Protesis_metalico" id="Protesis_metalico" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="No aplica">No aplica</option>
                            <option value="Completa">Completa</option>
                            <option value="Incompleta">Incompleta</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Procedimiento Exitoso</strong>
                        <select name="Procedimiento_exitoso" id="Procedimiento_exitoso" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">AIRBUS</strong>
                        <select name="AIRBUS" id="AIRBUS" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="Resultado_airbus" style="display:none;">
                        <strong style="font-size: 13px;">Resultado AIRBUS</strong>
                        <select name="Resu_AIRBUS" id="Resu_AIRBUS" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Estenosis">Estenosis</option>
                            <option value="Disección">Disección</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Prótesis Endovascular</strong>
                        <select name="Prote_Endovascular" id="Prote_Endovascular" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Absorb">Absorb</option>
                            <option value="Con Medicación">Con Medicación</option>
                            <option value="Sin Medicación">Sin Medicación</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>


                    <div class="col-md-3" id="con_medicacion"  style="display:none;"> 
                        <strong style="font-size: 13px;">1er Generación</strong>
                        <select name="1_generacion" id="1_generacion" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Sirolimús">Sirolimús</option>
                            <option value="Paclitaxel">Paclitaxel</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="con_medicacion_2" style="display:none;">
                        <strong style="font-size: 13px;">2da Generación</strong>
                        <select name="2da_generacion" id="2da_generacion" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Everulimus">Everulimus</option>
                            <option value="Ridaforulimus">Ridaforulimus</option>
                            <option value="Zotarulimus">Zotarulimus</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            TRATAMIENTO ESPECIAL</h5>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Litotricia Intracoronaria</strong>
                        <select name="Litotricia" id="Litotricia" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Schockwave C2</strong>
                        <select name="Schockwave" id="Schockwave" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-4"  id="Complicaciones_Schockwave" style="display:none;">
                        <strong style="font-size: 13px;">Complicaciones Schockwave C2</strong>
                        <select name="Schockwave_compli" id="Schockwave_compli" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="No Aplica">No Aplica</option>
                            <option value="Disección">Disección</option>
                            <option value="No Reflow">No Reflow</option>
                            <option value="SlowFlow">SlowFlow</option>
                            <option value="Perforación">Perforación</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108,0.5);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            Marcapasos Temporal</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Marcapasos</strong>
                        <select name="Marcapasos" id="Marcapasos" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="sopor_ventri" style="display:none;">
                        <strong style="font-size: 13px;">Soporte Ventricular</strong>
                        <select name="Soporte_ventricular" id="Soporte_ventricular" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="No aplica">No aplica</option>
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Balón de Contrapulsación">Balón de Contrapulsación</option>
                            <option value="ECMO">ECMO</option>
                            <option value="IMPELLA">IMPELLA</option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108,0.5);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            Complicaciones</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Complicaciones</strong>
                        <select name="Complicaciones" id="Complicaciones" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Ninguno">Ninguno</option>
                            <option value="Disfunción Ventricular">Disfunción Ventricular</option>
                            <option value="Mecánicas">Mecánicas</option>
                            <option value="Pericárdicas">Pericárdicas</option>
                            <option value="Eléctricas">Eléctricas</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Disfuncion_ventri" style="display:none;">
                        <strong style="font-size: 13px;">Tipo Disfunción Ventricular</strong>
                        <select name="disfu_ventri" id="disfu_ventri" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Remodelado Adverso">Remodelado Adverso</option>
                            <option value="Insuficiencia Cardiaca Aguda">Insuficiencia Cardiaca Aguda</option>
                            <option value="Shock Cardiogénico">Shock Cardiogénico</option>
                            <option value="Infarto de Ventrículo Derecho">Infarto de Ventrículo Derecho</option>
                            <option value="Edema Agudo Pulmonar">Edema Agudo Pulmonar</option>
                            <option value="IAM Periprocedimiento">IAM Periprocedimiento</option>
                            <option value="Tamponade">Tamponade</option>
                            <option value="Muerte">Muerte</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Mecanicas" style="display:none;">
                        <strong style="font-size: 13px;">Tipo Complicaciones Mecánicas</strong>
                        <select name="compli_mecanicas" id="compli_mecanicas" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Comunicación Interventricular">Comunicación Interventricular</option>
                            <option value="Rotura Cardiaca">Rotura Cardiaca</option>
                            <option value="Insuficiencia Mitral Aguda">Insuficiencia Mitral Aguda</option>
                            <option value="Ruptura de Septum">Ruptura de Septum</option>
                            <option value="Ruptura de Cuerdas">Ruptura de Cuerdas</option>
                            <option value="Ruptura de Pared Libre">Ruptura de Pared Libre</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Pericardicas" style="display:none;">
                        <strong style="font-size: 13px;">Pericárdicas</strong>
                        <select name="compli_Pericarditis" id="compli_Pericarditis" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Pericarditis">Pericarditis</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Electricas" style="display:none;">
                        <strong style="font-size: 13px;">Eléctricas</strong>
                        <select name="compli_Electricas" id="compli_Electricas" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Taquicardia Ventricular">Taquicardia Ventricular</option>
                            <option value="Fibrilación Ventricular">Fibrilación Ventricular</option>
                            <option value="Fibrilación Auricular">Fibrilación Auricular</option>
                            <option value="Bloqueo Auroventricular">Bloqueo Auroventricular</option>
                            <option value="Trastorno de la Conducción">Trastorno de la Conducción</option>
                            <option value="Arritmia">Arritmia</option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            Viabilidad y Perfusión Miocardia</h5>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Gammagrama Cardiaco Inicial</strong>
                        <select name="Gamma" id="Gamma" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="resultado_gamma" style="display:none;">
                        <strong style="font-size: 13px;">Resultado Gammagrama Cardiaco</strong>
                        <select name="gamma_cardi" id="gamma_cardi" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>

                    
                        <div class="col-md-6" id="positivo_1" style="display:none;">
                            <strong style="font-size: 13px;">Localización Gammagrama</strong>
                            <select name="Localizacion_gamma" id="Localizacion_gamma" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Inferior">Inferior</option>
                                <option value="Septal">Septal</option>
                                <option value="Lateral">Lateral</option>
                                <option value="Ninguno">Ninguno</option>
                            </select>
                        </div>


                        <div class="col-md-6"  id="positivo_2" style="display:none;">
                            <strong style="font-size: 13px;">Segmento</strong>
                            <select name="Segmento_gamma" id="Segmento_gamma" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Apical">Apical</option>
                                <option value="Basal">Basal</option>
                                <option value="Medio">Medio</option>
                                <option value="Ninguno">Ninguno</option>
                            </select>
                        </div>

            


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Resonancia Magnetica Inicial</strong>
                        <select name="Resonancia_inicial" id="Resonancia_inicial" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

         

                        <div class="col-md-6" id="resonancia_resu" style="display:none;">
                            <strong style="font-size: 13px;">Resultado Resonancia Magnetica</strong>
                            <select name="resultado_resonancia" id="resultado_resonancia" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Positivo">Positivo</option>
                                <option value="Negativo">Negativo</option>
                            </select>
                        </div>


                        <div class="col-md-6" id="resonancia_ergometria" style="display:none;">
                            <strong style="font-size: 13px;">Ergometría Inicial</strong>
                            <select name="ergometria" id="ergometria" class="form-select" style="font-size: 13px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Protocolo Bruce">Protocolo Bruce</option>
                            </select>
                        </div>

               

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 1</strong>
                        <select name="Etapa_1" id="Etapa_1" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 2</strong>
                        <select name="Etapa_2" id="Etapa_2" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 3</strong>
                        <select name="Etapa_3" id="Etapa_3" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 4</strong>
                        <select name="Etapa_4" id="Etapa_4" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 5</strong>
                        <select name="Etapa_5" id="Etapa_5" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 6</strong>
                        <select name="Etapa_6" id="Etapa_6" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Etapa 7</strong>
                        <select name="Etapa_7" id="Etapa_7" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Positivo">Positivo</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Suspensión de Estudio</strong>
                        <select name="Suspension_estudio" id="Suspension_estudio" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Diminución de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia"> Diminución de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia</option>
                            <option value="Arritmia">Arritmia</option>
                            <option value="Angina Moderada">Angina Moderada</option>
                            <option value="Aumento de Actividad de Sistema Nervioso">Aumento de Actividad de Sistema Nervioso</option>
                            <option value="Cianosis/ Palidez">Cianosis/ Palidez</option>
                            <option value="Deseo del Paciente de Detenerse">Deseo del Paciente de Detenerse</option>
                            <option value=" Elevación del Segmento ST(< 1Mm)"> Elevación del Segmento ST (< 1Mm)</option>
                            <option value="Taquicardia Ventricular Sostenina">Taquicardia Ventricular Sostenina</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            Ecocardiograma </h5>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px">Distolico Inicial</strong>
                        <input type="text" class="control form-control" id="Distolico_inicial" name="Distolico_inicial" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px">Sistolico Inicial</strong>
                        <input type="text" class="control form-control" id="Sistolico_inicial" name="Sistolico_inicial" value="" sytle="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Frac. Eyección Ventrículo Izq Inicial</strong>
                        <select name="eyeccion_ventriizqui" id="eyeccion_ventriizqui" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Menos del 30%">Menos del 30%</option>
                            <option value="Del 31% -50%">Del 31% -50%</option>
                            <option value="Del 51% -70%">Del 51% -70%</option>
                            <option value="Más del 71%">Más del 71%</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Movilidad Inicial</strong>
                        <select name="movilidad_inicial" id="movilidad_inicial" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Acinesia">Acinesia</option>
                            <option value="Aneurismático">Aneurismático</option>
                            <option value="Discinecia">Discinecia</option>
                            <option value="Hipocinesia">Hipocinesia</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Segmento</strong>
                        <select name="Segmento" id="Segmento" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Ninguno">Ninguno</option>
                            <option value="Apical">Apical</option>
                            <option value="Basal">Basal</option>
                            <option value="Medio">Medio</option>
                        </select>
                    </div>

                    <!-- Seguimiento Postprocedimiento -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(255, 65, 108);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 13px;">
                            Seguimiento Postprocedimiento </h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Causa de Defunción</strong>
                        <select name="Causa_defun" id="Causa_defun" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Cardiaca">Cardiaca</option>
                            <option value="No Cardiaca">No Cardiaca</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="fecha_defuncion" style="display:none;">
                        <strong style="font-size: 13px">Fecha de Defunción</strong>
                        <input type="datetime-local" class="control form-control" id="Defuncion_fecha" name="Defuncion_fecha" style="font-size: 13px;">
                    </div>



                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar Registro</button>
            </div>
        </div>
    </div>
</div>