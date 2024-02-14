const urgencias_traige = () => {
    let urgenciasValue = document.getElementById("tiempo_urgencias").value;
    let triageValue = document.getElementById("tiempo_TRIAGE").value;

    let urgencias = new Date("1970-01-01T" + urgenciasValue);
    let triage = new Date("1970-01-01T" + triageValue);

    let diferenciaMs = triage - urgencias;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '00:10:00') {
        document.getElementById("puerta_triage").value = 'No';
        document.getElementById("puerta_triage").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_triage").value = 'Si';
        document.getElementById("puerta_triage").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_urgencias").addEventListener("input", urgencias_traige);
    document.getElementById("tiempo_TRIAGE").addEventListener("input", urgencias_traige);
});

const traige_choque = () => {
    let triageValue = document.getElementById("tiempo_TRIAGE").value;
    let choqueValue = document.getElementById("tiempo_CHOQUE").value;

    let choque = new Date("1970-01-01T" + choqueValue);
    let triage = new Date("1970-01-01T" + triageValue);

    let diferenciaMs = choque - triage ;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '00:15:00') {
        document.getElementById("puerta_urgencias").value = 'No';
        document.getElementById("puerta_urgencias").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_urgencias").value = 'Si';
        document.getElementById("puerta_urgencias").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_TRIAGE").addEventListener("input", traige_choque);
    document.getElementById("tiempo_CHOQUE").addEventListener("input", traige_choque);
}); 

const choque_tac = () => {
    let choqueValue = document.getElementById("tiempo_CHOQUE").value;
    let tacValue = document.getElementById("tiempo_TAC").value;

    let choque = new Date("1970-01-01T" + choqueValue);
    let tac = new Date("1970-01-01T" + tacValue);

    let diferenciaMs = tac - choque ;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '00:25:00') {
        document.getElementById("puerta_tac").value = 'No';
        document.getElementById("puerta_tac").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_tac").value = 'Si';
        document.getElementById("puerta_tac").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_CHOQUE").addEventListener("input", choque_tac);
    document.getElementById("tiempo_TAC").addEventListener("input", choque_tac);
});

const tac_medicos = () => {
    let tacValue = document.getElementById("tiempo_TAC").value;
    let multiValue = document.getElementById("tiempo_Multidisciplinario").value;

    let multi = new Date("1970-01-01T" + multiValue);
    let tac = new Date("1970-01-01T" + tacValue);

    let diferenciaMs = multi - tac ;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '00:50:00') {
        document.getElementById("puerta_medicos").value = 'No';
        document.getElementById("puerta_medicos").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_medicos").value = 'Si';
        document.getElementById("puerta_medicos").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_TAC").addEventListener("input", tac_medicos);
    document.getElementById("tiempo_Multidisciplinario").addEventListener("input", tac_medicos);
});

const medicos_trombo = () => {
    let multiValue = document.getElementById("tiempo_Multidisciplinario").value;
    let tromboValue = document.getElementById("tiempo_Trombolisis").value;

    let multi = new Date("1970-01-01T" + multiValue);
    let trombo = new Date("1970-01-01T" + tromboValue);

    let diferenciaMs = trombo - multi ;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '00:50:00') {
        document.getElementById("puerta_aguja").value = 'No';
        document.getElementById("puerta_aguja").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_aguja").value = 'Si';
        document.getElementById("puerta_aguja").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_Multidisciplinario").addEventListener("input", medicos_trombo);
    document.getElementById("tiempo_Trombolisis").addEventListener("input", medicos_trombo);
});

const trombo_terapia = () => {
    let tromboValue = document.getElementById("tiempo_Trombolisis").value;
    let terapiaValue = document.getElementById("tiempo_Terapia").value;

    let terapia = new Date("1970-01-01T" + terapiaValue);
    let trombo = new Date("1970-01-01T" + tromboValue);

    let diferenciaMs = terapia - trombo;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '02:00:00') {
        document.getElementById("puerta_terapia").value = 'No';
        document.getElementById("puerta_terapia").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_terapia").value = 'Si';
        document.getElementById("puerta_terapia").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_Trombolisis").addEventListener("input", trombo_terapia);
    document.getElementById("tiempo_Terapia").addEventListener("input", trombo_terapia);
});

const terapia_tac = () => {
    let terapiaValue = document.getElementById("tiempo_Terapia").value;
    let tacValue = document.getElementById("tiempo_tac").value;

    let terapia = new Date("1970-01-01T" + terapiaValue);
    let tac = new Date("1970-01-01T" + tacValue);

    let diferenciaMs = tac - terapia;

    let diferenciaHoras = Math.floor(diferenciaMs / (1000 * 60 * 60));
    let diferenciaMinutos = Math.floor((diferenciaMs % (1000 * 60 * 60)) / (1000 * 60));
    let diferenciaSegundos = Math.floor((diferenciaMs % (1000 * 60)) / 1000);

    let diferenciaFormato = `${String(diferenciaHoras).padStart(2, '0')}:${String(diferenciaMinutos).padStart(2, '0')}:${String(diferenciaSegundos).padStart(2, '0')}`;

    if (diferenciaFormato > '24:00:00') {
        document.getElementById("puerta_taccontrol").value = 'No';
        document.getElementById("puerta_taccontrol").style.backgroundColor = 'Red'; // Cambiar el color de fondo a verde
    } else {
        document.getElementById("puerta_taccontrol").value = 'Si';
        document.getElementById("puerta_taccontrol").style.backgroundColor = 'green'; // Cambiar el color de fondo a verde

    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tiempo_Terapia").addEventListener("input", terapia_tac);
    document.getElementById("tiempo_tac").addEventListener("input", terapia_tac);
});