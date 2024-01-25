<?php

$valorAplicado = 30000;
$referencia = $valorAplicado;
$porcentagem = 15.30;
$porcReal = $porcentagem/100;
$periodos = 3;

for($i = 1; $i <= $periodos; $i++){
    $valorAplicado += $valorAplicado*$porcReal;
    echo 'O rendimento acumulado no ' . $i . 'º ciclo é ' . $valorAplicado - $referencia . PHP_EOL;
    echo 'O valor acumulado no ' . $i . 'º ciclo é ' . $valorAplicado . PHP_EOL;
};
echo 'Saldo final obtido é ' . $valorAplicado . PHP_EOL;