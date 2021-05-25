<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        OPERADORES DE COMPARACAÇÃO</h1>
    <?php

    if (10 === 10 && 5 === '5') {
        echo 'true';
    } else {
        echo 'false';
    }
    
    echo '<br/>';

    if(20 !== 10 || 40 > 2){
        echo 'true';
    }

    echo '<br/>';

    if(5<>2 XOR 2==2){
        echo 'true';
    }else{
        echo 'false';
    }


    ?>

</body>

</html>