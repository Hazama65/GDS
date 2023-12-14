document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("otros_ganglios_seg");
    var divElement = document.getElementById("otro_localizacion_seg");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
        }
    });
});