<?php
function passwordaleatorio()
{
    
    $fin=15;
    $variableauxiliar = "";
    $texto = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%&*";
    $max = strlen($texto)-1;
    for($i = 0; $i < $fin; $i++){
        $variableauxiliar .= substr($texto, mt_rand(0,$max), 1);
    }
    return $variableauxiliar;
}

echo passwordaleatorio();

?>
