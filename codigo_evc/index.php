<?php
require ('php/controllers/registros.controller.php');
include ("modal/registrarpaciente.php");
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
    <title>Clínica EVC</title>
</head>

<body>
    <header>
        <h5 class="bi bi-heart-pulse-fill" style="color:#ffffff; margin-top: 15px;"> Clínica EVC</h5>
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

        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span style="font-size: 12px;"><i class="bi bi-person-add"></i> Paciente</span>
        </button>
        <a href="php/export.php" class="btn btn-success">
            <span style="font-size: 12px;"><i class="bi bi-file-earmark-excel"></i> Excel</span>
        </a>
        <a href="graficas_anemia.php" class="btn btn-primary" target="_blank">
            <span style="font-size: 12px;"><i class="bi bi-bar-chart"></i> Gráficas</span>
        </a>
        <a href="https://hraeigds.site/escalas/" class="btn btn-info" target="_blank">
            <span style="font-size: 12px;">Escalas</span>
        </a>
    </div>
    <br>
    <br><br>
    <div class="container-fluid">
        <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
        <div class="row">
            <div class="col-3" width="100%" style="margin-bottom: 0; ">
                <div id="patient-list-container" style="background-color:rgb(81, 176, 210,0.6)">
                    <br>
                    <input type="text" id="search" placeholder="Buscar Paciente...">
                    <ul id="patient-list">
                        <?php
                        if (!empty($data_Evc)) {
                            // Comienza a generar la lista de pacientes
                            echo '<ul class="patient-list">';
                            foreach ($data_Evc as $PacientesDB) {
                                $id_pacientes = $PacientesDB["id_paciente"];
                                $nombrePacientes = $PacientesDB["nombre_paciente"];
                                // Genera un elemento de lista para cada paciente
                                echo '<li class="patient-item" data-id-paciente="' . $id_pacientes . '">';
                                echo $nombrePacientes;
                                // Crear el select con opciones y clases de Bootstrap
                                echo '<select class="patient-action-select" data-id-paciente="' . $id_pacientes . '">';
                                echo '<option value="" selected>Seleccionar acción</option>';
                                echo '<option value="editar">Editar</option>';
                                echo '<option value="seguimiento_r">Seguimiento (Rehabilitacion)</option>';
                                echo '<option value="seguimiento_n">Seguimiento (Neurologico)</option>';
                                echo '</select>';
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

            <!-- ======================== AQUI FINALIZA EL BUSCADOR ======================== -->

            <!-- ======================== AQUI INICIA LA TABLA ======================== -->
            <div class="col-9">
                <div class="container">
                    <!-- Agrega un div para contener el select dinámico -->
                    <div id="Seguimiento_index" style="display: none;">
                        <select name="paciente_seleccionado" class="col-6 form-select custom-select"
                            id="paciente_seleccionado"
                            style="background-color: #6c757d; color: white; margin-bottom:10px">
                        </select>
                    </div>
                    <a class="btn btn-danger" style="display:none; margin-bottom: 7px;" id="borrar_paciente">
                        <i class="bi bi-trash"></i>
                    </a>
                    <div id="tabla-seguimiento" class="tabla-seguimiento"
                        style="height: 55vh; overflow-y: auto; margin-bottom: 20px;"></div>
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
        Hospital Regional de Alta Especialidad de Ixtapaluca <br>
        Gestión Digital en Salud - 2024
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/script.js"></script>
    <script src="js/scriptmodal.js"></script>
    <script src="js/puertas_script.js"></script>
    <script src="js/visualizacion.js"></script>
    <script type="module">
        import { mainForm } from './js/insert.js';
        mainForm();
    </script>

</body>

</html>