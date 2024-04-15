<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Satisfacción</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <?php
        include ('header.php');
    ?>

    <h2 class="form-title" style="text-align: center;
        background-color:rgb(16,49,43);
        color: aliceblue;
        margin-top:0;
        font-size: 25px;
        font-family: 'Montserrat', 'sans-serif';"> EDAD </h2>


    <!--Aquí inician las tarjetas-->
    <main>
    <div class="age-container">
        <div class="card" onclick="redirectToPage('servicio.php')">
            <img src="img\niño.png" alt="Menor de 18 años">
            <div class="card-body">
                <strong>Menor de 18 años</strong>
            </div>
        </div>
        <div class="card" onclick="redirectToPage('servicio.php')">
            <img src="img/joven.png" alt="Entre 19 y 30 años">
            <div class="card-body">
                <strong>Entre 19 y 30 años</strong>
            </div>
        </div>
        <div class="card" onclick="redirectToPage('servicio.php')">
            <img src="img/adulto1.png" alt="Entre 31 y 49 años">
            <div class="card-body">
                <strong>Entre 31 y 49 años</strong>
            </div>
        </div>
        <div class="card" onclick="redirectToPage('servicio.php')">
            <img src="img/viejito.png" alt="Entre 50 y 65 años">
            <div class="card-body">
                <strong>Entre 50 y 65 años</strong>
            </div>
        </div>
    </div>
</main>



<script src="js/script.js"></script>
</body>
</html>