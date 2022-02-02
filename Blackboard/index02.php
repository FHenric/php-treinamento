<?php

$name = 'Filipe';
$hello = "Olá {$name}, ";

$num1 = 4;
$num2 = 4;

$sum = $num1 + $num2;

$sumText = "{$hello} {$num1} + {$num2} = {$sum} ";

//no final importamos a parte visual da página
require 'index.view.php';

?>