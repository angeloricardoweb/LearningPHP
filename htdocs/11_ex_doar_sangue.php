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
    $idade = 29;
    $peso = 92;

    $idadeMin = 16;
    $idadeMax = 69;
    $pesoMin = 50;

    if ($idade > $idadeMin && $idade < $idadeMax && $peso >= $pesoMin){
        echo 'Atende aos Requisitos';
    }else{
        echo 'Não Atende aos Requisitos';
    }


    ?>


</body>

</html>