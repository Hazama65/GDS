export const setAlerts = {

    errorAlert: (text) =>{

        return Swal.fire({
            icon: 'error',
            title: 'Error',
            text,
            confirmButtonText: 'OK'
        });
    },

    warningAlert: (text) =>{
        return Swal.fire({
            icon: 'warning',
            title: 'Error',
            text,
            confirmButtonText: 'OK'
        })
    },
    confirmDelete: () => {
        return Swal.fire({
            title: '¿Estás seguro?',
            text: '¿Quieres borrar este paciente?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, borrarlo',
            cancelButtonText: 'Cancelar'
        });
    },
    
    successAlert: (text, title='Exito',timer = 0, href) =>{
        return Swal.fire({
            icon: 'success',
            title,
            text,
            showConfirmButton: true,
            timer,
            willClose: () =>{
                window.location.href = href;
            }
        });
    }
}