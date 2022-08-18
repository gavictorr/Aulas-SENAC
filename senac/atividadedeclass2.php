<?php
class conta{
    public $Agência;
    public $Codigo;
    public $Datadeabertura;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelar;

    

    function retirar($valor=0){
        global $Saldo;
        $Saldo -= $valor;
        echo("Foram Retirados {$valor}R$ da conta, resultando num total de $Saldo");
    }
    function depositar($valor=0){
        global $Saldo;
        $Saldo += $valor;
        echo("Foram adicionados {$valor}R$ da conta, resultando num total de $Saldo");
        
    }
    function obter_saldo(){
        global $Saldo;
        echo ("{$Saldo}");
    }
}
    $usuario1 = new conta;
    $usuario1 -> Saldo = 1200;
    

?>