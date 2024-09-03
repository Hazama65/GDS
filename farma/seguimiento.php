<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Seguimiento</title>
</head>

<body>
    <header style="text-align: center;">
        <div style=" padding: 20px; text-align: left;">
            <a href="index.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                    <i class="bi bi-rewind-fill"></i>
                </button>
            </a>
        </div>
        <!-- ======================== AQUI INICIA  ======================== -->
        <h5>Seguimiento</h5>
        <div style="padding: 20px; text-align: right;">
            <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </header>
    <br>

    <div class="container">

        <fieldset>
            <legend>



                <div class="row">

                    <div class="col-md-6">
                        <strong style="font-size: 12px;">Fecha Vigiflow</strong>
                        <input id="fecha_vigiflow" name="fecha_vigiflow" type="date" class="control form-control"
                            value="" style="font-size: 12px;">
                    </div>

                    <div class="col-md-6">
                        <strong style="font-size: 12px; ">Tiempo de Notificación </strong>
                        <input id="medicamento_sospechoso" name="medicamento_sospechoso" type="text" value=""
                            class="control form-control" style="font-size: 12px;">
                    </div>

                </div>
            </legend>
        </fieldset>
    </div>







</body>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scripSeg.js"></script>
<script type="module">
    import {
        seguimientoForm
    } from "./js/seguimiento.js";
    seguimientoForm();
</script>

</html>