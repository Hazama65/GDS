<?php
    include('php/visualizacion.php');
?>

<?php
function obtenerColorPorPrioridad($prioridad) {
    switch ($prioridad) {
        case 'Alta':
            return 'rgb(255, 0, 0,0.9)'; // Color rojo para prioridad alta
        case 'Media':
            return 'rgb(255, 215, 0,0.9)'; // Color naranja para prioridad media
        case 'Baja':
            return 'rgb(0, 128, 0,0.9)'; // Color verde para prioridad baja
        default:
            return 'GREY'; // Color por defecto si no se reconoce la prioridad
    }
}
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
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>
            
            <tr>
                <th scope="col"> Procedimientos Endoscopicos</th>
                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">

            <tr>
                <td class="estilo-celda">Fecha</td>
                <td><?php echo $fecha_registro; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td> <?php echo $nombre_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Nacimiento</td>
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

           

          <!--Datos de Hospitalización-->
            

            <tr>
                <th scope="col"  style="background-color: rgb(246, 206, 216, 0.7);"> Datos de Hospitalización</th>
                <th scope="col" style="background-color: rgb(246, 206, 216, 0.7);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">Diagnóstico</td>
                <td><?php echo $diagnostico; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cama</td>
                <td><?php echo $cama; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Días de EIH</td>
                <td><?php echo $dias_eih; ?></td>
            </tr>

            <!--====================================Atención médica============================-->
            
            <tr>
                <th scope="col"  style="background-color: rgb(246, 206, 216, 0.7);">Laboratorio</th>
                <th scope="col" style="background-color: rgb(246, 206, 216, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">HB</td>
                <td><?php echo $hb; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">HCTO</td>
                <td><?php echo $hcto; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">INR</td>
                <td><?php echo $inr; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Plaquetas</td>
                <td><?php echo $plaquetas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cultivo</td>
                <td><?php echo $cultivo; ?></td>
            </tr>


            <!--===================================Estudio Solicitado====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(246, 206, 216, 0.7);">Estudio Solicitado</th>
                <th scope="col" style="background-color: rgb(246, 206, 216, 0.7);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Procedimiento Solicitado</td>
                <td><?php echo $procedimiento; ?></td>
            </tr>
            
          

            <tr>
                <td class="estilo-celda">Prioridad</td>
                <td style="background-color: <?php echo obtenerColorPorPrioridad($prioridad); ?>"><?php echo $prioridad; ?></td>
            </tr>

           
            
            <tr>
                <td class="estilo-celda">Servicio</td>
                <td><?php echo $medico_endo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Estatus de Solicitud</td>
                <td><?php echo $estatus_solicitud; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Programada</td>
                <td><?php echo $fecha_programada; ?></td>
            </tr>

            <!--=================================== Materiales ====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(246, 206, 216, 0.7);">Materiales</th>
                <th scope="col" style="background-color: rgb(246, 206, 216, 0.7);"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Pinza de Biopsia</td>
                <td><?php echo $Pinza_Biopsia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Kit de Ligadura Microtech</td>
                <td><?php echo $Kit_Ligadura_microtech; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Aguja de Escleroterapia</td>
                <td><?php echo $Aguja_Escleroterapia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Argon Plasma</td>
                <td><?php echo $Argon_Plasma; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sonda FiAPC</td>
                <td><?php echo $Sonda_FiAPC; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Protesis Esofágica Wallflex Parcialmente Cubierta</td>
                <td><?php echo $Protesis_Esofagica_Wallflex; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Sistema Ovesco</td>
                <td><?php echo $Sistema_Ovesco; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Guia Hidrofilica</td>
                <td><?php echo $Guia_Hidrofilica; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Kit de Gastrotomia Endoscopica Pull</td>
                <td><?php echo $Kit_Gastrotomia_Endoscopica_Pull; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hemoclips</td>
                <td><?php echo $Hemoclips; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Ovesco</td>
                <td><?php echo $Ovesco; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Kit de Ligadura</td>
                <td><?php echo $Kit_Ligadura; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sonda de Gastrotomia</td>
                <td><?php echo $Sonda_de_Gastrotomia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Asa de Polipectomia</td>
                <td><?php echo $Asa_de_Polipectomia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Balon Cre</td>
                <td><?php echo $Balon_Cre; ?></td>
            </tr>
            

            <!--===================================Procedimiento Qx Programado Tipo cirugía====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(246, 206, 216, 0.7);">Seguimiento</th>
                <th scope="col" style="background-color: rgb(246, 206, 216, 0.7);"> </th>
            </tr>

            

            <tr>
                <td class="estilo-celda">Fecha de Preprogramación y/o programación</td>
                <td><?php echo $fecha_pre_programada; ?></td>
            </tr>

           
            <tr>
                <td class="estilo-celda">Fecha de realización de estudios</td>
                <td><?php echo $fecha_estudio; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Defunción</td>
                <td><?php echo $defuncion; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Archivo</td>
                <td><img src="data:image/jpeg;base64,<?php echo base64_encode($imagen); ?>" alt="Imagen del paciente" width="450"></td>
            </tr>


           
        </tbody>
    </table>





</body>
</html>
       