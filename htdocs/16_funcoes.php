<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
</head>

<body>

    <?php

    function msg()
    {
        echo 'Bem vindo às Funções';
    }

    function calcularAreaTerreno($largura, $comprimento)
    {

        $area = $largura * $comprimento;

        return $area;
    }

    

    echo msg();

    echo '<br>a area é ' . calcularAreaTerreno(2, 5) . ' metros';

    ?>

</body>

</html>