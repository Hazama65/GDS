<?php
require ('php/controllers/registros.controller.php');
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
    <link rel="stylesheet" href="css/metricas.css">

    <title>Estadistica</title>
</head>

<body>
    <header>
        <h5 class="bi bi-prescription2" style="color:#ffffff; margin-top: 15px;">Estadistica</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>


    <div class="container buscador">
        <div class="row">
            <div class="col-md-3">
                <span>Terapeuta</span>
                <select name="empleado" id="empleado" class="control form-control">
                    <option value="">Seleccione</option>
                    <option value="L.T.F Ana Carolina Flores Morelos">L.T.F Ana Carolina Flores Morelos</option>
                    <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                    <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                    <option value="L.T.C.H Fonseca Ayala Mariana">L.T.C.H Fonseca Ayala Mariana</option>
                    <option value="L.T.C.H Katia Mayte De La Paz Gonzalez">L.T.C.H Katia Mayte De La Paz Gonzalez</option>
                    <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                    <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                    <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                    <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                    <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                    <option value="L.T.F Diana Carolina Villegas Bannack.">L.T.F Diana Carolina Villegas Bannack.</option>
                    <option value="L.T.F Estephanie García Martinez">L.T.F Estephanie García Martinez</option>
                    <option value="L.T.F Juan Carlos Reyna Mayorga">L.T.F Juan Carlos Reyna Mayorga</option>
                    <option value="L.T.F Maria Teresa De Jesus Perez Rios">L.T.F Maria Teresa De Jesus Perez Rios</option>
                    <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                    <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                    <option value="L.T.F Najla Karina Gelista Tovar">L.T.F Najla Karina Gelista Tovar</option>
                    <option value="L.T.F Negrete Rubio David Israel">L.T.F Negrete Rubio David Israel</option>
                    <option value="L.T.O Briseida Guevara Leyva">L.T.O Briseida Guevara Leyva</option>
                    <option value="L.T.O Lopez Sanchez Andrea Berenice">L.T.O Lopez Sanchez Andrea Berenice</option>
                    <option value="P.T.C.H Espejo Rodríguez Erika Daniela">P.T.C.H Espejo Rodríguez Erika Daniela</option>
                    <option value="P.T.F Diana Sofia Arceo Ramirez">P.T.F Diana Sofia Arceo Ramirez</option>
                    <option value="P.T.F Eloisa Medina Galicia">P.T.F Eloisa Medina Galicia</option>
                    <option value="P.T.F Mariana Quintero Flores">P.T.F Mariana Quintero Flores</option>
                    <option value="P.T.F Valeria Yamilet Albarran Casanova">P.T.F Valeria Yamilet Albarran Casanova</option>
                </select>
            </div>

            <div class="col-md-1">
                <span style="font-size:13px; display: block;">Terapia tipos fisica</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="terapia_fisica" id="terapia_fisica" value="terapia_fisica">
            </div>

            <div class="col-md-1">
                <span style="font-size:13px; display: block;">Terapia ocupacional</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="terapia_ocupacional" id="terapia_ocupacional" value="terapia_ocupacional">
            </div>

            <div class="col-md-1">
                <span style="font-size:13px; display: block;">Terapia de lenguaje</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="terapia_lenguaje" id="terapia_lenguaje" value="terapia_lenguaje">
            </div>

            <div class="col-md-2">
                <span>Fecha Inicial</span>
                <input type="date" name="fecha_1" id="fecha_1" class="control form-control">
            </div>

            <div class="col-md-2">
                <span>Fecha Final</span>
                <input type="date" name="fecha_2" id="fecha_2" class="control form-control">
            </div>
            <div class="col-md-2">
                <button onclick="buscar()" class="btn btn-primary boton">Buscar</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="chartdiv_1"></div>
    </div>


    <div class="container buscador">
        <div class="row">
            <div class="col-md-4">
                <span>Terapeuta</span>
                <select name="empleado_tera" id="empleado_tera" class="control form-control">
                    <option value="">Seleccione</option>
                    <option value="L.T.F Ana Carolina Flores Morelos">L.T.F Ana Carolina Flores Morelos</option>
                    <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                    <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                    <option value="L.T.C.H Fonseca Ayala Mariana">L.T.C.H Fonseca Ayala Mariana</option>
                    <option value="L.T.C.H Katia Mayte De La Paz Gonzalez">L.T.C.H Katia Mayte De La Paz Gonzalez</option>
                    <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                    <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                    <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                    <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                    <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                    <option value="L.T.F Diana Carolina Villegas Bannack.">L.T.F Diana Carolina Villegas Bannack.</option>
                    <option value="L.T.F Estephanie García Martinez">L.T.F Estephanie García Martinez</option>
                    <option value="L.T.F Juan Carlos Reyna Mayorga">L.T.F Juan Carlos Reyna Mayorga</option>
                    <option value="L.T.F Maria Teresa De Jesus Perez Rios">L.T.F Maria Teresa De Jesus Perez Rios</option>
                    <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                    <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                    <option value="L.T.F Najla Karina Gelista Tovar">L.T.F Najla Karina Gelista Tovar</option>
                    <option value="L.T.F Negrete Rubio David Israel">L.T.F Negrete Rubio David Israel</option>
                    <option value="L.T.O Briseida Guevara Leyva">L.T.O Briseida Guevara Leyva</option>
                    <option value="L.T.O Lopez Sanchez Andrea Berenice">L.T.O Lopez Sanchez Andrea Berenice</option>
                    <option value="P.T.C.H Espejo Rodríguez Erika Daniela">P.T.C.H Espejo Rodríguez Erika Daniela</option>
                    <option value="P.T.F Diana Sofia Arceo Ramirez">P.T.F Diana Sofia Arceo Ramirez</option>
                    <option value="P.T.F Eloisa Medina Galicia">P.T.F Eloisa Medina Galicia</option>
                    <option value="P.T.F Mariana Quintero Flores">P.T.F Mariana Quintero Flores</option>
                    <option value="P.T.F Valeria Yamilet Albarran Casanova">P.T.F Valeria Yamilet Albarran Casanova</option>
                </select>
            </div>

            <div class="col-md-3">
                <span>Fecha Inicial</span>
                <input type="date" name="fecha_1_tera" id="fecha_1_tera" class="control form-control">
            </div>

            <div class="col-md-3">
                <span>Fecha Final</span>
                <input type="date" name="fecha_2_tera" id="fecha_2_tera" class="control form-control">
            </div>
            <div class="col-md-2">
                <button onclick="buscar_terapia()" class="btn btn-primary boton">Buscar</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="chartdiv_2"></div>
    </div>


    <div class="container mt-5" style="margin-bottom: 125px;">

        <div class="col-md-12">

            <div class="modal-content">
                <div class="container mt-5" style="overflow-x: auto;" id="tabla-conteo">
                    <h2>Estadísticas de Terapias por Mes</h2>
                    <table class="table table-bordered" id="tablaEnfermeros">
                        <thead>
                            <tr>
                                <th style="background-color: #BDD7EE;">Año</th>
                                <th style="background-color: #BDD7EE;">Mes</th>
                                <th style="background-color: #BDD7EE;">Terapia Física</th>
                                <th style="background-color: #8BF927;">Terapia Ocupacional</th>
                                <th style="background-color: #8BF927;">Terapia de Lenguaje</th>
                                <th style="background-color: #AEAAAA;">Aplicación de Férula</th>
                                <th style="background-color: #AEAAAA;">Aplicación de Vendaje Enyesado</th>
                                <th style="background-color: #8BF927;">Baño de Parafina</th>
                                <th style="background-color: #8BF927;">CHC CF</th>
                                <th style="background-color: #8BF927;">Corrientes Interferenciales</th>
                                <th style="background-color: #8BF927;">Electroestimulación</th>
                                <th style="background-color: #FFC000;">Ejercicio Asistido</th>
                                <th style="background-color: #FFC000;">Ejercicio de Fisioterapia</th>
                                <th style="background-color: #8BF927;">Hidroterapia en Tanque Terapéutico</th>
                                <th style="background-color: #8BF927;">Hidroterapia en Tina Habbard</th>
                                <th style="background-color: #8BF927;">Hidroterapia en Tina de Remolinos</th>
                                <th style="background-color: #8BF927;">TENS</th>
                                <th style="background-color: #8BF927;">Terapia Combinada USG Corriente Eléctrica</th>
                                <th style="background-color: #8BF927;">Ultrasonido Terapéutico</th>
                                <th style="background-color: #8BF927;">Tracción Cervical y Lumbar</th>
                                <th style="background-color: #8BF927;">Rehabilitación Cardiaca</th>
                                <th style="background-color: #8BF927;">Ejercicios Respiratorios</th>
                                <th style="background-color: #8BF927;">Terapia Láser</th>
                                <th style="background-color: #8BF927;">Toxina Botulínica</th>
                                <th style="background-color: #A9D08E;">Total Especializado</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-datos">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Total</th>
                                <th style="background-color: #BDD7EE;" id="total_terapia_fisica"></th>
                                <th style="background-color: #8BF927;" id="total_terapia_ocupacional"></th>
                                <th style="background-color: #8BF927;" id="total_terapia_lenguaje"></th>
                                <th style="background-color: #AEAAAA;" id="total_aplicacion_ferula"></th>
                                <th style="background-color: #AEAAAA;" id="total_Aplicacion_vendaje_enyesado"></th>
                                <th style="background-color: #8BF927;" id="total_Baño_parafina"></th>
                                <th style="background-color: #8BF927;" id="total_CHC_CF"></th>
                                <th style="background-color: #8BF927;" id="total_Corrientes_interfereciales"></th>
                                <th style="background-color: #8BF927;" id="total_Electroestimulacion"></th>
                                <th style="background-color: #FFC000;" id="total_Ejercicio_Asistido"></th>
                                <th style="background-color: #FFC000;" id="total_Ejercicio_Fisioterapia"></th>
                                <th style="background-color: #8BF927;" id="total_Hidroterapia_TanqueTerapéutico"></th>
                                <th style="background-color: #8BF927;" id="total_Hidroterapia_Tina_Habbard"></th>
                                <th style="background-color: #8BF927;" id="total_Hidroterapia_Tina_Remolinos"></th>
                                <th style="background-color: #8BF927;" id="total_TENS"></th>
                                <th style="background-color: #8BF927;"
                                    id="total_TerapiacombinadaUSG_CorrienteEléctrica">
                                </th>
                                <th style="background-color: #8BF927;" id="total_Ultrasonido_Terapeutico"></th>
                                <th style="background-color: #8BF927;" id="total_TraccionCervical_Lumbar"></th>
                                <th style="background-color: #8BF927;" id="total_Rehabi_cardiaca"></th>
                                <th style="background-color: #8BF927;" id="total_Ejercicios_respiratorio"></th>
                                <th style="background-color: #8BF927;" id="total_Terapia_Laser"></th>
                                <th style="background-color: #8BF927;" id="total_Toxina_Botulinica"></th>
                                <th style="background-color: #A9D08E;" id="totalGeneral"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="text-center mt-3">
                    <button style="margin-bottom: 15px;" class="btn btn-success"
                        onclick="exportToExcel('tablaEnfermeros','Terapias por Mes')">Exportar a
                        Excel</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a>Hospital Regional de Alta Especialidad de Ixtapaluca</a>
        <p style="font-size: 10px">
            Gestión Digital en Salud - 2024
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


    <script src="includes/graph.js"></script>
    <script src="includes/graph_terapia.js"></script>
    <script src="includes/table.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

            cerrarSesionButton.addEventListener('click', function () {
                // Redirige al usuario a la página de cierre de sesión
                window.location.href = 'php/destroysession.php';
            });
        });
    </script>

</body>

</html>