<?php
$servername="localhost";
$username="root";
$password="";
$dbname="soa";

$conn= mysqli_connect($servername, $username, $password, $dbname);
$mysqli= new mysqli($servername,$username, $password,$dbname);
 if(!$mysqli)
 {
    die("Error". mysqli_connect_error());

 }

 ?>
