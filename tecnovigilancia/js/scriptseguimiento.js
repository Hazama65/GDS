document.addEventListener("DOMContentLoaded", function () {
    let selectEstatus = document.getElementById("estatus");

    selectEstatus.addEventListener("change", function () {
        switch (selectEstatus.value) {
            case "Solo Detectado":
                selectEstatus.style.backgroundColor = "#e0e0e0";
                break;
            case "No hay respuesta":
                selectEstatus.style.backgroundColor = "#f4444f";
                break;
            case "Respuesta":
                selectEstatus.style.backgroundColor = "#f6bc66";
                break;
            case "Seguimiento":
                selectEstatus.style.backgroundColor = "#b0f7b8";
                break;
            case "Cerrado Caso":
                selectEstatus.style.backgroundColor = "#79addc";
                break;
            default:
                selectEstatus.style.backgroundColor = "";
                break;
        }
    });
});

