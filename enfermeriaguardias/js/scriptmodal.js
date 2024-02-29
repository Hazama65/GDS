document.getElementById('servicio').addEventListener('change', function() {
    var servicio = this.value;

    document.getElementById("servicio_critica").style.display = "none";
    document.getElementById("servicio_clinica").style.display = "none";
    document.getElementById("servicio_quirurgica").style.display = "none";

    if (servicio === "Críticas") {
        document.getElementById("servicio_critica").style.display = "block";
    } else if (servicio === "Clínicas") {
        document.getElementById("servicio_clinica").style.display = "block";
    } else if (servicio === "Quirúrgicas") {
        document.getElementById("servicio_quirurgica").style.display = "block";
    }
});