// Obtener la lista de pacientes y el campo de búsqueda
var patientList = document.getElementById('patient-list');
var searchInput = document.getElementById('realtimeSearch');

// Agregar evento de escucha para el evento de entrada en el campo de búsqueda
searchInput.addEventListener('input', function() {
  var searchTerm = searchInput.value.toLowerCase();
  var patientItems = patientList.getElementsByTagName('li');

  // Iterar sobre los elementos de la lista de pacientes y mostrar/ocultar según coincidan con el término de búsqueda
  for (var i = 0; i < patientItems.length; i++) {
    var patientName = patientItems[i].innerText.toLowerCase();
    if (patientName.includes(searchTerm)) {
      patientItems[i].style.display = 'block';
    } else {
      patientItems[i].style.display = 'none';
    }
  }
});


// Obtener el campo de entrada por su ID
var nombreInput = document.getElementById('nombre');

// Agregar un evento de escucha para el evento de entrada
nombreInput.addEventListener('input', function() {
  // Obtener el valor actual del campo de entrada y dividirlo en palabras
  var nombre = nombreInput.value.toLowerCase().split(' ');

  // Iterar sobre cada palabra
  for (var i = 0; i < nombre.length; i++) {
    // Convertir la primera letra de cada palabra a mayúscula
    nombre[i] = nombre[i].charAt(0).toUpperCase() + nombre[i].slice(1);
  }

  // Unir las palabras nuevamente en una sola cadena y establecerla como el nuevo valor del campo de entrada
  nombreInput.value = nombre.join(' ');
});



// Obtener el campo de temperatura por su ID
var temperaturaInput = document.getElementById('Temperatura');

// Agregar un evento de escucha para el evento de entrada
temperaturaInput.addEventListener('input', function() {
  // Obtener el valor actual del campo de temperatura
  var valor = temperaturaInput.value;

  // Verificar si el valor tiene más de 2 caracteres y no es un punto decimal
  if (valor.length > 2 && valor.indexOf('.') === -1) {
    // Insertar el punto decimal después del tercer dígito
    temperaturaInput.value = valor.substring(0, 2) + '.' + valor.substring(2);
  }
});






// Obtener el campo de talla por su ID
var tallaInput = document.getElementById('Talla');

// Agregar un evento de escucha para el evento de entrada
tallaInput.addEventListener('input', function() {
  // Obtener el valor actual del campo de talla
  var valor = tallaInput.value;

  // Verificar si el valor tiene más de 2 caracteres
  if (valor.length > 2) {
    // Dividir el valor por 100 y establecerlo como el nuevo valor del campo de talla
    tallaInput.value = (parseInt(valor) / 100).toFixed(2);
  }
});