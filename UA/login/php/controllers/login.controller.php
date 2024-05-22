<?php 

require_once('../models/database.model.php');
include('../dbconfig_users.php');

$user = $_POST['username'];
$password = $_POST['password'];

$connectionDb = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);

$query = "SELECT nombre_usuario, usuario, rol FROM usuarios WHERE usuario='$user' AND password='$password'";

$data = $connectionDb->getRows($query);

if ($connectionDb->numberRows == 0) {
    echo 0;
} else {
    session_start();
    // Asumimos que $data es un array de resultados y queremos el primer resultado
    $nombre_usuario = $data[0]['nombre_usuario']; 
    $_SESSION['valid_user'] = $nombre_usuario; // Almacena nombre_usuario en la sesión

    echo json_encode($data);
}

?>
