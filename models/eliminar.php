<?php
include 'conexion.php';
$cedula = $_POST['est_cedula'];
$sqlEliminar =  "DELETE FROM estudiantes WHERE est_cedula = '$cedula'";
if($mysqli->query($sqlEliminar) === TRUE){
  echo json_encode(array('OK' => true));
  }else{
  echo json_encode(array('OK' => false));
}