<div class="modal fade" id="CancerMama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="bi bi-clipboard2-pulse modal-title fs-4" id="exampleModalLabel">Cancer de Mama</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div style="background-color: rgb(205, 101, 156);
                        color:rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                    <h6>Generales</h6>
                </div>

                <!-- Datos de llegada del paciente  -->

                <div class="row">

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Nombre</strong>
                        <input id="nombre_px" name="nombre_px" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">CURP</strong>
                        <input id="curp" name="curp" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Género</strong>
                        <input id="genero" name="genero" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px; ">Fecha de Nacimiento</strong>
                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="control form-control" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 14px;">Estado Civil</strong>
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


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Raza</strong>
                        <input id="Raza" name="Raza" type="text" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Unidad de Referencia</strong>
                        <select name="unidad_referencia" id="unidad_referencia" class="form-select" style="font-size: 14px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Signos Vitales</h5>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Presión Sistólica</strong>
                        <input type="number" class="control form-control" id="Presion_sistolica" name="Presion_sistolica" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Presión Diastólica </strong>
                        <input type="number" class="control form-control" id="Presion_Diastolica" name="Presion_Diastolica" style="font-size: 13px;">
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Frecuencia Cardíaca</strong>
                        <input id="FC" name="FC" type="number" class="control form-control" value="" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">

                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Frecuencia Respiratoria</strong>
                        <input type="number" class="control form-control" id="fr" name="fr" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Glucemia Capilar</strong>
                        <input type="number" class="control form-control" id="Glucemia " name="Glucemia" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">

                    </div>




                    <!-- ************************Somatometria********************************** -->
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Somatometria</h5>
                    </div>



                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Peso (kg)</strong>
                        <input type="number" class="control form-control" id="peso" name="peso" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Talla (m)</strong>
                        <input type="number" class="control form-control" id="talla" name="talla" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Circunferencia Cintura(cm)</strong>
                        <input type="number" class="control form-control" id="circunferencia" name="circunferencia" style="font-size: 13px;">
                    </div>


                    <!-- ************************Antecedentes Patologícos********************************* -->
                    <div class="form-header">
                        <h6 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                            Antecedentes Patologícos</h6>
                    </div>

                    <div class="container" style="display: grid; grid-template-columns: repeat(4, 2fr); grid-gap: 20px;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="BRCA_1" name="BRCA_1" value="BRCA1">
                            <label class="form-check-label" for="BRCA_1_patologico" style="font-size: 13px;">Conocida con Gen BRCA 1</label>
                        </div>



                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="BRCA_2" name="BRCA_2" value="BRCA2">
                            <label class="form-check-label" for="BRCA_2_patologico" style="font-size: 13px;">Conocida con Gen BRCA 2</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="diabetes" name="diabetes" value="diabetes_pat">
                            <label class="form-check-label" for="diabetes_patologico" style="font-size: 13px;">Diabetes Mellitus</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="renal_cronica" name="renal_cronica" value="renal_cronica_pat">
                            <label class="form-check-label" for="renal_cronica_patologico" style="font-size: 13px;">Enfermedad Renal Cronica</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Hipertension" name="Hipertension" value="Hipertension_pat">
                            <label class="form-check-label" for="Hipertension_patologico" style="font-size: 13px;">Hipertensión Arterial</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tabaquismo" name="Tabaquismo" value="Tabaquismo_pat">
                            <label class="form-check-label" for="Tabaquismo_Patologico" style="font-size: 13px;">Tabaquismo</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Antecedentecancer_mama" name="Antecedentecancer_mama" value="Antecedentecancer_mama_pat">
                            <label class="form-check-label" for="Antecedentecancermama" style="font-size: 13px;">Cáncer de mama</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Antecedentes_ninguna" name="Antecedentes_ninguna" value="Antecedentes_ninguna_pat">
                            <label class="form-check-label" for="Antecedentesninguna" style="font-size: 13px;">Ninguna de las Anteriores</label>
                        </div>

                    </div>

                    <div class="form-header">
                        <h6 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156) ;
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 14px;">
                            Antecedentes Heredofamiliares</h6>
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Cáncer</strong>
                        <select name="Heredo_Cancer" id="Heredo_Cancer" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>


                    <div class="col-md-12" id="Cancer_prostata">
                        <strong style="font-size: 13px;">Cáncer Próstata</strong>
                        <select name="Heredo_CancerProstata" id="Heredo_CancerProstata" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>
                    <!-- style="display:none;" -->

                    <div class="container" id="CancerProstata" style="display:none;">

                        <label for="Antecedentes_Prostata" style="font-size: 13px;"><strong>Antecedentes de Cáncer de Próstata:</strong></label>
                        <div class="row">

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Abuelo Materno</span>
                                <input type="checkbox" class="form-check-input ra-checkbox"  name="Antecedentes_Prostata" id="Abuelo_materno_cancer" value="Abuelo_materno_cancer" style="font-size:14px; margin: 5px auto; ">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Abuelo Paterno</span>
                                <input type="checkbox" class="form-check-input ra-checkbox"  name="Antecedentes_Prostata" id="Abuelo_paterno_cancer" value="Abuelo_paterno_cancer" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Hermano</span>
                                <input type="checkbox"  class="form-check-input ra-checkbox" name="Antecedentes_Prostata" id="Hermano_Prostata" value="Hermano_Prostata" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>


                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Padre</span>
                                <input type="checkbox"  class="form-check-input ra-checkbox" name="Antecedentes_Prostata" id="Padre_cancer_Prostata" value="Padre_cancer_Prostata" style="font-size:13px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Primo Materno</span>
                                <input type="checkbox"  class="form-check-input ra-checkbox" name="Antecedentes_Prostata" id="Primo_Materno_Prostata" value="Primo_Materno_Prostata" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Primo Materno</span>
                                <input type="checkbox"  class="form-check-input ra-checkbox" name="Antecedentes_Prostata" id="Primo_Materno_Prostata" value="Primo_Materno_Prostata" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Primo Paterno</span>
                                <input type="checkbox" class="form-check-input ra-checkbox"  name="Antecedentes_Prostata" id="Primo_Paterno_Prostata" value="Primo_Paterno_Prostata" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tío Materno</span>
                                <input type="checkbox"  class="form-check-input ra-checkbox" name="Antecedentes_Prostata" id="Tio_Materno_Prostata" value="Tio_Materno_Prostata" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>


                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tío Paterno</span>
                                <input type="checkbox"  name="Antecedentes_Prostata" class="form-check-input ra-checkbox"  id="Tio_Paterno_Prostata" value="Tio_Paterno_Prostata" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                        </div>
                    </div>

                    <!-- Cancer OVARIO -->

                    <div class="col-md-12" id="CancerOvario">
                        <strong style="font-size: 13px;">Cáncer Ovario</strong>
                        <select name="Heredo_CancerOvario" id="Heredo_CancerOvario" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>

                    <div class="container" id="Cancer_Ovario">
                        <label for="Antecedentes_ovario" style="font-size: 13px;"><strong>Antecedentes de Cáncer Ovario :</strong></label><br>
                        <div class="row">
                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Abuela Materna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Abuela_materna_cancer" value="Abuela_materna_cancer" style="font-size:14px; margin: 5px auto; ">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Abuela Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Abuela_paterna_cancer" value="Abuela_paterna_cancer" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Hermana</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Hermana_Ovario" value="Hermana_Ovario" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Madre</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Madre_cancer_Ovario" value="Madre_cancer_Ovario" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Prima Materna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Prima_Materna_Ovario" value="Prima_Materna_Ovario" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Prima Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Prima_Paterna_Ovario" value="Prima_Paterna_Ovario" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tía Materna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Tia_Materna_Ovario" value="Tia_Materna_Ovario" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tía Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario" id="Tia_Paterna_Ovario" value="Tia_Paterna_Ovario" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                        </div>
                    </div>


                    <!-- ANTECEDENTES CANCER MAMA  -->

                    <div class="col-md-12" id="AH_Cancer_Mama">
                        <strong style="font-size: 13px;">Cáncer Mama</strong>
                        <select name="Heredo_CancerMama" id="Heredo_CancerMama" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>

                    <div class="container" id="Cancer_Mama1">
                        <label for="Antecedentes_mama" style="font-size: 13px;"><strong>Antecedentes de Cáncer Mama :</strong></label><br>
                        <div class="row">
                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Abuela Materna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama" id="Abuela_materna_cancerMama" value="Abuela_matera_cancerMama" style="font-size:14px; margin: 5px auto; ">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Abuela Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama" id="Abuela_paterna_cancerMama" value="Abuela_paterna_cancerMama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Hermana</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama" id="Hermana_Mama" value="Hermana_Mama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Madre</span>
                                <input type="checkbox" name="Antecedentes_Mama" id="Madre_cancer_Mama" value="Madre_cancer_Mama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Prima Materna</span>
                                <input type="checkbox"  class="form-check-input ra-checkbox"name="Antecedentes_Mama" id="Prima_Materna_Mama" value="Prima_Materna_Mama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Prima Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama" id="Prima_Paterna_Mama" value="Prima_Paterna_Mama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tía Materna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama" id="Tia_Materna_Mama" value="Tia_Materna_Mama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <span style="font-size:13px; display: block;">Tía Paterna</span>
                                <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama" id="Tia_Paterna_Mama" value="Tia_Paterna_Mama" style="font-size:14px; margin: 5px auto; display: block;">
                            </div>
                        </div>
                    </div>

                    <!-- ANTECEDENTES GINECOLOGICOS -->


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Antecedentes Ginecológicos</h5>
                    </div>


                    <!--ANTECEDENTES GINECOLOGICOS  -->

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Menarca</strong>
                        <input type="number" class="control form-control" id="Menarca" name="Menarca" style="font-size: 13px;">
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Menopausia</strong>
                        <select name="Menopausia" id="Menopausia" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Gestas</strong>
                        <input type="number" class="control form-control" id="Gestas" name="Gestas" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Esta Embarazada</strong>
                        <select name="Esta_Embarazada" id="Esta_Embarazada" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-3" id="Fecha_probable" style="display:none;">
                        <strong style="font-size: 13px;">Fecha Probable Parto</strong>
                        <input type="date" class="control form-control" id="fecha_probableParto" name="fecha_probableParto" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Terapia Reemplazo Hormonal</strong>
                        <select name="Terapia_remplazoHormonal" id="Terapia_remplazoHormonal" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="Lactancia_Antecentes">
                        <strong style="font-size: 13px;">Lactancia </strong>
                        <select name="Lactancia" id="Lactancia" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>


                    <div class="col-md-2" id="Tiempo_lactancia" style="display:none;">
                        <strong style="font-size: 13px;">Tiempo</strong>
                        <input type="text" class="control form-control" id="Tiempo" name="Tiempo" style="font-size: 13px;">
                    </div>

                    <!--ANTECEDENTES GINECOLOGICOS  -->


                    <!-- ANTECEDENTES EMBARAZO -->
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Antecedentes Embarazos</h5>
                    </div>

                    <!--Antecedentes EmbarazoS  -->

                    <div class="col-md-1">

                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Gestas</strong>
                        <input type="text" class="control form-control" id="Gestas_Embarazo" name="Gestas_Embarazo" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Paras</strong>
                        <input type="text" class="control form-control" id="Paras" name="Paras" style="font-size: 13px;">
                    </div>


                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Abortos</strong>
                        <input type="text" class="control form-control" id="Abortos" name="Abortos" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Cesáreas</strong>
                        <input type="text" class="control form-control" id="Cesareas" name="Cesareas" style="font-size: 13px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 13px;">Ectópicos</strong>
                        <input type="text" class="control form-control" id="Ectopicos" name="Ectopicos" style="font-size: 13px;">
                    </div>


                    <div class="col-md-1">

                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Comentario:</strong>
                        <textarea id="comentarios"  name="comentarios" class="form-control" style="font-size: 13px;"></textarea>
                    </div>

                    <!--ANTECEDENTES EMBARAZO  -->

                    <!-- Atención Clínica -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Atención Clínica</h5>
                    </div>


                    <!--Atención Clínica  -->

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Fecha Primera Atención</strong>
                        <input type="date" class="control form-control" id="Fecha_primeraAtencion" name="Fecha_primeraAtencion" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">BIRADS Referencia </strong>
                        <select name="BIRADS_Referencia" id="BIRADS_Referencia" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="BR0">BR0 Estudio Insuficiente</option>
                            <option value="BRI">BRI Normal</option>
                            <option value="BR2">BR2 Patología Benigna</option>
                            <option value="BR3">BR3 Sugestivo de Benignidad Menos del 2%</option>
                            <option value="BR4a">BR4a Baja a Moderada Sospecha 2-10%</option>
                            <option value="BR4b">BR4b Moderada sospecha 11-40%</option>
                            <option value="BR4c">BR4c Moderada - Alta Sospecha 41-94%</option>
                            <option value="BR5">BR5 Alta Sospecha de Malignidad más del 95%</option>
                            <option value="BR6">BR6 Malignidad Confirmada</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">BIRADS Hospital</strong>
                        <select name="BIRADS_Hospital" id="BIRADS_Hospital" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="BR0">BR0 Estudio Insuficiente</option>
                            <option value="BRI">BRI Normal</option>
                            <option value="BR2">BR2 Patología Benigna</option>
                            <option value="BR3">BR3 Sugestivo de Benignidad Menos del 2%</option>
                            <option value="BR4a">BR4a Baja a Moderada Sospecha 2-10%</option>
                            <option value="BR4b">BR4b Moderada sospecha 11-40%</option>
                            <option value="BR4c">BR4c Moderada - Alta Sospecha 41-94%</option>
                            <option value="BR5">BR5 Alta Sospecha de Malignidad más del 95%</option>
                            <option value="BR6">BR6 Malignidad Confirmada</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Lateralidad</strong>
                        <select name="Lateralidad" id="Lateralidad" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Bilateral">Bilateral</option>
                            <option value="Derecha">Derecha</option>
                            <option value="Izquierda">Izquierda</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Estado Clínico</strong>
                        <select name="Estado_clinico" id="Estado_clinico" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="I">I</option>
                            <option value="II">II A</option>
                            <option value="II">II B</option>
                            <option value="III A">III A</option>
                            <option value="III B">III B</option>
                            <option value="III C">III C</option>
                            <option value="IV">IV</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Etapa Clínica</strong>
                        <input type="text" class="control form-control" id="Etapa_Clinica" name="Etapa_Clinica" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Estado Tamaño Tumoral</strong>
                        <select name="Estado_Tamaño" id="Estado_Tamaño" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="T1">T1. menor o igual a 2cm</option>
                            <option value="T2">T2. mayor a 2cm pero menor a 4 cm</option>
                            <option value="T3">T3. mayor a 4 cm</option>
                            <option value="T4a">T4a. Invade Piel, Mandibular Canal Auditivo y Nervio Facial</option>
                            <option value="T4b">T4b. Tumor que Invade la Base del Craneo y/o Pterigoides</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Metástasis</strong>
                        <select name="Metastasis" id="Metastasis" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="M0">M0: Sin Enfermedad a Distancia</option>
                            <option value="M1">M1: Con Enfermedad Metastásica</option>
                            <option value="MX">MX: No se Puede Evaluar Metástasis Distantes</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Calidad Vida ECOG</strong>
                        <select name="Calidad_ECOG" id="Calidad_ECOG" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="ECOG O">ECOG O Desempeño Funcional Normal</option>
                            <option value="ECOG 1">ECOG 1 Desempeño Leve</option>
                            <option value="ECOG 2">ECOG 2 EI del Tiempo Postrado</option>
                            <option value="ECOG 3">ECOG 3 Más del 50% Postrado</option>
                            <option value="ECOG 4">ECOG 4 Dependiente al 100% para Vida Básica</option>
                            <option value="ECOG 5">ECOG 5 Falleció</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Compromiso Linfático Nodal</strong>
                        <select name="Compromiso_linfatico" id="Compromiso_linfatico" class="form-select" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="NO">NO: Ausencia de Adenopatías Palpables</option>
                            <option value="NI">NI: Nódulos Palpables Ipsilaterales, Menores a 3cm</option>
                            <option value="N2a">N2a: Metástasis en Nódulo Ipsilateral, Mayor de 3cm Menor de 6cm</option>
                            <option value="N2b">N2b: Metástasis en múltiples Nódulos Ipsilaterales Mayores a 6cm</option>
                            <option value="N2c">N2c: Metástasis en Nódulos Bilaterales y Contralaterales Mayores a 6cm</option>
                            <option value="N3">N3: Nódulos Palpables Fijos Mayor a 6cm</option>
                            <option value="NX">NX: No Puede ser Evaluado por Falta de Datos</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Mastectomía Extrainstitucional</strong>
                        <select name="Mastectomia_extrain" id="Mastectomia_extrain" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="container" id="late_fecha_maste" style="display:none;">
                        <div class="row">

                            <div class="col-md-6" id="Latera_maste">
                                <strong style="font-size: 13px;">Lateralidad Mastectomía Extrainstitucional</strong>
                                <select name="Lateralidad_mastectomia" id="Lateralidad_mastectomia" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Mama Derecha">Mama Derecha</option>
                                    <option value="Mama Izquierda">Mama Izquierda</option>
                                    <option value="Ambas Mamas">Ambas Mamas</option>
                                </select>
                            </div>

                        <div class="col-md-6" id="fecha_latera_maste">
                            <strong style="font-size: 13px;">Fecha</strong>
                            <input type="date" class="control form-control" id="Fecha_Mastectomia" name="Fecha_Mastectomia" style="font-size: 13px;">
                        </div>
                    </div>

                    <!--Atención Clínica  -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Estudios Especiales</h5>
                    </div>

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Histopatología</h5>
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Histopatología</strong>
                        <select name="Histopatologia" id="Histopatologia" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Histo_area" style="display:none;">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Histopatologia_area" id="Histopatologia_area" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Mama Derecha">Mama Derecha</option>
                            <option value="Mama Izquierda">Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha">Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda">Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar">Biopsia por aguja/Biopsia de otro lugar</option>
                        </select>
                    </div>


                    <div class="container" id="DXHistopatologia" style="display:none;">
                        <div class="row">
                            <div class="col-md-6" id="Dx_histopatologicoarea">
                                <strong style="font-size: 13px;">Dx Histopatológico</strong>
                                <select name="Dx_Histopatologia_area" id="Dx_Histopatologia_area" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Benigno Phyllodes">Benigno Phyllodes</option>
                                    <option value="Ductal">Ductal</option>
                                    <option value="Enfermedad de Paget">Enfermedad de Paget</option>
                                    <option value="Intraductal">Intraductal</option>
                                    <option value="Linfomas">Linfomas</option>
                                    <option value="Lobulillar">Lobulillar</option>
                                    <option value="Maligno Phyllodes">Maligno Phyllodes</option>
                                    <option value="Mixto">Mixto</option>
                                    <option value="Mucinoso">Mucinoso</option>
                                    <option value="Negativo Neoplasia">Negativo Neoplasia</option>
                                    <option value="Papilar">Papilar</option>
                                    <option value="Positivo Neoplasia">Positivo Neoplasia</option>
                                    <option value="Sarcomas">Sarcomas</option>
                                    <option value="Sin Respuesta">Sin Respuesta</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 13px; ">Fecha Dx Histopatológico</strong>
                                <input id="fecha_dxHistopatologico" name="fecha_dxHistopatologico" type="date" class="control form-control" style="font-size: 13px;">
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Nottinghan</strong>
                                <select name="Histopatologia_Nottinghan" id="Histopatologia_Nottinghan" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Grado I">Grado I Bien Diferenciado</option>
                                    <option value="Grado II">Grado II Moderadamente Diferenciado</option>
                                    <option value="Grado III">Grado III Escasamente Diferenciado</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Escala SBR</strong>
                                <select name="Histopatologia_Escala_SBR" id="Histopatologia_Escala_SBR" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Gl">Gl 3-5 Puntos Bien Diferenciado</option>
                                    <option value="G2">G2 6-7 Puntos Moderadamente Diferenciado</option>
                                    <option value="G3">G3 8-9 Puntos Pobremente Diferenciado</option>
                                    <option value="G4">G4 Indiferenciado</option>
                                    <option value="GX">GX Diferenciación no Puede ser Valorado</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Escala MID</strong>
                                <select name="Histopatologia_Escala_MID" id="Histopatologia_Escala_MID" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Parcial">Parcial</option>
                                    <option value="Completa">Completa</option>
                                    <option value="Sin Respuesta">Sin Respuesta</option>
                                </select>
                            </div>

                        </div>


                    </div> <!-- AREA DIAGNOSTICO -->


                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Inmunohistoquimica</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Inmunohistoquimica</strong>
                        <select name="Inmunohistoquimica" id="Inmunohistoquimica" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="Inmuno_area" style="display:none;">

                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Inmunohistoquimica_area" id="Inmunohistoquimica_area" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Mama Derecha">Mama Derecha</option>
                            <option value="Mama Izquierda">Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha">Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda">Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar">Biopsia por aguja/Biopsia de otro lugar</option>
                        </select>
                    </div>

                    <!-- INMUNOHISTOQUIMICA -->

                    <div class="container" id="Area_Inmunohistoquimica" style="display:none;">
                        <div class="row">
                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Receptores Estrógenos (RE)</strong>
                                <input type="text" class="control form-control" id="Receptores_RE" name="Receptores_RE" style="font-size: 13px;">
                            </div>


                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Receptores Progesterona (RP)</strong>
                                <input type="text" class="control form-control" id="Receptores_RP" name="Receptores_RP" style="font-size: 13px;">
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">KI-67</strong>
                                <input type="text" class="control form-control" id="KI_67" name="KI_67" style="font-size: 13px;">
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">P 53</strong>
                                <input type="text" class="control form-control" id="P_53" name="P_53" style="font-size: 13px;">
                            </div>


                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Triple Negativo</strong>
                                <select name="Triple_Negativo" id="Triple_Negativo" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Se realizó PDL</strong>
                                <select name="PDL" id="PDL" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Oncogén HER2</strong>
                                <select name="Oncogen_her2" id="Oncogen_her2" class="form-select" style="font-size: 13px;" aria-label="Default select example">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="+">+</option>
                                    <option value="++">++</option>
                                    <option value="+++">+++</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>

                            <div class="col-md-3" id="Fish_tt" style="display:none;">
                                <strong style="font-size: 13px;">FISH</strong>
                                <select name="FISH" id="FISH" class="form-select" style="font-size: 13px;">
                                    <option value="Negativo">Negativo</option>
                                    <option value="Positivo">Positivo</option>
                                </select>
                            </div>

                        </div>

                    </div> <!-- INMUNOHISTOQUIMICA -->


                    <!-- MOLECULAR -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Molecular</h5>
                    </div>



                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Molecular</strong>
                        <select name="Molecular" id="Molecular" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="Histo_areaMolecular" style="display:none;">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Molecular_area" id="Molecular_area" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Mama Derecha">Mama Derecha</option>
                            <option value="Mama Izquierda">Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha">Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda">Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar">Biopsia por aguja/Biopsia de otro lugar</option>
                        </select>
                    </div>

                    <div class="container" id="Molecular_estudios" style="display:none;">
                        <div class="row">
                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Luminal A</strong>
                                <select name="Luminal_A" id="Luminal_A" class="form-select" style="font-size: 13px;">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Luminal B</strong>
                                <select name="Luminal_B" id="Luminal_B" class="form-select" style="font-size: 13px;">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Enriquecido en HER 2+</strong>
                                <select name="Enriquecido_HER" id="Enriquecido_HER" class="form-select" style="font-size: 13px;">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Basal</strong>
                                <select name="Basal" id="Basal" class="form-select" style="font-size: 13px;">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                        </div>

                    </div><!-- Molecular_estudios  -->

                    <!-- Tratamiento -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Tratamiento</h5>
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Quirurgicos</strong>
                        <select name="Quirurgicos" id="Quirurgicos" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="container" id="tx_lateralidadquirurgico" style="display:none;">
                        <div class="row">

                            <div class="col-md-6" id="LateralidadQX">
                                <strong style="font-size: 13px;">Lateralidad QX</strong>
                                <select name="Lateralidad_QX" id="Lateralidad_QX" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Derecha">Derecha</option>
                                    <option value="Izquierda">Izquierda</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="tipo_txqx">
                                <strong style="font-size: 13px;">Tipo</strong>
                                <select name="Tipo_qx" id="Tipo_qx" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Mastectomia">Mastectomia</option>
                                    <option value="Ganglionar">Ganglionar</option>
                                </select>
                            </div>

                        </div>

                    </div>


                    <!-- Ganglionar  -->

                    <div class="container" id="tratamiento_ganglionar" style="display:none;">
                        <div class="row">

                            <div class="col-md-6">
                                <strong style="font-size: 13px;">Tipo Ganglionar</strong>
                                <select name="tipo_ganglionar" id="tipo_ganglionar" class="form-select" style="font-size: 13px;">
                                    <option value="Sin registro">Sin registro</option>
                                    <option value="Disección Axilar">Disección Axilar</option>
                                    <option value="Ganglio Centinela">Ganglio Centinela</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <strong style="font-size: 13px;">Fecha Ganglionar</strong>
                                <input type="date" class="control form-control" id="fecha_ganglionar" name="fecha_ganglionar" style="font-size: 13px;">
                            </div>
                        </div>

                    </div><!-- Ganglionar  -->

                    <!-- Mastectomia  -->

                    <div class="container" id="tratamiento_Mastectomia" style="display:none;">
                        <div class="row">

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Fecha Mastectomia</strong>
                                <input type="date" class="control form-control" id="fecha_Mastectomia" name="fecha_Mastectomia" style="font-size: 13px;">
                            </div>


                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Tipo Mastectomia</strong>
                                <select name="tipo_Mastectomia" id="tipo_Mastectomia" class="form-select" style="font-size: 13px;">
                                    <option value="Sin registro">Sin registro</option>
                                    <option value="Mastectomia Parcial ">Mastectomia Parcial</option>
                                    <option value="Mastectomia Total">Mastectomia Total</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Reconstrucción</strong>
                                <select name="tipo_MastReconstruccion_Mastectomiaectomia" id="Reconstruccion_Mastectomia" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="Colgajo">Colgajo</option>
                                    <option value="Expansor Tisular">Expansor Tisular</option>
                                    <option value="Implante Mamario">Implante Mamario</option>
                                </select>
                            </div>

                        </div>

                    </div><!-- Mastectomia  -->

                    <!-- Quimioterapia -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Quimioterapia</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Quimioterapia</strong>
                        <select name="Quimioterapia" id="Quimioterapia" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="quimio_antraciclinas" style="display:none;">
                        <strong style="font-size: 13px;">Antraciclinas</strong>
                        <select name="Antraciclinas" id="Antraciclinas" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Daunorubicina">Daunorubicina</option>
                            <option value="Doxorrubicina">Doxorrubicina</option>
                            <option value="Epirubicina">Epirubicina</option>
                            <option value="Idarubicina">Idarubicina</option>
                            <option value="Sin Antraciclinas">Sin Antraciclinas</option>
                        </select>
                    </div>

                </div> <!-- SOBRANTE-->

                <div class="container" id="quimioterapia_1" style="display:none;">
                    <div class="row">

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                Momento QT</h5>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Tipo</strong>
                            <select name="Tipo_QT" id="Tipo_QT" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Adyuvante">Adyuvante</option>
                                <option value="Neoadyuvante">Neoadyuvante</option>
                                <option value="Paliativo">Paliativo</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Fecha Inicio</strong>
                            <input type="date" class="control form-control" id="FechaInicio_QT" name="FechaInicio_QT" style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Fecha Ternmino</strong>
                            <input type="date" class="control form-control" id="FechaTernmino_QT" name="FechaTernmino_QT" style="font-size: 13px;">
                        </div>


                        <!-- EQUEMA -->


                        <div class="container" id="Esquema_ady_neo" style="display:none;"> <br>
                            <div class="row">
                                <label for="Esquema" style="text-align: center; font-size: 14px;"><strong>Esquema</strong></label><br>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">5FU</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="5fu_Esquema" name="5fu_Esquema" value="Esquema_5fu" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_Esquema" name="AC_Esquema" value="AC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/T</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Esquema_AC_T" name="Esquema_AC_T" value="AC/T" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/TH</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_TH_Esquema" name="AC_TH_Esquema" value="AC/TH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AT</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AT_Esquema" name="AT_Esquema" value="AT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Atezolizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Atezolizumab_Esquema" name="Atezolizumab_Esquema" value="Atezolizumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Bevacizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_Esquema" name="Bevacizumab_Esquema" value="Bevacizumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Capecitabina</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Capecitabina_Esquema" name="Capecitabina_Esquema" value="Capecitabina" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CBP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_Esquema" name="CBP_Esquema" value="CBP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ciclofosfamida</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ciclofosfamida_Esquema" name="Ciclofosfamida_Esquema" value="Ciclofosfamida" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Cisplatino</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_Esquema" name="Cisplatino_Esquema" value="Cisplatino" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CMF</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_Esquema" name="CMF_Esquema" value="CMF" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ctuximab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_Esquema" name="Ctuximab_Esquema" value="Ctuximab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Docetaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_Esquema" name="Docetaxel_Esquema" value="Docetaxel" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">EC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="EC_Esquema" name="EC_Esquema" value="EC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Etopósido</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_Esquema" name="Etopósido_Esquema" value="Etopósido" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_Esquema" name="FAC_Esquema" value="FAC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FEC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_Esquema" name="FEC_Esquema" value="FEC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>




                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Herceptin</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_Esquema" name="Herceptin_Esquema" value="Herceptin" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Lapatinib</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_Esquema" name="Lapatinib_Esquema" value="Lapatinib" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Paclitaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_Esquema" name="Paclitaxel_Esquema" value="Paclitaxel" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pembrolixumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_Esquema" name="Pembrolixumab_Esquema" value="Pembrolixumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pertuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_Esquema" name="Pertuzumab_Esquema" value="Pertuzumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_Esquema" name="TAC_Esquema" value="TAC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>



                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TC_Esquema" name="TC_Esquema" value="TC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_Esquema" name="TCH_Esquema" value="TCH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCHP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_Esquema" name="TCHP_Esquema" value="TCHP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TH_Esquema" name="TH_Esquema" value="TH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">THP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="THP_Esquema" name="THP_Esquema" value="THP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Trastuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_Esquema" name="Trastuzumab_Esquema" value="Trastuzumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Sin Registro</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_Esquema" name="SinRegistro_Esquema" value="Sin Registro" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                            </div> <!--Container Cierre  EQUEMA -->
                        </div>
                        <!-- 1er Línea QT  -->

                        <div class="container" id="1erLinea_QT" style="display:none;"> <br>

                            <div class="row">
                                <label for="Palitaivos_1LINEAQT" style=" text-align: center; font-size: 14px;"><strong>1er Línea QT</strong></label> <br>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">5FU</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="5fu" name="5fu" value="5fu_1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC" name="AC" value="AC_1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/T</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_1QT" name="AC_T_1QT" value="AC_T_1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/TH</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_1QT" name="AC_TH1QT" value="AC_TH1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AT</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AT_1QT" name="AT_1QT" value="AT_TH1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Atezolizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Atezolizumab_1QT" name="Atezolizumab_1QT" value="Atezolizumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Bevacizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_1QT" name="Bevacizumab_1QT" value="Bevacizumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Capecitabina</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Capecitabina_1QT" name="Capecitabina_1QT" value="Capecitabina" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CBP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_1QT" name="CBP_1QT" value="CBP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ciclofosfamida</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ciclofosfamida_1QT" name="Ciclofosfamida_1QT" value="Ciclofosfamida" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <!--  -->

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Cisplatino</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_1QT" name="Cisplatino_1QT" value="Cisplatino" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CMF</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_1QT" name="CMF_1QT" value="CMF" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ctuximab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_1QT" name="Ctuximab_1QT" value="Ctuximab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Docetaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_1QT" name="Docetaxel_1QT" value="Docetaxel" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">EC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="EC_1QT" name="EC_1QT" value="EC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Etopósido</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_1QT" name="Etopósido_1QT" value="Etopósido" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_1QT" name="FAC_1QT" value="FAC" style="font-size:14px; margin: 5px auto; display: block;"> 
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FEC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_1QT" name="FEC_1QT" value="FEC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Herceptin</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_1QT" name="Herceptin_1QT" value="Herceptin" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Lapatinib</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_1QT" name="Lapatinib_1QT" value="Lapatinib" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Paclitaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_1QT" name="Paclitaxel_1QT" value="Paclitaxel" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pembrolixumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_1QT" name="Pembrolixumab_1QT" value="Pembrolixumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pertuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_1QT" name="Pertuzumab_1QT" value="Pertuzumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_1QT" name="TAC_1QT" value="TAC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TC_1QT" name="TC_1QT" value="TC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_1QT" name="TCH_1QT" value="TCH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCHP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_1QT" name="TCHP_1QT" value="TCHP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TH_1QT" name="TH_1QT" value="TH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">THP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="THP_1QT" name="THP_1QT" value="THP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Trastuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_1QT" name="Trastuzumab_1QT" value="Trastuzumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Sin Registro</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_1QT" name="SinRegistro_1QT" value="Sin Registro" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                            </div> 

                            <div class="row" id="fechas_1er">

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Inicio QT</strong>
                                    <input type="date" class="control form-control" id="FechaInicio_QTPaliativo" name="FechaInicio_QTPaliativo" style="font-size: 13px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Término QT</strong>
                                    <input type="date" class="control form-control" id="FechaTermino_QTPaliativo" name="FechaTermino_QTPaliativo" style="font-size: 13px;">
                                </div>

                            </div> 

                        </div>



                        <!-- 2 QT Paliativos -->

                        <!-- 2da Línea QT  -->

                        <div class="container" id="2daLinea_QT" style="display:none;"> <br>
                            <div class="row">
                                <label for="Palitaivos_2daLINEAQT" style=" text-align: center; font-size: 14px;"><strong>2da Línea QT</strong></label> <br>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">5FU</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="5f_2doQTP" name="5fu_2doQTP" value="5fu" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_2doQTP" name="AC_2doQTP" value="AC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                
                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/T</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="ACT_2doQTP" name="ACT_2doQTP" value="AC/T" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/TH</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_2doQTPV" name="AC_2doQTP" value="AC_TH1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AT</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AT_2doQTP" name="AT_2doQTP" value="AT_TH1QT" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Atezolizumab</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Atezolizumab_2doQTP" name="Atezolizumab_2doQTP" value="Atezolizumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Bevacizumab</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Bevacizumab_2doQTP" name="Bevacizumab_2doQTP" value="Bevacizumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Capecitabina</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Capecitabina_2doQTP" name="Capecitabina_2doQTP" value="Capecitabina" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CBP</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="CBP_2doQTP" name="CBP_2doQTP" value="CBP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ciclofosfamida</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Ciclofosfamida_2doQTP" name="Ciclofosfamida_2doQTP" value="Ciclofosfamida" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Cisplatino</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Cisplatino_2doQTP" name="Cisplatino_2doQTP" value="Cisplatino" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CMF</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="CMF_2doQTP" name="CMF_2doQTP" value="CMF" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ctuximab</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Ctuximab_2doQTP" name="Ctuximab_2doQTP" value="Ctuximab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Docetaxel</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Docetaxel_2doQTP" name="Docetaxel_2doQTP" value="Docetaxel" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">EC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="EC_2doQTP" name="EC_2doQTP" value="EC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Etopósido</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Etopósido_2doQTP" name="Etopósido_2doQTP" value="Etopósido" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_2doQT" name="FAC_2doQT" value="FAC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FEC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_2doQTP" name="FEC_2doQTP" value="FEC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Herceptin</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_2doQTP" name="Herceptin_2doQTP" value="Herceptin" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Lapatinib</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_2doQTP" name="Lapatinib_2doQTP" value="Lapatinib" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Paclitaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_2doQTP" name="Paclitaxel_2doQTP" value="Paclitaxel" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pembrolixumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_2doQTP" name="Pembrolixumab_2doQTP" value="Pembrolixumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pertuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_2doQTP" name="Pertuzumab_2doQTP" value="Pertuzumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_2doQTP" name="TAC_2doQTP" value="TAC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TC_2doQTP" name="TC_2doQTP" value="TC" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_2doQTP" name="TCH_2doQTP" value="TCH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCHP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_2doQTP" name="TCHP_2doQTP" value="TCHP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TH_2doQTP" name="TH_2doQTP" value="TH" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">THP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="THP_2doQTP" name="THP_2doQTP" value="THP" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Trastuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_2doQTP" name="Trastuzumab_2doQTP" value="Trastuzumab" style="font-size:14px; margin: 5px auto; display: block;">
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Sin Registro</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_2doQTP" name="SinRegistro_2doQTP" value="Sin Registro" style="font-size:14px; margin: 5px auto; display: block;"> 
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Inicio QT</strong>
                                    <input type="date" class="control form-control" id="FechaInicio_QT2Paliativo" name="FechaInicio_QT2Paliativo" style="font-size: 13px;">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Término QT</strong>
                                    <input type="date" class="control form-control" id="FechaTermino_QTP2aliativo" name="FechaTermino_QTP2aliativo" style="font-size: 13px;">
                                </div>
                            </div>

                        </div> <!--CONTAINER 2da Linea QT -->





                        <!-- HORMONOTERAPIA -->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                Hormoterapia</h5>
                        </div>

                        <div class="col-md-12">
                            <strong style="font-size: 13px;">Hormoterapia</strong>
                            <select name="Hormoterapia" id="Hormoterapia" class="form-select" style="font-size: 13px;">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>



                        <div class="col-md-6" id="Tipo_hormono" style="display:none;">
                            <strong style="font-size: 13px;">Tipo Hormonoterapia</strong>
                            <select name="Hormonoterapia_QT" id="Hormonoterapia_QT" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Anastrozol">Anastrozol</option>
                                <option value="Exemetastino">Exemetastino</option>
                                <option value="Letrazol">Letrazol</option>
                                <option value="Tamoxifeno">Tamoxifeno</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="hormo_moment" style="display:none;">
                            <strong style="font-size: 13px;">Momento Hormonoterapia</strong>
                            <select name="Momento_Hormonoterapia" id="Momento_Hormonoterapia" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Adyuvante">Adyuvante</option>
                                <option value="Neoadyuvante">Neoadyuvante</option>
                            </select>
                        </div>

                        <!-- HER2 +++ -->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                HER2 +++</h5>
                        </div>


                        <div class="col-md-6">
                            <strong style="font-size: 13px;">HER2 +++</strong>
                            <select name="HER_2" id="HER_2" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Esquema_her2" style="display:none;">
                            <strong style="font-size: 13px;">Esquema HER2 +++</strong>
                            <select name="Esquema_HER" id="Esquema_HER" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Trastuzumab/Emtansina">Trastuzumab/Emtansina</option>
                                <option value="Trastuzumab/Pertuzumab">Trastuzumab/Pertuzumab</option>
                            </select>
                        </div>

                        <!-- TRIPLE NEGATIVO  -->

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                Triple Negativo</h5>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Triple Negativo</strong>
                            <select name="triple_negativo" id="triple_negativo" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="esquema_triple" style="display:none;">
                            <strong style="font-size: 13px;">Esquema Triple Negativo</strong>
                            <select name="EsquemaTriple_negativo" id="EsquemaTriple_negativo" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Atezolizumab">Atezolizumab</option>
                                <option value="Olaparib">Olaparib</option>
                                <option value="Pembrolizumab">Pembrolizumab</option>
                            </select>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                Hormonosensible</h5>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Hormonosensible</strong>
                            <select name="Hormosensible" id="Hormosensible" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Inhibidores" style="display:none;">
                            <strong style="font-size: 13px;">Inhibidores Ciclinas</strong>
                            <select name="Inhibidores_Ciclinas" id="Inhibidores_Ciclinas" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Abemaciclib">Abemaciclib</option>
                                <option value="Palbociclib">Palbociclib</option>
                                <option value="Ribociclib">Ribociclib</option>
                            </select>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                Tipo Tratamiento</h5>
                        </div>

                        <div class="col-md-12">
                            <strong style="font-size: 13px;">Tipo Tratamiento</strong>
                            <select name="Tipo_Tratamiento" id="Tipo_Tratamiento" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Adyuvante">Adyuvante</option>
                                <option value="Neoadyuvante">Neoadyuvante</option>
                                <option value="Paliativo">Paliativo</option>
                            </select>
                        </div>

                        <div class="form-header">
                            <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                                Completo Quimio</h5>
                        </div>

                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Completo Quimio</strong>
                            <select name="Completo_Quimio" id="Completo_Quimio" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>


                        <div class="col-md-6" id="Causa_incompleta" style="display:none;">
                            <strong style="font-size: 13px;">Causa QT Incompleta </strong>
                            <select name="CausaQT_Incompleta" id="CausaQT_Incompleta" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Abadono del Paciente">Abadono del Paciente</option>
                                <option value="Evento Adverso">Evento Adverso</option>
                                <option value="Progresión de la Enfermedad">Progresión de la Enfermedad</option>
                                <option value="Recurrencia de la Enfermedad">Recurrencia de la Enfermedad</option>
                                <option value="Fallecio">Falleció</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="quimio_fecha" style="display:none;">
                            <strong style="font-size: 13px; ">Fecha</strong>
                            <input id="fecha_quimio" name="fecha_quimio" type="date" class="control form-control" style="font-size: 13px;">
                        </div>

                        <div class="col-md-6" id="quimio_fechaQT" style="display:none;">
                            <strong style="font-size: 13px; ">Fecha Falleció QT</strong>
                            <input id="fecha_fallecio" name="fecha_fallecio" type="date" class="control form-control" style="font-size: 13px;">
                        </div>


                        <div class="col-md-6" id="Causa_Fallecio" style="display:none;">
                            <strong style="font-size: 13px;">Causa Falleció QT</strong>
                            <select name="Fallecio_causa" id="Fallecio_causa" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Evento Adverso">Evento Adverso</option>
                                <option value="Oncológica">Oncológica</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="quimio_otra" style="display:none;">
                            <strong style="font-size: 13px; ">Especifique Otra</strong>
                            <input id="otra_causa" name="otra_causa" type="text" class="control form-control" style="font-size: 13px;">
                        </div>


                    </div>

                </div> <!-- Cierre de Quimio -->


                <!-- RADIOTERAPIA -->

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                        Radioterapia</h5>
                </div>

                <div class="col-md-12">
                    <strong style="font-size: 13px;">Radioterapia</strong>
                    <select name="Radioterapia" id="Radioterapia" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <!-- RADIOTERAPIA CAUSAS -->
                <div class="container" id="SI_Radioterapia" style="display:none;">
                    <div class="row">

                        <div class="col-md-4" id="Causa_Fallecio">
                            <strong style="font-size: 13px;">Tipo Radioterapia</strong>
                            <select name="Tipo_radioterapia" id="Tipo_radioterapia" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Ciclo Mamario Completo">Ciclo Mamario Completo</option>
                                <option value="Tangencial">Tangencial</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px; ">Fecha Inicio</strong>
                            <input id="fecha_radioterapia" name="fecha_radioterapia" type="date" class="control form-control" style="font-size: 13px;">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px; ">Número Sesiones</strong>
                            <input id="numero_radio" name="numero_radio" type="number" class="control form-control" style="font-size: 13px;">
                        </div>

                        <!-- CIERRE RADIOTERAPIA CUSAS  -->
                    </div>
                </div>

                <div class="row">
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Defunción</h5>
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 13px;">Defunción</strong>
                        <select name="Defuncion" id="Defuncion" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="container" id="fecha_causaDefuncion" style="display:none;">
                        <div class="row">

                            <div class="col-md-6">
                                <strong style="font-size: 13px; ">Fecha Defunción</strong>
                                <input id="fecha_Defuncion" name="fecha_Defuncion" type="date" class="control form-control" style="font-size: 13px;">
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 13px;">Causa </strong>
                                <select name="causa_defuncion" id="causa_defuncion" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro">Sin Registro</option>
                                    <option value="NO Oncológica">NO Oncológica</option>
                                    <option value="Oncológica">Oncológica</option>
                                </select>
                            </div>

                        </div>

                    </div>
                </div>


            </div> <!-- DIV ROW LINEA 11 -->


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> <br>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

        </div><!--DIV DEL BODY  -->


    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>