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
    <title>Servicios</title>
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

        <strong style="margin: 0 auto; color: aliceblue; font-size:20px;">SERVICIOS</strong>
    </div>



    <!-- CARDS -->

    <div class="container" style="center">
        <div class="cards">
            <div class="card">
                <img src="img/ambulatoria.jpg" alt="Imagen 1">
                <br>
                <a href="../ambulatoria" class="btn btn-success">Ambulatoria</a>
            </div>
            <div class="card">
                <img src="img/endoscopia.jpg" alt="Imagen 2">
                <br>
                <a href="../endoscopia" class="btn btn-success">Endoscopia</a>
            </div>
            <div class="card">
                <img src="img/folios.jpg" alt="Imagen 3">
                <br>
                <a href="../folios" class="btn btn-success">Folios</a>
            </div>
            <div class="card">
                <img src="img/interconsulta.jpg" alt="Imagen 4">
                <br>
                <a href="../interconsultas_mi" class="btn btn-success">Interconsultas</a>
            </div>
            <div class="card">
                <img src="img/residentes.jpg" alt="Imagen 5">
                <br>
                <a href="../residentes" class="btn btn-success">Residentes</a>
            </div>
            <div class="card">
                <img src="img/triage.jpg" alt="Imagen 5">
                <br>
                <a href="../triage_GinecoObstetrico" class="btn btn-success">Triage Ginecoobstétrico</a>
            </div>
            <!-- <div class="card">
                <img src="img/investigador.jpg" alt="Imagen 8">
                <br>
                <a href="../login/index.php" class="btn btn-success">Protocolos de investigacion</a>
            </div> -->
        </div>
    </div> <!-- es el div que cierra <div class="container" style="center">-->

    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud -
        2023
    </footer>
</body>

</html>