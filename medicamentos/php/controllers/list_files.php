
<?php
$directory = '../../uploads/';

if (!is_dir($directory)) {
    echo json_encode(['error' => 'Directorio no encontrado']);
    exit;
}

$files = array_diff(scandir($directory), array('.', '..'));

if (empty($files)) {
    echo json_encode(['message' => 'No hay archivos disponibles']);
} else {
    echo json_encode(array_values($files));
}
?>
