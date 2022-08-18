<?php
class pessoa{
    public $nome;
    public $idade;

    public function falar(){
        echo 'falou';
    }
}

$gabriel = new pessoa();
$gabriel->nome = 'Gabriel Victor Lima Silva';
$gabriel->idade = 17;
$gabriel -> falar();
var_dump($gabriel);
?>