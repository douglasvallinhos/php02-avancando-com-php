<?php
require_once 'funcoes.php';
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Douglas',
        'saldo' => 3200
    ],
    '123.456.789-11' => [
        'titular' => 'Francyellen',
        'saldo' => 8000
    ],
    '123.456.789-12' => [
        'titular' => 'Valdir',
        'saldo' => 3900
    ]
];
$contasCorrentes['123.456.789-10'] =  sacar($contasCorrentes['123.456.789-10'] , 2000);
$contasCorrentes['123.456.789-10'] =  depositar($contasCorrentes['123.456.789-10'] , 800);
titularLetraMaiscula($contasCorrentes['123.456.789-10']);

//COMO REMOVER UM ITEM \/
unset($contasCorrentes['123.456.789-12']);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}

?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf;?></h3>
        </dt>
        <dd>
            Saldo: <?=$conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
