<?php

require_once "Produto.php";

class Pedido {
    public $produto;
    public $quantDesejada;
    public $precoTotal;

    function __construct(Produtos $produto, int $quantDesejada) {
        $this->produto = $produto;
        $this->quantDesejada = $quantDesejada;
        $this->precoTotal = 0;
    }

    function pedido() {
        if ($this->quantDesejada <= $this->produto->quantEstoque) {
            echo "{$this->produto->nomeProd} foi inserido na sua sacola. \n";
            require_once "Pagamento.php";
        } else {
            echo "{$this->produto->nomeProd} não adicionado à sacola. Estoque insuficiente. \n";
        }
    }
}