
// FUNCION PARA NUMERO DE MEDICAMENTOS 
document.addEventListener("DOMContentLoaded", function () {
    let selectInvestigacion = document.getElementById("realizo_investigacion");
    let divUnoMedicamento = document.getElementById("un_medicamento");
    let divDosMedicamento = document.getElementById("dos_medicamento");
    let divTresMedicamento = document.getElementById("tres_medicamento");

    // Función para ocultar todos los divs de medicamentos y restablecer sus valores
    function resetDivs() {
        divUnoMedicamento.style.display = "none";
        divDosMedicamento.style.display = "none";
        divTresMedicamento.style.display = "none";

        // Opcional: Restablecer los valores a 0 o su valor inicial
        let inputsUno = divUnoMedicamento.querySelectorAll('input, select');
        inputsUno.forEach(input => input.value = input.defaultValue);

        let inputsDos = divDosMedicamento.querySelectorAll('input, select');
        inputsDos.forEach(input => input.value = input.defaultValue);

        let inputsTres = divTresMedicamento.querySelectorAll('input, select');
        inputsTres.forEach(input => input.value = input.defaultValue);
    }

    selectInvestigacion.addEventListener("change", function () {
        resetDivs(); // Oculta todos los divs y restablece sus valores

        // Muestra los divs correspondientes según la selección
        if (selectInvestigacion.value === "Medicamentos Involucrados Uno") {
            divUnoMedicamento.style.display = "block";
        } else if (selectInvestigacion.value === "Medicamentos Involucrado Dos") {
            divUnoMedicamento.style.display = "block";
            divDosMedicamento.style.display = "block";
        } else if (selectInvestigacion.value === "Medicamentos Involucrado Tres") {
            divUnoMedicamento.style.display = "block";
            divDosMedicamento.style.display = "block";
            divTresMedicamento.style.display = "block";
        }
    });
});
