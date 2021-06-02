<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritiméticos</title>
</head>

<body>
    <?php

    $num1 = 10;
    $num2 = 2;

    $soma = $num1 + $num2;

    $sub = $num1 - $num2;

    $div = $num1 / $num2;

    $mult = $num1 * $num2;

    $resto = $num1 % $num2;

    //a partir do php 5.6 podemos usar ** em vez de pow(number $base , number $exp) : number    
    $expo = $num1 ** $num2;

    echo 'A soma entre ' . $num1 . ' e ' . $num2 . ' é: ' . $soma;

    echo '<br>A subtração entre ' . $num1 . ' e ' . $num2 . ' é: ' . $sub;

    echo '<br>A divisão entre ' . $num1 . ' e ' . $num2 . ' é: ' . $div;

    echo '<br>A multiplicação entre ' . $num1 . ' e ' . $num2 . ' é: ' . $mult;

    echo '<br>o resto da divisão entre ' . $num1 . ' e ' . $num2 . ' é: ' . $resto;

    echo '<br>' . $num1 . ' elevado a ' . $num2 . ' é: ' . $expo;



    ?>
</body>

</html>