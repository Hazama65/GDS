const cuestion_1 = () => {
    const radioButtons = document.getElementsByName('cuestion_1');
    const cuestion_1_a = document.getElementById('cuestion_1_a');
    cuestion_1_a.style.display = 'none';

    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener('change', function () {
            if (this.checked) {
                if (this.value === "Si") {
                    cuestion_1_a.style.display = 'block';
                } else if (this.value === "No") {
                    cuestion_1_a.style.display = 'none';
                }
            }
        });
    });
};

const handleFormInteractions = () => {
    // Obtener el checkbox 'Nose'
    const noseCheckbox = document.getElementById('opcion-e');
    // Obtener todos los checkboxes excepto los radio buttons
    const otherCheckboxes = document.querySelectorAll('.form-check-input[type="checkbox"]:not(#opcion-e)');

    // Función para deshabilitar los otros checkboxes si 'Nose' está marcado
    const toggleCheckboxes = () => {
        otherCheckboxes.forEach(function (checkbox) {
            checkbox.disabled = noseCheckbox.checked;
            if (noseCheckbox.checked) {
                checkbox.checked = false; // Desmarcar los otros checkboxes
            }
        });
    }

    // Agregar un evento de cambio al checkbox 'Nose'
    noseCheckbox.addEventListener('change', toggleCheckboxes);

    // Función para mostrar u ocultar el input 'Cuál?' según el estado del checkbox 'Otro'
    const otroCheckbox = document.getElementById('opcion-f');
    const otroInput = document.getElementById('otro-cual');

    const toggleInput = () => {
        otroInput.style.display = otroCheckbox.checked ? 'block' : 'none';
        // Si el checkbox 'Otro' está marcado, enfocar el input
        if (otroCheckbox.checked) {
            otroInput.focus();
        }
    }

    // Agregar un evento de cambio al checkbox 'Otro'
    otroCheckbox.addEventListener('change', toggleInput);

    // Llamar a las funciones cuando el documento esté listo
    document.addEventListener('DOMContentLoaded', function() {
        toggleCheckboxes();
        toggleInput();
    });
};

const cuestion_2 = () => {
    const radioButtons = document.getElementsByName('cuestion_2');
    const cuestion_2_a = document.getElementById('cuestion_2_a');
    const cuestion_2_b = document.getElementById('cuestion_2_b');

    cuestion_2_a.style.display = 'none';
    cuestion_2_b.style.display = 'none';


    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener('change', function () {
            if (this.checked) {
                if (this.value === "Si") {
                    cuestion_2_a.style.display = 'block';
                    cuestion_2_b.style.display = 'none';

                } else if (this.value === "No") {
                    cuestion_2_b.style.display = 'block';
                    cuestion_2_a.style.display = 'none';
                }
            }
        });
    });
};

const handleOtroCheckbox = () => {
    const otroCheckbox = document.getElementById('opcion-p-3');
    const otroInput = document.getElementById('razones_otro_cual');

    const toggleInput = () => {
        otroInput.style.display = otroCheckbox.checked ? 'block' : 'none';
        // Si el checkbox 'Otro' está marcado, enfocar el input
        if (otroCheckbox.checked) {
            otroInput.focus();
        }
    }

    // Agregar un evento de cambio al checkbox 'Otro'
    otroCheckbox.addEventListener('change', toggleInput);

    // Llamar a la función para asegurarse de que el input esté en el estado correcto al cargar la página
    toggleInput();
};

const cuestion_6 = () => {
    const radioButtons = document.getElementsByName('cuestion_6');
    const cuestion_6_a = document.getElementById('cuestion_6_a');
    const cuestion_6_b = document.getElementById('cuestion_6_b');
    const cuestion_6_c = document.getElementById('cuestion_6_c');


    cuestion_6_a.style.display = 'none';
    cuestion_6_b.style.display = 'none';
    cuestion_6_c.style.display = 'none';



    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener('change', function () {
            if (this.checked) {
                if (this.value === "Si") {
                    cuestion_6_a.style.display = 'block';
                    cuestion_6_b.style.display = 'block';
                    cuestion_6_c.style.display = 'block';


                } else if (this.value === "No") {
                    cuestion_6_a.style.display = 'none';
                    cuestion_6_b.style.display = 'none';
                    cuestion_6_c.style.display = 'none';
                }
            }
        });
    });
};

const handleOtroRadio = () => {
    const otroRadio = document.getElementById('opcion-e-4');
    const otroInput = document.getElementById('informante_otro_cual');
    const otherRadios = document.querySelectorAll('input[name="informante"]:not(#opcion-e-4)');

    const toggleInput = () => {
        otroInput.style.display = otroRadio.checked ? 'block' : 'none';
        // Si el radio button 'Otro' está seleccionado, enfocar el input
        if (otroRadio.checked) {
            otroInput.focus();
        }
    }

    const hideInput = () => {
        otroInput.style.display = 'none';
    }

    // Agregar un evento de cambio al radio button 'Otro'
    otroRadio.addEventListener('change', toggleInput);

    // Ocultar el campo de texto si se selecciona otro radio button
    otherRadios.forEach(radio => {
        radio.addEventListener('change', hideInput);
    });

    // Llamar a la función para asegurarse de que el input esté en el estado correcto al cargar la página
    toggleInput();
};


cuestion_1();
handleFormInteractions();
cuestion_2();
handleOtroCheckbox();
cuestion_6();
handleOtroRadio();
