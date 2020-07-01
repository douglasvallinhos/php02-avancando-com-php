<?php
$listaDeNumeros = [17, 20, 44, 48];
$segundo = $listaDeNumeros[1];
echo $segundo.PHP_EOL;

// count($listaDeNumeros) = vai retornar o numero total desse array.

for ($i = 0;$i < count($listaDeNumeros); $i++){
    echo "$listaDeNumeros[$i]".PHP_EOL;
}
