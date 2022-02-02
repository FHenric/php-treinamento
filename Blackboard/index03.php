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
    <header>
        <h1>
            <?php 
                $greeting = 'Hello, ';
                echo 'Hello World';
            ?>
        </h1>

        <p>
            <?php 
                //o nome da 'variavel' encontrada no url vai dentro desses colchetes + aspas; ex: '/?key=value'
                $name = htmlspecialchars($_GET['nome']);
                echo $greeting . $name;
            ?>
        </p>
    </header>
    
</body>
</html>