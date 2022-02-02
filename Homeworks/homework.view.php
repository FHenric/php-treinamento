<!-- EXERCICIO SOBRE MANIPULAÇÃO DE ARRAY SIMPLES -->

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
        
        <?php foreach($animais as $animal) : ?>

            <h2><?= $animal ?></h2>

        <?php endforeach; ?>

    </ul>
    
</body>
</html>