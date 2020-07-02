<?php

function exibeMensagem($mensagem){
    echo $mensagem.PHP_EOL;
}

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
if (3500 > $contasCorrentes['123.456.789-10']['saldo']){
    exibeMensagem('Você nao tem esse dinheiro para sacar');
}else{
    $contasCorrentes['123.456.789-10']['saldo'] -= 3500;
}

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular']. " " . $conta['saldo']);
}