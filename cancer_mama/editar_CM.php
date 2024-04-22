<?php
include('php/controllers/edit.controller.php');
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
    <title>Editar Cancer de Mama</title>
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


        <h5>Editar Cancer de Mama</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>
    <form id="editar_CM" method="POST">

        <div class="container">

            <div style="background-color: rgb(205, 101, 156);
            color:rgb(255, 255, 255);
            text-align: center;
            margin-top: 20px;">
                <h6>Generales</h6>
            </div>

            <!-- Datos de llegada del paciente  -->

            <div class="row">
                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                <div class="col-md-12">
                    <strong style="font-size: 13px;">Nombre</strong>
                    <input id="nombre_px" name="nombre_px" type="text" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $nombre_px; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">CURP</strong>
                    <input id="curp" name="curp" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $curp; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Género</strong>
                    <input id="genero" name="genero" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $genero; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px; ">Fecha de Nacimiento</strong>
                    <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="control form-control"
                        style="font-size: 13px;" value="<?php echo $fecha_nacimiento; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px;">Estado Civil</strong>
                    <select name="Estadocivil" id="Estadocivil" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($Estadocivil == 'Sin Registro') echo 'selected'; ?>>Seleccione</option>
                        <option value="Soltera"<?php if ($Estadocivil == 'Soltera') echo 'selected'; ?>>Soltero</option>
                        <option value="Casada"<?php if ($Estadocivil == 'Casada') echo 'selected'; ?>>Casado</option>
                        <option value="Viuda"<?php if ($Estadocivil == 'Viuda') echo 'selected'; ?>>Viudo</option>
                        <option value="Divorciada"<?php if ($Estadocivil == 'Divorciada') echo 'selected'; ?>>Divorciado</option>
                        <option value="Concubinato"<?php if ($Estadocivil == 'Concubinato') echo 'selected'; ?>>Concubinato</option>
                        <option value="Separada"<?php if ($Estadocivil == 'Separada') echo 'selected'; ?>>Separado</option>
                    </select>
                    </select>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Raza</strong>
                    <input id="Raza" name="Raza" type="text" class="control form-control" style="font-size: 13px;" value="<?php echo $Raza; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Unidad de Referencia</strong>
                    <input list="Clues" name="unidad_referencia" id="unidad_referencia" class="form-select"
                        style="font-size: 14px;" value="<?php echo $unidad_referencia; ?>">
                </div>

                <datalist id="Clues">
                    <?php
                    if (!empty($AllData_Clues)) {
                        foreach ($AllData_Clues as $row1) {
                            echo "<option value='" . $row1["id_clues"] . "'>" . $row1["nombre_clues"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay datos disponibles</option>";
                    }
                    ?>
                </datalist>


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
                    <input type="number" class="control form-control" id="Presion_sistolica" name="Presion_sistolica"
                        style="font-size: 13px;" value="<?php echo $Presion_sistolica; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Presión Diastólica </strong>
                    <input type="number" class="control form-control" id="Presion_Diastolica" name="Presion_Diastolica"
                        style="font-size: 13px;" value="<?php echo $Presion_Diastolica; ?>">
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 13px;">Frecuencia Cardíaca</strong>
                    <input id="FC" name="FC" type="number" class="control form-control" style="font-size: 13px;" value="<?php echo $FC; ?>">
                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Frecuencia Respiratoria</strong>
                    <input type="number" class="control form-control" id="fr" name="fr" style="font-size: 13px;" value="<?php echo $fr; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Glucemia Capilar</strong>
                    <input type="number" class="control form-control" id="Glucemia " name="Glucemia"
                        style="font-size: 13px;" value="<?php echo $Glucemia; ?>">
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
                    <input type="number" class="control form-control" id="peso" name="peso" style="font-size: 13px;" value="<?php echo $peso; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Talla (m)</strong>
                    <input type="number" class="control form-control" id="talla" name="talla" style="font-size: 13px;" value="<?php echo $talla; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Circunferencia Cintura(cm)</strong>
                    <input type="number" class="control form-control" id="circunferencia" name="circunferencia"
                        style="font-size: 13px;" value="<?php echo $circunferencia; ?>">
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
                        <input class="form-check-input ra-checkbox" type="checkbox" id="BRCA_1" name="BRCA_1"
                            value="BRCA1" <?php if ($BRCA_1 == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="BRCA_1_patologico" style="font-size: 13px;">Conocida
                            con Gen BRCA 1</label>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="BRCA_2" name="BRCA_2"
                            value="BRCA2" <?php if ($BRCA_2 == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="BRCA_2_patologico" style="font-size: 13px;">Conocida
                            con Gen BRCA 2</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="diabetes" name="diabetes"
                            value="diabetes_pat" <?php if ($diabetes == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="diabetes_patologico" style="font-size: 13px;">Diabetes
                            Mellitus</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="renal_cronica"
                            name="renal_cronica" value="renal_cronica_pat" <?php if ($renal_cronica == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="renal_cronica_patologico"
                            style="font-size: 13px;">Enfermedad
                            Renal Cronica</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="Hipertension"
                            name="Hipertension" value="Hipertension_pat" <?php if ($Hipertension == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="Hipertension_patologico"
                            style="font-size: 13px;">Hipertensión
                            Arterial</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="Tabaquismo" name="Tabaquismo"
                            value="Tabaquismo_pat" <?php if ($Tabaquismo == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="Tabaquismo_Patologico"
                            style="font-size: 13px;">Tabaquismo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="Antecedentecancer_mama"
                            name="Antecedentecancer_mama" value="Antecedentecancer_mama_pat" <?php if ($Antecedentecancer_mama == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="Antecedentecancermama" style="font-size: 13px;">Cáncer
                            de mama</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input ra-checkbox" type="checkbox" id="Antecedentes_ninguna"
                            name="Antecedentes_ninguna" value="Antecedentes_ninguna_pat" <?php if ($Antecedentes_ninguna == 'Si') echo "checked"; ?>>
                        <label class="form-check-label" for="Antecedentesninguna" style="font-size: 13px;">Ninguna
                            de las Anteriores</label>
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
                        <option value="Seleccione"<?php if ($Heredo_Cancer == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Heredo_Cancer == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Heredo_Cancer == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Antecedentes"<?php if ($Heredo_Cancer == 'Sin Antecedentes') echo 'selected'; ?>>Sin Antecedentes</option>
                    </select>
                </div>


                <div class="col-md-12" id="Cancer_prostata">
                    <strong style="font-size: 13px;">Cáncer Próstata</strong>
                    <select name="Heredo_CancerProstata" id="Heredo_CancerProstata" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Heredo_CancerProstata == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Heredo_CancerProstata == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Heredo_CancerProstata == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Antecedentes"<?php if ($Heredo_CancerProstata == 'Sin Antecedentes') echo 'selected'; ?>>Sin Antecedentes</option>
                    </select>
                </div>
                <!--  -->

                <div class="container" id="CancerProstata">

                    <label for="Antecedentes_Prostata" style="font-size: 13px;"><strong>Antecedentes de Cáncer de
                            Próstata:</strong></label>
                    <div class="row">

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Abuelo Materno</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Abuelo_materno_cancer"
                                id="Abuelo_materno_cancer" value="Abuelo_materno_cancer"
                                style="font-size:14px; margin: 5px auto; " <?php if ($Abuelo_materno_cancer == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Abuelo Paterno</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Abuelo_paterno_cancer"
                                id="Abuelo_paterno_cancer" value="Abuelo_paterno_cancer"
                                style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Abuelo_paterno_cancer == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hermano</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Hermano_Prostata"
                                id="Hermano_Prostata" value="Hermano_Prostata"
                                style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Hermano_Prostata == 'Si') echo "checked"; ?>>
                        </div>


                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Padre</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Padre_cancer_Prostata"
                                id="Padre_cancer_Prostata" value="Padre_cancer_Prostata"
                                style="font-size:13px; margin: 5px auto; display: block;" <?php if ($Padre_cancer_Prostata == 'Si') echo "checked"; ?>>
                        </div>


                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Primo Materno</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Primo_Materno_Prostata"
                                id="Primo_Materno_Prostata" value="Primo_Materno_Prostata"
                                style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Primo_Materno_Prostata == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Primo Paterno</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Primo_Paterno_Prostata"
                                id="Primo_Paterno_Prostata" value="Primo_Paterno_Prostata"
                                style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Primo_Paterno_Prostata == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tío Materno</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Tio_Materno_Prostata"
                                id="Tio_Materno_Prostata" value="Tio_Materno_Prostata"
                                style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Tio_Materno_Prostata == 'Si') echo "checked"; ?>>
                        </div>


                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tío Paterno</span>
                            <input type="checkbox" name="Tio_Paterno_Prostata" class="form-check-input ra-checkbox"
                                id="Tio_Paterno_Prostata" value="Tio_Paterno_Prostata"
                                style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Tio_Paterno_Prostata == 'Si') echo "checked"; ?>>
                        </div>
                    </div>
                </div>

                <!-- Cancer OVARIO -->

                <div class="col-md-12" id="CancerOvario">
                    <strong style="font-size: 13px;">Cáncer Ovario</strong>
                    <select name="Heredo_CancerOvario" id="Heredo_CancerOvario" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Heredo_CancerOvario == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Heredo_CancerOvario == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Heredo_CancerOvario == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Antecedentes"<?php if ($Heredo_CancerOvario == 'Sin Antecedentes') echo 'selected'; ?>>Sin Antecedentes</option>
                    </select>
                </div>

                <div class="container" id="Cancer_Ovario">
                    <label for="Antecedentes_ovario" style="font-size: 13px;"><strong>Antecedentes de Cáncer Ovario
                            :</strong></label><br>
                    <div class="row">
                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Abuela Materna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Abuela_materna_cancer" value="Abuela_materna_cancer"
                                style="font-size:14px; margin: 5px auto; "<?php if ($Abuela_MaternaAntecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Abuela Paterna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Abuela_paterna_cancer" value="Abuela_paterna_cancer"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Abuela_PaternaAntecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hermana</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Hermana_Ovario" value="Hermana_Ovario"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Hermana_Antecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Madre</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Madre_cancer_Ovario" value="Madre_cancer_Ovario"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Madre_Antecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Prima Materna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Prima_Materna_Ovario" value="Prima_Materna_Ovario"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($PrimaMaterna_Antecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Prima Paterna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Prima_Paterna_Ovario" value="Prima_Paterna_Ovario"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Prima_paternaAntecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tía Materna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Tia_Materna_Ovario" value="Tia_Materna_Ovario"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Tia_MaternaAntecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tía Paterna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Ovario"
                                id="Tia_Paterna_Ovario" value="Tia_Paterna_Ovario"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Tia_PaternaAntecedentes_Ovario == 'Si') echo "checked"; ?>>
                        </div>
                    </div>
                </div>


                <!-- ANTECEDENTES CANCER MAMA  -->

                <div class="col-md-12" id="AH_Cancer_Mama">
                    <strong style="font-size: 13px;">Cáncer Mama</strong>
                    <select name="Heredo_CancerMama" id="Heredo_CancerMama" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Heredo_CancerMama == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Heredo_CancerMama == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Heredo_CancerMama == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Antecedentes"<?php if ($Heredo_CancerMama == 'Sin Antecedentes') echo 'selected'; ?>>Sin Antecedentes</option>
                    </select>
                </div>

                <div class="container" id="Cancer_Mama1">
                    <label for="Antecedentes_mama" style="font-size: 13px;"><strong>Antecedentes de Cáncer Mama
                            :</strong></label><br>
                    <div class="row">
                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Abuela Materna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Abuela_materna_cancerMama" value="Abuela_matera_cancerMama"
                                style="font-size:14px; margin: 5px auto; "<?php if ($Abuela_MaternaAntecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Abuela Paterna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Abuela_paterna_cancerMama" value="Abuela_paterna_cancerMama"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Abuela_PaternaAntecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Hermana</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Hermana_Mama" value="Hermana_Mama"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Hermana_Antecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Madre</span>
                            <input type="checkbox" name="Antecedentes_Mama" id="Madre_cancer_Mama"
                                value="Madre_cancer_Mama" style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Madre_Antecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Prima Materna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Prima_Materna_Mama" value="Prima_Materna_Mama"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($PrimaMaterna_Antecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Prima Paterna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Prima_Paterna_Mama" value="Prima_Paterna_Mama"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Prima_paternaAntecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tía Materna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Tia_Materna_Mama" value="Tia_Materna_Mama"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Tia_MaternaAntecedentes_Mama == 'Si') echo "checked"; ?>>
                        </div>

                        <div class="col-md-2" style="text-align: center;">
                            <span style="font-size:13px; display: block;">Tía Paterna</span>
                            <input type="checkbox" class="form-check-input ra-checkbox" name="Antecedentes_Mama"
                                id="Tia_Paterna_Mama" value="Tia_Paterna_Mama"
                                style="font-size:14px; margin: 5px auto; display: block;"<?php if ($Tia_PaternaAntecedentes_Mama == 'Si') echo "checked"; ?>>
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
                    <input type="number" class="control form-control" id="Menarca" name="Menarca"
                        style="font-size: 13px;" value="<?php echo $Menarca; ?>">
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Menopausia</strong>
                    <select name="Menopausia" id="Menopausia" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Menopausia == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Menopausia == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Menopausia == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Antecedentes"<?php if ($Menopausia == 'Sin Antecedentes') echo 'selected'; ?>>Sin Antecedentes</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Gestas</strong>
                    <input type="number" class="control form-control" id="Gestas" name="Gestas"
                        style="font-size: 13px;"value="<?php echo $Gestas; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Esta Embarazada</strong>
                    <select name="Esta_Embarazada" id="Esta_Embarazada" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Esta_Embarazada == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Esta_Embarazada == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Esta_Embarazada == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>


                <div class="col-md-3" id="Fecha_probable">
                    <strong style="font-size: 13px;">Fecha Probable Parto</strong>
                    <input type="date" class="control form-control" id="fecha_probableParto" name="fecha_probableParto"
                        style="font-size: 13px;" value="<?php echo $fecha_probableParto; ?>">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Terapia Reemplazo Hormonal</strong>
                    <select name="Terapia_remplazoHormonal" id="Terapia_remplazoHormonal" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Terapia_remplazoHormonal == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Terapia_remplazoHormonal == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Terapia_remplazoHormonal == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Terapia_remplazoHormonal == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3" id="Lactancia_Antecentes">
                    <strong style="font-size: 13px;">Lactancia </strong>
                    <select name="Lactancia" id="Lactancia" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Lactancia == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Si"<?php if ($Lactancia == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Lactancia == 'No') echo 'selected'; ?>>No</option>
                        <option value="Sin Registro"<?php if ($Lactancia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>


                <div class="col-md-2" id="Tiempo_lactancia">
                    <strong style="font-size: 13px;">Tiempo</strong>
                    <input type="text" class="control form-control" id="Tiempo" name="Tiempo" style="font-size: 13px;" value="<?php echo $Tiempo; ?>">
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
                    <input type="text" class="control form-control" id="Gestas_Embarazo" name="Gestas_Embarazo"
                        style="font-size: 13px;"value="<?php echo $Gestas_Embarazo; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px;">Paras</strong>
                    <input type="text" class="control form-control" id="Paras" name="Paras" style="font-size: 13px;"value="<?php echo $Paras; ?>">
                </div>


                <div class="col-md-2">
                    <strong style="font-size: 13px;">Abortos</strong>
                    <input type="text" class="control form-control" id="Abortos" name="Abortos"
                        style="font-size: 13px;"value="<?php echo $Abortos; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px;">Cesáreas</strong>
                    <input type="text" class="control form-control" id="Cesareas" name="Cesareas"
                        style="font-size: 13px;"value="<?php echo $Cesareas; ?>">
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 13px;">Ectópicos</strong>
                    <input type="text" class="control form-control" id="Ectopicos" name="Ectopicos"
                        style="font-size: 13px;"value="<?php echo $Ectopicos; ?>">
                </div>


                <div class="col-md-1">

                </div>

                <div class="col-md-12">
                    <strong style="font-size: 13px;">Comentario:</strong>
                    <textarea id="comentarios" name="comentarios" class="form-control"
                        style="font-size: 13px;" value="<?php echo $comentarios; ?>"></textarea>
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
                    <input type="date" class="control form-control" id="Fecha_primeraAtencion"
                        name="Fecha_primeraAtencion" style="font-size: 13px;" value="<?php echo $Fecha_primeraAtencion; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">BIRADS Referencia </strong>
                    <select name="BIRADS_Referencia" id="BIRADS_Referencia" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="BR0"<?php if ($BIRADS_Referencia == 'BR0') echo 'selected'; ?>>BR0 Estudio Insuficiente</option>
                        <option value="BRI"<?php if ($BIRADS_Referencia == 'BRI') echo 'selected'; ?>>BRI Normal</option>
                        <option value="BR2"<?php if ($BIRADS_Referencia == 'BR2') echo 'selected'; ?>>BR2 Patología Benigna</option>
                        <option value="BR3"<?php if ($BIRADS_Referencia == 'BR3') echo 'selected'; ?>>BR3 Sugestivo de Benignidad Menos del 2%</option>
                        <option value="BR4a"<?php if ($BIRADS_Referencia == 'BR4a') echo 'selected'; ?>>BR4a Baja a Moderada Sospecha 2-10%</option>
                        <option value="BR4b"<?php if ($BIRADS_Referencia == 'BR4b') echo 'selected'; ?>>BR4b Moderada sospecha 11-40%</option>
                        <option value="BR4c"<?php if ($BIRADS_Referencia == 'BR4c') echo 'selected'; ?>>BR4c Moderada - Alta Sospecha 41-94%</option>
                        <option value="BR5"<?php if ($BIRADS_Referencia == 'BR5') echo 'selected'; ?>>BR5 Alta Sospecha de Malignidad más del 95%</option>
                        <option value="BR6"<?php if ($BIRADS_Referencia == 'BR6') echo 'selected'; ?>>BR6 Malignidad Confirmada</option>
                        <option value="Sin Registro"<?php if ($BIRADS_Referencia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">BIRADS Hospital</strong>
                    <select name="BIRADS_Hospital" id="BIRADS_Hospital" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="BR0"<?php if ($BIRADS_Hospital == 'BR0') echo 'selected'; ?>>BR0 Estudio Insuficiente</option>
                        <option value="BRI"<?php if ($BIRADS_Hospital == 'BRI') echo 'selected'; ?>>BRI Normal</option>
                        <option value="BR2"<?php if ($BIRADS_Hospital == 'BR2') echo 'selected'; ?>>BR2 Patología Benigna</option>
                        <option value="BR3"<?php if ($BIRADS_Hospital == 'BR3') echo 'selected'; ?>>BR3 Sugestivo de Benignidad Menos del 2%</option>
                        <option value="BR4a"<?php if ($BIRADS_Hospital == 'BR4a') echo 'selected'; ?>>BR4a Baja a Moderada Sospecha 2-10%</option>
                        <option value="BR4b"<?php if ($BIRADS_Hospital == 'BR4b') echo 'selected'; ?>>BR4b Moderada sospecha 11-40%</option>
                        <option value="BR4c"<?php if ($BIRADS_Hospital == 'BR4c') echo 'selected'; ?>>BR4c Moderada - Alta Sospecha 41-94%</option>
                        <option value="BR5"<?php if ($BIRADS_Hospital == 'BR5') echo 'selected'; ?>>BR5 Alta Sospecha de Malignidad más del 95%</option>
                        <option value="BR6"<?php if ($BIRADS_Hospital == 'BR6') echo 'selected'; ?>>BR6 Malignidad Confirmada</option>
                        <option value="Sin Registro"<?php if ($BIRADS_Hospital == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Lateralidad</strong>
                    <select name="Lateralidad" id="Lateralidad" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Lateralidad == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Bilateral"<?php if ($Lateralidad == 'Bilateral') echo 'selected'; ?>>Bilateral</option>
                        <option value="Derecha"<?php if ($Lateralidad == 'Derecha') echo 'selected'; ?>>Derecha</option>
                        <option value="Izquierda"<?php if ($Lateralidad == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                        <option value="Sin Registro"<?php if ($Lateralidad == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Estado Clínico</strong>
                    <select name="Estado_clinico" id="Estado_clinico" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Estado_clinico == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="I"<?php if ($Estado_clinico == 'I') echo 'selected'; ?>>I</option>
                        <option value="II"<?php if ($Estado_clinico == 'II') echo 'selected'; ?>>II A</option>
                        <option value="II"<?php if ($Estado_clinico == 'II') echo 'selected'; ?>>II B</option>
                        <option value="III A"<?php if ($Estado_clinico == 'III A') echo 'selected'; ?>>III A</option>
                        <option value="III B"<?php if ($Estado_clinico == 'III B') echo 'selected'; ?>>III B</option>
                        <option value="III C"<?php if ($Estado_clinico == 'III C') echo 'selected'; ?>>III C</option>
                        <option value="IV"<?php if ($Estado_clinico == 'IV') echo 'selected'; ?>>IV</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Etapa Clínica</strong>
                    <input type="text" class="control form-control" id="Etapa_Clinica" name="Etapa_Clinica"
                        style="font-size: 13px;" value="<?php echo $Etapa_Clinica; ?>">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Estado Tamaño Tumoral</strong>
                    <select name="Estado_Tamaño" id="Estado_Tamaño" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Estado_Tamaño == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Sin Registro"<?php if ($Estado_Tamaño == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="T1"<?php if ($Estado_Tamaño == 'T1') echo 'selected'; ?>>T1. menor o igual a 2cm</option>
                        <option value="T2"<?php if ($Estado_Tamaño == 'T2') echo 'selected'; ?>>T2. mayor a 2cm pero menor a 4 cm</option>
                        <option value="T3"<?php if ($Estado_Tamaño == 'T3') echo 'selected'; ?>>T3. mayor a 4 cm</option>
                        <option value="T4a"<?php if ($Estado_Tamaño == 'T4a') echo 'selected'; ?>>T4a. Invade Piel, Mandibular Canal Auditivo y Nervio Facial</option>
                        <option value="T4b"<?php if ($Estado_Tamaño == 'T4b') echo 'selected'; ?>>T4b. Tumor que Invade la Base del Craneo y/o Pterigoides</option>
                    </select>
                </div>


                <div class="col-md-3">
                    <strong style="font-size: 13px;">Metástasis</strong>
                    <select name="Metastasis" id="Metastasis" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($Metastasis == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="M0"<?php if ($Metastasis == 'M0') echo 'selected'; ?>>M0: Sin Enfermedad a Distancia</option>
                        <option value="M1"<?php if ($Metastasis == 'M1') echo 'selected'; ?>>M1: Con Enfermedad Metastásica</option>
                        <option value="MX"<?php if ($Metastasis == 'MX') echo 'selected'; ?>>MX: No se Puede Evaluar Metástasis Distantes</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Calidad Vida ECOG</strong>
                    <select name="Calidad_ECOG" id="Calidad_ECOG" class="form-select" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($Calidad_ECOG == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="ECOG O"<?php if ($Calidad_ECOG == 'ECOG O') echo 'selected'; ?>>ECOG O Desempeño Funcional Normal</option>
                        <option value="ECOG 1"<?php if ($Calidad_ECOG == 'ECOG 1') echo 'selected'; ?>>ECOG 1 Desempeño Leve</option>
                        <option value="ECOG 2"<?php if ($Calidad_ECOG == 'ECOG 2') echo 'selected'; ?>>ECOG 2 EI del Tiempo Postrado</option>
                        <option value="ECOG 3"<?php if ($Calidad_ECOG == 'ECOG 3') echo 'selected'; ?>>ECOG 3 Más del 50% Postrado</option>
                        <option value="ECOG 4"<?php if ($Calidad_ECOG == 'ECOG 4') echo 'selected'; ?>>ECOG 4 Dependiente al 100% para Vida Básica</option>
                        <option value="ECOG 5"<?php if ($Calidad_ECOG == 'ECOG 5') echo 'selected'; ?>>ECOG 5 Falleció</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <strong style="font-size: 13px;">Compromiso Linfático Nodal</strong>
                    <select name="Compromiso_linfatico" id="Compromiso_linfatico" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione"<?php if ($Compromiso_linfatico == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                        <option value="Sin Registro"<?php if ($Compromiso_linfatico == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="NO"<?php if ($Compromiso_linfatico == 'NO') echo 'selected'; ?>>NO: Ausencia de Adenopatías Palpables</option>
                        <option value="NI"<?php if ($Compromiso_linfatico == 'NI') echo 'selected'; ?>>NI: Nódulos Palpables Ipsilaterales, Menores a 3cm</option>
                        <option value="N2a"<?php if ($Compromiso_linfatico == 'N2a') echo 'selected'; ?>>N2a: Metástasis en Nódulo Ipsilateral, Mayor de 3cm Menor de 6cm</option>
                        <option value="N2b"<?php if ($Compromiso_linfatico == 'N2b') echo 'selected'; ?>>N2b: Metástasis en múltiples Nódulos Ipsilaterales Mayores a 6cm</option>
                        <option value="N2c"<?php if ($Compromiso_linfatico == 'N2c') echo 'selected'; ?>>N2c: Metástasis en Nódulos Bilaterales y Contralaterales Mayores a 6cm</option>
                        <option value="N3"<?php if ($Compromiso_linfatico == 'N3') echo 'selected'; ?>>N3: Nódulos Palpables Fijos Mayor a 6cm</option>
                        <option value="NX"<?php if ($Compromiso_linfatico == 'NX') echo 'selected'; ?>>NX: No Puede ser Evaluado por Falta de Datos</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Mastectomía Extrainstitucional</strong>
                    <select name="Mastectomia_extrain" id="Mastectomia_extrain" class="form-select"
                        style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($Mastectomia_extrain == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="Si"<?php if ($Mastectomia_extrain == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Mastectomia_extrain == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <div class="container" id="late_fecha_maste">
                    <div class="row">

                        <div class="col-md-6" id="Latera_maste">
                            <strong style="font-size: 13px;">Lateralidad Mastectomía Extrainstitucional</strong>
                            <select name="Lateralidad_mastectomia" id="Lateralidad_mastectomia" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Lateralidad_mastectomia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Mama Derecha"<?php if ($Lateralidad_mastectomia == 'Mama Derecha') echo 'selected'; ?>>Mama Derecha</option>
                                <option value="Mama Izquierda"<?php if ($Lateralidad_mastectomia == 'Mama Izquierda') echo 'selected'; ?>>Mama Izquierda</option>
                                <option value="Ambas Mamas"<?php if ($Lateralidad_mastectomia == 'Ambas Mamas') echo 'selected'; ?>>Ambas Mamas</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="fecha_latera_maste">
                            <strong style="font-size: 13px;">Fecha</strong>
                            <input type="date" class="control form-control" id="fecha_ATC" name="fecha_ATC"
                                style="font-size: 13px;" value="<?php echo $fecha_ATC; ?>">
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
                            <option value="Sin Registro"<?php if ($Histopatologia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Si"<?php if ($Histopatologia == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($Histopatologia == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="Histo_area">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Histopatologia_area" id="Histopatologia_area" class="form-select"
                            style="font-size: 13px;">
                            <option value="Sin Registro"<?php if ($Histopatologia_area == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Mama Derecha"<?php if ($Histopatologia_area == 'Mama Derecha') echo 'selected'; ?>>Mama Derecha</option>
                            <option value="Mama Izquierda"<?php if ($Histopatologia_area == 'Mama Izquierda') echo 'selected'; ?>>Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha"<?php if ($Histopatologia_area == 'Region Ganglionar Derecha') echo 'selected'; ?>>Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda"<?php if ($Histopatologia_area == 'Region Ganglionar Izquierda') echo 'selected'; ?>>Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar"<?php if ($Histopatologia_area == 'Biopsia por aguja/Biopsia de otro lugar') echo 'selected'; ?>>Biopsia por aguja/Biopsia de
                                otro lugar</option>
                        </select>
                    </div>


                    <div class="container" id="DXHistopatologia">
                        <div class="row">
                            <div class="col-md-6" id="Dx_histopatologicoarea">
                                <strong style="font-size: 13px;">Dx Histopatológico</strong>
                                <select name="Dx_Histopatologia_area" id="Dx_Histopatologia_area" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($Dx_Histopatologia_area == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Benigno Phyllodes"<?php if ($Dx_Histopatologia_area == 'Benigno Phyllodes') echo 'selected'; ?>>Benigno Phyllodes</option>
                                    <option value="Ductal"<?php if ($Dx_Histopatologia_area == 'Ductal') echo 'selected'; ?>>Ductal</option>
                                    <option value="Enfermedad de Paget"<?php if ($Dx_Histopatologia_area == 'Enfermedad de Paget') echo 'selected'; ?>>Enfermedad de Paget</option>
                                    <option value="Intraductal"<?php if ($Dx_Histopatologia_area == 'Intraductal') echo 'selected'; ?>>Intraductal</option>
                                    <option value="Linfomas"<?php if ($Dx_Histopatologia_area == 'Linfomas') echo 'selected'; ?>>Linfomas</option>
                                    <option value="Lobulillar"<?php if ($Dx_Histopatologia_area == 'Lobulillar') echo 'selected'; ?>>Lobulillar</option>
                                    <option value="Maligno Phyllodes"<?php if ($Dx_Histopatologia_area == 'Maligno Phyllodes') echo 'selected'; ?>>Maligno Phyllodes</option>
                                    <option value="Mixto"<?php if ($Dx_Histopatologia_area == 'Mixto') echo 'selected'; ?>>Mixto</option>
                                    <option value="Mucinoso"<?php if ($Dx_Histopatologia_area == 'Mucinoso') echo 'selected'; ?>>Mucinoso</option>
                                    <option value="Negativo Neoplasia"<?php if ($Dx_Histopatologia_area == 'Negativo Neoplasia') echo 'selected'; ?>>Negativo Neoplasia</option>
                                    <option value="Papilar"<?php if ($Dx_Histopatologia_area == 'Papilar') echo 'selected'; ?>>Papilar</option>
                                    <option value="Positivo Neoplasia"<?php if ($Dx_Histopatologia_area == 'Positivo Neoplasia') echo 'selected'; ?>>Positivo Neoplasia</option>
                                    <option value="Sarcomas"<?php if ($Dx_Histopatologia_area == 'Sarcomas') echo 'selected'; ?>>Sarcomas</option>
                                    <option value="Sin Respuesta"<?php if ($Dx_Histopatologia_area == 'Sin Respuesta') echo 'selected'; ?>>Sin Respuesta</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 13px; ">Fecha Dx Histopatológico</strong>
                                <input id="fecha_dxHistopatologico" name="fecha_dxHistopatologico" type="date"
                                    class="control form-control" style="font-size: 13px;" value="<?php echo $fecha_dxHistopatologico; ?>">
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Nottinghan</strong>
                                <select name="Histopatologia_Nottinghan" id="Histopatologia_Nottinghan"
                                    class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($Histopatologia_Nottinghan == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Grado I"<?php if ($Histopatologia_Nottinghan == 'Grado I') echo 'selected'; ?>>Grado I Bien Diferenciado</option>
                                    <option value="Grado II"<?php if ($Histopatologia_Nottinghan == 'Grado II') echo 'selected'; ?>>Grado II Moderadamente Diferenciado</option>
                                    <option value="Grado III"<?php if ($Histopatologia_Nottinghan == 'Grado III') echo 'selected'; ?>>Grado III Escasamente Diferenciado</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Escala SBR</strong>
                                <select name="Histopatologia_Escala_SBR" id="Histopatologia_Escala_SBR"
                                    class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($Histopatologia_Escala_SBR == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Gl"<?php if ($Histopatologia_Escala_SBR == 'Gl') echo 'selected'; ?>>Gl 3-5 Puntos Bien Diferenciado</option>
                                    <option value="G2"<?php if ($Histopatologia_Escala_SBR == 'G2') echo 'selected'; ?>>G2 6-7 Puntos Moderadamente Diferenciado</option>
                                    <option value="G3"<?php if ($Histopatologia_Escala_SBR == 'G3') echo 'selected'; ?>>G3 8-9 Puntos Pobremente Diferenciado</option>
                                    <option value="G4"<?php if ($Histopatologia_Escala_SBR == 'G4') echo 'selected'; ?>>G4 Indiferenciado</option>
                                    <option value="GX"<?php if ($Histopatologia_Escala_SBR == 'GX') echo 'selected'; ?>>GX Diferenciación no Puede ser Valorado</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Escala MID</strong>
                                <select name="Histopatologia_Escala_MID" id="Histopatologia_Escala_MID"
                                    class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($Histopatologia_Escala_MID == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Parcial"<?php if ($Histopatologia_Escala_MID == 'Parcial') echo 'selected'; ?>>Parcial</option>
                                    <option value="Completa"<?php if ($Histopatologia_Escala_MID == 'Completa') echo 'selected'; ?>>Completa</option>
                                    <option value="Sin Respuesta"<?php if ($Histopatologia_Escala_MID == 'Sin Respuesta') echo 'selected'; ?>>Sin Respuesta</option>
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
                        <select name="Inmunohistoquimica" id="Inmunohistoquimica" class="form-select"
                            style="font-size: 13px;">
                            <option value="Sin Registro"<?php if ($Inmunohistoquimica == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Si<?php if ($Inmunohistoquimica == 'Si') echo 'selected'; ?>">Si</option>
                            <option value="No"<?php if ($Inmunohistoquimica == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="Inmuno_area">

                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Inmunohistoquimica_area" id="Inmunohistoquimica_area" class="form-select"
                            style="font-size: 13px;">
                            <option value="Sin Registro"<?php if ($Inmunohistoquimica_area == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Mama Derecha"<?php if ($Inmunohistoquimica_area == 'Mama Derecha') echo 'selected'; ?>>Mama Derecha</option>
                            <option value="Mama Izquierda"<?php if ($Inmunohistoquimica_area == 'Mama Izquierda') echo 'selected'; ?>>Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha"<?php if ($Inmunohistoquimica_area == 'Region Ganglionar Derecha') echo 'selected'; ?>>Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda"<?php if ($Inmunohistoquimica_area == 'Region Ganglionar Izquierda') echo 'selected'; ?>>Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar"<?php if ($Inmunohistoquimica_area == 'Biopsia por aguja/Biopsia de otro lugar') echo 'selected'; ?>>Biopsia por aguja/Biopsia de
                                otro lugar</option>
                        </select>
                    </div>

                    <!-- INMUNOHISTOQUIMICA -->

                    <div class="container" id="Area_Inmunohistoquimica">
                        <div class="row">
                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Receptores Estrógenos (RE)</strong>
                                <input type="text" class="control form-control" id="Receptores_RE" name="Receptores_RE"
                                    style="font-size: 13px;" value="<?php echo $Receptores_RE; ?>">
                            </div>


                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Receptores Progesterona (RP)</strong>
                                <input type="text" class="control form-control" id="Receptores_RP" name="Receptores_RP"
                                    style="font-size: 13px;" value="<?php echo $Receptores_RP; ?>">
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">KI-67</strong>
                                <input type="text" class="control form-control" id="KI_67" name="KI_67"
                                    style="font-size: 13px;" value="<?php echo $KI_67; ?>">
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">P 53</strong>
                                <input type="text" class="control form-control" id="P_53" name="P_53"
                                    style="font-size: 13px;" value="<?php echo $P_53; ?>">
                            </div>


                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Triple Negativo</strong>
                                <select name="Triple_Negativo" id="Triple_Negativo" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($Triple_Negativo == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Si"<?php if ($Triple_Negativo == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Triple_Negativo == 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Se realizó PDL</strong>
                                <select name="PDL" id="PDL" class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($PDL == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Si"<?php if ($PDL == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($PDL == 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Oncogén HER2</strong>
                                <select name="Oncogen_her2" id="Oncogen_her2" class="form-select"
                                    style="font-size: 13px;" aria-label="Default select example">
                                    <option value="Sin Registro"<?php if ($Oncogen_her2 == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="+"<?php if ($Oncogen_her2 == '+') echo 'selected'; ?>>+</option>
                                    <option value="++"<?php if ($Oncogen_her2 == '++') echo 'selected'; ?>>++</option>
                                    <option value="+++"<?php if ($Oncogen_her2 == '+++') echo 'selected'; ?>>+++</option>
                                    <option value="Negativo"<?php if ($Oncogen_her2 == 'Negativo') echo 'selected'; ?>>Negativo</option>
                                </select>
                            </div>

                            <div class="col-md-3" id="Fish_tt">
                                <strong style="font-size: 13px;">FISH</strong>
                                <select name="FISH" id="FISH" class="form-select" style="font-size: 13px;">
                                    <option value="Negativo"<?php if ($FISH == 'Negativo') echo 'selected'; ?>>Negativo</option>
                                    <option value="Positivo"<?php if ($FISH == 'Positivo') echo 'selected'; ?>>Positivo</option>
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
                            <option value="Sin Registro"<?php if ($Molecular == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Si"<?php if ($Molecular == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($Molecular == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>


                    <div class="col-md-6" id="Histo_areaMolecular">
                        <strong style="font-size: 13px;">Área</strong>
                        <select name="Molecular_area" id="Molecular_area" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro"<?php if ($Molecular_area == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Mama Derecha"<?php if ($Molecular_area == 'Mama Derecha') echo 'selected'; ?>>Mama Derecha</option>
                            <option value="Mama Izquierda"<?php if ($Molecular_area == 'Mama Izquierda') echo 'selected'; ?>>Mama Izquierda</option>
                            <option value="Region Ganglionar Derecha"<?php if ($Molecular_area == 'Region Ganglionar Derecha') echo 'selected'; ?>>Region Ganglionar Derecha</option>
                            <option value="Region Ganglionar Izquierda"<?php if ($Molecular_area == 'Region Ganglionar Izquierda') echo 'selected'; ?>>Region Ganglionar Izquierda</option>
                            <option value="Biopsia por aguja/Biopsia de otro lugar"<?php if ($Molecular_area == 'Biopsia por aguja/Biopsia de otro lugar') echo 'selected'; ?>>Biopsia por aguja/Biopsia de
                                otro lugar</option>
                        </select>
                    </div>

                    <div class="container" id="Molecular_estudios">
                        <div class="row">
                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Luminal A</strong>
                                <select name="Luminal_A" id="Luminal_A" class="form-select" style="font-size: 13px;">
                                    <option value="Si"<?php if ($Luminal_A == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Luminal_A == 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Luminal B</strong>
                                <select name="Luminal_B" id="Luminal_B" class="form-select" style="font-size: 13px;">
                                    <option value="Si"<?php if ($Luminal_B == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Luminal_B == 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Enriquecido en HER 2+</strong>
                                <select name="Enriquecido_HER" id="Enriquecido_HER" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Si"<?php if ($Enriquecido_HER == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Enriquecido_HER == 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <strong style="font-size: 13px;">Basal</strong>
                                <select name="Basal" id="Basal" class="form-select" style="font-size: 13px;">
                                    <option value="Si"<?php if ($Basal == 'Si') echo 'selected'; ?>>Si</option>
                                    <option value="No"<?php if ($Basal == 'No') echo 'selected'; ?>>No</option>
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
                            <option value="Sin Registro"<?php if ($Quirurgicos == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Si"<?php if ($Quirurgicos == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($Quirurgicos == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="container" id="tx_lateralidadquirurgico">
                        <div class="row">

                            <div class="col-md-6" id="LateralidadQX">
                                <strong style="font-size: 13px;">Lateralidad QX</strong>
                                <select name="Lateralidad_QX" id="Lateralidad_QX" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($Lateralidad_QX == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Derecha"<?php if ($Lateralidad_QX == 'Derecha') echo 'selected'; ?>>Derecha</option>
                                    <option value="Izquierda"<?php if ($Lateralidad_QX == 'Izquierda') echo 'selected'; ?>>Izquierda</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="tipo_txqx">
                                <strong style="font-size: 13px;">Tipo</strong>
                                <select name="Tipo_qx" id="Tipo_qx" class="form-select" style="font-size: 13px;">
                                    <option value="Seleccione"<?php if ($Tipo_qx == 'Seleccione') echo 'selected'; ?>>Seleccione</option>
                                    <option value="Mastectomia"<?php if ($Tipo_qx == 'Mastectomia') echo 'selected'; ?>>Mastectomia</option>
                                    <option value="Ganglionar"<?php if ($Tipo_qx == 'Ganglionar') echo 'selected'; ?>>Ganglionar</option>
                                </select>
                            </div>

                        </div>

                    </div>


                    <!-- Ganglionar  -->

                    <div class="container" id="tratamiento_ganglionar">
                        <div class="row">

                            <div class="col-md-6">
                                <strong style="font-size: 13px;">Tipo Ganglionar</strong>
                                <select name="tipo_ganglionar" id="tipo_ganglionar" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Sin registro"<?php if ($tipo_ganglionar == 'Sin registrotipo_ganglionar') echo 'selected'; ?>>Sin registro</option>
                                    <option value="Disección Axilar"<?php if ($tipo_ganglionar == 'Disección Axilartipo_ganglionar') echo 'selected'; ?>>Disección Axilar</option>
                                    <option value="Ganglio Centinela"<?php if ($tipo_ganglionar == 'Ganglio Centinelatipo_ganglionar') echo 'selected'; ?>>Ganglio Centinela</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <strong style="font-size: 13px;">Fecha Ganglionar</strong>
                                <input type="date" class="control form-control" id="fecha_ganglionar"
                                    name="fecha_ganglionar" style="font-size: 13px;" value="<?php echo $fecha_ganglionar; ?>">
                            </div>
                        </div>

                    </div><!-- Ganglionar  -->

                    <!-- Mastectomia  -->

                    <div class="container" id="tratamiento_Mastectomia">
                        <div class="row">

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Fecha Mastectomia</strong>
                                <input type="date" class="control form-control" id="fecha_Mastectomia"
                                    name="fecha_Mastectomia" style="font-size: 13px;" value="<?php echo $fecha_Mastectomia; ?>">
                            </div>


                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Tipo Mastectomia</strong>
                                <select name="tipo_Mastectomia" id="tipo_Mastectomia" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Sin registro"<?php if ($tipo_Mastectomia == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                                    <option value="Mastectomia Parcial "<?php if ($tipo_Mastectomia == 'Mastectomia Parcial ') echo 'selected'; ?>>Mastectomia Parcial</option>
                                    <option value="Mastectomia Total"<?php if ($tipo_Mastectomia == 'Mastectomia Total') echo 'selected'; ?>>Mastectomia Total</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <strong style="font-size: 13px;">Reconstrucción</strong>
                                <select name="tipo_MastReconstruccion_Mastectomia" id="Reconstruccion_Mastectomia"
                                    class="form-select" style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($tipo_MastReconstruccion_Mastectomia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="Colgajo"<?php if ($tipo_MastReconstruccion_Mastectomia == 'Colgajo') echo 'selected'; ?>>Colgajo</option>
                                    <option value="Expansor Tisular"<?php if ($tipo_MastReconstruccion_Mastectomia == 'Expansor Tisular') echo 'selected'; ?>>Expansor Tisular</option>
                                    <option value="Implante Mamario"<?php if ($tipo_MastReconstruccion_Mastectomia == 'Implante Mamario') echo 'selected'; ?>>Implante Mamario</option>
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
                            <option value="Sin Registro"<?php if ($Quimioterapia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Si"<?php if ($Quimioterapia == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($Quimioterapia == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="col-md-6" id="quimio_antraciclinas">
                        <strong style="font-size: 13px;">Antraciclinas</strong>
                        <select name="Antraciclinas" id="Antraciclinas" class="form-select" style="font-size: 13px;">
                            <option value="Sin Registro"<?php if ($Antraciclinas == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Daunorubicina"<?php if ($Antraciclinas == 'Daunorubicina') echo 'selected'; ?>>Daunorubicina</option>
                            <option value="Doxorrubicina"<?php if ($Antraciclinas == 'Doxorrubicina') echo 'selected'; ?>>Doxorrubicina</option>
                            <option value="Epirubicina"<?php if ($Antraciclinas == 'Epirubicina') echo 'selected'; ?>>Epirubicina</option>
                            <option value="Idarubicina"<?php if ($Antraciclinas == 'Idarubicina') echo 'selected'; ?>>Idarubicina</option>
                            <option value="Sin Antraciclinas"<?php if ($Antraciclinas == 'Sin Antraciclinas') echo 'selected'; ?>>Sin Antraciclinas</option>
                        </select>
                    </div>

                </div> <!-- SOBRANTE-->

                <div class="container" id="quimioterapia_1">
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
                                <option value="Sin Registro"<?php if ($Tipo_QT == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Adyuvante"<?php if ($Tipo_QT == 'Adyuvante') echo 'selected'; ?>>Adyuvante</option>
                                <option value="Neoadyuvante"<?php if ($Tipo_QT == 'Neoadyuvante') echo 'selected'; ?>>Neoadyuvante</option>
                                <option value="Paliativo"<?php if ($Tipo_QT == 'Paliativo') echo 'selected'; ?>>Paliativo</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Fecha Inicio</strong>
                            <input type="date" class="control form-control" id="FechaInicio_QT" name="FechaInicio_QT"
                                style="font-size: 13px;" value="<?php echo $FechaInicio_QT; ?>">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px;">Fecha Ternmino</strong>
                            <input type="date" class="control form-control" id="FechaTernmino_QT"
                                name="FechaTernmino_QT" style="font-size: 13px;" value="<?php echo $FechaTernmino_QT; ?>">
                        </div>


                        <!-- EQUEMA -->


                        <div class="container" id="Esquema_ady_neo"> <br>
                            <div class="row">
                                <label for="Esquema"
                                    style="text-align: center; font-size: 14px;"><strong>Esquema</strong></label><br>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">5FU</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="5fu_Esquema"
                                        name="5fu_Esquema" value="Esquema_5fu"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($_5fu_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_Esquema"
                                        name="AC_Esquema" value="AC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/T</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Esquema_AC_T"
                                        name="Esquema_AC_T" value="AC/T"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Esquema_AC_T == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/TH</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_TH_Esquema"
                                        name="AC_TH_Esquema" value="AC/TH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_TH_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AT</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AT_Esquema"
                                        name="AT_Esquema" value="AT"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AT_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Atezolizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox"
                                        id="Atezolizumab_Esquema" name="Atezolizumab_Esquema" value="Atezolizumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Atezolizumab_Esquema == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Bevacizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_Esquema"
                                        name="Bevacizumab_Esquema" value="Bevacizumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Bevacizumab_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Capecitabina</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox"
                                        id="Capecitabina_Esquema" name="Capecitabina_Esquema" value="Capecitabina"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Capecitabina_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CBP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_Esquema"
                                        name="CBP_Esquema" value="CBP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($CBP_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ciclofosfamida</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox"
                                        id="Ciclofosfamida_Esquema" name="Ciclofosfamida_Esquema" value="Ciclofosfamida"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Ciclofosfamida_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Cisplatino</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_Esquema"
                                        name="Cisplatino_Esquema" value="Cisplatino"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Cisplatino_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CMF</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_Esquema"
                                        name="CMF_Esquema" value="CMF"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($CMF_Esquema == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ctuximab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_Esquema"
                                        name="Ctuximab_Esquema" value="Ctuximab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Ctuximab_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Docetaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_Esquema"
                                        name="Docetaxel_Esquema" value="Docetaxel"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Docetaxel_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">EC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="EC_Esquema"
                                        name="EC_Esquema" value="EC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($EC_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Etopósido</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_Esquema"
                                        name="Etopósido_Esquema" value="Etopósido"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Etopósido_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_Esquema"
                                        name="FAC_Esquema" value="FAC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($FAC_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FEC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_Esquema"
                                        name="FEC_Esquema" value="FEC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($FEC_Esquema == 'Si') echo "checked"; ?>>
                                </div>




                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Herceptin</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_Esquema"
                                        name="Herceptin_Esquema" value="Herceptin"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Herceptin_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Lapatinib</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_Esquema"
                                        name="Lapatinib_Esquema" value="Lapatinib"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Lapatinib_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Paclitaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_Esquema"
                                        name="Paclitaxel_Esquema" value="Paclitaxel"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Paclitaxel_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pembrolixumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox"
                                        id="Pembrolixumab_Esquema" name="Pembrolixumab_Esquema" value="Pembrolixumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Pembrolixumab_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pertuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_Esquema"
                                        name="Pertuzumab_Esquema" value="Pertuzumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Pertuzumab_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_Esquema"
                                        name="TAC_Esquema" value="TAC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TAC_Esquema == 'Si') echo "checked"; ?>>
                                </div>



                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TC_Esquema"
                                        name="TC_Esquema" value="TC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TC_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_Esquema"
                                        name="TCH_Esquema" value="TCH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TCH_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCHP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_Esquema"
                                        name="TCHP_Esquema" value="TCHP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TCHP_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TH_Esquema"
                                        name="TH_Esquema" value="TH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TH_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">THP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="THP_Esquema"
                                        name="THP_Esquema" value="THP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($THP_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Trastuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_Esquema"
                                        name="Trastuzumab_Esquema" value="Trastuzumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Trastuzumab_Esquema == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Sin Registro</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_Esquema"
                                        name="SinRegistro_Esquema" value="Sin Registro"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Trastuzumab_SinRegistro == 'Si') echo "checked"; ?>>
                                </div>


                            </div> <!--Container Cierre  EQUEMA -->
                        </div>
                        <!-- 1er Línea QT  -->

                        <div class="container" id="1erLinea_QT"> <br>

                            <div class="row">
                                <label for="Palitaivos_1LINEAQT"
                                    style=" text-align: center; font-size: 14px;"><strong>1er
                                        Línea
                                        QT</strong></label> <br>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">5FU</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="5fu" name="5fu"
                                        value="5fu_1QT" style="font-size:14px; margin: 5px auto; display: block;" <?php if ($_5fu == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC" name="AC"
                                        value="AC_1QT" style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/T</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_1QT"
                                        name="AC_T_1QT" value="AC_T_1QT"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_T_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/TH</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_1QT"
                                        name="AC_TH1QT" value="AC_TH1QT"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_TH1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AT</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AT_1QT"
                                        name="AT_1QT" value="AT_TH1QT"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AT_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Atezolizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Atezolizumab_1QT"
                                        name="Atezolizumab_1QT" value="Atezolizumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Atezolizumab_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Bevacizumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Bevacizumab_1QT"
                                        name="Bevacizumab_1QT" value="Bevacizumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Bevacizumab_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Capecitabina</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Capecitabina_1QT"
                                        name="Capecitabina_1QT" value="Capecitabina"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Capecitabina_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CBP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CBP_1QT"
                                        name="CBP_1QT" value="CBP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($CBP_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ciclofosfamida</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ciclofosfamida_1QT"
                                        name="Ciclofosfamida_1QT" value="Ciclofosfamida"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Ciclofosfamida_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <!--  -->

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Cisplatino</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Cisplatino_1QT"
                                        name="Cisplatino_1QT" value="Cisplatino"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Cisplatino_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CMF</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="CMF_1QT"
                                        name="CMF_1QT" value="CMF"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($CMF_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ctuximab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Ctuximab_1QT"
                                        name="Ctuximab_1QT" value="Ctuximab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Ctuximab_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Docetaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Docetaxel_1QT"
                                        name="Docetaxel_1QT" value="Docetaxel"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Docetaxel_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">EC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="EC_1QT"
                                        name="EC_1QT" value="EC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($EC_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Etopósido</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Etopósido_1QT"
                                        name="Etopósido_1QT" value="Etopósido"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Etopósido_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_1QT"
                                        name="FAC_1QT" value="FAC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($FAC_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FEC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_1QT"
                                        name="FEC_1QT" value="FEC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($FEC_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Herceptin</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_1QT"
                                        name="Herceptin_1QT" value="Herceptin"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Herceptin_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Lapatinib</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_1QT"
                                        name="Lapatinib_1QT" value="Lapatinib"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Lapatinib_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Paclitaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_1QT"
                                        name="Paclitaxel_1QT" value="Paclitaxel"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Paclitaxel_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pembrolixumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pembrolixumab_1QT"
                                        name="Pembrolixumab_1QT" value="Pembrolixumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Pembrolixumab_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pertuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_1QT"
                                        name="Pertuzumab_1QT" value="Pertuzumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Pertuzumab_1QT == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_1QT"
                                        name="TAC_1QT" value="TAC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TAC_1QT == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TC_1QT"
                                        name="TC_1QT" value="TC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TC_1QT == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_1QT"
                                        name="TCH_1QT" value="TCH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TCH_1QT == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCHP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_1QT"
                                        name="TCHP_1QT" value="TCHP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TCHP_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TH_1QT"
                                        name="TH_1QT" value="TH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TH_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">THP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="THP_1QT"
                                        name="THP_1QT" value="THP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($THP_1QT == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Trastuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_1QT"
                                        name="Trastuzumab_1QT" value="Trastuzumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Trastuzumab_1QT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Sin Registro</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_1QT"
                                        name="SinRegistro_1QT" value="Sin Registro"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($SinRegistro_1QT == 'Si') echo "checked"; ?>>
                                </div>

                            </div>

                            <div class="row" id="fechas_1er">

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Inicio QT</strong>
                                    <input type="date" class="control form-control" id="FechaInicio_QTPaliativoz"
                                        name="FechaInicio_QTPaliativoz" style="font-size: 13px;" value="<?php echo $FechaInicio_QTPaliativoz; ?>">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Término QT</strong>
                                    <input type="date" class="control form-control" id="FechaTermino_QTPaliativo"
                                        name="FechaTermino_QTPaliativo" style="font-size: 13px;" value="<?php echo $FechaTermino_QTPaliativo; ?>">
                                </div>

                            </div>

                        </div>



                        <!-- 2 QT Paliativos -->

                        <!-- 2da Línea QT  -->

                        <div class="container" id="2daLinea_QT"> <br>
                            <div class="row">
                                <label for="Palitaivos_2daLINEAQT"
                                    style=" text-align: center; font-size: 14px;"><strong>2da
                                        Línea
                                        QT</strong></label> <br>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">5FU</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="5f_2doQTP"
                                        name="5fu_2doQTP" value="5fu"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($_5fu_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_2doQTP"
                                        name="AC_2doQTP" value="AC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_2doQTP == 'Si') echo "checked"; ?>>
                                </div>


                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/T</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="ACT_2doQTP"
                                        name="ACT_2doQTP" value="AC/T"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_T_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AC/TH</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AC_T_2doQTPV"
                                        name="AC_T_2doQTPV" value="AC_TH1QT"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AC_T_2doQTPV == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">AT</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="AT_2doQTP"
                                        name="AT_2doQTP" value="AT_TH1QT"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($AT_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Atezolizumab</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Atezolizumab_2doQTP"
                                        name="Atezolizumab_2doQTP" value="Atezolizumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Atezolizumab_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Bevacizumab</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Bevacizumab_2doQTP"
                                        name="Bevacizumab_2doQTP" value="Bevacizumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Bevacizumab_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Capecitabina</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Capecitabina_2doQTP"
                                        name="Capecitabina_2doQTP" value="Capecitabina"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Capecitabina_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CBP</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="CBP_2doQTP"
                                        name="CBP_2doQTP" value="CBP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($CBP_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ciclofosfamida</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox"
                                        id="Ciclofosfamida_2doQTP" name="Ciclofosfamida_2doQTP" value="Ciclofosfamida"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Ciclofosfamida_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Cisplatino</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Cisplatino_2doQTP"
                                        name="Cisplatino_2doQTP" value="Cisplatino"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Cisplatino_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">CMF</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="CMF_2doQTP"
                                        name="CMF_2doQTP" value="CMF"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($CMF_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Ctuximab</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Ctuximab_2doQTP"
                                        name="Ctuximab_2doQTP" value="Ctuximab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Ctuximab_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Docetaxel</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Docetaxel_2doQTP"
                                        name="Docetaxel_2doQTP" value="Docetaxel"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Docetaxel_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">EC</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="EC_2doQTP"
                                        name="EC_2doQTP" value="EC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($EC_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Etopósido</span>
                                    <input class="form-check-input ra-checkbox" type="checkbox" id="Etopósido_2doQTP"
                                        name="Etopósido_2doQTP" value="Etopósido"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Etopósido_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FAC_2doQT"
                                        name="FAC_2doQT" value="FAC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($FAC_2doQT == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">FEC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="FEC_2doQTP"
                                        name="FEC_2doQTP" value="FEC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($FEC_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Herceptin</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Herceptin_2doQTP"
                                        name="Herceptin_2doQTP" value="Herceptin"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Herceptin_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Lapatinib</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Lapatinib_2doQTP"
                                        name="Lapatinib_2doQTP" value="Lapatinib"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Lapatinib_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Paclitaxel</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Paclitaxel_2doQTP"
                                        name="Paclitaxel_2doQTP" value="Paclitaxel"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Paclitaxel_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pembrolixumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox"
                                        id="Pembrolixumab_2doQTP" name="Pembrolixumab_2doQTP" value="Pembrolixumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Pembrolixumab_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Pertuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Pertuzumab_2doQTP"
                                        name="Pertuzumab_2doQTP" value="Pertuzumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Pertuzumab_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TAC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TAC_2doQTP"
                                        name="TAC_2doQTP" value="TAC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TAC_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TC</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TC_2doQTP"
                                        name="TC_2doQTP" value="TC"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TC_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCH_2doQTP"
                                        name="TCH_2doQTP" value="TCH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TCH_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TCHP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TCHP_2doQTP"
                                        name="TCHP_2doQTP" value="TCHP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TCHP_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">TH</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="TH_2doQTP"
                                        name="TH_2doQTP" value="TH"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($TH_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">THP</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="THP_2doQTP"
                                        name="THP_2doQTP" value="THP"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($THP_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Trastuzumab</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="Trastuzumab_2doQTP"
                                        name="Trastuzumab_2doQTP" value="Trastuzumab"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($Trastuzumab_2doQTP == 'Si') echo "checked"; ?>>
                                </div>

                                <div class="col-md-2" style="text-align: center;">
                                    <span style="font-size: 13px; display: block;">Sin Registro</span>
                                    <input type="checkbox" class="form-check-input ra-checkbox" id="SinRegistro_2doQTP"
                                        name="SinRegistro_2doQTP" value="Sin Registro"
                                        style="font-size:14px; margin: 5px auto; display: block;" <?php if ($SinRegistro_2doQTP == 'Si') echo "checked"; ?>>
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Inicio QT</strong>
                                    <input type="date" class="control form-control" id="FechaInicio_QT2Paliativo"
                                        name="FechaInicio_QT2Paliativo" style="font-size: 13px;" value="<?php echo $FechaInicio_QT2Paliativo; ?>">
                                </div>

                                <div class="col-md-6">
                                    <strong style="font-size: 13px;">Fecha Término QT</strong>
                                    <input type="date" class="control form-control" id="FechaTermino_QTP2aliativo"
                                        name="FechaTermino_QTP2aliativo" style="font-size: 13px;" value="<?php echo $FechaTermino_QTP2aliativo; ?>">
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
                                <option value="Sin registro"<?php if ($Hormoterapia == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
                                <option value="Si"<?php if ($Hormoterapia == 'Si') echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($Hormoterapia == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>



                        <div class="col-md-6" id="Tipo_hormono">
                            <strong style="font-size: 13px;">Tipo Hormonoterapia</strong>
                            <select name="Hormonoterapia_QT" id="Hormonoterapia_QT" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Hormonoterapia_QT == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Anastrozol"<?php if ($Hormonoterapia_QT == 'Anastrozol') echo 'selected'; ?>>Anastrozol</option>
                                <option value="Exemetastino"<?php if ($Hormonoterapia_QT == 'Exemetastino') echo 'selected'; ?>>Exemetastino</option>
                                <option value="Letrazol"<?php if ($Hormonoterapia_QT == 'Letrazol') echo 'selected'; ?>>Letrazol</option>
                                <option value="Tamoxifeno"<?php if ($Hormonoterapia_QT == 'Tamoxifeno') echo 'selected'; ?>>Tamoxifeno</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="hormo_moment">
                            <strong style="font-size: 13px;">Momento Hormonoterapia</strong>
                            <select name="Momento_Hormonoterapia" id="Momento_Hormonoterapia" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Momento_Hormonoterapia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Adyuvante"<?php if ($Momento_Hormonoterapia == 'Adyuvante') echo 'selected'; ?>>Adyuvante</option>
                                <option value="Neoadyuvante"<?php if ($Momento_Hormonoterapia == 'Neoadyuvante') echo 'selected'; ?>>Neoadyuvante</option>
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
                                <option value="Sin Registro"<?php if ($HER_2 == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Si"<?php if ($HER_2 == 'Si') echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($HER_2 == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Esquema_her2">
                            <strong style="font-size: 13px;">Esquema HER2 +++</strong>
                            <select name="Esquema_HER" id="Esquema_HER" class="form-select" style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Esquema_HER == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Trastuzumab/Emtansina"<?php if ($Esquema_HER == 'Trastuzumab/Emtansina') echo 'selected'; ?>>Trastuzumab/Emtansina</option>
                                <option value="Trastuzumab/Pertuzumab"<?php if ($Esquema_HER == 'Trastuzumab/Pertuzumab') echo 'selected'; ?>>Trastuzumab/Pertuzumab</option>
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
                            <select name="triple_negativo" id="triple_negativo" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($triple_negativo == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Si"<?php if ($triple_negativo == 'Si') echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($triple_negativo == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="esquema_triple">
                            <strong style="font-size: 13px;">Esquema Triple Negativo</strong>
                            <select name="EsquemaTriple_negativo" id="EsquemaTriple_negativo" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($EsquemaTriple_negativo == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Atezolizumab"<?php if ($EsquemaTriple_negativo == 'Atezolizumab') echo 'selected'; ?>>Atezolizumab</option>
                                <option value="Olaparib"<?php if ($EsquemaTriple_negativo == 'Olaparib') echo 'selected'; ?>>Olaparib</option>
                                <option value="Pembrolizumab"<?php if ($EsquemaTriple_negativo == 'Pembrolizumab') echo 'selected'; ?>>Pembrolizumab</option>
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
                            <select name="Hormosensible" id="Hormosensible" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Hormosensible == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Si"<?php if ($Hormosensible == 'Si') echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($Hormosensible == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="Inhibidores">
                            <strong style="font-size: 13px;">Inhibidores Ciclinas</strong>
                            <select name="Inhibidores_Ciclinas" id="Inhibidores_Ciclinas" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Inhibidores_Ciclinas == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Abemaciclib"<?php if ($Inhibidores_Ciclinas == 'Abemaciclib') echo 'selected'; ?>>Abemaciclib</option>
                                <option value="Palbociclib"<?php if ($Inhibidores_Ciclinas == 'Palbociclib') echo 'selected'; ?>>Palbociclib</option>
                                <option value="Ribociclib"<?php if ($Inhibidores_Ciclinas == 'Ribociclib') echo 'selected'; ?>>Ribociclib</option>
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
                            <select name="Tipo_Tratamiento" id="Tipo_Tratamiento" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Tipo_Tratamiento == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Adyuvante"<?php if ($Tipo_Tratamiento == 'Adyuvante') echo 'selected'; ?>>Adyuvante</option>
                                <option value="Neoadyuvante"<?php if ($Tipo_Tratamiento == 'Neoadyuvante') echo 'selected'; ?>>Neoadyuvante</option>
                                <option value="Paliativo"<?php if ($Tipo_Tratamiento == 'Paliativo') echo 'selected'; ?>>Paliativo</option>
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
                            <select name="Completo_Quimio" id="Completo_Quimio" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Completo_Quimio == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Si"<?php if ($Completo_Quimio == 'Si') echo 'selected'; ?>>Si</option>
                                <option value="No"<?php if ($Completo_Quimio == 'No') echo 'selected'; ?>>No</option>
                            </select>
                        </div>


                        <div class="col-md-6" id="Causa_incompleta">
                            <strong style="font-size: 13px;">Causa QT Incompleta </strong>
                            <select name="CausaQT_Incompleta" id="CausaQT_Incompleta" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($CausaQT_Incompleta == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Abadono del Paciente"<?php if ($CausaQT_Incompleta == 'Abadono del Paciente') echo 'selected'; ?>>Abadono del Paciente</option>
                                <option value="Evento Adverso"<?php if ($CausaQT_Incompleta == 'Evento Adverso') echo 'selected'; ?>>Evento Adverso</option>
                                <option value="Progresión de la Enfermedad"<?php if ($CausaQT_Incompleta == 'Progresión de la Enfermedad') echo 'selected'; ?>>Progresión de la Enfermedad</option>
                                <option value="Recurrencia de la Enfermedad"<?php if ($CausaQT_Incompleta == 'Recurrencia de la Enfermedad') echo 'selected'; ?>>Recurrencia de la Enfermedad</option>
                                <option value="Fallecio"<?php if ($CausaQT_Incompleta == 'Fallecio') echo 'selected'; ?>>Falleció</option>
                            </select>
                        </div>

                        <div class="col-md-6" id="quimio_fecha">
                            <strong style="font-size: 13px; ">Fecha</strong>
                            <input id="fecha_quimio" name="fecha_quimio" type="date" class="control form-control"
                                style="font-size: 13px;" value="<?php echo $fecha_quimio; ?>">
                        </div>

                        <div class="col-md-6" id="quimio_fechaQT">
                            <strong style="font-size: 13px; ">Fecha Falleció QT</strong>
                            <input id="fecha_fallecio" name="fecha_fallecio" type="date" class="control form-control"
                                style="font-size: 13px;" value="<?php echo $fecha_fallecio; ?>">
                        </div>


                        <div class="col-md-6" id="Causa_Fallecio">
                            <strong style="font-size: 13px;">Causa Falleció QT</strong>
                            <select name="Fallecio_causa" id="Fallecio_causa" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Fallecio_causa == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Evento Adverso"<?php if ($Fallecio_causa == 'Evento Adverso') echo 'selected'; ?>>Evento Adverso</option>
                                <option value="Oncológica"<?php if ($Fallecio_causa == 'Oncológica') echo 'selected'; ?>>Oncológica</option>
                                <option value="Otro"<?php if ($Fallecio_causa == 'Otro') echo 'selected'; ?>>Otro</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="quimio_otra">
                            <strong style="font-size: 13px; ">Especifique Otra</strong>
                            <input id="otra_causa" name="otra_causa" type="text" class="control form-control"
                                style="font-size: 13px;" value="<?php echo $otra_causa; ?>">
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
                        <option value="Sin Registro"<?php if ($Radioterapia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                        <option value="Si"<?php if ($Radioterapia == 'Si') echo 'selected'; ?>>Si</option>
                        <option value="No"<?php if ($Radioterapia == 'No') echo 'selected'; ?>>No</option>
                    </select>
                </div>

                <!-- RADIOTERAPIA CAUSAS -->
                <div class="container" id="SI_Radioterapia">
                    <div class="row">

                        <div class="col-md-4" id="Causa_Fallecio">
                            <strong style="font-size: 13px;">Tipo Radioterapia</strong>
                            <select name="Tipo_radioterapia" id="Tipo_radioterapia" class="form-select"
                                style="font-size: 13px;">
                                <option value="Sin Registro"<?php if ($Tipo_radioterapia == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                <option value="Ciclo Mamario Completo"<?php if ($Tipo_radioterapia == 'Ciclo Mamario Completo') echo 'selected'; ?>>Ciclo Mamario Completo</option>
                                <option value="Tangencial"<?php if ($Tipo_radioterapia == 'Tangencial') echo 'selected'; ?>>Tangencial</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px; ">Fecha Inicio</strong>
                            <input id="fecha_radioterapia" name="fecha_radioterapia" type="date"
                                class="control form-control" style="font-size: 13px;" value="<?php echo $fecha_radioterapia; ?>">
                        </div>

                        <div class="col-md-4">
                            <strong style="font-size: 13px; ">Número Sesiones</strong>
                            <input id="numero_radio" name="numero_radio" type="number" class="control form-control"
                                style="font-size: 13px;" value="<?php echo $numero_radio; ?>">
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
                            <option value="Sin Registro"<?php if ($Defuncion == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                            <option value="Si"<?php if ($Defuncion == 'Si') echo 'selected'; ?>>Si</option>
                            <option value="No"<?php if ($Defuncion == 'No') echo 'selected'; ?>>No</option>
                        </select>
                    </div>

                    <div class="container" id="fecha_causaDefuncion">
                        <div class="row">

                            <div class="col-md-6">
                                <strong style="font-size: 13px; ">Fecha Defunción</strong>
                                <input id="fecha_Defuncion" name="fecha_Defuncion" type="date"
                                    class="control form-control" style="font-size: 13px;" value="<?php echo $fecha_Defuncion; ?>">
                            </div>

                            <div class="col-md-6">
                                <strong style="font-size: 13px;">Causa </strong>
                                <select name="causa_defuncion" id="causa_defuncion" class="form-select"
                                    style="font-size: 13px;">
                                    <option value="Sin Registro"<?php if ($causa_defuncion == 'Sin Registro') echo 'selected'; ?>>Sin Registro</option>
                                    <option value="NO Oncológica"<?php if ($causa_defuncion == 'NO Oncológica') echo 'selected'; ?>>NO Oncológica</option>
                                    <option value="Oncológica"<?php if ($causa_defuncion == 'Oncológica') echo 'selected'; ?>>Oncológica</option>
                                </select>
                            </div>

                        </div>

                    </div>
                </div>


            </div> <!-- DIV ROW LINEA 11 -->


            <div class="footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>



    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>



</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="module">
    import { editForm } from "./js/update.js";
    editForm();
</script>


</html>