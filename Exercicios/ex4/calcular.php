<?php
function converterParaCelsius  ($a) {
    return  $c = ($a - 32) / 1.8;
}

$v1 = $_POST['valor1'];

$convert = converterParaCelsius ($v1);

echo "A temperatura em Celsius é de ".$convert."°C";
?>