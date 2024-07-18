<?php
include('php/controllers/edit.controller.php');
?>
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
        <!-- ======================== AQUI INICIA  ======================== -->
        <h5>Seguimiento</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ======================== DATOS GENERALES   ======================== -->
    <div class="container"><!-- ======Primer container===== -->
        <form id="seguimiento_gc" method="POST" autocomplete="off">
            <div class="row"><!-- ======Primer row===== -->

                <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

                <div class="col-md-6">
                    <strong style="font-size:14px;">Nombre Paciente</strong>
                    <input id="nombre_paciente" name="nombre_paciente_seg" type="text" class="control form-control" placeholder="Nombre(s) Apellidos" style="font-size:14px;" value="<?php echo $nombre_paciente; ?>">
                </div>

                <div class="col-md-6">
                    <strong style="font-size:14px;">Fecha de Seguimiento</strong>
                    <input id="seguimiento_seg" name="seguimiento_seg" type="date" class="control form-control" style="font-size:14px;">
                </div>

            </div><!-- ======Primer row===== -->

            <!--===========ATENCIÓN CLÍNICA ================-->

            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 20px;">
                <h6>Atención Clínica</h6>
            </div>

            <div class="row">

                <div class="col-md-4" id="tiempo_evolucion">
                    <strong style="font-size:14px;">Tiempo de Evolución</strong>
                    <input type="number" step="any" class="form-control" id="evolucion_ganglio_seg" name="evolucion_ganglio_seg" style="font-size: 14px;">
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size:14px;">Período Evolución</strong>
                    <select name="periodo_ganglio_seg" id="periodo_ganglio_seg" class="form-control" style="font-size:14px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Días">Días</option>
                        <option value="Semanas">Semanas</option>
                        <option value="Mes">Mes</option>
                        <option value="Años">Años</option>
                    </select>
                </div>

                <div class="col-md-4" id="tamaño_ganglio_seg">
                    <strong style="font-size:14px;">Tamaño del Ganglio</strong>
                    <input type="number" step="any" class="form-control" id="Ganglio_tama_seg" name="Ganglio_tama_seg" style="font-size: 14px;">
                    </select>
                </div>

            </div><!--===========ROW ATENCIÓN CLÍNICA ================-->


            <!--===========CARACTERISTICAS ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                <h6>Caracteristicas</h6>
            </div>

            <div class="container ">
                <fieldset>
                    <legend>
                        <div class="row">

                            <div class="col-md-3">
                                <input type="checkbox" name="Doloroso_seg" id="Doloroso_seg" value="Si" style="font-size:14px;">
                                <label for="Doloroso_seg" style="font-size:14px;">Doloroso</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="No_doloroso_seg" id="No_doloroso_seg" value="Si" style="font-size:14px;">
                                <label for="No_doloroso_seg" style="font-size: 14px;">No Doloroso</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="Indurado_seg" id="Indurado_seg" value="Si" style="font-size:14px;">
                                <label for="Indurado_seg" style="font-size: 14px;">Indurado</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="No_Indurado_seg" id="No_Indurado_seg" value="Si" style="font-size:14px;">
                                <label for="No_Indurado_seg" style="font-size: 14px">No Indurado</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="Fijo_seg" id="Fijo_seg" value="Si" style="font-size: 14px;">
                                <label for="Fijo_seg" style="font-size: 14px;">Fijo</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="Movil_seg" id="Movil_seg" value="Si" style="font-size: 14px;">
                                <label for="Movil_seg" style="font-size: 14px;">Movíl</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="Eritematoso_seg" id="Eritematoso_seg" value="Si" style="font-size: 14px;">
                                <label for="Eritematoso_seg" style="font-size: 14px;">Eritematoso</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="Hipertermico_seg" id="Hipertermico_seg" value="Si" style="font-size: 14px;">
                                <label for="Hipertermico_seg" style="font-size: 14px;">Hipertermico</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="con_secrecion_seg" id="con_secrecion_seg" value="Si" style="font-size: 14px;">
                                <label for="con_secrecion_seg" style="font-size: 14px;">Con Secreción</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="sin_secrecion_seg" id="sin_secrecion_seg" value="Si" style="font-size: 14px;">
                                <label for="sin_secrecion_seg" style="font-size: 14px;">Sin Secreción</label>
                            </div>


        






                            <div class="col-md-3">
                                <input type="checkbox" name="bien_delimitado_seg" id="bien_delimitado_seg" value="Si" style="font-size: 14px;">
                                <label for="bien_delimitado_seg" style="font-size: 14px;">Bien Delimitado</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="mal_delimitado_seg" id="mal_delimitado_seg" value="Si" style="font-size: 14px;">
                                <label for="mal_delimitado_seg" style="font-size: 14px;">Mal Delimitado</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="cambios_coloracion_seg" id="cambios_coloracion_seg" value="Si" style="font-size: 14px;">
                                <label for="cambios_coloracion_seg" style="font-size: 14px;">Cambios de Coloración</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="sin_cambios_seg" id="sin_cambios_seg" value="Si" style="font-size:14px;">
                                <label for="sin_cambios_seg" style="font-size: 14px;">Sin Cambios de Coloración</label>
                            </div>



                        </div>
                    </legend>
                </fieldset>
            </div><!--===========CARACTERISTICAS================-->

            <!--===========OTROS ================-->
            <div style="background-color: rgb(129, 99, 139);
                        border-radius: 10px;
                        color: rgb(255, 255, 255);
                        text-align: center;
                        margin-top: 15px;">
                <h6>Otros</h6>
            </div>


            <!--===========Otros Ganglios ================-->
            <div class="col-md-12">
                <strong style="font-size:14px;">Otros Ganglios</strong>
                <select name="otros_ganglios_seg" id="otros_ganglios_seg" class="form-control" style="font-size: 14px;">
                    <option value="Negado">Negado</option>
                    <option value="Si">Si</option>
                </select>
            </div>

            <div class="container-seg text-center" id="otro_localizacion_seg" style="display: none;">

                <fieldset>
                    <legend>

                        <div class="row">

                            <div class="col-md-3">
                                <input type="checkbox" name="local_submandibulares_seg" id="local_submandibulares_seg" value="Si" style="font-size: 14px;">
                                <label for="local_submandibulares_seg" style="font-size: 14px;">Submandibulares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_axilares_seg" id="local_axilares_seg" value="Si" style="font-size: 14px;">
                                <label for="local_axilares_seg" style="font-size: 14px;">Axilares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_inguinales_seg" id="local_inguinales_seg" value="Si" style="font-size: 14px;">
                                <label for="local_inguinales_seg" style="font-size: 14px;">Inguinales</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_cervicales_seg" id="local_cervicales_seg" value="Si" style="font-size: 14px;">
                                <label for="local_cervicales_seg" style="font-size: 14px;">Cervicales</label>
                            </div>


                            <div class="col-md-3">
                                <input type="checkbox" name="local_retroauri_seg" id="local_retroauri_seg" value="Si" style="font-size: 14px;">
                                <label for="local_retroauri_seg" style="font-size: 14px;">Retroauriculares</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_subclav_seg" id="local_subclav_seg" value="Si" style="font-size: 14px;">
                                <label for="local_subclav_seg" style="font-size: 14px;">Subclavicular</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_occipital_seg" id="local_occipital_seg" value="Si" style="font-size: 14px;">
                                <label for="local_occipital_seg" style="font-size: 14px;">Occipital</label>
                            </div>

                            <div class="col-md-3">
                                <input type="checkbox" name="local_adeno_seg" id="local_adeno_seg" value="Si" style="font-size: 14px;">
                                <label for="local_adeno_seg" style="font-size: 14px;">Adenopatias</label>
                            </div>

                        </div><!--===========segunda mitad ================-->

                    </legend>
                </fieldset>

            </div> <!--===========CONTA--> <br>

            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit" class="btn btn-primary" style="font-size: 15px; padding: 8px 15px;">Guardar</button>
            </div><br>


    </div><!-- ======Primer container===== -->




</body>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scripSeg.js"></script>
<script type="module">
    import {
        seguimientoForm
    } from "./js/seguimiento.js";
    seguimientoForm();
</script>

</html>