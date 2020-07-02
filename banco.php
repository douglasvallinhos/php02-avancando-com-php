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


foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}