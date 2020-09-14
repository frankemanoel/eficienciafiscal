<?php

$json_file = file_get_contents(
     "http://api.open-notify.org/astros.json");

$json_str = json_decode($json_file);

$itens = $json_str->people;
$contador = 0;
foreach ( $itens as $e ) 
    { 
    
    echo "$e->name - ";
    echo "$e->craft \n";

    $contador++;

    }
    echo "Existem ".$contador." pessoas no espaço neste momento!"; 
?>
