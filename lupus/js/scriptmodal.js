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
    const descripcionInput = document.getElementById('imcdescripcion');


    const talla = parseFloat(tallaInput.value.replace(',', '.'));
    const peso = parseFloat(pesoInput.value);
    const imc = peso / (talla * talla);
    const descripcion = obtenerDescripcionIMC(imc);

    if (talla && peso) {

        imcInput.value = imc.toFixed(2);

        descripcionInput.value = descripcion;
    } else {
        imcInput.value = '';
        descripcionInput.value = '';

    }
    

}

function obtenerDescripcionIMC(imc) {
    if (imc < 18.5) {
    return 'Bajo peso';
    } else if (imc >= 18.5 && imc < 25) {
    return 'Peso normal';
    } else if (imc >= 25 && imc < 30) {
    return 'Sobrepeso';
    } else if (imc >= 30 && imc < 35) {
    return 'Obesidad grado I';
    } else if (imc >= 35 && imc < 40) {
    return 'Obesidad grado II';
    } else {
    return 'Obesidad grado III';
    }
    }





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
        cat_sledai(resultadoActual)
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


    function cat_sledai(sledai) {
        let catego_sledai = document.getElementById('Categoria_sledai');

        if (sledai >= 0 && sledai <= 2) {
            catego_sledai.value = 'Sin Actividad';
        }else if (sledai >= 3 && sledai <= 4) {
            catego_sledai.value = 'Leve';
        }else if (sledai >= 5 && sledai <= 7) {
            catego_sledai.value = 'Moderado';
        }else if (sledai >= 8) {
            catego_sledai.value = 'Severo';
        }else{
            catego_sledai.value = '';
        }



    }
};

function mostrarGradoERC() {
    let checkboxERC = document.getElementById("ERC");
    let gradoERCContainer = document.getElementById("grado_ERC_container");

    if (checkboxERC.checked) {
        gradoERCContainer.style.display = "block";
    } else {
        gradoERCContainer.style.display = "none";
    }
}

function mostrarMeno() {
    let checkboxmeno = document.getElementById("menopausia");
    let menoContainer = document.getElementById("menopausia_grad_container");

    if (checkboxmeno.checked) {
        menoContainer.style.display = "block";
    } else {
        menoContainer.style.display = "none";
    }
}

function mostrarCausaDefuncion() {
    let seleccion = document.getElementById("defuncion").value;
    let causaDefuncionContainer = document.getElementById("causa_defuncion_container");

    if (seleccion === "Si") {
        causaDefuncionContainer.style.display = "block";
    } else {
        causaDefuncionContainer.style.display = "none";
    }
}

function mostrarEgo() {
    let ego_check = document.getElementById("ego_check");
    let ego_container = document.getElementById("div_ego");

    if (ego_check.checked) {
        ego_container.style.display = "block";
    } else {
        ego_container.style.display = "none";
    }
}

function mostrarUso() {
    let seleccion = document.getElementById("doppler").value;
    let usg = document.getElementById("div_uso_usg");

    if (seleccion === "Si") {
        usg.style.display = "block";
    } else {
        usg.style.display = "none";
    }
}

function mostrar_derecha() {
    let Uso_derecha = document.getElementById("Uso_derecha");
    let derecha_container = document.getElementById("derecha_div");

    
    if (Uso_derecha.checked) {
        derecha_container.style.display = "block";
    } else {
        derecha_container.style.display = "none";
    }
}

function mostrar_izquierda() {
    let Uso_izquierda = document.getElementById("Uso_izquierda");
    let izquierda_container = document.getElementById("izquierda_div");

    if (Uso_izquierda.checked) {
        izquierda_container.style.display = "block";
    } else {
        izquierda_container.style.display = "none";
    }
}


function calculo_clasifcacion () {
    let sexo = document.getElementById('sex').value;
    let edad = document.getElementById('edad').value;
    let grosor_derecha = document.getElementById('grosor_derecha').value;
    let grosor_izquierda = document.getElementById('grosor_izquierda').value;

    switch (sexo) {
        case 'Hombre':
            if (grosor_derecha != 0) {
                let clasificacion = clasificarPorEdadYGrosor_hombre_derecha(edad, grosor_derecha);
                document.getElementById('clasificacion_derecha').value = clasificacion;
            }
            if (grosor_izquierda != 0) {
                let clasificacion = clasificarPorEdadYGrosor_hombre_izquierda(edad, grosor_izquierda);
                document.getElementById('clasificacion_izquierda').value = clasificacion;
            }
            break;

        case 'Mujer':
            if (grosor_derecha != 0) {
                let clasificacion = clasificarPorEdadYGrosor_mujer_derecha(edad, grosor_derecha);
                document.getElementById('clasificacion_derecha').value = clasificacion;
            }
            if (grosor_izquierda != 0) {
                let clasificacion = clasificarPorEdadYGrosor_mujer_izquierda(edad, grosor_izquierda);
                document.getElementById('clasificacion_izquierda').value = clasificacion;
            }
            break;
    
        default:
            break;
    }
}

