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
        font-family: 'Montserrat', 'sans-serif';"> GENERO </h2>


    <!--Aquí inician las tarjetas-->
    <main>
    <div class="gender-container">
        <div class="card" onclick="redirectToPage('edad.php')">
            <img src="img/hombre.png" alt="Masculino">
            <div class="card-body">
                <strong>Masculino</strong>
            </div>
        </div>
        <div class="card" onclick="redirectToPage('edad.php')">
            <img src="img/mujer.png" alt="Femenino">
            <div class="card-body">
                <strong>Femenino</strong>
            </div>
        </div>
        <div class="card" onclick="redirectToPage('edad.php')">
            <img src="img/otro.png" alt="Otro">
            <div class="card-body">
                <strong>Otro</strong>
            </div>
        </div>
    </div>
</main>




    
<script src="js/script.js"></script>
</body>
</html>