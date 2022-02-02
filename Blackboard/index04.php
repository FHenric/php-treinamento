<?php

// UTILIZAÇÃO DE FUNÇÃO FOREACH E MANIPULAÇÃO DE ARRAY

$pet1 = 'Manuel';
$names = ['Filipe', 'Leticia', 'Miguel', $pet1];
$greeting = 'Arrays';

foreach($names as $name) {
    echo "$name, ";
};

require 'index04.view.php'
?>