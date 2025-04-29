<?php
function parOuImpar ($a) {
    return $a%2;
}

$valor = $_POST['valor'];
$calculo = parOuImpar ($valor);

if ($calculo == 0)
{
    echo "o numero $valor é: par";
}
else
{
    echo "o numero $valor é: impar";
}

?>