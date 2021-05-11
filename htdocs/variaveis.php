<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //string
    $nome='Angelo Ricardo';

    //int
    $idade=26;
    
    //float
    $peso=72.4;

    //boolean
    $fumante=true;
    
    
    ?>
    <h1>Ficha Cadastral</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Fumante: <?= $fumante ?></p>
    
</body>
</html>