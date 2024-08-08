<?php

include("modal/registromedicamento.php");

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
    <title>Abasto</title>
</head>

<body>

    <header>
        <h5 class="bi bi-capsule" style="color:rgb(243, 243, 243); margin-top: 10px;">Abasto</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->




    <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <div class="container">
                    <fieldset class="fieldset-botones">
                        <legend>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-1"></div>
                                <button type="button" class="btn btn-circular" data-bs-toggle="modal" data-bs-target="#registromedicamento">
                                    <i class="bi bi-capsule"> </i>Registro Farmaco
                                </button>
                                
                            </div>
                        </legend>
                    </fieldset>
                </div>
            </div>

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