<?php
  include('php/controllers/edit.controller.php');
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

    <title>Editar Paciente</title>
  </head>

  <body>

    <header style="text-align: center;">

      <div style=" padding: 20px; text-align: left;">
        <a href="index.php">
          <button type="button" class="btn btn-outline-light" id="inicio-button" title="Inicio">
            <i class="bi bi-rewind-fill"></i>
          </button>
        </a>
      </div>
      <!-- ======================== AQUI INICIA  ======================== -->
      <h5>Editar-Triage-Gineco Obstétrico</h5>
      <div style="padding: 20px; text-align: right;">
        <button type="button" class="btn btn-outline-light" id="cerrar-sesion-button" title="Cerrar sesión">
          <i class="bi bi-power"></i>
        </button>
      </div>
    </header>
    <br>

    <div class="container">

      <form id="edit_gine" autocomplete="off">

        <div class="row">
          <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_GN; ?>">


          <div class="col-md-6">
            <strong>Fecha</strong>
            <input type="date" id="fechahoy" name="fechahoy" class="form-control"
              value="<?php echo $fecha; ?>">
          </div>

          <div class="col-md-6" id="idelabora">
            <strong>Elabora:</strong>
            <input type="text" class="form-control" id="elabora" name="elabora" placeholder="Ingrese nombre..." required value="<?php echo $elabora; ?>">
          </div>

        </div> <!-- <div class="row" de la primera sección>-->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Datos Generales</h6>
        </div>

        <div class="row">

          <div class="col-md-3" id="idcurp">
            <strong>CURP</strong>
            <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" value="<?php echo $curp; ?>">
          </div>

          <div class="col-md-3" id="idnombre">
            <strong>Nombre Completo</strong>
            <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="<?php echo $nombre_paciente; ?>"
              required>
          </div>

          <div class="col-md-3">
            <strong>Fecha de Nacimiento</strong>
            <input style="background-color: #E9E9E9;" id="fecha" name="fecha" type="date" value="<?php echo $fecha_nacimiento; ?>" onblur="curp2date();"
              class="control form-control">
          </div>

          <div class="col-md-3">
            <strong>Edad</strong>
            <input style="background-color: #E9E9E9;" id="edad" name="edad" type="text" class="control form-control"
              value="<?php echo $edad; ?>" onclick="curp2date();">
          </div>

          <div class="col-md-3">
            <strong>Prueba Covid</strong>
            <select name="pruebacovid" id="pruebacovid" class="form-control">
              <option value="0"<?php if ($covid == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Positivo"<?php if ($covid == 'Positivo') echo 'selected'; ?>>Positivo</option>
              <option value="Negativo"<?php if ($covid == 'Negativo') echo 'selected'; ?>>Negativo</option>
            </select>
          </div>

        </div> <!-- div de row de datos generales-->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Antecedentes Gineco-Obstétricos</h6>
        </div>

        <div class="row">

          <div class="col-md-3">
            <strong>Gesta</strong>
            <input id="gesta" name="gesta" type="number" class="control form-control" value="<?php echo $gesta; ?>">
          </div>

          <div class="col-md-3">
            <strong>Paras</strong>
            <input id="paras" name="paras" type="number" class="control form-control" value="<?php echo $paras; ?>">
          </div>

          <div class="col-md-3">
            <strong>Cesárea</strong>
            <input id="cesarea" name="cesarea" type="number" class="control form-control" value="<?php echo $cesarea; ?>">
          </div>

          <div class="col-md-3">
            <strong>Abortos</strong>
            <input id="abortos" name="abortos" type="number" class="control form-control" value="<?php echo $abortos; ?>">
          </div>

          <div class="col-md-3">
            <strong>Embarazos Ectópicos</strong>
            <input id="embarazosectopicos" name="embarazosectopicos" type="number" class="control form-control" value="<?php echo $embarazos_ecto; ?>">
          </div>

          <div class="col-md-3">
            <strong>Hijos Vivos</strong>
            <input id="hijosvivos" name="hijosvivos" type="number" class="control form-control" value="<?php echo $hijos_vivos; ?>">
          </div>

          <div class="col-md-3">
            <strong>FUM</strong>
            <input id="fechaFUM" name="fechaFUM" type="date" value="<?php echo $FUM; ?>" class="control form-control"
              max="<?= date("Y-m-d") ?>" onchange="calcularFUM()">
          </div>

          <div class="col-md-3">
            <strong>Fecha Probable Parto</strong>
            <input id="fechaFPP" name="fechaFPP" type="date" value="<?php echo $fecha_parto; ?>" class="control form-control"
              style="background-color: #E9E9E9;" readonly>
          </div>

          <div class="col-md-3">
            <strong>Sem Gestación</strong>
            <input id="semanagestacion" name="semanagestacion" type="number" class="control form-control" value="<?php echo $sem_gestacion; ?>"
              style="background-color: #E9E9E9;" readonly>
          </div>

        </div><!--Antecedentes Gineco-Obstétricos-->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Signos Vitales</h6>
        </div>

        <div class="row">

          <div class="col-md-4">
            <strong>Presión arterial sistólica (mmHg)</strong>
            <input id="presionsistolica" name="presionsistolica" type="number" class="control form-control" value="<?php echo $presion_sis; ?>">
          </div>

          <div class="col-md-4">
            <strong>Presión arterial diastólica (mmHg)</strong>
            <input id="presiondiastolica" name="presiondiastolica" type="number" class="control form-control" value="<?php echo $presion_dia; ?>">
          </div>

          <div class="col-md-4">
            <strong>Frecuencia Cardiaca (x')</strong>
            <input id="frecuenciacardiaca" name="frecuenciacardiaca" type="number" class="control form-control" value="<?php echo $frecuencia_card; ?>">
          </div>

          <div class="col-md-4">
            <strong>Frecuencia respiratoria (x')</strong>
            <input id="frecuenciarespiratoria" name="frecuenciarespiratoria" type="number" class="control form-control"
              value="<?php echo $frecuencia_respi; ?>">
          </div>

          <div class="col-md-4">
            <strong>Temperatura (°C)</strong>
            <input id="temperatura" name="temperatura" type="number" class="control form-control" value="<?php echo $temperatura; ?>">
          </div>

          <div class="col-md-4">
            <strong>Frecuencia Cardiaca Fetal</strong>
            <input id="frecuenciacardiacafetal" name="frecuenciacardiacafetal" type="number" class="control form-control"
              value="<?php echo $frecuencia_card_fet; ?>">
          </div>

          <div class="col-md-3">
            <strong>Talla</strong>
            <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" required value="<?php echo $talla; ?>">
          </div>

          <div class="col-md-3">
            <strong>Peso</strong>
            <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" required value="<?php echo $peso; ?>">
          </div>

          <div class="col-md-3">
            <strong>IMC</strong>
            <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="<?php echo $imc; ?>"
              style="background-color: #E9E9E9;" readonly>
          </div>

          <div class="col-md-3">
            <strong>Resultado IMC</strong>
            <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="<?php echo $resultadoIMC; ?>"
              style="background-color: #E9E9E9;" readonly>
          </div>

        </div> <!-- div del row de signos vitales -->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Síntomas</h6>
        </div>

        <div class="row">

          <div class="col-md-12">
            <strong>Estado de Conciencia</strong>
            <select name="estadoconciencia" id="estadoconciencia" class="form-control">
              <option value="0"<?php if ($conciencia == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Estuporosa/Coma"<?php if ($conciencia == 'Estuporosa/Coma') echo 'selected'; ?>>Estuporosa/Coma</option>
              <option value="Despierta"<?php if ($conciencia == 'Despierta') echo 'selected'; ?>>Despierta</option>
            </select>
          </div>

          <div class="col-md-12">
            <strong>Convulsiones</strong>
            <select name="convulsiones" id="convulsiones" class="form-control">
              <option value="0"<?php if ($convulsiones == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Presentes, estado post-ictal"<?php if ($convulsiones == 'Presentes, estado post-ictal') echo 'selected'; ?>>Presentes, estado post-ictal</option>
              <option value="Ausentes"<?php if ($convulsiones == 'Ausentes') echo 'selected'; ?>>Ausentes</option>
            </select>
          </div>

          <div class="col-md-12">
            <strong>Sintomas de vasoespasmo (alteraciones visuales, auditivas, cerebrales, cefalea)</strong>
            <select name="vasoespasmo" id="vasoespasmo" class="form-control">
              <option value="0"<?php if ($vasoespasmo == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Todos presentes"<?php if ($vasoespasmo == 'Todos presentes') echo 'selected'; ?>>Todos presentes</option>
              <option value="Solo alguno"<?php if ($vasoespasmo == 'Solo alguno') echo 'selected'; ?>>Solo alguno</option>
              <option value="Ninguno"<?php if ($vasoespasmo == 'Ninguno') echo 'selected'; ?>>Ninguno</option>
            </select>
          </div>

          <div class="col-md-12">
            <strong>Dolor en epigastrio o en barra o en cuadrante superior derecho del abdomen</strong>
            <select name="epigastrio" id="epigastrio" class="form-control">
              <option value="0"<?php if ($epigastrio == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Presente"<?php if ($epigastrio == 'Presente') echo 'selected'; ?>>Presente</option>
              <option value="Ausente"<?php if ($epigastrio == 'Ausente') echo 'selected'; ?>>Ausente</option>
            </select>
          </div>
        </div> <!--se cirra de row de sintomas-->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Signos</h6>
        </div>

        <div class="row">

          <div class="col-md-3">
            <strong>Movimientos Fetales</strong>
            <select name="movimientosfetales" id="movimientosfetales" class="form-control">
              <option value="0"<?php if ($mov_fetales == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Ausentes"<?php if ($mov_fetales == 'Ausentes') echo 'selected'; ?>>Ausentes</option>
              <option value="Disminuidos"<?php if ($mov_fetales == 'Disminuidos') echo 'selected'; ?>>Disminuidos</option>
              <option value="Presentes"<?php if ($mov_fetales == 'Presentes') echo 'selected'; ?>>Presentes</option>
            </select>
          </div>

          <div class="col-md-3">
            <strong>Sangrado Vaginal</strong>
            <select name="sangradovaginal" id="sangradovaginal" class="form-control">
              <option value="0"<?php if ($sang_vag == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Abundante"<?php if ($sang_vag == 'Abundante') echo 'selected'; ?>>Abundante</option>
              <option value="Escaso a moderado"<?php if ($sang_vag == 'Escaso a moderado') echo 'selected'; ?>>Escaso a moderado</option>
              <option value="Ausente"<?php if ($sang_vag == 'Ausente') echo 'selected'; ?>>Ausente</option>
            </select>
          </div>

          <div class="col-md-3">
            <strong>Salida de líquido amniótico</strong>
            <select name="salidaliquido" id="salidaliquido" class="form-control">
              <option value="0"<?php if ($liquido_amniotico == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Presente"<?php if ($liquido_amniotico == 'Presente') echo 'selected'; ?>>Presente</option>
              <option value="Sospecha"<?php if ($liquido_amniotico == 'Sospecha') echo 'selected'; ?>>Sospecha</option>
              <option value="Ausente"<?php if ($liquido_amniotico == 'Ausente') echo 'selected'; ?>>Ausente</option>
            </select>
          </div>

          <div class="col-md-3">
            <strong>Trabajo de Parto</strong>
            <select name="trabajoparto" id="trabajoparto" class="form-control">
              <option value="0"<?php if ($parto == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="En expulsivo"<?php if ($parto == 'En expulsivo') echo 'selected'; ?>>En expulsivo</option>
              <option value="Fase latente activa"<?php if ($parto == 'Fase latente activa') echo 'selected'; ?>>Fase latente activa</option>
              <option value="Ausente"<?php if ($parto == 'Ausente') echo 'selected'; ?>>Ausente</option>
            </select>
          </div>

          <div class="col-md-3">
            <strong>Presentación fetal</strong>
            <select name="presentacionfetal" id="presentacionfetal" class="form-control">
              <option value="0"<?php if ($pres_fetal == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Partes fetales"<?php if ($pres_fetal == 'Partes fetales') echo 'selected'; ?>>Partes fetales</option>
              <option value="Cefálico encajado"<?php if ($pres_fetal == 'Cefálico encajado') echo 'selected'; ?>>Cefálico encajado</option>
              <option value="Cefálico libre - abocado"<?php if ($pres_fetal == 'Cefálico libre - abocado') echo 'selected'; ?>>Cefálico libre - abocado</option>
            </select>
          </div>
        </div><!--se cierra el row de signos-->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Tira Reactiva en Orina</h6>
        </div>

        <div class="row">

          <div class="col-md-2">
            <strong>Proteínas</strong>
            <select name="proteinas" id="proteinas" class="form-control">
              <option value="0"<?php if ($proteinas == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="(-)"<?php if ($proteinas == '(-)') echo 'selected'; ?>>(-)</option>
              <option value="15 mg/dl (0.15)+-"<?php if ($proteinas == '15 mg/dl (0.15)+-') echo 'selected'; ?>>15 mg/dl(0.15)+-</option>
              <option value="30 mg/dl (0.3)+"<?php if ($proteinas == '30 mg/dl (0.3)+') echo 'selected'; ?>>30 mg/dl(0.3)+</option>
              <option value="100 mg/dl(1.0)++"<?php if ($proteinas == '100 mg/dl(1.0)++') echo 'selected'; ?>>100 mg/dl(1.0)++</option>
              <option value="300 mg/dl(3.0)+++"<?php if ($proteinas == '300 mg/dl(3.0)+++') echo 'selected'; ?>>300 mg/dl(3.0)+++</option>
              <option value="2000 mg/dl (20)+++"<?php if ($proteinas == '2000 mg/dl (20)+++') echo 'selected'; ?>>2000 mg/dl (20)+++</option>
            </select>
          </div>

          <div class="col-md-2">
            <strong>Leucocitos</strong>
            <select name="leucocitos" id="leucocitos" class="form-control">
              <option value="0"<?php if ($leucocitos == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="(-)"<?php if ($leucocitos == '(-)') echo 'selected'; ?>>(-)</option>
              <option value="15+-"<?php if ($leucocitos == '15+-') echo 'selected'; ?>>15+-</option>
              <option value="70+"<?php if ($leucocitos == '70+') echo 'selected'; ?>>70+</option>
              <option value="125++"<?php if ($leucocitos == '125++') echo 'selected'; ?>>125++</option>
              <option value="500+++"<?php if ($leucocitos == '500+++') echo 'selected'; ?>>500+++</option>
            </select>
          </div>

          <div class="col-md-2">
            <strong>Glucosa</strong>
            <select name="glucosa" id="glucosa" class="form-control">
              <option value="0">Sin Registro</option>
              <option value="(-)"<?php if ($glucosa == '(-)') echo 'selected'; ?>>(-)</option>
              <option value="100mg/dl"<?php if ($glucosa == '100mg/dl') echo 'selected'; ?>>100mg/dl</option>
              <option value="200mg/dl"<?php if ($glucosa == '200mg/dl') echo 'selected'; ?>>200mg/dl</option>
              <option value="500mg/dl"<?php if ($glucosa == '500mg/dl') echo 'selected'; ?>>500mg/dl</option>
              <option value="1000mg/dl"<?php if ($glucosa == '1000mg/dl') echo 'selected'; ?>>1000mg/dl</option>
              <option value="2000mg/dl"<?php if ($glucosa == '2000mg/dl') echo 'selected'; ?>>2000mg/dl</option>
            </select>
          </div>

          <div class="col-md-2">
            <strong>Nitritos</strong>
            <select name="nitritos" id="nitritos" class="form-control">
              <option value="0">Sin Registro</option>
              <option value="(-)"<?php if ($nitritos == '(-)') echo 'selected'; ?>>(-)</option>
              <option value="(+)"<?php if ($nitritos == '(+)') echo 'selected'; ?>>(+)</option>
              <option value="ROSA1"<?php if ($nitritos == 'ROSA1') echo 'selected'; ?>>ROSA1</option>
              <option value="ROSA2"<?php if ($nitritos == 'ROSA2') echo 'selected'; ?>>ROSA2</option>
              <option value="ROSA3"<?php if ($nitritos == 'ROSA3') echo 'selected'; ?>>ROSA3</option>
              <option value="ROSA4"<?php if ($nitritos == 'ROSA4') echo 'selected'; ?>>ROSA4</option>
              <option value="ROSA5"<?php if ($nitritos == 'ROSA5') echo 'selected'; ?>>ROSA5</option>
              <option value="ROSA6"<?php if ($nitritos == 'ROSA6') echo 'selected'; ?>>ROSA6</option>
            </select>
          </div>

          <div class="col-md-2">
            <strong>Cetonas</strong>
            <select name="cetonas" id="cetonas" class="form-control">
              <option value="0">Sin Registro</option>
              <option value="(-)"<?php if ($cetonas == '(-)') echo 'selected'; ?>>(-)</option>
              <option value="5md/dl (+-)"<?php if ($cetonas == '5md/dl (+-)') echo 'selected'; ?>>5md/dl (+-)</option>
              <option value="15md/dl (+)"<?php if ($cetonas == '15md/dl (+)') echo 'selected'; ?>>15md/dl (+)</option>
              <option value="40md/dl (++)"<?php if ($cetonas == '40md/dl (++)') echo 'selected'; ?>>40md/dl (++)</option>
              <option value="80md/dl (+++)"<?php if ($cetonas == '80md/dl (+++)') echo 'selected'; ?>>80md/dl (+++)</option>
              <option value="160md/dl (++++)"<?php if ($cetonas == '160md/dl (++++)') echo 'selected'; ?>>160md/dl (++++)</option>
            </select>
          </div>

          <div class="col-md-2">
            <strong>Eritrocítos</strong>
            <select name="eritrocitos" id="eritrocitos" class="form-control">
              <option value="0"<?php if ($eritrocitos == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="(+-)"<?php if ($eritrocitos == '(+-)') echo 'selected'; ?>>(+-)</option>
              <option value="(+)"<?php if ($eritrocitos == '(+)') echo 'selected'; ?>>(+)</option>
              <option value="(++)"<?php if ($eritrocitos == '(++)') echo 'selected'; ?>>(++)</option>
              <option value="(+++)"<?php if ($eritrocitos == '(+++)') echo 'selected'; ?>>(+++)</option>
              <option value="5 a 10"<?php if ($eritrocitos == '5 a 10') echo 'selected'; ?>>5 a 10</option>
              <option value="50"<?php if ($eritrocitos == '50') echo 'selected'; ?>>50</option>
            </select>
          </div>
        </div> <!--se cierra el div del row de tira reactiva de orina-->

        <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
          <h6>Resultado</h6>
        </div>

        <div class="row">

          <div id="semaforo-general" class="col-md-4">
            <strong>Resultado Triage</strong>
            <input type="text" class="form-control" id="resultado_semaforo" name="resultado_semaforo" value="<?php echo $resultado_triage; ?>">
          </div>

          <div class="col-md-4">
            <strong>Destino</strong>
            <select name="destinopaciente" id="destinopaciente" class="form-control">
              <option value="0"<?php if ($destino == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Unidad Tocoquirúrgica"<?php if ($destino == 'Unidad Tocoquirúrgica') echo 'selected'; ?>>Unidad Tocoquirúrgica</option>
              <option value="Domicilio"<?php if ($destino == 'Domicilio') echo 'selected'; ?>>Domicilio</option>
              <option value="Hospitalización"<?php if ($destino == 'Hospitalización') echo 'selected'; ?>>Hospitalización</option>
              <option value="Otra institución"<?php if ($destino == 'Otra institución') echo 'selected'; ?>>Otra institución</option>
            </select>
          </div>

          <div class="col-md-4">
            <strong>Activación Código</strong>
            <select name="activacioncodigo" id="activacioncodigo" class="form-control">
              <option value="0"<?php if ($codigo == '0') echo 'selected'; ?>>Sin Registro</option>
              <option value="Código Dorado - Hemorragia Obstétrica"<?php if ($codigo == 'Código Dorado - Hemorragia Obstétrica') echo 'selected'; ?>>Código Dorado - Hemorragia Obstétrica</option>
              <option value="Código Dorado - Preeclampsia / Eclampsia"<?php if ($codigo == 'Código Dorado - Preeclampsia / Eclampsia') echo 'selected'; ?>>Código Dorado - Preeclampsia / Eclampsia</option>
              <option value="Código Dorado - Sepsis"<?php if ($codigo == 'Código Dorado - Sepsis') echo 'selected'; ?>>Código Dorado - Sepsis</option>
              <option value="Código Dorado - Cáncer Gestacional"<?php if ($codigo == 'Código Dorado - Cáncer Gestacional') echo 'selected'; ?>>Código Dorado - Cáncer Gestacional</option>
              <option value="Código Dorado - SARS COV2"<?php if ($codigo == 'Código Dorado - SARS COV2') echo 'selected'; ?>>Código Dorado - SARS COV2</option>
              <option value="Código Dorado - Otro"<?php if ($codigo == 'Código Dorado - Otro') echo 'selected'; ?>>Código Dorado - Otro</option>
              <option value="Código Negro"<?php if ($codigo == 'Código Negro') echo 'selected'; ?>>Código Negro</option>
            </select>
          </div>

        </div> <br><!-- se cierra el div del row-->

        <div style="display: flex; justify-content: flex-end; align-items: center;">
          <button type="submit" class="btn btn-success" style="font-size: 15px; padding: 8px 15px;">Guardar Cambios</button>
        </div>
      </form><!-- se cierra el form-->




      <!--=========== Boton de editar ================-->
      <br>

    </div> <!--  /FIN DEL CONTAINER (LINEA 35) -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scrip_editar.js"></script>
    
    <script type="module">
            import { editForm } from "./js/update.js";
            editForm();
    </script>

  </body>

</html>