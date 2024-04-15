<style>

/* Estilos para el header */
header {
    background-color: rgb(35,91,78  );
    color: #fff;
    padding: 10px;
    text-align: center;
    font-weight: 500; 
    font-size:x-small;
    
}

/* Estilos para el contenedor del header */
.header-container {
    display: flex;
    justify-content: space-between; /* Alinear elementos al inicio y final del contenedor */
    align-items: center; /* Alinear verticalmente al centro */
    padding: 10px 20px; /* Espaciado interno del header */
}

/* Estilos para el botón de inicio de sesión */
.login-btn {
    background-color:rgb(35,91,78); /* Color de fondo del botón */
    color: #fff; /* Color de texto blanco */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-btn:hover {
    background-color:  rgb(16,49,43); /* Cambiar color al pasar el mouse por encima */
}

/* Estilos para el icono dentro del botón */
.login-btn i {
    margin-right: 5px; /* Espaciado a la derecha del icono */
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Encuesta de Satisfacción Áreas Ambulatorias</h1>
            <div class="header-actions">
            <button class="login-btn"><i class="fas fa-sign-in-alt"></i> </button>
        </div>
    </div>
    </header>
</body>
</html>