<?php
function sacar(array $conta,float $valor): array {
    if($valor > $conta['saldo']){
        exibeMensagem("Você não pode Sacar");
    }else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
}
function depositar(array $conta, float $valor): array {
    if($valor < 0){
        exibeMensagem("Não é possivel depositar valor negativo");
    }else{
        $conta['saldo'] += $valor;
    }
    return $conta;
}

function exibeMensagem(string $mensagem){
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
$contasCorrentes['123.456.789-10'] =  sacar($contasCorrentes['123.456.789-10'] , 2000);
$contasCorrentes['123.456.789-10'] =  depositar($contasCorrentes['123.456.789-10'] , 800);


foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}