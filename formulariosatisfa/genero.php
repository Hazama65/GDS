<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ENCUESTA DE SATISFACCIÓN PARA LAS ÁREAS AMBULATORIAS</title>
</head>

<body>
    <!-- <header>
        <a href="index.php">Inicio</a>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
    </header> -->


    <header>
        <div class="container">
            <div class="logo">
                <img src="img/hraei11.png" alt="Logo" style="max-width: 50px; height: auto;">
            </div>
            <h5>ENCUESTA DE SATISFACCIÓN PARA LAS ÁREAS AMBULATORIAS</h5>
        </div>
    </header>


    <div class="form-header">

        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(162, 34, 68,0.8);
                        color: aliceblue;
                        margin-top:30;
                        font-size: 30px;
                        ">
            Género </h5>
        <div style="position: absolute; bottom: 7; right: 0; padding: 15px;">
            <a href="edad.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Edad" style="font-size: 30px; background-color: rgb(134, 72, 90); color: white;">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </button>
            </a>
        </div>

    </div>


    <div class="cards-list">

        <div class="card card-1" onclick="document.getElementById('masculino').checked = true;">
            <div class="card_image" style="color: black; font-size: 20px;"> <img src="img/hombre.png" />Masculino </div>
            <div class="card_title">
                <input type="radio" id="masculino" name="genero" value="masculino" style="display: none;"><br><br>
                <label  for="masculino"></label>
            </div>
        </div>

       

        <div class="card card-2" onclick="document.getElementById('femenino').checked = true;">
            <div class="card_image"> <img src="img/mujer.png" /> </div>
            <div class="card_title">
                <label style="color: black; font-size: 20px;" for="femenino">Femenino</label><br>
                <input type="radio" id="femenino" name="genero" value="femenino">
            </div>


        </div>

        <div class="card card-3" onclick="document.getElementById('otro').checked = true;">
            <div class="card_image"> <img src="img/otro.png" /> </div>
            <div class="card_title">
                <label style="color: black; font-size: 20px;" for="otro">Otro</label><br>
                <input type="radio" id="otro" name="genero" value="otro">

            </div>


        </div>
    </div>







    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>
</body>

</html>