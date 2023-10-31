 // Obtener la fecha y hora actual en formato "yyyy-MM-ddTHH:mm"
function obtenerFechaHoraActual() {
    var fecha = new Date();
    var year = fecha.getFullYear();
    var month = (fecha.getMonth() + 1).toString().padStart(2, '0'); // Agregar ceros a la izquierda si es necesario
    var day = fecha.getDate().toString().padStart(2, '0'); // Agregar ceros a la izquierda si es necesario
    var hours = fecha.getHours().toString().padStart(2, '0'); // Agregar ceros a la izquierda si es necesario
    var minutes = fecha.getMinutes().toString().padStart(2, '0'); // Agregar ceros a la izquierda si es necesario
    return year + '-' + month + '-' + day + 'T' + hours + ':' + minutes;
}

// Precargar la fecha y hora actual en el campo de fecha y hora
document.getElementById("fechaHora").value = obtenerFechaHoraActual();




// Agregar eventos onblur para convertir a mayúsculas automáticamente
document.getElementById("servicio").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});
document.getElementById("medico").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});

document.getElementById("autoriza").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});

document.getElementById("apellidoPaterno").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});

document.getElementById("apellidoMaterno").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});

document.getElementById("nombre").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});
document.getElementById("diagnostico").addEventListener("blur", function() {
    this.value = this.value.toUpperCase();
});





// Obtener el número consecutivo del almacenamiento local del navegador
var numeroConsecutivo = localStorage.getItem("numeroConsecutivo") || 1;

function generarFolio() {
    var apellidoPaterno = document.getElementById("apellidoPaterno").value.toUpperCase();
    var nombre = document.getElementById("nombre").value.toUpperCase().substring(0, 3); // Tomar solo las primeras 6 letras
    var servicio = document.getElementById("servicio").value.toUpperCase();

    var fecha = new Date();
    var year = fecha.getFullYear().toString().substr(-2); // Obtenemos los últimos dos dígitos del año
    var month = (fecha.getMonth() + 1).toString().padStart(2, '0'); // Agregar ceros a la izquierda si es necesario
    var day = fecha.getDate().toString().padStart(2, '0'); // Agregar ceros a la izquierda si es necesario

    var folio = "HRAEI" + day + month + year + "_" + numeroConsecutivo + "_" + apellidoPaterno + nombre + "_" + servicio ;
    document.getElementById("folio").value = folio;

    // Incrementar el número consecutivo y almacenarlo en el almacenamiento local
    numeroConsecutivo++;
    localStorage.setItem("numeroConsecutivo", numeroConsecutivo);
}

