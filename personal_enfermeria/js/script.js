

document.getElementById("limpiarFormularioBtn").addEventListener("click", function () {
  document.getElementById("patientForm").reset();
});


// script.js

// Función para capitalizar la primera letra de cada palabra en un texto
function capitalizeFirstLetter(text) {
  return text.toLowerCase().replace(/(?:^|\s)\S/g, function (a) { return a.toUpperCase(); });
}

// Manejar el evento input en el campo "Nombre(s)"
document.getElementById("contacto").addEventListener("input", function () {
  this.value = capitalizeFirstLetter(this.value);
});

// Manejar el evento input en el campo "Apellido Paterno"
document.getElementById("apellidoPaterno").addEventListener("input", function () {
  this.value = capitalizeFirstLetter(this.value);
});

// Manejar el evento input en el campo "Apellido Materno"
document.getElementById("apellidoMaterno").addEventListener("input", function () {
  this.value = capitalizeFirstLetter(this.value);
});

// Manejar el evento input en el campo "Nombre(s)"
document.getElementById("nombre").addEventListener("input", function () {
  this.value = capitalizeFirstLetter(this.value);
});



// Función para habilitar campos según la selección
function habilitarCampos(selectorId) {
  var valorSeleccionado = document.getElementById(selectorId).value;
  var divFechaExpedicion = document.getElementById('divFechaExpedicion_' + selectorId);
  var divFechaVigencia = document.getElementById('divFechaVigencia_' + selectorId);
  var divEstatus = document.getElementById('divEstatus_' + selectorId);


  if (valorSeleccionado === 'Si') {
    divFechaExpedicion.style.display = 'block';
    divFechaVigencia.style.display = 'block';
    divEstatus.style.display = 'block';
  } else {
    divFechaExpedicion.style.display = 'none';
    divFechaVigencia.style.display = 'none';
    divEstatus.style.display = 'none';
  }
}


// Función para calcular y mostrar la fecha de vigencia en formato dd/mm/yyyy
function calcularFechaVigencia(selectorId) {
  let fechaExpedicion = document.getElementById('fechaExpedicion_' + selectorId).value;

  let fecha1 = new Date(fechaExpedicion);
  let fecha2 = new Date();

  if (selectorId == 'colegiacion') {

    let yearVigencia = fecha1.getFullYear()
    let Vigencia = new Date(fecha1.setFullYear(yearVigencia + 1))

    let year = Vigencia.getFullYear();
    let month = (Vigencia.getMonth() + 1).toString().padStart(2, '0');
    let day = Vigencia.getDate().toString().padStart(2, '0');

    let fechaVigencia = `${year}-${month}-${day}`;

    document.getElementById('fechaVigencia_' + selectorId).value = fechaVigencia;

    if (fecha2 <= Vigencia) {
      document.getElementById('estatus_' + selectorId).value = 'Vigente';
    } else {
      document.getElementById('estatus_' + selectorId).value = 'No Vigente';
    }

  } else if (selectorId == 'certificacion' || selectorId == 'CBSPD' || selectorId == 'Certificación') {

    let yearVigencia = fecha1.getFullYear()
    let Vigencia = new Date(fecha1.setFullYear(yearVigencia + 5))

    let year = Vigencia.getFullYear();
    let month = (Vigencia.getMonth() + 1).toString().padStart(2, '0');
    let day = Vigencia.getDate().toString().padStart(2, '0');

    let fechaVigencia = `${year}-${month}-${day}`;

    document.getElementById('fechaVigencia_' + selectorId).value = fechaVigencia;

    if (fecha2 <= Vigencia) {
      document.getElementById('estatus_' + selectorId).value = 'Vigente';
    } else {
      document.getElementById('estatus_' + selectorId).value = 'No Vigente';
    }
  } else if (selectorId == 'BLS' || selectorId == 'ACLS' || selectorId == 'ReNeo' || selectorId == 'PALS' || selectorId == 'ALSO' || selectorId == 'POE') {
    let yearVigencia = fecha1.getFullYear()
    let Vigencia = new Date(fecha1.setFullYear(yearVigencia + 2))

    let year = Vigencia.getFullYear();
    let month = (Vigencia.getMonth() + 1).toString().padStart(2, '0');
    let day = Vigencia.getDate().toString().padStart(2, '0');

    let fechaVigencia = `${year}-${month}-${day}`;

    document.getElementById('fechaVigencia_' + selectorId).value = fechaVigencia;

    if (fecha2 <= Vigencia) {
      document.getElementById('estatus_' + selectorId).value = 'Vigente';
    } else {
      document.getElementById('estatus_' + selectorId).value = 'No Vigente';
    }
  } else if (selectorId == 'CertificaciónPICC') {
    let yearVigencia = fecha1.getFullYear()
    let Vigencia = new Date(fecha1.setFullYear(yearVigencia + 3))

    let year = Vigencia.getFullYear();
    let month = (Vigencia.getMonth() + 1).toString().padStart(2, '0');
    let day = Vigencia.getDate().toString().padStart(2, '0');

    let fechaVigencia = `${year}-${month}-${day}`;

    document.getElementById('fechaVigencia_' + selectorId).value = fechaVigencia;

    if (fecha2 <= Vigencia) {
      document.getElementById('estatus_' + selectorId).value = 'Vigente';
    } else {
      document.getElementById('estatus_' + selectorId).value = 'No Vigente';
    }
  }

}




