document.getElementById('servicio').addEventListener('change', function() {
    var servicio = this.value;

    document.getElementById("servicio_critica").style.display = "none";
    document.getElementById("servicio_clinica").style.display = "none";
    document.getElementById("servicio_quirurgica").style.display = "none";
    document.getElementById("servicio_ambulatoria").style.display = "none";
    document.getElementById("servicio_hospitalizacion").style.display = "none";
    document.getElementById("servicio_perinatales").style.display ="none";
    document.getElementById("servicio_Pediatria").style.display ="none";


    if (servicio === "Críticas") {
        document.getElementById("servicio_critica").style.display = "block";

    } else if (servicio === "Clínicas") {
        document.getElementById("servicio_clinica").style.display = "block";

    } else if (servicio === "Quirúrgicas") {
        document.getElementById("servicio_quirurgica").style.display = "block";

    }
    else if(servicio == "Ambulatorias" ) {
        document.getElementById("servicio_ambulatoria").style.display = "block";

    }
    else if(servicio == "Hospitalización"){
        document.getElementById("servicio_hospitalizacion").style.display ="block";
    }

    else if (servicio == "Perinatales"){
        document.getElementById("servicio_perinatales").style.display ="block";
    }

    else if (servicio == "Pediatría/Neonatología"){
        document.getElementById("servicio_Pediatria").style.display = "block";
    }
});

// FUNCIONES SERVICIOS SUSTITUTO

document.getElementById('servicio_sustituto').addEventListener('change', function() {
    var servicio_sustituto = this.value;

    document.getElementById("servicio_critica_sustituto").style.display = "none";
    document.getElementById("servicio_clinica_sustituto").style.display = "none";
    document.getElementById("servicio_quirurgica_sustituto").style.display = "none";
    document.getElementById("servicio_ambulatoria_sustituto").style.display = "none";
    document.getElementById("servicio_hospitalizacion_sustituto").style.display = "none";
    document.getElementById("servicio_perinatales_sustituto").style.display ="none";
    document.getElementById("servicio_Pediatria_sustituto").style.display ="none";



    if (servicio_sustituto === "Críticas") {
        document.getElementById("servicio_critica_sustituto").style.display = "block";
        
    } else if (servicio_sustituto === "Clínicas") {
        document.getElementById("servicio_clinica_sustituto").style.display = "block";

    } else if (servicio_sustituto === "Quirúrgicas") {
        document.getElementById("servicio_quirurgica_sustituto").style.display = "block";

    } else if(servicio_sustituto == "Ambulatorias" ) {
        document.getElementById("servicio_ambulatoria_sustituto").style.display = "block";

    }
    else if(servicio_sustituto == "Hospitalización"){
        document.getElementById("servicio_hospitalizacion_sustituto").style.display ="block";
    }

    else if (servicio_sustituto == "Perinatales"){
        document.getElementById("servicio_perinatales_sustituto").style.display ="block";
    }

    else if (servicio_sustituto == "Pediatría/Neonatología"){
        document.getElementById("servicio_Pediatria_sustituto").style.display = "block";
    }
});
