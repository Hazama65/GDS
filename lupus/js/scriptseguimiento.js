
const resultado_sledai = () => {
    let switches = [
        document.getElementById('convulsion'),
        document.getElementById('psicosis'),
        document.getElementById('SCO'),
        document.getElementById('AV'),
        document.getElementById('TNC'),
        document.getElementById('DCL'),
        document.getElementById('EVC'),
        document.getElementById('vasculitis'),
        document.getElementById('artritis'),
        document.getElementById('miositis'),
        document.getElementById('CU'),
        document.getElementById('hematuria'),
        document.getElementById('piuria'),
        document.getElementById('proteinuria'),
        document.getElementById('erupcion'),
        document.getElementById('UM'),
        document.getElementById('pleuritis'),
        document.getElementById('pericarditis'),
        document.getElementById('COM'),
        document.getElementById('ADN'),
        document.getElementById('fiebre'),
        document.getElementById('trombocitopenia'),
        document.getElementById('leucopenia'),
        document.getElementById('alopecia')
    ];

    let suma_sledai = document.getElementById('resultados_sledai');
    let resultadoActual = parseInt(suma_sledai.value) || 0;

    const actualizarResultado = () => {
        suma_sledai.value = resultadoActual;
    };

    switches.forEach(switchElement => {
        switchElement.addEventListener('change', () => {
            let valor = parseInt(switchElement.getAttribute('valor'));


            if (switchElement.checked) {
                resultadoActual += valor; // Sumar al resultado
            } else {
                resultadoActual -= valor; // Restar del resultado
            }

            actualizarResultado();
        });
    });
};

// const visualizacion_tratamiento = () => {
//     const Metrotexate = document.getElementById('Metrotexate');
//     const Leflunomide = document.getElementById('Leflunomide');
//     const Sulfazalasina = document.getElementById('Sulfazalasina');
//     const Tocoferol = document.getElementById('Tocoferol');
//     const Glucocorticoide = document.getElementById('Glucocorticoide');
//     const vit_d = document.getElementById('vit_d');
//     const Biologico = document.getElementById('Biologico');

//     const ds_metro = document.getElementById('ds_metro');
//     ds_metro.style.display = "none";
//     const ds_leflu = document.getElementById('ds_leflu');
//     ds_leflu.style.display = "none";
//     const ds_sulfa = document.getElementById('ds_sulfa');
//     ds_sulfa.style.display = "none";
//     const ds_toco = document.getElementById('ds_toco');
//     ds_toco.style.display = "none";
//     const tx_gluco = document.getElementById('tx_gluco');
//     tx_gluco.style.display = "none";
//     const ds_gluco = document.getElementById('ds_gluco');
//     ds_gluco.style.display = "none";
//     const ds_vit = document.getElementById('ds_vit');
//     ds_vit.style.display = "none";
//     const tx_bio = document.getElementById('tx_bio');
//     tx_bio.style.display = "none";

//     Metrotexate.addEventListener('change', () => {
//         if (Metrotexate.checked) {
//             ds_metro.style.display = "block";
//         } else {
//             ds_metro.style.display = "none";
//         }
//     });

//     Leflunomide.addEventListener('change', () => {
//         if (Leflunomide.checked) {
//             ds_leflu.style.display = "block";
//         } else {
//             ds_leflu.style.display = "none";
//         }
//     });

//     Sulfazalasina.addEventListener('change', () => {
//         if (Sulfazalasina.checked) {
//             ds_sulfa.style.display = "block";
//         } else {
//             ds_sulfa.style.display = "none";
//         }
//     });

//     Tocoferol.addEventListener('change', () => {
//         if (Tocoferol.checked) {
//             ds_toco.style.display = "block";
//         } else {
//             ds_toco.style.display = "none";
//         }
//     });

//     Glucocorticoide.addEventListener('change', () => {
//         if (Glucocorticoide.checked) {
//             tx_gluco.style.display = "block";
//             ds_gluco.style.display = "block";

//         } else {
//             tx_gluco.style.display = "none";
//             ds_gluco.style.display = "none";

//         }
//     });

//     vit_d.addEventListener('change', () => {
//         if (vit_d.checked) {
//             ds_vit.style.display = "block";
//         } else {
//             ds_vit.style.display = "none";
//         }
//     });

//     Biologico.addEventListener('change', () => {
//         if (Biologico.checked) {
//             tx_bio.style.display = "block";
//         } else {
//             tx_bio.style.display = "none";
//         }
//     });
// }

resultado_sledai();
// visualizacion_tratamiento();
