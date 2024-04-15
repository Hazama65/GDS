<?php
include ('php/controllers/consulta.controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Consulta</title>
</head>

<body>
    <!-- Esta etiqueta indica que el contenido dentro de ella corresponde contiene los títulos de las columnas. -->
    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>

            <tr>
                <th scope="col">Datos Paciente</th>
                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td><?php echo $nombre_completo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Escolaridad</td>
                <td><?php echo $escolaridad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Fecha de nacimiento</td>
                <td><?php echo $fecha_nacimiento; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Talla</td>
                <td><?php echo $talla; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Peso</td>
                <td><?php echo $peso; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">IMC</td>
                <td><?php echo $imc; ?> </td>
            </tr>

            <tr>
                <th scope="col">Antecendetes Patologicos</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Ninguno</td>
                <td><?php echo $ninguno; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Alcoholismo</td>
                <td><?php echo $alcoholismo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Esteatosis Hepatica</td>
                <td><?php echo $AR; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Diabetes Mellitus</td>
                <td><?php echo $DM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hipertensión Arterial</td>
                <td><?php echo $HA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Obesidad</td>
                <td><?php echo $obesidad; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Sx Antifosfolípidos</td>
                <td><?php echo $SA; ?> </td>
            </tr>

            <tr>
                <th scope="col">Actividad Lúpica</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Actividad Articular</td>
                <td><?php echo $AA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Cutánea</td>
                <td><?php echo $AC; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Hematología</td>
                <td><?php echo $AH; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Inmunológica</td>
                <td><?php echo $AI; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Neurológica</td>
                <td><?php echo $AN; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Renal</td>
                <td><?php echo $ARE; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Muscular</td>
                <td><?php echo $AM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Actividad Cardiaca</td>
                <td><?php echo $ACA; ?> </td>
            </tr>

            <tr>
                <th scope="col">Calculo SLEDAI</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Registros calculadora</td>
                <td><?php echo $valores_sledai; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Resultado SLEDAI</td>
                <td><?php echo $resultados_sledai; ?> </td>
            </tr>

            <tr>
                <th scope="col">Laboratorios</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Albúmina Sérica</td>
                <td><?php echo $ASE; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">BUN</td>
                <td><?php echo $BUN; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">C3</td>
                <td><?php echo $C3; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">C4</td>
                <td><?php echo $C4; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Creatina Sérica</td>
                <td><?php echo $CS; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Proteinuria en 24 hrs</td>
                <td><?php echo $P24; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Albúminuria en 24 hrs</td>
                <td><?php echo $A24; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Leucocitos</td>
                <td><?php echo $leucocitos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Linfocitos</td>
                <td><?php echo $linfocitos; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Plaquetas</td>
                <td><?php echo $plaquetas; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hemoglobina</td>
                <td><?php echo $hemoglobina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Vitamina D</td>
                <td><?php echo $VD; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Anticuerpo Lúpico</td>
                <td><?php echo $AL; ?> </td>
            </tr>

            <tr>
                <th scope="col">Anticuerpos</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Ac-DNA Elevado</td>
                <td><?php echo $AC_DNA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-SM</td>
                <td><?php echo $AC_SM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-RNP</td>
                <td><?php echo $AC_RNP; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-RO</td>
                <td><?php echo $AC_RO; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-LA</td>
                <td><?php echo $AC_LA; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-Cardiolipinas IgM</td>
                <td><?php echo $AC_CM; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac-Cardiolipinas IgG</td>
                <td><?php echo $AC_CG; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac B2-GPI IgG</td>
                <td><?php echo $AC_BG; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ac B2-GPI IgM</td>
                <td><?php echo $AC_BM; ?> </td>
            </tr>

            <tr>
                <th scope="col">Biopsia Renal</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Biopsia Renal</td>
                <td><?php echo $BR; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td><?php echo $BR_tipo; ?> </td>
            </tr>

            <tr>
                <th scope="col">Marcadores de Mal Pronóstico</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Índice</td>
                <td><?php echo $indice; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Tipo</td>
                <td><?php echo $indice_tipo; ?> </td>
            </tr>

            <tr>
                <th scope="col">Tratamiento</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Metrotexate</td>
                <td><?php echo $Metrotexate; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_metro; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Hidroxicloroquina</td>
                <td><?php echo $Hidroxicloroquina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_hidro; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Azatioprina</td>
                <td><?php echo $Azatioprina; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_aza; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Prednisona</td>
                <td><?php echo $Prednisona; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_predi; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Micofenolato de Mofetilo</td>
                <td><?php echo $Micofenolato; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_mico; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Ciclofosfamida</td>
                <td><?php echo $Ciclofosfamida; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Dosis Semanal</td>
                <td><?php echo $ds_ciclo; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Rituximab</td>
                <td><?php echo $Rituximab; ?> </td>
            </tr>
            <tr>
                <td class="estilo-celda">Apego a Tratamiento</td>
                <td><?php echo $AT; ?> </td>
            </tr>
            <tr>
                <th scope="col">Defunción</th>
                <th scope="col"> </th>
            </tr>
            <tr>
                <td class="estilo-celda">Defunción</td>
                <td><?php echo $defuncion; ?> </td>
            </tr>

        </tbody>
    </table>

</body>

</html>