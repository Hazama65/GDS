
    $(document).ready(function() {
        $('#historyModal').on('show.bs.modal', function() {
            
            $.ajax({
                url: 'php/controllers/list_files.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    const fileList = $('#fileList');
                    fileList.empty();

                    if (data.error) {
                        fileList.append(`<li class="list-group-item text-danger">${data.error}</li>`);
                    } else if (data.message) {
                        fileList.append(`<li class="list-group-item">${data.message}</li>`);
                    } else if (data.length === 0) {
                        fileList.append('<li class="list-group-item">No hay archivos disponibles.</li>');
                    } else {
                        $.each(data, function(index, file) {
                            const listItem = $('<li>', {
                                class: 'list-group-item d-flex justify-content-between align-items-center'
                            });

                            const link = $('<a>', {
                                href: `uploads/${file}`,
                                text: file,
                                download: file
                            });

                            const downloadButton = $('<a>', {
                                href: `uploads/${file}`,
                                class: 'btn btn-primary btn-sm',
                                text: 'Descargar',
                                download: file
                            });

                            listItem.append(link).append(downloadButton);
                            fileList.append(listItem);
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar los archivos:', error);
                    alert('Hubo un problema al intentar cargar los archivos.');
                }
            });
        });
    });

