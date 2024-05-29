<?php

require ('php/controllers/registro.controller.php');

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

    <title>Escalas</title>
</head>

<body>

    <header>
        <h5 class="bi bi-calculator" style="color:rgb(243, 243, 243); margin-top: 15px;">Inicio Calculadora</h5>
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


        <a href="inicioescalas.php">
            <button type="button" class="btn btn-primary" target="_blank">
                <i class="bi bi-calculator"></i> Registro Paciente
            </button>
        </a>

        <a href="php/export.php" class="btn btn-success">
            <i class="bi bi-file-earmark-excel"></i> Excel
        </a>

        <a href="metricas.php">
            <button type="button" class="btn btn-primary" target="_blank">
                <i class="bi bi-bar-chart"></i> Gráficas
            </button>
        </a>
    </div> <!-- cierre del <div class="btn-group" role="group" aria-label="Basic outlined example">-->
    <br><br>

    <div class="container-fluid">
        <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
        <div class="row">

            <div class="col-4" width="100%" height="800px" style="margin-bottom: 100px; ">
                <div id="patient-list-container" style="background-color:rgb(245, 85, 85,0.8)">

                    <br>
                    <input type="text" id="search" placeholder="Buscar ...">
                    <ul id="patient-list">
                        <?php
                        if (!empty($data_AT)) {
                            // Comienza a generar la lista de pacientes
                            echo '<ul class="patient-list" >';
                            foreach ($data_AT as $datos) {
                                $id_paciente = $datos["id_paciente"];
                                $nombrePaciente = $datos["nombre_paciente"];
                                // Genera un elemento de lista para cada paciente
                                echo '<li class="patient-item" data-id-paciente="' . $id_paciente . '">';
                                echo $nombrePaciente;
                                echo '<a href="seguimiento.php?id=' . $id_paciente . '">';
                                echo '<button type="button" class="btn btn-secondary" style="color:white; --bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Seguimiento</button>';
                                echo '</a>';
                                echo '</li>';
                            }
                            echo '</ul>';
                        } else {
                            echo "No se encontraron pacientes";
                        }
                        ?>
                    </ul>

                </div> <!-- cierre del <div id="patient-list-container">-->
            </div> <!-- cierre del <div class="col-3">-->


            <div class="col-7">
                <div class="container">
                    <!-- Tu código existente -->

                    <!-- Agrega un div para contener el select dinámico -->
                    <div id="Seguimiento_index" style="display: none;">
                        <select name="paciente_seleccionado" class="col-12 form-select custom-select"
                            id="paciente_seleccionado"
                            style="background-color: #6c757d; color: white; margin-bottom:10px">
                        </select>
                    </div>

                    <div id="tabla-seguimiento" class="tabla-seguimiento"
                        style="height: 400px; overflow-y: auto; margin-bottom: 20px;"></div>



                </div> <!-- <div class="container"> -->
            </div> <!-- FINALIZA EL DIV class col 8 -->



            <div class="col-1">
            </div>
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





</body>

</html>