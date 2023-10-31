// Fecha indicada
const fechaIndicada = new Date("2023-10-16 08:35:00");

// Obtén la fecha actual
const fechaActual = new Date();

// Calcula la diferencia en milisegundos
const diferenciaMilisegundos = fechaActual - fechaIndicada;

// Calcula la diferencia en días
const diferenciaDias = diferenciaMilisegundos / (1000 * 60 * 60 * 24);

// Verifica si han pasado al menos 2 días
if (diferenciaDias >= 2) {
    console.log("La fecha indicada ha pasado o expirado.");
} else {
    console.log("La fecha indicada aún no ha expirado.");
}
