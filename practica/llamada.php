<?php
$data = file_get_contents("personas.json");
$personas= json_decode($data);

foreach ($personas as $persona ) {
    echo '<pre>';
    print_r($persona);
    echo '<pre>';
}

print_r($personas[1]->direcion);
echo '<pre>';
print_r($personas[1]->telefono);

