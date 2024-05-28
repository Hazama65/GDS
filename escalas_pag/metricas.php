<?php
// require ('php/controllers/registros.controller.php');

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


    <!-- <div class="container buscador">
        <div class="row">
            <div class="col-md-3">
                <span>Terapeuta</span>
                <select name="empleado" id="empleado" class="control form-control">
                    <option value="">Seleccione</option>
                    <option value="L.T.C.H Monjaras Bernal Isis Giovana">L.T.C.H Monjaras Bernal Isis Giovana</option>
                    <option value="L.T.F  Estephanie García Martinez">L.T.F Estephanie García Martinez</option>
                    <option value="L.T.F Aurea Guadalupe Hernández Salazar.">L.T.F Aurea Guadalupe Hernández Salazar.</option>
                    <option value="L.T.F Brenda Roxana Monjaras Bernal">L.T.F Brenda Roxana Monjaras Bernal</option>
                    <option value="L.T.F Monserrat Ocampo García">L.T.F Monserrat Ocampo García</option>
                    <option value="L.T.O Ana Violeta De La Paz Gonzalez">L.T.O Ana Violeta De La Paz Gonzalez</option>
                </select>
            </div>

            <div class="col-md-1">
                <span style="font-size:13px; display: block;">Terapia tipos fisica</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="terapia_fisica" id="terapia_fisica">
            </div>

            <div class="col-md-1">
                <span style="font-size:13px; display: block;">Terapia ocupacional</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="terapia_ocupacional" id="terapia_ocupacional">
            </div>

            <div class="col-md-1">
                <span style="font-size:13px; display: block;">Terapia de lenguaje</span>
                <input style="width: 30px; height: 30px;" type="checkbox" name="terapia_lenguaje" id="terapia_lenguaje">
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
    </div> -->

    <div class="container">
        <div class="graficas-container">
            <div class="graficas" id="chartdiv_1">
                <span class="badge">NIHSS</span>
            </div>
            <div class="graficas" id="chartdiv_2">
                <span class="badge">BARTHEL</span>
            </div>
            <div class="graficas" id="chartdiv_3">
                <span class="badge">FIM</span>
            </div>
            <div class="graficas" id="chartdiv_4">
                <span class="badge">RANKIN</span>
            </div>
            <div class="graficas" id="chartdiv_5">
                <span class="badge">MARCHA</span>
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

    <script src="includes/graph.js"></script>


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