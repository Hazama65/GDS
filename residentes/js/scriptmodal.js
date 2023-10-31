                                    // Script del PADECIMIENTO LUMBAR 

                                    // AL SELECCIONAR SI 
        document.addEventListener('DOMContentLoaded', function () {
            var selectPuncionLumbar = document.getElementById('puncion_lumbar');
            var divProcedimientos = document.getElementById('procedimientos');

            selectPuncionLumbar.addEventListener('change', function () {
                if (selectPuncionLumbar.value === 'si') {
                    divProcedimientos.style.display = 'block';
                } else {
                    divProcedimientos.style.display = 'none';
                }
            });
        });
                            // Selección Procedimiento Lumbar 

        // Obtener referencias a los elementos del formulario y los campos adicionales
        const procedimientosSelect = document.getElementById('procedimientos123');
        const lumbar1Fields = document.getElementById('pl_puncionlumbar1');
        const lumbar2Fields = document.getElementById('pl_lumbar2');
        const lumbar3Fields = document.getElementById('pl_lumbar3');

        // Agregar un evento de cambio al menú desplegable
        procedimientosSelect.addEventListener('change', function() {
            // Ocultar todos los campos adicionales
            lumbar1Fields.style.display = 'none';
            lumbar2Fields.style.display = 'none';
            lumbar3Fields.style.display = 'none';

            // Obtener el valor seleccionado en el menú desplegable
            const selectedOption = procedimientosSelect.value;

            // Mostrar los campos adicionales correspondientes según la selección
            if (selectedOption ==  1) {
                lumbar1Fields.style.display = 'block';
            } else if (selectedOption ==  2) {
                lumbar1Fields.style.display = 'block';
                lumbar2Fields.style.display = 'block';
            } else if (selectedOption ==  3) {
                lumbar1Fields.style.display = 'block';
                lumbar2Fields.style.display = 'block';
                lumbar3Fields.style.display = 'block';
            }
            
        });

        //Al SELECCIONAR Si a complicaciones LUMBAR 1 

        document.addEventListener("DOMContentLoaded", function() {
            var complicacionSelect = document.getElementById("complicacion_1");
            var tipoComplicacionDiv = document.getElementById("tipo_puncionlumbar1");

            complicacionSelect.addEventListener("change", function() {
                if (complicacionSelect.value === "si") {
                    tipoComplicacionDiv.style.display = "block"; // Mostrar el campo Tipo de Complicaciones
                } else {
                    tipoComplicacionDiv.style.display = "none"; // Ocultar el campo Tipo de Complicaciones
                }
            });

            //Al SELECCIONAR OTROS se despliega el campo Otros de Lumbar 1 
        });

        // Función para mostrar u ocultar el campo de entrada de texto
            function mostrarCampoOtros() {
            var seleccion = document.getElementById("tipocomplicacion_1").value;
            var campoOtros = document.getElementById("otros_1");

            if (seleccion === "otros") {
                campoOtros.style.display = "block";
            } else {
                campoOtros.style.display = "none";
            }
        }
                    
                //Al SELECCIONAR Si a complicaciones  lumbar 2


        document.addEventListener("DOMContentLoaded", function() {
            let complicacionSelect = document.getElementById("complicacion_2");
            var tipoComplicacionDiv = document.getElementById("tipo_puncionlumbar_2");

            complicacionSelect.addEventListener("change", function() {
                if (complicacionSelect.value === "si") {
                    tipoComplicacionDiv.style.display = "block"; // Mostrar el campo Tipo de Complicaciones

                } else {
                    tipoComplicacionDiv.style.display = "none"; // Ocultar el campo Tipo de Complicaciones
                
                }
            });
            //Al SELECCIONAR OTROS se despliega el campo Otros de Lumbar 2 
        });
        // Función para mostrar u ocultar el campo de entrada de texto
            function mostrarCampoOtros2() {
            let seleccion = document.getElementById("tipocomplicacion_2").value;
            let campoOtros = document.getElementById("otros_2");

            if (seleccion === "otros") {
                campoOtros.style.display = "block";
            } else {
                campoOtros.style.display = "none";
            }
        }


    
         //Al SELECCIONAR Si a complicaciones despliega el campo de tipo de complicaciones lumbar 3


        document.addEventListener("DOMContentLoaded", function() {
            let complicacionSelect = document.getElementById("complicacion_3");
            var tipoComplicacionDiv = document.getElementById("tipo_puncionlumbar_3");
        
            complicacionSelect.addEventListener("change", function() {
                if (complicacionSelect.value === "si") {
                    tipoComplicacionDiv.style.display = "block"; // Mostrar el campo Tipo de Complicaciones
        
                } else {
                    tipoComplicacionDiv.style.display = "none"; // Ocultar el campo Tipo de Complicaciones
                
                }
            });
               //Al SELECCIONAR OTROS se despliega el campo Otros de Lumbar 3
        });
          // Función para mostrar u ocultar el campo de entrada de texto
            function mostrarCampoOtros3() {
            let seleccion = document.getElementById("tipocomplicacion_3").value;
            let campoOtros = document.getElementById("otros_3");
        
            if (seleccion === "otros") {
                campoOtros.style.display = "block";
            } else {
                campoOtros.style.display = "none";
            }
        }
        
                  // PROCEDIMIENTO INTUBACION 

        document.addEventListener('DOMContentLoaded', function () {
            let intubacionSelect = document.getElementById("intubacion");
            let proIntubacionDiv = document.getElementById("pro_intubacion");

            intubacionSelect.addEventListener('change', function () {
                if (intubacionSelect.value === "Si") {
                    proIntubacionDiv.style.display = "block";
                } else {
                    proIntubacionDiv.style.display = "none";
                }
            });
    });

    
