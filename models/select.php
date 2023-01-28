<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Request-with, Content-type, Accept, Authorization');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
include 'conexion.php';
   
$sqlSelect="SELECT * FROM estudiantes";
$respuesta=$conn->query($sqlSelect);
$result=array();
if ($respuesta->num_rows>0) {
    while ($filaestudiante =$respuesta->fetch_assoc()) {
        array_push($result,$filaestudiante);
    }
}else{
    echo json_encode(array('estudiantes'=> $result=[]));
}


echo json_encode(array('estudiantes'=> $result));

