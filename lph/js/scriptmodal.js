
                                // Funcion Heredofamiliares     
function showAntecedentesHeredofamiliares(fieldName) {
    var field = document.getElementById(fieldName + 'Field');
    var checkbox = document.getElementById('AH_' + fieldName);

    if (checkbox.checked) {
        field.style.display = "block"; // Mostrar el campo
    } else {
        field.style.display = "none"; // Ocultar el campo
    }
}
                                // Funcion de SOCIECONOMICO   
        function mostrarCampos() {
        var derechohabiencia = document.getElementById("derechohabiencia").value;
        var estudioSocioeconomicoField = document.getElementById("estudio_socioeconomico_field");
                                
        if (derechohabiencia === "Si") {
            estudioSocioeconomicoField.style.display = "block";
        } else {
            estudioSocioeconomicoField.style.display = "none";
            }
        }
                                
        function mostrarNivel() {
        var estudioSocioeconomico = document.getElementById("estudio_socioeconomico").value;
        var nivelField = document.getElementById("nivel_field");
                                
        if (estudioSocioeconomico === "Si") {
        nivelField.style.display = "block";
        } else {
        nivelField.style.display = "none";
        }
     }

//cambiar el CURP a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function() {
this.value = this.value.toUpperCase();
});

const nombreInput = document.getElementById('nombre');

