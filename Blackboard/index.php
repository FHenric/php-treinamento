<?php

//  VARIÁVEIS E SEPARAÇÃO DE LÓGICA E VISUAL

$greeting = 'World!!';
$grau = 'Donova!';

// Forma mais recomendavel de se concatenar:
// Dica: chavear a variavel é opcional, porem é uma boa prática para deixar o codigo mais legivel
echo "Hello, {$greeting}";

// Eu tambem poderia fazer isso para concatenar: 
echo ' Hello, ' . $grau;

//-----
$name = 'Filipe';
$hello = "Olá {$name}, ";

$num1 = 4;
$num2 = 4;

$sum = $num1 + $num2;

echo "{$hello} a soma de {$num1} e {$num2} é {$sum} ";

//no final importamos a parte visual da página
require 'index.view.php';

?>



<?php foreach($tasks as $task ) : ?>
            
            <?php foreach($tasks as $task ) : ?>

                <ul> 
                    <h3></h3>
                    <li></li>
                </ul>

            <?php endforeach; ?>

        <?php endforeach; ?>