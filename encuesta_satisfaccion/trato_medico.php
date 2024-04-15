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

    </header>

    <div style="position: absolute; bottom: 5; right: 0; padding: 15px;">
        <a href="genero.php">
            <button type="button" class="btn btn-outline-light" id="inicio-button" title="MAL_TRATO" style="font-size: 15px; background-color: rgb(181, 78, 105); color: rgb(255, 255, 255);">
                <i class="bi bi-arrow-right-circle-fill"></i>
            </button>
        </a>
    </div>
    <div class="form-header">

        <h5 class="form-title" style="text-align: center;
                        background-color:rgb(162, 34, 68,0.8);
                        color: aliceblue;
                        margin-top:35;
                        font-size: 30px;">
            ¿El trato que recibió del Medico y de la Enfermera ha sido amable y respetuoso?</h5>
    </div>


    <div class="container">
        <div class="cards-list">




            <div class="card-trato card trato card-1" onclick="document.getElementById('trato_Si').checked = true;">
                <div class="card_image">
                    <img src="img/muysatisfecho.png" />
                </div>
                <div class="card_title">
                    <input type="radio" id="trato_Si" name="grupo_tratomedico" value="trato_Si"><br><br>
                    <label style="color: black; font-size: 12px;" for="trato_Si">Si</label>
                </div>
            </div>

            <div class="card-trato card trato card-1" onclick="document.getElementById('trato_No').checked = true;">
                <div class="card_image"> <img src="img/muyinsatisfecho.png" /> </div>
                <div class="card_title">
                    <input type="radio" id="trato_No" name="grupo_tratomedico" value="trato_No"><br><br>
                    <label style="color: black; font-size: 12px;" for="trato_No">No</label>
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
        Hospital Regional de Alta Especialidad de Ixtapaluca <br> Dirección de Operaciones - Gestión Digital en Salud - 2024
    </footer>
</body>

</html>