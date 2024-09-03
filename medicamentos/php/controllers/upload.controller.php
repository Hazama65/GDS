<?php
require '../../../vendor/autoload.php';
require (__DIR__ . '/../models/database.model.php');
include (__DIR__ . '/../dbconfig_medicamentos.php');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

date_default_timezone_set('America/Mexico_City');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

$success = false; // Variable para controlar el éxito de la operación
$error_message = "Ocurrió un error desconocido."; // Mensaje de error por defecto

// Verifica si se ha subido un archivo
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    // Carpeta temporal para manejar el archivo subido
    $tempDir = '../../temp/';
    $fileName = basename($_FILES['file']['name']);
    $tempFilePath = $tempDir . $fileName;

    // Mueve el archivo subido a la carpeta temporal
    if (move_uploaded_file($_FILES['file']['tmp_name'], $tempFilePath)) {
        try {
            // Carga el archivo Excel desde la carpeta temporal
            $spreadsheet = IOFactory::load($tempFilePath);
            $worksheet = $spreadsheet->getActiveSheet();

            // Verifica las columnas del archivo Excel
            $valid = true;
            foreach ($worksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false);

                $data = [];
                foreach ($cellIterator as $cell) {
                    $data[] = $cell->getValue();
                }

                if (count($data) <= 6) {
                    var_dump($data);
                    $valid = false;
                    throw new Exception("La fila " . $row->getRowIndex() . " contiene un número incorrecto de columnas: " . count($data));
                }
            }

            if ($valid) {
                // Elimina todos los registros existentes en la tabla antes de comenzar a procesar los datos
                $stmt = $pdo->prepare("DELETE FROM tabla_medicamentos");
                $stmt->execute();

                $stmt = $pdo->prepare("ALTER TABLE tabla_medicamentos AUTO_INCREMENT = 1");
                $stmt->execute();

                foreach ($worksheet->getRowIterator() as $row) {
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(false);

                    $data = [];
                    foreach ($cellIterator as $cell) {
                        $data[] = $cell->getValue();
                    }

                    $clave = !empty($data[0]) ? $data[0] : '';
                    $descripcion = !empty($data[1]) ? $data[1] : '';
                    $existencia = !empty($data[2]) ? $data[2] : '0';
                    $cpm = !empty($data[3]) ? $data[3] : '0';
                    $meses_existencia = ($cpm != 0) ? round($existencia / $cpm) : 0;                        
                    $observaciones = !empty($data[5]) ? $data[5] : '';
                    $status = !empty($data[6]) ? $data[6] : '';
                
                    // Inserta un nuevo registro con los valores de $data
                    $stmt = $pdo->prepare("INSERT INTO tabla_medicamentos 
                        (clave, descripcion, existencia, cpm, meses_existencia, observaciones, status) 
                        VALUES 
                        (:clave, :descripcion, :existencia, :cpm, :meses_existencia, :observaciones, :status)");
                
                    $stmt->execute(
                        [
                            'clave' => $clave,
                            'descripcion' => $descripcion,
                            'existencia' => $existencia,
                            'cpm' => $cpm,
                            'meses_existencia' => $meses_existencia,
                            'observaciones' => $observaciones,
                            'status' => $status
                        ]
                    );
                
                    // Elimina las filas donde la clave esté vacía
                    $deleteStmt = $pdo->prepare("DELETE FROM tabla_medicamentos WHERE clave = ''");
                    $deleteStmt->execute();
                }


                // Genera el timestamp (fecha y hora actual)
                $timestamp = date('Y-m-d_H-i-s');

                // Crear el nuevo nombre del archivo
                $newFileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . $timestamp . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
                $uploadDir = '../../uploads/';
                $uploadFilePath = $uploadDir . $newFileName;

                // Mueve el archivo a la carpeta de destino
                try {
                    if (!rename($tempFilePath, $uploadFilePath)) {
                        throw new Exception("Error al mover el archivo a la carpeta de destino.");
                    }
                    $success = true; // La operación fue exitosa
                } catch (Exception $e) {
                    $error_message = "Error al mover el archivo: " . $e->getMessage();
                    throw new Exception($error_message);
                }
            }

        } catch (Exception $e) {
            // Maneja cualquier excepción que ocurra durante el procesamiento
            $error_message = "Error: " . $e->getMessage();

            // Elimina el archivo temporal si ocurre un error
            if (file_exists($tempFilePath)) {
                unlink($tempFilePath);
            }
        }
    } else {
        $error_message = "Error al mover el archivo subido a la carpeta temporal.";
    }
} else {
    $error_message = "Error en la subida del archivo: " . $_FILES['file']['error'];
}

// Verifica si el mensaje de error está vacío antes de redirigir
if (empty($error_message)) {
    $error_message = "Ocurrió un error desconocido.";
}

if ($success) {
    header('Location: ../../table.php?status=success');
} else {
    header('Location: ../../table.php?status=error&message=' . urlencode($error_message));
}
exit;
