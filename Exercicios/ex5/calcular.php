<?php
function validarIdade   ($a) {
    if($a < 18)
    {
        return "Você é Menor de idade";
    }
    elseif($a >= 60){
        return "Você é idoso";
    }
    else
    {
        return "Você é Adulto";
    }
}

$v1 = $_POST['valor1'];


$idade = validarIdade  ($v1);

echo "$idade";
?>