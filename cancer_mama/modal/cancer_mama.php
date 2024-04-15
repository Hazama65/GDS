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
                            <select name="Estadocivil" id="Estadocivil" class="form-control" style="font-size: 13px;">
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
                        <select name="unidad_referencia" id="unidad_referencia" class="form-control" style="font-size: 14px;">
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
                        <select name="Heredo_Cancer" id="Heredo_Cancer" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>


                    <div class="col-md-12" id="Cancer_prostata" style="display:none;">
                        <strong style="font-size: 13px;">Cáncer Próstata</strong>
                        <select name="Heredo_CancerProstata" id="Heredo_CancerProstata" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>
                    <!-- style="display:none;" -->

                    <div class="container" id="CancerProstata" style="display:none;">

                        <label for="Abuelo_materno_cancer" style="font-size: 13px;"><strong>Antecedentes de Cáncer de Próstata:</strong></label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Abuelo_materno_cancer" name="Antecedentes_Prostata" value="Abuelo_materno_cancer">
                            <label class="form-check-label" for="Abuelo_materno_cancer" style="font-size: 13px;">Abuelo Materno</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Abuelo_paterno_cancer" name="Abuelo_paterno_cancer" value="Abuelo_paterno_cancer">
                            <label class="form-check-label" for="Abuelo_paterno_cancer" style="font-size: 13px;">Abuelo Paterno</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Hermano_Prostata" name="Hermano_Prostata" value="Hermano_Prostata">
                            <label class="form-check-label" for="Hermano_Prostata" style="font-size: 13px;">Hermano</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Padre_cancer_Prostata" name="Padre_cancer_Prostata" value="Padre_cancer_Prostata">
                            <label class="form-check-label" for="Padre_cancer_Prostata" style="font-size: 13px;">Padre</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Primo_Materno_Prostata" name="Primo_Materno_Prostata" value="Primo_Materno_Prostata">
                            <label class="form-check-label" for="Primo_Materno_Prostata" style="font-size: 13px;">Primo Materno</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Primo_Paterno_Prostata" name="Primo_Paterno_Prostata" value="Primo_Paterno_Prostata">
                            <label class="form-check-label" for="Primo_Paterno_Prostata" style="font-size: 13px;">Primo Paterno</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tio_Materno_Prostata" name="Tio_Materno_Prostata" value="Tio_Materno_Prostata">
                            <label class="form-check-label" for="Tio_Materno_Prostata" style="font-size: 13px;">Tío Materno</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tio_Paterno_Prostata" name="Tio_Paterno_Prostata" value="Tio_Paterno_Prostata">
                            <label class="form-check-label" for="Tio_Paterno_Prostata" style="font-size: 13px;">Tío Paterno</label>
                        </div>

                    </div>

                    <!-- Cancer OVARIO -->

                    <div class="col-md-12" id="CancerOvario" style="display:none;">
                        <strong style="font-size: 13px;">Cáncer Ovario</strong>
                        <select name="Heredo_CancerOvario" id="Heredo_CancerOvario" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>

                    <div class="container" id="Cancer_Ovario" style="display:none;">
                        <label for="Antecedentes_ovario" style="font-size: 13px;"><strong>Antecedentes de Cáncer Ovario :</strong></label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Abuela_materna_cancer" name="Abuela_MaternaAntecedentes_Ovario" value="Abuela_matera_cancer">
                            <label class="form-check-label" for="Abuela_materna_cancer" style="font-size: 13px;">Abuela Materna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Abuela_paterna_cancer" name="Abuela_PaternaAntecedentes_Ovario" value="Abuela_paterna_cancer">
                            <label class="form-check-label" for="Abueloapaterna_cancer" style="font-size: 13px;">Abuela Paterna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Hermana_Ovario" name="Hermana_Antecedentes_Ovario" value="Hermana_Ovario">
                            <label class="form-check-label" for="Hermana_Ovario" style="font-size: 13px;">Hermana</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Madre_cancer_Ovario" name="Madre_Antecedentes_Ovario" value="Madre_cancer_Ovario">
                            <label class="form-check-label" for="Madre_cancer_Ovario" style="font-size: 13px;">Madre</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Prima_Materna_Ovario" name="PrimaMaterna_Antecedentes_Ovario" value="Prima_Materna_Ovario">
                            <label class="form-check-label" for="Prima_Materna_Ovario" style="font-size: 13px;">Prima Materna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Prima_Paterna_Ovario" name="Prima_paternaAntecedentes_Ovario" value="Prima_Paterna_Ovario">
                            <label class="form-check-label" for="Prima_Paterna_Ovario" style="font-size: 13px;">Prima Paterna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tia_Materna_Ovario" name="Tia_MaternaAntecedentes_Ovario" value="Tia_Materna_Ovario">
                            <label class="form-check-label" for="Tia_Materna_Ovario" style="font-size: 13px;">Tía Materna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tia_Paterna_Ovario" name="Tia_PaternaAntecedentes_Ovario  " value="Tia_Paterna_Ovario">
                            <label class="form-check-label" for="Tia_Paterna_Ovario" style="font-size: 13px;">Tía Paterna</label>
                        </div>

                    </div>


                    <!-- ANTECEDENTES CANCER MAMA  -->

                    <div class="col-md-12" id="AH_Cancer_Mama" style="display:none;">
                        <strong style="font-size: 13px;">Cáncer Mama</strong>
                        <select name="Heredo_CancerMama" id="Heredo_CancerMama" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Antecedentes">Sin Antecedentes</option>
                        </select>
                    </div>

                    <div class="container" id="Cancer_Mama1" style="display:none;">
                        <label for="Antecedentes_mama" style="font-size: 13px;"><strong>Antecedentes de Cáncer Mama :</strong></label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Abuela_materna_cancerMama" name="Abuela_MaternaAntecedentes_Mama" value="Abuela_matera_cancerMama">
                            <label class="form-check-label" for="Abuela_materna_cancerMama" style="font-size: 13px;">Abuela Materna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Abuela_paterna_cancerMama" name="Abuela_PaternaAntecedentes_Ovario" value="Abuela_paterna_cancer">
                            <label class="form-check-label" for="Abueloapaterna_cancerMama" style="font-size: 13px;">Abuela Paterna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Hermana_Mama" name="Hermana_Antecedentes_Mama" value="Hermana_Mama">
                            <label class="form-check-label" for="Hermana_Mama" style="font-size: 13px;">Hermana</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Madre_cancer_Mama" name="Madre_Antecedentes_Mama" value="Madre_cancer_Mama">
                            <label class="form-check-label" for="Madre_cancer_Mama" style="font-size: 13px;">Madre</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Prima_Materna_Mama" name="PrimaMaterna_Antecedentes_Mama" value="Prima_Materna_Mama">
                            <label class="form-check-label" for="Prima_Materna_Mama" style="font-size: 13px;">Prima Materna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Prima_Paterna_Mama" name="Prima_paternaAntecedentes_Mama" value="Prima_Paterna_Mama">
                            <label class="form-check-label" for="Prima_Paterna_Mama" style="font-size: 13px;">Prima Paterna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tia_Materna_Mama" name="Tia_MaternaAntecedentes_Mama" value="Tia_Materna_Mama">
                            <label class="form-check-label" for="Tia_Materna_Mama" style="font-size: 13px;">Tía Materna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Tia_Paterna_Mama" name="Tia_PaternaAntecedentes_Mama" value="Tia_Paterna_Mama">
                            <label class="form-check-label" for="Tia_Paterna_Mama" style="font-size: 13px;">Tía Paterna</label>
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
                        <select name="Menopausia" id="Menopausia" class="form-control" style="font-size: 13px;">
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
                        <select name="Esta_Embarazada" id="Esta_Embarazada" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Fecha Probable Parto</strong>
                        <input type="date" class="control form-control" id="fecha_probableParto" name="fecha_probableParto" style="font-size: 13px;">
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Terapia Reemplazo Hormonal</strong>
                        <select name="Terapia_remplazoHormonal" id="Terapia_remplazoHormonal" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Lactancia </strong>
                        <select name="Lactancia" id="Lactancia" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>


                    <div class="col-md-2">
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
                        <textarea class="form-control" style="font-size: 13px;"></textarea>
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
                        <select name="BIRADS_Referencia" id="BIRADS_Referencia" class="form-control" style="font-size: 13px;">
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
                        <select name="BIRADS_Hospital" id="BIRADS_Hospital" class="form-control" style="font-size: 13px;">
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
                        <select name="Lateralidad" id="Lateralidad" class="form-control" style="font-size: 13px;">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Bilateral">Bilateral</option>
                            <option value="Derecha">Derecha</option>
                            <option value="Izquierda">Izquierda</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Estado Clínico</strong>
                        <select name="Estado_clinico" id="Estado_clinico" class="form-control" style="font-size: 13px;">
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
                        <select name="Estado_Tamaño" id="Estado_Tamaño" class="form-control" style="font-size: 13px;">
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
                        <select name="Metastasis" id="Metastasis" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="M0">M0: Sin Enfermedad a Distancia</option>
                            <option value="M1">M1: Con Enfermedad Metastásica</option>
                            <option value="MX">MX: No se Puede Evaluar Metástasis Distantes</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Calidad Vida ECOG</strong>
                        <select name="Calidad_ECOG" id="Calidad_ECOG" class="form-control" style="font-size: 13px;">
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
                        <select name="Compromiso_linfatico" id="Compromiso_linfatico" class="form-control" style="font-size: 13px;">
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
                        <select name="Mastectomia_extrain" id="Mastectomia_extrain" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="row" id="late_fecha_maste">

                        <div class="col-md-6" id="Latera_maste">
                            <strong style="font-size: 13px;">Lateralidad Mastectomía Extrainstitucional</strong>
                            <select name="Lateralidad_mastectomia" id="Lateralidad_mastectomia" class="form-control" style="font-size: 13px;">
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
                        <select name="Histopatologia" id="Histopatologia" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Histo_area">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Histopatologia_area" id="Histopatologia_area" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Mama Derecha">Mama Derecha</option>
                            <option value="Mama Izquierda">Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha">Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda">Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar">Biopsia por aguja/Biopsia de otro lugar</option>
                        </select>
                    </div>


                    <div class="row" id="DXHistopatologia">

                        <div class="col-md-3" id="Dx_histopatologicoarea">
                            <strong style="font-size: 13px;">Dx Histopatológico</strong>
                            <select name="Dx_Histopatologia_area" id="Dx_Histopatologia_area" class="form-control" style="font-size: 13px;">
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

                        <div class="col-md-3">
                            <strong style="font-size: 13px; ">Fecha Dx Histopatológico</strong>
                            <input id="fecha_dxHistopatologico" name="fecha_dxHistopatologico" type="date" class="control form-control" style="font-size: 13px;">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Nottinghan</strong>
                            <select name="Histopatologia_Nottinghan" id="Histopatologia_Nottinghan" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Grado I">Grado I Bien Diferenciado</option>
                                <option value="Grado II">Grado II Moderadamente Diferenciado</option>
                                <option value="Grado III">Grado III Escasamente Diferenciado</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Escala SBR</strong>
                            <select name="Histopatologia_Escala_SBR" id="Histopatologia_Escala_SBR" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Gl">Gl 3-5 Puntos Bien Diferenciado</option>
                                <option value="G2">G2 6-7 Puntos Moderadamente Diferenciado</option>
                                <option value="G3">G3 8-9 Puntos Pobremente Diferenciado</option>
                                <option value="G4">G4 Indiferenciado</option>
                                <option value="GX">GX Diferenciación no Puede ser Valorado</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Escala MID</strong>
                            <select name="Histopatologia_Escala_MID" id="Histopatologia_Escala_MID" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Parcial">Parcial</option>
                                <option value="Completa">Completa</option>
                                <option value="Sin Respuesta">Sin Respuesta</option>
                            </select>
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

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Inmunohistoquimica</strong>
                        <select name="Inmunohistoquimica" id="Inmunohistoquimica" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="Histo_area">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Inmunohistoquimica_area" id="Inmunohistoquimica_area" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Mama Derecha">Mama Derecha</option>
                            <option value="Mama Izquierda">Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha">Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda">Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar">Biopsia por aguja/Biopsia de otro lugar</option>
                        </select>
                    </div>

                    <div class="row" id="Area_Inmunohistoquimica"> <!-- INMUNOHISTOQUIMICA -->

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

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">P 53</strong>
                            <input type="text" class="control form-control" id="P_53" name="P_53" style="font-size: 13px;">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Triple Negativo</strong>
                            <select name="Triple_Negativo" id="Triple_Negativo" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Se realizó PDL</strong>
                            <select name="PDL" id="PDL" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Oncogén HER2</strong>
                            <select name="Oncogen_her2" id="Oncogen_her2" class="form-control" style="font-size: 13px;">
                                <option value="Sin Registro">Sin Registro</option>
                                <option value="+">+</option>
                                <option value="++">++</option>
                                <option value="+++">+++</option>
                                <option value="Negativo">Negativo</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">FISH</strong>
                            <select name="FISH" id="FISH" class="form-control" style="font-size: 13px;">
                                <option value="Negativo">Negativo</option>
                                <option value="Positivo">Positivo</option>
                            </select>
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



                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Molecular</strong>
                        <select name="Molecular" id="Molecular" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="Histo_area">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Molecular_area" id="Molecular_area" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Mama Derecha">Mama Derecha</option>
                            <option value="Mama Izquierda">Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha">Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda">Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar">Biopsia por aguja/Biopsia de otro lugar</option>
                        </select>
                    </div>

                    <div class="row" id="Molecular_estudios">

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Luminal A</strong>
                            <select name="Luminal_A" id="Luminal_A" class="form-control" style="font-size: 13px;">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Luminal B</strong>
                            <select name="Luminal_B" id="Luminal_B" class="form-control" style="font-size: 13px;">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Enriquecido en HER 2+</strong>
                            <select name="Enriquecido_HER" id="Enriquecido_HER" class="form-control" style="font-size: 13px;">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 13px;">Basal</strong>
                            <select name="Basal" id="Basal" class="form-control" style="font-size: 13px;">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
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

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Quirurgicos</strong>
                        <select name="Quirurgicos" id="Quirurgicos" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="LateralidadQX">
                        <strong style="font-size: 13px;">Lateralidad QX</strong>
                        <select name="Lateralidad_QX" id="Lateralidad_QX" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Derecha">Derecha</option>
                            <option value="Izquierda">Izquierda</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="tipo_txqx">
                        <strong style="font-size: 13px;">Tipo</strong>
                        <select name="Tipo_qx" id="Tipo_qx" class="form-control" style="font-size: 13px;">
                            <option value="Mastectomia">Mastectomia</option>
                            <option value="Ganglionar">Ganglionar</option>
                        </select>
                    </div>


                    <!-- Ganglionar  -->

                    <div class="row" id="tratamiento_ganglionar"><!-- Ganglionar  -->

                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Tipo Ganglionar</strong>
                            <select name="tipo_ganglionar" id="tipo_ganglionar" class="form-control" style="font-size: 13px;">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Disección Axilar">Disección Axilar</option>
                                <option value="Ganglio Centinela">Ganglio Centinela</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <strong style="font-size: 13px;">Fecha Ganglionar</strong>
                            <input type="date" class="control form-control" id="fecha_ganglionar" name="fecha_ganglionar" style="font-size: 13px;">
                        </div>

                    </div><!-- Ganglionar  -->

                    <!-- Mastectomia  -->

                    <div class="row" id="tratamiento_Mastectomia">

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Fecha Mastectomia</strong>
                            <input type="date" class="control form-control" id="fecha_Mastectomia" name="fecha_Mastectomia" style="font-size: 13px;">
                        </div>


                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Tipo Mastectomia</strong>
                            <select name="tipo_Mastectomia" id="tipo_Mastectomia" class="form-control" style="font-size: 13px;">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Mastectomia Parcial ">Mastectomia Parcial</option>
                                <option value="Mastectomia Total">Mastectomia Total</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Reconstrucción</strong>
                            <select name="tipo_MastReconstruccion_Mastectomiaectomia" id="Reconstruccion_Mastectomia" class="form-control" style="font-size: 13px;">
                                <option value="Colgajo">Colgajo</option>
                                <option value="Expansor Tisular">Expansor Tisular</option>
                                <option value="Implante Mamario">Implante Mamario</option>
                                <option value="Sin Registro">Sin Registro</option>
                            </select>
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
                        <select name="Quimioterapia" id="Quimioterapia" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="quimio_antraciclinas">
                        <strong style="font-size: 13px;">Antraciclinas</strong>
                        <select name="Antraciclinas" id="Antraciclinas" class="form-control" style="font-size: 13px;">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Daunorubicina">Daunorubicina</option>
                            <option value="Doxorrubicina">Doxorrubicina</option>
                            <option value="Epirubicina">Epirubicina</option>
                            <option value="Idarubicina">Idarubicina</option>
                            <option value="Sin Antraciclinas">Sin Antraciclinas</option>
                            <option value="Sin Registro">Sin Registro</option>
                        </select>
                    </div>

                </div> <!-- SOBRANTE-->

                <div class="row" id="quimioterapia_1">

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Momento QT</h5>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Tipo</strong>
                        <select name="Tipo_QT" id="Tipo_QT" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Adyuvante">Adyuvante</option>
                            <option value="Neoadyuvante">Neoadyuvante</option>
                            <option value="Paliativo">Paliativo</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Fecha Inicio</strong>
                        <input type="date" class="control form-control" id="FechaInicio_QT" name="FechaInicio_QT" style="font-size: 13px;">
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 13px;">Fecha Ternmino</strong>
                        <input type="date" class="control form-control" id="FechaTernmino_QT" name="FechaTernmino_QT" style="font-size: 13px;">
                    </div>

                    <!-- EQUEMA -->

                    <div class="container" id="Esquema_ady_neo">

                        <label for="Esquema" style="font-size: 13px;"><strong>Esquema</strong></label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="5fu_Esquema" name="5fu_Esquema" value="Esquema_5fu">
                            <label class="form-check-label" for="Esquema_fu" style="font-size: 13px;">5FU</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_Esquema" name="AC_Esquema" value="AC">
                            <label class="form-check-label" for="Esquema_AC" style="font-size: 13px;">AC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="Esquema_AC_T" name="Esquema_AC_T" value="AC/T">
                            <label class="form-check-label" for="AC_T_Esquema" style="font-size: 13px;">AC/T</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_TH_Esquema" name="AC_TH_Esquema" value="AC/TH">
                            <label class="form-check-label" for="Esquema_ACTH" style="font-size: 13px;">AC/TH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AT_Esquema" name="AT_Esquema" value="AT">
                            <label class="form-check-label" for="Esquema_AT" style="font-size: 13px;">AT</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Atezolizumab_Esquema" name="Atezolizumab_Esquema" value="Atezolizumab">
                            <label class="form-check-label" for="Esquema_Atezolizumab" style="font-size: 13px;">Atezolizumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_Esquema" name="Bevacizumab_Esquema" value="Bevacizumab">
                            <label class="form-check-label" for="Esquema_Bevacizumab" style="font-size: 13px;">Bevacizumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Capecitabina_Esquema" name="Capecitabina_Esquema" value="Capecitabina">
                            <label class="form-check-label" for="Esquema_Capecitabina" style="font-size: 13px;">Capecitabina</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_Esquema" name="CBP_Esquema" value="CBP">
                            <label class="form-check-label" for="Esquema_CBP" style="font-size: 13px;">CBP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Ciclofosfamida_Esquema" name="Ciclofosfamida_Esquema" value="Ciclofosfamida">
                            <label class="form-check-label" for="Esquema_Ciclofosfamida" style="font-size: 13px;">Ciclofosfamida</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_Esquema" name="Cisplatino_Esquema" value="Cisplatino">
                            <label class="form-check-label" for="Esquema_Cisplatino" style="font-size: 13px;">Cisplatino</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_Esquema" name="CMF_Esquema" value="CMF">
                            <label class="form-check-label" for="Esquema_CMF" style="font-size: 13px;">CMF</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_Esquema" name="Ctuximab_Esquema" value="Ctuximab">
                            <label class="form-check-label" for="Esquema_Ctuximab" style="font-size: 13px;">Ctuximab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_Esquema" name="Docetaxel_Esquema" value="Docetaxel">
                            <label class="form-check-label" for="Esquema_Docetaxel" style="font-size: 13px;">Docetaxel</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="EC_Esquema" name="EC_Esquema" value="EC">
                            <label class="form-check-label" for="Esquema_EC" style="font-size: 13px;">EC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_Esquema" name="Etopósido_Esquema" value="Etopósido">
                            <label class="form-check-label" for="Esquema_Etopósido" style="font-size: 13px;">Etopósido</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_Esquema" name="FAC_Esquema" value="FAC">
                            <label class="form-check-label" for="Esquema_FAC" style="font-size: 13px;">FAC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_Esquema" name="FEC_Esquema" value="FEC">
                            <label class="form-check-label" for="Esquema_FEC" style="font-size: 13px;">FEC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_Esquema" name="Herceptin_Esquema" value="Herceptin">
                            <label class="form-check-label" for="Esquema_Herceptin" style="font-size: 13px;">Herceptin</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_Esquema" name="Lapatinib_Esquema" value="Lapatinib">
                            <label class="form-check-label" for="Esquema_Lapatinib" style="font-size: 13px;">Lapatinib</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_Esquema" name="Paclitaxel_Esquema" value="Paclitaxel">
                            <label class="form-check-label" for="Esquema_Paclitaxel" style="font-size: 13px;">Paclitaxel</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_Esquema" name="Pembrolixumab_Esquema" value="Pembrolixumab">
                            <label class="form-check-label" for="Esquema_Pembrolixumab" style="font-size: 13px;">Pembrolixumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_Esquema" name="Pertuzumab_Esquema" value="Pertuzumab">
                            <label class="form-check-label" for="Esquema_Pertuzumab" style="font-size: 13px;">Pertuzumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_Esquema" name="TAC_Esquema" value="TAC">
                            <label class="form-check-label" for="Esquema_TAC" style="font-size: 13px;">TAC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TC_Esquema" name="TC_Esquema" value="TC">
                            <label class="form-check-label" for="Esquema_TC" style="font-size: 13px;">TC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_Esquema" name="TCH_Esquema" value="TCH">
                            <label class="form-check-label" for="Esquema_TCH" style="font-size: 13px;">TCH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_Esquema" name="TCHP_Esquema" value="TCHP">
                            <label class="form-check-label" for="Esquema_TCHP" style="font-size: 13px;">TCHP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TH_Esquema" name="TH_Esquema" value="TH">
                            <label class="form-check-label" for="Esquema_TH" style="font-size: 13px;">TH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="THP_Esquema" name="THP_Esquema" value="THP">
                            <label class="form-check-label" for="Esquema_THP" style="font-size: 13px;">THP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_Esquema" name="Trastuzumab_Esquema" value="Trastuzumab">
                            <label class="form-check-label" for="Esquema_Trastuzumab" style="font-size: 13px;">Trastuzumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_SinRegistro" name="Trastuzumab_SinRegistro" value="Trastuzumab">
                            <label class="form-check-label" for="Esquema_SinRegistro" style="font-size: 13px;">Sin Registro</label>
                        </div>

                    </div> <!--Container Cierre  EQUEMA -->

                    <!-- 1er Línea QT  -->

                    <div class="container" id="1erLinea_QT" style="display: grid; grid-template-columns: repeat(6, 1fr); grid-gap: 8px;">

                        <label for="Palitaivos_1LINEAQT" style="font-size: 13px;"><strong>1er Línea QT</strong></label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="5fu" name="5fu" value="5fu_1QT">
                            <label class="form-check-label" for="1QTPaliativos_fu" style="font-size: 13px;">5FU</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC" name="AC" value="AC_1QT">
                            <label class="form-check-label" for="1QTPaliativos_AC" style="font-size: 13px;">AC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_1QT" name="AC_T_1QT" value="AC_T_1QT">
                            <label class="form-check-label" for="1QTPaliativos_AC_T" style="font-size: 13px;">AC/T</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_1QT" name="AC_TH1QT" value="AC_TH1QT">
                            <label class="form-check-label" for="1QTPaliativos_ACTH1QT" style="font-size: 13px;">AC/TH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AT_1QT" name="AT_1QT" value="AT_TH1QT">
                            <label class="form-check-label" for="1QTPaliativos_AT1QT" style="font-size: 13px;">AT</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Atezolizumab_1QT" name="Atezolizumab_1QT" value="Atezolizumab">
                            <label class="form-check-label" for="Atezolizumab_Paliativos_1QT" style="font-size: 13px;">Atezolizumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_1QT" name="Bevacizumab_1QT" value="Bevacizumab">
                            <label class="form-check-label" for="Bevacizumab_1QTPaliativos" style="font-size: 13px;">Bevacizumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Capecitabina_1QT" name="Capecitabina_1QT" value="Capecitabina">
                            <label class="form-check-label" for="1QTPaliativos_Capecitabina" style="font-size: 13px;">Capecitabina</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_1QT" name="CBP_1QT" value="CBP">
                            <label class="form-check-label" for="1QTPaliativos_CBP" style="font-size: 13px;">CBP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Ciclofosfamida_1QT" name="Ciclofosfamida_1QT" value="Ciclofosfamida">
                            <label class="form-check-label" for="1QTPaliativos_Ciclofosfamida" style="font-size: 13px;">Ciclofosfamida</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_1QT" name="Cisplatino_1QT" value="Cisplatino">
                            <label class="form-check-label" for="1QTPaliativos_Cisplatino" style="font-size: 13px;">Cisplatino</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_1QT" name="CMF_1QT" value="CMF">
                            <label class="form-check-label" for="1QTPaliativos_CMF" style="font-size: 13px;">CMF</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_1QT" name="Ctuximab_1QT" value="Ctuximab">
                            <label class="form-check-label" for="1QTPaliativos_Ctuximab" style="font-size: 13px;">Ctuximab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_1QT" name="Docetaxel_1QT" value="Docetaxel">
                            <label class="form-check-label" for="1QTPaliativos_Docetaxel" style="font-size: 13px;">Docetaxel</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="EC_1QT" name="EC_1QT" value="EC">
                            <label class="form-check-label" for="1QTPaliativos_EC" style="font-size: 13px;">EC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_1QT" name="Etopósido_1QT" value="Etopósido">
                            <label class="form-check-label" for="1QTPaliativos_Etopósido" style="font-size: 13px;">Etopósido</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_1QT" name="FAC_1QT" value="FAC">
                            <label class="form-check-label" for="1QTPaliativos_FAC" style="font-size: 13px;">FAC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_1QT" name="FEC_1QT" value="FEC">
                            <label class="form-check-label" for="1QTPaliativos_FEC" style="font-size: 13px;">FEC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_1QT" name="Herceptin_1QT" value="Herceptin">
                            <label class="form-check-label" for="1QTPaliativos_Herceptin" style="font-size: 13px;">Herceptin</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_1QT" name="Lapatinib_1QT" value="Lapatinib">
                            <label class="form-check-label" for="1QTPaliativos_Lapatinib" style="font-size: 13px;">Lapatinib</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_1QT" name="Paclitaxel_1QT" value="Paclitaxel">
                            <label class="form-check-label" for="1QTPaliativos_Paclitaxel" style="font-size: 13px;">Paclitaxel</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_1QT" name="Pembrolixumab_1QT" value="Pembrolixumab">
                            <label class="form-check-label" for="1QTPaliativos_Pembrolixumab" style="font-size: 13px;">Pembrolixumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_1QT" name="Pertuzumab_1QT" value="Pertuzumab">
                            <label class="form-check-label" for="1QTPaliativos_Pertuzumab" style="font-size: 13px;">Pertuzumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_1QT" name="TAC_1QT" value="TAC">
                            <label class="form-check-label" for="1QTPaliativos_TAC" style="font-size: 13px;">TAC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TC_1QT" name="TC_1QT" value="TC">
                            <label class="form-check-label" for="1QTPaliativos_TC" style="font-size: 13px;">TC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_1QT" name="TCH_1QT" value="TCH">
                            <label class="form-check-label" for="1QTPaliativos_TCH" style="font-size: 13px;">TCH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_1QT" name="TCHP_1QT" value="TCHP">
                            <label class="form-check-label" for="1QTPaliativos_TCHP" style="font-size: 13px;">TCHP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TH_1QT" name="TH_1QT" value="TH">
                            <label class="form-check-label" for="1QTPaliativos_TH" style="font-size: 13px;">TH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="THP_1QT" name="THP_1QT" value="THP">
                            <label class="form-check-label" for="1QTPaliativos_THP" style="font-size: 13px;">THP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab" name="Trastuzumab_1QT" value="Trastuzumab">
                            <label class="form-check-label" for="1QTPaliativos_Trastuzumab" style="font-size: 13px;">Trastuzumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_1QT" name="SinRegistro_1QT" value="Trastuzumab">
                            <label class="form-check-label" for="1QTPaliativos_Trastuzumab" style="font-size: 13px;">Sin Registro</label>
                        </div>

                    </div> <!-- Container cierre 1er QT-->

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Fecha Inicio QT</strong>
                        <input type="date" class="control form-control" id="FechaInicio_QTPaliativo" name="FechaInicio_QTPaliativo" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Fecha Término QT</strong>
                        <input type="date" class="control form-control" id="FechaTermino_QTPaliativo" name="FechaTermino_QTPaliativo" style="font-size: 13px;">
                    </div>

                    <!-- 2 QT Paliativos -->

                    <!-- 2da Línea QT  -->

                    <div class="container" id="2daLinea_QT">
                        <label for="Palitaivos_2daLINEAQT" style="font-size: 13px;"><strong>2da Línea QT</strong></label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="5f_2doQTP" name="5fu_2doQTP" value="5fu">
                            <label class="form-check-label" for="2doQTPaliativos_fu" style="font-size: 13px;">5FU</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_2doQTP" name="AC_2doQTP" value="AC">
                            <label class="form-check-label" for="2doQTPPaliativos_AC" style="font-size: 13px;">AC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_2doQTP" name="AC_T_2doQTP" value="AC/T">
                            <label class="form-check-label" for="2doQTPaliativos_AC_T" style="font-size: 13px;">AC/T</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_2doQTPV" name="AC_2doQTP" value="AC_TH1QT">
                            <label class="form-check-label" for="2doQTP_ACTH1QT" style="font-size: 13px;">AC/TH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input ra-checkbox" type="checkbox" id="AT_2doQTP" name="AT_2doQTP value=" AT_TH1QT">
                            <label class="form-check-label" for="2doQTP_AT1QT" style="font-size: 13px;">AT</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Atezolizumab_2doQTP" name="Atezolizumab_2doQTP" value="Atezolizumab">
                            <label class="form-check-label" for="Atezolizumab_Paliativos_2doQTP" style="font-size: 13px;">Atezolizumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_2doQTP" name="Bevacizumab_2doQTP" value="Bevacizumab">
                            <label class="form-check-label" for="2doQTP_Bevacizumab" style="font-size: 13px;">Bevacizumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Capecitabina_2doQTP" name="Capecitabina_2doQTP" value="Capecitabina">
                            <label class="form-check-label" for="2doQTPPaliativos_Capecitabina" style="font-size: 13px;">Capecitabina</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_2doQTP" name="CBP_2doQTP" value="CBP">
                            <label class="form-check-label" for="2doQTPPaliativos_CBP" style="font-size: 13px;">CBP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Ciclofosfamida_2doQTP" name="Ciclofosfamida_2doQTP" value="Ciclofosfamida">
                            <label class="form-check-label" for="2doQTPPaliativos_Ciclofosfamida" style="font-size: 13px;">Ciclofosfamida</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_2doQTP" name="Cisplatino_2doQTP" value="Cisplatino">
                            <label class="form-check-label" for="2doQTPaliativos_Cisplatino" style="font-size: 13px;">Cisplatino</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_2doQTP" name="CMF_2doQTP" value="CMF">
                            <label class="form-check-label" for="2doQTPaliativos_CMF" style="font-size: 13px;">CMF</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_2doQTP" name="Ctuximab_2doQTP" value="Ctuximab">
                            <label class="form-check-label" for="2doQTPaliativos_Ctuximab" style="font-size: 13px;">Ctuximab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_2doQTP" name="Docetaxel_2doQTP" value="Docetaxel">
                            <label class="form-check-label" for="2doQTPaliativos_Docetaxel" style="font-size: 13px;">Docetaxel</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="EC_2doQTP" name="EC_2doQTP" value="EC">
                            <label class="form-check-label" for="2doQTPaliativos_EC" style="font-size: 13px;">EC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_2doQTP" name="Etopósido_2doQTP" value="Etopósido">
                            <label class="form-check-label" for="2doQTPaliativos_Etopósido" style="font-size: 13px;">Etopósido</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_2doQT" name="FAC_2doQT" value="FAC">
                            <label class="form-check-label" for="2doQTPaliativos_FAC" style="font-size: 13px;">FAC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_2doQTP" name="FEC_2doQTP" value="FEC">
                            <label class="form-check-label" for="2doQTPaliativos_FEC" style="font-size: 13px;">FEC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_2doQTP" name="Herceptin_2doQTP" value="Herceptin">
                            <label class="form-check-label" for="2doQTPaliativos_Herceptin" style="font-size: 13px;">Herceptin</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_2doQTP" name="Lapatinib_2doQTP" value="Lapatinib">
                            <label class="form-check-label" for="2doQTPaliativos_Lapatinib" style="font-size: 13px;">Lapatinib</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_2doQTP" name="Paclitaxel_2doQTP" value="Paclitaxel">
                            <label class="form-check-label" for="2doQTPaliativos_Paclitaxel" style="font-size: 13px;">Paclitaxel</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_2doQTP" name="Pembrolixumab_2doQTP" value="Pembrolixumab">
                            <label class="form-check-label" for="2doQTPaliativos_Pembrolixumab" style="font-size: 13px;">Pembrolixumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_2doQTP" name="Pertuzumab_2doQTP" value="Pertuzumab">
                            <label class="form-check-label" for="2doQTPaliativos_Pertuzumab" style="font-size: 13px;">Pertuzumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_2doQTP" name="TAC_2doQTP" value="TAC">
                            <label class="form-check-label" for="2doQTPaliativos_TAC" style="font-size: 13px;">TAC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TC_2doQTP" name="TC_2doQTP" value="TC">
                            <label class="form-check-label" for="2doQTPaliativos_TC" style="font-size: 13px;">TC</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_2doQTP" name="TCH_2doQTP" value="TCH">
                            <label class="form-check-label" for="2doQTPaliativos_TCH" style="font-size: 13px;">TCH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_2doQTP" name="TCHP_2doQTP" value="TCHP">
                            <label class="form-check-label" for="2doQTPaliativos_TCHP" style="font-size: 13px;">TCHP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="TH_2doQTP" name="TH_2doQTP" value="TH">
                            <label class="form-check-label" for="2doQTPaliativos_TH" style="font-size: 13px;">TH</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="THP_2doQTP" name="THP_2doQTP" value="THP">
                            <label class="form-check-label" for="2doQTPaliativos_THP" style="font-size: 13px;">THP</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_2doQTP" name="Trastuzumab_2doQTP" value="Trastuzumab">
                            <label class="form-check-label" for="2doQTPaliativos_Trastuzumab" style="font-size: 13px;">Trastuzumab</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_2doQTP" name="SinRegistro_2doQTP" value="Trastuzumab">
                            <label class="form-check-label" for="2doQTP_Trastuzumab" style="font-size: 13px;">Sin Registro</label>
                        </div>

                    </div> <!--CONTAINER 2da Linea QT -->

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Fecha Inicio QT</strong>
                        <input type="date" class="control form-control" id="FechaInicio_QT2Paliativo" name="FechaInicio_QT2Paliativo" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Fecha Término QT</strong>
                        <input type="date" class="control form-control" id="FechaTermino_QTP2aliativo" name="FechaTermino_QTP2aliativo" style="font-size: 13px;">
                    </div>

                    <!-- HORMONOTERAPIA -->

                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156,0.5);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Hormoterapia</h5>
                    </div>
                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Hormoterapia</strong>
                        <select name="Hormoterapia" id="Hormoterapia" class="form-control" style="font-size: 13px;">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Tipo Hormonoterapia</strong>
                        <select name="Hormonoterapia_QT" id="Hormonoterapia_QT" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Anastrozol">Anastrozol</option>
                            <option value="Exemetastino">Exemetastino</option>
                            <option value="Letrazol">Letrazol</option>
                            <option value="Tamoxifeno">Tamoxifeno</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 13px;">Momento Hormonoterapia</strong>
                        <select name="Momento_Hormonoterapia" id="Momento_Hormonoterapia" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Adyuvante">Adyuvante</option>
                            <option value="Neoadyuvante">Neoadyuvante</option>
                            <option value="Paliativo">Paliativo</option>
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
                        <select name="HER_2" id="HER_2" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Esquema_her2">
                        <strong style="font-size: 13px;">Esquema HER2 +++</strong>
                        <select name="Esquema_HER" id="Esquema_HER" class="form-control" style="font-size: 13px;">
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
                        <select name="triple_negativo" id="triple_negativo" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="esquema_triple">
                        <strong style="font-size: 13px;">Esquema Triple Negativo</strong>
                        <select name="EsquemaTriple_negativo" id="EsquemaTriple_negativo" class="form-control" style="font-size: 13px;">
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
                        <select name="Hormosensible" id="Hormosensible" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Inhibidores">
                        <strong style="font-size: 13px;">Inhibidores Ciclinas</strong>
                        <select name="Inhibidores_Ciclinas" id="Inhibidores_Ciclinas" class="form-control" style="font-size: 13px;">
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
                        <select name="Tipo_Tratamiento" id="Tipo_Tratamiento" class="form-control" style="font-size: 13px;">
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
                        <select name="Completo_Quimio" id="Completo_Quimio" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>




                    <div class="col-md-6" id="Causa_incompleta">
                        <strong style="font-size: 13px;">Causa QT Incompleta </strong>
                        <select name="CausaQT_Incompleta" id="CausaQT_Incompleta" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Abadono del Paciente">Abadono del Paciente</option>
                            <option value="Evento Adverso">Evento Adverso</option>
                            <option value="Progresión de la Enfermedad">Progresión de la Enfermedad</option>
                            <option value="Recurrencia de la Enfermedad">Recurrencia de la Enfermedad</option>
                            <option value="Falleció">Falleció</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="quimio_fecha">
                        <strong style="font-size: 13px; ">Fecha</strong>
                        <input id="fecha_quimio" name="fecha_quimio" type="date" class="control form-control" style="font-size: 13px;">
                    </div>


                    <div class="col-md-4" id="quimio_fecha">
                        <strong style="font-size: 13px; ">Fecha Falleció QT</strong>
                        <input id="fecha_fallecio" name="fecha_fallecio" type="date" class="control form-control" style="font-size: 13px;">
                    </div>


                    <div class="col-md-4" id="Causa_Fallecio">
                        <strong style="font-size: 13px;">Causa Falleció QT</strong>
                        <select name="Fallecio_causa" id="Fallecio_causa" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="Evento Adverso">Evento Adverso</option>
                            <option value="Oncológica">Oncológica</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="quimio_otra">
                        <strong style="font-size: 13px; ">Especifique Otra</strong>
                        <input id="otra_causa" name="otra_causa" type="text" class="control form-control" style="font-size: 13px;">
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
                    <select name="Radioterapia" id="Radioterapia" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <!-- RADIOTERAPIA CAUSAS -->
                <div class="row" id="SI_Radioterapia">

                    <div class="col-md-4" id="Causa_Fallecio">
                        <strong style="font-size: 13px;">Tipo Radioterapia</strong>
                        <select name="Tipo_radioterapia" id="Tipo_radioterapia" class="form-control" style="font-size: 13px;">
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

                <div class="row">
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                            background-color:rgb(205, 101, 156);
                            color: aliceblue;
                            margin-top:10px;
                            font-size: 14px;">
                            Defunción</h5>
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px; ">Fecha Defunción</strong>
                        <input id="fecha_Defuncion" name="fecha_Defuncion" type="date" class="control form-control" style="font-size: 13px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 13px;">Causa </strong>
                        <select name="causa_defuncion" id="causa_defuncion" class="form-control" style="font-size: 13px;">
                            <option value="Sin Registro">Sin Registro</option>
                            <option value="NO Oncológica">NO Oncológica</option>
                            <option value="Oncológica">Oncológica</option>
                        </select>
                    </div>

                </div>


            </div> <!-- DIV ROW LINEA 11 -->


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

        </div><!--DIV DEL BODY  -->


    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>