
// INDICACION 

document.addEventListener("DOMContentLoaded", function () {
    let selectAreaResultado = document.getElementById("AreaResultado");

    let divResultado_laboratorio = document.getElementById("Resultado_laboratorio");
    let divResultado_Imagaen= document.getElementById("Resultado_Imagaen");
    let divResultado_Patologia = document.getElementById("Resultado_Patologia");
    let divResultado_Molecular = document.getElementById("Resultado_Molecular");

    selectAreaResultado.addEventListener("change", function () {
        if (selectAreaResultado.value == "Imagen") {
            divResultado_laboratorio.style.display = "none";
            divResultado_Imagaen.style.display = "block";
            divResultado_Patologia.style.display = "none";
            divResultado_Molecular.style.display = "none";

        } else if (selectAreaResultado.value == "Laboratorio") {
            divResultado_laboratorio.style.display = "block";
            divResultado_Imagaen.style.display = "none";
            divResultado_Patologia.style.display = "none";
            divResultado_Molecular.style.display = "none";

        } else if (selectAreaResultado.value == "Patología") {
            divResultado_laboratorio.style.display = "none";
            divResultado_Imagaen.style.display = "none";
            divResultado_Patologia.style.display = "block";
            divResultado_Molecular.style.display = "none";

        } else if (selectAreaResultado.value == "Molecular") {
            divResultado_laboratorio.style.display = "none";
            divResultado_Imagaen.style.display = "none";
            divResultado_Patologia.style.display = "none";
            divResultado_Molecular.style.display = "block";
            
        }else {
            divResultado_laboratorio.style.display = "none";
            divResultado_Imagaen.style.display = "none";
            divResultado_Patologia.style.display = "none";
            divResultado_Molecular.style.display = "none";
        }
    });
});


