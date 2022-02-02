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
        <!-- Essa é a forma mais adequada de conseguir pegar a key e o value de um "objeto" no php -->
        <?php foreach($person as $feature => $value) : ?>
            <li><?= "$feature: $value" ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>