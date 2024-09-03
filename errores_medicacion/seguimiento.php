<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar-Seguimiento</title>
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

        <h5>Errores de Medicación</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

    <div class="container">
        <fieldset>
            <legend>
                <div class="row">


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(242, 77, 19);
                            color: aliceblue;
                            margin-top:20px;
                            font-size: 18px;
                            text-align: center;">Seguimiento</h4>
                    </div>


                    <div class="container">
                        <fieldset>
                            <legend>

                                <div class="row">


                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Estrategias De Prevención</strong>
                                        <select name="estrategia_preve" id="estrategia_preve" class="form-select" style="font-size: 12px;">
                                            <option value="Seleccione">Seleccione</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Fecha del Seguimiento</strong>
                                        <input id="fecha_seg" name="fecha_seg" type="date" class="control form-control"
                                            value="" style="font-size: 12px;">
                                    </div>


                                    <div class="container" id="descri_prevencion" style="display:none;">
                                        <div class="row">



                                            <div class="col-md-12">
                                                <strong style="font-size: 12px;">Descripción</strong>
                                                <textarea id="prevencion_investigacion" name="prevencion_investigacion" type="text" class="control form-control" value=""
                                                    style="font-size: 12px;"
                                                    placeholder="Describa"></textarea>
                                            </div>


                                            <div class="col-md-6">
                                                <strong style="font-size: 12px;">Evidencia De la Prevención</strong>
                                                <select name="evidencia_prevencion" id="evidencia_prevencion" class="form-select" style="font-size: 12px;">
                                                    <option value="Seleccione">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6" id="evi_prev" style="display:none;">
                                                <label for="file" class="form-label" style="font-size: 12px; font-weight: bold;">Selecciona un archivo PDF:</label>
                                                <input type="file" name="file" id="file" class="form-control" accept=".pdf" required>
                                                <!-- <button type="submit" class="btn btn-primary mt-3" style="font-size: 12px; width: 100%;">Subir Archivo</button> -->
                                            </div>
                                        </div>

                                    </div>



                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Fecha de Implementación</strong>
                                        <input id="fecha_implementacionSEG" name="fecha_implementacionSEG" type="date" class="control form-control" value=""
                                            style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-6">
                                        <strong style="font-size: 12px;">Fecha de Evaluación</strong>
                                        <input id="fecha_evaluacionSEG" name="fecha_evaluacionSEG" type="date" class="control form-control" value=""
                                            style="font-size: 12px;">
                                    </div>

                                    <div class="col-md-12">
                                        <strong style="font-size: 12px;">Resultado de la Evaluación</strong>
                                        <input id="resultado_evaluacionSEG" name="resultado_evaluacionSEG" type="text" class="control form-control" value=""
                                            style="font-size: 12px;">
                                    </div>
                                    <div class="row">

                                        
                                        <div class="col-md-3">
                                            <strong style="font-size: 12px;">Nombre del Encargado de Enfermeria </strong>
                                            <input id="nombre_enfermeriaSEG" name="nombre_enfermeriaSEG" type="text" class="control form-control"
                                                value="" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-3">
                                            <strong style="font-size: 12px;">Nombre del Encargado de Área Médica</strong>
                                            <input id="nombre_medicoSEG" name="nombre_medicoSEG" type="text" class="control form-control"
                                                value="" style="font-size: 12px;">
                                        </div>

                                        <div class="col-md-3">
                                            <strong style="font-size: 12px;">Nombre del Encargado CISFA</strong>
                                            <input id="nombre_cisfaSEG" name="nombre_cisfaSEG" type="text" class="control form-control"
                                                value="" style="font-size: 12px;">
                                        </div>


                                        <div class="col-md-3">
                                            <strong style="font-size: 12px;">Nombre del Personal que Elabora</strong>
                                            <input id="nombre_personallaboraSEG" name="nombre_personallaboraSEG" type="text" class="control form-control"
                                                value="" style="font-size: 12px;">
                                        </div>


                                    </div>



                                    <!-- CIERRE DE SEGUIMIENTO -->
                                </div>
                            </legend>
                        </fieldset>


                    </div>

                    <!-- CIERRE DE SEGUIMIENTO -->
                </div>
            </legend>
        </fieldset>
        <br>
        <div style="display: flex; justify-content: flex-end; align-items: center;">
            <button type="submit" class="btn btn-primary" style="font-size: 14px; padding: 6px 14px;">Guardar Seguimiento</button>
        </div> <br>
    </div>


    </div>
















    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/scripteditar.js"></script>



</body>

</html>