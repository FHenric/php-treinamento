<!-- UTILIZAÇÃO DE FUNÇÃO E MANIPULAÇÃO DE ARRAY -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <ul>
        <!-- TEMOS DUAS FORMAS DE UTILIZAR O FOREACH -->

        <!-- Esse metodo eu utilizaria para repetições que precise de um HTML muito verboso, 
        como um chart de produtos, cada chart vai ter uma infinidade de codigos HTML,
        o que poderia deixar tudo uma bagunça se fosse feito com o codigo anterior -->

        <?php foreach($names as $name) : ?>

            <li><?= $name ?></li>

        <?php endforeach; ?>

        <?php 
            //Esse metodo eu utilizaria para coisas simples de HTML,
            //pois é menos verboso e não fica muito bagunçado

            foreach($names as $name){
                echo "<li>$name</li>";
            };

        ?>
    </ul>
    
</body>
</html>