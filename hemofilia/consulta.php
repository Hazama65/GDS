<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['valid_user'])) {
    // El usuario no ha iniciado sesión, redirige de vuelta a la página de inicio de sesión
    header('Location: ../login/index.php');
    exit;
}
    include('php/controllers/consulta.controller.php');
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

<style>
       th{
        font-size: 14px;
    }
</style>
    
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th colspan="2" scope="col" style="background-color: rgb(153, 9, 68, 0.8); color: aliceblue; text-align: center;">
      <i class="bi bi-person-circle"></i> DATOS DEL PACIENTE</th>
      <!-- en esta parte el atributo colspan=2 nos ayuda a unir las dos celdas, así en lugar de poner dos sólo las unimos-->
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">Nombre Completo</th>
      <td><?php echo $nombre_paciente; ?></td>
    </tr>

    <tr>
      <th scope="row">CURP</th>
      <td><?php echo $curp; ?></td>
    </tr>

    <tr>
      <th scope="row">Fecha Nacimiento</th>
      <td><?php echo $fecha_nacimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Edad</th>
        <td><?php echo $edad; ?></td>
    </tr>

    <tr>
        <th scope="row">Sexo</th>
        <td><?php echo $sexo; ?></td>
    </tr>

    <tr>
        <th scope="row">Peso</th>
        <td><?php echo $peso; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.7); color: gray; text-align: center;">Clínica</th>
    </tr>

    <tr>
        <th scope="row">Tipo de Hemofilia</th>
        <td><?php echo $tipohemofilia; ?></td>
    </tr>

    <tr>
        <th scope="row">Deficiencia de factor</th>
        <td><?php echo $deficienciafactor; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Clasificación de Hemofilia (VIII)</th>
        <td><?php echo $tipoVIII; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Clasificación de Hemofilia (IX)</th>
        <td><?php echo $tipoIX; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Clasificación de Hemofilia (XI)</th>
        <td><?php echo $tipoXI; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Tipo de EVW</th>
        <td><?php echo $tipovw; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Otra Clasificación</th>
        <td><?php echo $otrashemofilias; ?></td>
    </tr>
   
    <tr>
        <th scope="row">Clasificación por gravedad</th>
        <td><?php echo $clasificacionGravedad; ?></td>
    </tr>

    <tr>
        <th scope="row">Inhibidor</th>
        <td><?php echo $inhibidor; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Inhibidor Baja Respuesta</th>
        <td><?php echo $bajarespuesta; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Inhibidor Alta Respuesta</th>
        <td><?php echo $altarespuesta; ?></td>
    </tr>

    <tr>
        <th scope="row">Artropatia Hemolitica</th>
        <td><?php echo $artropatiahemolitica; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Área Afectada</th>
        <td><?php echo $area_afectada; ?></td>
    </tr>

    <tr>
        <th scope="row">No. de Sangrados Mensuales</th>
        <td><?php echo $sangradosmensuales; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Requirió factor</th>
        <td><?php echo $requierefactor; ?></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">Resultados Independencia Funcional (FISH)</th>
        <td><?php echo $resultadoFISH; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Cuidado Personal</th>
    </tr>

    <tr>
        <th scope="row">Comer y Asearse</th>
        <td><?php echo $comer_aseo; ?></td>
    </tr>

    <tr>
        <th scope="row">Bañarse</th>
        <td><?php echo $bathe; ?></td>
    </tr>

    <tr>
        <th scope="row">Vestirse</th>
        <td><?php echo $vestirse; ?></td>
    </tr>


    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Transferir</th>
    </tr>

    <tr>
        <th scope="row">Sentar</th>
        <td><?php echo $sentar; ?></td>
    </tr>

    <tr>
        <th scope="row">Cunclillas</th>
        <td><?php echo $Cunclillas; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Locomotor</th>
    </tr>

    <tr>
        <th scope="row">Caminar</th>
        <td><?php echo $Caminar; ?></td>
    </tr>

    <tr>
        <th scope="row">Correr</th>
        <td><?php echo $Correr; ?></td>
    </tr>

    <tr>
        <th scope="row">Subir Escaleras (12-14 pasos)</th>
        <td><?php echo $Subir; ?></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">Resultados Salud Articular (HJHS)</th>
        <td><?php echo $puntuacion_HJHS; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Codo Izquierdo</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td><?php echo $CI_inflamacion; ?></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td><?php echo $CI_duracion; ?></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td><?php echo $CI_atrofiamuscular; ?></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td><?php echo $CI_crepitacion_movimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td><?php echo $CI_perdida_flexion; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td><?php echo $CI_perdida_extension; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td><?php echo $CI_dolor_articular; ?></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td><?php echo $CI_fuerza; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Codo Derecho</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td><?php echo $CD_inflamacion; ?></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td><?php echo $CD_duracion; ?></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td><?php echo $CD_atrofiamuscular; ?></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td><?php echo $CD_crepitacion_movimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td><?php echo $CD_perdida_flexion; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td><?php echo $CD_perdida_extension; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td><?php echo $CD_dolor_articular; ?></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td><?php echo $CD_fuerza; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Rodilla Izquierda</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td><?php echo $RI_inflamacion; ?></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td><?php echo $RI_duracion; ?></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td><?php echo $RI_atrofiamuscular; ?></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td><?php echo $RI_crepitacion_movimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td><?php echo $RI_perdida_flexion; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td><?php echo $RI_perdida_extension; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td><?php echo $RI_dolor_articular; ?></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td><?php echo $RI_fuerza; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Rodilla Derecha</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td><?php echo $RD_inflamacion; ?></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td><?php echo $RD_duracion; ?></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td><?php echo $RD_atrofiamuscular; ?></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td><?php echo $RD_crepitacion_movimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td><?php echo $RD_perdida_flexion; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td><?php echo $RD_perdida_extension; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td><?php echo $RD_dolor_articular; ?></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td><?php echo $RD_fuerza; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Tobillo Izquierdo</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td><?php echo $TI_inflamacion; ?></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td><?php echo $TI_duracion; ?></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td><?php echo $TI_atrofiamuscular; ?></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td><?php echo $TI_crepitacion_movimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td><?php echo $TI_perdida_flexion; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td><?php echo $TI_perdida_extension; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td><?php echo $TI_dolor_articular; ?></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td><?php echo $TI_fuerza; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Tobillo Derecho</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td><?php echo $TD_inflamacion; ?></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td><?php echo $TD_duracion; ?></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td><?php echo $TD_atrofiamuscular; ?></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td><?php echo $TD_crepitacion_movimiento; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td><?php echo $TD_perdida_flexion; ?></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td><?php echo $TD_perdida_extension; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td><?php echo $TD_dolor_articular; ?></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td><?php echo $TD_fuerza; ?></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(227, 211, 195, 0.35); color: gray; text-align: center;">Suma del total de Articulaciones</th>
        <td><?php echo $suma_articulaciones; ?></td>
    </tr>

    <tr>
        <th scope="row">Marcha Global <br>(caminar, escaleras, correr, salto sobre una pierna)</th>
        <td><?php echo $marcha_global; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.7); color: gray; text-align: center;">USG (escala HEAD US)</th>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">6 meses</th>
        <td><?php echo $USG_6meses; ?></td>
    </tr>

    <tr>
        <th scope="row">Actividad Inflamatoria</th>
        <td><?php echo $_6_actividad_inflamatoria; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Derrame / Sinovitis</th>
        <td><?php echo $_6_derrame_sinovitis; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Hipertrofia Sinovial</th>
        <td><?php echo $_6_hipertrofia_sinovial; ?></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Cartilago</th>
        <td><?php echo $_6_Cartilago; ?></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Hueso</th>
        <td><?php echo $_6_Hueso; ?></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">12 meses</th>
        <td><?php echo $USG_12meses; ?></td>
    </tr>

    <tr>
        <th scope="row">Actividad Inflamatoria</th>
        <td><?php echo $_12_actividad_inflamatoria; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Derrame / Sinovitis</th>
        <td><?php echo $_12_derrame_sinovitis; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Hipertrofia Sinovial</th>
        <td><?php echo $_12_hipertrofia_sinovial; ?></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Cartilago</th>
        <td><?php echo $_12_Cartilago; ?></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Hueso</th>
        <td><?php echo $_12_Hueso; ?></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">24 meses</th>
        <td><?php echo $USG_24meses; ?></td>
    </tr>

    <tr>
        <th scope="row">Actividad Inflamatoria</th>
        <td><?php echo $_24_actividad_inflamatoria; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Derrame / Sinovitis</th>
        <td><?php echo $_24_derrame_sinovitis; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Hipertrofia Sinovial</th>
        <td><?php echo $_24_hipertrofia_sinovial; ?></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Cartilago</th>
        <td><?php echo $_24_Cartilago; ?></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Hueso</th>
        <td><?php echo $_24_Hueso; ?></td>
    </tr>
    
    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.7); color: gray; text-align: center;">Tratamiento</th>
    </tr>

    <tr>
        <th scope="row">Tipo de Tratamiento</th>
        <td><?php echo $tipo_tratamiento; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Profilaxis</th>
        <td><?php echo $profilaxis; ?></td>
    </tr>

    <tr>
        <th scope="row">Profilaxis con Emicizumab</th>
        <td><?php echo $Profilaxis_Emicizumab; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Tipo Profilaxis con Emicizumab</th>
        <td><?php echo $tipo_Profilaxis; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Dosis(mg) / Kg</th>
        <td><?php echo $dosis_tipoProfilaxis; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Total de mg por Dosis</th>
        <td><?php echo $totalui; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * N° de Dosis por semana</th>
        <td><?php echo $nodosisporsemana; ?></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Entrega</th>
        <td><?php echo $entrega; ?></td>
    </tr>


    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Terapia de remplazo (Inhibidor < 5UB)</th>
    </tr>

    <tr>
        <th scope="row"> * Dosis / Kg</th>
        <td><?php echo $dosis; ?></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por Dosis</th>
        <td><?php echo $totalui_total; ?></td>
    </tr>

    <tr>
        <th scope="row"> * N° de Dosis por semana</th>
        <td><?php echo $nodosisporsemana_2; ?></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por semana</th>
        <td><?php echo $totaluisemana; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Agente de Desvío (Inhibidor > 5UB)</th>
    </tr>

    <tr>
        <th scope="row"> * Dosis / Kg</th>
        <td><?php echo $dosis_desvio; ?></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por Dosis</th>
        <td><?php echo $totalui_desvio; ?></td>
    </tr>

    <tr>
        <th scope="row"> * N° de Dosis por semana</th>
        <td><?php echo $nodosisporsemana_desvio; ?></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por semana</th>
        <td><?php echo $totalui_desvio_semana; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Tratamiento mensual</th>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Recombinante</th>
    </tr>

    <tr>
        <th scope="row">Turoctocog Alfa 250 UI</th>
        <td><?php echo $turo_250; ?></td>
    </tr>

    <tr>
        <th scope="row">Turoctocog Alfa 500 UI</th>
        <td><?php echo $turo_500; ?></td>
    </tr>

    <tr>
        <th scope="row">Turoctocog Alfa 1000 UI</th>
        <td><?php echo $turo_1000; ?></td>
    </tr>

    <tr>
        <th scope="row">Octocog Alfa 250 UI</th>
        <td><?php echo $octo_250; ?></td>
    </tr>

    <tr>
        <th scope="row">Octocog Alfa 500 UI</th>
        <td><?php echo $octo_500; ?></td>
    </tr>

    <tr>
        <th scope="row">Simoctocog Alfa 250 UI</th>
        <td><?php echo $simo_250; ?></td>
    </tr>

    <tr>
        <th scope="row">Simoctocog Alfa 500 UI</th>
        <td><?php echo $simo_500; ?></td>
    </tr>

    <tr>
        <th scope="row">Simoctocog Alfa 1000 UI</th>
        <td><?php echo $simo_1000; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Plasmático</th>
    </tr>

    <tr>
        <th scope="row">Factor VIII 250 UI</th>
        <td><?php echo $factorVIII_250; ?></td>
    </tr>

    <tr>
        <th scope="row">Factor VIII 500 UI</th>
        <td><?php echo $factorVIII_500; ?></td>
    </tr>

    <tr>
        <th scope="row">Factor VIII + vW 500 UI</th>
        <td><?php echo $factorVIIIvW_500; ?></td>
    </tr>

    <tr>
        <th scope="row">Factor VIII + vW 1000 UI</th>
        <td><?php echo $factorVIIIvW_1000; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">FIX</th>
    </tr>

    <tr>
        <th scope="row">Factor IX 500 UI</th>
        <td><?php echo $factorIX_500; ?></td>
    </tr>

    <tr>
        <th scope="row">Factor IX 500 UI</th>
        <td><?php echo $factorIX_500_2; ?></td>
    </tr>

    <tr>
        <th scope="row">Factor IX 600 UI</th>
        <td><?php echo $factorIX_600; ?></td>
    </tr>

    <tr>
        <th scope="row">Factor IX 1000 UI</th>
        <td><?php echo $factorIX_1000; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Emicizumab</th>
    </tr>

    <tr>
        <th scope="row">Emicizumab</th>
        <td><?php echo $entrega_2; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">F Von Willebrand</th>
    </tr>

    <tr>
        <th scope="row">F VW 500 UI</th>
        <td><?php echo $fVW_500; ?></td>
    </tr>

    <tr>
        <th scope="row">F VW 1000 UI</th>
        <td><?php echo $fvw_100; ?></td>
    </tr>


    </tbody>
</table>

</body>
</html>