<?php
$nota1 = array(
    5,
    10,
    4
);
$media = ($nota1[0]+$nota1[1]+$nota1[2])/3;
if ($media >= 6.0){
    echo("Aprovado</br>");
}else{
    echo("Reprovado</br>");
}
echo("Nota final: $media")
?>