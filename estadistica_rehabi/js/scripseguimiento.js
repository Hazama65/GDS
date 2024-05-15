
// FECHA
document.addEventListener("DOMContentLoaded", function () {
    // Obtener la fecha actual
    var fechaActual = new Date();

    // Obtener el elemento de entrada de fecha
    var fechaRegistroInput = document.getElementById("fecha_seg");

    // Formatear la fecha actual como una cadena YYYY-MM-DD
    var fechaFormateada = fechaActual.toISOString().split('T')[0];

    // Establecer la fecha formateada como el valor predeterminado en el campo de entrada
    fechaRegistroInput.value = fechaFormateada;
});








