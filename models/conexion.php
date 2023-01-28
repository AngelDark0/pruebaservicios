<?php

$DB_HOST="containers-us-west-162.railway.app";
$DB_PORT=6667;
$DB_DATABASE="railway";
$DB_USERNAME="root";
$DB_PASSWORD="nsrllyYfwl8cZD1wZ2VW";

$conn= mysqli_connect();
$mysqli= new mysqli($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE,$DB_PORT);
 if(!$mysqli)
 {
    die("Error". mysqli_connect_error());

 }

 ?>
