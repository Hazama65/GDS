<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Verifica si el usuario ha iniciado sesión y si tiene el sistema correcto
if (!isset($_SESSION['valid_user']) || $_SESSION['system_type'] !== 'estadistica_rehab') {
    // Si el usuario no ha iniciado sesión o no tiene permiso para este sistema
    header('Location: ../login/index.php');
    exit;
}
$username = $_SESSION['valid_user'];
require ('php/controllers/registros.controller.php');
include ("modal/registrarpaciente.php");
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

    <title>Estadística de Rehabilitación</title>
</head>

<body>

    <header>
        <h5 class="bi bi-clipboard2-data-fill" style="color:rgb(243, 243, 243); margin-top: 15px;">Estadística de
            Rehabilitación</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->

    <div class="container-fluid">

        <div style="padding: 20px;" class="btn-group" role="group" aria-label="Basic outlined example">


            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#CancerMama">
                <i class="bi bi-person-add"> </i> Paciente
            </button>
            <?php if ($username == 'estadistica_rehab'): ?>

                <a href="php/export.php" class="btn btn-success">
                    <i class="bi bi-file-earmark-excel"></i> Excel
                </a>

                <a href="metricas.php">
                    <button type="button" class="btn btn-primary" target="_blank">
                        <i class="bi bi-bar-chart"></i> Gráficas
                    </button>
                </a>
            <?php else: ?>

            <?php endif; ?>

        </div> <!-- cierre del <div class="btn-group" role="group" aria-label="Basic outlined example">-->
        <br><br>

        <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
        <div class="row">

            <div class="col-4" width="100%" height="800px" style="margin-bottom: 100px; ">
                <div id="patient-list-container" style="background-color:rgb(245, 85, 85,0.8)">

                    <br>
                    <input type="text" id="search" placeholder="Buscar ...">
                    <ul id="patient-list">
                        <?php
                        if (!empty($data_ER)) {
                            // Comienza a generar la lista de pacientes
                            echo '<ul class="patient-list" >';
                            foreach ($data_ER as $datos) {
                                $id_paciente = $datos["id_paciente"];
                                $nombrePaciente = $datos["nombre_paciente"];

                                // Genera un elemento de lista para cada paciente
                                echo '<li class="patient-item" data-id-paciente="' . $id_paciente . '">';
                                echo $nombrePaciente;
                                echo '<a href="editar_ER.php?id=' . $id_paciente . '">';
                                echo '<button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Editar</button>';
                                echo '</a>';
                                echo '</li>';
                            }
                            echo '</ul>';
                        } else {
                            echo "No se encontraron pacientes";
                        }
                        ?>
                        <!-- Aquí debe ir el script para consultar los pacientes en la base de datos-->
                    </ul>

                </div> <!-- cierre del <div id="patient-list-container">-->
            </div> <!-- cierre del <div class="col-3">-->

            <!-- ======================== AQUI FINALIZA EL BUSCADOR ======================== -->

            <!-- ======================== AQUI INICIA LA TABLA ======================== -->

            <div class="col-7">
                <div class="container">
                    <div id="tabla-seguimiento" class="tabla-seguimiento"
                        style="height: 450px; overflow-y: auto; margin-bottom: 20px;"></div>

                </div> <!-- <div class="container"> -->
            </div> <!-- FINALIZA EL DIV class col 8 -->

            <!-- ======================== AQUI FINALIZA LA TABLA ======================== -->


            <div class="col-1">
            </div>
        </div>

    </div>




    <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
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

    <script type="module">
        import { mainForm } from './js/insert.js';
        mainForm();
    </script>

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