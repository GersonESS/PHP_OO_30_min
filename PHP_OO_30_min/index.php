<?php
class Produto{

    private $descricao;
    private $preco;

    public function getDetalhes(){
        return "O Produto {$this->descricao} custa {$this->preco} Reais";

    }
    public function setDescricao($valor){
        $this->descricao = $valor;
    }
    public function setPreco($valor){
        $this->preco = $valor;
    }
    public function getDescricao($valor){
        return $this->descricao;
    }
    public function getPreco($valor){
        return $this->preco;
    }
}
$p1 = new Produto;
$p1->setDescricao ("Livro");
$p1->setPreco (80);


//var_dump($p1);
echo $p1->getDetalhes();



?>