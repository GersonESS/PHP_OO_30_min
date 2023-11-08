<?php
class Produto{

    public $descricao;
    public $preco;

    public function getDetalhes(){
        return "O Produto {$this->descricao} custa {$this->preco} Reais";

    }
    
}
$p1 = new Produto;
$p1->descricao = ("Livro");
$p1->preco =  50;


var_dump($p1);
echo $p1->getDetalhes();



?>