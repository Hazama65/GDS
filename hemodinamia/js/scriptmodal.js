function mostrarLateralidad(elementId) {
  const selectElement = document.getElementById(elementId);
  const lateralidadSelect = document.getElementById(`id_lateralidad${elementId}`);
  const selectedValue = selectElement.value;

  if (selectedValue === 'Si') {
    lateralidadSelect.style.display = 'block';
  } else {
    lateralidadSelect.style.display = 'none';
  }
}

// Llamada inicial para ocultar los campos de lateralidad en el inicio
document.querySelectorAll('.lateralidad-select').forEach((element) => {
  element.style.display = 'none';
});



//STENT
function mostrarCamposStent() {
  const selectedValue = document.getElementById('Stent').value;
  const numeroStent = document.getElementById('numeroStent');
  const medidasStent = document.getElementById('medidasStent');

  if (selectedValue === 'Si') {
    numeroStent.style.display = 'block';
    medidasStent.style.display = 'block';
  } else {
    numeroStent.style.display = 'none';
    medidasStent.style.display = 'none';
  }
}


//BALÓN
function mostrarCamposBalon() {
  const selectedValue = document.getElementById('balon').value;
  const numeroBalon = document.getElementById('numeroBalon');
  const medidasBalon = document.getElementById('medidasBalon');

  if (selectedValue === 'Si') {
    numeroBalon.style.display = 'block';
    medidasBalon.style.display = 'block';
  } else {
    numeroBalon.style.display = 'none';
    medidasBalon.style.display = 'none';
  }
}