// SELECCION EL NUMERO DE PROCEDIMIENTOS DE INTUBACIÓN 


document.addEventListener("DOMContentLoaded", function() {
    // Ocultar todos los campos adicionales de intubación
    var plIntubacion1 = document.getElementById("pl_intubacion1");
    var plIntubacion2 = document.getElementById("pl_intubacion2");
    var plIntubacion3 = document.getElementById("pl_intubacion3");
    
    if (plIntubacion1) {
        plIntubacion1.style.display = 'none';
    }
    
    if (plIntubacion2) {
        plIntubacion2.style.display = 'none';
    }
    
    if (plIntubacion3) {
        plIntubacion3.style.display = 'none';
    }

    // Agregar un evento de cambio al menú de intubación (#intubacion123)
    var intubacionSelect = document.getElementById("intubacion123");
    
    if (intubacionSelect) {
        intubacionSelect.addEventListener("change", function() {
            // Ocultar todos los campos adicionales de intubación
            if (plIntubacion1) {
                plIntubacion1.style.display = 'none';
            }

            if (plIntubacion2) {
                plIntubacion2.style.display = 'none';
            }

            if (plIntubacion3) {
                plIntubacion3.style.display = 'none';
            }

            // Obtener el valor seleccionado en el menú de intubación
            const selectedOption = intubacionSelect.value;

            // Mostrar los campos adicionales de intubación correspondientes según la selección
            if (selectedOption == 1) {
                if (plIntubacion1) {
                    plIntubacion1.style.display = 'block';
                }
            } else if (selectedOption == 2) {
                if (plIntubacion1 && plIntubacion2) {
                    plIntubacion1.style.display = 'block';
                    plIntubacion2.style.display = 'block';
                }
            } else if (selectedOption == 3) {
                if (plIntubacion1 && plIntubacion2 && plIntubacion3) {
                    plIntubacion1.style.display = 'block';
                    plIntubacion2.style.display = 'block';
                    plIntubacion3.style.display = 'block';
                }
            }
        });
    }
});
                                        // INTUBACION 1
    
// Espera a que el documento HTML se haya cargado completamente
document.addEventListener("DOMContentLoaded", function() {
    const complicacionSelect = document.getElementById("complicacion_intubacion_1");
    const tipocomplicacionDiv = document.getElementById("tipocomplicacion_intubacion11");

    if (complicacionSelect && tipocomplicacionDiv) {
        tipocomplicacionDiv.style.display = 'none';

        complicacionSelect.addEventListener("change", function() {
            tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
        });
    }
});

//Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
            function mostrarCampoOtrosintu1() {
                var seleccion = document.getElementById("tipocomplicacion_intubacion1").value;
                var campoOtros = document.getElementById("intubacion_otros");

                if (seleccion === "Otros") {
                    campoOtros.style.display = "block";
    
                } else {
                    campoOtros.style.display = "none";
                }
            }

                                    // INTUBACION 2


        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_intubacion_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_intubacion22");
                                    
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
                                    
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });

        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 

        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tipocomplicacion_intubacion2");
            const campoOtros = document.getElementById("intubacion_otros2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });
                                    // INTUBACION 3


document.addEventListener("DOMContentLoaded", function() {
    const complicacionSelect = document.getElementById("complicacion_intubacion_3");
    const tipocomplicacionDiv = document.getElementById("tipocomplicacion_intubacion33");

    if (complicacionSelect && tipocomplicacionDiv) {
        tipocomplicacionDiv.style.display = 'none';

        complicacionSelect.addEventListener("change", function() {
            tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
        });
    }
});

//Seleccion  EN TIPO DE COMPLICACIÓN OTROS 

document.addEventListener("DOMContentLoaded", function () {
    const complicacionSelect = document.getElementById("tipocomplicacion_intubacion3");
    const campoOtros = document.getElementById("intubacion_otros3");

    if (complicacionSelect && campoOtros) {
        campoOtros.style.display = "none";

        complicacionSelect.addEventListener("change", function () {
            if (this.value === "Otros") {
                campoOtros.style.display = "block";
            } else {
                campoOtros.style.display = "none";
            }
        });
    }
});

                        // PROCEDIMIENTO CVC

    document.addEventListener("DOMContentLoaded", function() {
        var cvcSelect = document.getElementById("cvc");
        var numCvcDiv = document.getElementById("num_cvc");
                        
                            // Agregar un evento de cambio al campo "CVC"
        if (cvcSelect && numCvcDiv) {
            cvcSelect.addEventListener("change", function() {
                                    // Obtener el valor seleccionado en el campo "CVC"
                var selectedOption = cvcSelect.value;
                        
                                    // Mostrar u ocultar el campo "Procedimiento CVC" según la selección
                if (selectedOption === "Si") {
                    numCvcDiv.style.display = "block";
                } else {
                    numCvcDiv.style.display = "none";
                }
            });
        }
    });


                                // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS CVC

    document.addEventListener("DOMContentLoaded", function() {
                            // Ocultar todos los campos adicionales de intubación
        var plcvc1 = document.getElementById("cvc1");
        var plcvc2 = document.getElementById("cvc2");
        var plcvc3 = document.getElementById("cvc3");
                        
        if (plcvc1) {
            plcvc1.style.display = 'none';
        }
                        
        if (plcvc2) {
            plcvc2.style.display = 'none';
        }
                        
        if (plcvc3) {
            plcvc3.style.display = 'none';
        }
                        
                            // Agregar un evento de cambio al menú de intubación (#cvc123)
        var intubacionSelect = document.getElementById("cvc123");
                        
        if (intubacionSelect) {
            intubacionSelect.addEventListener("change", function() {
                                    // Ocultar todos los campos adicionales de intubación
                if (plcvc1) {
                                        plcvc1.style.display = 'none';
                }
                        
                if (plcvc2) {
                                        plcvc2.style.display = 'none';
                }
                        
                if (plcvc3) {
                    plcvc3.style.display = 'none';
                }
                        
                                    // Obtener el valor seleccionado en el menú de intubación
                const selectedOption = intubacionSelect.value;
                        
                                    // Mostrar los campos adicionales de intubación correspondientes según la selección
                if (selectedOption == 1 ) {
                    if (plcvc1) {
                        plcvc1.style.display = 'block';
                    }
                } else if (selectedOption == 2 ) {
                    if (plcvc1 && plcvc2) {
                        plcvc1.style.display = 'block';
                        plcvc2.style.display = 'block';
                    }
                } else if (selectedOption == 3 ) {
                    if (plcvc1 && plcvc2 && plcvc3) {
                        plcvc1.style.display = 'block';
                        plcvc2.style.display = 'block';
                        plcvc3.style.display = 'block';
                    }
                }                 
            });                                                                      
        }
    });


                        //  PROCEDIMIENTOS CVC 1
            document.addEventListener("DOMContentLoaded", function() {
                const complicacionSelect = document.getElementById("complicacion_cvc1");
                const tipocomplicacionDiv = document.getElementById("tipocomplicacion_cvc11");

                if (complicacionSelect && tipocomplicacionDiv) {
                    tipocomplicacionDiv.style.display = 'none';

                    complicacionSelect.addEventListener("change", function() {
                        tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                    });
                }
            });
           //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
            document.addEventListener("DOMContentLoaded", function () {
                const complicacionSelect = document.getElementById("tipocomplicacion_cvc1");
                const campoOtros = document.getElementById("otros_cvc1");
            
                if (complicacionSelect && campoOtros) {
                    campoOtros.style.display = "none";
            
                    complicacionSelect.addEventListener("change", function () {
                        if (this.value === "Otros") {
                            campoOtros.style.display = "block";
                        } else {
                            campoOtros.style.display = "none";
                        }
                    });
                }
            });
            
              //  PROCEDIMIENTOS CVC 2    


              document.addEventListener("DOMContentLoaded", function() {
                const complicacionSelect = document.getElementById("complicacion_cvc2");
                const tipocomplicacionDiv = document.getElementById("tipocomplicacion_cvc22");

                if (complicacionSelect && tipocomplicacionDiv) {
                    tipocomplicacionDiv.style.display = 'none';

                    complicacionSelect.addEventListener("change", function() {
                        tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                    });
                }
            });
            //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
            
            document.addEventListener("DOMContentLoaded", function () {
                const complicacionSelect = document.getElementById("tipocomplicacion_cvc2");
                const campoOtros = document.getElementById("otros_cvc2");
            
                if (complicacionSelect && campoOtros) {
                    campoOtros.style.display = "none";
            
                    complicacionSelect.addEventListener("change", function () {
                        if (this.value === "Otros") {
                            campoOtros.style.display = "block";
                        } else {
                            campoOtros.style.display = "none";
                        }
                    });
                }
            });
            
              //  PROCEDIMIENTOS CVC 3


              document.addEventListener("DOMContentLoaded", function() {
                const complicacionSelect = document.getElementById("complicacion_cvc3");
                const tipocomplicacionDiv = document.getElementById("tipocomplicacion_cvc33");

                if (complicacionSelect && tipocomplicacionDiv) {
                    tipocomplicacionDiv.style.display = 'none';

                    complicacionSelect.addEventListener("change", function() {
                        tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                    });
                }
            });

            document.addEventListener("DOMContentLoaded", function () {
                const complicacionSelect = document.getElementById("tipocomplicacion_cvc3");
                const campoOtros = document.getElementById("otros_cvc3");
            
                if (complicacionSelect && campoOtros) {
                    campoOtros.style.display = "none";
            
                    complicacionSelect.addEventListener("change", function () {
                        if (this.value === "Otros") {
                            campoOtros.style.display = "block";
                        } else {
                            campoOtros.style.display = "none";
                        }
                    });
                }
            });


               //  PARACENTESIS

            document.addEventListener("DOMContentLoaded", function() {
                // Obtener elementos del DOM
                var paracentesisSelect = document.getElementById("paracentesis");
                var numParacentesisDiv = document.getElementById("num_parecentesis1");
    
                // Ocultar inicialmente el campo "Procedimiento Paracentesis"
                numParacentesisDiv.style.display = "none";
    
                // Agregar un evento de cambio al campo "PARACENTESIS"
                paracentesisSelect.addEventListener("change", function() {
                    var selectedOption = paracentesisSelect.value;
    
                    // Mostrar u ocultar el campo "Procedimiento Paracentesis" según la selección
                    if (selectedOption === "Si") {
                        numParacentesisDiv.style.display = "block";
                    } else {
                        numParacentesisDiv.style.display = "none";
                    }
                });
            });

 // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS PARACENTESIS 
    document.addEventListener("DOMContentLoaded", function() {
    // Obtener elementos del DOM
    var numParacentesisSelect = document.getElementById("num_parecentesis");
    var paracentesis1 = document.getElementById("paracentesis1");
    var paracentesis2 = document.getElementById("paracentesis2");
    var paracentesis3 = document.getElementById("paracentesis3");

    // Ocultar todos los campos adicionales de paracentesis al cargar la página
    if (paracentesis1) {
        paracentesis1.style.display = 'none';
    }
    if (paracentesis2) {
        paracentesis2.style.display = 'none';
    }
    if (paracentesis3) {
        paracentesis3.style.display = 'none';
    }

    // Agregar un evento de cambio al menú de Paracentesis
    if (numParacentesisSelect) {
        numParacentesisSelect.addEventListener("change", function() {
            var selectedOption = numParacentesisSelect.value;

            // Ocultar todos los campos adicionales de paracentesis
            if (paracentesis1) {
                paracentesis1.style.display = 'none';
            }
            if (paracentesis2) {
                paracentesis2.style.display = 'none';
            }
            if (paracentesis3) {
                paracentesis3.style.display = 'none';
            }

            // Mostrar los campos adicionales de paracentesis correspondientes según la selección
            if (selectedOption == 1) {
                if (paracentesis1) {
                    paracentesis1.style.display = 'block';
                }
            } else if (selectedOption == 2) {
                if (paracentesis2) {
                    paracentesis1.style.display = 'block';
                    paracentesis2.style.display = 'block';
                }
            } else if (selectedOption == 3) {
                if (paracentesis3) {
                    paracentesis1.style.display = 'block';
                    paracentesis2.style.display = 'block';
                    paracentesis3.style.display = 'block';
                }
            }
        });
    }
});

                            //PARACENTESIS 1  
        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

document.addEventListener("DOMContentLoaded", function() {
    const complicacionSelect = document.getElementById("complicacion_paracentesis_1");
    const tipocomplicacionDiv = document.getElementById("tipocomplicacion_paracentesis1");

    if (complicacionSelect && tipocomplicacionDiv) {
        tipocomplicacionDiv.style.display = 'none';

        complicacionSelect.addEventListener("change", function() {
            tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
        });
    }
});

//Seleccion  EN TIPO DE COMPLICACIÓN OTROS 

document.addEventListener("DOMContentLoaded", function () {
    const complicacionSelect = document.getElementById("tipocomplicacion_paracentesis_1");
    const campoOtros = document.getElementById("otros_paracentesis_1");

    if (complicacionSelect && campoOtros) {
        campoOtros.style.display = "none";

        complicacionSelect.addEventListener("change", function () {
            if (this.value === "Otros") {
                campoOtros.style.display = "block";
            } else {
                campoOtros.style.display = "none";
            }
        });
    }
});


                            //PARACENTESIS 2 
        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_paracentesis_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_paracentesis2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });


        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tipocomplicacion_paracentesis_2");
            const campoOtros = document.getElementById("otros_paracentesis_2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });
                            //PARACENTESIS 3 
        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_paracentesis_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_paracentesis3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });

        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tipocomplicacion_paracentesis_3");
            const campoOtros = document.getElementById("otros_paracentesis_3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });



               //  BIOPSIA PIEL

               document.addEventListener("DOMContentLoaded", function() {
                var biopsiaPielSelect = document.getElementById("biposia_piel");
                var numBiopsiaDiv = document.getElementById("num_biopsia");
    
                // Ocultar inicialmente el campo "Procedimiento Biopsia Piel"
                numBiopsiaDiv.style.display = "none";
    
                // Agregar un evento de cambio al campo "BIOPSIA PIEL"
                biopsiaPielSelect.addEventListener("change", function() {
                    numBiopsiaDiv.style.display = (biopsiaPielSelect.value === "Si") ? "block" : "none";
                });
            });

         // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS PARACENTESIS 
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener elementos del DOM
        var numBiopsiapielSelect = document.getElementById("num_biopsiapiel");
        var pl_bp1 = document.getElementById("pl_bp1");
        var pl_bp2 = document.getElementById("pl_bp2");
        var pl_bp3 = document.getElementById("pl_bp3");
    
        // Ocultar todos los campos adicionales de paracentesis al cargar la página
        if (pl_bp1) {
            pl_bp1.style.display = 'none';
        }
        if (pl_bp2) {
            pl_bp2.style.display = 'none';
        }
        if (pl_bp3) {
            pl_bp3.style.display = 'none';
        }
    
        // Agregar un evento de cambio al menú de Paracentesis
        if (numBiopsiapielSelect) {
            numBiopsiapielSelect.addEventListener("change", function() {
                var selectedOption = numBiopsiapielSelect.value;
    
                // Ocultar todos los campos adicionales de paracentesis
                if (pl_bp1) {
                    pl_bp1.style.display = 'none';
                }
                if (pl_bp2) {
                    pl_bp2.style.display = 'none';
                }
                if (pl_bp3) {
                    pl_bp3.style.display = 'none';
                }
    
                // Mostrar los campos adicionales de paracentesis correspondientes según la selección
                if (selectedOption == 1) {
                    if (pl_bp1) {
                        pl_bp1.style.display = 'block';
                    }
                } else if (selectedOption == 2) {
                    if (pl_bp2) {
                        pl_bp1.style.display = 'block';
                        pl_bp2.style.display = 'block';
                    }
                } else if (selectedOption == 3) {
                    if (pl_bp3) {
                        pl_bp1.style.display = 'block';
                        pl_bp2.style.display = 'block';
                        pl_bp3.style.display = 'block';
                    }
                }
            });
        }
    });

                            //BIOPSIA PIEL 1  

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

