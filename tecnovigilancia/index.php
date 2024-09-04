<?php

include("modal/registrotecno.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap 5.3.3 JS (con Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Incluye la biblioteca jsPDF versión 1.5.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Tecnovigilancia</title>
</head>

<body>

    <header>
        <h5 class="bi bi-eye-fill" style="color:rgb(243, 243, 243); margin-top: 10px;">Tecnovigilancia</h5>
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

        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tecnovigilancia">
        <i class="bi bi-eye-fill"></i>Registro Paciente
        </button>

    </div>

    <div class="container-fluid">

        <div class="col-4" width="100%" height="400px" style="margin-bottom: 100px; ">
            <div id="patient-list-container" style="background-color:rgb(76, 90, 116)">
                <br>
                <input type="text" id="search" placeholder="Buscar ...">
                <ul id="patient-list">

                    <li class="patient-item bi bi-person-badge" data-id-paciente="10">REYES ANSELMO LEONARDO

                       
                        <a href="seguimiento.php"><button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .60rem;"> Seguimiento </button></a>
                    </li>
                </ul>

            </div> <!-- cierre del <div id="patient-list-container">-->
        </div> <!-- cierre del <div class="col-3">-->
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

    </div>


    </div>

    <!-- ======================== AQUI FINALIZA EL BUSCADOR ======================== -->

    <!-- ======================== AQUI INICIA LA TABLA ======================== -->





    <!-- ======================== AQUI FINALIZA LA TABLA ======================== -->




    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <br>
        Dirección de Operaciones - Gestión Digital en Salud - 2024

    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/visualizacion.js"></script>
    <script src="js/scriptmodal.js"></script>
    <script src="js/scripteditar.js"></script>
    <script src="js/visualizacion_seg.js"></script>





</body>

</html>