<?php
//iterações
$frutas['cor'] = 'Amarela';
$frutas['sabor'] = 'Doce até demais';
$frutas['formato'] = 'Meio dificil de definir.';
$frutas['nome'] = 'Banana';
//echo ($frutas['nome']. ' é '. $frutas['sabor']);
foreach($frutas as $chaves => $frutas){
    echo("$chaves=>$frutas</br>");
}
?>