<?php 

$person = [
    'age' => 22,
    'hair' => 'blond',
    'career' => 'web developer'
];

//adicionando um atributo a mais no array associativo

$person['name'] = 'Filipe';

//fazendo a mesma coisa num array normal
$animals = ['dog', 'cat'];

$animals[] = 'pinto';

//Mas e se eu não tiver um array associativo, mas sim simples, como torno associativo?

//echo retorna uma string, geralmente, logo usaremos a função var_dump para ver algo parecido com um objeto;

//<pre> é usado como uma tag para formatar o arr associativo
//die é uma função que faz com que tudo que for ecoado depois dessa função, não aparecerá na tela, semelhante ao break do switch()
echo '<pre>';
die(var_dump($person));
echo '</pre>';

require 'index05.view.php'

?>