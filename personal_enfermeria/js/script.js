document.getElementById("limpiarFormularioBtn").addEventListener("click", function() {
    document.getElementById("patientForm").reset();
  });


  // script.js

// Función para capitalizar la primera letra de cada palabra en un texto
function capitalizeFirstLetter(text) {
    return text.toLowerCase().replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
}

// Manejar el evento input en el campo "Apellido Paterno"
document.getElementById("apellidoPaterno").addEventListener("input", function() {
    this.value = capitalizeFirstLetter(this.value);
});

// Manejar el evento input en el campo "Apellido Materno"
document.getElementById("apellidoMaterno").addEventListener("input", function() {
    this.value = capitalizeFirstLetter(this.value);
});

// Manejar el evento input en el campo "Nombre(s)"
document.getElementById("nombre").addEventListener("input", function() {
    this.value = capitalizeFirstLetter(this.value);
});




// Manejar el evento change en el campo de entrada de la foto
document.getElementById("foto").addEventListener("change", function() {
    var reader = new FileReader();
    reader.onload = function(e) {
        var img = new Image();
        img.src = e.target.result;
        img.onload = function() {
            var canvas = document.createElement("canvas");
            var ctx = canvas.getContext("2d");
            var MAX_WIDTH = 300;
            var MAX_HEIGHT = 300;
            var width = img.width;
            var height = img.height;
            if (width > height) {
                if (width > MAX_WIDTH) {
                    height *= MAX_WIDTH / width;
                    width = MAX_WIDTH;
                }
            } else {
                if (height > MAX_HEIGHT) {
                    width *= MAX_HEIGHT / height;
                    height = MAX_HEIGHT;
                }
            }
            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(img, 0, 0, width, height);
            document.getElementById("imagenPrevisualizacion").src = canvas.toDataURL("image/jpeg");
        }
    }
    reader.readAsDataURL(this.files[0]);
});
