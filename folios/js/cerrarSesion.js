document.addEventListener('DOMContentLoaded', function () {
    const cerrarSesionButton = document.getElementById('cerrar-sesion-button');
    
    cerrarSesionButton.addEventListener('click', function () {
        // Redirige al usuario a la página de cierre de sesión
        window.location.href = 'php/controllers/destroysession.controller.php';
    });
});