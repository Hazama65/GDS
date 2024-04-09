//cambiar el curp a mayusculas
let curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function () {
    this.value = this.value.toUpperCase();
});


// Función para cambiar la primera letra de cada palabra a mayusculas para que quede como nombre personal:
const capitalizeWords = (str) => {
    return str.replace(/(?:^|\s)\S/g, function (a) {
        return a.toUpperCase();
    });
}

const nombreInput = document.getElementById('nombre_completo');

nombreInput.addEventListener('blur', function () {
    this.value = capitalizeWords(this.value);
});



// Función para calcular datos desde el CURP
const curp2date = () => {
    // Obtener el valor del CURP ingresado
    let curp = document.getElementById("curp").value;

    // Extraer la fecha de nacimiento y el sexo del CURP
    let fechaNacimiento = curp.substr(4, 6);
    let sexo = curp.substr(10, 1);

    // Calcular la fecha de nacimiento completa
    let year = fechaNacimiento.substr(0, 2);
    let month = fechaNacimiento.substr(2, 2);
    let day = fechaNacimiento.substr(4, 2);

    // Obtener la fecha actual
    let fechaActual = new Date();

    // Calcular la fecha de nacimiento completa considerando el siglo
    let birthYear = parseInt(year) < parseInt(fechaActual.getFullYear().toString().substr(2, 2))
        ? parseInt("20" + year)
        : parseInt("19" + year);
    let fechaNac = new Date(birthYear, month - 1, day);

    // Calcular la edad
    let edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si el mes actual es anterior al mes de nacimiento o si es el mismo mes pero el día actual es anterior al día de nacimiento
    if (
        (fechaActual.getMonth() < fechaNac.getMonth()) ||
        (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }
    // Mostrar la edad en el campo correspondiente
    document.getElementById("edad").value = edad;

    // Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
    let fechaCompleta = fechaNac.getFullYear() + "-" + month + "-" + day;
    document.getElementById("birth_date").value = fechaCompleta;

    // Determinar el sexo y mostrarlo en el campo correspondiente
    if (sexo === "H") {
        document.getElementById("sex").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sex").value = "Mujer";
    }
}

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