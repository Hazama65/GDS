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
            ¿Recibió MAL TRATO? Indique el tipo de personal que lo origino</h5>

    </div>
    <div class="container">
        <div class="row">
            <div class="cards-list">

                <div class="card card-An circular-cardservicio" onclick="document.getElementById('personal_medico').checked = true;">
                    <div class="card_image"> <img src="img/personal_medico.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_medico" name="grupo_personal" value="personal_medico"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_medico">Personal (Medico,Psicólogo, Nutriologo,Psiquiatria)</label>
                    </div>
                </div>

                <div class="card card-cardio circular-cardservicio" onclick="document.getElementById('personal_enfermeria').checked = true;">
                    <div class="card_image"> <img src="img/personal_enfermeria.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_enfermeria" name="grupo_personal" value="personal_enfermeria"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_enfermeria">Personal de Enfermería</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_recepcion').checked = true;">
                    <div class="card_image"> <img src="img/personal_recepcion.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_recepcion" name="grupo_personal" value="personal_recepcion"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_recepcion">Personal de Recepción</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_trabajosocial').checked = true;">
                    <div class="card_image"> <img src="img/personal_trabajosocial.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_trabajosocial" name="grupo_personal" value="personal_trabajosocial"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_trabajosocial">Personal de Trabajo Social</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_laboratorio').checked = true;">
                    <div class="card_image"> <img src="img\personal_laboratorio.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_laboratorio" name="grupo_personal" value="personal_laboratorio"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_laboratorio">Personal de Laboratorio</label>
                    </div>
                </div>



            </div>
        </div>

        <div class="row">
            <div class="cards-list">

                <div class="card card-An circular-cardservicio" onclick="document.getElementById('personal_vigilancia').checked = true;">
                    <div class="card_image"> <img src="img/personal_vigilancia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_vigilancia" name="grupo_personal" value="personal_vigilancia"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_vigilancia">Personal de Vigilancia</label>
                    </div>
                </div>

                <div class="card card-cardio circular-cardservicio" onclick="document.getElementById('personal_kiosko').checked = true;">
                    <div class="card_image"> <img src="img/personal_kiosko.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_kiosko" name="grupo_personal" value="personal_kiosko"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_kiosko">Personal de kiosco</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_limpieza').checked = true;">
                    <div class="card_image"> <img src="img/personal_limpieza.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_limpieza" name="grupo_personal" value="personal_limpieza"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_limpieza">Personal de Limpieza</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_bancosangre').checked = true;">
                    <div class="card_image"> <img src="img/personal_bancosangre.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_bancosangre" name="grupo_personal" value="personal_bancosangre"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_bancosangre">Personal de Banco de Sangre</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_quimio').checked = true;">
                    <div class="card_image"> <img src="img\personal_quimio.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_quimio" name="grupo_personal" value="personal_quimio"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_quimio">Personal de Quimioterapia</label>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="cards-list">

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_imagen').checked = true;">
                    <div class="card_image"> <img src="img/personal_imagen.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_imagen" name="grupo_personal" value="personal_imagen"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_imagen">Personal de Imagen</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_radioterapia').checked = true;">
                    <div class="card_image"> <img src="img/personal_radioterapia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_radioterapia" name="grupo_personal" value="personal_radioterapia"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_radioterapia">Personal de Radioterapia</label>
                    </div>
                </div>


                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_farmacia').checked = true;">
                    <div class="card_image"> <img src="img\personal_farmacia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_farmacia" name="grupo_personal" value="personal_farmacia"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_farmacia">Personal de Farmacia</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_axuliar').checked = true;">
                    <div class="card_image"> <img src="img/personal_axuliar.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_axuliar" name="grupo_personal" value="personal_axuliar"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_axuliar">Personal de Auxiliar</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('personal_ninguno').checked = true;">
                    <div class="card_image"> <img src="img/personal_ninguno.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="personal_ninguno" name="grupo_personal" value="personal_ninguno"><br><br>
                        <label style="color: black; font-size: 12px;" for="personal_ninguno">Ninguno</label>
                    </div>
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