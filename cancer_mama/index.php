<?php

include("modal/cancer_mama.php");
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

    <title>Cancer de Mama</title>
</head>

<body>

    <header>
        <h5 class="bi bi-clipboard2-data-fill" style="color:rgb(243, 243, 243); margin-top: 15px;">Cancer de Mama</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->


    <div style="padding: 20px;" class="btn-group" role="group" aria-label="Basic outlined example">


        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#CancerMama">
            <i class="bi bi-person-add"> </i> Paciente
        </button>

        <a href="php/export.php" class="btn btn-success">
            <i class="bi bi-file-earmark-excel"></i> Excel
        </a>

        <a href="graficas_anemia.php">
            <button type="button" class="btn btn-primary" target="_blank">
                <i class="bi bi-bar-chart"></i> Gráficas
            </button>
        </a>
    </div> <!-- cierre del <div class="btn-group" role="group" aria-label="Basic outlined example">-->
    <br><br>

    <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
    <div class="row">

        <div class="col-4" width="100%" height="800px" style="margin-bottom: 100px; ">
            <div id="patient-list-container" style="background-color:rgb(245, 85, 85,0.8)">

                <br>
                <input type="text" id="search" placeholder="Buscar pacientes...">
                <ul id="patient-list">

                </ul>

            </div> <!-- cierre del <div id="patient-list-container">-->
        </div> <!-- cierre del <div class="col-3">-->

        <!-- ======================== AQUI FINALIZA EL BUSCADOR ======================== -->

        <!-- ======================== AQUI INICIA LA TABLA ======================== -->

        <div class="col-7">
            <div class="container">
                <!-- Tu código existente -->

                <!-- Agrega un div para contener el select dinámico -->
                <div id="Seguimiento_index" style="display: none;">
                    <select name="paciente_seleccionado" class="col-6 form-select custom-select" id="paciente_seleccionado" style="background-color: #6c757d; color: white; margin-bottom:10px">
                    </select>

                </div>

                <iframe id="consulta" src="" frameborder="0" width="100%" height="800px" style="margin-bottom: 100px;"></iframe>
            </div> <!-- <div class="container"> -->
        </div> <!-- FINALIZA EL DIV class col 8 -->

        <iframe id="consulta_seguimiento" src="" frameborder="0" width="100%" height="800px" style="margin-bottom: 100px;"></iframe>

        <div class="col-7">
            <div class="container">
                <iframe id="consulta" src="consulta.php" frameborder="0" width="100%" height="800px" style="margin-bottom: 100px;"></iframe>
            </div> <!--<div class="container">-->
        </div><!-- FINALIZA EL DIV class col 8-->

        <!-- ======================== AQUI FINALIZA LA TABLA ======================== -->


        <div class="col-1">
        </div>
    </div>





    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <br>
        Dirección de Operaciones - Gestión Digital en Salud - 2024

    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/visualizacion.js"></script>
    <script src="js/scriptmodal.js"></script>
    <script src="js/visualizacion_seg.js"></script>


    <script type="module">
        import {mainForm} from "./js/insert.js";
        mainForm();
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cerrarSesionButton = document.getElementById('cerrar-sesion-button');

            cerrarSesionButton.addEventListener('click', function() {
                // Redirige al usuario a la página de cierre de sesión
                window.location.href = 'php/destroysession.php';
            });
        });
    </script>



</body>

</html>