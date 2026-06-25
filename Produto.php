<?php

class Produto {
    private $codigo;
    private $nome;
    private $preco;
    private $estoque;

    public function exibirProduto() {
        echo $this->nome;
    }
}
?>