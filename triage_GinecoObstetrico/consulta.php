<?php
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
      <th colspan="2" scope="col" style="background-color: rgb(225, 63, 164); color: aliceblue; text-align: center;">
      <i class="bi bi-person-circle"></i> Generales</th>
      <!-- en esta parte el atributo colspan=2 nos ayuda a unir las dos celdas, así en lugar de poner dos sólo las unimos-->
    </tr>
  </thead>

  <tbody>

    <tr>
      <th scope="row">Fecha</th>
      <td><?php echo $fecha; ?></td>
    </tr>

    <tr>
      <th scope="row">Elabora</th>
      <td><?php echo $elabora; ?></td>
    </tr>

    <tr>
      <th scope="row">Resultado Triage</th>
      <td><?php echo $resultado_triage; ?></td>
    </tr>

  <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Datos Paciente</th>
    </tr>


    <tr>
      <th scope="row">CURP</th>
      <td><?php echo $curp; ?></td>
    </tr>

    <tr>
      <th scope="row">Nombre Completo</th>
      <td><?php echo $nombre_paciente; ?></td>
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
        <th scope="row">Prueba Covid</th>
        <td><?php echo $covid; ?></td>
    </tr>

    

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Antecedentes Gineco-Obstétricos</th>
    </tr>


    <tr>
        <th scope="row">Gestas</th>
        <td><?php echo $gesta; ?></td>
    </tr>

    <tr>
        <th scope="row">Paras</th>
        <td><?php echo $paras; ?></td>
    </tr>

    <tr>
        <th scope="row">Abortos</th>
        <td><?php echo $abortos; ?></td>
    </tr>

    <tr>
        <th scope="row">Embarazos Ectópicos</th>
        <td><?php echo $embarazos_ecto; ?></td>
    </tr>

    <tr>
        <th scope="row">Hijos Vivos</th>
        <td><?php echo $hijos_vivos; ?></td>
    </tr>

    <tr>
        <th scope="row">FUM</th>
        <td><?php echo $FUM; ?></td>
    </tr>

    <tr>
        <th scope="row">Fecha Probable Parto</th>
        <td><?php echo $fecha_parto; ?></td>
    </tr>

    <tr>
        <th scope="row">Sem Gestación</th>
        <td><?php echo $sem_gestacion; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Signos Vitales</th>
    </tr>

    <tr>
        <th scope="row">Presión arterial sistólica (mmHg)</th>
        <td><?php echo $presion_sis; ?></td>
    </tr>

    <tr>
        <th scope="row">Presión arterial diastólica (mmHg)</th>
        <td><?php echo $presion_dia; ?></td>
    </tr>

    <tr>
        <th scope="row">Frecuencia Cardiaca (x')</th>
        <td><?php echo $frecuencia_card; ?></td>
    </tr>

    <tr>
        <th scope="row">Frecuencia respiratoria (x')</th>
        <td><?php echo $frecuencia_respi; ?></td>
    </tr>

    <tr>
        <th scope="row">Temperatura (°C)</th>
        <td><?php echo $temperatura; ?></td>
    </tr>

    <tr>
        <th scope="row">Frecuencia Cardiaca Fetal</th>
        <td><?php echo $frecuencia_card_fet; ?></td>
    </tr>

    <tr>
        <th scope="row">Talla</th>
        <td><?php echo $talla; ?></td>
    </tr>

    <tr>
        <th scope="row">Peso</th>
        <td><?php echo $peso; ?></td>
    </tr>

    <tr>
        <th scope="row">IMC</th>
        <td><?php echo $imc; ?></td>
    </tr>

    <tr>
        <th scope="row">Resultado IMC</th>
        <td><?php echo $resultadoIMC; ?></td>
    </tr>

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Síntomas</th>
    </tr>

    <tr>
        <th scope="row">Estado de Conciencia</th>
        <td><?php echo $conciencia; ?></td>
    </tr>

    <tr>
        <th scope="row">Convulsiones</th>
        <td><?php echo $convulsiones; ?></td>
    </tr>

    <tr>
        <th scope="row">Sintomas de vasoespasmo <br>(alteraciones visuales, auditivas, cerebrales, cefalea)</th>
        <td><?php echo $vasoespasmo; ?></td>
    </tr>

    <tr>
        <th scope="row">Dolor en epigastrio o en barra <br>o en cuadrante superior derecho del abdomen</th>
        <td><?php echo $epigastrio; ?></td>
    </tr>


    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Signos</th>
    </tr>

    <tr>
        <th scope="row">Movimientos Fetales</th>
        <td><?php echo $mov_fetales; ?></td>
    </tr>

    <tr>
        <th scope="row">Sangrado Vaginal</th>
        <td><?php echo $sang_vag; ?></td>
    </tr>

    <tr>
        <th scope="row">Salida de líquido amniótico</th>
        <td><?php echo $liquido_amniotico; ?></td>
    </tr>

    <tr>
        <th scope="row">Trabajo de Parto</th>
        <td><?php echo $parto; ?></td>
    </tr>

    <tr>
        <th scope="row">Presentación fetal</th>
        <td><?php echo $pres_fetal; ?></td>
    </tr>

    

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Tira Reactiva en Orina</th>
    </tr>

    
    <tr>
        <th scope="row">Proteínas</th>
        <td><?php echo $proteinas; ?></td>
    </tr>

    <tr>
        <th scope="row">Leucocitos</th>
        <td><?php echo $leucocitos; ?></td>
    </tr>

    <tr>
        <th scope="row">Glucosa</th>
        <td><?php echo $glucosa; ?></td>
    </tr>

    <tr>
        <th scope="row">Nitritos</th>
        <td><?php echo $nitritos; ?></td>
    </tr>

    <tr>
        <th scope="row">Cetonas</th>
        <td><?php echo $cetonas; ?></td>
    </tr>

    <tr>
        <th scope="row">Eritrocítos</th>
        <td><?php echo $eritrocitos; ?></td>
    </tr>

    

    <tr>
        <th colspan="2" scope="row" style="background-color: rgb(174,93,143,0.75); color: aliceblue; text-align: center;">Transferir</th>
    </tr>
    <tr>
        <th scope="row">Destino</th>
        <td><?php echo $destino; ?></td>
    </tr>

    <tr>
        <th scope="row">Activación Código</th>
        <td><?php echo $codigo; ?></td>
    </tr>

    

  </tbody>
</table>

</body>
</html>