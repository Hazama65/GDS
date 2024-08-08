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
    <link rel="stylesheet" href="css/style.css">
    <title>Calidad</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/hraei11.png" alt="Logo">
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        </nav>
    </header>

    <div class="container1" style="height: 40px;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding: 0 20px;
                            background-color: rgb(35,91,78,0.70);">

        <strong style="margin: 0 auto; color: aliceblue; font-size:20px;">CALIDAD</strong>
    </div>



    <!-- CARDS -->

    <div class= "container" style="center;">
        <div class="cards">
            <div class="card">
                <img src="img/FormularioNoReporte.png" alt="Imagen 1">
                <br>
                <a href="../cuestionario/registros.php" class="btn btn-success">No Reporte</a>
            </div>
            <div class="card">
                <img src="img/encuesta_satisfaccion.png" alt="Imagen 1">
                <br>
                <a href="../encuesta_satisfaccion/registros.php" class="btn btn-success">Satisfaccion</a>
            </div>
            <div class="card">
                <img src="img/iaas.jpg" alt="Imagen 6">
                <br>
                <a href="../iaas" class="btn btn-success">IAAS</a>
            </div>
            <div class="card">
                <img src="img/tasa_iaas.jpg" alt="Imagen 7">
                <br>
                <a href="../tasa_iaas" class="btn btn-success">Tasa de IAAS</a>
            </div>

            <div class="card">
                <img src="img/seguridad_px.jpg" alt="Imagen 7">
                <br>
                <a href="SeguridaddelPaciente.php" class="btn btn-success">Seguridad del Paciente</a>
            </div>
        </div>
    </div> <!-- es el div que cierra <div class="container" style="center">-->
    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en
        Salud - 2024
    </footer>
</body>

</html>