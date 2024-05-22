<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>HRAEI - Gestión Digital en Salud</title>
</head>

<body>
    <!--<header>
        <a href="index.php">Inicio</a>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
    </header>-->


    <header>
        <div class="logo">
            <img src="img/hraei11.png" alt="Logo">
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        </nav>
    </header>


    <!-- Carousel-->
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/GDS13.png" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/GDS12.png" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/gds11.png" class="d-block w-100">
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!--Finaliza Carousel-->
    


    <div class="container" style="center">
    <div class="cards">

            <!--<div class="card">
                    <img src="img/cancer.png" alt="Imagen 1">
                    <br>
                    <a href="#" class="btn btn-success">Cáncer</a>
            </div>-->

            

            
            <div class="card">
                <img src="img/calidad.jpg" alt="Imagen 3">
                <br>
                <a href="calidad.php" class="btn btn-success">Calidad</a>
            </div>
            
            <div class="card">
                <img src="img/clinicas.jpg" alt="Imagen 3">
                <br>
                <a href="clinicas.php" class="btn btn-success">Clínicas</a>
            </div>

            <div class="card">
                <img src="img/enfermeria.jpg" alt="Imagen 5">
                <br>
                <a href="enfermeria.php" class="btn btn-success">Enfermería</a>
            </div>

            <div class="card">
                <img src="img/ser_med.jpg" alt="Imagen 4">
                <br>
                <a href="servicios.php" class="btn btn-success">Servicios</a>
            </div>

            <div class="card">
                <img src="img/patologia.jpg" alt="Imagen 2">
                <br>
                <a href="patologias.php" class="btn btn-success">Patologías</a>
            </div>
            
        </div>
    </div>

    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>
</body>
</html>
