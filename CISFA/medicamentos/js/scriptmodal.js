document.addEventListener("DOMContentLoaded", function () {
    var fechaHoy = new Date().toISOString().split('T')[0];
    document.getElementById('fecha_expedicion').value = fechaHoy;
});
