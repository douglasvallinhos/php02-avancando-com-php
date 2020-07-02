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
// PASSANDO A CONTA POR REFERENCIA COM & COMERCIAL
function titularLetraMaiscula(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}