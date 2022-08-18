<?php
class pessoa{
    public $código;
    public $nome;
    public $altura;
    public $idade;
    public $nascimento;
    public $escolaridade;
    public $salario;

    function crescer(){
        echo("cresceu!");
    }
    function formar(){
        echo("formou!");
    }
    function envelhecer(){
        echo("envelheceu.");
    }
}
$usuario1 = new pessoa;
$usuario1 -> nome = "Gabriel";
$usuario1 -> idade = 17;
?>