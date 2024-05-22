<?php
include ('php/controllers/edit.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">



    <title>Seguimiento Síndrome Coronario Agudo</title>

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


        <h5> Seguimiento Síndrome Coronario Agudo </h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <form id="seguimiento_SC" method="POST">
            <div class="row">

                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="col-md-6">
                    <strong style="font-size: 13px;">Fecha de Seguimiento</strong>
                    <input class="form-control" type="date" name="fecha_seg" id="fecha_seg" style="font-size: 13px;">
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Seguimiento</strong>
                    <select name="Seguimiento_SXcoronario" id="Seguimiento_SXcoronario" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Tres Meses">Tres Meses</option>
                        <option value="Seis Meses">Seis Meses</option>
                        <option value="1 Año">1 Año</option>
                    </select>
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(222, 100, 150);
                                color:aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Tratamiento</h5>
                </div>

                <div class="row">
                    <div class="form-header">
                        <h5 class="form-title" style="text-align: center;
                                background-color:rgb(222, 100, 150,0.5);
                                color:aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                            Antiagregantes</h5>
                    </div>



                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ácido Acetil Salicílico</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Acido_salicilico"
                            id="Acido_salicilico" value="Acido_salicilico Izquierda"
                            style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Clopidogrel </span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Clopidogrel" id="Clopidogrel"
                            value="Clopidogrel Anterior" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Eptifibatida</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Eptifibatida"
                            id="Eptifibatida" value="Eptifibatida"
                            style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Prasugrel</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Prasugrel" id="Prasugrel"
                            value="Prasugrel" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>

                    <div class="col-md-2" style="text-align: center;">
                        <span style="font-size:13px; display: block;">Ticagrelor</span>
                        <input type="checkbox" class="form-check-input ra-checkbox" name="Ticagrelor" id="Ticagrelor"
                            value="Ticagrelor" style="font-size:14px; margin: 5px auto; display: block;">
                    </div>


                </div><br> <br>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Anticoagulantes</strong>
                    <select name="Anticuagulantes" id="Anticuagulantes" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="RivaroxabanY">RivaroxabanY</option>
                        <option value="Apixaban">Apixaban</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Betabloqueadores</strong>
                    <select name="Betabloqueadores" id="Betabloqueadores" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Acetubolol">Acetubolol</option>
                        <option value="Atenolol">Atenolol</option>
                        <option value="Anterior">Anterior</option>
                        <option value="Disoprolol">Disoprolol</option>
                        <option value="Esmolol">Esmolol</option>
                        <option value="Metoprolol">Metoprolol</option>
                        <option value="Nebivolol">Nebivolol</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">IECA</strong>
                    <select name="IECA" id="IECA" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Enalapril">Enalapril</option>
                        <option value="Lisinopril">Lisinopril</option>
                        <option value="Ramipri">Ramipri</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Calcioantagonistas</strong>
                    <select name="Calcioantagonistas" id="Calcioantagonistas" class="form-select"
                        style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Amlodipino">Amlodipino</option>
                        <option value="Diltiazem">Diltiazem</option>
                        <option value="Felodipino">Felodipino</option>
                        <option value="Lercadipino">Lercadipino</option>
                        <option value="Manidipino">Manidipino</option>
                        <option value="Nifedipino">Nifedipino</option>
                        <option value="Nimodipino">Nimodipino</option>
                        <option value="Verapamilo">Verapamilo</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>
                <br>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">ARA II</strong>
                    <select name="ARA_II" id="ARA_II" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Candesartan">Candesartan</option>
                        <option value="Besartan">Besartan</option>
                        <option value="Losartan">Losartan</option>
                        <option value="Olmesartan">Olmesartan</option>
                        <option value="Telmisartan">Telmisartan</option>
                        <option value="Valsartan">Valsartan</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Estatinas</strong>
                    <select name="Estatinas" id="Estatinas" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Atorvastatina">Atorvastatina</option>
                        <option value="Pravastatina">Pravastatina</option>
                        <option value="Rosuvastatina">Rosuvastatina</option>
                        <option value="Simvastatina">Simvastatina</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Fibratos</strong>
                    <select name="Fibratos" id="Fibratos" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Besafibrato">Besafibrato</option>
                        <option value="Cipofibrato">Cipofibrato</option>
                        <option value="Fenobifrato">Fenobifrato</option>
                        <option value="Gembibrozilo">Gembibrozilo</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Antianginosos</strong>
                    <select name="Antianginosos" id="Antianginosos" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="NitroglicerinaT">NitroglicerinaT</option>
                        <option value="Isosorbide">Isosorbide</option>
                        <option value="Trimetazidina">Trimetazidina</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Inhibidor de la Absorción</strong>
                    <select name="Inhibidor_absorcion" id="Inhibidor_absorcion" class="form-select"
                        style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Ezetimiba">Ezetimiba</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Anticuerpos Monoclonales</strong>
                    <select name="Anticuerpos_Monoclonales" id="Anticuerpos_Monoclonales" class="form-select"
                        style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Evolocumab">Evolocumab</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>



                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                        background-color:rgb(255, 65, 108);
                        color: aliceblue;
                        margin-top:15px;
                        font-size: 13px;">
                        Paraclínicos</h5>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px;">CK</strong>
                    <input type="text" class="control form-control" id="Seguimiento_ck" name="Seguimiento_ck"
                        style="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">CK-MB</strong>
                    <input type="text" class="control form-control" id="Seguimiento_ck_mb" name="Seguimiento_ck_mb"
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Troponinas</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Troponinas"
                        name="Seguimiento_Troponinas" sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Glucosa</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Glucosa" name="Seguimiento_Glucosa"
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Urea</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Urea" name="Seguimiento_Urea"
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Creatinina</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Creatinina"
                        name="Seguimiento_Creatinina" sytle="font-size: 13px;">
                </div>
                <div class="col-md-2">
                    <strong style="font-size: 13px">Colesterol</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Colesterol"
                        name="Seguimiento_Colesterol" sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Trigliceridos</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Trigliceridos"
                        name="Seguimiento_Trigliceridos" sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Ácido Úrico</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Acido_Urico"
                        name="Seguimiento_Acido_Urico" sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">HB Glucosilada</strong>
                    <input type="text" class="control form-control" id="Seguimiento_hb_glucosilada"
                        name="Seguimiento_hb_glucosilada" sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">Proteínas</strong>
                    <input type="text" class="control form-control" id="Seguimiento_Proteinas"
                        name="Seguimiento_Proteinas" sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">LDL</strong>
                    <input type="text" class="control form-control" id="Seguimiento_LDL" name="Seguimiento_LDL"
                        sytle="font-size: 13px;">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px">HDL</strong>
                    <input type="text" class="control form-control" id="Seguimiento_HDL" name="Seguimiento_HDL"
                        sytle="font-size: 13px;">
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
                    <select name="Seg_Gamma" id="Seg_Gamma" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>


                <div class="col-md-6" id="Seg_resultado_gamma" style="display:none;">
                    <strong style="font-size: 13px;">Resultado Gammagrama Cardiaco</strong>
                    <select name="Seg_gamma_cardi" id="Seg_gamma_cardi" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-6" id="Seg_positivo_1" style="display:none;">
                    <strong style="font-size: 13px;">Localización Gammagrama</strong>
                    <select name="Seg_Localizacion_gamma" id="Seg_Localizacion_gamma" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Inferior">Inferior</option>
                        <option value="Septal">Septal</option>
                        <option value="Lateral">Lateral</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>


                <div class="col-md-6" id="Seg_positivo_2" style="display:none;">
                    <strong style="font-size: 13px;">Segmento</strong>
                    <select name="Seg_Segmento_gamma" id="Seg_Segmento_gamma" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Apical">Apical</option>
                        <option value="Basal">Basal</option>
                        <option value="Medio">Medio</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>




                <div class="col-md-6">
                    <strong style="font-size: 13px;">Resonancia Magnetica Inicial</strong>
                    <select name="Seg_Resonancia_inicial" id="Seg_Resonancia_inicial" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>



                <div class="col-md-6" id="Seg_resonancia_resu" style="display:none;">
                    <strong style="font-size: 13px;">Resultado Resonancia Magnetica</strong>
                    <select name="Seg_resultado_resonancia" id="Seg_resultado_resonancia" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-6" id="Seg_resonancia_ergometria" style="display:none;">
                    <strong style="font-size: 13px;">Ergometría Inicial</strong>
                    <select name="Seg_ergometria" id="Seg_ergometria" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Protocolo Bruce">Protocolo Bruce</option>
                    </select>
                </div>



                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 1</strong>
                    <select name="Seg_Etapa_1" id="Seg_Etapa_1" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 2</strong>
                    <select name="Seg_Etapa_2" id="Seg_Etapa_2" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 3</strong>
                    <select name="Seg_Etapa_3" id="Seg_Etapa_3" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 4</strong>
                    <select name="Seg_Etapa_4" id="Seg_Etapa_4" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 5</strong>
                    <select name="Seg_Etapa_5" id="Seg_Etapa_5" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 6</strong>
                    <select name="Seg_Etapa_6" id="Seg_Etapa_6" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Etapa 7</strong>
                    <select name="Seg_Etapa_7" id="Seg_Etapa_7" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Suspensión de Estudio</strong>
                    <select name="Seg_Suspension_estudio" id="Seg_Suspension_estudio" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Diminución de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia"> Diminución
                            de Tas -10 Mmhg Debajo de la Inicial + Evidencia lsquemia</option>
                        <option value="Arritmia">Arritmia</option>
                        <option value="Angina Moderada">Angina Moderada</option>
                        <option value="Aumento de Actividad de Sistema Nervioso">Aumento de Actividad de Sistema
                            Nervioso</option>
                        <option value="Cianosis/ Palidez">Cianosis/ Palidez</option>
                        <option value="Deseo del Paciente de Detenerse">Deseo del Paciente de Detenerse</option>
                        <option value="Elevación del Segmento ST(< 1Mm)"> Elevación del Segmento ST (< 1Mm)</option>
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
                    <strong style="font-size: 13px">Diastólico Inicial</strong>
                    <input type="text" class="control form-control" id="Seg_Distolico_inicial"
                        name="Seg_Distolico_inicial" sytle="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px">Sistolico Inicial</strong>
                    <input type="text" class="control form-control" id="Seg_Sistolico_inicial"
                        name="Seg_Sistolico_inicial" sytle="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Frac. Eyección Ventrículo Izq Inicial</strong>
                    <select name="Seg_eyeccion_ventriizqui" id="Seg_eyeccion_ventriizqui" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Menos del 30%">Menos del 30%</option>
                        <option value="Del 31% -50%">Del 31% -50%</option>
                        <option value="Del 51% -70%">Del 51% -70%</option>
                        <option value="Más del 71%">Más del 71%</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Movilidad Inicial</strong>
                    <select name="Seg_movilidad_inicial" id="Seg_movilidad_inicial" class="form-select"
                        style="font-size: 13px;">
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
                    <select name="Seg_Segmento" id="Seg_Segmento" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Ninguno">Ninguno</option>
                        <option value="Apical">Apical</option>
                        <option value="Basal">Basal</option>
                        <option value="Medio">Medio</option>
                    </select>
                </div>


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(255, 65, 108);
                                color: aliceblue;
                                margin-top:15px;
                                font-size: 13px;">
                        Defunción </h5>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Defunción</strong>
                    <select name="Seg_defun" id="Seg_defun" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-6" id="seg_defuncioncausa" style="display:none;">
                    <strong style="font-size: 13px;">Causa de Defunción</strong>
                    <select name="Seg_Causa_defun" id="Seg_Causa_defun" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Cardiaca">Cardiaca</option>
                        <option value="No Cardiaca">No Cardiaca</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-12" id="seg_fecha_defuncion" style="display:none;">
                    <strong style="font-size: 13px">Fecha de Defunción</strong>
                    <input type="datetime-local" class="control form-control" id="Seg_Defuncion_fecha"
                        name="Seg_Defuncion_fecha" style="font-size: 13px;">
                </div>


                <div style="display: flex; justify-content: flex-end; align-items: center; margin-top: 15px;">
                    <button type="submit" class="btn btn-primary"
                        style="font-size: 15px; padding: 8px 15px;">Guardar</button>
                </div><br><br>


            </div>
        </form>
    </div>

    <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/seg.js"></script>

<script type="module">
    import { seguimientoForm } from "./js/seguimiento.js";
    seguimientoForm();
</script>


</html>