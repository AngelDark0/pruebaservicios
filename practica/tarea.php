<?php

$nombre= $_GET["nombre"];
 echo($nombre);
$data = file_get_contents("personas.json");
$personas= json_decode($data);

foreach ($personas as $persona ) {
    echo '<pre>';
    if($persona->nombre == $nombre){
        print_r($personas[1]->direcion);
        echo '<pre>';
        print_r($personas[1]->telefono);
    }
    
    echo '<pre>';
}


/*
print_r($personas[1]->direcion);
echo '<pre>';
print_r($personas[1]->telefono);*/