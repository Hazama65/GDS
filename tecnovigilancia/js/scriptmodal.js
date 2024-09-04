// FUNCION VALIDACION Cargo
document.getElementById('Cargo').addEventListener('change', function () {
    let CargoDIV = document.getElementById('personal_Otro');

    if (this.value === 'Otro') {
        CargoDIV.style.display = 'block'; // Cambié 'flex' por 'block'
    } else {
        // Restablecer valores de los campos dentro del contenedor antes de ocultarlo
        let inputs = CargoDIV.querySelectorAll('input');
        let selects = CargoDIV.querySelectorAll('select');

        inputs.forEach(function (input) {
            input.value = '';
        });

        selects.forEach(function (select) {
            select.selectedIndex = 0; // Restablece el select a su primera opción
        });

        // Ahora oculta el contenedor
        CargoDIV.style.display = 'none';
    }
});


// FUNCION VALIDACION Cargo
document.getElementById('Daño_generado').addEventListener('change', function () {
    let dañogenerado_OtroDIV = document.getElementById('dañogenerado_Otro');

    if (this.value === 'Otro') {
        dañogenerado_OtroDIV.style.display = 'block'; // Cambié 'flex' por 'block'
    } else {
        // Restablecer valores de los campos dentro del contenedor antes de ocultarlo
        let inputs = dañogenerado_OtroDIV.querySelectorAll('input');
        let selects = dañogenerado_OtroDIV.querySelectorAll('select');

        inputs.forEach(function (input) {
            input.value = '';
        });

        selects.forEach(function (select) {
            select.selectedIndex = 0; // Restablece el select a su primera opción
        });

        // Ahora oculta el contenedor
        dañogenerado_OtroDIV.style.display = 'none';
    }
});
