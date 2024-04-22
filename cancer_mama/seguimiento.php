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


    <title>Seguimiento Cancer de Mama</title>
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


        <h5>Seguimiento Cancer de Mama </h5>
        <div style="padding: 25px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>


    <form id="seguimiento_CM" method="POST">
        <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <strong style="font-size: 13px;">Fecha de Seguimiento</strong>
                    <input type="date" class="control form-control" id="fecha_seg" name="fecha_seg"
                        style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Calidad Vida ECOG</strong>
                    <select name="Seguimiento_Calidad_ECOG" id="Seguimiento_Calidad_ECOG" class="form-select"
                        style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="ECOG O">ECOG O Desempeño Funcional Normal</option>
                        <option value="ECOG 1">ECOG 1 Desempeño Leve</option>
                        <option value="ECOG 2">ECOG 2 EI del Tiempo Postrado</option>
                        <option value="ECOG 3">ECOG 3 Más del 50% Postrado</option>
                        <option value="ECOG 4">ECOG 4 Dependiente al 100% para Vida Básica</option>
                        <option value="ECOG 5">ECOG 5 Falleció</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Progresión Enfermedad </strong>
                    <select name="ProgresionEnfermedad" id="ProgresionEnfermedad" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3" id="Fecha_progresion" style="display:none;">
                    <strong style="font-size: 13px;">Fecha Progresión Enfermedad</strong>
                    <input type="date" class="control form-control" id="fecha_progreEnfermedad"
                        name="fecha_progreEnfermedad" style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Recurrencia</strong>
                    <select name="Recurrencia" id="Recurrencia" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3" id="Fecha_Recurrencia" style="display:none;">
                    <strong style="font-size: 13px;">Fecha Recurrencia</strong>
                    <input type="date" class="control form-control" id="Recurrencia_fecha" name="Recurrencia_fecha"
                        style="font-size: 13px;">
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Tipo Cuidados Paliativos</strong>
                    <select name="tipo_cuidado_seguimiento" id="tipo_cuidado_seguimiento" class="form-select"
                        style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Clínica Doler">Clínica Doler</option>
                        <option value="Medicina Paliativa">Medicina Paliativa</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Protocolo Clínico</strong>
                    <select name="Protocolo_clinico" id="Protocolo_clinico" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 13px;">Protocolo Investigación</strong>
                    <select name="Protocolo_Investigacion" id="Protocolo_Investigacion" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>
                <br>

                <!--Reintervención-->

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(222, 100, 150,0.5);
                                color:aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Reintervención</h5>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Fecha Reintervención</strong>
                    <input type="date" class="control form-control" id="Reintervencion_fecha"
                        name="Reintervencion_fecha" style="font-size: 13px;">
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Lateralidad QX</strong>
                    <select name="Lateralidad_Seguimiento_QX" id="Lateralidad_Seguimiento_QX" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Bilateral">Bilateral</option>
                        <option value="Derecha">Derecha</option>
                        <option value="Izquierda">Izquierda</option>
                        <option value="Sin Registro">Sin Registro</option>
                    </select>
                </div>

                <!-- Nueva QT -->


                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(222, 100, 150,0.5);
                                color:aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Nueva QT</h5>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Fecha Reintervención</strong>
                    <input type="date" class="control form-control" id="Reintervencion_fecha2"
                        name="Reintervencion_fecha2" style="font-size: 13px;">
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Tipo</strong>
                    <select name="Tipo_Seguimiento" id="Tipo_Seguimiento" class="form-select" style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Adyuvante">Adyuvante</option>
                        <option value="Neoadyuvante">Neoadyuvante</option>
                        <option value="Paliativo">Paliativo</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 13px;">Tratamiento</strong>
                    <select name="Tratamiento_Seguimiento" id="Tratamiento_Seguimiento" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Abemaciclib">Abemaciclib</option>
                        <option value="Atezolizumab">Atezolizumab</option>
                        <option value="Daunoribicina">Daunoribicina</option>
                        <option value="Doxorrubicina">Doxorrubicina</option>
                        <option value="Epirubicina">Epirubicina</option>
                        <option value="Idarubicina">Idarubicina</option>
                        <option value="Palbociclib">Palbociclib</option>
                        <option value="Pembrolizumab">Pembrolizumab</option>
                        <option value="Ribociclib">Ribociclib</option>
                        <option value="Trastuzumab / Emtansina">Trastuzumab / Emtansina</option>
                        <option value="Trastuzumab / Pertuzumab">Trastuzumab / Pertuzumab</option>
                        <option value="Valrubicina">Valrubicina</option>
                    </select>
                </div>

                <!-- RADIOTERAPIA -->

                <div class="form-header">
                    <h5 class="form-title" style="text-align: center;
                                background-color:rgb(222, 100, 150,0.5);
                                color:aliceblue;
                                margin-top:15px;
                                font-size: 14px;">
                        Radioterapia</h5>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Tipo</strong>
                    <select name="Tipo_RadioterapiaSeguimiento" id="Tipo_RadioterapiaSeguimiento" class="form-select"
                        style="font-size: 13px;">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Sin Registro">Sin Registro</option>
                        <option value="Ciclo Mamario Completo">Ciclo Mamario Completo</option>
                        <option value="Holocraneo">Holocraneo</option>
                        <option value="Pelvis">Pelvis</option>
                        <option value="Tangencial">Tangencial</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <strong style="font-size: 13px;">Fecha Inicio</strong>
                    <input type="date" class="control form-control" id="Seguimiento_Iniciofecha"
                        name="Seguimiento_Iniciofecha" style="font-size: 13px;">
                </div>


            </div>
            <div class="seguimiento_btns">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

    <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/seguimiento_script.js"></script>

<script type="module">
    import { seguimientoForm } from "./js/seguimiento.js";
    seguimientoForm();
</script>



</html>