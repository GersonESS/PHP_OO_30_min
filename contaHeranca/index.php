<?php
class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;


public function __construct($agencia, $conta, $saldo){
    $this->agencia = $agencia;
    $this->conta = $conta;
    $this->saldo = $saldo;
}
public function getDetalhes(){
    return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";

}
public function depositar($valor){
    $this->saldo += $valor;
    echo "Deposito de: {$valor} | Saldo Atual : {$this->saldo}<br /> ";

}
}
class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo Atual : {$this->saldo}<br /> ";
        else:
            echo "Saque Não autorizado| Saldo atual: {$this->saldo}<br />";
        endif;    

    }

}
$c1 = new Poupanca(100, 2586, 5000);

$c1->depositar(1800);
$c1->saque(800);
echo $c1->getDetalhes();
?>