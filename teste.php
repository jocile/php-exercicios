<?php
//Entregador de delivery ganha 80 reais por dia porém tem as gorjetas dos clientes

$valorDia = 80;
$gorjetas = 40;
$diaria = $valorDia + $gorjetas;

echo "O valor total da diária é: $diaria <br>\n";

date_default_timezone_set('America/Fortaleza');
echo date('d/m/Y H:i:s');
?>