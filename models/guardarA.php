<?php


header('Acces-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS,PUT DELETE');

include 'conexion.php';

$cedula=$_POST['est_cedula'];
$nombre = $_POST['est_nombre'];
$apellido = $_POST['est_apellido'];
$telefono = $_POST['est_telefono'];
$direccion = $_POST['est_direccion'];

$sqlInsert = "INSERT INTO estudiantes ( est_cedula, est_nombre, est_apellido, est_telefono, est_direccion) VALUE ('$cedula', '$nombre','$apellido','$telefono','$direccion')";
try {
    if($mysqli->query($sqlInsert)=== TRUE){
        echo json_encode(array("OK"=>true));
    }
    else{
        echo json_encode(array("OK"=> false, "errorMSG".$sqlInsert.$mysqli->error));
    
    }
    
} catch (\Throwable $th) {
    echo json_encode(array("OK"=> false, "errorMSG"=>$th));
}

 $mysqli->close();

