<?php
/* ------------MODO SIMPLES DE FAZER ARRAY ASSOCIATIVO USANDO FOR E FOREACH----------------------
$conta01 = [
    'titular' => 'Douglas',
    'saldo' => 2500
];

$conta02 = [
    'titular' => 'Francyellen',
    'saldo' => 6000
];

$conta03 = [
    'titular' => 'Valdir',
    'saldo' => 12000
];



echo $conta03['titular']. PHP_EOL;



for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}

foreach ($contasCorrentes as $conta){
    echo $conta['titular'].PHP_EOL;
}
----------------------------------------------------------------------------------------------------
*/

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Douglas',
        'saldo' => 2500
    ],
    12345678911 => [
        'titular' => 'Francyellen',
        'saldo' => 6000
    ],
    12345678912 => [
        'titular' => 'Valdir',
        'saldo' => 12000
    ]
];
foreach ($contasCorrentes as $cpf => $conta){
    echo  $conta['titular'].PHP_EOL;
    echo $cpf.PHP_EOL;
}



