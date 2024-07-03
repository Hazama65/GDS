document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("tiempo_urgencias").addEventListener("input", urgencias_traige);
    document.getElementById("tiempo_TRIAGE").addEventListener("input", urgencias_traige);
    document.getElementById("tiempo_TRIAGE").addEventListener("input", traige_choque);
    document.getElementById("tiempo_CHOQUE").addEventListener("input", traige_choque);
    document.getElementById("tiempo_CHOQUE").addEventListener("input", choque_tac);
    document.getElementById("tiempo_TAC").addEventListener("input", choque_tac);
    document.getElementById("tiempo_TAC").addEventListener("input", tac_medicos);
    document.getElementById("tiempo_Multidisciplinario").addEventListener("input", tac_medicos);
    document.getElementById("tiempo_Multidisciplinario").addEventListener("input", medicos_trombo);
    document.getElementById("tiempo_Trombolisis").addEventListener("input", medicos_trombo);
    document.getElementById("tiempo_Trombolisis").addEventListener("input", trombo_terapia);
    document.getElementById("tiempo_Terapia").addEventListener("input", trombo_terapia);
    document.getElementById("tiempo_Terapia").addEventListener("input", terapia_tac);
    document.getElementById("tiempo_tac").addEventListener("input", terapia_tac);
});

const urgencias_traige = () => {
    let urgenciasValue = document.getElementById("tiempo_urgencias").value;
    let triageValue = document.getElementById("tiempo_TRIAGE").value;

    if (urgenciasValue && triageValue) {
        let urgencias = new Date("1970-01-01T" + urgenciasValue);
        let triage = new Date("1970-01-01T" + triageValue);

        let diferenciaMs = triage - urgencias;

        if (diferenciaMs > 10 * 60 * 1000) { // 10 minutos en milisegundos
            document.getElementById("puerta_triage").value = 'MÁS DE 10 MINUTOS';
            document.getElementById("puerta_triage").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_triage").value = 'MENOS DE 10 MINUTOS';
            document.getElementById("puerta_triage").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}

const traige_choque = () => {
    let triageValue = document.getElementById("tiempo_TRIAGE").value;
    let choqueValue = document.getElementById("tiempo_CHOQUE").value;

    if (triageValue && choqueValue) {
        let choque = new Date("1970-01-01T" + choqueValue);
        let triage = new Date("1970-01-01T" + triageValue);

        let diferenciaMs = choque - triage;

        if (diferenciaMs > 15 * 60 * 1000) { // 15 minutos en milisegundos
            document.getElementById("puerta_urgencias").value = 'MÁS DE 15 MINUTOS';
            document.getElementById("puerta_urgencias").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_urgencias").value = 'MENOS DE 15 MINUTOS';
            document.getElementById("puerta_urgencias").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}

const choque_tac = () => {
    let choqueValue = document.getElementById("tiempo_CHOQUE").value;
    let tacValue = document.getElementById("tiempo_TAC").value;

    if (choqueValue && tacValue) {
        let choque = new Date("1970-01-01T" + choqueValue);
        let tac = new Date("1970-01-01T" + tacValue);

        let diferenciaMs = tac - choque;

        if (diferenciaMs > 25 * 60 * 1000) { // 25 minutos en milisegundos
            document.getElementById("puerta_tac").value = 'MÁS DE 25 MINUTOS';
            document.getElementById("puerta_tac").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_tac").value = 'MENOS DE 25 MINUTOS';
            document.getElementById("puerta_tac").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}

const tac_medicos = () => {
    let tacValue = document.getElementById("tiempo_TAC").value;
    let multiValue = document.getElementById("tiempo_Multidisciplinario").value;

    if (tacValue && multiValue) {
        let multi = new Date("1970-01-01T" + multiValue);
        let tac = new Date("1970-01-01T" + tacValue);

        let diferenciaMs = multi - tac;

        if (diferenciaMs > 50 * 60 * 1000) { // 50 minutos en milisegundos
            document.getElementById("puerta_medicos").value = 'MÁS DE 50 MINUTOS';
            document.getElementById("puerta_medicos").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_medicos").value = 'MENOS DE 50 MINUTOS';
            document.getElementById("puerta_medicos").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}

const medicos_trombo = () => {
    let multiValue = document.getElementById("tiempo_Multidisciplinario").value;
    let tromboValue = document.getElementById("tiempo_Trombolisis").value;

    if (multiValue && tromboValue) {
        let multi = new Date("1970-01-01T" + multiValue);
        let trombo = new Date("1970-01-01T" + tromboValue);

        let diferenciaMs = trombo - multi;

        if (diferenciaMs > 50 * 60 * 1000) { // 50 minutos en milisegundos
            document.getElementById("puerta_aguja").value = 'MÁS DE 50 MINUTOS';
            document.getElementById("puerta_aguja").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_aguja").value = 'MENOS DE 50 MINUTOS';
            document.getElementById("puerta_aguja").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}

const trombo_terapia = () => {
    let tromboValue = document.getElementById("tiempo_Trombolisis").value;
    let terapiaValue = document.getElementById("tiempo_Terapia").value;

    if (tromboValue && terapiaValue) {
        let terapia = new Date("1970-01-01T" + terapiaValue);
        let trombo = new Date("1970-01-01T" + tromboValue);

        let diferenciaMs = terapia - trombo;

        if (diferenciaMs > 2 * 60 * 60 * 1000) { // 2 horas en milisegundos
            document.getElementById("puerta_terapia").value = 'MÁS DE 2 HORAS';
            document.getElementById("puerta_terapia").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_terapia").value = 'MENOS DE 2 HORAS';
            document.getElementById("puerta_terapia").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}

const terapia_tac = () => {
    let terapiaValue = document.getElementById("tiempo_Terapia").value;
    let tacValue = document.getElementById("tiempo_tac").value;

    if (terapiaValue && tacValue) {
        let terapia = new Date("1970-01-01T" + terapiaValue);
        let tac = new Date("1970-01-01T" + tacValue);

        let diferenciaMs = tac - terapia;

        if (diferenciaMs > 24 * 60 * 60 * 1000) { // 24 horas en milisegundos
            document.getElementById("puerta_taccontrol").value = 'MÁS DE 24 HORAS';
            document.getElementById("puerta_taccontrol").style.backgroundColor = '#ff8e8e'; // Rojo
        } else {
            document.getElementById("puerta_taccontrol").value = 'MENOS DE 24 HORAS';
            document.getElementById("puerta_taccontrol").style.backgroundColor = '#8eff8e'; // Verde
        }
    }
}