document.addEventListener("DOMContentLoaded", function() {
    var diferenciaCelda = document.getElementById("diferencia_celda");
    var diferenciaDias = parseInt(diferenciaCelda.textContent); // Convierte el contenido de la celda a un entero

    if (diferenciaDias <= 1) {
        diferenciaCelda.style.backgroundColor = "rgb(143, 188, 143, 0.80)"; // Establece el color a verde para valores positivos
    } else {
        diferenciaCelda.style.backgroundColor = "rgb(255, 0, 0, 0.80)"; // Establece el color a rojo para valores negativos
    }
});