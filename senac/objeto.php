<?php
include_once 'atividadeclass.php';
include_once 'atividadedeclass2.php';
$nomedapessoa = new pessoa;
$nomedapessoa = new conta;
$nomedapessoa -> nome = "Gabriel Victor";
$nomedapessoa -> altura = 1.84;
$nomedapessoa -> nascimento = '22.08.2005';
$nomedapessoa -> idade = "17";
$nomedapessoa -> agencia = 1762-0;
$nomedapessoa -> Saldo = 1200;
$nomedapessoa -> retirar(100);
?>