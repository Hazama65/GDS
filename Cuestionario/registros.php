<?php
require('php/controllers/registro.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h5>Registros - 'NO REPORTE'</h5>
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
                    <th>Pregunta 1</th>
                    <th>Opciones de la Pregunta 1</th>
                    <th>Pregunta 2</th>
                    <th>Opciones de la Pregunta 2</th>
                    <th>Pregunta 3</th>
                    <th>Pregunta 3 Otros</th>
                    <th>Pregunta 4</th>
                    <th>Opciones de la Pregunta 4.1</th>
                    <th>Opciones de la Pregunta 4.2</th>
                    <th>Opciones de la Pregunta 4.3</th>
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