function calculateCHADS2VASc() {
    let score = 0;

    // Edad
    const ageInputs = document.getElementsByName('E');
    for (let i = 0; i < ageInputs.length; i++) {
        if (ageInputs[i].checked) {
            score += parseInt(ageInputs[i].value);
            break;
        }
    }

    // Historia de Insuf. Cardiaca Congestiva
    if (document.getElementById('ICC').checked) {
        score += parseInt(document.getElementById('ICC').value);
    }

    // Hipertensión
    if (document.getElementById('HT').checked) {
        score += parseInt(document.getElementById('HT').value);
    }

    // ACV, AIT o embolismo previo
    if (document.getElementById('HA').checked) {
        score += parseInt(document.getElementById('HA').value);
    }

    // Historia de Enfermedad Vascular
    if (document.getElementById('HEV').checked) {
        score += parseInt(document.getElementById('HEV').value);
    }

    // Diabetes
    if (document.getElementById('D').checked) {
        score += parseInt(document.getElementById('D').value);
    }

    // Sexo femenino
    if (document.getElementById('M').checked) {
        score += parseInt(document.getElementById('M').value);
    }

    // Mostrar el resultado
    document.getElementById('chads').value = score;

    switch (score) {

        case 0:
            document.getElementById('riesgo_chads').value = '0.2%';
            break;
        case 1:
            document.getElementById('riesgo_chads').value = '0.6%';

            break;
        case 2:
            document.getElementById('riesgo_chads').value = '2.2%';

            break;
        case 3:
            document.getElementById('riesgo_chads').value = '3.2%';

            break;
        case 4:
            document.getElementById('riesgo_chads').value = '4.8%';

            break;
        case 5:
            document.getElementById('riesgo_chads').value = '7.2%';

            break;
        case 6:
            document.getElementById('riesgo_chads').value = '9.7%';

            break;
        case 7:
            document.getElementById('riesgo_chads').value = '11.2%';

            break;
        case 8:
            document.getElementById('riesgo_chads').value = '10.8%';

            break;
        case 9:
            document.getElementById('riesgo_chads').value = '12.2%';

            break;

        default:
            break;
    }
}

// Agregar evento change a todos los inputs
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('change', calculateCHADS2VASc);
});


