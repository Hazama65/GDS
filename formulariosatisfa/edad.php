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
            <div style=" padding: 20px; text-align: left;">
                <a href="genero.php">
                    <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
                        <i class="bi bi-rewind-fill"></i>
                    </button>
                </a>
            </div>
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
                        font-size: 30px;">
            Edad</h5>
    </div>
    <div class="container">


        <div class="cards-list">

            <div class="cards-list">
                <div class="card-container">
                    <div class="card card1" onclick="document.getElementById('menor18años').checked = true;">
                        <div class="card_image"> <img src="img/adolescentes1.png" /> </div>
                        <div class="card_title ">
                            <label style="color: black; font-size: 20px;" for="menor18años">Menor de 18 años</label><br>
                            <input type="radio" id="menor18años" name="menor18años" value="menor18años">
                        </div>
                    </div>
                

                <div class="card 2">
                    <div class="card_image">
                        <img src="img/ninos1.png" />
                    </div>
                    <div class="card_title ">
                        <p style="color: black; font-size: 20px;">Entre 19 y 30 años</p>
                    </div>
                </div>

                <div class="card 3">
                    <div class="card_image">
                        <img src="img/adolescentes.png" />
                    </div>
                    <div class="card_title ">
                        <p style="color: black; font-size: 20px;">Entre 31 y 49 años</p>
                    </div>
                </div>

                <div class="card 4">
                    <div class="card_image">
                        <img src="img/adulto.png" />
                    </div>
                    <div class="card_title ">
                        <p style="color: black; font-size: 20px;">Entre 50 y 65 años</p>
                    </div>
                </div>

                </div>

            </div>

        </div>


    </div>
    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>
</body>

</html>