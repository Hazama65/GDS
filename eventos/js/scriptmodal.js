//cambiar el CURP a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre_paciente');

nombreInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});
function curp2date() {
    // Obtener el valor del CURP ingresado
    var curp = document.getElementById("curp").value;

    // Extraer los primeros 6 dígitos del CURP que representan la fecha de nacimiento
    var fechaNacimiento = curp.substr(4, 6);

    // Obtener los dígitos que representan el año en la fecha de nacimiento
    var yearDigits = fechaNacimiento.substr(0, 2);

    // Calcular el año completo de nacimiento tomando en cuenta el siglo
    var year = parseInt(yearDigits);
    if (yearDigits >= 0 && yearDigits <= 21) {
        year = 2000 + year;
    } else {
        year = 1900 + year;
    }

    // Obtener el mes y el día de la fecha de nacimiento
    var month = fechaNacimiento.substr(2, 2);
    var day = fechaNacimiento.substr(4, 2);

    // Formatear la fecha de nacimiento completa
    var fechaCompleta = year + "-" + month + "-" + day;

    // Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
    document.getElementById("fecha").value = fechaCompleta;

    // Calcular la edad de manera precisa
    var fechaActual = new Date();
    var fechaNac = new Date(year, month - 1, day); // Meses en Date son 0-indexados
    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si la fecha de nacimiento aún no ha ocurrido este año
    if (
        fechaActual.getMonth() < fechaNac.getMonth() ||
        (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }
    document.getElementById("edad").value = edad;

    // Determinar el sexo y mostrarlo en el campo correspondiente

    var sexo = curp.charAt(10);
    if (sexo === "H") {
        document.getElementById("sexo").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sexo").value = "Mujer";
    }
}




// SELECCIONAR ÁREA 

document.addEventListener("DOMContentLoaded", function () {
    let selectAreaAtencion = document.getElementById("area_atencion");
    let divAreaAmbulatorio = document.getElementById("area_ambulatorio");
    let divHospitalizacionArea = document.getElementById("hospitalazacion_area");

    selectAreaAtencion.addEventListener("change", function () {
        //  opción seleccionada
        if (selectAreaAtencion.value === "Ambulatorio") {
            // Mostrar div de área ambulatorio y ocultar el de hospitalización
            divAreaAmbulatorio.style.display = "block";
            divHospitalizacionArea.style.display = "none";

        } else if (selectAreaAtencion.value === "Hospitalizacion") {
            // Mostrar div de hospitalización y ocultar el de área ambulatorio

            divAreaAmbulatorio.style.display = "none";
            divHospitalizacionArea.style.display = "block";

        } else {
            // Ocultar ambos divs si no se selecciona ninguna opción válida
            divAreaAmbulatorio.style.display = "none";
            divHospitalizacionArea.style.display = "none";
        }
    });
});





//  AMBULATORIO 

document.addEventListener("DOMContentLoaded", function () {
    let selecAmbulatorio = document.getElementById("area_ambu");
    let divPV = document.getElementById("ambulatoria_PB");
    let divUnidadApoyoPB = document.getElementById("ambulatoria_unidadapoyo");
    let divPiso1 = document.getElementById("ambulatoria_piso1");
    let divunidadapoyoPiso1 = document.getElementById("ambulatoria_unidadapoyopiso1");
    let divPiso2 = document.getElementById("ambulatoria_piso2");
    let divPiso3 = document.getElementById("ambulatoria_piso3");
    let divesneñanza = document.getElementById("ambulatoria_enseñanzapiso1");

    selecAmbulatorio.addEventListener("change", function () {

        if (selecAmbulatorio.value === "P.B") {
            divPV.style.display = "block";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Unidad de Apoyo de PB") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "block";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Piso 1") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "block";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Unidad de Apoyo Piso 1") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "block";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Piso 2") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "block";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Piso 3") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "block";
            divesneñanza.style.display = "none";

        } else if (selecAmbulatorio.value === "Enseñanza Piso 1") {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "block";

        } else {
            divPV.style.display = "none";
            divUnidadApoyoPB.style.display = "none";
            divPiso1.style.display = "none";
            divunidadapoyoPiso1.style.display = "none";
            divPiso2.style.display = "none";
            divPiso3.style.display = "none";
            divesneñanza.style.display = "none";
        }
    });
});

// HOSPITALIZACION 

document.addEventListener("DOMContentLoaded", function () {
    let selectHospitalizacion = document.getElementById("area_atencionHospi");
    let divPlantaBaja = document.getElementById("PB");
    let divHospiPimerPiso = document.getElementById("primerpiso");
    let divHospiSegundoPiso = document.getElementById("segundopiso");
    let divHospiTercerPiso = document.getElementById("tercerpiso");
    let divHospiCuartoPiso = document.getElementById("cuartopiso");

    selectHospitalizacion.addEventListener("change", function () {

        if (selectHospitalizacion.value === "P.B") {
            divPlantaBaja.style.display = "block";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Primero Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "block";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Segundo Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "block";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Tercer Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "block";
            divHospiCuartoPiso.style.display = "none";

        } else if (selectHospitalizacion.value === "Cuarto Piso") {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "block";

        } else {
            divPlantaBaja.style.display = "none";
            divHospiPimerPiso.style.display = "none";
            divHospiSegundoPiso.style.display = "none";
            divHospiTercerPiso.style.display = "none";
            divHospiCuartoPiso.style.display = "none";
        }
    });
});




// SELECCIONAR TIPO DE EVENTO 

document.addEventListener("DOMContentLoaded", function () {
    let selectTipoEvento = document.getElementById("Tipo_evento");
    let divtip_adverso= document.getElementById("tip_adverso");
    let divtip_centinela = document.getElementById("tip_centinela");
    let divinfo_familiar = document.getElementById("info_familiar");

    selectTipoEvento.addEventListener("change", function () {
        //  opción seleccionada
        if (selectTipoEvento.value === "Evento Adverso") {
            // Mostrar div de área ambulatorio y ocultar el de hospitalización
            divtip_adverso.style.display = "block";
            divtip_centinela.style.display = "none";
            divinfo_familiar.style.display = "block"

        } else if (selectTipoEvento.value === "Centinela") {
            // Mostrar div de hospitalización y ocultar el de área ambulatorio

            divtip_adverso.style.display = "none";
            divtip_centinela.style.display = "block";
            divinfo_familiar.style.display = "block"


        } else {
            // Ocultar ambos divs si no se selecciona ninguna opción válida
            divtip_adverso.style.display = "none";
            divtip_centinela.style.display = "none";
            divinfo_familiar.style.display = "none"

        }
    });
});
