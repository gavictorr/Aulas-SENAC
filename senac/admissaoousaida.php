<?php
$salario = 10020;
$tempo_servico = 12;
$tem_reclamacoes = true;
if($salario < 10000){
    if($tempo_servico >= 12){
        if($tem_reclamacoes == false){
            echo("Parabéns, foi promovido!");
        }
    }
}
if($salario >= 10000){
    if($tempo_servico>=12){
        if($tem_reclamacoes){
            echo ("Não foi promovido!");
        }
    }
}
?>