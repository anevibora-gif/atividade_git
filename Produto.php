<?php

class Produto {
    private $codigo;
    private $nome;
    private $preco;
    private $estoque;
    private $cargo;
    private $salario;

    public function exibirProduto() {
        echo $this->nome;
    }
}
?>