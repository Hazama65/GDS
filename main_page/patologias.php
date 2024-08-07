<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Patología</title>
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

        <strong style="margin: 0 auto; color: aliceblue; font-size:20px;">PATOLOGÍAS</strong>
    </div>



    <!-- CARDS -->

    <div class="container" style="center">
        <div class="cards">
            <div class="card">
                <img src="img/dm.jpg" alt="Imagen 1">
                <br>
                <a href="../diabetes" class="btn btn-success">Diabetes</a>
            </div>

            <div class="card">
                <img src="img/hemodinamia.jpg" alt="Imagen 2">
                <br>
                <a href="../hemodinamia" class="btn btn-success">Hemodinamia</a>
            </div>

            <div class="card">
                <img src="img/lupus.jpg" alt="Imagen 2">
                <br>
                <a href="../lupus" class="btn btn-success">Lupus</a>
            </div>
            
            <div class="card">
                <img src="img/artritis.jpg" alt="Imagen 2">
                <br>
                <a href="../artritis" class="btn btn-success">Artritis Reumatoide</a>
            </div>
            <div class="card">
                <img src="img/sca.jpg" alt="Imagen 2">
                <br>
                <a href="../sindrome_coronario" class="btn btn-success">SCA</a>
            </div>

        </div>

        <div class="cards">

            <div class="card">
                <img src="img/" alt="Imagen 2">
                <br>
                <a href="../ganglio_cervical" class="btn btn-success">Ganglio Cervical</a>
            </div>
            
        </div>
    </div> <!-- es el div que cierra <div class="container" style="center">-->

    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>
</body>
</html>