<?php

$pizzas = 7;
$pessoas = 2;

$pedacosTotais = $pizzas * 8;

$pedacosConsumidos =  ( (int) ($pedacosTotais/$pessoas));
$sobras = $pedacosTotais - ($pedacosConsumidos * $pessoas);

echo "Each person gets ".$pedacosConsumidos." pieces of pizza, and there are ".$sobras." leftover pieces.";
