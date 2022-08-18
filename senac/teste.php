<?php
    $n=3;
    $fatorial=1;
    $conta=1;

    while($conta<=$n){
    $fatorial *= $conta;
    $conta++;
    } 
    echo $fatorial;
?>