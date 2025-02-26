<?php
    class Produtos{
        public $nomeProd;
        public $preco;
        public $quantEstoque;


        function __construct(string $nomeProd, int $preco, int $quantEstoque){
            $this->nomeProd = $nomeProd;
            $this->preco = $preco;
            $this->quantEstoque = $quantEstoque;
        }


        function produto(){
            $produtosEstoque = [];
            
            array_push($produtosEstoque, [$this->nomeProd, $this->preco, $this->quantEstoque]);
            print_r($produtosEstoque);
        }
    }