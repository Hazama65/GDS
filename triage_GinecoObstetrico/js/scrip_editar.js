
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



