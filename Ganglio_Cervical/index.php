<?php
//llamado al modal de registrar paciente de LPH
include("modal/ganglio_cervical.php");

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
    
    <title>Ganglio Cervial</title>
</head>
<body>

    <header>
        <h5>Ganglios Cervicales</h5>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <!-- ESTE ES EL BLOQUE DE LOS BOTONES-->

    
        <div  style="padding: 20px;" class="btn-group" role="group" aria-label="Basic outlined example" >

            
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Ganglio">
                <i class="bi bi-person-add"> </i> Paciente
            </button>

            <button type="button" class="btn btn-success">
                <i class="bi bi-file-earmark-excel"></i> Excel
            </button>

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
                <div id="patient-list-container" style="background-color:rgb(245, 85, 85,0.8)" >

                        <br>
                        <input type="text" id="search" placeholder="Buscar pacientes...">
                        <ul id="patient-list">
                            <li class="patient-item">
                                Jesús Chico López
                                    <a href="editar.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>

                                    <a href="seguimiento.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Seguimiento
                                        </button>
                                    </a>
    
    
                            </li>

                            
                            <li class="patient-item">
                                José Daniel Juárez Martínez
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                            <li class="patient-item">
                                Nidia Sánchez Balderas
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                            <li class="patient-item">
                                Jesús Chico López
                                    <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                               
                            </li>
                            <li class="patient-item">
                                José Daniel Juárez Martínez
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                            <li class="patient-item">
                                Nidia Sánchez Balderas
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                            <li class="patient-item">
                                Jesús Chico López
                                    <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                               
                            </li>
                            <li class="patient-item">
                                José Daniel Juárez Martínez
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                            <li class="patient-item">
                                Nidia Sánchez Balderas
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                            <li class="patient-item">
                                Jesús Chico López
                                    <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                               
                            </li>
                            <li class="patient-item">
                                José Daniel Juárez Martínez
                                <a href="editar_lph.php" >
                                        <button type="button" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Editar
                                        </button>
                                    </a>
                            </li>
                          
                            <!-- Aquí debe ir el script para consultar los pacientes en la base de datos-->
                        </ul>
                    
                </div> <!-- cierre del <div id="patient-list-container">-->
            </div> <!-- cierre del <div class="col-3">-->

        <!-- ======================== AQUI FINALIZA EL BUSCADOR ======================== -->

        <!-- ======================== AQUI INICIA LA TABLA ======================== -->

    <div class="col-7">
        <div class="container">
            <!-- Button Seguimiento trigger modal -->

            <iframe src="consulta.php" frameborder="0" width="100%" height="800px" style="margin-bottom: 100px;"></iframe>

        </div> <!--<div class="container">-->
    </div><!-- FINALIZA EL DIV class col 8-->

        <!-- ======================== AQUI FINALIZA LA TABLA ======================== -->
        

        <div class="col-1">
        </div>
</div>
    

        
        
     
    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
        <br>
            Dirección de Operaciones - Gestión Digital en Salud - 2023
    
    </footer>


    <script src="js/scriptmodal.js"></script>
</body>
</html>

