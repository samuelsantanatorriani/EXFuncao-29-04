<?php
function maiorNumero  ($a,$b,$c) {
    if($a > $b && $a > $c )
    {
        return "O Maior número é ".$a;
    }
    elseif($b > $a && $b > $c){
        return "O Maior número é ".$b;
    }
    elseif($c > $b && $c > $a)
    {
        return "O Maior número é ".$c;
    }
    else
    {
        return "Há valores repetidos";
    }
}

$v1 = $_POST['valor1'];
$v2= $_POST['valor2'];
$v3 = $_POST['valor3'];

$maior = maiorNumero ($v1, $v2, $v3);

echo "$maior";
?>