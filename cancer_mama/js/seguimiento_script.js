// PROGRESION ENFERMEDAD 

document.addEventListener("DOMContentLoaded", function () {

    var selectProgresionEnfermedad = document.getElementById("ProgresionEnfermedad");
    var divFechaProgresion = document.getElementById("Fecha_progresion");

    selectProgresionEnfermedad.addEventListener("change", function () {

        if (selectProgresionEnfermedad.value === "Si") {
            divFechaProgresion.style.display = "block";

        } else {
            divFechaProgresion.style.display = "none";
        }
    })
})

// PROGRESION ENFERMEDAD 

document.addEventListener("DOMContentLoaded", function () {

    var selectRecurrencia = document.getElementById("Recurrencia");
    var divFechaRecurrencia = document.getElementById("Fecha_Recurrencia");

    selectRecurrencia.addEventListener("change", function () {

        if (selectRecurrencia.value === "Si") {
            divFechaRecurrencia.style.display = "block";

        } else {
            divFechaRecurrencia.style.display = "none";
        }
    })
})