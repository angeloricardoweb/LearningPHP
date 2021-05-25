<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php

    $usuario_possui_cartao_loja = false;
    $valor_compra = 60;
    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($usuario_possui_cartao_loja || $valor_compra >= 100) {
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    }



    ?>
    <h1>Detalhes do Pedido</h1>
    <p>Possui cartão da loja?</p>
    <?php
        if($usuario_possui_cartao_loja){
            echo 'sim';
        }else{
            echo 'não';
        }
    
    ?>
    <p>
   
    <p>Valor da Compra: <?= $valor_compra?> </p>

    <p>Recebeu desconto no frete?
    <?php
    
        if($recebeu_desconto_frete){
            echo'sim';
        }else{
            echo 'não';
        }

    ?>    
    </p>

    <p>Valor final do frete:<?= $valor_frete?> </p>
    

</body>

</html>