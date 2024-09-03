<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap 5.3.3 JS (con Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Incluye la biblioteca jsPDF versión 1.5.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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


        <h5>Editar Registro Notificación de Eventos</h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>
    <div class="container">
        <fieldset class="fieldset-otros">

            <legend>

                <div class="row">


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                border-radius: 14px;
                background-color: rgb(129, 99, 139);
                color: aliceblue;
                margin-top: 16px;
                font-size: 16px;
                text-align: center;">Registro Medicamento</h4>
                    </div>

                    <fieldset class="fieldset-otros">
                        <legend>

                            <div class="row">

                                <div class="col-md-6">
                                    <strong style="font-size: 12px;">Tipo de Clave</strong>
                                    <select name="Tipo_clave" id="Tipo_clave" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="HRAEI">HRAEI</option>
                                        <option value="GC">GC</option>
                                        <option value="SADMI">SADMI</option>
                                        <option value="CENAPRECE">CENAPRECE</option>
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <strong style="font-size:12px;">Clave</strong>
                                    <div class="input-group">
                                        <input id="clave_HRAEI" name="clave_HRAEI" type="text" class="control form-control" style="font-size:12px;" readonly>
                                        <input id="numero_clave_HRAEI" name="numero_clave_HRAEI" type="number" class="control form-control" placeholder="Núm." style="width: 60px; font-size:12px;">
                                    </div>
                                </div>

                                <div class="row"></div> <br>

                                <div class="col-md-12">
                                    <label for="respuestadescrip" style="font-size: 12px; font-weight: bold;">Descripción</label>
                                    <textarea name="corto_descrip" id="corto_descrip" class="form-control" style="font-size: 12px;"></textarea>
                                </div>

                                <div class="row"></div> <br>


                                <div class="col-md-4">
                                    <strong style="font-size:12px;">Existencia</strong>
                                    <div class="input-group">
                                        <input id="fecha_existencia" name="fecha_existencia" type="date" class="control form-control" style="font-size:12px;" readonly>
                                        <input id="num_existencia" name="num_existencia" type="number" class="control form-control" placeholder="Núm." style="width: 60px; font-size:12px;">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <strong style="font-size:12px;">CPM </strong>
                                    <div class="input-group">
                                        <strong style="font-size:10px;">Periodo-Inicio: </strong> <br>
                                        <input class="form-control" type="date" name="fecha_primer" id="fecha_primer" style="font-size:12px;">
                                        <strong style="font-size:10px;">.Periodo-Final: </strong>
                                        <input class="form-control" type="date" name="fecha_segundo" id="fecha_segundo" style="font-size:12px;">
                                        <input id="num_cpm" name="num_cpm" type="number" class="control form-control" placeholder="Núm." style="width: 60px; font-size:12px;">
                                    </div>
                                </div>
                                <br> <br><br>



                                <div class="col-md-4">
                                    <strong style="font-size:12px;">Meses de Existencia</strong>
                                    <input id="Meses_existencia" name="Meses_existencia" type="number" class="control form-control" style="font-size:12px;" readonly>
                                </div>




                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Observación</strong>
                                    <select name="observacion" id="observacion" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="CRITICA">CRITICA</option>
                                        <option value="NO UTILIZADA">NO UTILIZADA</option>
                                        <option value="ONCOLOGICA">ONCOLOGICA</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <strong style="font-size: 12px;">Estatus</strong>
                                    <select name="Estatus" id="Estatus" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="CATALOGO ACTIVO">CATALOGO ACTIVO</option>
                                        <option value="NO UTILIZADA">NO UTILIZADA</option>
                                    </select>
                                </div>


                            </div>

                        </legend>
                    </fieldset>





                </div><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Editar</button>
                </div>
    </div>
    </legend>
    </fieldset>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/scripteditar.js"></script>


</body>

</html>