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
include ('php/controllers/consulta.controller.php');
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
    <title>Consulta</title>
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
                <td><?php echo $nombre_terapeuta; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Turno</td>
                <td><?php echo $Turno_terapeuta; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> Datos del Paciente</th>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre del Paciente</td>
                <td><?php echo $nombre_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha de Nacimiento</td>
                <td><?php echo $fecha; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tipo de Paciente</td>
                <td><?php echo $tipo_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Reporte de</td>
                <td><?php echo $fecha_inicio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Reporte hasta</td>
                <td><?php echo $fecha_fin; ?></td>
            </tr>



            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218);">Terapias</th>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> </th>
            </tr>


            <tr>
                <td class="estilo-celda">Número de Terapias fisicas</td>
                <td><?php echo $sesiones_num_terapia_fisica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Primera Vez (TF)</td>
                <td><?php echo $primera_vez_terapia_fisica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Subsecuente (TF)</td>
                <td><?php echo $subsecuente_terapia_fisica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapias ambulatorias (TF)</td>
                <td><?php echo $terapias_ambulatorias_terapia_fisica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapias en Hospitalización (TF)</td>
                <td><?php echo $terapias_hospitalizacion_terapia_fisica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Terapia ocupacional</td>
                <td><?php echo $sesiones_num_terapia_ocupacional; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Primera Vez (TO)</td>
                <td><?php echo $primera_vez_terapia_ocupacional; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Subsecuente (TO)</td>
                <td><?php echo $subsecuente_terapia_ocupacional; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapias ambulatorias (TO)</td>
                <td><?php echo $terapias_ambulatorias_terapia_ocupacional; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapias en Hospitalización (TO)</td>
                <td><?php echo $terapias_hospitalizacion_terapia_ocupacional; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Terapia de lenguaje</td>
                <td><?php echo $sesiones_num_terapia_lenguaje; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Primera Vez (TL)</td>
                <td><?php echo $primera_vez_terapia_lenguaje; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Subsecuente (TL)</td>
                <td><?php echo $subsecuente_terapia_lenguaje; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapias ambulatorias (TL)</td>
                <td><?php echo $terapias_ambulatorias_terapia_lenguaje; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Terapias en Hospitalización (TL)</td>
                <td><?php echo $terapias_hospitalizacion_terapia_lenguaje; ?></td>
            </tr>

            <tr>
                <th scope="col" style="background-color: rgb(106, 158, 218);">Procedimientos</th>
                <th scope="col" style="background-color: rgb(106, 158, 218);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Número de Aplicación de férula</td>
                <td><?php echo $sesiones_num_aplicacion_ferula; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Aplicación de vendaje enyesado</td>
                <td><?php echo $sesiones_num_Aplicacion_vendaje_enyesado; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Baño de parafina</td>
                <td><?php echo $sesiones_num_Baño_parafina; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de CHC/CF</td>
                <td><?php echo $sesiones_num_CHC_CF; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Corrientes interfereciales</td>
                <td><?php echo $sesiones_num_Corrientes_interfereciales; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Electroestimulación</td>
                <td><?php echo $sesiones_num_Electroestimulacion; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Ejercicio Asistido</td>
                <td><?php echo $sesiones_num_Ejercicio_Asistido; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Ejercicio de Fisioterapia</td>
                <td><?php echo $sesiones_num_Ejercicio_Fisioterapia; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Hidroterapia/Tanque Terapéutico</td>
                <td><?php echo $sesiones_num_Hidroterapia_TanqueTerapéutico; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Hidroterapia/Tina de Habbard</td>
                <td><?php echo $sesiones_num_Hidroterapia_Tina_Habbard; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Hidroterapia/Tina de Remolinos</td>
                <td><?php echo $sesiones_num_Hidroterapia_Tina_Remolinos; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de TENS</td>
                <td><?php echo $sesiones_num_TENS; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Terapia combinada USG y Corriente Eléctrica</td>
                <td><?php echo $sesiones_num_TerapiacombinadaUSG_CorrienteEléctrica; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Ultrasonido Terapéutico</td>
                <td><?php echo $sesiones_num_Ultrasonido_Terapeutico; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Tracción Cervical y Lumbar</td>
                <td><?php echo $sesiones_num_TraccionCervical_Lumbar; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Rehabilitacion Cardíaca</td>
                <td><?php echo $sesiones_num_Rehabi_cardiaca; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Ejercicio respiratorio (R. Pulmonar)</td>
                <td><?php echo $sesiones_num_Ejercicios_respiratorio; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Terapia Laser</td>
                <td><?php echo $sesiones_num_Terapia_Laser; ?></td>
            </tr>
            <tr>
                <td class="estilo-celda">Número de Toxina Botulinica</td>
                <td><?php echo $sesiones_num_Toxina_Botulinica; ?></td>
            </tr>

            <!--====================================TRATAMIENTOS============================-->

        </tbody>
    </table>





</body>

</html>