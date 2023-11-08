<?php
class Fabricante{
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}
class Produto{

    private $descricao;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $preco, Fabricante $fabricante)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }


    public function getDetalhes(){
        return "O Produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";

    }
    
}
$f1 = new Fabricante("Editora LE");
$p1 = new Produto("Livro" , 789, $f1);


var_dump($p1);
//<br></br>
echo $p1->getDetalhes();



?>