document.addEventListener("DOMContentLoaded", function() {
    const complicacionSelect = document.getElementById("complicacion_biopsiapiel_1");
    const tipocomplicacionDiv = document.getElementById("tipocomplicacion_biopsiapiel1");

    if (complicacionSelect && tipocomplicacionDiv) {
        tipocomplicacionDiv.style.display = 'none';

        complicacionSelect.addEventListener("change", function() {
            tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
        });
    }
});

//Seleccion  EN TIPO DE COMPLICACIÓN OTROS 

document.addEventListener("DOMContentLoaded", function () {
    const complicacionSelect = document.getElementById("tp_biopsiapiel_1");
    const campoOtros = document.getElementById("otro_biopsiapiel");

    if (complicacionSelect && campoOtros) {
        campoOtros.style.display = "none";

        complicacionSelect.addEventListener("change", function () {
            if (this.value === "Otros") {
                campoOtros.style.display = "block";
            } else {
                campoOtros.style.display = "none";
            }
        });
    }
});

                          //BIOPSIA PIEL 2 

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_biopsiapiel_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_biopsiapiel2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_biopsiapiel_2");
            const campoOtros = document.getElementById("otro_biopsiapiel2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });
                          //BIOPSIA PIEL 3

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_biopsiapiel_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_biopsiapiel3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_biopsiapiel_3");
            const campoOtros = document.getElementById("otro_biopsiapiel3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });

                       //  BIOPSIA TEJIDO CELULAR SUBC

        document.addEventListener("DOMContentLoaded", function() {
                        // Obtener elementos del DOM
        var biopsiaTjSelect = document.getElementById("biposia_tejido");
        var numBiopsiaDiv = document.getElementById("num_biopsiatejido");
                        
                        // Ocultar inicialmente el campo "Procedimiento Biopsia Tejido Celular SUBC"
        numBiopsiaDiv.style.display = "none";
                        
                        // Agregar un evento de cambio al campo "BIOPSIA TEJIDO CELULAR SUBC"
        biopsiaTjSelect.addEventListener("change", function() {
            numBiopsiaDiv.style.display = (biopsiaTjSelect.value === "Si") ? "block" : "none";
        });
    });
        
                // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS BIOPSIA TEJIDO CELULAR SUBC
            document.addEventListener("DOMContentLoaded", function() {
                // Obtener elementos del DOM
                var numBiopsiaSUBCSelect = document.getElementById("num_biopsiaSUBC");
                var btc1 = document.getElementById("btc1");
                var btc2 = document.getElementById("btc2");
                var btc3 = document.getElementById("btc3");
            
                // Ocultar todos los campos adicionales de paracentesis al cargar la página
                if (btc1) {
                    btc1.style.display = 'none';
                }
                if (btc2) {
                    btc2.style.display = 'none';
                }
                if (btc3) {
                    btc3.style.display = 'none';
                }
            
                // Agregar un evento de cambio al menú de Paracentesis
                if (numBiopsiaSUBCSelect) {
                    numBiopsiaSUBCSelect.addEventListener("change", function() {
                        var selectedOption = numBiopsiaSUBCSelect.value;
            
                        // Ocultar todos los campos adicionales de paracentesis
                        if (btc1) {
                            btc1.style.display = 'none';
                        }
                        if (btc2) {
                            btc2.style.display = 'none';
                        }
                        if (btc3) {
                            btc3.style.display = 'none';
                        }
            
                        // Mostrar los campos adicionales de paracentesis correspondientes según la selección
                        if (selectedOption == 1) {
                            if (btc1) {
                                btc1.style.display = 'block';
                            }
                        } else if (selectedOption == 2) {
                            if (btc2) {
                                btc1.style.display = 'block';
                                btc2.style.display = 'block';
                            }
                        } else if (selectedOption == 3) {
                            if (btc3) {
                                btc1.style.display = 'block';
                                btc2.style.display = 'block';
                                btc3.style.display = 'block';
                            }
                        }
                    });
                }
            });
                                      //Biposia Tejido Celular SUBC 1 

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_SUBC_1");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_SUBC_1");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_SUBC_1");
            const campoOtros = document.getElementById("otro_SUBC_1");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });


                    // Biposia Tejido Celular SUBC 2

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_SUBC_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_SUBC_2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_SUBC_2");
            const campoOtros = document.getElementById("otro_SUBC_2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                        campoOtros.style.display = "block";
                    } else {
                        campoOtros.style.display = "none";
                    }
                });
            }
        });

                      // Biposia Tejido Celular SUBC 3

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_SUBC_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_SUBC_3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_SUBC_3");
            const campoOtros = document.getElementById("otro_SUBC_3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });


                            // TIROIDES

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos del DOM
            var biopsiaTiroidesSelect = document.getElementById("biposia_tiroides");
            var numBiopsiaDiv = document.getElementById("num_biopsiat");
            
            // Ocultar inicialmente el campo "Biposia Tiroides"
            numBiopsiaDiv.style.display = "none";
            
            // Agregar un evento de cambio al campo "BIOPSIA TIROIDES"
            biopsiaTiroidesSelect.addEventListener("change", function() {
                numBiopsiaDiv.style.display = (biopsiaTiroidesSelect.value === "Si") ? "block" : "none";
            });
        });

        // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS BIOPSIA TIROIDES

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos del DOM
            var numBiopsiaTiroidesSelect = document.getElementById("num_biopsiatiroides");
            var bt1 = document.getElementById("bt1");
            var bt2 = document.getElementById("bt2");
            var bt3 = document.getElementById("bt3");
        
            // Ocultar todos los campos adicionales de paracentesis al cargar la página
            if (bt1) {
                bt1.style.display = 'none';
            }
            if (bt2) {
                bt2.style.display = 'none';
            }
            if (bt3) {
                bt3.style.display = 'none';
            }
        
            // Agregar un evento de cambio al menú de Paracentesis
            if (numBiopsiaTiroidesSelect) {
                numBiopsiaTiroidesSelect.addEventListener("change", function() {
                    var selectedOption = numBiopsiaTiroidesSelect.value;
        
                    // Ocultar todos los campos adicionales de paracentesis
                    if (bt1) {
                        bt1.style.display = 'none';
                    }
                    if (bt2) {
                        bt2.style.display = 'none';
                    }
                    if (bt3) {
                        bt3.style.display = 'none';
                    }
        
                    // Mostrar los campos adicionales de paracentesis correspondientes según la selección
                    if (selectedOption == 1) {
                        if (bt1) {
                            bt1.style.display = 'block';
                        }
                    } else if (selectedOption == 2) {
                        if (bt2) {
                            bt1.style.display = 'block';
                            bt2.style.display = 'block';
                        }
                    } else if (selectedOption == 3) {
                        if (bt3) {
                            bt1.style.display = 'block';
                            bt2.style.display = 'block';
                            bt3.style.display = 'block';
                        }
                    }
                });
            }
        });

        // Biposia TIROIDES 1

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_BT_1");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_BT_1");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_BT1");
            const campoOtros = document.getElementById("otro_BT_1");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

          // Biposia TIROIDES 2

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_BT_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_BT_2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_BT2");
            const campoOtros = document.getElementById("otro_BT_2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

            // Biposia TIROIDES 3

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_BT_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_BT_3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_BT3");
            const campoOtros = document.getElementById("otro_BT_3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                            // TORACOCENTESIS 

    document.addEventListener("DOMContentLoaded", function() {
            var toracocentesisSelect = document.getElementById("toracocentesis");
            var numToracocentesisDiv = document.getElementById("num_tora");
            
            // Ocultar inicialmente el campo "Toracocentesis"
            numToracocentesisDiv.style.display = "none";
            
            // Agregar un evento de cambio al campo "TORACOCENTESIS"
            toracocentesisSelect.addEventListener("change", function() {
                numToracocentesisDiv.style.display = (toracocentesisSelect.value === "Si") ? "block" : "none";
            });
        });

                // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS Toracocentesis  

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos del DOM
            var numToracocentesisSelect = document.getElementById("num_toracocentesis");
            var toracocentesis1 = document.getElementById("toracocentesis1");
            var toracocentesis2 = document.getElementById("toracocentesis2");
            var toracocentesis3 = document.getElementById("toracocentesis3");
        
            // Ocultar todos los campos adicionales de paracentesis al cargar la página
            if (toracocentesis1) {
                toracocentesis1.style.display = 'none';
            }
            if (toracocentesis2) {
                toracocentesis2.style.display = 'none';
            }
            if (toracocentesis3) {
                toracocentesis3.style.display = 'none';
            }
        
            // Agregar un evento de cambio al menú de Paracentesis
            if (numToracocentesisSelect) {
                numToracocentesisSelect.addEventListener("change", function() {
                    var selectedOption = numToracocentesisSelect.value;
        
                    // Ocultar todos los campos adicionales de paracentesis
                    if (toracocentesis1) {
                        toracocentesis1.style.display = 'none';
                    }
                    if (toracocentesis2) {
                        toracocentesis2.style.display = 'none';
                    }
                    if (toracocentesis3) {
                        toracocentesis3.style.display = 'none';
                    }
        
                    // Mostrar los campos adicionales de paracentesis correspondientes según la selección
                    if (selectedOption == 1 ) {
                        if (toracocentesis1) {
                            toracocentesis1.style.display = 'block';
                        }
                    } else if (selectedOption == 2 ) {
                        if (toracocentesis2) {
                            toracocentesis1.style.display = 'block';
                            toracocentesis2.style.display = 'block';
                        }
                    } else if (selectedOption == 3 ) {
                        if (toracocentesis3) {
                            toracocentesis1.style.display = 'block';
                            toracocentesis2.style.display = 'block';
                            toracocentesis3.style.display = 'block';
                        }
                    }
                });
            }
        });

                    // Toracocentesis  1 

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_tora_1");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_tora_1");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_tora1");
            const campoOtros = document.getElementById("otro_tora_1");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                            // Toracocentesis  2

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_tora_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_tora_2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_tora2");
            const campoOtros = document.getElementById("otro_tora_2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                                    // Toracocentesis  3

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_tora_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_tora_3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_tora3");
            const campoOtros = document.getElementById("otro_tora_3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                            //PROCEDIMIENTO ARTROCENTESIS

    document.addEventListener("DOMContentLoaded", function() {
    // Obtener elementos del DOM
    var artrocentesisSelect = document.getElementById("artrocentesis");
    var numArtrocentesisDiv = document.getElementById("num_artrocentesis1");
    
    // Ocultar inicialmente el campo "num_artrocentesis"
    numArtrocentesisDiv.style.display = "none";
    
    // Agregar un evento de cambio al campo "ARTROCENTESIS"
    artrocentesisSelect.addEventListener("change", function() {
        numArtrocentesisDiv.style.display = (artrocentesisSelect.value === "Si") ? "block" : "none";
    });
});
                // SELECCIONAR CANTIDAD DE PROCEDIMIENTOS Toracocentesis  

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos del DOM
            var numArtrocentesisSelect = document.getElementById("num_artrocentesis");
            var atro1 = document.getElementById("atro1");
            var atro2 = document.getElementById("atro2");
            var atro3 = document.getElementById("atro3");
        
            // Ocultar todos los campos adicionales de paracentesis al cargar la página
                if (atro1) {
                atro1.style.display = 'none';
            }
                if (atro2) {
                atro2.style.display = 'none';
            }
                if (atro3) {
                atro3.style.display = 'none';
            }
        
            // Agregar un evento de cambio al menú de Paracentesis
            if (numArtrocentesisSelect) {
                numArtrocentesisSelect.addEventListener("change", function() {
                    var selectedOption = numArtrocentesisSelect.value;
        
                    // Ocultar todos los campos adicionales de paracentesis
                    
                    if (atro1) {
                        atro1.style.display = 'none';
                    }
                    if (atro2) {
                        atro2.style.display = 'none';
                    }
                    if (atro3) {
                        atro3.style.display = 'none';
                    }
        
                    // Mostrar los campos adicionales de paracentesis correspondientes según la selección
                    
                    if (selectedOption == 1 ) {
                        if (atro1) {
                            atro1.style.display = 'block';
                        }
                    } else if (selectedOption == 2 ) {
                        if (atro2) {
                            atro1.style.display = 'block';
                            atro2.style.display = 'block';
                        }
                    } else if (selectedOption == 3 ) {
                        if (atro3) {
                            atro1.style.display = 'block';
                            atro2.style.display = 'block';
                            atro3.style.display = 'block';
                        }
                    }
                });
            }
        });
                                            // Artrocentesis  1

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_Artro_1");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_Artro_1");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
                                     //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_Artro_1");
            const campoOtros = document.getElementById("otro_Artro_1");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                                        // Artrocentesis 2

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_Artro_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_Artro_2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_Artro_2");
            const campoOtros = document.getElementById("otro_Artro_2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

             // Artrocentesis 3

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_Artro_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_Artro_3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tp_Artro_3");
            const campoOtros = document.getElementById("otro_Artro_3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                            //PROCEDIMIENTO ASPIRACIÓN DE MO

       document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos del DOM
            var aspiracionMoSelect = document.getElementById("aspiracion_mo");
            var numMoDiv = document.getElementById("num_mo");
            
            // Ocultar inicialmente el campo "num_mo"
            numMoDiv.style.display = "none";
            
            // Agregar un evento de cambio al campo "ASPIRACIÓN DE MO"
            aspiracionMoSelect.addEventListener("change", function() {
                numMoDiv.style.display = (aspiracionMoSelect.value === "Si") ? "block" : "none";
            });
        });                          


        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos del DOM
            var numaspiracióndeMOSelect = document.getElementById("num_aspiracion");
            var mo1 = document.getElementById("mo1");
            var mo2 = document.getElementById("mo2");
            var mo3 = document.getElementById("mo3");
        
            // Ocultar todos los campos adicionales de paracentesis al cargar la página
            if (mo1) {
                mo1.style.display = 'none';
            }
            if (mo2) {
                mo2.style.display = 'none';
            }
            if (mo3) {
                mo3.style.display = 'none';
            }
        
            // Agregar un evento de cambio al menú de Paracentesis
            if (numaspiracióndeMOSelect) {
                numaspiracióndeMOSelect.addEventListener("change", function() {
                    var selectedOption = numaspiracióndeMOSelect.value;
        
                    // Ocultar todos los campos adicionales de paracentesis
        
                    if (mo1) {
                        mo1.style.display = 'none';
                    }
                    if (mo2) {
                        mo2.style.display = 'none';
                    }
                    if (mo3) {
                        mo3.style.display = 'none';
                    }
        
                    // Mostrar los campos adicionales de paracentesis correspondientes según la selección
        
                    if (selectedOption == 1) {
                        if (mo1) {
                            mo1.style.display = 'block';
                        }
                    } else if (selectedOption == 2) {
                        if (mo2) {
                            mo1.style.display = 'block';
                            mo2.style.display = 'block';
                        }
                    } else if (selectedOption == 3) {
                        if (mo3) {
                            mo1.style.display = 'block';
                            mo2.style.display = 'block';
                            mo3.style.display = 'block';
                        }
                    }
                });
            }
        });

        // APIRACION MO 1

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_MO_1");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_MO_1");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tc_MO_1");
            const campoOtros = document.getElementById("otro_MO_1");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                // APIRACION MO 2

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_MO_2");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_MO_2");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tc_MO_2");
            const campoOtros = document.getElementById("otro_MO_2");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });

                        // APIRACION MO 2

        //Seleccion del Si EN TIPO DE COMPLICACIÓN 

        document.addEventListener("DOMContentLoaded", function() {
            const complicacionSelect = document.getElementById("complicacion_MO_3");
            const tipocomplicacionDiv = document.getElementById("tipocomplicacion_MO_3");
        
            if (complicacionSelect && tipocomplicacionDiv) {
                tipocomplicacionDiv.style.display = 'none';
        
                complicacionSelect.addEventListener("change", function() {
                    tipocomplicacionDiv.style.display = (this.value === 'si') ? 'block' : 'none';
                });
            }
        });
        
        //Seleccion  EN TIPO DE COMPLICACIÓN OTROS 
        
        document.addEventListener("DOMContentLoaded", function () {
            const complicacionSelect = document.getElementById("tc_MO_3");
            const campoOtros = document.getElementById("otro_MO_3");
        
            if (complicacionSelect && campoOtros) {
                campoOtros.style.display = "none";
        
                complicacionSelect.addEventListener("change", function () {
                    if (this.value === "Otros") {
                    campoOtros.style.display = "block";
                }   else {
                    campoOtros.style.display = "none";
                    }
                });
            }
        });