<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de Tipo</title>
</head>
<body>
    <?php
    // retorna o tipo de variavel
    $valor = 10;

    echo gettype($valor); //output = interger

    // conversão para float
    $valor2 = (float)$valor;

    echo '<br>';
    
    echo gettype($valor2);//output= double

    $valor3= (string)$valor;

    echo '<br>';

    echo gettype($valor3);//output = string

    $palavra = 'Olá php';

    $palavraBoleana  = (boolean)$palavra;

    echo '<br>';

    echo $palavraBoleana.'<br>'.gettype($palavraBoleana);//output = 1 boolean
    
    
    ?>
</body>
</html>