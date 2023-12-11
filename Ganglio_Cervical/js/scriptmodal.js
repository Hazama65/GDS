     
     
     // FUNCÓN PARA DESPLEGAR  SI TUVIERON CONTACTO CON ALGUNA DE ESTAS PATOLOGIAS 
     
     function mostrarOcultarSecciones() {
        var seleccion = document.getElementById("contacto_personas").value;
        if (seleccion === "Si") {
            document.getElementById("ah_TosCronica").style.display = "block";
            document.getElementById("ah_Tuberculosis").style.display = "block";
            document.getElementById("ah_VIH").style.display = "block";
        } else {
            document.getElementById("ah_TosCronica").style.display = "none";
            document.getElementById("ah_Tuberculosis").style.display = "none";
            document.getElementById("ah_VIH").style.display = "none";
        }
    }

    // AL SELECCIONAMOS TOS CRONICA COMO CONTACTO 

document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento select y el div que se debe mostrar/ocultar
    var selectElement = document.getElementById("TosCronicaSelect");
    var divElement = document.getElementById("heredo_familia1");

    // Agrega un evento de cambio al elemento select
    selectElement.addEventListener("change", function () {
        // Comprueba si se seleccionó "Si"
        if (selectElement.value === "Si") {
            // Muestra el div si se selecciona "Si"
            divElement.style.display = "block";
        } else {
            // Oculta el div en caso contrario
            divElement.style.display = "none";
        }
    });
});

    // AL SELECCIONAMOS TUBERCULOSIS COMO CONTACTO 

    document.addEventListener("DOMContentLoaded", function () {
        // Obtiene el elemento select y el div que se debe mostrar/ocultar
        var selectElement = document.getElementById("TuberculosisSelect");
        var divElement = document.getElementById("heredo_familia2");
    
        // Agrega un evento de cambio al elemento select
        selectElement.addEventListener("change", function () {
            // Comprueba si se seleccionó "Si"
            if (selectElement.value === "Si") {
                // Muestra el div si se selecciona "Si"
                divElement.style.display = "block";
            } else {
                // Oculta el div en caso contrario
                divElement.style.display = "none";
            }
        });
    });

        // AL SELECCIONAMOS VIH COMO CONTACTO 

        document.addEventListener("DOMContentLoaded", function () {
            // Obtiene el elemento select y el div que se debe mostrar/ocultar
            var selectElement = document.getElementById("VIHSelect");
            var divElement = document.getElementById("heredo_familia3");
        
            // Agrega un evento de cambio al elemento select
            selectElement.addEventListener("change", function () {
                // Comprueba si se seleccionó "Si"
                if (selectElement.value === "Si") {
                    // Muestra el div si se selecciona "Si"
                    divElement.style.display = "block";
                } else {
                    // Oculta el div en caso contrario
                    divElement.style.display = "none";
                }
            });
        });


                // AL SELECCIONAMOS CONTACTO CON ANIMALES 

        document.addEventListener("DOMContentLoaded", function () {
            // Obtiene el elemento select y el div que se debe mostrar/ocultar
            var selectElement = document.getElementById("contacto_animales");
            var divElement = document.getElementById("Animales_Cual");
                
            // Agrega un evento de cambio al elemento select
            selectElement.addEventListener("change", function () {
                // Comprueba si se seleccionó "Si"
                if (selectElement.value === "Si") {
                    // Muestra el div si se selecciona "Si"
                    divElement.style.display = "block";
                } else {
                    // Oculta el div en caso contrario
                    divElement.style.display = "none";
                }
            });
        });

                // AL SELECCIONAMOS VIAJES RECIENTES

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("viajes");
                    var divElement = document.getElementById("lugar");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });


                // AL SELECCIONAMOS VIAJES RECIENTES

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("alimentos");
                    var divElement = document.getElementById("tipo_alimentarios");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });
                
                // AL SELECCIONAMOS VARICELA MUESTRA EL CAMPO DE EDAD 

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("varicela");
                    var divElement = document.getElementById("edad_varicela");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "NO"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "No"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });

            // AL SELECCIONAMOS NEUMOPATÍA MUESTRA EL CAMPO DE EDAD 

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("Neuropatia_croninca");
                    var divElement = document.getElementById("edad_neumo");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "NO"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "No"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });



                            //ANTECEDENTES PATOLOGICOS 

                            //ANTECEDENTES PATOLOGICOS
                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("vacunacion");
                    var divElement = document.getElementById("Faltante");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "No") {
                            // Muestra el div si se selecciona "No"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });




                    


                
                // AL SELECCIONAMOS SI OTROS GANGLIOS ABRE LA LOCALIZACIÓN

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("otros_ganglios");
                    var divElement = document.getElementById("otro_localizacion");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });

                                // AL SELECCIONAMOS SI SEROLOGÍA

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("lab_serologia");
                    var divElement = document.getElementById("serologia_resultado");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("lab_serologia");
                    var divElement = document.getElementById("pcr_resultado");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Negado") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });


                          // AL SELECCIONAMOS SI DIAGNOSTICO POR PCR
                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("prueb_pcr");
                    var divElement = document.getElementById("resul_pcr");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });


            // AL SELECCIONAMOS SI DIAGNOSTICO POR CULTIVO

                document.addEventListener("DOMContentLoaded", function () {
                    // Obtiene el elemento select y el div que se debe mostrar/ocultar
                    var selectElement = document.getElementById("lab_cultivo");
                    var divElement = document.getElementById("cultivo_resultado");
                        
                    // Agrega un evento de cambio al elemento select
                    selectElement.addEventListener("change", function () {
                        // Comprueba si se seleccionó "Si"
                        if (selectElement.value === "Si") {
                            // Muestra el div si se selecciona "Si"
                            divElement.style.display = "block";
                        } else {
                            // Oculta el div en caso contrario
                            divElement.style.display = "none";
                        }
                    });
                });

            // AL SELECCIONAMOS SI DIAGNOSTICO POR TOMOGRAFIA

            document.addEventListener("DOMContentLoaded", function () {
                // Obtiene el elemento select y el div que se debe mostrar/ocultar
                var selectElement = document.getElementById("lab_tomografia");
                var divElement = document.getElementById("resultado_dxRFC");
                    
                // Agrega un evento de cambio al elemento select
                selectElement.addEventListener("change", function () {
                    // Comprueba si se seleccionó "Si"
                    if (selectElement.value === "Si") {
                        // Muestra el div si se selecciona "Si"
                        divElement.style.display = "block";
                    } else {
                        // Oculta el div en caso contrario
                        divElement.style.display = "none";
                    }
                });
            });

            // AL SELECCIONAMOS SI DIAGNOSTICO POR ULTRASONIDO

            document.addEventListener("DOMContentLoaded", function () {
                // Obtiene el elemento select y el div que se debe mostrar/ocultar
                var selectElement = document.getElementById("lab_Ultrasonido");
                var divElement = document.getElementById("ultrasonido_resultado");
                    
                // Agrega un evento de cambio al elemento select
                selectElement.addEventListener("change", function () {
                    // Comprueba si se seleccionó "Si"
                    if (selectElement.value === "Si") {
                        // Muestra el div si se selecciona "Si"
                        divElement.style.display = "block";
                    } else {
                        // Oculta el div en caso contrario
                        divElement.style.display = "none";
                    }
                });
            });

            // AL SELECCIONAMOS SI DIAGNOSTICO POR BIOPSIA

            document.addEventListener("DOMContentLoaded", function () {
                // Obtiene el elemento select y el div que se debe mostrar/ocultar
                var selectElement = document.getElementById("lab_Biopsia");
                var divElement = document.getElementById("biopsia_resultado");
                    
                // Agrega un evento de cambio al elemento select
                selectElement.addEventListener("change", function () {
                    // Comprueba si se seleccionó "Si"
                    if (selectElement.value === "Si") {
                        // Muestra el div si se selecciona "Si"
                        divElement.style.display = "block";
                    } else {
                        // Oculta el div en caso contrario
                        divElement.style.display = "none";
                    }
                });
            });

        // AL SELECCIONAMOS SI DIAGNOSTICO POR REFERENCIA

            document.addEventListener("DOMContentLoaded", function () {
                // Obtiene el elemento select y el div que se debe mostrar/ocultar
                var selectElement = document.getElementById("referencia");
                var divElement = document.getElementById("id_refe");
                var divElementref = document.getElementById("causa_refe");
                    
                // Agrega un evento de cambio al elemento select
                selectElement.addEventListener("change", function () {
                    // Comprueba si se seleccionó "Si"
                    if (selectElement.value === "Si") {
                        // Muestra el div si se selecciona "Si"
                        divElement.style.display = "block";
                        divElementref.style.display ="block";
                    } else {
                        // Oculta el div en caso contrario
                        divElement.style.display = "none";
                        divElementref.style.display ="none";

                    }
                });
            });


            
            // AL SELECCIONAMOS SI DIAGNOSTICO POR ALTA

            document.addEventListener("DOMContentLoaded", function () {
                // Obtiene el elemento select y el div que se debe mostrar/ocultar
                var selectElement = document.getElementById("id_Alta");
                var divElement = document.getElementById("causa_alta");
                    
                // Agrega un evento de cambio al elemento select
                selectElement.addEventListener("change", function () {
                    // Comprueba si se seleccionó "Si"
                    if (selectElement.value === "Si") {
                        // Muestra el div si se selecciona "Si"
                        divElement.style.display = "block";
                    } else {
                        // Oculta el div en caso contrario
                        divElement.style.display = "none";
                    }
                });
            });



            // CHECKBOX DE TB ABRE TRATAMIENTO 
            var checkbox = document.getElementById('etiologia_TB');
            var tratamientoDiv = document.getElementById('tx');
            var tratamientoFxDiv = document.getElementById('tx_fx');
            
            checkbox.addEventListener('change', function() {
                if (checkbox.checked) {
                    // Checkbox está marcado, mostrar elementos de tratamiento
                    tratamientoDiv.style.display = 'block';
                    tratamientoFxDiv.style.display = 'block';
                } else {
                    // Checkbox no está marcado, ocultar elementos de tratamiento
                    tratamientoDiv.style.display = 'none';
                    tratamientoFxDiv.style.display = 'none';
                }
            });