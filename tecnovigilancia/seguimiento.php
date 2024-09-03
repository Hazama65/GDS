<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">

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
        <!-- ======================== AQUI INICIA  ======================== -->
        <h5>Seguimiento</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="container">

        <fieldset>
            <legend>


                <div class="form-header">
                    <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">CISP</h4>
                </div>



                <div class="row">

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Nombre del Dispositivo Médico</strong>
                        <input type="text" class="control form-control" id="Nombre_dispositivo" name="Nombre_dispositivo" value="" style="font-size: 12px;">
                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Clave del HRAEI</strong>
                        <input id="ClaveHRAEI" name="ClaveHRAEI" placeholder="HRAEI/UTP/00000/2024" type="text"
                            class="control form-control" value="" style="font-size: 12px;" disabled>
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">No.Lote</strong>
                        <input type="text" class="control form-control" id="no_lote" name="no_lote" value="" style="font-size: 12px;">
                    </div>


                    <div class="col-md-2">
                        <strong style="font-size: 12px;">No.Serie</strong>
                        <input type="text" class="control form-control" id="no_serie" name="no_serie" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Registro Sanitario</strong>
                        <input type="text" class="control form-control" id="registro_sanitario" name="registro_sanitario" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">No.Inventario</strong>
                        <input type="text" class="control form-control" id="no_inventario" name="no_inventario" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Marca</strong>
                        <input type="text" class="control form-control" id="marca" name="marca" value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-2">
                        <strong style="font-size: 12px;">Fecha de Caducidad</strong>
                        <input type="date" class="control form-control" id="fecha_caducidad" name="fecha_caducidad" value="" style="font-size: 12px;">
                    </div>


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178,0.5);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Clasificación del Incidente</h4>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Alertas Cofepris</strong>
                        <select name="alerta_cofrepris" id="alerta_cofrepris" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Equipo Médico </strong>
                        <select name="equipo_medico" id="equipo_medico" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Agentes Del Diagnostico">Agentes Del DiagnosticoAgentes Del Diagnostico</option>
                            <option value="Equipo Medico">Equipo MedicoEquipo Medico</option>
                            <option value="Prótesis, Ortesis Y Ayudas Funcionales">Prótesis, Ortesis Y Ayudas FuncionalesPrótesis, Ortesis Y Ayudas Funcionales</option>
                            <option value="Insumos De Uso Odontológico">Insumos De Uso OdontológicoInsumos De Uso Odontológico</option>
                            <option value="Materiales Quirúrgicos Y De Curación ">Materiales Quirúrgicos Y De Curación Materiales Quirúrgicos Y De Curación </option>
                            <option value="Productos Higiénicos">Productos HigiénicosProductos Higiénicos</option>
                        </select>
                    </div>


                    <div class="col-md-4" id="invasivo_noinvasivo">
                        <strong style="font-size: 12px;">Tipo Invasivo/No Invasivo</strong>
                        <select name="tipo_medic" id="tipo_medic" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Invasivo">Invasivo</option>
                            <option value="No Invasivo">No Invasivo</option>
                        </select>
                    </div>


                    <div class="col-md-4">
                        <strong style="font-size: 12px;">Nivel de Riesgo Sanitario</strong>
                        <select name="Nivel_riesgoSanitario" id="Nivel_riesgoSanitario" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="CLASE I">"CLASE I.Insumos conocidos, seguridad y eficacia comprobada, no se introducen en el organismo"</option>
                            <option value="CLASE II">"CLASE II.Insumos conocidos, pueden tener variaciones en el material con el que están elaborados o en su concentración, introducción al organismo -30 días."</option>
                            <option value="CLASE III">"CLASE III.Insumos nuevos o recientemente aceptados, se introducen al organismo y permanecen +30 días"</option>
                        </select>
                    </div>


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 174,0.4);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Reglas de Clasificación</h4>
                    </div>


                    <div class="form-header">
                        <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 174,0.4);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Factores del Incidente</h4>
                    </div>

                    <div class="col-md-12 row">

                        <div class="col-md-2">

                        </div>

                        <div class="col-md-3">
                            <input type="checkbox" name="factor_dispositivo" id="factor_dispositivo" value="Factores de Dispositivo" style="font-size:12px;">
                            <label for="factor_dispositivo" style="font-size:12px;">Factores de Dispositivo</label>
                        </div>

                        <div class="col-md-3">
                            <input type="checkbox" name="error_usuario" id="error_usuario" value="Error del Usuario" style="font-size: 12px;">
                            <label for="error_usuario" style="font-size: 12px;">Error del Usuario</label>
                        </div>

                        <div class="col-md-3">
                            <input type="checkbox" name="error_externo" id="error_externo" value="Errores Externos" style="font-size: 12px;">
                            <label for="error_externo" style="font-size: 12px;">Errores Externos</label>
                        </div>


                    </div>

                    <!-- Factores de Dispositivo  -->

                    <div class="col-md-6" id="factores">

                        <fieldset>
                            <legend>

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                                    border-radius: 10px;
                                                    background-color: rgb(121, 173, 220);
                                                    color: aliceblue;
                                                    margin-top:12px;
                                                    font-size: 12px;
                                                    text-align: center;">Factores de Dispositivo</h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="error_armado" id="error_armado" value="Error De Armado" style="font-size:12px;">
                                        <label for="error_armado" style="font-size:12px;">Error De Armado</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="error_etiquetado" id="error_etiquetado" value="Error De Etiquetado" style="font-size: 12px;">
                                        <label for="error_etiquetado" style="font-size: 12px;">Error De Etiquetado</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="falla_dispositivo" id="falla_dispositivo" value="Falla Del Dispositivo" style="font-size: 12px;">
                                        <label for="falla_dispositivo" style="font-size: 12px;">Falla Del Dispositivo</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="inadecuado_mantenimiento" id="inadecuado_mantenimiento" value="Inadecuado Mantenimiento" style="font-size: 12px;">
                                        <label for="inadecuado_mantenimiento" style="font-size: 12px;">Inadecuado Mantenimiento</label>
                                    </div>

                                </div>

                            </legend>
                        </fieldset>
                    </div>


                    <!-- ERROR DEL USUARIO -->


                    <div class="col-md-6" id="factores">

                        <fieldset>
                            <legend>

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(121, 173, 220);
                            color: aliceblue;
                            margin-top:12px;
                            font-size: 12px;
                            text-align: center;">Errores de Usuario</h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="fallas_pruebasInspeccion" id="fallas_pruebasInspeccion" value="Fallas En Pruebas De Inspección Previo Uso" style="font-size:12px;">
                                        <label for="fallas_pruebasInspeccion" style="font-size:12px;">Fallas En Pruebas De Inspección Previo Uso</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="programacion_incorrecta" id="programacion_incorrecta" value="Programación Incorrecta" style="font-size: 12px;">
                                        <label for="programacion_incorrecta" style="font-size: 12px;">Programación Incorrecta</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="conxion_erradas" id="conxion_erradas" value="Conexiones Erradas" style="font-size: 12px;">
                                        <label for="conxion_erradas" style="font-size: 12px;">Conexiones Erradas</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="dispositivos_malensamblados" id="dispositivos_malensamblados" value="Dispositivo Mal Ensamblado" style="font-size: 12px;">
                                        <label for="dispositivos_malensamblados" style="font-size: 12px;">Dispositivo Mal Ensamblado</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="no_lectura_etiquetado" id="no_lectura_etiquetado" value="No Lectura De Etiquetado " style="font-size: 12px;">
                                        <label for="no_lectura_etiquetado" style="font-size: 12px;">No Lectura De Etiquetado </label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="no_lecturadeInstrucciones" id="no_lecturadeInstrucciones" value="No Lectura De Instrucciones" style="font-size: 12px;">
                                        <label for="no_lecturadeInstrucciones" style="font-size: 12px;">No Lectura De Instrucciones</label>
                                    </div>




                                </div>

                            </legend>
                        </fieldset>
                    </div>


                    <!-- ERRORES EXTERNOS -->
                    <div class="col-md-6" id="factores">

                        <fieldset>
                            <legend>

                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left;
                                        border-radius: 10px;
                                        background-color: rgb(121, 173, 220);
                                        color: aliceblue;
                                        margin-top:12px;
                                        font-size: 12px;
                                        text-align: center;">Erores Exteros</h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="checkbox" name="falla_suministroelectrico" id="falla_suministroelectrico" value="Falla Suministro Eléctrico" style="font-size:12px;">
                                        <label for="falla_suministroelectrico" style="font-size:12px;">Falla Suministro Eléctrico</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="interferencia" id="interferencia" value="Interferencias Electromagnéticas" style="font-size: 12px;">
                                        <label for="interferencia" style="font-size: 12px;">Interferencias Electromagnéticas</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="falla_dispositivo_errorExterno" id="falla_dispositivo_errorExterno" value="Medio Ambientales" style="font-size: 12px;">
                                        <label for="falla_dispositivo_errorExterno" style="font-size: 12px;">Medio Ambientales</label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="inadecuado_mantenimiento_errorExterno" id="inadecuado_mantenimiento_errorExterno" value="Inadecuado Mantenimiento" style="font-size: 12px;">
                                        <label for="inadecuado_mantenimiento_errorExterno" style="font-size: 12px;">Inadecuado Mantenimiento</label>
                                    </div>

                                </div>




                            </legend>
                        </fieldset>


                    </div>


                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Evitabilidad</strong>
                        <select name="Evitabilidad" id="Evitabilidad" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>




                    <!-- <div class="col-md-3">
                        <strong style="font-size: 12px;">Problema</strong>
                        <input type="text" class="control form-control" id="problema" name="problema" value="" style="font-size: 12px;">
                    </div>
                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Validación Del Evento</strong>
                        <select name="validacionevento" id="validacionevento" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Incidente">Incidente</option>
                            <option value="Incidente Adverso">Incidente Adverso</option>
                            <option value="Incidente Adverso Previsto">Incidente Adverso Previsto</option>
                            <option value="Incidente Adverso Imprevisto">Incidente Adverso Imprevisto</option>
                        </select>
                    </div> -->

                </div>
            </legend>
        </fieldset>
    </div>


    <div class="container">
        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Validación del Evento</h4>
        </div>

        <fieldset>

            <legend>


                <div class="row">
                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Validación del Evento</strong>
                        <select name="Validacion_evento" id="Validacion_evento" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Incidente">Incidente</option>
                            <option value="Incidente Adverso">Incidente Adverso</option>
                            <option value="Incidente Adverso Previsto">Incidente Adverso Previsto</option>
                            <option value="Incidente Adverso Imprevisto">Incidente Adverso Imprevisto</option>
                        </select>
                    </div>
 
                    <div class="col-md-6">
                        <strong style="font-size: 12px;">No.Reporte</strong>
                        <input id="no_reporte" name="no_reporte" placeholder="HRAEI/UTV/0000/2024" type="text"
                            class="control form-control" value="" style="font-size: 12px;">
                    </div>


                </div>
            </legend>
        </fieldset>
    </div>



    <div class="container">
        <div class="form-header">
            <h4 class="form-title" style="text-align: left;
                            border-radius: 10px;
                            background-color: rgb(118, 145, 178);
                            color: aliceblue;
                            margin-top:15px;
                            font-size: 15px;
                            text-align: center;">Gestión</h4>
        </div>

        <fieldset>

            <legend>


                <div class="row">

                    <div class="col-md-3">
                        <strong style="font-size: 12px;">Acciones Correctivas</strong>
                        <select name="acciones_correctivas" id="acciones_correctivas" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <strong style="font-size: 12px;">Acciones Preventivo</strong>
                        <select name="acciones_preventivas" id="acciones_preventivas" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-3" id="evidencia_estatus">
                        <strong style="font-size: 12px;">Evidencia</strong>
                        <select name="evidencia" id="evidencia" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>


                    
                    <div class="col-md-3">
                        <strong style="font-size: 12px;">AMEF</strong>
                        <select name="AMEF" id="AMEF" class="form-select" style="font-size: 12px;">
                            <option value="">Seleccione</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>



                    <div class="col-md-12">
                            <strong style="font-size: 12px;">Estatus</strong>
                            <select id="estatus" name="estatus" class="form-select" style="font-size: 12px;">
                                <option value="Seleccione">Seleccione</option>
                                <option value="Solo Detectado">Solo Detectado</option>
                                <option value="No hay respuesta">No hay respuesta</option>
                                <option value="Respuesta">Respuesta</option>
                                <option value="Seguimiento">Seguimiento</option>
                                <option value="Cerrado Caso">Cerrado Caso</option>
                            </select>
                        </div>





                </div>
            </legend>
        </fieldset>
    </div>

    <br>
    <br>




    </div>

</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptseguimiento.js"></script>
<script type="module">
    import {
        seguimientoForm
    } from "./js/seguimiento.js";
    seguimientoForm();
</script>

</html>