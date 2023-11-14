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
      <td></td>
    </tr>

    <tr>
      <th scope="row">CURP</th>
      <td></td>
    </tr>

    <tr>
      <th scope="row">Fecha Nacimiento</th>
      <td></td>
    </tr>

    <tr>
        <th scope="row">Edad</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Sexo</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Peso</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.7); color: gray; text-align: center;">Clínica</th>
    </tr>

    <tr>
        <th scope="row">Tipo de Hemofilia</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Deficiencia de factor</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Clasificación de Hemofilia (VIII)</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Clasificación de Hemofilia (IX)</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Clasificación de Hemofilia (XI)</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Tipo de EVW</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Otra Clasificación</th>
        <td></td>
    </tr>
   
    <tr>
        <th scope="row">Clasificación por gravedad</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Inhibidor</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Inhibidor Baja Respuesta</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Inhibidor Alta Respuesta</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Artropatia Hemolitica</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Área Afectada</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">No. de Sangrados Mensuales</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Requirió factor</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">Resultados Independencia Funcional (FISH)</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Cuidado Personal</th>
    </tr>

    <tr>
        <th scope="row">Comer y Asearse</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Bañarse</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Vestirse</th>
        <td></td>
    </tr>


    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Transferir</th>
    </tr>

    <tr>
        <th scope="row">Sentar</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Cunclillas</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Locomotor</th>
    </tr>

    <tr>
        <th scope="row">Caminar</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Correr</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Subir Escaleras (12-14 pasos)</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">Resultados Salud Articular (HJHS)</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Codo Izquierdo</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Codo Derecho</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Rodilla Izquierda</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Rodilla Derecha</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Tobillo Izquierdo</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Tobillo Derecho</th>
    </tr>


    <tr>
        <th scope="row">Inflamación</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Duración</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Atrofia Muscular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Crepitación al Movimiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Flexión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Pérdida de la Extensión</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Dolor Articular</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Fuerza</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(227, 211, 195, 0.35); color: gray; text-align: center;">Suma del total de Articulaciones</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Marcha Global <br>(caminar, escaleras, correr, salto sobre una pierna)</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.7); color: gray; text-align: center;">USG (escala HEAD US)</th>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">6 meses</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Actividad Inflamatoria</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Derrame / Sinovitis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Hipertrofia Sinovial</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Cartilago</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Hueso</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">12 meses</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Actividad Inflamatoria</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Derrame / Sinovitis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Hipertrofia Sinovial</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Cartilago</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Hueso</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="background-color: rgb(153, 9, 68, 0.5); color: aliceblue; text-align: center;">24 meses</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Actividad Inflamatoria</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Derrame / Sinovitis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Escala de Hipertrofia Sinovial</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Cartilago</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Daño Osteocondral - Hueso</th>
        <td></td>
    </tr>
    
    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.7); color: gray; text-align: center;">Tratamiento</th>
    </tr>

    <tr>
        <th scope="row">Tipo de Tratamiento</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Profilaxis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Profilaxis con Emicizumab</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Tipo Profilaxis con Emicizumab</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Dosis(mg) / Kg</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Total de mg por Dosis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * N° de Dosis por semana</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row" style="font-size: 13px; color: gray;"> * Entrega</th>
        <td></td>
    </tr>


    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Terapia de remplazo (Inhibidor < 5UB)</th>
    </tr>

    <tr>
        <th scope="row"> * Dosis / Kg</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por Dosis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row"> * N° de Dosis por semana</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por semana</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Agente de Desvío (Inhibidor > 5UB)</th>
    </tr>

    <tr>
        <th scope="row"> * Dosis / Kg</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por Dosis</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row"> * N° de Dosis por semana</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row"> * Total de UI por semana</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Tratamiento mensual</th>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Recombinante</th>
    </tr>

    <tr>
        <th scope="row">Turoctocog Alfa 250 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Turoctocog Alfa 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Turoctocog Alfa 1000 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Octocog Alfa 250 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Octocog Alfa 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Simoctocog Alfa 250 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Simoctocog Alfa 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Simoctocog Alfa 1000 UI</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Plasmático</th>
    </tr>

    <tr>
        <th scope="row">Factor VIII 250 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Factor VIII 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Factor VIII + vW 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Factor VIII + vW 1000 UI</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">FIX</th>
    </tr>

    <tr>
        <th scope="row">Factor IX 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Factor IX 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Factor IX 600 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">Factor IX 1000 UI</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">Emicizumab</th>
    </tr>

    <tr>
        <th scope="row">Emicizumab</th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(227, 211, 195, 0.5); color: gray; text-align: center;">F Von Willebrand</th>
    </tr>

    <tr>
        <th scope="row">F VW 500 UI</th>
        <td></td>
    </tr>

    <tr>
        <th scope="row">F VW 1000 UI</th>
        <td></td>
    </tr>


  </tbody>
</table>

</body>
</html>