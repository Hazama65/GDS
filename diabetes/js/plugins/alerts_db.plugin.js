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