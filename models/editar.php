<?php
 header('Acces-Control-Allow-Origin:*');
 header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST, GET, OPTIONS,PUT, DELETE,REQUEST');
 
 include 'conexion.php';

 $cedula=$_POST['est_cedula'];
$nombre = $_POST['est_nombre'];
$apellido = $_POST['est_apellido'];
$telefono = $_POST['est_telefono'];
$direccion = $_POST['est_direccion'];

$sqlUpdate = "UPDATE estudiantes SET est_nombre='$nombre',
                                     est_apellido='$apellido',
                                     est_telefono='$telefono',
                                     est_direccion='$direccion'
                                    WHERE  est_cedula='$cedula'";

if($mysqli->query($sqlUpdate)=== TRUE){
    //g4
    echo json_encode('se actualizao');
    //echo json_encode( array("OK"=>true));
}
else{
    //echo json_encode(array( "OK" => false, 'errorMSG' => $sqlUpdate.$mysqli->error));

    echo json_encode('error');

}
 $mysqli->close();
