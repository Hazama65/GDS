$(document).ready(function () {
    $('#endoscopia_form').on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);



        // $.ajax({
        //     type: 'POST',
        //     url: './php/insert.php',
        //     data: formData,
        //     processData: false,
        //     contentType: false, // Asegura que el contenido no se procese como una cadena
        //     success: function (response) {
        //         console.log(response);
        //     }
        // });

        $.ajax({
            type: 'POST',
            url: './php/insert.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response === 'success') {
                    Swal.fire("¡Concluido!", "Los datos se guardaron correctamente.", "success")
                        .then(function () {
                            $("#exampleModal").modal("hide");
                            $("#endoscopia_form")[0].reset();
                            window.location.href = 'index.php';
                        });
                } else {
                    console.log(response);
                    console.error('Error en la inserción');
                    Swal.fire("Error", "Hubo un error al guardar los datos.", "error");
                }
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
                Swal.fire("Error", "Hubo un error en la solicitud AJAX.", "error");
            }
        });
    });
});
