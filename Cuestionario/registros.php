<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['valid_user'])) {
    // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
    header('Location: ../login/index.php');
    exit;
}
require('php/controllers/registro.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h5>Registros - 'NO REPORTE'</h5>
        <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
            <i class="bi bi-power"></i>
        </button>
    </header>
    <div style="overflow: hidden;">
        <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"
            style="fill: #7a0027; width: 100%; height: 30px; transform: scaleX(-1);">
            <path d="M1200 120L0 16.48V0h1200v120z" />
        </svg>
    </div>


    <div class="contenedor_tabla">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Número de Cuestionario</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Servicio</th>
                    <th>Turno</th>
                    <th>Profesión</th>
                    <th>Contrato</th>
                    <th>1. ¿Conoce cómo se debe realizar un reporte de un evento adverso, evento centinela o Cuasifalla en el HRAEI?</th>
                    <th>Si su respuesta es afirmativa</th>
                    <th>2. ¿Durante los 2 últimos años usted ha realizado el reporte de algún tipo de evento, evento adverso, evento centinela o Cuasifalla?</th>
                    <th>Si su respuesta es afirmativa/Negativa</th>
                    <th>3. ¿Cómo se enteró de la forma de como notificar eventos (evento adverso, evento centinela o Cuasifalla)?</th>
                    <th>Pregunta 3 Otras Respuestas</th>
                    <th>4. ¿Conoce que eventos debe reportar en las plataformas?</th>
                    <th>4.1 Si su respuesta es afirmativa; señale a continuación que eventos adversos debe notificar.</th>
                    <th>4.2 Si su respuesta es afirmativa, señale a continuación que eventos centinelas debe reportar</th>
                    <th>4.3 Si su respuesta es afirmativa en qué casos debe reportar cuasifallas</th>
                </tr>
            </thead>
            <tbody>
    
                <?php foreach ($AllData as $dato): ?>
                    <tr>
                        <td>
                            <?= $dato['num_cuestionario'] ?>
                        </td>
                        <td>
                            <?= $dato['edad'] ?>
                        </td>
                        <td>
                            <?= $dato['sexo'] ?>
                        </td>
                        <td>
                            <?= $dato['servicio'] ?>
                        </td>
                        <td>
                            <?= $dato['turno'] ?>
                        </td>
                        <td>
                            <?= $dato['profesion'] ?>
                        </td>
                        <td>
                            <?= $dato['contrato'] ?>
                        </td>
                        <td>
                            <?= $dato['pregunta_1'] ?>
                        </td>
                        <td>
                            <?= $dato['preguntas_compuestas1'] ?>
                        </td>
                        <td>
                            <?= $dato['pregunta_2'] ?>
                        </td>
                        <td>
                            <?= $dato['preguntas_compuestas2'] ?>
                        </td>
                        <td>
                            <?= $dato['pregunta_3'] ?>
                        </td>
                        <td>
                            <?= $dato['pregunta_3_otros'] ?>
                        </td>
                        <td>
                            <?= $dato['pregunta_4'] ?>
                        </td>
                        <td>
                            <?= $dato['preguntas_compuestas4_1'] ?>
                        </td>
                        <td>
                            <?= $dato['preguntas_compuestas4_2'] ?>
                        </td>
                        <td>
                            <?= $dato['preguntas_compuestas4_3'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



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