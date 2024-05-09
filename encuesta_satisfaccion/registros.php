<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['valid_user'])) {
    // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
    header('Location: ../login/index.php');
    exit;
}

require ('php/controllers/registro.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Registros</title>
</head>

<body>
    <header>
        <div class="header-container">
            <h1>Encuesta de Satisfacción Áreas Ambulatorias</h1>
            <div class="header-actions">
                <button class="login-btn"><i class="fas fa-sign-in-alt"></i> </button>
            </div>
        </div>
    </header>

    <div class="contenedor_tabla">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Servicio en que fue atendido</th>
                    <th>¿El trato que recibió del médico y enfermera ha sido amable y respetuoso?</th>
                    <th>¿El Médico y la Enfermera le explicaron fácilmente sobre su enfermedad y sus</th>
                    <th>¿Recibió orientación por parte del personal,sobre los tramites que realizará?</th>
                    <th>¿Consultaste o te informaron sobre los derechos como paciente?</th>
                    <th>¿Cómo calificaría la limpieza e higiene del hospital?</th>
                    <th>Tiempo aproximado de espera para su atención</th>
                    <th>¿Qué tan satisfecho estás con tu experiencia en el Hospital Regional de Alta</th>
                    <th>¿Recibió maltrato?</th>
                    <th>Sugerencia o Recomendación</th>
                    <th>Datos Seguimiento</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($AllData as $dato): ?>
                    <tr>
                        <td><?= $dato['pregunta_1'] ?></td>
                        <td><?= $dato['pregunta_2'] ?></td>
                        <td><?= $dato['pregunta_3'] ?></td>
                        <td><?= $dato['pregunta_4'] ?></td>
                        <td><?= $dato['pregunta_5'] ?></td>
                        <td><?= $dato['pregunta_6'] ?></td>
                        <td><?= $dato['pregunta_7'] ?></td>
                        <td><?= $dato['pregunta_8'] ?></td>
                        <td><?= $dato['pregunta_9'] ?></td>
                        <td><?= $dato['pregunta_10'] ?></td>
                        <td><?= $dato['pregunta_11'] ?></td>
                        <td><?= $dato['pregunta_12'] ?></td>
                        <td><?= $dato['dato_seg'] ?></td>   
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>



    <footer>
        <div class="footer-content">
            <p>Hospital Regional de Alta Especialidad de Ixtapaluca</p>
            <p>Gestión Digital en Salud - 2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>



    <script src="js/tabla.js"></script>
</body>

</html>