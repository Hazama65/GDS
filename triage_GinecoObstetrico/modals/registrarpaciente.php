<!-- Modal -->
<div class="modal fade" id="RegistrarPacienteGineco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="" id="gineco_form" autocomplete="off">

          <div class="row">

            <div class="col-md-6" >
              <strong>Fecha</strong>
              <input readonly type="date" id="fechahoy" name="fechahoy" class="form-control" style="background-color: #E9E9E9;" value="<?php echo date('Y-m-d'); ?>">
            </div>

            <div class="col-md-6" id="idelabora">
              <strong>Elabora:</strong>
              <input type="text" class="form-control" id="elabora" name="elabora" placeholder="Ingrese nombre..." required>
            </div>

          </div> <!-- <div class="row" de la primera sección>-->

          <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
            <h6>Datos Generales</h6> 
          </div>

          <div class="row">

            <div class="col-md-3" id="idcurp">
              <strong>CURP</strong>
              <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP">
            </div>

            <div class="col-md-3" id="idnombre">
              <strong>Nombre Completo</strong>
              <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="" required>
            </div>

            <div class="col-md-3">
              <strong>Fecha de Nacimiento</strong>
              <input style="background-color: #E9E9E9;" id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control">
            </div>
          
            <div class="col-md-3">
              <strong>Edad</strong>
              <input style="background-color: #E9E9E9;" id="edad" name="edad" type="text" class="control form-control" value="" onclick="curp2date();">
            </div>

            <div class="col-md-3">
              <strong>Prueba Covid</strong>
              <select name="pruebacovid" id="pruebacovid" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Positivo">Positivo</option>
                <option value="Negativo">Negativo</option>
              </select>
            </div>

          </div> <!-- div de row de datos generales-->

          <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
            <h6>Antecedentes Gineco-Obstétricos</h6> 
          </div>

          <div class="row">

            <div class="col-md-3">
              <strong>Gesta</strong>
              <input id="gesta" name="gesta" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-3">
              <strong>Paras</strong>
              <input id="paras" name="paras" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-3">
              <strong>Abortos</strong>
              <input id="abortos" name="abortos" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-3">
              <strong>Embarazos Ectópicos</strong>
              <input id="embarazosectopicos" name="embarazosectopicos" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-3">
              <strong>Hijos Vivos</strong>
              <input id="hijosvivos" name="hijosvivos" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-3">
              <strong>FUM</strong>
              <input id="fechaFUM" name="fechaFUM" type="date" value="" class="control form-control" max="<?= date("Y-m-d") ?>" onchange="calcularFUM()">
            </div>

            <div class="col-md-3">
              <strong>Fecha Probable Parto</strong>
              <input id="fechaFPP" name="fechaFPP" type="date" value="" class="control form-control" style="background-color: #E9E9E9;" readonly>
            </div>

            <div class="col-md-3">
              <strong>Sem Gestación</strong>
              <input id="semanagestacion" name="semanagestacion" type="number" class="control form-control" value="" style="background-color: #E9E9E9;" readonly>
            </div>

          </div><!--Antecedentes Gineco-Obstétricos-->

          <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
            <h6>Signos Vitales</h6> 
          </div>

          <div class="row">
            
            <div class="col-md-4">
              <strong>Presión arterial sistólica (mmHg)</strong>
              <input id="presionsistolica" name="presionsistolica" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-4">
              <strong>Presión arterial diastólica (mmHg)</strong>
              <input id="presiondiastolica" name="presiondiastolica" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-4">
              <strong>Frecuencia Cardiaca (x')</strong>
              <input id="frecuenciacardiaca" name="frecuenciacardiaca" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-4">
              <strong>Frecuencia respiratoria (x')</strong>
              <input id="frecuenciarespiratoria" name="frecuenciarespiratoria" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-4">
              <strong>Temperatura (°C)</strong>
              <input id="temperatura" name="temperatura" type="number" class="control form-control" value="">
            </div>

            <div class="col-md-4">
              <strong>Frecuencia Cardiaca Fetal</strong>
              <input id="frecuenciacardiacafetal" name="frecuenciacardiacafetal" type="number" class="control form-control" value="">
            </div>
                    
            <div class="col-md-3">
              <strong>Talla</strong>
              <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" required>
            </div>

            <div class="col-md-3">
              <strong>Peso</strong>
              <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" required>
            </div>

            <div class="col-md-3">
              <strong>IMC</strong>
              <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="" style="background-color: #E9E9E9;"  readonly>
            </div>

            <div class="col-md-3">
              <strong>Resultado IMC</strong>
              <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="" style="background-color: #E9E9E9;" readonly>
            </div>

          </div> <!-- div del row de signos vitales -->

          <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
            <h6>Síntomas</h6> 
          </div>

          <div class="row">

            <div class="col-md-12">
              <strong>Estado de Conciencia</strong>
              <select name="estadoconciencia" id="estadoconciencia" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Estuporosa/Coma">Estuporosa/Coma</option>
                <option value="Despierta">Despierta</option>
              </select>
            </div>

            <div class="col-md-12">
              <strong>Convulsiones</strong>
              <select name="convulsiones" id="convulsiones" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Presentes, estado post-ictal">Presentes, estado post-ictal</option>
                <option value="Ausentes">Ausentes</option>
              </select>
            </div>

            <div class="col-md-12">
              <strong>Sintomas de vasoespasmo (alteraciones visuales, auditivas, cerebrales, cefalea)</strong>
              <select name="vasoespasmo" id="vasoespasmo" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Todos presentes">Todos presentes</option>
                <option value="Solo alguno">Solo alguno</option>
                <option value="Ninguno">Ninguno</option>
              </select>
            </div>

            <div class="col-md-12">
              <strong>Dolor en epigastrio o en barra o en cuadrante superior derecho del abdomen</strong>
              <select name="epigastrio" id="epigastrio" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Presente">Presente</option>
                <option value="Ausente">Ausente</option>
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
                <option value="0">Sin Registro</option>
                <option value="Ausentes">Ausentes</option>
                <option value="Disminuidos">Disminuidos</option>
                <option value="Presentes">Presentes</option>
              </select>
            </div>

            <div class="col-md-3">
              <strong>Sangrado Vaginal</strong>
              <select name="sangradovaginal" id="sangradovaginal" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Abundante">Abundante</option>
                <option value="Escaso a moderado">Escaso a moderado</option>
                <option value="Ausente">Ausente</option>
              </select>
            </div>

            <div class="col-md-3">
              <strong>Salida de líquido amniótico</strong>
              <select name="salidaliquido" id="salidaliquido" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Presente">Presente</option>
                <option value="Sospecha">Sospecha</option>
                <option value="Ausente">Ausente</option>
              </select>
            </div>

            <div class="col-md-3">
              <strong>Trabajo de Parto</strong>
              <select name="trabajoparto" id="trabajoparto" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="En expulsivo">En expulsivo</option>
                <option value="Fase latente activa">Fase latente activa</option>
                <option value="Ausente">Ausente</option>
              </select>
            </div>

            <div class="col-md-3">
              <strong>Presentación fetal</strong>
              <select name="presentacionfetal" id="presentacionfetal" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Partes fetales">Partes fetales</option>
                <option value="Cefálico encajado">Cefálico encajado</option>
                <option value="Cefálico libre - abocado">Cefálico libre - abocado</option>
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
                <option value="0">Sin Registro</option>
                <option value="(-)">(-)</option>
                <option value="15 mg/dl (0.15)+-">15 mg/dl(0.15)+-</option>
                <option value="30 mg/dl (0.3)+">30 mg/dl(0.3)+</option>
                <option value="100 mg/dl(1.0)++">100 mg/dl(1.0)++</option>
                <option value="300 mg/dl(3.0)+++">300 mg/dl(3.0)+++</option>
                <option value="2000 mg/dl (20)+++">2000 mg/dl (20)+++</option>
              </select>
            </div>

            <div class="col-md-2">
              <strong>Leucocitos</strong>
              <select name="leucocitos" id="leucocitos" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="(-)">(-)</option>
                <option value="15+-">15+-</option>
                <option value="70+">70+</option>
                <option value="125++">125++</option>
                <option value="500+++">500+++</option>
              </select>
            </div>

            <div class="col-md-2">
              <strong>Glucosa</strong>
              <select name="glucosa" id="glucosa" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="(-)">(-)</option>
                <option value="100mg/dl">100mg/dl</option>
                <option value="200mg/dl">200mg/dl</option>
                <option value="500mg/dl">500mg/dl</option>
                <option value="1000mg/dl">1000mg/dl</option>
                <option value="2000mg/dl">2000mg/dl</option>
              </select>
            </div>

            <div class="col-md-2">
              <strong>Nitritos</strong>
              <select name="nitritos" id="nitritos" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="(-)">(-)</option>
                <option value="(+)">(+)</option>
                <option value="ROSA1">ROSA1</option>
                <option value="ROSA2">ROSA2</option>
                <option value="ROSA3">ROSA3</option>
                <option value="ROSA4">ROSA4</option>
                <option value="ROSA5">ROSA5</option>
                <option value="ROSA6">ROSA6</option>
              </select>
            </div>

            <div class="col-md-2">
              <strong>Cetonas</strong>
              <select name="cetonas" id="cetonas" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="(-)">(-)</option>
                <option value="5md/dl (+-)">5md/dl (+-)</option>
                <option value="15md/dl (+)">15md/dl (+)</option>
                <option value="40md/dl (++)">40md/dl (++)</option>
                <option value="80md/dl (+++)">80md/dl (+++)</option>
                <option value="160md/dl (++++)">160md/dl (++++)</option>
              </select>
            </div>

            <div class="col-md-2">
              <strong>Eritrocítos</strong>
              <select name="eritrocitos" id="eritrocitos" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="(+-)">(+-)</option>
                <option value="(+)">(+)</option>
                <option value="(++)">(++)</option>
                <option value="(+++)">(+++)</option>
                <option value="5 a 10">5 a 10</option>
                <option value="50">50</option>
              </select>
            </div>
          </div> <!--se cierra el div del row de tira reactiva de orina-->

          <div style="background-color: rgb(231, 88, 144); color: aliceblue; text-align: center; margin-top: 20px;">
            <h6>Resultado</h6> 
          </div>

          <div class="row">

            <div id="semaforo-general" class="col-md-4">
              <strong>Resultado Triage</strong>
              <input type="text" class="form-control" id="resultado_semaforo" name="resultado_semaforo">
            </div>

            <div class="col-md-4">
              <strong>Destino</strong>
              <select name="destinopaciente" id="destinopaciente" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Unidad Tocoquirúrgica">Unidad Tocoquirúrgica</option>
                <option value="Domicilio">Domicilio</option>
                <option value="Hospitalización">Hospitalización</option>
                <option value="Otra institución">Otra institución</option>
              </select>
            </div>

            <div class="col-md-4">
              <strong>Activación Código</strong>
              <select name="activacioncodigo" id="activacioncodigo" class="form-control">
                <option value="0">Sin Registro</option>
                <option value="Código Dorado - Hemorragia Obstétrica">Código Dorado - Hemorragia Obstétrica</option>
                <option value="Código Dorado - Preeclampsia / Eclampsia">Código Dorado - Preeclampsia / Eclampsia</option>
                <option value="Código Dorado - Sepsis">Código Dorado - Sepsis</option>
                            <option value="Código Dorado - Cáncer Gestacional">Código Dorado - Cáncer Gestacional</option>
                            <option value="Código Dorado - SARS COV2">Código Dorado - SARS COV2</option>
                            <option value="Código Dorado - Otro">Código Dorado - Otro</option>
                            <option value="Código Negro">Código Negro</option>
                        </select>
                    </div>

          </div> <!-- se cierra el div del row-->


                    
        </form><!-- se cierra el form-->
      </div><!-- se cierra el  <div class="modal-body">-->


      <div class="modal-footer">
        <button type="button" value="Limpiar" class="btn btn-danger">Cerrar</button>
        <button type="submit" value="Enviar" name="enviar" class="btn btn-success">Enviar</button>
      </div>

      
    </div>
  </div>
</div>