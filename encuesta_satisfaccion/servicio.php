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
        <a href="trato_medico.php">
            <button type="button" class="btn btn-outline-light" id="inicio-button" title="servicio" style="font-size: 15px; background-color: rgb(181, 78, 105); color: rgb(255, 255, 255);">
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
            Servicio en el que fue atendido:</h5>

    </div>
    <div class="container">
        <div class="row">
            <div class="cards-list">

                <div class="card card-An circular-cardservicio" onclick="document.getElementById('servicio_anestesia').checked = true;">
                    <div class="card_image"> <img src="img/anestesiologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_anestesia" name="grupo_servicio" value="servicio_anestesia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_anestesia">Anestesiología</label>
                    </div>
                </div>

                <div class="card card-cardio circular-cardservicio" onclick="document.getElementById('servicio_cardiologia').checked = true;">
                    <div class="card_image"> <img src="img/cardiologia1.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_cardiologia" name="grupo_servicio" value="servicio_cardiologia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_cardiologia">Cardiología</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_ginecologia').checked = true;">
                    <div class="card_image"> <img src="img/Ginecologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_ginecologia" name="grupo_servicio" value="servicio_ginecologia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_ginecologia">Ginecología</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_hematologia').checked = true;">
                    <div class="card_image"> <img src="img/Hematologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_hematologia" name="grupo_servicio" value="servicio_hematologia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_hematologia">Hematología</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_neurologia').checked = true;">
                    <div class="card_image"> <img src="img/Neurologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_neurologia" name="grupo_servicio" value="servicio_neurologia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_neurologia">Neurología</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_nutricion').checked = true;">
                    <div class="card_image"> <img src="img/Nutricion.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_nutricion" name="grupo_servicio" value="servicio_nutricion"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_nutricion">Nutrición</label>
                    </div>
                </div>


            </div>

        </div>

        <div class="row">
            <div class="cards-list">

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_oftalmologica').checked = true;">
                    <div class="card_image"> <img src="img/Oftalmologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_oftalmologica" name="grupo_servicio" value="servicio_oftalmologica"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_oftalmologica">Oftalmológica</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_Ortopedia').checked = true;">
                    <div class="card_image"> <img src="img/Ortopedia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_Ortopedia" name="grupo_servicio" value="servicio_Ortopedia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_Ortopedia">Ortopedia</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_Pediatria').checked = true;">
                    <div class="card_image"> <img src="img/Pediatria.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_Pediatria" name="grupo_servicio" value="servicio_Pediatria"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_Pediatria">Pediatría</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_Psicologia').checked = true;">
                    <div class="card_image"> <img src="img/psicologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_Psicologia" name="grupo_servicio" value="servicio_Psicologia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_Psicologia">Psicología </label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_clinicaCateter').checked = true;">
                    <div class="card_image"> <img src="img/clinica_catetr.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_clinicaCateter" name="grupo_servicio" value="servicio_clinicaCateter"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_clinicaCateter">Clínica de Catéter</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="cards-list">

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_clinicaHeridas').checked = true;">
                    <div class="card_image"> <img src="img/Clinica_heridas.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_clinicaHeridas" name="grupo_servicio" value="servicio_clinicaHeridas"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_clinicaHeridas">Clínica de Heridas</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_clinicaMujer').checked = true;">
                    <div class="card_image"> <img src="img/clinica_mujer.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_clinicaMujer" name="grupo_servicio" value="servicio_clinicaMujer"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_clinicaMujer">Clínica de la Mujer</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_clinicaDolor').checked = true;">
                    <div class="card_image"> <img src="img/Clinica_Dolor1.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_clinicaDolor" name="grupo_servicio" value="servicio_clinicaDolor"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_clinicaDolor">Clínica del Dolor</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_clinicaSueño').checked = true;">
                    <div class="card_image"> <img src="img/ClinicaSueño.png." /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_clinicaSueño" name="grupo_servicio" value="servicio_clinicaSueño"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_clinicaSueño">Clínica del Sueño </label>
                    </div>
                </div>



                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_algologia').checked = true;">
                    <div class="card_image"> <img src="img/Algologia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_algologia" name="grupo_servicio" value="servicio_algologia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_algologia">Algología</label>
                    </div>
                </div>

                <div class="card card-bra circular-cardservicio" onclick="document.getElementById('servicio_braquiteriapia').checked = true;">
                    <div class="card_image"> <img src="img/radioterapia1.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_braquiteriapia" name="grupo_servicio" value="servicio_braquiteriapia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_braquiteriapia">Braquiterapia</label>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="cards-list">

                <div class="card card-bra circular-cardservicio" onclick="document.getElementById('servicio_cuidadospaliativos').checked = true;">
                    <div class="card_image"> <img src="img/cuidados_paliativos.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_cuidadospaliativos" name="grupo_servicio" value="servicio_cuidadospaliativos"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_cuidadospaliativos">Cuidados Paliativos</label>
                    </div>
                </div>

                <div class="card card-bra circular-cardservicio" onclick="document.getElementById('servicio_medicinanuclear').checked = true;">
                    <div class="card_image"> <img src="img/medicina_nuclear.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_medicinanuclear" name="grupo_servicio" value="servicio_medicinanuclear"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_medicinanuclear">Medicina Nuclear</label>
                    </div>
                </div>

                <div class="card card-2 circular-cardservicio" onclick="document.getElementById('servicio_radioterapia').checked = true;">
                    <div class="card_image"> <img src="img/radioterapia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_radioterapia" name="grupo_servicio" value="servicio_radioterapia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_radioterapia">Radioterapia</label>
                    </div>
                </div>

                <div class="card card-1 circular-cardservicio" onclick="document.getElementById('servicio_rehabi').checked = true;">
                    <div class="card_image"> <img src="img\rehabilitación.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_rehabi" name="grupo_servicio" value="servicio_rehabi"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_rehabi">Rehabilitación</label>
                    </div>
                </div>

                <div class="card card-3 circular-cardservicio" onclick="document.getElementById('servicio_quimioterapia').checked = true;">
                    <div class="card_image"> <img src="img/quimioterapia.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_quimioterapia" name="grupo_servicio" value="servicio_quimioterapia"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_quimioterapia">Quimioterapia</label><br>
                    </div>
                </div>


                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_Imagen').checked = true;">
                    <div class="card_image"> <img src="img/imagen.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_Imagen" name="grupo_servicio" value="servicio_Imagen"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_Imagen">Imagen</label>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="cards-list">

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_laboratorio').checked = true;">
                    <div class="card_image"> <img src="img/imagen.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_laboratorio" name="grupo_servicio" value="servicio_laboratorio"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_laboratorio">Laboratorio</label>
                    </div>
                </div>


                <div class="card card-3 circular-cardservicio" onclick="document.getElementById('servicio_trabajoSocial').checked = true;">
                    <div class="card_image"> <img src="img/Trabajo_Social.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_trabajoSocial" name="grupo_servicio" value="servicio_trabajoSocial"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_trabajoSocial">Trabajo Social </label><br>
                    </div>
                </div>

                <div class="card card-Ate circular-cardservicio" onclick="document.getElementById('servicio_serviciocliente').checked = true;">
                    <div class="card_image"> <img src="img\Atención_Usuario.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_serviciocliente" name="grupo_servicio" value="servicio_serviciocliente"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_serviciocliente">Atención al usuario</label>
                    </div>
                </div>

                <div class="card card-Al circular-cardservicio" onclick="document.getElementById('servicio_bancosangre').checked = true;">
                    <div class="card_image"> <img src="img/Banco_Sangre.png" /> </div>
                    <div class="card_title">
                        <input type="radio" id="servicio_bancosangre" name="grupo_servicio" value="servicio_bancosangre"><br><br>
                        <label style="color: black; font-size: 18px;" for="servicio_bancosangre">Banco de Sangre</label>
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