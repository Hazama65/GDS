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

    <div style="position: absolute; bottom: 7; right: 0; padding: 15px;">
            <a href="servicio.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Edad" style="font-size: 30px; background-color: rgb(134, 72, 90); color: white;">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </button>
            </a>
        </div>

        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(162, 34, 68,0.8);
                        color: aliceblue;
                        margin-top:30;
                        font-size: 30px;">
            Edad</h5>


       
    </div>

    <div class="row">
        <div class="cards-list">
            <div class="card card-1 circular-card" onclick="document.getElementById('menor18años').checked = true;">
                <div class="card_image"> <img src="img/niños.png" /> </div>
                <div class="card_title">
                    <input type="radio" id="menor18años" name="edad" value="menor18años"><br><br>
                    <label style="color: black; font-size: 20px;" for="menor18años">Menor de 18 años</label><br>
                </div>
            </div>

            <div class="card card-2 circular-card" onclick="document.getElementById('adolecentes19a30años').checked = true;">
                <div class="card_image"> <img src="img/adolescente.png" /> </div>
                <div class="card_title">
                    <input type="radio" id="adolecentes19a30años" name="edad" value="adolecentes19a30años">
                    <br><br>
                    <label style="color: black; font-size: 20px;" for="adolecentes19a30años">Entre 19 y 30 años</label><br>
                </div>
            </div>

            <div class="card card-3 circular-card" onclick="document.getElementById('adolecentes31a49años').checked = true;">
                <div class="card_image"> <img src="img/adulto.png" /> </div>
                <div class="card_title">
                <input type="radio" id="adolecentes31a49años" name="edad" value="adolecentes31a49años">
                <br><br>
                    <label style="color: black; font-size: 20px;" for="adolecentes31a49años">Entre 31 y 49 años</label><br>
                </div>
            </div>

            <div class="card card-3 circular-card" onclick="document.getElementById('adulto50a65años').checked = true;">
                <div class="card_image"> <img src="img/abuelito.png" /> </div>
                <div class="card_title">
                <input type="radio" id="adulto50a65años" name="edad" value="adulto50a65años">
                <br><br>
                    <label style="color: black; font-size: 20px;" for="adulto50a65años">Entre 50 y 65 años</label><br>
                </div>
            </div>

            
        </div>

        <div style="padding: 20px; text-align: left;">
            <a href="genero.php">
                <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio" style="font-size: 24px; background-color: blue; color: white;">
                    <i class="bi bi-rewind-fill"></i>
                </button>
            </a>
        </div>
    </div>




    <footer style="font-size:8px;">
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud - 2023
    </footer>
</body>

</html>