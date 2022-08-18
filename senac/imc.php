<?php
function imc($altura, $peso){
    $imc = $peso/($altura*$altura);
    return $imc;
}
echo (imc(1.83,75.6));
?>