<?php
function mult($a, $b) {
    return ($a * $b);
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$total = mult($valor1, $valor2);

echo "A Multiplicação entre $valor1 e $valor2 é: $total";
?>