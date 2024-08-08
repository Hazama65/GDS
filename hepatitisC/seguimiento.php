<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Seguimiento</title>
</head>

<body>
    <header style="text-align: center;">
        <div style=" padding: 20px; text-align: left;">
            <a href="index.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                    <i class="bi bi-rewind-fill"></i>
                </button>
            </a>
        </div>


        <h5>Seguimiento</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container" width="100%" height="800px" style="margin-bottom: 100px;">

        <br>

        <fieldset>
            <legend>
                <div class="row">

                    <div style="background-color: rgb(210, 180, 140);
                        border-radius: 10px;
                        color: aliceblue;
                        text-align: center;
                         margin-top:15px;
                        font-size: 15px;">
                        <h6>Somatometría</h6>
                    </div>

                    <div class="row">

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Talla</strong>
                            <input type="text" class="form-control" id="Seguimiento_talla" name="talla" required>
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Peso</strong>
                            <input type="number" step="any" class="form-control" id="Seguimiento_peso" name="peso" required>
                        </div>

                        <div class="col-md-2">
                            <strong style="font-size: 12px;">IMC</strong>
                            <input type="text" class="form-control" id="Seguimiento_imc" name="imc" value="" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Resultado IMC</strong>
                            <input type="text" class="form-control" id="Seguimiento_imcdescripcion" name="imcdescripcion" value="" readonly>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Circunferencia</strong>
                            <input type="number" step="any" class="form-control" id="Seguimiento_circunferencia" name="circunferencia" required>
                        </div>
                    </div>

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                         margin-top:15px;
                                        font-size: 20px;">
                        <h6>Factores de Riesgo</h6>
                    </div>

                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row" style="font-size: 12px;">

                                    <!-- hice cambios aqui -->
                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Sin_Registro" name="FR_Sin_Registro" value="Sin Registro">
                                        <label class="form-check-label" for="Seguimiento_FR_Sin_Registro" style="font-size: 12px;">Sin
                                            registro</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Relaciones_Sexuales" name="FR_Relaciones_Sexuales" value="Relaciones Sexuales" onchange="showRelacionesSexualesDiv(this)">
                                        <label class="form-check-label" for="Seguimiento_FR_Relaciones_Sexuales" style="font-size: 12px;">Relaciones Sexuales</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Transfusiones" name="FR_Transfusiones" value="Transfusiones">
                                        <label class="form-check-label" for="Seguimiento_FR_Transfusiones" style="font-size: 12px;">Transfusiones</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Drogas_Endovenosas" name="FR_Drogas_Endovenosas" value="Drogas Endovenosas">
                                        <label class="form-check-label" for="Seguimiento_FR_Drogas_Endovenosas" style="font-size: 12px;">Drogas
                                            Endovenosas</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Piercing" name="FR_Piercing" value="Piercing">
                                        <label class="form-check-label" for="Seguimiento_FR_Piercing" style="font-size: 12px;">Piercing</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Presidiario" name="FR_Presidiario" value="Presidiario">
                                        <label class="form-check-label" for="Seguimiento_FR_Presidiario" style="font-size: 12px;">Presidiario</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Expresidiario" name="FR_Expresidiario" value="Expresidiario">
                                        <label class="form-check-label" for="Seguimiento_FR_Expresidiario" style="font-size: 12px;">Expresidiario</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_FR_Situacion_de_Calle" name="FR_Situacion_de_Calle" value="Situación de Calle">
                                        <label class="form-check-label" for="Seguimiento_FR_Situacion_de_Calle" style="font-size: 12px;">Situación de Calle</label>
                                    </div>

                                </div>
                            </legend>
                        </fieldset>
                    </div>


                    <!--************************************************************************************************-->

                    <div class="col-md-12" id="Seguimiento_relacionessexuales" style="display: none;">

                        <div style="background-color: rgb(160, 82, 45,0.5);
                                         border-radius: 10px;
                                        color: aliceblue;
                                        font-size: 10px;
                                        text-align: center;
                                         margin-top:15px;
                                        font-size: 20px;">
                            <h6>Relaciones Sexuales</h6>
                        </div>

                        <!-- hice cambios aqui -->
                        <div class="container">
                            <fieldset>
                                <legend>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <input class="form-check-input" type="checkbox" id="Seguimiento_RS_Pacientes_con_VIH" name="RS_Pacientes_con_VIH" value="Pacientes con VIH">
                                            <label class="form-check-label" for="Seguimiento_RS_Pacientes_con_VIH" style="font-size: 12px;">Pacientes con VIH</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input class="form-check-input" type="checkbox" id="Seguimiento_RS_Pacientes_con_Hepatitis" name="RS_Pacientes_con_Hepatitis" value="Pacientes con Hepatitis">
                                            <label class="form-check-label" for="Seguimiento_RS_Pacientes_con_Hepatitis" style="font-size: 12px;">Pacientes con Hepatitis</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input class="form-check-input" type="checkbox" id="Seguimiento_RS_Sexo_Servidoras" name="RS_Sexo_Servidoras" value="Sexo Servidoras">
                                            <label class="form-check-label" for="Seguimiento_RS_Sexo_Servidoras" style="font-size: 12px;">Sexo
                                                Servidoras</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input class="form-check-input" type="checkbox" id="Seguimiento_RS_Parejas_Ocasionales" name="RS_Parejas_Ocasionales" value="Parejas Ocasionales">
                                            <label class="form-check-label" for="Seguimiento_RS_Parejas_Ocasionales" style="font-size: 12px;">Parejas Ocasionales</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input class="form-check-input" type="checkbox" id="Seguimiento_RS_Pacientes_con_Toxicomanias" name="RS_Pacientes_con_Toxicomanias" value="Pacientes con Toxicomanias">
                                            <label class="form-check-label" for="Seguimiento_RS_Pacientes_con_Toxicomanias" style="font-size: 12px;">Pacientes con Toxicomanias</label>
                                        </div>

                                        <div class="col-md-4">
                                            <input class="form-check-input" type="checkbox" id="Seguimiento_RS_Ninguna" name="RS_Ninguna" value="Ninguna">
                                            <label class="form-check-label" for="Seguimiento_RS_Ninguna" style="font-size: 12px;">Ninguna de las anteriores</label>
                                        </div>

                                    </div>
                                </legend>
                            </fieldset>

                        </div>
                    </div>

                    <!--*************************************************************************************************+-->

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                         margin-top:15px;
                                        font-size: 15px;">
                        <h6>Antecedentes Personales Patológicos</h6>
                    </div>

                    <div class="container">
                        <fieldset>
                            <legend>
                                <div class="row" style="font-size: 12px;">

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Hemofilia" name="APP_Hemofilia" value="Hemofilia">
                                        <label class="form-check-label" for="Seguimiento_APP_Hemofilia">Hemofilia</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_ERC_en_Hemodialisis" name="APP_ERC_en_Hemodialisis" value="ERC en Hemodialisis">
                                        <label class="form-check-label" for="Seguimiento_APP_ERC_en_Hemodialisis">ERC en Hemodialisis</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Trabajador_de_la_Salud" name="APP_Trabajador_de_la_Salud" value="Trabajador de la Salud">
                                        <label class="form-check-label" for="Seguimiento_APP_Trabajador_de_la_Salud">Trabajador de la
                                            Salud</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Transplante" name="APP_Transplante" value="Transplante">
                                        <label class="form-check-label" for="Seguimiento_APP_Transplante">Transplante</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Cirrosis" name="APP_Cirrosis" value="Cirrosis">
                                        <label class="form-check-label" for="Seguimiento_APP_Cirrosis">Cirrosis</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Obesidad" name="APP_Obesidad" value="Obesidad">
                                        <label class="form-check-label" for="Seguimiento_APP_Obesidad">Obesidad</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Prediabetes" name="APP_Prediabetes" value="Prediabetes">
                                        <label class="form-check-label" for="Seguimiento_APP_Prediabetes">Prediabetes</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Diabetes_Mellitus" name="APP_Diabetes_Mellitus" value="Diabetes Mellitus">
                                        <label class="form-check-label" for="Seguimiento_APP_Diabetes_Mellitus">Diabetes Mellitus</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Hipertension_Arterial" name="APP_Hipertension_Arterial" value="Hipertensión Arterial">
                                        <label class="form-check-label" for="Seguimiento_APP_Hipertension_Arterial">Hipertensión
                                            Arterial</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Alcoholismo" name="APP_Alcoholismo" value="Alcoholismo">
                                        <label class="form-check-label" for="Seguimiento_APP_Alcoholismo">Alcoholismo</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Virus_HB" name="APP_Virus_HB" value="Virus HB">
                                        <label class="form-check-label" for="Seguimiento_APP_Virus_HB">Virus HB</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-check-input" type="checkbox" id="Seguimiento_APP_Ninguno" name="APP_Ninguno" value="Ninguno">
                                        <label class="form-check-label" for="Seguimiento_APP_Ninguno">Ninguno</label>
                                    </div>
                                </div>
                            </legend>
                        </fieldset>
                    </div>

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top:15px;
                                        font-size: 15px;">
                        <h6>Atención Clinica</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Atención Inicial</strong>
                            <input type="date" id="Seguimiento_fai" name="fai" class="form-control" style="font-size: 12px;" max="<?= date("Y-m-d") ?>">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Carga Viral Inicial</strong>
                            <input type="date" id="Seguimiento_fcvi" name="fcvi" class="form-control" style="font-size: 12px;" max="<?= date("Y-m-d") ?>">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 12px;">Carga Viral Dx</strong>
                            <input type="number" step="any" class="form-control" id="Seguimiento_cvd" name="cvd" style="font-size: 12px;">
                        </div>

                        <div class="col-md-12">
                            <strong style="font-size: 12px;">Respuesta Viral Sostenida (RVS)</strong>
                            <select name="respuestaviralsostenida" id="Seguimiento_respuestaviralsostenida" class="form-control" style="font-size: 12px;" onchange="showRVSOptions(this)">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Indetectable">Indetectable</option>
                                <option value="Detectable">Detectable</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Seguimiento_idvalorrvs">
                            <strong style="font-size: 12px;">Número RVS</strong>
                            <input type="number" step="any" class="form-control" id="Seguimiento_valorrvs" style="font-size: 12px;" name="valorrvs">
                        </div>

                        <div class="col-md-6" id="Seguimiento_idfrvs">
                            <strong style="font-size: 12px;">Fecha RVS</strong>
                            <input type="date" id="Seguimiento_frvs" name="frvs" class="form-control" style="font-size: 12px;" max="<?= date("Y-m-d") ?>">
                        </div>

                    </div>

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top: 20px;">
                        <h6>Laboratorios</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">AST</strong>
                            <input type="number" step="any" class="form-control" id="AST" name="AST" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">BUN</strong>
                            <input type="number" step="any" class="form-control" id="BUN" name="BUN" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">CREAT</strong>
                            <input type="number" step="any" class="form-control" id="CREAT" name="CREAT" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">ALT</strong>
                            <input type="number" step="any" class="form-control" id="ALT" name="ALT" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Plaquetas</strong>
                            <input type="number" step="any" class="form-control" id="Plaquetas" name="Plaquetas" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Albumina</strong>
                            <input type="number" step="any" class="form-control" id="Albumina" name="Albumina" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Glucosa</strong>
                            <input type="number" step="any" class="form-control" id="Glucosa" name="Glucosa" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">HBA1C</strong>
                            <input type="number" step="any" class="form-control" id="HBA1C" name="HBA1C" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">Trigliceridos</strong>
                            <input type="number" step="any" class="form-control" id="Trigliceridos" name="Trigliceridos" style="font-size: 12px;" required>
                        </div>
                        <div class="col-md-2">
                            <strong style="font-size: 12px;">HDL</strong>
                            <input type="number" step="any" class="form-control" id="HDL" name="HDL" style="font-size: 12px;" required>
                        </div>
                    </div>

                    <!--*************************************************************************************************+-->

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                         margin-top:15px;
                                        font-size: 15px;">
                        <h6>Ultrasonido Hepático</h6>
                    </div>

                    <div class="col-md-12">
                        <strong style="font-size: 12px;">Ultrasonido Hepático</strong>
                        <select name="ultrasonidohepatico" id="Seguimiento_ultrasonidohepatico" class="form-control" style="font-size: 12px;" onchange="showUHOptions(this)">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Si">Sí</option>
                            <option value="No">No</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>


                    <div class="col-md-12" id="Seguimiento_idresultadoultrasonido" style="display: none;">
                        <strong style="font-size: 12px;">Resultado Ultrasonido</strong>
                        <select name="resultadoultrasonido" id="Seguimiento_resultadoultrasonido" class="form-control" style="font-size: 12px;" onchange="showEsteatosisOptions(this)">
                            <option value="Seleccione">Seleccione...</option>
                            <option value="Normal">Normal</option>
                            <option value="Esteatosis">Esteatosis</option>
                            <option value="Cirrosis">Cirrosis</option>
                            <option value="Tumor">Tumor</option>
                        </select>
                    </div>


                    <div class="col-md-12" id="Seguimiento_idesteatosis" style="display: none;">
                        <strong style="font-size: 12px;">Esteatosis</strong>
                        <select name="opcionesteatosis" id="Seguimiento_opcionesteatosis" style="font-size: 12px;" class="form-control">
                            <option value="Seleccione">Seleccione...</option>
                            <option value="S1 del 11 al 33">S1 (11% al 33%)</option>
                            <option value="S2 del 34 al 66">S2 (34% al 66%)</option>
                            <option value="S3 (67 O Positivo)">S3 (>67%)</option>
                        </select>
                    </div>

                    <!--*************************************************************************************************+-->

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top:15px;
                                        font-size: 15px;">
                        <h6>Índice de Enfermedad Hepática</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <a style="font-size: 12px;" href="https://www.hepatitisc.uw.edu/page/clinical-calculators/fib-4" target="_blank">FIB
                                4</a>
                            <input type="number" step="any" class="form-control" id="Seguimiento_fib4" name="fib4" style="font-size: 12px;" onkeyup="calculateFIB4Result()">
                        </div>
                        <div class="col-md-4">
                            <strong id="Seguimiento_calcularresultado" style="font-size: 12px;">Resultado FIB 4</strong>
                            <input type="text" class="form-control" id="Seguimiento_resultadofib" value="" name="resultadofib" style="font-size: 12px;" readonly>
                        </div>


                        <div class="col-md-2">
                            <a style="font-size: 12px;" href="https://www.rccc.eu/calculadoras/NFS.html" target="_blank">NAFLD</a>
                            <input type="number" step="any" class="form-control" id="Seguimiento_nafld" name="nafld" style="font-size: 12px;" onkeyup="calculateNAFLDResult()">
                        </div>
                        <div class="col-md-4">
                            <strong id="Seguimiento_calcularresultado" style="font-size: 12px;">Resultado NAFLD</strong>
                            <input type="text" class="form-control" id="Seguimiento_resultadonafld" value="" name="resultadonafld" style="font-size: 12px;" readonly>
                        </div>

                        <div class="col-md-2">
                            <a style="font-size: 12px;" href="https://www.hepatitisc.uw.edu/page/clinical-calculators/apri" target="_blank">APRI</a>
                            <input type="number" step="any" class="form-control" id="Seguimiento_apri" name="apri" style="font-size: 12px;" onkeyup="calculateAPRIResult()">
                        </div>
                        <div class="col-md-4">
                            <strong id="Seguimiento_calcularresultado" style="font-size: 12px;">Resultado APRI</strong>
                            <input type="text" class="form-control" id="Seguimiento_resultadoapri" value="" name="resultadoapri" style="font-size: 12px;" readonly>
                        </div>

                    </div>

                    <!--*************************************************************************************************+-->

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top:15px;
                        font-size: 15px;">
                        <h6>Tratamiento</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Fecha Inicio Tratamiento</strong>
                            <input type="date" id="Seguimiento_fit" name="fit" style="font-size: 12px;" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Tratamiento</strong>
                            <select name="tratamiento" id="Seguimiento_tratamiento" style="font-size: 12px;" class="form-control">
                                <option value="Seleccione...">Seleccione...</option>
                                <option value="Peginterferon">Peginterferon</option>
                                <option value="Sofosbuvir/Velpatasvir">Sofosbuvir/Velpatasvir</option>
                                <option value="Sofosbuvir/Ledipasvir">Sofosbuvir/Ledipasvir</option>
                                <option value="Desabuvir/Ombitasvir">Desabuvir/Ombitasvir</option>
                                <option value="Paritaprevir/Ritonavir">Paritaprevir/Ritonavir</option>
                                <option value="Daclatasvir+Sofosbuvir">Daclatasvir+Sofosbuvir</option>
                                <option value="Glecaprevir/Pibrentasvir">Glecaprevir/Pibrentasvir</option>
                                <option value="Glecaprevir/Pibrentasvir">Desabuvir/Ombitasvir+Paritaprevir/Ritonavir
                                </option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Ribavirina</strong>
                            <select name="Ribavirina" id="Seguimiento_Ribavirina" style="font-size: 12px;" class="form-control">
                                <option value="Sin registro">Sin registro</option>
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                                <option value="Desconoce">Desconoce</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <strong style="font-size: 12px;">Fecha Fin Tratamiento</strong>
                            <input type="date" id="Seguimiento_fft" name="fft" style="font-size: 12px;" class="form-control">
                        </div>

                    </div>


                    <!--*************************************************************************************************+-->

                    <div style="background-color: rgb(210, 180, 140);
                                        border-radius: 10px;
                                        color: aliceblue;
                                        text-align: center;
                                        margin-top:15px;
                                        font-size: 15px;">
                        <h6>Defunción</h6>
                    </div>

                    <!--Cuando seleccione Sí en Defunción, muestra el select de Causa-->

                    <div class="col-md-12">
                        <strong style="font-size: 12px;">Defunción</strong>
                        <select name="defuncion" id="Seguimiento_defuncion" class="form-control" style="font-size: 12px;" onchange="showDefuncionOptions(this)">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Si">Sí</option>
                            <option value="No">No</option>
                            <option value="Desconoce">Desconoce</option>
                        </select>
                    </div>

                    <div class="col-md-12" id="Seguimiento_idcausadefuncion" style="display: none;">
                        <strong style="font-size: 12px;">Causa</strong>
                        <select name="causadefuncion" id="Seguimiento_causadefuncion" style="font-size: 12px;" class="form-control">
                            <option value="Sin registro">Sin registro</option>
                            <option value="Normal">Hepatitis C</option>
                            <option value="Otra Patología">Otra Patología</option>
                        </select>
                    </div>


                </div>

            </legend>
        </fieldset>
        <br>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="seguimiento">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/scriptseguimiento.js"></script>

</html>