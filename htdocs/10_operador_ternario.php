<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    $usuario_possui_cartao_loja=false;
    $possui =  $usuario_possui_cartao_loja ? 'sim' : 'nao'
       
    ?>

    <p>Usuairo possue cartao da loja? <?= $possui ?></p>


</body>

</html>