<?php
include 'conexion.php';

$cedula= $_REQUEST['cedula'];

$sqlSelect= "SELECT * FROM estudiantes WHERE est_cedula= '$cedula'";


$respuesta=$conn->query($sqlSelect);                                                                                                                                                                    
$result =array();
if ($respuesta->num_rows>0) {
    while ($filaestudiante =$respuesta->fetch_assoc()) {
        array_push($result,$filaestudiante);
    }
/*
} else {
    $result = "No hay estudiantes";
}

echo json_encode($result);*/
    
}else{

echo json_encode(array('estudiantes' => $resutl = []));
}
echo json_encode(array('estudiantes'=>$result));
?>