// AQUÍ EMPIEZAN LAS FUNCIONES PARA MOSTRAR U OCULTAR LOS CAMPOS DE CURSOS, DEPENDIENDO DE SI SE HAN HECHO O NO.
// Función para mostrar/ocultar campos según la selección del selector
function toggleFields(selectorId) {
  var selectValue = document.getElementById(selectorId).value;
  var divFechaExp = document.getElementById('divFechaExpedicion_' + selectorId);
  var divFechaVig = document.getElementById('divFechaVigencia_' + selectorId);
  var divEstatus = document.getElementById('divEstatus_' + selectorId);

  if (selectValue === 'Si') {
    divFechaExp.style.display = 'block';
    divFechaVig.style.display = 'block';
    divEstatus.style.display = 'block';
    // Además, si quieres habilitar los campos de Fecha Vigencia, descomenta la siguiente línea
    // document.getElementById('fechaVigencia_' + selectorId).disabled = false;
  } else {
    divFechaExp.style.display = 'none';
    divFechaVig.style.display = 'none';
    divEstatus.style.display = 'none';
    // Además, si quieres deshabilitar los campos de Fecha Vigencia, descomenta la siguiente línea
    // document.getElementById('fechaVigencia_' + selectorId).disabled = true;
  }
}


// Función para mostrar/ocultar Fecha de Expedición según la selección del selector
function toggleFechaExpedicion(selectorId) {
  var selectValue = document.getElementById(selectorId).value;
  var divFechaExpedicion = document.getElementById('divFechaExpedicion_' + selectorId);

  if (selectValue === 'Si') {
    divFechaExpedicion.style.display = 'block';
  } else {
    divFechaExpedicion.style.display = 'none';
  }
}



// Manejar el evento change en el campo de entrada de la foto
document.getElementById("foto").addEventListener("change", function () {
  var reader = new FileReader();
  reader.onload = function (e) {
    var img = new Image();
    img.src = e.target.result;
    img.onload = function () {
      var canvas = document.createElement("canvas");
      var ctx = canvas.getContext("2d");
      var MAX_WIDTH = 300;
      var MAX_HEIGHT = 300;
      var width = img.width;
      var height = img.height;
      if (width > height) {
        if (width > MAX_WIDTH) {
          height *= MAX_WIDTH / width;
          width = MAX_WIDTH;
        }
      } else {
        if (height > MAX_HEIGHT) {
          width *= MAX_HEIGHT / height;
          height = MAX_HEIGHT;
        }
      }
      canvas.width = width;
      canvas.height = height;
      ctx.drawImage(img, 0, 0, width, height);
      document.getElementById("imagenPrevisualizacion").src = canvas.toDataURL("image/jpeg");
    }
  }
  reader.readAsDataURL(this.files[0]);
});


