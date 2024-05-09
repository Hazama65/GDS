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
const referencia = () => {
    const ref = document.getElementById('ref');
    const unidad = document.getElementById('uni_ref');
    unidad.style.display = 'none';

    ref.addEventListener('change', () => {
        if (ref.value == 'Si') {
            unidad.style.display = 'block';
        } else {
            unidad.style.display = 'none';
        }
    });
}
const antecedentes_pat = () => {

    let alcohol = document.getElementById('alcoholismo');
    let tabaco = document.getElementById('tabaquismo');
    let hz_alco = document.getElementById('hz_alcohol');
    let tabaquismo1 = document.getElementById('tabaquismo1');
    let tabaquismo2 = document.getElementById('tabaquismo2');


    hz_alco.style.display = 'none';
    tabaquismo1.style.display = 'none';
    tabaquismo2.style.display = 'none';


    alcohol.addEventListener('change', () => {
        if (alcohol.checked) {
            hz_alco.style.display = "block";
        } else {
            hz_alco.style.display = "none";
        }
    });

    tabaco.addEventListener('change', () => {
        if (tabaco.checked) {
            tabaquismo1.style.display = "block";
            tabaquismo2.style.display = "block";

        } else {
            tabaquismo1.style.display = "none";
            tabaquismo2.style.display = "none";
        }
    })

}
const afeccion_oral = () => {
    let afe_dent = document.getElementById('afec_dent');
    let les_orales = document.getElementById('les_orales');
    let ubicaciones = document.getElementById('ubicacion');

    let zona_afe_dent = document.getElementById('zona_afe_dent');
    let zona_les_orales = document.getElementById('zona_les_orales');
    let zona_ubicaciones = document.getElementById('zona_ubicaciones');

    zona_afe_dent.style.display = 'none';
    zona_les_orales.style.display = 'none';
    zona_ubicaciones.style.display = 'none';

    afe_dent.addEventListener('change', () => {
        if (afe_dent.checked) {
            zona_afe_dent.style.display = "block";
        } else {
            zona_afe_dent.style.display = "none";
        }
    });
    les_orales.addEventListener('change', () => {
        if (les_orales.checked) {
            zona_les_orales.style.display = "block";
        } else {
            zona_les_orales.style.display = "none";
        }
    });
    ubicaciones.addEventListener('change', () => {
        if (ubicaciones.checked) {
            zona_ubicaciones.style.display = "block";
        } else {
            zona_ubicaciones.style.display = "none";
        }
    });










}
const afeccion_dental = () => {
    let fractura = document.getElementById('org_dent_frac');
    let opt_fractura = document.getElementById('fractura_opt');

    opt_fractura.style.display = "none";

    fractura.addEventListener('change', () => {
        if (fractura.checked) {
            opt_fractura.style.display = "block";
        } else {
            opt_fractura.style.display = "none";
        }
    });

}
const ubicaciones = () => {
    let derecha = document.getElementById('ubic_derecha');
    let izquierda = document.getElementById('ubic_Izquierda');

    let zona_derecha = document.getElementById('zona_derecha');
    let zona_izquierda = document.getElementById('zona_izquierda');

    zona_derecha.style.display = 'none';
    zona_izquierda.style.display = 'none';

    derecha.addEventListener('change', () => {
        if (derecha.checked) {
            zona_derecha.style.display = 'block';
        } else {
            zona_derecha.style.display = 'none';
        }
    });

    izquierda.addEventListener('change', () => {
        if (izquierda.checked) {
            zona_izquierda.style.display = 'block';
        } else {
            zona_izquierda.style.display = 'none';
        }
    });
}
const metastasis = () => {
    let metastasis = document.getElementById('metastatis');
    let sitio_meta = document.getElementById('sitio_meta');

    sitio_meta.style.display = 'none';

    metastasis.addEventListener('change', () => {
        if (metastasis.value == 'M1 Evidencia de Metástasis por clínica o radiografia') {
            sitio_meta.style.display = 'block';
        } else {
            sitio_meta.style.display = 'none';
        }
    });

}
const maligno_pdl = () => {
    let tipo_mal = document.getElementById('tipo_histo');
    let maligno = document.getElementById('maligno_histo1');

    let pdl = document.getElementById('inmuno_pdl');
    let resultado_pdl = document.getElementById('inmuno_pdl_val1');

    maligno.style.display = 'none';
    resultado_pdl.style.display = 'none';

    tipo_mal.addEventListener('change', () => {
        if (tipo_mal.value == 'Maligno') {
            maligno.style.display = 'block';
        } else {
            maligno.style.display = 'none';
        }
    });
    pdl.addEventListener('change', () => {
        if (pdl.value == 'Si') {
            resultado_pdl.style.display = 'block';
        } else {
            resultado_pdl.style.display = 'none';
        }
    });
}
const tx = () => {
    let quimio = document.getElementById('tx_quimio');
    let quimio_zona = document.getElementById('quimio_tx');
    let reconstruccion = document.getElementById('tx_recontruccion');
    let radio = document.getElementById('tx_radio');


    let quiru = document.getElementById('tx_quiru');
    let quiru_tipo = document.getElementById('tx_quiru_tipo1');
    let quiru_tipo2 = document.getElementById('tx_quiru_tipo');
    let quiru_selec = document.getElementById('quiru_select');
    let quiru_max = document.getElementById('tx_maxilo_infra1');
    let reconstruccion_tipo = document.getElementById('recontruccion_t');
    let radio_select = document.getElementById('radio_select');

    quimio_zona.style.display = 'none';
    quiru_tipo.style.display = 'none';
    quiru_selec.style.display = 'none';
    quiru_max.style.display = 'none';
    reconstruccion_tipo.style.display = 'none';
    radio_select.style.display = 'none';

    quimio.addEventListener('change', () => {
        if (quimio.value == 'Si') {
            quimio_zona.style.display = 'block';
        } else {
            quimio_zona.style.display = 'none';
        }
    });
    quiru.addEventListener('change', () => {
        if (quiru.value == 'Si') {
            quiru_tipo.style.display = 'block';
        } else {
            quiru_tipo.style.display = 'none';
        }
    });
    quiru_tipo2.addEventListener('change', () => {
        if (quiru_tipo2.value == 'Diseccion Radical Modificada de Cuello') {
            quiru_selec.style.display = 'block';
        } else {
            quiru_selec.style.display = 'none';
        }
    });
    quiru_tipo2.addEventListener('change', () => {
        if (quiru_tipo2.value == 'Maxilectomia de Infraestructura') {
            quiru_max.style.display = 'block';
        } else {
            quiru_max.style.display = 'none';
        }
    });

    reconstruccion.addEventListener('change', () => {
        if (reconstruccion.value == 'Si') {
            reconstruccion_tipo.style.display = 'block';
        } else {
            reconstruccion_tipo.style.display = 'none';
        }
    });

    radio.addEventListener('change', () => {
        if (radio.value == 'Si') {
            radio_select.style.display = 'block';
        } else {
            radio_select.style.display = 'none';
        }
    });

}
const oars = () => {

    let OARS_CO =document.getElementById('OARS_CO');
    let OARS_cocleas =document.getElementById('OARS_cocleas');
    let OARS_cristalinos =document.getElementById('OARS_cristalinos');
    let OARS_esofago =document.getElementById('OARS_esofago');
    let OARS_labios =document.getElementById('OARS_labios');
    let OARS_laringe =document.getElementById('OARS_laringe');
    let OARS_mandibula =document.getElementById('OARS_mandibula');
    let OARS_medula =document.getElementById('OARS_medula');
    let OARS_NO =document.getElementById('OARS_NO');
    let OARS_ojos =document.getElementById('OARS_ojos');
    let OARS_PFP =document.getElementById('OARS_PFP');
    let OARS_parotidas =document.getElementById('OARS_parotidas');
    let OARS_sublinguales =document.getElementById('OARS_sublinguales');
    let OARS_tallo =document.getElementById('OARS_tallo');
    let OARS_tiroides =document.getElementById('OARS_tiroides');

    let CO1 = document.getElementById('CO1');
    let CO2 = document.getElementById('CO2');
    let Cocleas1 = document.getElementById('Cocleas1');
    let Cocleas2 = document.getElementById('Cocleas2');
    let Cristalinos1 = document.getElementById('Cristalinos1');
    let Cristalinos2 = document.getElementById('Cristalinos2');
    let Esofago1 = document.getElementById('Esofago1');
    let Esofago2 = document.getElementById('Esofago2');
    let Labios1 = document.getElementById('Labios1');
    let Labios2 = document.getElementById('Labios2');
    let Laringe1 = document.getElementById('Laringe1');
    let Laringe2 = document.getElementById('Laringe2');
    let Mandibula1 = document.getElementById('Mandibula1');
    let Mandibula2 = document.getElementById('Mandibula2');
    let Medula1 = document.getElementById('Medula1');
    let Medula2 = document.getElementById('Medula2');
    let NO1 = document.getElementById('NO1');
    let NO2 = document.getElementById('NO2');
    let Ojos1 = document.getElementById('Ojos1');
    let Ojos2 = document.getElementById('Ojos2');
    let PFP1 = document.getElementById('PFP1');
    let PFP2 = document.getElementById('PFP2');
    let Parotidas1 = document.getElementById('Parotidas1');
    let Parotidas2 = document.getElementById('Parotidas2');
    let Sublinguales1 = document.getElementById('Sublinguales1');
    let Sublinguales2 = document.getElementById('Sublinguales2');
    let Tallo1 = document.getElementById('Tallo1');
    let Tallo2 = document.getElementById('Tallo2');
    let Tiroides1 = document.getElementById('Tiroides1');
    let Tiroides2 = document.getElementById('Tiroides2');


    CO1.style.display = 'none';
    CO2.style.display = 'none';
    Cocleas1.style.display = 'none';
    Cocleas2.style.display = 'none';
    Cristalinos1.style.display = 'none';
    Cristalinos2.style.display = 'none';
    Esofago1.style.display = 'none';
    Esofago2.style.display = 'none';
    Labios1.style.display = 'none';
    Labios2.style.display = 'none';
    Laringe1.style.display = 'none';
    Laringe2.style.display = 'none';
    Mandibula1.style.display = 'none';
    Mandibula2.style.display = 'none';
    Medula1.style.display = 'none';
    Medula2.style.display = 'none';
    NO1.style.display = 'none';
    NO2.style.display = 'none';
    Ojos1.style.display = 'none';
    Ojos2.style.display = 'none';
    PFP1.style.display = 'none';
    PFP2.style.display = 'none';
    Parotidas1.style.display = 'none';
    Parotidas2.style.display = 'none';
    Sublinguales1.style.display = 'none';
    Sublinguales2.style.display = 'none';
    Tallo1.style.display = 'none';
    Tallo2.style.display = 'none';
    Tiroides1.style.display = 'none';
    Tiroides2.style.display = 'none';


    OARS_CO.addEventListener('change', () => {
        if (OARS_CO.checked) {
            CO1.style.display = 'block';
            CO2.style.display = 'block';
        } else {
            CO1.style.display = 'none';
            CO2.style.display = 'none';
        }
    });
    OARS_cocleas.addEventListener('change', () => {
        if (OARS_cocleas.checked) {
            Cocleas1.style.display = 'block';
            Cocleas2.style.display = 'block';
        } else {
            Cocleas1.style.display = 'none';
            Cocleas2.style.display = 'none';
        }
    });
    OARS_cristalinos.addEventListener('change', () => {
        if (OARS_cristalinos.checked) {
            Cristalinos1.style.display = 'block';
            Cristalinos2.style.display = 'block';
        } else {
            Cristalinos1.style.display = 'none';
            Cristalinos2.style.display = 'none';
        }
    });
    OARS_esofago.addEventListener('change', () => {
        if (OARS_esofago.checked) {
            Esofago1.style.display = 'block';
            Esofago2.style.display = 'block';
        } else {
            Esofago1.style.display = 'none';
            Esofago2.style.display = 'none';
        }
    });
    OARS_labios.addEventListener('change', () => {
        if (OARS_labios.checked) {
            Labios1.style.display = 'block';
            Labios2.style.display = 'block';
        } else {
            Labios1.style.display = 'none';
            Labios2.style.display = 'none';
        }
    });
    OARS_laringe.addEventListener('change', () => {
        if (OARS_laringe.checked) {
            Laringe1.style.display = 'block';
            Laringe2.style.display = 'block';
        } else {
            Laringe1.style.display = 'none';
            Laringe2.style.display = 'none';
        }
    });
    OARS_mandibula.addEventListener('change', () => {
        if (OARS_mandibula.checked) {
            Mandibula1.style.display = 'block';
            Mandibula2.style.display = 'block';
        } else {
            Mandibula1.style.display = 'none';
            Mandibula2.style.display = 'none';
        }
    });
    OARS_medula.addEventListener('change', () => {
        if (OARS_medula.checked) {
            Medula1.style.display = 'block';
            Medula2.style.display = 'block';
        } else {
            Medula1.style.display = 'none';
            Medula2.style.display = 'none';
        }
    });
    OARS_NO.addEventListener('change', () => {
        if (OARS_NO.checked) {
            NO1.style.display = 'block';
            NO2.style.display = 'block';
        } else {
            NO1.style.display = 'none';
            NO2.style.display = 'none';
        }
    });
    OARS_ojos.addEventListener('change', () => {
        if (OARS_ojos.checked) {
            Ojos1.style.display = 'block';
            Ojos2.style.display = 'block';
        } else {
            Ojos1.style.display = 'none';
            Ojos2.style.display = 'none';
        }
    });
    OARS_PFP.addEventListener('change', () => {
        if (OARS_PFP.checked) {
            PFP1.style.display = 'block';
            PFP2.style.display = 'block';
        } else {
            PFP1.style.display = 'none';
            PFP2.style.display = 'none';
        }
    });
    OARS_parotidas.addEventListener('change', () => {
        if (OARS_parotidas.checked) {
            Parotidas1.style.display = 'block';
            Parotidas2.style.display = 'block';
        } else {
            Parotidas1.style.display = 'none';
            Parotidas2.style.display = 'none';
        }
    });
    OARS_sublinguales.addEventListener('change', () => {
        if (OARS_sublinguales.checked) {
            Sublinguales1.style.display = 'block';
            Sublinguales2.style.display = 'block';
        } else {
            Sublinguales1.style.display = 'none';
            Sublinguales2.style.display = 'none';
        }
    });
    OARS_tallo.addEventListener('change', () => {
        if (OARS_tallo.checked) {
            Tallo1.style.display = 'block';
            Tallo2.style.display = 'block';
        } else {
            Tallo1.style.display = 'none';
            Tallo2.style.display = 'none';
        }
    });
    OARS_tiroides.addEventListener('change', () => {
        if (OARS_tiroides.checked) {
            Tiroides1.style.display = 'block';
            Tiroides2.style.display = 'block';
        } else {
            Tiroides1.style.display = 'none';
            Tiroides2.style.display = 'none';
        }
    });

}

referencia();
antecedentes_pat();
afeccion_oral();
afeccion_dental();
ubicaciones();
metastasis();
maligno_pdl();
tx();
oars();




