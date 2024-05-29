<?php
include ('php/controllers/edit.controller.php');
include ("modals/nihss.php");
include ("modals/barthel.php");
include ("modals/fim.html");
include ("modals/mi.html");
include ("modals/rankin.html");
include ("modals/marcha.html");
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

    <title>Seguimiento-Escalas</title>
</head>

<body>
    <!--Header-->
    <header class="custom-header">
        <h3 class="bi bi-calculator" style="color:rgb(243, 243, 243); margin-top: 15px;">Seguimiento-Escalas</h3>
        <br>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
        <!--<div style="padding: 10px; text-align: right;">
            
            <button type="button" class="btn btn-outline-light" title="Cerrar sesión">
            <i class="bi bi-arrow-return-left"></i>
            </button>
        </div>-->
    </header>

    <div style="margin-top: 20px; margin-left: 20px;">
        <main>

            <div class="container">
                <div class="row">


                    <!-- Primer contenedor a la izquierda -->
                    <div class="col-md-5" style="margin-bottom: 50px;">
                        <div class="custom-container" style="height: 675px">
                            <div class="row custom-row align-items-center justify-content-center">
                                <form id="seguimiento_escalas" method="POST">
                                    <div class="row">
                                        <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">


                                        <div class=" col-md-12 form-group">
                                            <strong style="font-size: 14px;" for="nombre">Fecha de Seguimiento</strong>
                                            <input type="date" class="form-control" id="Fecha_Seguimiento"
                                                name="Fecha_Seguimiento">
                                        </div>


                                        <div class=" col-md-6 form-group">
                                            <label for="nombre">NIHSS</label>
                                            <input type="number" class="form-control" id="NIHSS" name="NIHSS" readonly>
                                        </div>

                                        <div class=" col-md-6 form-group">
                                            <label for="nombre">NIHSS Valor</label>
                                            <input type="text" class="form-control" id="NIHSS_escala"
                                                name="NIHSS_escala" readonly>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="BARTHEL">BARTHEL</label>
                                            <input type="number" class="form-control" id="BARTHEL" name="BARTHEL"
                                                readonly>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="BARTHEL">BARTHEL Valor</label>
                                            <input type="text" class="form-control" id="BARTHEL_escala"
                                                name="BARTHEL_escala" readonly>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="FIM">FIM</label>
                                            <input type="number" class="form-control" id="FIM" name="FIM" readonly>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="FIM">FIM Valor</label>
                                            <input type="text" class="form-control" id="FIM_escala" name="FIM_escala"
                                                readonly>
                                        </div>

                                        <div class=" col-md-6 form-group">
                                            <label for="RANKIN">RANKIN</label>
                                            <input type="number" class="form-control" id="RANKIN" name="RANKIN"
                                                readonly>
                                        </div>

                                        <div class=" col-md-6 form-group">
                                            <label for="RANKIN">RANKIN Valor</label>
                                            <input type="text" class="form-control" id="RANKIN_escala"
                                                name="RANKIN_escala" readonly>
                                        </div>

                                        <div class=" col-md-12 form-group">
                                            <label for="MOTRICITY">MOTRICITY INDEX</label>
                                            <input type="number" class="form-control" id="MOTRICITY" name="MOTRICITY"
                                                readonly>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="MARCHA">MARCHA FAC</label>
                                            <input type="number" class="form-control" id="MARCHA" name="MARCHA"
                                                readonly>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="MARCHA">MARCHA FAC Valor</label>
                                            <input type="text" class="form-control" id="MARCHA_escala"
                                                name="MARCHA_escala" readonly>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Guardar Seguimiento</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <!-- Campos del formulario debajo del primer contenedor -->

                    </div>

                    <!-- Espacio entre los dos contenedores -->
                    <div class="col-md-1"></div>

                    <!-- Segundo contenedor a la derecha -->
                    <div class="col-md-6">
                        <div class="row custom-row align-items-center justify-content-center">

                            <div class="col-md-4" style="margin-top: 20px;">
                                <div class="card-container">
                                    <div class="card circular" style="width: 150px; height: 150px;">
                                        <a href="nihss.php" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <img id="nihssImage" src="img/NIHSS.png" class="card-img-top" alt="img">
                                        </a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-top: 20px;">
                                <div class="card-container">
                                    <div class="card circular" style="width: 150px; height: 150px;">
                                        <a href="barthel.php" data-bs-toggle="modal" data-bs-target="#barthel">
                                            <img src="img/Barthel.png" class="card-img-top" alt="img">
                                        </a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-top: 20px;">
                                <div class="card-container">
                                    <div class="card circular" style="width: 150px; height: 150px;">
                                        <a href="FIM.php" data-bs-toggle="modal" data-bs-target="#FIM">
                                            <img src="img/FIM.png" class="card-img-top" alt="img">
                                        </a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-top: 20px;">
                                <div class="card-container">
                                    <div class="card circular" style="width: 150px; height: 150px;">
                                        <a href="rankin.html" data-bs-toggle="modal" data-bs-target="#Rankin">
                                            <img src="img/Rankin.png" class="card-img-top" alt="img">
                                        </a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-top: 20px;">
                                <div class="card-container">
                                    <div class="card circular" style="width: 150px; height: 150px;">
                                        <a href="mi.html" data-bs-toggle="modal" data-bs-target="#MI">
                                            <img src="img/Motricity_Index.png" class="card-img-top" alt="img">
                                        </a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="margin-top: 20px;">
                                <div class="card-container">
                                    <div class="card circular" style="width: 150px; height: 150px;">
                                        <a href="marcha.html" data-bs-toggle="modal" data-bs-target="#marcha">
                                            <img src="img/Marcha_FAC.png" class="card-img-top" alt="img">
                                        </a>
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



            <!-- Repite este bloque para cada una de las 6 tarjetas adicionales -->
    </div>
    </main>

    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>



    <!-- Footer -->
    <div class="custom-footer">
        <span>HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA</span><br>
        <span>GESTIÓN DIGITAL EN SALUD</span>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script_seg.js"></script>

    <script type="module">
        import { seguimientoForm } from "./js/seguimiento.js";
        seguimientoForm();
    </script>

</body>

</html>