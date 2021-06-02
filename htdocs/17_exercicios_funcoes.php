<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular imposto de renda</title>
</head>

<body>

    <h1>Calculo do imposto de renda!</h1>



    <?php

    function calcularImpostoRenda($salario)
    {
        if ($salario < 1903) $imposto = 0;
        if ($salario >= 1903) $imposto = $salario * 0.075;
        if ($salario >= 4664) $imposto = $salario * 0.275;

        return $imposto;
    }

    $imposto = calcularImpostoRenda(1910);

    echo 'o imposto a ser pago é: ' . $imposto;

    ?>


</body>

</html>