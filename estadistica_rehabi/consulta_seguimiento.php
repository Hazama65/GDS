<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Verifica si el usuario ha iniciado sesión y si tiene el sistema correcto
if (!isset($_SESSION['valid_user']) || $_SESSION['system_type'] !== 'estadistica_rehab') {
    // Si el usuario no ha iniciado sesión o no tiene permiso para este sistema
    header('Location: ../login/index.php');
    exit;
}
include ('php/controllers/consulta_seguimiento.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Consulta Seguimiento</title>
</head>

<body>
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col" style="background-color:rgb(62, 104, 170,0.5);"> Datos del Terapueta </th>
                <th scope="col" style="background-color: rgb(62, 104, 170,0.5);"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <!--====================================Datos del Terapueta============================-->
            <tr>
                <td class="estilo-celda">Nombre Terapeuta</td>
                <td><?php echo $nombre_terapeuta_seg; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Turno</td>
                <td><?php echo $Turno_terapeutai_seg; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> Datos del Seguimiento</th>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Sesiones</td>
                <td><?php echo $sesiones_num_seg; ?></td>
            </tr>


            <tr>
                <td class="estilo-celda">Fecha de Seguimiento</td>
                <td><?php echo $fecha_seg; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218);">Terapias y Procedimientos</th>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo de Terapias</td>
                <td><?php echo $tipo_terapias; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218,0.5);">Terapias y Procedimientos</th>
                <th scope="col" style="background-color: rgb(106, 158, 218,0.5);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia fisica</td>
                <td><?php echo $terapia_fisica; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia ocupacional</td>
                <td><?php echo $terapia_ocupacional; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia de lenguaje</td>
                <td><?php echo $terapia_lenguaje; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Aplicación de férula</td>
                <td><?php echo $aplicacion_ferula; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Aplicación de vendaje enyesado</td>
                <td><?php echo $Aplicacion_vendaje_enyesado; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Baño de parafina</td>
                <td><?php echo $Baño_parafina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">CHC/CF</td>
                <td><?php echo $CHC_CF; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Corrientes interfereciales</td>
                <td><?php echo $Corrientes_interfereciales; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Electroestimulación</td>
                <td><?php echo $Electroestimulacion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ejercicio Asistido</td>
                <td><?php echo $Ejercicio_Asistido; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ejercicio de Fisioterapia</td>
                <td><?php echo $Ejercicio_Fisioterapia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hidroterapia/Tanque Terapéutico</td>
                <td><?php echo $Hidroterapia_TanqueTerapéutico; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hidroterapia/Tina de Habbard</td>
                <td><?php echo $Hidroterapia_Tina_Habbard; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hidroterapia/Tina de Remolinos</td>
                <td><?php echo $Hidroterapia_Tina_Remolinos; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">TENS</td>
                <td><?php echo $TENS; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia combinada USG y Corriente Eléctrica</td>
                <td><?php echo $TerapiacombinadaUSG_CorrienteEléctrica; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ultrasonido Terapéutico</td>
                <td><?php echo $Ultrasonido_Terapeutico; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tracción Cervical y Lumbar</td>
                <td><?php echo $TraccionCervical_Lumbar; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Rehabilitacion Cardíaca</td>
                <td><?php echo $Rehabi_cardiaca; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ejercicio respiratorio (R. Pulmonar)</td>
                <td><?php echo $Ejercicios_respiratorio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Terapia Laser</td>
                <td><?php echo $Terapia_Laser; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Toxina Botulinica</td>
                <td><?php echo $Toxina_Botulinica; ?></td>
            </tr>






            <!--====================================TRATAMIENTOS============================-->




        </tbody>
    </table>





</body>

</html>