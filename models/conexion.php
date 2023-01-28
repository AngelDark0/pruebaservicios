<?php
$host="34.170.159.105";
$port=3306;
$socket="";
$user="bduser";
$password="Gyuphjqa";
$dbname="soa";

$conn = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
$mysqli= new mysqli($host, $user, $password, $dbname, $port, $socket);
 if(!$mysqli)
 {
   die ('Could not connect to the database server' . mysqli_connect_error());

 }else{
   echo json_encode("true");
 }



 ?>
