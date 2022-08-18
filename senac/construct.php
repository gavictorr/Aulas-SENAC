<?php
class pessoa{
    public function __construct($NOME, $altura, $idade, $Nascimento, $Escolaridade, $Salario){
        $this -> NOME = $NOME;
        $this -> Altura = $altura;
        $this -> Idade = $idade;
        $this -> Nascimento = $Nascimento;
        $this -> Escolaridade = $Escolaridade;
        $this -> Salario = $Salario;
    }

    public function getNome(){
        return $this -> NOME;
    }
    public function __destruct()
    {
        $this -> NOME;
    }
}
$login = new pessoa('Pedro', 1.84, 17, 22, 'Mestrado', 1200);
$login -> getNome();
echo $login->getNome();


?>