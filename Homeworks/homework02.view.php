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
        
        <?php foreach($notas as $aluno => $notas) : ?>

            <h2><?= "Aluno: $aluno" ?></h2>
            <h3><?= "Nota final: " . $notas["nota-final"] ?></h3>

        <?php endforeach; ?>

    </ul>
    
</body>
</html>