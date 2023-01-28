<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Request-with, Content-type, Accept, Authorization');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexion.php';

$sqlselect = "SELECT * FROM estudiantes";
$respuesta = $conn->query($sqlselect);

$result = array();

if ($respuesta->num_rows > 0) {
    while ($fila = $respuesta->fetch_assoc()) {
        array_push($result, $fila);
    }
} else {
    $result = "No hay estudiantes";
}

echo json_encode($result);
?>