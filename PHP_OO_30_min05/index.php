<?php
class Produto{

    public function __construct($descricao, $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

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
$p1 = new Produto("Livro" , 78);


var_dump($p1);
//<br></br>
echo $p1->getDetalhes();



?>