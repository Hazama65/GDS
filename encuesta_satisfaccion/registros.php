<?php
// require('php/controllers/registro.controller.php');
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
    <link rel="stylesheet" href="css/style.css">
    <title>Registros</title>
</head>

<body>
    <header>
        <h5>Registros - Encuesta de Satisfaccion</h5>
        <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
            <i class="bi bi-power"></i>
        </button>
    </header>

    <div class="contenedor_tabla">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Servicio en el que fue atendido</th>
                    <th>¿El trato que recibió del Medico y de la Enfermera ha sido amable y respetuoso?</th>
                    <th>¿El Médico y la Enfermera le explicaron fácilmente sobre su enfermedad y sus cuidados ?</th>
                    <th>¿Recibió orientación por parte del personal,sobre los tramites que realizara?</th>
                    <th>¿Consultaste o te informaron sobre los derechos como paciente?</th>
                    <th>¿Como calificaría la limpieza e higiene del hospital?</th>
                    <th>¿El tiempo aproximado de espera para su atención, consulta o (estudio) fue de?</th>
                    <th>Que tan satisfecho estas con tu experiencia en el Hospital Regional de Alta Especialidad de
                        Ixtapaluca</th>
                    <th>¿Recibió MAL TRATO? Indique el tipo de personal que lo origino</th>
                    <th>Alguna Sugerencia o Recomendación para mejorar</th>
                </tr>
            </thead>
            <tbody>


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