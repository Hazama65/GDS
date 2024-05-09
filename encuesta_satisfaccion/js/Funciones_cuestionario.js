import { setAlerts } from "./plugins/alerts.plugin.js";
import { httpClients } from "./plugins/http-client.plugin.js";
import { hideLoadingOverlay, showLoadingOverlay } from "./plugins/loader.plugin.js";


let informacionCuestionario = [];

let respuesta_1;
let respuesta_2;
let respuesta_3;
let respuesta_4;
let respuesta_5;
let respuesta_6;
let respuesta_7;
let respuesta_8;
let respuesta_9;
let respuesta_10;
let respuesta_11;

let pregunta_inicio =document.getElementById('pregunta_inicio');
let pregunta_1_s = document.getElementById('pregunta1');
let pregunta_2_s = document.getElementById('pregunta2');
let pregunta_3_s = document.getElementById('pregunta3');
let pregunta_4_s = document.getElementById('pregunta4');
let pregunta_5_s = document.getElementById('pregunta5');
let pregunta_6_s = document.getElementById('pregunta6');
let pregunta_7_s = document.getElementById('pregunta7');
let pregunta_8_s = document.getElementById('pregunta8');
let pregunta_9_s = document.getElementById('pregunta9');
let pregunta_10_s = document.getElementById('pregunta10');
let pregunta_11_s = document.getElementById('pregunta11');
let pregunta_12_s = document.getElementById('pregunta12');



let targetas_1 = document.querySelectorAll('.pregunta1 .card');
let targetas_2 = document.querySelectorAll('.pregunta2 .card');
let targetas_3 = document.querySelectorAll('.pregunta3 .card');
let targetas_4 = document.querySelectorAll('.pregunta4 .card');
let targetas_5 = document.querySelectorAll('.pregunta5 .card');
let targetas_6 = document.querySelectorAll('.pregunta6 .card');
let targetas_7 = document.querySelectorAll('.pregunta7 .card');
let targetas_8 = document.querySelectorAll('.pregunta8 .card');
let targetas_9 = document.querySelectorAll('.pregunta9 .card');
let targetas_10 = document.querySelectorAll('.pregunta10 .card');
let targetas_11 = document.querySelectorAll('.pregunta11 .card');
let targetas_12 = document.querySelectorAll('.pregunta12 .card');


let botonInicio = document.getElementById('inicio');
let botonAnterior2 = document.getElementById('botonAnterior2');
let botonAnterior3 = document.getElementById('botonAnterior3');
let botonAnterior4 = document.getElementById('botonAnterior4');
let botonAnterior5 = document.getElementById('botonAnterior5');
let botonAnterior6 = document.getElementById('botonAnterior6');
let botonAnterior7 = document.getElementById('botonAnterior7');
let botonAnterior8 = document.getElementById('botonAnterior8');
let botonAnterior9 = document.getElementById('botonAnterior9');
let botonAnterior10 = document.getElementById('botonAnterior10');
let botonAnterior11 = document.getElementById('botonAnterior11');
let botonAnterior12 = document.getElementById('botonAnterior12');


botonInicio.addEventListener("click", function () {
    pregunta_1_s.style.display = "block";
    pregunta_inicio.style.display = "none";

});

botonAnterior2.addEventListener("click", function () {
    pregunta_1_s.style.display = "block";
    pregunta_2_s.style.display = "none";

});
botonAnterior3.addEventListener("click", function () {
    pregunta_2_s.style.display = "block";
    pregunta_3_s.style.display = "none";

});
botonAnterior4.addEventListener("click", function () {
    pregunta_3_s.style.display = "block";
    pregunta_4_s.style.display = "none";

});
botonAnterior5.addEventListener("click", function () {
    pregunta_4_s.style.display = "block";
    pregunta_5_s.style.display = "none";

});
botonAnterior6.addEventListener("click", function () {
    pregunta_5_s.style.display = "block";
    pregunta_6_s.style.display = "none";

});
botonAnterior7.addEventListener("click", function () {
    pregunta_6_s.style.display = "block";
    pregunta_7_s.style.display = "none";

});
botonAnterior8.addEventListener("click", function () {
    pregunta_7_s.style.display = "block";
    pregunta_8_s.style.display = "none";

});
botonAnterior9.addEventListener("click", function () {
    pregunta_8_s.style.display = "block";
    pregunta_9_s.style.display = "none";

});
botonAnterior10.addEventListener("click", function () {
    pregunta_9_s.style.display = "block";
    pregunta_10_s.style.display = "none";

});
botonAnterior11.addEventListener("click", function () {
    pregunta_10_s.style.display = "block";
    pregunta_11_s.style.display = "none";

});
botonAnterior12.addEventListener("click", function () {
    pregunta_11_s.style.display = "block";
    pregunta_12_s.style.display = "none";

});



