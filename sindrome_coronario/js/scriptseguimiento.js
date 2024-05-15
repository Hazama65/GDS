const calculaIMC = () => {
    const tallaInput = document.getElementById('talla');
    const pesoInput = document.getElementById('peso');
    const imcInput = document.getElementById('imc');

    const talla = parseFloat(tallaInput.value.replace(',', '.'));
    const peso = parseFloat(pesoInput.value);

    if (talla && peso) {
        const imc = peso / (talla * talla);

        imcInput.value = imc.toFixed(2);
    } else {
        imcInput.value = '';
    }
}
const calculateFIB4Result = () => {
    // Obtener el valor de FIB 4
    let fib4Value = parseFloat(document.getElementById('FIB4').value);

    // Obtener el elemento donde se mostrará el resultado
    let resultadoFIBElement = document.getElementById('resultado_fib');

    // Calcular el resultado FIB 4 y actualizar el elemento correspondiente
    if (fib4Value <= 1.45) {
        resultadoFIBElement.value = "F0-F2 Sin Fibrosis Avanzada";
    } else if (fib4Value <= 3.25) {
        resultadoFIBElement.value = "Fibrosis Intermedia";
    } else {
        resultadoFIBElement.value = "F3-F4 Fibrosis Significativa";
    }
}

const suma_CDAI = () => {
    let sjc28 = parseFloat(document.getElementById('sjc28').value);
    let tjc28 = parseFloat(document.getElementById('tjc28').value);
    let pga = parseFloat(document.getElementById('pga').value);
    let ega = parseFloat(document.getElementById('ega').value);
    let cdai = document.getElementById('CDAI');

    let ResultadoCDAI = sjc28 + tjc28 + pga + ega;

    cdai.value = ResultadoCDAI;
}

const suma_SDAI = () => {
    let sjc28 = parseFloat(document.getElementById('sjc28').value);
    let tjc28 = parseFloat(document.getElementById('tjc28').value);
    let pga = parseFloat(document.getElementById('pga').value);
    let ega = parseFloat(document.getElementById('ega').value);
    let pcr = parseFloat(document.getElementById('PCR').value);
    let sdai = document.getElementById('SDAI');

    let ResultadoSDAI = sjc28 + tjc28 + pga + ega + pcr;

    sdai.value = ResultadoSDAI;


}


const visualizacion_tratamiento = () => {
    const Metrotexate = document.getElementById('Metrotexate');
    const Leflunomide = document.getElementById('Leflunomide');
    const Sulfazalasina = document.getElementById('Sulfazalasina');
    const Tocoferol = document.getElementById('Tocoferol');
    const Glucocorticoide = document.getElementById('Glucocorticoide');
    const vit_d = document.getElementById('vit_d');
    const Biologico = document.getElementById('Biologico');

    const ds_metro = document.getElementById('ds_metro');
    ds_metro.style.display = "none";
    const ds_leflu = document.getElementById('ds_leflu');
    ds_leflu.style.display = "none";
    const ds_sulfa = document.getElementById('ds_sulfa');
    ds_sulfa.style.display = "none";
    const ds_toco = document.getElementById('ds_toco');
    ds_toco.style.display = "none";
    const tx_gluco = document.getElementById('tx_gluco');
    tx_gluco.style.display = "none";
    const ds_gluco = document.getElementById('ds_gluco');
    ds_gluco.style.display = "none";
    const ds_vit = document.getElementById('ds_vit');
    ds_vit.style.display = "none";
    const tx_bio = document.getElementById('tx_bio');
    tx_bio.style.display = "none";

    Metrotexate.addEventListener('change', () => {
        if (Metrotexate.checked) {
            ds_metro.style.display = "block";
        } else {
            ds_metro.style.display = "none";
        }
    });

    Leflunomide.addEventListener('change', () => {
        if (Leflunomide.checked) {
            ds_leflu.style.display = "block";
        } else {
            ds_leflu.style.display = "none";
        }
    });

    Sulfazalasina.addEventListener('change', () => {
        if (Sulfazalasina.checked) {
            ds_sulfa.style.display = "block";
        } else {
            ds_sulfa.style.display = "none";
        }
    });

    Tocoferol.addEventListener('change', () => {
        if (Tocoferol.checked) {
            ds_toco.style.display = "block";
        } else {
            ds_toco.style.display = "none";
        }
    });

    Glucocorticoide.addEventListener('change', () => {
        if (Glucocorticoide.checked) {
            tx_gluco.style.display = "block";
            ds_gluco.style.display = "block";

        } else {
            tx_gluco.style.display = "none";
            ds_gluco.style.display = "none";

        }
    });

    vit_d.addEventListener('change', () => {
        if (vit_d.checked) {
            ds_vit.style.display = "block";
        } else {
            ds_vit.style.display = "none";
        }
    });

    Biologico.addEventListener('change', () => {
        if (Biologico.checked) {
            tx_bio.style.display = "block";
        } else {
            tx_bio.style.display = "none";
        }
    });
}

