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
    include('header.php');
    ?>

    <h2 class="form-title" style="text-align: center;
        background-color:rgb(16,49,43);
        color: aliceblue;
        margin-top:0;
        font-size: 25px;
        font-family: 'Montserrat', 'sans-serif';">¿Consultaste o te informaron  sobre los derechos como paciente??</h2>


    <!--Aquí inician las tarjetas-->
    <main>


        <div class="age-container">

            <div>

            </div>


            <div class="card" onclick="redirectToPage('recibio_orientacion.php')">
                <img src="img\muysatisfecho.png" alt="Si">
                <div class="card-body">
                    <strong>Si</strong>
                </div>
            </div>


            <div class="card" onclick="redirectToPage('recibio_orientacion.php')">
                <img src="img\muyinsatisfecho.png" alt="No">
                <div class="card-body">
                    <strong>No</strong>
                </div>
            </div>

            
            <div>

            </div>

    </main>



    <script src="js/script.js"></script>
</body>

</html>