// Iterar sobre cada tarjeta del bloque 1 para agregar eventos a sus elementos hijos
targetas_1.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_1 = informacion;
        // Desactivar las otras tarjetas del bloque 1
        targetas_1.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; // Cambia la opacidad de las tarjetas no seleccionadas
            } else {
                otraTarjeta.style.opacity = "1"; // Restaura la opacidad de la tarjeta seleccionada
            }
        });

        // Mostrar la información de la tarjeta seleccionada del bloque 1 en la consola
        pregunta_1_s.style.display = 'none';
        pregunta_2_s.style.display = 'block';

    });
});


targetas_2.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_2 = informacion;
        targetas_2.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_2_s.style.display = 'none';
        pregunta_3_s.style.display = 'block';        
    });
});

targetas_3.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_3 = informacion;
        targetas_3.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_3_s.style.display = 'none';
        pregunta_4_s.style.display = 'block';
    });
});

targetas_4.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_4 = informacion;
        targetas_4.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_4_s.style.display = 'none';
        pregunta_5_s.style.display = 'block';
    });
});

targetas_5.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_5 = informacion;
        targetas_5.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_5_s.style.display = 'none';
        pregunta_6_s.style.display = 'block';
    });
});

targetas_6.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_6 = informacion;
        targetas_6.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_6_s.style.display = 'none';
        pregunta_7_s.style.display = 'block';
    });
});

targetas_7.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_7 = informacion;
        targetas_7.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_7_s.style.display = 'none';
        pregunta_8_s.style.display = 'block';
    });
});

targetas_8.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_8 = informacion;
        targetas_8.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_8_s.style.display = 'none';
        pregunta_9_s.style.display = 'block';
    });
});

targetas_9.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_9 = informacion;
        targetas_9.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_9_s.style.display = 'none';
        pregunta_10_s.style.display = 'block';
    });
});

targetas_10.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_10 = informacion;
        targetas_10.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_10_s.style.display = 'none';
        pregunta_11_s.style.display = 'block';
    });
});

targetas_11.forEach(function (tarjeta) {
    var imagen = tarjeta.querySelector("img");
    var informacion = tarjeta.querySelector(".card-body").getAttribute("card-info");

    imagen.addEventListener("click", function () {
        respuesta_11 = informacion;
        targetas_11.forEach(function (otraTarjeta) {
            if (otraTarjeta !== tarjeta) {
                otraTarjeta.style.opacity = "0.5"; 
            } else {
                otraTarjeta.style.opacity = "1"; 
            }
        });

        pregunta_11_s.style.display = 'none';
        pregunta_12_s.style.display = 'block';
    });
});



document.getElementById('mostrarDatos').addEventListener('click', function() {
    // Obtener los valores de los campos
    let comentarios = document.getElementById('comentarios').value;
    let datoPersonal = document.getElementById('dato_personal').value;


    informacionCuestionario.push(
        respuesta_1,
        respuesta_2,
        respuesta_3,
        respuesta_4,
        respuesta_5,
        respuesta_6,
        respuesta_7,
        respuesta_8,
        respuesta_9,
        respuesta_10,
        respuesta_11,
        comentarios,
        datoPersonal);

        console.log(informacionCuestionario);
        
        showLoadingOverlay();


        validation(informacionCuestionario);

});
const url = "php/controllers/insert.controller.php";

const validation = async (alldata) => {
    try {

    
        const response = await httpClients.post(url,  {informacionCuestionario: alldata});
        console.log(response);

        hideLoadingOverlay();
        
        if (response == 0) {return setAlerts.errorAlert('Hubo una Falla en el servidor al Guardar los datos')}


        if (response == 'success') {
            return setAlerts.successAlert(
                'Formulario mandado',
                null,
                null,
                'index.html',
            );
        }
    } catch (error) {
        hideLoadingOverlay();
        console.error(error);
        setAlerts.errorAlert('Hubo un error en la solicitud.');
    }
}