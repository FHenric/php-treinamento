<!-- EXERCICIO SOBRE MANIPULAÇÃO DE ARRAY ASSOCIATIVA -->

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
        
        <?php foreach($tasks as $task => $description) : ?>
            <ul> 
                <!-- ucwords é uma função que deixa as palavras com a letra inicial maiuscula -->
                <h3><?= ucwords($description['title']) ?></h3>
                <li>Who's gonna do: <?= $description['assigned_to'] ?></li>
                <li>Until to: <?= $description['due'] ?></li>
                <?php if( $description['checked'] == true ) {
                    echo '<input type="checkbox" name="checked" checked> Done?</input>';
                    } else {
                        echo '<input type="checkbox" name="checked"> Done?</input>';
                    }
                ?>
            </ul>

        <?php endforeach; ?>
    
</body>
</html>