<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['valid_user'])) {
    // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
    header('Location: ../login/index.php');
    exit;
}
require ('php/controllers/registros.controller.php');

include ("modals/registrarsuplencia.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap 5.3.3 JS (con Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Incluye la biblioteca jsPDF versión 1.5.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Suplencia de Personal</title>
</head>

<!--Inicia Body-->

<body>

    <!--Header-->
    <header class="custom-header">
        <span>SUPLENCIAS DE PERSONAL</span>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>


    <br>
    <!-- Botones -->
    <div class="button-container">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#RegistrarSuplencia">Registrar Suplencia</button>

            <a href="metricas.php">
                <button type="button" class="btn btn-outline-primary">
                    Métricas
                </button>
            </a>

            <a href="php/export.php" class="btn btn-outline-primary">
                <i class="bi bi-file-earmark-excel"></i> Excel
            </a>

        </div>
    </div>
    <br>

    <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->

    <div class="row">
        <div class="col-3" style="margin-bottom: 100px;">
            <div id="patient-list-container">
                <br>
                <input type="text" id="search" placeholder="Buscar Trabajador...">
                <ul id="patient-list">
                    <?php
                    if (!empty($data_EG)) {
                        echo '<ul class="patient-list" >';
                        foreach ($data_EG as $Datos_EG) {
                            $id_suplencia = $Datos_EG["id_suplencia"];
                            $num_empleado = $Datos_EG["numeroempleado_1"];
                            $nom_sustituido = $Datos_EG["enlace_numeroempleado"];
                            $fecha_suplencia = $Datos_EG["fecha_suplencia"];

                            echo '<li class="patient-item" data-id-paciente="' . $id_suplencia . '">';
                            echo $num_empleado . ' - ' . $nom_sustituido . ' | ' . $fecha_suplencia;
                            echo '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo "No se encontró Trabajador";
                    }
                    ?>
                </ul>

            </div> <!-- cierre del <div id="patient-list-container">-->
        </div> <!-- cierre del <div class="col-3">-->


        <!-- Nueva columna para la tabla -->
        <div class="col-md-9">

            <div class="container">
                <iframe id="consulta" src="consulta.php" frameborder="0" width="100%" height="1000px"
                    style="margin-bottom: 80px;"></iframe>
            </div>
        </div>

    </div> <!-- cierre del <div class="row">-->

    <!-- Contenedor para la pantalla de carga -->
    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>





    </div>

    <!-- Footer -->
    <div class="custom-footer">
        <span>HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA</span><br>
        <span>GESTIÓN DIGITAL EN SALUD</span>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="js/scriptmodal.js"></script>
    <script src="js/script.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/visualizacion.js"></script>
    <script src="js/funcions_empl.js"></script>

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