nombreInput.addEventListener('blur', function() {
this.value = this.value.toUpperCase();
});
function curp2date() {
// Obtener el valor del CURP ingresado
var curp = document.getElementById("curp").value;

// Extraer los primeros 6 dígitos del CURP que representan la fecha de nacimiento
var fechaNacimiento = curp.substr(4, 6);

// Obtener los dígitos que representan el año en la fecha de nacimiento
var yearDigits = fechaNacimiento.substr(0, 2);

// Calcular el año completo de nacimiento tomando en cuenta el siglo
var year = parseInt(yearDigits);
if (yearDigits >= 0 && yearDigits <= 21) {
year = 2000 + year;
} else {
year = 1900 + year;
}

// Obtener el mes y el día de la fecha de nacimiento
var month = fechaNacimiento.substr(2, 2);
var day = fechaNacimiento.substr(4, 2);

// Formatear la fecha de nacimiento completa
var fechaCompleta = year + "-" + month + "-" + day;

// Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
document.getElementById("fecha").value = fechaCompleta;

// Calcular la edad de manera precisa
var fechaActual = new Date();
var fechaNac = new Date(year, month - 1, day); // Meses en Date son 0-indexados
var edad = fechaActual.getFullYear() - fechaNac.getFullYear();

// Ajustar la edad si la fecha de nacimiento aún no ha ocurrido este año
if (
fechaActual.getMonth() < fechaNac.getMonth() ||
(fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
) {
edad--;
}
document.getElementById("edad").value = edad;

// Determinar el sexo y mostrarlo en el campo correspondiente
var sexo = curp.charAt(10);
if (sexo === "H") {
document.getElementById("sexo").value = "Hombre";
} else if (sexo === "M") {
document.getElementById("sexo").value = "Mujer";
}
}
function calculaIMC() {
const tallaInput = document.getElementById('talla');
const pesoInput = document.getElementById('peso');
const imcInput = document.getElementById('imc');
const descripcionInput = document.getElementById('imcdescripcion');

const talla = parseFloat(tallaInput.value.replace(',', '.'));
const peso = parseFloat(pesoInput.value);

if (talla && peso) {
const imc = peso / (talla * talla);
const descripcion = obtenerDescripcionIMC(imc);

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

  // REFERENCIA
  document.addEventListener("DOMContentLoaded", function() {
    toggleReferenciaField();

    document.getElementById("referencia").addEventListener("change", function() {
        toggleReferenciaField();
    });
});

function toggleReferenciaField() {
    var referenciaValue = document.getElementById("referencia").value;
    var referenciaField = document.getElementById("referenciaField");

    // Oculta el campo de referencia si la opción seleccionada es "No" o "Sin Registro"
    if (referenciaValue === "No" || referenciaValue === "Sin Registro") {
        referenciaField.style.display = "none";
    } else {
        referenciaField.style.display = "block";
    }
}

  // ANTECEDENTES HEREDOFAMILIARES FISURAS  
document.addEventListener("DOMContentLoaded", function() {
    var fisuraSelect = document.getElementById("fisura");
    var camposOcultosDiv = document.getElementById("camposOcultos");

    var siOptions = document.querySelectorAll("#camposOcultos select option");

    fisuraSelect.addEventListener("change", function() {
        if (fisuraSelect.value === "Si") {
            camposOcultosDiv.style.display = "block";
        } else {
            camposOcultosDiv.style.display = "none";
            // Al seleccionar No, Sin registro o Desconoce, deseleccionamos las opciones de Si
            for (var i = 0; i < siOptions.length; i++) {
                siOptions[i].selected = false;
            }
        }
    });
});

                    // ANTECEDENTES MEDICAMENTOS


  document.addEventListener("DOMContentLoaded", function () {
    const alergicosSelect = document.getElementById("alergicos");
    const medicamentosContainer = document.getElementById("medicamentos");

    alergicosSelect.addEventListener("change", function () {
        if (alergicosSelect.value === "Si") {
            medicamentosContainer.style.display = "block";
        } else {
            medicamentosContainer.style.display = "none";
        }
    });
});


                        //ETAPAS A, B, C, D 


document.addEventListener("DOMContentLoaded", function () {
    const etapaAtencionSelect = document.getElementById("etapaatencion");

    etapaAtencionSelect.addEventListener("change", function () {
        const selectedOption = etapaAtencionSelect.value;

        // Ocultar todos los campos relacionados con Etapas
        const etapaCampos = document.querySelectorAll("[id^='idms']");
        etapaCampos.forEach(function (campo) {
            campo.style.display = "none";
        });

        if (selectedOption === "Etapa A de 0 a 24 meses") {
            document.getElementById("idmsvaloracionesmedicasa").style.display = "block";
            document.getElementById("idmstratamientomedicoa").style.display = "block";
            document.getElementById("idmstipotratamientoqxa").style.display = "block";
            document.getElementById("idestatusa").style.display = "block";
        } else if (selectedOption === "Etapa B de 3 a 8 años") {
            document.getElementById("idmsvaloracionesmedicasb").style.display = "block";
            document.getElementById("idmstratamientomedicob").style.display = "block";
            document.getElementById("idmstipotratamientoqxb").style.display = "block";
            document.getElementById("idestatusb").style.display = "block";
        } else if (selectedOption === "Etapa C de 9 a 15 años") {
            document.getElementById("idmsvaloracionesmedicasc").style.display = "block";
            document.getElementById("idmstratamientomedicoc").style.display = "block";
            document.getElementById("idmstipotratamientoqxc").style.display = "block";
            document.getElementById("idestatusc").style.display = "block";
        } else if (selectedOption === "Etapa D de 16 a 22 años") {
            document.getElementById("idmsvaloracionesmedicasd").style.display = "block";
            document.getElementById("idmstratamientomedicod").style.display = "block";
            document.getElementById("idmstipotratamientoqxd").style.display = "block";
            document.getElementById("idestatusd").style.display = "block";
        }
    });
});



                    // Etapa A: Estatus abre Fecha de Cirugia 

    document.addEventListener("DOMContentLoaded", function () {
        const EstatusSelect = document.getElementById("EstatusQxa");
        const FechacirugiaContainer = document.getElementById("idfechacirugiaa");

        EstatusSelect.addEventListener("change", function () {
        if (EstatusSelect.value === "Realizado" || EstatusSelect.value === "En Curso") {
            FechacirugiaContainer.style.display = "block";
        } else {
            FechacirugiaContainer.style.display = "none";
        }
        });
    });

                        // Etapa B: Estatus abre Fecha de Cirugia 

    document.addEventListener("DOMContentLoaded", function () {
    const EstatusSelect = document.getElementById("EstatusQxb");
    const FechacirugiaContainer = document.getElementById("id_datecirugiab");

    EstatusSelect.addEventListener("change", function () {
        if (EstatusSelect.value === "Realizado" || EstatusSelect.value === "En Curso") {
        FechacirugiaContainer.style.display = "block";
    } else {
        FechacirugiaContainer.style.display = "none";
        }
        });
    });


                        // Etapa C: Estatus abre Fecha de Cirugia 

                        document.addEventListener("DOMContentLoaded", function () {
                            const EstatusSelect = document.getElementById("EstatusQxc");
                            const FechacirugiaContainer = document.getElementById("id_fechacirugiac");
                        
                            EstatusSelect.addEventListener("change", function () {
                            if (EstatusSelect.value === "Realizado" || EstatusSelect.value === "En Curso") {
                                FechacirugiaContainer.style.display = "block";
                            } else {
                                FechacirugiaContainer.style.display = "none";
                            }
                        });
                    });

                        
                        // Etapa C: Estatus abre Fecha de Cirugia 

                        document.addEventListener("DOMContentLoaded", function () {
                            const EstatusSelect = document.getElementById("EstatusQxc");
                            const FechacirugiaContainer = document.getElementById("id_fechacirugiac");
                        
                            EstatusSelect.addEventListener("change", function () {
                            if (EstatusSelect.value === "Realizado" || EstatusSelect.value === "En Curso") {
                                FechacirugiaContainer.style.display = "block";
                            } else {
                                FechacirugiaContainer.style.display = "none";
                            }
                            });
                        });

                        // Etapa D: Estatus abre Fecha de Cirugia 

                        document.addEventListener("DOMContentLoaded", function () {
                            const EstatusSelect = document.getElementById("EstatusQxd");
                            const FechacirugiaContainer = document.getElementById("id_fechacirugiad");
                        
                            EstatusSelect.addEventListener("change", function () {
                            if (EstatusSelect.value === "Realizado" || EstatusSelect.value === "En Curso") {
                                FechacirugiaContainer.style.display = "block";
                            } else {
                                FechacirugiaContainer.style.display = "none";
                            }
                            });
                        });

  // FISURAS
                        document.addEventListener("DOMContentLoaded", function () {
                            const FisuraSelect = document.getElementById("fisura_or");
                            const FisuraOrganoElement = document.getElementById("fisura_organo");
                            
                            FisuraSelect.addEventListener("change", function () {
                              if (FisuraSelect.value === "Si") {
                                FisuraOrganoElement.style.display = "block";
                              } else {
                                FisuraOrganoElement.style.display = "none";
                              }
                            });
                          });