function clasificarPorEdadYGrosor_hombre_derecha(edad, grosor) {
    let resultado = "";
    if (edad < 30) {
        if (grosor >= 0.39 && grosor <= 0.42) resultado = "P25 (Bajo)";
        else if (grosor >= 0.43 && grosor <= 0.47) resultado = "P50 (Medio)";
        else if (grosor >= 0.48) resultado = "P75 (Alto)";
    } else if (edad >= 31 && edad <= 40) {
        if (grosor >= 0.42 && grosor <= 0.45) resultado = "P25 (Bajo)";
        else if (grosor >= 0.46 && grosor <= 0.49) resultado = "P50 (Medio)";
        else if (grosor >= 0.50) resultado = "P75 (Alto)";
    } else if (edad >= 41 && edad <= 50) {
        if (grosor >= 0.46 && grosor <= 0.49) resultado = "P25 (Bajo)";
        else if (grosor >= 0.50 && grosor <= 0.56) resultado = "P50 (Medio)";
        else if (grosor >= 0.57) resultado = "P75 (Alto)";
    } else if (edad > 50) {
        if (grosor >= 0.46 && grosor <= 0.51) resultado = "P25 (Bajo)";
        else if (grosor >= 0.52 && grosor <= 0.61) resultado = "P50 (Medio)";
        else if (grosor >= 0.62) resultado = "P75 (Alto)";
    }
    return resultado;
}

function clasificarPorEdadYGrosor_hombre_izquierda(edad, grosor) {
    let resultado = "";
    if (edad < 30) {
        if (grosor >= 0.30 && grosor <= 0.43) resultado = "P25 (Bajo)";
        else if (grosor >= 0.44 && grosor <= 0.46) resultado = "P50 (Medio)";
        else if (grosor >= 0.47) resultado = "P75 (Alto)";
    } else if (edad >= 31 && edad <= 40) {
        if (grosor >= 0.44 && grosor <= 0.46) resultado = "P25 (Bajo)";
        else if (grosor >= 0.47 && grosor <= 0.50) resultado = "P50 (Medio)";
        else if (grosor >= 0.51) resultado = "P75 (Alto)";
    } else if (edad >= 41 && edad <= 50) {
        if (grosor >= 0.46 && grosor <= 0.50) resultado = "P25 (Bajo)";
        else if (grosor >= 0.51 && grosor <= 0.56) resultado = "P50 (Medio)";
        else if (grosor >= 0.57) resultado = "P75 (Alto)";
    } else if (edad > 50) {
        if (grosor >= 0.52 && grosor <= 0.58) resultado = "P25 (Bajo)";
        else if (grosor >= 0.59 && grosor <= 0.63) resultado = "P50 (Medio)";
        else if (grosor >= 0.64) resultado = "P75 (Alto)";
    }
    return resultado;
}

function clasificarPorEdadYGrosor_mujer_derecha(edad, grosor) {
    let resultado = "";
    if (edad < 30) {
        if (grosor == 0.39) resultado = "P25 (Bajo)";
        else if (grosor >= 0.40 && grosor <= 0.43) resultado = "P50 (Medio)";
        else if (grosor >= 0.44) resultado = "P75 (Alto)";
    } else if (edad >= 31 && edad <= 40) {
        if (grosor >= 0.42 && grosor <= 0.44) resultado = "P25 (Bajo)";
        else if (grosor >= 0.45 && grosor <= 0.48) resultado = "P50 (Medio)";
        else if (grosor >= 0.49) resultado = "P75 (Alto)";
    } else if (edad >= 41 && edad <= 50) {
        if (grosor >= 0.44 && grosor <= 0.47) resultado = "P25 (Bajo)";
        else if (grosor >= 0.48 && grosor <= 0.52) resultado = "P50 (Medio)";
        else if (grosor >= 0.53) resultado = "P75 (Alto)";
    } else if (edad > 50) {
        if (grosor >= 0.50 && grosor <= 0.53) resultado = "P25 (Bajo)";
        else if (grosor >= 0.54 && grosor <= 0.58) resultado = "P50 (Medio)";
        else if (grosor >= 0.59) resultado = "P75 (Alto)";
    }
    return resultado;
}

function clasificarPorEdadYGrosor_mujer_izquierda(edad, grosor) {
    let resultado = "";
    if (edad < 30) {
        if (grosor >= 0.42 && grosor <= 0.43) resultado = "P25 (Bajo)";
        else if (grosor >= 0.44 && grosor <= 0.48) resultado = "P50 (Medio)";
        else if (grosor >= 0.49) resultado = "P75 (Alto)";
    } else if (edad >= 31 && edad <= 40) {
        if (grosor >= 0.44 && grosor <= 0.46) resultado = "P25 (Bajo)";
        else if (grosor >= 0.47 && grosor <= 0.56) resultado = "P50 (Medio)";
        else if (grosor >= 0.57) resultado = "P75 (Alto)";
    } else if (edad >= 41 && edad <= 50) {
        if (grosor >= 0.50 && grosor <= 0.54) resultado = "P25 (Bajo)";
        else if (grosor >= 0.55 && grosor <= 0.60) resultado = "P50 (Medio)";
        else if (grosor >= 0.61) resultado = "P75 (Alto)";
    } else if (edad > 50) {
        if (grosor >= 0.53 && grosor <= 0.60) resultado = "P25 (Bajo)";
        else if (grosor >= 0.61 && grosor <= 0.69) resultado = "P50 (Medio)";
        else if (grosor >= 0.70) resultado = "P75 (Alto)";
    }
    return resultado;
}

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
