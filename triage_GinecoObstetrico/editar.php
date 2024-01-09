<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
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

          </div>  <br><!-- se cierra el div del row-->


                    
        </form><!-- se cierra el form-->
     



             <!--=========== Boton de editar ================-->
             <div style="display: flex; justify-content: flex-end; align-items: center;">
                    <button type="submit" class="btn btn-success" style="font-size: 15px; padding: 8px 15px;">Guardar Cambios</button>
                </div>
                <br>
            
  </div> <!--  /FIN DEL CONTAINER (LINEA 35) -->

</body>
</html>

<script>
//cambiar el curp a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function() {
  this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre');

nombreInput.addEventListener('blur', function() {
  this.value = this.value.toUpperCase();

});

// Función para calcular datos desde el CURP
function curp2date() {
    // Obtener el valor del CURP ingresado
    var curp = document.getElementById("curp").value;

    // Extraer la fecha de nacimiento y el sexo del CURP
    var fechaNacimiento = curp.substr(4, 6);
    var sexo = curp.substr(10, 1);

    // Calcular la fecha de nacimiento completa
    var year = fechaNacimiento.substr(0, 2);
    var month = fechaNacimiento.substr(2, 2);
    var day = fechaNacimiento.substr(4, 2);

    // Obtener la fecha actual
    var fechaActual = new Date();

    // Calcular la fecha de nacimiento completa considerando el siglo
    var birthYear = parseInt(year) < parseInt(fechaActual.getFullYear().toString().substr(2, 2))
        ? parseInt("20" + year)
        : parseInt("19" + year);
    var fechaNac = new Date(birthYear, month - 1, day);

    // Calcular la edad
    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si el mes actual es anterior al mes de nacimiento o si es el mismo mes pero el día actual es anterior al día de nacimiento
    if (
        (fechaActual.getMonth() < fechaNac.getMonth()) ||
        (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }

    // Mostrar la edad en el campo correspondiente
    document.getElementById("edad").value = edad;

    // Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
    var fechaCompleta = fechaNac.getFullYear() + "-" + month + "-" + day;
    document.getElementById("fecha").value = fechaCompleta;

    // Determinar el sexo y mostrarlo en el campo correspondiente
    if (sexo === "H") {
        document.getElementById("sexo").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sexo").value = "Mujer";
    }
}



    //Script para calcular IMC
    function calculaIMC() {
        const tallaInput = document.getElementById('talla');
        const pesoInput = document.getElementById('peso');
        const imcInput = document.getElementById('imc');
        const descripcionInput = document.getElementById('imcdescripcion');
    
        const talla = parseFloat(tallaInput.value.replace(',', '.'));
        const peso = parseFloat(pesoInput.value);
        
        if (talla && peso) {
            const imc = peso / (talla * talla);
            const descripcion = obtenerDescripcionIMC(imc);
            
            imcInput.value = imc.toFixed(2);
            descripcionInput.value = descripcion;
        } else {
            imcInput.value = '';
            descripcionInput.value = '';
        }
    }
    
    function obtenerDescripcionIMC(imc) {
        if (imc < 18.5) {
            return 'Bajo peso';
        } else if (imc >= 18.5 && imc < 25) {
            return 'Peso normal';
        } else if (imc >= 25 && imc < 30) {
            return 'Sobrepeso';
        } else if (imc >= 30 && imc < 35) {
            return 'Obesidad grado I';
        } else if (imc >= 35 && imc < 40) {
            return 'Obesidad grado II';
        } else {
            return 'Obesidad grado III';
        }
    }




function calcularFUM() {
    // Obtener el valor de la fecha de última menstruación
    var fechaFUM = new Date(document.getElementById("fechaFUM").value);
    
    // Calcular la fecha probable de parto sumando 280 días (40 semanas) a la FUM
    var fpp = new Date(fechaFUM.getTime() + 280 * 24 * 60 * 60 * 1000);
    
    // Calcular el número de semanas de gestación
    var tiempoTranscurrido = Date.now() - fechaFUM.getTime();
    var semanasGestacion = Math.floor(tiempoTranscurrido / (7 * 24 * 60 * 60 * 1000));
    
    // Formatear las fechas en formato YYYY-MM-DD
    var fppFormatted = fpp.toISOString().split("T")[0];
    
    // Asignar los valores a los campos correspondientes
    document.getElementById("fechaFPP").value = fppFormatted;
    document.getElementById("semanagestacion").value = semanasGestacion;
}



// este fragmento de código hace que, en el formulario de triageGinecologia.php, tome el valor de Presion sistolica y evalúe el valor ingresado, para determinar si, el semáforo es verde, amarillo o rojo.
//Este script agrega un evento de escucha al input de presión arterial. Cuando el usuario ingresa un valor, el script evalúa las condiciones y cambia el color de fondo del input según las mismas.



const combinedValue = [];

const inputPresion = document.getElementById("presionsistolica");
const valuepresion = [];

inputPresion.addEventListener("input", function () {
    const presion = parseInt(inputPresion.value);
    let valorPresion = 0;

    if (presion >= 160) {
        inputPresion.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorPresion = 3;
    } else if (presion >= 130 && presion <= 159) {
        inputPresion.style.backgroundColor = "rgb(255, 255, 0, 0.30)";
        valorPresion = 2;
    } else if (presion >= 90 && presion <= 129) {
        inputPresion.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorPresion = 1;
    } else if (presion >= 1 && presion <= 89) {
        inputPresion.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorPresion = 3;
    } else {
        inputPresion.style.backgroundColor = ""; // Resetea el color
    }
    valuepresion.length = 0; // Limpia el array antes de agregar el nuevo indicador
    if (valorPresion) {
        valuepresion.push(valorPresion);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
    

});



// Presión Diastólica

const inputPresionD = document.getElementById("presiondiastolica");
const valuepresionD = [];

inputPresionD.addEventListener("input", function () {
    const presiond = parseInt(inputPresionD.value);
    let valorPresionD = 0;


    if (presiond >= 90) {
        inputPresionD.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorPresionD = 3;
    } else if (presiond >= 81 && presiond <= 90) {
        inputPresionD.style.backgroundColor = "rgb(255, 255, 0, 0.30)";
        valorPresionD = 2;
    } else if (presiond >= 50 && presiond <= 80) {
        inputPresionD.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorPresionD = 1;
    } else if (presiond >= 1 && presiond <= 49) {
        inputPresionD.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorPresionD = 3;
    } else {
        inputPresionD.style.backgroundColor = ""; // Resetea el color
    }
    valuepresionD.length = 0;
    if(valorPresionD) {
        valuepresionD.push(valorPresionD);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
    
});

    //Frecuencia cardiaca

const inputFrecuenciaC = document.getElementById("frecuenciacardiaca");
const valueFrecuenciaC=[];

inputFrecuenciaC.addEventListener("input", function () {
    const frecuenciac = parseInt(inputFrecuenciaC.value);
    let valorfrecuenciaC = 0;

    if (frecuenciac >= 101) {
        inputFrecuenciaC.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorfrecuenciaC = 3;
    } else if (frecuenciac >= 60 && frecuenciac <= 100) {
        inputFrecuenciaC.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorfrecuenciaC = 1;
    } else if (frecuenciac >= 1 && frecuenciac <= 59) {
        inputFrecuenciaC.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorfrecuenciaC = 3;
    } else {
        inputFrecuenciaC.style.backgroundColor = ""; // Resetea el color
    }
    valueFrecuenciaC.length = 0;
    if (valorfrecuenciaC) {
        valueFrecuenciaC.push(valorfrecuenciaC);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});


//Frecuencia respiratoria

const inputFrecuenciaR = document.getElementById("frecuenciarespiratoria");
const valueFrecuenciaR = [];

inputFrecuenciaR.addEventListener("input", function () {
    const frecuenciar = parseInt(inputFrecuenciaR.value);
    let valorfrecuenciaR = 0;

    if (frecuenciar >= 25) {
        inputFrecuenciaR.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorfrecuenciaR = 3;
    } else if (frecuenciar >= 18 && frecuenciar <= 24) {
        inputFrecuenciaR.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorfrecuenciaR = 1;
    } else if (frecuenciar >= 1 && frecuenciar <= 17) {
        inputFrecuenciaR.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorfrecuenciaR = 3;
    } else {
        inputFrecuenciaR.style.backgroundColor = ""; // Resetea el color
    }
    valueFrecuenciaR.length = 0;
    if (valorfrecuenciaR) {
        valueFrecuenciaR.push(valorfrecuenciaR);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
    });

//Temperatura

const inputTemperatura = document.getElementById("temperatura");
const valueTemperatura = [];

inputTemperatura.addEventListener("input", function () {
    const temperatura = parseFloat(inputTemperatura.value);
    let valorTemperatura = 0;

    if (temperatura >= 38) {
        inputTemperatura.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorTemperatura = 3;
    } else if (temperatura >= 37.5 && temperatura <= 37.9) {
        inputTemperatura.style.backgroundColor = "rgb(255, 255, 0, 0.30)";
        valorTemperatura = 2;
    } else if (temperatura >= 36.1 && temperatura <= 37.4) {
        inputTemperatura.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorTemperatura = 1;
    } else if (temperatura >= 1 && temperatura <= 36) {
        inputTemperatura.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorTemperatura = 3;
    } else {
        inputTemperatura.style.backgroundColor = ""; // Resetea el color
    }
    valueTemperatura.length=0;
    if (valorTemperatura) {
        valueTemperatura.push(valorTemperatura);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    // frecuencia cardiaca fetal

const inputFrecuenciaCF = document.getElementById("frecuenciacardiacafetal");
const valueFrecuenciaCF =[];

inputFrecuenciaCF.addEventListener("input", function () {
    const frecuenciaFetal = parseInt(inputFrecuenciaCF.value);
    let valorFrecuenciaCF = 0;

    if (frecuenciaFetal >= 161) {
        inputFrecuenciaCF.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorFrecuenciaCF = 3;
    } else if (frecuenciaFetal >= 110 && frecuenciaFetal <= 160) {
        inputFrecuenciaCF.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorFrecuenciaCF = 1;
    } else if (frecuenciaFetal >= 1 && frecuenciaFetal <= 110) {
        inputFrecuenciaCF.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorFrecuenciaCF = 3;
    } else {
        inputFrecuenciaCF.style.backgroundColor = ""; // Resetea el color
    }
    valueFrecuenciaCF.length = 0;
    if (valorFrecuenciaCF) {
        valueFrecuenciaCF.push(valorFrecuenciaCF);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    //ESTADO DE CONCIENCIA

    //Este código JavaScript modifica directamente las propiedades de estilo del <select> en función de la opción seleccionada. Al seleccionar "Estuporosa/Coma", el fondo se vuelve rojo. 
    //Al seleccionar "Despierta", el fondo se vuelve verde. Si seleccionas cualquier otra opción, los estilos se restablecerán a sus valores originales.

const estadoConcienciaSelect = document.getElementById('estadoconciencia');
const valueEstadoConciencia = [];

estadoConcienciaSelect.addEventListener('change', function() {
    const selectedValue = estadoConcienciaSelect.value;
    let valorEstadoConciencia = 0;
    if (selectedValue === 'Estuporosa/Coma') {
        estadoConcienciaSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorEstadoConciencia = 3;
    } else if (selectedValue === 'Despierta') {
        estadoConcienciaSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorEstadoConciencia = 1;
    } else {
        estadoConcienciaSelect.style.backgroundColor = '';
    }
    valueEstadoConciencia.length =0;
    if (valorEstadoConciencia) {
        valueEstadoConciencia.push(valorEstadoConciencia);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});


    // CONVULSIONES

const ConvulsionesSelect = document.getElementById('convulsiones');
const valueConvulsiones=[];

ConvulsionesSelect.addEventListener('change', function() {
    const selectedValue = ConvulsionesSelect.value;
    let valorConvulsiones = 0;
    if (selectedValue === 'Presentes, estado post-ictal') {
        ConvulsionesSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorConvulsiones = 3;
    } else if (selectedValue === 'Ausentes') {
        ConvulsionesSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorConvulsiones = 1;
    } else {
        ConvulsionesSelect.style.backgroundColor = '';
    }

    valueConvulsiones.length=0;
    if (valorConvulsiones) {
        valueConvulsiones.push(valorConvulsiones);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});


   //SINTOMAS DE VASOESPASMO

const vasoespasmoSelect = document.getElementById('vasoespasmo');
const valueVasoEspasmo =[];

vasoespasmoSelect.addEventListener('change', function() {
    const selectedValue = vasoespasmoSelect.value;
    let valorEspasmos = 0;
    if (selectedValue === 'Todos presentes') {
        vasoespasmoSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)"; //rojo
        valorEspasmos = 3;
    } else if (selectedValue === 'Solo alguno') {
        vasoespasmoSelect.style.backgroundColor = "rgb(255, 255, 0, 0.30)"; //amarillo
        valorEspasmos = 2;
    } else if (selectedValue === 'Ninguno'){
        vasoespasmoSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)"; //verde
        valorEspasmos = 1;
    } else {
        vasoespasmoSelect.style.backgroundColor = '';
    }
    valueVasoEspasmo.length =0;
    if (valorEspasmos) {
        valueVasoEspasmo.push(valorEspasmos);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    // Dolor en epigastrio o en barra o en cuadrante superior derecho del abdomen

const epigastrioSelect = document.getElementById('epigastrio');
const valueEpigastrio =[];

epigastrioSelect.addEventListener('change', function() {
    const selectedValue = epigastrioSelect.value;
    let valorEpigastrio =0;
    if (selectedValue === 'Presente') {
        epigastrioSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)";
        valorEpigastrio =3;
    } else if (selectedValue === 'Ausente'){
        epigastrioSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)";
        valorEpigastrio =1;
    } else {
        epigastrioSelect.style.backgroundColor = '';
    }
    valueEpigastrio.length =0;
    if (valorEpigastrio) {
        valueEpigastrio.push(valorEpigastrio);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    //Signos

    //Movimientos Fetales

const movimientosfetalesSelect = document.getElementById('movimientosfetales');
const valueMovimientosF = [];

movimientosfetales.addEventListener('change', function() {
    const selectedValue = movimientosfetales.value;
    let valorMovimientos = 0;
    if (selectedValue === 'Ausentes') {
        movimientosfetales.style.backgroundColor = "rgb(255, 0, 0, 0.30)"; //rojo
        valorMovimientos = 3;
    } else if (selectedValue === 'Disminuidos') {
        movimientosfetales.style.backgroundColor = "rgb(255, 255, 0, 0.30)"; //amarillo
        valorMovimientos = 2;
    } else if (selectedValue === 'Presentes'){
        movimientosfetales.style.backgroundColor = "rgb(143, 188, 143, 0.30)"; //verde
        valorMovimientos = 1;
    } else {
        movimientosfetales.style.backgroundColor = '';
    }
    valueMovimientosF.length =0;
    if (valorMovimientos) {
        valueMovimientosF.push(valorMovimientos);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    //Sangrado vaginal

const sangradovaginalSelect = document.getElementById('sangradovaginal');
const valueSangrado =[];

sangradovaginalSelect.addEventListener('change', function() {
    const selectedValue = sangradovaginalSelect.value;
    let valorSangrado =0;
    if (selectedValue === 'Abundante') {
        sangradovaginalSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)"; //rojo
        valorSangrado =3;
    } else if (selectedValue === 'Escaso a moderado') {
        sangradovaginalSelect.style.backgroundColor = "rgb(255, 255, 0, 0.30)"; //amarillo
        valorSangrado =2;
    } else if (selectedValue === 'Ausente'){
        sangradovaginalSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)"; //verde
        valorSangrado =1;
    } else {
        sangradovaginalSelect.style.backgroundColor = '';
    }
    valueSangrado.length =0;
    if (valorSangrado) {
        valueSangrado.push(valorSangrado);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
    });

    //Salida de líquido amniótico

const salidaliquidoSelect = document.getElementById('salidaliquido');
const valueLiquido =[];

salidaliquidoSelect.addEventListener('change', function() {
    const selectedValue = salidaliquidoSelect.value;
    let valorLiquido =0;
    if (selectedValue === 'Presente') {
        salidaliquidoSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)"; //rojo
        valorLiquido =3;
    } else if (selectedValue === 'Sospecha') {
        salidaliquidoSelect.style.backgroundColor = "rgb(255, 255, 0, 0.30)"; //amarillo
        valorLiquido =2;
    } else if (selectedValue === 'Ausente'){
        salidaliquidoSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)"; //verde
        valorLiquido =1;
    } else {
        salidaliquidoSelect.style.backgroundColor = '';
    }
    valueLiquido.length=0;
    if (valorLiquido) {
        valueLiquido.push(valorLiquido);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    //Trabajo de Parto

const trabajopartoSelect = document.getElementById('trabajoparto');
const valueParto =[];

trabajopartoSelect.addEventListener('change', function() {
    const selectedValue = trabajopartoSelect.value;
    let valorParto = 0;
    if (selectedValue === 'En expulsivo') {
        trabajopartoSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)"; //rojo
        valorParto = 3;
    } else if (selectedValue === 'Fase latente activa') {
        trabajopartoSelect.style.backgroundColor = "rgb(255, 255, 0, 0.30)"; //amarillo
        valorParto = 2;
    } else if (selectedValue === 'Ausente'){
        trabajopartoSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)"; //verde
        valorParto = 1;
    } else {
        trabajopartoSelect.style.backgroundColor = '';
    }
    valueParto.length = 0;
    if (valorParto) {
        valueParto.push(valorParto);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    //Presentación fetal

const presentacionfetalSelect = document.getElementById('presentacionfetal');
const valueFetal = [];

presentacionfetalSelect.addEventListener('change', function() {
    const selectedValue = presentacionfetalSelect.value;
    let valorFetal = 0;
    if (selectedValue === 'Partes fetales') {
        presentacionfetalSelect.style.backgroundColor = "rgb(255, 0, 0, 0.30)"; //rojo
        valorFetal = 3;
    } else if (selectedValue === 'Cefálico encajado') {
        presentacionfetalSelect.style.backgroundColor = "rgb(255, 255, 0, 0.30)"; //amarillo
        valorFetal = 2;
    } else if (selectedValue === 'Cefálico libre - abocado'){
        presentacionfetalSelect.style.backgroundColor = "rgb(143, 188, 143, 0.30)"; //verde
        valorFetal = 1;
    } else {
        presentacionfetalSelect.style.backgroundColor = '';
    }
    valueFetal.length =0;
    if (valorFetal) {
        valueFetal.push(valorFetal);
    }
    combinedValue.length = 0; // Limpia el array antes de agregar nuevos valores
    combinedValue.push(...valuepresion, 
    ...valuepresionD,...valueFrecuenciaC,...valueFrecuenciaR,...valueTemperatura,
    ...valueFrecuenciaCF,...valueEstadoConciencia,...valueConvulsiones,...valueVasoEspasmo,
    ...valueEpigastrio,...valueMovimientosF,...valueSangrado,...valueLiquido,
    ...valueParto,...valueFetal);
});

    //EVALUACIÓN RESULTADO


    const triageTotal = document.getElementById('resultado_semaforo');

    function updateBackgroundColor() {
    
        if (combinedValue.includes(3)) {
            triageTotal.style.backgroundColor = "rgba(255, 0, 0, 0.3)"; // Rojo
            triageTotal.value = "Rojo";
        } else if (combinedValue.includes(2)) {
            triageTotal.style.backgroundColor = "rgba(255, 255, 0, 0.3)"; // Amarillo
            triageTotal.value = "Amarillo";
        } else if (combinedValue.includes(1)) {
            triageTotal.style.backgroundColor = "rgba(143, 188, 143, 0.3)"; // Verde
            triageTotal.value = "Verde";
        } else {
            triageTotal.style.backgroundColor = ''; // Ningún color
        }
    }
    
    // Ejecutar la función cada 1000 milisegundos (1 segundo)
    setInterval(updateBackgroundColor, 1000);



</script>