<?php
include("modals/registrarpaciente.php");
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
    <title>Triage Gineco Obstetrico</title>
</head>
<body>

    <header>
        <h5 style=" margin-top: 12px;"><i class="bi bi-person-heart"></i> Triage Gineco Obstetrico</h5>
        <br>
        <div style="padding:10px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header><br>

     <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->

    
     <div  style="padding: 20px;" class="btn-group" role="group" aria-label="Basic outlined example" >         
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#RegistrarPacienteGineco">
                <i class="bi bi-person-add"> </i> Paciente
            </button>

            <a href="php/export.php" class="btn btn-success">
                <i class="bi bi-file-earmark-excel"></i> Excel
            </a>

            <a href="graficas_ambulatoria.php">
                <button type="button" class="btn btn-primary" target="_blank">
                    <i class="bi bi-bar-chart"></i> Gráficas
                </button>
            </a>
    </div> <!-- cierre del <div class="btn-group" role="group" aria-label="Basic outlined example">--><br><br>

        <!-- ======================== AQUI INICIA EL BUSCADOR ======================== -->
    <div class="row">
        <div class="col-4" width="100%" height="800px" style="margin-bottom: 100px; ">
            <div id="patient-list-container" style="background-color: rgb(159,34,65,0.15);" ><br>
                    <input type="text" id="search" placeholder="Buscar pacientes...">
                    <ul id="patient-list">               
                </ul><br>
        </div> <!-- cierre del <div id="patient-list-container">-->
    </div> <!-- cierre del <div class="col-4">-->

    <!-- ======================== AQUI FINALIZA EL BUSCADOR ======================== -->

    <!-- ======================== AQUI INICIA LA TABLA ============================= -->

    <div class="col-8">
        <div class="container">
            <iframe id="consulta" src="consulta.php" frameborder="30px" width="999px" height="999px" style="margin-bottom: 100px;"></iframe>
        </div> <!--<div class="container">-->
    </div><!-- FINALIZA EL DIV class col 8-->

    <!-- ======================== AQUI FINALIZA LA TABLA ======================== -->



    

    <footer>Hospital Regional de Alta Especialidad de Ixtapaluca <br>Dirección de Operaciones - Gestión Digital en Salud - 2024</footer>

    <script src="js/triageGineco.js"></script>
    
</body>
</html>